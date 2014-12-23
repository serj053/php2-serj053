<?php 
require'../startup/boot.php';
require'AController.php';
class NewsController extends AController {
	
	public function actionAll(){
		$news = new News;
		$view = new View;
		$view->articles = $news->get_all();
		echo $view->display('../view/articles.php');
	}
	
	public function actionOne(){
		$id_art = $_GET['id_art'];
		$news = new News;		
		$view = new View;
		$view->article = $news->get_one($id_art);
		echo $view->display('../view/article.php');
	}
	
	public function actionNew(){
		//$news = new News;
		//$view = new View;
		//$title = isset($_POST['title'])?$_POST['title']:'';
		//$content = isset($_POST['content'])?$_POST['content']:'';
		//if($title != '' && $content != ''){
		//$id_art = $news->insert($title, $content);
		//$view->article = $news->get_All();
		//$view->display('../view/articles.php');
		//}else{
		//$view->article = array($title,$content);
		//echo $view->display('../view/new_article.php');
		//}
	}
	
	public function actionEdit(){
	
		$news = new News;
		$view = new View;
		$id_art = $_GET['id_art'];
		$view->article = $news->get_One($id_art);	
		if($_POST['title'] && $_POST['content']){	
		$res = $news->update($id_art,  $_POST['title'], $_POST['content']);
		$view->article = $news->get_One($id_art);
		echo $view->display('../view/edit_article.php');
		}else{
			echo $view->display('../view/edit_article.php');
		}
	}
	
	public function actionDelete(){
		$id_art = $_GET['id_art'];
		$news = new News;
		$news->delete($id_art);
		
	}
	
	
}