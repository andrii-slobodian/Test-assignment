<?php

namespace Shop\Mainpage\Model\ResourceModel\Products;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Shop\Mainpage\Model\Products', 'Shop\Mainpage\Model\ResourceModel\Products');
        $this->_map['field']['page_id'] = 'main_table.page_id';
    }
}
