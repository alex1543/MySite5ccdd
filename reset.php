<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>RESET AND POWEROFF</title>
</head>

<body style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">

<h2>УПРАВЛЕНИЕ КОМПЬЮТЕРОМ</h2>
<hr>
<?php
echo "<ul>";
echo "<li>Имя сервера: " . $_SERVER['SERVER_NAME'] . "</li>";
echo "<li>IP-адрес: " . $_SERVER['SERVER_ADDR'] . "</li>";
echo "<li>Ваш браузер: <strong>" . $_SERVER['HTTP_USER_AGENT'] . "</strong></li>";
echo "</ul>";
?>
<hr>

<?php
if(isset($_GET['reset'])) {
	exec("shutdown -r -f -t 01");
	echo "<h2>КОМАНДА НА ПЕРЕЗАГРУЗКУ УСПЕШНО ОТПРАВЛЕНА</h2>";
	}else
if(isset($_GET['poweroff'])) {
	exec("shutdown -s -f -t 01");
	echo "<h2>КОМАНДА НА ВЫКЛЮЧЕНИЕ УСПЕШНО ОТПРАВЛЕНА</h2>";
	}else
	{
echo "<form method=\"GET\" action=\"reset.php\">";
echo "<input type=\"radio\" name=\"reset\"> Перезагрузить ";
echo "<input type=\"radio\" name=\"poweroff\"> Выключить ";
echo "<input type=\"submit\">";
echo "</form>";
	}
?>

</body>
</html>
