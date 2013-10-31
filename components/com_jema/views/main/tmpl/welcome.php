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
	<div class="jema_home">
		<div class="jema_newsfeed_displayer_container">
		<span class="jema_newsfeed_displayer_title">
				Quoi de neuf sur le blog ?
		</span>
			<div class="jema_newsfeed_displayer">
				<ul>
					<?php  
						$newsFeed = articlesController::getNewsFeed();
						if(empty($newFeed)) echo "<span class=\"jema_newsfeed_empty\">Pas d'articles</span>";
						foreach($newsFeed as $row){		
					?>
						<i class="icon-tag"></i>
						<span>
							<a href="/jean-massat/index.php/article?id_article=<?php echo $row["id_article"]; ?>"><?php echo $row['titre_article']; ?></a><br/>
							<?php echo $row['date_creation']; ?> 
						</span>
						<br/>
					<?php
						}
					?>
				</ul>
			</div>
		</div>
		<h2 class="jema_home_titles"><a href="/jean-massat/">Accueil</a></h2>
			J'ai créé ce site dans un premier temps afin de perfectionner mes connaissances de développement 
			acquises durant ma formation de développeur logiciel. C'est notamment l'occasion de les prouver en les mettant en oeuvre.
			Toutes les informations de développement (Framework PHP, JS, CMS Joomla 3.1 etc...)concernant la création du site en lui-même,
			sont relatées et expliquées dans la partie "Projets" de la section : <a href="/jean-massat/index.php/cv">mon C.V.</a> 
		</p>

		<h2 class="jema_home_titles"><a href="/jean-massat/index.php/blog">Blog</a></h2>
		<p class="jema_home_p">
			Tout ce qu'il y a de plus banal sur internet, un blog personnel où je vous ferai part de ma passion pour l'informatique, comme la découverte d'un logiciel.<br/>
			L'avancement de mes travaux ou mon apprentissage d'un langage informatique.<br/>
		</p>

		<h2 class="jema_home_titles"><a href="/jean-massat/index.php/cv">Mon C.V.</a></h2>
		<p class="jema_home_p">
			Les différents projets de développement auxquels j'ai pu participer sont listés sur cette page.<br/>
		</p>

		<h2 class="jema_home_titles"><a href="/jean-massat/index.php/dev">Développement</a></h2>
		<p class="jema_home_p">
			Quoi de mieux que d'avoir son propre site pour tester du code ?<br/>
		</p>

		<h2 class="jema_home_titles"><a href="/jean-massat/index.php/about">À propos</a></h2>
		<p class="jema_home_p">
			Vous voulez en savoir plus sur celui qui se cache derrière le pseudonyme de Jean Massat ? c'est ici qu'il faut vous rendre !<br/>
		</p>
	</div>
</div>