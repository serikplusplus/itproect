<?php

/*
 * Файл контроллер страницы категорий товаров
 * 
 */

include_once '../models/CategoriesModel.php'; //модели категорий
include_once '../models/ProductsModel.php'; //модели продуктов

/**
 * Формирование страницы категорий товаров
 * 
 * @param object $smarty - шаблонизатор
 */
function indexAction($smarty) {
    //определяем Id для работы
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($catId == null)
        exit();

    $rsCat = getCatById($catId);

    $rsProducts = getProductsByCat($catId);

    $rsCategories = getAllMainCatsWithChildren();
    $smarty->assign('pageTitle', 'Cosso');
    $smarty->assign('catTitle', $rsCat['name']);
    $smarty->assign('rsProducts', $rsProducts); //продукты выбраной категории
    $smarty->assign('rsCategories', $rsCategories);

    if ($rsProducts) {
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'category');
        loadTemplate($smarty, 'footer');
    } else {
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'empty');
        loadTemplate($smarty, 'footer');
    }
}



