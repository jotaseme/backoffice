<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class ComprabuenaController extends Controller
{

    /**
     * @Route("/compra", name="compra")
     */
    public function indexAction()
    {
        //$id=10;
        //$prestashop = $this->container->get('iq2i_prestashop_web_service')->getInstance();
        //$result = $prestashop->get(array(
          //  "resource" => "orders",
          //  "display"  => '[id,id_customer,id_carrier,reference]'
        //));

        //$pedidos = json_encode($result->orders);


        //$pedidos_array = json_decode($pedidos,true);
        //print_r($pedidos_array);
        //$cont=0;
        //foreach($pedidos_array as $pedido=>$key){
        //   var_dump($key[$cont]);
        //   $cont++;
        //   break;
        //}

        //die();


        //return $this->render('default/comprabuena.html.twig', [
        //   'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        //   'pedidos'=>$pedidos_array
        //]);



    }
}
