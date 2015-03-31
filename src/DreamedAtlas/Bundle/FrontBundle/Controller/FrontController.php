<?php

namespace DreamedAtlas\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class FrontController extends Controller
{
    /**
     * @Route("/")
     * @Template("@DreamedAtlasFront/Front/index.html.twig")
     *
     * @return array
     */
    public function indexAction()
    {
        return array();
    }
}
