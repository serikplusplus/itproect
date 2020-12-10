<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 20:41:50
  from 'C:\xampp\htdocs\itproect\views\default\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc004fe1a6546_94809863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7232c3f8e80e4881c58ad4c073916143fe42156f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\default\\product.tpl',
      1 => 1606411819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc004fe1a6546_94809863 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="single-product-detail product-bundle product-aff">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-6">
                <div class="product-images">
                    <div class="main-img js-product-slider">
                        <a href="#" class="hover-images effect"><img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" alt="photo" class="img-reponsive"></a>
                        <a href="#" class="hover-images effect"><img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image1'];?>
" alt="photo" class="img-reponsive"></a>
                        <a href="#" class="hover-images effect"><img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image2'];?>
" alt="photo" class="img-reponsive"></a>
                    </div>
                </div>
                <div class="multiple-img-list-ver2 js-click-product">
                    <div class="product-col">
                        <div class="img active">
                            <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" alt="photo" class="product-img img-reponsive ">
                        </div>
                    </div>
                    <div class="product-col">
                        <div class="img">
                            <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image1'];?>
" alt="images" class="product-img img-responsive ">
                        </div>
                    </div>
                    <div class="product-col">
                        <div class="img">
                            <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image2'];?>
" alt="images" class="product-img img-responsive ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-6">
                <div class="single-product-info">
                    <div class="rating-star">
                        <?php if ((isset($_smarty_tpl->tpl_vars['seller']->value))) {?>  
                            <span class="review"><?php echo $_smarty_tpl->tpl_vars['seller']->value;?>
</span>
                        <?php } else { ?>
                        <?php }?>
                    </div>
                    <h3 class="product-title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</a></h3>
                    <div class="product-price">
                        <span>₴<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
</span>
                    </div>
                    <p class="product-desc"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
                    <div class="action v3">
                        <?php if ((isset($_smarty_tpl->tpl_vars['arUserId']->value))) {?>  
                        <?php if ($_smarty_tpl->tpl_vars['sellerId']->value == $_smarty_tpl->tpl_vars['arUserId']->value) {?>  
                            <a href="/product/changeproduct/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
/" class="link-ver1 add-cart">Изменить</a>                      
                        <?php } else { ?>
                            <a href="#" class="link-ver1 add-cart">Купить</a>
                        <?php }?>
                        <?php } else { ?>
                            <a href="#" class="link-ver1 add-cart">Купить</a>
                        <?php }?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--single-product-detail-->
</div>
<?php }
}
