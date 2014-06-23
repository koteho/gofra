$(document).ready(function () {
    $('.page-scroll a').on('click', function(event) {
        var $anchor = $(this);
        console.log($($anchor.attr('href')).offset().top);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top-45)
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
    $('.top-scroll a').on('click', function(event) {
        $('html, body').stop().animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
    $('.vertical-form').on('submit', function(e){
        e.preventDefault();
        alert('Заявка отправлена');
        $.ajax({
            type: 'POST',
            data: $(this).serialize(),
            url: 'mail.php'
        });
    });
});
