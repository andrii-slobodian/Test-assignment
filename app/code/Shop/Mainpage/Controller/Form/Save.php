<?php


namespace Shop\Mainpage\Controller\Form;

use Magento\Framework\App\Action\Context;
use Shop\Mainpage\Model\FormFactory;

class Save extends \Magento\Framework\App\Action\Action
{
    protected $_form;

    /**
     * Save constructor.
     * @param Context $context
     * @param FormFactory $form
     */
    public function __construct(
        Context $context,
        FormFactory $form
    ) {
        $this->_form = $form;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\Result\Redirect|
     * \Magento\Framework\Controller\ResultInterface
     * @throws \Exception
     */
    public function execute()
    {
        $data = $this->getRequest()->getParams();
        $form = $this->_form->create();
        $form->setData($data);
        if ($form->save()) {
            $this->messageManager->addSuccessMessage(__('Your request send successfully.'));
        } else {
            $this->messageManager->addErrorMessage(__('Your request didn\'t save.'));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('');
        return $resultRedirect;
    }
}
