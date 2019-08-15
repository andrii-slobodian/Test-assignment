<?php
/**
 * Created by PhpStorm.
 * User: Slobodian
 * Date: 14.08.2019
 * Time: 11:54
 */

namespace Shop\Mainpage\Model;

use Magento\Framework\Model\AbstractModel;

class Form extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Shop\Mainpage\Model\ResourceModel\Form');
    }
}
