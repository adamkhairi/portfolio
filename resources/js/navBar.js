let menuToggle = document.getElementById('menu-toggle'),
    menu = document.getElementById('menu');
    // navbar = document.getElementById('navbar');

menuToggle.addEventListener('click', event => {
    menu.classList.toggle('hidden');
});
menu.addEventListener('click', event => {
    menu.classList.toggle('hidden');
});

// Nav
$(function () {
    let navbar = $('#navbar');

    $(window).scroll(function () {
        if ($(window).scrollTop() <= 20) {

            navbar.addClass('bg-gray-800');
            navbar.addClass('shadow-lg');

        }else if($(window).scrollTop() <= 650){
            navbar.removeClass('bg-gray-800');
            navbar.removeClass('shadow-lg');
        } else {
            navbar.addClass('bg-gray-800');
            navbar.addClass('shadow-lg');


        }
    });
});
