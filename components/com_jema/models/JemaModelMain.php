<?php
/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * 
 */
 
defined( '_JEXEC' ) or die( 'Not that way' );
jimport( 'joomla.application.component.model' );
Class JemaModelMain extends JModelLegacy{
	function __construct(){
		
		parent::__construct();
		$mainframe = JFactory::getApplication();
		
	}
}
?>
