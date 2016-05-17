		<div class="sidebar">

            <div class="rubrique">

                <span class="photo"><img src="<?php bloginfo('template_url'); ?>/images/sidebar_portrait.jpg" alt="portrait" /></span>

                <h2 class="texte">A propos</h2>

                <p class="texte">Aurélien, 21 ans<br />

                Pays : France<br />

                Autres sites : <br />

                <a class="orange" href="http://www.aurelienvattant.fr/folio" title="portfolio">Mon portfolio</a><br />

                <a class="orange" href="http://www.domynocreations.deviantart.com" title="deviantArt">Mon deviantART</a></p>

                <p class="citation"><span class="quote">"</span>Je vois  ce blog comme un lieu d'échange autour de ce que j'aime et de ce que je fais. Web, illustration, bd, bla-blas, j'espère que vous y trouverez votre intérêt.<span class="quote">"</span></p>

            </div>

            <ul class="rubrique">

            	<?php wp_list_categories('show_count=1&title_li=<h2>Catégories</h2>'); ?>

            </ul>

            <div class="rubrique">

                <h2>Lecture du moment</h2>

                <p>Bernard Werber - Paradis sur mesure</p>

            </div>

            <ul class="rubrique">

            	<?php wp_list_bookmarks('title_li=<h2>Bonnes adresses</h2>'); ?>

            </ul>                        

        </div> <!-- fin "sidebar" -->

    </div> <!-- fin "corps" -->

</div> <!-- fin "middle" -->