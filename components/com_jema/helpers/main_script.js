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

		setCdrContent();

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
		window.onresize = function(){
			setCdrContent();
		}
	}
}

function setCdrContent(){
	var jemaContent = document.getElement('.jema_content'),
	jemaCadreProfil = document.getElement('.jema_cadre_profil'),
	windowSize = window.getSize();

	if((windowSize.x>800)){
		jemaCadreProfil.removeClass('jema_hidden');
	}else{
		jemaCadreProfil.addClass('jema_hidden');
	}
}