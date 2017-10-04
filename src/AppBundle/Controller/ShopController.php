<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShopController extends Controller
{
    public function indexAction()
    {
        //echo 'This is indexAction';
        $categories = $this->getCategories();
        $posts = $this->getComputers();
        return $this->render('AppBundle:Shop:index.html.twig', array(
            'categories' => $categories
        ));
    }

    public function listAction($name)
    {//описать иф который проверяет категорию или кейсы. и в ифе описать рендер переданной в этот экшн категории
        //echo 'This is listAction';
        //проверять если ли $name в массиве с категориями. в успешном случае подтягивать масив гетпостс.
        
        
        $cat = $this->getCategories();
        $posts = $this->getComputers();
        return $this->render('AppBundle:Shop:list.html.twig', array(
            'computers' =>$posts
        ));
    }

    public function itemAction($id)
    {
        //echo 'This is itemAction';
        $cat = $this->getCategories();
        $posts = $this->getComputers();
        $c = $cat[$id - 1];
        $post = $posts[$id - 1];
        return $this->render('AppBundle:Shop:item.html.twig', array(
            'categories' => $c,
            'computers' => $post
        ));
    }

    protected function getCategories() 
    {
        return [
            [
              'id' => '1',
              'name' => 'Computers'
            ],    
                        [
              'id' => '2',
              'name' => 'Monitors'
            ],    
                        [
              'id' => '3',
              'name' => 'Printers'
            ],    
        ];   
    }


    protected function getComputers() 
    {
        return [
            [
                'id' => '1',
                'title' => 'Some title',
                'name' => 'Computer 1',
                'description' => '111Lorem ipsum Lorem ipsum Lorem ipsum ',
                'price' => '$9.99',
                'image' => '/images/comp.jpg',
                'date' => date('d/m/Y')
            ],
            
            [
                'id' => '2',
                'title' => 'Some title',
                'name' => 'Computer 2',
                'description' => '111Lorem ipsum Lorem ipsum Lorem ipsum ',
                'price' => '$9.98',
                'image' =>'/images/comp.jpg',
                'date' => date('d/m/Y')
            ],
            
            [
                'id' => '3',
                'title' => 'Some title',
                'name' => 'Computer 3',
                'description' => '111Lorem ipsum Lorem ipsum Lorem ipsum ',
                'price' => '$9.97',
                'image' => '/images/comp.jpg',
                'date' => date('d/m/Y')
            ],
            
            [
                'id' => '4',
                'title' => 'Some title',
                'name' => 'Computer 4',
                'description' => '111Lorem ipsum Lorem ipsum Lorem ipsum ',
                'price' => '$9.96',
                'image' => '/images/comp.jpg',
                'date' => date('d/m/Y')
            ],
                        
            [
                'id' => '5',
                'title' => 'Some title',
                'name' => 'Computer 5',
                'description' => '111Lorem ipsum Lorem ipsum Lorem ipsum ',
                'price' => '$9.95',
                'image' => '/images/comp.jpg',
                'date' => date('d/m/Y')
            ],
                        
            [
                'id' => '6',
                'title' => 'Some title',
                'name' => 'Computer 6',
                'description' => '111Lorem ipsum Lorem ipsum Lorem ipsum ',
                'price' => '$9.99',
                'image' => '/images/comp.jpg',
                'date' => date('d/m/Y')
            ],
                        
            [
                'id' => '7',
                'title' => 'Some title',
                'name' => 'Computer 7',
                'description' => '111Lorem ipsum Lorem ipsum Lorem ipsum ',
                'price' => '$9.99',
                'image' => '/images/comp.jpg',
                'date' => date('d/m/Y')
            ],
                        
            [
                'id' => '8',
                'title' => 'Some title',
                'name' => 'Some name',
                'description' => '111Lorem ipsum Lorem ipsum Lorem ipsum ',
                'price' => '$9.99',
                'image' => '/images/comp.jpg',
                'date' => date('d/m/Y')
            ],
                        
            [
                'id' => '9',
                'title' => 'Some title',
                'name' => 'Some name',
                'description' => '111Lorem ipsum Lorem ipsum Lorem ipsum ',
                'price' => '$9.99',
                'image' => '/images/comp.jpg',
                'date' => date('d/m/Y')
            ],
                        
            [
                'id' => '10',
                'title' => 'Some title',
                'name' => 'Some name',
                'description' => '111Lorem ipsum Lorem ipsum Lorem ipsum ',
                'price' => '$9.99',
                'image' => '/images/comp.jpg',
                'date' => date('d/m/Y')
            ],
                        
            [
                'id' => '11',
                'title' => 'Some title',
                'name' => 'Some name',
                'description' => '111Lorem ipsum Lorem ipsum Lorem ipsum ',
                'price' => '$9.99',
                'image' => '/images/comp.jpg',
                'date' => date('d/m/Y')
            ],
                        
            [
                'id' => '12',
                'title' => 'Some title',
                'name' => 'Some name',
                'description' => '111Lorem ipsum Lorem ipsum Lorem ipsum ',
                'price' => '$9.99',
                'image' => '/images/comp.jpg',
                'date' => date('d/m/Y')
            ],
                        
            [
                'id' => '13',
                'title' => 'Some title',
                'name' => 'Some name',
                'description' => '111Lorem ipsum Lorem ipsum Lorem ipsum ',
                'price' => '$9.99',
                'image' => '/images/comp.jpg',
                'date' => date('d/m/Y')
            ],
                        
            [
                'id' => '14',
                'title' => 'Some title',
                'name' => 'Some name',
                'description' => '111Lorem ipsum Lorem ipsum Lorem ipsum ',
                'price' => '$9.99',
                'image' => '/images/comp.jpg',
                'date' => date('d/m/Y')
            ],
                        
            [
                'id' => '15',
                'title' => 'Some title',
                'name' => 'Some name',
                'description' => '111Lorem ipsum Lorem ipsum Lorem ipsum ',
                'price' => '$9.99',
                'image' => '/images/comp.jpg',
                'date' => date('d/m/Y')
            ],
            
        ];
    }

}
