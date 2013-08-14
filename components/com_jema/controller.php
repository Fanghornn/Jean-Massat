<?php 
/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * 
 */
 
defined('_JEXEC')or die('Not that way');
jimport('joomla.application.component.controller');
require_once JPATH_COMPONENT.'/models/JemaModelMain.php';
require_once JPATH_COMPONENT.'/controllers/Controller.Articles.php';
require_once JPATH_COMPONENT.'/helpers/jema.php';

class JemaController extends JControllerLegacy {
	
	//Constructeur
	function __construct($cachable = false, $urlparams = array()){
		parent::__construct();
	}
	 
	//Display
	public function display(){
	//Forcer la vue par défaut
		if( ! JRequest::getCmd( 'view' )){
			JRequest::setVar('view', 'main'); 
			JRequest::setVar('layout', 'welcome'); 
		 } 
		 parent::display($cachable = false, $urlparams = array());
	}

	public function blog(){
		JRequest::setVar('view', 'blog');
		JRequest::setVar('layout', 'blog');
		parent::display($cachable = false, $urlparams = array());
	}

	public function cv(){
		JRequest::setVar('view', 'cv');
		JRequest::setVar('layout', 'cv');
		parent::display($cachable = false, $urlparams = array());
	}

	public function dev(){
		JRequest::setVar('view', 'dev');
		JRequest::setVar('layout', 'dev');
		parent::display($cachable = false, $urlparams = array());
	}

	public function about(){
		JRequest::setVar('view', 'about');
		JRequest::setVar('layout', 'about');
		parent::display($cachable = false, $urlparams = array());
	}

	public function saveArticle(){
		articlesController::saveArticle();

		JRequest::setVar('view', 'blog');
		JRequest::setVar('layout', 'blog');
		parent::display($cachable = false, $urlparams = array());
	}

	public function article(){
		JRequest::setVar('view', 'article');
		JRequest::setVar('layout', 'article');
		parent::display($cachable = false, $urlparams = array());
	}

	public function deleteArticle(){
		articlesController::deleteArticle();
	}
 }	  
?>