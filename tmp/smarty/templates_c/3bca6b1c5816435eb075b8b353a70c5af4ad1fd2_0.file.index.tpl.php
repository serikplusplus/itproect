<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-27 17:45:22
  from 'C:\xampp\htdocs\itproect\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc12d2202c1d1_63303248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bca6b1c5816435eb075b8b353a70c5af4ad1fd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\default\\index.tpl',
      1 => 1606495518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc12d2202c1d1_63303248 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="slider-homesimple">
    <div class="container container-42">
        <div class="row">
            <div class="col-sm-12 col-lg-10 col-lg-offset-1">
                <div class="text-center js-homesimple-slider">
                    <div class="slider-img ">
                        <img src="images/g1.jpg" alt="" class="img-responsive">
                        <div class="slider-content text-center">
                            <h3>До -50% на все товары</h3>
                            <a href="">Смотреть</a>
                        </div>
                    </div>
                    <div class="slider-img ">
                        <img src="images/g2.jpg" alt="" class="img-responsive">
                        <div class="slider-content text-center">
                            <h3>1 грн за доставку</h3>
                            <a href="">Смотреть</a>
                        </div>
                    </div>
                    <div class="slider-img ">
                        <img src="images/g3.jpg" alt="" class="img-responsive">
                        <div class="slider-content text-center">
                            <h3>Кредит со скидками</h3>
                            <a href="">Смотреть</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h3 class="lookbook-title">Новые обьявления</h3>
    <div class="owl-carousel owl-theme js-owl-loobook">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> 
            <div class="item" style="text-align: center;">
                <div class="product-images">
                    <a href="product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="hover-images effect"><img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="products"    height="200px"   class="img-reponsive"></a>

                    <a href="#product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="btn-quickview">QUICK VIEW</a>
                </div>
                <div class="product-info-ver2">
                    <h3 class="product-title"><a href="product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h3>
                    <div class="product-after-switch">
                        <div class="product-price">₴<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</div>
                        <div class="product-after-button">

                        </div>
                    </div>
                    <div class="product-price">₴<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
</div>

<?php }
}
