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

<main class="page blog">
	<div class="container blog__container">
	<?php get_breadcrumbs() ?>
	<h1 class="page__title blog__title">Блог</h1>
	<div class="cards blog__cards">
        <?php if (have_posts()) { while(have_posts()) { the_post(); ?>
            <div class="cards__item card">
			    <a href='<?php the_permalink();?>' class="card__inner">
				    <div class="card__img img-wrapper">
					    <div class="card__img-overlay img-overlay">
						    <div class="img-overlay__text">
							    <span class="img-overlay__text-span">Читать</span>
						    </div>
					    </div>

					    <?php the_post_thumbnail(); ?>
				    </div>
				    <div class="card__content">
				    	<h2 class="card__title">
				    		<?php the_title(); ?>
				    	</h2>
				    	<!-- <p class="card__description"> -->
							<?php the_excerpt(); ?>
				    	</p>
				    	<time class="card__date">
				    	<?php the_time('F jS, Y'); ?> 
				    	</time>
				    </div>
			</a>
		</div>
        <?php } ?>
        <?php } ?>
	</div>
	<div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">
		<ul class="pagination">
        <?php wp_paginate('title='); ?>
		</ul>
	</div>
</main>

<?php
get_footer();
