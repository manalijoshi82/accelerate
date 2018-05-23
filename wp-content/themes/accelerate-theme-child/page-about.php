<?php
/**
 * The template for displaying custom about page
 *
 * Template Name: page-about
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<section id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<div class="about-hero-text">
                    <p>Accelerate is a stretegy and marketing agency located in the heart of NYC. Our goal is
                        to build businesses by making our clients visible and making their customers smile.
                    </p>
                </div>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</section><!-- #primary .home-page -->

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
            <div class="services-intro">
                    <h2>Our Services</h2>
                    <p>We take pride in our clients and the content we create for them. Here is a brief overview of our offered services.</p>
            </div>
            <?php while ( have_posts() ) : the_post(); 

                $size= "thumbnail";
                $contentStrategy = get_field('content_strategy');
                $infuencerMapping = get_field('influencer_mapping');
                $socialMediaStrategy = get_field('social_media_strategy');
                $designAndDevelopment = get_field('design_and_development');

                $contentStrategy_desc = get_field('strategy_desc');
                $influencer_desc = get_field('influencer_desc');
                $social_media_desc = get_field('social_media_desc');
                $design_and_development_desc = get_field('design_and_development_desc');

                $image1 = get_field('image_1');
                $image2 = get_field('image_2');
                $image3 = get_field('image_3');
                $image4 = get_field('image_4');
            ?>
                <!--<h2><?php //the_title(); ?></h2>-->
                <article class="about_us">
                    <div class="odd">
                        <?php if($image1) { 
                            echo wp_get_attachment_image( $image1, $size); 
                        } ?>
                        <div class="descriptionOdd">
                            <h3><?php echo $contentStrategy; ?></h3>
                            <h4><?php echo $contentStrategy_desc; ?></h4>
                        </div>
                    </div>

                    <div class="even"> 
                        <?php if($image2) { 
                            echo wp_get_attachment_image( $image2, $size); 
                        } ?>
                        <div class="descriptionEven">
                            <h3><?php echo $infuencerMapping; ?></h3>
                            <h4><?php echo $influencer_desc; ?></h4>
                        </div>
                       
                    </div>
              
                    <div class="odd">
                        <?php if($image3) { 
                            echo wp_get_attachment_image( $image3, $size); 
                        } ?>
                        <div class="descriptionOdd">
                            <h3><?php echo $socialMediaStrategy; ?></h3>
                            <h4><?php echo $social_media_desc; ?></h4>
                        </div>
                    </div>
                    
                    <div class="even">
                        <?php if($image4) { 
                            echo wp_get_attachment_image( $image4, $size); 
                        } ?>
                        <div class="descriptionEven">
                            <h3><?php echo $designAndDevelopment; ?></h3>
                            <h4><?php echo $design_and_development_desc; ?></h4>
                        </div>
                    </div>
                </article>

                <hr>
                    <div class="contactQuestion">
                        <h2>Interested in working with us?</h2>
                        <button>Contact Us</button>
                    </div>
                    

                
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
