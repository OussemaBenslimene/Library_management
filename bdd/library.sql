-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 14 déc. 2023 à 16:45
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `Book_id` int(4) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Author` varchar(20) NOT NULL,
  `Genre` varchar(20) NOT NULL,
  `Pub_date` date NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`Book_id`, `Title`, `Author`, `Genre`, `Pub_date`, `Quantity`) VALUES
(2568, 'Game of thrones', 'J.R.R martin', 'Fantasy', '2010-07-16', 7),
(5869, 'Lord Of the rings', 'Jk ', 'Fantasy', '2014-06-12', 7);

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `Member_id` int(4) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Phone` int(8) NOT NULL,
  `Adress` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Membership` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`Member_id`, `First_name`, `Last_name`, `Phone`, `Adress`, `Email`, `Membership`) VALUES
(1000, 'mohsen', 'rebhi', 25698474, 'tunis', 'mohsenreb@gmail.com', 'active'),
(1528, 'ahmed', 'benali', 86958745, 'tunis', 'ahmed@user.com', 'active'),
(2000, 'hassen', 'refai', 25698574, 'beja', 'hassen@member.com', 'inactive');

-- --------------------------------------------------------

--
-- Structure de la table `transactions`
--

CREATE TABLE `transactions` (
  `Transaction_id` int(4) NOT NULL,
  `Member_id` int(4) NOT NULL,
  `Book_id` int(4) NOT NULL,
  `Transaction_date` date NOT NULL,
  `Return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `transactions`
--

INSERT INTO `transactions` (`Transaction_id`, `Member_id`, `Book_id`, `Transaction_date`, `Return_date`) VALUES
(1009, 1000, 2568, '2023-12-12', '2024-01-02'),
(1010, 1000, 2568, '2023-12-12', '2023-12-26'),
(1011, 1000, 2568, '2023-12-12', '2023-12-26'),
(1012, 1528, 5869, '2023-12-12', '2024-01-02'),
(1013, 1000, 5869, '2023-12-14', '2024-01-04');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Full_name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Username`, `Password`, `Full_name`, `Email`, `Role`) VALUES
('admin', '1111', 'Administrator', 'administrator@admin.com', 'admin'),
('mohamed', '0000', 'MohamedAli', 'moh@user.com', 'librarian'),
('oussema', '1234', 'OussemaBenslimen', 'oussema@user.com', 'librarian');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Book_id`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`Member_id`);

--
-- Index pour la table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`Transaction_id`),
  ADD KEY `fk_book` (`Book_id`),
  ADD KEY `fk_member` (`Member_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`,`Password`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `Transaction_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `fk_book` FOREIGN KEY (`Book_id`) REFERENCES `books` (`Book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_member` FOREIGN KEY (`Member_id`) REFERENCES `members` (`Member_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
