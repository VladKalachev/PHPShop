<?php /* Smarty version Smarty-3.1-DEV, created on 2017-01-20 23:21:20
         compiled from "../views/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108333023858828d60917353-55306395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dbdba5b3e744fb99042215648705161ce6110d6' => 
    array (
      0 => '../views/default/header.tpl',
      1 => 1484933194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108333023858828d60917353-55306395',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58828d60999542_49152430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58828d60999542_49152430')) {function content_58828d60999542_49152430($_smarty_tpl) {?><html>
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