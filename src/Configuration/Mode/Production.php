<?php

namespace Glovo\Configuration\Mode;

use Glovo\Configuration\Mode;

class Production implements Mode
{
    const API_ENDPOINT = 'https://api.glovoapp.com/webhook';

    public function getEndpoint()
    {
        return self::API_ENDPOINT;
    }

}