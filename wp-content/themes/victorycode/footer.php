<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package victorycodev1.0
 */

?>

<footer class="footer">
    <div class="container footer__container">
        <div class="footer__column">
            <div class="footer-column__item">
                <p class="footer-column__title">
                    <a href='<?php echo home_url()?>' class="logo footer__logo footer-column__item">
                        <i class="logo__icon icon-logo"></i>
                        <!-- <img src="img/logo2.svg" alt=""> -->
                    </a>
                </p>
                
                <a href="tel:+79251280096" class="footer-column__item">+7(925) 128 00 96</a>
                <ul class="footer-column__item socials">
                    <li class="socials__item"><a href="#" class="socials__link"><i class="icon-gmail"></i></a></li>
                    <li class="socials__item"><a href="#" class="socials__link"><i class="icon-tg"></i></a></li>
                    <li class="socials__item"><a href="#" class="socials__link"><i class="icon-vk"></i></a></li>
                    <li class="socials__item"><a href="#" class="socials__link"><i class="icon-wp"></i></a></li>
                </ul>
            
                <a href="" class="a footer-column__item">Отзывы</a>
            </div>
        </div>
    
        <div class="footer__column footer-column-with-form">
            <p class="footer-column__item footer-column__title">
                У вас остались вопросы? Пишите мне!
            </p>
            <form action="" class="form footer__form">
                <div class="form__column">
                    <input type="text" class="form__input" placeholder="Имя*">
                    <input type="text" class="form__input" placeholder="Email*">
                    <input type="text" class="form__input" placeholder="Телефон">
                </div>
                <div class="form__column">
                    <textarea name="" id="" cols="30" rows="10" class="form__input form__input_big" placeholder="Сообщение"></textarea>
                    <input type="submit" class="form__input form__submit">
                </div>
            
            </form>
        </div>
        <div class="footer__column">
            <div class="footer-column__item">
                <p class="footer-column__title">
                    Разделы
                </p>

                <?php echo wp_nav_menu(array(
                        'theme_location' => 'footerNav',
                        'container' => null,
                        'menu_class' => 'footer-sitemap',
                        
                    )); ?>
            </div>
        </div>
    

    </div>

    <div class="container footer__container">
        <div class="copyright footer__copyright">
            <?php echo bloginfo( $name );?> Все права защищены.
        </div>
    </div>
</footer>




        </div>
    </div>

<div class="popup-wrapper">
    <div class="popup">
        <input id="popup__toggle" type="checkbox" />
        <label class="popup__btn" for="popup__toggle">
          <span></span>
        </label>
        <ul class="contacts-list">
            <li class="contacts-list__item"><a href=" https://vk.com/autosuficiencia" class="contacts-list__link">VK: vk.com/autosuficiencia</a></li>
            <li class="contacts-list__item"><a href="https://t.me/viktorwebdev" class="contacts-list__link">TG: @viktorwebdev</a></li>
            <li class="contacts-list__item"><a href="https://wa.me/79375545603" class="contacts-list__link">WP: +7 937 554 56 03</a></li>
            <li class="contacts-list__item"><a href="mailto:viktor.wbdev@gmail.com" class="contacts-list__link">Mail: viktor.wbdev@gmail.com</a></li>
        </ul>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</body>
</html>



<?php wp_footer(); ?>

</body>
</html>
