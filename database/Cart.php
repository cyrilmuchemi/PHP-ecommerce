<?php

class Cart
{
    public $db = null;

    public function __constructor(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    public function insertIntoCart($params=null, $table='cart'){
        if($this->db->con != null){
            if($params != null){
                $columns = implode(',', array_keys($params));
                $values = implode();
            }
        }
    }
}