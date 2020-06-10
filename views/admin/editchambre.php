<?php require('views/admin/templates/header.php');?>   

<div class="container">
    <h1>Modifier la <?php echo $chambre['type']; ?></h1>

    <form method="post">
        <div class="form_row">
            <label for="txt_etat">Etat</label>
            <input type="text" name="txt_etat" id="txt_etat" value="<?php echo $chambre['etat']; ?>" required />
        </div>
        <div class="form_row">
            <label for="txt_type">Type</label>
            <input type="text" name="txt_type" id="txt_type" value="<?php echo $chambre['type']; ?>" required />
        </div>
        <div class="form_row">
            <label for="txt_tarif1">Tarif 1</label>
            <input type="text" name="txt_tarif1" id="txt_tarif1" value="<?php echo $chambre['tarif1']; ?>" required />
        </div>
        <div class="form_row">
            <label for="txt_tarif2">Tarif 2</label>
            <input type="text" name="txt_tarif2" id="txt_tarif2" value="<?php echo $chambre['tarif2']; ?>" required />
        </div>
        <div class="form_row">
            <label for="txt_tarif3">Tarif 3</label>
            <input type="text" name="txt_tarif3" id="txt_tarif3" value="<?php echo $chambre['tarif3']; ?>" required />
        </div>
        <div class="form_row">
            <input type="submit" value="Modifier" name="editchambre"/>
        </div>
    </form>
</div>

<?php require('views/admin/templates/footer.php');?>
