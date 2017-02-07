<?php 

/**
 * Модель для таблицы пользователей (users)
 * 
 */


 /**
  * Регистрация нового пользователя
  * 
  * @param string $email почта
  * @param string $pwdMD5 пароль зашифрованный в MD5
  * @param string $name имя пользователя
  * @param string $phone телефон
  * @param string $adress адрес пользователя
  * @return array массив данных нового пользователя
  */
function registerNewUser($email, $pwdMD5, $name, $phone, $adress)
{

 
$email = htmlspecialchars(mysql_real_escape_string($email));
$name = htmlspecialchars(mysql_real_escape_string($name));
$phone = htmlspecialchars(mysql_real_escape_string($phone));
$adress = htmlspecialchars(mysql_real_escape_string($adress));

	$sql = "INSERT INTO 
 	users (`email`,`pwd`,`name`,`phone`,`adress`)
 	VALUES ('{$email}'), '{$email}', '{$name}','{$phone}','{$adress}'";

 	$rs = mysql_query($sql);

  if($rs){
    $sql = "SELECT * FROM users
    WHERE (`email` = '{$email}' and `pwd` = '{$pwdMD5}')
    LIMIT 1";
  }

  $rs = mysql_query($sql);
  $rs = createSmartyRsArray($rs);

 	if (isset($rs[0])){
    $rs['success'] = 1;
  }else {
    $rs['success'] = 0;
  }

}
