<?php 
/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * 
 */
 
defined('_JEXEC')or die('Not that way');

class articlesController{

	function __construct() { }

	/* Retourne la date du jour au format sql */
	public static function today(){ return date('Y-m-d'); }

	public static function getCountArticle(){
		$db = JFactory::getDBO();
		$query = "SELECT COUNT(*) FROM `#__jema_articles`;";
		$db->setQuery($query);
		$db->execute();
		$count = $db->loadResult();

		return $count;
	}

	public static function getNewsFeed(){
		$db = JFactory::getDBO();
		$query = "SELECT `id_article`, `titre_article`, `date_creation` FROM `#__jema_articles` ORDER BY `id_article` DESC LIMIT 4 ;";
		$db->setQuery($query);
		$rows = $db->loadAssocList();

		return $rows;
	}

	public static function getArticles($firstEntry, $nb_rows){
		$db = JFactory::getDBO();
		$query = "	SELECT a.`id_article` , `titre_article` , `content_article` , `img_src` , `date_creation`
					FROM `#__jema_articles` AS a
					LEFT JOIN `#__jema_articles_images` AS i ON i.id_article = a.id_article
					ORDER BY a.id_article DESC LIMIT ".$firstEntry.",".$nb_rows.";";
		$db->setQuery($query);
		$rows = $db->loadAssocList();
		return $rows;
	}

	public static function getArticle($id){
		$db = JFactory::getDBO();
		$query = "SELECT a.`id_article`, `titre_article`, `content_article`, `img_src`, `date_creation`";
		$query .= " FROM `#__jema_articles` AS a LEFT JOIN `#__jema_articles_images` AS i ON i.id_article = a.id_article";
		$query .= " WHERE a.id_article=".$id.";";
		$db->setQuery($query);
		$row = $db->loadAssocList();

		return $row;
	}

	public static function deleteArticle(){
		$id = JRequest::getVar('id');
		$db = JFactory::getDBO();

		//Delete article
		$query = "DELETE FROM `#__jema_articles` WHERE id_article=".$id.";";
		$db->setQuery($query);
		$db->execute();

		//Delete associated image
		$query = "DELETE FROM `#__jema_articles_images` WHERE id_article=".$id.";";
		$db->setQuery($query);
		$db->execute();
	}

	/**
	  * Saving article and images
	  * into DB for jema_database
	  */
	public static function saveArticle(){
		/**
		  * Getting POST and FILE values sent from admin user
		  * while escaping strings from user entry to avoid sql errors and injection
		  */
		$date = self::today();
		$titre = mysql_real_escape_string($_POST["titre_article"]);
		$content = mysql_real_escape_string($_POST["content_article"]);

		/*Check image details and get the returned code*/
		$image = JRequest::getVar('image_article', null, 'files', 'array');
		$result=self::checkImage($image);

		/*Getting image infos*/
		$imgname = JFile::makeSafe($image['name']);
		$imgsize = $image["size"];
		$imgtype = $image["type"];

		if(!empty($titre) || !empty($content)){
			if($result["code"]==0 || $result["code"]==7){
				$db = JFactory::getDBO();

				/*Insert Article*/
				$query = "insert into `#__jema_articles` (`titre_article`, `content_article`, `date_creation`) values ('".$titre."',";
				$query .= " '".$content."', '".$date."');";
				$db->setQuery($query);
				$db->execute();

				/*Insert Image only if there is an image*/
				if($result["code"]!=7){ 
					$id_article = $db->insertid();
					$uploadArr = self::saveImage($image, $imgname);
					$src = $uploadArr["src"];

					if($uploadArr["code"]==0){
						$query = "insert into `#__jema_articles_images` (`img_name`, `img_taille`, `img_type`, `img_src`, `id_article`)";
						$query .=  " values ('".$imgname."', '".$imgsize."', '".$imgtype."', '".$src."', '".$id_article."');";
						$db->setQuery($query);
						$db->execute();
					}else return $uploadArr;
				}
			}else return $result;
		}
	}

	/*Image values checking function*/
	public static function checkImage($image){
		$code = 0;
		$message = 'Upload image ok';
		$fileTemp = $image['tmp_name'];

		/*Checking maximum allowed size*/
		$max_size = 1110000;
		if(($image['size'])>$max_size){
			$code = 2;
			$message = 'Image plus grande que la taille autorisée par le créateur du site veuillez contacter pour changer ceci';
		}

		/*Checking allowed types*/
		$imageinfo = @getimagesize($fileTemp);
		$allowed_types = "image/jpeg,image/pjpeg,image/png,image/x-png,image/gif";
		$validFileTypes = explode(",", $allowed_types); 
		if( !is_int($imageinfo[0]) || !is_int($imageinfo[1]) ||  !in_array($imageinfo['mime'], $validFileTypes) ){
			$code = 3;
			$message = 'image type invalid';
		}

		/*Checking php errors*/
		$file_error=$image["error"];
		if ($file_error>0){
			switch($file_error){
				case 1:
					$code = 4;
					$message = "Image larger than php ini allows it";
				break;

				case 2:
					$code = 5;
					$message = "Image larger than form allows it";
				break;

				case 3:
					$code = 6;
					$message = "Image partially upload, please retry";
				break;

				case 4:
					$code = 7;
					$message = "No image uploaded";
				break;
			}
		}
		$result = array("code"=>$code, "message"=>$message);
		return $result;
	}

	public static function saveImage($image, $imageName){

		$src = $image['tmp_name'];
		$dir = JPATH_SITE . DS . "images".DS."images_articles";
		$url = "images".DS."images_articles".DS.$imageName;
		if(!JFile::exists($dir)) JFolder::create($dir);
		$dest = $dir.DS.$imageName;

		if ( JFile::upload($src, $dest) ) { 
			$code = 0;
			$message = "Upload image ok !"; 
		}else{ 
			$code = 8; 
			$message = "Upload image foiré !"; 
		}
		$result = array("code"=>$code, "message"=>$message, "src"=>$url);
		return $result;
	}

}