<section class="breadcrumb-section set-bg" data-setbg="img/banner/mayanh2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Shopping Cart</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $y => $value){
        

                                    echo'<tr>
                                        <td class="shoping__cart__item">
                                            <img src="img/product/'.$value['img'].'" width="50px" alt="">
                                            <h5>'.$value['name'].'</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                        '.$value['gia'].' đ
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" name="soluong" value="'.$value['soluong'].'">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">
                                    '.$value['gia']*$value['soluong'].'đ
                                        </td>
                                        <td onclick="" class="shoping__cart__item__close">
                                            <a href="index.php?ctrl=cart&action=del"><span class="icon_close"></span></a>
                                        </td>
                                    </tr>';
                                }
                            }else{
                                echo'<center>Giỏ hàng đang trống</center>';
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="index.php?ctrl=product" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                        Upadate Cart</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Discount Codes</h5>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">APPLY COUPON</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Subtotal <span>$454.98</span></li>
                        <li>Total <span>$454.98</span></li>
                    </ul>
                    <a href="index.php?ctrl=checkcart" class="primary-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>