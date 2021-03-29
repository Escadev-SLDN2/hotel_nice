<?php require('views/admin/templates/header.php');?> 
<h1>Liste des factures</h1>

<div class="container">
	<section class="row">
		<div class="block-content large-block color-sky centered">
			<table>
				<thead>
					<tr>
						<th>id</th>
						<th>client</th>
						<th>tarif</th>
						<th>nombre de nuits</th>
						<th>total</th>
                        <th>facture</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach($factures as $facture): ?>
					<tr>
						<td><?php echo $facture['id']; ?></td>
						<td><?php echo $facture['name_client']; ?></td>
						<td><?php echo $facture['tarif_type']; ?></td>
						<td><?php echo $facture['nombre_de_nuits']; ?></td>
                        <td><?php echo $facture['facture_totale']; ?></td>
						<td>
                            <a href="<?php echo SITE_DIR; ?>admin/affichefacture/<?php echo $facture['id']; ?>"<i class="fas fa-external-link-alt"></i></a>
                        </td>
					</tr>
					<?php endforeach; ?>
				</tbody>

				<tfoot></tfoot>
			</table>
			<hr/>
		</div>
	</section>
    
</div>

<?php require('views/admin/templates/footer.php');?>

