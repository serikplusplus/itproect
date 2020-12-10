<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-10 17:15:15
  from 'C:\xampp\htdocs\itproect\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd24993af4404_62809057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32e0a7a13c0715efd0718746e5f1287e6997dac2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\default\\header.tpl',
      1 => 1607616913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:user-menu.tpl' => 1,
  ),
),false)) {
function content_5fd24993af4404_62809057 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
        <link rel="stylesheet" href="/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/css/slick.css">
        <link rel="stylesheet" href="/<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/style.css" type="text/css"/>
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender('file:nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 


        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Поиск товаров</h4>
                    </div>
                    <div class="modal-body">
                        <div class="input-group">
                            <form method="get" class="searchform" action="/search" role="search">
                                <input type="hidden" name="type" value="product">
                                <input type="text" name="q" class="form-control control-search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default button_search" type="button"><i data-toggle="dropdown" class="fa fa-search"></i></button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender('file:user-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

        <div class="wrappage">
            <header id="header" class="header-v5  home-simple">
                <div class="topbar">
                    <div class="container container-40">
                        <div class="topbar-left " style="margin-top: 15px;">
                            <div class="logo">
                                <a href="/" title="home-logo"><img src="/<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
img/cosre.png" alt="logo" class="img-reponsive"></a>
                            </div>
                            <!--end topbar-option-->
                        </div>
                        <!--end topbar-left-->
                        <div class="topbar-right">
                            <div class="topbar-option">
                                <div class="topbar-search">
                                    <div class="search-popup dropdown" data-toggle="modal" data-target="#myModal">
                                        <a href="#"><i class="icon-magnifier f-15"></i></a>
                                    </div>
                                </div>
                                <div class="topbar-account">
                                    <a href="#"><i class="icon-user f-15"></i></a>
                                </div>
                                <div class="topbar-menu icon-pushmenu js-push-menu">
                                    <a href="#">                                 
                                        <span class="icon-menu"></span>
                                    </a>
                                </div>
                            </div>
                            <!--end topbar-option-->
                        </div>
                        <!--end topbar-right-->
                    </div>
                </div>
            </header>




<?php }
}
