<?php
/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * @package Joomla.Site
 * @Component com_jema
 * @copyright Copyright © 2013, jean-massat.
 * @license This software is under MIT licence.
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
