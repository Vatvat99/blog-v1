<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) 
	die ('Merci de ne pas lancer cette page directement.');

if (!empty($post->post_password)) { // Si l'article est protégé par un mot de passe
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // et qu'il ne correspond pas au cookie
		?>
		<p>Cet article est protégé par un mot de passe. Entrez ce mot de passe pour lire les commentaires.</p>
		<?php
		return;
	}
}
?>

<?php if ($comments) : //S'il y a des commentaires ?>

<h2 class="margeHaut"><?php comments_number('0 commentaire', '1 commentaire', '% commentaires' );?> sur "<?php the_title(); ?>"</h2>

	<?php foreach ($comments as $comment) : ?> 
            <p class="portraitVisiteur" id="comment-<?php comment_ID() ?>"><?php echo get_avatar( $comment, 32 ); ?></p> 
            <p class="infosVisiteur"><span class="large"><?php comment_author_link() ?></span> dit :<br />
            <?php //if ($comment->comment_approved == '0') : ?>
            <!--<em>Votre commentaire est en attente de modération.</em>-->
            <?php //endif; ?>
            <span class="small">le <?php comment_date('j F Y') ?> à <?php comment_time(); edit_comment_link('Editer',' - ',''); ?></span></p>
            <div class="commentaire"><?php comment_text() ?></div>
      <?php 
    endforeach; ?>

<?php else : // S'il n'y a pas de commentaire ?>

	<?php if ('open' == $post->comment_status) : ?> 
		<!-- Si les commentaires sont ouverts, mais qu'il n'y en a pas -->
        <p>Aucun commentaire.</p>
	<?php else : ?>
		<!-- Si les commentaires sont fermés -->
		<p>Les commentaires sont fermés.</p>
	<?php endif; ?>
	
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>
	<h2  id="respond" class="margeHaut">Laisser un commentaire </h2>
	
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p>Vous devez être  <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">connecté</a> pour publier un commentaire.</p>
	
	<?php else : ?>
	
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="commentaireForm">
		
			<?php if ( $user_ID ) : ?>
			
			<p>Connecté en tant que <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> - <a class="small" href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Se déconnecter du site.">Se déconnecter</a></p>
			
			<?php else : ?>
			
				<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
					<label for="author">Nom <?php if ($req) echo "(obligatoire)"; ?></label></p>
					
				<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
					<label for="email">Adresse e-mail (ne sera pas publié) <?php if ($req) echo "(obligatoire)"; ?></label></p>
					
				<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
					<label for="url">Site Web</label></p>
				
			<?php endif; ?>
			
			<!--<p><small><strong>XHTML:</strong> Vous pouvez utiliser ces tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
			<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
			
			<p><input name="submit" type="submit" class="submit" tabindex="5" value="Dites-le !" />
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
				
			<?php do_action('comment_form', $post->ID); ?>
		</form>

	<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>