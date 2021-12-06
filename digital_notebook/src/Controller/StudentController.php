<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// use Twig\Environment;
class StudentController  extends AbstractController {

    /**
     * 
     */

    // private $twig;

    public function _construct($twig){
        $this->twig = $twig;
    }

    function student_log()
    {
        
        return $this->render('student_log/index.html.twig');
    }

}