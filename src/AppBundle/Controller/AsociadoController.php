<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Asociados;
//use Symfony\Component\HttpFoundation\Request;

class AsociadoController extends Controller
{
    /**
     * @Route("/asociados", name="asociados")
     */
    public function indexAction()
    {
        $asociados = $this->getDoctrine()
            ->getRepository('AppBundle:Asociados')
            ->findAllOrderedByName();

        if (!$asociados) {
            throw $this->createNotFoundException(
                'Error en la busqueda de asociados '
            );
        }

        $contador_pt = (int)$this->getDoctrine()
        ->getRepository('AppBundle:Asociados')
        ->count_pais('PT');

        $contador_sp = (int)$this->getDoctrine()
            ->getRepository('AppBundle:Asociados')
            ->count_pais('ES');



        $total = $contador_pt + $contador_sp;

        $porcen_sp = round(($contador_sp * 100)/$total,2);
        $porcen_pt = round(($contador_pt * 100)/$total,2);

        return $this->render('default/asociados.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'asociados'=>$asociados,
            'cont_sp'=>$contador_sp,
            'cont_pt'=>$contador_pt,
            'porcen_sp'=> $porcen_sp,
            'porcen_pt'=> $porcen_pt
        ]);
    }

    /**
     * @Route("/asociados/{id_asociado}", name="detalle_asociado")
     */
    public function detalleAsociadoAction($id_asociado)
    {
        $asociado = $this->getDoctrine()
            ->getRepository(Asociados::class)
            ->find($id_asociado);
        if(!$asociado){
            throw $this->createNotFoundException(
                'Error en la busqueda del asociado '
            );
        }
        return $this->render('default/asociado.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'asociado'=>$asociado
        ]);
    }
}
