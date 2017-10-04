<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        
        $posts = $this->getPosts();
        
        return $this->render('AppBundle:Blog:index.html.twig', array(
            'posts' => $posts
        ));
    }

    public function viewAction($id)
    {
        $posts = $this->getPosts();
        
        $post = $posts[$id - 1];
        
        return $this->render('AppBundle:Blog:view.html.twig', array(
            'post' => $post
        ));
    }

    public function addAction()
    {
        $posts = $this->getPosts();
        
        return $this->render('AppBundle:Blog:add.html.twig', array(
            // ...
        ));
    }

    protected function getPosts() {
        return [
            [
                'id' => '1',
                'title' => 'Some title',
                'description' => '111Lorem ipsum Lorem ipsum Lorem ipsum ',
                'date' => date('d/m/Y')
            ],
            
            [
                'id' => '2',
                'title' => 'Some title2222',
                'description' => '222Lorem ipsum Lorem ipsum Lorem ipsum ',
                'date' => date('d/m/Y')
            ],
            
            [
                'id' => '3',
                'title' => 'Some title3333',
                'description' => '22Lorem ipsum Lorem ipsum Lorem ipsum ',
                'date' => date('d/m/Y')
            ],
            
        ];
    }
}
