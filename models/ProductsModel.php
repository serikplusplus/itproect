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
function getLastProducts($limit = null) {

    $sql = "SELECT * FROM `products` WHERE status = 1 ORDER BY id DESC";

    if ($limit) {
        $sql .= " LIMIT {$limit}";
    }
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
function getProductsByCat($catId,$offset = 1,$limit = 5) {
    //require '../config/db.php';

     $sqlCnt = "SELECT count(id) as cnt FROM products WHERE category_id = {$catId} and status = 1";
    //ответ от базы
    $rs = mysqli_query($GLOBALS['db'], $sqlCnt);
    $cnt = createSmartyRsArray($rs);
    
    
    $catId = intval($catId);

    $sql = "SELECT * FROM products WHERE category_id = {$catId} and status = 1 ORDER BY id DESC";
    //ответ от базы
    
    if($limit)
    {
         $sql .= " LIMIT {$offset},{$limit}";
    }
    
    $rs = mysqli_query($GLOBALS['db'], $sql);
    $rows = createSmartyRsArray($rs);

    return array($rows,$cnt[0]['cnt']);
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

    $sql = "SELECT * FROM products WHERE id = {$itemId} and status = 1";
    //ответ от базы
    $rs = mysqli_query($GLOBALS['db'], $sql);
    return mysqli_fetch_assoc($rs);
}

/**
 * 
 * Получение всех товаров пользователя
 * 
 * @return type
 */
function getProductsUser($user_id) {

    $sql = "SELECT * FROM products WHERE seller_id = {$user_id} and status = 1";
    //ответ от базы
    $rs = mysqli_query($GLOBALS['db'], $sql);
    return createSmartyRsArray($rs);
}

/**
 * 
 * Удаление продукта
 * 
 * @return type
 */
function deleteProduct($itemId) {

    $res = array();

    /* $sql1 = "SELECT * FROM products WHERE id = {$itemId}";
      //ответ от базы
      $rs1 = mysqli_query($GLOBALS['db'], $sql1);
      $rs1 = mysqli_fetch_assoc($rs1); */



    $sql = "UPDATE products SET `status` = 0 WHERE id = {$itemId}";
    //ответ от базы
    $rs = mysqli_query($GLOBALS['db'], $sql);
    $res['success'] = 1;
    return $res;
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
function insertProduct($itemName, $itemPrice, $itemDesc, $itemCat, $id) {

    $res = null;

    if ($itemName && $itemPrice && $itemDesc && ($itemCat > 0)) {
        $sql = "INSERT INTO products SET `name`='{$itemName}',`price`='{$itemPrice}',`description`='{$itemDesc}',`category_id`='{$itemCat}',`seller_id`='{$id}'";
        $rs = mysqli_query($GLOBALS['db'], $sql);
        $res['success'] = 1;
    } else {
        if (!$itemName) {
            $res['success'] = 0;
            $res['message'] = "Название товара пусто";
        } else if (!$itemPrice) {
            $res['success'] = 0;
            $res['message'] = "Цена пусто";
        } else if (!$itemDesc) {
            $res['success'] = 0;
            $res['message'] = "Описание пусто";
        } else if ($itemCat < 0) {
            $res['success'] = 0;
            $res['message'] = "Категория пусто";
        }
    }

    return $res;
}

/**
 * 
 * Изминение продукта
 * 
 * @param string $itemName - название нового продукта
 * @param int $itemPrice - цена
 * @param string $itemDesc - описание
 * @param int $itemId - Id продукта
 *
 */
function changeProduct($itemId, $itemName, $itemPrice, $itemDesc) {

    $res = array();

    if ($itemName && $itemPrice && $itemDesc) {
        $sql = "UPDATE products SET `name`='{$itemName}',`price`='{$itemPrice}',`description`='{$itemDesc}' WHERE `id` = '{$itemId}'";
        $rs = mysqli_query($GLOBALS['db'], $sql);
        $res['success'] = 1;
    } else {
        if (!$itemName) {
            $res['success'] = 0;
            $res['message'] = "Название товара пусто";
        } else if (!$itemPrice) {
            $res['success'] = 0;
            $res['message'] = "Цена пусто";
        } else if (!$itemDesc) {
            $res['success'] = 0;
            $res['message'] = "Описание пусто";
        }
    }
    return $res;
}

/**
 * 
 * Добавление img продукта
 * 
 * @param string $itemName - название нового продукта
 * @param int $itemPrice - цена
 * @param string $itemDesc - описание
 * @param int $itemCat - категория
 *
 */
function insertProductImg($idFile, $newFileName1, $newFileName2, $newFileName3) {

    $sql = "UPDATE products SET `image`='{$newFileName1}',`image1`='{$newFileName2}',`image2`='{$newFileName3}' WHERE `id` = '{$idFile}'";
    $rs = mysqli_query($GLOBALS['db'], $sql);

    return $rs;
}

/**
 * 
 * Изминение img продукта
 * 
 * @param string $itemName - название нового продукта
 * @param int $itemPrice - цена
 * @param string $itemDesc - описание
 * @param int $itemCat - категория
 *
 */
function changeProductImg($idFile, $newFileName1, $newFileName2 = null, $newFileName3 = null) {

    if ($newFileName1) {
        $sql = "UPDATE products SET `image`='{$newFileName1}' WHERE `id` = '{$idFile}'";
        $rs = mysqli_query($GLOBALS['db'], $sql);
    } else if ($newFileName2) {
        $sql = "UPDATE products SET `image1`='{$newFileName2}' WHERE `id` = '{$idFile}'";
        $rs = mysqli_query($GLOBALS['db'], $sql);
    } else if ($newFileName3) {
        $sql = "UPDATE products SET `image2`='{$newFileName3}' WHERE `id` = '{$idFile}'";
        $rs = mysqli_query($GLOBALS['db'], $sql);
    }
    return $rs;
}

/**
 * 
 * Получение последнего Id 
 * 
 * @return type
 */
function lastId() {
    $id_q = "SELECT id FROM products ORDER BY id DESC LIMIT 1";
    $id = mysqli_query($GLOBALS['db'], $id_q);
    $id = createSmartyRsArray($id);
    ;
    return $id[0]['id'];
}
