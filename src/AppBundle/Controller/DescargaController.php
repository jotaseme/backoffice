<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Usuario;
use AppBundle\Entity\Descarga;
//use Symfony\Component\HttpFoundation\Request;

class DescargaController extends Controller
{
    /**
     * @Route("/asociados/{id_asociado}/usuarios/{id_usuario}/descargas", name="descargas_usuario")
     */
    public function descargasUsuarioAction($id_usuario)
    {
        $usuario = $this->getDoctrine()
            ->getRepository(Usuario::class)
            ->find($id_usuario);
        $descargas = $this->getDoctrine()
            ->getRepository('AppBundle:Descarga')
            ->findAllOrderedByDate($id_usuario);
        if(empty(!$descargas)){
            $historico = true;
            $last_element = end($descargas)->getFecha()->format('Y');
        }else $historico = false;



        if(!$usuario){
            throw $this->createNotFoundException(
                'Error en la busqueda de las descargas del usuario '
            );
        }


        $date=new \DateTime();
        $this->actMonth = $date->format('m');
        $this->actYear = $date->format('Y');
        $current_month=$this->actMonth;
        $current_year = $this->actYear;

        $contador_mensual=array();
        for($i=1;$i<=$current_month;$i++)
        {
            $contador = (int)$this->getDoctrine()
                ->getRepository('AppBundle:Descarga')
                ->count_downloads_current_year($i,$current_year,$id_usuario);
                if(!$contador){
                    array_push($contador_mensual,0 );
                }else{
                    array_push($contador_mensual,$contador );
                }

        }
        $contador_anual = array();
        if($historico)
        {
            for($i=$last_element;$i<$current_year;$i++)
            {
                $contador_aux = (int)$this->getDoctrine()
                    ->getRepository('AppBundle:Descarga')
                    ->count_downloads_history($i,$id_usuario);
                if(!$contador_aux){

                }else{

                    $anual = array(
                        (string)$i,
                        $contador_aux
                    );
                    array_push($contador_anual,$anual);
                }
            }
        }
        $contador_anual = json_encode($contador_anual);


        return $this->render('default/descargas_usuario.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),'contador_anual'=>$contador_anual,
            'contador'=>$contador_mensual,'usuario' => $usuario->getLogin(),'descargas'=>$descargas
        ]);
    }

}
