<?php

namespace DevTics\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
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
//        $r =  new \Symfony\Component\HttpFoundation\Response();
//        $r->setContent('Hola Mundo xD');
     //   return $this->render('DevTicsHelloBundle::');
    }
}
