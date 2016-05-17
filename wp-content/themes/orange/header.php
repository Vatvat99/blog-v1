<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> >

	<head>

    		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

        	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	</head>

	<body>

    	<div class="conteneur">

    		<div class="top">

            	<div class="header">

                	<img src="<?php bloginfo('template_url'); ?>/images/header_perso.jpg" alt="personnage" />

                    <img class="titre" src="<?php bloginfo('template_url'); ?>/images/header_titre.jpg" alt="blog" />

                    <div class="menu">

                        <p>

                            <!-- Accueil -->

                            <a<?php 

                                    if (is_home()) 

                                    {

                                    echo ' class="categorieDessus" ';

                                    }?>

                                    href="<?php bloginfo('url') ?>" title="accueil">Accueil</a>

                            <img src="<?php bloginfo('template_url'); ?>/images/menu_barre.png" alt="barre" class="separation" />

                            <!-- Rubrique contact -->

                            <a<?php 

                                    if (is_page('Contact'))  

                                    { 

                                    echo ' class="categorieDessus" ';

                                    }?>

                                    href="<?php bloginfo('url') ?>/contact" title="rubrique contact">Contact</a>

                        </p>

                    </div>

                </div>

            </div>