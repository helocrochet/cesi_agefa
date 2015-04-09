<?php
/*
Template Name: Page accueil
*/
?>

<?php get_header(); ?>

<section id="buttons">
	<div class="wrap">
		<ul>
			<li class="buttons-item jeunes" style="background-color:<?php the_field('couleur_bloc_1'); ?>;">
				<h3><a href="<?php the_field('lien_titre_bloc_1'); ?>"><?php the_field('titre_bloc_1'); ?></a></h3>
				<a href="<?php the_field('lien_bloc_1.1'); ?>"><?php the_field('contenu_bloc_1.1'); ?></a>
			</li>
			<li class="buttons-item communautes" style="background-image:url('<?php the_field('image_bloc_2'); ?>');">
				<h3><?php the_field('titre_bloc_2'); ?></h3>
				<?php the_field('contenu_bloc_2'); ?>
			</li>
			<li class="buttons-item entreprises">
				<h3><?php the_field('titre_bloc_3'); ?></h3>
				<?php the_field('contenu_bloc_3'); ?>
			</li>
			<li class="buttons-item acteurs">
				<h3><?php the_field('titre_bloc_4'); ?></h3>
				<?php the_field('contenu_bloc_4'); ?>
			</li>
		</ul>
	</div>
</section>



<section id="center">
	<div class="wrap">
		<div class="actualites">
			<h3>Actualites</h3>
			<ul>
				<!-- Chargement des conditions dans la variable args -->
				<?php $args = array( 'posts_per_page' => 3, 'offset' => 0, 'category_name' => 'actualites', 'orderby' => 'post_date', 'order' => 'DESC', 'post_type' => 'post', 'post_status'=> 'publish'); ?>
				
				<!-- Récupération des posts / articles avec get_posts -->
				<?php $posts_array = get_posts( $args ); ?> 

				<!-- Boucle de récupération des éléments posts -->
				<?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>

					<!-- Template de la boucle -->
					<li>
						<?php 

							/** Chargement de l'image à la une avec vérification **/
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail('thumbnail');
							}
							else {echo ('<img href="http://lorempixel.com/100/100/">');}
						?>
						<div>
							<h4><?php the_title(); ?></h4>
							<p><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>">Lire la suite >></a>
							<!-- <p><?php the_content(); ?></p> -->
						</div>
					</li>

				<!-- Fin de boucle -->
				<?php endforeach; ?>
				
				<!-- Remise à zéro -->
				<?php wp_reset_postdata();?>

			</ul>

			<a href="<?php bloginfo('home'); ?>/category/actualites/">Toutes les actualités >></a>

		</div>
		

		<div class="aside">
			<h3>Sidebar</h3>
			<ul>
				<!-- Chargement des conditions dans la variable args -->
				<?php $args = array( 'posts_per_page' => 3, 'offset' => 0, 'category_name' => 'sidebar', 'orderby' => 'post_date', 'order' => 'DESC', 'post_type' => 'post', 'post_status'=> 'publish'); ?>
				
				<!-- Récupération des posts / articles avec get_posts -->
				<?php $posts_array = get_posts( $args ); ?> 

				<!-- Boucle de récupération des éléments posts -->
				<?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>

					<!-- Template de la boucle -->
					<li>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<p><?php the_excerpt(); ?></p>
						<!-- <p><?php the_content(); ?></p> -->
					</li>

				<!-- Fin de boucle -->
				<?php endforeach; ?>
				
				<!-- Remise à zéro -->
				<?php wp_reset_postdata();?>
			</ul>
		</div>
	</div>
</section>



<section id="icones">
	<div class="wrap">
		<div class="item">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum scelerisque </p>
		</div>
		<div class="item">
			<img src="http://lorempixel.com/150/150/cats/" />
		</div>
		<div class="item">
			<img src="http://lorempixel.com/150/150/cats/" />
		</div>
		<div class="item">
			<img src="http://lorempixel.com/150/150/cats/" />
		</div>
		<div class="item">
			<img src="http://lorempixel.com/150/150/cats/" />
		</div>
	</div>
</section>





<?php get_footer(); ?>