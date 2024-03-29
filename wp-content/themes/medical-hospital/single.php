<?php
/**
 * The Template for displaying all single posts.
 * @package Medical Hospital
 */
get_header(); ?>

<div class="container">
    <main id="maincontent" role="main" class="main-wrap-box">
    	<?php
	    $left_right = get_theme_mod( 'medical_hospital_layout','Right Sidebar');
	    if($left_right == 'Right Sidebar'){ ?>
		    <div class="row">
				<div class="col-lg-9 col-md-9" id="wrapper">
					<div class="feature-box">
			            <div class="bradcrumbs">
			                <?php medical_hospital_the_breadcrumb(); ?>
			            </div>
					</div>
					<?php while ( have_posts() ) : the_post(); 
						get_template_part( 'template-parts/single-post');
		            endwhile; // end of the loop. 
		            wp_reset_postdata();?>
		       	</div>
				<div class="col-lg-3 col-md-3"><?php get_sidebar();?></div>
			</div>
		<?php }else if($left_right == 'Left Sidebar'){ ?>
			<div class="row">
				<div class="col-lg-3 col-md-3"><?php get_sidebar();?></div>
				<div class="col-lg-9 col-md-9" id="wrapper">
					<div class="feature-box">
			            <div class="bradcrumbs">
			                <?php medical_hospital_the_breadcrumb(); ?>
			            </div>
					</div>
					<?php while ( have_posts() ) : the_post(); 
						get_template_part( 'template-parts/single-post');
		            endwhile; // end of the loop.
		            wp_reset_postdata();?>
		       	</div>	     
		    </div>  	
		<?php }else if($left_right == 'One Column'){ ?>
			<div id="wrapper">
				<div class="feature-box">
		            <div class="bradcrumbs">
		                <?php medical_hospital_the_breadcrumb(); ?>
		            </div>
				</div>
				<?php while ( have_posts() ) : the_post(); 
					get_template_part( 'template-parts/single-post');
	            endwhile; // end of the loop. 
	            wp_reset_postdata();?>
	       	</div>
	    <?php }else if($left_right == 'Three Columns'){ ?>
		    <div class="row">
		        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
				<div class="col-lg-6 col-md-6" id="wrapper">
					<div class="feature-box">
			            <div class="bradcrumbs">
			                <?php medical_hospital_the_breadcrumb(); ?>
			            </div>
					</div>
					<?php while ( have_posts() ) : the_post(); 
						get_template_part( 'template-parts/single-post');
		            endwhile; // end of the loop. 
		            wp_reset_postdata();?>
		       	</div>
	       		<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
		    </div>
	    <?php }else if($left_right == 'Four Columns'){ ?>
		    <div class="row">
		        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
				<div class="col-lg-3 col-md-3" id="wrapper">
					<div class="feature-box">
			            <div class="bradcrumbs">
			                <?php medical_hospital_the_breadcrumb(); ?>
			            </div>
					</div>
					<?php while ( have_posts() ) : the_post(); 
						get_template_part( 'template-parts/single-post');
		            endwhile; // end of the loop.
		            wp_reset_postdata();?>
		       	</div>
		       	<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
		       	<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3');?></div>
		    </div>
	    <?php }else if($left_right == 'Grid Layout'){ ?>
		    <div class="row">
		    	<div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
				<div class="col-lg-8 col-md-8" id="wrapper">
					<div class="feature-box">
			            <div class="bradcrumbs">
			                <?php medical_hospital_the_breadcrumb(); ?>
			            </div>
					</div>
					<?php while ( have_posts() ) : the_post(); 
						get_template_part( 'template-parts/single-post');
		            endwhile; // end of the loop.
		            wp_reset_postdata();?>
		       	</div>
		    </div>
	    <?php }else {?>
		    <div class="row">
				<div class="col-lg-9 col-md-9" id="wrapper">
					<div class="feature-box">
			            <div class="bradcrumbs">
			                <?php medical_hospital_the_breadcrumb(); ?>
			            </div>
					</div>
					<?php while ( have_posts() ) : the_post(); 
						get_template_part( 'template-parts/single-post');
		            endwhile; // end of the loop.
		            wp_reset_postdata();?>
		       	</div>
				<div class="col-lg-3 col-md-3"><?php get_sidebar();?></div>
			</div>	
	    <?php }?>
        <div class="clearfix"></div>
    </main>
</div>

<?php get_footer(); ?>