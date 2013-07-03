/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * 
 */
var BorderMenu = new Class({
	initialize: function(){
		self = this;
		var cadreMenu = document.getElement('.jema_cadre_menu'),
		buttonSlide = new Element('span', {class:'jema_menu_button_slide', html:'>'});
		cadreMenu.grab(buttonSlide);

		cadreMenu.addEvent('mouseenter', function(){
			cadreMenu.setStyle('margin-left', '-21em');
			buttonSlide.setProperty('html', '<');
		});

		
		cadreMenu.addEvent('mouseleave', function(){
			cadreMenu.setStyle('margin-left', '-26em');
			buttonSlide.setProperty('html', '>');
		});
	
	}
});