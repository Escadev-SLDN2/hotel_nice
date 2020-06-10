<?php
require('models/Chambre.php');

function listechambresAction() {
    $chambreObject = new Chambre();
    $chambres = $chambreObject->getChambres();

    $pageTitle = 'Gérer les chambres';
    require('views/admin/listechambres.php');
}


function editchambreAction() {
    $requestUri = str_replace(SITE_DIR, '', $_SERVER['REQUEST_URI']);
    $requestParams = explode('/', $requestUri);
    $chambreId = isset($requestParams[2]) ? $requestParams[2] : null;

    $chambreObject = new Chambre();
    $chambre = $chambreObject->getChambre($chambreId);

    if( isset( $_POST['editchambre'] ) ) {

        $chambreEtat        = htmlspecialchars( $_POST['txt_etat'] );
        $chambreType        = htmlspecialchars( $_POST['txt_type'] );
        $chambreTarif1      = htmlspecialchars( $_POST['txt_tarif1'] );
        $chambreTarif2      = htmlspecialchars( $_POST['txt_tarif2'] );
        $chambreTarif3      = htmlspecialchars( $_POST['txt_tarif3'] );

        $params = array(
            'etat'    => $chambreEtat,
            'type'    => $chambreType,
            'tarif1'  => $chambreTarif1,
            'tarif2'  => $chambreTarif2,
            'tarif3'  => $chambreTarif3,
        );

        $chambreObject->changeChambre( $chambreId );
        header( 'Location: ' . SITE_DIR . 'admin/editchambre/' . $chambre['id'] . '' );

    }

    $pageTitle = 'Modifier une chambre';
    require('views/admin/editchambre.php');
}
