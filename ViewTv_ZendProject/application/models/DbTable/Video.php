<?php

class Application_Model_DbTable_Video extends Zend_Db_Table_Abstract
{

    protected $_name = 'video';
    public function listall(){
        $query=$this->select();
        $query->from($this->_name);
        return $query;
    }
    public function getOneVideo($id){
        $query=$this->select()
                    ->from($this->_name)
                    ->where('id='.$id);
        return $query;
    }

}

