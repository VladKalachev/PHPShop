<?php 
 /**
  * 
  * Контроллер главной страницы
  * 	
  */
 
 // подключяем модели
 include_once '../models/CaregoriesModel.php';
 
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

	
	$smarty->assign('pageTitle', 'Главная страница сайта');
	$smarty->assign('rsCategories', $rsCategories);

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'index');
	loadTemplate($smarty, 'footer');
}
