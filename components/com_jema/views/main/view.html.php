<?php
/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * 
 */
 
jimport('joomla.application.component.view');
class JemaViewMain extends JViewLegacy{
	
	function display($tpl = null){
		$mainframe = JFactory::getApplication();
		
		//personalliser la page (JDocument)
		JHTML::_('behavior.framework');
		$document = JFactory::getDocument();
		$document->setTitle( $sitename.' - Accueil' );
		$sitename = $mainframe->getCfg('sitename');

		//Main Script
		$document->addScript(JURI::root().'components/com_jema/helpers/main_script.js');
		
		//Script menu
		$document->addScript(JURI::root().'components/com_jema/helpers/Class/JS/border.menu.js');

		//CSS load
		$document->addStyleSheet(JURI::root().'components/com_jema/helpers/Class/CSS/jema_main.css');

		parent::display($tpl);
	}
}


?>
