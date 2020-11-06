  <div class="slider-homesimple">
            <div class="container container-42">
                <div class="row">
                    <div class="col-sm-12 col-lg-10 col-lg-offset-1">
                        <div class="text-center js-homesimple-slider">
                            <div class="slider-img ">
                                <img src="images/homesimple_1.jpg" alt="" class="img-responsive">
                                <div class="slider-content text-center">
                                    <h3>Mid Season Sale </h3>
                                    <a href="">Explorer Now</a>
                                </div>
                            </div>
                            <div class="slider-img ">
                                <img src="images/homesimple_1.jpg" alt="" class="img-responsive">
                                <div class="slider-content text-center">
                                    <h3>Mid Season Sale </h3>
                                    <a href="">Explorer Now</a>
                                </div>
                            </div>
                            <div class="slider-img ">
                                <img src="images/homesimple_1.jpg" alt="" class="img-responsive">
                                <div class="slider-content text-center">
                                    <h3>Mid Season Sale </h3>
                                    <a href="">Explorer Now</a>
                                </div>
                            </div>
                            <div class="slider-img ">
                                <img src="images/homesimple_1.jpg" alt="" class="img-responsive">
                                <div class="slider-content text-center">
                                    <h3>Mid Season Sale </h3>
                                    <a href="">Explorer Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{*<div class="slider-homesimple">
            <div class="container container-42">
                <div class="row">
                    <div class="col-sm-12 col-lg-10 col-lg-offset-1">
                        <div class="text-center js-homesimple-slider">
                            <div class="slider-img ">
                                <img src="images/homesimple_1.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="slider-img ">
                                <img src="images/homesimple_1.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="slider-img ">
                                <img src="images/homesimple_1.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="slider-img ">
                                <img src="images/homesimple_1.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>*}
<div class="container">
            <h3 class="lookbook-title">Новые обьявления</h3>
            <div class="owl-carousel owl-theme js-owl-loobook">
                                 {foreach $rsProducts as $item name=products} 
      <div class="item">
                    <div class="product-images">
                        <a href="product/{$item['id']}/" class="hover-images effect"><img src="/images/products/{$item['image']}" alt="products"  height="186px" class="img-reponsive"></a>
                 
                        <a href="#product/{$item['id']}/" class="btn-quickview">QUICK VIEW</a>
                    </div>
                    <div class="product-info-ver2">
                        <h3 class="product-title"><a href="product/{$item['id']}/">{$item['name']}</a></h3>
                        <div class="product-after-switch">
                            <div class="product-price">{$item['price']}</div>
                            <div class="product-after-button">
                               
                            </div>
                        </div>
                        <div class="product-price">{$item['price']}</div>
                    </div>
                </div>
 {/foreach}
                               
                            </div>
                        </div>
{*<div class="product-standard product-grid">
    <div class="container container-32">
        <div class="tab-content">
            <div id="all" class="tab-pane fade in active">
                <div class="row">

 {foreach $rsProducts as $item name=products} 
     
     <div class="col-md-15 col-sm-3 col-xs-6 product-item">
                            <div class="product-images">
                                <a href="product/{$item['id']}" class="hover-images effect"><img src="images/products/{$item['image']}" width="140px" height="186px" alt="photo" class="img-reponsive"></a>
                                <a href="#" class="btn-quickview">QUICK VIEW</a>
                            </div>
                            <div class="product-info-ver2">
                                <h3 class="product-title"><a href="product/{$item['id']}">{$item['name']}</a></h3>
                                <div class="product-after-switch">
                                    <div class="product-price">{$item['price']}</div>
                                </div>
                            </div>
                        </div>
 {/foreach}
</div>
</div>
</div>
</div>
</div>*}
