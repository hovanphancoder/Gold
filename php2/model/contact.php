<?php
    class contact{
        
        public function addcontact($name,$email,$phone,$diachi,$content,$time){
            $db = new connect();
             $strQuery="INSERT INTO lienhe(name,email,phone,address, content,time) VALUES 
                ('$name','$email','$phone','$diachi','$content','$time')";
             $result = $db->exec($strQuery);
              return $result;
        }

        public function countContact(){
        $db = new connect();
        $strQuery = "SELECT COUNT(id) AS numbercontact FROM contact";
        $result = $db->getList($strQuery);
        return $result;
        }

        public function getListContact(){
            $db = new connect();
            $strQuery = "select * from contact";
            $result = $db->getList($strQuery);
            return $result;
        }
        
        public function getListContactReaded(){
            $db = new connect();
            $strQuery = "select * from contact where trangthai=1";
            $result = $db->getList($strQuery);
            return $result;
        }
    }
    
?>