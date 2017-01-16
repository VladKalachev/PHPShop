<?php 


//?controller=index&action=Index
// определяем с каким контролеером будем работать

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

echo 'Подлючаемый PHP файл (Контроллер) = ' . $controllerName . '<br />';

// определяем с какой функцие будем работать

$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

echo 'Функция формирующая страницу( Экшн) = ' . $actionName . '<br />';

// подключаем контроллер

include_once '../controllers/' . $controllerName . 'Controller.php';

// формируем название функции

$function = $actionName . 'Action';

echo 'Полное название вызываемой вынкции = ' . $function . '<br />';

$function();

//phpinfo();