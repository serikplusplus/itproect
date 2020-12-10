<?php

/*
 * Файл контроллер страницы  товара
 * 
 */

include_once '../models/CategoriesModel.php'; //модели категорий
include_once '../models/ProductsModel.php'; //модели продуктов
include_once '../models/UsersModel.php';

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
    if ($rsProduct == null) {
        redirect('/');
    }

    $seller1 = getNameSeller($rsProduct['seller_id']);
    $seller = isset($seller1['name']) ? $seller1['name'] : "Аноним";
    $seller_id = $rsProduct['seller_id'];

    $rsCategories = getAllMainCatsWithChildren();
    $smarty->assign('pageTitle', 'Cosso');
    $smarty->assign('rsProduct', $rsProduct);
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('seller', $seller);
    $smarty->assign('sellerId', $seller_id);
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

/**
 * 
 * Формирование страницы моих продуктов
 * 
 * @param type $smarty
 * 
 */
function myproductAction($smarty) {



    $rsCategories = getAllMainCatsWithChildren();
    $rsProducts = getProductsUser($_SESSION['user']['id']);
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('pageTitle', 'Cosso');



    if ($rsProducts) {
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'user-products');
        loadTemplate($smarty, 'footer');
    } else {
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'empty');
        loadTemplate($smarty, 'footer');
    }
}

/**
 * 
 * Формирование страницы изминения продуктов
 * 
 * @param type $smarty
 * 
 */
function changeproductAction($smarty) {
    if (!isset($_SESSION['user'])) {
        redirect('/');
    }
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($itemId == null)
        exit();

    $rsProduct = getProductById($itemId);
    if ($rsProduct == null) {
        redirect('/');
    }

    $seller_id = $rsProduct['seller_id'];

    if ($_SESSION['user']['id'] != $seller_id) {
        redirect('/');
    }

    $rsCategories = getAllMainCatsWithChildren();
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProduct', $rsProduct);
    $smarty->assign('sellerId', $seller_id);
    $smarty->assign('pageTitle', 'Cosso');

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'user-changeproduct');
    loadTemplate($smarty, 'footer');
}

/**
 * 
 * Функция добавление товара
 * 
 */
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

    $res = insertProduct($itemName, $itemPrice, $itemDesc, $itemCat, $_SESSION['user']['id']);
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

/**
 * 
 * Функция удаления товара
 * 
 */
function deleteproductAction() {
    if (!isset($_SESSION['user'])) {
        redirect('/');
    }
    
    $itemId = $_POST['itemId'];
    
    $rsProduct = getProductById($itemId);
    if ($rsProduct == null) {
        redirect('/');
    }
    if ($_SESSION['user']['id'] != $rsProduct['seller_id']) {
        redirect('/');
    }



    $res = deleteProduct($itemId);
    if ($res['success']) {
        $resData['success'] = 1;
        $resData['message'] = "Продукт удален";
    } else {
        $resData['success'] = 0;
        $resData['message'] = $res['message'];
    }

    echo json_encode($resData);
    return;
}

/**
 * 
 * Функция изминение товара
 * 
 */
function productchangeAction() {
    if (!isset($_SESSION['user'])) {
        redirect('/');
    }
    $itemId = $_POST['itemId'];
    $itemName = isset($_POST['itemName']) ? $_POST['itemName'] : null;
    $itemName = trim($itemName);
    $itemPrice = isset($_POST['itemPrice']) ? $_POST['itemPrice'] : null;
    $itemPrice = trim($itemPrice);
    $itemDesc = isset($_POST['itemDesc']) ? $_POST['itemDesc'] : null;
    $itemDesc = trim($itemDesc);

    $rsProduct = getProductById($itemId);

    if ($_SESSION['user']['id'] != $rsProduct['seller_id']) {
        redirect('/');
    }


    $res = changeProduct($itemId, $itemName, $itemPrice, $itemDesc);
    if ($res['success']) {
        $resData['success'] = 1;
        $resData['message'] = "Продукт изминен";
    } else {
        $resData['success'] = 0;
        $resData['message'] = $res['message'];
    }

    echo json_encode($resData);
    return;
}

/**
 * 
 * Загрузка картинок товара
 * 
 * @return type
 */
function uploadnewAction() {
    if (!isset($_SESSION['user'])) {
        redirect('/');
    }
    $maxSize = 6 * 1024 * 1024;
    $idFile = lastId();
    $ext1 = pathinfo($_FILES['filename1']['name'], PATHINFO_EXTENSION);
    $newFileName1 = $idFile . "." . $ext1;
    $ext2 = pathinfo($_FILES['filename2']['name'], PATHINFO_EXTENSION);
    $newFileName2 = $idFile . "-1" . "." . $ext2;
    $ext3 = pathinfo($_FILES['filename3']['name'], PATHINFO_EXTENSION);
    $newFileName3 = $idFile . "-2" . "." . $ext3;

    if (($_FILES['filename1']['size'] && $_FILES['filename2']['size'] > $maxSize && $_FILES['filename3']['size'] > $maxSize) > $maxSize) {
        echo 'Размер файла больше 6мб';
        return;
    }
    if (is_uploaded_file($_FILES['filename1']['tmp_name']) && is_uploaded_file($_FILES['filename2']['tmp_name']) && is_uploaded_file($_FILES['filename3']['tmp_name'])) {
        $res = move_uploaded_file($_FILES['filename1']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/products/' . $newFileName1);
        $res = move_uploaded_file($_FILES['filename2']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/products/' . $newFileName2);
        $res = move_uploaded_file($_FILES['filename3']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/products/' . $newFileName3);
        if ($res) {
            $res = insertProductImg($idFile, $newFileName1, $newFileName2, $newFileName3);
        }
    } else {
        echo 'Ошибка загрузки файла';
    }
    return;
}

/**
 * 
 * Изминение картинок товара
 * 
 * @return type
 */
function uploadAction() {
    if (!isset($_SESSION['user'])) {
        redirect('/');
    }



    $maxSize = 6 * 1024 * 1024;
    $idFile = $_POST['itemId'];


    $rsProduct = getProductById($idFile);

    if ($_SESSION['user']['id'] != $rsProduct['seller_id']) {
        redirect('/');
    }

    if (isset($_FILES['filename1'])) {
        $ext1 = pathinfo($_FILES['filename1']['name'], PATHINFO_EXTENSION);
        $newFileName1 = $idFile . "." . $ext1;
        if ($_FILES['filename1']['size'] > $maxSize) {
            echo 'Размер файла 1 больше 6мб';
            return;
        }
        if (is_uploaded_file($_FILES['filename1']['tmp_name'])) {

            $img = $_SERVER['DOCUMENT_ROOT'] . '/images/products/' . $rsProduct['image'];

            unlink($img);

            $res = move_uploaded_file($_FILES['filename1']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/products/' . $newFileName1);
            if ($res) {
                $res = changeProductImg($idFile, $newFileName1, null, null);
            }
        } else {
            echo 'Ошибка загрузки файла';
        }
    }


    if (isset($_FILES['filename2'])) {
        $ext2 = pathinfo($_FILES['filename2']['name'], PATHINFO_EXTENSION);
        $newFileName2 = $idFile . "." . $ext2;
        if ($_FILES['filename2']['size'] > $maxSize) {
            echo 'Размер файла 2 больше 6мб';
            return;
        }
        if (is_uploaded_file($_FILES['filename2']['tmp_name'])) {

            $img = $_SERVER['DOCUMENT_ROOT'] . '/images/products/' . $rsProduct['image1'];

            unlink($img);

            $res = move_uploaded_file($_FILES['filename2']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/products/' . $newFileName2);
            if ($res) {
                $res = changeProductImg($idFile, null, $newFileName2, null);
            }
        } else {
            echo 'Ошибка загрузки файла';
        }
    }



    if (isset($_FILES['filename3'])) {
        $ext3 = pathinfo($_FILES['filename3']['name'], PATHINFO_EXTENSION);
        $newFileName3 = $idFile . "." . $ext3;
        if ($_FILES['filename3']['size'] > $maxSize) {
            echo 'Размер файла 3 больше 6мб';
            return;
        }
        if (is_uploaded_file($_FILES['filename3']['tmp_name'])) {

            $img = $_SERVER['DOCUMENT_ROOT'] . '/images/products/' . $rsProduct['image2'];

            unlink($img);

            $res = move_uploaded_file($_FILES['filename3']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/products/' . $newFileName3);
            if ($res) {
                $res = changeProductImg($idFile, null, null, $newFileName3);
            }
        } else {
            echo 'Ошибка загрузки файла';
        }
    }
    return;
}
