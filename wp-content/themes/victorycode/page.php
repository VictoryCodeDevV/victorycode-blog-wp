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
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item breadcrumb"><a href="" class="breadcrumbs__link">Главная</a></li>
		<span class="breadcrumbs__item"> / </span>
		<li class="breadcrumbs__item breadcrumb"><a href="" class="breadcrumbs__link">Блог</a></li>
	</ul>
	<h1 class="page__title blog__title"><?php the_title();?></h1>



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
				    	<p class="card__description">
				    		<?php the_excerpt(); ?>
				    	</p>
				    	<time datetime="2023-03-11T12:52"  class="card__date">
				    	<?php the_time('F jS, Y'); ?>
				    	</time>
				    </div>
			</a>
		</div>
        <?php } ?>
        <?php } ?>
		<!-- <div class="cards__item card">
			<a href='шаблон.html' class="card__inner">
				<div class="card__img img-wrapper">
					<div class="card__img-overlay img-overlay">
						<div class="img-overlay__text">
							<span class="img-overlay__text-span">Читать</span>
						</div>
					</div>
					<img src="img/rubric1.jpg" alt="" class="img-wrapper__img" alt="Карточка">
				</div>
				<div class="card__content">
					<h2 class="card__title">
						Длинное и емкое название поста в 2 строки
					</h2>
					<p class="card__description">
						Чтобы предусмотреть потерю соединения из-за отключения сети или других причин, советую поставить
					</p>
					<time datetime="2023-03-11T12:52"  class="card__date">
					11 марта, 12:52
					</time>
				</div>
			</a>
		</div> -->
		<!-- <div class="cards__item card">
			<a href='шаблон.html' class="card__inner">
			    <div class="card__img img-wrapper">
			        <div class="card__img-overlay img-overlay">
			            <div class="img-overlay__text">
			                <span class="img-overlay__text-span">Читать</span>
			            </div>
			        </div>
			        <img src="img/rubric1.jpg" alt="" class="img-wrapper__img" alt="Карточка">
			    </div>
			    <div class="card__content">
			        <h2 class="card__title">
			            Длинное и емкое название поста в 2 строки
			        </h2>
			        <p class="card__description">
			            Чтобы предусмотреть потерю соединения из-за отключения сети или других причин, советую поставить
			        </p>
			        <div class="card__date">
			            11 марта, 12:52
			        </div>
			    </div>
			</a>
			</div> -->
		<!-- <div class="cards__item card">
			<a href='шаблон.html' class="card__inner">
			    <div class="card__img img-wrapper">
			        <div class="card__img-overlay img-overlay">
			            <div class="img-overlay__text">
			                <span class="img-overlay__text-span">Читать</span>
			            </div>
			        </div>
			        <img src="img/rubric1.jpg" alt="" class="img-wrapper__img" alt="Карточка">
			    </div>
			    <div class="card__content">
			        <h2 class="card__title">
			            Длинное и емкое название поста в 2 строки
			        </h2>
			        <p class="card__description">
			            Чтобы предусмотреть потерю соединения из-за отключения сети или других причин, советую поставить
			        </p>
			        <div class="card__date">
			            11 марта, 12:52
			        </div>
			    </div>
			</a>
			</div>
			<div class="cards__item card">
			<a href='шаблон.html' class="card__inner">
			    <div class="card__img img-wrapper">
			        <div class="card__img-overlay img-overlay">
			            <div class="img-overlay__text">
			                <span class="img-overlay__text-span">Читать</span>
			            </div>
			        </div>
			        <img src="img/rubric1.jpg" alt="" class="img-wrapper__img" alt="Карточка">
			    </div>
			    <div class="card__content">
			        <h2 class="card__title">
			            Длинное и емкое название поста в 2 строки
			        </h2>
			        <p class="card__description">
			            Чтобы предусмотреть потерю соединения из-за отключения сети или других причин, советую поставить
			        </p>
			        <div class="card__date">
			            11 марта, 12:52
			        </div>
			    </div>
			</a>
			</div>
			<div class="cards__item card">
			<a href='шаблон.html' class="card__inner">
			    <div class="card__img img-wrapper">
			        <div class="card__img-overlay img-overlay">
			            <div class="img-overlay__text">
			                <span class="img-overlay__text-span">Читать</span>
			            </div>
			        </div>
			        <img src="img/rubric1.jpg" alt="" class="img-wrapper__img" alt="Карточка">
			    </div>
			    <div class="card__content">
			        <h2 class="card__title">
			            Длинное и емкое название поста в 2 строки
			        </h2>
			        <p class="card__description">
			            Чтобы предусмотреть потерю соединения из-за отключения сети или других причин, советую поставить
			        </p>
			        <div class="card__date">
			            11 марта, 12:52
			        </div>
			    </div>
			</a>
			</div>
			<div class="cards__item card">
			<a href='шаблон.html' class="card__inner">
			    <div class="card__img img-wrapper">
			        <div class="card__img-overlay img-overlay">
			            <div class="img-overlay__text">
			                <span class="img-overlay__text-span">Читать</span>
			            </div>
			        </div>
			        <img src="img/rubric1.jpg" alt="" class="img-wrapper__img" alt="Карточка">
			    </div>
			    <div class="card__content">
			        <h2 class="card__title">
			            Длинное и емкое название поста в 2 строки
			        </h2>
			        <p class="card__description">
			            Чтобы предусмотреть потерю соединения из-за отключения сети или других причин, советую поставить
			        </p>
			        <div class="card__date">
			            11 марта, 12:52
			        </div>
			    </div>
			</a>
			</div> -->
	</div>
	<div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">
		<ul class="pagination">
        <?php the_posts_pagination(); ?>
			<!-- <li class="pagination-item--wide first"> <a class="pagination-link--wide first" href="#">Previous</a> </li>
			<li class="pagination-item first-number"> <a class="pagination-link" href="#">1</a> </li>
			<li class="pagination-item"> <a class="pagination-link" href="#">2</a> </li>
			<li class="pagination-item is-active"> <a class="pagination-link" href="#">3</a> </li>
			<li class="pagination-item"> <a class="pagination-link" href="#">4</a> </li>
			<li class="pagination-item last-number"> <a class="pagination-link" href="#">5</a> </li>
			<li class="pagination-item--wide last"> <a class="pagination-link--wide last" href="#">Next</a> </li> -->
		</ul>
	</div>
</main>

<?php
get_footer();
