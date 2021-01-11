<?php

namespace Glovo\Store;

use Glovo\Store;
use Glovo\Configuration;
use GuzzleHttp\ClientInterface;

class Order extends Store {

    const API_URL = 'orders';

    const ORDER_STATUS_ACCEPTED              = 'ACCEPTED';
    const ORDER_STATUS_READY_FOR_PICKUP      = 'READY_FOR_PICKUP';
    const ORDER_STATUS_OUT_FOR_DELIVERY      = 'OUT_FOR_DELIVERY';
    const ORDER_STATUS_PICKED_UP_BY_CUSTOMER = 'PICKED_UP_BY_CUSTOMER';

    protected $orderId = null;

    public function __construct($orderId, $storeId, Configuration $config, ClientInterface $client = null)
    {
        $this->orderId = $orderId;
        parent::__construct($storeId, $config, $client);
    }

    public function getRequestPath()
    {
        return parent::getRequestPath().'/'.self::API_URL.'/'.$this->orderId;
    }

}
