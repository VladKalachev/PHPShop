<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-04 18:07:13
         compiled from "../views/default/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45232131458960a413ad263-43624506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e03be405d95652b2f22cc0b288652122179328d0' => 
    array (
      0 => '../views/default/product.tpl',
      1 => 1486226546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45232131458960a413ad263-43624506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58960a4152f907_71494091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58960a4152f907_71494091')) {function content_58960a4152f907_71494091($_smarty_tpl) {?>    
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