<?php get_header(); ?>


<div id="page-top" class="index">

	<header class="inside-header">
		<div class="container">
			<div class="intro-text">
				<div class="intro-heading"><?php echo the_title(); ?></div>
			</div>
		</div>
	</header>

	<section id="blogentry">
	<?php
	/* Start the Loop */
	while ( have_posts() ) : the_post(); ?>

				<div class="blog-text"><?php echo the_content();?></div>

	<?php endwhile; // End of the loop.
	?>

	</section>

</div>

<?php get_footer(); ?>