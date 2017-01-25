<?php 
 /**
  * cartController.php
  * 
  * Контроллер работы с корзиной (/catr/)
  */

 // подключяем модели
 include_once '../models/CaregoriesModel.php';
 include_once '../models/ProductsModel.php';

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
	if ($key != false) {
		unset($_SESSION['cart'][$key]);
		$resData['success'] = 1;
		$resData['cntItems'] = count($_SESSION['cart']);
	} else {
		$resData['success'] = 0;
	}

	echo json_encode($resData);
}