<?php

 //Ключ защиты
 if(!defined('CAT_KEY'))
 {
     header("HTTP/1.1 404 Not Found");
     exit(file_get_contents('./../404.html'));
 }

$res = pg_insert($db, 'cat_object', $_POST);
?>