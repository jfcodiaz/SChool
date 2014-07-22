<?php

namespace DevTics\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    { //coment
        return $this->render('DevTicsHelloBundle:Default:index.html.twig', [
            'name' => $name,
            'articles' => [ 
                [
                    'title' => 'titulo del articulo',
                    'authorName' => 'autor',
                    'body' =>  'articulo '
                ],
                [
                    'title' => 'titulo del articulo1',
                    'authorName' => 'autor',
                    'body' =>  'articulo '
                ],
                [
                    'title' => 'titulo del articulo2',
                    'authorName' => 'autor',
                    'body' =>  'articulo '
                ],
                [
                    'title' => 'titulo del articulo3',
                    'authorName' => 'autor',
                    'body' =>  'articulo '
                ],
            ]
        ]);
    }
    
    public function recentArticlesAction ($max) {
        $i = 0;
        return $this->render('DevTicsHelloBundle:Pruebas:recentList.html.twig', [
            'articles' => [ 
                [
                    'slug' => $i++,
                    'title' => 'titulo del articulo db',
                    'authorName' => 'autor',
                    'body' =>  'articulo '
                ],
                [
                    'slug' => $i++,
                    'title' => 'titulo del articulo1 db',
                    'authorName' => 'autor',
                    'body' =>  'articulo '
                ],
                [
                    'slug' => $i++,
                    'title' => 'titulo del articulo2 db',
                    'authorName' => 'autor',
                    'body' =>  'articulo '
                ],
                [
                    'slug' => $i++,
                    'title' => 'titulo del articulo3 db',
                    'authorName' => 'autor',
                    'body' =>  'articulo '
                ],
            ]
        ]);
    }
    public function ttAction(){
        $p = new \DevTics\HelloBundle\Entity\Product();
        $p->setDescription("description")
          ->setName('nombre')
          ->setPrice(55);
        $m = $this->getDoctrine()->getManager();
        $m->persist($p);
        $m->flush();
                
        $r =  new \Symfony\Component\HttpFoundation\Response();
      return  $r->setContent('Hola Mundo ssxD');
     //   return $this->render('DevTicsHelloBundle::'); 
    }
    
    public function getProductsAction(){
        $productos = $this->getDoctrine()->getRepository('DevTicsHelloBundle:Product')->getAllProducts();
        $r =  new \Symfony\Component\HttpFoundation\Response();
        $r->headers->set('Content-Type', 'application/json');
        return  $r->setContent(json_encode($productos));
    }
}
