<section class="breadcrumb-section set-bg" data-setbg="img/banner/mayanh2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Product</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Key search = "
                            <?php echo $keysearch;?>"
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="featured spad">
    <div class="container">

        <div class="row featured__filter">


            <?php
            foreach($getsearch as $k){
                                echo'
                              <div class="col-lg-3 col-md-4 col-sm-6 mix  fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/product/'.$k['img'].'">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="index.php?ctrl=detail&id='.$k['id'].'"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="index.php?ctrl=detail&id='.$k['id'].'">'.$k['name'].'</a></h6>
                        <h5>  '. number_format($k['giathuc'],0,".",",").'.đ</h5>
                    </div>
                </div>
            </div>
                                ';
                            }
                        ?>


        </div>
    </div>
</section>