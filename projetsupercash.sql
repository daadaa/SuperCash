-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Jeu 10 Octobre 2013 à 06:29
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
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(8) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `ville` varchar(45) NOT NULL,
  `CP` varchar(45) NOT NULL,
  `SIRET` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idClient`, `nom`, `adresse`, `ville`, `CP`, `SIRET`, `telephone`, `mail`, `prenom`) VALUES
(1, 'Payet', '33 chemin margose', 'Sainte-Clotilde', '97490', '73282932000074', '0692356874', 'payetyves@mail.fr', 'yves'),
(2, 'Etheve', '58 rue des canards', 'Le Tampon', '97430', '73282586000074', '0693281252', 'etheve.jean@gmail.com', 'jean');

-- --------------------------------------------------------

--
-- Structure de la table `contenu_facture`
--

CREATE TABLE IF NOT EXISTS `contenu_facture` (
  `idContenu_facture` int(8) NOT NULL AUTO_INCREMENT,
  `prix_vente` varchar(45) NOT NULL,
  `promo` varchar(45) NOT NULL,
  `quantite` int(3) NOT NULL,
  `Produit_idProduit` int(6) NOT NULL,
  `Facture_client_idFacture_client` int(11) NOT NULL,
  PRIMARY KEY (`idContenu_facture`,`Produit_idProduit`,`Facture_client_idFacture_client`),
  KEY `fk_Contenu_facture_Produit1_idx` (`Produit_idProduit`),
  KEY `fk_Contenu_facture_Facture_client1_idx` (`Facture_client_idFacture_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `contenu_facture`
--

INSERT INTO `contenu_facture` (`idContenu_facture`, `prix_vente`, `promo`, `quantite`, `Produit_idProduit`, `Facture_client_idFacture_client`) VALUES
(1, '445', '0', 8, 1, 2),
(2, '123', '0', 9, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `emplacement`
--

CREATE TABLE IF NOT EXISTS `emplacement` (
  `idEmplacement` int(4) NOT NULL AUTO_INCREMENT,
  `rayon` varchar(4) NOT NULL,
  `etagere` varchar(4) NOT NULL,
  `etage` varchar(4) NOT NULL,
  PRIMARY KEY (`idEmplacement`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `emplacement`
--

INSERT INTO `emplacement` (`idEmplacement`, `rayon`, `etagere`, `etage`) VALUES
(1, 'AD', '01', '1'),
(2, 'AG', '01', '1'),
(3, 'AD', '01', '2'),
(4, 'AG', '01', '2');

-- --------------------------------------------------------

--
-- Structure de la table `facture_client`
--

CREATE TABLE IF NOT EXISTS `facture_client` (
  `idFacture_client` int(5) NOT NULL AUTO_INCREMENT,
  `prix_total` float NOT NULL,
  `date` date NOT NULL,
  `Client_idClient` int(11) NOT NULL,
  PRIMARY KEY (`idFacture_client`,`Client_idClient`),
  KEY `fk_Facture_client_Client1_idx` (`Client_idClient`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='		\n	' AUTO_INCREMENT=3 ;

--
-- Contenu de la table `facture_client`
--

INSERT INTO `facture_client` (`idFacture_client`, `prix_total`, `date`, `Client_idClient`) VALUES
(1, 20, '2013-10-08', 1),
(2, 55.32, '2013-10-09', 1);

-- --------------------------------------------------------

--
-- Structure de la table `facture_fournisseur`
--

CREATE TABLE IF NOT EXISTS `facture_fournisseur` (
  `idFacture_fournisseur` int(4) NOT NULL AUTO_INCREMENT,
  `prix_total` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `Fournisseur_idfournisseur` int(11) NOT NULL,
  PRIMARY KEY (`idFacture_fournisseur`,`Fournisseur_idfournisseur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `facture_fournisseur`
--

INSERT INTO `facture_fournisseur` (`idFacture_fournisseur`, `prix_total`, `date`, `Fournisseur_idfournisseur`) VALUES
(1, '698', '2013-10-08', 1),
(1, '439', '2013-10-01', 2);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE IF NOT EXISTS `fournisseur` (
  `idFournisseur` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `ville` varchar(45) NOT NULL,
  `CP` varchar(45) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  PRIMARY KEY (`idFournisseur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `fournisseur`
--

INSERT INTO `fournisseur` (`idFournisseur`, `nom`, `adresse`, `ville`, `CP`, `mail`, `telephone`) VALUES
(1, 'Distri Sarl', '78 rue Piton Des Neiges', 'Cilaos', '97413', 'distri.sarl@mail.fr', '0692591526'),
(2, 'Royal Bourbon', '56 Chemin Des Papangues', 'Saint Gilles', '97434', 'royal.bour@gmail.com', '0693450012');

-- --------------------------------------------------------

--
-- Structure de la table `lot`
--

CREATE TABLE IF NOT EXISTS `lot` (
  `idLot` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(45) NOT NULL,
  `format` int(3) NOT NULL,
  `quantite_pack` int(4) NOT NULL,
  `date_arrive` date NOT NULL,
  `prix_unitaire_achat` float NOT NULL,
  `Produit_idProduit` int(6) NOT NULL,
  `Facture_fournisseur_idfacture_fournisseur` int(11) NOT NULL,
  PRIMARY KEY (`idLot`,`Produit_idProduit`,`Facture_fournisseur_idfacture_fournisseur`),
  KEY `fk_Lot_Produit1_idx` (`Produit_idProduit`),
  KEY `fk_Lot_Facture_fournisseur1_idx` (`Facture_fournisseur_idfacture_fournisseur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `lot`
--

INSERT INTO `lot` (`idLot`, `reference`, `format`, `quantite_pack`, `date_arrive`, `prix_unitaire_achat`, `Produit_idProduit`, `Facture_fournisseur_idfacture_fournisseur`) VALUES
(1, 'RN61807', 24, 30, '2013-10-02', 0.75, 0, 0),
(2, 'RN60837', 24, 30, '2013-10-02', 0.73, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `magasin`
--

CREATE TABLE IF NOT EXISTS `magasin` (
  `idMagasin` int(2) NOT NULL AUTO_INCREMENT,
  `surface` float NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `ville` varchar(45) NOT NULL,
  `CP` varchar(45) NOT NULL,
  `nb_rayon` int(2) NOT NULL,
  `nb_caisse` int(2) NOT NULL,
  PRIMARY KEY (`idMagasin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `magasin`
--

INSERT INTO `magasin` (`idMagasin`, `surface`, `adresse`, `ville`, `CP`, `nb_rayon`, `nb_caisse`) VALUES
(1, 2062.36, '60 avenue foshe ', 'st benoit', '97470', 12, 4),
(2, 1560, '', '', '', 0, 0),
(3, 2062.36, '60 avenue foshe ', 'Saint-Benoit', '97470', 12, 4),
(4, 1560.36, '789 boulevard Henriette', 'Saint-Leu', '97436', 8, 3);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE IF NOT EXISTS `marque` (
  `idMarque` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  PRIMARY KEY (`idMarque`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `marque`
--

INSERT INTO `marque` (`idMarque`, `nom`) VALUES
(1, 'Coca Cola Company'),
(2, 'Nestle');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `idProduit` int(6) NOT NULL AUTO_INCREMENT,
  `prix_actuel` float NOT NULL,
  `volume` int(4) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `Magasin_idMagasin` int(11) NOT NULL,
  `Marque_idmarque` int(11) NOT NULL,
  `Type_idType` int(11) NOT NULL,
  PRIMARY KEY (`idProduit`,`Magasin_idMagasin`,`Marque_idmarque`,`Type_idType`),
  KEY `fk_Produit_Magasin_idx` (`Magasin_idMagasin`),
  KEY `fk_Produit_Marque1_idx` (`Marque_idmarque`),
  KEY `fk_Produit_Type1_idx` (`Type_idType`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `prix_actuel`, `volume`, `nom`, `Magasin_idMagasin`, `Marque_idmarque`, `Type_idType`) VALUES
(1, 1, 50, 'coca', 1, 1, 4),
(2, 2.1, 100, 'Kohler', 2, 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `idType` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `Type_idType` int(11) NOT NULL,
  PRIMARY KEY (`idType`,`Type_idType`),
  KEY `fk_Type_Type1_idx` (`Type_idType`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`idType`, `nom`, `Type_idType`) VALUES
(1, 'Boissons', 0),
(2, 'Aliments', 0),
(3, 'Alcoolisés', 1),
(4, 'Non alcoolisés', 1),
(5, 'Biscuits Sucrés', 2),
(6, 'Biscuits Salés', 2);
