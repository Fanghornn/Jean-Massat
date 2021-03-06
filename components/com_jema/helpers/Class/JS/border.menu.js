/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * @package Joomla.Site
 * @Component com_jema
 * @copyright Copyright © 2013, jean-massat.
 * @license This software is under MIT licence.
 */
var BorderMenu = new Class({
	initialize: function(){
		var self = this,
		cadreMenu = document.getElement('.jema_cadre_menu'),
		btnArr = self.getLinksItems(),
		btnClassNameArr = new Array('home', 'blog', 'cv', 'dev', 'about');

		btnArr.forEach(function(btn, i){
			self.inanimateButton(btn, btnClassNameArr[i], false);
		});

		btnArr.forEach(function(btn){
			self.animateButton(btn, false);
		});
	}
	,animateButton: function(el, scrollTop){
		if(scrollTop){
			el.setStyle('margin-left', '0px');
			if(el.getElement('.icon-fast-forward'))el.getElement('.icon-fast-forward').destroy();
		}
		else{
			el.addEvent('mouseenter', function(){
				el.setStyle('margin-left', '0px');
				if(el.getElement('.icon-fast-forward'))el.getElement('.icon-fast-forward').destroy();
			});
		}
	}
	,inanimateButton: function(el, name, scrollAway){
			var resuractedIcon = new Element('i', {'class':'icon-fast-forward jema_icon_menu jema_icon_'+name});

		if(scrollAway){
			el.setStyle('margin-left', '-9em');
			if(!document.getElement('.jema_icon_'+name))el.grab(resuractedIcon);
		}
		else{
			el.addEvent('mouseleave', function(){
				el.setStyle('margin-left', '-9em');
				el.grab(resuractedIcon);
			});
		}
	}
	,getLinksItems:function(){
		btnHome = document.getElement('.jema_btn_home'),
		btnBlog = document.getElement('.jema_btn_blog'),
		btnCv = document.getElement('.jema_btn_cv'),
		btnDev = document.getElement('.jema_btn_dev'),
		btnAbout = document.getElement('.jema_btn_about'),
		btnArr = new Array(btnHome, btnBlog, btnCv, btnDev, btnAbout);

		return btnArr;
	}
	,scrollOnTop: function(arrEl){
		var self = this;
		if(document.getElement('.jema_toggle_classic_menu')){
			if((document.getElement('.jema_toggle_classic_menu').getStyle('opacity'))===0){
				document.getElement('.jema_toggle_classic_menu').setStyle('opacity', '1');
			}
		}
		
		arrEl.forEach(function(btn){
			self.animateButton(btn, true);
		});
	}
	,scrollingAway: function(arrEl){
		var self = this,
		btnClassNameArrScroll = new Array('home', 'blog', 'cv', 'dev', 'about');

		if(document.getElement('.jema_toggle_classic_menu'))document.getElement('.jema_toggle_classic_menu').setStyle('opacity', '0');
		arrEl.forEach(function(btn, i){
			self.inanimateButton(btn, btnClassNameArrScroll[i],'true');
		});
	}
});