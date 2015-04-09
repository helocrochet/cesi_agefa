<?php get_header(); ?>
<div class="wrap">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="wrap">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <div class="img_article"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('thumbnail');}?></div>
        <div class="post-content">
          <?php the_content(); ?>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
<!-- <?php // get_sidebar(); ?> -->
<?php get_footer(); ?>