<?php
include_once "mysql.php";   //  Подключаемся к базе данных
//  Ищем полученные данные
if ($isDataCorrect == false) {
    echo "Incorrect email or password";
}
//  Иначе авторизуем