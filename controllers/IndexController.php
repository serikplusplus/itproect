<?php
/**
 * 
 * Файл контроллер Index - главной страницы
 * 
 */

include_once '../models/CategoriesModel.php'; //модели категорий
include_once '../models/ProductsModel.php';//модели продуктов
/**
 * Формирование главной страницы сайта
 * 
 * @param object $smarty - шаблонизатор
 */
function indexAction($smarty) {
    
    $rsCategories = getAllMainCatsWithChildren();
    $rsProducts = getLastProducts(9);
    $smarty->assign('pageTitle','Cosso');
    $smarty->assign('rsCategories',$rsCategories);
    $smarty->assign('rsProducts',$rsProducts);
    loadTemplate($smarty,'header');
    loadTemplate($smarty,'index');
    loadTemplate($smarty,'footer');
}