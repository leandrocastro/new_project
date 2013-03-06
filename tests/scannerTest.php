<?php

	define('DS', DIRECTORY_SEPARATOR);
	define('APP_ROOT', realpath(__DIR__ . DS . '..'));

	require(APP_ROOT.'/src/scan_directory/scanner.class.php');

	class Scanner_directoryTest extends PHPUnit_Framework_TestCase
	{
		public function testSomar()
		{
			$foo = new Scanner_directory();

			$this->assertEquals(5, $foo->Somar(2, 3));
		}
	}