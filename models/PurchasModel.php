<?php 

/**
 * Модель для таблицы покупки (purchase)
 * 
 */

/**
 * Внесение в БД данных продуктов с привязкой к заказу
 */

function setPurchaseForOrder($orderId, $cart)
{

	$sql = "INSERT INTO purchase
			(order_id, product_id, price, amount)
			VALUES ";

	

	$values = array();
	// формируем массив строк для запроса для каждого товара
	foreach ($cart as $item) {
		$values[] = "('{$orderId}', '{$item['id']}','{$item['price']}','{$item['cnt']}')";
	}

	// преобразовываем массив в строку
	$sql .= implode($values, ',  ');
	$rs = mysql_query($sql);

	return $rs;

}