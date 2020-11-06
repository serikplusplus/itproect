<div class="pushmenu menu-home5">
        <div class="menu-push">
            <span class="close-left js-close"><i class="icon-close f-20"></i></span>
            <div class="clearfix"></div>
            <ul class="nav-home5 js-menubar">
                
                {foreach $rsCategories as $item} 
                    <li class="level1 dropdown"><a href="#">{$item['name']}</a>
                        
                        <ul class="menu-level1 js-open-menu">
                                                    
                    {*Проверка на наличие подкатегорий*}
                    {if isset($item['children'])} 
                                                         
                    {*Вывод подкатегорий товаров*}
                    {foreach $item['children'] as $itemChildren} 
                        <li class="level2"><a href="/category/{$itemChildren['id']}/">{$itemChildren['name']}</a></li>
                    {/foreach}
                    {/if}
                        </ul>
                    </li>
                 {/foreach}
            </ul>
        </div>
</div>
                 
                 
                 
{*  <div class="header-top">
                <div class="container container-40">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="logo-mobile hidden-lg hidden-md">
                                <a href="/" title="home-logo"><img src="{$templateWebPath}img/cosre.png" alt="logo" class="img-reponsive"></a>
                            </div>
                            <!--end logo-->
                            <button type="button" class="navbar-toggle icon-mobile" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-menu"></span>
                            </button>
                            <nav class="navbar main-menu">
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav js-menubar">
                                                   {*Вывод главных категорий товаров
                                            {foreach $rsCategories as $item} 
                                                <li class="level1 dropdown"><a href="?controller=category&id={$item['id']}">{$item['name']}</a>
                                                <span class="plus js-plus-icon"></span>
                                                <ul class="menu-level-1 dropdown-menu ">
                                                    
                                                    {*Проверка на наличие подкатегорий
                                                     {if isset($item['children'])} 
                                                         
                                                         {*Вывод подкатегорий товаров
                                                         {foreach $item['children'] as $itemChildren} 
                                                             <li class="level2"><a href="?controller=category&id={$itemChildren['id']}">{$itemChildren['name']}</a></li>
                                                         {/foreach}
                                                     {/if}
                                                </ul>
                                                </li>
                                             {/foreach}
                                             <li class="level1 dropdown hidden-lg hidden-md"><a href="#"><i class="icon-user f-15"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>*}

       