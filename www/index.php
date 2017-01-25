<?php 

session_start(); // начинаем сессию

// если в сессии нет массива корзины то создаем его
if (! isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}

include_once '../config/config.php'; // Иницилизация настроек
include_once '../config/db.php'; // Инициализация базы данных
include_once '../library/main_functions.php'; // Основные функции

//?controller=index&action=index
// определяем с каким контролеером будем работать

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';


// определяем с какой функцие будем работать

$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

$smarty->assign('cartCntItems', count($_SESSION['cart']));

loadPage($smarty, $controllerName, $actionName);