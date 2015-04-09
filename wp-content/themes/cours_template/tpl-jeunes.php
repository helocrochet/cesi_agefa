<?php
/*
Template Name: Page jeunes
*/
?>

<?php get_header(); ?>
<div class="violette">
<div class="wrap">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="post">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <p class="post-info jeunes">
        	Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
        	<?php if ( has_post_thumbnail() ) {the_post_thumbnail('thumbnail');}?>
        	<?php the_content(); ?>
        </p>
        <div class="post-content jeunes">	
        	<p><?php the_field('texte_secondaire_jeunes'); ?></p>
			<img src="<?php the_field('jeunes_img_1'); ?>">
			<img src="<?php the_field('jeunes_img_2'); ?>">
			<img src="<?php the_field('jeunes_img_3'); ?>">
			<img src="<?php the_field('jeunes_img_4'); ?>">
			<img src="<?php the_field('jeunes_img_5'); ?>">
        </div>

<!--         <div class="post-comments">
          <?php // comments_template(); ?>
        </div> -->

      </article>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
</div>
<?php get_footer(); ?>