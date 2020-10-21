$(window).scroll(() => {
    var initscroll = $(window).scrollTop();
    // console.log(initscroll);
    var docH = $(document).height();
    // console.log(docH);

    var winH = $(window).height();
    // console.log(winH);

    var scroll = (initscroll / (docH - winH)) * 100;
    // console.log(scroll);

    
    if (scroll > 0) {
        $('#bar').css('display', 'none');
        $('#vers-menu').addClass('fixed-top shadow-sm');
    } else {
        $('#bar').css('display', 'block');
        $('#vers-menu').removeClass('fixed-top shadow-sm');
    }
    setTimeout(() => {
        $('#bar').css('display', 'block');
    }, 1000);
    
    
});