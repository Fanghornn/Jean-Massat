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
		links = document.getElements('.jema_mobile_menu_links'),
		touched = false;

		mobileMenu.addEvent('touchstart', function(){
			if(touched==false){
				links.forEach(function(link){
					link.setStyle('margin-left', '-.2em');
					touched = true;
				});
			}else{
				links.forEach(function(link){
					link.setStyle('margin-left', '-6.5em');
					touched = false;
				});
			}
		});
	}else{
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
	}
}