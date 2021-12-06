<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// use Twig\Environment;
class ProfController  extends AbstractController {

    /**
     * 
     */

    // private $twig;

    public function _construct($twig){
        $this->twig = $twig;
    }

    function prof_log()
    {
        
        return $this->render('prof_log/index.html.twig');
    }

    function prof()
    {
        return $this->render('prof/index.html.twig');
    }

}