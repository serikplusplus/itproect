<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-13 15:51:14
  from 'C:\xampp\htdocs\itproect\views\default\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fae9d627d2100_32002036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fce4ee8aac7ba49d4ed2838c0229e78e09da908c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\default\\nav.tpl',
      1 => 1605278911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fae9d627d2100_32002036 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pushmenu menu-home5">
    <div class="menu-push">
        <span class="close-left js-close"><i class="icon-close f-20"></i></span>
        <div class="clearfix"></div>
        <ul class="nav-home5 js-menubar">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> 
                <li class="level1 dropdown"><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>

                    <ul class="menu-level1 js-open-menu">

                                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?> 

                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChildren');
$_smarty_tpl->tpl_vars['itemChildren']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChildren']->value) {
$_smarty_tpl->tpl_vars['itemChildren']->do_else = false;
?> 
                                <li class="level2"><a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChildren']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChildren']->value['name'];?>
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
        </ul>
    </div>
</div>

<?php }
}
