<?php

namespace ChallengeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ChallengeBundle:Default:mesdemandes.html.twig');
    }
}
