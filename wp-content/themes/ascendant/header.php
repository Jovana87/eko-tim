<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
	
	<script src="https://use.fontawesome.com/dd4960d31b.js"></script>
	
	 <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
	
	
	<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
	
	
	<script>
	$("#footer").html("EkoTim 2018");
	</script>
	
	
	
</head>

<body <?php body_class(); ?>>
	<div class="outer" id="top">
		<?php do_action('cpotheme_before_wrapper'); ?>
		<div class="wrapper">
			<div id="topbar" class="topbar">
				<div class="container">
					<?php do_action('cpotheme_top'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php

			$class = '';
			if ( cpotheme_get_option('transparent_header') ) {
				if(is_front_page() || cpotheme_get_option('slider_always') === true){
					$query_args = array(
							'post_type' 		=> 'cpo_slide',
							'posts_per_page'	=> -1,
							'order' 			=>'ASC',
							'orderby' 			=> 'menu_order'
						);
					$query = new WP_Query( $query_args );
					if ( $query->have_posts() ) {
						$class = ' header-with-slider';
					}
					wp_reset_postdata();
				}
				if(has_nav_menu('top_menu')) {
					$class .= ' with-top-menu';
				}
			}

			?>
			<header id="header" class="header<?php echo $class ?>">
				<div class="container">
					<?php do_action('cpotheme_header'); ?>
					<div class='clear'></div>
				</div>
			</header>
			<?php do_action('cpotheme_before_main'); ?>
			<div class="clear"></div>
