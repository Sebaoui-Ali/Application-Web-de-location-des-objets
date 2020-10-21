-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 28 mai 2020 à 00:59
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kriobjetbd`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` bigint(20) NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  `caution` int(11) NOT NULL,
  `date_fin_premium` date DEFAULT NULL,
  `Ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat_annonce` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `image1`, `image2`, `image3`, `image4`, `titre`, `prix`, `debut`, `fin`, `caution`, `date_fin_premium`, `Ville`, `description`, `etat_annonce`, `user_id`, `categorie`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '/images/annonces/11.jpg', '/images/annonces/12.jpg', '/images/annonces/13.jpg', '', 'XBOX 360', 20, '2020-05-16', '2020-06-17', 50, '2020-05-24', 'Casablanca', 'XBOX is The best Game', 'Moyen', 2, 'Jeux vidéo et consoles', '2020-05-26 23:27:50', '2020-05-26 00:54:55', '2020-05-26 23:27:50'),
(2, '/images/annonces/21.jpg', '/images/annonces/22.jpg', '/images/annonces/23.jpg', '', 'House', 1000, '2020-05-17', '2020-06-18', 2000, '2020-05-17', 'Casablanca', 'This House is The best House ', 'Neuf', 3, 'Maisons et villas', NULL, '2020-05-26 00:54:55', '2020-05-26 22:47:56'),
(3, '/images/annonces/31.jpg', '/images/annonces/32.jpg', '/images/annonces/33.jpg', '', 'Voiture Renault ', 400, '2020-05-20', '2020-05-30', 1000, '2020-05-17', 'Casablanca', 'Renault is The best Car ', 'Bon', 3, 'Voitures', NULL, '2020-05-26 00:54:55', '2020-05-26 16:23:36'),
(5, '/images/annonces/15905243241.jpg', '/images/annonces/15905243242.jpg', '', '', 'Appareil photo', 200, '2020-05-28', '2020-05-31', 100, '2020-06-02', 'Errachidia', 'Bonjour, je met a location l\'appareil photo', 'Bon', 4, 'Appareils photo et caméras', NULL, '2020-05-26 20:18:44', '2020-05-26 20:18:44'),
(9, '/images/annonces/15905300561.jpg', '/images/annonces/15905300562.jpg', '/images/annonces/15905300563.jpg', '/images/annonces/15905300564.jpg', 'VÉLO ELECTRIQUE FAT BIKE 500 WATTS', 50, '2020-05-27', '2020-06-27', 200, '2020-06-10', 'Tetouan', 'Bonjour, Je suis Amine Les vélos « Fat Bikes » électriques sont très à la mode avec une forte croissance. Ils sont principalement destinés à ceux qui désirent acquérir un vélo de qualité, pour une utilisation optimale sur le sable, la neige ou le gravier et de plus en plus pour se rendre au travail. Si l’intérêt principal, au contraire, est de se faire remarquer dans la ville avec une sorte de « Vélo SUV », avec ses gros pneus surdimensionné, les clients ne passeront pas inaperçus. A quoi servent des pneus si larges? Ils servent à augmenter la surface de contact entre le vélo et le terrain, et par conséquent à rouler sur des surfaces molles et instables telles que le sable, le gravier ou la neige. Et oui, le fat bike peut être utilisé 4 saisons par année.', 'Neuf', 2, 'Vélos', NULL, '2020-05-26 21:54:16', '2020-05-26 21:54:16'),
(10, '/images/annonces/15906159341.jpg', '/images/annonces/15906159342.jpg', '/images/annonces/15906159343.jpeg', NULL, 'Camionnette Mercedes Sprinter', 800, '2020-05-27', '2020-06-07', 2000, '2020-05-26', 'Khouribga', 'Mercedes-Benz Sprinter 315 CDI MOTEUR NEUF \r\n\r\nMOTEUR NEUF (Moteur diesel, Turbo, Pompe à gasoil, Capteurs, Joints, Vannes) GARANTIE Mercedes 2 ANS (2019/2020).\r\n\r\nEmbrayage Neuf\r\nSystème de climatisation Neuf\r\n\r\nDisques, frein à main arrière neuf\r\nPlaquettes de freins avant-arrière neuf\r\nPare-brise neuf\r\n2 Pneus arrière neuf\r\n2 Pneus avant bon à 80 %\r\nBoitier de phare arrière neuf\r\nHabillage de la cabine refais à Neuf avec coffres latérale de rangement\r\n\r\nKM Châssis: 246 500\r\n\r\nFermeture centralisé\r\nClim\r\nAuto radio\r\nVitre électrique\r\nBoite manuel 6 vitesses en très bon état\r\nCharge max 3.5 tonnes\r\nJoints de portes et habitacle en excellent états\r\nAttelage remorque\r\n4 petits points de corrosion porte latérale; quelques bosses sur la carrosserie flan droit; couleur et le reste en excellent état.\r\n\r\nVéhicule très long et spacieux,\r\nCe véhicule n\'a effectué que de longs trajets', 'Bon', 3, 'Véhicules professionnels', NULL, '2020-05-27 21:45:34', '2020-05-27 21:45:34'),
(11, '/images/annonces/15906165381.jpg', '/images/annonces/15906165382.jpg', '/images/annonces/15906165383.jpeg', NULL, 'Jet-ski Kawasaki Ultra 310', 2000, '2020-05-27', '2020-06-03', 1000, '2020-06-03', 'Agadir', 'Le Kawasaki Ultra 310 embarque un moteur 4-cylindres en ligne de 1 498 cm3 à refroidissement liquide. Il est équipé d\'un échangeur d\'air et d\'un compresseur de suralimentation de type TVS qui portent sa puissance à un peu plus de 300 chevaux.', 'Bon', 3, 'Bateaux', NULL, '2020-05-27 21:55:38', '2020-05-27 21:55:38'),
(12, '/images/annonces/15906171291.jpg', '/images/annonces/15906171292.jpg', NULL, NULL, 'Remorque bagagère', 320, '2020-05-25', '2020-05-29', 2000, '2020-05-26', 'Al Hoceima', 'Remorque 2 essieux de 750kgs\r\n\r\n250x133x110 de hauteur avec réhausses grillagées, très stable sur la route. Fournie avec roue jockey, roue de secours, anti vol, rampes avec supplément.\r\n\r\nIdéal pour transport divers, déménagements, transport de quad....\r\n\r\nTarif dégresseif selon durée\r\n\r\nVotre permis B suffit', 'Moyen', 4, 'Remorque', NULL, '2020-05-27 22:05:29', '2020-05-27 22:37:14'),
(13, '/images/annonces/15906177731.jpg', '/images/annonces/15906177732.jpg', '/images/annonces/15906177733.jpg', '/images/annonces/15906177734.jpg', 'Caravane', 300, '2020-05-20', '2020-06-21', 1000, '2020-06-11', 'Marrakech', 'A LOUER caravane burstner 1984, 551kg, bon état, propre, freins neufs, pneus neufs, système d\'accrochage anti-lacet. Coin repas avec banquette et table transformable en lit 160 pour 2 adultes. Coin cuisine avec 2 feux gaz (bouteille gaz dans coffre extérieur) , petit frigo avec mini-freezer. Petite chambre avec banquette et table transformable en lit 120 (1  adulte ou 2 enfants) avec porte coulissante.  Nombreux rangements, penderie avec grand miroir. Auvent, table de jardin, chaises pliantes, vaisselle complète. Location uniquement à la semaine,\r\n\r\ndu samedi au samedi. \r\nTARIFS : 135 euros la semaine, possibilité d\'étudier un tarif au mois pour une longue durée.\r\nCaution : 500 euros.\r\nAttention : la caravane est stationnée à environs 30 km de Dijon, il est à votre charge de venir la chercher et de l\'emmener par vos propres moyens sur le lieu de camping de votre choix.', 'Bon', 3, 'Caravane', NULL, '2020-05-27 22:16:13', '2020-05-27 22:35:32'),
(14, '/images/annonces/15906172721.png', '/images/annonces/15906172722.jpg', '/images/annonces/15906172723.jpeg', NULL, 'Location Vidéoprojecteur hd  avec écran de projection', 90, '2020-05-27', '2020-06-03', 500, '2020-06-03', 'Tetouan', 'Compagnon idéal pour vos films, soirées sportives, séminaires, mariages, anniversaires, formations, games party, karaoké, ce vidéoprojecteur s\'installe en quelques minutes, !', 'Neuf', 2, 'MATÉRIEL video  et consoles', NULL, '2020-05-27 22:07:52', '2020-05-27 22:07:52'),
(15, '/images/annonces/15906168921.jpg', '/images/annonces/15906168922.jpg', NULL, NULL, 'Location Motoculteur, motobineuse 4 fraises thermique 4 cv', 200, '2020-05-20', '2020-06-07', 500, '2020-05-26', 'Tetouan', 'Motoculteur 4 herses pour labourer sur une largeur de 45 cm. engin puissant 4 cv. fonctionne à l\'essence sans plomb 95\r\n\r\npossibilité de le charger à l\'arrière d\'un véhicule dont on peut rabattre les sièges arrières.\r\n\r\npoids 40 kg environ.idéal pour préparation de terrain pour pelouses, jardins, potagers, etc..', 'Bon', 2, 'JARDINAGE', NULL, '2020-05-27 22:01:32', '2020-05-27 22:01:32'),
(16, '/images/annonces/15906167011.jpg', '/images/annonces/15906167012.jpg', NULL, NULL, 'Location Echelle -', 40, '2020-05-27', '2020-06-30', 100, '2020-05-26', 'Tetouan', 'loue échelle télescopique  dans un tres bon etat facile a utiliser', 'Bon', 2, 'MATÉRIEL', NULL, '2020-05-27 21:58:21', '2020-05-27 21:58:21'),
(17, '/images/annonces/15906161041.jpg', '/images/annonces/15906161042.jpg', '/images/annonces/15906161043.jpeg', NULL, 'Location Drone dji phantom 4', 300, '2020-05-26', '2020-06-27', 500, '2020-05-26', 'Casablanca', '- Phantom 4 Pro\r\n\r\n- Batterie + chargeur\r\n\r\n- Sac de transport\r\n\r\n- Amplificateur Radio\r\n\r\n- Carte SD 32Go', 'Neuf', 2, 'Appareils photo et caméras', NULL, '2020-05-27 21:48:24', '2020-05-27 21:48:24'),
(18, '/images/annonces/15906160011.jpg', '/images/annonces/15906160012.jpg', '/images/annonces/15906160013.jpeg', NULL, 'Location Chaînes à neige e9 n°70 - montage facile', 200, '2020-05-27', '2020-06-24', 500, '2020-05-26', 'Casablanca', '1 paire de chaînes à neiges E9 n°070 pour véhicule léger, pneus 14, 15, 16, 17 pouces, facile à monter avec clips rapide (9mm)\r\n\r\nCe modèle de chaînes peut s’adapter sur différents véhicules et tailles de pneumatiques. \r\nIl vous faut donc relever les dimensions des pneus afin de sélectionner le modèle adapté.\r\n\r\nMatériel compatible avec les tailles de pneus suivants :\r\n\r\n- R13 : 195/70-13\'\r\n- R14 : 175/80-14\', 175/75-14\', 195/65-14\', 205/60-14\'\r\n- R15 : 175/70-15\', 185/65-15\', 195/60-15\'\r\n- R16 : 195/50-16\'\r\n- R17 : 205/40-17\'\r\n\r\nCompatibilité pour les nouvelles tailles suivantes (n\'hésitez pas à me contacter)', 'Bon', 2, 'Voitures', NULL, '2020-05-27 21:46:41', '2020-05-27 21:46:41');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(3, 'Informatique et multimedia', '2020-05-26 19:57:38', '2020-05-26 19:57:38'),
(4, 'Vehicules', '2020-05-26 19:59:11', '2020-05-26 19:59:11'),
(5, 'Immobilier', '2020-05-26 19:59:36', '2020-05-26 19:59:36'),
(7, 'Habillement et bien etre', '2020-05-26 20:01:02', '2020-05-26 20:01:02'),
(10, 'BRICO', '2020-05-27 22:18:51', '2020-05-27 22:18:51');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note` int(11) NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `annonce_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `note`, `message`, `user_id`, `annonce_id`, `created_at`, `updated_at`) VALUES
(2, 1, 'Bonjour vous etes mallllll', 3, 9, '2020-05-26 22:40:21', '2020-05-26 22:40:21');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_clients`
--

CREATE TABLE `commentaire_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `annonce_id` bigint(20) UNSIGNED NOT NULL,
  `user_id_client` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaire_clients`
--

INSERT INTO `commentaire_clients` (`id`, `message`, `note`, `user_id`, `annonce_id`, `user_id_client`, `created_at`, `updated_at`) VALUES
(2, 'Bonjour vous etes le meilleur', 5, 2, 9, 3, '2020-05-26 22:43:15', '2020-05-26 22:43:15');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commenter_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commenter_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 1,
  `child_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `status`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Sebaoui', 0, 'ali.sebaoui1@gmail.com', 'Bonjour', '2020-05-26 23:29:38', '2020-05-26 23:30:42');

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

CREATE TABLE `demandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `user_id_client` bigint(20) UNSIGNED NOT NULL,
  `user_id_partenaire` bigint(20) UNSIGNED NOT NULL,
  `annonce_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demandes`
--

INSERT INTO `demandes` (`id`, `debut`, `fin`, `status`, `user_id_client`, `user_id_partenaire`, `annonce_id`, `description`, `etat`, `created_at`, `updated_at`) VALUES
(2, '2020-05-28', '2020-05-31', 2, 3, 2, 9, 'Bonjourr', 0, '2020-05-26 22:22:59', '2020-05-26 22:36:50'),
(3, '2021-06-04', '2020-06-09', 1, 4, 2, 9, 'Bonjour', 0, '2020-05-26 22:24:22', '2020-05-26 22:31:55');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_06_30_113500_create_comments_table', 1),
(2, '2020_04_22_025443_create_failed_jobs_table', 1),
(3, '2020_04_22_025625_create_password_resets_table', 1),
(4, '2020_04_22_025700_create_categories_table', 1),
(5, '2020_04_22_025727_create_sous_categories_table', 1),
(6, '2020_04_22_025811_create_users_table', 1),
(7, '2020_04_22_030748_create_annonces_table', 1),
(8, '2020_05_11_222820_create_contacts_table', 1),
(9, '2020_05_16_165047_create_demandes_table', 1),
(10, '2020_05_18_164323_create_reservations_table', 1),
(11, '2020_05_18_214133_create_commentaires_table', 1),
(12, '2020_05_22_041553_create_commentaire_clients_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `debut_reserv` date NOT NULL,
  `fin_reserv` date NOT NULL,
  `annonce_id` bigint(20) UNSIGNED NOT NULL,
  `etat_reserv` int(11) NOT NULL DEFAULT 1,
  `user_id_client` bigint(20) UNSIGNED NOT NULL,
  `user_id_partenaire` bigint(20) UNSIGNED NOT NULL,
  `annulation` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `debut_reserv`, `fin_reserv`, `annonce_id`, `etat_reserv`, `user_id_client`, `user_id_partenaire`, `annulation`, `created_at`, `updated_at`) VALUES
(2, '2020-05-28', '2020-05-25', 9, 1, 3, 2, '2020-05-25 00:00:00', '2020-05-26 22:25:54', '2020-05-26 22:25:54');

-- --------------------------------------------------------

--
-- Structure de la table `sous_categories`
--

CREATE TABLE `sous_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sous_categories`
--

INSERT INTO `sous_categories` (`id`, `nom`, `category_id`, `created_at`, `updated_at`) VALUES
(4, 'Appareils photo et caméras', 3, '2020-05-26 20:04:01', '2020-05-26 20:04:01'),
(5, 'Véhicules professionnels', 4, '2020-05-26 20:05:22', '2020-05-26 20:05:22'),
(6, 'Vélos', 4, '2020-05-26 20:05:46', '2020-05-26 20:05:46'),
(7, 'Motos', 4, '2020-05-26 20:06:19', '2020-05-26 20:06:19'),
(8, 'Voitures', 4, '2020-05-26 20:06:54', '2020-05-26 20:06:54'),
(9, 'Maisons et villas', 5, '2020-05-26 20:07:56', '2020-05-26 20:07:56'),
(10, 'Terrains et fermes', 5, '2020-05-26 20:08:30', '2020-05-26 20:08:30'),
(11, 'Bateaux', 4, '2020-05-26 20:09:11', '2020-05-26 20:09:11'),
(12, 'Remorque', 4, '2020-05-27 22:01:18', '2020-05-27 22:01:18'),
(13, 'Caravane', 4, '2020-05-27 22:14:26', '2020-05-27 22:14:26'),
(14, 'MATÉRIEL video et consoles', 3, '2020-05-27 22:17:45', '2020-05-27 22:17:45'),
(15, 'JARDINAGE', 10, '2020-05-27 22:19:09', '2020-05-27 22:19:09'),
(16, 'MATÉRIEL', 10, '2020-05-27 22:19:31', '2020-05-27 22:19:31'),
(17, 'Accessoires', 7, '2020-05-27 22:41:46', '2020-05-27 22:41:46');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` bigint(20) NOT NULL,
  `code_postal` bigint(20) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/images/users/default.jpg',
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `etat_compte` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `username`, `tel`, `code_postal`, `image`, `ville`, `email`, `email_verified_at`, `password`, `genre`, `is_admin`, `deleted_at`, `etat_compte`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'adminame', 648631936, 3200, '/images/users/admin.png', 'Casablanca', 'admin@kriobjet.com', NULL, '$2y$10$UmXEGXXMylBiyG7eyRRVNelWM5mYxkmScLadl6Q1aDGBnZT9QoOei', 'Homme', 1, NULL, 1, NULL, '2020-05-26 00:54:52', '2020-05-26 00:54:52'),
(2, 'Kacimi', 'Amine', 'Kacimi', 648631936, 3200, '/images/users/1590620144.jpg', 'Settat', 'Kacimi@gmail.com', '2020-05-26 20:22:16', '$2y$10$/WWjw7nbrTfFLUmQW3t87OVz3RZr2YE2g/I52VUnhTYyN4m7IvULu', 'Homme', 0, NULL, 1, NULL, '2020-05-26 00:54:52', '2020-05-27 22:55:44'),
(3, 'Sebaoui', 'Ali', 'AsLbG', 648631936, 3200, '/images/users/1590620034.png', 'Settat', 'ali.sebaoui1@gmail.com', '2020-05-26 22:21:46', '$2y$10$q.ZXKotMeMzWOYSSaEgwCeRooDQ462wPga4L8wR3bM45YZamjHYY6', 'Homme', 0, NULL, 1, NULL, '2020-05-26 00:54:52', '2020-05-27 22:53:54'),
(4, 'Hanane', 'Foussoul', 'HananeFssl', 648621936, 3200, '/images/users/1590522768.png', 'Kénitra', 'Hanane@gmail.com', '2020-05-26 19:53:23', '$2y$10$eFR4GnODBr6LD1PKs428d.Kvfc/1cu65m5TTOc8poj2QrKh8S3yF.', 'Femme', 0, NULL, 1, NULL, '2020-05-26 19:52:48', '2020-05-26 19:53:23');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `annonces_user_id_foreign` (`user_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentaires_user_id_foreign` (`user_id`),
  ADD KEY `commentaires_annonce_id_foreign` (`annonce_id`);

--
-- Index pour la table `commentaire_clients`
--
ALTER TABLE `commentaire_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentaire_clients_user_id_foreign` (`user_id`),
  ADD KEY `commentaire_clients_annonce_id_foreign` (`annonce_id`),
  ADD KEY `commentaire_clients_user_id_client_foreign` (`user_id_client`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commenter_id_commenter_type_index` (`commenter_id`,`commenter_type`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  ADD KEY `comments_child_id_foreign` (`child_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `demandes_user_id_client_foreign` (`user_id_client`),
  ADD KEY `demandes_user_id_partenaire_foreign` (`user_id_partenaire`),
  ADD KEY `demandes_annonce_id_foreign` (`annonce_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_annonce_id_foreign` (`annonce_id`),
  ADD KEY `reservations_user_id_client_foreign` (`user_id_client`),
  ADD KEY `reservations_user_id_partenaire_foreign` (`user_id_partenaire`);

--
-- Index pour la table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sous_categories_category_id_foreign` (`category_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `commentaire_clients`
--
ALTER TABLE `commentaire_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `demandes`
--
ALTER TABLE `demandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `sous_categories`
--
ALTER TABLE `sous_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD CONSTRAINT `annonces_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_annonce_id_foreign` FOREIGN KEY (`annonce_id`) REFERENCES `annonces` (`id`),
  ADD CONSTRAINT `commentaires_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `commentaire_clients`
--
ALTER TABLE `commentaire_clients`
  ADD CONSTRAINT `commentaire_clients_annonce_id_foreign` FOREIGN KEY (`annonce_id`) REFERENCES `annonces` (`id`),
  ADD CONSTRAINT `commentaire_clients_user_id_client_foreign` FOREIGN KEY (`user_id_client`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `commentaire_clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD CONSTRAINT `demandes_annonce_id_foreign` FOREIGN KEY (`annonce_id`) REFERENCES `annonces` (`id`),
  ADD CONSTRAINT `demandes_user_id_client_foreign` FOREIGN KEY (`user_id_client`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `demandes_user_id_partenaire_foreign` FOREIGN KEY (`user_id_partenaire`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_annonce_id_foreign` FOREIGN KEY (`annonce_id`) REFERENCES `annonces` (`id`),
  ADD CONSTRAINT `reservations_user_id_client_foreign` FOREIGN KEY (`user_id_client`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reservations_user_id_partenaire_foreign` FOREIGN KEY (`user_id_partenaire`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD CONSTRAINT `sous_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
