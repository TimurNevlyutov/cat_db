<?php

	//Запускаем сессию
	session_start();

	//Устанавливаем кодировку и вывод всех ошибок
	header('Content-Type: text/html; charset=UTF8');
	error_reporting(E_ALL);

	//Включаем буферизацию содержимого
	ob_start();

	//Определяем переменную для переключателя
	$mode = 'auth';
	$user = isset($_SESSION['user']) ? $_SESSION['user'] : false;
	$err = array();
	//Устанавливаем ключ защиты
	define('CAT_KEY', true);

	//Подключаем конфигурационный файл
	include './config.php';
	 
	//Подключаем скрипт с функциями
	include './func/funct.php';

	//подключаем PostgreSQL
	include './bd/bd.php';

	//подключаем Авторизацию
	include './scripts/auth/auth.php';
	include './scripts/auth/auth_form.html';
	include './scripts/auth/show.php';

	//Получаем данные с буфера
	$content = ob_get_contents();
	ob_end_clean();

	//Подключаем наш шаблон
	include './html/index.html';
?>