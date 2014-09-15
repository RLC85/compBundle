<?php

namespace CIS\Bundle\CompentencyBundle\Controller;

use CIS\Bundle\WebsiteBundle\Controller\WebsiteController;

class DefaultController extends WebsiteController
{
    public function indexAction()
    {
        $args = array(
            "pageTitle" => "Compentency Browser"
        );
        return $this->render('CISCompentencyBundle:Default:index.html.twig');
    }
}
