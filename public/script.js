$(document).ready(function() {
    setTimeout(function() {
        $('.loading-container').fadeOut(700, function() {
            $('.welcome-message').fadeIn(1000, function() {
                $('.loading-curtain').fadeOut(1000, function() {
                    $('.page-accueil').fadeIn(1000);
                   
                });
            });
        });
    }, 300);

    
});



$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) { 
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    
    $('#back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow'); 
    });
});


