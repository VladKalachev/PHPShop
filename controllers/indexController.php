<?php 
 /**
  * 
  * Контроллер главной страницы
  * 	
  */
 
 // подключяем модели
 include_once '../models/CaregoriesModel.php';
 include_once '../models/ProductsModel.php';
 
function testAction() {
	echo 'indexController.php > testAction';
}
/**
 * Формирование главной страницы сайта
 * 
 * @param object $smarty шаблонизатор 	
 * 
 */
function indexAction($smarty){
	$rsCategories = getAllMainCatsWithChilden();
	$rsProducts = getLastProducts(16);
	
	$smarty->assign('pageTitle', 'Главная страница сайта');
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsProducts', $rsProducts);

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'index');
	loadTemplate($smarty, 'footer');
}
