<?php
/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * 
 */
defined('_JEXEC') or die('Not that way');
require_once(JPATH_COMPONENT.DS.'helpers'.DS.'Class'.DS.'PHP'.DS.'jema_header.php');
?>

<div class="jema_content">
	<h2 class="jema_view_title">Blog - Jean Massat</h2><br/>
	<?php 
		$dbresponse = JemaModelMain::getArticle();
		foreach ($dbresponse as $row){
			echo "<div class=\"jema_article_cadre\"><h3 class=\"jema_article_title\">".$row["titre_article"]."</h3><br/><br/>";
			echo "<p class=\"jema_article_content\">".$row["content_article"]."</p></div><br/><br/>"; 
		}
	?>
</div>
