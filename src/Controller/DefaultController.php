<?php

// src/Controller/DefaultController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller {

	/**
	* @Route("/", name="homepage")
	*/
    public function indexAction() {
        
        return $this->render('rc/index.html.twig');
    }

    /**
	* @Route("/about", name="about")
	*/
    public function aboutAction() {
        
        return $this->render('rc/about.html.twig');
    }

    /**
	* @Route("/contact", name="contact")
	*/
    public function contactAction() {
        
        return $this->render('rc/contact.html.twig');
    }
}