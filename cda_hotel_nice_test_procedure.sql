-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 10 juil. 2020 à 16:22
-- Version du serveur :  10.1.44-MariaDB-0ubuntu0.18.04.1
-- Version de PHP : 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cda_hotel_nice`
--
CREATE DATABASE IF NOT EXISTS `cda_hotel_nice` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cda_hotel_nice`;

DELIMITER $$
--
-- Procédures
--
DROP PROCEDURE IF EXISTS `LastIDFactures`$$
CREATE DEFINER=`p11`@`localhost` PROCEDURE `LastIDFactures` ()  BEGIN  
    DECLARE name_client varchar(255);
    DECLARE add_postale_client varchar(255);
    DECLARE tarif_type decimal(8,2);
    DECLARE nombre_de_nuits int;
    
    SET @name_client=(SELECT name FROM client WHERE id = (SELECT id_client FROM reservation WHERE id = (select id from reservation order by id desc limit 1)));
    SET @add_postale_client=(SELECT add_postale FROM client WHERE id = (SELECT id_client FROM reservation WHERE id = (select id from reservation order by id desc limit 1)));
    SET @tarif_type=(SELECT tarif1 FROM type WHERE id = (SELECT id_type FROM chambre WHERE id= (SELECT id_chambre FROM reservation WHERE id = (select id from reservation order by id desc limit 1))));
    SET @nombre_de_nuits=(SELECT Datediff(date_fin, date_debut) FROM reservation WHERE id = (select id from reservation order by id desc limit 1));

    INSERT INTO facture(name_client, add_postale_client, tarif_type, nombre_de_nuits, facture_totale)
    VALUES (@name_client, @add_postale_client, @tarif_type, @nombre_de_nuits, (@tarif_type)*(@nombre_de_nuits));
END$$

DROP PROCEDURE IF EXISTS `LastUpdateFacture`$$
CREATE DEFINER=`p11`@`localhost` PROCEDURE `LastUpdateFacture` (IN `name_client` VARCHAR(255) CHARSET utf8mb4, IN `add_postale_client` VARCHAR(255), IN `tarif_type` DECIMAL(8,2), IN `nombre_de_nuits` INT)  BEGIN  
    INSERT INTO facture(name_client, add_postale_client, tarif_type, nombre_de_nuits, facture_totale)
    VALUES (@name_client, @add_postale_client, @tarif_type, @nombre_de_nuits, (@tarif_type)*(@nombre_de_nuits));
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE `chambre` (
  `id` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `info` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id`, `id_type`, `etat`, `info`) VALUES
(1, 1, 'disponible', NULL),
(2, 2, 'disponible', NULL),
(3, 2, 'occupées', NULL),
(4, 4, 'en construction', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash_pass` varchar(255) NOT NULL,
  `add_postale` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `c.id_passport` varchar(255) NOT NULL,
  `pts_fidelite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `hash_pass`, `add_postale`, `tel`, `c.id_passport`, `pts_fidelite`) VALUES
(1, 'Bernard', 'bernard@mail.com', 'test', 'chez bernard', '02', '02', NULL),
(2, 'Toto', 'toto@to.to', 'toto', 'chez toto', '', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE `facture` (
  `id` int(11) NOT NULL,
  `name_client` varchar(255) NOT NULL,
  `add_postale_client` varchar(255) NOT NULL,
  `tarif_type` decimal(8,2) NOT NULL,
  `nombre_de_nuits` int(11) NOT NULL,
  `facture_totale` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_chambre` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `termine` varchar(3) NOT NULL DEFAULT 'non'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déclencheurs `reservation`
--
DROP TRIGGER IF EXISTS `lastupdatefacture`;
DELIMITER $$
CREATE TRIGGER `lastupdatefacture` AFTER UPDATE ON `reservation` FOR EACH ROW BEGIN
	IF OLD.termine <> NEW.termine THEN
    	SET @id = NEW.id;
        SET @name_client=(SELECT name FROM client WHERE id = (SELECT id_client FROM reservation WHERE id = @id ));
    SET @add_postale_client=(SELECT add_postale FROM client WHERE id = (SELECT id_client FROM reservation WHERE id = @id ));
    SET @tarif_type=(SELECT tarif1 FROM type WHERE id = (SELECT id_type FROM chambre WHERE id= (SELECT id_chambre FROM reservation WHERE id = @id )));
    SET @nombre_de_nuits=(SELECT Datediff(date_fin, date_debut) FROM reservation WHERE id = @id );
        CALL LastUpdateFacture(@name_client, @add_postale_client, @tarif_type, @nombre_de_nuits);
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `description` text,
  `tarif1` decimal(6,2) NOT NULL,
  `tarif2` decimal(6,2) NOT NULL,
  `tarif3` decimal(6,2) NOT NULL,
  `services` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `nom`, `description`, `tarif1`, `tarif2`, `tarif3`, `services`, `img`) VALUES
(1, 'chambre simple', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac lectus dolor. Donec eros diam, hendrerit sit amet massa ac, ullamcorper dignissim magna. Praesent sed nisi ipsum.</p> <p>Praesent condimentum id nulla id iaculis. Ut convallis mauris vitae libero tristique molestie. Aliquam erat volutpat. Donec venenatis, arcu et vulputate lacinia, enim lacus rhoncus metus, fermentum porta ligula ex quis ex. Pellentesque semper accumsan tellus eget commodo. Curabitur fermentum urna quis cursus pretium.</p>\\r\\n\\r\\n<p>Aliquam ultrices odio non dui hendrerit ultricies in ac justo. Ut fermentum quam sit amet iaculis finibus. Aliquam vestibulum sit amet ipsum suscipit pretium. Mauris id aliquet ipsum. In augue ante, rhoncus at condimentum sed, ultrices sit amet dui. Sed mollis mauris sed metus efficitur sollicitudin. Praesent vitae arcu sem. Nullam malesuada turpis sit amet facilisis interdum. Vivamus luctus a ex consectetur euismod. Nullam pellentesque velit sit amet fermentum consequat. Mauris placerat in felis eu consectetur. Maecenas vel viverra justo.</p>\\r\\n\\r\\n<p>Aenean interdum magna augue, id imperdiet dui varius a. In porttitor pretium vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus quis neque ut urna rhoncus dignissim in efficitur nunc. Duis feugiat mauris ut magna maximus mattis. Sed at magna a est elementum convallis. Nulla cursus aliquet purus, pellentesque auctor turpis vehicula posuere. Nulla facilisi. Etiam dignissim, ligula et elementum interdum, mi velit mollis metus, ut sodales urna velit non ligula. Nulla aliquam malesuada metus ac faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p> <p>Suspendisse sit amet ultricies nibh.</p>', '69.00', '93.00', '120.00', 'pressing;animal', 'simple.jpg'),
(2, 'chambre double', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac lectus dolor. Donec eros diam, hendrerit sit amet massa ac, ullamcorper dignissim magna. Praesent sed nisi ipsum.</p> <p>Praesent condimentum id nulla id iaculis. Ut convallis mauris vitae libero tristique molestie. Aliquam erat volutpat. Donec venenatis, arcu et vulputate lacinia, enim lacus rhoncus metus, fermentum porta ligula ex quis ex. Pellentesque semper accumsan tellus eget commodo. Curabitur fermentum urna quis cursus pretium.</p>\\r\\n\\r\\n<p>Aliquam ultrices odio non dui hendrerit ultricies in ac justo. Ut fermentum quam sit amet iaculis finibus. Aliquam vestibulum sit amet ipsum suscipit pretium. Mauris id aliquet ipsum. In augue ante, rhoncus at condimentum sed, ultrices sit amet dui. Sed mollis mauris sed metus efficitur sollicitudin. Praesent vitae arcu sem. Nullam malesuada turpis sit amet facilisis interdum. Vivamus luctus a ex consectetur euismod. Nullam pellentesque velit sit amet fermentum consequat. Mauris placerat in felis eu consectetur. Maecenas vel viverra justo.</p>\\r\\n<p>Suspendisse sit amet ultricies nibh.</p>', '71.00', '105.00', '144.00', 'animaux;coffre-fort', 'double.jpg'),
(3, 'chambre double avec cuisine', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac lectus dolor. Donec eros diam, hendrerit sit amet massa ac, ullamcorper dignissim magna. Praesent sed nisi ipsum.</p> <p>Praesent condimentum id nulla id iaculis. Ut convallis mauris vitae libero tristique molestie. Aliquam erat volutpat. Donec venenatis, arcu et vulputate lacinia, enim lacus rhoncus metus, fermentum porta ligula ex quis ex. Pellentesque semper accumsan tellus eget commodo. Curabitur fermentum urna quis cursus pretium.</p>\\r\\n\\r\\n<p>Aliquam ultrices odio non dui hendrerit ultricies in ac justo. Ut fermentum quam sit amet iaculis finibus. Aliquam vestibulum sit amet ipsum suscipit pretium. Mauris id aliquet ipsum. In augue ante, rhoncus at condimentum sed, ultrices sit amet dui. Sed mollis mauris sed metus efficitur sollicitudin. Praesent vitae arcu sem. Nullam malesuada turpis sit amet facilisis interdum. Vivamus luctus a ex consectetur euismod. Nullam pellentesque velit sit amet fermentum consequat. Mauris placerat in felis eu consectetur. Maecenas vel viverra justo.</p>\\r\\n\\r\\n<p>Aenean interdum magna augue, id imperdiet dui varius a. In porttitor pretium vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus quis neque ut urna rhoncus dignissim in efficitur nunc. Duis feugiat mauris ut magna maximus mattis. Sed at magna a est elementum convallis. Nulla cursus aliquet purus, pellentesque auctor turpis vehicula posuere. Nulla facilisi. Etiam dignissim, ligula et elementum interdum, mi velit mollis metus, ut sodales urna velit non ligula. Nulla aliquam malesuada metus ac faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p> <p>Suspendisse sit amet ultricies nibh.</p>', '93.00', '122.00', '152.00', 'mini-bar;balcon', 'double-cuisine.jpg'),
(4, 'chambre familiale', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac lectus dolor. Donec eros diam, hendrerit sit amet massa ac, ullamcorper dignissim magna. Praesent sed nisi ipsum.</p> <p>Praesent condimentum id nulla id iaculis. Ut convallis mauris vitae libero tristique molestie. Aliquam erat volutpat. Donec venenatis, arcu et vulputate lacinia, enim lacus rhoncus metus, fermentum porta ligula ex quis ex. Pellentesque semper accumsan tellus eget commodo. Curabitur fermentum urna quis cursus pretium.</p>\\r\\n\\r\\n<p>Suspendisse sit amet ultricies nibh.</p>', '159.00', '224.00', '304.00', 'pressing;animal;balcon', 'familiale.jpg'),
(5, 'chambre super-simple', 'sqdqsd', '9999.99', '9999.99', '9999.99', 'sqdlmk&quot;qsdmlk&quot;qsldk&quot;f;f', 'starroom.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hash_pass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `hash_pass`, `role`) VALUES
(1, 'admin', 'admin@nice.com', 'test', 'ROLE_ADMIN');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chambre` (`id_type`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_chambre` (`id_chambre`),
  ADD KEY `reservation_client` (`id_client`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre` FOREIGN KEY (`id_type`) REFERENCES `type` (`id`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_chambre` FOREIGN KEY (`id_chambre`) REFERENCES `chambre` (`id`),
  ADD CONSTRAINT `reservation_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
