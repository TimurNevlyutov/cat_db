<?php

 //Ключ защиты
 if(!defined('CAT_KEY'))
 {
     header("HTTP/1.1 404 Not Found");
     exit(file_get_contents('./../404.html'));
 }

//Подключение к базе данных mySQL с помощью PDO
try {
    $db = new PDO('pgsql:host=localhost;dbname='.CAT_DATABASE, CAT_DBUSER, CAT_DBPASSWORD, array(
    	PDO::ATTR_PERSISTENT => true
    	));

} catch (PDOException $e) {
    print "Ошибка соединеия!: " . $e->getMessage() . "<br/>";
    die();
}

