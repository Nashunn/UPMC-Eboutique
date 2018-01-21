-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 21 Janvier 2018 à 18:38
-- Version du serveur :  5.6.37
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eboutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL,
  `name` text NOT NULL,
  `price` float NOT NULL,
  `imgLink` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `type`, `name`, `price`, `imgLink`) VALUES
(1, 'tree', 'Spruce', 95, './View/img/tree.png'),
(2, 'fruit', 'Kiwi', 0.7, './View/img/fruits'),
(3, 'fruit', 'Banana', 1, './View/img/fruits'),
(4, 'fruit', 'Apple', 0.5, './View/img/fruits.png'),
(5, 'bouquet', 'Spring', 32, './View/img/bouquet.png'),
(6, 'bouquet', 'Colorful', 18, './View/img/bouquet.png'),
(7, 'bouquet', 'Red tentation', 15, './View/img/bouquet.png'),
(8, 'tree', 'Bonsaï', 7, './View/img/tree.png'),
(9, 'tree', 'Eastern Redcedar', 65, './View/img/tree.png'),
(10, 'tree', 'White Oak', 24.9, './View/img/tree.png'),
(11, 'plant', 'Angel trumpet', 6.5, './View/img/flower.png'),
(12, 'tree', 'Chestnut', 30, './View/img/tree.png'),
(13, 'plant', 'Corydalis', 11, './View/img/flower.png'),
(14, 'tree', 'Dindle ', 2, './View/img/tree.png'),
(15, 'plant', 'Easter orchid', 16, './View/img/flower.png'),
(16, 'fruit', 'Lemon', 1.6, './View/img/fruits.png'),
(17, 'seed', 'Tulip', 1.99, './View/img/seeds.png'),
(18, 'seed', 'Rose', 1.99, './View/img/seeds.png'),
(19, 'bouquet', 'Autumn', 16, './View/img/bouquet.png'),
(20, 'seed', 'Lettuce', 2.5, './View/img/seeds.png'),
(21, 'seed', 'Carrot', 2.75, './View/img/seeds.png'),
(22, 'seed', 'Leek', 1.99, './View/img/seeds.png'),
(23, 'plant', 'Lavender', 5.99, './View/img/flower.png'),
(24, 'fruit', 'Mango', 3, './View/img/fruits.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(300) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `postalCode` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `firstName`, `lastName`, `address`, `postalCode`, `city`, `admin`) VALUES
(1, 'admin@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'admin', '21 admin street', '777', 'AdminTown', 1),
(2, 'user@user.com', '12dea96fec20593566ab75692c9949596833adc9', 'user', 'user', '12 user street', '123456', 'AdminTown', 0),
(3, 'test@test.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test', 'test', 'test', 'test', 'test', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
