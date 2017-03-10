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
function registerNewUser($email, $pwdMD5, $name, $phone, $adress){ 

 $email = htmlspecialchars(mysql_real_escape_string($email)); 
 $name = htmlspecialchars(mysql_real_escape_string($name)); 
 $phone = htmlspecialchars(mysql_real_escape_string($phone)); 
 $adress = htmlspecialchars(mysql_real_escape_string($adress)); 

	$sql = "INSERT INTO 
  users (`email`, `pwd`, `name`, `phone`,`adress`) 
  VALUES ('{$email}', '{$pwdMD5}', '{$name}', '{$phone}', '{$adress}')"; 

 	$rs = mysql_query($sql); 

  if ($rs){ 
       $sql = "SELECT * 
       FROM users 
       WHERE (`email` = '{$email}' and `pwd` = '{$pwdMD5}') 
       LIMIT 1"; 

       $rs = mysql_query($sql); 
       $rs = createSmartyRsArray($rs); 

      if(isset($rs[0])){ 
         $rs['success']=1;
      }else {
         $rs['success']=0;
      }
  }else {
      $rs['success']=0;
  }

   return $rs;
}

/**
 * Проверить пораметры для регистрации пользователя
 *
 * @param string $email почта
 * @param string $pwd1 пароль
 * @param string $pwd2 повтор пароля
 * @return array результат
 */

function checkRegisterParams($email, $pwd1, $pwd2){

    $res = null;

    if(!$email){
        $res['success'] = false; 
        $res['message'] = 'Введите email'; 
    }

    if (!$pwd1){
        $res['success'] = false;
        $res['message'] = 'Введите пароль';
    }

    if (!$pwd2){
        $res['success'] = false;
        $res['message'] = 'Введите повтор пароля';
    }

    if($pwd1 != $pwd2){
        $res['success'] = false;
        $res['message'] = 'Пароли не совпадают';
    }

    return $res;

}

/**
 * Проверка Email
 */
function checkUserEmail($email){

 $email = mysql_real_escape_string($email); 
 $sql = "SELECT id FROM users WHERE email = '{$email}'"; 
 
 $rs = mysql_query($sql); 
 $rs = createSmartyRsArray($rs); 
 return $rs;

}

/**
 * Авторизация пользователя
 */

function loginUser($email, $pwd){

  $email = htmlspecialchars(mysql_real_escape_string($email)); 
  $pwd = md5($pwd);

  $sql = "SELECT * FROM users
  WHERE (`email` = '{$email}' and `pwd` = '{$pwd}') 
       LIMIT 1"; 

  $rs = mysql_query($sql);
  $rs = createSmartyRsArray($rs);
  if(isset($rs[0])){
    $rs['success'] = 1;
  } else {
    $rs['success'] = 0;
  }
  return $rs;
}

/**
 * Изменений данных пользователя
 */
function updateUserData($name, $phone, $adress, $pwd1, $pwd2, $curPwd){

 $email = htmlspecialchars(mysql_real_escape_string($_SESSION['user']['email'])); 
 $name = htmlspecialchars(mysql_real_escape_string($name)); 
 $phone = htmlspecialchars(mysql_real_escape_string($phone)); 
 $adress = htmlspecialchars(mysql_real_escape_string($adress)); 

 $pwd1 = trim($pwd1);
 $pwd2 = trim($pwd2);

 $newPwd = null;
 if($pwd1 && ($pwd1 == $pwd2)){
  $newPwd = md5($pwd1);
 }
  
  $sql = "UPDATE users 
  SET "; 

  if ($newPwd){
    $sql .= "`pwd` = '{$newPwd}', "; 
  }

  $sql .= "`name` = '{$name}', 
  `phone` = '{$phone}',
  `adress` = '{$adress}'
  WHERE
  `email` = '{$email}' AND `pwd` = '{$curPwd}'
  LIMIT 1";

  

  $rs = mysql_query($sql);

  return $rs;
}


