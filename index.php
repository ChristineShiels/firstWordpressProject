<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="wrapper">

  <div class="blog-hero hero">
      <div class="content">
        <h1 class="blog-title">Chronological Posts</h1>
        <?php if ( ! have_posts() ) : ?>
        <div class="post-card">
          <article id="post-0" class="post error404 not-found">
              <h2 class="entry-title">Not Found</h2>
              <section class="entry-content">
                <p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
                <?php get_search_form(); ?>
              </section><!-- .entry-content -->
            </article><!-- #post-0 -->
          </div>
        <?php endif; // end if there are no posts ?>

        <?php // if there are posts, Start the Loop. ?>
        <div class="post-board">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="post-card">
          <div class="post-thumb">
            <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
              <?php the_post_thumbnail( 'medium' )?>
            </a>
          </div>
            <div class="post-content">
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="entry-title">
                  <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                      <?php the_title(); ?>
                  </a>
                </h2>
                <div class="authorDate">
                  <p> Posted by <?php the_author_posts_link(); ?> on <?php the_time('d M Y'); ?> </p>
                </div>
                <div class="generic-content">
                  <p>
                    <?php the_excerpt( )?>
                  </p>
                </div>
              </article><!-- #post-## -->
            </div>
          </div>
          
        <?php endwhile; // End the loop. Whew. ?>
        </div>
        

        <?php // Display navigation to next/previous pages when applicable ?>
        <?php if (  $wp_query->max_num_pages > 1 ) : ?>
        <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
        <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
        <?php endif; ?>
      </div>
  </div> <!--/.content -->

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>