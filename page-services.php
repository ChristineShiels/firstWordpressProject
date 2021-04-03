<?php /* Template Name: Services */ ?>

<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="wrapper">

    <div class="page-hero hero">
        <div class="content">
            <h1 class="blog-title">Services</h1>
            <div class="post-board">
                <?php
                // ACF Repeater
                if( have_rows('service_repeater') ):
                while ( have_rows('service_repeater') ) : the_row(); ?>
                <div class="post-card">
                    <div class="post-content">
                        <h2 class="entry-title">
                            <?php the_sub_field('service_title'); ?>
                        </h2>
                        <div class="generic-content">
                        <p>
                            <?php the_sub_field('service_description')?>
                        </p>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                endif;// End the loop. Whew. ?>
            </div>
        </div>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

</div>


<?php

$image = get_field('rocket_ships');

if( $image ) { ?>
	<img class="rocket-ships" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php } ?>

<?php get_footer(); ?>