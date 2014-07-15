<?php

namespace DevTics\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DevTicsHelloBundle:Default:index.html.twig', array('name' => $name));
    }
    public function ttAction(){
//        $r =  new \Symfony\Component\HttpFoundation\Response();
//        $r->setContent('Hola Mundo xD');
     //   return $this->render('DevTicsHelloBundle::');
    }
}
