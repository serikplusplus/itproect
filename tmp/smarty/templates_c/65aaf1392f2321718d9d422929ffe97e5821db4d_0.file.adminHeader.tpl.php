<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-15 16:23:55
  from 'C:\xampp\htdocs\itproect\views\admin\adminHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb1480ba40c17_66222591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65aaf1392f2321718d9d422929ffe97e5821db4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\itproect\\views\\admin\\adminHeader.tpl',
      1 => 1605453832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminNav.tpl' => 1,
  ),
),false)) {
function content_5fb1480ba40c17_66222591 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title>Admin Cosso</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
        <link rel="stylesheet" href="/<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/style.css" type="text/css"/>
        <?php echo '<script'; ?>
 type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/bootstrap.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@10"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/main.js"><?php echo '</script'; ?>
>
    </head>
    <body> 
        <div class="wrappage">
            <header id="header" class="header-v1 header-top-absolute ">
                <div class="topbar">
                    <div class="logo hidden-xs hidden-sm">
                        <img src="/images/cosre.png" alt="logo" class="img-reponsive">
                    </div>        
                </div>
                <?php $_smarty_tpl->_subTemplateRender('file:adminNav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
            </header>
<?php }
}
