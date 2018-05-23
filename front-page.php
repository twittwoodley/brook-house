<?php
	get_header();

?>
	<section class="home-jumbotron" style="background-image: url(<?php echo get_theme_file_uri('/img/brook-house-cover.jpg'); ?>)">
		<div class="jumbo-dark-underlay dark-underlay"></div>
		<div class="inner-jumbo">
			<div class="bar"></div>
			<img src="<?php echo get_theme_file_uri('/img/carly-logo-white.png'); ?>">
			<div class="bar"></div>
		</div>
	</section>
<?php
	get_template_part('template-parts/content', 'navigation');
?>
<!-- <div class="content-wrap">
<div class="container">
	<div class="inner-cont">
		<h3>Brook</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus cursus ipsum et tincidunt consectetur. Donec tristique dignissim lobortis. Nulla ultricies lectus eget porta posuere. Phasellus et aliquam quam. Pellentesque ut laoreet lacus. Maecenas eu viverra mauris, efficitur ultricies velit. Nullam sollicitudin enim ex, non posuere orci pulvinar eget.
</p>
	</div>
	<div class="inner-cont">
		<h3>House</h3>
		<p>Maecenas nec tortor ultricies, tempus mauris id, blandit ligula. Vivamus finibus lacus non sagittis pellentesque. Sed viverra placerat venenatis. Integer nulla erat, placerat id congue ut, pellentesque et quam. Duis imperdiet odio non sem eleifend, sed imperdiet diam sollicitudin. Integer at vulputate nisi. Suspendisse laoreet at dolor placerat mollis. 
		</p>
	</div>
	<div class="inner-cont">
		<h3>Annexe</h3>
		<p>Maecenas nec tortor ultricies, tempus mauris id, blandit ligula. Vivamus finibus lacus non sagittis pellentesque. Sed viverra placerat venenatis. Integer nulla erat, placerat id congue ut, pellentesque et quam. Duis imperdiet odio non sem eleifend, sed imperdiet diam sollicitudin. Integer at vulputate nisi. Suspendisse laoreet at dolor placerat mollis. 
		</p>
	</div>
</div>
-->
<div class="about-section">
	<div>
	<div class="about-inner">
		<div class="about-icon-container">
			<div class="about-icon"><i class="fa fa-bed"></i></div>
		</div>
		<div class="about-text-container">
			<h2>Sleep</h2>
			<p>Brook house can accomodate up to 4 people. It comes with 1 doubole bedroom, with the addition of a comfortable sofa bed situated in the lounge area.</p>
		</div>
	</div>
	<div class="about-inner">
		<div class="about-icon-container">
			<div class="about-icon"><i class="fa fa-utensils"></i></div>
		</div>
		<div class="about-text-container">
			<h2>Eat</h2>
			<p>If you fancy eating in, you can use the private, fully equiped kitchen</p>
		</div>
	</div>
		<div class="about-inner">
		<div class="about-icon-container">
			<div class="about-icon"><i class="fa fa-couch"></i></div>
		</div>
		<div class="about-text-container">
			<h2>Relax</h2>
			<p>Had a long day exploring the wonderful surroundings? Relax in your own private living room.</p>
		</div>
	</div>
	</div>
	<div class="about-inner" style="background: var(--wheat)"><div>
		<h2 style="margin-top: 43px;">A perfect getaway in a perfect location</h2>
Nullam magna velit, vestibulum et massa vel, pretium fringilla odio. Maecenas at facilisis massa. Donec a nunc blandit, scelerisque tellus et, pharetra quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed tempus est. Vestibulum vehicula tortor sem, vitae aliquam lacus fringilla at. Maecenas vel ante lacus. Nunc mollis et lectus sed consequat. Fusce iaculi.
<br><br>
Cras tempus nunc venenatis orci efficitur, ac accumsan sem ultrices. Curabitur interdum lacus ut justo sodales porta. Aliquam ante velit, consequat ut augue quis, tincidunt viverra orci. Nam cursus, ligula vitae imperdiet interdum, odio orci condimentum lectus, interdum dictum tortor mauris a tellus.
<br><br>
Praesent ut lacus dapibus dolor semper convallis eu vel mauris. Phasellus orci massa, convallis ut hendrerit in, scelerisque eget leo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut enim sem, malesuada quis augue non, mollis blandit erat. Nullam in aliquet tortor. Nulla tellus justo, eleifend ut nibh eget, fermentum ultrices odio. Mauris a dolor sed mauris accumsan viverra. 
<br><br>
Etiam a feugiat augue. Vivamus a finibus purus, id posuere turpis. Vestibulum quis elit quis lectus accumsan iaculis quis ac tellus. Nam sed urna nisi. Aenean lacinia pellentesque nibh ut cursus. Proin ac tortor sit amet erat lobortis mollis. Vestibulum bibendum vulputate nulla.<br><br></p></div>
</div>
	</div>

<!-- <div class="front-page-gallery">
	<h3>Have a look at Brook House Annexe</h3>
	<?php echo do_shortcode('[metaslider id="42"]'); ?>
</div> -->

<!--<section>
	<div id="gallery">


		<div id="bigimages">
			<div id="normal1" style="background-image: url(<?php echo get_theme_file_uri('/img/beach-ph.jpg'); ?>)">
				<div class="inner-gallery-overlay">This is the image description</div>
			</div>

			<div id="normal2" style="background-image: url(<?php echo get_theme_file_uri('/img/chalet-ph.jpg'); ?>)">
			</div>
			
			<div id="normal3" style="background-image: url(<?php echo get_theme_file_uri('/img/garden-ph.jpg'); ?>)">
			</div>

			<div id="normal4" style="background-image: url(<?php echo get_theme_file_uri('/img/kitchen-ph.jpg'); ?>)">
			</div>

			<div id="normal5" style="background-image: url(<?php echo get_theme_file_uri('/img/lounge-ph.jpg'); ?>)">
			</div>

			<div id="normal6" style="background-image: url(<?php echo get_theme_file_uri('/img/bbq-ph.jpg'); ?>)">
			</div>
			
			<div id="normal7" style="background-image: url(<?php echo get_theme_file_uri('/img/campfire-ph.jpg'); ?>)">
			</div>
			
			<div id="normal8" style="background-image: url(<?php echo get_theme_file_uri('/img/flowers-ph.jpg'); ?>)">
			</div>

		</div>
		<div id="thumbs">
			<a href="javascript: changeImage(1);"><img src="<?php echo get_theme_file_uri('/img/beach-ph.jpg'); ?>" alt="" /></a>
			<a href="javascript: changeImage(2);"><img src="<?php echo get_theme_file_uri('/img/chalet-ph.jpg'); ?>" alt="" /></a>
			<a href="javascript: changeImage(3);"><img src="<?php echo get_theme_file_uri('/img/garden-ph.jpg'); ?>" alt="" /></a>
			<a href="javascript: changeImage(4);"><img src="<?php echo get_theme_file_uri('/img/kitchen-ph.jpg'); ?>" alt="" /></a>
			<a href="javascript: changeImage(5);"><img src="<?php echo get_theme_file_uri('/img/lounge-ph.jpg'); ?>" alt="" /></a>
			<a href="javascript: changeImage(6);"><img src="<?php echo get_theme_file_uri('/img/bbq-ph.jpg'); ?>" alt="" /></a>
			<a href="javascript: changeImage(7);"><img src="<?php echo get_theme_file_uri('/img/campfire-ph.jpg'); ?>" alt="" /></a>
			<a href="javascript: changeImage(8);"><img src="<?php echo get_theme_file_uri('/img/flowers-ph.jpg'); ?>" alt="" /></a>
		</div>
	</div>
</section>-->
<div class="panels-cont">
	<h2>The Best Of Exmouth</h2>
	<div class="panels">
<?php
         $exmouthPosts = new WP_Query(array(
/*          'posts_per_page' => 3,
*/          'post_type' => array('exmouth')
         ));

         while($exmouthPosts->have_posts()) {
           $exmouthPosts->the_post(); ?>
           	<div class="panel" style="background-image:url(<?php echo get_field('background_image') ?>)">
           	<div class="dark-underlay"></div>

		      <h3><?php the_title(); ?></h3>
				<p class="panel-excerpt">
					<?php the_excerpt() ?>
					<br>
					<span class="read-more"><a href="<?php the_permalink() ?>">Read More >></a></span>
				</p>
			</div>
            <?php } wp_reset_postdata();?>	    
	  </div>
</div>
</div><!-- Content-wrap closing div -->
<section>
	<div id="gallery">
		<div id="bigimages">

<?php
	$gallery = get_post_gallery_images(48);	
	$counter = 1;
	$counter2 = 1;


	// Loop through each image in each gallery
	foreach( $gallery as $image_url ) { ?>
					<div id="normal<?php echo $counter++ ?>" style="background-image: url(<?php echo $image_url ?>);">
			</div>
		<?php
	}	?></div>
			<div id="thumbs">
	<?php foreach( $gallery as $image_url ) { ?>
			<a href="javascript: changeImage(<?php echo $counter2++ ?>);"><img src="<?php echo $image_url ?>"/></a>
		<?php
	}
 ?>
</div></div></section>
<?php
	get_footer();
?>