<?php


namespace Glovo\Store\Order;

use Glovo\Store\Order;

class Status extends Order {

    const API_URL = 'status';

    public function setStatus($status)
    {
        $this->data['status'] = $status;
    }

    public function getRequestPath()
    {
        return parent::getRequestPath().'/'.self::API_URL;
    }

    public function getUrl()
    {
        return sprintf("%s/%s", self::API_URL, '');
    }

    public function update()
    {
        $this->send('put');
    }

}