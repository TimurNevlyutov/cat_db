<?php

 //Проверяем зашел ли пользователь
 if($user === false){
 	echo '<h3>You are not logged in!</h3>'."\n";
 }
 if($user === true) {
	echo '<h3>Welcome to Catoca DB!</h3>'."\n";
	echo '<a href="'.CAT_HOST.'?mode=auth&exit=true">EXIT</a>';
 }
 ?>