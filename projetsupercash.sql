-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mar 29 Octobre 2013 à 11:13
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projetsupercash`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `ville` varchar(45) NOT NULL,
  `CP` varchar(45) NOT NULL,
  `SIRET` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `adresse`, `ville`, `CP`, `SIRET`, `telephone`, `mail`, `prenom`) VALUES
(1, 'Payet', '33 chemin margose', 'Sainte-Clotilde', '97490', '73282932000074', '0692356874', 'payetyves@mail.fr', 'yves'),
(2, 'Etheve', '58 rue des canards', 'Le Tampon', '97430', '73282586000074', '0693281252', 'etheve.jean@gmail.com', 'jean');

-- --------------------------------------------------------

--
-- Structure de la table `contenus_factures`
--

CREATE TABLE IF NOT EXISTS `contenus_factures` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `prix_vente` varchar(45) NOT NULL,
  `promo` varchar(45) NOT NULL,
  `quantite` int(3) NOT NULL,
  `produit_id` int(6) NOT NULL,
  `factures_client_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`produit_id`,`factures_client_id`),
  KEY `fk_Contenu_facture_Produit1_idx` (`produit_id`),
  KEY `fk_Contenu_facture_Facture_client1_idx` (`factures_client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `contenus_factures`
--

INSERT INTO `contenus_factures` (`id`, `prix_vente`, `promo`, `quantite`, `produit_id`, `factures_client_id`) VALUES
(1, '445', '0', 8, 1, 2),
(2, '123', '0', 9, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `emplacements`
--

CREATE TABLE IF NOT EXISTS `emplacements` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `rayon` varchar(4) NOT NULL,
  `etagere` varchar(4) NOT NULL,
  `etage` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `emplacements`
--

INSERT INTO `emplacements` (`id`, `rayon`, `etagere`, `etage`) VALUES
(1, 'AD', '01', '1'),
(2, 'AG', '01', '1'),
(3, 'AD', '01', '2'),
(4, 'AG', '01', '2');

-- --------------------------------------------------------

--
-- Structure de la table `factures_clients`
--

CREATE TABLE IF NOT EXISTS `factures_clients` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `prix_total` float NOT NULL,
  `date` date NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`client_id`),
  KEY `fk_Facture_client_Client1_idx` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='			' AUTO_INCREMENT=3 ;

--
-- Contenu de la table `factures_clients`
--

INSERT INTO `factures_clients` (`id`, `prix_total`, `date`, `client_id`) VALUES
(1, 20, '2013-10-08', 1),
(2, 55.32, '2013-10-09', 1);

-- --------------------------------------------------------

--
-- Structure de la table `factures_fournisseurs`
--

CREATE TABLE IF NOT EXISTS `factures_fournisseurs` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `prix_total` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `fournisseur_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`fournisseur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `factures_fournisseurs`
--

INSERT INTO `factures_fournisseurs` (`id`, `prix_total`, `date`, `fournisseur_id`) VALUES
(1, '698', '2013-10-08', 1),
(1, '439', '2013-10-01', 2);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

CREATE TABLE IF NOT EXISTS `fournisseurs` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `ville` varchar(45) NOT NULL,
  `CP` varchar(45) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`id`, `nom`, `adresse`, `ville`, `CP`, `mail`, `telephone`) VALUES
(1, 'Distri Sarl', '78 rue Piton Des Neiges', 'Cilaos', '97413', 'distri.sarl@mail.fr', '0692591526'),
(2, 'Royal Bourbon', '56 Chemin Des Papangues', 'Saint Gilles', '97434', 'royal.bour@gmail.com', '0693450012');

-- --------------------------------------------------------

--
-- Structure de la table `lots`
--

CREATE TABLE IF NOT EXISTS `lots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(45) NOT NULL,
  `format` int(3) NOT NULL,
  `quantite_pack` int(4) NOT NULL,
  `date_arrive` date NOT NULL,
  `prix_unitaire_achat` float NOT NULL,
  `produit_id` int(6) NOT NULL,
  `factures_fournisseur_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`produit_id`,`factures_fournisseur_id`),
  KEY `fk_Lot_Produit1_idx` (`produit_id`),
  KEY `fk_Lot_Facture_fournisseur1_idx` (`factures_fournisseur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `lots`
--

INSERT INTO `lots` (`id`, `reference`, `format`, `quantite_pack`, `date_arrive`, `prix_unitaire_achat`, `produit_id`, `factures_fournisseur_id`) VALUES
(1, 'RN61807', 24, 30, '2013-10-02', 0.75, 0, 0),
(2, 'RN60837', 24, 30, '2013-10-02', 0.73, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `magasins`
--

CREATE TABLE IF NOT EXISTS `magasins` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `surface` float NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `ville` varchar(45) NOT NULL,
  `CP` varchar(45) NOT NULL,
  `nb_rayon` int(2) NOT NULL,
  `nb_caisse` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `magasins`
--

INSERT INTO `magasins` (`id`, `surface`, `adresse`, `ville`, `CP`, `nb_rayon`, `nb_caisse`) VALUES
(1, 2062.36, '60 avenue foshe ', 'st benoit', '97470', 12, 4),
(2, 1560, '', '', '', 0, 0),
(3, 2062.36, '60 avenue foshe ', 'Saint-Benoit', '97470', 12, 4),
(4, 1560.36, '789 boulevard Henriette', 'Saint-Leu', '97436', 8, 3);

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

CREATE TABLE IF NOT EXISTS `marques` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `marques`
--

INSERT INTO `marques` (`id`, `nom`) VALUES
(1, 'Coca Cola Company'),
(2, 'Nestle');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `prix_actuel` float NOT NULL,
  `volume` int(4) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `magasin_id` int(11) NOT NULL,
  `marque_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`magasin_id`,`marque_id`,`type_id`),
  KEY `fk_Produit_Magasin_idx` (`magasin_id`),
  KEY `fk_Produit_Marque1_idx` (`marque_id`),
  KEY `fk_Produit_Type1_idx` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `prix_actuel`, `volume`, `nom`, `magasin_id`, `marque_id`, `type_id`) VALUES
(1, 1, 50, 'coca', 1, 1, 4),
(3, 1, 50, 'fanta', 4, 1, 4),
(6, 2, 200, 'Kohler', 1, 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `ref` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Type_Type1_idx` (`ref`),
  KEY `ref` (`ref`),
  KEY `ref_2` (`ref`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `types`
--

INSERT INTO `types` (`id`, `nom`, `ref`) VALUES
(1, 'Boissons', 0),
(2, 'Aliments', 0),
(3, 'Alcoolises', 1),
(4, 'Non alcoolises', 1),
(5, 'Biscuits Sucres', 2),
(6, 'Biscuits Sales', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `loggin` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `loggin`, `mdp`) VALUES
(1, 'test', 'test', 'test', 'test'),
(2, 'test1', 'test1', 'test1', 'test1');
