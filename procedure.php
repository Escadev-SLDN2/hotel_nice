<?php /*

// TRIGGER "AFTER INSERT" - TABLE reservation
CREATE TRIGGER nombreNuits
AFTER INSERT ON reservation
FOR EACH row
CALL DatediffReservation();

// PROCEDURE lié à TRIGGER "AFTER INSERT" - TABLE reservation
DELIMITER |

CREATE PROCEDURE DatediffReservation()

BEGIN
    UPDATE reservation SET NEW.nombre_de_nuits=(SELECT Datediff( date_debut, date_fin));
END; |


// TRIGGER "AFTER INSERT" - TABLE facture
CREATE TRIGGER factureTotale
AFTER INSERT ON facture
FOR EACH row
UPDATE facture SET factureTotale=(SELECT tarif_type FROM facture)*(SELECT nombre_de_nuits FROM facture); */


// TRIGGER "AFTER UPDATE" - TABLE reservation
CREATE TRIGGER facture
AFTER UPDATE reservation SET termine=oui
FOR EACH row
CALL AutoFacture();

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
    UPDATE facture SET NEW.nombre_de_nuits=(SELECT Datediff( SELECT date_debut FROM reservation, SELECT date_fin FROM reservation));
END; |

// UPDATE reservation SET NEW.nombre_de_nuits=(SELECT Datediff( date_debut, date_fin));

INSERT INTO facture(name_client, add_postale_client)
    SELECT name, add_postale
    FROM client;

    INSERT INTO facture(tarif_type)
    SELECT tarif1
    FROM type;

    INSERT INTO facture(nombre_de_nuits)
    SELECT Datediff(date_debut, date_fin)
    FROM reservation;