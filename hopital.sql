-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 19 mai 2023 à 15:43
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hopital`
--

-- --------------------------------------------------------

--
-- Structure de la table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `daterv` date NOT NULL,
  `heure` time NOT NULL,
  `message` text NOT NULL,
  `datecreation` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `statut` int(11) NOT NULL,
  `idDocteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `appointment`
--

INSERT INTO `appointment` (`id`, `nom`, `tel`, `email`, `daterv`, `heure`, `message`, `datecreation`, `statut`, `idDocteur`) VALUES
(2, 'babacar ball', '775153036', 'ball@gmail.com', '2023-05-28', '09:00:00', '\r\n                                    ', '2023-05-11 21:26:26', 1, 2),
(3, 'oumou ball', '789004536', 'ball@gmail.com', '2023-05-13', '15:14:00', '\r\n                                    ', '2023-05-10 13:14:32', 0, 2),
(4, 'adji mbaye', '774103606', 'mbaye@gmail.com', '2023-05-18', '18:24:00', 'mot de tete\r\n                                    ', '2023-05-10 16:56:23', 2, 1),
(5, 'djieynaba ndoye', '774103606', 'ndoye@gmail.com', '2023-05-12', '17:33:00', '\r\n                                    ', '2023-05-10 16:56:27', 1, 1),
(6, 'bineta diop', '753456789', 'diop@gmail.com', '2023-05-14', '21:45:00', '\r\n                                    ', '2023-05-12 10:38:13', 2, 1),
(7, 'fama sow', '774445357', 'sow@gmail.com', '2023-05-19', '07:50:00', '\r\n                                    ', '2023-05-12 10:30:45', 1, 2),
(9, 'oumou ly', '774563412', 'ly@gmail.com', '2023-05-25', '23:56:00', '\r\n                                    ', '2023-05-12 10:33:03', 1, 1),
(10, 'khady sylla', '772006789', 'sylla@gmail.com', '2023-05-24', '19:02:00', '\r\n                                    ', '2023-05-12 13:02:51', 0, 2),
(11, 'houley faye', '785647222', 'faye@gmail.com', '2023-05-24', '10:43:00', 'fievre\r\n                                    ', '2023-05-14 20:40:38', 0, 2),
(12, 'ami cisse', '753458912', 'cisse@gmail.com', '2023-05-18', '08:45:00', '\r\n                                    ', '2023-05-14 20:46:08', 0, 1),
(13, 'papis Deme', '768934500', 'deme@gmail.com', '2023-05-16', '10:00:00', '\r\n                                    ', '2023-05-14 20:57:09', 0, 2),
(14, 'hawa sylla', '788535000', 'sylla@gmail.com', '2023-05-30', '18:09:00', '\r\n                                    ', '2023-05-19 13:10:03', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `docteur`
--

CREATE TABLE `docteur` (
  `idDocteur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `specialisation` varchar(100) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `docteur`
--

INSERT INTO `docteur` (`idDocteur`, `nom`, `email`, `specialisation`, `mdp`, `tel`) VALUES
(1, 'Aminata diallo', 'kane@gmail.com', 'Dermatologue', '1234ami', '778094036'),
(2, 'Amadou BASSOUM', 'bassoum@gmail.com', 'dentiste', 'passer123', '774563490');

-- --------------------------------------------------------

--
-- Structure de la table `specialisation`
--

CREATE TABLE `specialisation` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_docteur` (`idDocteur`);

--
-- Index pour la table `docteur`
--
ALTER TABLE `docteur`
  ADD PRIMARY KEY (`idDocteur`);

--
-- Index pour la table `specialisation`
--
ALTER TABLE `specialisation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `docteur`
--
ALTER TABLE `docteur`
  MODIFY `idDocteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `specialisation`
--
ALTER TABLE `specialisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`idDocteur`) REFERENCES `docteur` (`idDocteur`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
