<?php get_header();  ?>

<div class="wrapper">

    <div class="front-hero hero">

            <h1 class="front-title">You are now entering the twilight zone</h1>
            <h3> <?php the_field('about_text'); ?> </h3>
            
                <?php $employee = get_field('featured_employee'); ?>

                <section class="post-card feat-member">
                        <?php echo wp_get_attachment_image(
                            get_post_thumbnail_id($employee->ID),
                            'thumbnail'
                        );?>
                        <div class="feat-member-copy">
                            <?php if($employee->post_title): ?>
                            <h3 class="feat"><?php the_field('section_title'); ?></h3>
                            <h2><?php echo $employee->post_title; ?></h2>
                        <?php endif; ?>
                        <p><?php echo wp_trim_words($employee->post_content, 50); ?></p>
                        </div>
                        
                </section>
            
   

    </div> <!-- /,content -->
    
    <?php get_sidebar(); ?>
</div>

<?php

$image = get_field('rocket_ships');

if( $image ) { ?>
	<img class="rocket-ships" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php } ?>

<?php get_footer(); ?>