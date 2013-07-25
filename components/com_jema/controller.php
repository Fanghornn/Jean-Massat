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

	public function contact(){
		JRequest::setVar('view', 'contact');
		JRequest::setVar('layout', 'contact');
		parent::display($cachable = false, $urlparams = array());
	}

	public function about(){
		JRequest::setVar('view', 'about');
		JRequest::setVar('layout', 'about');
		parent::display($cachable = false, $urlparams = array());
	}

	public function saveArticle(){
		articlesController::saveArticle();

		JRequest::setvar('view', 'blog');
		JRequest::setvar('layout', 'blog');
		parent::display($cachable = false, $urlparams = array());
	}
 }	  
?>