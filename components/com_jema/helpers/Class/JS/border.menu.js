/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * 
 */
var BorderMenu = new Class({
	initialize: function(){
		self = this;
		var cadreMenu = document.getElement('.jema_cadre_menu'),
		buttonSlide = new Element('i', {class:'jema_menu_button_slide icon-home'});
		cadreMenu.grab(buttonSlide);

		cadreMenu.addEvent('mouseenter', function(){
			cadreMenu.setStyle('left', '-1.2em');
		});
		
		cadreMenu.addEvent('mouseleave', function(){
			cadreMenu.setStyle('left', '-8.5em');
		});
	
	}
});