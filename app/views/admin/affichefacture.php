<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Ici se trouvent les métadonnées pour le navigateur -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <!-- Ici se trouvent les métadonnées pour le moteur de recherche (et le navigateur) -->
    <title><?php echo $pageTitle; ?> - CDA Hotel Nice</title>
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
    <link rel="stylesheet" href="/assets/css/facture.min.css" />

    <!-- Script Javascript -->
    <script src="https://kit.fontawesome.com/86d37fbec9.js" crossorigin="anonymous"></script>

</head>
<body>
<header>
        <a href="<?php echo SITE_DIR . 'admin'; ?>"><img src="/assets/img/logonice_mini2.png" height="90px" alt="CDANICE"/></a>
        <span class="title"><a href="/">CDA Hotel Nice</a></span>
</header>

<main>
    <h1><?php echo $pageTitle; ?></h1>
    <div class="container">
        <div class="row">
            <div class="block-content large-block centered color-sky">
                <p class="date">À Nice le <?php echo date('d M Y') ?> :</p>
                <div class="addresse">
                    <p><?php echo $facture['name_client']; ?></p>
                    <p><?php echo $facture['add_postale_client']; ?></p>

                </div>
                <table>
                    <thead>
                    <tr>
                        <th>Produit ou Service</th>
                        <th>Prix / unité</th>
                        <th>Quantitée</th>
                        <th>Total (TTC)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Nuit à l'Hôtel CDA Nice</td>
                        <td><?php echo $facture['tarif_type']; ?>€</td>
                        <td><?php echo $facture['nombre_de_nuits']; ?></td>
                        <td><?php echo $facture['facture_totale']; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<footer>
    <!-- Contact -->
    <div>
        <p><i class="fas fa-phone-alt"></i> : (+33) 04 20 69 69 69</p>
        <p><i class="fas fa-at"></i> : reception@cda-nice.fr</p>
        <p><i class="fas fa-map-marker-alt"></i> : 69 Prom. des Anglais, 06200 Nice</p>
    </div>

    <a href="/admin/listefactures"><button type="button">retour</button></a>

    <!-- Mentions légales -->
    <p>Mentions légales</p>
</footer>

</body>
</html>
