<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/site", name="sitepage")
     */
    public function indexAction()
    {
        return $this->render('@SiteBundle/Default/index.html.twig');
    }
}
