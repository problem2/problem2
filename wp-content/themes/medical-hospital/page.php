<?php
/**
 * The template for displaying all pages.
 * @package Medical Hospital
 */
get_header(); ?>

<?php do_action('medical_hospital_page_header'); ?>

<main id="maincontent" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="title-box">
        	<div class="container">
        		<h1><?php the_title();?></h1>
        	</div>
        </div>
        <div id="wrapper" class="container">
            <div class="main-wrap-box"> 
                <div class="feature-box">
                    <div class="bradcrumbs">
                        <?php medical_hospital_the_breadcrumb(); ?>
                    </div>
                </div> 
                <div class="feature-box">   
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="entry-content"><?php the_content(); ?> </div>
                <?php wp_link_pages( array(
                        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'medical-hospital' ) . '</span>',
                        'after'       => '</div>',
                        'link_before' => '<span class="page-number">',
                        'link_after'  => '</span>',
                        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'medical-hospital' ) . ' </span>%',
                        'separator'   => '<span class="screen-reader-text">, </span>',
                )   ); ?>       
                <div class="clear"></div>    
            </div>
            <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
            ?>
        </div><!-- container -->
    <?php endwhile; // end of the loop. 
    wp_reset_postdata();?>
</main>

<?php do_action('medical_hospital_page_left_footer'); ?>

<?php get_footer(); ?>