<?php
/**
 * Footer Template
 *
 * Here we setup all logic and XHTML that is required for the footer section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */

 global $woo_options;
?>
	

<div class="fix"></div><!--/.fix-->
<footer id="footer">
	<div id="wrapper">
		<p class="footer_address">
			Office Location: <br>
			Trimodal Terminal LP <br>
	   		204 Ivy Street <br>
	   		Weirton, WV 26062 <br>
	   		304-914-4624
	   	</p>
	   	<img class="footer_logo" src="wp-content/themes/canvasChild/images/footer_logo.png" alt="">
	   	<h4 class="first_labs">Built by <a href="http://www.1stlabs.com/" target="_blank">1st Labs</a></h4>
	</div> <!-- end wrapper -->
</footer>
<?php wp_footer(); ?>
<?php woo_foot(); ?>

</body>
</html>