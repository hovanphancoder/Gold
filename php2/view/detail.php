 <?php
foreach($showDetailProduct as $d){
    echo'
 <section class="breadcrumb-section set-bg" data-setbg="img/banner/mayanh2.jpg">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <div class="breadcrumb__text">
                      <h2>Chi tiếc sản phẩm</h2>
                      <div class="breadcrumb__option">
                          <a href="./index.html">Home</a>
                          <a href="./index.html">Máy ảnh</a>
                          <span>Vegetable’s Package</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- Product Details Section Begin -->
  <section class="product-details spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6">
                  <div class="product__details__pic">
                      <div class="product__details__pic__item">
                          <img class="product__details__pic__item--large"
                              src="img/product/'.$d['img'].'" alt="">
                      </div>
                     
                      <div class="product__details__pic__slider owl-carousel">
                          <img data-imgbigurl="img/product/details/product-details-2.jpg"
                              src="img/product/sp1.jpg" alt="">
                          <img data-imgbigurl="img/product/details/product-details-3.jpg"
                              src="img/product/sp2.jpg" alt="">
                          <img data-imgbigurl="img/product/details/product-details-5.jpg"
                              src="img/product/sp3.jpg" alt="">
                          <img data-imgbigurl="img/product/details/product-details-4.jpg"
                              src="img/product/sp4.jpg" alt="">
                              
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6">
                  <div class="product__details__text">
                      <h3>'.$d['name'].'</h3>
                      <div class="product__details__rating">
                        
                          <span>('.$d['luotxem'].' views)</span>
                      </div>
                      <div class="product__details__price">'.
                      number_format($d['giathuc'],0,".",",").'.đ
                      </div>
                      <p>'.$d['mota'].'</p>
                      <form action="index.php?ctrl=cart&action=add" method="post">
                      <input type="hidden" name="idpro" value="'.$d['id'].'">
                       <input type="hidden" name="gia" value="'.$d['giaban'].'">
                        <input type="hidden" name="img" value="'.$d['img'].'">
                    <input type="hidden" name="name" value="'.$d['name'].'">
                      <div class="product__details__quantity">
                          <div class="quantity">
                              <div class="pro-qty">
                                  <input type="text" name="soluong" value="1">
                              </div>
                          </div>
                      </div>
                      <input type="submit" name="addcart" class="primary-btn" value="ADD TO CARD">
                  </form>
                      <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                  
                  </div>
              </div>
              <div class="col-lg-12">
                  <div class="product__details__tab">
                      <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                  aria-selected="true">Description</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                  aria-selected="false">Information</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                  aria-selected="false">Reviews <span>(1)</span></a>
                          </li>
                      </ul>
                      <div class="tab-content">
                          <div class="tab-pane active" id="tabs-1" role="tabpanel">
                              <div class="product__details__tab__desc">
                                  <h6>Products Infomation</h6>
                                  <p>'.$d['thongtinthem'].'</p>
                              </div>
                          </div>
                          <div class="tab-pane" id="tabs-2" role="tabpanel">
                              <div class="product__details__tab__desc">
                                  <h6>Products Infomation</h6>
                                  <p>'.$d['thongtinthem'].'</p>

                              </div>
                          </div>
                          <div class="tab-pane" id="tabs-3" role="tabpanel">
                              <div class="product__details__tab__desc">
                                  <h6>Products Infomation</h6>
                                  <p>'.$d['thongtinthem'].'</p>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Product Details Section End -->
  ';
}
?>


 <section class="related-product">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="section-title related__product__title">
                     <h2>Related Product</h2>
                 </div>
             </div>
         </div>
         <div class="row">
             <?php     
                foreach($showProduct as $e){
                    echo'
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/'.$e['img'].'">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="index.php?ctrl=detail&id='.$e['id'].'">'.$e['name'].'</a></h6>
                                    <h5>'.number_format($e['giaban'],0,".",",").'.đ</h5>
                                </div>
                            </div>
                        </div>
                    ';
                }
            ?>


         </div>
     </div>
 </section>