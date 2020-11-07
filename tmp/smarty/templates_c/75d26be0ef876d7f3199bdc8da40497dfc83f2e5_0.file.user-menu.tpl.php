<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-07 12:07:04
  from 'C:\xampp\htdocs\itproect\views\default\user-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa67fd8ec3186_56432891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75d26be0ef876d7f3199bdc8da40497dfc83f2e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\default\\user-menu.tpl',
      1 => 1604747222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa67fd8ec3186_56432891 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="pushmenu pushmenu-left cart-box-container">
        <div class="cart-list">
            <span class="close-left js-close">x</span>
            <h3 class="cart-title" style="margin-bottom: 20px;">Личный кабинет</h3>
                <div class="customer-page login " style="display: none;" >
                            <div class="title-page">
                                <h3>Вход</h3>
                            </div>
                            <form method="post" class="form-customer form-login">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username or email address *</label>
                                    <input type="email" class="form-control form-account" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password *</label>
                                    <input type="password" class="form-control form-account" id="exampleInputPassword1">
                                </div>
                                <div class="form-check">
                                    <button type="submit" class="btn-login hover-white" onclick="loginUser();">Login</button>
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        <span>Remember me</span>
                                    </label>
                                    <a href="" class="lost-password">Lost your password?</a>
                                </div>
                            </form>
                            <span class="divider"></span>
                            <a href="" class="btn link-button create-account hover-black" onclick="showRegisterBox();">Create an account</a>
                        </div>
                    <div class="customer-page register"  >
                            <div class="title-page">
                                <h3>Регистрация</h3>
                            </div>
                            <form method="post" class="form-customer form-login">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address *</label>
                                    <input type="email" class="form-control form-account" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password *</label>
                                    <input type="password" class="form-control form-account" id="exampleInputPassword1">
                                </div>           
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password *</label>
                                    <input type="password" class="form-control form-account" id="exampleInputPassword1">
                                </div>  
                                <div class="form-check">
                                    <button type="submit" class="btn-login btn-register hover-white" onclick="registerNewUser();">Register</button>
                                </div>
                            </form>
                            <span class="divider"></span>
                            <a href="" class="btn link-button create-account hover-black" onclick="showLoginBox();">Вход</a>
                        </div>
        </div>
    </div>
<?php }
}
