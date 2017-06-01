-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 01, 2017 at 01:07 AM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `avaliacao1`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
`id_comentarios` int(11) NOT NULL,
  `id_filmes` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`id_comentarios`, `id_filmes`, `comentario`, `rating`) VALUES
(2, 1, 'This is Spielberg at his best. That is all I can say about E.T. ITs gripping, intelligent story mixed with its incredible symbolism makes it one of the best films ever made. E.T. is a story about friendship, loyalty, and family. But most of all it is about love, and how powerful love is', 5),
(3, 1, 'The brilliantly innovative shots mixed with John Williams epic score makes for a masterpiece, which E.T. certainly is', 4),
(4, 2, 'Acting? Its actually above average for a sci-fi flick', 3),
(5, 2, 'Paul Verhoeven, and the script, have their tongue lodged firmly in their cheek as they make this movie into a satire about the way our vales are changing', 4),
(28, 1, 'FIlme muito bom, voltaria a ver novamente! O ator principal interpreta muito bem!', 9),
(39, 2, 'FIlme muito bom, voltaria a ver novamente! O ator principal interpreta muito bem!', 5),
(42, 8, 'FIlme muito bom, voltaria a ver novamente! O ator principal interpreta muito bem!', 9),
(43, 8, 'FIlme muito bom, voltaria a ver novamente! O ator principal interpreta muito bem!', 8),
(44, 8, 'FIlme muito bom, voltaria a ver novamente! O ator principal interpreta muito bem!', 10),
(45, 8, 'FIlme muito bom, voltaria a ver novamente! O ator principal interpreta muito bem!', 7);

-- --------------------------------------------------------

--
-- Table structure for table `filmes`
--

CREATE TABLE `filmes` (
`id_filmes` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `diretor` varchar(11) NOT NULL,
  `genero` varchar(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `filmes`
--

INSERT INTO `filmes` (`id_filmes`, `nome`, `diretor`, `genero`) VALUES
(1, 'E.T. - O Ex', 'Steven Spie', 'Ficção'),
(2, 'RoboCop', 'Paul Verhoe', 'Ação'),
(8, 'Piratas do Caribe', 'Joachim RÃ¸', 'Acao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
 ADD PRIMARY KEY (`id_comentarios`), ADD KEY `id_filmes` (`id_filmes`);

--
-- Indexes for table `filmes`
--
ALTER TABLE `filmes`
 ADD PRIMARY KEY (`id_filmes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
MODIFY `id_comentarios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `filmes`
--
ALTER TABLE `filmes`
MODIFY `id_filmes` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_filmes`) REFERENCES `filmes` (`id_filmes`) ON DELETE NO ACTION ON UPDATE NO ACTION;
