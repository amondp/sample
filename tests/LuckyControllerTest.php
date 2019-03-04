<?php
//tests/LuckyControllertest.php

namespace App\Controller;


use PHPUnit\Framework\TestCase;

class LuckyControllerTest extends TestCase
{
	public function testNumber()
	{
		$lucky = new LuckyController();
		
		$result = $lucky->getANumber();
		
		$this->assertEquals(55, $result);
	}
	
}
