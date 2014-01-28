/**
 * projet: JeanMassat | JEMA
 * Author: Jean Baptiste PRIAM MASSAT
 * @package Joomla.Site
 * @Component com_jema
 * @copyright Copyright © 2013, jean-massat.
 * @license This software is under MIT licence.
 */
 window.addEvent('domready', function() {
    var detectRoot = document.getElement('.jema_article_creator');

    if(detectRoot==null){}
    else{
    	var btnsDelete = document.getElements('.jema_delete_article');

    	btnsDelete.forEach(function(btnDel){
    		var article = btnDel.getParent('.jema_article');
    		btnDel.addEvent('click', function(){
    			var dataArticle = article.getAttribute('data-article');
    			var requestDel = new Request({
                    data: { 'id':dataArticle },
                    url: 'index.php?option=com_jema&format=raw&task=deleteArticle',
                    onComplete: function(){
                        var deleteMagicDiv = new Element('div', {'class':'jema_article_deleted', 'html':'La suppresion de l\'article est réussie'});

                        article.empty();
                        article.grab(deleteMagicDiv);
                    }
                }).send();
    		});
    	});
        display();
    }
});

function display(){
var displayArticleCreator = document.getElement('.jema_display_creator');

	displayArticleCreator.addEvent('click', function(){
		var displayer = document.getElement('.jema_form_article'),
		asker = document.getElement('.jema_article_creator');
		displayer.removeClass('jema_hidden');
		displayArticleCreator.destroy();
		asker.destroy();
	});
}