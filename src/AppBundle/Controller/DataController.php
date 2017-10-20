<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Product;

class DataController extends Controller
{
    public function saveAction()
    {
        
        $doctrine = $this->getDoctrine();
        $manager  = $doctrine->getManager();
        
        $product = new Product();
        $product->setName('Xiaomi2');
        $product->setPrice('2201');
        $product->setDescription('Lorem ipsum');
        
        $manager->persist($product);
        $manager->flush();
        
        
        return $this->render('AppBundle:Data:save.html.twig', array(
            // ...
        ));
    }
    
    public function getAction() {
        
        $doctrine = $this->getDoctrine();
        $repo = $doctrine->getRepository(Product::class);
        
        $product = $repo->find(1);
    
         
        return $this->render('AppBundle:Data:save.html.twig', array(
            'product' => $product
        ));
        
    }

}
