<?php
    class catalog {
        
        public function getListcatalog(){
            $db = new connect();
            $strQuery = "select * from catalog";
            $result = $db->getList($strQuery);
            return $result;
        }
        
        public function getListCatalogId($id){
            $db = new connect();
            $strQuery = "select * from catalog where id=$id";
            $result = $db->getInstance($strQuery);
            return $result;
        }
        
        public function addcata($tencata){
           $db = new connect();
            $strQuery="insert into catalog(namecata) values ('$tencata')";
            $result = $db->getList($strQuery);
            return $result;
        }

        public function deletecata($idcata){
           $db = new connect();
             $strQuery="delete from catalog where id=$idcata";
             $result = $db->exec($strQuery);
              return $result;
        }

        public function updatecata($tencata,$idcata){
           $db = new connect();
            $strQuery="update catalog set namecata='$tencata' where id='$idcata'";
            $result = $db->exec($strQuery);
             return $result;
        }
    }
?>