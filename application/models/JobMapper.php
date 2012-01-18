<?php
class Jobeet_Model_JobMapper
{
    /**
     * テーブルゲートウェイを取得する
     *
     * @access public
     * @return Zend_Db_Table_Abstract
     */
    public function getDbTable()
    {
        if(!$this->_dbTable)
            $this->setDbTable(new Jobeet_Model_DbTable_Job());

        return $this->_dbTable;
    }

    /**
     * テーブルゲートウェイをセットする
     *
     * @access public
     * @param  $dbTable   Zend_Db_Table_Abstract   テーブルゲートウェイ
     * @return Jobeet_Model_JobMapper
     */
    public function setDbTable($dbTable)
    {
        $this->_dbTable = $dbTable;
        return $this;
    }


    /**
     * 全ての求人情報を取得する
     *
     * @access public
     * @param  $offset   Int   ページ番号
     * @param  $limit    Int    取得件数
     * @return Zend_Db_Table_Rowset
     */
    public function fetchAll()
    {
        return $this->getDbTable()->fetchAll();
    }


    /**
     * 求人情報を取得する
     *
     * @access public
     * @param  $id   Int   検索する主キーのID
     * @return Zend_Db_Table_Row|Null
     */
    public function find($id)
    {
        return $this->getDbTable()->find($id)->current();
    }
}
