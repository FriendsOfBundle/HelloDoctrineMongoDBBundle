<?php

namespace Hgtan\Bundle\HelloDoctrineMongoDBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HelloDoctrineMongoDBBundle:Default:index.html.twig', array('name' => $name));
    }
}
