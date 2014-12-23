<?php 
/*точка входа для пользователя*/	;
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
	
	<div id="edit">
		<a href="edit_article.php?id_art=<?php echo $article['id_art'];?>">
		<li>Редактировать</li>
		</a>|
		<a href="delete_article.php?id_art=<?php echo $article['id_art'];?>">
		<li>Удалить</li>
		</a>
	</div>
	<div id="article_text">
		<div id="article_title"><strong><?php echo $article['title'];?></strong></div>
		<div><?php echo $article['content'] ;?></div>
	
	</div>


</body>
</html>