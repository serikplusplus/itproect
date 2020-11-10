<?php
session_start();

include_once '../config/config.php'; //основные настройки
include_once '../config/db.php'; //подключение базы данных
include_once '../library/mainFunction.php'; //основные функции


if(isset($_SESSION['user']))
{
    $smarty->assign('arUser',$_SESSION['user']);
}

//определяем контроллер для работы
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
//определяем функцию для работы
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';


loadPage($smarty,$controllerName,$actionName);