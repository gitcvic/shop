<?php

namespace Shop\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller{
    
    public function indexAction()
    {
        return new Response('hello world2d -carrloss', '200');
    }
    
}
