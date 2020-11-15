<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-15 12:07:33
  from 'C:\xampp\htdocs\itproect\views\admin\adminNav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb10bf5267d80_04585723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8141349536e649cb4bbdda9fb9c73a4802d5d627' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\admin\\adminNav.tpl',
      1 => 1605438445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb10bf5267d80_04585723 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header-top">
    <div class="container container-40">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="logo-mobile hidden-lg hidden-md">
                    <a href="" title="home-logo"><img src="/images/cosre.png" alt="logo" class="img-reponsive"></a>
                </div>
                <!--end logo-->
                <button type="button" class="navbar-toggle icon-mobile" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-menu"></span>
                </button>
                <nav class="navbar main-menu">
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav js-menubar">
                            <li class="level1 active dropdown"><a href="/admin/">Главная</a>                               
                            </li>
                            <li class="level1 dropdown hassub"><a href="/admin/categories/">Категории</a>
                            </li>
                            <li class="level1 active dropdown">
                                <a href="#">Товары</a>                                
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php }
}
