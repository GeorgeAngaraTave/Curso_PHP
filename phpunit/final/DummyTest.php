<?php
require './vendor/autoload.php';
require 'Dummy.php';

class DummyTest extends PHPUnit_Framework_TestCase{

	public function testAssertion()
	{
		$this->assertTrue(true, 'It should be true');
	}

	public function testSum()
	{
		$dummy = new Dummy();
		$this->assertEquals( $dummy->sum(2,3), 5, 'It should be 5' );
	}
}