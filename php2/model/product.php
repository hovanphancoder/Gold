<?php
  class product{
    
    public function getListProduct(){
      $db = new connect();
      $strQuery = "select * from product";
      $result = $db->getList($strQuery);
      return $result;
   }
   
    public function getListProductDM1(){
      $db = new connect();
      $strQuery = "select * from product where catalog=1 limit 3";
      $result = $db->getList($strQuery);
      return $result;
   }
   
   public function getListProductDM2(){
      $db = new connect();
      $strQuery = "select * from product where catalog=2 limit 3";
      $result = $db->getList($strQuery);
      return $result;
   }
   
   public function getListProductDM3(){
      $db = new connect();
      $strQuery = "select * from product where catalog=3 limit 3";
      $result = $db->getList($strQuery);
      return $result;
   }
   
    public function addview($id){
      $db = new connect();    
      $strQuery ="update product set luotxem=luotxem+1 where id=$id";
       $result = $db->exec($strQuery);
      return $result;
    }
    
    public function getListProductId($id){
      $db = new connect();
      $strQuery = "select * from product where id=$id";
      $result = $db->getList($strQuery);
      return $result;
    }
     public function getListProductId2($id){
      $db = new connect();
      $strQuery = "select * from product where id=$id";
      $result = $db->getInstance($strQuery);
      return $result;
    }

    public function getListProductbrand(){
        $db = new connect();
        $strQuery = "SELECT a.*,b.*,c.*
        FROM brand a inner JOIN product c
        ON c.brand = a.id
        inner JOIN catalog b
        ON c.catalog = b.id";
        $result = $db->getList($strQuery);
        return $result;
    }

    public function addProduct($ten,$giaban,$giathuc,$mota,$chitiec,$anh,$dm,$th,$sl_ton,$lx,$lt,$time){
      $db = new connect();
      $strQuery = "INSERT INTO product (name, giaban, giathuc, mota, thongtinthem, img, catalog, brand, sl_ton,luotxem,luotthich, thoigianup) 
       VALUES ('$ten','$giaban','$giathuc','$mota','$chitiec','$anh','$dm','$th','$sl_ton','$lx','$lt','$time')";
      $result = $db->exec($strQuery);
      return $result ;
    }

    public function deleteproduct($id){
      $db = new connect();
      $strQuery = "DELETE FROM product WHERE id=$id";
      $result = $db->exec($strQuery);
      return $result;
    }

    public function updateProduct($id,$ten,$giaban,$giathuc,$mota,$chitiec,$anh,$dm,$th,$sl_ton,$lx,$lt,$time){
      $db = new connect();
      $strQuery = "UPDATE product SET  name='$ten',giaban='$giaban',giathuc='$giathuc',mota='$mota',thongtinthem='$chitiec',img='$anh',catalog='$dm',brand='$th',sl_ton='$sl_ton',luotxem='$lx',luotthich='$lt',thoigianup='$time' where id='$id'";
      $result = $db->exec($strQuery);
      return $result;
    }

    public function searchProduct($keysearch){
      $db = new connect();
      $strQuery = "SELECT * FROM product WHERE name LIKE '%$keysearch%'" ;
      $result = $db->getList($strQuery);
      return $result;

}
 public function countProduct(){
      $db = new connect();
      $strQuery = "
      SELECT count(id) AS NumberProduct from product";
      $result = $db->getList($strQuery);
      return $result;
     }



  }
?>