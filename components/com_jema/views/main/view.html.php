<?php
/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * @package Joomla.Site
 * @Component com_jema
 * @copyright Copyright © 2013, jean-massat.
 * @license This software is under MIT licence.
 */
 
jimport('joomla.application.component.view');
class JemaViewMain extends JViewLegacy{
	
	function display($tpl = null){
		$mainframe = JFactory::getApplication();

		//Loading Mootools scripts before others
		JHTML::_('behavior.framework', true);
		
		//personalliser la page (JDocument)
		$document = JFactory::getDocument();
		$sitename = $mainframe->getCfg('sitename');
		$document->setTitle( $sitename.' - Accueil' );

		//Main Script call
		$document->addScript(JURI::root().'components/com_jema/helpers/main_script.js');
		$document->addScript(JURI::root().'components/com_jema/helpers/Class/JS/home.js');

		//CSS Tricks
		$document->addScript(JURI::root().'components/com_jema/helpers/Class/IconHoverEffects/js/component.js');
		$document->addScript(JURI::root().'components/com_jema/helpers/Class/IconHoverEffects/js/modernizr.custom.js');
		$document->addStyleSheet(JURI::root().'components/com_jema/helpers/Class/IconHoverEffects/css/component.css');
		$document->addStyleSheet(JURI::root().'components/com_jema/helpers/Class/IconHoverEffects/css/default.css');
		$document->addStyleSheet(JURI::root().'components/com_jema/helpers/Class/CSS/animate.css');

		//CSS calls
		if(Jema::isMobile()){
			$document->addStyleSheet(JURI::root().'components/com_jema/helpers/Class/CSS/jema_main_mobile.css');
			$document->addStyleSheet(JURI::root().'components/com_jema/helpers/Class/CSS/jema_home_mobile.css');
		}
		else{
			$document->addStyleSheet(JURI::root().'components/com_jema/helpers/Class/CSS/jema_main.css');
			$document->addStyleSheet(JURI::root().'components/com_jema/helpers/Class/CSS/jema_home.css');
		}

		parent::display($tpl);
	}
}


?>
