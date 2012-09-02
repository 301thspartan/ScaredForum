<?php

namespace Forum\ScaredForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ScaredForumBundle:Default:index.html.twig', array('name' => $name));
    }
}
