<?php
/*
Template Name: Page agefa
*/
?>

<?php get_header(); ?>
<div class="blue">
<div class="wrap">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="post">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <p class="post-info">
          Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
          <img class="bandeau" src="<?php the_field('image_agefa'); ?>">
        </p>
        <div class="post-content agefa">
        	<?php the_content(); ?>
        	<p class="secondaire"><?php the_field('texte_secondaire_jeunes'); ?></p>
			<p class="paraf"><?php the_field('texte_agefa_1'); ?></p>
			<p class="paraf"><?php the_field('texte_agefa_2'); ?></p>
			<p class="paraf"><?php the_field('texte_agefa_3'); ?></p>
			<p class="paraf"><?php the_field('texte_agefa_4'); ?></p>
			<img class="bandeau" src="<?php the_field('image_secondaire_agefa'); ?>">
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