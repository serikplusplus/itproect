<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-15 12:58:07
  from 'C:\xampp\htdocs\itproect\views\admin\adminIndex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb117cf908402_22277784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23e732267ae44c351860073dbd977b9c2b6173b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\admin\\adminIndex.tpl',
      1 => 1605441485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb117cf908402_22277784 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-content space-padding-tb-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="customer-page setNewCategori"  >
                    <div class="title-page">
                        <h3>Добавление категории</h3>
                    </div>
                    <form method="post" class="form-customer form-login" id="setCategories">
                        <div class="form-group">
                            <label for="setNewCategoriName">Имя новой категории</label>
                            <input type="text" class="form-control form-account" id="setNewCategoriName" name="setNewCategoriName">
                        </div>
                        <div class="form-group">
                            <label for="setNewCategorieParentId">Является подкатегорией для</label>
                            <select class="form-control form-account" id="setName" name="setNewCategoriParentId">
                                <option value="0">Главная категория</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>                        
                        <div class="form-check">
                            <button type="submit" class="btn-login hover-white setNewCategories">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>  
        </div>  
    </div> 
</div>
</div>
<?php }
}
