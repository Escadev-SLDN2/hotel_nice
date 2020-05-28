<?php require('views/templates/header.php'); ?>

<div class="container">
    <h1>Liste des chambres</h1>

    <?php foreach ($chambres as $chambre) : ?>
        <section class="row reverse">
            <div class="block-content large-block color-sky">
                <h2><?php echo ucfirst($chambre['type']); ?></h2>
                <div class="description">
                    <?php echo $chambre['description']; ?>
                </div>
            </div>
			<div class="block-content medium-block">
                <img src="<?php echo SITE_DIR; ?>assets/img/<?php echo $chambre['img']; ?>" alt="<?php echo $chambre['type']; ?>" />
            </div>
        </section>
    <?php endforeach; ?>

</div>

<?php require('views/templates/footer.php'); ?>