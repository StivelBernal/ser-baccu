

$('.nav-itemss, .nav-item0').hover(function(){
    $(this).children('.mega-menu').animate({opacity: '1'});
}, function(){
    $(this).children('.mega-menu').animate({opacity: '0'});
});


$('.menu-item-has-children ul').before('<div class="mega-menu-movil" data-toggle="collapse"></div>');

$('.nav-item0 .mega-menu-movil').click(function(e){
    
    $(this).toggleClass('collapsed');

    $(this).siblings('.mega-menu').toggle();
});

$('.nav-itemss .mega-menu-movil').click(function(e){
    
    $(this).toggleClass('collapsed');

    $(this).siblings('.mega-menu').toggle();
});

