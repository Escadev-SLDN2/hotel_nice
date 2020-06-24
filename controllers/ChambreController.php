<?php
require('models/Type.php');

function indexAction() {
    $types = Type::getTypes();

    $pageTitle = 'Liste des chambres';
    require('views/chambre/index.php');
}
