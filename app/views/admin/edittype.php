<?php require('views/admin/templates/header.php');?>   
<h1>Modifier la <?php echo $type['nom']; ?></h1>

<div class="container">
    <section class="row">
		<div class="block-content large-block color-sky centered">
            <form method="post">
                <div class="form_row">
                    <input type="text" name="txt_nom" id="txt_nom" value="<?php echo $type['nom']; ?>" required />
                    <label for="txt_nom">Nom</label>
                </div>
                <div class="form_row">
                    <textarea name="txt_description" id="txt_description" required ><?php echo $type['description']; ?></textarea>
                    <label for="txt_description">Description</label>
                </div>
                <div class="form_row">
                    <input type="text" name="txt_services" id="txt_servoces" value="<?php echo $type['services']; ?>" required />
                    <label for="txt_services">Services</label>
                </div>
                <div class="form_row">
                    <input type="text" name="txt_img" id="txt_img" value="<?php echo $type['img']; ?>" required />
                    <label for="txt_img">Images</label>
                </div>
                <div class="form_row">
                    <input type="text" name="txt_tarif1" id="txt_tarif1" value="<?php echo $type['tarif1']; ?>" required />
                    <label for="txt_tarif1">Tarif 1</label>
                </div>
                <div class="form_row">
                    <input type="text" name="txt_tarif2" id="txt_tarif2" value="<?php echo $type['tarif2']; ?>" required />
                    <label for="txt_tarif2">Tarif 2</label>
                </div>
                <div class="form_row">
                    <input type="text" name="txt_tarif3" id="txt_tarif3" value="<?php echo $type['tarif3']; ?>" required />
                    <label for="txt_tarif3">Tarif 3</label>
                </div>
                <div class="form_row_centered">
                    <input class="button margeless" type="submit" value="Modifier" name="edittype"/>
                </div>
            </form>
        </div>
</section>
</div>

<?php require('views/admin/templates/footer.php');?>
