-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 11:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ishop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `cashier_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `starting_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`cashier_id`, `fullname`, `username`, `address`, `contact`, `password`, `starting_date`) VALUES
(1, 'Emmanuel Appiah', 'Cashier', 'New Bortianor', '0247490093', 'cashier', '2022-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `transaction_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `exp_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `item` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `expiry_date` date NOT NULL,
  `o_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `measure` varchar(20) NOT NULL,
  `qty_left` decimal(10,2) NOT NULL,
  `qty` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `barcode`, `product_name`, `expiry_date`, `o_price`, `price`, `profit`, `measure`, `qty_left`, `qty`) VALUES
(1, '0', 'KIRKLAND TOWEL 12 IN 1', '0000-00-00', '165', '165', '0', 'Pack', '424.00', '424.00'),
(2, '0', 'KLEENEX 10 IN 1', '0000-00-00', '175', '175', '0', 'Box', '87.00', '87.00'),
(3, '0', 'LAYS STAX', '0000-00-00', '170', '170', '0', 'Box', '65.00', '57.00'),
(4, '0', 'FAMOUS AMOS', '2022-12-13', '110', '110', '0', 'Box', '87.00', '68.00'),
(5, '0', 'ANIMAL CRAKERS - RED', '0000-00-00', '55', '55', '0', 'Unit', '122.00', '118.00'),
(6, '0', 'ANIMAL CRAKERS - BLUE', '0000-00-00', '57', '57', '0', 'Unit', '42.00', '41.00'),
(7, '0', 'POPCORNERS', '0000-00-00', '100', '100', '0', 'Box', '73.00', '73.00'),
(8, '0', 'ARIZONA GREEN TEA', '2023-09-20', '100', '100', '0', 'Pack', '233.00', '232.00'),
(9, '0', 'FABULOSO - BIG 3 IN 1', '0000-00-00', '240', '240', '0', 'Box', '12.00', '12.00'),
(10, '0', 'PRINGLES 36 IN 1', '2022-11-10', '150', '150', '0', 'Box', '142.00', '139.00'),
(11, '0', 'HOLIDAY GREETING HANDSOAP 4 IN 1', '0000-00-00', '100', '100', '0', 'Box', '34.00', '24.00'),
(12, '0', 'OREO 30 IN 1', '2022-05-04', '80', '80', '0', 'Box', '192.00', '185.00'),
(13, '0', 'MEMBER MARK TOMATO PAST 6 IN 1', '2023-09-01', '330', '330', '0', 'Box', '22.00', '22.00'),
(14, '0', 'FAYGO VARIETY', '2022-08-16', '70', '70', '0', 'Pack', '35.00', '35.00'),
(15, '0', 'MIRA', '2023-01-09', '110', '110', '0', 'Pack', '48.00', '38.00'),
(16, '0', 'MANGO NECTOR 4 IN 1', '2023-03-08', '240', '240', '0', 'Box', '5.00', '5.00'),
(17, '0', 'JASMINE RICE 50 POUND', '2023-03-29', '310', '310', '0', 'Sac', '6.00', '6.00'),
(18, '0', 'JASMINE RICE 25 POUND', '2023-03-29', '165', '165', '0', 'Sac', '46.00', '36.00'),
(19, '0', 'VENEGARETTE 12 IN 1', '2022-12-17', '365', '365', '0', 'Box', '10.00', '9.80'),
(20, '0', 'OATS 6 IN 1', '2023-02-09', '162', '162', '0', 'Box', '3.00', '0.00'),
(21, '0', 'COFFEE CREAMER 8 IN 1', '2022-08-12', '90', '90', '0', 'Pack', '8.00', '8.00'),
(22, '0', 'NESTLE CARNATION MILK 12 IN 1', '2022-11-04', '110', '110', '0', 'Pack', '8.00', '7.00'),
(23, '0', 'MIXED NUTS 12 IN 1', '2023-06-17', '600', '600', '0', 'Pack', '7.00', '7.00'),
(24, '0', 'CASHEW NUTS 12 IN 1', '2023-05-25', '580', '580', '0', 'Pack', '1.00', '1.00'),
(25, '0', 'IODIZED SALT 12 IN 1', '2026-08-17', '100', '100', '0', 'Pack', '1.00', '1.00'),
(26, '0', 'CHICKEN BREAST 6 IN 1', '2024-10-18', '570', '570', '0', 'Box', '3.00', '3.00'),
(27, '0', 'KNORR CHICKEN SPICES 6 IN 1', '0000-00-00', '300', '300', '0', 'Box', '3.00', '3.00'),
(28, '0', 'PRINGLES 12 IN 1', '0000-00-00', '50', '50', '0', 'Box', '7.00', '2.00'),
(29, '0', 'KNORR CHICKEN SPICES - SMALL', '0000-00-00', '20', '20', '0', 'Unit', '17.00', '17.00'),
(30, '0', 'KIRKLAND CINNAMON POWDER 20 IN 1', '2023-09-20', '700', '700', '0', 'Box', '2.00', '1.80'),
(31, '0', 'KIRKLAND TURMERIC POWDER 20 IN 1', '2023-07-01', '800', '800', '0', 'Box', '3.00', '3.00'),
(32, '0', 'BADIA CURRY POWDER 6 IN 1 (BIG)', '2025-09-01', '300', '300', '0', 'Box', '3.00', '3.00'),
(33, '0', 'ALMOND MILK 6 IN 1', '2022-07-08', '85', '85', '0', 'Box', '60.00', '53.00'),
(34, '0', 'BIGLOW PREMIUM GREEN TEA', '2023-08-01', '85', '85', '0', 'Pack', '25.00', '15.00'),
(35, '0', 'SUPREME TRADITION', '2023-02-18', '', '', '', 'Pack', '8.00', '8.00'),
(36, '0', 'KIRKLAND ORGANIC SOY 12 IN 1', '2022-06-25', '135', '135', '0', 'Box', '9.00', '4.00'),
(37, '0', 'KLEENEX 12 IN 1', '0000-00-00', '165', '165', '0', 'Box', '1.00', '1.00'),
(38, '0', 'ZIPLOC GALLON 152 BAG', '0000-00-00', '120', '120', '0', 'Box', '8.00', '0.00'),
(39, '0', 'ZIPLOC QUART 216 BAG', '0000-00-00', '120', '120', '0', 'Box', '8.00', '7.00'),
(40, '0', 'LYSOL DISINFECTANT SPRAY 12 IN 1', '0000-00-00', '120', '120', '0', 'Pack', '104.00', '104.00'),
(41, '0', 'LYSOL DISINFECTANT WIPES 10 IN 1', '0000-00-00', '160', '160', '0', 'Pack', '21.00', '20.00'),
(42, '0', 'CLOROX DISINFECTING WIPES 10 IN 1', '0000-00-00', '160`', '160', '0', 'Pack', '1.00', '1.00'),
(43, '0', 'COLEMAN', '0000-00-00', '450', '450', '0', 'Unit', '5.00', '5.00'),
(44, '0', 'IGLOO 152 QUART', '0000-00-00', '850', '850', '0', 'Unit', '3.00', '3.00'),
(45, '0', 'CHARCOAL GRILL', '0000-00-00', '200', '200', '0', 'Box', '12.00', '6.00'),
(46, '0', 'IGLOO 38 QUART', '0000-00-00', '320', '320', '0', 'Unit', '2.00', '2.00'),
(47, '0', 'STERILITE STORAGE BOWL', '0000-00-00', '300', '300', '0', 'Box', '2.00', '2.00'),
(48, '0', 'TRASH CAN 6.6 LITRES', '0000-00-00', '550', '550', '0', 'Unit', '1.00', '1.00'),
(49, '0', 'FOLDING CHAFER (SERVING PAN)', '0000-00-00', '300', '300', '0', 'Null', '2.00', '2.00'),
(50, '0', 'BERKLEY & JENSEN COOKWARE', '0000-00-00', '650', '650', '0', 'Box', '4.00', '3.00'),
(51, '0', 'TRAMONTINA COOKWARE 12 IN 1', '0000-00-00', '600', '600', '0', 'Box', '10.00', '10.00'),
(52, '0', 'TRAMONTINA COOKWARE 16 IN 1', '0000-00-00', '700', '700', '0', 'Box', '3.00', '3.00'),
(53, '0', 'PYREX GLASS BOWL  8 IN 1', '0000-00-00', '220', '220', '0', 'Box', '26.00', '26.00'),
(54, '0', 'STAR WARS PYREX GLASS 8 IN 1', '0000-00-00', '180', '180', '0', 'Box', '5.00', '5.00'),
(55, '0', 'TRAMONTINA DUTCH OVEN 2 IN 1', '0000-00-00', '750', '750', '0', 'Box', '4.00', '4.00'),
(56, '0', '20 JAR SPICE RACK', '0000-00-00', '280', '280', '0', 'Box', '6.00', '6.00'),
(57, '0', 'POLDER TOILET BRUSH 2 IN 1', '0000-00-00', '170', '170', '0', 'Unit', '28.00', '28.00'),
(58, '0', 'TRAMONTINA DUTCH OVEN 1 IN 1', '0000-00-00', '400', '400', '0', 'Box', '2.00', '2.00'),
(59, '0', 'RUBBERMAID STORAGE BOWL 50 PIECES', '0000-00-00', '300', '300', '0', 'Box', '5.00', '5.00'),
(60, '0', 'RUBBERMAID STORAGE BOWL 24 PIECES', '0000-00-00', '160', '160', '0', 'Box', '4.00', '4.00'),
(61, '0', 'SNAPWARE STORAGE BOWL 38 PIECES', '0000-00-00', '280', '280', '0', 'Box', '3.00', '1.00'),
(62, '0', 'GALLERY DINNER WARE SET 16 PIECES', '0000-00-00', '280', '280', '0', 'Box', '1.00', '1.00'),
(63, '0', 'GALLERY DINNER WARE SET 12 PIECES', '0000-00-00', '240', '240', '0', 'Box', '1.00', '1.00'),
(64, '0', 'ICE BUCKET', '0000-00-00', '100', '100', '0', 'Unit', '8.00', '0.00'),
(65, '0', 'ICE BUCKET BIG', '0000-00-00', '120', '120', '0', 'Unit', '7.00', '5.00'),
(66, '0', 'LUNCH BAG', '0000-00-00', '200', '200', '0', 'Unit', '1.00', '1.00'),
(67, '0', 'KIRKLAND WATER', '0000-00-00', '70', '70', '0', 'Pack', '28.00', '26.00'),
(68, '0', 'ICE CUBES', '0000-00-00', '110', '110', '0', 'Pack', '14.00', '14.00'),
(69, '0', 'ALWAYS MAXI PAD', '0000-00-00', '120', '120', '0', 'Box', '36.00', '36.00'),
(70, '0', 'ALWAYS ULTRA THIN ADVANCED', '0000-00-00', '110', '110', '0', 'Box', '66.00', '66.00'),
(71, '0', 'STONEWARE BOWL 6 IN 1', '0000-00-00', '130', '130', '0', 'Box', '4.00', '0.00'),
(72, '0', 'RED WINE GLASS 12 IN 1', '0000-00-00', '130', '130', '0', 'Box', '1.00', '1.00'),
(73, '0', 'CREST 3DWHITE ADVANCE PASTE 5 IN 1', '0000-00-00', '120', '120', '0', 'Pack', '8.00', '7.00'),
(74, '0', 'COLEMAN STAINLESS STEEL CUP', '0000-00-00', '150', '150', '0', 'Box', '98.00', '85.00'),
(75, '0', 'VASELINE INTENSIVE CARE 3 IN 1', '0000-00-00', '120', '120', '0', 'Pack', '4.00', '4.00'),
(76, '0', 'ORIGINAL MARIA COOKIES', '0000-00-00', '17', '17', '0', 'Pack', '12.00', '0.00'),
(77, '0', 'BEAR GRAHAM\'S COOKIES', '0000-00-00', '10', '10', '0', 'Pack', '33.00', '0.00'),
(78, '0', 'TEDDY BEAR COOKIES CHOCOLATE CHIPS', '0000-00-00', '12', '12', '0', 'Unit', '15.00', '0.00'),
(79, '0', 'MINEES BISCUITS', '0000-00-00', '12', '12', '0', 'Pack', '31.00', '30.00'),
(80, '0', 'SNACK TIME BISCUITS 3 IN 1', '0000-00-00', '12', '12', '0', 'Pack', '50.00', '40.00'),
(81, '0', 'BERKLEE & JENSEN HAND SOAP 6 IN 1', '0000-00-00', '240', '240', '0', 'Pack', '7.00', '7.00'),
(82, '0', 'LYSOL TOILET BOWL CLEANER 4 IN 1', '0000-00-00', '100', '100', '0', 'Box', '7.00', '6.00'),
(83, '0', 'AVEENO BODY WASH 2 IN 1', '0000-00-00', '130', '130', '0', 'Pack', '5.00', '4.00'),
(84, '0', 'OLAY BAR SOAP 20 IN 1', '0000-00-00', '150', '150', '0', 'Pack', '22.00', '22.00'),
(85, '0', 'OLAY BAR SOAP 12 IN 1', '0000-00-00', '90', '90', '0', 'Pack', '7.00', '7.00'),
(86, '0', 'DOVE BAR SOAP 16 IN 1', '0000-00-00', '130', '130', '0', 'Pack', '6.00', '6.00'),
(87, '0', 'AWESOME BLEACH 284 L', '0000-00-00', '15', '15', '0', 'Unit', '11.00', '10.00'),
(88, '0', 'TOILET BOWL CLEANER TABLET 24 IN 1', '0000-00-00', '240', '240', '0', 'Box', '1.00', '1.00'),
(89, '0', 'EVERYDAY ALUMINIUM FOIL', '0000-00-00', '15', '15', '0', 'Unit', '35.00', '35.00'),
(90, '0', 'PALMOLIVE ULTRA STRENGTH 3L', '0000-00-00', '75', '75', '0', 'Unit', '18.00', '18.00'),
(91, '0', 'AVEENO DAILY MOISTURIZING 2 IN 1', '0000-00-00', '130', '130', '0', 'Pack', '5.00', '4.00'),
(92, '0', 'PAM ORIGINAL CANOLA OIL BLEND 2 IN 1', '0000-00-00', '50', '50', '0', 'Pack', '5.00', '4.00'),
(93, '0', 'UTENSIL CADDY', '0000-00-00', '100', '100', '0', 'Unit', '1.00', '0.00'),
(94, '0', 'APPLE & EVE', '2022-12-12', '85', '85', '0', 'Pack', '120.00', '115.00'),
(95, '0', 'KITCHEN TOWELS 6 IN 1', '0000-00-00', '95', '95', '0', 'Pack', '28.00', '28.00');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `transaction_id` int(11) NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `suplier` varchar(100) DEFAULT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`transaction_id`, `invoice_number`, `date`, `suplier`, `remarks`) VALUES
(1, '55666', '2021-09-03', NULL, 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `purchases_item`
--

CREATE TABLE `purchases_item` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `transaction_id` int(11) NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `type` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`transaction_id`, `invoice_number`, `cashier`, `date`, `type`, `amount`, `profit`, `due_date`, `name`, `balance`) VALUES
(1, 'RS-3032320', 'PRINCE ADDO-DANKWAH', '2022-02-05 15:27:52', 'cash', '550', '0', '550', 'Maame Afia', '0'),
(2, '', 'PRINCE ADDO-DANKWAH', '2022-02-05 15:29:26', 'cash', '400', '0', '400', 'Maame Afia', '0'),
(3, 'RS-2043623', 'PRINCE ADDO-DANKWAH', '2022-02-06 17:00:46', 'cash', '736', '0', '736', 'Maame Afia', '0'),
(4, 'RS-323033', 'PRINCE ADDO-DANKWAH', '2022-02-06 19:51:55', 'cash', '702', '0', '702', 'Maame Afia', '0'),
(5, 'RS-43200332', 'PRINCE ADDO-DANKWAH', '2022-02-06 19:54:23', 'cash', '600', '0', '600', 'Maame Afia', '0'),
(6, 'RS-020332', 'PRINCE ADDO-DANKWAH', '2022-02-08 18:20:31', 'cash', '1903', '0', '1903', 'Maa Afia (Cecilia Basis)', '0'),
(7, 'RS-08275003', 'PRINCE ADDO-DANKWAH', '2022-02-08 18:27:08', 'cash', '50', '0', '50', 'Maa Afia (Cecilia Basis)', '0'),
(8, '', 'PRINCE ADDO-DANKWAH', '2022-02-08 18:37:19', 'cash', '1220', '0', '1220', 'CHARLOTTE OFORIWAA-DANSOMAN', '0'),
(9, 'RS-330202', 'PRINCE ADDO-DANKWAH', '2022-02-08 18:45:23', 'cash', '2382', '0', '2382', 'Maame afia', '0'),
(10, 'RS-32305', 'PRINCE ADDO-DANKWAH', '2022-02-08 18:48:01', 'cash', '304', '0', '304', 'Maame afia', '0'),
(11, 'RS-027202', 'PRINCE ADDO-DANKWAH', '2022-02-08 18:53:06', 'cash', '2510', '0', '2510', 'Maame afia', '0'),
(12, 'RS-2222362', 'PRINCE ADDO-DANKWAH', '2022-02-09 11:28:08', 'cash', '595', '0', '595', 'JOYCE-DANSOMAN', '0'),
(13, 'RS-02033522', 'PRINCE ADDO-DANKWAH', '2022-02-09 13:30:05', 'cash', '3875', '0', '3875', 'Maame YAA (BENJAMIN)', '0'),
(14, 'RS-233232', 'PRINCE ADDO-DANKWAH', '2022-02-10 12:37:47', 'cash', '245', '0', '245', 'WENDY SHEY', '0'),
(15, 'RS-7220083', 'PRINCE ADDO-DANKWAH', '2022-02-10 13:28:14', 'cash', '430', '0', '430', 'Maa Afia (Cecilia Basis)', '0'),
(16, 'RS-22022020', 'PRINCE ADDO-DANKWAH', '2022-02-10 16:25:16', 'cash', '4535', '0', '4535', 'ALL MY NEEDS', '0'),
(17, 'RS-472433', 'PRINCE ADDO-DANKWAH', '2022-02-10 16:26:12', 'cash', '140', '0', '140', 'ALL MY NEEDS', '0'),
(18, 'RS-22332287', 'Admin', '2022-04-19 21:20:37', 'cash', '150', '0', '150', 'David', '0'),
(19, 'RS-23603230', 'Cashier', '2022-04-19 21:27:31', 'cash', '55', '0', '55', 'David', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `transaction_id` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `barcode` varchar(150) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`transaction_id`, `invoice`, `product`, `qty`, `amount`, `profit`, `barcode`, `product_name`, `price`, `date`) VALUES
(5, 'RS-2043623', '28', '5', '250', '0', '0', 'PRINGLES 12 IN 1', '50', '2022-02-06 16:59:06'),
(6, 'RS-323033', '5', '3', '165', '0', '0', 'ANIMAL CRAKERS - RED', '55', '2022-02-06 19:42:33'),
(7, 'RS-323033', '6', '1', '57', '0', '0', 'ANIMAL CRAKERS - BLUE', '57', '2022-02-06 19:43:02'),
(8, 'RS-323033', '45', '1', '200', '0', '0', 'CHARCOAL GRILL', '200', '2022-02-06 19:43:48'),
(9, 'RS-323033', '61', '1', '280', '0', '0', 'SNAPWARE STORAGE BOWL 38 PIECES', '280', '2022-02-06 19:51:21'),
(10, 'RS-43200332', '74', '4', '600', '0', '0', 'COLEMAN STAINLESS STEEL CUP', '150', '2022-02-06 19:53:55'),
(12, 'RS-020332', '8', '1', '100', '0', '0', 'ARIZONA GREEN TEA', '100', '2022-02-08 18:07:22'),
(13, 'RS-020332', '91', '1', '130', '0', '0', 'AVEENO DAILY MOISTURIZING 2 IN 1', '130', '2022-02-08 18:07:41'),
(14, 'RS-020332', '11', '1', '100', '0', '0', 'HOLIDAY GREETING HANDSOAP 4 IN 1', '100', '2022-02-08 18:08:16'),
(15, 'RS-020332', '12', '2', '160', '0', '0', 'OREO 30 IN 1', '80', '2022-02-08 18:08:29'),
(16, 'RS-020332', '82', '1', '100', '0', '0', 'LYSOL TOILET BOWL CLEANER 4 IN 1', '100', '2022-02-08 18:08:40'),
(17, 'RS-020332', '41', '1', '160', '0', '0', 'LYSOL DISINFECTANT WIPES 10 IN 1', '160', '2022-02-08 18:09:38'),
(18, 'RS-020332', '74', '2', '300', '0', '0', 'COLEMAN STAINLESS STEEL CUP', '150', '2022-02-08 18:10:06'),
(19, 'RS-020332', '71', '1', '130', '0', '0', 'STONEWARE BOWL 6 IN 1', '130', '2022-02-08 18:11:07'),
(20, 'RS-020332', '50', '1', '650', '0', '0', 'BERKLEY & JENSEN COOKWARE', '650', '2022-02-08 18:11:21'),
(26, 'RS-020332', '19', '0.2', '73', '0', '0', 'VENEGARETTE 12 IN 1', '365', '2022-02-08 18:15:36'),
(27, 'RS-08275003', '92', '1', '50', '0', '0', 'PAM ORIGINAL CANOLA OIL BLEND 2 IN 1', '50', '2022-02-08 18:25:49'),
(32, '', '30', '0.2', '140', '0', '0', 'KIRKLAND CINNAMON POWDER 20 IN 1', '700', '2022-02-08 18:34:19'),
(33, '', '38', '5', '600', '0', '0', 'ZIPLOC GALLON 152 BAG', '120', '2022-02-08 18:34:38'),
(34, '', '39', '1', '120', '0', '0', 'ZIPLOC QUART 216 BAG', '120', '2022-02-08 18:35:14'),
(35, '', '38', '3', '360', '0', '0', 'ZIPLOC GALLON 152 BAG', '120', '2022-02-08 18:35:42'),
(36, 'RS-330202', '64', '7', '700', '0', '0', 'ICE BUCKET', '100', '2022-02-08 18:38:22'),
(37, 'RS-330202', '65', '2', '240', '0', '0', 'ICE BUCKET BIG', '120', '2022-02-08 18:38:35'),
(38, 'RS-330202', '80', '10', '120', '0', '0', 'SNACK TIME BISCUITS 3 IN 1', '12', '2022-02-08 18:39:07'),
(39, 'RS-330202', '78', '015', '180', '0', '0', 'TEDDY BEAR COOKIES CHOCOLATE CHIPS', '12', '2022-02-08 18:41:49'),
(40, 'RS-330202', '77', '33', '330', '0', '0', 'BEAR GRAHAM\'S COOKIES', '10', '2022-02-08 18:42:41'),
(41, 'RS-330202', '45', '2', '400', '0', '0', 'CHARCOAL GRILL', '200', '2022-02-08 18:43:02'),
(42, 'RS-330202', '79', '1', '12', '0', '0', 'MINEES BISCUITS', '12', '2022-02-08 18:43:33'),
(44, 'RS-330202', '11', '4', '400', '0', '0', 'HOLIDAY GREETING HANDSOAP 4 IN 1', '100', '2022-02-08 18:44:56'),
(45, 'RS-32305', '93', '1', '100', '0', '0', 'UTENSIL CADDY', '100', '2022-02-08 18:47:19'),
(46, 'RS-32305', '76', '12', '204', '0', '0', 'ORIGINAL MARIA COOKIES', '17', '2022-02-08 18:47:37'),
(47, 'RS-027202', '45', '3', '600', '0', '0', 'CHARCOAL GRILL', '200', '2022-02-08 18:50:53'),
(48, 'RS-027202', '71', '3', '390', '0', '0', 'STONEWARE BOWL 6 IN 1', '130', '2022-02-08 18:51:12'),
(49, 'RS-027202', '74', '6', '900', '0', '0', 'COLEMAN STAINLESS STEEL CUP', '150', '2022-02-08 18:51:27'),
(50, 'RS-027202', '11', '4', '400', '0', '0', 'HOLIDAY GREETING HANDSOAP 4 IN 1', '100', '2022-02-08 18:51:59'),
(51, 'RS-027202', '64', '1', '100', '0', '0', 'ICE BUCKET', '100', '2022-02-08 18:52:10'),
(52, 'RS-027202', '73', '1', '120', '0', '0', 'CREST 3DWHITE ADVANCE PASTE 5 IN 1', '120', '2022-02-08 18:52:37'),
(53, 'RS-2222362', '33', '7', '595', '0', '0', 'ALMOND MILK 6 IN 1', '85', '2022-02-09 11:27:50'),
(54, 'RS-22020203', '15', '5', '550', '0', '0', 'MIRA', '110', '2022-02-09 13:25:40'),
(55, 'RS-02033522', '15', '5', '550', '0', '0', 'MIRA', '110', '2022-02-09 13:28:01'),
(56, 'RS-02033522', '12', '5', '400', '0', '0', 'OREO 30 IN 1', '80', '2022-02-09 13:28:34'),
(57, 'RS-02033522', '94', '5', '425', '0', '0', 'APPLE & EVE', '85', '2022-02-09 13:28:51'),
(58, 'RS-02033522', '3', '5', '850', '0', '0', 'LAYS STAX', '170', '2022-02-09 13:29:15'),
(59, 'RS-02033522', '4', '15', '1650', '0', '0', 'FAMOUS AMOS', '110', '2022-02-09 13:29:34'),
(60, 'RS-233232', '11', '01', '100', '0', '0', 'HOLIDAY GREETING HANDSOAP 4 IN 1', '100', '2022-02-10 12:36:22'),
(61, 'RS-233232', '83', '1', '130', '0', '0', 'AVEENO BODY WASH 2 IN 1', '130', '2022-02-10 12:36:56'),
(62, 'RS-233232', '87', '1', '15', '0', '0', 'AWESOME BLEACH 284 L', '15', '2022-02-10 12:37:10'),
(63, 'RS-7220083', '61', '1', '280', '0', '0', 'SNAPWARE STORAGE BOWL 38 PIECES', '280', '2022-02-10 13:27:31'),
(64, 'RS-7220083', '74', '1', '150', '0', '0', 'COLEMAN STAINLESS STEEL CUP', '150', '2022-02-10 13:27:49'),
(65, 'RS-22022020', '34', '10', '850', '0', '0', 'BIGLOW PREMIUM GREEN TEA', '85', '2022-02-10 16:22:45'),
(66, 'RS-22022020', '36', '5', '675', '0', '0', 'KIRKLAND ORGANIC SOY 12 IN 1', '135', '2022-02-10 16:23:05'),
(67, 'RS-22022020', '4', '4', '440', '0', '0', 'FAMOUS AMOS', '110', '2022-02-10 16:23:29'),
(68, 'RS-22022020', '3', '3', '510', '0', '0', 'LAYS STAX', '170', '2022-02-10 16:23:47'),
(69, 'RS-22022020', '10', '2', '300', '0', '0', 'PRINGLES 36 IN 1', '150', '2022-02-10 16:24:21'),
(70, 'RS-22022020', '22', '1', '110', '0', '0', 'NESTLE CARNATION MILK 12 IN 1', '110', '2022-02-10 16:24:37'),
(71, 'RS-22022020', '18', '10', '1650', '0', '0', 'JASMINE RICE 25 POUND', '165', '2022-02-10 16:24:53'),
(72, 'RS-472433', '67', '2', '140', '0', '0', 'KIRKLAND WATER', '70', '2022-02-10 16:25:51'),
(73, 'RS-22332287', '10', '1', '150', '0', '0', 'PRINGLES 36 IN 1', '150', '2022-04-19 21:20:26'),
(74, 'RS-23603230', '5', '1', '55', '0', '0', 'ANIMAL CRAKERS - RED', '55', '2022-04-19 21:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `supliers`
--

CREATE TABLE `supliers` (
  `suplier_id` int(11) NOT NULL,
  `suplier_name` varchar(100) NOT NULL,
  `suplier_address` varchar(100) NOT NULL,
  `suplier_contact` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `position`) VALUES
(1, 'admin', 'admin', 'Admin', 'Admin'),
(2, 'PRINCE ADDO-DANKWAH', 'nanaaddo2016', 'PRINCE ADDO-DANKWAH', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`cashier_id`);

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `purchases_item`
--
ALTER TABLE `purchases_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `supliers`
--
ALTER TABLE `supliers`
  ADD PRIMARY KEY (`suplier_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `cashier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchases_item`
--
ALTER TABLE `purchases_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `supliers`
--
ALTER TABLE `supliers`
  MODIFY `suplier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
