<?php


class connect {
        //khai báo thuộc tính 
        var $db = null;
        //phương thức khởi tạo 
    function __construct () {
        $dsn = "mysql:host=localhost;dbname=hovanpha_travel";
        $user = 'hovanpha';
        $pass = 'Rt74NE38ckCw';
        $this->db = new PDO($dsn , $user, $pass, 
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    function getList ($select){
        $result = $this -> db -> query($select);
        return $result;
    }
    function getInstance ($select){
        $results = $this -> db -> query($select);
        $result = $results ->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    function exec($query){
        $result = $this ->db->exec($query);
        return $result;
    }
}
?>