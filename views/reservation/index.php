<?php require('views/templates/header.php');?>    
    <h1>Réservation - Etape 1 sur 3</h1>
    <div class="space-between">
        <p> Date d'arrivée: *  </p>
        <label for="start"></label>
        <input type="date" id="start" name="trip-start"value="2018-07-22"min="2018-01-01" max="2018-12-31">
    </div>

    <div class="space-between">
        <p> Date de départ:*  </p>
        <label for="start"></label>
        <input type="date" id="start" name="trip-start"value="2018-07-22"min="2018-01-01" max="2018-12-31">
    </div>

    
    
    <div>
        <p class="small-margin-left">Selectionnez la chambre que vous souhaitez reserver:*</p>
    </div>

    <div class="row">
        <form>

            <input type="radio" id="simple" name="chambre" value="simple"checked>
            <label for="simple">Simple</label>
            <input type="radio" id="double" name="chambre" value="double">
            <label for="double">Double</label>
            <input type="radio" id="double+" name="chambre" value="double+">
            <label for="double+">Double avec cuisine</label>
            <input type="radio" id="familiale" name="chambre" value="familiale">
            <label for="familiale">Familiale</label>
        </form>
    </div>
    <br/>       

    <div class="small-margin-left">
        <p>
            D'après les informations que vous avez remplis, le montant de votre séjour à l'hôtel C.D.A Nice s'élèverai à :
        </p>
        <label for="name"></label>
        <input type="text" id="name" name="user_name">
        <p> € </p>
    </div>

    <div class="etat-reserv row ">
        <p>
            <a href="<?php echo SITE_DIR;?>reservationII/"class="button button_ocean" type="button" id="btnReserv">Réserver</a>
        </p>
    </div>

    <form action="/ma-page-de-traitement" method="post">
    

<?php require('views/templates/footer.php');?>