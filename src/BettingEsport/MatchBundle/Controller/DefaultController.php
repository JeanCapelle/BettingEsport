<?php

namespace BettingEsport\MatchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BettingEsportMatchBundle:Default:index.html.twig', array('name' => $name));
    }
}
