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
		self::$view->articles = self::$news->getAllArticles();
		echo self::$view->display('../view/articles.php');
	}
	
	public function actionOne(){
		$id_art = $_GET['id_art'];
		self::$view->article = self::$news->getOneArticle($id_art);
		echo self::$view->display('../view/article.php');
	}
/*	
	public function actionControl(){
		$title = isset($_POST['title'])?$_POST['title']:'';
		$content = isset($_POST['content'])?$_POST['content']:'';
	}
*/	
	public function actionNew(){
		$title = isset($_POST['title'])?$_POST['title']:'';
		$content = isset($_POST['content'])?$_POST['content']:'';			
		if($title != '' && $content != ''){
        self::$news->title = $title;
        self::$news->content = $content;
		$id_art = self::$news->newArticle();
		self::$view->articles = self::$news->getAllArticles();
		echo self::$view->display('../view/articles.php');
		}else{
		self::$view->article = array('title'=>'','content'=>'');
		echo self::$view->display('../view/new_article.php');
		}
	}
	
	public function actionEdit(){
	
		$id_art = $_GET['id_art'];

		self::$view->article = News::findByPk($id_art);
//var_dump(News::findByPk($id_art));
		if(@$_POST['title'] && $_POST['content']){
        self::$news->title = $_POST['title'];
        self::$news->content = $_POST['content'];
  //echo 'id_srt = '.($id_art);
        self::$news->id_art = $id_art;
        self::$news->updateArticle($id_art);
		self::$view->article = self::$news->getOneArticle($id_art);

//var_dump(self::$view->article);
		echo self::$view->display('../view/edit_article.php');
		}else{
			echo self::$view->display('../view/edit_article.php');
		}
	}
	
	public function actionDelete(){
		$id_art = $_GET['id_art'];
        self::$news->id_art = $id_art;
		self::$news->deleteArticle();
		self::$view->articles = self::$news->getAllArticles();
		echo self::$view->display('../view/articles.php');
	}
	
	
}