<?php
/*
 * 
 * Файл работы с базой данных
 * 
 */

$dbLocation = "127.0.0.1";
$dbName = "myshop";
$dbUser = "root";
$dbPassword = "";

//Соединение с БД
$db = mysqli_connect($dbLocation,$dbUser,$dbPassword);
$GLOBALS['db'] = $db;
//Если нет подключения с MySQL
if(!$db)
{
    echo 'Нет соединения с MySQL';
    exit();
}

//Устанавливаем кодировку по умолчанию для соединения 
mysqli_set_charset($db,"utf8");

//Если нет подключения с базой
if(!mysqli_select_db($db,$dbName))
{
    echo "Нет соединения с базой {$dbName}";
    exit();
}