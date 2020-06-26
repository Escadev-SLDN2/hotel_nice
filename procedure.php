<?php
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
    /* Calcul et insertion du nombre de nuits avec les dates présentes dans la table reservation ("Datediff()") */
    ;

    UPDATE facture
SET facture_totale=(SELECT tarif_type FROM facture WHERE /*?*/)*(SELECT nombre_de_nuits FROM facture WHERE /*?*/) /*WHERE ?*/;

END; |