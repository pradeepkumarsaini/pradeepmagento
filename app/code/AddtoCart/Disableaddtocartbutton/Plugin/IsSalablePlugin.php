<?php
use Magento\Framework\App\Http\Context;
use Magento\Customer\Model\Context as CustomerContext;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;


class IsSalablePlugin {
	
	protected $ScopeConfig;
	protected $Context;
	
	const Disable_Add_To_Cart= 'catalog/frontend/catalog_frontend_disable_add_to_cart_for_guest';
	
	public function __construct(ScopeConfigInterface $ScopeConfig,Context $Context)
	
	{
	
	$this->ScopeConfig = $ScopeConfig;
	$this->Context     = $Context;
		
		
		
		
	} 
	
public function afterIsSalable(\Magento\Catalog\Model\Product $product)	{
	
	$scope=ScopeInterface::SCOPE_STORE;
	if($product->getId()==2){
		
		return false;
	}else{
		
		return true;
	}
	
}
	
}