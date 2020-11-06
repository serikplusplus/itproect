<?php
/* 
 * Файл контроллер страницы  товара
 * 
 */

include_once '../models/CategoriesModel.php'; //модели категорий
include_once '../models/ProductsModel.php';//модели продуктов


/**
 * 
 * Формирование страницы продукта
 * 
 * @param type $smarty
 * 
 */
function indexAction($smarty) {
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if($itemId==null)exit ();
    
    
    $rsProduct = getProductById($itemId);
    
    $rsCategories = getAllMainCatsWithChildren(); 
    $smarty->assign('pageTitle','Cosso');
    $smarty->assign('rsProduct',$rsProduct);
     $smarty->assign('rsCategories',$rsCategories);
    loadTemplate($smarty,'header');
    loadTemplate($smarty,'product');
    loadTemplate($smarty,'footer');
}