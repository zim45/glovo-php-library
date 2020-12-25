<?php
namespace Glovo\Store\Order;

use Glovo\Store\Order;

class ReplaceProducts extends Order {

    const API_URL = 'replace_products';

    const PRODUCT_REPLACEMENT_KEY = 'replacements';
    const PRODUCT_ADD_KEY         = 'added_products';
    const PRODUCT_REMOVE_KEY      = 'removed_purchases';

    public function setReplace(array $data)
    {
        $this->data[self::PRODUCT_REPLACEMENT_KEY] = $data;
    }

    public function setNew(array $data)
    {
        $this->data[self::PRODUCT_ADD_KEY] = $data;
    }

    public function setRemove(array $data)
    {
        $this->data[self::PRODUCT_REMOVE_KEY] = $data;
    }

    public function getRequestPath()
    {
        return parent::getRequestPath().'/'.self::API_URL;
    }


}
