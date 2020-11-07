<div class="wrap-gallery">
    <div class="container container-42">
                <div class="heading-gallery">
                    <p>
                   {$catTitle}
                   </p>
                </div>
    </div>
</div>
<div class="product-standard product-grid">
    <div class="container container-32">
        <div class="tab-content">
            <div id="all" class="tab-pane fade in active">
                <div class="row">

 {foreach $rsProducts as $item name=products} 
     
     <div class="col-md-15 col-sm-3 col-xs-6 product-item">
                            <div class="product-images">
                                <a href="/product/{$item['id']}/" class="hover-images effect"><img src="/images/products/{$item['image']}"  height="200px" alt="photo" class="img-reponsive"></a>
                                <a href="/product/{$item['id']}/" class="btn-quickview">QUICK VIEW</a>
                            </div>
                            <div class="product-info-ver2">
                                <h3 class="product-title"><a href="/product/{$item['id']}/">{$item['name']}</a></h3>
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
</div>