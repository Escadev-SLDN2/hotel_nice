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
            <a href="index_en.php"><img src="assets/img/logonice_mini2.png" height="90px" alt="CDANICE"/></a>
            <h1><a href="index_en.php">CDA Hotel Nice</a></h1>
            <p><a href="index.php">FR</a> / EN</p>
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
                        The french riviera ? This word immediately reminde you the wonderfull 19th century’s seaside stations, where lived the wealthy industrial families that came here to escape the winter’s bite. Come here in Nice and get a taste of these times. 
                    </p>
                    <p>
                    Get yourself a a break and come rest in a beautifull typical house, a few steps away of the warm 
                    mediterranean sea and the center of Nice, where seagulls and cicadas will be the only one breaking the silence.
                    </p>
                    <p>
                        With our delicious mediterranean meals, prepared with local selected food, and the cocooning aspect of our rooms, you will enter here in a warm and comfortable bubble.
                    </p>
                    <p>
                        Our team will be here for you, the ambiance of the hostel, simple and intimate will provide you all the rest you need wether it be after a job meeting or a long vacation day under the sweet shoreline sun.
                    </p>
                </div>
                <div class="block-content medium-block">
                    <img src="assets/img/facade.jpg" alt="facade de l'hotel">
                </div>
            </section>

            <section class="row reverse">
                <div class="block-content large-block color-sky">
                    <h2>
                        The classics
                    </h2>
                    <p>
                        Promenade des Anglais, Négresco, flowering gardens and parcs, warm clear sea, colorful typical buildings… Many places to discover and visit under the French riviera sun.
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
                            Matisse museum
                        </li>
                        <li>
                            Mamac (Modern art museum)
                        </li>
                        <li>
                            National Chagall museum
                        </li>
                        <li>
                            Nice's harbor
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
                    <h2>Simple Room :</h2>
                    <ul>
                        <li>
                            November-March : 69 €/night
                        </li>
                        <li>
                            April-October : 93 €/night
                        </li>
                        <li>
                            Jully-August : 120 €/night
                        </li>
                    </ul>
                </div>
                <div class="block-content small-block centered color-ocean">
                    <h2>Double Room :</h2>
                    <ul>
                        <li>
                            November-March : 71 €/night
                        </li>
                        <li>
                            April-October : 105 €/night
                        </li>
                        <li>
                            Jully-August : 144 €/night
                        </li>
                    </ul>
                </div>
                <div class="block-content small-block centered color-ocean">
                    <h2>Double Room with kitchen :</h2>
                    <ul>
                        <li>
                            November-March : 93 €/night
                        </li>
                        <li>
                            April-October : 122 €/night
                        </li>
                        <li>
                            Jully-August : 152 €/night
                        </li>
                    </ul>
                </div>
                <div class="block-content small-block centered color-ocean">
                    <h2>Family Room :</h2>
                    <ul>
                        <li>
                            November-March : 159 €/night
                        </li>
                        <li>
                            April-October : 224 €/night
                        </li>
                        <li>
                            June-August : 304 €/night
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
                <div class="modal-body">
                    <form action="/connexion_office.php">
                        <div class="input-container form-field">
                            <label for="usrnm"><i class="fa fa-user icon"></i></label>
                            <input class="input-field" type="text" placeholder="Username" name="usrnm" id="usrnm" required>
                        </div>
                    
                        <div class="input-container form-field">
                            <label for="psw"><i class="fa fa-key icon"></i></label>
                            <input class="input-field" type="password" placeholder="YourPassword" name="psw" id="psw" required>
                        </div>
                    </form>
                </div>

                <!-- Footer -->
                <div class="modal-footer">
                    <button type="button" onclick="modal.style.display='none'" class="btn">Return</button>
                    <button type="submit" class="btn">Log In</button>
                </div>

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