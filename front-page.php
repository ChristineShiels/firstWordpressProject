<?php get_header();  ?>

<div class="wrapper">

    <div class="front-hero hero">

            <h1 class="front-title">You are now entering the blog zone</h1>
            <div class="front-nav">
                <div class="category-nav front-nav-link">
                    <a href="<?php echo site_url('/category'); ?>">Category</a>
                </div>
                <div class="chronology-nav front-nav-link">
                    <a href="<?php echo site_url('/blog'); ?>">Chronological</a>
                </div>
            </div>

    </div> <!-- /,content -->
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>