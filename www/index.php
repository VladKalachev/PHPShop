<?php 

include_once '../config/config.php'; // Иницилизация настроек
include_once '../library/main_functions.php'; // Основные функции

//?controller=index&action=Index
// определяем с каким контролеером будем работать

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

// определяем с какой функцие будем работать

$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPage($smary, $controllerName, $actionName);