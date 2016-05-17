<?php
/*
Template Name: Contact
Modèle de page pour la page contact
*/
?>

<?php get_header(); ?>

<div class="middle">
    <div class="corps">
        <div class="contenu">
        
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <div class="message"><?php the_content('Lire la suite...'); ?></div>
                    
            <?php endwhile; endif; ?>
        <?php insert_cform('contact'); ?>
        </div> <!-- fin "contenu" -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>