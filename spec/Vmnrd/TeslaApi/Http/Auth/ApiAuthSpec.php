<?php

namespace spec\Vmnrd\TeslaApi\Http\Auth;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ApiAuthSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Vmnrd\TeslaApi\Http\Auth\ApiAuth');
    }

    function it_should_throw_error_if_options_are_not_defined()
    {
        $this->shouldThrow('Nekland\BaseApi\Exception\MissingOptionException')->duringSetOptions([]);
    }
}
