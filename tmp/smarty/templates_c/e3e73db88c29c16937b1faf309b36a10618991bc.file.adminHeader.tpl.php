<?php /* Smarty version Smarty-3.1-DEV, created on 2017-03-14 14:08:30
         compiled from "../views/admin/adminHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58242764758c6a44758ae88-81972429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3e73db88c29c16937b1faf309b36a10618991bc' => 
    array (
      0 => '../views/admin/adminHeader.tpl',
      1 => 1489496906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58242764758c6a44758ae88-81972429',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58c6a447627064_53838963',
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c6a447627064_53838963')) {function content_58c6a447627064_53838963($_smarty_tpl) {?>

<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css">
		<script src="/js/jquery-1.7.1.min.js" type="text/javascript"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
js/admin.js" type="text/javascript"></script>

    </head>
<body>
    <div id="header">
        <h1>Управление сайтом</h1>
    </div>

<?php echo $_smarty_tpl->getSubTemplate ("adminLeftcolum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div id="centerColumn"><?php }} ?>