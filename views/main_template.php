<?php

$mode = 'main';
$user = isset($_SESSION['user']) ? $_SESSION['user'] : false;
$err = array();
include './html/main.html';
echo '<h1>Lorem ipsum dolor sit amet.</h1>'
?>