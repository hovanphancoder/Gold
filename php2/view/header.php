<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>camera php2</title>

    <link rel="icon" href="img/camera.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/camera.png" type="image/x-icon">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
    /* .opt-brant {} */

    .opt-brant :hover>li {
        display: block;
    }

    .opt-brant>li {
        display: none;
    }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/camera.png" width="50px" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i>
                        <span>

                        </span>
                    </a></li>
                <li><a href="index.php?ctrl=cart"><i class="fa fa-shopping-bag"></i>
                        <span>
                            <?php
                        foreach($showNumberCart as $t){
                         echo $t['numbercart'];
                        }?>
                        </span>
                    </a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" width="50px" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Trang chủ</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="index.php?ctrl=product">thương hiệu</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.php">Blog</a></li>
                <li><a href="./contact.php">liên hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hovanphancoder@gmail.com</li>
                <li>Miễn phí giao hàng cho hóa đơn lớn hơn 5 triệu</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hovanphancoder@gmail.com</li>
                                <li>Miễn phí giao hàng cho hóa đơn lớn hơn 5 triệu</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="header__top__right">
                            <!-- <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div> -->
                            <!-- <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div> -->
                            <div class="header__cart">
                                <ul>
                                    <li><a href=" #"><i class="fa fa-heart"></i> <span>1</span></a></li>
                                    <li><a href="index.php?ctrl=cart"><i class="fa fa-shopping-bag"></i>
                                            <!-- full screen -->
                                            <span>
                                                <?php
                        foreach($showNumberCart as $t){
                         echo $t['numbercart'];
                        }?>
                                            </span>
                                        </a></li>
                                    <li class="header__top__right__auth"> <a href="index.php?ctrl=login"><i
                                                class="fa fa-user"></i> Login</a>
                                    </li>
                                </ul>
                                <!-- <div class="header__cart__price">item: <span>$150.00</span></div> -->
                            </div>
                            <!-- <div class="header__top__right__auth">
                                <a href="index.php?ctrl=login"><i class="fa fa-user"></i> Login</a>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-lg-3">
                        <div class="header__cart">
                            <ul>
                                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                            </ul>
                            <div class="header__cart__price">item: <span>$150.00</span></div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/camera.png" width=80px alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="index.php">Trang chủ</a></li>
                            <!-- <li><a href="./shop-grid.html">Shop</a></li> -->
                            <li><a href="index.php?ctrl=product">Thương hiệu</a>
                                <ul class="header__menu__dropdown">
                                    <?php
                                    
                                foreach($showBrand as $b){
                                    echo'
                                    <li><a href="index.php?ctrl=brand&id='.$b['id'].'">'.$b['name'].'</a></li>
                                    ';
                                }
                                ?>
                                    <li><a href="./shoping-cart.htm  l">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="index.php?ctrl=blog">Blog</a></li>
                            <li><a href="index.php?ctrl=contact">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh mục</span>
                        </div>
                        <ul>


                            <?php 
                           
                             foreach($showMenu as $value){ 
                                 echo' <li><a href="index.php?ctrl=catalog&id='.$value['id'].'">'.$value['namecata'].'</a></li>';}
                            ?>

                            <!-- <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="index.php?ctrl=search" method="post">
                                <!-- <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>

                                </div> -->
                                <input type="text" name="textsearch" placeholder="What do you need?">
                                <button type="submit" name="xnSearch" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 332.519.218</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>