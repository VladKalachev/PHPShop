<?php 
 
/**
*
* Основные функции
*
*/

/**
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы
 */

function loadPage($smarty, $controllerName, $actionName = 'index') 
{
	
	include_once PathPrefix . $controllerName . PathPostfix;
	
	$function = $actionName . 'Action';
	$function($smarty);
}

/**
 * 
 * Загрузка шаблона
 * 
 * @param object $smarty объект шаблонизатора  
 * @param  strung $templateName название файла шаблона
 * 
 */

function loadTemplate($smarty, $templateName)
{
	$smarty->display($templateName . TemplatePostfix);
}



/**
 * 
 * Функция отладки. Останавливает работу программы выводя значение переменной
 * 
 * @param variant $value пересенная для вывода ее на страницу  
 * 
 */

function d($value = null, $die = 1)
{
	echo 'Debug: <br /><pre>';
	print_r($value);
	echo '</pre>';

	if($die) die;
	
}