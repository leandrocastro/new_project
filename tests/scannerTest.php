<?php

	class SaidaTest extends PHPUnit_Framework_TestCase
	{
		public function testScanner()
		{
			$this->expectOutputString('teste')
			print 'teste';
		}
	}