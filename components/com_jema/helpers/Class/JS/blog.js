window.addEvent('domready', function() {
    var detectRoot = (document.getElement('.jema_article_creator'));
    if(detectRoot==null){}else{display();}
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
