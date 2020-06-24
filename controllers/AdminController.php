<?php
require( 'models/Type.php' );
require_once( 'models/Login.php' );

function isLogged()
{
    // On vérifie si un cookie significatif existe
    if( ! isset( $_COOKIE['isLogged'] ) ) {
        // Si non, on redirige vers le formulaire de login
        Header( 'Location: ' . SITE_DIR . 'admin/loginadmin' );
    }
}

function indexAction()
{
    isLogged();

    $pageTitle = 'Administration';
    require( 'views/admin/index.php' );
}

function loginadminAction()
{
    if( isset( $_POST['adminconnect'] ) ) {
        $login    = $_POST['txt_mail'];
        $password = $_POST['txt_pass'];

        $params = [
            'mail'     => $login,
            'password' => $password,
        ];

        $result      = Login::Admin( $params );

        if( $result ) {
            // On crée le cookie
            setcookie( 'isLogged', true, time() + 300 );
        }

        // On redirige vers le tableau de bord
        Header( 'Location: ' . SITE_DIR . 'admin' );
    }

    $pageTitle = 'Mon compte';
    require_once( 'views/admin/loginadmin.php' );
}

function logoutAction()
{
    // 1. Détruire la session
    setcookie( 'isLogged', true, time() + 0 );

    // 2. Redirection vers la page login
    Header( 'Location: ' . SITE_DIR . 'admin/loginadmin' );
}

function listetypesAction()
{
    isLogged();

    $types      = Type::getTypes();

    $pageTitle = 'Gérer les types de chambre';
    require( 'views/admin/listechambres.php' );
}

function edittypeAction()
{
    isLogged();

    $requestUri    = str_replace( SITE_DIR, '', $_SERVER['REQUEST_URI'] );
    $requestParams = explode( '/', $requestUri );
    $typeId     = isset( $requestParams[2] ) ? $requestParams[2] : null;

    $type       = Type::getType( $typeId );

    if( isset( $_POST['edittype'] ) ) {

        $typeNom         = htmlspecialchars( $_POST['txt_etat'] );
        $typeDescription = htmlspecialchars( $_POST['txt_description'] );
        $typeServices    = htmlspecialchars( $_POST['txt_services'] );
        $typeImage       = htmlspecialchars( $_POST['txt_img'] );
        $typeTarif1      = htmlspecialchars( $_POST['txt_tarif1'] );
        $typeTarif2      = htmlspecialchars( $_POST['txt_tarif2'] );
        $typeTarif3      = htmlspecialchars( $_POST['txt_tarif3'] );

        $params = array(
            'nom'         => $typeNom,
            'description' => $typeDescription,
            'services'    => $typeServices,
            'img'         => $typeImage,
            'tarif1'      => $typeTarif1,
            'tarif2'      => $typeTarif2,
            'tarif3'      => $typeTarif3,
        );

        Type::changeType( $typeId, $params );
        header( 'Location: ' . SITE_DIR . 'admin/editchambre/' . $type['id'] . '' );
    }

    $pageTitle = 'Modifier un type de chambre';
    require( 'views/admin/editchambre.php' );
}

function ajouttypeAction()
{
    isLogged();

    if( isset( $_POST['ajouttype'] ) ) {
        // 1. Récupération des données du formulaire
        $typeNom         = htmlspecialchars( $_POST['txt_etat'] );
        $typeDescription = htmlspecialchars( $_POST['txt_description'] );
        $typeServices    = htmlspecialchars( $_POST['txt_services'] );
        $typeImage       = htmlspecialchars( $_POST['txt_img'] );
        $typeTarif1      = htmlspecialchars( $_POST['txt_tarif1'] );
        $typeTarif2      = htmlspecialchars( $_POST['txt_tarif2'] );
        $typeTarif3      = htmlspecialchars( $_POST['txt_tarif3'] );

        $params = array(
            'nom'         => $typeNom,
            'description' => $typeDescription,
            'services'    => $typeServices,
            'img'         => $typeImage,
            'tarif1'      => $typeTarif1,
            'tarif2'      => $typeTarif2,
            'tarif3'      => $typeTarif3,
        );

        // 2. Appel du modèle
        Type::ajouterType( $params );

        // 3. Redirection vers la liste des chambres
        Header( 'Location: ' . SITE_DIR . 'admin/listechambres' );
    }

    $pageTitle = 'Ajouter un type de chambre';
    require( 'views/admin/ajoutchambre.php' );
}

function supprimetypeAction()
{
    isLogged();

    $requestUri    = str_replace( SITE_DIR, '', $_SERVER['REQUEST_URI'] );
    $requestParams = explode( '/', $requestUri );
    $typeId     = isset( $requestParams[2] ) ? $requestParams[2] : null;

    Type::supprimerType( $typeId );

    Header( 'Location: ' . SITE_DIR . 'admin/listechambres' );
}
