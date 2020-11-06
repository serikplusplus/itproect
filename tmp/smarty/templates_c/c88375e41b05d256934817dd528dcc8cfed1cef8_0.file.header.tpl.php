<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-25 13:51:08
  from 'C:\xampp\htdocs\itproect.local\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f9574bcd92b00_67029444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c88375e41b05d256934817dd528dcc8cfed1cef8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect.local\\views\\default\\header.tpl',
      1 => 1603630025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_5f9574bcd92b00_67029444 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/style.css" type="text/css"/>
    </head>
    <body>
        <header id="header" class="header-v1 ">             <div class="topbar hidden-xs hidden-sm">
                <div class="container container-40">
                    <div class="logo hidden-xs hidden-sm">
                        <a href="" title="home-logo"><img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
img/cosre.png" alt="logo" class="img-reponsive"></a>
                    </div>
                    <!--end logo-->
                    <div class="topbar-right">
                        <div class="topbar-option">
                             <div class="topbar-account ">
                                <a href="#"><i class="icon-user f-15"></i></a>
                            </div>
                        </div>
                        <!--end topbar-option-->
                    </div>
                    <!--end topbar-right-->
                </div>
            </div>
        </header>
        
        <?php $_smarty_tpl->_subTemplateRender('file:nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<div class="product-standard product-grid">
    <div class="container container-42">
        <div class="tab-content">
            <div id="all" class="tab-pane fade in active">
                <div class="row">


<?php }
}
