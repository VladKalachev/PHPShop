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

function loadPage($smarty, $controllerName, $actionName = 'index') {
	
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

function loadTemplate($smarty, $templateName){

	$smarty->display($templateName . TemplatePostfix);

}