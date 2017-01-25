<?php /* Smarty version Smarty-3.1-DEV, created on 2017-01-25 14:01:21
         compiled from "..\views\default\leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13690587f5d40c54405-62943439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8a12d3caa2f9d6594dc103c4cab7885bf4f771b' => 
    array (
      0 => '..\\views\\default\\leftcolumn.tpl',
      1 => 1485341875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13690587f5d40c54405-62943439',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_587f5d40c54400_69265718',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587f5d40c54400_69265718')) {function content_587f5d40c54400_69265718($_smarty_tpl) {?>
    

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

    <div class="menuCaption">Карзина</div>
    <a href="/cart/" title="Перейти в карзину">В карзину</a>
    <span id="cartCntItems">
      <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0){?><?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
<?php }else{ ?> пустой <?php }?>
    </span>


</div>
<?php }} ?>