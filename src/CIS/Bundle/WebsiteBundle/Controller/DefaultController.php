<?php

namespace CIS\Bundle\WebsiteBundle\Controller;

class DefaultController extends WebsiteController
{
    public function indexAction()
    {
        return $this->render('CISWebsiteBundle:Default:index.html.twig');
    }
}
