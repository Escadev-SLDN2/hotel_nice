<?php require('views/templates/header.php');?>

<div class="container">
    <h1>Liste des chambres</h1>

    <?php foreach ($chambres as $chambre): ?>
        <section class="chambre">
            <div class="photo">
                <img src="<?php echo SITE_DIR; ?>assets/img/<?php echo $chambre['img']; ?>" alt="<?php echo $chambre['type']; ?>" />
            </div>
            <div class="informations">
                <h2><?php echo $chambre['type']; ?></h2>
                <div class="description">
                    <?php echo $chambre['description']; ?>
                </div>
                <div class="services">
                    
                </div>
            </div>
        </section>
    <?php endforeach; ?>

</div>

<?php require('views/templates/footer.php');?>