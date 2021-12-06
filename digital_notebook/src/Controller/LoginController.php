<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// use Twig\Environment;
class LoginController  extends AbstractController {

    /**
     * 
     */

    // private $twig;

    public function _construct($twig){
        $this->twig = $twig;
    }

    function login()
    {
        
        return $this->render('login/index.html.twig');
    }

}