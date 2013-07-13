/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * 
 */
var BorderMenu = new Class({
	initialize: function(){
		var self = this,
		buttonSlide = new Element('i', {class:'jema_menu_btn_slide icon-home', html:'<a href:"#h2"></a>'}),
		cadreMenu = document.getElement('.jema_cadre_menu'),
		btnHome = document.getElement('.jema_btn_home'),
		btnBlog = document.getElement('.jema_btn_blog'),
		btnCv = document.getElement('.jema_btn_cv'),
		btnAbout = document.getElement('.jema_btn_about');

		//Init positionnement
		cadreMenu.grab(buttonSlide);
		self.showMenu(cadreMenu);

		/**
		 * Events Cadre
		 */
		cadreMenu.addEvent('mouseenter', function(){
			self.showMenu(cadreMenu);
		});
		
		cadreMenu.addEvent('mouseleave', function(){
			self.discardMenu(cadreMenu);
		});

		/**
		 * Event animation btn
		 */
		btnHome.addEvent('mouseenter', function(){
			self.animateButton(btnHome);
		});
		btnBlog.addEvent('mouseenter', function(){
			self.animateButton(btnBlog);
		});
		btnCv.addEvent('mouseenter', function(){
			self.animateButton(btnCv);
		});
		btnAbout.addEvent('mouseenter', function(){
			self.animateButton(btnAbout);
		});

		/**
		 * Event reset animation btn
		 */
		btnHome.addEvent('mouseleave', function(){
			self.inanimateButton(btnHome, 'home');
		});
		btnBlog.addEvent('mouseleave', function(){
			self.inanimateButton(btnBlog, 'blog');
		});
		btnCv.addEvent('mouseleave', function(){
			self.inanimateButton(btnCv, 'cv');
		});
		btnAbout.addEvent('mouseleave', function(){
			self.inanimateButton(btnAbout, 'about');
		});
	}
	/*Change left style property to simulate a slide effect */
	,showMenu: function(cadreMenu){
		cadreMenu.setStyle('left', '-.2em');
	}
	/*Reset Cadre position*/
	,discardMenu: function(cadreMenu){
		cadreMenu.setStyle('left', '-11.2em');
	}
	,animateButton: function(el){
		el.setStyle('margin-left', '0px');
		el.getElement('.icon-fast-forward').destroy();
	}
	,inanimateButton: function(el, name){
		el.setStyle('margin-left', '-9em');
		var resuractedIcon = new Element('i', {class:'icon-fast-forward jema_icon_menu jema_icon_'+name});
		el.grab(resuractedIcon);
	}
});