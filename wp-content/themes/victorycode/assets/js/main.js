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




// Menu ---------------------------------

$('#mainMenuBtn').click(function() {
    $(this).toggleClass('menu-btn_active')
    $('#mainMenu').toggleClass('nav_visible');
});


 // POPUP ---------------------------------

$('.contacts-popup').click(function () {
    $('.popup-wrapper').addClass('_popup-show');

    $('body').addClass('_scroll-lock')
});

$('.popup__btn').click(function () {
    $('.popup-wrapper').removeClass('_popup-show');

    $('body').removeClass('_scroll-lock');
});




// Socials footer menu
function socialsFooterMenu_init() {
    const socialLinks = [...document.querySelectorAll("#socialsMenu a")];
    socialLinks.map(a => {
        // Текст ссылки в иконку
        a.innerHTML = `<i class=icon-${a.innerText}></i>`;
        // Навешиваю класс к <a>
        a.classList+=" socials__link";
        // Навешиваю класс к родителю <li>
        a.parentNode.classList+= " socials__item";
        
    });
}
socialsFooterMenu_init();


// Contacts popup menu

function socialsPopupMenu_init() {
    const socialLinks = [...document.querySelectorAll("#socialPopup a")];

    socialLinks.map(a => {
        // Текст ссылки в иконку
        a.innerHTML = `<i class=icon-${a.innerText}></i><span class="contacts-list__link-inner">${a.href.replace(/(http:\/\/|mailto:)/g, "")}</span>`;
        // Навешиваю класс к <a>
        a.classList+="contacts-list__link";
        // Навешиваю класс к родителю <li>
        a.parentNode.classList+= " contacts-list__item";
    });
}
socialsPopupMenu_init()
