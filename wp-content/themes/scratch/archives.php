<?php
/**
 * Template Name: Scratch Archive Page
 *
 * @package WordPress
 */


?>

<?php get_header(); ?>

<section id="bloglist" class="bg-light-gray">
<div class="container">

    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Blog Posts</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
    </div>


<div class="row">
<?php $query = new WP_Query(array( 'posts_per_page' => -1, 'post_status' => 'publish' )); ?>

<?php if (  $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="col-md-4 col-sm-6 portfolio-item">
        <a href="<?php the_permalink() ?>" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                    <i class="fa fa-plus fa-3x"></i>
                </div>
            </div>
            <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive">
        </a>

        <div class="portfolio-caption">
            <h4><?php the_title();?></h4>
        	<p><?php the_excerpt(); ?></p>
            <div class="blog-author">
                <div class="image"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></div>
                <div class="text">
                <p><?php echo(get_the_author()); ?></p>
                <p><?php the_time('F j'); ?></p>
                </div>
                <div style="clear:both"></div>
            </div>
        </div>


    </div>
<?php endwhile; else: ?>

    <p>Sorry, no posts were found.</p>

<?php endif; ?>

</div>




<p align="center"><?php posts_nav_link(); ?></p>



</div>



	<?php get_footer(); ?>



</section>



<!-- Portfolio Grid Section -->
<section id="bloglist" class="bg-light-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Blog Posts</h2>
				<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo get_bloginfo('template_directory'); ?>/img/portfolio/roundicons.png" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Round Icons</h4>
					<p class="text-muted">Graphic Design</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo get_bloginfo('template_directory'); ?>/img/portfolio/startup-framework.png" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Startup Framework</h4>
					<p class="text-muted">Website Design</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo get_bloginfo('template_directory'); ?>/img/portfolio/treehouse.png" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Treehouse</h4>
					<p class="text-muted">Website Design</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo get_bloginfo('template_directory'); ?>/img/portfolio/golden.png" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Golden</h4>
					<p class="text-muted">Website Design</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo get_bloginfo('template_directory'); ?>/img/portfolio/escape.png" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Escape</h4>
					<p class="text-muted">Website Design</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo get_bloginfo('template_directory'); ?>/img/portfolio/dreams.png" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Dreams</h4>
					<p class="text-muted">Website Design</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- About Section -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">About</h2>
				<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<ul class="timeline">
					<li>
						<div class="timeline-image">
							<img class="img-circle img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/about/1.jpg" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4>2009-2011</h4>
								<h4 class="subheading">Our Humble Beginnings</h4>
							</div>
							<div class="timeline-body">
								<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-image">
							<img class="img-circle img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/about/2.jpg" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4>March 2011</h4>
								<h4 class="subheading">An Agency is Born</h4>
							</div>
							<div class="timeline-body">
								<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
							</div>
						</div>
					</li>
					<li>
						<div class="timeline-image">
							<img class="img-circle img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/about/3.jpg" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4>December 2012</h4>
								<h4 class="subheading">Transition to Full Service</h4>
							</div>
							<div class="timeline-body">
								<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-image">
							<img class="img-circle img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/img/about/4.jpg" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4>July 2014</h4>
								<h4 class="subheading">Phase Two Expansion</h4>
							</div>
							<div class="timeline-body">
								<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-image">
							<h4>Be Part
								<br>Of Our
								<br>Story!</h4>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- Team Section -->
<section id="team" class="bg-light-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Our Amazing Team</h2>
				<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="team-member">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/img/team/1.jpg" class="img-responsive img-circle" alt="">
					<h4>Kay Garland</h4>
					<p class="text-muted">Lead Designer</p>
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="team-member">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/img/team/2.jpg" class="img-responsive img-circle" alt="">
					<h4>Larry Parker</h4>
					<p class="text-muted">Lead Marketer</p>
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="team-member">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/img/team/3.jpg" class="img-responsive img-circle" alt="">
					<h4>Diana Pertersen</h4>
					<p class="text-muted">Lead Developer</p>
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
			</div>
		</div>
	</div>
</section>

<!-- Clients Aside -->
<aside class="clients">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<a href="#">
					<img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
				</a>
			</div>
			<div class="col-md-3 col-sm-6">
				<a href="#">
					<img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
				</a>
			</div>
			<div class="col-md-3 col-sm-6">
				<a href="#">
					<img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
				</a>
			</div>
			<div class="col-md-3 col-sm-6">
				<a href="#">
					<img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
				</a>
			</div>
		</div>
	</div>
</aside>
