<?php
/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * 
 */
defined('_JEXEC') or die('Not that way');
require_once(JPATH_COMPONENT.DS.'helpers'.DS.'Class'.DS.'PHP'.DS.'jema_header.php');
?>
	<br/><br/><br/>
	<div class="jema_home">
		<div class="jema_newsfeed_displayer_container">
		<span class="jema_newsfeed_displayer_title">
				Quoi de neuf sur le blog ?
		</span>
			<div class="jema_newsfeed_displayer">
				<ul>
					<?php  
						$newsFeed = articlesController::getNewsFeed();
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
		<h2><a href="/jean-massat/">Accueil</a></h2>
		<p class="jema_paragraph_welcome">
			J'ai créé ce site dans un premier temps afin de perfectionner mes connaissances de développement 
			acquises durant ma formation de développeur logiciel. C'est nottement l'occasion de les prouver en les mettant en oeuvre.<br/>
			Tous les informations de développement (Framework PHP, JS, CMS Joomla 3.1 etc...)concernant la création site en lui même,
			sont relatées et expliquées dans la partie "Projets" de la séction : <a href="/jean-massat/index.php/cv">Mon C.V.</a> 

		</p>

		<h2 class="jema_home_titles"><a href="/jean-massat/index.php/blog">Blog</a></h2>
		<p class="jema_home_p">
			Tout ce qu'il y à de plus banal sur internet, un blog personnel où je vous ferai part des ma passion pour l'informatique, que ce soit la découverte d'un logicels,
			la promotion d'un autre (open-source de préférence).<br/>
			L'avancement de mes travaux ou mon apprentissage d'un langage informatique.<br/>
			Quelques articles (pas beaucoup promis !) traitant de ma vie personelle.
		</p>

		<h2 class="jema_home_titles"><a href="/jean-massat/index.php/cv">Mon C.V.</a></h2>
		<p class="jema_home_p">
			Mon C.V. de développeur et les différents projets sur lesquels j'ai travaillé s'y trouvent.<br/>
			Des animations JavaScript rendant la page plus intérractive devraient voir le jour prochainement.
		</p>

		<h2 class="jema_home_titles"><a href="/jean-massat/index.php/dev">Développement</a></h2>
		<p class="jema_home_p">
			Quoi de mieux que d'avoir son propre site pour tester du code ?<br/>
			La page développement me servira de base de test pour autres algorithme et apprentissages de langages de programmation.
		</p>
	</div>
</div>