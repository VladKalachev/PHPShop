<?php /* Smarty version Smarty-3.1-DEV, created on 2017-01-27 15:20:51
         compiled from "..\views\default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13726588766232ae944-10118935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f966b46fd8f8ee61e6baa79ecaa1a226ad488d61' => 
    array (
      0 => '..\\views\\default\\product.tpl',
      1 => 1485516611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13726588766232ae944-10118935',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_588766233180c3_78082976',
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588766233180c3_78082976')) {function content_588766233180c3_78082976($_smarty_tpl) {?>    
<h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

<img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" width="575">
Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>



<a href="#" id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value){?> class="hidme"<?php }?> onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt='Удалить из корзины'>Удалить из корзины</a>

<a href="#" id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?> class="hidme" <?php }?> onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt='Добавить в корзину'>Добавить в корзину</a>
<p> Описание <br /><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p><?php }} ?>