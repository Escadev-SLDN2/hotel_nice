<?php require('views/templates/header.php');?>
<h1>Liste des chambres</h1>
<ul>
    <?php foreach ($chambres as $chambre): ?>
        <li><?php echo $chambre['type']; ?></li>
    <?php endforeach; ?>
</ul>
<?php require('views/templates/footer.php');?>
