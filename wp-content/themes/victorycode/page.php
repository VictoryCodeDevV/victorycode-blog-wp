<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package victorycodev1.0
 */

get_header();


?>








<main class='site-main'>
<div class="page">
	<div class="container page__container">
		<!-- <aside class="page-sidebar">
			<?php dynamic_sidebar( "PageLeftSidebar" ); ?>
		</aside>  -->
		<main class="article">

			<?php get_breadcrumbs() ?>
	
			<h1 class="article__title"><?php the_title() ?></h1>
			<section>
			<?php

			function get_ip()
			{
			    if (!empty($_SERVER['HTTP_CLIENT_IP']))
			    {
			        $ip=$_SERVER['HTTP_CLIENT_IP'];
			    }
			    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
			    {
			        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
			    }
			    else
			    {
			        $ip=$_SERVER['REMOTE_ADDR'];
			    }
			    return $ip;
			}
			
			$region = geoip_region_by_name(get_ip());
			if ($region) {
				print_r($region);
			}
			

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
		<!-- <aside class="page-sidebar"> -->
			<!-- <?php dynamic_sidebar( "PageRightSidebar" ); ?> -->
		<!-- </aside> -->
	</div>
</div>
</main>
<?php
get_footer();



