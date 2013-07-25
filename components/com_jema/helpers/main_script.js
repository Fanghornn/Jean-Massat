window.onload = function(){
	window.scrollTo(0,0);
	var menu = new BorderMenu(),
	menuLinks = menu.getLinksItems(),
	loopBuster = true;

	setCdrProfilPos();
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



window.onresize = function(){
	setCdrProfilPos();
}


//Function setting left style by getting jema_content width for jema_cadre_profil
function setCdrProfilPos(){
	var jemaContent = document.getElement('.jema_content'),
	jemaCadreProfil = document.getElement('.jema_cadre_profil'),
	jemaContentWidth = jemaContent.getStyle('width').toInt();
	jemaCadreProfil.setStyle('left', (jemaContentWidth+115));
	jemaCadreProfil.removeClass('jema_hidden');
}