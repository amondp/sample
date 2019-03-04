<?php
namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SimplePageTest extends WebTestCase
{
	public function testShowPost()
	{
		$client = static::createClient();
		
		$client->request('GET', '/paul');
		
		$this->assertEquals(200, $client->getResponse()->getStatusCode());
	}
	
	public function testContent()
	{
		$client = static::createClient();

		$client->request('GET', '/paul');
		
		$this->assertContains('Bacon',
				$client->getResponse()->getContent());
	}
}