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

