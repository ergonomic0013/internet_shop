<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends Controller
{
    public function loginAction(AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();
    
        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();
        
        return $this->render('AppBundle:User:login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }
    
    
    public function registerAction()
    {
        return $this->render('AppBundle:User:register.html.twig', array(
            // ...
        ));
    }


    public function profileAction()
    {
        return $this->render('AppBundle:User:profile.html.twig', array(
            // ...
        ));
    }

}
