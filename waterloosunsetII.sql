-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para waterloosunsetii
CREATE DATABASE IF NOT EXISTS `waterloosunsetii` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `waterloosunsetii`;

-- Volcando estructura para tabla waterloosunsetii.administrador
CREATE TABLE IF NOT EXISTS `administrador` (
  `id_administrador` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_admi` varchar(80) NOT NULL,
  `nombres_admi` varchar(80) NOT NULL,
  `apellido1_admi` varchar(80) NOT NULL,
  `apellido2_admi` varchar(80) DEFAULT NULL,
  `email_admi` varchar(40) NOT NULL,
  `usuario_admi` varchar(40) DEFAULT NULL,
  `password_admi` varchar(80) NOT NULL,
  PRIMARY KEY (`id_administrador`),
  UNIQUE KEY `usuario_admi` (`usuario_admi`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla waterloosunsetii.administrador: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` (`id_administrador`, `descripcion_admi`, `nombres_admi`, `apellido1_admi`, `apellido2_admi`, `email_admi`, `usuario_admi`, `password_admi`) VALUES
	(1, 'Supervisor', 'Adrian Javier', 'Alarcon', 'Vargas', 'ajav@gmail.com', 'ajav', '$2y$10$7vkRWubsCRR0XzNmcYJVY.qYdvkYYetAdGUYtp5/bhQ2E8TjeTH0K'),
	(2, 'Supervisor', 'Ana Silverya', 'Miranda', 'Arias', 'ana@gmail.com', 'ana', '$2y$10$SRd86M2MtDcHVbFAeVRdZus7LM3THbricnOYh1s//jpoynOdEYpSq'),
	(3, 'Contador', 'Pedro', 'Montes', '', 'pedroa@gmail.com', 'pedro', '$2y$10$mOfA1FF7VxJy3.vS3KrRLuU6uWYbRmT4GBsdB8B/n7Fk098KANaMS'),
	(4, 'Vendedor', 'Juan', 'Paredes', '', 'juan@gmail.com', 'juan', '$2y$10$Vz5hZoj9br3NoJ2LRxgkduuZb7FkGXUtOkIjcEt/03GuTjDAvZlD.'),
	(5, 'Seguridad', 'Luis', 'Montoya', '', 'luis87@gmail.com', 'luis', '$2y$10$KgH57KGzFO404e/ibffev.1PZbRVFwOtsAfaEW0bOlIJ0diM.eQem'),
	(6, 'Auditor', 'Rob', 'Arce', 'Mariscal', 'rob87@gmail.com', 'rob', '$2y$10$H2QIxhDiXC19/01iiLXtMuqIhy0/8lWEYR9KNEO9S4HMNXt.FMeBm');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;

-- Volcando estructura para tabla waterloosunsetii.album
CREATE TABLE IF NOT EXISTS `album` (
  `id_album` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_alb` varchar(80) DEFAULT NULL,
  `id_artista` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `id_discografica` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `fecha_pub` date NOT NULL,
  `duracion` time NOT NULL,
  `num_canciones` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`id_album`),
  UNIQUE KEY `nombre_alb` (`nombre_alb`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla waterloosunsetii.album: ~30 rows (aproximadamente)
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` (`id_album`, `nombre_alb`, `id_artista`, `id_genero`, `id_discografica`, `id_idioma`, `id_pais`, `fecha_pub`, `duracion`, `num_canciones`, `estado`, `imagen`) VALUES
	(1, 'Please Please Me', 1, 1, 1, 1, 1, '1963-03-22', '00:32:45', 14, 1, 'Fondos/Album/PleasePLeaseMe.jpg'),
	(2, 'With The Beatles', 1, 2, 1, 1, 1, '1963-11-22', '00:33:17', 14, 1, 'Fondos/Album/WithTheBeatles.jpg'),
	(3, 'A Hard Days Night', 1, 2, 1, 1, 1, '1964-07-10', '00:30:45', 13, 1, 'Fondos/Album/AHardDaysNight.jpg'),
	(4, 'Beatles For Sale', 1, 3, 1, 1, 1, '1964-12-04', '00:34:15', 14, 1, 'Fondos/Album/BeatlesForSale.jpg'),
	(5, 'Help!', 1, 2, 1, 1, 1, '1965-08-06', '00:34:16', 14, 1, 'Fondos/Album/Help.jpg'),
	(6, 'Rubber Soul', 1, 2, 1, 1, 1, '1965-12-03', '00:35:50', 14, 1, 'Fondos/Album/RubberSoul.jpg'),
	(7, 'Revolver', 1, 4, 1, 1, 1, '1966-08-05', '00:34:45', 14, 1, 'Fondos/Album/Revolver.jpg'),
	(8, 'Sgt. Peppers Lonely Hearts Club Band', 1, 2, 1, 1, 1, '1967-05-26', '00:39:45', 13, 1, 'Fondos/Album/SgtPeppersLonelyHeartClubBand.jpg'),
	(9, 'Magical Mystery Tour', 1, 4, 2, 1, 1, '1967-11-27', '00:36:35', 11, 1, 'Fondos/Album/MagicalMysteryTour.jpg'),
	(10, 'The White Album', 1, 2, 3, 1, 1, '1968-11-22', '01:33:35', 30, 1, 'Fondos/Album/WhiteAlbum.jpg'),
	(11, 'Yellow Submarine', 1, 5, 3, 1, 1, '1969-01-17', '00:39:48', 13, 1, 'Fondos/Album/YellowSubmarine.jpg'),
	(12, 'Abbey Road', 1, 3, 3, 1, 1, '1969-09-26', '00:47:27', 17, 1, 'Fondos/Album/AbbeyRoad.jpg'),
	(13, 'Let It Be', 1, 2, 3, 1, 1, '1970-05-08', '00:35:16', 12, 1, 'Fondos/Album/LetItBe.jpg'),
	(14, 'After Hours', 12, 16, 21, 1, 2, '2020-03-20', '00:56:17', 14, 1, 'Fondos/Album/AfterHours.jpg'),
	(15, 'Aztlan', 13, 2, 12, 2, 13, '2018-04-18', '00:55:01', 11, 1, 'Fondos/Album/Aztlan.jpg'),
	(16, 'Memoria Futuro', 14, 17, 5, 2, 13, '2019-05-17', '00:48:48', 11, 1, 'Fondos/Album/MemoriaFuturo.jpg'),
	(17, 'Ningun Vals', 15, 7, 12, 2, 10, '2014-08-08', '00:31:38', 8, 1, 'Fondos/Album/NingunVals.jpg'),
	(18, 'Divide', 10, 15, 22, 1, 1, '2017-05-10', '00:59:33', 16, 1, 'Fondos/Album/Divide.jpg'),
	(19, 'Voluma', 16, 18, 12, 2, 13, '2016-03-11', '00:45:07', 12, 1, 'Fondos/Album/Voluma.jpg'),
	(20, 'Nada Personal', 17, 2, 9, 2, 5, '1985-10-09', '00:39:57', 10, 1, 'Fondos/Album/NadaPersonal.jpg'),
	(21, 'Wish You Where Here', 18, 4, 6, 1, 1, '1975-09-12', '00:44:12', 5, 1, 'Fondos/Album/WishYouWhereHere.jpg'),
	(22, 'Oh My Messy Mind', 22, 15, 21, 1, 1, '2019-05-10', '00:13:01', 4, 1, 'Fondos/Album/OhMyMessyMind.jpg'),
	(23, 'The Boy With No Name', 19, 18, 19, 1, 1, '2007-05-07', '00:53:26', 14, 1, 'Fondos/Album/TheBoyWithNoName.jpg'),
	(24, 'True Blue', 26, 15, 6, 1, 2, '1986-06-30', '00:53:49', 11, 1, 'Fondos/Album/True Blue.jpg'),
	(25, 'Bleach', 24, 18, 19, 1, 1, '1989-06-01', '00:42:45', 13, 1, 'Fondos/Album/Bleach.jpg'),
	(26, 'V', 5, 15, 23, 1, 2, '2014-09-02', '00:43:57', 12, 1, 'Fondos/Album/V.jpg'),
	(27, 'Invincible', 6, 15, 24, 1, 2, '2001-10-29', '01:16:00', 16, 1, 'Fondos/Album/Invincible.jpg'),
	(28, 'Coming Up For Air ', 20, 15, 22, 1, 1, '2015-02-09', '01:04:00', 16, 1, 'Fondos/Album/ComingUpForAir.jpg'),
	(29, '1975', 21, 2, 20, 1, 1, '2013-01-01', '00:50:50', 16, 1, 'Fondos/Album/1975.jpg'),
	(30, 'Tune in Tokio', 7, 18, 25, 1, 11, '2001-10-09', '00:33:41', 7, 1, 'Fondos/Album/TuneinTokio.jpg'),
	(31, 'X', 10, 15, 22, 1, 1, '2014-10-09', '01:05:00', 16, 1, 'Fondos/Album/X.jpg'),
	(32, 'Whats The Story Morning Glory ', 2, 2, 2, 1, 1, '1995-01-02', '00:50:09', 12, 1, 'Fondos/Album/WhatsTheStoryMorningGlory.jpg');
/*!40000 ALTER TABLE `album` ENABLE KEYS */;

-- Volcando estructura para tabla waterloosunsetii.artista
CREATE TABLE IF NOT EXISTS `artista` (
  `id_artista` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_art` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id_artista`),
  UNIQUE KEY `nombre_art` (`nombre_art`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla waterloosunsetii.artista: ~32 rows (aproximadamente)
/*!40000 ALTER TABLE `artista` DISABLE KEYS */;
INSERT INTO `artista` (`id_artista`, `nombre_art`) VALUES
	(11, 'Billie Eilish'),
	(4, 'Blur'),
	(9, 'Bon Jovi'),
	(23, 'Cafe Tacvba'),
	(29, 'Camilo Septimo'),
	(3, 'Coldpaly'),
	(10, 'Ed Sheeran'),
	(15, 'Efecto Mandarina'),
	(32, 'Exo'),
	(31, 'Gotye'),
	(7, 'Green Day'),
	(22, 'James Bay'),
	(20, 'Kodaline'),
	(16, 'Leon Larregui'),
	(26, 'Madonna'),
	(5, 'Maroon 5'),
	(6, 'Michael Jackson'),
	(24, 'Nirvana'),
	(2, 'Oasis'),
	(18, 'Pink Floy'),
	(30, 'Queen'),
	(25, 'Sam Smith'),
	(27, 'Shakira'),
	(28, 'Sia'),
	(14, 'Siddhartha'),
	(17, 'Soda Stereo'),
	(21, 'The 1975'),
	(1, 'The Beatles'),
	(12, 'The Weenkd'),
	(8, 'Toto'),
	(19, 'Travis'),
	(13, 'Zoe');
/*!40000 ALTER TABLE `artista` ENABLE KEYS */;

-- Volcando estructura para tabla waterloosunsetii.cancion
CREATE TABLE IF NOT EXISTS `cancion` (
  `id_cancion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_can` varchar(80) DEFAULT NULL,
  `id_artista` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `num_track` int(11) NOT NULL,
  PRIMARY KEY (`id_cancion`)
) ENGINE=InnoDB AUTO_INCREMENT=410 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla waterloosunsetii.cancion: ~407 rows (aproximadamente)
/*!40000 ALTER TABLE `cancion` DISABLE KEYS */;
INSERT INTO `cancion` (`id_cancion`, `nombre_can`, `id_artista`, `id_album`, `num_track`) VALUES
	(1, 'I Saw Her Standing There', 1, 1, 1),
	(2, 'Misery', 1, 1, 2),
	(3, 'Anna (Go To Him)', 1, 1, 3),
	(4, 'Chains', 1, 1, 4),
	(5, 'Boys', 1, 1, 5),
	(6, 'Ask Me Why', 1, 1, 6),
	(7, 'Please Please Me', 1, 1, 7),
	(8, 'Love Me Do', 1, 1, 8),
	(9, 'P.S. I Love You', 1, 1, 9),
	(10, 'Baby Its You', 1, 1, 10),
	(11, 'Do You Want to Know a Secret ', 1, 1, 11),
	(12, 'A Taste a Honey', 1, 1, 12),
	(13, 'Theres a Place', 1, 1, 13),
	(14, 'Twist and Shout', 1, 1, 14),
	(15, 'It Wont Be Long', 1, 2, 1),
	(16, 'All Ive Got to Do', 1, 2, 2),
	(17, 'All My Loving', 1, 2, 3),
	(18, 'Dont Brother Me', 1, 2, 4),
	(19, 'Little Child', 1, 2, 5),
	(20, 'Till There Was You', 1, 2, 6),
	(21, 'Please Mister Postman', 1, 2, 7),
	(22, 'Roll Over Beethoven', 1, 2, 8),
	(23, 'Hold Me Thing', 1, 2, 9),
	(24, 'You Really Got a Hold on Me', 1, 2, 10),
	(25, 'I Wanna Be Your Man ', 1, 2, 11),
	(26, 'Devil in Her Heart', 1, 2, 12),
	(27, 'Not a Second Time', 1, 2, 13),
	(28, 'Money (Thats What I Want)', 1, 2, 14),
	(30, 'I Should Have Know Better', 1, 3, 2),
	(31, 'If I Fell', 1, 3, 3),
	(32, 'Im Just Happy Just Dance With You', 1, 3, 4),
	(33, 'And I Lover Her', 1, 3, 5),
	(34, 'Tell Me Why', 1, 3, 6),
	(35, 'Cant Buy Me Love', 1, 3, 7),
	(36, 'Any Time At All', 1, 3, 8),
	(37, 'Ill Cry Instead', 1, 3, 9),
	(38, 'Things We Said Today', 1, 3, 10),
	(39, 'When I Get Home', 1, 3, 11),
	(40, 'You Cant Do That', 1, 3, 12),
	(41, 'Ill Be Back', 1, 3, 13),
	(42, 'No Reply', 1, 4, 1),
	(43, 'Im A Loser', 1, 4, 2),
	(44, 'Babys In Black', 1, 4, 3),
	(45, 'Rock And Roll Music', 1, 4, 4),
	(46, 'Ill Follow The Sun', 1, 4, 5),
	(47, 'Mister Moonlight', 1, 4, 6),
	(48, 'Kansas City/Hey Hey Hey Hey', 1, 4, 7),
	(49, 'Eight Days A week', 1, 4, 8),
	(50, 'Words Of Love', 1, 4, 9),
	(51, 'Honey Dont', 1, 4, 10),
	(52, 'Every Little Thing', 1, 4, 11),
	(53, 'I Dont Want To Spoil The Party', 1, 4, 12),
	(54, 'What Are You Doing', 1, 4, 13),
	(55, 'Everybodys Tryibg To Be My Baby', 1, 4, 14),
	(56, 'Help', 1, 5, 1),
	(57, 'The Night Before', 1, 5, 2),
	(58, 'Youve Got To Hide Your Love Away', 1, 5, 3),
	(59, 'I Need You', 1, 5, 4),
	(60, 'Another Girl', 1, 5, 5),
	(61, 'Youre Going To Lose That Girl', 1, 5, 6),
	(62, 'Ticket To Ride', 1, 5, 7),
	(63, 'Act Naturally', 1, 5, 8),
	(64, 'Its Only Love', 1, 5, 9),
	(65, 'You Like Me Too Much', 1, 5, 10),
	(66, 'Tell Me What You See', 1, 5, 11),
	(67, 'Ive Just Seen A Face', 1, 5, 12),
	(68, 'Yesterday', 1, 5, 13),
	(69, 'Dizzy Miss Lizzy', 1, 5, 14),
	(70, 'Drive My Car', 1, 6, 1),
	(71, 'Norwegian Wood(This Bird Has Flown)', 1, 6, 2),
	(72, 'You Wont See Me', 1, 6, 3),
	(73, 'Nowhere Man', 1, 6, 4),
	(74, 'Think Of Yourself', 1, 6, 5),
	(75, 'The Word', 1, 6, 6),
	(76, 'Michelle', 1, 6, 7),
	(77, 'What Goes On', 1, 6, 8),
	(78, 'Girl', 1, 6, 9),
	(79, 'Im Looking Through You', 1, 6, 10),
	(80, 'In My Life ', 1, 6, 11),
	(81, 'Wait', 1, 6, 12),
	(82, 'If I Needed Someone', 1, 6, 13),
	(83, 'Run For You Life', 1, 6, 14),
	(84, 'Taxman', 1, 7, 1),
	(85, 'Eleanor Rigby', 1, 7, 2),
	(86, 'Im Only Sleeping', 1, 7, 3),
	(87, 'Love You To', 1, 7, 4),
	(88, 'Here, There And Everywhere', 1, 7, 5),
	(89, 'Yellow Sumbmarine', 1, 7, 6),
	(90, 'She Said She Said', 1, 7, 7),
	(91, 'Good Day Sunshine', 1, 7, 8),
	(92, 'And You Bird Can Sing', 1, 7, 9),
	(93, 'For No One', 1, 7, 10),
	(94, 'Doctor Robert', 1, 7, 11),
	(95, 'I Want To Tell You', 1, 7, 12),
	(96, 'Got to Get You Into My Life', 1, 7, 13),
	(97, 'Tomorrow Never Knows', 1, 7, 14),
	(98, 'Sgt. Peppers Lonely Hearts Club Band', 1, 8, 1),
	(99, 'Whit A Little Help From My Friends', 1, 8, 2),
	(100, 'Lucy In The Sky With Diamonds', 1, 8, 3),
	(101, 'Getting Better', 1, 8, 4),
	(102, 'Fixing A Hole', 1, 8, 5),
	(103, 'Shes Leaving Home', 1, 8, 6),
	(104, 'Being For The Benefit Of Mr. Kite', 1, 8, 7),
	(105, 'Within You Without You', 1, 8, 8),
	(106, 'When Im Sixty-Four', 1, 8, 9),
	(107, 'Lovely Rita', 1, 8, 10),
	(108, 'Good Morning Good Morning', 1, 8, 11),
	(109, 'Sgt. Peppers Lonely Hearts Club Band(Reprise)', 1, 8, 12),
	(110, 'A Day In The Life', 1, 8, 13),
	(111, 'Magical Mystery Tour', 1, 9, 1),
	(112, 'The Fool On The Hill', 1, 9, 2),
	(113, 'Flying', 1, 9, 3),
	(114, 'Blue Jay Way', 1, 9, 4),
	(115, 'You Mother Should Now', 1, 9, 5),
	(116, 'I Am The Walrus', 1, 9, 6),
	(117, 'Hello Goodbye', 1, 9, 7),
	(118, 'Strawberry Fields Forever', 1, 9, 8),
	(119, 'Penny Lane', 1, 9, 9),
	(120, 'Baby Youre A Rich Man', 1, 9, 10),
	(121, 'All You Need Is Love', 1, 9, 11),
	(122, 'Back in The USSR', 1, 10, 1),
	(123, 'Dear Prudence', 1, 10, 2),
	(124, 'Glass Onion', 1, 10, 3),
	(125, 'Ob-La-Di Ob-La-Da', 1, 10, 4),
	(126, 'Wild Honey Pie', 1, 10, 5),
	(127, 'The Continuing Story Of Bungalow Bill', 1, 10, 6),
	(128, 'While My Guitar Gently Weeps', 1, 10, 7),
	(129, 'Happines Is A Warm Gun', 1, 10, 8),
	(130, 'Martha my Dear', 1, 10, 9),
	(131, 'Im So Tired', 1, 10, 10),
	(132, 'Blackbird', 1, 10, 11),
	(133, 'Piggies', 1, 10, 12),
	(134, 'Rocky Raccoon', 1, 10, 13),
	(135, 'Dont Pass Be My', 1, 10, 14),
	(136, 'Why Dont We Do It In The Road', 1, 10, 15),
	(137, 'I Will', 1, 10, 16),
	(138, 'Julia', 1, 10, 17),
	(139, 'Birthday', 1, 10, 18),
	(140, 'Yer Blues', 1, 10, 19),
	(141, 'Mother Natures Son', 1, 10, 20),
	(142, 'Everybodys Got Something to Hide Except Me And My Monkey', 1, 10, 21),
	(143, 'Sexy Sadie', 1, 10, 22),
	(144, 'Helter Skelter', 1, 10, 23),
	(145, 'Long Long Long', 1, 10, 24),
	(146, 'Revolution ', 1, 10, 25),
	(147, 'Honey Pie', 1, 10, 26),
	(148, 'Savoy Truffle', 1, 10, 27),
	(149, 'Cry Baby Cry', 1, 10, 28),
	(150, 'Revolution 9', 1, 10, 29),
	(151, 'Good Night', 1, 10, 30),
	(152, 'Yellow Submarine', 1, 11, 1),
	(153, 'Only A Northern Song', 1, 11, 2),
	(154, 'All Together Now', 1, 11, 3),
	(155, 'Hey Bulldog', 1, 11, 4),
	(156, 'Its All Too Much', 1, 11, 5),
	(157, 'All You Need is Love', 1, 11, 6),
	(158, 'Pepperland', 1, 11, 7),
	(159, 'Sea Of Time', 1, 11, 8),
	(160, 'Sea Of Holes', 1, 11, 9),
	(161, 'Sea Of Monsters', 1, 11, 10),
	(162, 'March Of Meanies', 1, 11, 11),
	(163, 'Pepperland Laid Waste', 1, 11, 12),
	(164, 'Yellow Submarine in Pepperland', 1, 11, 13),
	(165, 'Come  Together', 1, 12, 1),
	(166, 'Something', 1, 12, 2),
	(167, 'Maxwell Silver Hammer', 1, 12, 3),
	(168, 'Oh Darling', 1, 12, 4),
	(169, 'Octopus Garden', 1, 12, 5),
	(170, 'I Want You(Shes So Heavy)', 1, 12, 6),
	(171, 'Here Comes The Sun', 1, 12, 7),
	(172, 'Because', 1, 12, 8),
	(173, 'You Never Give Me Your Money', 1, 12, 9),
	(174, 'Sun King', 1, 12, 10),
	(175, 'Mean Mr. Mustard', 1, 12, 11),
	(176, 'Polythene Pam', 1, 12, 12),
	(177, 'She Came In Through The Bathroom Window', 1, 12, 13),
	(178, 'Golden Slumbers', 1, 12, 14),
	(179, 'Carry The Weight', 1, 12, 15),
	(180, 'The End', 1, 12, 16),
	(181, 'Her Majestery', 1, 12, 17),
	(182, 'Two Of Us', 1, 13, 1),
	(183, 'Dig A Pony', 1, 13, 2),
	(184, 'Across The Universe', 1, 13, 3),
	(185, 'I Me Mine', 1, 13, 4),
	(186, 'Dig It', 1, 13, 5),
	(187, 'Let It be', 1, 13, 6),
	(188, 'Maggie Mae', 1, 13, 7),
	(189, 'Ive Got A Feeling', 1, 13, 8),
	(190, 'One After 909', 1, 13, 9),
	(191, 'The Long And Winding Road', 1, 13, 10),
	(192, 'For You Blue', 1, 13, 11),
	(193, 'Get Back', 1, 13, 12),
	(194, 'Alone Again', 12, 14, 1),
	(195, 'Too Late', 12, 14, 2),
	(196, 'Hardest To Love', 12, 14, 3),
	(197, 'Scare To Live', 12, 14, 4),
	(198, 'Snowchild', 12, 14, 5),
	(199, 'Ecape From LA', 12, 14, 6),
	(200, 'Heartless', 12, 14, 7),
	(201, 'Faith', 12, 14, 8),
	(202, 'Blinding Ligths', 12, 14, 9),
	(203, 'In You Eyes', 12, 14, 10),
	(204, 'Save Your Tears', 12, 14, 11),
	(205, 'Repeat After Me', 12, 14, 12),
	(206, 'After Hours', 12, 14, 13),
	(207, 'Until I Bleed Out', 12, 14, 14),
	(208, 'Venus', 13, 15, 1),
	(209, 'Azul', 13, 15, 2),
	(210, 'No Hay Mal Que Dure', 13, 15, 3),
	(211, 'Al Final', 13, 15, 4),
	(212, 'Hielo', 13, 15, 5),
	(213, 'Luci', 13, 15, 6),
	(214, 'Aztlan', 13, 15, 7),
	(215, 'Temor y Temblor', 13, 15, 8),
	(216, 'Renacer', 13, 15, 9),
	(217, 'Ella Es Magia', 13, 15, 10),
	(218, 'Oropel', 13, 15, 11),
	(219, 'Carividad', 13, 15, 12),
	(220, 'Algun Dia', 14, 16, 1),
	(221, 'Pelicula', 14, 16, 2),
	(222, 'Aves del Tiempo', 14, 16, 3),
	(223, 'Cada Vez Que Vuelvas', 14, 16, 4),
	(224, 'Me hace Falta', 14, 16, 5),
	(225, 'La Ciudad', 14, 16, 6),
	(226, 'Buscandote', 14, 16, 7),
	(227, 'Respiro', 14, 16, 8),
	(228, 'Vida', 14, 16, 9),
	(229, 'Memoria Futuro', 14, 16, 10),
	(230, 'Creeme', 15, 17, 1),
	(231, 'Libre', 15, 17, 2),
	(232, 'Te voy a Buscar', 15, 17, 3),
	(233, 'Tiempo', 15, 17, 4),
	(234, 'Bored and Sad', 15, 17, 5),
	(235, 'Ningun Vals', 15, 17, 6),
	(236, 'Escapae', 15, 17, 7),
	(237, 'En la Piel', 15, 17, 8),
	(238, 'Odiame', 15, 17, 9),
	(239, 'Un Cafe', 15, 17, 10),
	(240, 'No le Digas', 15, 17, 11),
	(241, 'Eraser', 10, 18, 1),
	(242, 'Castle on the Hill', 10, 18, 2),
	(243, 'Dive', 10, 18, 3),
	(244, 'Shape of You', 10, 18, 4),
	(245, 'Perfect', 10, 18, 5),
	(246, 'Galway Girl', 10, 18, 6),
	(247, 'Happier', 10, 18, 7),
	(248, 'New Man', 10, 18, 8),
	(249, 'Hearts Dont Break Around Here', 10, 18, 9),
	(250, 'Supermarket Flowers', 10, 18, 10),
	(251, 'Barcelona', 10, 18, 11),
	(252, 'Bibia Be Ye Ye', 10, 18, 12),
	(253, 'Nancy Mulligan', 10, 18, 13),
	(254, 'Save Myself', 10, 18, 14),
	(255, 'What Do I Know', 10, 18, 15),
	(256, 'How Wouls You Fell', 10, 18, 16),
	(257, 'Locos', 16, 19, 1),
	(258, 'Zombies', 16, 19, 2),
	(259, 'Mar', 16, 19, 3),
	(260, 'Tremantra', 16, 19, 4),
	(261, 'Tiraste a Matar', 16, 19, 5),
	(262, 'Lattice', 16, 19, 6),
	(263, 'Visitantes', 16, 19, 7),
	(264, 'Visiones', 16, 19, 8),
	(265, 'Luna Llena', 16, 19, 9),
	(266, 'Bierd', 16, 19, 10),
	(267, 'Rue Vielle Du Temple', 16, 19, 11),
	(268, 'Cero No Ser', 16, 19, 12),
	(269, 'Nada Personal', 17, 20, 1),
	(270, 'Si No Fuera Por', 17, 20, 2),
	(271, 'Cuando Pase El Temblor', 17, 20, 3),
	(272, 'Danza Rota', 17, 20, 4),
	(273, 'El Cuerpo Del Delito', 17, 20, 5),
	(274, 'Juego De Seduccion', 17, 20, 6),
	(275, 'Estoy Azulado', 17, 20, 7),
	(276, 'Observandonos', 17, 20, 8),
	(277, 'Imagenes Retro', 17, 20, 9),
	(278, 'Ecos', 17, 20, 10),
	(279, 'Shine On You Crazy Diamond', 18, 21, 1),
	(280, 'Welcome to the Machine', 18, 21, 2),
	(281, 'Have a Cigar', 18, 21, 3),
	(282, 'Wish You Were Here', 18, 21, 4),
	(283, 'Shine On You Crazy Diamond(Pts.6-9)', 18, 21, 5),
	(284, 'Church On Sunday', 7, 30, 1),
	(285, 'Castaway', 7, 30, 2),
	(286, 'Blood, Sex and Booze', 7, 30, 3),
	(287, 'King for day', 7, 30, 4),
	(288, 'Waiting', 7, 30, 5),
	(289, 'Minoriti', 7, 30, 6),
	(290, 'Macys Day Parade', 7, 30, 7),
	(291, 'Peer Pressure', 22, 22, 1),
	(292, 'Bad', 22, 22, 2),
	(293, 'Rescue', 22, 22, 3),
	(294, 'Break My Heart Rigth', 22, 22, 4),
	(295, '3 Times And Lose You', 19, 23, 1),
	(296, 'Selfish Jean', 19, 23, 2),
	(297, 'Closer', 19, 23, 3),
	(298, 'Big Chair', 19, 23, 4),
	(299, 'Battleships', 19, 23, 5),
	(300, 'Eye Wide Open', 19, 23, 6),
	(301, 'My Eyes', 19, 23, 7),
	(302, 'One Night', 19, 23, 8),
	(303, 'Under the Moonligth', 19, 23, 9),
	(304, 'Out in Space', 19, 23, 10),
	(305, 'Colder', 19, 23, 11),
	(306, 'New Amsterdam', 19, 23, 12),
	(307, 'Sailing Away', 19, 23, 13),
	(308, 'Perfect Heaven Space', 19, 23, 14),
	(309, 'Papa Dont Peach', 26, 24, 1),
	(310, 'Open Your Heart', 26, 24, 2),
	(311, 'White Heat', 26, 24, 3),
	(312, 'Live to Tell', 26, 24, 4),
	(313, 'Wheres The Party', 26, 24, 5),
	(314, 'True Blue', 26, 24, 6),
	(315, 'La Isla Bonita', 26, 24, 7),
	(316, 'Jimmy Jimmy', 26, 24, 8),
	(317, 'Love Makes the World Go Round', 26, 24, 9),
	(318, 'True Blue-The Color Mix', 26, 24, 10),
	(319, 'La Isla Bonita-Extend Remix', 26, 24, 11),
	(320, 'Blew', 24, 25, 1),
	(321, 'Floyd The Barber', 24, 25, 2),
	(322, 'About A Girl', 24, 25, 3),
	(323, 'School', 24, 25, 4),
	(324, 'Love Buzz', 24, 25, 5),
	(325, 'Paper Cuts', 24, 25, 6),
	(326, 'Negative Creep', 24, 25, 7),
	(327, 'Scoff', 24, 25, 8),
	(328, 'Swap Meet', 24, 25, 9),
	(329, 'Mr. Moustache', 24, 25, 10),
	(330, 'Sifting', 24, 25, 11),
	(331, 'Big Cheese', 24, 25, 12),
	(332, 'Downer', 24, 25, 13),
	(333, 'Maps', 5, 26, 1),
	(334, 'Animals', 5, 26, 2),
	(335, 'It Was Always you', 5, 26, 3),
	(336, 'Unkiss Me', 5, 26, 4),
	(337, 'Sugar', 5, 26, 5),
	(338, 'Leaving California', 5, 26, 6),
	(339, 'In Your Pocket', 5, 26, 7),
	(340, 'New Love', 5, 26, 8),
	(341, 'Coming Back FOR you', 5, 26, 9),
	(342, 'Feelings', 5, 26, 10),
	(343, 'My Hear Is Open', 5, 26, 11),
	(344, 'This Summer', 5, 26, 12),
	(345, 'Unbreakable', 6, 27, 1),
	(346, 'Heartbreaker', 6, 27, 2),
	(347, 'Invicible', 6, 27, 3),
	(348, 'Break of Dawn', 6, 27, 4),
	(349, 'Heave Can Wait', 6, 27, 5),
	(350, 'You Rock My World', 6, 27, 6),
	(351, 'Butterflies', 6, 27, 7),
	(352, 'Speechless', 6, 27, 8),
	(353, '2000 Watts', 6, 27, 9),
	(354, 'You Are My Life', 6, 27, 10),
	(356, 'Privacy', 6, 27, 11),
	(357, 'Dont Walk Away', 6, 27, 12),
	(358, 'Cry', 6, 27, 13),
	(359, 'The LOst Children', 6, 27, 14),
	(360, 'Whatever Happens', 6, 27, 15),
	(361, 'Threatened', 6, 27, 16),
	(362, 'Honest', 20, 28, 1),
	(363, 'The One', 20, 28, 2),
	(364, 'Autopilot', 20, 28, 3),
	(365, 'Human Again', 20, 28, 4),
	(366, 'Unclear', 20, 28, 5),
	(367, 'Coming Alive', 20, 28, 6),
	(368, 'Lost', 20, 28, 7),
	(369, 'Ready', 20, 28, 8),
	(370, 'Better', 20, 28, 9),
	(371, 'Everything Works Out in the End', 20, 28, 10),
	(372, 'Play the Game', 20, 28, 11),
	(373, 'Love Will Set You Free', 20, 28, 12),
	(374, 'Caugth in the Middle', 20, 28, 13),
	(375, 'War', 20, 28, 14),
	(376, 'Moving On', 20, 28, 15),
	(377, 'Honest-Acoustic', 20, 28, 16),
	(378, 'The 1975', 21, 29, 1),
	(379, 'The City', 21, 29, 2),
	(380, 'M.O.N.E.Y', 21, 29, 3),
	(381, 'Chocolate', 21, 29, 4),
	(382, 'Sex', 21, 29, 5),
	(383, 'Talk!', 21, 29, 6),
	(384, 'An Encounter', 21, 29, 7),
	(385, 'Heart Out', 21, 29, 8),
	(386, 'Robbers', 21, 29, 9),
	(387, 'Girls', 21, 29, 10),
	(388, '12', 21, 29, 11),
	(389, 'She Way Out', 21, 29, 12),
	(390, 'Menswear', 21, 29, 13),
	(391, 'Pressure', 21, 29, 14),
	(392, 'Is There Somebody Who Can Watch You', 21, 29, 15),
	(393, 'Settle Down', 21, 29, 16),
	(394, 'One', 10, 31, 1),
	(395, 'Im Mess', 10, 31, 2),
	(396, 'Sing', 10, 31, 3),
	(397, 'Dont', 10, 31, 4),
	(398, 'Nina', 10, 31, 5),
	(399, 'Photograph', 10, 31, 6),
	(400, 'Bloodstream', 10, 31, 7),
	(401, 'Tenerifee Sea', 10, 31, 8),
	(402, 'Runaway', 10, 31, 9),
	(403, 'The man', 10, 31, 10),
	(404, 'Thinking out Loud', 10, 31, 11),
	(405, 'Afire Love', 10, 31, 12),
	(406, 'Take It Back', 10, 31, 13),
	(407, 'Shirtsleeves', 10, 31, 14),
	(408, 'Even My Dad Does Sometimes', 10, 31, 15),
	(409, 'I See Fire', 10, 31, 16);
/*!40000 ALTER TABLE `cancion` ENABLE KEYS */;

-- Volcando estructura para tabla waterloosunsetii.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombres_cli` varchar(80) NOT NULL,
  `apellido1_cli` varchar(80) NOT NULL,
  `apellido2_cli` varchar(80) DEFAULT NULL,
  `nom_usuario_cli` varchar(40) NOT NULL,
  `correo_cli` varchar(80) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `password_cli` varchar(80) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `nom_usuario_cli` (`nom_usuario_cli`),
  UNIQUE KEY `correo_cli` (`correo_cli`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla waterloosunsetii.cliente: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id_cliente`, `nombres_cli`, `apellido1_cli`, `apellido2_cli`, `nom_usuario_cli`, `correo_cli`, `direccion`, `celular`, `password_cli`, `estado`) VALUES
	(1, 'Adrian', 'Alarcon', 'Vargas', 'ajavc', 'aj@gmail.com', 'Plan 108 Mzno No. 216', '74016950', '$2y$10$5.MlA4Z7giuPV8Ru63m5WOxd9HHpqa5Yf4yN4IBvJ4z.B/bE9UOJS', 1),
	(2, 'Mauricio', 'Garcia', 'Blanco', 'mau', 'mau@gmail.com', 'Plan 110 Mzno No. 16', '22835745', '$2y$10$yyFeZotHBoSjmgiZSQyDi.n0KWBp/EMpXAcGznePjBryqy2LkuPcG', 1),
	(3, 'Pablo', 'Martinez', '', 'pablo', 'pab123@gmail.com', 'Plan 10 Mzno No. 136', '78569352', '$2y$10$aiKrV0yPG6DcyCer9ob5aeBYwBrZl.6TmC/mVvXzIKfky1AMvnVju', 1),
	(4, 'Marco', 'Veizaga', '', 'marc', 'marc768@gmail.com', 'Plan 80 Mzno No. 56', '78523563', '$2y$10$DqYa2nUQAgPFumBZMvd/k.5wuZAJYmD2DI./Bc5n06Z4e4E6ALtJa', 1),
	(5, 'Nadia', 'Murgia', '', 'nadia', 'nadia768@gmail.com', 'Calle Luis Plan 80 Mzno No. 56', '78565455', '$2y$10$g/EYAzTNssDZMhxVOrgE1ODVau2aBebb5k842f/nTu6r2r9Fn4RBq', 1),
	(6, 'Paola', 'Graham', '', 'paola', 'paola1768@gmail.com', 'Calle Falsa Plan 5 Mzno No. 576', '78562323', '$2y$10$klBHdJPy5H8rDo5ndYao/ukBtmaZJJvh6vCz3qVSyM10cRyiIp2wS', 1),
	(7, 'Fer', 'Gonzales', '', 'fer', 'fer8@gmail.com', 'Calle Falsa Plan 123 Mzno No. 123', '78512345', '$2y$10$vFje30.2M0H4GqLj3hbsLeIqbTb.1VJN9Q3ZyemjSTZe7e/hDyCjK', 1),
	(8, 'Manuel', 'Gonzales', 'Alvarado', 'manolo', 'manugon8@gmail.com', 'Calle Falsa Plan 123 Mzno No. 123', '7851564', '$2y$10$7uhclZHiRZKrPqt7CkCyXOG6MFLKZ7gPth/ogc4XH1RYHXLh6vJjC', 1);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para tabla waterloosunsetii.discografica
CREATE TABLE IF NOT EXISTS `discografica` (
  `id_discografica` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_disc` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id_discografica`),
  UNIQUE KEY `nombre_disc` (`nombre_disc`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla waterloosunsetii.discografica: ~25 rows (aproximadamente)
/*!40000 ALTER TABLE `discografica` DISABLE KEYS */;
INSERT INTO `discografica` (`id_discografica`, `nombre_disc`) VALUES
	(3, 'Apple Records'),
	(13, 'Atlantic Records'),
	(2, 'Capitol Records'),
	(18, 'Craft Recording'),
	(10, 'DEL Records'),
	(20, 'Dirty Hit Records'),
	(11, 'Epic Records'),
	(12, 'Estudios Panoram'),
	(23, 'Interscope Records'),
	(24, 'MJJ Produccion'),
	(15, 'Monkey Puzzle Records'),
	(1, 'Parlaphone'),
	(19, 'Records Recording'),
	(25, 'Reprise Records'),
	(21, 'Republic Records'),
	(8, 'SM Entretainment'),
	(5, 'Sony Music Entertainment'),
	(9, 'Sony Music Entertainment US Latin LLC'),
	(17, 'Sub Pop Records'),
	(22, 'Unique Records'),
	(16, 'Universal Internacional Records'),
	(14, 'Universal Island Records'),
	(4, 'Universal Music Group'),
	(6, 'Warner Music Group'),
	(7, 'YG Entertainment');
/*!40000 ALTER TABLE `discografica` ENABLE KEYS */;

-- Volcando estructura para tabla waterloosunsetii.entrada
CREATE TABLE IF NOT EXISTS `entrada` (
  `id_entrada` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad_e` int(11) NOT NULL,
  `costo_e` decimal(10,0) NOT NULL,
  `fecha_e` varchar(50) NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `id_inventario` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  PRIMARY KEY (`id_entrada`),
  KEY `FK_ENTRADA_INVENTARIO` (`id_inventario`),
  KEY `FK_ENTRADA_PROVEEDOR` (`id_proveedor`),
  KEY `FK_ENTRADA_ADMINISTRADOR` (`id_administrador`),
  CONSTRAINT `FK_ENTRADA_ADMINISTRADOR` FOREIGN KEY (`id_administrador`) REFERENCES `administrador` (`id_administrador`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_ENTRADA_INVENTARIO` FOREIGN KEY (`id_inventario`) REFERENCES `inventario` (`id_inventario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_ENTRADA_PROVEEDOR` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla waterloosunsetii.entrada: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `entrada` DISABLE KEYS */;
INSERT INTO `entrada` (`id_entrada`, `cantidad_e`, `costo_e`, `fecha_e`, `id_administrador`, `id_inventario`, `id_proveedor`) VALUES
	(1, 25, 1500, '12/06/2020', 1, 1, 1),
	(2, 25, 1500, '12/06/2020', 1, 2, 1),
	(3, 25, 1500, '12/06/2020', 1, 3, 1),
	(4, 25, 1500, '12/06/2020', 1, 4, 1),
	(5, 25, 1500, '12/06/2020', 1, 5, 1),
	(6, 25, 1500, '12/06/2020', 1, 6, 1),
	(7, 25, 1500, '12/06/2020', 1, 7, 1),
	(8, 25, 1500, '12/06/2020', 1, 8, 1),
	(9, 25, 1500, '12/06/2020', 1, 9, 1),
	(10, 25, 1500, '12/06/2020', 1, 10, 1),
	(11, 25, 1500, '12/06/2020', 1, 11, 1),
	(12, 25, 1500, '12/06/2020', 1, 12, 1),
	(13, 25, 1500, '12/06/2020', 1, 13, 1),
	(14, 25, 1300, '17/06/2020', 2, 14, 3),
	(15, 25, 1200, '17/06/2020', 2, 15, 3),
	(16, 25, 1200, '17/06/2020', 2, 16, 5),
	(17, 25, 1100, '17/06/2020', 2, 17, 9),
	(18, 25, 1400, '17/06/2020', 2, 18, 10),
	(19, 25, 1400, '17/06/2020', 2, 19, 10),
	(20, 25, 1100, '17/06/2020', 2, 20, 1),
	(21, 25, 1100, '17/06/2020', 2, 21, 5),
	(22, 25, 1500, '17/06/2020', 2, 22, 10),
	(23, 25, 1500, '17/06/2020', 2, 23, 10),
	(24, 25, 1500, '17/06/2020', 2, 24, 2),
	(25, 25, 1300, '17/06/2020', 2, 25, 2),
	(26, 25, 1300, '17/06/2020', 2, 26, 5),
	(27, 25, 1300, '17/06/2020', 2, 27, 3),
	(28, 25, 1300, '17/06/2020', 2, 28, 1),
	(29, 25, 1100, '17/06/2020', 2, 29, 8),
	(30, 25, 1100, '17/06/2020', 2, 30, 8),
	(31, 25, 1300, '18/06/2020', 1, 31, 7);
/*!40000 ALTER TABLE `entrada` ENABLE KEYS */;

-- Volcando estructura para tabla waterloosunsetii.factura
CREATE TABLE IF NOT EXISTS `factura` (
  `id_factura` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `fecha_f` varchar(50) NOT NULL,
  `total_f` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id_factura`),
  KEY `FK_FACTURA_CLIENTE` (`id_cliente`),
  CONSTRAINT `FK_FACTURA_CLIENTE` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla waterloosunsetii.factura: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `factura` DISABLE KEYS */;
INSERT INTO `factura` (`id_factura`, `id_cliente`, `fecha_f`, `total_f`) VALUES
	(1, 1, '17/06/2020', 900.00),
	(2, 1, '17/06/2020', 965.00),
	(3, 1, '17/06/2020', 470.00),
	(4, 2, '17/06/2020', 605.00),
	(5, 3, '17/06/2020', 830.00),
	(6, 3, '17/06/2020', 935.00),
	(7, 4, '18/06/2020', 695.00),
	(8, 4, '18/06/2020', 690.00),
	(9, 5, '18/06/2020', 895.00),
	(10, 6, '18/06/2020', 800.00),
	(11, 7, '18/06/2020', 390.00),
	(12, 8, '18/06/2020', 725.00),
	(13, 8, '18/06/2020', 670.00),
	(14, 8, '18/06/2020', 70.00),
	(15, 8, '18/06/2020', 300.00);
/*!40000 ALTER TABLE `factura` ENABLE KEYS */;

-- Volcando estructura para tabla waterloosunsetii.genero
CREATE TABLE IF NOT EXISTS `genero` (
  `id_genero` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_gen` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id_genero`),
  UNIQUE KEY `nombre_gen` (`nombre_gen`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla waterloosunsetii.genero: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `genero` DISABLE KEYS */;
INSERT INTO `genero` (`id_genero`, `nombre_gen`) VALUES
	(6, 'Blues'),
	(11, 'Country'),
	(14, 'Disco'),
	(13, 'Folk'),
	(9, 'Gospel'),
	(18, 'Indie Rock'),
	(7, 'Jazz'),
	(17, 'Latin Pop'),
	(12, 'Metal'),
	(5, 'Musica Cinematografica'),
	(15, 'Pop'),
	(3, 'Pop Rock'),
	(16, 'R&B Soul'),
	(8, 'Rhythm and Blues'),
	(2, 'Rock'),
	(19, 'Rock Alternativo'),
	(1, 'Rock And Roll'),
	(4, 'Rock Psicodelico'),
	(10, 'Soul');
/*!40000 ALTER TABLE `genero` ENABLE KEYS */;

-- Volcando estructura para tabla waterloosunsetii.idioma
CREATE TABLE IF NOT EXISTS `idioma` (
  `id_idioma` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_idi` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id_idioma`),
  UNIQUE KEY `nombre_idi` (`nombre_idi`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla waterloosunsetii.idioma: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `idioma` DISABLE KEYS */;
INSERT INTO `idioma` (`id_idioma`, `nombre_idi`) VALUES
	(8, 'Aleman'),
	(10, 'Arabe'),
	(9, 'Chino'),
	(11, 'Coreano'),
	(2, 'Espanol'),
	(3, 'Frances'),
	(1, 'Ingles'),
	(4, 'Italiano'),
	(7, 'Japones'),
	(6, 'Portugues'),
	(5, 'Ruso');
/*!40000 ALTER TABLE `idioma` ENABLE KEYS */;

-- Volcando estructura para tabla waterloosunsetii.inventario
CREATE TABLE IF NOT EXISTS `inventario` (
  `id_inventario` int(11) NOT NULL AUTO_INCREMENT,
  `id_album` int(11) DEFAULT NULL,
  `cantidad_total` int(11) DEFAULT NULL,
  `cantidad_entradas` int(11) DEFAULT NULL,
  `cantidad_salidas` int(11) DEFAULT NULL,
  `precio_unit` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id_inventario`),
  UNIQUE KEY `id_album` (`id_album`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla waterloosunsetii.inventario: ~31 rows (aproximadamente)
/*!40000 ALTER TABLE `inventario` DISABLE KEYS */;
INSERT INTO `inventario` (`id_inventario`, `id_album`, `cantidad_total`, `cantidad_entradas`, `cantidad_salidas`, `precio_unit`) VALUES
	(1, 1, 19, 25, 6, 100),
	(2, 2, 19, 25, 6, 100),
	(3, 3, 19, 25, 6, 100),
	(4, 4, 20, 25, 5, 100),
	(5, 5, 21, 25, 4, 100),
	(6, 6, 22, 25, 3, 100),
	(7, 7, 20, 25, 5, 100),
	(8, 8, 21, 25, 4, 100),
	(9, 9, 20, 25, 5, 100),
	(10, 10, 24, 25, 1, 100),
	(11, 11, 20, 25, 5, 100),
	(12, 12, 16, 25, 9, 100),
	(13, 13, 21, 25, 4, 100),
	(14, 14, 19, 25, 6, 90),
	(15, 15, 19, 25, 6, 100),
	(16, 16, 22, 25, 3, 80),
	(17, 17, 18, 25, 7, 70),
	(18, 18, 10, 25, 15, 90),
	(19, 19, 24, 25, 1, 90),
	(20, 20, 23, 25, 2, 90),
	(21, 21, 24, 25, 1, 100),
	(22, 22, 22, 25, 3, 110),
	(23, 23, 15, 25, 10, 80),
	(24, 24, 24, 25, 1, 90),
	(25, 25, 23, 25, 2, 90),
	(26, 26, 19, 25, 6, 75),
	(27, 27, 22, 25, 3, 90),
	(28, 28, 23, 25, 2, 60),
	(29, 29, 24, 25, 1, 100),
	(30, 30, 23, 25, 2, 110),
	(31, 31, 25, 25, 0, 90),
	(32, 32, 0, 0, 0, 100);
/*!40000 ALTER TABLE `inventario` ENABLE KEYS */;

-- Volcando estructura para tabla waterloosunsetii.pais
CREATE TABLE IF NOT EXISTS `pais` (
  `id_pais` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_pais` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id_pais`),
  UNIQUE KEY `nombre_pais` (`nombre_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla waterloosunsetii.pais: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `pais` DISABLE KEYS */;
INSERT INTO `pais` (`id_pais`, `nombre_pais`) VALUES
	(4, 'Alemania'),
	(5, 'Argentina'),
	(10, 'Bolivia'),
	(3, 'Canada'),
	(6, 'Colombia'),
	(12, 'Corea'),
	(7, 'Espana'),
	(2, 'Estados Unidos'),
	(8, 'Francia'),
	(9, 'Italia'),
	(11, 'Japon'),
	(13, 'Mexico'),
	(1, 'Reino Unido');
/*!40000 ALTER TABLE `pais` ENABLE KEYS */;

-- Volcando estructura para tabla waterloosunsetii.pedidos
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `nombre_ped` varchar(80) NOT NULL,
  `artista_ped` varchar(80) DEFAULT NULL,
  `genero_ped` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla waterloosunsetii.pedidos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` (`id_pedido`, `id_cliente`, `nombre_ped`, `artista_ped`, `genero_ped`) VALUES
	(1, 6, 'Be Here Now', 'Oasis', 'Rock'),
	(2, 6, 'Definitely Maybe', 'Oasis', 'Rock'),
	(3, 7, 'Mylo Xyloto', 'Coldplay', 'Pop Rock');
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;

-- Volcando estructura para tabla waterloosunsetii.proveedor
CREATE TABLE IF NOT EXISTS `proveedor` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `celular_prov` varchar(15) NOT NULL,
  `nombre_prov` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_proveedor`),
  UNIQUE KEY `nombre_prov` (`nombre_prov`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla waterloosunsetii.proveedor: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` (`id_proveedor`, `celular_prov`, `nombre_prov`) VALUES
	(1, '+59175239852', 'Baloo Music'),
	(2, '+59178524693', 'Orphans'),
	(3, '+59166585956', 'Keane Int'),
	(4, '+59611311234', 'Sony Group'),
	(5, '+59175486293', 'Pearljam'),
	(6, '+59161145793', 'Radio Music'),
	(7, '+59170236598', 'Music Cold'),
	(8, '+59170356987', 'Free Light'),
	(9, '+59145698725', 'Music Rock'),
	(10, '+59145678923', 'Rock Group');
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;

-- Volcando estructura para tabla waterloosunsetii.salida
CREATE TABLE IF NOT EXISTS `salida` (
  `id_salida` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad_s` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL,
  `id_inventario` int(11) NOT NULL,
  PRIMARY KEY (`id_salida`),
  KEY `FK_SALIDA_INVENTARIO` (`id_inventario`),
  KEY `FK_SALIDA_FACTURA` (`id_factura`),
  CONSTRAINT `FK_SALIDA_FACTURA` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factura`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_SALIDA_INVENTARIO` FOREIGN KEY (`id_inventario`) REFERENCES `inventario` (`id_inventario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla waterloosunsetii.salida: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `salida` DISABLE KEYS */;
INSERT INTO `salida` (`id_salida`, `cantidad_s`, `id_factura`, `id_inventario`) VALUES
	(1, 1, 1, 1),
	(2, 2, 1, 6),
	(3, 1, 1, 3),
	(4, 1, 1, 5),
	(5, 1, 1, 11),
	(6, 1, 1, 13),
	(7, 1, 1, 12),
	(8, 1, 1, 15),
	(9, 1, 2, 23),
	(10, 1, 2, 30),
	(11, 1, 2, 18),
	(12, 1, 2, 26),
	(13, 2, 2, 4),
	(14, 1, 2, 5),
	(15, 1, 2, 6),
	(16, 1, 2, 22),
	(17, 1, 2, 3),
	(18, 1, 3, 24),
	(19, 1, 3, 18),
	(20, 1, 3, 21),
	(21, 1, 3, 27),
	(22, 1, 3, 7),
	(23, 1, 3, 2),
	(24, 3, 3, 14),
	(25, 2, 3, 18),
	(26, 1, 3, 8),
	(27, 1, 3, 17),
	(28, 2, 3, 23),
	(29, 1, 3, 20),
	(30, 1, 3, 4),
	(31, 1, 3, 16),
	(32, 1, 3, 15),
	(33, 1, 4, 26),
	(34, 1, 4, 17),
	(35, 1, 4, 28),
	(36, 1, 4, 8),
	(37, 1, 4, 11),
	(38, 1, 4, 10),
	(39, 1, 4, 12),
	(40, 1, 5, 19),
	(41, 1, 5, 18),
	(42, 1, 5, 9),
	(43, 1, 5, 14),
	(44, 2, 5, 23),
	(45, 1, 5, 2),
	(46, 1, 5, 4),
	(47, 1, 5, 12),
	(48, 1, 6, 11),
	(49, 1, 6, 12),
	(50, 1, 6, 18),
	(51, 1, 6, 26),
	(52, 1, 6, 22),
	(53, 1, 6, 27),
	(54, 1, 6, 13),
	(55, 1, 6, 29),
	(56, 1, 6, 30),
	(57, 1, 6, 28),
	(58, 2, 6, 8),
	(59, 1, 6, 3),
	(60, 2, 6, 9),
	(61, 1, 6, 12),
	(62, 1, 6, 18),
	(63, 1, 6, 15),
	(64, 1, 6, 7),
	(65, 1, 6, 11),
	(66, 1, 6, 14),
	(67, 1, 6, 16),
	(68, 1, 6, 13),
	(69, 1, 7, 26),
	(70, 1, 7, 1),
	(71, 1, 7, 3),
	(72, 3, 7, 18),
	(73, 1, 7, 16),
	(74, 1, 7, 17),
	(75, 1, 8, 2),
	(76, 1, 8, 15),
	(77, 1, 8, 18),
	(78, 2, 8, 17),
	(79, 1, 8, 5),
	(80, 2, 8, 23),
	(81, 1, 9, 26),
	(82, 1, 9, 17),
	(83, 2, 9, 7),
	(84, 1, 9, 14),
	(85, 1, 9, 9),
	(86, 1, 9, 11),
	(87, 2, 9, 18),
	(88, 1, 9, 23),
	(89, 1, 10, 2),
	(90, 2, 10, 1),
	(91, 1, 10, 15),
	(92, 1, 10, 5),
	(93, 1, 10, 3),
	(94, 1, 10, 4),
	(95, 1, 10, 7),
	(96, 1, 11, 2),
	(97, 1, 11, 9),
	(98, 1, 11, 15),
	(99, 1, 11, 18),
	(100, 1, 12, 26),
	(101, 4, 12, 12),
	(102, 1, 12, 18),
	(103, 2, 12, 23),
	(104, 1, 13, 1),
	(105, 1, 13, 2),
	(106, 1, 13, 20),
	(107, 1, 13, 22),
	(108, 1, 13, 27),
	(109, 2, 13, 25),
	(110, 1, 14, 17),
	(111, 1, 15, 1),
	(112, 1, 15, 3),
	(113, 1, 15, 13);
/*!40000 ALTER TABLE `salida` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
