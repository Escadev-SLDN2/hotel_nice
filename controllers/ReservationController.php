<?php
require('models/Type.php');

function indexAction() {
    
    $pageTitle = 'Réservation';
    require('views/reservation/index.php');
}