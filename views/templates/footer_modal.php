        </main>

        <!-- Footer -->
        <footer>
            <!-- Contact -->
            <div>
                <p><i class="fas fa-phone-alt"></i> : (+33) 04 20 69 69 69</p> 
                <p><i class="fas fa-at"></i> : reception@cda-nice.fr</p> 
                <p><i class="fas fa-map-marker-alt"></i> : 69 Prom. des Anglais, 06200 Nice</p>
            </div>

            <button type="button" id="btnConnexionOffice">Administration</button>

            <!-- Mentions légales -->
            <p>Mentions légales</p>
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
        <script src="<?php echo SITE_DIR;?>assets/js/modal.js"></script>
    </body>
</html>