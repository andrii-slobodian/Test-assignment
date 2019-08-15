<?php

namespace Shop\Mainpage\Model;

use Magento\Framework\Model\AbstractModel;

class Products extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Shop\Mainpage\Model\ResourceModel\Products');
    }
}
