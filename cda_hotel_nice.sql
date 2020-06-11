-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 11 juin 2020 à 11:18
-- Version du serveur :  10.1.44-MariaDB-0ubuntu0.18.04.1
-- Version de PHP : 7.4.6

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

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

DROP TABLE IF EXISTS `chambres`;
CREATE TABLE `chambres` (
  `id` int(11) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text,
  `services` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `info` text,
  `tarif1` decimal(6,2) NOT NULL,
  `tarif2` decimal(6,2) NOT NULL,
  `tarif3` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chambres`
--

INSERT INTO `chambres` (`id`, `etat`, `type`, `description`, `services`, `img`, `info`, `tarif1`, `tarif2`, `tarif3`) VALUES
(1, 'disponible', 'chambre simple', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac lectus dolor. Donec eros diam, hendrerit sit amet massa ac, ullamcorper dignissim magna. Praesent sed nisi ipsum.</p> <p>Praesent condimentum id nulla id iaculis. Ut convallis mauris vitae libero tristique molestie. Aliquam erat volutpat. Donec venenatis, arcu et vulputate lacinia, enim lacus rhoncus metus, fermentum porta ligula ex quis ex. Pellentesque semper accumsan tellus eget commodo. Curabitur fermentum urna quis cursus pretium.</p>\r\n\r\n<p>Aliquam ultrices odio non dui hendrerit ultricies in ac justo. Ut fermentum quam sit amet iaculis finibus. Aliquam vestibulum sit amet ipsum suscipit pretium. Mauris id aliquet ipsum. In augue ante, rhoncus at condimentum sed, ultrices sit amet dui. Sed mollis mauris sed metus efficitur sollicitudin. Praesent vitae arcu sem. Nullam malesuada turpis sit amet facilisis interdum. Vivamus luctus a ex consectetur euismod. Nullam pellentesque velit sit amet fermentum consequat. Mauris placerat in felis eu consectetur. Maecenas vel viverra justo.</p>\r\n\r\n<p>Aenean interdum magna augue, id imperdiet dui varius a. In porttitor pretium vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus quis neque ut urna rhoncus dignissim in efficitur nunc. Duis feugiat mauris ut magna maximus mattis. Sed at magna a est elementum convallis. Nulla cursus aliquet purus, pellentesque auctor turpis vehicula posuere. Nulla facilisi. Etiam dignissim, ligula et elementum interdum, mi velit mollis metus, ut sodales urna velit non ligula. Nulla aliquam malesuada metus ac faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p> <p>Suspendisse sit amet ultricies nibh.</p>', 'pressing;animal', 'simple.jpg', NULL, '69.00', '93.00', '120.00'),
(2, 'disponible', 'chambre double', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac lectus dolor. Donec eros diam, hendrerit sit amet massa ac, ullamcorper dignissim magna. Praesent sed nisi ipsum.</p> <p>Praesent condimentum id nulla id iaculis. Ut convallis mauris vitae libero tristique molestie. Aliquam erat volutpat. Donec venenatis, arcu et vulputate lacinia, enim lacus rhoncus metus, fermentum porta ligula ex quis ex. Pellentesque semper accumsan tellus eget commodo. Curabitur fermentum urna quis cursus pretium.</p>\r\n\r\n<p>Aliquam ultrices odio non dui hendrerit ultricies in ac justo. Ut fermentum quam sit amet iaculis finibus. Aliquam vestibulum sit amet ipsum suscipit pretium. Mauris id aliquet ipsum. In augue ante, rhoncus at condimentum sed, ultrices sit amet dui. Sed mollis mauris sed metus efficitur sollicitudin. Praesent vitae arcu sem. Nullam malesuada turpis sit amet facilisis interdum. Vivamus luctus a ex consectetur euismod. Nullam pellentesque velit sit amet fermentum consequat. Mauris placerat in felis eu consectetur. Maecenas vel viverra justo.</p>\r\n<p>Suspendisse sit amet ultricies nibh.</p>', 'animaux;coffre-fort', 'double.jpg', NULL, '71.00', '105.00', '144.00'),
(3, 'occupées', 'chambre double avec cuisine', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac lectus dolor. Donec eros diam, hendrerit sit amet massa ac, ullamcorper dignissim magna. Praesent sed nisi ipsum.</p> <p>Praesent condimentum id nulla id iaculis. Ut convallis mauris vitae libero tristique molestie. Aliquam erat volutpat. Donec venenatis, arcu et vulputate lacinia, enim lacus rhoncus metus, fermentum porta ligula ex quis ex. Pellentesque semper accumsan tellus eget commodo. Curabitur fermentum urna quis cursus pretium.</p>\r\n\r\n<p>Aliquam ultrices odio non dui hendrerit ultricies in ac justo. Ut fermentum quam sit amet iaculis finibus. Aliquam vestibulum sit amet ipsum suscipit pretium. Mauris id aliquet ipsum. In augue ante, rhoncus at condimentum sed, ultrices sit amet dui. Sed mollis mauris sed metus efficitur sollicitudin. Praesent vitae arcu sem. Nullam malesuada turpis sit amet facilisis interdum. Vivamus luctus a ex consectetur euismod. Nullam pellentesque velit sit amet fermentum consequat. Mauris placerat in felis eu consectetur. Maecenas vel viverra justo.</p>\r\n\r\n<p>Aenean interdum magna augue, id imperdiet dui varius a. In porttitor pretium vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus quis neque ut urna rhoncus dignissim in efficitur nunc. Duis feugiat mauris ut magna maximus mattis. Sed at magna a est elementum convallis. Nulla cursus aliquet purus, pellentesque auctor turpis vehicula posuere. Nulla facilisi. Etiam dignissim, ligula et elementum interdum, mi velit mollis metus, ut sodales urna velit non ligula. Nulla aliquam malesuada metus ac faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p> <p>Suspendisse sit amet ultricies nibh.</p>', 'mini-bar;balcon', 'double-cuisine.jpg', NULL, '93.00', '122.00', '152.00'),
(4, 'en construction', 'chambre familiale', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac lectus dolor. Donec eros diam, hendrerit sit amet massa ac, ullamcorper dignissim magna. Praesent sed nisi ipsum.</p> <p>Praesent condimentum id nulla id iaculis. Ut convallis mauris vitae libero tristique molestie. Aliquam erat volutpat. Donec venenatis, arcu et vulputate lacinia, enim lacus rhoncus metus, fermentum porta ligula ex quis ex. Pellentesque semper accumsan tellus eget commodo. Curabitur fermentum urna quis cursus pretium.</p>\r\n\r\n<p>Suspendisse sit amet ultricies nibh.</p>', 'pressing;animal;balcon', 'familiale.jpg', NULL, '159.00', '224.00', '304.00');

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
-- Index pour la table `chambres`
--
ALTER TABLE `chambres`
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
-- AUTO_INCREMENT pour la table `chambres`
--
ALTER TABLE `chambres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
