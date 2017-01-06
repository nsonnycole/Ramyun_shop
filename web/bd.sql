-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Jeu 15 Décembre 2016 à 16:43
-- Version du serveur :  5.6.33
-- Version de PHP :  7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `ramyunShop`
--

-- --------------------------------------------------------

--
-- Structure de la table `MenuLike`
--

CREATE TABLE `MenuLike` (
  `idLike` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `idMenu` int(11) DEFAULT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `MenuLike`
--

INSERT INTO `MenuLike` (`idLike`, `note`, `idMenu`, `user`) VALUES
(15, 5, 9, 'Naaomie'),
(16, 2, 11, 'Sonny'),
(17, 0, 10, 'Naaomie');

-- --------------------------------------------------------

--
-- Structure de la table `Menus`
--

CREATE TABLE `Menus` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ingredients` longtext COLLATE utf8_unicode_ci,
  `image` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Menus`
--

INSERT INTO `Menus` (`id`, `titre`, `description`, `ingredients`, `image`) VALUES
(9, 'Recette de ramen au bœuf', 'Un ramen au bœuf riche et rapide à préparer\r\nCe ramen de bœuf est un plat goûteux et consistant qui saura couvrir votre appétit. Ce plat rapide à préparer contient un nombre de calories idéal en tant que plat principal d’un repas avec 600 Kcalories par portion.', '250 g de bavette de boeuf\r\n110 g de Choy Sum (chou chinois)\r\n4 gousses d’ail\r\n3 oignons verts\r\n55 g de champignons Enoki\r\n30 g de gingembre en morceaux\r\n3 cuillères à soupe de Demi-Glace de bœuf (sauce réduite)\r\n3 cuillères à soupe de pâte de miso blanc\r\n2 cuillères à soupe de sauce soja\r\n2 cuillères à café de sauce hoisin\r\n350 g de Ramen frais', 'http://www.recette-ramen.fr/wp-content/uploads/2014/05/ramen-au-boeuf.png'),
(10, 'Ramen de Bœuf au Curry Vert', 'Savourez le bœuf dans un ramen original au curry vert :\r\nCe ramen  peut être confectionné le soir car il nécessite un temps de préparation entre 30 min et 1h de préparation et environ 15 min de temps de cuisson. Le coût de cette recette de bœuf reste très abordable, cependant vous aurez peut-être quelques difficultés à trouver du curry vert. Je vous invite donc à le rechercher dans des magasins spécialisés asiatiques ou dans les rayons « saveur d’ailleurs » à l’intérieur de vos supermarchés les plus proches.', '200 g de nouilles.\r\n300 g de filets de bœuf\r\n60 g de fèves écossées\r\n30 g de pois mange-tout\r\n30 g de champignons noirs déshydratés\r\n1 œuf par convive\r\n40 cl de lait de coco\r\n3 cl de sauce soja\r\n3 cl de sauce nuoc-mâm\r\n1 gousse d’ail\r\n1 échalote\r\n1 c. à s. de pâte de curry vert\r\nSel et poivre\r\n\r\nGingembre moulu\r\nPiment (facultatif)', 'http://www.recette-ramen.fr/wp-content/uploads/2014/05/Ramen-Curry-Vert-2.jpg'),
(11, 'Recette du Ramen Poulet soupe Miso', 'Cette recette de ramen poulet est très facile à réaliser, d’autant plus que tous les ingrédients  dont vous avez besoin se retrouvent dans le commerce facilement. La recette de soupe miso au ramen poulet n’est pas difficile à prendre en main, de plus, elle est personnalisable à souhait, en fonction de vos envies et de vos goûts. Je vous fais part plus bas de mes conseils et astuces pour enrichir ce plat de ramen poulet délicieux.', '4 filets ou cuisses de poulet ou émincés\r\n\r\n4 sachets de ramen (environ 300 g de nouilles japonaises)\r\n\r\nSauce Soja\r\n\r\n1 feuille de wakamé\r\n\r\n1 échalote\r\n\r\n1 oignon\r\n\r\n50g de miso blanc\r\n\r\n1 chou chinois\r\n\r\n2 carottes', 'http://www.recette-ramen.fr/wp-content/uploads/2015/02/Ramen-Poulet-Miso.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`) VALUES
(1, 'sonny@mail.fr', 'test', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `MenuLike`
--
ALTER TABLE `MenuLike`
  ADD PRIMARY KEY (`idLike`),
  ADD KEY `IDX_20ED5A13EF8640D` (`idMenu`);

--
-- Index pour la table `Menus`
--
ALTER TABLE `Menus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `MenuLike`
--
ALTER TABLE `MenuLike`
  MODIFY `idLike` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `Menus`
--
ALTER TABLE `Menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `MenuLike`
--
ALTER TABLE `MenuLike`
  ADD CONSTRAINT `FK_20ED5A13EF8640D` FOREIGN KEY (`idMenu`) REFERENCES `Menus` (`id`);
