<?php

namespace Artiste\WordpressBundle\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $postManager = $this->get('ekino.wordpress.manager.post');


        $post = $postManager->findAll();
        $img = $postManager->getcontent()->findAll();



        return $this->render('ArtisteWordpressBundle:Default:index.html.twig', array('name' => $name, 'post'=>$post, 'img'=>$img));
    }
}
