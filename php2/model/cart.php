<?php
class cart{

    public function getListCart(){
      $db = new connect();
      $strQuery = "select a.*,b.*,c.*
      from cart b inner JOIN product a
      ON b.idProduct = a.id
      inner JOIN user c
      ON b.idUser = c.id";
      $result = $db->getList($strQuery);
      return $result;
    }
        
    public function countCart(){
      $db = new connect();
      $strQuery = "SELECT COUNT(id) AS numbercart FROM cart";
      $result = $db->getList($strQuery);
      return $result;
    }

    public function addToCart($id,$time){
      $db = new connect();
      $query = "INSERT INTO cart (idProduct, idUser,soluong,time) VALUES ('$id', '1', '1','$time') ";
      $result = $db->exec($strQuery);
      return $result;
    }
    
    public function getTKMoney(){
      $db = new connect();
      $strQuery = "
      SELECT a.*,b.*,sum(a.giaban*b.soluong)as number from 
      cart b inner JOIN product a
      ON b.idproduct = a.id ";
      $result = $db->getList($strQuery);
      return $result;

    }

 public function countOrder(){
      $db = new connect();
      $strQuery = "
      SELECT count(id) AS NumberOrder from cart where trangthai=2";
      $result = $db->getList($strQuery);
      return $result;
     }

 public function countOrderTT(){
      $db = new connect();
      $strQuery = "
      SELECT count(id) AS NumberOrderTT from cart where trangthai=1";
      $result = $db->getList($strQuery);
      return $result;
     
}
}
?>