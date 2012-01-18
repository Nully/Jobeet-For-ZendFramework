<?php

class Jobeet_Model_Job extends Zend_Db_Table_Row
{
    /**
     * 指定された行をフォーマットする
     *
     * @access public
     * @param  $column   String   フォーマット対象のカラム名
     * @param  $format   String   フォーマット
     * @return String
     */
    public function formatDate($column, $format = "Y/MM/d")
    {
        $time = $this->{$column};
        $date = new Zend_Date($date);
        return $date->toString($format);
    }
}
