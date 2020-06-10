<?php require('views/admin/templates/header.php');?> 

<div class="container">
    <h1>Liste des chambres</h1>
	<section class="row">
		<div class="block-content large-block color-sky centered">
			<table>
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
						<td><a href="<?php echo SITE_DIR; ?>admin/editchambre/<?php echo $chambre['id']; ?>"><i class="fas fa-edit"></i></a>
						<a href="<?php echo SITE_DIR; ?>admin/supprimechambre/<?php echo $chambre['id']; ?>"><i class="fas fa-trash"></i></a></td>
					</tr>
					<?php endforeach; ?>
				</tbody>

				<tfoot></tfoot>
			</table>
			<hr/>
			<a href="<?php echo SITE_DIR; ?>admin/ajoutchambre/<?php echo $chambre['id']; ?>">Ajouter un type de chambre<i class="fas fa-edit"></i></a>
		</div>
	</section>
    
</div>

<?php require('views/admin/templates/footer.php');?>

