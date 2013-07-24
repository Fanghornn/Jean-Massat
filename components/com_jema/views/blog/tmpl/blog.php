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
		$user = JFactory::getUser();
		$dbresponse = JemaModelMain::getArticle();
		foreach ($dbresponse as $row){
	?>
	<span class="jema_article_title">
			<?php echo $row["titre_article"]; ?>
	</span><br/><br/>

	<div class="jema_article_cadre">
		<img class="jema_article_image" src="<?php echo $row["img_src"]; ?>"/><br/><br/>
		<p class="jema_article_content">
			<?php echo $row["content_article"]; ?>
		</p>
		<?php	if(isset($user->groups[8]) || isset($user->groups[7])){?>
				<button class="btn btn-small btn-danger">
					Supprimer l'article
				</button>
				<button class="btn btn-small btn-warning">
					Editer l'article
				</button><br/><br/>
		<?php } ?>
	</div>
	<br/><br/>
	<?php }?>
	<br/>
	<?php
		if(isset($user->groups[8]) || isset($user->groups[7])){?>
			<div class="jema_article_creator">
				Bonjour Administrateur, Veux tu créer un nouvel article ?<br/>
				<span class="btn btn-success jema_display_creator">
					Création article
				</span>
			</div><br/>

			<div class="jema_hidden jema_form_article">
				<form enctype="multipart/form-data" action="index.php?option=com_jema&task=saveArticle" method="post">
					<label>Nom de l'article:</label>
						<input type="text" name="titre_article" required />
					<label>Rédaction de l'article en lui même:</label>
						<textarea rows="10" style="width:600px; height:300px;" name="content_article" required ></textarea>
					<label>Image représentant l'article (facultatif)</label>
						<input type="file" name="image_article" size="20"/>
					<br/><br/>
					<input type="submit" value="Envoyer!" class="btn btn-success"/>
				</form>
			</div>
		<?php
		}
		?>
</div>