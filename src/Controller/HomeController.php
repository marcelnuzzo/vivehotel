<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * Permet d'afficher l'adresse du responsable de vivehotel
     * 
     * @Route("/contact", name="contact")
     *
     * @return void
     */
    public function contact() {
        return $this->render("home/contact.html.twig");
    }
}
