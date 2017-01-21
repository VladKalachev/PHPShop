<?php 
 
/**
 *  categoryController.php
 * 
 * Коньтроллер страницы категории (/category/1)
 */
 
//?controller=category and ?controller=category&id=3
 // получаем модули
 include_once '../models/CaregoriesModel.php';
 include_once '../models/ProductsModel.php';

/**
 * 
 * Формируем страницу категории
 * 
 * @param  object $smarty шаблонизатор
 * 
 */
 function indexAction($smarty)
 {

 	$catId = isset($_GET['id']) ? $_GET['id'] : null;

 	if($catId == null) exit();
 	$rsProducts = null;
	$rsChildCats = null;

 	$rsCategory = getCatById($catId);

 	// если главная категория то показывать дочерние категории
 	if ($rsCategory['parent_id'] == 0){
 		$rsChildCats = getChildrenForCat($catId);
 		
 	} else {
 		$rsProducts = getProductsByCat($catId);	
 	}	

 	$rsCategories = getAllMainCatsWithChilden();

 	$smarty->assign('pageTitle', 'Товары категорий' . $rsCategory['name']);
	$smarty->assign('rsCategory', $rsCategory);
	$smarty->assign('rsProducts', $rsProducts);
	$smarty->assign('rsChildCats', $rsChildCats);

	$smarty->assign('rsCategories', $rsCategories);

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'category');
	loadTemplate($smarty, 'footer');

 }