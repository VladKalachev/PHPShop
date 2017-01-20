<?php
/* Smarty version 3.1.30, created on 2017-01-20 22:05:07
  from "/Applications/XAMPP/xamppfiles/htdocs/PHP/views/default/leftcolumn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58827b8354bc55_35363613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4856fdb89e725417ede4349da22bd84368158a1d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/PHP/views/default/leftcolumn.tpl',
      1 => 1484933194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58827b8354bc55_35363613 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '80137136058827b835396c5_02693549';
?>

    

<div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меня:</div>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
           	<a href="/www/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />

			<?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
					--<a href="/www/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br />	
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	
			<?php }?>

           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>
<?php }
}
