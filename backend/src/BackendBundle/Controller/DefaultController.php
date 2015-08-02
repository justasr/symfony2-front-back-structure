<?php

namespace Backend\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return new Response("Backend!");
    }
}
