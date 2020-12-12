-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2020 at 03:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CedHosting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(44) NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_date` datetime NOT NULL,
  `author_name` varchar(44) NOT NULL DEFAULT 'Anonymous',
  `caption_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_info`
--

CREATE TABLE `tbl_company_info` (
  `id` int(11) NOT NULL,
  `comp_name` varchar(55) NOT NULL,
  `comp_logo` varchar(1000) NOT NULL,
  `comp_contact` varchar(33) NOT NULL,
  `comp_email` varchar(33) NOT NULL,
  `comp_address` varchar(88) NOT NULL,
  `comp_city` varchar(44) NOT NULL,
  `comp_state` int(11) NOT NULL,
  `comp_pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_billing_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `promocode_applied_id` int(11) NOT NULL,
  `discount_amt` float NOT NULL,
  `total_amt_after_dis` float NOT NULL,
  `tax_amt` float NOT NULL,
  `final_invoice_amt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `prod_parent_id` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `prod_available` tinyint(1) NOT NULL,
  `prod_launch_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `prod_parent_id`, `prod_name`, `link`, `prod_available`, `prod_launch_date`) VALUES
(1, 0, 'Hosting', NULL, 1, '2020-12-09 14:34:49'),
(32, 1, 'Linux Hosting', 'linuxhosting.php', 1, '2020-12-11 14:58:10'),
(33, 1, 'Window Hosting', 'windowhosting.php', 1, '2020-12-11 14:58:32'),
(34, 1, 'WordPress Hosting', 'wordpresshosting.php', 1, '2020-12-11 14:58:56'),
(49, 32, 'apple', 'iphone', 1, '2020-12-12 15:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_description`
--

CREATE TABLE `tbl_product_description` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`description`)),
  `mon_price` float NOT NULL,
  `annual_price` float NOT NULL,
  `sku` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_description`
--

INSERT INTO `tbl_product_description` (`id`, `prod_id`, `description`, `mon_price`, `annual_price`, `sku`) VALUES
(8, 49, '{\"Web_Space\":\"120\",\"Band_Width\":\"120\",\"Free_Domain\":\"20\",\"Language_Technology\":\"php\",\"Mail_Box\":\"20\"}', 120, 1200, '40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promocode`
--

CREATE TABLE `tbl_promocode` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `value` varchar(22) NOT NULL,
  `max_discount` int(11) NOT NULL,
  `code` varchar(55) NOT NULL,
  `expiry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `activation_time` datetime NOT NULL,
  `tenure` char(1) NOT NULL,
  `expiry_time` datetime NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email_approved` tinyint(1) DEFAULT 0,
  `phone_approved` tinyint(1) DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `is_admin` tinyint(1) NOT NULL,
  `sign_up_date` datetime DEFAULT current_timestamp(),
  `password` varchar(100) NOT NULL,
  `security_question` varchar(100) DEFAULT NULL,
  `security_answer` varchar(200) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `opt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `name`, `mobile`, `email_approved`, `phone_approved`, `active`, `is_admin`, `sign_up_date`, `password`, `security_question`, `security_answer`, `token`, `opt`) VALUES
(3, 'asd123@gmail.com', 'asd', '7054734093', 0, 0, 1, 0, '2020-12-08 15:55:05', '202cb962ac59075b964b07152d234b70', 'What Was The First Book You Ever Read', 'mannu', NULL, NULL),
(6, 'asde123@gmail.com', 'asd', '7054734091', 0, 0, 1, 0, '2020-12-08 16:09:24', 'c20ad4d76fe97759aa27a0c99bff6710', 'What is Your Best Friend Name', 'ac', NULL, NULL),
(11, 'asd1234@gmail.com', 'asdes', '7054734098', 0, 0, 1, 0, '2020-12-08 16:38:31', 'c20ad4d76fe97759aa27a0c99bff6710', 'What is Your Best Friend Name', 'acs', NULL, NULL),
(13, 'dsa123@gmail.com', 'Avinash Sharma', '7054734080', 0, 0, 1, 0, '2020-12-09 12:42:24', 'f60e1a984565dcbd8ed6f57631bb9c34', 'What Was The First Book You Ever Read', 'ac', NULL, NULL),
(19, 'avimannu28@gmail.com', 'Avinash Sharma', '7054734094', 1, 0, 1, 1, '2020-12-09 13:18:57', 'f60e1a984565dcbd8ed6f57631bb9c34', 'Select Your Security Question', 'mannu', '1ea0dfd534007baab71c59794b0b6b6e', NULL),
(22, 'mannu617@gmail.com', 'Mannu Sharma', '7905569692', 0, 1, 1, 0, '2020-12-09 18:17:05', 'f60e1a984565dcbd8ed6f57631bb9c34', 'What Was The First Book You Ever Read', 'mannu', '832077e62d7d70166599f1eb895b87e5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_billing_add`
--

CREATE TABLE `tbl_user_billing_add` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `billing_name` varchar(55) NOT NULL,
  `house_no` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `state` int(11) NOT NULL,
  `country` varchar(55) NOT NULL,
  `pincode` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_company_info`
--
ALTER TABLE `tbl_company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_description`
--
ALTER TABLE `tbl_product_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_product_description_ibfk_1` (`prod_id`);

--
-- Indexes for table `tbl_promocode`
--
ALTER TABLE `tbl_promocode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `tbl_user_billing_add`
--
ALTER TABLE `tbl_user_billing_add`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_company_info`
--
ALTER TABLE `tbl_company_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_product_description`
--
ALTER TABLE `tbl_product_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_promocode`
--
ALTER TABLE `tbl_promocode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_user_billing_add`
--
ALTER TABLE `tbl_user_billing_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_product_description`
--
ALTER TABLE `tbl_product_description`
  ADD CONSTRAINT `tbl_product_description_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `tbl_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
