<?php
namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LessonController extends Controller{
    
    public function wellcomeAction(){
        $name = 'Misha';
        
       return $this->render('/index/wellcome.html.twig',
                            [
                                'userName' => $name     
                            ]
                            );
    }
    
    
}