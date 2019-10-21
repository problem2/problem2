<?php
/**
 * The template part for displaying post
 * @package Medical Hospital
 * @subpackage medical_hospital
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?> 
<div class="col-lg-4 col-md-4">
    <article class="blog-sec">
        <div class="mainimage">
            <?php 
                if(has_post_thumbnail()) { 
                  the_post_thumbnail(); 
                }
            ?>    
        </div>
        <h3><a href="<?php echo esc_url(get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
        <div class="post-info">
            <i class="fa fa-calendar" aria-hidden="true"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><span class="entry-date"><?php the_date(); ?></span><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a>
            <i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><span class="entry-author"> <?php the_author(); ?></span><span class="screen-reader-text"><?php the_author(); ?></span></a>
            <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"> <?php comments_number( __('0 Comments','medical-hospital'), __('0 Comments','medical-hospital'), __('% Comments','medical-hospital') ); ?></span> 
        </div>
        <div class="entry-content"><p><?php the_excerpt(); ?></p></div>
        <div class="blogbtn">
            <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right" title="<?php esc_attr_e( 'Read Full', 'medical-hospital' ); ?>"><?php esc_html_e('Read Full','medical-hospital'); ?><span class="screen-reader-text"><?php esc_html_e('Read Full','medical-hospital'); ?></span></a>
        </div>
    </article>
</div>