<?php
 class mstucky_Cplx_IndexController extends Mage_Core_Controller_Front_Action{
	 public function indexAction() {
		$thing_1 = new Varien_Object();
		$thing_1->setName('Pitufo');
		$thing_1->setAge(10);
		$thing_1->setOlor('olor a gato turro');

		$thing_2 = new Varien_Object();
		$thing_2->setName('Jane');
		$thing_2->setAge(12);

		$thing_3 = new Varien_Object();
		$thing_3->setName('Spot');
		$thing_3->setLastName('The Dog');
		$thing_3->setAge(7);
		
		
		var_dump($thing_1->getData());
	 }
	 
	public function testAction(){
		$collection_of_products = Mage::getModel('catalog/product')->getCollection();
	/*	foreach($collection_of_products as $row){
			var_dump($row['sku']);
		}
	$collection_of_products->addFieldToFilter('sku',array("like"=>'msj%'));*/
	$collection_of_products->addFieldToFilter('sku',array("like"=>'m%'));
		foreach($collection_of_products as $row){
			var_dump($row['sku']);
		}
		//echo "la collecion tiene ahora----->".count($collection_of_products).'<----- items';
		
		//var_dump($collection_of_products->getFirstItem()->getData());
	}
	 
	public function fetchDirectAction(){
		$db=Mage::getSingleton('core/resource')->getConnection('core/write');
		$result=$db->query('select * from catalog_product_entity');
		if(!$result){
			return false;
			
		}
		
	
			$row = $result->fetch(PDO::FETCH_ASSOC);
			if(!$row){
				return false;
			}
			var_dump($row);
		
	}


	public function populateEntriesAction() {
	   for ($i=0;$i<10;$i++) {
		   $weblog2 = Mage::getModel('cplx/eavblogpost');
		   $weblog2->setTitle('This is a test '.$i);
		   $weblog2->setContent('This is test content '.$i);
		   $weblog2->setDate(now());
		   $weblog2->save();
	   }
	   echo "Fertisch";
	}
	
	public function showCollectionAction() {
    $weblog2 = Mage::getModel('cplx/eavblogpost');
    $entries = $weblog2->getCollection()
		->addAttributeToSelect('title')
		->addAttributeToSelect('content') 
		->addAttributeToSelect('date');
    $entries->load();
    foreach($entries as $entry)
    {
        // var_dump($entry->getData());
        echo '<h2>' . $entry->getTitle() . '</h2>';
        echo '<p>Date: ' . $entry->getDate() . '</p>';
        echo '<p>' . $entry->getContent() . '</p>';
    }
    echo '</br>Done</br>';
}
 }

 
?>
