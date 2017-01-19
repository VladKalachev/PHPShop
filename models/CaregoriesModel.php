<?php 

/**
 * Модель для таблицы категорий (categories)
 * 
 */
 
 function getAllMainCatsWithChilden(){
 	$sql = 'SELECT * 
 	FROM categorie
 	WHERE parent_id = 0';

 	$rs = mysql_query($sql);

 	$smartyRs = array();
 	while ($row = mysql_fetch_assoc($rs)) {
 		$smartyRs[] = $row;
 	}

 	return $smartyRs;
 }