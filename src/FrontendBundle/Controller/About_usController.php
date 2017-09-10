<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class About_usController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontendBundle:about_us:index.html.twig');
    }
}
