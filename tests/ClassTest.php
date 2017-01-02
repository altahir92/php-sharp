<?php

use PHPUnit\Framework\TestCase;

/**
* 
*/
class ClassTest extends TestCase
{
	/**
	* @test
	*/
	protected $stack;

	protected function setUp()
	{
		$this->stack =[];
	}
}