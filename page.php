<?php get_header();  ?>

<div class="wrapper">

  <div class="page-hero hero">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
	<div class="post-card">
	<h1><?php the_title(); ?></h1>
      <?php the_content(  ); ?>
	</div>
      

    <?php endwhile; // end the loop?>
  </div> <!-- /,content -->

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>