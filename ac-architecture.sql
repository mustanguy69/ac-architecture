-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 22 mars 2020 à 03:08
-- Version du serveur :  5.7.19
-- Version de PHP :  7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ac-architecture`
--

-- --------------------------------------------------------

--
-- Structure de la table `collectif`
--

DROP TABLE IF EXISTS `collectif`;
CREATE TABLE IF NOT EXISTS `collectif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `side_img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `side_img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `side_img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cultuel`
--

DROP TABLE IF EXISTS `cultuel`;
CREATE TABLE IF NOT EXISTS `cultuel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `side_img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `side_img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `side_img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ehpad`
--

DROP TABLE IF EXISTS `ehpad`;
CREATE TABLE IF NOT EXISTS `ehpad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_right_html` longtext COLLATE utf8mb4_unicode_ci,
  `project_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `content_bottom_html` longtext COLLATE utf8mb4_unicode_ci,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ehpad`
--

INSERT INTO `ehpad` (`id`, `title`, `thumbnail`, `image4`, `content_right_html`, `project_file`, `updated_at`, `content_bottom_html`, `image1`, `image2`, `image3`, `image5`) VALUES
(1, 'Montplaisir la Plaine', 'AC_EHPAD_08034.png', 'REA_EHP_8034_Monplaisir_4.png', '<p><span class=\"page-title\">Localisation :</span><br />119, avenue Paul Santy,<br />69008 LYON</p>\r\n<p><span class=\"page-title\">Mission MOE :</span> <span style=\"float: right;\">Compl&egrave;te</span><br />BASE + EXE</p>\r\n<p><span class=\"page-title\">Ma&icirc;tre D&rsquo;Ouvrage</span><br />Entreprendre pour Humaniser la D&eacute;pendance</p>\r\n<p><span class=\"page-title\">Ma&icirc;tre D&rsquo;&OElig;uvre</span><br /><strong>Architecte</strong> <span style=\"float: right;\">AC Architecture Ing&eacute;nierie</span><br /><strong>Economiste</strong> <span style=\"float: right;\">Denizou</span><br /><strong>Bet Structure</strong> <span style=\"float: right;\">CVF</span><br /><strong>Bet Fluides</strong> <span style=\"float: right;\">Strem</span></p>\r\n<p><span class=\"page-title\">Livraison</span><br /><strong>Phase 1 :</strong><span style=\"float: right;\">Juillet 2019</span><br /><strong>Phase 2 :</strong><span style=\"float: right;\"> En cours</span></p>\r\n<p><span class=\"page-title\">Montant des travaux :</span> 8 000 000 &euro; H.T.</p>\r\n<p><span class=\"page-title\">Surface : </span><br /><strong>SDP R&eacute;habilit&eacute;e</strong> <span style=\"float: right;\">3 636 M2</span><br /><strong>SDP Cr&eacute;&eacute;e</strong> <span style=\"float: right;\">2 138 M2</span></p>', 'fiche.pdf', '2020-03-22 02:42:57', '<p>Cette EHPAD initialement compos&eacute;e de 71 chambres pour 83 lits souhaite augmenter sa capacit&eacute; &agrave; 93 chambres simples. Pour cela trois interventions sont pr&eacute;vues :</p>\r\n<p>1 / La restructuration compl&egrave;te des b&acirc;timents existants pour une mise aux normes et une r&eacute;novation basse consommation.</p>\r\n<p>2 / Une extension h&eacute;bergeant 27 chambres qui sera reli&eacute;e aux b&acirc;timents existants par une liaison vitr&eacute;e abritant des salons d&rsquo;&eacute;tages pour les r&eacute;sidents.</p>\r\n<p>3 / Une sur&eacute;l&eacute;vation de l&rsquo;existant rendant exploitable le dernier &eacute;tage coup&eacute; au centre par le volume de la chapelle et dont la toiture trop basse ne permettait pas une exploitation confortable.</p>\r\n<p><br />Les travaux sont r&eacute;alis&eacute;s en site occup&eacute; ; la premi&egrave;re phase de travaux a &eacute;t&eacute; r&eacute;ceptionn&eacute;e en juillet 2019, les travaux de la phase 2 sont en cours. Une troisi&egrave;me phase d&eacute;butera au d&eacute;but de l&rsquo;ann&eacute;e 2021.</p>', 'REA_EHP_8034_Monplaisir.png', 'REA_EHP_8034_Monplaisir_2.png', 'REA_EHP_8034_Monplaisir_3.png', 'REA_EHP_8034_Monplaisir_5.png'),
(2, 'Foyer Saint Sacrement', 'AC_EHPAD_04038.png', 'REA_EHP_08004_St Sacrement_4.png', '<p><span class=\"page-title\">Localisation :</span><br />10, rue de l&rsquo;Acad&eacute;mie<br />66000 PERPIGNAN</p>\r\n<p><span class=\"page-title\">Mission MOE :</span> <span style=\"float: right;\">Compl&egrave;te</span><br />BASE + EXE</p>\r\n<p><span class=\"page-title\">Projet pilote</span><br />Objectif label BBC Effinergie en secteur sauvegard&eacute;<br />Op&eacute;ration &laquo;chantier propre&raquo; ADEME_R&eacute;gion : tri des d&eacute;chets et<br />faibles nuisances</p>\r\n<p><span class=\"page-title\">Ma&icirc;tre D&rsquo;Ouvrage</span><br />Entreprendre pour Humaniser la D&eacute;pendance</p>\r\n<p><span class=\"page-title\">Ma&icirc;tre D&rsquo;&OElig;uvre</span><br /><strong>Architecte Conception</strong><span style=\"float: right;\">AC Architecture Ing&eacute;nierie</span><br /><strong>Architecte associ&eacute;</strong><span style=\"float: right;\">OPC Agena</span><br /><strong>Economiste</strong><span style=\"float: right;\">Denizou</span><br /><strong>Bet Structures</strong> <span style=\"float: right;\">ETB</span><br /><strong>Bet Fluides</strong> <span style=\"float: right;\">Burillo</span></p>\r\n<p><span class=\"page-title\">Livraison</span><span style=\"float: right;\">juillet 2014</span></p>\r\n<p><span class=\"page-title\">Montant des travaux :</span> 5 587 000 &euro; H.T</p>\r\n<p><span class=\"page-title\">Surface : </span><br /><strong>SDP R&eacute;habilit&eacute;e</strong> <span style=\"float: right;\">2 056 M2</span><br /><strong>SDP Cr&eacute;&eacute;e</strong> <span style=\"float: right;\">726 M2</span></p>', 'fiche.pdf', '2020-03-22 02:11:28', '<p>Restructuration et extension du foyer Saint Sacrement pour la cr&eacute;ation d&rsquo;un EHPAD de 72 lits. L&rsquo;op&eacute;ration se d&eacute;roule en site occup&eacute;. Il s&rsquo;agit d&rsquo;un chantier propre.</p>\r\n<p><br />Le projet s&rsquo;inscrit dans un contexte tr&egrave;s dense, en plein coeur de la vieille ville. Il y a d&rsquo;importantes d&eacute;molitions et les parties<br />cr&eacute;&eacute;es permettent un circuit de d&eacute;ambulation continu. L&rsquo;&eacute;difice comporte un parking en sous-sol (r&eacute;serv&eacute; au personnel).<br />L&rsquo;architecture traditionelle du lieu respecte le contexte dans lequel elle s&rsquo;ins&egrave;re.</p>', 'REA_EHP_08004_St Sacrement.png', 'REA_EHP_08004_St Sacrement_2.png', 'REA_EHP_08004_St Sacrement_3.png', 'REA_EHP_08004_St Sacrement_5.png');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `equipe1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `equipe1_cv` longtext COLLATE utf8mb4_unicode_ci,
  `equipe2_cv` longtext COLLATE utf8mb4_unicode_ci,
  `equipe3_cv` longtext COLLATE utf8mb4_unicode_ci,
  `equipe4_cv` longtext COLLATE utf8mb4_unicode_ci,
  `equipe5_cv` longtext COLLATE utf8mb4_unicode_ci,
  `equipe6_cv` longtext COLLATE utf8mb4_unicode_ci,
  `equipe7_cv` longtext COLLATE utf8mb4_unicode_ci,
  `equipe1_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe1_role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe1_role2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe2_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe2_role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe2_role2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe3_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe3_role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe3_role2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe4_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe4_role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe4_role2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe5_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe5_role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe5_role2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe6_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe6_role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe6_role2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe7_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe7_role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe7_role2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id`, `content_html`, `equipe1`, `equipe2`, `equipe3`, `equipe4`, `equipe5`, `equipe6`, `equipe7`, `updated_at`, `equipe1_cv`, `equipe2_cv`, `equipe3_cv`, `equipe4_cv`, `equipe5_cv`, `equipe6_cv`, `equipe7_cv`, `equipe1_name`, `equipe1_role`, `equipe1_role2`, `equipe2_name`, `equipe2_role`, `equipe2_role2`, `equipe3_name`, `equipe3_role`, `equipe3_role2`, `equipe4_name`, `equipe4_role`, `equipe4_role2`, `equipe5_name`, `equipe5_role`, `equipe5_role2`, `equipe6_name`, `equipe6_role`, `equipe6_role2`, `equipe7_name`, `equipe7_role`, `equipe7_role2`) VALUES
(1, '<p class=\"page-title\">Equipe</p>\r\n<p>L&rsquo;agence se compose de 6 personnalit&eacute;s. Chacune d&rsquo;entre elle participe &agrave; l&rsquo;&eacute;laboration du projet. Nos projets sont r&eacute;alis&eacute;s dans l&rsquo;&eacute;change et le partage. Cette collaboration enrichit notre conception architecturale.<br />Un projet prend naissance avec l&rsquo;association d&rsquo;un besoin et d&rsquo;un concept. Cette id&eacute;e directrice s&rsquo;enrichit, &eacute;volue et cro&icirc;t dans le dialogue.<br />Nos projets sont le fruit du lien tiss&eacute; entre le ma&icirc;tre d&rsquo;ouvrage, un programme, et une synth&egrave;se rigoureuse des aspects programmatiques, sociaux, techniques et financiers.</p>\r\n<p class=\"page-title\">Comp&eacute;tences</p>\r\n<p>Nos exp&eacute;riences professionnelles, ainsi que nos cursus individuels, nous permettent de disposer de comp&eacute;tences dans de nombreux domaines.<br />Nous int&egrave;grons d&egrave;s l&rsquo;esquisse la qualit&eacute; environnementale dans notre d&eacute;marche de conception. Nous intervenons dans la r&eacute;alisation de dossier technique de consultation. Nous assistons la ma&icirc;trise d&rsquo;ouvrage dans le choix des entreprises pour &eacute;tablir les march&eacute;s de travaux. Nous r&eacute;alisons, et assurons le suivi et la coordination des chantiers.</p>', 'equipe1.png', 'equipe2.png', 'equipe3.png', 'equipe4.png', 'equipe5.png', 'equipe6.png', 'equipe7.png', '2020-03-15 01:06:09', '<p><em>N&eacute; le 13 septembre 1949</em></p>\r\n                <p><strong>Dipl&ocirc;mes</strong></p>\r\n                <p style=\"text-align: left;\">1974 - Architecte DPLG ENSA Lyon<br />1974 - Capacit&eacute; d\'&eacute;clairagisme CNAM Lyon<br /><br /><strong>Parcours professionnel</strong></p>\r\n                <p style=\"text-align: left;\">1973 - 1975 Pierre Vurpas Architecte - Mission d\'architecte - Lyon<br />1977 - 1997 Cr&eacute;ation de AC avec T. Binachon &amp; M. Courdouan<br />1997 - Cr&eacute;ation de AC Architectes SARL<br />2001 - 2012 Association avec Christophe Chomel<br />2012 - 2018 Cr&eacute;ation de AC Architecture avec C. Vigan &amp; C. Chomel</p>\r\n                <p style=\"text-align: left;\"><strong>Formations</strong></p>\r\n                <p style=\"text-align: left;\">2009 - Habilitation SPS Niveau 3<br />2013 - R&eacute;glementation thermique 2012 &amp; r&eacute;novation durable</p>\r\n                <p style=\"text-align: left;\"><strong>R&eacute;alisations</strong></p>\r\n                <p style=\"text-align: left;\">2008 - 2010 Ehpad Saint Fran&ccedil;ois d\'Assise - EHD - Lyon<br />2011 - 2013 Ehpad Franciscaines - EHD - Lons le Saunier<br />2011 - 2012 Maison Saint Fran&ccedil;ois - ADSE - Saint Etienne<br />2012 - 2015 Ehpad Saint Joseph - EHD - Loriol sur Dr&ocirc;me<br />2013 - 2015 Foyer logement - Habitat Humanisme - Montpellier<br />2014 - 2016 Abbaye de la Rochette - Accueil &amp; Parloir - Congr&eacute;gation<br />Belmont Tramonet <br />2015 - 2017 Ehpad Notre Dame de la Providence - EHD<br />Varennes Vauzelles - Chantier en cours<br />2016 - 2017 Ehpad CARITAS - B&acirc;tir en humanit&eacute; - Lyon - Chantier en cours</p>\r\n                <p style=\"text-align: left;\"><strong>Autres activit&eacute;s</strong></p>\r\n                <p style=\"text-align: left;\">Membre de l\'OPP - BTP<br />Membre du syndicat des architectes du Rh&ocirc;ne</p>', '<p><em>N&eacute; le 11 f&eacute;vrier 1971</em></p>\r\n               <p><strong>Parcours professionnel</strong></p>\r\n               <p>1991 - 1994 AC Architectes - Lyon<br />1994 - 1998 Atelier 9 - Architecte Lib&eacute;ral - Lyon<br />1998 - 2001 BBZ Architecture - Architecte Associ&eacute; - Tarare<br />2001 - 2012 AC Architectes - Architecte Associ&eacute; - Lyon<br />2012 - 2018 AC Architecture &amp; Ing&eacute;ni&eacute;rie - Architecte Associ&eacute; - Lyon</p>\r\n               <p><strong>Formations</strong></p>\r\n               <p>2002 - Haute Qualit&eacute; Environnementale - GEPA<br />2008 - Qualit&eacute; ISO 9001 - Certification AC Architectes<br />2011 - Management entreprise - -<br />2013 - R&eacute;glementation thermique 2012 &amp; r&eacute;novation durable</p>\r\n               <p><strong>R&eacute;alisations</strong></p>\r\n               <p>1995 - Biblioth&egrave;que Centre de formation - ADSE - Saint Chamond<br />2008 - 2010 Foyer AAPHTV - Opacit&eacute; du Rh&ocirc;ne - Eveux<br />2008 - 2010 Ehpad Saint Fran&ccedil;ois d\'Assise - EHD - Lyon<br />2011 - 2013 Ehpad Franciscaines - EHD - Lons le Saunier<br />2012 - 2014 Immeuble ALP - EHD - Lyon<br />2013 - 2015 Foyer logement - Habitat Humanisme - Montpellier</p>\r\n               <p><strong>Autres activit&eacute;s</strong></p>\r\n               <p>2006 - 2007 Tr&eacute;sorier du syndicat des architectes du Rh&ocirc;ne<br />2007 - 2010 Repr&eacute;sentant UNSFA<br />2009 - 2010 Vice pr&eacute;sident de l\'UNSFA<br />2013 - 2015 Pr&eacute;sident du syndicat des architectes du Rh&ocirc;ne</p>\r\n          ', '<p><em>N&eacute;e le 11 d&eacute;cembre 1974</em></p>\r\n                <p><strong>Dipl&ocirc;mes</strong></p>\r\n                <p>2001 - Architecte DPLG ENSA Marseille<br />2011 - 2012 Qualit&eacute; Environnementale Int&eacute;gr&eacute;e au B&acirc;ti en r&eacute;novation<br /><br /><strong>Parcours professionnel</strong></p>\r\n                <p>2000 - 2002 Delta Ingenierie - Marseille<br />2002 - 2007 Henri Roussel Architecte - Marseille<br />2007 - 2008 Patrice Santoro Architecte - Lyon<br />2008 - 2012 AC Architectes - Lyon<br />2012 - 2018 AC Architecture &amp; Ing&eacute;ni&eacute;rie - Lyon</p>\r\n                <p><strong>Formations</strong></p>\r\n                <p>2009 - Accessibilit&eacute; pour Personnes &agrave; Mobilit&eacute; R&eacute;duite<br />2011 - Qualit&eacute; Environnementale Int&eacute;gr&eacute;e au B&acirc;ti en r&eacute;novation<br />2013 - Gestion de chantier - GEPA</p>\r\n                <p><strong>R&eacute;alisations</strong></p>\r\n                <p>2011 - 2012 Maison Saint Fran&ccedil;ois - ADSE - Saint Etienne<br />2012 - 2014 Accueil paroissial Saint Firmin - ADSE - Firminy<br />2013 - 2014 Maison Sainte Anne - ADSE - Roche la Moli&egrave;re<br />2014 - 2015 Coll&egrave;ge de Benaud - Cantine - ADSE - Firminy<br />2014 - 2016 Abbaye de la Rochette - Accueil &amp; Parloir - congr&eacute;gation<br />2016 - 2017 Ehpad Ma Demeure - Accueil, bureaux, oratoire - PAPVL<br />2016 - 2017 Ehpad CARITAS - B&acirc;tir en humanit&eacute; - Lyon - Chantier en cours.</p>\r\n                <p><strong>Autres activit&eacute;s</strong></p>\r\n                <p>Dessin<br />Peinture<br />D&eacute;coration</p>', '<p><em>N&eacute; le 21 octobre 1980</em></p>\r\n                <p><strong>Dipl&ocirc;mes</strong></p>\r\n                <p>2007 - Architecte DPLG ENSA Lyon<br />2011 - 2012 Architecture et Ing&eacute;nierie la Qualit&eacute; Environnementale <br />du B&acirc;ti et de l\'Urbanisme - QEB<br /><br /><strong>Parcours professionnel</strong></p>\r\n                <p>2002 - 2003 Bureau d\'Architecture Contemporaine - Lyon<br />2003 - 2004 Atelier Renaud Bala&yuml; - Lyon<br />2004 - 2012 AC Architectes - Lyon<br />2012 - 2018 AC Architecture &amp; Ing&eacute;ni&eacute;rie - Lyon</p>\r\n                <p><strong>Formations</strong></p>\r\n                <p>2008 - Accessibilit&eacute; pour Personnes &agrave; Mobilit&eacute; R&eacute;duite<br />2011 - 2012 Architecture et Ing&eacute;nierie la Qualit&eacute; Environnementale <br />du B&acirc;ti et de l\'Urbanisme - QEB<br />2013 - 2014 Construire en bois de A &agrave; Z<br />Centre National pour le Developpement du Bois</p>\r\n                <p><strong>R&eacute;alisations</strong></p>\r\n                <p>2008 - 2010 Immeuble l\'Orangerie - Bouygues Immobilier - St Chamond<br />2011 - 2013 Ehpad Franciscaines - EHD - Lons le Saunier<br />2012 - 2014 Immeuble ALP - EHD - Lyon<br />2012 - 2015 Ehpad Saint Joseph - EHD - Loriol sur Dr&ocirc;me<br />2016 - 2017 Immeuble C&ocirc;t&eacute; Village - PERSPECTIM Immobilier<br />Echirolles - Chantier en cours<br />2015 - 2017 Ehpad Notre Dame de la Providence - EHD<br />Varennes Vauzelles - Chantier en cours</p>\r\n                <p><strong>Autres activit&eacute;s</strong></p>\r\n                <p>Histoire de l\'architecture<br />Informatique<br />Maquettisme &amp; Mod&egrave;lisme</p>', '<p><em>N&eacute;&nbsp;le&nbsp;11&nbsp;juin&nbsp;1988&nbsp;</em></p>\r\n                <p><strong>Dipl&ocirc;mes</strong></p>\r\n                <p>2013 ‐ Architecte Diplom&eacute; d\'Etat - Ecole Nationale Sup&eacute;rieure d\'Architecture de Saint Etienne <br />2010 ‐ 2011 Erasmus &agrave; l\'University of Technology and Economics - Budapest ‐ Hongrie <br />2007 ‐ Premier cycle d\'architecture &agrave; l\'ENSA Saint‐Etienne <br />2005 ‐ 2007 B.T Collaborateur d\'architecte <br />Lyc&eacute;e professionnel du Nivolet &agrave; La Ravoire ‐ Savoie <br />2005 ‐ 2007 B.E.P Technique de l\'architecture et de l\'habitat Lyc&eacute;e professionnel du b&acirc;timent &agrave; Bron ‐ Rh&ocirc;ne</p>\r\n                <p><strong>Fonction&nbsp;</strong></p>\r\n                <p>Assistant&nbsp;de&nbsp;projet&nbsp;Niveau&nbsp;1<br />Dessinateur&nbsp;Niveau&nbsp;2&nbsp;</p>\r\n                <p><strong>Parcours&nbsp;professionnel&nbsp;</strong></p>\r\n                <p>2012&nbsp;‐&nbsp;Agence&nbsp;d\'architecture&nbsp;‐&nbsp;SOHO&nbsp;‐&nbsp;Lyon&nbsp;‐&nbsp;Rh&ocirc;ne<br />2014&nbsp;‐&nbsp;2015 Architecte&nbsp;assistant&nbsp; <br />AMA&nbsp;Pracownia&nbsp;Architektoniczno‐Konstrukcyjna&nbsp;‐&nbsp;Pologne&nbsp; <br />2015&nbsp;‐&nbsp;Coordinateur&nbsp;de&nbsp;travaux&nbsp;de&nbsp;construction&nbsp; <br />Quadrapol&nbsp;‐&nbsp;Cracovie&nbsp;‐&nbsp;Pologne&nbsp; 2015&nbsp;‐&nbsp;2017&nbsp;Architecte&nbsp;assistant&nbsp;‐&nbsp;BDM\'architekci&nbsp;‐&nbsp;Varsovie&nbsp;‐&nbsp;Pologne&nbsp;</p>\r\n                <p><strong>Formations&nbsp;</strong></p>\r\n                <p>2011&nbsp;‐&nbsp;Initiation&nbsp;‐&nbsp;Charpente&nbsp;‐&nbsp;SARL&nbsp;Ferr&eacute;ol&nbsp;‐&nbsp;Savigny&nbsp;‐&nbsp;Rh&ocirc;ne&nbsp;</p>\r\n                <p><strong>R&eacute;alisations&nbsp;</strong></p>\r\n                <p>2011&nbsp;‐ R&eacute;habilitation&nbsp;d\'un&nbsp;corps&nbsp;de&nbsp;ferme&nbsp;‐&nbsp;Lentilly&nbsp;‐&nbsp;Rh&ocirc;ne&nbsp;</p>\r\n                <p><strong>Autres&nbsp;activit&eacute;s&nbsp;</strong></p>\r\n               <p>Travail&nbsp;du&nbsp;bois&nbsp;pour&nbsp;cr&eacute;ation&nbsp;de&nbsp;meuble.&nbsp;<br />V&eacute;lo&nbsp;<br />Natation<br />Course&nbsp;&agrave;&nbsp;pied&nbsp;</p>', '<p><em>N&eacute;e le 06 d&eacute;cembre 1972</em></p>\r\n                <p><strong>Dipl&ocirc;mes</strong></p>\r\n                <p>1993 - BTS Comptabilit&eacute; - Gestion<br />1994 - Dipl&ocirc;me Europ&eacute;en de Chambres de Commerce<br />1991 - Bac G2 Comptabilit&eacute;-Gestion<br /><br /><strong>Parcours professionnel</strong></p>\r\n                <p>1995 - 1997 Secr&eacute;taire-comptable - Espace &amp; Cie construction de d&eacute;cors<br />1998 - Aide comptable - Cabinet Mahamid<br />1999 - 2013 Secr&eacute;taire-comptable - Cabinet Chassagneux Architecte.<br />2013 - 2018 Assitante de direction - AC Architecture &amp; Ing&eacute;ni&eacute;rie</p>\r\n                <p><strong>Formations</strong></p>\r\n                <p>2000 - Comptabilit&eacute;<br />2001 - Gestion</p>\r\n                <p><strong>Autres activit&eacute;s</strong></p>\r\n                <p>Musique<br />Nautisme</p>', ' <p><em>N&eacute;e en 1993</em></p>\r\n                <p><strong>Dipl&ocirc;mes</strong></p>\r\n                <p>2017&ndash;Dipl&ocirc;m&eacute;e d&rsquo;un Bachelor et Master avec distinction &agrave; la facult&eacute; d&rsquo;architecture de l&rsquo;Universit&eacute; Libre de Bruxelles La Cambre-Horta, Belgique.<br />2009-2011 Dipl&ocirc;m&eacute;e d&rsquo;un DUT g&eacute;nie thermique et &eacute;nergie de l&rsquo;IUT-A au sein de l&rsquo;universit&eacute; Claude Bernard Lyon 1,France.</p>\r\n                <p><strong>Parcours professionnel</strong></p>\r\n                <p>2017-2019 Architecte stagiaire dans le bureau d&rsquo;architecture Bachelard Wagner &agrave; B&acirc;le, communication en langue Anglaise.<br />1er prix remport&eacute; d&rsquo;un master plan pour 57000m2 de logements et une &eacute;cole &agrave; Prattelnu.<br />2016 Stage 2 mois dans le bureau Ledroit Pierret Polet architectes &agrave; Bruxelles.<br />Esquisse d&rsquo;avant projet et maquette au 50&egrave;me d&rsquo;une maison d&rsquo;habitation &agrave; Louvain-la-Neuve<br />2014 Stage 1 mois ouvrier en construction ossature bois dans la soci&eacute;t&eacute; Roger Armenjon (Savoie, France) :<br />Manipulation et observation concr&egrave;te de la construction d&rsquo;une charpente sur maison ossature bois.<br />2011 Stage de 4 mois puis employ&eacute; 2 mois dans un bureau d&rsquo;&eacute;tude fluide, soci&eacute;t&eacute; GLM Etudes techniques &agrave; Lyon,<br />Calculs de d&eacute;perditions, trac&eacute;s et dimensionnements de r&eacute;seaux.2010 Stage dans un bureau d&rsquo;&eacute;tude thermique, soci&eacute;t&eacute; Eurextherme &agrave; Lyon, 1 mois.<br />Traitement de dossiers photovolta&iuml;ques, diagnostics de performances &eacute;nerg&eacute;tiques (DPE).</p>\r\n                <p><strong>Formations</strong><br />2012&ndash;Erasmus (ma1) au Joint Master of Architecture &agrave; Fribourg, Suisse<br />2011-2012 1e ann&eacute;e de licence de physique en Angleterre &agrave; Leeds en correspondance avec l&rsquo;universit&eacute; Pierre et Marie<br />Curie de Paris.</p>\r\n                <p><strong>Hobbies</strong></p>\r\n                <p>S&eacute;rigraphie<br />Conception de vitraux<br />5 ans de cours d&rsquo;arts plastiquesNatation et plong&eacute;e sous-marine</p>\r\n            ', 'Bernard Trève', 'Président', 'Architecte associé', 'Christophe Chomel', 'Architecte associé', 'Responsable chantier', 'Quitrie de Raigniac', 'Architecte associé', 'Responsable Communication', 'Alban Goguet', 'Architecte associé', 'Responsable Informatique', 'Nicolas Fort', 'Architecte DPLG', NULL, 'Valérie Bonnet', 'Assistante de Direction', NULL, 'Solène Houdeau', 'Architecte diplômée', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

DROP TABLE IF EXISTS `equipement`;
CREATE TABLE IF NOT EXISTS `equipement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `side_img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `side_img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `side_img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `individuel`
--

DROP TABLE IF EXISTS `individuel`;
CREATE TABLE IF NOT EXISTS `individuel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` longtext COLLATE utf8mb4_unicode_ci,
  `side_img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `side_img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `side_img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20200211035443', '2020-02-14 22:32:34'),
('20200211042311', '2020-02-14 22:32:35'),
('20200211043955', '2020-02-14 22:32:36'),
('20200211044727', '2020-02-14 22:32:36'),
('20200214041005', '2020-02-14 22:32:37'),
('20200214042450', '2020-02-14 22:32:37'),
('20200214232340', '2020-02-14 23:23:55'),
('20200214232817', '2020-02-14 23:28:26'),
('20200218095259', '2020-02-18 09:53:48'),
('20200218101830', '2020-02-18 10:18:48'),
('20200309010825', '2020-03-09 01:08:43'),
('20200309014641', '2020-03-09 01:46:57'),
('20200315011807', '2020-03-15 01:18:52'),
('20200315015534', '2020-03-15 01:55:46'),
('20200321034701', '2020-03-21 03:47:41'),
('20200321040452', '2020-03-21 04:04:59'),
('20200322020724', '2020-03-22 02:07:48');

-- --------------------------------------------------------

--
-- Structure de la table `organisation`
--

DROP TABLE IF EXISTS `organisation`;
CREATE TABLE IF NOT EXISTS `organisation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `organisation`
--

INSERT INTO `organisation` (`id`, `content_html`, `image`, `updated_at`) VALUES
(1, '<p class=\"page-title\">Organisation et moyens</p>\r\n<p class=\"page-title\"><br />Cloud</p>\r\n<p>L&rsquo;agence dispose d&rsquo;un espace de stockage externalis&eacute; de type Cloud.<br />Cette plate-forme s&eacute;curis&eacute;e simplifie la diffusion et l&rsquo;&eacute;change des donn&eacute;es avec les intervenants du projet.</p>\r\n<p class=\"page-title\">Bim</p>\r\n<p>Notre conception comprend une mod&eacute;lisation de nos projets en 3D. Cette maquette num&eacute;rique facilite les interactions entre les bureaux d&rsquo;&eacute;tudes et permet une meilleure synth&egrave;se des &eacute;l&eacute;ments techniques.</p>\r\n<p class=\"page-title\">Sauvegarde</p>\r\n<p>Ce type de sauvegarde offre une garantie accrue de nos donn&eacute;es. Les &eacute;l&eacute;ments inscrits sur un disque sont instantan&eacute;ment copi&eacute;s sur un autre disque en secours en cas de d&eacute;faillance du premier.</p>\r\n<p class=\"page-title\">Comp&eacute;tences</p>\r\n<p>Nos exp&eacute;riences professionnelles, ainsi que nos cursus individuels, nous permettent de disposer de comp&eacute;tences dans de nombreux domaines.<br />Nous int&eacute;grons d&egrave;s l&rsquo;esquisse la qualit&eacute; environnementale dans notre d&eacute;marche de conception. Nous intervenons dans la r&eacute;alisation de dossier technique de consultation. Nous assistons la ma&icirc;trise d&rsquo;ouvrage dans le choix des entreprises pour &eacute;tablir les march&eacute;s de travaux. Nous r&eacute;alisons, et assurons le suivi et la coordination des chantiers.</p>', 'organisation.png', '2020-03-15 01:50:55');

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

DROP TABLE IF EXISTS `presentation`;
CREATE TABLE IF NOT EXISTS `presentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`id`, `content_html`, `image`, `updated_at`) VALUES
(1, '<p class=\"page-title\">Pr&eacute;sentation</p>\r\n<p>Issue de la r&eacute;union de AC ARCHITECTES (cr&eacute;&eacute;e en 1977) et du cabinet lib&eacute;ral Claude VIGAN architecte (cr&eacute;&eacute; en 1981), l&rsquo;agence AC Architecture &amp; Ing&eacute;ni&eacute;rie s&rsquo;est cr&eacute;&eacute;e &agrave; lyon en 2012 autour de 2 architectes b&eacute;n&eacute;ficiant de solides exp&eacute;riences professionnelles pr&eacute;alables, d&eacute;sirant mettre en oeuvre une ambition architecturale commune.</p>\r\n<p>Cette ambition s&rsquo;exprime au travers de 3 activit&eacute;s compl&eacute;mentaires :<br />1 - La d&eacute;finition des besoins pour &eacute;tablir les donn&eacute;es n&eacute;cessaires &agrave; un<br />programme support, de la conception au projet.<br />2 - La conception en lien avec le programme et notre interpr&eacute;tation de la<br />commande dans le but de r&eacute;aliser un projet commun.<br />3 - La r&eacute;alisation, transcription mat&eacute;rielle des donn&eacute;es initiales issues<br />d&rsquo;une collaboration entre une demande et la traduction de l&rsquo;architecte.</p>\r\n<p>Ces 3 activit&eacute;s forment les bases de notre d&eacute;marche. L&rsquo;accompagnement et l&rsquo;&eacute;change sont les liens que nous b&acirc;tissons ensemble. Nous donnons une forte volont&eacute; d&rsquo;interconnexion entre ces 3 &eacute;tapes d&rsquo;&eacute;laboration du projet.</p>\r\n<p class=\"page-title\">Philosophie et d&eacute;marche</p>\r\n<p><strong>Collaboration</strong><br />La composition de l&rsquo;agence permet d&rsquo;affecter les comp&eacute;tences les plus<br />pertinentes au cours de l&rsquo;avancement des &eacute;tudes. Un interlocuteur privil&eacute;gi&eacute; int&egrave;gre, &eacute;change et synth&eacute;tise les donn&eacute;es pour que le projet soit constitutif de notre d&eacute;marche.</p>\r\n<p>Conception h&eacute;t&eacute;roclite<br /><strong>Les EHPAD</strong> accueillent des &ecirc;tres humains qui empruntent leur dernier chemin. L&rsquo;accompagnement de cette population fragilis&eacute;e et souvent d&eacute;munie est la pierre angulaire de notre conception.<br />D&egrave;s l&rsquo;esquisse, et tout au long du projet nous tenons compte des contraintes sociales et humaines dans l&rsquo;objectif de minimiser l&rsquo;impact de notre intervention. Notre action s&rsquo;inscrit dans la vie de l&rsquo;&eacute;tablissement. Elle sert et r&eacute;pond aux attentes des utilisateurs et vise &agrave; ma&icirc;triser le co&ucirc;t global dans le but d&rsquo;offrir aux r&eacute;sidents des prix journ&eacute;e contenus et accessibles.<br /><strong>Les lieux de cultes</strong> sont des espaces o&ugrave; s&rsquo;expriment les convictions et les croyances de notre population.<br />Une conception sensible et empreinte de sens prend en consid&eacute;ration la<br />concomitance du culturel et du cultuel.<br /><strong>Les mairies</strong> sont des lieux d&rsquo;exercice politique dans lequel se manifeste<br />l&rsquo;expression d&rsquo;une volont&eacute; locale. Nous accordons un soin particulier &agrave; l&rsquo;&eacute;laboration de ces espaces de vie publique car ils sont le reflet de notre soci&eacute;t&eacute;.<br /><strong>Le logement collectif et individuel</strong> s&rsquo;opposent dans les termes mais<br />leurs conceptions comportent de nombreux traits communs. Les besoins, les prestations, divergent mais leurs objectifs sont similaires. Ils accueillent des acteurs de la vie quotidienne et doivent en ce sens transmettre des valeurs et offrir le confort n&eacute;cessaire &agrave; l&rsquo;&eacute;panouissement de leurs occupants.</p>\r\n<p class=\"page-title\">Engagement architectural</p>\r\n<p>Nous affectons les ressources et les comp&eacute;tences les plus pertinentes des membres de notre agence selon la nature du projet. Nous sommes soucieux de produire un travail de qualit&eacute;, quelque soit notre interlocuteur.<br />La haute qualit&eacute; environnementale, architecturale, le respect de l&rsquo;environnement et la consid&eacute;ration des acteurs de la ma&icirc;trise d&rsquo;ouvrage sont des vecteurs pour que notre architecture soit une manifestation b&acirc;tie dans un lieu, un moment, avec des moyens r&eacute;pondants &agrave; des besoins et &agrave; une destination pr&eacute;cise et unique.</p>', 'presentation.png', '2020-03-09 02:25:52');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `content_html`, `image`, `updated_at`) VALUES
(1, '<p class=\"page-title\">Services</p>\r\n<p>Dans cette cat&eacute;gorie, nous pouvons d&eacute;tailler toutes les missions que nous r&eacute;alisons. Nous nous calquons sur le canevas de la Loi MOP, en indiquant les principales phases d&rsquo;&eacute;tudes comme&nbsp;:<br />&Eacute;tat des lieux &ndash; Esquisse &ndash; Faisabilit&eacute; - Avant projet sommaire - Avant projet d&eacute;finitif - Permis de construire - Dossier de consultation des entreprise &ndash; Chantier.<br />Toutes ces phases peuvent &ecirc;tre d&eacute;crites de fa&ccedil;on tr&egrave;s sommaire et illustr&eacute;es par une planche regroupant des illustrations significatives par phase.</p>\r\n<p class=\"page-title\">Offres</p>\r\n<p>Concernant nos contrats, et en relation avec le descriptif ci-dessus nous indiquons que nos &eacute;tudes font r&eacute;f&eacute;rence &agrave; la loi MOP.<br />Nos travaux sont d&eacute;compos&eacute;s par &eacute;tape ce qui offre au client une lecture claire de l&rsquo;avancement de nos &eacute;tudes, de leurs facturations et de leurs engagements.</p>', 'services.png', '2020-03-15 01:53:40');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `roles`, `password`) VALUES
(2, 'admin', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$QzFyUlFINXNPL2p5bkphLw$YVulHen+iu7bginTUXAh0mSHsgFWz7xbog//HLAwX/U');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
