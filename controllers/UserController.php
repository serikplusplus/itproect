<?php

/* 
 * Файл контроллер функций пользователя
 * 
 */

include_once '../models/CategoriesModel.php'; //модели категорий
include_once '../models/UsersModel.php'; //модели пользователя



/**
 * AJAX регистрация пользователя
 * Инициализация сессионной переменной ($_SESSION['user'])
 * 
 * @return JSON массив данных нового пользователя
 */
function registerAction() {
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
    $email = trim($email);
    
    $password1 = isset($_REQUEST['password1']) ? $_REQUEST['password1'] : null;
    $password2 = isset($_REQUEST['password2']) ? $_REQUEST['password2'] : null;
    
    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
    $name = trim($name);
    $phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null;
    $adress = isset($_REQUEST['adress']) ? $_REQUEST['adress'] : null;
    
    
    $resData = null; //массив статуса обработки
    $resData = checkRegisterParams($email,$password1,$password2);
    
    
    if(!$resData && checkUserEmail($email))
    {
        $resData['success']=false;
        $resData['message']="Пользователь с таким email уже есть";
    }
    
    if(!$resData){
        $passwordMD5 = md5($password1);
        $userData = registerNewUser($email, $name, $passwordMD5, $phone, $adress); 
        
        if($userData['success'])
        {
             $resData['success']=1;
             $resData['message']="Пользователь успешно зарегистрирован";
             
             $userData = $userData[0];
             $resData['userName'] = $userData['name'] ? $userData['name'] : $userData['email'];
             $resData['userEmail'] = $email;
             $_SESSION['user'] = $userData;
             $_SESSION['user']['displayName'] = $userData['name'] ? $userData['name'] : $userData['email'];
        }
        else{ 
            $resData['success']=0;
            $resData['message']="Ошибка регистрации";
        }
    }
    
    echo json_encode($resData);
}

/**
 * Выход пользователя
 * 
 */
function logoutAction() {
    if(isset($_SESSION['user']))
    {
        unset($_SESSION['user']);
    }
    
    redirect('/');
}

/**
 * 
 * Ajax авторизация пользователя
 * 
 * @return array - массив данных пользователя
 * 
 */
function loginAction() {
    $email = isset($_REQUEST['loginEmail']) ? $_REQUEST['loginEmail'] : null;
    $email = trim($email);
    
    $password = isset($_REQUEST['loginPassword']) ? $_REQUEST['loginPassword'] : null;
    $password = trim($password);
    
    $userData = loginUser($email,$password);
    if($userData['success'])
    {
        $userData = $userData[0];
        $_SESSION['user'] = $userData;
        $_SESSION['user']['displayName'] = $userData['name'] ? $userData['name'] : $userData['email'];
        $resData =  $_SESSION['user'];
        $resData['success'] = 1;
    }
     else{ 
            $resData['success']=0;
            $resData['message']="Неверный логин или пароль";
        }
        
     echo json_encode($resData);
}

/**
 * 
 * Формирование страници личных данных пользователя
 * 
 * @param type $smarty
 */
function settingsAction($smarty) {
    if(!isset($_SESSION['user']))
    {
        redirect('/');
    }
    $rsCategories = getAllMainCatsWithChildren(); 
    $smarty->assign('pageTitle','Cosso');
    $smarty->assign('rsCategories',$rsCategories);
    
    loadTemplate($smarty,'header');
    loadTemplate($smarty,'user-settings');
    loadTemplate($smarty,'footer');
}