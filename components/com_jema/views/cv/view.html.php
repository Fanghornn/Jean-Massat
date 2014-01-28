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
class JemaViewCv extends JViewLegacy{
	
	function display($tpl = null){
		$mainframe = JFactory::getApplication();

		//Loading Mootools scripts before others
		JHTML::_('behavior.framework');
		
		//personalliser la page (JDocument)
		$document = JFactory::getDocument();
		$sitename = $mainframe->getCfg('sitename');
		$document->setTitle( $sitename.' - C.V.' );

		//Main Script call
		$document->addScript(JURI::root().'components/com_jema/helpers/main_script.js');
		
		//Script menu call
		$document->addScript(JURI::root().'components/com_jema/helpers/Class/JS/border.menu.js');

		//CSS calls
		if(Jema::isMobile()){
			$document->addStyleSheet(JURI::root().'components/com_jema/helpers/Class/CSS/jema_main_mobile.css');
			$document->addStyleSheet(JURI::root().'components/com_jema/helpers/Class/CSS/jema_cv_mobile.css');
		}
		else{
			$document->addStyleSheet(JURI::root().'components/com_jema/helpers/Class/CSS/jema_main.css');
			$document->addStyleSheet(JURI::root().'components/com_jema/helpers/Class/CSS/jema_cv.css');
		}

		parent::display($tpl);
	}
}


?>
