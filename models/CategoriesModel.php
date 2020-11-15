<?php

/*
 * 
 * Модель для таблицы категорий(categories)
 * 
 */

/**
 * 
 * Функция получения дочерних пунктов меню
 * 
 * @param  $db - подключение к базе данных
 * @param int $cartId - id родительского пункта меню
 * @return array $childreRs - массив дочерних пунктов
 */
function getChildrenForCat($cartId) {
    //require '../config/db.php';
    $sql = "SELECT * FROM categories WHERE parent_id = {$cartId}";
    $rs = mysqli_query($GLOBALS['db'], $sql);

    return createSmartyRsArray($rs);
}

/**
 * 
 * Функция получения всех родительских пунктов категорий товаров c привязкой дочерних
 * @return array $smartyRs - массив категорий
 */
function getAllMainCatsWithChildren() {
    //require '../config/db.php';
    //запрос к базе
    $sql = 'SELECT * FROM categories WHERE parent_id = 0';
    //ответ от базы
    $rs = mysqli_query($GLOBALS['db'], $sql);

    //массив ответов от базы для smarty
    $smartyRs = array();

    //запись ответов в $smartyRs
    while ($row = mysqli_fetch_assoc($rs)) {
        $rsChildren = getChildrenForCat($row['id']);
        if ($rsChildren) {
            $row['children'] = $rsChildren;
        }

        $smartyRs[] = $row;
    }
    return $smartyRs;
}

/**
 * Функция получение категорий по их ID
 * 
 * @param int $catId - индекс категории
 * @return array массив категорий
 */
function getCatById($catId) {
    //require '../config/db.php';

    $catId = intval($catId);

    $sql = "SELECT * FROM categories WHERE id = {$catId}";
    //ответ от базы
    $rs = mysqli_query($GLOBALS['db'], $sql);

    return mysqli_fetch_assoc($rs);
}

/**
 * 
 * Получить все категории 
 * 
 * @return array
 */
function getAllCategories() {
    $sql = "SELECT * FROM categories ORDER BY parent_id ASC";
    $rs = mysqli_query($GLOBALS['db'], $sql);
    return createSmartyRsArray($rs);
}



/**
 * 
 * Получить все категории которые не являються дочерними
 * 
 * @return array
 */
function getAllMainCategories() {
    $sql = "SELECT * FROM categories WHERE parent_id = 0";
    $rs = mysqli_query($GLOBALS['db'], $sql);
    return createSmartyRsArray($rs);
}



/**
 * 
 * Добавление новой категории товаров
 * 
 * @param string $catName - название новой категории
 * @param int $parentId - родительский ID новой категории
 * @return int - Id новой категории
 */
function setCat($catName, $parentId = 0) {
    $resData = null;
    $catName = htmlspecialchars(mysqli_real_escape_string($GLOBALS['db'], $catName));
    if ($catName != null) {
        $sqlF = "SELECT * FROM categories WHERE (`name`= '{$catName}' and `parent_id`='{$parentId}') LIMIT 1";
        $rsF = mysqli_query($GLOBALS['db'], $sqlF);
        $rsF = createSmartyRsArray($rsF);

        if (isset($rsF[0])) {
            $resData['success'] = 0;
            $resData['message'] = "Такая категория уже есть";
        } else {
            $resData['success'] = 1;
            $sql = "INSERT INTO categories (`parent_id`,`name`) VALUES ('{$parentId}','{$catName}')";
            $rs = mysqli_query($GLOBALS['db'], $sql);
        }
    }
    else{
        $resData['success'] = 0;
        $resData['message'] = "Название категори пусто";
    }


    return $resData;
}
