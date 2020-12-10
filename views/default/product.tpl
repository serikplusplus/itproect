<div class="container">
    <div class="single-product-detail product-bundle product-aff">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-6">
                <div class="product-images">
                    <div class="main-img js-product-slider">
                        <a href="#" class="hover-images effect"><img src="/images/products/{$rsProduct['image']}" alt="photo" class="img-reponsive"></a>
                        <a href="#" class="hover-images effect"><img src="/images/products/{$rsProduct['image1']}" alt="photo" class="img-reponsive"></a>
                        <a href="#" class="hover-images effect"><img src="/images/products/{$rsProduct['image2']}" alt="photo" class="img-reponsive"></a>
                    </div>
                </div>
                <div class="multiple-img-list-ver2 js-click-product">
                    <div class="product-col">
                        <div class="img active">
                            <img src="/images/products/{$rsProduct['image']}" alt="photo" class="product-img img-reponsive ">
                        </div>
                    </div>
                    <div class="product-col">
                        <div class="img">
                            <img src="/images/products/{$rsProduct['image1']}" alt="images" class="product-img img-responsive ">
                        </div>
                    </div>
                    <div class="product-col">
                        <div class="img">
                            <img src="/images/products/{$rsProduct['image2']}" alt="images" class="product-img img-responsive ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-6">
                <div class="single-product-info">
                    <div class="rating-star">
                        {if isset($seller)}  
                            <span class="review">{$seller}</span>
                        {else}
                        {/if}
                    </div>
                    <h3 class="product-title"><a href="#">{$rsProduct['name']}</a></h3>
                    <div class="product-price">
                        <span>₴{$rsProduct['price']}</span>
                    </div>
                    <p class="product-desc">{$rsProduct['description']}</p>
                    <div class="action v3">
                        {if isset($arUserId)}  
                        {if $sellerId eq $arUserId}  
                            <a href="/product/changeproduct/{$rsProduct['id']}/" class="link-ver1 add-cart">Изменить</a>                      
                        {else}
                            <a href="#" class="link-ver1 add-cart">Купить</a>
                        {/if}
                        {else}
                            <a href="#" class="link-ver1 add-cart">Купить</a>
                        {/if}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--single-product-detail-->
</div>
