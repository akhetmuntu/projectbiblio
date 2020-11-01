-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 26 oct. 2020 à 07:36
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

drop database bd_baby_biblio;
create database bd_baby_biblio;
use bd_baby_biblio;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_baby_biblio`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id_auteur` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `nationalite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `nom`, `prenom`, `nationalite`) VALUES
(1, 'CAMUS', 'Albert', 'Française'),
(2, 'BUCKOVSKI', 'Charles', 'Américaine'),
(3, 'CESAIRE', 'Aimé', 'Française'),
(4, 'HUGO', 'VICTOR', 'Française'),
(5, 'ZOLA', 'EMILE', 'Française'),
(6, 'carlos', 'castaneda', 'mexicaine'),
(13, 'Chimamanda Ngozi', 'Adichie', 'nigeriane'),
(16, 'Fanon', 'Frantz', ' francaise'),
(17, 'Gogo', 'Cyril', ' française'),
(18, 'Bauval', 'Robert', 'Americaine'),
(19, 'Hancock', 'Grahan', 'Americaine');

-- --------------------------------------------------------

--
-- Structure de la table `bibliotheque`
--

CREATE TABLE `bibliotheque` (
  `id_bibliotheque` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bibliotheque`
--

INSERT INTO `bibliotheque` (`id_bibliotheque`, `nom`, `adresse`, `telephone`) VALUES
(1, 'akheru', 'Quai Franï¿½ois Mauriac75 013 Paris', '01 53 79 59 59'),
(2, 'SONIA LIBRARY', '2 Rue des Monts Gets\r\n94400 Vitry sur Seine', '01 44 55 66 77'),
(3, 'MEHDI LIBRARY', '12 Rue de la Justice\r\n93400 Saint Ouen', '0122 33 44 55'),
(6, 'derie LIBRARY', '40 AVENUE DE LA RANCUNE95100 ARGENTEUIL', '01 24 46 68 80'),
(7, 'DZ LIBRARY', '62 BOULEVARD DE LA FIERTE\r\n93110 ROSNY SOUS BOIS', '01 64 42 88 00'),
(8, 'aku', '5 avenue medes', '01254376  '),
(13, 'thug-love biblio', '75 avenue tupac', '013375432'),
(23, 'khemnu', 'khemnu Kem ', '0160754321 ');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `telephone`) VALUES
(2, 'SCHOENARTS', 'Matthias', '06 05 04 03 02'),
(3, 'Akhet', 'heru', '23'),
(4, 'keru', 'shu', '45'),
(5, 'anki', 'chef', '21'),
(6, 'ker', 'e', '');

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

CREATE TABLE `editeur` (
  `id_editeur` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `editeur`
--

INSERT INTO `editeur` (`id_editeur`, `nom`, `adresse`) VALUES
(1, 'FLAMMARION', '87 Quai Panhard et Levassor\r\n75016 Paris'),
(7, 'Gallimard', '5 rue Gaston-Gallimard 75328 Paris cedex 07  FRANCE TEL:+33(0)149544200'),
(8, 'Maspero', '40 rue saint-séverin'),
(9, 'HarperCollins,Alfred A.Fnopf', '83 bd Vincent Auriol 75013 Paris '),
(10, 'Cyril gogo', 'kam');

-- --------------------------------------------------------

--
-- Structure de la table `emprunter`
--

CREATE TABLE `emprunter` (
  `id_client` int(200) NOT NULL,
  `id_livre` int(200) NOT NULL,
  `id_emprunter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emprunter`
--

INSERT INTO `emprunter` (`id_client`, `id_livre`, `id_emprunter`) VALUES
(2, 4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id_livre` int(11) NOT NULL,
  `id_bibliotheque` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `logo_livre` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id_livre`, `id_bibliotheque`, `titre`, `genre`, `logo_livre`) VALUES
(1, 2, 'L\'étranger', 'Littérature française', ''),
(2, 1, 'Caligula', 'Littérature française', ''),
(3, 3, 'Correspondance', 'Littérature française', ''),
(4, 2, 'Contes de la folie ordinaire', 'Littérature américaine', ''),
(15, 8, 'la force du silence', 'chamanique', ''),
(22, 1, 'voir', 'éthologie', '5f858cd1cecb1-Copie de Nouvelle image (4).png'),
(26, 8, 'le don de l\'aigle', 'ethnologie', '5f92971707781-Le-Don-De-Laigle.jpg'),
(31, 23, 'americanah', 'roman', '5f88054749c38-americanah.jpg'),
(32, 23, 'l\'autre moitié du soleil', 'roman', 'images/imhotep.jpg'),
(33, 13, 'For love of biafra', 'drame', '5f90ce29f0db4-biafra.jpg'),
(37, 23, 'les damnés de la terre', 'révolutionnaire', '5f90c727dd6f0-Les-damnes-de-la-terre.jpg'),
(39, 23, 'decolonizing madness', 'psychiatry and politics', '5f90c9ce7140d-decolonizing.jpeg'),
(40, 23, 'Autour de ton cou', 'roman', '5f90cb1c63969-autourdetoncou.jpeg'),
(41, 23, 'notre corps nous appartiens', 'essai', '5f92960b4ba58-notrecorps.jpg'),
(42, 23, 'notre corps nous appartiens', 'essai', '5f92962c2e24d-notrecorps.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `publier`
--

CREATE TABLE `publier` (
  `id_editeur` int(200) NOT NULL,
  `id_auteur` int(200) NOT NULL,
  `id_livre` int(200) NOT NULL,
  `id_publier` int(11) NOT NULL,
  `datepublication` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publier`
--

INSERT INTO `publier` (`id_editeur`, `id_auteur`, `id_livre`, `id_publier`, `datepublication`) VALUES
(7, 6, 22, 9, '2015-12-11'),
(7, 6, 26, 14, '1975-10-23'),
(7, 13, 31, 17, '2000-02-01'),
(7, 13, 33, 18, '2012-12-12'),
(8, 16, 37, 19, '1961-01-01'),
(8, 16, 39, 20, '1963-04-05'),
(9, 13, 40, 21, '2009-04-01'),
(10, 17, 42, 22, '2015-01-01');

-- --------------------------------------------------------

--
-- Structure de la table `rendre`
--

CREATE TABLE `rendre` (
  `id_livre` int(150) NOT NULL,
  `id_client` int(150) NOT NULL,
  `id_rendre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rendre`
--

INSERT INTO `rendre` (`id_livre`, `id_client`, `id_rendre`) VALUES
(2, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `sexe` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `pays` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `prenom`, `sexe`, `mail`, `pass`, `age`, `pays`, `role`, `nom`) VALUES
(6, 'baby', '', 'baby@hotmail.fr', 'roi', 7, 'kongo', 'administrateur', ''),
(8, 'don', '', 'bay@hotmail.com', 'rohf', 15, 'france', 'administrateur', ''),
(15, 'hot', 'homme', 'ff@hotmail.com', 'rrr', 26, 'france', 'role', 'akhen'),
(16, 'hot', 'femme', 'ff@hotmail.com', 'fghh', 31, 'france', 'role', 'akhenty'),
(17, 'hotte', 'femme', 'ff@hotmail.com', 'fghh', 31, 'france', 'administrateur', 'akhenty'),
(18, 'ankh', 'homme', 'ankh@gmail.com', 'ankhty', 37, 'kemet', 'administrateur', 'heru');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id_auteur`);

--
-- Index pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  ADD PRIMARY KEY (`id_bibliotheque`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `editeur`
--
ALTER TABLE `editeur`
  ADD PRIMARY KEY (`id_editeur`);

--
-- Index pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD PRIMARY KEY (`id_emprunter`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_livre` (`id_livre`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id_livre`),
  ADD KEY `id_bibliotheque` (`id_bibliotheque`);

--
-- Index pour la table `publier`
--
ALTER TABLE `publier`
  ADD PRIMARY KEY (`id_publier`),
  ADD KEY `id_auteur` (`id_auteur`),
  ADD KEY `id_editeur` (`id_editeur`),
  ADD KEY `id_livre` (`id_livre`);

--
-- Index pour la table `rendre`
--
ALTER TABLE `rendre`
  ADD PRIMARY KEY (`id_rendre`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_livre` (`id_livre`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  MODIFY `id_bibliotheque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `editeur`
--
ALTER TABLE `editeur`
  MODIFY `id_editeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `emprunter`
--
ALTER TABLE `emprunter`
  MODIFY `id_emprunter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id_livre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `publier`
--
ALTER TABLE `publier`
  MODIFY `id_publier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `rendre`
--
ALTER TABLE `rendre`
  MODIFY `id_rendre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD CONSTRAINT `emprunter_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `emprunter_ibfk_2` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`);

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `livre_ibfk_1` FOREIGN KEY (`id_bibliotheque`) REFERENCES `bibliotheque` (`id_bibliotheque`);

--
-- Contraintes pour la table `publier`
--
ALTER TABLE `publier`
  ADD CONSTRAINT `publier_ibfk_1` FOREIGN KEY (`id_auteur`) REFERENCES `auteur` (`id_auteur`),
  ADD CONSTRAINT `publier_ibfk_2` FOREIGN KEY (`id_editeur`) REFERENCES `editeur` (`id_editeur`),
  ADD CONSTRAINT `publier_ibfk_3` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`);

--
-- Contraintes pour la table `rendre`
--
ALTER TABLE `rendre`
  ADD CONSTRAINT `rendre_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `rendre_ibfk_2` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
