<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-25 14:32:15
  from 'C:\xampp\htdocs\itproect.local\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f957e5f8976c6_19075235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01bebea716f8b2aeb26977ea9e2b87b0dc6d247b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect.local\\views\\default\\index.tpl',
      1 => 1603632731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f957e5f8976c6_19075235 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> 
     
     <div class="col-md-15 col-sm-3 col-xs-6 product-item">
                            <div class="product-images">
                                <a href="product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="hover-images effect"><img src="images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="240px" height="286px" alt="photo" class="img-reponsive"></a>
                                <a href="#" class="btn-quickview">QUICK VIEW</a>
                            </div>
                            <div class="product-info-ver2">
                                <h3 class="product-title"><a href="product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h3>
                                <div class="product-after-switch">
                                    <div class="product-price"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</div>
                                </div>
                            </div>
                        </div>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
