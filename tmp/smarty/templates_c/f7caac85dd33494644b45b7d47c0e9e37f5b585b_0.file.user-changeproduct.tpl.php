<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 15:06:12
  from 'C:\xampp\htdocs\itproect\views\default\user-changeproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc259546baa90_68073105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7caac85dd33494644b45b7d47c0e9e37f5b585b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\default\\user-changeproduct.tpl',
      1 => 1606571762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc259546baa90_68073105 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-content space-padding-tb-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="customer-page settings"  >
                    <div class="title-page">
                        <h3>Изминение продукта</h3>
                    </div>
                    <form id="changeProduct" class="form-customer comment-form contact-form  newletter-form" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" class="form-control form-account" id="itemName" name="itemName" value="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
">
                            <input type="hidden" class="form-control form-account" id="itemId" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Цена</label>
                            <input type="text" class="form-control form-account" id="itemPrice" name="itemPrice" value="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
">
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputEmail1">Описание</label>
                            <textarea class="form-control form-account" id="itemDesc" name="itemDesc" ><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</textarea>
                        </div> 
                        <div class="form-group">
                            <label for="real-file">Главное фото</label>
                            <input class="form-control" id="real-file" type="file"  name="filename1" style="display: none;">
                            <p class='img-changeproduct'><img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" alt="photo" class="img-reponsive"></p>
                            <span class="form-span" id="foto-upload">Выберите файл</span>
                        </div>
                        <div class="form-group">
                            <label for="real-file2">Фото 1</label>
                            <input class="form-control" id="real-file2" type="file"  name="filename2" style="display: none;">
                            <p class='img-changeproduct'><img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image1'];?>
" alt="photo" class="img-reponsive"></p>
                            <span class="form-span" id="foto-upload2">Выберите файл</span>
                        </div>
                        <div class="form-group">
                            <label for="real-file3">Фото 2</label>
                            <input class="form-control" id="real-file3" type="file"  name="filename3" style="display: none;">
                            <p class='img-changeproduct'><img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image2'];?>
" alt="photo" class="img-reponsive"></p>
                            <span class="form-span" id="foto-upload3">Выберите файл</span>
                        </div> 
                        <div class="form-check">
                            <button type="submit" class="btn-login hover-white updateProduct">Изменить</button>
                            <button type="submit" class="btn-login hover-white deleteProduct">Удалить</button>
                        </div>
                    </form>
                </div>
            </div>  
        </div>  
    </div> 
</div><?php }
}
