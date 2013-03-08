<?php

	/**
	* 
	*/
	class Controller
	{
		protected function view($file='')
		{
			return require_once('./application/views/'.$file.'.phtml');
		}
	}