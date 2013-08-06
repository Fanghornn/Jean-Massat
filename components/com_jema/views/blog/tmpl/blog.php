<?php
/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * 
 */
defined('_JEXEC') or die('Not that way');
require_once(JPATH_COMPONENT.DS.'helpers'.DS.'Class'.DS.'PHP'.DS.'jema_header.php');
?>
	<br/>
	<?php 
		$user = JFactory::getUser();
		$count_article = articlesController::getCountArticle();
		$nb_article = 7;
		$nb_page = ceil($count_article/$nb_article);
		$get_page = JRequest::getVar('page');

		if(isset($get_page)){
			$page = intval(JRequest::getVar('page'));

			if($page>$nb_page){
				$page=$nb_page;
			}
		}
		else{
			$page=1;
		}

		$firstEntry = ($page-1)*$nb_article;
		$dbresponse = articlesController::getArticles($firstEntry, $nb_article);
		foreach ($dbresponse as $row){
	?>
	<div class="jema_article" data-article="<?php echo $row["id_article"]; ?>">
		<span class="jema_article_title">
				<?php echo $row["titre_article"]; ?>
		</span>
		<?php if($row["img_src"]!=null){ ?>
		<br/>
		<span class="pagination-centered">
			<img class="<?php if(Jema::isMobile()) echo "jema_article_image"; else echo "jema_article_image img-polaroid"; ?>" src="<?php echo $row["img_src"]; ?>"/>
		</span>
		<?php } ?>
		<br/>
		<p class="jema_article_content">
			<?php 
				echo nl2br($row["content_article"]);	
			?>
		</p>
		<div class="footer article">
			<?php	if(isset($user->groups[8]) || isset($user->groups[7])){?>
			<button class="btn btn-small btn-danger jema_delete_article">
				Supprimer l'article
			</button>
			<button class="btn btn-small btn-warning jema_btn_edit">
					Editer l'article
			</button>
			<br/>
				<?php 
					}
				?>
			<span>
				Posté le <?php echo $row["date_creation"] ?>
			</span>
			<br/><br/>
			<div class="progress progress-striped">
		    	<div class="bar bar-warning" style="width: 100%;"></div>
		    </div>
		</div>
	</div>
    <?php
		} 
	?>
	<br/>
	<div class="pagination">
		<ul>
			<?php 
				if($page>1){
			?>
				<li><a href="/jean-massat/index.php/blog?page=<?php echo $page-1 ?>"><</a></li>
			<?php
				}
				for($i=1; $i<=$nb_page; $i++){
					if($i==$page){
			?>
				<li class="disabled"><a><?php echo "$i"; ?></a></li>
			<?php
					}else{
			?>
				<li><a href="/jean-massat/index.php/blog?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			<?php
					}
				}
				if(($page)!=$nb_page){
			 ?>
			 	<li><a href="/jean-massat/index.php/blog?page=<?php echo $page+1 ?>">Suiv.</a></li>
			 <?php 
			 	} 
			 ?>
		</ul>
	</div> 
	<br/>
	<?php	
		if(isset($user->groups[8]) || isset($user->groups[7])){?>
			<div class="jema_article_creator pagination-centered">
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