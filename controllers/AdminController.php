<?php

/*
 * Файл контроллер страницы добавление товаров и админ-панели
 * 
 */

include_once '../models/CategoriesModel.php'; //модели категорий
include_once '../models/ProductsModel.php'; //модели продуктов

$smarty->setTemplateDir(TemplateAdminPrefix);
$smarty->assign('templateWebPath', TemplateAdminWebPath);

/**
 * Формирование главной страницы админки
 * 
 * @param object $smarty - шаблонизатор
 */
function indexAction($smarty) {

    $rsCategories = getAllMainCategories();

    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminIndex');
}

/**
 * 
 * Добавление новой категории
 * 
 */
function addnewcatAction() {

    $catName = isset($_POST['setNewCategoriName']) ? $_POST['setNewCategoriName'] : null;
    $catName = trim($catName);
    $parent_id = $_POST['setNewCategoriParentId'];

    $res = setCat($catName, $parent_id);

    if ($res['success']) {
        $resData['success'] = 1;
        $resData['message'] = "Категория добавлена";
        echo json_encode($resData);
    } else {
        echo json_encode($res);
    }

    return;
}

/**
 * Формирование страницы ккатегорий админки
 * 
 * @param object $smarty - шаблонизатор
 */
function categoriesAction($smarty) {

    $rsCategories = getAllCategories();
    $rsMainCategories = getAllMainCategories();
    
    
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsMainCategories', $rsMainCategories);

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminCategory');
}

/**
 * 
 * Изминение категории
 * 
 */
function updatecategoriesAction() {

    $itemId = $_POST['itemId'];
    $parentId = $_POST['parentId'];
    $newName = $_POST['newName'];
    
    $res = updateCategoryDate($itemId,$parentId,$newName);
    
     if ($res) {
        $resData['success'] = 1;
        $resData['message'] = "Категория обновлена";
    } else {
        $resData['success'] = 0;
        $resData['message'] = "Ошибка обновления категории";
    }
    
    
    echo json_encode($resData);
    return;
}

/**
 * Формирование страницы продуктов админки
 * 
 * @param object $smarty - шаблонизатор
 */
function productAction($smarty) {

    $rsCategories = getAllCategories();
    $rsProducts = getProducts();
    
    
    
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProduct);

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminCategory');
}