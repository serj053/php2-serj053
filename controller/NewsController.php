<?php 
require_once'../startup/boot.php';
require'AController.php';
class NewsController extends AController {
	private static $news = null;
	private static $view = null;
	function __construct(){
		if(self::$news == null)
			self::$news = new News;
		if(self::$view == null)
			self::$view = new View;	
			
	}
	
	public function actionAll(){  
	
		self::$view->articles = self::$news->get_All();
		echo self::$view->display('../view/articles.php');
	}
	
	public function actionOne(){
		$id_art = $_GET['id_art'];
		self::$view->article = self::$news->get_one($id_art);
		echo self::$view->display('../view/article.php');
	}
	
	public function actionControl(){
		$title = isset($_POST['title'])?$_POST['title']:'';
		$content = isset($_POST['content'])?$_POST['content']:'';
	}
	
	public function actionNew(){
		$title = isset($_POST['title'])?$_POST['title']:'';
		$content = isset($_POST['content'])?$_POST['content']:'';			
		if($title != '' && $content != ''){
		$id_art = self::$news->insert($title, $content);	
		self::$view->articles = self::$news->get_All();
		echo self::$view->display('../view/articles.php');
		}else{
		self::$view->article = array('title'=>'','content'=>'');
		echo self::$view->display('../view/new_article.php');
		}
	}
	
	public function actionEdit(){
	
		$id_art = $_GET['id_art'];
		self::$view->article = self::$news->get_One($id_art);	
		if(@$_POST['title'] && $_POST['content']){	
		$res = self::$news->update($id_art,  $_POST['title'], $_POST['content']);
		self::$view->article = self::$news->get_One($id_art);
		echo self::$view->display('../view/edit_article.php');
		}else{
			echo self::$view->display('../view/edit_article.php');
		}
	}
	
	public function actionDelete(){
		$id_art = $_GET['id_art'];
		self::$news->delete($id_art);
		self::$view->articles = self::$news->get_All();
		echo self::$view->display('../view/articles.php');
	}
	
	
}