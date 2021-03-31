<?php
    class brand{
        public function getListBrand(){
            $db = new connect();
            $strQuery = "select * from brand";
            $result = $db->getList($strQuery);
            return $result;
        }
        public function getListBrandId($id){
            $db = new connect();
            $strQuery = "select * from brand where id=$id";
            $result = $db->getInstance($strQuery);
            return $result;
        }
   

    }
?>