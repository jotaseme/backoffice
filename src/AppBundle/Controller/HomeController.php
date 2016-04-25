<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {

        $count_asociados = $this->getDoctrine()
            ->getRepository('AppBundle:Asociados')
            ->count();

        if (!$count_asociados) {
            throw $this->createNotFoundException(
                'Error en la busqueda de asociados '
            );
        }

        $count_proveedores = $this->getDoctrine()
            ->getRepository('AppBundle:Proveedores')
            ->count();

        if (!$count_proveedores) {
            throw $this->createNotFoundException(
                'Error en la busqueda de proveedores '
            );
        }

        $count_ficheros = $this->getDoctrine()
            ->getRepository('AppBundle:Fichero')
            ->count();

        if (!$count_ficheros) {
            throw $this->createNotFoundException(
                'Error en la busqueda de proveedores '
            );
        }


        $date=new \DateTime();

        $this->actYear = $date->format('Y');
        $current_year = $this->actYear;

        $serie = array();
        for($a=2012;$a<=$current_year;$a++)
        {
            $array=array();
           
            for($i=1;$i<=12;$i++)
            {
                $contador = (int)$this->getDoctrine()
                    ->getRepository('AppBundle:Descarga')
                    ->count_downloads($i,$a);
                array_push($array,[strtotime('02-'.$i.'-2014') * 1000, $contador]);
            }


            $serie_aux = array(
                'name'=>"Descargas ".$a,
                'data'=>$array
            );
            array_push($serie,$serie_aux);

            //print_r(json_encode($serie));
            //die();
        }
        return $this->render('default/home.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'count_asociados'=>$count_asociados,
            'count_proveedores'=>$count_proveedores,
            'count_ficheros'=>$count_ficheros,
            'series_historico'=>$serie
        ]);
    }
}
