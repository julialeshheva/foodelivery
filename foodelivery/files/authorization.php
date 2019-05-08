<?php
ini_set('allow_url_include', 1);
header('Content-Type: text/html; charset=utf-8');	

if(file_exists("users.xml"))
		{
			
			$flag=false;
            $xml = simplexml_load_file('users.xml');
		}
		else
		if(file_exists("files/users.xml"))
		{
			
			$flag=false;
            $xml = simplexml_load_file('files/users.xml');
		}
		else
		{
			die("No users.xml file found");
		}
		
foreach ($xml->user as $user)      
{
	if ($user->login == $_POST['login'])
	{
		if (crypt($_POST['password'], $user->password) == $user->password)
			//if ( $_POST['password'] == $user->password )
			//header("Location: http://localhost/files/index.php?login=".$_POST['login']);
			//{include "http://localhost/test/menu.php?login=".$_POST['login']; exit();}
				{ 
				   $flag = true;
				   require("creationproducts.php");
				   
				}
		else  
		{ 
			echo '<style>
			body {
				background: #FFC0CB; /* Цвет фона */
				color: black; /* Цвет текста */
				
			} 			</style>';
			echo '<br><br><br>';
			echo '<p align="center"><font face="Comic Sans MS" size=4>Неверный пароль</font></p>'; //iconv("windows-1251","utf-8", 'неверный пароль');
			echo '<form align="center" name="registration" method="post" action="index.html"><input type="submit" name="submit" value="Вернуться на главную страницу"></form>';
			$flag = true;
		}
	}
}
	if ($flag == false)
	{
		echo '<style>
			body {
				background: #FFC0CB; /* Цвет фона */
				color: black; /* Цвет текста */
			} 			</style>';
			echo '<br><br><br>';
		echo '<p align="center"><font face="Comic Sans MS" size=4>Такого логина не существует</font></p>';
	}

	
?>