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
 	
 	$rsCategory = getCatById($catId);
 	
 }