<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Ici se trouvent les métadonnées pour le navigateur -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <!-- Ici se trouvent les métadonnées pour le moteur de recherche (et le navigateur) -->
    <title>CDA Hotel Nice - Administration</title>
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
            <a href="">R&eacute;servations</a>
            <a href="">Chambres</a>
            <a href="">Liste clients</a>
            <a href="">Mon compte</a>
        </nav>
    </header>

    <main>
        <nav class="side-nav">
            <a href="#">???</a>
            <a href="#">???</a>
            <a href="#">???</a>
        </nav>

        <div class="row">
            <section class="block md side color-sky">
                <form action="">
                    <h2>Créer un compte</h2>
                    <div class="form-field">
                        <label for="firstName">Prénom :*</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>

                    <div class="form-field">
                        <label for="lastName">Nom :*</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>

                    <div class="form-field">
                        <label for="nickName">Identifiant :*</label>
                        <input type="text" id="nickName" name="nickName" required>
                    </div>

                    <div class="form-field">
                        <label for="password">Mot de passe :*</label>
                        <input type="text" id="password" name="password" required>
                    </div>

                    <div class="form-field">
                        <label for="confirm_password">Confirmation Mot de passe :*</label>
                        <input type="text" id="confirm_password" name="confirm_password" required>
                    </div>

                    <div class="form-field">
                        <label for="email">Email :*</label>
                        <input type="text" id="email" name="email" required>
                    </div>

                    <div class="form-field">
                        <label for="confirm_email">Confirmation Email :*</label>
                        <input type="text" id="confirm_email" name="email" required>
                    </div>

                    <div class="form-field">
                        <label for="role-select">Rôle :*</label>
                        <select name="roles" id="role-select">
                            <option value="admin">Administrateur</option>
                            <option value="staff">Staff</option>
                            <option value="client">Client</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit">
                            Créer un compte
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </main>

</body>
</html>