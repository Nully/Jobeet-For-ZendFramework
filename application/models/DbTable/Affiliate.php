<?php

class Jobeet_Model_DbTable_Affiliate extends Zend_Db_Table_Abstract
{

    protected $_name = 'affiliate';

    protected $_dependentTables = array( "Jobeet_Model_DbTable_CategoryAffiliate" );

    protected $_rowClass = "Jobeet_Model_Affiliate";
}

