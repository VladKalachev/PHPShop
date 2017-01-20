<?php /* Smarty version Smarty-3.1-DEV, created on 2017-01-20 23:21:20
         compiled from "../views/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119294501858828d609e9a32-42908227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1febcd04b5db3f3dad3a541e467b066e67da6d4d' => 
    array (
      0 => '../views/default/index.tpl',
      1 => 1484950855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119294501858828d609e9a32-42908227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58828d60a09ea2_03902906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58828d60a09ea2_03902906')) {function content_58828d60a09ea2_03902906($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
	<div style="float: left; padding: 0px 30px 40px 0px">

		<a href="../www/prduct/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
			<img src="../www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="" width="100">
		</a>
		<br />
		<a href="../www/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>

		</div>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%3==0){?>
			<div style="clear: both;"></div>
		<?php }?>

	
<?php } ?>
<?php }} ?>