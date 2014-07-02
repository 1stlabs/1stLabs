<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top:-2px !important;">
<head>
<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no">
<title><?php woo_title(); ?></title>
<?php woo_meta(); ?>
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>" />

<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
<script type="text/javascript">
	function init(){
		jQuery(".mobile_nav_btn").click(function(){
			jQuery('.nav_container').animate({
			    left: 0
			  }, 300, function() {
			    // Animation complete.
			});
			jQuery('#wrapper').animate({
			    left: '135'
			  }, 300, function() {
			    // Animation complete.
			});
		});
		jQuery(".close").click(function(){
			jQuery('.nav_container').animate({
			    left: '-135px'
			  }, 300, function() {
			    // Animation complete.
			});
			jQuery('#wrapper').animate({
			    left: '0'
			  }, 300, function() {
			    // Animation complete.
			});
		});
		jQuery('.up_arrow').click(function(){
	    	jQuery(window).scrollTop(jQuery("body").offset().top);
	    	return false; //Prevent Default and event bubbling.
		});

		jQuery('.menu-item > a').click(function(){
		    jQuery('html, body').animate({
		        scrollTop: jQuery( jQuery(this).attr('href') ).offset().top
		    }, 500);
		    return false;
		});
		jQuery('.menu-item > a').click(function(){
			jQuery('.active').removeClass('active');
			jQuery(this).parent().addClass('active');
		});
	}
</script>
<?php woo_head(); ?>

</head>
<body <?php body_class(); ?> onload="init()">
<div class="bg"></div>
<div id="wrapper">
	<div class="header">
		<a href="#home" class="main_logo"><img src="wp-content/themes/canvasChild/images/main_logo.png" alt=""></a>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
	</div>
	
	
	
	
	


