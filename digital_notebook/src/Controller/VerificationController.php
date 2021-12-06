<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// use Twig\Environment;
class VerificationController  extends AbstractController {

    /**
     * 
     */

    // private $twig;

    public function _construct($twig){
        $this->twig = $twig;
    }

    function verificationd()
    {
        // return new Response('Cahier de texte numerique');
        return $this->render('vefication/index.php');
    }

}