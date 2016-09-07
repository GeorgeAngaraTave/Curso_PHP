<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DummySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Dummy');
    }
    function it_is_adding()
    {
    	$this->sum(4,3)->shouldReturn(7);
    }
}
