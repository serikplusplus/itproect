<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 13:59:13
  from 'C:\xampp\htdocs\itproect\views\default\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa548a1962880_57181121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7232c3f8e80e4881c58ad4c073916143fe42156f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\default\\product.tpl',
      1 => 1604667546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa548a1962880_57181121 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
            <div class="single-product-detail product-bundle product-aff">
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-6">
                        <div class="product-images">
                            <div class="main-img js-product-slider">
                                <a href="#" class="hover-images effect"><img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" alt="photo" class="img-reponsive"></a>
                                <a href="#" class="hover-images effect"><img src="img/bottle_3.jpg" alt="photo" class="img-reponsive"></a>
                                <a href="#" class="hover-images effect"><img src="img/bottle2.jpg" alt="photo" class="img-reponsive"></a>
                            </div>
                        </div>
                        <div class="multiple-img-list-ver2 js-click-product">
                            <div class="product-col">
                                <div class="img active">
                                    <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" alt="photo" class="img-reponsive">
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
                            <h3 class="product-title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</a></h3>
                            <div class="product-price">
                                <span>$<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
</span>
                            </div>
                            <p class="product-desc"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
                            <div class="action v3">
                                <a href="#" class="link-ver1 add-cart">Купить</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--single-product-detail-->
        </div>
<?php }
}
