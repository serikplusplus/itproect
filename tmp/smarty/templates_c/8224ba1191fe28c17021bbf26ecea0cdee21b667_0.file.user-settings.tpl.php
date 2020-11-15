<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-13 17:41:16
  from 'C:\xampp\htdocs\itproect\views\default\user-settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5faeb72cb03621_03096743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8224ba1191fe28c17021bbf26ecea0cdee21b667' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\default\\user-settings.tpl',
      1 => 1605285674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faeb72cb03621_03096743 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-content space-padding-tb-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="customer-page settings"  >
                    <div class="title-page">
                        <h3>Личные данные</h3>
                    </div>
                    <form method="post" class="form-customer form-login" id="updateUser">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email адрес</label>
                            <input type="email" class="form-control form-account" id="setEmail" name="setEmail" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Имя</label>
                            <input type="text" class="form-control form-account" id="setName" name="setName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
">
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputEmail1">Номер телефона</label>
                            <input type="phone" class="form-control form-account" id="setPhone" name="setPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
">
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputEmail1">Адрес</label>
                            <input type="text" class="form-control form-account" id="setAdress" name="setAdress" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['adress'];?>
">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Новый пароль</label>
                            <input type="password" class="form-control form-account" id="setPasswordNew" name="setPasswordNew">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Повтор пароля</label>
                            <input type="password" class="form-control form-account" id="setPasswordNew2" name="setPasswordNew2">
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputPassword1">Текущий пароль</label>
                            <input type="password" class="form-control form-account" id="setPassword" name="setPassword">
                        </div>
                        <div class="form-check">
                            <button type="submit" class="btn-login hover-white updateUser">Изменить</button>
                        </div>
                    </form>
                </div>
            </div>  
        </div>  
    </div> 
</div><?php }
}
