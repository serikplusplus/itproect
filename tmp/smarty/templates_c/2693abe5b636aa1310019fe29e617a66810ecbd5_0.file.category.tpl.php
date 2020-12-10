<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 17:25:01
  from 'C:\xampp\htdocs\itproect\views\default\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc279dd9de500_16907085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2693abe5b636aa1310019fe29e617a66810ecbd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\default\\category.tpl',
      1 => 1606580675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc279dd9de500_16907085 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrap-gallery">
    <div class="container container-42">
        <div class="heading-gallery">
            <p>
                <?php echo $_smarty_tpl->tpl_vars['catTitle']->value;?>

            </p>
        </div>
    </div>
</div>
<div class="product-standard product-grid">
    <div class="container container-32">
        <div class="tab-content">
            <div id="all" class="tab-pane fade in active">
                <div class="row">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> 

                        <div class="col-md-15 col-sm-3 col-xs-6 product-item">
                            <div class="product-images">
                                <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="hover-images effect"><img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
"  height="200px" alt="photo" class="img-reponsive"></a>
                                <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="btn-quickview">QUICK VIEW</a>
                            </div>
                            <div class="product-info-ver2">
                                <h3 class="product-title"><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h3>
                                <div class="product-after-switch">
                                    <div class="product-price">₴<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</div>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="pagination-container pagination-blog button-v text-center">
                    <nav>
                        <ul class="pagination">

                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 != 1) {?> <!--Стрелка назад-->
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['link'];
echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage']-1;?>
" aria-label="Previous" >
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
                            <?php }?>

                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage'];
$_prefixVariable2 = ob_get_clean();
if (($_prefixVariable2-1) > 0) {?> <!--Страница назад-->
                                <li><a href='<?php echo $_smarty_tpl->tpl_vars['paginator']->value['link'];
echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage']-1;?>
'><?php echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage']-1;?>
</a></li>
                                <?php }?>
                            
                            
                            <!-- Активная страница-->
                            <li><a class="active" href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['link'];
echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage'];?>
"><?php echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage'];?>
</a></li>
                            
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage'];
$_prefixVariable3 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['paginator']->value['pageCnt'];
$_prefixVariable4 = ob_get_clean();
if (($_prefixVariable3+1) <= $_prefixVariable4) {?><!--Страница вперед-->
                                <li><a href='<?php echo $_smarty_tpl->tpl_vars['paginator']->value['link'];
echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage']+1;?>
'><?php echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage']+1;?>
</a></li>
                                <?php }?>

                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage'];
$_prefixVariable5 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['paginator']->value['pageCnt'];
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable5 != $_prefixVariable6) {?><!--Стрелка вперед-->
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['link'];
echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage']+1;?>
" aria-label="Previous">
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
                            <?php }?>
                        </ul>
                    </nav>
                </div>
            </div> 
        </div>  
    </div> 
</div><?php }
}
