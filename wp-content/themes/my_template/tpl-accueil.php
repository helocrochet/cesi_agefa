<?php
/*
Template Name: Page accueil
*/
?>

<?php get_header(); ?>

<!--     		<div class="menu-shortcut">
				<div class="wrap">
    				<nav>
    					<ul>
    						<li class="jeunes"><h2>Jeunes</h2>
    							<ul>
    								<li><a href="#">Construisez votre projet professionnel</a></li>
    								<li><a href="#">Trouvez votre métier</a></li>
    							</ul>
    						</li>
    						<li class="communautes"><h2>Communautés éducatives</h2>
    							<ul>
    								<li><a href="#">Découvrez vos outils pédagogiques</a></li>
    								<li><a href="#">Workinlive</a></li>
    							</ul>
    						</li>
    						<li class="entreprises"><h2>Entreprises & Experts-comptables</h2>
    							<ul>
    								<li><a href="#">Trouver votre apprenti</a></li>
    								<li><a href="#">Gérer votre taxe d'apprentissage</a></li>
    							</ul>
    						</li>
    						<li class="acteurs"><h2>Acteurs des territoires</h2>
    							<ul>
    								<li><a href="#">Accédez à vos outils</a></li>
    								<li><a href="#">Extranet</a></li>
    							</ul>
    						</li>
    					</ul>
    				<nav>
    			</div>
    		</div> -->


            <section id="menu-shortcut">
                <div class="wrap">
                    <nav>
                        <ul>
                            <li class="jeunes" style="background-color:<?php the_field('couleur_bloc_1'); ?>;">
                                <h3><a href="<?php the_field('lien_titre_bloc_1'); ?>"><?php the_field('titre_bloc_1'); ?></a></h3>
                                <a href="<?php the_field('lien_bloc_1.1'); ?>"><?php the_field('contenu_bloc_1.1'); ?></a>
                            </li>
                            <li class="communautes" style="background-image:url('<?php the_field('image_bloc_2'); ?>');">
                                <h3><?php the_field('titre_bloc_2'); ?></h3>
                                <?php the_field('contenu_bloc_2'); ?>
                            </li>
                            <li class="entreprises">
                                <h3><?php the_field('titre_bloc_3'); ?></h3>
                                <?php the_field('contenu_bloc_3'); ?>
                            </li>
                            <li class="acteurs">
                                <h3><?php the_field('titre_bloc_4'); ?></h3>
                                <?php the_field('contenu_bloc_4'); ?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>


            <div class="wrap">
    		  <div class="actualites">	
			     <h3>Actualités</h3>
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
    		  <aside class="newsletter">
                <h3>Newsletter</h3>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
              </aside>
    		  <aside class="flux_sociaux">
				<h3>Flux sociaux</h3>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
    		  </aside>
    		</div>

<?php get_footer(); ?>