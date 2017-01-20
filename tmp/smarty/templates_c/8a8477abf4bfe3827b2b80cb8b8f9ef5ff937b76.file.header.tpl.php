<?php /* Smarty version Smarty-3.1-DEV, created on 2017-01-19 16:43:21
         compiled from "..\views\default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15781587f5d40c06207-99139997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a8477abf4bfe3827b2b80cb8b8f9ef5ff937b76' => 
    array (
      0 => '..\\views\\default\\header.tpl',
      1 => 1484833392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15781587f5d40c06207-99139997',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_587f5d40c11d83_46865618',
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587f5d40c11d83_46865618')) {function content_587f5d40c11d83_46865618($_smarty_tpl) {?><html>
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

<?php echo $_smarty_tpl->getSubTemplate ("leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div id="centerColumn">
    
<?php }} ?>