-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 07:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `Movie_ID` int(4) NOT NULL,
  `Movie_name` varchar(30) NOT NULL,
  `Genre` varchar(30) NOT NULL,
  `Hero` varchar(30) NOT NULL,
  `Director` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`Movie_ID`, `Movie_name`, `Genre`, `Hero`, `Director`) VALUES
(1, 'Agent sai srinivas Athreya', 'Thriller', 'Naveen Polishetty', 'Swaroop RSJ'),
(2, 'Athadu', 'Thriller', 'Mahesh Babu', 'Trivikram Srinivas'),
(3, 'HIT', 'Thriller', 'Vishwak Sen', 'Sailesh Kolanu'),
(4, 'Fidda', 'Rom-com', 'Varun Tej', 'Shekhar kammula'),
(5, 'Darling', 'Rom-com', 'Prabhas', 'A. Karunakaran'),
(6, 'Kushi', 'Rom-com', 'Pawan Kalyan', 'S.J.Suryah'),
(7, 'Bahubali', 'Drama', 'Prabhas', 'S.S.Rajamouli'),
(8, 'Bharat Ane Nenu', 'Drama', 'Mahesh Babu', 'Koratala Siva'),
(9, 'Jai Lava Kusa', 'Drama', 'N.T.R', 'K.S.Ravindra'),
(10, '1 Nenokkadine', 'Action', 'Mahesh Babu', 'Sukumar'),
(11, 'Dhruva', 'Action', 'Ram Charan', 'Surender Reddy'),
(12, 'Sahoo', 'Thriller', 'Prabhas', 'Sujeeth'),
(13, 'Bhaagamathie', 'Horror', 'Anushka Shetty', 'G. Ashok'),
(14, 'Arundhati', 'Horror', 'Anushka Shetty', 'Kodi Ramakrishna'),
(15, 'Raju Gari Gadhi 2', 'Horror', 'Nagarjuna', 'Ohmkar'),
(16, 'Jersey', 'Sports', 'Nani', 'Gowtam Tinnanuri'),
(17, 'Sye', 'Sports', 'Nithin', 'S.S.Rajamouli'),
(18, 'A1 Express', 'Sports', 'Sundeep Kishan', 'Dennis Jeevan Kanukolanu'),
(19, 'Ala Vaikunthapurramuloo', 'Drama', 'Allu Arjun', 'Trivikram Srinivas'),
(20, 'A aa', 'Rom-com', 'Nithin', 'Trivikram Srinivas'),
(21, 'Eega', 'Fantasy', 'Nani', 'S.S.Rajamouli'),
(22, 'Arya', 'Rom-com', 'Allu Arjun', 'Sukumar'),
(23, 'Rangasthalam', 'Action', 'Ram Charan', 'Sukumar'),
(24, 'Temper', 'Action', 'N.T.R', 'Puri Jagannadh'),
(25, 'Pokiri', 'Crime', 'Mahesh Babu', 'Puri Jagannadh'),
(26, 'Paisa Vasool', 'Action-comedy', 'Balakrishna', 'Puri Jagannadh'),
(27, 'Srimanthudu', 'Drama', 'Mahesh Babu', 'Koratala Siva'),
(28, 'Janatha Garage', 'Action', 'N.T.R', 'Koratala Siva'),
(29, 'Happy Days', 'Drama-Com', 'Varun Sandesh', 'Shekhar kammula'),
(30, 'Leader', 'Political', 'Rana Daggubati', 'Shekhar kammula'),
(31, 'Gang Leader', 'Drama-Com', 'Nani', 'Vikram K Kumar'),
(32, 'Ninnu Kori', 'Romance', 'Nani', 'Shiva Nirvana'),
(33, 'Mirchi', 'Drama', 'Prabhas', 'Koratala Siva'),
(34, 'Vakeel Saab', 'Legal-Drama', 'Pawan Kalyan', 'Venu Sriram'),
(35, 'Magadheera', 'Fantasy', 'Ram Charan', 'S.S.Rajamouli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`Movie_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
