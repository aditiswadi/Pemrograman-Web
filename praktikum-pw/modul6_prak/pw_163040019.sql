-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 06:43 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_163040019`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `jurusan` varchar(64) NOT NULL,
  `universitas` varchar(64) NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `email`, `jurusan`, `universitas`, `gambar`) VALUES
(1, 'Fahmi Ramadhan', 'fahmi@mail.unpas.ac.id', 'Teknik Informatika', 'Universitas Pasundan Bandung', 'fahmi.png'),
(2, 'Tanti Yuliawati', 'tanti@mail.unpas.ac.id', 'Teknologi Pangan', 'Universitas Pasundan Bandung', 'tanti.jpg'),
(3, 'Muhammad Faisal', 'faisal@mail.unpas.ac.id', 'Teknik Mesin', 'Universitas Pasundan Bandung', 'faisal.jpg'),
(4, 'Kemal Maulana', 'kemal@gmail.com', 'Teknik Pertambangan', 'Institut Teknologi Bandung', 'kemal.png'),
(5, 'Farhan Andrew', 'andrew@gmail.com', 'Pendidikan Bahasa Inggris', 'Universitas Pendidikan Indonesia', 'farhan.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
