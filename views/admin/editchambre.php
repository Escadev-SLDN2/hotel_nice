<?php require('views/admin/templates/header.php');?>   
<h1>Modifier la <?php echo $chambre['type']; ?></h1>

<div class="container">
    <section class="row">
		<div class="block-content large-block color-sky centered">
            <form method="post">
                <div class="form_row">
                    <input type="text" name="txt_etat" id="txt_etat" value="<?php echo $chambre['etat']; ?>" required />
                    <label for="txt_etat">Etat</label>
                </div>
                <div class="form_row">
                    <input type="text" name="txt_type" id="txt_type" value="<?php echo $chambre['type']; ?>" required />
                    <label for="txt_type">Type</label>
                </div>
                <div class="form_row">
                    <input type="text" name="txt_tarif1" id="txt_tarif1" value="<?php echo $chambre['tarif1']; ?>" required />
                    <label for="txt_tarif1">Tarif 1</label>
                </div>
                <div class="form_row">
                    <input type="text" name="txt_tarif2" id="txt_tarif2" value="<?php echo $chambre['tarif2']; ?>" required />
                    <label for="txt_tarif2">Tarif 2</label>
                </div>
                <div class="form_row">
                    <input type="text" name="txt_tarif3" id="txt_tarif3" value="<?php echo $chambre['tarif3']; ?>" required />
                    <label for="txt_tarif3">Tarif 3</label>
                </div>
                <div class="form_row_centered">
                    <input class="button margeless" type="submit" value="Modifier" name="editchambre"/>
                </div>
            </form>
        </div>
</section>
</div>

<?php require('views/admin/templates/footer.php');?>
