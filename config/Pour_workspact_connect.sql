
-- Copier dans la table réservation ( format sql)
CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `num_tel` int(11) NOT NULL,
  `date_resa` date NOT NULL,
  `creneau` varchar(50) NOT NULL,
  `nb_personnes` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `nom`, `prenom`, `email`, `num_tel`, `date_resa`, `creneau`, `nb_personnes`, `id_salle`) VALUES
(5, 'Poulain', 'Natan', 'npoulain678@gmail.com', 0, '2026-05-02', '13h15-15h05', 1, 2),
(6, 'Poulain', 'Natan', 'npoulain678@gmail.com', 0, '2026-04-30', '13h15-15h05', 4, 2);


-- Copier dans la table de réservation ( format sql)
CREATE TABLE `salle` (
    `id_salle` INT(11) NOT NULL AUTO_INCREMENT,
    `nom` VARCHAR(100) NOT NULL,
    `capacite` INT(11) NOT NULL,
    `prix` DECIMAL(10,2) NOT NULL,
    `description` TEXT,
    `equipements` TEXT,
    `image` VARCHAR(255),
    `disponibilité` TINYINT(1) DEFAULT 1,
    PRIMARY KEY (`id_salle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertion données
INSERT INTO `salle` (`id_salle`, `nom`, `capacite`, `prix`, `description`, `equipements`, `image`, `disponibilité`) VALUES
(1, 'Salle Innovate', 10, 35.00, 'Salle de réunion élégante avec vue sur le boulevard, idéale pour vos réunions stratégiques et présentations clients.', 'Vidéoprojecteur, Tableau blanc, Wi-Fi fibre, Climatisation, Machine à café, Prises USB', 'Simple-image.jpg', 0),
(2, 'Open Space Bastille', 6, 25.00, 'Grand espace de coworking lumineux au cœur de Paris. Ambiance dynamique avec des postes de travail ergonomiques.', 'Wi-Fi fibre, Postes ergonomiques, Imprimante, Cuisine équipée, Casiers individuels, Terrasse', 'Simple-Image2.jpg', 0),
(3, 'Auditorium Rivoli', 20, 55.00, 'Auditorium moderne de 50 places avec scène et système audio-visuel professionnel.', 'Écran géant, Sonorisation, Microphones, Éclairage scénique, Wi-Fi fibre', 'Simple-Image3.jpg', 0),
(4, 'Atelier Montmartre', 8, 35.00, 'Espace créatif inspirant avec des murs inscriptibles et du mobilier modulable.', 'Murs inscriptibles, Mobilier modulable, Wi-Fi fibre, Matériel créatif, Lumière naturelle', 'Simple-Image4.jpg', 0),
(5, 'Salle Opéra', 27, 65.00, 'Salle de réunion premium avec équipements de visioconférence haut de gamme.', 'Visioconférence HD, Double écran, Tableau interactif, Wi-Fi fibre, Climatisation, Service traiteur', 'Simple-Image5.jpg', 0);