<?php
/**
 * 
 * Файл основных настроек
 * 
 */


//>константы для обращение к контроллерам 
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');
//<


//>изпользуемый шаблон
$template = 'default';
$templateAdmin = 'admin';
//путь к файлам шаблона
define('TemplatePrefix', "../views/{$template}/");
define('TemplateAdminPrefix', "../views/{$templateAdmin}/");
define('TemplatePostfix', '.tpl');

//путь к файлам шаблона в вебпространстве
define('TemplateWebPath', "templates/{$template}/");
define('TemplateAdminWebPath', "templates/{$templateAdmin}/");
//<


//>Инициализация шаблонизатора Smarty
require '../library/Smarty/libs/Smarty.class.php';
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath',TemplateWebPath);
//<