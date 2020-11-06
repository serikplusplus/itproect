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
function getLastProducts(/*$limit = null*/){
     require '../config/db.php';
     $sql = "SELECT * FROM `products` ORDER BY id DESC"; 
     
     /*if($limit)
     {
         $sql."LIMIT {$limit}";
     }*/
   //ответ от базы
   $rs = mysqli_query($db,$sql);
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
     require '../config/db.php';
     
     $catId = intval($catId);
     
     $sql = "SELECT * FROM products WHERE category_id = {$catId} ORDER BY id DESC"; 
      //ответ от базы
     $rs = mysqli_query($db,$sql);
     
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
     require '../config/db.php';
     
     $itemId = intval($itemId);
     
     $sql = "SELECT * FROM products WHERE id = {$itemId}"; 
      //ответ от базы
     $rs = mysqli_query($db,$sql);
     return mysqli_fetch_assoc($rs);
}