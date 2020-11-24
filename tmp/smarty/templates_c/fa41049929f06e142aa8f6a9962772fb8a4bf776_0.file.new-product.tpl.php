<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-20 19:51:58
  from 'C:\xampp\htdocs\itproect\views\default\new-product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb8104e3e4751_73576460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa41049929f06e142aa8f6a9962772fb8a4bf776' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\default\\new-product.tpl',
      1 => 1605898196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb8104e3e4751_73576460 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-content space-padding-tb-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="customer-page setNewCategori"  >
                    <div class="title-page">
                        <h3>Добавление Товара</h3>
                    </div>
                    <form id="addProduct" class="form-customer comment-form contact-form  newletter-form" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <label>Название</label>
                                    <input type="text" name="itemName" id="itemName" class="form-control" value="">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <label>Цена</label>
                                    <input type="text" name="itemPrice" id="itemPrice" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <label>Категория</label>
                                    <select class="form-control form-account" id="itemCat" name="itemCat">
                                        <option value="-1">...</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategori']->value, 'item');
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
                                <div class="col-md-6 col-xs-12">
                                    <label>Фото</label>
                                    
                                    <input class="form-control" id="real-file" type="file" name="filename" style="display: none;">
                                    <span class="form-span" id="foto-upload">Выберите файл</span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Описание</label>
                                    <textarea name="itemDesc" id="itemDesc" tabindex="2" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-check" style="text-align: center;">
                            <button type="submit" class="btn-login hover-white addNewProduct">Добавить</button> 
                        </div>
                    </form>
                </div>
            </div>  
        </div>  
    </div> 
</div>
</div><?php }
}
