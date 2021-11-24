<?php

namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
// use Twig\Environment;
class HomeController {

    /**
     * 
     */

    // private $twig;

    public function _construct($twig){
        $this->twig = $twig;
    }

    function home(){
        return new Response('Cahier de texte numerique');
        // return new Response($this->twig->render('admin/index.html.twig'));
    }

}