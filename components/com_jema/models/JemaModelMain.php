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
	
	public static function getArticle(){
		$result = array();
		$db = JFactory::getDBO();
		$query = "select `titre_article`, `content_article` from `#__jema_articles`";
		$db->setQuery($query);
		$rows = $db->loadAssocList();

		return $rows;
	}
	/*
	 * Mes fonctions de requete BDD
	 * 
	 * Une fonction _buildQuery(){} qui retourne la $query{
	 *		pour le debug >> if (JDEBUG) echo "<br />DEBUG : query SQL=".$query;
	 * 		return $query;
	 * 		}
	 * 
	 * et la requete qui retourne l'object data{
	 * 		$this->_data = null;
	 * 		$query = this->_buildQuery();
	 * 		if($query) $this->_data = this->_getDataObjects($query, foo, baar));
	 * 		return $this->_data;
	 * }
	 */
	
	
}
?>
