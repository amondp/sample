<?php

//src/Controller/SecondController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class SecondController
{
	public function number()
	{
		return $this->render('test/child.html.twig');
	}
}