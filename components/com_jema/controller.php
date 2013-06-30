<?php 
/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * 
 */
 
defined('_JEXEC')or die('Not that way');
jimport('joomla.application.component.controller');

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
 }	  
?>
