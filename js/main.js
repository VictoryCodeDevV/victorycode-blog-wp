// Main menu

// $(window).ready(function(){
//     if($(window).width() < 1200) {
//         $('#mainMenu').addClass('nav_invisible');
//         $('#menu').addClass('sidebar-left_pos_absolute')
//     } else {
//         $('#mainMenu').removeClass('nav_invisible');
//         $('#menu').removeClass('sidebar-left_pos_absolute')
//     }
// });


// $(window).resize(function(){
//     if($(window).width() < 1200) {
//         $('#mainMenu').addClass('nav_invisible');
//         $('#menu').addClass('sidebar-left_pos_absolute')
//     } else {
//         $('#mainMenu').removeClass('nav_invisible');
//         $('#menu').removeClass('sidebar-left_pos_absolute')
//     }
// });





$('#mainMenuBtn').click(function() {
    $(this).toggleClass('menu-btn_active')
    $('#mainMenu').toggleClass('nav_visible');
});


