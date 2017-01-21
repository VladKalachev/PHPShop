<?php 

/**
 * Модель для таблицы продукции (products)
 * 
 */


 /**
  * Получаем последние добавленные товары
  * 
  * @param integer $limit Лимит товаров
  * @return array Массив товаров
  */
function getLastProducts($limit = null)
{
	$sql = "SELECT * 
 	FROM `products`
 	ORDER BY id DESC";

  if($limit) {
      $sql .= " LIMIT {$limit}";
  }
  
 	$rs = mysql_query($sql);

 	return createSmartyRsArray($rs);

}

 /**
  * Получаем продукт для категории $itemId
  * 
  * @param integer $itemId ID категории
  * @return array Массив товаров
  */
function getProductsByCat($itemId)
{
	
	$itemId = intval($itemId);

	$sql = "SELECT *
	 		FROM `products` 
	 		WHERE category_id = '{$itemId}'";
  
 	$rs = mysql_query($sql);

 	return createSmartyRsArray($rs);

}
 
