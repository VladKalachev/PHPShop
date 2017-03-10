<?php /* Smarty version Smarty-3.1-DEV, created on 2017-03-10 18:44:02
         compiled from "../views/default/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59437726258c2e5e27c1480-01753870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ed471d7d57e9bc3cf179ebbaa60811bd50f48a2' => 
    array (
      0 => '../views/default/user.tpl',
      1 => 1489167710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59437726258c2e5e27c1480-01753870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58c2e5e29c44b7_49520326',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c2e5e29c44b7_49520326')) {function content_58c2e5e29c44b7_49520326($_smarty_tpl) {?>

<h1>Ваши регистрационные данные</h1>
<table border="0">
  <tr>
    <td>Логин (email)</td>
    <td><?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
</td>
  </tr>
  <tr>
    <td>Имя</td>
    <td><input type="text" id="newName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
" /></td>
  </tr>
  <tr>
    <td>Тел</td>
    <td><input type="text" id="newPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
" /></td>
  </tr>
  <tr>
    <td>Адрес</td>
    <td><textarea id="newAdress"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['adress'];?>
</textarea></td>
  </tr>
  <tr>
    <td>Новый пароль</td>
    <td><input type="password" id="newPwd1" value="" /></td>
  </tr>
  <tr>
    <td>Повтор пароля</td>
    <td><input type="password" id="newPwd2" value="" /></td>
  </tr>
  <tr>
    <td>Для того что бы сохранить данные введите текущий пароль</td>
    <td><input type="password" id="curPwd" value="" /></td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td><input type="button" value="Сохранить изменения" onclick="updateUserData();" /></td>
  </tr>
  
</table><?php }} ?>