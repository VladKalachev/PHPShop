<?php 

/**
 * Модель для таблицы заказы (orders)
 * 
 */



/**
 * Создание заказа (без привязки товара)
 */

function makeNewOrder($name, $phone, $adress){

	$userId = $_SESSION['user']['id'];

	$comment = "id пользователя: {$userId} <br />
				Имя: {$name} <br />
				Тел: {$phone} <br />
				Адресс: {$adress}";

	$dateCreated = date('Y.m.d H:i:s');
	$userIp = $_SERVER['REMOTE_ADDR'];

	// оформление заказа к БД
	$sql = "INSERT INTO
			orders (`user_id`, `date_created`, `date_payment`, 
			`status`, `comment`, `user_ip`)
			VALUES ('{$userId}', '{$dateCreated}', null, 
					'0', '{$comment}', '{$userIp}')";
	
	
	$rs = mysql_query($sql);

	// получить id созданного заказа
	if($rs){
		$sql = "SELECT id
		FROM orders
		ORDER BY id DESC
		LIMIT 1";

		$rs = mysql_query($sql); 
       	$rs = createSmartyRsArray($rs); 

		// возвращаем id созданного запроса

		if (isset($rs[0])){
			return $rs[0]['id'];
		}

	}

	return false;

}

/**
 * Получить список заказов с привязкой к продуктам для пользователя $userId 
 */

function getOrdersWithProductsByUser($userId)
{

	$useId = intval($userId);

	$sql = "SELECT * FROM orders
	WHERE `user_id` = '{$useId}'
	ORDER BY id DESC";

	$rs = mysql_query($sql);

	$smartyRs = array();
	while($row = mysql_fetch_assoc($rs)){
		
		$rsChildren = getPurhaseForOrder($row['id']);
		
		if($rsChildren){
			$row['children'] = $rsChildren;
			$smartyRs[] = $row;
		}
		
	}

	return $smartyRs;
}