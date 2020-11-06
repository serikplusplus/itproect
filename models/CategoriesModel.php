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

function getChildrenForCat($cartId)
{
    require '../config/db.php';
    $sql = "SELECT * FROM categories WHERE parent_id = {$cartId}"; 
    $rs = mysqli_query($db,$sql);

    return createSmartyRsArray($rs);
}

/**
 * 
 * Функция получения всех родительских пунктов категорий товаров c привязкой дочерних
 * @return array $smartyRs - массив категорий
 */
function getAllMainCatsWithChildren() {    
    require '../config/db.php';
   //запрос к базе
   $sql = 'SELECT * FROM categories WHERE parent_id = 0'; 
   //ответ от базы
   $rs = mysqli_query($db,$sql);
   
   //массив ответов от базы для smarty
   $smartyRs = array();
   
   //запись ответов в $smartyRs
   while ($row = mysqli_fetch_assoc($rs))
   {
       $rsChildren = getChildrenForCat($row['id']);
       if($rsChildren)
       {
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
function getCatById($catId){
     require '../config/db.php';
     
     $catId = intval($catId);
     
     $sql = "SELECT * FROM categories WHERE id = {$catId}"; 
      //ответ от базы
     $rs = mysqli_query($db,$sql);
     
     return mysqli_fetch_assoc($rs);
}
