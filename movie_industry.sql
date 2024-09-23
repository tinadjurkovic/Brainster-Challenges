-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 23, 2024 at 03:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_industry`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `agent_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`id`, `first_name`, `last_name`, `nickname`, `date_of_birth`, `agent_code`) VALUES
(1, 'Leonardo', 'DiCaprio', 'Leo', '1974-11-11', 'AG001'),
(2, 'Brad', 'Pitt', NULL, '1963-12-18', 'AG002'),
(3, 'Uma', 'Thurman', NULL, '1970-04-29', 'AG003'),
(4, 'Matthew', 'McConaughey', NULL, '1969-11-04', 'AG004'),
(5, 'Jessica', 'Chastain', NULL, '1977-03-24', 'AG005'),
(6, 'Tom', 'Hanks', 'Tommy', '1956-07-09', 'AG006'),
(7, 'Scarlett', 'Johansson', 'ScarJo', '1984-11-22', 'AG007'),
(8, 'Morgan', 'Freeman', 'Morg', '1937-06-01', 'AG008'),
(9, 'Natalie', 'Portman', NULL, '1981-06-09', 'AG009'),
(10, 'Johnny', 'Depp', NULL, '1963-06-09', 'AG010'),
(11, 'Christian', 'Bale', NULL, '1974-01-30', 'AG011'),
(12, 'Cate', 'Blanchett', NULL, '1969-05-14', 'AG012'),
(13, 'Anne', 'Hathaway', 'Annie', '1982-11-12', 'AG013'),
(14, 'Matthew', 'Perry', 'Matty', '1969-08-19', 'AG014'),
(15, 'Sandra', 'Bullock', 'Sandy', '1964-07-26', 'AG015'),
(16, 'Denzel', 'Washington', NULL, '1954-12-28', 'AG016'),
(17, 'Meryl', 'Streep', NULL, '1949-06-22', 'AG017'),
(18, 'Ryan', 'Reynolds', 'Ry', '1976-10-23', 'AG018'),
(19, 'Emma', 'Stone', NULL, '1988-11-06', 'AG019'),
(20, 'Chris', 'Hemsworth', 'Thor', '1983-08-11', 'AG020');

-- --------------------------------------------------------

--
-- Table structure for table `actor_critique`
--

CREATE TABLE `actor_critique` (
  `movie_id` int(11) NOT NULL,
  `critic_id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL,
  `acting_grade` decimal(3,1) DEFAULT NULL,
  `expression_grade` decimal(3,1) DEFAULT NULL,
  `naturalness_grade` decimal(3,1) DEFAULT NULL,
  `devotion_grade` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor_critique`
--

INSERT INTO `actor_critique` (`movie_id`, `critic_id`, `actor_id`, `acting_grade`, `expression_grade`, `naturalness_grade`, `devotion_grade`) VALUES
(1, 1, 1, 4.8, 4.9, 4.7, 4.9),
(2, 2, 2, 4.6, 4.8, 4.5, 4.7),
(3, 3, 3, 4.9, 4.9, 4.8, 4.9),
(4, 4, 2, 4.7, 4.6, 4.8, 4.7),
(5, 5, 1, 4.8, 4.7, 4.7, 4.9);

-- --------------------------------------------------------

--
-- Table structure for table `critic`
--

CREATE TABLE `critic` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `critic`
--

INSERT INTO `critic` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'Tina', 'Djurkovic', 'kidrauhl23', 'password1'),
(2, 'Borjan', 'Strashevski', 'trentalexandararnold', 'password2'),
(3, 'Stela', 'Jovanoska', 'stelaxo', 'password3'),
(4, 'Ana', 'Aleksoska', 'ninjashoyo', 'password4'),
(5, 'Marijan', 'Djurkovic', 'orion23', 'password5');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `expertise` varchar(255) DEFAULT NULL,
  `film_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`id`, `first_name`, `last_name`, `genre`, `expertise`, `film_id`) VALUES
(1, 'Martin', 'Scorsese', 'Thriller', 'Psychological Thrillers', 1),
(2, 'David', 'Fincher', 'Drama', 'Dark Drama', 2),
(3, 'Quentin', 'Tarantino', 'Crime', 'Nonlinear Storytelling', 3),
(4, 'Quentin', 'Tarantino', 'Drama', 'Retro Homages', 4),
(5, 'Martin', 'Scorsese', 'Biography', 'Biographical Crime', 5);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `movie_id` int(11) NOT NULL,
  `first_week_profit` double DEFAULT NULL,
  `premiere_format` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`movie_id`, `first_week_profit`, `premiere_format`) VALUES
(1, 41, '2D'),
(2, 37, '2D'),
(3, 9.3, '3D'),
(4, 41.1, '2D'),
(5, 18.4, '3D');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `premiere_city` varchar(255) DEFAULT NULL,
  `genre` varchar(32) DEFAULT NULL,
  `country_of_origin` varchar(255) DEFAULT NULL,
  `production_company` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `premiere_city`, `genre`, `country_of_origin`, `production_company`) VALUES
(1, 'Shutter Island', 'New York', 'Thriller', 'USA', 'Paramount Pictures'),
(2, 'Fight Club', 'Los Angeles', 'Drama', 'USA', 'Fox 2000 Pictures'),
(3, 'Pulp Fiction', 'Cannes', 'Crime', 'USA', 'Miramax'),
(4, 'Once Upon A Time in Hollywood', 'Los Angeles', 'Comedy-Drama', 'USA', 'Columbia Pictures'),
(5, 'Wolf of Wall Street', 'New York', 'Biography', 'USA', 'Paramount Pictures'),
(6, 'Gossip Girl', 'New York', 'Drama', 'USA', 'Warner Bros.'),
(7, 'Sex and the City', 'New York', 'Romance', 'USA', 'HBO'),
(8, 'Breaking Bad', 'Albuquerque', 'Crime', 'USA', 'AMC'),
(9, 'One Tree Hill', 'Wilmington', 'Drama', 'USA', 'Warner Bros.'),
(10, 'Money Heist', 'Madrid', 'Action', 'Spain', 'Vancouver Media');

-- --------------------------------------------------------

--
-- Table structure for table `movie_actor`
--

CREATE TABLE `movie_actor` (
  `movie_id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL,
  `payment` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_actor`
--

INSERT INTO `movie_actor` (`movie_id`, `actor_id`, `payment`) VALUES
(1, 1, 20000000),
(1, 4, 16000000),
(1, 7, 18000000),
(1, 8, 19000000),
(2, 1, 21000000),
(2, 2, 17000000),
(2, 6, 15000000),
(2, 9, 17000000),
(2, 12, 14000000),
(3, 3, 15000000),
(3, 11, 20000000),
(3, 19, 18000000),
(4, 2, 25000000),
(4, 16, 22000000),
(4, 18, 19000000),
(5, 1, 25000000),
(5, 15, 21000000),
(5, 20, 23000000),
(6, 14, 12000000),
(6, 17, 11000000),
(8, 3, 9000000),
(8, 13, 13000000);

-- --------------------------------------------------------

--
-- Table structure for table `movie_critic`
--

CREATE TABLE `movie_critic` (
  `movie_id` int(11) NOT NULL,
  `critic_id` int(11) NOT NULL,
  `rating` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_critic`
--

INSERT INTO `movie_critic` (`movie_id`, `critic_id`, `rating`) VALUES
(1, 5, 4.5),
(2, 4, 4.7),
(3, 3, 4.9),
(4, 2, 4.3),
(5, 1, 4.8);

-- --------------------------------------------------------

--
-- Table structure for table `oscar_winner`
--

CREATE TABLE `oscar_winner` (
  `actor_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oscar_winner`
--

INSERT INTO `oscar_winner` (`actor_id`, `movie_id`, `role`, `year`) VALUES
(1, 5, 'Jordan Belfort', 2014),
(2, 4, 'Cliff Booth', 2020),
(3, 3, 'Mia Wallace', 1995),
(4, 5, 'Mark Hanna', 2014),
(5, 1, 'Tammy Faye', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `regular_actor`
--

CREATE TABLE `regular_actor` (
  `actor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regular_actor`
--

INSERT INTO `regular_actor` (`actor_id`) VALUES
(6),
(7),
(8),
(9),
(10);

-- --------------------------------------------------------

--
-- Table structure for table `sequel`
--

CREATE TABLE `sequel` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `number_of_sequels` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sequel`
--

INSERT INTO `sequel` (`id`, `movie_id`, `number_of_sequels`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 1),
(4, 4, 0),
(5, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tv_series`
--

CREATE TABLE `tv_series` (
  `movie_id` int(11) NOT NULL,
  `tv_channel` varchar(255) DEFAULT NULL,
  `number_of_episodes` int(11) DEFAULT NULL,
  `number_of_seasons` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tv_series`
--

INSERT INTO `tv_series` (`movie_id`, `tv_channel`, `number_of_episodes`, `number_of_seasons`) VALUES
(6, 'The CW', 121, 6),
(7, 'HBO', 94, 6),
(8, 'AMC', 62, 5),
(9, 'The WB', 187, 9),
(10, 'Netflix', 41, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `actor_critique`
--
ALTER TABLE `actor_critique`
  ADD PRIMARY KEY (`movie_id`,`critic_id`,`actor_id`),
  ADD KEY `critic_id` (`critic_id`),
  ADD KEY `actor_id` (`actor_id`);

--
-- Indexes for table `critic`
--
ALTER TABLE `critic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_id` (`film_id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_actor`
--
ALTER TABLE `movie_actor`
  ADD PRIMARY KEY (`movie_id`,`actor_id`),
  ADD KEY `actor_id` (`actor_id`);

--
-- Indexes for table `movie_critic`
--
ALTER TABLE `movie_critic`
  ADD PRIMARY KEY (`movie_id`,`critic_id`),
  ADD KEY `critic_id` (`critic_id`);

--
-- Indexes for table `oscar_winner`
--
ALTER TABLE `oscar_winner`
  ADD PRIMARY KEY (`actor_id`,`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `regular_actor`
--
ALTER TABLE `regular_actor`
  ADD PRIMARY KEY (`actor_id`);

--
-- Indexes for table `sequel`
--
ALTER TABLE `sequel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `tv_series`
--
ALTER TABLE `tv_series`
  ADD PRIMARY KEY (`movie_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actor_critique`
--
ALTER TABLE `actor_critique`
  ADD CONSTRAINT `actor_critique_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`),
  ADD CONSTRAINT `actor_critique_ibfk_2` FOREIGN KEY (`critic_id`) REFERENCES `critic` (`id`),
  ADD CONSTRAINT `actor_critique_ibfk_3` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`id`);

--
-- Constraints for table `director`
--
ALTER TABLE `director`
  ADD CONSTRAINT `director_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `film` (`movie_id`);

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`);

--
-- Constraints for table `movie_actor`
--
ALTER TABLE `movie_actor`
  ADD CONSTRAINT `movie_actor_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`),
  ADD CONSTRAINT `movie_actor_ibfk_2` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`id`);

--
-- Constraints for table `movie_critic`
--
ALTER TABLE `movie_critic`
  ADD CONSTRAINT `movie_critic_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`),
  ADD CONSTRAINT `movie_critic_ibfk_2` FOREIGN KEY (`critic_id`) REFERENCES `critic` (`id`);

--
-- Constraints for table `oscar_winner`
--
ALTER TABLE `oscar_winner`
  ADD CONSTRAINT `oscar_winner_ibfk_1` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`id`),
  ADD CONSTRAINT `oscar_winner_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `film` (`movie_id`);

--
-- Constraints for table `regular_actor`
--
ALTER TABLE `regular_actor`
  ADD CONSTRAINT `regular_actor_ibfk_1` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`id`);

--
-- Constraints for table `sequel`
--
ALTER TABLE `sequel`
  ADD CONSTRAINT `sequel_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`);

--
-- Constraints for table `tv_series`
--
ALTER TABLE `tv_series`
  ADD CONSTRAINT `tv_series_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
