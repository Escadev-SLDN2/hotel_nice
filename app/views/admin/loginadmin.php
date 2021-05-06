<?php require('views/admin/templates/header.php');?>   
<h1>Mon compte</h1>

<div class="container">
    <section class="row">
		<div class="block-content large-block color-sky centered">
            <form method="post">
                <div class="form_row">
                    <input type="mail" name="txt_mail" id="txt_mail" placeholder="***@***.**" required />
                    <label for="txt_mail">Adresse Email :</label>
                </div>
                <div class="form_row">
                    <input type="password" name="txt_pass" id="txt_pass" placeholder="VotreMotDePasse" required />
                    <label for="txt_pass">Mot de passe :</label>
                </div>
                <div class="form_row_centered">
                    <input class="button margeless" type="submit" value="Se Connecter" name="adminconnect"/>
                </div>
            </form>
        </div>
    </section>
</div>

<?php require('views/admin/templates/footer.php');?>