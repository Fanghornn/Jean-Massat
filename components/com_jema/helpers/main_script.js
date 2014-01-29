/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * @package Joomla.Site
 * @Component com_jema
 * @copyright Copyright © 2013, jean-massat.
 * @license This software is under MIT licence.
 */
window.addEvent('domready', function(){
	window.scrollTo(0,0);
	if(document.getElement('.jema_mobile_menu_btn_container')){
		var mobileMenu = document.getElement('.jema_mobile_menu_btn'),
		jemaContent = document.getElement('.jema_content'),
		links = document.getElements('.jema_mobile_menu_links'),
		touched = false;

		mobileMenu.addEvent('touchstart', function(){
			if(touched==false){
				links.forEach(function(link){
					link.setStyle('margin-left', '-.2em');
					jemaContent.setStyle('left', '10em');
					touched = true;
				});
			}else{
				links.forEach(function(link){
					link.setStyle('margin-left', '-7.8em');
					jemaContent.setStyle('left', '0em');
					touched = false;
				});
			}
		});
	}else{
		var viewHome = document.getElement('.jema_home');
		if(viewHome==null){
			var menu = new BorderMenu(),
			menuLinks = menu.getLinksItems(),
			loopBuster = true;
			menu.scrollOnTop(menuLinks);

			window.onscroll = function(){
				var scrollValue = window.getScroll();

				if(scrollValue.y==0){
					menu.scrollOnTop(menuLinks);
					loopBuster=true;
				}
				else{
					if(loopBuster){
						loopBuster=false;
						menu.scrollingAway(menuLinks);
					}
				}
			}
		}else{
		/**
		  * Si on est sur la page d'accueil, le script d'animation de la page se déclenche !
		  * Note:
		  * I'm also the author of this mootools script, but the cool css script for css animation is
		  * written by Daniel Eden, thanks to him.
		  * for more info, please visit his profile @ https://github.com/daneden
		  * animate.css's repo : https://github.com/daneden/animate.css
		  * Html Button has been made by botelho, please visit https://github.com/codrops/IconHoverEffects
		  */

			//On capture les élements HTML des boutons
			//Et les texte qui vont être animés
			var iconUser = document.getElement('.hi-icon-user'),
 			iconScreen = document.getElement('.hi-icon-screen'),
 			iconStar = document.getElement('.hi-icon-star'),
 			slideUser = document.getElement('.jema_slide_text_user'),
 			slideScreen = document.getElement('.jema_slide_text_screen'),
 			slideStar = document.getElement('.jema_slide_text_star'),

 			currentSlider = 'User',
 			lastSlided = slideUser,

 			//On cache le menu vu qu'il y en à un dans le troisieme bouton !
 			divMenu = document.getElement('.jema_cadre_menu');
 			divMenu.addClass('jema_hidden');

 			iconUser.addEvent('mouseover', function(){
 				if(currentSlider=='User'){
 					var fnUserWobble = function(){ slideUser.removeClass('wobble animated'); };
 					if(slideUser.hasClass('wobble animated')){}
 					else{
 						slideUser.toggleClass('wobble animated', true);
 						fnUserWobble.delay(1100);
 					}
 				}
 				else{
 					var fastCaptureLastSlided = lastSlided;
 					var fnDelUserRotateClass = function(){ 
 						slideUser.removeClass('rotateInUpRight animated');
 						fastCaptureLastSlided.removeClass('rotateOutDownLeft animated');
 					}

 					slideUser.setStyle('visibility', 'visible');
 					slideUser.setStyle('opacity', 1);

 					lastSlided.setStyle('opacity', '0');

 					lastSlided.addClass('rotateOutDownLeft animated');
 					slideUser.addClass('rotateInUpRight animated');
 					fnDelUserRotateClass.delay(1100);

 					currentSlider = 'User';
 					lastSlided = slideUser;
 				}
 			});

 			iconScreen.addEvent('mouseover', function(){
 				//Si l'utilisateur s'amuse avec le même bouton on déclenche une animation pour rendre la page vivante
 				if(currentSlider=='Screen'){
 					var fnScreenWobble = function(){ slideScreen.removeClass('wobble animated'); }
 					if(slideScreen.hasClass('wobble animated')){}
 					else{
 						slideScreen.toggleClass('wobble animated', true);
 						fnScreenWobble.delay(1000);
 					}
 				}
 				else{
 					//Capturer le dernier texte selectionné avant qu'il soit remplacé en fin de fonction durant le .delay()
 					//En fait le JavaScript est tellement rapide que lastSlided prend une nouvelle valeur le temps que la fonction fasse son job
 					var fastCaptureLastSlided = lastSlided; 

 					//Création d'une fonction activée avec délai pour nettoyer le contenu des class 
 					var fnDelScreenRotateClass = function(){
 						slideScreen.removeClass('rotateInUpRight animated');
 						fastCaptureLastSlided.removeClass('rotateOutDownLeft animated');
 					}

 					// On rend le texte visible et sous forme de block juste avant d'activer l'anim
 					slideScreen.setStyle('visibility', 'visible');
 					slideScreen.setStyle('opacity', 1);

 					// On cache naturellement le texte precedent
 					lastSlided.setStyle('opacity', '0');

 					//Pendant que l'ancien texte s'efface avec une transition sur opacity, on déclenche l'animation de sortie
 					lastSlided.addClass('rotateOutDownLeft animated');

 					//On déclenche l'animation d'entrée du nouveau texte, ici "text dans slideScreen"
 					slideScreen.addClass('rotateInUpRight animated');

 					//On déclenche la fonction plus haut
 					//Le délai permet de laisser le temps à l'animation de sortie de s'effectuer avant de supprimer la class css qui la declenche
 					fnDelScreenRotateClass.delay(1100);

 					currentSlider = 'Screen';
 					lastSlided = slideScreen;
 				}

 			});

 			iconStar.addEvent('mouseover', function(){
 				if(currentSlider=='Star'){
 					var fnStarWobble = function(){ slideStar.removeClass('wobble animated'); }
 					if(slideStar.hasClass('wobble animated')){}
 					else{
 						slideStar.toggleClass('wobble animated', true);
 						fnStarWobble.delay(1000);
 					}
 				}
 				else{
 					var fastCaptureLastSlided = lastSlided;
 					var fnDelStarRotateClass = function(){
 						slideStar.removeClass('rotateInUpRight animated');
 						fastCaptureLastSlided.removeClass('rotateOutDownLeft animated');
 					}
 					slideStar.setStyle('visibility', 'visible');
 					slideStar.setStyle('opacity', 1);

 					lastSlided.setStyle('opacity', 0);

 					lastSlided.addClass('rotateOutDownLeft animated');
 					slideStar.addClass('rotateInUpRight animated');
 					fnDelStarRotateClass.delay(1100);


 					currentSlider = 'Star';
 					lastSlided = slideStar;
 				}
 			});
		}
	}
});