<?php
/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * @package Joomla.Site
 * @Component com_jema
 * @copyright Copyright © 2013, jean-massat.
 * @license This software is under MIT licence.
 */
defined('_JEXEC') or die('Not that way');
?>
<br/><br/>
<?php if(Jema::isMobile()){ ?>
<div class="jema_mobile_menu_btn_container">
	<button type="btn" class="jema_mobile_menu_btn">
		<i class="icon-home jema_icon_mobile"></i>
	</button>
	<br/><br/><br/>
	<a class="jema_mobile_menu_links" href="/jean-massat/">.:Accueil:.</a></li><br/>
	<a class="jema_mobile_menu_links" href="/jean-massat/index.php/blog">.:Blog:.</a></li><br/>
	<a class="jema_mobile_menu_links" href="/jean-massat/index.php/cv">.:Mon CV:.</a></li><br/>
	<a class="jema_mobile_menu_links" href="/jean-massat/index.php/dev">.:Dev:.</a></li><br/>
	<a class="jema_mobile_menu_links" href="/jean-massat/index.php/about">.:A propos:.</a></li>
</div>

<?php }else{ ?>
<div class="jema_cadre_menu"> 
	<div class="jema_toggle_classic_menu">Menu</div>
	<a class="jema_btn jema_btn_home" href="/jean-massat/">.:: Accueil ::.<i class="icon-fast-forward jema_icon_menu jem_icon_home"></i></a><br/><br/>
	<a class="jema_btn jema_btn_blog" href="/jean-massat/index.php/blog" >.:: Blog ::.<i class="icon-fast-forward jema_icon_menu jema_icon_blog"></i></a><br/><br/>
	<a class="jema_btn jema_btn_cv" href="/jean-massat/index.php/cv">.:: Mon C.V. ::.<i class="icon-fast-forward jema_icon_menu jema_icon_cv"></i></a><br/><br/>
	<a class="jema_btn jema_btn_dev" href="/jean-massat/index.php/dev">.:: Dev ::.<i class="icon-fast-forward jema_icon_menu jema_icon_dev"></i></a><br/><br/>
	<a class="jema_btn jema_btn_about" href="/jean-massat/index.php/about">.:: A propos ::.<i class="icon-fast-forward jema_icon_menu jema_icon_about"></i></a><br/>
</div>
<?php } ?>
<div class="jema_content">
	<div class="jema_cadre_profil jema_hidden">
		<img class="jema_cadre_profil_pic" src="/jean-massat/images/images_jema/gentlemen.jpg" width="200"/>
		<br/>
		<div class="jema_cadre_profil_infos">

			<div>
				Jean-Baptiste Priam Massat 
				<br/>
				---------------------
				<br/> 
				Développeur d'applications
				<br/>
				---------------------
				<br/>
				<a href="//plus.google.com/107279035521866382037?prsrc=3"
	   			rel="publisher" target="_top" style="text-decoration:none;display:inline-block;color:#333;text-align:center; font:13px/16px arial,sans-serif;white-space:nowrap;">
				<span style="display:inline-block;font-weight:bold;vertical-align:top;margin-right:5px; margin-top:8px;">Jean-Baptiste</span><span style="display:inline-block;vertical-align:top;margin-right:15px; margin-top:8px;">on</span>
				<img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"/></a>
				<br/><br/>
				Mon profil Github: <iframe src="http://ghbtns.com/github-btn.html?user=Fanghornn&type=follow" allowtransparency="true" frameborder="0" scrolling="0" width="150" height="20"></iframe>
				<br/><br/>
			</div>
		</div>
	</div>