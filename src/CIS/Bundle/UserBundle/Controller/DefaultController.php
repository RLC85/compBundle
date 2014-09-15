<?php

namespace CIS\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $args = array(
            "pageTitle" => "Users"
        );
        
        return $this->render('CISUserBundle:Default:index.html.twig', $args);
    }
}
