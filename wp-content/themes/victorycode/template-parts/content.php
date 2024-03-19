<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package victorycodev1.0
 */

?>

<div class="page">
	<div class="container page__container">
		<aside class="page-sidebar">
			<?php dynamic_sidebar( "PageLeftSidebar" ); ?>
		</aside>
		<main class="article">
			<ul class="breadcrumbs">
				<li class="breadcrumbs__item breadcrumb"><a href="index.html" class="breadcrumbs__link">Главная</a></li>
				<span class="breadcrumbs__item"> / </span>
				<li class="breadcrumbs__item breadcrumb"><a href="" class="breadcrumbs__link">Блог</a></li>
			</ul>
			<h1 class="page__title"><?php the_title() ?></h1>
			<section>
			<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'victorycodev1-0' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'victorycodev1-0' ),
				'after'  => '</div>',
			)
		);
		?>
			</section>
			<?php the_time('F jS, Y'); ?>
		</main>
		<aside class="page-sidebar">
			<?php dynamic_sidebar( "PageRightSidebar" ); ?>
		</aside>
	</div>
</div>


