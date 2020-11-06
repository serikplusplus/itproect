<div class="container">
            <div class="single-product-detail product-bundle product-aff">
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-6">
                        <div class="product-images">
                            <div class="main-img js-product-slider">
                                <a href="#" class="hover-images effect"><img src="/images/products/{$rsProduct['image']}" alt="photo" class="img-reponsive"></a>
                                <a href="#" class="hover-images effect"><img src="img/bottle_3.jpg" alt="photo" class="img-reponsive"></a>
                                <a href="#" class="hover-images effect"><img src="img/bottle2.jpg" alt="photo" class="img-reponsive"></a>
                            </div>
                        </div>
                        <div class="multiple-img-list-ver2 js-click-product">
                            <div class="product-col">
                                <div class="img active">
                                    <img src="/images/products/{$rsProduct['image']}" alt="photo" class="img-reponsive">
                                </div>
                            </div>
                            <div class="product-col">
                                <div class="img">
                                    <img src="img/bottle_3.jpg" alt="images" class="img-responsive">
                                </div>
                            </div>
                            <div class="product-col">
                                <div class="img">
                                    <img src="img/bottle2.jpg" alt="images" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-6">
                        <div class="single-product-info">
                            <h3 class="product-title"><a href="#">{$rsProduct['name']}</a></h3>
                            <div class="product-price">
                                <span>${$rsProduct['price']}</span>
                            </div>
                            <p class="product-desc">{$rsProduct['description']}</p>
                            <div class="action v3">
                                <a href="#" class="link-ver1 add-cart">Купить</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--single-product-detail-->
        </div>
