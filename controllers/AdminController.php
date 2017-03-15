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


 function updatecategoryAction()
 {
 	$itemId = $_POST['itemId'];
 	$parentId = $_POST['parentId'];
 	$newName = $_POST['newName'];

 	$res = updateCategoryData($itemId, $parentId, $newName);

 	if($res){
		$resData['success'] = 1;
 		$resData['message'] = 'Категория обновлена';
 	}else {
		$resData['success'] = 0;
 		$resData['message'] = 'Ошибка изменнения данных категории';
 	}
	
	echo json_encode($resData);
 	return;

 }

 /**
  * Страница управления товарами
  */

 function productsAction($smarty)
 {
 	$rsCategories = getAllCategories();
 	$rsProducts = getProducts();

 	$smarty->assign('rsCategories', $rsCategories);
 	$smarty->assign('rsProducts', $rsProducts);
 	$smarty->assign('pageTitle', 'Управление сайтом');


 	loadTemplate($smarty, 'adminHeader');
	loadTemplate($smarty, 'adminProducts');
	loadTemplate($smarty, 'adminFooter');
 }

 function addproductAction()
 {
 	$itemName = $_POST['itemName'];
 	$itemPrice = $_POST['itemPrice'];
 	$itemDesc = $_POST['itemDesc'];
 	$itemCat = $_POST['itemCatId'];

 	$res = insertProduct($itemName, $itemPrice, $itemDesc, $itemCat);

 	if($res){
		$resData['success'] = 1;
 		$resData['message'] = 'Изменени успешно внесены';
 	}else {
		$resData['success'] = 0;
 		$resData['message'] = 'Ошибка изменения данных';
 	}

 	echo json_encode($resData);
 	return;
 }

 /**
  * Экшен обновления продуктов
  */

function updateproductAction()
{ 	
 	$itemId = $_POST['itemId'];
 	$itemName = $_POST['itemName'];
 	$itemPrice = $_POST['itemPrice'];
 	$itemStatus = $_POST['itemStatus'];
 	$itemDesc = $_POST['itemDesc'];
 	$itemCat = $_POST['itemCatId'];

 	$res = updateProduct($itemId, $itemName, $itemPrice, $itemStatus, $itemDesc, $itemCat);
 	
	if($res){
		$resData['success'] = 1;
 		$resData['message'] = 'Изменени успешно внесены';
 	}else {
		$resData['success'] = 0;
 		$resData['message'] = 'Ошибка изменения данных';
 	}

 	echo json_encode($resData);
 	return;

}

function uploadAction()
{

	$maxSize = 2 * 1024 * 1024;

	$itemId = $_POST['itemId'];
	// получаем расширение загружаемого файла
	$ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);
	// создаем имя файла
	$newFileNeme = $itemId . '.' . $ext;

	if($_FILES['filename']['size'] > $maxSize){
		echo("Размер файла привышает два мегабайта");
		return;
	}

	// Загружен ли файл
	if(is_uploaded_file($_FILES['filename']['tmp_name'])){

		//Если файл загружен то перемещяем его из временной дериктории в конечнную
		
		$res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/products/'. $newFileNeme);
		if($res){
			$res = uploadProductImage($itemId, $newFileNeme);
			if($res){
				redirect('/');
			}
		} 

	} else {
			echo ("Ошибка загрузки файла");
		}

}

/**
 * Экшен для страницы заказов
 */

function ordersAction($smarty)
{
	$rsOrders = getOrders();
	
	$smarty->assign('rsOrders', $rsOrders);
 	$smarty->assign('pageTitle', 'Заказы');


 	loadTemplate($smarty, 'adminHeader');
	loadTemplate($smarty, 'adminOrders');
	loadTemplate($smarty, 'adminFooter');

}