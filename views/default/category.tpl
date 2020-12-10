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
                                    <div class="product-price">₴{$item['price']}</div>
                                </div>
                            </div>
                        </div>
                    {/foreach}
                </div>
                <div class="pagination-container pagination-blog button-v text-center">
                    <nav>
                        <ul class="pagination">

                            {if {$paginator['currentPage']} != 1} <!--Стрелка назад-->
                                <li>
                                    <a href="{$paginator['link']}{$paginator['currentPage']-1}" aria-label="Previous" >
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="00px"
                                             viewBox="0 0 240.823 240.823" style="enable-background:new 0 0 240.823 240.823;margin-top: 50%;transform: translateY(-50%);" xml:space="preserve" height='13px'>
                                            <g>
                                                <path id="Chevron_Right" d="M57.633,129.007L165.93,237.268c4.752,4.74,12.451,4.74,17.215,0c4.752-4.74,4.752-12.439,0-17.179
                                                      l-99.707-99.671l99.695-99.671c4.752-4.74,4.752-12.439,0-17.191c-4.752-4.74-12.463-4.74-17.215,0L57.621,111.816
                                                      C52.942,116.507,52.942,124.327,57.633,129.007z" fill='#bdbdbd'/>
                                            </g>
                                        </svg>


                                    </a>
                                </li>
                            {/if}

                            {if ({$paginator['currentPage']} - 1)>0} <!--Страница назад-->
                                <li><a href='{$paginator['link']}{$paginator['currentPage']-1}'>{$paginator['currentPage']-1}</a></li>
                                {/if}
                            
                            
                            <!-- Активная страница-->
                            <li><a class="active" href="{$paginator['link']}{$paginator['currentPage']}">{$paginator['currentPage']}</a></li>
                            
                                {if ({$paginator['currentPage']} + 1) <= {$paginator['pageCnt']}}<!--Страница вперед-->
                                <li><a href='{$paginator['link']}{$paginator['currentPage']+1}'>{$paginator['currentPage']+1}</a></li>
                                {/if}

                            {if {$paginator['currentPage']} != {$paginator['pageCnt']}}<!--Стрелка вперед-->
                                <li>
                                    <a href="{$paginator['link']}{$paginator['currentPage']+1}" aria-label="Previous">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 240.823 240.823" style="enable-background:new 0 0 240.823 240.823;margin-top: 50%;transform: translateY(-50%);" xml:space="preserve" height='13px'>
                                            <g>
                                                <path id="Chevron_Right_1_" d="M183.189,111.816L74.892,3.555c-4.752-4.74-12.451-4.74-17.215,0c-4.752,4.74-4.752,12.439,0,17.179
                                                      l99.707,99.671l-99.695,99.671c-4.752,4.74-4.752,12.439,0,17.191c4.752,4.74,12.463,4.74,17.215,0l108.297-108.261
                                                      C187.881,124.315,187.881,116.495,183.189,111.816z" fill='#bdbdbd'/>
                                            </g>
                                        </svg>

                                    </a>
                                </li>
                            {/if}
                        </ul>
                    </nav>
                </div>
            </div> 
        </div>  
    </div> 
</div>