<?php
//src/Controller/SecondController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;

class SimpleSession extends AbstractController
{
	public function hello()
	{
		
	$session = new Session();
	$session->start();
	
	//set and get session attributes
	$session->set('name', 'Paulo');
	
	$name = $session->get('name');
	return new Response(
		'<html><body>my name is: '.$name.'</body></html>'
		);
	}
}