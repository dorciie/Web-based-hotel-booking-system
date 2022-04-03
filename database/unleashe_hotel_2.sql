-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2022 at 06:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unleashe_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(200) NOT NULL,
  `total_adult` int(50) NOT NULL,
  `total_children` int(50) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout_date` date NOT NULL,
  `checkout_time` time NOT NULL,
  `special_requirement` text NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `total_amount` double DEFAULT NULL,
  `deposit` double NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone_no` varchar(30) NOT NULL,
  `add_line1` varchar(100) NOT NULL,
  `add_line2` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `postcode` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `total_adult`, `total_children`, `checkin_date`, `checkin_time`, `checkout_date`, `checkout_time`, `special_requirement`, `payment_status`, `total_amount`, `deposit`, `booking_date`, `first_name`, `last_name`, `email`, `telephone_no`, `add_line1`, `add_line2`, `city`, `state`, `postcode`, `country`) VALUES
(127, 2, 0, '2014-12-05', '00:00:00', '2014-12-07', '00:00:00', '', 'pending', 440, 66, '2014-12-04 20:52:53', 'Mohd Zulkarnain', 'Jaranee', 'mrzulkarnine@gmail.com', '0128951744', '307 Kpg Kanchong Jaya Gedong', 'None', 'Serian', 'Sarawak', '50600', 'Malaysia'),
(128, 1, 0, '2014-12-05', '00:00:00', '2014-12-06', '00:00:00', '', 'pending', 360, 54, '2014-12-05 03:49:58', 'Mohd Zulkarnain', 'Jaranee', 'mrzulkarnine@gmail.com', '0128951744', '307 Kpg Kanchong Jaya Gedong', 'None', 'Serian', 'Sarawak', '50600', 'Malaysia'),
(129, 1, 0, '2014-12-05', '00:00:00', '2014-12-07', '00:00:00', '', 'pending', 240, 36, '2014-12-05 04:53:27', 'Mohd Zulkarnain', 'Jaranee', 'mrzulkarnine@gmail.com', '0128951744', '307 Kpg Kanchong Jaya Gedong', 'None', 'Serian', 'Sarawak', '50600', 'Malaysia'),
(130, 1, 0, '2014-12-05', '00:00:00', '2014-12-07', '00:00:00', '', 'pending', 480, 72, '2014-12-05 04:58:13', 'Mohd Zulkarnain', 'Jaranee', 'mrzulkarnine@gmail.com', '0128951744', '307 Kpg Kanchong Jaya Gedong', 'None', 'Serian', 'Sarawak', '50600', 'Malaysia'),
(131, 2, 0, '2015-05-21', '00:00:00', '2015-05-23', '00:00:00', '', 'pending', 240, 36, '2015-05-20 19:16:14', 'Mohd Zulkarnain', 'Jaranee', 'mrzulkarnine@gmail.com', '0128951744', '307 Kpg Kanchong Jaya Gedong', '', 'Serian', 'Sarawak', '50600', 'Malaysia'),
(132, 2, 0, '2015-05-21', '00:00:00', '2015-05-23', '00:00:00', '', 'pending', 920, 138, '2015-05-20 19:18:52', 'Mohd Zulkarnain', 'Jaranee', 'mrzulkarnine@gmail.com', '0128951744', '307 Kpg Kanchong Jaya Gedong', '', 'Serian', 'Sarawak', '50600', 'Malaysia'),
(133, 2, 0, '2022-01-12', '00:00:00', '2022-01-14', '00:00:00', 'NO. 41, JALAN 33/27B,\r\nTAMAN DESA SETAPAK, 53300 KUALA LUMPUR', 'pending', 480, 72, '2022-01-05 15:43:55', 'Jaspreet', 'Kaur', 'jaspreetaulakh26@gmail.com', '0341430877', 'NO. 41, JALAN 33/27B,', 'TAMAN DESA SETAPAK, 53300 KUALA LUMPUR', 'KUALA LUMPUR', 'Kuala Lumpur', '53300', 'Malaysia');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(200) NOT NULL,
  `state_name` varchar(100) NOT NULL,
  `district_name` varchar(100) NOT NULL,
  `population` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `state_name`, `district_name`, `population`) VALUES
(1, 'PERLIS', 'PERLIS', 264700),
(2, 'KEDAH', 'KOTA SETAR', 423300),
(3, 'KEDAH', 'KUBANG PASU', 257800),
(4, 'KEDAH', 'PADANG TERAP', 74100),
(5, 'KEDAH', 'LANGKAWI', 113100),
(6, 'KEDAH', 'KUALA MUDA', 527900),
(7, 'KEDAH', 'YAN', 80000),
(8, 'KEDAH', 'SIK', 79400),
(9, 'KEDAH', 'BALING', 158600),
(10, 'KEDAH', 'KULIM', 334000),
(11, 'KEDAH', 'BANDAR BAHARU', 49300),
(12, 'KEDAH', 'PENDANG', 111600),
(13, 'KEDAH', 'POKOK SENA', 58300),
(14, 'KELANTAN', 'BACHOK', 169100),
(15, 'KELANTAN', 'KOTA BHARU', 620400),
(16, 'KELANTAN', 'MACHANG', 118200),
(17, 'KELANTAN', 'PASIR MAS', 241200),
(18, 'KELANTAN', 'PASIR PUTEH', 148900),
(20, 'KELANTAN', 'TANAH MERAH', 155100),
(21, 'KELANTAN', 'TUMPAT', 194600),
(22, 'KELANTAN', 'GUA MUSANG', 118700),
(23, 'KELANTAN', 'KUALA KRAI', 140500),
(24, 'KELANTAN', 'JELI', 53000),
(26, 'TERENGGANU', 'BESUT', 175800),
(27, 'TERENGGANU', 'DUNGUN', 193300),
(28, 'TERENGGANU', 'KEMAMAN', 216100),
(29, 'TERENGGANU', 'KUALA TERENGGANU', 268600),
(30, 'TERENGGANU', 'HULU TERENGGANU', 90700),
(31, 'TERENGGANU', 'MARANG', 121700),
(32, 'TERENGGANU', 'SETIU', 70000),
(33, 'PULAU PINANG', 'SEBERANG PERAI TENGAH', 438400),
(34, 'PULAU PINANG', 'SEBERANG PERAI UTARA', 344900),
(35, 'PULAU PINANG', 'SEBERANG PERAI SELATAN', 198000),
(36, 'PULAU PINANG', 'TIMUR LAUT', 588200),
(37, 'PULAU PINANG', 'BARAT DAYA', 237000),
(38, 'PERAK', 'BATANG PADANG', 131900),
(39, 'PERAK', 'MANJUNG', 258500),
(40, 'PERAK', 'KINTA', 841700),
(41, 'PERAK', 'KERIAN', 199300),
(42, 'PERAK', 'KUALA KANGSAR', 177800),
(43, 'PERAK', 'LARUT', 122600),
(44, 'PERAK', 'MATANG', 122600),
(45, 'PERAK', 'HILIR PERAK', 157700),
(46, 'PERAK', 'HULU PERAK', 105200),
(47, 'PERAK', 'SELAMA', 122600),
(48, 'PERAK', 'PERAK TENGAH', 114300),
(49, 'PERAK', 'KAMPAR', 109400),
(50, 'PERAK', 'MUALLIM', 73200),
(51, 'SARAWAK', 'KUCHING', 711500),
(52, 'SARAWAK', 'SRI AMAN', 78200),
(53, 'SARAWAK', 'SIBU', 288000),
(54, 'SARAWAK', 'MIRI', 356900),
(55, 'SARAWAK', 'LIMBANG', 56900),
(56, 'SARAWAK', 'SARIKEI', 67400),
(57, 'SARAWAK', 'KAPIT', 65800),
(58, 'SARAWAK', 'SAMARAHAN', 102700),
(59, 'SARAWAK', 'BINTULU', 229400),
(60, 'SARAWAK', 'MUKAH', 52200),
(61, 'SARAWAK', 'BETONG', 73500),
(62, 'PAHANG', 'BENTONG', 136900),
(63, 'PAHANG', 'CAMERON HIGHLANDS', 44100),
(64, 'PAHANG', 'JERANTUT', 106800),
(65, 'PAHANG', 'KUANTAN', 536800),
(66, 'PAHANG', 'LIPIS', 105400),
(67, 'PAHANG', 'PEKAN', 131300),
(68, 'PAHANG', 'RAUB', 109200),
(69, 'PAHANG', 'TEMERLOH', 192500),
(70, 'PAHANG', 'ROMPIN', 137100),
(71, 'PAHANG', 'MARAN', 136600),
(72, 'PAHANG', 'BERA', 113500),
(73, 'SELANGOR', 'KLANG', 1056300),
(74, 'SELANGOR', 'KUALA LANGAT', 279100),
(75, 'SELANGOR', 'KUALA SELANGOR', 259900),
(76, 'SELANGOR', 'SABAK BERNAM', 130500),
(77, 'SELANGOR', 'HULU LANGAT', 1413200),
(78, 'SELANGOR', 'HULU SELANGOR', 245700),
(79, 'SELANGOR', 'PETALING', 2223200),
(80, 'SELANGOR', 'GOMBAK', 842200),
(81, 'SELANGOR', 'SEPANG', 265600),
(82, 'JOHOR', 'BATU PAHAT', 488900),
(83, 'JOHOR', 'JOHOR BAHRU', 1621400),
(84, 'JOHOR', 'KLUANG', 352),
(85, 'JOHOR', 'KOTA TINGGI', 231300),
(86, 'JOHOR', 'MERSING', 85100),
(87, 'JOHOR', 'MUAR', 288900),
(88, 'JOHOR', 'PONTIAN', 183100),
(89, 'JOHOR', 'SEGAMAT', 221700),
(90, 'JOHOR', 'KULAI', 294800),
(91, 'JOHOR', 'TANGKAK', 159700),
(92, 'MELAKA', 'MELAKA TENGAH', 586600),
(93, 'MELAKA', 'JASIN', 158800),
(94, 'MELAKA', 'ALOR GAJAH', 215100),
(95, 'NEGERI SEMBILAN', 'JELEBU', 45700),
(96, 'NEGERI SEMBILAN', 'KUALA PILAH', 75200),
(97, 'NEGERI SEMBILAN', 'PORT DICKSON', 131700),
(98, 'NEGERI SEMBILAN', 'REMBAU', 49400),
(99, 'NEGERI SEMBILAN', 'SEREMBAN', 631000),
(100, 'NEGERI SEMBILAN', 'TAMPIN', 96500),
(101, 'NEGERI SEMBILAN', 'JEMPOL', 133200),
(102, 'KUALA LUMPUR', 'BUKIT BINTANG', 173700),
(103, 'KUALA LUMPUR', 'TITIWANGSA', 173700),
(104, 'KUALA LUMPUR', 'SETIAWANGSA', 173700),
(105, 'KUALA LUMPUR', 'WANGSA MAJU', 173700),
(106, 'KUALA LUMPUR', 'BATU', 173700),
(107, 'KUALA LUMPUR', 'KEPONG', 173700),
(108, 'KUALA LUMPUR', 'SEGAMBUT', 173700),
(109, 'KUALA LUMPUR', 'LEMBAH PANTAI', 173700),
(110, 'KUALA LUMPUR', 'SEPUTEH', 173700),
(111, 'KUALA LUMPUR', 'BANDAR TUN RAZAK', 173700),
(112, 'KUALA LUMPUR', 'CHERAS', 173700),
(113, 'PUTRAJAYA', 'PUTRAJAYA', 94600),
(114, 'LABUAN', 'LABUAN', 103100),
(115, 'PERAK', 'BAGAN DATUK', 74800),
(116, 'SABAH', 'BEAUFORT', 85200),
(117, 'SABAH', 'KOTA KINABALU', 581800),
(118, 'SABAH', 'PAPAR', 171000),
(119, 'SABAH', 'KOTA BELUD', 113700),
(120, 'SABAH', 'TUARAN', 130500),
(121, 'SABAH', 'KUDAT', 103200),
(122, 'SABAH', 'RANAU', 115800),
(123, 'SABAH', 'SANDAKAN', 518200),
(125, 'SABAH', 'KINABATANGAN', 200600),
(126, 'SABAH', 'TAWAU', 521000),
(127, 'SABAH', 'LAHAD DATU', 263100),
(128, 'SABAH', 'SEMPORNA', 175700),
(129, 'SABAH', 'KENINGAU', 222700),
(130, 'SABAH', 'TAMBUNAN', 44100),
(131, 'SABAH', 'BELURAN', 135300),
(132, 'SABAH', 'TENOM', 69900),
(133, 'SABAH', 'KUALA PENYU', 25000),
(134, 'SABAH', 'SIPITANG', 46000),
(135, 'SABAH', 'PENAMPANG', 155300),
(136, 'SABAH', 'KOTA MARUDU', 82700),
(137, 'SABAH', 'PITAS', 46000),
(138, 'SABAH', 'KUNAK', 81500),
(139, 'SABAH', 'TONGOD', 44900),
(140, 'SABAH', 'PUTATAN', 73100),
(141, 'SABAH', 'NABAWAN', 40600),
(142, 'SARAWAK', 'ASAJAYA', 37900),
(143, 'SARAWAK', 'BAU', 62200),
(144, 'SARAWAK', 'BELAGA', 44500),
(145, 'TERENGGANU', 'KUALA NERUS', 157900),
(146, 'SARAWAK', 'DALAT', 23300),
(147, 'SARAWAK', 'DARO', 37900),
(148, 'SARAWAK', 'JULAU', 19),
(149, 'SARAWAK', 'KANOWIT', 34300),
(150, 'SARAWAK', 'LAWAS', 46200),
(151, 'SARAWAK', 'LUBOK ANTU', 33100),
(152, 'SARAWAK', 'LUNDU', 39200),
(153, 'SARAWAK', 'MARUDI', 76900),
(154, 'SARAWAK', 'MATU', 21400),
(155, 'SARAWAK', 'MARADONG', 34800),
(156, 'SARAWAK', 'PAKAN', 18500),
(157, 'SARAWAK', 'SAMARAHAN', 102700),
(158, 'SARAWAK', 'SARATOK', 54400),
(159, 'SARAWAK', 'SARIKEI', 67400),
(160, 'SARAWAK', 'SELANGAU', 27400),
(161, 'SARAWAK', 'SERIAN', 105700),
(162, 'SARAWAK', 'SIBU', 288000),
(163, 'SARAWAK', 'SIMUNJAN', 46900),
(164, 'SARAWAK', 'SONG', 24500),
(165, 'SARAWAK', 'SRI AMAN', 78200),
(166, 'SARAWAK', 'TATAU', 36900);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(200) NOT NULL,
  `district_id` int(200) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `contact_num` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `district_id`, `hotel_name`, `contact_num`, `address`) VALUES
(0, 1, 'OYO 221', '012-3456789', 'oyo 221, wangsa maju, kl');


-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(255) NOT NULL,
  `hotel_id` int(200) NOT NULL,
  `total_room` int(255) NOT NULL,
  `occupancy` int(255) DEFAULT NULL,
  `size` varchar(30) DEFAULT NULL,
  `view` varchar(30) DEFAULT NULL,
  `room_name` varchar(50) NOT NULL,
  `descriptions` text DEFAULT NULL,
  `rate` double NOT NULL,
  `imgpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `hotel_id`, `total_room`, `occupancy`, `size`, `view`, `room_name`, `descriptions`, `rate`, `imgpath`) VALUES
(1, 0, 5, 2, '10 sqft', 'city', 'Deluxe Room', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 120, 'img/room2.png'),
(2, 0, 5, 2, '10 sqft', 'city', 'Single Room', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 100, 'img/room3.png'),
(3, 0, 10, 10, '20 sqft', 'City', 'King Suite Room', 'Suitable for honeymoon', 120, 'img/room3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `booking_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `totalroombook` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`booking_id`, `room_id`, `totalroombook`, `id`) VALUES
(127, 1, 1, 67),
(127, 2, 1, 68),
(128, 3, 3, 69),
(129, 1, 1, 70),
(130, 1, 1, 71),
(131, 1, 1, 72),
(132, 1, 2, 73),
(132, 2, 1, 74),
(0, 1, 2, 75);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'demo', 'demo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`),
  ADD KEY `district_id` (`district_id`) USING BTREE;

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `district_id` FOREIGN KEY (`district_id`) REFERENCES `district` (`district_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
