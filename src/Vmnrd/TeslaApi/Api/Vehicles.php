<?php

namespace Vmnrd\TeslaApi\Api;

use Nekland\BaseApi\Api\AbstractApi;


class Vehicles extends AbstractApi
{
    const URL = 'api/1/vehicles';

    /**
     * @return string
     */
    public function getVehicles()
    {
        return json_encode($this->get(self::URL));
    }
} 
