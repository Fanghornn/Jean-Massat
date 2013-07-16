/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * 
 */
var BorderMenu = new Class({
	initialize: function(){
		var self = this,
		classicMenu = new Element('div', {class:'jema_toggle_classic_menu', html:'Menu'}),
		cadreMenu = document.getElement('.jema_cadre_menu'),
		btnHome = document.getElement('.jema_btn_home'),
		btnBlog = document.getElement('.jema_btn_blog'),
		btnCv = document.getElement('.jema_btn_cv'),
		btnAbout = document.getElement('.jema_btn_about');

		classicMenu.inject(btnHome, 'before');
		/**
		 * Event animation btn
		 */
		self.animateButton(btnHome);
		self.animateButton(btnBlog);
		self.animateButton(btnCv);
		self.animateButton(btnAbout);

		/**
		 * Event reset animation btn
		 */
		self.inanimateButton(btnHome, 'home');
		self.inanimateButton(btnBlog, 'blog');
		self.inanimateButton(btnCv, 'cv');
		self.inanimateButton(btnAbout, 'about');
	}
	,animateButton: function(el){
		el.addEvent('mouseenter', function(){
			el.setStyle('margin-left', '0px');
			el.getElement('.icon-fast-forward').destroy();
		});
	}
	,inanimateButton: function(el, name){
		el.addEvent('mouseleave', function(){
			el.setStyle('margin-left', '-9em');
			var resuractedIcon = new Element('i', {class:'icon-fast-forward jema_icon_menu jema_icon_'+name});
			el.grab(resuractedIcon);
		});
	}	
});