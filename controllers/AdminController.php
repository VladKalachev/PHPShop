<?php 
 
 /**
  *  AdminController.php\
  *  Контроллер бэкэнда сайта
  */


  // подключяем модели
 include_once '../models/CaregoriesModel.php';
 include_once '../models/ProductsModel.php';
 include_once '../models/OrdersModel.php';
 include_once '../models/PurchasModel.php';

 $smarty->setTemplateDir(TemplateAdminPrefix);
 $smarty->assign('teplateWebPath', TemplateAdminWebPath);

 function indexAction($smarty){

 	$rsCategories = getAllMainCategories();

 	$smarty->assign('rsCategories', $rsCategories);
 	$smarty->assign('pageTitle', 'Управление сайтом');

 	loadTemplate($smarty, 'adminHeader');
	loadTemplate($smarty, 'admin');
	loadTemplate($smarty, 'adminFooter');

 }

 function addnewcatAction(){

 	$catName = $_POST['newCategoryName'];
 	$catParentId = $_POST['generalCartId'];

 	$res = insertCat($catName, $catParentId);

 	if($res){
 		$resData['success'] = 1;
 		$resData['message'] = 'Категория добавлена';
 	}else {
		$resData['success'] = 0;
 		$resData['message'] = 'Ошибка добавления категории';
 	}

 	echo json_encode($resData);

 	return;

 }

 /**
  *  Страница управления категориями
  */
 function categoryAction($smarty)
 {
 	$rsCategories = getAllCategories();
 	$rsMainCategories = getAllMainCategories();

 	$smarty->assign('rsCategories', $rsCategories);
 	$smarty->assign('rsMainCategories', $rsMainCategories);
 	$smarty->assign('pageTitle', 'Управление сайтом');


 	loadTemplate($smarty, 'adminHeader');
	loadTemplate($smarty, 'adminCategory');
	loadTemplate($smarty, 'adminFooter');
 }