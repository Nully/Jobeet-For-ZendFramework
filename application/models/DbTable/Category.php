<?php

class Jobeet_Model_DbTable_Category extends Zend_Db_Table_Abstract
{

    protected $_name = 'category';

    protected $_dependentTables = array( "Jobeet_Model_DbTable_CategoryAffiliate" );

    protected $_referenceMap = array(
        "Category" => array(
            "columns" => array( "id" ),
            "refColumn" => "category_id",
            "refTableClass" => "Jobeet_Model_DbTable_Job"
        )
    );

    protected $_rowClass = "Jobeet_Model_Category";
}

