<?php
require('models/Chambre.php');

function indexAction() {
    $typeObject = new Type();
    $chambres = $typeObject->getTypes();

    $pageTitle = 'Liste des chambres';
    require('views/chambre/index.php');
}
