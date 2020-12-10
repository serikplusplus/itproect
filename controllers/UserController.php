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
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $email = trim($email);

    $password1 = isset($_POST['password1']) ? $_POST['password1'] : null;
    $password2 = isset($_POST['password2']) ? $_POST['password2'] : null;

    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $name = trim($name);
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $adress = isset($_POST['adress']) ? $_POST['adress'] : null;


    $resData = null; //массив статуса обработки
    $resData = checkRegisterParams($email, $password1, $password2,$name);


    if (!$resData && checkUserEmail($email)) {
        $resData['success'] = false;
        $resData['message'] = "Пользователь с таким email уже есть";
    }

    if (!$resData) {
        $passwordMD5 = md5($password1);
        $userData = registerNewUser($email, $name, $passwordMD5, $phone, $adress);

        if ($userData['success']) {
            $resData['success'] = 1;
            $resData['message'] = "Пользователь успешно зарегистрирован";

            $userData = $userData[0];
            $resData['userName'] = $userData['name'] ? $userData['name'] : $userData['email'];
            $resData['userEmail'] = $email;
            $_SESSION['user'] = $userData;
            $_SESSION['user']['displayName'] = $userData['name'] ? $userData['name'] : $userData['email'];
        } else {
            $resData['success'] = 0;
            $resData['message'] = "Ошибка регистрации";
        }
    }

    echo json_encode($resData);
}

/**
 * Выход пользователя
 * 
 */
function logoutAction() {
    if (isset($_SESSION['user'])) {
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
    $email = isset($_POST['loginEmail']) ? $_POST['loginEmail'] : null;
    $email = trim($email);

    $password = isset($_POST['loginPassword']) ? $_POST['loginPassword'] : null;
    $password = trim($password);

    $userData = loginUser($email, $password);
    if ($userData['success']) {
        $userData = $userData[0];
        $_SESSION['user'] = $userData;
        $_SESSION['user']['displayName'] = $userData['name'] ? $userData['name'] : $userData['email'];
        $resData = $_SESSION['user'];
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
        $resData['message'] = "Неверный логин или пароль";
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
    if (!isset($_SESSION['user'])) {
        redirect('/');
    }

    $rsCategories = getAllMainCatsWithChildren();
    $smarty->assign('pageTitle', 'Cosso');
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'user-settings');
    loadTemplate($smarty, 'footer');
}

/**
 * 
 * Обновление данных пользователя
 * 
 * @return JSON 
 * 
 */
function updateAction() {
    if (!isset($_SESSION['user'])) {
        redirect('/');
    }

    $resData = array();
    $password1 = isset($_POST['setPasswordNew']) ? $_POST['setPasswordNew'] : null;
    $password1 = trim($password1);
    $password2 = isset($_POST['setPasswordNew2']) ? $_POST['setPasswordNew2'] : null;
    $password2 = trim($password2);
    $curpassword = isset($_POST['setPassword']) ? $_POST['setPassword'] : null;
    $curpassword = trim($curpassword);
    $name = isset($_POST['setName']) ? $_POST['setName'] : null;
    $name = trim($name);
    $phone = isset($_POST['setPhone']) ? $_POST['setPhone'] : null;
    $phone = trim($phone);
    $adress = isset($_POST['setAdress']) ? $_POST['setAdress'] : null;


    $curpasswordMD5 = md5($curpassword);
    if (!$curpassword || ($_SESSION['user']['password'] != $curpasswordMD5)) {
        $resData['success'] = 0;
        $resData['message'] = "Текущий пароль не верный";
        echo json_encode($resData);
        return false;
    }

    $res = updateUserData($name, $password1, $password2, $curpasswordMD5, $phone, $adress);
    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = "Данные сохранены";
        $resData['userName'] = $name;

        $_SESSION['user']['name'] = $name;
        $_SESSION['user']['phone'] = $phone;
        $_SESSION['user']['adress'] = $adress;
        
        $newPassword = $_SESSION['user']['password'];
        if ($password1 && ($password1 == $password2)) {
        $newPassword = md5($password1);
        }
        $_SESSION['user']['password'] = $newPassword;
        $_SESSION['user']['displayName'] = $name ? $name : $_SESSION['user']['email'];
    }
    else{
        $resData['success'] = 0;
        $resData['message'] = "Ошибка обновления данных"; 
    }
    
    echo json_encode($resData);
    
}
