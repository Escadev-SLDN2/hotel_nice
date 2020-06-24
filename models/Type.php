<?php
require('models/Bdd.php');


class Type
{
    public function getTypes()
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM type ORDER BY id ASC');
        return $result ? $result->fetchAll(PDO::FETCH_ASSOC) : null;
    }

    public function getType($typeId)
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM type where id = ' . $typeId);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }

    public function changeType($typeId, $params)
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->prepare("UPDATE type SET nom = :nom , description = :description , tarif1 = :tarif1 , tarif2 = :tarif2 , tarif3 = :tarif3 , services = :services , img = :img where id = $typeId");
        $result -> execute($params);
    }

    public function ajouterType( $params )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result =
            $connection->prepare( 'INSERT INTO type(nom, description, tarif1, tarif2, tarif3, services, img) VALUES( :nom, :description, :tarif1, :tarif2, :tarif3, :services, :img )' );
        $result->execute( $params );
    }

    public function supprimerType( $id )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result = $connection->prepare( 'DELETE FROM type WHERE id = :id' );
        $result->execute( array(
            'id' => $id,
        ) );
    }
}
