<?php
/**
 * Template Name: Scratch Archive Page
 *
 * @package WordPress
 */


?>

<?php get_header(); ?>

<div id="page-top" class="index">

<header class="inside-header">
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading">Blog</div>
        </div>
    </div>
</header>


<section id="bloglist">
<div class="container">

<?php $query = new WP_Query(array( 'posts_per_page' => -1, 'post_status' => 'publish' )); ?>

<?php $postcount = 0;   // set up counter for 3 posts per bootstrap grid row ?>

<?php if (  $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

    <?php
        if ($postcount == 0) {
	        echo '<div class="row">';
        }
        ?>

    <div class="col-md-4 col-sm-6 blog-item">
        <a href="<?php the_permalink() ?>" class="blog-link" data-toggle="modal">
<!--            <div class="portfolio-hover">-->
<!--                <div class="portfolio-hover-content">-->
<!--                    <i class="fa fa-search fa-3x"></i>-->
<!--                </div>-->
<!--            </div>-->
            <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive img-border">

        <div class="blog-caption">
            <h4><?php the_title();?></h4>
        	<p><?php the_excerpt(); ?></p>
            <div class="blog-author">
                <div class="image"><img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), array('size'=>'32')); ?>" class="img-circle"></div>
                <div class="text">
                    <p><?php echo(get_the_author_meta('display_name')); ?></p>
                    <p><?php the_time('F j'); ?></p>
                </div>
                <div style="clear:both"></div>
            </div>
        </div>
        </a>
    </div>

	    <?php
	    if ($postcount >= 2) {
		    echo '</div>';
		    $postcount = 0;
	    }
	    else {
	        $postcount++;
        }
	    ?>



<?php endwhile; else: ?>

    <p>Sorry, no posts were found.</p>

<?php endif; ?>

</div>




<p align="center"><?php posts_nav_link(); ?></p>


</section>

</div>




<?php get_footer(); ?>