<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package victorycodev1.0
 */

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Место для SEO метатегов -->


    <?php wp_head();?>
</head>
<body class="body">
    
    <?php get_sidebar() ?>
    <?php dynamic_sidebar( "fjdkfjdkfjdkfj" ); ?>
    <div class="content">
    
<header class="header">
    <div class="container header__container">
        <a id='headerLogo' href='<?php echo home_url()?>' class="header__logo logo">
            <i class="logo__icon icon-logo"></i>
            <!-- <img src="img/logo2.svg" alt=""> -->
        </a>

        <div class="header__title">
            Web-developer
        </div>
        
        <ul class="contacts">
            <li class="contacts__item contacts__city"><p class="contacts__location">г. Москва</p> <a href="tel:+79251280096" class="contacts__link">+7(925) 128 00 96</a></li>
            <li class="contacts__item"><a href="#" class="contacts__link contacts-popup">Связаться со мной</a></li>
        </ul>

        <button id="mainMenuBtn" class="menu-btn">
            <span></span>
        </button>
    </div>
</header>  