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
			cadreMenu.setStyle('left', '-.5em');
			buttonSlide.setProperty('html', '<');
		});
		
		cadreMenu.addEvent('mouseleave', function(){
			cadreMenu.setStyle('left', '-6.5em');
			buttonSlide.setProperty('html', '>');
		});
	
	}
});