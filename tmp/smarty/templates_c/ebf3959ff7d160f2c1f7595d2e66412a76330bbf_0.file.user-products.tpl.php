<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 16:14:50
  from 'C:\xampp\htdocs\itproect\views\default\user-products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbd236a16ad70_83342583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebf3959ff7d160f2c1f7595d2e66412a76330bbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\default\\user-products.tpl',
      1 => 1606230519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd236a16ad70_83342583 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-standard product-grid">
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
            </div> 
        </div>  
    </div> 
</div><?php }
}
