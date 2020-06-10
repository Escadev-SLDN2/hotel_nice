<?php require('views/admin/templates/header.php');?>   

<div class="container">
    <h1>Ajouter un type de chambre</h1>

    <form method="post">
        <div class="form_row">
            <label for="txt_etat">Etat</label>
            <input type="text" name="txt_etat" id="txt_etat" required />
        </div>
        <div class="form_row">
            <label for="txt_type">Type</label>
            <input type="text" name="txt_type" id="txt_type "required />
        </div>
        <div class="form_row">
            <label for="txt_description">Description</label>
            <input type="text" name="txt_description" id="txt_description" />
        </div>
        <div class="form_row">
            <label for="txt_services">Services</label>
            <input type="text" name="txt_services" id="txt_services" />
        </div>
        <div class="form_row">
            <label for="txt_img">Image</label>
            <input type="text" name="txt_img" id="txt_img" required />
        </div>
        <div class="form_row">
            <label for="txt_infos">Informations</label>
            <input type="text" name="txt_infos" id="txt_infos" />
        </div>
        <div class="form_row">
            <label for="txt_tarif1">Tarif 1</label>
            <input type="text" name="txt_tarif1" id="txt_tarif1" required />
        </div>
        <div class="form_row">
            <label for="txt_tarif2">Tarif 2</label>
            <input type="text" name="txt_tarif2" id="txt_tarif2" required />
        </div>
        <div class="form_row">
            <label for="txt_tarif3">Tarif 3</label>
            <input type="text" name="txt_tarif3" id="txt_tarif3" required />
        </div>
        <div class="form_row">
            <input type="submit" value="Modifier" name="editchambre"/>
        </div>
    </form>
</div>

<?php require('views/admin/templates/footer.php');?>
