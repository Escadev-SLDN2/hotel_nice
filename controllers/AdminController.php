<?php
require('models/Chambre.php');

function indexAction(){
    $pageTitle = 'Administration';
    require('views/admin/index.php');

}

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

        $chambreObject->changeChambre( $chambreId, $params );
        header( 'Location: ' . SITE_DIR . 'admin/editchambre/' . $chambre['id'] . '' );

    }

    $pageTitle = 'Modifier une chambre';
    require('views/admin/editchambre.php');
}

function ajoutchambreAction()
{
    if( isset( $_POST['ajoutchambre'] ) ) {
        // 1. Récupération des données du formulaire
        $chambreEtat         = htmlspecialchars( $_POST['txt_etat'] );
        $chambreType        = htmlspecialchars( $_POST['txt_type'] );
        $chambreDescription = htmlspecialchars( $_POST['txt_description'] );
        $chambreServices       = htmlspecialchars( $_POST['txt_services'] );
        $chambreImage        = htmlspecialchars( $_POST['txt_img'] );
        $chambreInfo        = htmlspecialchars( $_POST['txt_info'] );
        $chambreTarif1        = htmlspecialchars( $_POST['txt_tarif1'] );
        $chambreTarif2        = htmlspecialchars( $_POST['txt_tarif2'] );
        $chambreTarif3        = htmlspecialchars( $_POST['txt_tarif3'] );

        $params = array(
            'etat'      => $chambreEtat,
            'type' => $chambreType,
            'description'  => $chambreDescription,
            'services'         => $chambreServices,
            'img'         => $chambreImage,
            'info'         => $chambreInfo,
            'tarif1'         => $chambreTarif1,
            'tarif2'         => $chambreTarif2,
            'tarif3'         => $chambreTarif3,
        );

        // 2. Appel du modèle
        $chambreObject = new Chambre();
        $chambreObject->ajouterChambre( $params );

        // 3. Redirection vers la liste des chambres
        Header( 'Location: ' . SITE_DIR . 'admin/listechambres' );
    }

    $pageTitle = 'Ajouter une chambre';
    require( 'views/admin/ajoutchambre.php' );
}

function supprimechambreAction()
{
    $requestUri    = str_replace( SITE_DIR, '', $_SERVER['REQUEST_URI'] );
    $requestParams = explode( '/', $requestUri );
    $chambreId     = isset( $requestParams[2] ) ? $requestParams[2] : null;

    $chambreObject = new Chambre();
    $chambreObject->supprimerChambre( $chambreId );

    Header( 'Location: ' . SITE_DIR . 'admin/listechambres' );
}