<?php

namespace Glovo\Api;

use Glovo\Store;

class Menu extends Store {

    const API_URL = 'menu';

    public function setMenuUrl($url)
    {
        $this->data['menuUrl'] = $url;
    }

    public function getRequestPath()
    {
        return parent::getRequestPath().'/'.self::API_URL;
    }

    public function getStatus()
    {
        // TO-DO: implement get status action;
    }
}

