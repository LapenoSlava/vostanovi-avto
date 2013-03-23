<?php

//  1. Получаем данные
//  Данные получаем в массиве $_POST - там 2 переменные (email и password)
//  2. Ищем в бд такие данные
//  3. MYSQL connect
include_once "mysql.php";

//  если в бд есть такой логин/пароль - авторизуем
//  если в бд нет такого логина/пароля, возвращаем что что-то не верно
if ($email == false) {
    header('Location: http://www.tigir.com/php.htm');
}
//