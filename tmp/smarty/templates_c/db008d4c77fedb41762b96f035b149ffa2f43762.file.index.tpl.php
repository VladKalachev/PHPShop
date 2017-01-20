<?php /* Smarty version Smarty-3.1-DEV, created on 2017-01-19 17:02:23
         compiled from "..\views\default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3763587f4afd110205-41283913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db008d4c77fedb41762b96f035b149ffa2f43762' => 
    array (
      0 => '..\\views\\default\\index.tpl',
      1 => 1484834541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3763587f4afd110205-41283913',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_587f4afd1d3750_21093300',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587f4afd1d3750_21093300')) {function content_587f4afd1d3750_21093300($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
	<div style="float: left; padding: 0px 30px 40px 0px">

		<a href="/www/prduct/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
			<img src="/www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="" width="100">
		</a>
		<br />
		<a href="/www/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
		</div>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%3==0){?>
			<div style="clear: both;"></div>
		<?php }?>

	
<?php } ?>
<?php }} ?>