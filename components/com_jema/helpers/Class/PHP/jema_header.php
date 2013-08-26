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
<a href="/jean-massat/"><img src="/jean-massat/images/images_jema/ban_jema2.jpg" class="jema_banner"/></a>
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