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


    $paginator = array();
    $paginator['perPage'] = 15;// лимит товаров на страницы
    $paginator['currentPage'] = isset($_GET['page']) ? $_GET['page'] : 1;//получение номера страницы
    $paginator['offset'] = 0;//смешение товаров в поиске
    $paginator['link'] = '/category/' . $catId . '/?page=';//ссылка пагинатора

    list($rsProducts, $allCnt) = getProductsByCat($catId, $paginator['offset'], $paginator['perPage']);
    $paginator['pageCnt'] = ceil($allCnt / $paginator['perPage']);//максимальное число страниц

    if ($paginator['currentPage'] < 0)
        $paginator['currentPage'] = 1;
    if ($paginator['currentPage'] > $paginator['pageCnt'])
        $paginator['currentPage'] = $paginator['pageCnt'];
    $paginator['offset'] = ($paginator['currentPage'] * $paginator['perPage']) - $paginator['perPage'];
    list($rsProducts, $allCnt) = getProductsByCat($catId, $paginator['offset'], $paginator['perPage']);

    
    
    $rsCategories = getAllMainCatsWithChildren();
    $smarty->assign('pageTitle', 'Cosso');
    $smarty->assign('catTitle', $rsCat['name']);
    $smarty->assign('rsProducts', $rsProducts); //продукты выбраной категории
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('paginator', $paginator);


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
