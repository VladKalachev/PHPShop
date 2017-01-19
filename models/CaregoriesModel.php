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