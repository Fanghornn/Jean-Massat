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
	<h1 class="jema_cv_title">Projets</h1><br/>

	<h2 class="jema_cv_subtitle"><a class="jema_cv_title_border" href="https://github.com/jean-massat/Jean-Massat" target="about:blank">Jean Massat (2013)</a></h3>
	<p class="jema_cv_p">
		Jean-Massat est le site sur lequel vous vous trouvez actuellement. Il m'aura fallu un mois entier environ avant de le mettre au point avec la quasi-totalité
		des composantes et fonctionnalités prévues initialement.<br/>

		Pour la structure PHP de base, le projet est sous la forme d'un <strong>composant MVC</strong> Joomla. Donc un framework PHP avec une API associée (Joomla 3.1).<br/><br/>

		Les API CSS de Bootstrap et Gantry qui sont des frameworks CSS open-source, m'ont permis de mettre en place le design général du site.<br/><br/>

		Si vous consultez ce site depuis un mobile ou une tablette, vous pouvez constater que j'ai fait en sorte de changer des éléments d'affichage
		afin d'obtenir un affichage propre et épuré sur les petites résolutions. Étant plutôt jeune, je sais que la navigation sur smartphones se fait de plus en plus,
		j'ai remarqué aussi que les internautes sont souvent agacés lorsqu'ils arrivent sur un site qui n'a rien prévu pour leur appareil. C'est pourquoi j'ai soigné l'adaptation aux terminaux mobiles<br/><br/>

		Après avoir appris à maitriser le framework JavaScript <strong>Mootools</strong> et sa structure orientée objets lors de mon stage de formation, je l'ai naturellement mis en oeuvre
		lors de la conception du JavaScript de Jean-Massat.<br/><br/>

		Outre l'utilisation de fonction de Framework <strong>libres</strong>, JS ou PHP, j'ai écrit manuellement l'intégralité du code de Jean-Massat.<br/>
		Par exemple le menu de navigation du site (aussi bien desktop que mobile), est une <strong>classe [JS]Mootools</strong> qui manipule ou créé des éléments du DOM.
		il m'a donc permis d'attribuer une action à un événement, permettant au menu d'avoir une animation d'effet de coulissement à l'événement <strong>'mouseenter'</strong>(survol pointeur de la souris) sur un titre de menu.<br/>
		<a href="https://github.com/jean-massat/Jean-Massat/blob/master/components/com_jema/helpers/Class/JS/border.menu.js" target="about:blank">(voir le code)</a><br/><br/>

		Le code source est libre et disponible sur Github<br/><br/>
		Je tiens particulièrement à remercier <a href="https://www.facebook.com/alice.crabiitorres?ref=ts&fref=ts">Alice Torres</a> (<a href="mailto:alice_064@hotmail.fr">alice_064@hotmail.fr</a>) pour son superbe travail quant à la bannière de ce site.<br/><br/>
		Un simple click de votre part sur le titre de ce projet vous dirigera sur son <a href="https://github.com/jean-massat/Jean-Massat" target="about:blank">repository</a>.<br/><br/>
		ps: Le MVC se trouve dans components/com_jema/ pour ceux qui ne connaissent pas Joomla.
	</p>
    <div class="progress progress-success progress-striped jema_project_separator">
    	<div class="bar" style="width: 100%;"></div>
    </div>
	<h2 class="jema_cv_subtitle">Art-Manager (2013)</h2>
	<p class="jema_cv_p">
		C'est dans le cadre d'un stage de 10 semaines au cours de ma formation de développeur logiciel que j'ai pu participer au projet Art-Manager.<br/>
		<a href ="https://github.com/alain-andre" target="about:blank"><strong>M. ANDRE Alain (auteur du projet)</strong></a>m'a en effet encadré pendant deux mois durant ce stage.<br/><br/>
		Principalement, j'ai pu apprendre à maitriser le Mootools en concevant des petites applications.<br/>
		Apprendre à lire et me servir des documentations et API diverses(php, mootools, html, JavaScript).<br/>
		Maitriser la programmation orientée objet en PHP et JS.<br/>
		Utiliser des outils de versionning (git+github).<br/><br/>
		Codes et Algorithmes:<br/>
	</p>
		<ul class="jema_list">
			<li>
				[JS] Faire une Class pour afficher des widgets dynamiquement dans un cadre du DOM après un <strong>Ajax</strong> d'appel d'objets widgets d'une base de données. Donc à chaque boucle du tableau d'objets retournés,
				une Class de widget est instanciée, l'initialize créer les éléments HTML, récupérer les infos de la base passées(texte, images) en paramètre et les affecter aux éléments HTML.
			</li>
		<br/>
			<li>
				[JS - Ajax - PHP] Dans un formulaire de création d'oeuvres, albums ou contacts, proposer un gestionnaire graphique en <strong>[JS]Mootools</strong> entier permettant de leur affecter une image qui les identifiera.<br/>
				<ul>
					<br/>
					<li>
						Proposer une solution de Drag&Drop(Glisser-Deposer) d'images provenant du système d'exploitation du client dans le navigateur au sein du formulaire pour en ajouter une.
					</li>
					<br/>
					<li>
						Afficher l'image en plein écran avec ses caractéristiques dans un cadre. Redimensionner l'image selon tous les types de résolutions possibles pour qu'elle apparaisse 
						en pleine page et correctement dimensionnée. Un bouton de fermeture permet de revenir sur le formulaire d'enregistrement.<br/>
					</li>
					<br/>
					<li>
						<strong>[PHP]</strong> Faire des vérifications de l'image avant de l'enregistrer sur le serveur (nettoyer les caractères spéciaux des noms, contrôler l'extension).<br/><br/>
					</li>
				</ul>
			</li>
		</ul>
		<p class="jema_cv_p">
			Tout le reste de mes contributions, sont des commits issus de mon compte Github, ils étaient tous présent sur mon compte mais j'ai dû malheureusement
			supprimer mon fork du repo de Art-Manager à la demande de M. Alain Andre pour éviter qu'un investisseur reprenne le code source et impose une licence dessus
			ce qui est à mon avis tout à fait légitime, je vous donnerai donc un lien vers le site lorsque la beta-test sera ouverte :).<br/>
			<a href="/jean-massat/images/images_jema/Rapport_de_stage-Jean Baptiste_Priam_Massat-Art Manager.pdf">Visionner mon rapport de stage</a> (pdf)<br/>
		</p>
		<div class="progress progress-success progress-striped jema_project_separator">
    		<div class="bar" style="width: 100%;"></div>
    	</div>
	<h1 class="jema_cv_title">Curriculum Vitae</h1>
	<a href="/jean-massat/images/images_jema/cv_jb.jpg" target="about:blank"><img src="images/images_jema/cv_jb.jpg" class="jema_img_cv"/></a>
</div>