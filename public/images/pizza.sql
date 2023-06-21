-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 20 juin 2023 à 12:51
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tisoley`
--

-- --------------------------------------------------------

--
-- Structure de la table `pizza`
--

CREATE TABLE `pizza` (
  `id` int NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `base` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pizza`
--

INSERT INTO `pizza` (`id`, `picture`, `title`, `base`, `description`, `price`) VALUES
(1, 'fromage.jpg', 'Fromage', 'tomate', 'emmental', 8.5),
(2, 'anchois.jpg', 'Anchois', 'tomate', ' tomates fraiches, anchois et olives noires', 8.5),
(3, 'mozza.jpg', 'Mozza', 'tomate', 'mozarella', 9),
(4, 'jambon.jpg', 'Jambon', 'tomate', 'jambon et emmental ', 9),
(5, 'napolitaine.jpg', 'Napolitaine', 'tomate', 'anchois et mozzarella ', 10),
(6, 'calabraise.jpg', 'Calabraise', 'tomate', 'emmental, chorizo et mozzarella ', 10),
(7, 'roquefort.jpeg', 'Roquefort', 'tomate', 'emmental et roquefort ', 10),
(8, 'chevre.jpg', 'Chèvre', 'tomate', 'emmental et chèvre ', 10),
(9, 'persillade.jpg', 'Persillade', 'tomate', 'tomates fraiches, mozzarella et persillade ', 10.5),
(10, 'royale.png', 'Royale', 'tomate', 'jambon , emmental et champignons ', 10.5),
(11, 'chevremiel.jpg', 'Dolce', 'tomate', 'emmental , chèvre et miel ', 11),
(12, 'pissaladiere.jpg', 'Pissaladière ', 'tomate', 'tomates fraiches , mozzarella et persillade ', 11),
(13, 'quatrefromages.png', 'Quatre fromages', 'tomate', 'emmental , chèvre , roquefort et mozzarella ', 11.5),
(14, 'armenienne.jpg', 'Arménienne', 'tomate', 'viande fermière , emmental , poivrons et oignons ', 11.5),
(15, 'provencal.jpg', 'Provençale', 'tomate', 'aubergines , emmental , poivrons , tomates et mozzarella ', 11.5),
(16, 'basquaise.jpg', 'Basquaise', 'tomate', 'poulet , emmental , poivrons et oignons ', 11.5),
(17, 'moussaka.jpg', 'Moussaka', 'tomate', 'viande fermière , emmental et aubergines ', 11.5),
(18, 'raclette.jpg', 'Raclette', 'crème', 'p. de terre , emmental , jambon et raclette ', 11.5),
(19, 'cremiere.jpg', 'Crèmiere', 'crème', 'emmental , lardons et oignons ', 11.5),
(20, 'tartiflette.jpg', 'Tartiflette', 'crème', 'p. de terre , emmental , lardons , oignons et reblochon ', 11.5),
(21, 'chevremiel.jpg', 'Biquette', 'crème', 'emmental , chèvre et miel ', 11.5),
(22, 'amirale.jpeg', 'Amirale', 'crème', 'viande fermière , emmental , champignons et oignons ', 11.5),
(23, 'forestiere.jpeg', 'Forestière ', 'crème', 'poulet , emmental et champignons ', 11.5),
(24, 'kebab.jpg', 'Kebab ', 'crème', ' viande kebab , emmental , tomates et oignons', 11.5),
(25, 'carbonara.jpg', 'Carbonara', 'crème', 'emmental , champignons et lardons ', 11.5),
(26, 'quatrefromages.png', 'Quatre fromages', 'crème', 'emmental , chèvre , roquefort et mozzarella ', 11.5),
(27, 'shake.png', 'Shake up', 'crème', '4 ingrédients au choix(base offerte)', 11.5),
(28, 'shake.png', 'Calzone', 'crème', '4 ingrédients au choix(base offerte)', 12);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
