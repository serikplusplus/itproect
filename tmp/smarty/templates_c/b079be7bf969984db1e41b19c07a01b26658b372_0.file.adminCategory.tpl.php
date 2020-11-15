<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-15 17:14:52
  from 'C:\xampp\htdocs\itproect\views\admin\adminCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb153fc5cd041_65736803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b079be7bf969984db1e41b19c07a01b26658b372' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\admin\\adminCategory.tpl',
      1 => 1605456791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb153fc5cd041_65736803 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="faq js-faq">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <div class="faq-content">
                <p class="faq-quest">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                </p>
                <span class="plus js-plus-icon"></span>
                <div class="faq-answer">
                    <div action="#" class="comment-form contact-form form-customer">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2 col-xs-12">
                                    <label>ID</label>
                                    <input type="text" readonly="readonly" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                </div>
                                <div class="col-md-5 col-xs-12">
                                    <label>Название</label>
                                    <input type="edit" name="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
                                </div>
                                <div class="col-md-5 col-xs-12">
                                    <label>Родительская категория</label>
                                    <select class="form-control form-account" id="parentId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="setNewCategoriParentId">
                                        <option value="0">Главная категория</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsMainCategories']->value, 'mainitem');
$_smarty_tpl->tpl_vars['mainitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mainitem']->value) {
$_smarty_tpl->tpl_vars['mainitem']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['mainitem']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id'] == $_smarty_tpl->tpl_vars['mainitem']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['mainitem']->value['name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                        </div>
                                    <button class="btn btn-submit ver2" onclick="updateCat(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);" >Сохранить</button>
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
