<?php 
/*точка входа для пользователя*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>PHP. Уровень 2</title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type"><!--	-->
	<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" /> 
</head>
<body>
	<div id="menu">
		<ul>
			<li><a href="../index.php">Главная </a></li>|
			<li><a href="../controller/articles.php">Список статей </a></li>|
			<li><a href="">Галерея </a></li>|
			<li><a href="">А если подумать </a></li>|
			<li><a href="">Контакты </a></li>
		</ul>
	</div>
	<hr>
	<div>
		<form action="new_article.php" method="post" name="">
			Название статьи:
			<input type="text" value="<?php echo $title?>" name="title" id="new_title"/><br>
			<textarea name="content"><?php echo $content?> </textarea><br>
			<input type="submit" value="Запомнить"/>
        </form>		
	</div>


</body>
</html>