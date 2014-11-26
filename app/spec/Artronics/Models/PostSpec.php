<?php

namespace spec\Artronics\Models;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PostSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Artronics\Models\Post');
    }
}
