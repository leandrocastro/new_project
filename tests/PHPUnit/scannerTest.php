<?php

	class Scanner_directoryTest extends PHPUnit_Framework_TestCase
	{
		public function testSomar()
		{
			$foo = new Scanner_directory();

			$this->assertEquals(5, $foo->Somar(2, 3));
		}
	}