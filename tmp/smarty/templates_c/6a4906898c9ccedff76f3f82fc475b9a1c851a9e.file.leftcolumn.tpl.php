<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-08 18:50:52
         compiled from "../views/default/leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156545861858828d609a9fe4-29833773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a4906898c9ccedff76f3f82fc475b9a1c851a9e' => 
    array (
      0 => '../views/default/leftcolumn.tpl',
      1 => 1486576247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156545861858828d609a9fe4-29833773',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58828d609e4fe9_98705738',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58828d609e4fe9_98705738')) {function content_58828d609e4fe9_98705738($_smarty_tpl) {?>
    

<div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меня:</div>
           <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
           	<a href="?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />

			<?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])){?>
				<?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
					--<a href="?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br />	
				<?php } ?>	
			<?php }?>

           <?php } ?>
    </div>
    
    <div id="registerBox">
      <div class="menuCaption showHidden" onclick="showRegisterBox();">Регистрация</div>
      <div id="registerBoxHidden">
        email:<br />
        <input type="text" id="email" name="email" value="" /><br />
        пароль:<br />
        <input type="password" id="pwd1" name="pwd1" value="" /><br />
        повторить пароль:<br />
        <input type="password" id="pwd2" name="pwd2" value="" /><br />
        <input type="button" onclick="registerNewUser();" value="Зарегистрироваться"/>
      </div>
    </div>



    <div class="menuCaption">Карзина</div>
    <a href="/cart/" title="Перейти в карзину">В карзину</a>
    <span id="cartCntItems">
      <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0){?><?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
<?php }else{ ?> пустой <?php }?>
    </span>


</div>
<?php }} ?>