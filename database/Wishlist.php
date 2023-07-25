<?php

class Wishlist {
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    public function deleteCart($item_id=null, $table='wishlist'){
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location:".$_SERVER["PHP_SELF"]);
            }
            return $result;
        }
    }

}