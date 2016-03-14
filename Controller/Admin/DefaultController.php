<?php

namespace Pbxg33k\VocadbBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Pbxg33kVocadbBundle:Default:index.html.twig', array('name' => $name));
    }
}
