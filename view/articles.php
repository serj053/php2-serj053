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
	<h3> </h3>
	<div id="menu">
		<ul>
			<li><a href="../index.php">Главная </a></li>|
			<li><a href="../controller/index.php?r=news/all">Список статей </a></li>|
			<li><a href="">Галерея </a></li>|
			<li><a href="">А если подумать </a></li>|
			<li><a href="">Контакты </a></li>
		</ul>
	</div>
	<hr>
	<div>
		<ul><li>
		<a href="index.php?r=news/new">Добавить новую стаью.</a>
		</li></ul>
		<ol>
			<?php foreach($articles as $article){?>
				<li><a href="index.php?r=news/one&id_art=<?php echo $article->id_art;?>">
				<?php echo $article->title;?>
				</a></li>					
			<?php }?>
		</ol>
	
	</div>


</body>
</html>