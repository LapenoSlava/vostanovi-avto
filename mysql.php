<?php
$mysql_database="vosstanovi_auto"; //Имя базы данных
$mysql_username="root@localhost"; //Имя пользователя базы данных
$mysql_password=""; //Пароль пользователя базы данных
$mysql_host="localhost"; //Сервер базы данных
$dbpf="prefix"; //Префикс таблиц в базе данных
$mysql_connect = mysql_connect($mysql_host, $mysql_username, $mysql_password);
//Выбираем базу данных для работы
mysql_select_db($mysql_database);
//Устанавливаем кодировку для соединения базы данных
mysql_query("SET NAMES cp1251");