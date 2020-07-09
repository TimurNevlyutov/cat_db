<?php

 //Ключ защиты
 if(!defined('CAT_KEY'))
 {
     header("HTTP/1.1 404 Not Found");
     exit(file_get_contents('./404.html'));
 }

 //Адрес базы данных
 define('CAT_DBSERVER','localhost');

 //Логин БД
 define('CAT_DBUSER','admin');

 //Пароль БД
 define('CAT_DBPASSWORD','123');

 //БД
 define('CAT_DATABASE','db');

 //Префикс БД
 define('CAT_DBPREFIX','cat_');

 //Errors
 define('CAT_ERROR_CONNECT','Немогу соеденится с БД');

 //Errors
 define('CAT_NO_DB_SELECT','Данная БД отсутствует на сервере');

 //Адрес хоста сайта
 define('CAT_HOST','http://'. $_SERVER['HTTP_HOST'] .'/');

 ?>