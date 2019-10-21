<?php
/**
 * The Header for our theme.
 * @package Medical Hospital
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'medical-hospital' ) ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header role="banner">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'medical-hospital' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to Content', 'medical-hospital' ); ?></span></a>
    <div id="header">
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="toggle-menu responsive-menu">
                <button onclick="topMenu_open()" role="tab"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','medical-hospital'); ?></span></button>
              </div>
              <div id="sidelong-topmenu" class="nav sidebar">
                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'medical-hospital' ); ?>">
                  <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="topMenu_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','medical-hospital'); ?></span></a>
                  <?php 
                    wp_nav_menu( array( 
                      'theme_location' => 'topmenu',
                      'container_class' => 'main-menu-navigation clearfix' ,
                      'menu_class' => 'clearfix',
                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                      'fallback_cb' => 'wp_page_menu',
                    ) ); 
                  ?>
                </nav>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="social-media">        
                <?php if( get_theme_mod( 'medical_hospital_facebook') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'medical_hospital_facebook','' ) ); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook', 'medical-hospital' ); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'medical_hospital_twitter') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'medical_hospital_twitter','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter', 'medical-hospital' ); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'medical_hospital_google' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'medical_hospital_google','' ) ); ?>"><i class="fab fa-google-plus-g"></i><span class="screen-reader-text"><?php esc_html_e( 'Google Plus', 'medical-hospital' ); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'medical_hospital_pintrest') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'medical_hospital_pintrest','' ) ); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest', 'medical-hospital' ); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'medical_hospital_insta') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'medical_hospital_insta','' ) ); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram', 'medical-hospital' ); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'medical_hospital_linkdin') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'medical_hospital_linkdin','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin', 'medical-hospital' ); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'medical_hospital_youtube') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'medical_hospital_youtube','' ) ); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube', 'medical-hospital' ); ?></span></a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="menu-sec">
        <div class="container">
          <div class="row">
            <div class="logo col-lg-3 col-md-3">
              <?php if( has_custom_logo() ){ medical_hospital_the_custom_logo();
               }else{ ?>
              <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) : ?> 
                <p class="site-description"><?php echo esc_html($description); ?></p>       
              <?php endif; }?>
            </div>
            <div class="menubox col-lg-8 col-md-8">
              <div class="toggle-menu responsive-menu">
                <button onclick="resMenu_open()" role="tab"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','medical-hospital'); ?></span></button>
              </div>
              <div id="sidelong-menu" class="nav sidebar">
                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'medical-hospital' ); ?>">
                  <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="resMenu_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','medical-hospital'); ?></span></a>
                  <?php 
                    wp_nav_menu( array( 
                      'theme_location' => 'primary',
                      'container_class' => 'main-menu-navigation clearfix' ,
                      'menu_class' => 'clearfix',
                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                      'fallback_cb' => 'wp_page_menu',
                    ) ); 
                  ?>
                </nav>
              </div>
            </div>
            <div class="search-box col-lg-1 col-md-1">
              <span><i class="fas fa-search"></i></span>
            </div>
          </div>
          <div class="serach_outer">
            <div class="closepop"><i class="far fa-window-close"></i></div>
            <div class="serach_inner">
              <?php get_search_form(); ?>
            </div>
          </div>      
        </div>
      </div>
    </div>   
  </header>