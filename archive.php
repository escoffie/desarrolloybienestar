<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package think
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="card-deck py-3">

				<?php
				/* Start the Loop */
				$i = 0;
				while ( have_posts() ) :
					if ($i%2==0 and $i>0) echo '<div class="w-100 d-none d-sm-block d-md-none"></div><!-- wrap every 2 on sm-->';
					//if ($i%3==0 and $i>0) echo '<div class="w-100 d-none d-md-block d-lg-none"></div><!-- wrap every 3 on md-->';
					//if ($i%4==0 and $i>0) echo '<div class="w-100 d-none d-lg-block d-xl-none"></div><!-- wrap every 4 on lg-->';
					if ($i%5==0 and $i>0) echo '<div class="w-100 d-none d-xl-block"></div><!-- wrap every 5 on xl-->';
					the_post();
					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content-archive', get_post_type() );

					$i++;

				endwhile;

				?>

			</div>


			<?php

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
