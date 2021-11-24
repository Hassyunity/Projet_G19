<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
class AdminController extends AbstractController {

    /**
     * @Route("/a remplire ou metre comme home page", name="blog_index")
     */
    public function index(): Response
    {
        // ...
    }

    // private $twig;
    

    public function _construct($twig){
        $this->twig = $twig;
    }

    public function admin(): Response 
    {
        $userFirstName = 'name';

        return new Response('page admin');
        // return $this->render('admin/index.html.twig',
        // [
        //     'user_first_name' => $userFirstName,
        // ]);
    }

}