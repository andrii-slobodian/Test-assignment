<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Shop\Mainpage\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    protected $resultPageFactory;
    protected $_productsFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     * @param \Shop\Mainpage\Model\ProductsFactory $productsFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        \Shop\Mainpage\Model\ProductsFactory $productsFactory
    ) {
        $this->_pageFactory = $pageFactory;
        $this->_productsFactory = $productsFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|
     * \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $products = $this->_productsFactory->create();
        $collection = $products->getCollection();
        $collection->addFieldToFilter('price', ['gt' => 5]);

        $resultPage = $this->_pageFactory->create();
        $resultPage->getLayout()->initMessages();
        $resultPage->getLayout()->getBlock('shop_index_index')->setName($collection);
        return $resultPage;
    }
}
