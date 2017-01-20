<?php
/* Smarty version 3.1.30, created on 2017-01-20 22:05:20
  from "/Applications/XAMPP/xamppfiles/htdocs/PHP/views/default/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58827b90ba3c65_15616678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb98e80ef40fcf3c184ffa51a919ded588ef0d4f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/PHP/views/default/header.tpl',
      1 => 1484933194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_58827b90ba3c65_15616678 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" type="text/css" href="../www<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css">
    </head>
<body>
    <div id="header">
        <h1>my shop - интернет магазин</h1>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div id="centerColumn">
    
<?php }
}
