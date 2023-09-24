// Main menu

// $(window).ready(function(){
//     if($(window).width() < 1200) {
//         $('.header__container').prepend($('#headerLogo'));
//         $('#menu #headerLogo').remove()



//         // $('#mainMenu').addClass('nav_invisible');
//         // $('#menu').addClass('sidebar-left_pos_absolute')
//     } else {
//         $('#menu .nav__list').prepend($('#headerLogo'));
//         $('#menu #headerLogo').remove()
//         // $('#mainMenu').removeClass('nav_invisible');
//         // $('#menu').removeClass('sidebar-left_pos_absolute')
//     }
// });


// $(window).resize(function(){
//     if($(window).width() < 1200) {
//         $('.header__container').prepend($('#headerLogo'));
//         $('#menu .nav__list #headerLogo').remove()



//         // $('#mainMenu').addClass('nav_invisible');
//         // $('#menu').addClass('sidebar-left_pos_absolute')
//     } else {
//         $('#menu .nav__list').prepend($('#headerLogo'));
//         $('#menu #headerLogo').remove()
//         // $('#mainMenu').removeClass('nav_invisible');
//         // $('#menu').removeClass('sidebar-left_pos_absolute')
//     }
// });





$('#mainMenuBtn').click(function() {
    $(this).toggleClass('menu-btn_active')
    $('#mainMenu').toggleClass('nav_visible');
});


