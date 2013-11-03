/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * @package Joomla.Site
 * @Component com_jema
 * @copyright Copyright © 2013, jean-massat.
 * @license This software is under MIT licence.
 */
 window.onload = function(){
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
			var iconUser = document.getElement('.hi-icon-user'),
 			iconScreen = document.getElement('.hi-icon-screen'),
 			iconStar = document.getElement('.hi-icon-star'),
 			slideUser = document.getElement('.jema_slide_text_user'),
 			slideScreen = document.getElement('.jema_slide_text_screen'),
 			slideStar = document.getElement('.jema_slide_text_star'),
 			currentSlider = 'User',
 			lastSlided = slideUser,
 			divMenu = document.getElement('.jema_cadre_menu');

 			divMenu.addClass('jema_hidden');

 			iconUser.addEvent('mouseover', function(){
 				if(currentSlider=='User'){}
 				else{
 					lastSlided.setStyle('opacity', 0);
 					lastSlided.setStyle('visibility', 'hidden');
 					slideUser.setStyle('visibility', 'visible');
 					slideUser.setStyle('opacity', 1);
 					currentSlider = 'User';
 					lastSlided = slideUser;
 				}
 			});

 			iconScreen.addEvent('mouseover', function(){
 				if(currentSlider=='Screen'){}
 				else{
 					lastSlided.setStyle('visibility', 'hidden');
 					lastSlided.setStyle('opacity', 0);
 					slideScreen.setStyle('visibility', 'visible');
 					slideScreen.setStyle('opacity', 1);
 					currentSlider = 'Screen';
 					lastSlided = slideScreen;
 				}

 			});

 			iconStar.addEvent('mouseover', function(){
 				if(currentSlider=='Star'){}
 				else{
 					lastSlided.setStyle('opacity', 0);
 					lastSlided.setStyle('visibility', 'hidden');
 					slideStar.setStyle('visibility', 'visible');
 					slideStar.setStyle('opacity', 1);
 					currentSlider = 'Star';
 					lastSlided = slideStar;
 				}
 			});
		}
	}
}