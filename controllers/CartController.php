<?php 
 /**
  * cartController.php
  * 
  * Контроллер работы с корзиной (/catr/)
  */

 // подключяем модели
 include_once '../models/CaregoriesModel.php';
 include_once '../models/ProductsModel.php';
 include_once '../models/OrdersModel.php';
 include_once '../models/PurchasModel.php';

 /**
  * Добавление продукта в корзину
  * 
  * @return integer id GET параметр - ID добавляемого продукта
  * @return  json инфорация об оперции (успех, количество элементов в корзине)
  * 
  */
function addtocartAction() {
	
	$itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
	if (! $itemId) return false;

	$resData = array();

	// есди значение не найдено, то добавляем
	if (isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false) {
		$_SESSION['cart'][] = $itemId;
		$resData['cntItems'] = count($_SESSION['cart']);
		$resData['success'] = 1;
	} else {
		$resData['success'] = 0;
	}
// массив переводим в json
	echo json_encode($resData);
};

/**
 * Удаление продукта из корзины
 * @param integer id GET параметр - ID удаляемого из корзины продукта
 * @return json информауция об операции (успех, колво элементов в корзине)
 */
function removefromcartAction(){
	$itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
	if (! $itemId) exit();

	$resData = array();
	$key = array_search($itemId, $_SESSION['cart']);
	if ($key !== false) {
		unset($_SESSION['cart'][$key]);
		$resData['success'] = 1;
		$resData['cntItems'] = count($_SESSION['cart']);
	} else {
		$resData['success'] = 0;
	}

	echo json_encode($resData);
}

/**
 * Формирование страницы корзины
 * @link /cart/
 * 
 */
function indexAction($smarty){
	$itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
	
	$rsCategories = getAllMainCatsWithChilden();
	$rsProducts = getProductsFromArray($itemsIds);

	$smarty->assign('pageTitle', 'Корзина');
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsProducts', $rsProducts);

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'cart');
	loadTemplate($smarty, 'footer');
}

/**
 * Формирование страницы заказа
 * 
 */

function orderAction($smarty){

	// получить массив индификаторов (ID) продуктов карзины
	$itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;

	// если корзина пуста то редирект в корзину
	if (! $itemsIds){
		redirect('/cart/');
		return;
	}

	//получаем из массива $_POST количество покупаемых товаро
	$itemsCnt = array();
	foreach ($itemsIds as $item) {
	 	$postVar = 'itemCnt_' . $item;
	 	$itemsCnt[$item] = isset($_POST[$postVar]) ? $_POST[$postVar] : null;
	} 

	//получаем список продуктов по массиву корзины
	 $rsProducts = getProductsFromArray($itemsIds);
	 // добовляем каждому продукту дополнительное поле
	 $i = 0;
	 foreach ($rsProducts as &$item) {
	 	$item['cnt'] = isset($itemsCnt[$item['id']]) ? $itemsCnt[$item['id']] : 0;
	 	if($item['cnt']){
	 		$item['realPrice'] = $item['cnt'] * $item['price'];
	 	}else {
	 		unset($rsProducts[$i]);
	 	}
	 	$i ++;
	 }

	 if(! $rsProducts){
	 	echo "Корзана пуста";
	 	return;
	 }

	 //получаемый массив покупаемых товаров помещяем в сессионную переменную
	 $_SESSION['saleCart'] = $rsProducts;

	 $rsCategories = getAllMainCatsWithChilden();

	 if(! isset($_SESSION['user'])){
	 	$smarty->assign('hideLoginBox', 1);
	 }

	$smarty->assign('pageTitle', 'Заказ');
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsProducts', $rsProducts);

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'order');
	loadTemplate($smarty, 'footer');

}

/**
 * AJAX функция сохранения заказа 
 */
function saveorderAction(){
	
	// получаем массив покупаемых товаров
	$cart = isset($_SESSION['saleCart']) ? $_SESSION['saleCart'] : null;

	
	if (! $cart){
		$resData['success'] = 0;
		$resData['message'] = 'Нет товаро для заказа';
		echo json_encode($resData);
		return;
	}

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$adress = $_POST['adress'];

	//создаем новый заказ и получаем его
	$orderId = makeNewOrder($name, $phone, $adress);
	

}
