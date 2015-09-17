<?php
class mstucky_Cplx_Model_Resource_Eavblogpost extends Mage_Eav_Model_Entity_Abstract{
	protected function _construct() {
		$resource = Mage::getSingleton('core/resource');
		$this->setType('cplx_eavblogpost');
		$this->setConnection( 
			$resource->getConnection('cplx_read'),
			$resource->getConnection('cplx_write')
		);
	}
}
?>
