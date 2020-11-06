<?php
/**
 * 
 * Файл основных функций
 * 
 */

/**
 * Функция загрузки страниц - формироване запрашиваемой страницы
 * 
 * @param string $controllerName - название контроллера
 * @param string $actionName - функция обработки страницы
 */
function loadPage($smarty,$controllerName, $actionName = 'index')
{
    //подключаем контроллер 
    include_once PathPrefix.$controllerName.PathPostfix;
    // формирование названия вызываемой функции
    $function = $actionName.'Action';
    // вызов исполняемой функции
    $function($smarty);
}


/**
 * Загрузка шаблона
 * 
 * @param object $smarty - шаблонизатор
 * @param string $templateName - имя загружаемого файла
 */
function loadTemplate($smarty,$templateName) {
    $smarty->display($templateName.TemplatePostfix);
}


/**
 * Функуция отладки. Выводит значение переменной $value на екран и завершает работу программы 
 * 
 * @param value $value - переменная для вывода
 * @param value $die - индикатор ошибки
 */
function dbg($value = null, $die = 1) {
    echo 'Debug:<br><pre>';
    print_r($value);
    echo '</pre>';
    if($die) die;
}

/**
 * 
 * Функция переоброзования выборки SELECT в ассоциативный массив
 * 
 * @param recordset $rs - результат выполнения SELECt
 * @return array $smartyRs - массив пунктов меню
 */
function createSmartyRsArray($rs) {
    
    if(!$rs) return false;
    $smartyRs = array();
       //запись ответов в $smartyRs
   while ($row = mysqli_fetch_assoc($rs))
   {
       $smartyRs[] = $row;
   }
   
   return $smartyRs;
}
