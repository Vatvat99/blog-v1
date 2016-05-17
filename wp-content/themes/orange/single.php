<?php get_header(); ?>

<div class="middle">
    <div class="corps">
        <div class="contenu">
        
        
        	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        
                <h2><?php the_time('j F Y') ?></h2>
                <h1><?php the_title(); ?></h1>
                <div class="message"><?php the_content('Lire la suite...'); ?></div>
                <p class="separation"><img src="<?php bloginfo('template_url'); ?>/images/contenu_barre.png" alt="barre" /></p>
                <p class="message">Cet article à été publié dans <?php the_category(', ') ?>. Vous pouvez en suivre les commentaires par le biais du <?php post_comments_feed_link('flux RSS'); ?>.
                
                <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
                // Si les commentaires et trackbacks sont autorisés ?>
                Vous pouvez <a href="#respond" title="laisser un commentaire">laisser un commentaire</a>, ou <a href="<?php trackback_url(); ?>" rel="trackback">faire un trackback</a> depuis votre propre site.
                <?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
                    // Si seul les trackbascks sont autorisés ?>
                    Les commentaires sont fermés. Vous pouvez  <a href="<?php trackback_url(); ?> " rel="trackback">faire un trackback</a> depuis votre propre site.
                <?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
                    // Si seul les commentaires sont autorisés ?>
                    Vous pouvez <a href="#respond" title="laisser un commentaire">laisser un commentaire</a>. Les trackbacks ne sont pas autorisés.
                <?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
                    // Si ni les commentaires, ni les trackbacks sont autorisés ?>
                    Les commentaires et les trackbacks sont fermés.
                <?php } edit_post_link('Modifier cet article','','.'); ?>
                </p>
                
                <?php comments_template(); // Appel le template affichant les commentaires ?>
            
            <?php endwhile; else: ?>
	
				<p>Aucun article ne correspond à votre demande.</p>
		
			<?php endif; ?>
            
            
        </div> <!-- fin "contenu" -->
                    
<?php get_sidebar(); ?>
<?php get_footer(); ?>