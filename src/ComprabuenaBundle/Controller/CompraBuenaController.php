<?php

namespace ComprabuenaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CompraBuenaController extends Controller
{
    /**
     * @Route("/comprabuena", name="comprabuena")
     */
    public function indexAction()
    {
        $orders = $this->get('doctrine')
            ->getRepository('ComprabuenaBundle:Orders', 'comprabuena')
            ->findAll();


        return $this->render('default/comprabuena.html.twig', [
           'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
           'pedidos'=>$orders
        ]);
    }
}
