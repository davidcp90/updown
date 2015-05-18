-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2015 at 12:18 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `upsidedown`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_categoria`
--

CREATE TABLE IF NOT EXISTS `blog_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE IF NOT EXISTS `blog_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `imagen` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `autor` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `desafios_categoria`
--

CREATE TABLE IF NOT EXISTS `desafios_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `desafios_post`
--

CREATE TABLE IF NOT EXISTS `desafios_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `imagen` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `autor` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `dosmil_categoria`
--

CREATE TABLE IF NOT EXISTS `dosmil_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dosmil_categoria`
--

INSERT INTO `dosmil_categoria` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(2, 'Jessi J', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, delectus? Error nobis ipsum eligendi magni deserunt culpa placeat, consectetur expedita est reiciendis ex enim praesentium dolores dicta delectus, earum minus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, delectus? Error nobis ipsum eligendi magni deserunt culpa placeat, consectetur expedita est reiciendis ex enim praesentium dolores dicta delectus, earum minus.</p>\r\n', '36d79-monsters-1440x900.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dosmil_post`
--

CREATE TABLE IF NOT EXISTS `dosmil_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `imagen` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `autor` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dosmil_post`
--

INSERT INTO `dosmil_post` (`id`, `nombre`, `fecha`, `imagen`, `texto`, `autor`, `categoria`) VALUES
(1, 'carajooo', '2015-05-18 21:34:12', 'ccf6a-71-cpu3z1sl._sl1200_.jpg', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet architecto repellat ipsam perferendis, sed sint, dolore, expedita cumque velit iusto ea maxime fuga odit est obcaecati deserunt? Sunt, itaque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur animi officiis fuga, delectus eveniet aliquid itaque voluptates nisi ipsum accusantium odio perferendis vitae vel adipisci, enim! Tempora aut alias illum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet architecto repellat ipsam perferendis, sed sint, dolore, expedita cumque velit iusto ea maxime fuga odit est obcaecati deserunt? Sunt, itaque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur animi officiis fuga, delectus eveniet aliquid itaque voluptates nisi ipsum accusantium odio perferendis vitae vel adipisci, enim! Tempora aut alias illum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet architecto repellat ipsam perferendis, sed sint, dolore, expedita cumque velit iusto ea maxime fuga odit est obcaecati deserunt? Sunt, itaque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur animi officiis fuga, delectus eveniet aliquid itaque voluptates nisi ipsum accusantium odio perferendis vitae vel adipisci, enim! Tempora aut alias illum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet architecto repellat ipsam perferendis, sed sint, dolore, expedita cumque velit iusto ea maxime fuga odit est obcaecati deserunt? Sunt, itaque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur animi officiis fuga, delectus eveniet aliquid itaque voluptates nisi ipsum accusantium odio perferendis vitae vel adipisci, enim! Tempora aut alias illum!</p>\r\n', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', ''),
(2, 'Miembros', 'Miembros del sitio');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'Ca6L9gSRzdsMJsc/XyKyJO', 1268889823, 1431958374, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '127.0.0.1', 'el morcho', '$2y$08$LFWxe/BDO5CvnoTSo39xK.Qwrlasja9Y5GkhpdbqQNgh/JWael2.S', NULL, 'davidcp90+elmorcho@gmail.com', NULL, NULL, NULL, NULL, 1431899590, NULL, 1, 'El', 'Morcho', 'Upsidedown', '8765432');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
