<?php

/**
 * 
 * Модель для таблицы продуктов
 * 
 */

/**
 * 
 * Функция получение последних добавленых товаров 
 * 
 * @param int $limit - количесто елементов
 * @return array
 */
function getLastProducts(/* $limit = null */) {
    //require '../config/db.php';
    $sql = "SELECT * FROM `products` ORDER BY id DESC";

    /* if($limit)
      {
      $sql."LIMIT {$limit}";
      } */
    //ответ от базы
    $rs = mysqli_query($GLOBALS['db'], $sql);
    return createSmartyRsArray($rs);
}

/**
 * 
 * Функция получение продуктов для заданой категории товаров
 * 
 * @param int $catId Id категории
 * @return array
 * 
 */
function getProductsByCat($catId) {
    //require '../config/db.php';

    $catId = intval($catId);

    $sql = "SELECT * FROM products WHERE category_id = {$catId} ORDER BY id DESC";
    //ответ от базы
    $rs = mysqli_query($GLOBALS['db'], $sql);

    return createSmartyRsArray($rs);
}

/**
 * 
 * Функция получение продукта по его ID
 * 
 * @param int $itemId Id категории
 * @return array
 * 
 */
function getProductById($itemId) {
    //require '../config/db.php';

    $itemId = intval($itemId);

    $sql = "SELECT * FROM products WHERE id = {$itemId}";
    //ответ от базы
    $rs = mysqli_query($GLOBALS['db'], $sql);
    return mysqli_fetch_assoc($rs);
}

/**
 * 
 * Получение всех товаров
 * 
 * @return type
 */
function getProducts() {

    $sql = "SELECT * FROM products ORDER BY category_id";
    //ответ от базы
    $rs = mysqli_query($GLOBALS['db'], $sql);
    return createSmartyRsArray($rs);
}

/**
 * 
 * Добавление продукта
 * 
 * @param string $itemName - название нового продукта
 * @param int $itemPrice - цена
 * @param string $itemDesc - описание
 * @param int $itemCat - категория
 *
 */
function insertProduct($itemName, $itemPrice, $itemDesc, $itemCat) {
    
    $res = null;
    
    if ($itemName && $itemPrice && $itemDesc && ($itemCat>0)) {
        $f = $_FILES['filename']['name'];
        return $f;
        $sql = "INSERT INTO products SET `name`='{$itemName}',`price`='{$itemPrice}',`description`='{$itemDesc}',`category_id`='{$itemCat}'";
        $rs = mysqli_query($GLOBALS['db'], $sql);
        $res['success'] = 1;
    }
    else{
        if(!$itemName){
            $res['success'] = 0;
            $res['message'] = "Название товара пусто";
        }
        else if(!$itemPrice){
            $res['success'] = 0;
            $res['message'] = "Цена пусто";
        }
         else if(!$itemDesc){
            $res['success'] = 0;
            $res['message'] = "Описание пусто";
        }
         else if($itemCat<0){
            $res['success'] = 0;
            $res['message'] = "Категория пусто";
        }
    }

    return $res;
}
