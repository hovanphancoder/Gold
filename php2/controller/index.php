<?php

    $brand =new brand();
    $product =new product();
    $showMenus =new catalog();
    $cart =new cart();
    $contact= new contact();
    $login= new login();
    // $contact =new contact ();
  
    $showNumberCart=$cart -> countCart();
    $showBrand=$brand -> getListBrand();
    $showMenu=$showMenus -> getListCatalog();
    
    include'view/header.php';
    $action = "home";
    if(isset($_GET['ctrl'])){
        $action=$_GET['ctrl'];
    }
    switch($action){
        
        case 'home':
            $showBrand=$brand -> getListBrand();
            $showProduct=$product -> getListProduct();
            $showProductBrand=$product -> getListProductbrand();
            $showProductdm=$product ->getListProductDM1();
            $showProductdm2=$product ->getListProductDM2();
            $showProductdm3=$product ->getListProductDM3();
          
            include'view/banner.php'; 
            include'view/main.php';
        break;


        
        case 'search':
            if(isset($_POST['xnSearch']) && isset($_POST['textsearch'])){
                $abc=$_POST['xnSearch'];
                $keysearch=$_POST['textsearch'];
                $getsearch =$product ->searchProduct($keysearch);
            
            }
            include'view/search.php';
        break;

        case 'detail':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $showDetailProduct=$product -> getListProductId($id);
                $product -> addview($id);
                $showProduct=$product -> getListProduct();

                
            }
                  include'view/detail.php';
        break;
        case 'product':
            $showBrand=$brand -> getListBrand();
            $showProductBrand=$product -> getListProductbrand();

            // $showProduct=$product -> getListProduct();
            //    $showCart=$cart->getListCart();
            include'view/product.php';
        break;

        case 'cart':
            if(isset($_GET['action'])){
                    if($_GET['action']=="add"){
                        if(isset($_POST['addcart'] )){
                                $idpro=$_POST['idpro'];
                                $gia=$_POST['gia'];
                                $sl=$_POST['soluong'];
                                $name=$_POST['name'];
                                $img=$_POST['img'];
                                $time=date('y-m-d H:i:s');
                            if(isset($_SESSION['cart'])){
                                array_push($_SESSION['cart'],array('idpro'=>$idpro,'gia'=>$gia,'name'=>$name,'img'=>$img,'soluong'=>$sl,'time'=>$time));
                                
                            }else{
                                $_SESSION['cart'] = [];
                                array_push($_SESSION['cart'],array('idpro'=>$idpro,'gia'=>$gia,'name'=>$name,'img'=>$img,'soluong'=>$sl,'time'=>$time));
                            }
                        }

                        header('location:index.php?ctrl=cart');
                    }

                    else if($_GET['action']=="del"){
                        if(isset($_SESSION['cart'])){
                            unset($_SESSION['cart']);
                            header('location:index.php?ctrl=cart');
                        }
                        // else{
                        //     header('location:index.php');
                        // }
                       
                    
                        }
                }
            include'view/cart.php';
        break;
        
     


        case 'contact':
            if(isset($_POST['xnsend'])){
                $name=$_POST['nameuser'];
                $phone=$_POST['phoneuser'];
                $email=$_POST['emailuser'];
                $diachi=$_POST['addressuser'];
                $content=$_POST['contentuser'];
                $time=date('y-m-d H:i:s');
                // $addmail=addcontact($name,$email,$phone,$diachi,$content,$time);
                function sanitize_my_email($field) {
                    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
                    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
                        return true;
                    } else {
                        return false;
                    }
                }
                $to_email="hovanphandev@gmail.com";
                $message=$content;
                $subject=$name;
                $headers= "From:'.$email.' \r\n";
                $secure_check = sanitize_my_email($to_email);
                if (($secure_check == false)) {
                    // echo '<script>alert("mời nhập thông tin trước khi gửi");</script>';
                } else { 
                    mail($to_email, $subject, $message, $headers);
                    echo '<script>alert("This email is sent using PHP Mail");</script>';
                }
            }
            include'view/contact.php';
        break;

           case 'checkcard':
             include'view/check.php';
        break;
        
        case 'login':
            if(isset($_POST['btn_submit'])){
                $e=$_POST['email'];
                $p=$_POST['pass'];
                // $login->checklogin($e,$p);

                if($login->checklogin($e,$p)){
                    $_SESSION['admin']=$e;
                     include'controller/admin.php?index.php';
                      header('location:index.php');
                }
                
            }
            else{
                 include'view/login.php';
            }
        break;

        case 'logout':
            unset($_SESSION['admin']);
            header('location:index.php');
        break;
        
        case 'register':
            include'view/register.php';
        break;
        
        case 'forgetpassword':
            include'view/forgetpassword.php';
        break;
    }
    include'view/footer.php';
?>