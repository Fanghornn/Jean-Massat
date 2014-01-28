<?php 
/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * @package Joomla.Site
 * @Component com_jema
 * @copyright Copyright © 2013, jean-massat.
 * @license This software is under MIT licence.
 */
defined('_JEXEC')or die('Not that way');
/* Joomla 3+ */
if(!defined('DS')) define('DS',DIRECTORY_SEPARATOR);
require_once (JPATH_COMPONENT.DS.'controller.php');

if($controller = JRequest::getWord('controller')){
	$path = JPATH_COMPONENTS.DS.'controllers'.DS.$controller.'.php';
	if(file_exists($path)){
		require_once $path;
	}else{
		$controller='';
	}
}
$classname = 'JemaController'.ucfirst($controller);
$controller = new $classname( );
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();

?>
