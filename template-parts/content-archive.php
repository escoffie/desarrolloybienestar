<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package think
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card mb-6 mb-4'); ?>>
    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption();?>" class="card-img-top">
    <div class="card-body">
        <header class="card-title">
            <?php
            if ( is_singular() ) :
                the_title( '<h4 class="entry-title">', '</h4>' );
            else :
                the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
            endif;
    
            if ( 'post' === get_post_type() ) :
                ?>
                <div class="entry-meta">
                    <?php
                    think_posted_on();
                    think_posted_by();
                    ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .card-title -->

        <div class="card-text">
            <?php
            // the_content( sprintf(
            // 	wp_kses(
            // 		/* translators: %s: Name of current post. Only visible to screen readers */
            // 		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'think' ),
            // 		array(
            // 			'span' => array(
            // 				'class' => array(),
            // 			),
            // 		)
            // 	),
            // 	get_the_title()
            // ) );
            the_excerpt();
        
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'think' ),
                'after'  => '</div>',
            ) );
            ?>
        </div><!-- .card-text -->
        
    </div>
    <footer class="card-footer">
        <?php think_entry_footer(); ?>
    </footer><!-- .card-footer -->


</article><!-- #post-<?php the_ID(); ?> -->
