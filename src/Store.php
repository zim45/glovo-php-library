<?php

namespace Glovo;

use GuzzleHttp\ClientInterface;

class Store extends Request {

    const API_URL = 'stores';

    protected $storeId = null;

    public function __construct($storeId, Configuration $config, ClientInterface $client = null)
    {
        $this->storeId = $storeId;
        parent::__construct($config, $client);
    }

    public function getRequestPath()
    {
        return self::API_URL.'/'.$this->storeId;
    }

    public function update()
    {
        $this->send();
    }

}
