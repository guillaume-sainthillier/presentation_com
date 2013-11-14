<?php

namespace PC\PresentationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction($page)
    {
        return $this->render('PCPresentationBundle::'.$page.'.html.twig', array("page" => $page));
    }
}
