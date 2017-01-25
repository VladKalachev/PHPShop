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
	echo "indexController.php > testAction";
};
