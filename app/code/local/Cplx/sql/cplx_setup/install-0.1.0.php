<?php
$installer = $this;
$installer->startSetup();
//$installer->createEntityTables($this->getTable('cplx/eavblogpost'));
/*$installer->addEntityType('cplx_eavblogpost', array(
    //entity_mode is the URI you'd pass into a Mage::getModel() call
    'entity_model'    => 'cplx/eavblogpost',

    //table refers to the resource URI cplx/eavblogpost
    //...eavblog_posts

    'table'           =>'cplx/eavblogpost',
));*/
$this->addAttribute('cplx_eavblogpost', 'title', array(
    //the EAV attribute type, NOT a MySQL varchar
    'type'              => 'varchar',
    'label'             => 'Title',
    'input'             => 'text',
    'class'             => '',
    'backend'           => '',
    'frontend'          => '',
    'source'            => '',
    'required'          => true,
    'user_defined'      => true,
    'default'           => '',
    'unique'            => false,
));
 $this->addAttribute('cplx_eavblogpost', 'content', array(
        'type'              => 'text',
        'label'             => 'Content',
        'input'             => 'textarea',
    ));
    $this->addAttribute('cplx_eavblogpost', 'date', array(
        'type'              => 'datetime',
        'label'             => 'Post Date',
        'input'             => 'datetime',
        'required'          => false,
    ));

$installer->endSetup();
?>
