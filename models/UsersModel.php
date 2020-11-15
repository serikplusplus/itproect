<?php

/**
 * 
 * Модель для работы с пользователями
 * Работа с таблицей users
 * 
 */

/**
 * 
 * Регистрация нового пользователя
 * 
 * @param string $email уникальная почта пользователя
 * @param string $name имя пользователя
 * @param string $passwordMD5 пароль в MD5
 * @param string $phone телефон пользователя
 * @param string $adress адрес пользователя
 * @return array массив данных нового пользователя
 */
function registerNewUser($email, $name, $passwordMD5, $phone, $adress) {
    require '../config/db.php';
    //Проверки на вредоностные символы
    $email = htmlspecialchars(mysqli_real_escape_string($db, $email));
    $name = htmlspecialchars(mysqli_real_escape_string($db, $name));
    $phone = htmlspecialchars(mysqli_real_escape_string($db, $phone));
    $adress = htmlspecialchars(mysqli_real_escape_string($db, $adress));

    //Добавление пользователя
    $sql = "INSERT INTO users (`email`,`password`,`name`,`phone`,`adress`) "
            . "VALUES ('{$email}','{$passwordMD5}','{$name}','{$phone}','{$adress}')";

    $rs = mysqli_query($db, $sql);

    //Если запрос на добавление успешен
    if ($rs) {
        $sql = "SELECT * FROM users WHERE (`email`= '{$email}' and `password`='{$passwordMD5}') LIMIT 1";
        $rs = mysqli_query($db, $sql);
        $rs = createSmartyRsArray($rs);

        if (isset($rs[0])) {
            $rs['success'] = 1;
        } else {
            $rs['success'] = 0;
        }
    } else {
        $rs['success'] = 0;
    }

    return $rs;
}

/**
 * 
 * Проверка параметров для регистрации пользователя
 * 
 * 
 * @param string $email - email
 * @param string $password1 - пароль
 * @param string $password2 - повтор пароля
 * @return array - результат
 */
function checkRegisterParams($email, $password1, $password2) {

    $res = null;

    if (!$email) {
        $res['success'] = false;
        $res['message'] = 'Введите email';
    }
    if (!$password1) {
        $res['success'] = false;
        $res['message'] = 'Введите пароль';
    }
    if (!$password2) {
        $res['success'] = false;
        $res['message'] = 'Введите повторный пароль';
    }

    if ($password1 != $password2) {
        $res['success'] = false;
        $res['message'] = 'Пароли не совпадают';
    }

    return $res;
}

/**
 * 
 * Функция проверки почты (есть ли почта в базе)
 * 
 * @param string $email - почта
 * @return array - строка из таблицы users либо пустой массив
 * 
 */
function checkUserEmail($email) {
    require '../config/db.php';
    $email = mysqli_real_escape_string($db, $email);
    $sql = "SELECT id FROM users WHERE email= '{$email}'";
    $rs = mysqli_query($db, $sql);
    $rs = createSmartyRsArray($rs);

    return $rs;
}

/**
 * 
 * Авторизация пользователя
 * 
 * @param string $email
 * @param string $password
 * @return array - массив пользователя
 */
function loginUser($email, $password) {
    require '../config/db.php';
    $email = mysqli_real_escape_string($db, $email);
    $password = md5($password);
    $sql = "SELECT * FROM users WHERE (`email`= '{$email}' and `password`='{$password}') LIMIT 1";
    $rs = mysqli_query($db, $sql);
    $rs = createSmartyRsArray($rs);
    if (isset($rs[0])) {
        $rs['success'] = 1;
    } else {
        $rs['success'] = 0;
    }

    return $rs;
}

/**
 * 
 * Изминение данных пользователя
 * 
 * @param string $name - имя пользователя
 * @param string $password1 - новый пароль
 * @param string $password2 - повтор нового пароля
 * @param string $curpassword - текущий пароль
 * @param string $phone - телефон
 * @param string $adress - адрес
 * @return bool TRUE в случае успеха
 */
function updateUserData($name, $password1, $password2, $curpassword, $phone, $adress) {
    require '../config/db.php';
    //Проверки на вредоностные символы
    $email = htmlspecialchars(mysqli_real_escape_string($db, $_SESSION['user']['email']));
    $name = htmlspecialchars(mysqli_real_escape_string($db, $name));
    $phone = htmlspecialchars(mysqli_real_escape_string($db, $phone));
    $adress = htmlspecialchars(mysqli_real_escape_string($db, $adress));
    $password1 = trim($password1);
    $password2 = trim($password2);

    $newPassword = null;
    if ($password1 && ($password1 == $password2)) {
        $newPassword = md5($password1);
    }

    $sql = "UPDATE users SET";
    if ($newPassword) {
        $sql.="`password` = '{$newPassword}',";
    }

    $sql.="`name` = '{$name}',`phone` = '{$phone}',`adress` = '{$adress}' WHERE `email`='{$email}' AND `password`='{$curpassword}' LIMIT 1";
    
    $rs = mysqli_query($db, $sql);

    return $rs ;
}
