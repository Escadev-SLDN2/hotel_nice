<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Ici se trouvent les métadonnées pour le navigateur -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        

        <!-- Ici se trouvent les métadonnées pour le moteur de recherche (et le navigateur) -->
        <title><?php if(!empty($pageTitle)) echo $pageTitle.' - '; ?>CDA Hotel Nice</title>
        <meta
            name="description"
            content="Ce petit paragraphe sera affiché dans les SERP, juste sous le titre des pages."
        />

        <!-- Ici se trouvent les liens vers les fichiers favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo SITE_DIR;?>apple-touch-icon.png"/>
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo SITE_DIR;?>favicon-32x32.png"/>
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo SITE_DIR;?>favicon-16x16.png"/>
        <link rel="manifest" href="<?php echo SITE_DIR;?>site.webmanifest"/>
        <meta name="msapplication-TileColor" content="#da532c"/>
        <meta name="theme-color" content="#ffffff"/>

        <!-- Ici se trouvent les liens vers les feuilles de styles -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu"/>
        <link rel="stylesheet" href="<?php echo SITE_DIR;?>assets/css/styles.min.css" />
        
    </head>

    <body>
		<header>
            <a href="<?php echo SITE_DIR;?>"><img src="<?php echo SITE_DIR;?>assets/img/logonice_mini2.png" height="90px" alt="CDANICE"/></a>
            <h1><a href="<?php echo SITE_DIR;?>">CDA Hotel Nice</a></h1>
            <nav>
                <ul><li><a href="<?php echo SITE_DIR;?>">Accueil</a></li></ul>
                <ul><li><a href="<?php echo SITE_DIR;?>chambre/">Chambres</a></li></ul>
                <ul><li><a href="<?php echo SITE_DIR;?>services/">Services</a></li></ul>
                <ul><li><a href="<?php echo SITE_DIR;?>tourisme/">Tourisme</a></li></ul>
                <ul><li><a href="<?php echo SITE_DIR;?>contact/acces">Nous trouver</a></li></ul>
                <ul><li><a href="<?php echo SITE_DIR;?>contact/contact">Nous contacter</a></li></ul>
            </nav>
            <p>FR / <a href="<?php echo SITE_DIR;?>en">EN</a></p>
        </header>
        
		<main>