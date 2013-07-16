<?php 
/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * 
 */
 
defined('_JEXEC')or die('Not that way');

class articlesController{

	function __construct() { }
/** Retourne la date du jour au format sql */
	public static function today(){ return date('Y-m-d'); }

	public static function imageCheking($image){
		$max_size = 1110000;

	}

	public static function saveArticle(){

		//Getting POST and FILE sent from user
		$date = self::today();
		$titre = $_POST['titre_article'];
		$content = $_POST['content_article'];
		$image = $_FILES['image_article'];

		//Check image details and get the returned code
		$image_check=self::imageCheking($image);


	}
}