<?php
/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * 
 */
defined('_JEXEC') or die('Not that way');
require_once(JPATH_COMPONENT.DS.'helpers'.DS.'Class'.DS.'PHP'.DS.'jema_header.php');
?>


	<h2 class="jema_view_title">Le blog de Fanghornn</h2><br/>
	<?php 
		$dbresponse = JemaModelMain::getArticle();
		foreach ($dbresponse as $row){
			echo "<div class=\"jema_article_cadre\"><h3 class=\"jema_article_title\">".$row["titre_article"]."</h3><br/>";
			echo "<img class=\"jema_article_image\" src='/jean-massat/".$row["img_src"]."'/><br/><br/>";
			echo "<p class=\"jema_article_content\">".$row["content_article"]."</p></div><br/><br/>"; 
		}
	?>

	<br/>
	<?php
		$user = JFactory::getUser();

		if(isset($user->groups[8]) || isset($user->groups[7])){
			echo "<div class=\"jema_article_creator\">Bonjour Administrateur, Veux tu créer un nouvel article ?<br/>";
			echo "<span class=\"btn btn-success jema_display_creator\">Création article</span></div><br/>";
			echo "<div class=\"jema_hidden jema_form_article\"><form enctype=\"multipart/form-data\" action=\"index.php?option=com_jema&task=saveArticle\" method=\"post\">";
			echo "<label>Nom de l'article:</label><input type=\"text\" name=\"titre_article\" required />";
			echo "<label>Rédaction de l'article en lui même:</label><textarea rows=\"10\" style=\"width:600px; height:300px;\" name=\"content_article\" required ></textarea>"; 
			echo "<label>Image représentant l'article (facultatif)</label><input type=\"file\" name=\"image_article\" size=\"20\"/>";
			echo "<br/><br/><input type=\"submit\" value=\"Envoyer!\" class=\"btn btn-success\"/></form></div>";
		}
	?>
</div>
