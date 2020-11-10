<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-10 12:05:32
  from 'C:\xampp\htdocs\itproect\views\default\user-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5faa73fca18215_33036471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75d26be0ef876d7f3199bdc8da40497dfc83f2e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\default\\user-menu.tpl',
      1 => 1605006321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faa73fca18215_33036471 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="pushmenu pushmenu-left cart-box-container">
        <div class="cart-list">
            <span class="close-left js-close">x</span>
            
 
           <?php if ((isset($_smarty_tpl->tpl_vars['arUser']->value))) {?>         
            <div class="customer-page userBox">                
                    <div class="title-page">
                        <h3 id="userLink">Личный кабинет</h3>
                    </div>
                        <a href="/user/" id="userLink" class="btn link-button create-account hover-black click-create">Кабинет</a>
                        <a href="/user/logout/" class="btn link-button create-account hover-black click-create" id="logout">Выход</a>
            </div>
            <?php } else { ?>
            <div class="customer-page userBox" style="display: none;">                
                    <div class="title-page">
                        <h3 href="#" id="userLink">Личный кабинет</h3>
                    </div>
                        <a href="#" id="userLink" class="btn link-button create-account hover-black click-create">Кабинет</a>
                        <a href="/user/logout/" class="btn link-button create-account hover-black click-create" id="logout">Выход</a>
            </div>
            
                <div class="customer-page login "  >
                            <div class="title-page">
                                <h3>Вход</h3>
                            </div>
                            <form method="post" class="form-customer form-login">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username or email address *</label>
                                    <input type="email" class="form-control form-account" id="loginEmail" name="loginEmail">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password *</label>
                                    <input type="password" class="form-control form-account" id="loginPassword" name="loginPassword">
                                </div>
                                <div class="form-check">
                                    <button type="submit" class="btn-login hover-white loginUser">Login</button>
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        <span>Remember me</span>
                                    </label>
                                    <a href="" class="lost-password">Lost your password?</a>
                                </div>
                            </form>
                            <span class="divider"></span>
                        <a href="" class="btn link-button create-account hover-black click-create">Create an account</a>
                        </div>
         
             
                    <div class="customer-page register"  style="display: none;">
                            <div class="title-page">
                                <h3>Регистрация</h3>
                            </div>
                            <form method="post" class="form-customer form-register">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address *</label>
                                    <input type="email" class="form-control form-account" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password1">Password *</label>
                                    <input type="password" class="form-control form-account" id="password1" name="password1">
                                </div>           
                                <div class="form-group">
                                    <label for="password2">Password *</label>
                                    <input type="password" class="form-control form-account" id="password2" name="password2">
                                </div>  
                                <div class="form-check">
                                    <button type="submit" class="btn-login btn-register hover-white registerNewUser">Register</button>
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
