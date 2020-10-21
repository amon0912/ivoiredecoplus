$('.autoplay').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2500,
});

$('.temoin').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
});

//   bouton suivant
$('.slick-next').html('<i class="fas fa-angle-right fa-fw"></i>');
$('.slick-next').addClass('btn border rounded-circle');
$('.slick-next').css('position', 'absolute');
$('.slick-next').css('top', '50%');
$('.slick-next').css('right', '0%');

// bouton precedent  
$('.slick-prev').addClass('btn border rounded-circle');
$('.slick-prev').html('<i class="fas fa-angle-left fa-fw"></i>');
$('.slick-prev').css('position', 'absolute');
$('.slick-prev').css('top', '50%');
$('.slick-prev').css('z-index', '1');
$('.slick-prev').css('left', '0%');


