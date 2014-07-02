<?php
/**
 * Index Template
 *
 * Here we setup all logic and XHTML that is required for the index template, used as both the homepage
 * and as a fallback template, if a more appropriate template file doesn't exist for a specific context.
 *
 * @package WooFramework
 * @subpackage Template
 */
	
    global $woo_options;?>
   
    <?php include("header.php"); ?>
	</div><!-- end wrapper -->
   	 <!-- #content Starts -->
   	 	<!-- hero Starts -->
 	<div class="content hero_section" id="home">
 		<h1 class="site_title">Trimodal Terminal</h1>
 		<p class="site_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu volutpat elit. Nam ac nunc bibendum, tincidunt metus quis, molestie sapie. <br><br>Vivamus placerat rhoncus nibh vel fringilla. Duis tincidunt eros non lectus faucibus, quis porta urna ultricies. </p>
 		<div class="center"><a href="#self" class="learn_more_btn">Learn More!</a></div>
 	</div>
 		<!-- About Starts -->
 	<div id="about" class="content about_section">
 		<img class="section_title" src="wp-content/themes/canvasChild/images/about_title.png" alt="">
 	
 		<p class="about_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed augue felis, commodo ac ligula id, malesuada aliquam risus. Phasellus venenatis gravida tellus, eget aliquet urna. Fusce imperdiet eu sapien hendrerit semper. Aliquam molestie tortor turpis, ut volutpat lectus lobortis et. Nam ac nunc lectus. Nullam malesuada, mi et feugiat gravida, urna ante rhoncus tortor, eu blandit lectus lacus vitae ligula. Sed pretium nisl vel interdum sagittis. Quisque congue et metus quis tincidunt. <br><br>
		Phasellus fringilla libero quam, id gravida urna congue quis. Aenean quam mauris, sollicitudin non pulvinar non, pellentesque eget neque. Nullam quis mi libero. Vivamus et odio eget magna semper iaculis. Donec tincidunt sapien sed diam scelerisque, quis dictum odio feugiat. Pellentesque at sem pretium, porta sapien ac, lacinia lacus. Curabitur imperdiet velit id condimentum scelerisque. Ut quam elit, rutrum non orci convallis, imperdiet rhoncus libero.</p>
  	</div>
  	<!-- wwo Starts -->
  	<div id="wwo" class="content wwo_section">
		<img class="section_title" src="wp-content/themes/canvasChild/images/wwo_title.png" alt="">
		<div class="wwo_content_section">
  			<h3 class="wwo_section_title">Railyard</h3>
  			<img src="wp-content/themes/canvasChild/images/tracks.jpg" alt="" class="wwo_section_img">
  			<p class="wwo_section_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac quam congue, porttitor nisi et, interdum erat. Cras ac mattis orci. Proin in pharetra mi, eget auctor nunc. Etiam id fermentum leo. Sed vehicula leo nec turpis vehicula fermentum.</p>
  		</div>
  		<div class="wwo_content_section">
  			<h3 class="wwo_section_title">Barge Facility</h3>
  			<img src="wp-content/themes/canvasChild/images/river.jpg" alt="" class="wwo_section_img">
  			<p class="wwo_section_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac quam congue, porttitor nisi et, interdum erat. Cras ac mattis orci. Proin in pharetra mi, eget auctor nunc. Etiam id fermentum leo. Sed vehicula leo nec turpis vehicula fermentum.</p>
  		</div>
  		<div class="wwo_content_section">
  			<h3 class="wwo_section_title">Highways</h3>
  			<img src="wp-content/themes/canvasChild/images/highway.jpg" alt="" class="wwo_section_img">
  			<p class="wwo_section_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac quam congue, porttitor nisi et, interdum erat. Cras ac mattis orci. Proin in pharetra mi, eget auctor nunc. Etiam id fermentum leo. Sed vehicula leo nec turpis vehicula fermentum.</p>
  		</div>
  	</div><!-- wwo ends -->

	<div id="contact" class="contact_section"><!-- contact Starts -->
    <?php if ( dynamic_sidebar('form_wa') ) : else : endif; ?>
	</div><!-- wwo ends -->
   <?php include("footer.php"); ?>