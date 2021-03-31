<section class="categories" style="padding-top:30px">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <?php 
                    foreach($showProduct as $a){ 
                        echo'
                        <div class="col-lg-3">
                                <div class="categories__item set-bg" data-setbg="img/product/'.$a['img'].'">
                                <h5><a href="index.php?ctrl=detail&id='.$a['id'].'">'.$a['name'].'</a></h5>
                            </div>
                        </div>
                        ';
                    }
                ?>

            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Top sản phẩm mua nhiều nhất</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <?php
                            foreach($showBrand as $u){
                                echo'
                                <li class="active" data-filter=".'.$u['tag'].'">'.$u['name'].'</li>
                                ';
                            }
                        ?>
                        <!-- <li data-filter=".oranges">Oranges</li>
                        <li data-filter=".fresh-meat">Fresh Meat</li>
                        <li data-filter=".vegetables">Vegetables</li>
                        <li data-filter=".fastfood">Fastfood</li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <?php
            foreach($showProductBrand as $i){
                                echo'
                              <div class="col-lg-3 col-md-4 col-sm-6 mix '.$i['tag'].' fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/product/'.$i['img'].'">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="index.php?ctrl=detail&id='.$i['id'].'">'.$i['name'].'</a></h6>
                        <h5>  '. number_format($i['giathuc'],0,".",",").'.đ</h5>
                    </div>
                </div>
            </div>
                                ';
                            }
                        ?>


        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-1.jpg" height="250px" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-2.jpg" height="250px" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Latest Product Section Begin -->
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">

                <div class="latest-product__text">
                    <h4>Top Máy ảnh bán chạy</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">

                            <?php
                            foreach($showProductdm as $z){
                                // if(count($z['id'])>3){
                                //     echo'd';
                                // }
                               echo'
                            <a href="index.php?ctrl=detail&id='.$z['id'].'" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                     <img src="img/product/'.$z['img'].'" class="img-phan" style="width:110px !important;"   alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>'.$z['name'].'</h6>
                                    <span>'.number_format($z['giaban'],0,".",",").'.đ</span>
                                </div>
                            </a>
                           ';
                           }
                           ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Top ống kính bán chạy</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">

                            <?php
                            foreach($showProductdm2 as $z2){
                                // if(count($z['id'])>3){
                                //     echo'd';
                                // }
                               echo'
                            <a href="index.php?ctrl=detail&id='.$z2['id'].'" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                     <img src="img/product/'.$z2['img'].'" class="img-phan" style="width:110px !important;"   alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>'.$z2['name'].'</h6>
                                    <span>'.number_format($z2['giaban'],0,".",",").'.đ</span>
                                </div>
                            </a>
                           ';
                           }
                           ?>
                        </div>
                        <!-- <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-2.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-3.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Top phụ kiện bán chạy</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <?php
                            foreach($showProductdm3 as $z3){
                                // if(count($z['id'])>3){
                                //     echo'd';
                                // }
                               echo'
                            <a href="index.php?ctrl=detail&id='.$z3['id'].'" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                     <img src="img/product/'.$z3['img'].'" class="img-phan" style="width:110px !important;"   alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>'.$z3['name'].'</h6>
                                    <span>'.number_format($z3['giaban'],0,".",",").'.đ</span>
                                </div>
                            </a>
                           ';
                           }
                           ?>

                        </div>
                        <!-- <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-2.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-3.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Product Section End -->
<!-- tam an blog -->
<!-- Blog Section Begin -->
<!-- 
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="img/blog/blog-1.jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Cooking tips make cooking simple</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="img/blog/blog-2.jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="img/blog/blog-3.jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Visit the clean farm in the US</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Blog Section End -->