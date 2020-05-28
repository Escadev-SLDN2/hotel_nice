<?php require('views/templates/header.php');?>

<div class="container">
    <h1>Liste des chambres</h1>

    <table width="100%">
        <thead>
            <tr>
                <th>id</th>
                <th>état</th>
                <th>type</th>
                <th>tarif1</th>
                <th>tarif2</th>
                <th>tarif3</th>
                <th>&nbsp;</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($chambres as $chambre): ?>
            <tr>
                <td><?php echo $chambre['id']; ?></td>
                <td><?php echo $chambre['etat']; ?></td>
                <td><?php echo $chambre['type']; ?></td>
                <td><?php echo $chambre['tarif1']; ?></td>
                <td><?php echo $chambre['tarif2']; ?></td>
                <td><?php echo $chambre['tarif3']; ?></td>
                <td><a href="<?php echo SITE_DIR; ?>admin/editchambre/<?php echo $chambre['id']; ?>"><i class="fas fa-edit"></i></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

        <tfoot></tfoot>
    </table>
</div>

<?php require('views/templates/footer.php');?>