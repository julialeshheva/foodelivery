<?php
header('Content-Type: text/html; charset=UTF-8');
echo '<body link="white" alink="red" vlink="white">';
echo '<style>
			body {
				background: #333; /* Цвет фона */
				color: #fc0; /* Цвет текста */
				font-family: Comic Sans MS, fantasy;
			}
		</style>';
echo '<a  href="index.html">Разлогиниться</a>';
echo '<p align="center"><font size=6>Добро пожаловать, '.$_GET['login'].'.</font><br>';
$quant = "test.php?login=".$_GET['login']."&subj=quant";
$it = "test.php?login=".$_GET['login']."&subj=it";
$databases = "test.php?login=".$_GET['login']."&subj=databases";
echo "<font size=4><a href=".$quant.">Пройти тест по квантовой теории</a><br>";
echo "<a href=".$it.">Пройти тест по информационным технологиям</a><br>";
echo "<a href=".$databases.">Пройти тест по управлению БД</a><br></font></p>";
echo '</body>';

?>
