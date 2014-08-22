<?php
/* ------------------------------------------------------------------------- *
 *  Custom functions
/* ------------------------------------------------------------------------- */
	
*  Site name/logo
/* ------------------------------------ */
if ( ! function_exists( 'alx_site_title' ) ) {
	function alx_site_title() {
		$link = '<a href="'.home_url('/').'" rel="home"><img src="'.ot_get_option('custom-logo').'" alt="'.get_bloginfo('name').'">'.get_bloginfo('name').'</a>';
		
		if ( is_front_page() || is_home() ) {
			$sitename = '<h1 class="site-title">'.$link.'</h1>'."\n";
		} else {
			$sitename = '<p class="site-title">'.$link.'</p>'."\n";
		}
		
		return $sitename;
	}
	
}