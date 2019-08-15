<?php

namespace Shop\Mainpage\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Products extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('mg2_catalog_product_flat_1', 'entity_id');
    }
}
