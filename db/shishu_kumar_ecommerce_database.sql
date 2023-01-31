-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 12:04 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shishu_kumar_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `shishu_kumar_ecommerce_costumer_deteils`
--

CREATE TABLE `shishu_kumar_ecommerce_costumer_deteils` (
  `id` int(11) NOT NULL,
  `cst_name` varchar(255) NOT NULL,
  `cst_mail` varchar(255) NOT NULL,
  `cst_phone_no` varchar(255) NOT NULL,
  `cst_city` varchar(255) NOT NULL,
  `cst_state` varchar(255) NOT NULL,
  `cst_street` varchar(255) NOT NULL,
  `cst_pincode_no` varchar(255) NOT NULL,
  `cst_payment_mode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shishu_kumar_ecommerce_costumer_deteils`
--

INSERT INTO `shishu_kumar_ecommerce_costumer_deteils` (`id`, `cst_name`, `cst_mail`, `cst_phone_no`, `cst_city`, `cst_state`, `cst_street`, `cst_pincode_no`, `cst_payment_mode`) VALUES
(5, 'shishu kumar', 'shishuk245@gmail.com', '6397302869', 'bareilly', 'up', 'durga nagar bareilly', '243006', 'phone pay');

-- --------------------------------------------------------

--
-- Table structure for table `shishu_kumar_ecommerce_login_tbl`
--

CREATE TABLE `shishu_kumar_ecommerce_login_tbl` (
  `id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shishu_kumar_ecommerce_login_tbl`
--

INSERT INTO `shishu_kumar_ecommerce_login_tbl` (`id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin'),
(3, 'shishu', 'shishu');

-- --------------------------------------------------------

--
-- Table structure for table `shishu_kumar_ecommerce_user_tbl`
--

CREATE TABLE `shishu_kumar_ecommerce_user_tbl` (
  `id` int(11) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `p_dprice` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_catagory` varchar(255) NOT NULL,
  `p_size` varchar(255) NOT NULL,
  `p_quality` varchar(255) NOT NULL,
  `p_warranty` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shishu_kumar_ecommerce_user_tbl`
--

INSERT INTO `shishu_kumar_ecommerce_user_tbl` (`id`, `p_img`, `p_price`, `p_dprice`, `p_name`, `p_catagory`, `p_size`, `p_quality`, `p_warranty`, `p_id`) VALUES
(28, 'images/IMG-20200812-WA0015.jpg', '899', '1199', 'pant', 'Man', '32,34,36,38,', 'jeans strach', 'no', 'j-87723'),
(29, 'images/IMG-20200811-WA0016.jpg', '599', '899', 'T-shirt', 'Man', 'x,xl,m,l,xl,', 'cotton T-shirt', '', 't-1234'),
(30, 'images/IMG-20200812-WA0009.jpg', '455', '766', 'pant', 'Man', 'x,m,l,xl', 'long t-shirt', '', 't-213445'),
(31, 'images/IMG-20200812-WA0028.jpg', '899', '999', 'shirt', 'Man', 'long', 'simple', '4', 'r-4567'),
(32, 'images/sharee.jpeg', '1399', '1999', 'sharee', 'women', 'long', 'cotton', '', 's58764'),
(33, 'images/sharee2.jpg', '1200', '1500', 'sharee', 'women', 'long', 'cotton', '', 's6548'),
(34, 'images/s3.jpg', '2999', '4500', 'sharee', 'women', 'long', 'banarshi', '', 's45893'),
(35, 'images/top1.jpg', '599', '700', 'top', 'women', 'ful', 'cotton', '', 't12549'),
(36, 'images/top3.jpg', '400', '600', 'top', 'women', 'ful', 'cotton', '', 't4598'),
(37, 'images/baby1.jpg', '1200', '1599', 'frock', 'baby', 'smal', 'neight', '', 'f4589'),
(38, 'images/baby2.jpg', '400', '600', 'skirt top', 'baby', 'small 26 28 30', 'cotton', '', 's45892'),
(39, 'images/baby3.jpeg', '1200', '2000', 'jeans top', 'baby', 'small 26 27 28', 'cotton', '', 'j45893'),
(40, 'images/baby4.jpg', '2000', '2999', 'jeans pant shirt', 'baby', 'small', 'jeans', '', 'j4892'),
(41, 'images/baby5.jpg', '1599', '2000', 'jeans tshirt', 'baby', 'small 26 27 28', 'cotton', '', 'j59362'),
(43, 'images/m3.jpg', '10000', '18000', 'samsung', 'mobiles', 'large', '4,64', '1', 's-456546'),
(44, 'images/m1.jpg', '23000', '29000', 'realme', 'mobiles', '8,128 ram rom', 'all quality', '1', 's56743'),
(47, 'images/w1.jpg', '4500', '5444', 'brand watch', 'watchs', 'no-size', 'waterproof', '', 'w-23567'),
(48, 'images/w2.jpg', '1900', '2700', 'silver watchs', 'watchs', 'no-size', 'all quality', '1', 'd-845'),
(49, 'images/w3.jpg', '4999', '6845', 'watchs', 'watchs', 'no-size', 'all quality', '1', '83445'),
(50, 'images/w5.jpg', '1100', '1299', 'couple watch', 'watchs', 'no-size', 'all quality', '1', 's-4567'),
(51, 'images/k1.jpg', '800', '999', 'kitchen set', 'kitchen', 'all type', 'silver and alminium', 'no warranty', 'k-2345456'),
(52, 'images/3.jpg', '80', '110', 'knife', 'kitchen', 'all size available', 'sharp', '', 'k-34546'),
(53, 'images/4.jpg', '1999', '2000', 'fri-pen', 'kitchen', 'all size available', 'aliminium', '', 's-34564'),
(54, 'images/5.jpg', '1599', '1766', 'kitchen product', 'kitchen', 'large', 'all quality', '', 'k-34567'),
(55, 'images/IMG-20200812-WA0009.jpg', '599', '799', 'pant stylish', 'Man', '32,40,42,l', 'trousor', '', 't-456'),
(56, 'images/s3.jpg', '8999', '11999', 'sharee', 'women', 'long', 'cotton, net', '', 's-34567'),
(61, 'images/baby4.jpg', '800', '1000', 'stylish jeans', 'Man', 'medium', 'high pro jeans', '', 'p-209'),
(62, 'images/business_framework_big_data_cloud_storage_powerpoint_presentation_1.jpg', '499', '545', 'poster', 'other', '44\"*88\"', 'water color painting', '', 'p-3456'),
(63, 'images/business_framework_big_data_cloud_storage_powerpoint_presentation_1.jpg', '499', '545', 'poster', 'other', '44\"*88\"', 'water color painting', '', 'p-3456'),
(64, 'images/business_framework_big_data_cloud_storage_powerpoint_presentation_1.jpg', '499', '545', 'poster', 'other', '44\"*88\"', 'water color painting', '', 'p-3456'),
(79, 'images/2.jpg', '50', '70', 'knife', 'kitchen', '6 cm', 'stainless steel ', 'no warranty', 'k-12345'),
(80, 'images/f4.jpg', '5288', '7584', 'table', 'Select catagory', '6 fit', 'shining', '', 't-346456'),
(81, 'images/man1.jpg', '4999', '7999', 'coat', 'Man', 'fittin(all size)', 'a1', '1 year', 'c-12345'),
(82, 'images/shirtman1.jpg', '599', '680', 'shirt', 'Man', '32,34,36,38,40', 'cotton', '', 's-12346'),
(83, 'images/women7.jpg', '499', '560', 'nice top', 'women', 'all size available', 'silky', '', 'w-12347'),
(84, 'images/women8.jpg', '899', '1150', 'sweet top', 'women', 'all size availble', 'newly', '', 'w-34856'),
(85, 'images/baby7.jpg', '466', '855', 'frock', 'baby', 'all size available', 'soft', '', 'b-12398'),
(86, 'images/baby8.jpg', '533', '764', 'boy fashion', 'baby', 'all size available', 'soft', '', 'b-23456'),
(87, 'images/baby9.jpg', '999', '1299', 'baby jacket', 'baby', 'all small size', 'worm', '', 'b-38574'),
(88, 'images/m6.png', '72999', '89300', 'i phone', 'mobiles', '4\"', 'better', '', 'm-34987'),
(89, 'images/m9.jpeg', '8999', '13999', 'vivo', 'mobiles', '5\"', 'best', '', 'm-38564'),
(90, 'images/laptop1.jpg', '34999', '42899', 'acer laptop', 'laptops', '15.6\"', 'i3,8gb,1tb', '', 'l-24973'),
(91, 'images/laptop2.png', '56000', '68000', 'hp laptop', 'laptops', '15.6\"', 'i5', '', 'l-34568'),
(92, 'images/laptop3.jpg', '65899', '90574', 'samsung laoptop', 'laptops', '15.6\"', 'i7', '', 'l-34567'),
(93, 'images/laptop5.webp', '54999', '85999', 'dell laptop', 'laptops', '15.6\"', 'i3', '', 'l-2354'),
(94, 'images/f10.webp', '18995', '22888', 'chair', 'furniture', 'big', 'soft foam', '', 'f-122387'),
(95, 'images/f11.jpeg', '8999', '11999', '4 chair set', 'furniture', '10\"10', 'best furniture', '', 'f-28463'),
(96, 'images/f12.png', '4000', '6000', 'chair', 'furniture', 'small', 'batter', '', 'f-37556'),
(97, 'images/f14.jpg', '599', '999', 'door welcome', 'furniture', 'medium', 'attractive', '', 'f-23954');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shishu_kumar_ecommerce_costumer_deteils`
--
ALTER TABLE `shishu_kumar_ecommerce_costumer_deteils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shishu_kumar_ecommerce_login_tbl`
--
ALTER TABLE `shishu_kumar_ecommerce_login_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shishu_kumar_ecommerce_user_tbl`
--
ALTER TABLE `shishu_kumar_ecommerce_user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shishu_kumar_ecommerce_costumer_deteils`
--
ALTER TABLE `shishu_kumar_ecommerce_costumer_deteils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shishu_kumar_ecommerce_login_tbl`
--
ALTER TABLE `shishu_kumar_ecommerce_login_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shishu_kumar_ecommerce_user_tbl`
--
ALTER TABLE `shishu_kumar_ecommerce_user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
