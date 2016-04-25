<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ExpovirtualController extends Controller
{
    /**
     * @Route("/expovirtual", name="expovirtual")
     */
    public function indexAction()
    {
        // Get current year
        $date=new \DateTime();
        $this->actYear = $date->format('Y');
        $current_year = $this->actYear;

        //From 2014 to current year
        $categorias = array();
        $descargas= array();
        $array_es=array();
        $array_pt=array();
        for($a=2014;$a<=$current_year;$a++)
        {
            // Count 'ES' files from 2014 to 2016
            $contador_es = (int)$this->getDoctrine()
                ->getRepository('AppBundle:FicheroVirtual')
                ->count_files($a,'ES');
            array_push($array_es, $contador_es);

            // Count 'PT' files from 2014 to 2016
            $contador_pt = (int)$this->getDoctrine()
                ->getRepository('AppBundle:FicheroVirtual')
                ->count_files($a,'PT');
            array_push($array_pt, $contador_pt);

            // Count total downloads per year since 2014
            $contador_descargas = (int)$this->getDoctrine()
                ->getRepository('AppBundle:DescargaVirtual')
                ->count_downloads($a);
            array_push($descargas, $contador_descargas);

            // Categories for x-axis
            array_push($categorias,$a);
        }

        // Start date
        $start_date = date('Y-m-d', strtotime("2014-09-01"));
        // End date
        $end_date = new \DateTime();
        $end_date = $end_date->format('Y-m-d');
	$end_date = date ("Y-m-d", strtotime("+2 year", strtotime($end_date)));


        $fin_feria_2014 = date('Y-m-d', strtotime("2014-11-05"));
        $inicio_feria_2015 = date('Y-m-d', strtotime("2015-03-09"));

        $fin_feria_2015 = date('Y-m-d', strtotime("2015-04-14"));
        $inicio_feria_2016 = date('Y-m-d', strtotime("2016-04-21"));
	$fin_feria_2016 = date('Y-m-d', strtotime("2016-06-05"));

        $var = 0;
        $array_evolucion = array();
        $newDate = date("d-m-Y", strtotime($start_date));

        while (strtotime($start_date) <= strtotime($end_date)) {

            // Check if date it's between ExpoCecofersa. If so, count = 0
            if((($start_date > $fin_feria_2014) && ($start_date < $inicio_feria_2015)) || (($start_date > $fin_feria_2015) && ($start_date < $inicio_feria_2016)) || ($start_date > $fin_feria_2016))
            {
                $var = 0;
		
                array_push($array_evolucion,[strtotime($newDate)*1000, $var]);

            }else{
                // Get the download amount for each ExpoCecofersa
                $var = $var + (int)$this->getDoctrine()
                    ->getRepository('AppBundle:DescargaVirtual')
                    ->count_downloads_expo($start_date);
                array_push($array_evolucion,[strtotime($newDate)*1000, $var]);

            }

            $start_date = date ("Y-m-d", strtotime("+1 day", strtotime($start_date)));
            $newDate = date("d-m-Y", strtotime($start_date));
        }
	
	
        return $this->render('default/expovirtual.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'categorias'=>$categorias,
            'array_es'=>$array_es,
            'descargas'=>$descargas,
            'array_pt'=>$array_pt,
            'evolucion'=>$array_evolucion
        ]);
    }

    /**
     * @Route("/expovirtual/ofertas", name="ofertas_expovirtual")
     */
    public function ofertasAction()
    {


        return $this->render('default/expovirtual.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),

        ]);
    }
}
