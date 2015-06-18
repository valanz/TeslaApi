<?php

namespace Vmnrd\TeslaApi\Http\Auth;

use Nekland\BaseApi\Http\Auth\AuthStrategyInterface;
use Nekland\BaseApi\Http\Event\RequestEvent;

class ApiAuth implements AuthStrategyInterface
{
    private $parameters;

    /**
     * @param array $options
     * @return self
     */
    public function setOptions(array $options)
    {
        $this->parameters = $options;
    }

    /**
     * @param RequestEvent $request
     */
    public function auth(RequestEvent $request)
    {
    }
} 
