<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-02 16:14:09
  from 'C:\xampp\htdocs\itproect.local\views\default\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa02241be20b5_55365864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebf3f30b931555fd60b1d501ce08871e33837712' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect.local\\views\\default\\nav.tpl',
      1 => 1604330041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa02241be20b5_55365864 (Smarty_Internal_Template $_smarty_tpl) {
?>        <div class="pushmenu pushmenu-left cart-box-container">
        <div class="cart-list">
            <span class="close-left js-close">x</span>
            <h3 class="cart-title">Your Cart</h3>
            <div class="nocart-list">
                <div class="empty-cart">
                    <h4 class="nocart-title">No products in the cart.</h4>
                    <a href="" class="btn-shop btn-arrow">Start shopping</a>
                </div>
            </div>
            <div class="cart-bottom">
                <a href="#" class="text">Our Shipping & Return Policy</a>
            </div>
        </div>
        </div>

  <div class="header-top">
                <div class="container container-40">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="logo-mobile hidden-lg hidden-md">
                                <a href="" title="home-logo"><img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
img/cosre.png" alt="logo" class="img-reponsive"></a>
                            </div>
                            <!--end logo-->
                            <button type="button" class="navbar-toggle icon-mobile" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-menu"></span>
                            </button>
                            <nav class="navbar main-menu">
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav js-menubar">
                                                                                               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> 
                                                <li class="level1 dropdown"><a href="?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                                                <span class="plus js-plus-icon"></span>
                                                <ul class="menu-level-1 dropdown-menu ">
                                                    
                                                                                                         <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?> 
                                                         
                                                                                                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChildren');
$_smarty_tpl->tpl_vars['itemChildren']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChildren']->value) {
$_smarty_tpl->tpl_vars['itemChildren']->do_else = false;
?> 
                                                             <li class="level2"><a href="?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChildren']->value['name'];?>
</a></li>
                                                         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                     <?php }?>
                                                </ul>
                                                </li>
                                             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                             <li class="level1 dropdown hidden-lg hidden-md"><a href="#"><i class="icon-user f-15"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

       <?php }
}
