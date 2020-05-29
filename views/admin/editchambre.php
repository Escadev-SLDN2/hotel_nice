<?php require('views/admin/templates/header.php');?>   

<div class="container">
    <h1>Modifier la <?php echo $chambre['type']; ?></h1>

    <form method="post">
        <div class="form_row">
            <label for="txt_type">Type</label>
            <input type="text" name="txt_type" id="txt_type" value="<?php echo $chambre['type']; ?>" required />
        </div>
        <div class="form_row">
            <input type="submit" value="Modifier" />
        </div>
    </form>
</div>

<?php require('views/admin/templates/footer.php');?>
