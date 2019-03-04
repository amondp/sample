<?php
// src/Controller/PaulController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

Class PaulController
{
	/**
	* @Route("/paul")
	*/
	public function goPaulGo()
	{
		
		return new Response(
			'<html><body>This is my page</body></html>'
			);
	}
}