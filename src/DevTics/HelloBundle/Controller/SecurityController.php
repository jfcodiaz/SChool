<?php

namespace DevTics\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{
    public function loginAction(Request $request) {
        $session = $request->getSession();
        
        //get the login error if there is one
        if($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)){
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);            
        }else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        
        return $this->render(
            'DevTicsHelloBundle:Security:login.html.twig', [
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error' => $error
            ]);
                
    }
    
    public function adminAction(Request $r){
        return new \Symfony\Component\HttpFoundation\Response("Aqui solo adminses");
    }
}
