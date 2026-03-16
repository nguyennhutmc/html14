var vw = ($('html').css('font-size').replace('px', ''));
//console.log(vw);
function init() {
    $('body').addClass($("main").attr("class"));
    const myCollapsible = document.getElementById('mainNavbar')
    myCollapsible.addEventListener('show.bs.collapse', event => {
        $('body').addClass('sticky');
    });
    myCollapsible.addEventListener('hidden.bs.collapse', event => {
        var winscroll = $(window).scrollTop();
        if(winscroll==0){
            $('body').removeClass('sticky');
        }
    });
    $('header .nav-link').on('click', function() {
        $('#mainNavbar').collapse('hide');
    });

    /*hover menu pc*/
    if ($(window).width() >= 992) {
        let hideTimeout;
        $('.nav-item.dropdown').hover(
            function () {
                clearTimeout(hideTimeout);
                $('.nav-item.dropdown').removeClass('show').find('.dropdown-toggle, .dropdown-menu').removeClass('show');
                $(this).addClass('show');
                $(this).find('.dropdown-toggle').addClass('show');
                $(this).find('.dropdown-menu').addClass('show');
            },
            function () {
                const $dropdown = $(this);
                hideTimeout = setTimeout(function () {
                    $dropdown.removeClass('show');
                    $dropdown.find('.dropdown-toggle, .dropdown-menu').removeClass('show');
                }, 500);
            }
        );
    }
}

function _sticky() {
    var winscroll = $(window).scrollTop();
    if (winscroll >= vw * 4.6875) {
        $("body").addClass("sticky");
    } else {
        $("body").removeClass("sticky");
    }
}
$(function () {
    init();
});
$(window).load(function(){
    if ($(window).width() >= 992) {
        var set_offset=17.5*vw,
            set_mirror=true;
    }
    else{
        var set_offset=0,
            set_mirror=true;
    }
    AOS.init({
        once: false,
        offset: set_offset, // offset (in px) from the original trigger point
        delay: 1, // values from 0 to 3000, with step 50ms
        //duration:500, // values from 0 to 3000, with step 50ms
        easing: 'ease-in-sine',
        mirror: set_mirror,
        //anchorPlacement: 'top-top',
    });
});
var lastScrollTop = 0;
$(window).on("scroll", function (event) {
        _sticky();
});
