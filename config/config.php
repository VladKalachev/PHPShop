<?php 
 
/**
*
* Файл настроик 
*
*/

// константы для обращения к контроллерам

// >
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');
// <

// > Используемый шаблон
$template = 'default';
$templateAdmin = 'admin';

// путь к файлам шаблонов (*.tpl)
define ('TemplatePrefix', "../views/{$template}/");
define ('TemplateAdminPrefix', "../views/{$templateAdmin}/");
define ('TemplatePostfix', '.tpl');

// путь к файлам шаблонов в вебпространстве
define ('TemplateWebPath', "/templates/{$template}/");
define ('TemplateAdminWebPath', "/templates/{$templateAdmin}/");
// <php

// > Инифиализация шаблонизатора 
// put full path to Smarty.class.php
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');


$smarty->assign('teplateWebPath', TemplateWebPath);
// <
