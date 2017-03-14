<?php 

/**
 * Модель для таблицы категорий (categories)
 * 
 */


 /**
  * Получить дочернии категории для категории $catId
  * 
  * @param inreger $catId ID категории
  * @return array массив категорий
  */
function getChildrenForCat($catId){
	$sql = "SELECT * 
 	FROM categorie
 	WHERE parent_id = {$catId}";

 	$rs = mysql_query($sql);

 	return createSmartyRsArray($rs);
}
 
 /**
  * Получить главные категории с привязками дочерних
  * 
  * @return array массив категорий
  */
 function getAllMainCatsWithChilden(){
 	$sql = 'SELECT * 
 	FROM categorie
 	WHERE parent_id = 0';

 	$rs = mysql_query($sql);

 	$smartyRs = array();
 	while ($row = mysql_fetch_assoc($rs)) {
 		$rsChildren = getChildrenForCat($row['id']);

 		if($rsChildren) {
 			$row['children'] = $rsChildren;
 		}

 		$smartyRs[] = $row;

 	}

 	return $smartyRs;
 }

/**
 * Получить данные категории по id
 * 
 * @param  array массив - строка категории
 * 
 */
 function getCatById($catId)
 {
// защита SQL инекций
    $catId = intval($catId);

    $sql = "SELECT * FROM categorie WHERE id='{$catId}'";
    
    $rs = mysql_query($sql);
   
    return mysql_fetch_assoc($rs);
 }

/**
 * Получить все главные категории
 * 
 * @param  array массив категории
 * 
 */
 function getAllMainCategories()
 {

    $sql = "SELECT * 
        FROM categorie 
        WHERE parent_id = 0";

    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);

 }

/**
 * Добавление новой категории
 * 
 */

function insertCat($catName, $catParentId = 0)
{

    $sql = "INSERT INTO
    categorie (`parent_id`, `name`)
    VALUES ('{$catParentId}', '{$catName}')";
    
    // выполнить запрос
    mysql_query($sql);

    // получаем id добавленно записи
    $id = mysql_insert_id();
   
    return $id;  

}


/**
 * Получить все категории
 */

function getAllCategories(){

  $sql = "SELECT *
  FROM categorie 
  ORDER BY parent_id ASC";

  $rs = mysql_query($sql);
   
  return createSmartyRsArray($rs);

}



