<?php

/*
 * Файл контроллер страницы  товара
 * 
 */

include_once '../models/CategoriesModel.php'; //модели категорий
include_once '../models/ProductsModel.php'; //модели продуктов

/**
 * 
 * Формирование страницы продукта
 * 
 * @param type $smarty
 * 
 */
function indexAction($smarty) {
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($itemId == null)
        exit();


    $rsProduct = getProductById($itemId);

    $rsCategories = getAllMainCatsWithChildren();
    $smarty->assign('pageTitle', 'Cosso');
    $smarty->assign('rsProduct', $rsProduct);
    $smarty->assign('rsCategories', $rsCategories);
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'product');
    loadTemplate($smarty, 'footer');
}

/**
 * 
 * Формирование страницы добавления продукта
 * 
 * @param type $smarty
 * 
 */
function newproductAction($smarty) {



    $rsCategori = getChildrenCat();
    $rsCategories = getAllMainCatsWithChildren();
    $rsMainCategories = getAllMainCategories();
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsCategori', $rsCategori);
    $smarty->assign('rsMainCategories', $rsMainCategories);
    $smarty->assign('pageTitle', 'Cosso');

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'new-product');
    loadTemplate($smarty, 'footer');
}

function addproductAction() {
    if (!isset($_SESSION['user'])) {
        redirect('/');
    }
    $itemName = isset($_POST['itemName']) ? $_POST['itemName'] : null;
    $itemName = trim($itemName);
    $itemPrice = isset($_POST['itemPrice']) ? $_POST['itemPrice'] : null;
    $itemPrice = trim($itemPrice);
    $itemDesc = isset($_POST['itemDesc']) ? $_POST['itemDesc'] : null;
    $itemDesc = trim($itemDesc);
    $itemCat = $_POST['itemCat'];

    $res = insertProduct($itemName, $itemPrice, $itemDesc, $itemCat);
    if ($res['success']) {
        $resData['success'] = 1;
        $resData['message'] = "Продукт добавлена";
        
    } else {
        $resData['success'] = 0;
        $resData['message'] = $res['message'];
    }
    
    echo json_encode($resData);
    return;
}
