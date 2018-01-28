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
        $name = "Accueil";
        
        return $this->render('rc/index.html.twig',
            array(
                "name" => $name
            )
        );
    }

    /**
	* @Route("/about", name="about")
	*/
    public function aboutAction() {
        $name = "À propos";
        
        return $this->render('rc/about.html.twig',
            array(
                "name" => $name
            )
        );
    }

    /**
	* @Route("/contact", name="contact")
	*/
    public function contactAction() {
        $name = "Contact";
        
        return $this->render('rc/contact.html.twig',
            array(
                "name" => $name
            )
        );
    }
}