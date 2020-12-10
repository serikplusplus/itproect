<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 15:22:42
  from 'C:\xampp\htdocs\itproect\views\default\user-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc25d322d5b79_62535345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75d26be0ef876d7f3199bdc8da40497dfc83f2e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\default\\user-menu.tpl',
      1 => 1606573359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc25d322d5b79_62535345 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pushmenu pushmenu-left cart-box-container">
    <div class="cart-list">
        <span class="close-left js-close">x</span>


        <?php if ((isset($_smarty_tpl->tpl_vars['arUser']->value))) {?>         
            <div class="customer-page userBox">                
                <div class="title-page">
                    <h3>Личный кабинет</h3>
                </div>
                <a href="/user/settings/" class="btn link-button create-account hover-black ">Личные данные</a>
                <a href="/product/newproduct/" class="btn link-button create-account hover-black ">Выложить товар</a>
                <a href="/product/myproduct/" class="btn link-button create-account hover-black ">Мои товары</a>
                <a href="/user/logout/" class="btn link-button create-account hover-black" id="logout">Выход</a>
            </div>
        <?php } else { ?>
            <div class="customer-page userBox" style="display: none;">                
                <div class="title-page">
                    <h3>Личный кабинет</h3>
                </div>
                <a href="/user/settings/" class="btn link-button create-account hover-black ">Личные данные</a>
                <a href="/product/newproduct/" class="btn link-button create-account hover-black ">Выложить товар</a>
                <a href="/product/myproduct/" class="btn link-button create-account hover-black ">Мои товары</a>
                <a href="/user/logout/" class="btn link-button create-account hover-black " id="logout">Выход</a>
            </div>

            <div class="customer-page login "  >
                <div class="title-page">
                    <h3>Вход</h3>
                </div>
                <form method="post" class="form-customer form-login" id="loginUser">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email*</label>
                        <input type="email" class="form-control form-account" id="loginEmail" name="loginEmail">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Пароль *</label>
                        <input type="password" class="form-control form-account" id="loginPassword" name="loginPassword">
                    </div>
                   <div class="form-check">
                        <button type="submit" class="btn-login hover-white loginUser">Вход</button>
                        <!--<label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            <span>Remember me</span>
                        </label>
                        <a href="" class="lost-password">Lost your password?</a>-->
                    </div>
                </form>
                <span class="divider"></span>
                <a href="" class="btn link-button create-account hover-black click-create">Регистрация</a>
            </div>


            <div class="customer-page register"  style="display: none;">
                <div class="title-page">
                    <h3>Регистрация</h3>
                </div>
                <form method="post" class="form-customer form-register" id="registerUser">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email*</label>
                        <input type="email" class="form-control form-account" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Имя и Фамилия</label>
                        <input type="email" class="form-control form-account" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="password1">Пароль *</label>
                        <input type="password" class="form-control form-account" id="password1" name="password1">
                    </div>           
                    <div class="form-group">
                        <label for="password2">Повторный пароль *</label>
                        <input type="password" class="form-control form-account" id="password2" name="password2">
                    </div>  
                    <div class="form-check">
                        <button type="submit" class="btn-login btn-register hover-white registerNewUser">Регистрация</button>
                    </div>
                </form>
                <span class="divider"></span>
                <a href="" class="btn link-button create-account hover-black click-login" >Вход</a>
            </div>
        <?php }?>
    </div>
</div>
<?php }
}
