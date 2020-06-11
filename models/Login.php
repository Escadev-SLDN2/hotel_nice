<?php
require('models/Bdd.php');

class Login
{
    public function loginAdmin()
    {
    $bdd = new Bdd();
    $connection = $bdd->getConnection();

    }
}