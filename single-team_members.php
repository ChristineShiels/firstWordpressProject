<?php get_header(); ?>
<div class="wrapper">
    <div class="member-hero hero">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="member-cards">
                    <?php $projectLink = get_field('favourite_project');?>
                    <div class="member-info">
                        <h1 class="member-name"><?php the_title(); ?></h1>

                        <h2 class="position"> <?php the_field('position'); ?> </h2>
                        <p class="band"> Favourite Band: <span class="member-faves"><?php the_field('favourite_band'); ?></span> </p>
                        <p class="pizza"> Favourite Pizza Topping: <span class="member-faves"><?php the_field('favourite_pizza_topping'); ?></span> </p>
                        <p class="project">Favourite Project: <span class="member-faves"><a href="<?php echo $projectLink['url']; ?>" target="_blank"><?php echo $projectLink['title']; ?></a></span> </p>
                    </div>

                    <div class="selfie">
                        <?php the_post_thumbnail( 'large' ) ?>
                    </div>
                </div>

                <div class="member-content">
                <?php the_content(); ?>
                <?php wp_link_pages(array(
                    'before' => '<div class="page-link"> Pages: ',
                    'after' => '</div>'
                )); ?>
                </div><!-- .entry-content -->

            <?php endwhile; // end of the loop. ?>

        </div> <!-- /.content -->

        <?php get_sidebar(); ?>

    </div>

<?php

$image = get_field('rocket_ships');

if( $image ) { ?>
	<img class="rocket-ships" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php } ?>

<?php get_footer(); ?>