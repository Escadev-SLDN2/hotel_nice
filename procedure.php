<?php

// TRIGGER "AFTER INSERT" - TABLE reservation
CREATE TRIGGER nombreNuits
AFTER INSERT ON reservation
FOR EACH row
UPDATE reservation SET nombre_de_nuits=(SELECT Datediff( date_debut, date_fin));


// TRIGGER "AFTER UPDATE" - TABLE reservation
CREATE TRIGGER facture
AFTER UPDATE reservation SET termine=oui
FOR EACH row
CALL AutoFacture();


// TRIGGER "AFTER INSERT" - TABLE facture
CREATE TRIGGER factureTotale
AFTER INSERT ON facture
FOR EACH row
UPDATE facture SET factureTotale=(SELECT tarif_type FROM facture)*(SELECT nombre_de_nuits FROM facture);


// PROCEDURES
DELIMITER |

CREATE PROCEDURE AutoFacture()

BEGIN
    INSERT INTO facture(name_client, add_postale_client)
    SELECT name, add_postale
    FROM client;

    INSERT INTO facture(tarif_type)
    SELECT tarif1
    FROM type;

    INSERT INTO facture(nombre_de_nuits)
    SELECT nombre_de_nuits
    FROM reservation;
END; |