<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $users = $this->get('doctrine.orm.entity_manager')->getRepository('UserBundle:User')->findAll();
        return $this->render('AppBundle:Default:index.html.twig',['users'=>$users]);
    }
}
