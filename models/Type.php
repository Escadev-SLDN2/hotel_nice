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
        $result = $connection->prepare("UPDATE type SET etat = :etat , type = :type , tarif1 = :tarif1 , tarif2 = :tarif2 , tarif3 = :tarif3 where id = $typeId");
        $result -> execute($params);
    }

    public function ajouterType( $params )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result =
            $connection->prepare( 'INSERT INTO type(etat, type, description, services, img, info, tarif1, tarif2, tarif3) VALUES(:etat, :type, :description, :services, :img, :info, :tarif1, :tarif2, :tarif3 )' );
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
