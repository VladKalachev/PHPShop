<?php
/* Smarty version 3.1.30, created on 2017-01-20 22:42:29
  from "/Applications/XAMPP/xamppfiles/htdocs/PHP/views/default/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5882844593ebb4_50615002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '888f84f478d2279c814404c4ac0ef399d1f0af1d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/PHP/views/default/index.tpl',
      1 => 1484948543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5882844593ebb4_50615002 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
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
		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) % 3 == 0) {?>
			<div style="clear: both;"></div>
		<?php }?>

	
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}
