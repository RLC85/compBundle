<?php

namespace CIS\Bundle\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class WebsiteController extends Controller
{
    public $twigParams = array(
        "pageTitle" => "Compentency Browser"
    );

    public function render($view, array $parameters = array(), Response $response = null)
    {
        if (array_key_exists("pageTitle", $parameters)) {
            $this->twigParams = $parameters['pageTile'] . " | " . $this->twigParams['pageTitle'];
            unset($parameters['pageTitle']);
        }

        $this->twigParams = array_merge($this->twigParams, $parameters);

        return parent::render($view, $this->twigParams, $response);
    }
}