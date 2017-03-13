<?php /* Smarty version Smarty-3.1-DEV, created on 2017-03-13 15:19:03
         compiled from "../views/admin/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86918436558c6a447647596-18341650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '126900d93302602737f68b0d7862e18499222e48' => 
    array (
      0 => '../views/admin/admin.tpl',
      1 => 1489414734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86918436558c6a447647596-18341650',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58c6a44764a7d8_09623610',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c6a44764a7d8_09623610')) {function content_58c6a44764a7d8_09623610($_smarty_tpl) {?><div id="blockNewCategory">
	Новая категория:
	<input type="text" name="newCategoryName" id="newCategoryName" value="" />
	<br />

	Является подкатегорией для
	<select name="generalCartId">
		<option value="0"> Главная категория
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

		<?php } ?>
	</select>
	<br />

	<input type="button" onclick="newCtegory();" value="Добавить категорию" />
</div><?php }} ?>