<?php

namespace Shop\Mainpage\Model\ResourceModel\Form;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Shop\Mainpage\Model\Form', 'Shop\Mainpage\Model\ResourceModel\Form');
        $this->_map['field']['page_id'] = 'main_table.page_id';
    }
}
