<?php
global $db;
 //Ключ защиты

    $db = new PDO('pgsql:host=localhost;dbname='.CAT_DATABASE, CAT_DBUSER, CAT_DBPASSWORD, array(
    	PDO::ATTR_PERSISTENT => true
    	));


