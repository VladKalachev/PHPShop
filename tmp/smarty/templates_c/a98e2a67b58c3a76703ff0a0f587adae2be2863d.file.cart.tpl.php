<?php /* Smarty version Smarty-3.1-DEV, created on 2017-01-27 16:16:32
         compiled from "..\views\default\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29678588b3cc315ada2-84223556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a98e2a67b58c3a76703ff0a0f587adae2be2863d' => 
    array (
      0 => '..\\views\\default\\cart.tpl',
      1 => 1485522990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29678588b3cc315ada2-84223556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_588b3cc3195723_06071659',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588b3cc3195723_06071659')) {function content_588b3cc3195723_06071659($_smarty_tpl) {?>

<h1>Корзина</h1>

<?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value){?>
	В корзине пусто.

	<?php }else{ ?>
	<h2>Данные заказа</h2>
	<table>
		<tr>
			<td>
				№
			</td>
			<td>
				Наименование
			</td>
			<td>
				Количество
			</td>
			<td>
				Цена за еденицу
			</td>
			<td>
				Цена
			</td>
			<td>
				Действие
			</td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
			
		<tr>
			<td>
				<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>

			</td>
			<td>
				<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
			</td>
			<td>
				<input type="text" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="1" onchange="conversionPrive(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);" >
			</td>
			<td>
				<span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
					<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

				</span>
			</td>
			<td>
			<span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
				<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

			</span>
			</td>
			<td>
				<a href="#" id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"  onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" alt='Удалить из корзины'>Удалить</a>

				<a href="#" id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="hidme"  onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" alt='Добавить в корзину'>Восстановить</a>
			</td>
		</tr>
		<?php } ?>
	</table>

<?php }?>
<?php }} ?>