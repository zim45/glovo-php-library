<?php

namespace Glovo\Api;

use Glovo\Configuration;
use Glovo\Store;
use GuzzleHttp\ClientInterface;

class Product extends Store {

    const API_URL = 'products';

    private $productId = null;

    public function __construct($productId, $storeId, Configuration $config, ClientInterface $client)
    {
        $this->productId = $productId;
        parent::__construct($storeId, $config, $client);
    }

    public function getRequestPath()
    {
        return parent::getRequestPath().'/'.self::API_URL;
    }

    public function setPrice(float $price)
    {
        $this->data['price'] = $price;
    }

    public function setAvailable(bool $isAvailable)
    {
        $this->data['available'] = $isAvailable;
    }

    public function update()
    {
       $this->send('patch');
    }

}


