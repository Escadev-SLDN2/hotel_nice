<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Ici se trouvent les métadonnées pour le navigateur -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        

        <!-- Ici se trouvent les métadonnées pour le moteur de recherche (et le navigateur) -->
        <title>CDA Hotel Nice</title>
        <meta
            name="description"
            content="Ce petit paragraphe sera affiché dans les SERP, juste sous le titre des pages."
        />

        <!-- Ici se trouvent les liens vers les fichiers favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- Ici se trouvent les liens vers les feuilles de styles -->
        <link rel="stylesheet" href="assets/css/styles.min.css" />
    </head>

    <body>
        <!-- Header -->
        <header>
            <a href="<?= SITE_DIR?>"><img src="assets/img/logonice_mini2.png" height="90px" alt="CDANICE"/></a>
            <h1><a href="<?= SITE_DIR?>">CDA Hotel Nice</a></h1>
            <p>FR / <a href="<?= SITE_DIR?>/en">EN</a></p>
        </header>

        <main>
            <!-- Carousel -->
            <section class="carousel-container">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <img src="assets/img/hotel.jpg" width="100%" />
                            </li>
                            <li class="glide__slide">
                                <img src="assets/img/resort.jpg" width="100%" />
                            </li>
                            <li class="glide__slide">
                                <img src="assets/img/breakfast.jpg" width="100%" />
                            </li>
                        </ul>
                    </div>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">&lt;</button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">&gt;</button>
                    </div>
                </div>
            </section>

            <!-- Content -->
            <section class="row">
                <div class="block-content large-block color-sky">
                    <p>
                        La Riviera française ? Vous pensez immédiatement aux superbes stations balnéaires du 19ème siècle où se côtoyaient riches familles industrielles et aristocratie européenne, venues là pour échapper à la froidure hivernale. Un lieu mythique qui se déploie de Nice à Menton.  Séjournez à Nice et retrouvez le goût de cette époque.
                    </p>
                    <p>
                        Offrez vous un moment de répit et venez vous ressourcer dans une superbe bâtisse typique de la région, à deux pas tant bien du centre de Nice que de la mer, dans laquelle le chant des cigales et des mouettes est seul à troubler le silence.
                    </p>
                    <p>
                        Entre les repas méditerranéens cuisinés à base des produits choisis venant de circuits courts, et l&apos;aspect cocon de nos chambres, vous entrerez dans une bulle chaleureuse et confortable.
                    </p>
                    <p>
                        Notre équipe sera là, à votre écoute, et l&apos;ambiance familiale, simple et efficace de l&apos;hôtel vous offrira le repos dont vous aurez besoin, que ce soit après un rendez vous professionnel ou une longue journée de vacance sous le soleil doux de la côte.
                    </p>
                </div>
                <div class="block-content medium-block">
                    <img src="assets/img/facade.jpg" alt="facade de l'hotel">
                </div>
            </section>

            <section class="row reverse">
                <div class="block-content large-block color-sky">
                    <h2>
                        Les Incontournables
                    </h2>
                    <p>
                        Promenade des Anglais, Négresco, jardins et parcs fleuris, plage sur mer chaude, façades colorées du centre-ville… Autant de lieux à parcourir et à découvrir sous le soleil azuréen.   
                    </p>
                    <ul> 
                        <li>
                            La Promenade des Anglais
                        </li>
                        <li>
                            Le cours Saleya
                        </li>
                        <li>
                            La place Masséna
                        </li>
                        <li>
                            Musée Matisse
                        </li>
                        <li>
                            Mamac (Musée d&apos;Art Moderne et d&apos;Art Contemporain)
                        </li>
                        <li>
                            Musée National Chagall
                        </li>
                        <li>
                            Le Port de Nice
                        </li>
                    </ul>
                </div>
                <div class="block-content medium-block">
                    <img src="assets/img/promenade.jpg" alt="promenade de nice">
                </div>
            </section>

            <!-- Tarifs -->
            <section class="row">
                <div class="block-content small-block centered color-ocean">
                    <h2>Chambre simple :</h2>
                    <ul>
                        <li>
                            Novembre-Mars : 69 €/nuit
                        </li>
                        <li>
                            Avril-Octobre : 93 €/nuit
                        </li>
                        <li>
                            Juillet-Août : 120 €/nuit
                        </li>
                    </ul>
                </div>
                <div class="block-content small-block centered color-ocean">
                    <h2>Chambre double :</h2>
                    <ul>
                        <li>
                            Novembre-Mars : 71 €/nuit
                        </li>
                        <li>
                            Avril-Octobre : 105 €/nuit
                        </li>
                        <li>
                            Juillet-Août : 144 €/nuit
                        </li>
                    </ul>
                </div>
                <div class="block-content small-block centered color-ocean">
                    <h2>Chambre double avec cuisine :</h2>
                    <ul>
                        <li>
                            Novembre-Mars : 93 €/nuit
                        </li>
                        <li>
                            Avril-Octobre : 122 €/nuit
                        </li>
                        <li>
                            Juillet-Août : 152 €/nuit
                        </li>
                    </ul>
                </div>
                <div class="block-content small-block centered color-ocean">
                    <h2>Chambre familiale :</h2>
                    <ul>
                        <li>
                            Novembre-Mars : 159 €/nuit
                        </li>
                        <li>
                            Avril-Octobre : 224 €/nuit
                        </li>
                        <li>
                            Juin-Août : 304 €/nuit
                        </li>
                    </ul>
                </div>
            </section>

            <!-- Contact -->
            <section class="row">
                <div class="block-content large-block centered color-sand">
                    <p>&#128222; : (+33) 04 20 69 69 69</p> 
                    <p>&#128231; : reception@cda-nice.fr</p> 
                    <p>&#128205; : 69 Prom. des Anglais, 06200 Nice</p>
                </div>
            </section>

        </main>

        <!-- Footer -->
        <footer>
            <button type="button" id="btnConnexionOffice">Administration</button>
        </footer>

        <!-- Modal(s) -->
        <!-- Modal ConnexionOffice -->
        <div id="modConnexionOffice" class="modal">
            <div class="modal-content">
                    
                <!-- Header -->
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h6>Connexion à la page d'administration</h6>
                </div>

                <!-- Content -->
                <form action="script_php/connexion_office.php" method="POST" role="form">
                    <div class="modal-body">
                        <div class="input-container form-field">
                            <label for="mail"><i class="fa fa-user icon"></i></label>
                            <input class="input-field" type="text" placeholder="Adresse@Mail" name="mail" id="mail" required>
                        </div>
                    
                        <div class="input-container form-field">
                            <label for="psw"><i class="fa fa-key icon"></i></label>
                            <input class="input-field" type="password" placeholder="MotDePasse" name="psw" id="psw" required>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="modal-footer">
                        <button type="button" onclick="modal.style.display='none'" class="btn">Retour</button>
                        <button type="submit" class="btn">Connexion</button>
                    </div>
                </form>

            </div>
        </div>

        <!-- Script Javascript -->
        <script src="https://kit.fontawesome.com/86d37fbec9.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
        <script>
            let carousel = new Glide(".glide", {
                type: "carousel",
                startAt: 0,
                autoplay: 5000
            });
            carousel.mount();
        </script>
        <script src="assets/js/modal.js"></script>
    </body>
</html>
