<?php

function listechambresAction() {
    $pageTitle = 'Liste chambres';
    require('views/admin/listechambres.php');
}


function editchambreAction() {
    $pageTitle = 'Modifier';
    require('views/admin/editchambre.php');
}
