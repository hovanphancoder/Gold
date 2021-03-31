<?php

    $brand =new brand();
    $product =new product();
    $showMenus =new catalog();
    $cart =new cart();
    $contact =new contact();
    $user =new user();
    // $user =new user();
    
    $showBrand=$brand -> getListBrand();
    $showMenu=$showMenus -> getListCatalog();
    $showProduct=$product -> getListProduct();
    $showContact = $contact ->getListContactReaded();
    $tkmoney=$cart -> getTKMoney();
    $countOrder =$cart -> countOrder();
    $countOrderTT =$cart -> countOrderTT();
    $countProduct=$product -> countProduct();
    $showUser =$user -> getUser();
    
    //    include'view/register.php';
    //    include'view/login.php';

    include'view/ad-header.php';
    $action = "home";
    if(isset($_GET['ctrl'])){
        $action=$_GET['ctrl'];
    }

    switch($action){
        case 'login':
            // if(isset($_POST['btn_submit'])){
            //     $e=$_POST['email'];
            //     $p=$_POST['password'];
            //     if(checklogin($e,$p)){
            //         $_SESSION['admin']=$e;
            //     }
                header('location:index.php');
            // }
            // else{
            //     include 'view/error404.php';
            // }
        break;

        case 'logout':
            unset($_SESSION['admin']);
            header('location:index.php');
        break;

        case 'home':
            include'view/ad-home.php';
        break;
        
        case 'contact':
            include'view/ad-home.php';
        break;
        
        case 'user':

            if(isset($_GET['action'])){
                if($_GET['action']=="add"){
                    if(empty($_POST['id'])){
                        $ten=$_POST['tenuser'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $phone=$_POST['phone'];
                        $diachi=$_POST['diachi'];
                        $role=$_POST['role'];
                      
                        $adduser = $user -> adduser($ten,$pass,$email,$phone,$diachi,$role);
                    }
                    else{
                        $id=$_POST['id'];
                        $ten=$_POST['tenuser'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $phone=$_POST['phone'];
                        $diachi=$_POST['diachi'];
                        $role=$_POST['role'];
                        $updateuser = $user -> updateuser($id,$ten,$pass,$email,$phone,$diachi,$role);
                    }
                    header('location:index.php?ctrl=user');
                }

                 else if($_GET['action']=="del"){
                    $id=$_GET['idxoa'];
                     $delUser = $user ->deleteuser($id);
                    header('location:index.php?ctrl=user');
                }
                else if($_GET['action']=="edit"){
                    if(isset($_GET['idsua'])){
                        $id=$_GET['idsua'];
                        $checkUser=$user -> getUserId($id);
                    }
                }
            }

                

            include'view/ad-user.php';
        break;


        case 'product':
            if(isset($_GET['action'])){
                if($_GET['action']=="add"){
                    if(empty($_POST['id'])){
                        $ten=$_POST['tensp'];
                        $chitiec=$_POST['chitiecsp'];
                        $giathuc=$_POST['giathuc'];
                        $giaban=$_POST['giaban'];
                        $mota=$_POST['motasp'];
                        $anh=$_POST['anhsp'];
                        $dm=$_POST['numberdanhmuc'];
                        $sl_ton=$_POST['sl_ton'];
                        $th=$_POST['brand'];
                        $lx=$_POST['luotxem'];
                        $lt=$_POST['luotthich'];
                        $time=date('y-m-d H:i:s');
                        $addproduct = $product -> addProduct($ten,$giaban,$giathuc,$mota,$chitiec,$anh,$dm,$th,$sl_ton,$lx,$lt,$time);
                    }
                    else{
                        $id=$_POST['id'];
                        $ten=$_POST['tensp'];
                        $chitiec=$_POST['chitiecsp'];
                        $mota=$_POST['motasp'];
                        $giathuc=$_POST['giathuc'];
                        $giaban=$_POST['giaban'];
                        $anh=$_POST['anhsp'];
                        $dm=$_POST['numberdanhmuc'];
                        $th=$_POST['brand'];
                        $lx=$_POST['luotxem'];
                        $lt=$_POST['luotthich'];
                        $time=date('y-m-d H:i:s');
                        $updateproduct = $product -> updateProduct($id,$ten,$giaban,$giathuc,$mota,$chitiec,$anh,$dm,$th,$sl_ton,$lx,$lt,$time);
                    }
                    header('location:index.php?ctrl=product');
                }

                 else if($_GET['action']=="del"){
                    $id=$_GET['idxoa'];
                     $addproduct = $product ->deleteproduct($id);
                    header('location:index.php?ctrl=product');
                }
                else if($_GET['action']=="edit"){
                    if(isset($_GET['idsua'])){
                        $id=$_GET['idsua'];
                        $checkProduct=$product -> getListProductId2($id);
                    }
                }
            }


            include'view/ad-product.php';
        break;

        case 'brand':
            include'view/ad-brand.php';
        break;

        case 'cart':
            // if(isset($_GET['id']) && isset($_POST['submit'])){
            //     $soluong=$_POST['soluong'];
            //     $proid=$_GET['id'];
            //     $time=date('y-m-d H:i:s');
            //     $details=orderBook($proid, $makh ,$soluong ,$time);                    
            // }
            $showCart=$cart -> getListCart();
            include'view/ad-cart.php';
        break; 

        case 'catalog':
             if(isset($_GET['action'])){
                if($_GET['action']=="add"){
                    if(empty($_POST['id'] && isset($_POST['tendanhmuc']) )){
                        $tencata=$_POST['tendanhmuc'];
                        $addcata = $showMenus -> addcata($tencata);
                    }
                    else{
                        $tencata=$_POST['tendanhmuc'];
                        $idcata=$_POST['id'];
                        $updatecata = $showMenus ->updatecata($tencata,$idcata);
                    }
                    header('location:index.php?ctrl=catalog');
                }
                else if($_GET['action']=="del"){
                    $delcata = $showMenus ->deletecata($_GET['idxoa']);
                    header('location:index.php?ctrl=catalog');
                }
                else if($_GET['action']=="edit"){
                    $id=$_GET['idsua'];
                    $editcata=$showMenus ->getListCatalogId($id);
                }
            }
            include'view/ad-catalog.php';
        break;      
        // case 'blog':
        //     include'view/ad-blog.php';
        // break;
    }
    include'view/ad-footer.php';
?>