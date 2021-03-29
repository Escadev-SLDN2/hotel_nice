<?php require('views/admin/templates/header.php');?> 
<h1>Liste des chambres</h1>

<div class="container">
	<section class="row">
		<div class="block-content large-block color-sky centered">
			<table>
				<thead>
					<tr>
						<th>id</th>
						<th>nom</th>
						<th>tarif1</th>
						<th>tarif2</th>
						<th>tarif3</th>
						<th>&nbsp;</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach($types as $type): ?>
					<tr>
						<td><?php echo $type['id']; ?></td>
						<td><?php echo $type['nom']; ?></td>
						<td><?php echo $type['tarif1']; ?></td>
						<td><?php echo $type['tarif2']; ?></td>
						<td><?php echo $type['tarif3']; ?></td>
						<td><a href="<?php echo SITE_DIR; ?>admin/edittype/<?php echo $type['id']; ?>"><i class="fas fa-edit"></i></a>
						<a href="<?php echo SITE_DIR; ?>admin/supprimetype/<?php echo $type['id']; ?>"><i class="fas fa-trash"></i></a></td>
					</tr>
					<?php endforeach; ?>
				</tbody>

				<tfoot></tfoot>
			</table>
			<hr/>
			<a href="<?php echo SITE_DIR; ?>admin/ajouttype/<?php echo $type['id']; ?>"><i class="fas fa-plus"></i> Ajouter un type de chambre</a>
		</div>
	</section>
    
</div>

<?php require('views/admin/templates/footer.php');?>

