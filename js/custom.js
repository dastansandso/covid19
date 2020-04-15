new WOW().init();
$(document).on('ready',function () {
    var header_height = $('header nav.navbar').height();
    $('body').css('padding-top',header_height);

    $("#get_started").click(function() {
    $('html,body').animate({
        scrollTop: $("#selection-block").offset().top - header_height },
        'slow');
	});




    
$('ul.navbar-nav').find('a').click(function(){
    var $href = $(this).attr('href');
    var $anchor = $('#'+$href).offset();
    $('html,body').animate({ scrollTop: $anchor.top - header_height },
        'slow');
    return false;
});


});

$(window).on('load', function() {
    $('body').addClass('loaded');
    $("#loader-wrapper").delay('400').hide('slow');
     $(this).scrollTop(0);
   
});

