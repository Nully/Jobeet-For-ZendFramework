<?php

class Jobeet_Model_DbTable_Job extends Zend_Db_Table_Abstract
{

    protected $_name = 'job';

    protected $_dependentTables = array( "Jobeet_Model_DbTable_Category" );

    protected $_rowClass = "Jobeet_Model_Job";
}

