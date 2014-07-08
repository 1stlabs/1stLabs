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
 	<div class="content hero_section" id="about">
   		<p class="site_description">A brief site description will go here.</p>
      <div class="location_section">
        <img src="wp-content/themes/canvasChild/images/location_icon.png" alt="" class="location_icon">
        <p class="address">
          Terminal Location: <br>
          Trimodal Terminal LP <br>
          600 Veterans Drive <br>
          Follansbee, WV 26037 <br>
          304-914-4624
        </p>
      </div>
 	</div>
 		<!-- About Starts -->
 	<div class="content about_section">
 		<img class="section_title" src="wp-content/themes/canvasChild/images/about_title.png" alt="">
 		<p class="about_para">Located in the heart of the Utica and Marcellus Shale plays, Trimodal Terminal is an 80 acre riverfront industrial community in Follansbee, West Virginia.  We offer material transfer services by barge, rail, and highway within a single site on the Ohio River.  The substantial acreage of vacant land is available for sale or lease to build industrial and warehouse facilities that require on-site barge and rail access.</p>
  </div>
  	<!-- services Starts -->
  <div id="services" class="content services_section">
		  <img class="section_title" src="wp-content/themes/canvasChild/images/services_title.png" alt="">
		  <div class="services_content_section">
  			<h3 class="services_section_title">Rail</h3>
  			<img src="wp-content/themes/canvasChild/images/tracks.jpg" alt="" class="services_section_img">
  			<p class="services_section_para">Trimodal terminal has over 20,000 feet of rail lines on-site served by Norfolk Southern (NS Location RO21 DL4).  We offer transloading services between truck and rail and can move railcars within our site.  Rail lines can also be included within a development site for businesses that require an exclusive rail line within their facility.  Where the existing rail configuration is inadequate, we will invest in the site to expand rail infrastructure in connection with long term build to suit projects.</p>
  		</div>
  		<div class="services_content_section">
  			<h3 class="services_section_title">Barge</h3>
  			<img src="wp-content/themes/canvasChild/images/river.jpg" alt="" class="services_section_img">
  			<p class="services_section_para">Located at Ohio River Mile 70.0, Trimodal terminal has a barge facility that includes 3,000 feet of riverfront and 6 barge mooring clusters.  Our U.S. Army Corps of Engineers barge facility permit allows us to load and unload material and to stage barges 3-wide along the full length of our riverfront, providing capacity to stage over 40 barges.</p>
  		</div>
  		<div class="services_content_section">
  			<h3 class="services_section_title">Highway</h3>
  			<img src="wp-content/themes/canvasChild/images/highway.jpg" alt="" class="services_section_img">
  			<p class="services_section_para">By road, Trimodal Terminal is located along West Virginia Route 2, just 3 miles south of U.S. Route 22 allowing our customers and resident businesses to be in Ohio or Pennsylvania in less than 10 minutes.  We have a state certified truck scale on site.  We are 30 minutes from Pittsburgh International Airport and 19 miles from the Pennsylvania Turnpike “Southern Beltway,” which cross through Washington County, Pennsylvania to connect Route 22 with Interstates 79 just north of Southpointe in Canonsburg, PA.  The Southern Beltway is scheduled for completion in 2019.</p>
  		</div>
  </div><!-- services ends -->
  <div id="realEstate" class="content real_estate_section">
      <img class="section_title" src="wp-content/themes/canvasChild/images/real_estate_title.png" alt="">
        <p class="real_estate_para">Trimodal Terminal offers the majority of its property for rent to companies with industrial, material transfer, and storage/warehouse needs that require barge or rail access.  The minimum lot size offered is 3 acres, and we can accommodate businesses that need more than 20 contiguous acres.  All businesses at Trimodal Terminal have access on a fee per use basis to our barge facility, rail lines, and truck scale.  Crane services can be arranged through a third party that is located on our site.  The property has not been subdivided and lots have not been pre-configured, giving us the flexibility to work with businesses to configure a site that is optimal for their operations.  This flexibility includes our willingness to include rail lines within leased property for the tenant’s exclusive use, undertake build to suit projects, and to add or relocate rail lines when necessary to accommodate a tenant’s site configuration requirements. <br><br>

        For companies that do not require barge or rail access, Trimodal Terminal has over 40 acres of vacant shovel ready land at another location in Follansbee, just a ¼ mile from our riverfront location.  As needed, tenants at this site can arrange for use of Trimodal’s barge facility, transloading services, and truck scale.  This site is available for businesses needing as few as 3 acres and as much as 40 acres. <br><br>

        The City of Follansbee has no zoning restrictions on the property and the building permit process is extremely streamlined and business friendly.  We also have established close working relationships with the State of West Virginia Development Office, Economic Development Authority, and the Business Development Corporation of the Northern Panhandle, who collaborate with us to ensure that Trimodal Terminal provides the best foundation for your company’s success in the Ohio River Valley. <br><br>
        </p>
  </div>
	<div id="contact" class="contact_section"><!-- contact Starts -->
    <?php if ( dynamic_sidebar('form_wa') ) : else : endif; ?>
	</div><!-- services ends -->
   <?php include("footer.php"); ?>