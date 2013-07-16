window.onload = function (){
	var menuLiens = new BorderMenu();
	setCdrProfilPos();

}

window.onresize = function (){
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
