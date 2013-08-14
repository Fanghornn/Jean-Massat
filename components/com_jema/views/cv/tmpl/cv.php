<?php
/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * 
 */
defined('_JEXEC') or die('Not that way');
require_once(JPATH_COMPONENT.DS.'helpers'.DS.'Class'.DS.'PHP'.DS.'jema_header.php');
?>
	<h1 class="jema_cv_title">Projets</h1><br/>

	<h2 class="jema_cv_subtitle"><a href="https://github.com/jean-massat/Jean-Massat" target="about:blank">Jean Massat (2013)</a></h3>
	<p class="jema_cv_p">
		Jean-Massat est le site sur lequel vous vous trouvez actuellement. Il m'aura fallu un mois entier environ avant de le mettre au point avec la quasi totalité
		des composantes et fonctionnalités prévues initialements.<br/>

		Pour la structure PHP de base, le projet est sous la forme d'un <strong>composant MVC</strong> Joomla. Donc un framework PHP avec une API associée (Joomla 3.1).<br/><br/>

		Les API CSS de BootStrap et Gantry qui sont des framework CSS open-source, m'ont permis de mettre en place le design général du site.<br/><br/>

		Si vous consultez ce site depuis un mobile ou une tablette, vous pouvez constatez que j'ai fais en sorte de changer des éléments d'affichage
		afin d'obtenir un affichage propre et épuré sur les petites résolutions. Etant plutôt jeune, je sais que la navigation sur smartphones se fait de plus en plus,
		j'ai remarqué aussi que les internautes sont souvent agacés lorsqu'ils arrivent sur un site qui n'a rien prévu pour leur appareil. C'est pourquoi j'ai soigné l'adaptation aux terminaux mobiles<br/><br/>

		Après avoir appris à maitriser le framework JavaScript <strong>Mootools</strong> et sa structure orientée objets lors de mon stage de formation, je l'ai naturellement mis en oeuvre
		lors de la concéption du JavaScript de Jean-Massat.<br/><br/>

		Outre l'utilisation de fonction de Framework <strong>libres</strong>, JS ou PHP, j'ai écris manuellement l'intégralité du code de Jean-Massat.<br/>
		Par exemple le menu de navigation du site (aussi bien desktop que mobile), est une <strong>classe [JS]Mootools</strong> qui manipule ou créé des éléments du DOM.
		il m'a donc permis d'attribuer une action à un evenement, permettant au menu d'avoir une animation d'effet de coulissement à l'evenement <strong>'mouseenter'</strong>(survol pointeur de la souris) sur un titre de menu.<br/>
		<a href="https://github.com/jean-massat/Jean-Massat/blob/master/components/com_jema/helpers/Class/JS/border.menu.js" target="about:blank">(voir le code)</a><br/><br/>

		Le code source est libre et disponible sur Github<br/>
		Un simple click de votre part sur le titre de ce projet vous amennera sur son <a href="https://github.com/jean-massat/Jean-Massat" target="about:blank">repository</a>.<br/><br/>
		<strong>ps: Le MVC se trouve dans components/com_jema/ pour ceux qui ne connaissent pas Joomla.</strong>
	</p>
<br/><br/>
	<h2 class="jema_cv_subtitle"><a href="https://github.com/art-manager/art-manager?source=cc" target="about:blank">Art-Manager (2013)</a></h2>
	<p class="jema_cv_p">
		C'est dans le cadre d'un stage de 10 semaines au cours de ma formation de développeur logiciels que j'ai pu participer au projet Art-Manager.<br/>
		<a href ="https://github.com/alain-andre" target="about:blank"><strong>M. ANDRE Alain (auteur du projet)</strong></a>m'a en effet encadré pendant deux mois durant ce stage.<br/><br/>
		Principalement, j'ai pu apprendre à maitriser le Mootools en conçevant des petites applications mais aussi arriver à maitriser la notions d'objets en PHP et JS.<br/>
		Apprendre à lire et me servir des documentations et API diverses(php, mootools, html, JavaScript).<br/>Utiliser des outils de versionning (git+github).<br/><br/>
		Codes et Algorithmes:<br/>
	</p>
		<ul class="jema_list">
			<li>
				[JS] Faire une Class pour afficher des widget dynamiquement dans un cadre du DOM après un ajax d'appel d'objets widgets d'une base de données. Donc a chaque boucle du tableau d'objets retournés,
				une class de widget est instanciée, l'initialize créer les éléments HTML, recupérer les infos de la base passées(texte, images) en paramétre et les affecter aux éléments html.
			</li>
		<br/>
			<li>
				[JS - Ajax - PHP] Dans un formulaire de création d'oeuvres, albums ou contacts, proposer un gestionnaire graphique en <strong>[JS]Mootools</strong> entier permettant de leurs affecter une image qui les identifiras.<br/>
				<ul>
					<br/>
					<li>
						Proposer une solution de Drag&Drop(Glisser-Deposer) d'images provenant du systéme d'exploitation du client dans le navigateur au sein du formulaire pour en ajouter une.
					</li>
					<br/>
					<li>
						Afficher l'image en plein écran avec ses caractéristiques dans un cadre. Redimensionner l'image selon tout les types de résolutions possible pour qu'elle apparaisse 
						en pleine page et correctement dimensionnée. Un bouton de fermeture permet de revenir sur le formulaire d'enregistrement.<br/>
					</li>
					<br/>
					<li>
						<strong>[PHP]</strong> Faire des vérifications de l'image avant de l'enregistrer sur le serveur (nettoyer les caractères spéciaux des noms, contrôler l'extension).<br/><br/>
					</li>
				</ul>
			</li>
		</ul>
		<p class="jema_cv_p_end">
			Tout le reste de mes contributions, sont des commits issus de mon compte Github, donc vous pouvez tous les retrouver en allant sur le 
			<a href="https://github.com/art-manager/art-manager?source=cc" target="about:blank">repository de Art-Manager</a>.<br/>
			<a href="/jean-massat/images/images_jema/Rapport_de_stage-Jean Baptiste_Priam_Massat-Art Manager.pdf">Visionner mon rapport de stage</a> (pdf)<br/><br/>
		</p>
	<h1 class="jema_cv_title">Curriculum Vitae</h1>
	<a href="/jean-massat/images/images_jema/cv_jb.jpg" target="about:blank"><img src="images/images_jema/cv_jb.jpg" class="jema_img_cv"/></a>
</div>