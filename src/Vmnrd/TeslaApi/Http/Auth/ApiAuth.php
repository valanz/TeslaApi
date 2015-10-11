<?php

namespace Vmnrd\TeslaApi\Http\Auth;

use Nekland\BaseApi\Exception\MissingOptionException;
use Nekland\BaseApi\Http\Auth\AuthStrategyInterface;
use Nekland\BaseApi\Http\Event\RequestEvent;
use Nekland\BaseApi\Http\Request;

class ApiAuth implements AuthStrategyInterface
{
    /**
     * @var array
     */
    private $parameters;

    /**
     * @var string
     */
    private static $bearer = null;

    /**
     * {@inheritdoc}
     */
    public function setOptions(array $options)
    {
        if (
            !isset($options['client_id']) ||
            !isset($options['client_secret']) ||
            !isset($options['email']) ||
            !isset($options['password'])
        ) {
            throw new MissingOptionException();
        }

        $this->parameters = $options;
    }

    /**
     * @param RequestEvent $request
     */
    public function auth(RequestEvent $request)
    {
        $url = $request->getClient()->getOption('base_url') . 'oauth/token';

        $response = $request->getClient()->send(new Request(
            'post',
            $url,
            $this->parameters
        ), false);

        $responseData = json_decode($response, true);

        self::$bearer = $responseData['access_token'];

        $request->getRequest()->setHeader('Authorization', 'Bearer ' . self::$bearer);
    }
} 
