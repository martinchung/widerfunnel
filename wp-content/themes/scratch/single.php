<?php get_header(); ?>


<div id="page-top" class="index">

	<header class="inside-header">
		<div class="container">
			<div class="intro-text">
				<div class="intro-heading">Blog</div>
			</div>
		</div>
	</header>



	<section id="blogentry">
	<div class="container">
	<?php
	/* Start the Loop */
	while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="blog-avatar"><img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), array('size'=>'64')); ?>" class="img-circle"></div>
					<div class="blog-meta">
						<p class="blog-author"><?php echo(get_the_author_meta('display_name')); ?></p>
						<p><?php echo(get_the_author_meta('description')); ?></p>
						<p><?php the_time('F j'); ?></p>
					</div>
					<div style="clear:both"></div>
						<h2><?php echo the_title();?></h2>
				</div>
				<div class="center-block">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="center-block blog-image img-responsive">
				</div>
				<div class="col-sm-8 col-sm-offset-2">
				<div class="blog-text"><?php echo the_content();?></div>
<!--				<div class="blog-comments">
					<?php /*if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; */?>
				</div>-->
				</div>
			</div>
		</div>

	<?php endwhile; // End of the loop.
	?>

	</div>
	</section>

</div>

<?php get_footer(); ?>