<?php
	get_header();

?>
	<section class="home-jumbotron">
		<h1>Brook House<br>Annexe</h1>
	</section>
<?php
	get_template_part('template-parts/content', 'navigation');
?>

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
<div class="panels-cont">
	<h2>Why Exmouth?</h2>
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
				<p class="panel-excerpt"><?php the_excerpt() ?></p>
			</div>
            <?php } wp_reset_postdata();?>	    
	  </div>
</div>


        

<?php 
	echo do_shortcode('slide-anything id="17"');

	get_footer();
?>