<?php
    class login {
        
        public function checkLogin($e,$p){
            $db = new connect();
            $strQuery="SELECT * FROM user WHERE  email='$e' && password ='$p' && role='1'";
            $result= $db->getList($strQuery);
            $row=$result->rowCount();
            if($row==0){
                return false;
            }
                return true;
        }          
          
    }
    
?>