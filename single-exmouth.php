<?php
	get_header();
	?>
<section class="home-jumbotron" style="background-image: url(<?php echo get_field('background_image') ?>)">	
	<h1><?php the_title() ?></h1>
	</section>
<?php
	get_template_part('template-parts/content', 'navigation');
?>
<div class="content-wrap">
	<?php while(have_posts()) {
		the_post(); 
		the_content();	
	}
		?>
</div>