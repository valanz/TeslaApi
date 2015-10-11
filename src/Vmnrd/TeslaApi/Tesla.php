<?php

namespace Vmnrd\TeslaApi;

use Nekland\BaseApi\ApiFactory;
use Nekland\BaseApi\Http\Auth\AuthFactory;
use Nekland\BaseApi\Http\HttpClientFactory;
use Vmnrd\TeslaApi\Api\Vehicles;

/**
 * Class Tesla
 * @method Vehicles getVehiclesApi()
 * @method Vehicles getCommandsApi()
 */
class Tesla extends ApiFactory
{

    /**
     * @var array
     */
    private $options = [
        'base_url' => 'https://owner-api.teslamotors.com/'
    ];

    /**
     * @param HttpClientFactory $httpClientFactory
     * @param AuthFactory $authFactory
     */
    public function __construct(HttpClientFactory $httpClientFactory = null, AuthFactory $authFactory = null)
    {
        parent::__construct(new HttpClientFactory($this->options));
        $this->getAuthFactory()->addNamespace('Vmnrd\TeslaApi\Http\Auth');
    }

    /**
     * @return array
     */
    protected function getApiNamespaces()
    {
        return ['Vmnrd\TeslaApi\Api'];
    }

} 
