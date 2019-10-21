<?php
/**
 * The template for displaying 404 pages (Not Found).
 * @package Medical Hospital
 */

get_header(); ?>

<div class="container">
    <main id="maincontent" role="main" class="page-content">
		<div class="notfound">
			<h1><?php esc_html_e('404 Not Found', 'medical-hospital' ); ?></h1>
			<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn','medical-hospital' );  ?></p>
			<p class="text-404"><?php esc_html_e( 'Dont worry it happens to the best of us.', 'medical-hospital' ); ?></p>
			<div class="read-moresec">
        		<a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right"><?php esc_html_e( 'Return to the home page', 'medical-hospital' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Return to the home page', 'medical-hospital' ); ?></span></a>
			</div>
		</div>
		<div class="clearfix"></div>
    </main>
</div>
	
<?php get_footer(); ?>