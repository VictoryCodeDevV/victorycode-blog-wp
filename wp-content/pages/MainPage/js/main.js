

    $('.slider').slick({
        dots: true,
        prevArrow: "<i class='icon-slick-arrow prev'></i>",
        nextArrow: "<i class='icon-slick-arrow next'></i>",
        infinite: false,
        slidesToShow: 1,
    });

$(document).ready(function(){

// SLIDER ---------------------------------




    $('.prev').css('display', 'none');
    $('.slider').on('afterChange', function(event, slick, currentSlide) {
        if(currentSlide == 0) {
            $('.prev').css('display', 'none');
        } else {
            $('.prev').css('display', 'block');
        }

        if (slick.$slides.length-1 == currentSlide) {
            $('.next').css('display', 'none');
          } else {
            $('.next').css('display', 'block');
          }
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


// ANIMATE ----------------------------------

    const animItems = document.querySelectorAll("._animate");
    $(window).scrollTop(1);
    $(window).on("scroll", function(){
    	for (let index = 0; index < animItems.length; index++){
    		if($(window).scrollTop() + $(window).height() > $(animItems[index]).offset().top + $(animItems[index]).height() / 2 
    			& $(window).scrollTop() < $(animItems[index]).offset().top + $(animItems[index]).height() / 2){
    			$(animItems[index]).addClass("_animate-Active");
    		} else {
    			if($(animItems[index]).hasClass("_anim-no-hide") !== true){$(animItems[index]).removeClass("_animate-Active");}
    		};
    	};
    });

// nav item _active
    const sections = $('section');
    $(window).on("scroll", function(){
        
        for(let index = 0; index < sections.length; index++) {
            let sectionID = $(sections[index]).attr('id');
                
            let link = $("[href*=" + sectionID + "]");
            if($(window).scrollTop() >= $(sections[index]).offset().top - parseInt($(sections[index]).css('margin-top')) && ($(window).scrollTop()) < ($(sections[index]).offset().top + $(sections[index]).outerHeight() - 2 )) {
                $(link).addClass('_active');
            }
            else{
                $(link).removeClass('_active');
            }
        }
    });
    
});
// 



// .me Scale
    





// let textSize = 18;

// if($('.me__container').outerHeight() > $(window).height()) {
//     console.log($('.me__container').outerHeight());
    
//     while($('.me').outerHeight() > $(window).height()) {
//         textSize -= 1;
//         $('.me__acquaintance').css('font-size', textSize+'px');
        
//         break
//     }
// }
// console.log($('.me__container').outerHeight());
