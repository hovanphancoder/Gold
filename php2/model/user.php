<?php
    class user {
        
    public function getUser(){
        $db = new connect();
        $strQuery="SELECT * FROM user ";
        $result= $db->getList($strQuery);
        return $result;
    }          

   public function getUserId($id){
      $db = new connect();
      $strQuery = "select * from user where id=$id";
      $result = $db->getInstance($strQuery);
      return $result;
    }
        
    public function adduser($ten,$pass,$email,$phone,$diachi,$role){
      $db = new connect();
      $strQuery = "INSERT INTO user( username, password, email, phone, diachi, role) VALUES ('$ten','$pass','$email','$phone','$diachi','$role')";
      $result = $db->exec($strQuery);
      return $result ;
    }

    public function deleteuser($id){
      $db = new connect();
      $strQuery = "DELETE FROM user WHERE id=$id";
      $result = $db->exec($strQuery);
      return $result;
    }

    public function updateuser($id,$ten,$pass,$email,$phone,$diachi,$role){
      $db = new connect();
      $strQuery = "UPDATE user SET username='$ten',password='$pass',email='$email',phone='$phone',diachi='$diachi',role='$role'  where id='$id'";
      $result = $db->exec($strQuery);
      return $result;
    }
          
    }
    
?>