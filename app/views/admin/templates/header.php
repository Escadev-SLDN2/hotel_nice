<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Ici se trouvent les métadonnées pour le navigateur -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <!-- Ici se trouvent les métadonnées pour le moteur de recherche (et le navigateur) -->
    <title>Administration - CDA Hotel Nice</title>
    <meta
        name="description"
        content="Ce petit paragraphe sera affiché dans les SERP, juste sous le titre des pages."
    />

    <!-- Ici se trouvent les liens vers les fichiers favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png"/>
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png"/>
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png"/>
	<link rel="manifest" href="/site.webmanifest"/>
	<meta name="msapplication-TileColor" content="#da532c"/>
	<meta name="theme-color" content="#ffffff"/>

	<!-- Ici se trouvent les liens vers les feuilles de styles -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu"/>
	<link rel="stylesheet" href="/assets/css/managment.min.css" />

	<!-- Script Javascript -->
	<script src="https://kit.fontawesome.com/86d37fbec9.js" crossorigin="anonymous"></script>
	<script>
		function burger() {
		  let nav = document.getElementById("mainNav");
		  if (nav.style.display === "inline") {
			 nav.style.display = "";
		  } else {
			nav.style.display = "inline";
		  }
		}
	</script>
</head>
<body>
    <header>
        <a href="<?php echo SITE_DIR . 'admin'; ?>"><img src="/assets/img/logonice_mini2.png" height="90px" alt="CDANICE"/></a>
        <span class="title"><a href="<?php echo SITE_DIR . 'admin'; ?>">Administration</a></span>
        <nav id="mainNav">
			<ul>
				<li><a href="/admin">Tableau de bord</a></li>
				<li><a href="/admin/listereservations">R&eacute;servations</a></li>
				<li><a href="/admin/listefactures">Factures</a></li>
				<li><a href="/admin/listetypes">Types de chambre</a></li>
				<li><a href="">Clients</a></li>
				<li><a href="/admin/loginadmin">Mon compte</a></li>
				<?php if( isset($_COOKIE['isLogged']) ) : ?>
                        <li><a class="bouton" href="<?php echo SITE_DIR; ?>admin/logout"><i class="fas fa-user-times"></i></a></li>
                    <?php endif; ?>
			</ul>
        </nav>
		<a href="javascript:void(0);" class="burger" onclick="burger()">
			<i class="fa fa-bars"></i>
		</a>
    </header>

    <main>