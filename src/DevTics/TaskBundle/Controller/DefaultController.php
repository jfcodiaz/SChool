<?php

namespace DevTics\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DevTics\TaskBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {
    public function indexAction ($name) {
        return $this->render('DevTicsTaskBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function newAction (Request $request) {
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));
        
        $form = $this->createFormBuilder($task)
                ->add('task', 'text')
                ->add('dueDate','date')
                ->add('save','submit')
                ->add('saveAndAdd', 'submit')
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            $nexAction = $form->get('saveAndAdd')->isClicked()? 'task_new' : 'task_success';
            return new Response($nexAction);
            //return $this->redirect($this->generateUrl('task_success'));
        }
        return $this->render('DevTicsTaskBundle:Default:new.html.twig',[
            'form' => $form->createView()
        ]);
    }
}
