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

 	$smarty->assign('pageTitle', 'Управление сайтом');

 	loadTemplate($smarty, 'adminHeader');
	loadTemplate($smarty, 'admin');
	loadTemplate($smarty, 'adminFooter');

 }