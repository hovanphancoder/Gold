<section class="breadcrumb-section set-bg" data-setbg="img/banner/mayanh2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Product</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Home</a>
                        <span>All Product</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="featured__controls">
                    <ul class="opt-brant">
                        <li class="active" data-filter="*">Tất cả thương hiệu</li>
                        <?php
                            foreach($showBrand as $u){
                                echo'
                                <li class="active" data-filter=".'.$u['tag'].'">'.$u['name'].'</li>
                                ';
                            }
                        ?>
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
                            <li><a href="index.php?ctrl=detail&id='.$i['id'].'"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="index.php?ctrl=cart&id='.$i['id'].'"><i class="fa fa-shopping-cart"></i></a></li>
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