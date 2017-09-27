<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public $controller = 'This is NewsController<br>';
    
    public function viewAction($tesla_new_car)
    {
        if($tesla_new_car == 'tesla_new_car')
        {
            echo $tesla_new_car.'     is correct parameter<br>';    
        
        }
        else
        {
            echo '<b>Wrong parameter!</b><br>';
        }
        $action = 'This is viewAction';
        
        echo $this->controller;
        echo $action;
        
        $response = new Response();
        return $response;
    }
    
    public function pageAction($page)
    {
        echo 'Page:  '.$page.'<br><br><br>';
        
        $response = new Response();
        return $response;
    }
    
    public function advanced_pageAction($page, $sort, $title, $order, $desc)
    {
        echo 'Page:  '.$page.'<br>';
        echo 'Sort:  '.$sort.'<br>';
        echo 'Title: '.$title.'<br>';
        echo 'Order:  '.$order.'<br>';
        echo 'desc:  '.$desc.'<br>';
        
        
        $response = new Response();
        return $response;
    }
    
    public function lang_pageAction($_locale)
    {
        echo 'Choosen lang :  '.$_locale.'<br><br><br>';
        
        $response = new Response();
        return $response;
    }
    
    
}
