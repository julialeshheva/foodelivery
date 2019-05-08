<?php 

	echo '<style>
			body {
				background: #FFC0CB; /* Цвет фона */
				color: black; /* Цвет текста */
				font-family: Comic Sans MS, fantasy;
			}
		</style>';
	echo '<p align="center"><font size=5>Продукт добавлен</font><br></p><br>';

	function Check($login)	
	{
		$flag = true;
		$xml = simplexml_load_file('users.xml');
		foreach ($xml->user as $user)
			if ($user->login == $login)
			{
				$flag = false;
				return $flag;
			}
		return flag;
	}	
		
	function AddUser($login, $password)
	{
		$xml = simplexml_load_file('users.xml');
		$newchild = $xml->addChild('user');
		$newchild->addChild('login', $login);
		$password = crypt($password);
		$newchild->addChild('password', $password);
		file_put_contents('users.xml',$xml->asXML());
	}	
		
		
	if (empty($_POST['login']))
	{
		/*echo '<form  align = "center" name="forma1" method="post" action="registration.php">';
		echo '<label for="login"><font face="Comic Sans MS" size=4>Введите логин: </font></label>';
		echo '<input type="text" name="login" size="20" maxlength="50" value=""><br>';
		echo '<br><label for="password"><font face="Comic Sans MS" size=4>Введите пароль:</font></label>';
		echo '<input type="text" name="password" size="20" maxlength="50" value=""><br>';
		echo '<br><input type="submit" name="submit" value="Зарегистрироваться">';
		echo "</form>";*/
		
		echo ' <form class="form-signin" role="form" align="center" name="forma1" method="post" action="registration.php">';
		echo '<label for="login"><font face="Comic Sans MS" size=4>Введите логин: </font></label>';
		echo '<input type="text" class="form-control" placeholder="Login" name="login" maxlength="50" value="" required autofocus>';
		echo '<br><label for="password"><font face="Comic Sans MS" size=4>Введите пароль:</font></label>';
		echo '<input type="password" class="form-control" placeholder="Password" name="password" maxlength="50" value="" required>';
		echo '<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Зарегистрироваться</button>';
		echo "</form>";
	}	
	else if (empty($_POST['password']))
	{
		/*echo '<p align="center"><font size=5>Вы не ввели пароль</font></p>';
		echo '<form  align = "center" name="forma1" method="post" action="registration.php">';
		echo '<label for="login"><font face="Comic Sans MS" size=4>Введите логин: </font></label>';
		echo '<input type="text" name="login" size="20" maxlength="50" value="'.$_POST['login'].'"><br>';
		echo '<br><label for="password"><font face="Comic Sans MS" size=4>Введите пароль:</font></label>';
		echo '<input type="text" name="password" size="20" maxlength="50" value="Введите пароль"><br>';  
		echo '<input type="submit" name="submit" value="Зарегистрироваться">';
		echo "</form>";*/
	}
	else if (CheckUser($_POST['login']))
	{
		AddUser($_POST['login'], $_POST['password']);
		echo '<p align="center"><font size=5>Регистрация прошла успешно</font></p>';
		echo '<form align = "center" name="registration" method="post" action="menu.php?login='.$_POST['login'].'">
			<input type="submit" name="submit" value="Перейти в меню"></form>';
	}
	else
	{	
		echo '<p align="center"><font size=5>Пользователь с таким логином уже существует</font></p>';
		echo '<form align = "center" name="registration" method="post" action="registration.php">
			<input type="submit" name="submit" value="Попробовать зарегистрироваться заново"></form>';
	}
		
		
?>