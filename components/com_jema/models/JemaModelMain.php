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
	
	public static function getArticles($firstEntry, $nb_rows){
		$db = JFactory::getDBO();
		$query = "	SELECT a.`id_article` , `titre_article` , `content_article` , `img_src` , `date_creation`
					FROM `#__jema_articles` AS a
					LEFT JOIN `#__jema_articles_images` AS i ON i.id_article = a.id_article
					ORDER BY a.id_article DESC LIMIT ".$firstEntry.",".$nb_rows.";";
		$db->setQuery($query);
		$rows = $db->loadAssocList();
		return $rows;
	}
}
?>
