<?php

 //Проверяем зашел ли пользователь
 if($user === false){
 	echo '<h3 class="alert alert-danger" role="alert">You are not logged in!</h3>'."\n";
 }
 if($user === true) {
include './views/main_template.php';
//	echo '<h3>Welcome to Catoca DB!</h3>'."\n";
	echo '<a href="'.CAT_HOST.'?mode=auth&exit=true">EXIT</a>';
 }
 ?>