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

/**
 * Получить данные продкута по ID
 * 
 * @param  integer $itemId ID продукта
 * @return array массив данных продукта
 */
function getProductById($itemId)
{

  $itemId = intval($itemId);

  $sql = "SELECT *
      FROM `products` 
      WHERE id = '{$itemId}'";
  

  $rs = mysql_query($sql);
  return mysql_fetch_assoc($rs);

}


/**
 * Получить список продуктов из массива индификатор (ID's)
 * 
 * @param  array $itemIds массив идентификаторов продуктов
 * @return array массив данных продукта
 */

function getProductsFromArray($itemIds)
{

  $strIds = implode($itemIds, ', ');

  $sql = "SELECT *
      FROM `products` 
      WHERE id in ({$strIds})";
  

  $rs = mysql_query($sql);

  return createSmartyRsArray($rs);

}

/**
 * Получить продукты
 */
function getProducts()
{
  $sql = "SELECT *
      FROM `products` 
      ORDER BY category_id";

  $rs = mysql_query($sql);

  return createSmartyRsArray($rs);
}


 
function insertProduct($itemName, $itemPrice, $itemDesc, $itemCat)
{
   $sql = "INSERT INTO products
   SET 
    `name` = '{$itemName}',
    `price` = '{$itemPrice}',
    `description` = '{$itemDesc}',
    `category_id` = '{$itemCat}'";

  $rs = mysql_query($sql);

  return $rs;
}
