<?php
    
    namespace Bluethink\Verify\Controller\Index;
    
    
    class Index2 extends \Magento\Framework\App\Action\Action
    {
        protected $_pageFactory;
    
        public function __construct(
            \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
            {
            $this->_pageFactory = $pageFactory;
             return parent::__construct($context);
        }
    
        public function execute()
        {
            // die("hjh");
        $resultPage = $this->_pageFactory->create(); 
       return $resultPage; 
    }
}