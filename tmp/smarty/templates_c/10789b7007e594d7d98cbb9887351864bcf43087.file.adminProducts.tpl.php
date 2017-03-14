<?php /* Smarty version Smarty-3.1-DEV, created on 2017-03-14 16:32:11
         compiled from "../views/admin/adminProducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40563266358c809113f7a48-73683316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10789b7007e594d7d98cbb9887351864bcf43087' => 
    array (
      0 => '../views/admin/adminProducts.tpl',
      1 => 1489505528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40563266358c809113f7a48-73683316',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58c80911482869_48215162',
  'variables' => 
  array (
    'rsCategories' => 0,
    'itemCat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c80911482869_48215162')) {function content_58c80911482869_48215162($_smarty_tpl) {?><h2>Товар</h2>
<table border="1" cellpadding="1" cellspacing="1" >
	<caption>Добавить продукт</caption>
	<tr>
		<th>Название</th>
		<th>Цена</th>
		<th>Категории</th>
		<th>Описание</th>
		<th>Сохранить</th>
	</tr>

	<tr>
		<td>
			<input type="edit" id="newItemName" value="" />
		</td>
		<td>
			<input type="edit" id="newItemPrice" value="" />
		</td>
		<td>
			<select id="newItemCatId">
				<option value="0">Главная категория
					<?php  $_smarty_tpl->tpl_vars['itemCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->key => $_smarty_tpl->tpl_vars['itemCat']->value){
$_smarty_tpl->tpl_vars['itemCat']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

					<?php } ?>	
				</option>
			</select>
		</td>
		<td>
			<textarea id="newItemDesc"></textarea>
		</td>
		<td>
			<input type="button" value="Сохранить" onclick="addProduct();">
		</td>
	</tr>
	

	
</table><?php }} ?>