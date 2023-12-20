<?php
namespace MageAcademy\ObserverExample\Observer;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class CustomObserver implements ObserverInterface
{
   /** Magento\Framework\Event\Observer $Observer; */
	
	//echo "hello"; die('stop');
	
	
    public function execute(Observer $observer)
	
    {
		$order = $observer->getEvent()->getOrder();
		$writer = new \Zend\Log\Writer\Stream(BP . '/var/log/custom.log');
           $logger = new \Zend\Log\Logger();
             $logger->addWriter($writer);
                 $logger->info('done observer called: ' .$order->getId());
				 
				 
				/* $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/custom.log');
$logger = new \Zend\Log\Logger();
$logger->addWriter($writer);
$logger->info('Your log details: ' .$variable);
$logger->info(print_r($object->getData(), true));*/ 
        
    }
}

