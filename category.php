<?php get_header(); ?>

<div class="wrapper">
  <div class="content">
    <h1>Category Archives: <?php single_cat_title(); ?></h1>
    <?php
      $category_description = category_description();
      if ( ! empty( $category_description ) )
        echo '' . $category_description . '';
        get_template_part( 'loop', 'category' );
      ?>

  </div> <!-- /.content -->

  <?php get_sidebar(); ?>

</div>
<?php

$image = get_field('rocket_ships');

if( $image ) { ?>
	<img class="rocket-ships" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php } ?>

<?php get_footer(); ?>