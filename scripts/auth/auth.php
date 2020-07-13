<?php

 
 //Выход из авторизации
 if(isset($_GET['exit']) == true){
 	//Уничтожаем сессию
 	session_destroy();

 	//Делаем редирект
 	header('Location:'. CAT_HOST .'?mode=auth');
 	exit;
 }

 //Если нажата кнопка то обрабатываем данные
 if(isset($_POST['submit']))
 {
	//Проверяем на пустоту
	if(empty($_POST['email']))
		$err[] = 'Login not entered';
	
	if(empty($_POST['pass']))
		$err[] = 'Password not entered';
	{
		/*Создаем запрос на выборку из базы 
		данных для проверки подлиности пользователя*/
		$sql = 'SELECT * 
				FROM cat_reg
				WHERE login = :email
				AND status = 1';

		//Подготавливаем PDO выражение для SQL запроса
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
		$stmt->execute();

		//Получаем данные SQL запроса
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		//Если логин совподает, проверяем пароль
		if(count($rows) > 0)
		{
			//Получаем данные из таблицы
			if(($_POST['pass']) == $rows[0]['pass'])
			{	
				$_SESSION['user'] = true;
				
				//Сбрасываем параметры
				header('Location:'. CAT_HOST .'?mode=auth');
				exit;
			}
			else
				echo showErrorMessage('Wrong password!');
		}else{
			echo showErrorMessage('Login <b>'. $_POST['email'] .'</b> not found!');
		}
	}
 }
 
?>