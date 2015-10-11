<?php

namespace Vmnrd\TeslaApi\Api;

class Commands extends Vehicles
{
    /**
     * @param $id
     * @return string
     */
    public function honkHorn($id)
    {
        return json_encode($this->post(self::URL . '/' . $id . '/command/honk_horn'));
    }
} 
