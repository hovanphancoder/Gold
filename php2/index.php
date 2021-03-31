<?php
ob_start();
session_start();
    include_once'model/config.php';
    include_once'model/product.php';
    include_once'model/brand.php';
    include_once'model/catalog.php';
    include_once'model/cart.php';
    include_once'model/blog.php';
    include_once'model/contact.php';
    include_once'model/login.php';
        include_once'model/user.php';

    if(isset($_SESSION['admin'])){
        include'controller/admin.php';
    }else{
     include'controller/index.php';   
    }
?>