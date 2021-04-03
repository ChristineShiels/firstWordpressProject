<?php /* Template name: Get To Know Us */ ?>

<?php get_header();  ?>

<div class="wrapper">

    <div class="team-hero hero">
        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h1> <?php the_title(); ?> </h1>

        <?php
        endwhile;
        wp_reset_postdata(  );

        // THE Leadership taxonomy QUERY
        $leadership_team = new WP_Query( array(
            'post_type' => 'team_members',
            'posts_per_page' => -1,
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'team',
                    'field' => 'slug',
                    'terms' => 'leadership'
                )
            )
        ) ); ?>

            <h2 class="tax-title">Leadership</h2>
            <div class="taxonomy">
            <?php

            // The Loop
            if( $leadership_team->have_posts() ):
                while( $leadership_team->have_posts () ):
                $leadership_team->the_post(); ?>

                <div class="post-card">
                    <div class="post-thumb">
                        <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'thumbnail' )?>
                        </a>
                    </div>
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <h3> <?php the_field('position') ?> </h3>
                </div>
                <?php
                endwhile;
                wp_reset_postdata(  );
            else : ?>
                <h2>No Team Members Found</h2>
            <?php endif ?>
            </div>

           <?php // THE Administrative taxonomy QUERY
        $administrative_team = new WP_Query( array(
            'post_type' => 'team_members',
            'posts_per_page' => -1,
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'team',
                    'field' => 'slug',
                    'terms' => 'administrative'
                )
            )
        ) ); ?>

            <h2 class="tax-title">Administrative</h2>
            <div class="taxonomy">
            <?php

            // The Loop
            if( $administrative_team->have_posts() ):
                while( $administrative_team->have_posts () ):
                $administrative_team->the_post(); ?>

                <div class="post-card">
                    <div class="post-thumb">
                        <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'thumbnail' )?>
                        </a>
                    </div>
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <h3> <?php the_field('position') ?> </h3>
                </div>
                <?php
                endwhile;
                wp_reset_postdata(  );
            else : ?>
                <h2>No Team Members Found</h2>
            <?php endif ?>
        </div>

        <?php // THE Experts taxonomy QUERY
        $experts_team = new WP_Query( array(
            'post_type' => 'team_members',
            'posts_per_page' => -1,
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'team',
                    'field' => 'slug',
                    'terms' => 'experts'
                )
            )
        ) ); ?>

            <h2 class="tax-title">Experts</h2>
            <div class="taxonomy">
            <?php

            // The Loop
            if( $experts_team->have_posts() ):
                while( $experts_team->have_posts () ):
                $experts_team->the_post(); ?>

                <div class="post-card">
                    <div class="post-thumb">
                        <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'thumbnail' )?>
                        </a>
                    </div>
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <h3> <?php the_field('position') ?> </h3>
                </div>
                <?php
                endwhile;
                wp_reset_postdata(  );
            else : ?>
                <h2>No Team Members Found</h2>
            <?php endif ?>
        </div>

        <?php // THE Practioners taxonomy QUERY
        $practitioners_team = new WP_Query( array(
            'post_type' => 'team_members',
            'posts_per_page' => -1,
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'team',
                    'field' => 'slug',
                    'terms' => 'practitioners'
                )
            )
        ) ); ?>

            <h2 class="tax-title">Practioners</h2>
            <div class="taxonomy">
            <?php

            // The Loop
            if( $practitioners_team->have_posts() ):
                while( $practitioners_team->have_posts () ):
                $practitioners_team->the_post(); ?>

                <div class="post-card">
                    <div class="post-thumb">
                        <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'thumbnail' )?>
                        </a>
                    </div>
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <h3> <?php the_field('position') ?> </h3>
                </div>
                <?php
                endwhile;
                wp_reset_postdata(  );
            else : ?>
                <h2>No Team Members Found</h2>
            <?php endif ?>
        </div>

        </div>

    </div> <!-- /,content -->


<?php get_sidebar(); ?>

</div>
<?php

$image = get_field('rocket_ships');

if( $image ) { ?>
	<img class="rocket-ships" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php } ?>

<?php get_footer(); ?>