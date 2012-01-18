<?php

class Jobeet_Model_DbTable_CategoryAffiliate extends Zend_Db_Table_Abstract
{

    protected $_name = 'category_affiliate';

    protected $_referenceMap = array(
        "Category" => array(
            "columns" => array( "category_id" ),
            "refColumn" => "id",
            "refTableClass" => "Jobeet_Model_DbTable_Category"
        ),
        "Affiliate" => array(
            "columns" => array( "affiliate_id" ),
            "refColumn" => "id",
            "refTableClass" => "Jobeet_Model_DbTable_Affiliate"
        )
    );

}

