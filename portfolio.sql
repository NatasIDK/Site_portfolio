-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2023 at 02:04 PM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `email` varchar(60) NOT NULL,
  `message` text NOT NULL,
  `name` varchar(59) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`email`, `message`, `name`, `id`) VALUES
('test@g.c', 'test', 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id` varchar(10) NOT NULL,
  `NavProjet` varchar(50) NOT NULL,
  `Navnomprojet1` varchar(50) NOT NULL,
  `Navnomprojet2` varchar(50) NOT NULL,
  `Navnomprojet3` varchar(50) NOT NULL,
  `Navnomprojet4` varchar(50) NOT NULL,
  `headicon` text NOT NULL,
  `headtitle` text NOT NULL,
  `navHome` varchar(50) NOT NULL,
  `navContact` varchar(50) NOT NULL,
  `navnomprojet5` varchar(50) NOT NULL,
  `navnomprojet6` varchar(50) NOT NULL,
  `navCV` varchar(10) NOT NULL,
  `imgparallax1` varchar(50) NOT NULL,
  `imgparallax2` varchar(50) NOT NULL,
  `imgMOI` varchar(50) NOT NULL,
  `parah2` varchar(50) NOT NULL,
  `paratext` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `NavProjet`, `Navnomprojet1`, `Navnomprojet2`, `Navnomprojet3`, `Navnomprojet4`, `headicon`, `headtitle`, `navHome`, `navContact`, `navnomprojet5`, `navnomprojet6`, `navCV`, `imgparallax1`, `imgparallax2`, `imgMOI`, `parah2`, `paratext`) VALUES
('1', 'Project', 'Com personel', 'Algo Python', 'Html/CSS', 'Web JS', 'imgs/icon_logo.png', 'Présentation Ethan Petitjean', 'Home', 'Contact', 'sql/php', '', 'CV', 'imgs/parallax1.jpg', 'imgs/parallax2.jpg', 'Photo d emoi', 'Présentation', 'bonjour et bienvenue sur mon Portfolio. Comme vous le savez surement ce site sers principalement à me présenter et à faire savoir de quoi je suis capable. Donc tout d''abords je m''appelle Ethan Petitjean, j''ai maintenant 19ans. je vis à Lyon pour mes études. Je suis en première année en cyber sécurité à Guardia.\r\n              <br>\r\n              <br> Qu''est ce que c''est Guardia? Guardia est une école dedié à la Cyber Sécurité. J''ai choisie personnellement cette école car elle permet une approche beaucoup plus pratique sur le métier que les autres école. Elle a pour fonction de faire que des cours par projet, c''est à dire grossièrement que l''école nous donne un projet à réalise et on a entre 1/2 semaine pour les réaliser. Ils y a différents type de projet je vais vous en sité quelqu''uns (htlm/css,C/C++,l''algorithmique python, les reseaux ...)\r\n              <br>\r\n              <br> Aprés hors de l''école j''effectue biensur d''autre activité comme le sport avec le tennis et de la musculation de temps en temps, je fais aussi de la musique je suis assez divers la dessus comme j''aime beaucoup découvrir d''autre instrument à chaque fois j''en ai fait plusieur comme le piano, guitare, base, batterie et encore le ukulele. \r\n              <br> A finir ... ');

-- --------------------------------------------------------

--
-- Table structure for table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `id` int(11) NOT NULL,
  `nomeforhome` varchar(50) NOT NULL,
  `titrepage` varchar(50) NOT NULL,
  `navhome` varchar(50) NOT NULL,
  `navcontact` varchar(50) NOT NULL,
  `navgame` varchar(50) NOT NULL,
  `navcv` varchar(50) NOT NULL,
  `h1titre` varchar(50) NOT NULL,
  `paragh1` text NOT NULL,
  `h2titre` varchar(50) NOT NULL,
  `paragh2` text NOT NULL,
  `carouimg1` varchar(50) NOT NULL,
  `carouimg2` varchar(50) NOT NULL,
  `carouimg3` varchar(50) NOT NULL,
  `carouimg4` varchar(50) NOT NULL,
  `carouimg5` varchar(50) NOT NULL,
  `carouimg6` varchar(50) NOT NULL,
  `h3titre` varchar(50) NOT NULL,
  `competence1t` varchar(50) NOT NULL,
  `competence2t` varchar(50) NOT NULL,
  `competence3t` varchar(50) NOT NULL,
  `competence4t` varchar(50) NOT NULL,
  `competencepara1` text NOT NULL,
  `competencepara2` text NOT NULL,
  `competencepara3` text NOT NULL,
  `competencepara4` text NOT NULL,
  `h4retour` varchar(50) NOT NULL,
  `paragretour` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projet`
--

INSERT INTO `projet` (`id`, `nomeforhome`, `titrepage`, `navhome`, `navcontact`, `navgame`, `navcv`, `h1titre`, `paragh1`, `h2titre`, `paragh2`, `carouimg1`, `carouimg2`, `carouimg3`, `carouimg4`, `carouimg5`, `carouimg6`, `h3titre`, `competence1t`, `competence2t`, `competence3t`, `competence4t`, `competencepara1`, `competencepara2`, `competencepara3`, `competencepara4`, `h4retour`, `paragretour`) VALUES
(1, 'Com Perso', 'Communication Perso', 'Home', 'Contact', 'Game', 'CV', 'Communication personnelle', '<br>\r\n                Voici notre premier projet réalisé cette année, lors de ce dernier,\r\n                l''objecif etait de faire parler les apprenants devant une audiance. On a vu pendant le kick-off \r\n                plusieur cour théorique, comment on devait parler en public, qu''elle language utilisé et bien d''autre encore.\r\n                l''intervenant qui nous a aidé pendant ce projet était une journaliste donc savait exactement \r\n                comment bien parler face au autre.\r\n                Le but de ce projet était de prendre un sujet que nous voulons. Personnellement pour nous \r\n                mettre au defis moi et mon groupe on a choisie un objet absurde (corde à sauter apple).', ' Le contenue de ce projet', 'Notre présentation, étais sur une corde à sauter, et nous avions pour objectif\r\n                de la vendre en chantant ses mérites et ses avantages. \r\n                <br>\r\n                Pour ça, nous avons réalisé un diaporama, contenant les bien fais de la corde à\r\n                sauter, et pourquoi choisir cette corde à sauter connecté la.', 'imgs/diapo1.jpg', 'imgs/diapo2.jpg', 'imgs/diapo3.jpg', 'imgs/diapo4.jpg', 'imgs/diapo5.jpg', 'imgs/diapo6.jpg', 'Compétences', 'Prise de parole en public', 'Soutenance orale devant un jury', 'Réponse aux questions ', 'Tenue d’un argumentaire ', 'Ici, la compétence attendu, est de savoir prendre la parole en public et de pouvoir\r\n                    se faire comprendre. C''est à dire tenue correcte, ne pas touner le dos par exemple, et bonne présentance. ', 'Ici, la compétence attendu, et de savoir prendre la parole devant un jury, ne pas \r\n                    prendre peur et être convaincu de ce qu''on l''on dit, ne pas douter de soi.', 'Ici, la compétence attendu, et de savoir répondre à des questions sur un sujet que \r\n                    que l''on a travailé. Il faut maitriser son domaine, et ne pas se retrouver sans réponse.', 'Ici, la compétence attendu, et de savoir tenir des propos arguments, savoir se \r\n                    justifier ses choix. Il faut des arguments solide et recherché.', 'Mon retour', 'Comme premier projet je l''ai trouver assez utile car cela nous a \r\n                permis à être beaucoup plus à l''aise à l''oral pour nos futur projet. Ca ma permit aussi à bien\r\n                comprendre les postures à avoir pendant les présentation et comment parler correctement.'),
(2, 'Algo Python', 'Initiation algorithmique', 'Home', 'Contact', 'Game', 'Cv', 'L''algorithmie avec Python ', 'Pour faire assez court, cette initiation avait pour but de nous permettre de revoir \r\n                les bases de l''algorithmie, notament sur Larp, mais aussi de nous permettre de revoir\r\n                ou de voir les bases du python. Pour les plus curieux, il était même possible de créer \r\n                une interface graphique, soit avec Tkunter, soit avec Pygame.', ' Le contenue de ce projet ', 'Première partie, nous présention l''algorithme et notre programme, pour que l''Intervenant\r\n                puisse voir, notre code, et relever les erreurs. Ensuite nous lui avons fait une démonstration\r\n                du déroulement de programme, et comment "actionner" les easter eegs.\r\n                <br>\r\n                <br>\r\n                Deuxième partie, nous avons eux le droit à des questions sur VIM et Git, de cette \r\n                maniènère l''intervenant pouvait s''assurer que nous avions bien acqueris les compétences \r\n                demandées, et que tout les membres du groupes avaient contribués au travail.', 'imgs/morpion1.jpg', 'imgs/morpion2.jpg', 'imgs/morpion3.jpg', 'imgs/morpion4.jpg', 'img/morpion5.jpg', 'img/morpion6.jpg', 'Compétences', 'Connaître les bonnes pratiques de développement.', 'Comprendre les principes de base de l’algorithmiqu', 'Rédiger des algorithmes de base.', 'Dérouler des algorithmes sur papier.', 'Ici, la compétence attendu, est de savoir prendre la parole en public et de pouvoir\r\n                      se faire comprendre. C''est à dire tenue correcte, ne pas touner le dos par exemple, et bonne présentance. ', 'Ici, la compétence attendu, et de savoir prendre la parole devant un jury, ne pas \r\n                      prendre peur et être convaincu de ce qu''on l''on dit, ne pas douter de soi.', 'Ici, la compétence attendu, et de savoir répondre à des questions sur un sujet que \r\n                      que l''on a travailé. Il faut maitriser son domaine, et ne pas se retrouver sans réponse.', 'Ici, la compétence attendu, et de savoir tenir des propos arguments, savoir se \r\n                      justifier ses choix. Il faut des arguments solide et recherché.', 'Mon retour', 'Le projet etait plutôt intéressant dans l''enssemble, assez rapide à faire pour les personnes qui avait déjà connaissance du code python. Mais ca à permit de revoir toute les base du code python et de ce remettre à niveaux.'),
(3, 'Html/CSS', 'Web HTML/CSS', 'Home', 'Contact', 'Game', 'CV', 'Développement Web avec HTML et CSS ', '  Voici notre premier web, lors de ce dernier,\r\n                l''objecif etait créé un site en HTML et CCS devant respecter certaines contraines et consignes\r\n                imposées. Pour cela, il était nécessaire de connaitre de nombreuses normes, notament en CSS.\r\n                Une fois cela fais, il était nécessaire d''avoir le site le plus léger possible pour un meilleur\r\n                référencement naturel.', 'Le contenue de ce projet ', 'Notre site, avait pour sujet Candy Crush, et les nombreuses astuces et tips que l''on peut trouver\r\n                entre le niveau 0 et le niveau 1000.  \r\n                <br>\r\n                C''est pour cette raison, que nous l''avons intitulé Candy Tuto. Vous pourrez avoir un aperçu de notre page\r\n                ci-dessous, mais, le site est caché et accésible depuis ce site, à vous de le retrouver !!', 'imgs/site1.jpg', 'imgs/site2.jpg', 'imgs/site3.jpg', 'imgs/site4.jpg', 'imgs/site5.jpg', 'imgs/site6.jpg', 'Compétences', 'Les balises HTML et HTML5', 'Les feuilles de styles CSS', 'Structure HTML d’un site', 'Esthétique d’un site', 'Ici, la compétence attendu, est de comprendre chaque balise, son fonctionnement, \r\n                      son utilité et son impact sur le référencement des pages.', 'Ici, la compétence attendu, et de comprendre comment structurer sa feuille de \r\n                      style, maîtriser le concept d’élément parent et enfant, connaître les propriétés de design web de base, maîtriser \r\n                      les héritages, les points de priorités.', 'Ici, la compétence attendu, et d''utiliser les bonnes balises pour les bonnes \r\n                      raisons, dans le bon ordre. Respect des règles du W3C et des sémantiques.', 'Ici, la compétence attendu, et de savoir designer de manière esthétique et \r\n                      ergonomique une page web.', 'Mon retour', ' Nous avons trouver ce projet très intéressant, malgré quelques difficulé, et un manque de temps pour finir le site \r\n                comme nous l''avions en tête. Nous avons aussi manqué de temps pour certaines normes. Ca nous a fait comprendre l''utilité de bien nous organisé et de faire attation au perte de temps quand on travailler sur le sujet.      '),
(4, 'Web JS ', 'Web JS', 'Home', 'Contact', 'Game', 'Cv', 'Web JS + utilisation de framework', 'Ce projet est en continue avec le projet de html/CSS. On était par groupe de 2/3, on devait faire un début de portfolio nous présentant et aussi présenter 3 projet de nos choix. On avait le même intervenant que pour le projet HTML/CSS. ', 'Contenue du projet', 'Le projet représenter pas beaucoup de grand difficulté. On devait utilisé le frameWork Matérialize qui est trés simple d''utilisitation. On a décidé de présenter les 3 projet précedent. Mon site actuelle copie beaucoup les idées qu''on a eu pendant ce projet. les seuls défis qui nous posé réellement problème c''est qu''on devait réalisé des easter eggs au sein de ce site en utilisant seulement le languages JS. Vue que c''était l''une des premières fois qu''on coder avec le JS crée des easter eggs caché dans le site représanter donc un plutot gros défis.', 'imgs/js1.jpg', 'imgs/js2.jpg', 'imgs/js3.jpg', 'imgs/js4.jpg', 'imgs/js5.jpg', 'imgs/js6.jpg', 'Compétences', '', '', '', '', '', '', '', '', 'Mon retour ', 'Comme dit plus haut, ce projet était pas trés difficile, il était surtout long. On dévait réalisé un site en 1/2 semaine qui devait être complet en code mais aussi en contenue. Mais grace au précedante erreur de temps qu''on a eu lors du projet HTML/CSS on a su mieux s''organisé et ducoup prendre moin de temps à réalisé le projet. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `projet`
--
ALTER TABLE `projet`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
