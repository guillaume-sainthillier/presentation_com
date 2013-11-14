<?php

namespace PC\PresentationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PCPresentationBundle::index.html.twig', array());
    }
}
