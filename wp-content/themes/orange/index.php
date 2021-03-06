<?php get_header(); ?>

<div class="middle">
    <div class="corps">
        <div class="contenu">
        
        	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h2><?php the_time('j F Y') ?></h2>
                <h1><a href="<?php the_permalink() ?>" title="Lien permanent vers <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                <div class="message"><?php the_content('Lire la suite...'); ?></div>
                <p class="separation"><img src="<?php bloginfo('template_url'); ?>/images/contenu_barre.png" alt="barre" /></p>
                <p class="droite"><?php comments_number('0 commentaire','1 commentaire','% commentaires'); ?></p>
                <p class="large gras droite margeBas"><a href="<?php the_permalink() ?>#respond" title="Laisser un commentaire">Laisser un commentaire</a></p>
        
        	<?php endwhile; else : ?>
        
                <h2 class="categorie">Introuvable</h2>
                <p class="centrer">Désolé, mais ce que vous cherchez ne se trouve pas ici.</p>
            
        	<?php endif; ?>
        
        </div> <!-- fin "contenu" -->
                    
<?php get_sidebar(); ?>
<?php get_footer(); ?>