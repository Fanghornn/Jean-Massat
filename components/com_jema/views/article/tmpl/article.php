<?php
/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * @package Joomla.Site
 * @Component com_jema
 * @copyright Copyright © 2013, jean-massat.
 * @license This software is under MIT licence.
 */
defined('_JEXEC') or die('Not that way');
require_once(JPATH_COMPONENT.DS.'helpers'.DS.'Class'.DS.'PHP'.DS.'jema_header.php');
?>
<?php
	$id = JRequest::getVar('id_article');
	$dbresponse = articlesController::getArticle($id);
	foreach ($dbresponse as $row){
?>
<br/>
	<div class="jema_article" data-article="<?php echo $row["id_article"]; ?>">
		<a href="/jean-massat/index.php/article?id_article=<?php echo $row["id_article"]; ?>">
			<h1 class="jema_article_title">
					<?php echo $row["titre_article"]; ?>
			</h1>
		</a>
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
		<div class="jema_footer_article">
			<span>
				Posté le <?php echo $row["date_creation"] ?>
			</span>
		</div>
	</div>
	<?php } ?>
</div>