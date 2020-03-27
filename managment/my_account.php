<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Ici se trouvent les métadonnées pour le navigateur -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <!-- Ici se trouvent les métadonnées pour le moteur de recherche (et le navigateur) -->
    <title>CDA Hotel Nice - Administration - Mon compte</title>
    <meta
        name="description"
        content="Ce petit paragraphe sera affiché dans les SERP, juste sous le titre des pages."
    />

    <!-- Ici se trouvent les liens vers les fichiers favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
    <link rel="manifest" href="../site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Ici se trouvent les liens vers les feuilles de styles -->
    <link rel="stylesheet" href="../assets/css/managment.min.css" />
</head>
<body>
    <header>
        <a href="index.html"><img src="../assets/img/logonice_mini2.png" height="90px" alt="CDANICE"/></a>
        <h1><a href="index.html">Administration</a></h1>
        <nav>
            <a href="adm.php">Admin</a>
            <a href="">R&eacute;servations</a>
            <a href="">Chambres</a>
            <a href="">Clients</a>
            <a class="active" href="my_account.php">Mon compte</a>
        </nav>
    </header>
    <main>
        <nav class="side-nav">
            <a href="#compte">compte</a>
            <a href="#options">options</a>
        </nav>

        <section class="row" id="compte">
            <div class="block lg side color-sky">
                <form action="">
                    <h2>Modifier vos données</h2>
                    <h4 class="form-field"><u>Modifier votre adresse mail</u></h4>
                    <div class="form-field">
                        <label for="oldmail">Ancienne adresse mail :*</label>
                        <input type="text"id="oldmail" name="oldmail" required>
                    </div>

                    <div class="form-field">
                        <label for="newmail">Nouvelle adresse mail :*</label>
                        <input type="text" id="newmail" name="newmail" required>
                    </div>

                    <div class="form-field">
                        <label for="confirmmail">Confirmer nouvelle adresse :*</label>
                        <input type="text" id="confirmmail" name="confirmmail" required>
                    </div>

                    <h4 class="form-field"><u>Modifier votre mot de passe</u></h4>
                    <div class="form-field">
                        <label for="oldpassword">Ancien mot de passe :*</label>
                        <input type="text" id="oldpassword" name="oldpassword" required>
                    </div>

                    <div class="form-field">
                        <label for="newpassword">Nouveau mot de passe :*</label>
                        <input type="text" id="newpassword" name="newpassword" required>
                    </div>

                    <div class="form-field">
                        <label for="confirmpassword">Confirmer nouveau mot de passe :*</label>
                        <input type="text" id="confirmpassword" name="confirmpassword" required>
                    </div>

                    <div>
                        <button type="submit"class="button button_ocean">
                            Valider vos modifications
                        </button>
                    </div>
                </form>
            </div>
        </section>
        <section class="row" id="options">
            <div class="block lg side centeredV centeredH color-sky">
                options
            </div>
        </section>
    </main>
</body>