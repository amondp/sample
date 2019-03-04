<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Respomse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class RegisterController extends AbstractController
{
	/**
	* @Route("/Register")
	*/
	public function registerController()
	{
		return $this->render('sample/index.html.twig');
	}
}

	