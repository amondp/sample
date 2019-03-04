<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;

class LoggerPageExample extends AbstractController
{
	/**
	* @Route("/logger")
	*/
	public function testMyLogger(LoggerInterface $logger)
	{
		$logger->info('I just got the logger working');
			return new Response(
				'<html><body>This page is testing our Logger!</body></html>'
			);
	}
}