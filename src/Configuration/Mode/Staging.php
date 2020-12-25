<?php

namespace Glovo\Configuration\Mode;

use Glovo\Configuration\Mode;

class Staging implements Mode {

    const API_ENDPOINT = 'https://stageapi.glovoapp.com/webhook';

    public function getEndpoint()
    {
        return self::API_ENDPOINT;
    }

}
