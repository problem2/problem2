<?php
	
	$medical_hospital_theme_color = get_theme_mod('medical_hospital_theme_color');

	$custom_css = '';

	if($medical_hospital_theme_color != false){
		$custom_css .='input[type="submit"], a.button, #footer input[type="submit"], #comments input[type="submit"].submit, #comments a.comment-reply-link:hover, #sidebar .tagcloud a:hover, span.page-number,span.page-links-title, .nav-menu ul ul a, .topbar .nav li a:hover, .social-media i:hover, #contact-us, h1.page-title, h1.search-title, .textbox a , .blogbtn a , .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .inner, .footerinner .tagcloud a, .bradcrumbs a , .readbutton a, #sidebar h3::before, #wrapper h1 , .pagination .current , span.meta-nav , .title-box, #sidebar input[type="submit"]{';
			$custom_css .='background-color: '.esc_html($medical_hospital_theme_color).';';
		$custom_css .='}';
	}
	if($medical_hospital_theme_color != false){
		$custom_css .='.nav-menu ul li a:active, #sidebar ul li a:hover, .nav-menu ul ul a:hover, .logo h1 a,  #header .nav ul li a:hover, #header .nav ul li a:active, .blog-sec h3 a, .blog-sec h3 a, .main-service-box a i, .footerinner ul li a:hover, #sidebar h3 , span.post-title, .entry-content a, .nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a , .nav-menu ul li a:hover {';
			$custom_css .='color: '.esc_html($medical_hospital_theme_color).';';
		$custom_css .='}';
	}
	if($medical_hospital_theme_color != false){
		$custom_css .=' a.button, #sidebar form{';
			$custom_css .='border-color: '.esc_html($medical_hospital_theme_color).';';
		$custom_css .='}';
	}