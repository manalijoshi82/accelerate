<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
            <header class="page-header"> 
                <h1 class="page-title"><?php _e( '404 Not Found', 'Accelerate'); ?></h1>
            </header>

            <div class="page-wrapper">
                <div class="image">      
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/crying-baby.png" />
                </div>
                <div class="page-content">
                    <h2><?php _e("Hey... Please don't cry. It's just a 404 error!", "Accelerate"); ?></h2>
                    <h2>
                        <?php _e("Maybe you should check out our ") ?>
                        <a href="<?php echo site_url('/blog/') ?>" target='_blank'>blog</a> 
                        <?php _e("or check out our " ) ?>
                        <a href="<?php echo site_url('/case-studies/') ?>" target='_blank'>case studies</a>
                        <?php _e("or better yet ") ?>
                        <a href="<?php echo site_url('/contact/') ?>" target='_blank'>contact us</a>.
                    </h2>
                </div>
            </div>
            <?php while ( have_posts() ) : the_post(); ?>
                
                
                
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
