<?php require('views/admin/templates/header.php');?> 
<h1>Liste des Réservations</h1>

<div class="container">
	<section class="row">
		<div class="block-content large-block color-sky centered">
			<table>
				<thead>
					<tr>
						<th>id</th>
						<th>client</th>
						<th>chambre</th>
						<th>date d'arrivée</th>
						<th>date de départ</th>
                        <th><label id="termine" >terminé ?</label></th>
                        <th>&nbsp;</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach($reservations as $reserv): ?>
					<tr>
						<td><?php echo $reserv['id']; ?></td>
						<td><?php echo $clients[$reserv['id_client']-1]['name']; ?></td>
						<td><?php echo $reserv['id_chambre']; ?></td>
						<td><?php echo $reserv['date_debut']; ?></td>
						<td><?php echo $reserv['date_fin']; ?>
                        <td>
                            <input type="checkbox" aria-labelledby="termine" id="<?php echo $reserv['id'] ?>" onclick="checkbox(this.id, this.checked)">
                        </td>
						<td>
                            <a href="<?php echo SITE_DIR; ?>admin/editreservations/<?php echo $reserv['id']; ?>"><i class="fas fa-edit"></i></a>
						    <a href="<?php echo SITE_DIR; ?>admin/supprimereservations/<?php echo $reserv['id']; ?>"><i class="fas fa-trash"></i></a>
                        </td>
					</tr>
					<?php endforeach; ?>
				</tbody>

				<tfoot></tfoot>
			</table>
			<hr/>
			<a href="<?php echo SITE_DIR; ?>admin/ajoutreservations/<?php echo $reserv['id']; ?>"><i class="fas fa-plus"></i> Ajouter un reservations de chambre</a>
		</div>
	</section>
    
</div>
<script>
    function checkbox(checkboxId, isChecked) {
        if (isChecked){
            console.log(checkboxId+" "+isChecked);
        }

    }
</script>
<?php require('views/admin/templates/footer.php');?>

