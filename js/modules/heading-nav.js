$(function(){if($('.article-nav ul').length){
    $('article h2, article h3, article h4').each(function(){
        var elem = $(this),
            elemStr = elem.html(),
            elemId = elemStr.replace(/ /g,'-').replace(/æ/g,'ae').replace(/ø/g,'oe').replace(/å/g,'aa').toLowerCase(),
            elemAnchor = $('<li><a class="article-link" nofollow tabindex="-1" href="#'+elemId+'">'+elemStr+'</a></li>');
        
        elem.attr('id',elemId);
        
        $('.article-nav ul').append(elemAnchor);
    });
    
    $('a.article-link').on('click',function(e){
        e.preventDefault();
        var target = $(this).attr('href');
        
        $('body').animate({scrollTop : $(target).offset().top - 63 },400);
    
    });

}});