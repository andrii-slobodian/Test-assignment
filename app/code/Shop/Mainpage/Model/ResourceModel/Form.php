<?php

namespace Shop\Mainpage\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Form extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('mg2_form_data', 'form_data_id');
    }
}
