<?php

namespace Chris\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name, $count)
    {
        // var_dump($name,$count);die;
        return $this->render('EventBundle:Default:index.html.twig', array('name' => $name, 'count' => $count));

    }
}
