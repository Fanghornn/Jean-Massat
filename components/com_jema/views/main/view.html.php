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
		$document = JFactory::getDocument();
		$document->setTitle( $sitename.' - Accueil' );
		$sitename = $mainframe->getCfg('sitename');
		
		parent::display($tpl);
	}
}


?>
