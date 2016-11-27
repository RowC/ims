-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2016 at 11:53 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_requestmap`
--

CREATE TABLE `auth_requestmap` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `config_attribute` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_requestmap`
--

INSERT INTO `auth_requestmap` (`id`, `url`, `config_attribute`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(21, '../setting/adminDashboard.php', 1, NULL, '2016-11-16 07:01:51', NULL, NULL),
(22, '../setting/userProfile.php', 2, NULL, '2016-11-16 07:02:12', NULL, NULL),
(23, '../setting/productCatMst.php', 1, NULL, '2016-11-22 07:06:33', NULL, NULL),
(24, '../setting/productCatMstList.php', 1, NULL, '2016-11-22 07:06:56', NULL, NULL),
(25, '../auth/authRole.php', 1, NULL, '2016-11-22 10:06:27', NULL, NULL),
(26, '../auth/authUser.php', 1, NULL, '2016-11-22 10:06:47', NULL, NULL),
(27, '../auth/authRequestMap.php', 2, NULL, '2016-11-22 10:07:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_role`
--

CREATE TABLE `auth_role` (
  `id` int(11) NOT NULL,
  `authority` varchar(30) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `modifie_by` int(11) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_role`
--

INSERT INTO `auth_role` (`id`, `authority`, `description`, `create_by`, `create_date`, `modifie_by`, `modified_date`) VALUES
(1, 'ROLE_ADMIN', 'Only admin user can access this role', NULL, '2016-11-08 08:35:52', NULL, NULL),
(2, 'ROLE_USER', 'role form common user', NULL, '2016-11-08 08:39:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_user`
--

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cellNo` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `account_expired` tinyint(1) NOT NULL DEFAULT '0',
  `account_locked` tinyint(1) NOT NULL DEFAULT '0',
  `password_expired` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL,
  `user_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_user`
--

INSERT INTO `auth_user` (`id`, `full_name`, `user_name`, `password`, `cellNo`, `email`, `enabled`, `account_expired`, `account_locked`, `password_expired`, `created_by`, `created_date`, `modified_by`, `modified_date`, `user_code`) VALUES
(15, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '123', 'suraya.rowshon@gmail.com', 1, 0, 0, 0, NULL, '2016-11-16 07:14:18', NULL, NULL, 'C-1611160818'),
(16, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '1234', 'suraya.rowshon@gmail.com', 1, 0, 0, 0, NULL, '2016-11-16 07:14:37', NULL, NULL, 'C-1611160837');

-- --------------------------------------------------------

--
-- Table structure for table `product_cat_dtl`
--

CREATE TABLE `product_cat_dtl` (
  `id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_description` varchar(1000) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `stock_type` varchar(5) DEFAULT NULL,
  `product_logo_nm` varchar(100) DEFAULT NULL,
  `logo_size` int(11) DEFAULT NULL,
  `product_logo_path` varchar(100) DEFAULT NULL,
  `product_cat_mst` varchar(50) NOT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_cat_dtl`
--

INSERT INTO `product_cat_dtl` (`id`, `item_id`, `product_name`, `product_description`, `is_active`, `stock_type`, `product_logo_nm`, `logo_size`, `product_logo_path`, `product_cat_mst`, `create_date`, `create_by`, `update_date`, `update_by`) VALUES
(303, 0, 'a11', 'aa11', 1, 'in', '6.jpg', 7665, '/dist/imgs/product_img/', 'A-1609071147', '2016-09-07 09:41:47', NULL, '2016-09-22 09:42:28', NULL),
(304, 0, 'a21', 'aa22', 1, 'in', '7.jpg', 9105, '/dist/imgs/product_img/', 'A-1609071147', '2016-09-07 09:41:47', NULL, '2016-09-22 09:42:28', NULL),
(305, 0, 'a31', 'aa33', 1, 'in', '8.jpg', 9945, '/dist/imgs/product_img/', 'A-1609071147', '2016-09-07 09:41:47', NULL, '2016-09-22 09:42:28', NULL),
(306, 0, 'a41', 'aa44', 1, 'in', '9.jpg', 11946, '/dist/imgs/product_img/', 'A-1609071147', '2016-09-07 09:41:47', NULL, '2016-09-22 09:42:28', NULL),
(307, 0, 'a51', 'aa55', 1, 'in', '10.jpg', 11024, '/dist/imgs/product_img/', 'A-1609071147', '2016-09-07 09:41:47', NULL, '2016-09-22 09:42:28', NULL),
(308, 0, 'b1', 'bb1', 1, 'in', '1.jpg', 9666, '/dist/imgs/product_img/', 'B-1609181127', '2016-09-18 09:57:27', NULL, '2016-09-22 09:43:24', NULL),
(309, 0, 'b2', 'bb2', 0, 'out', '2.jpg', 3834, '/dist/imgs/product_img/', 'B-1609181127', '2016-09-18 09:57:27', NULL, '2016-09-22 09:43:24', NULL),
(310, 0, 'b3', 'bb3', 1, 'in', '3.jpg', 7736, '/dist/imgs/product_img/', 'B-1609181127', '2016-09-18 09:57:27', NULL, '2016-09-22 09:43:25', NULL),
(311, 0, 'b4', 'bb4', 0, 'out', '4.jpg', 5986, '/dist/imgs/product_img/', 'B-1609181127', '2016-09-18 09:57:27', NULL, '2016-09-22 09:43:25', NULL),
(312, 0, 'b5', 'bb5', 1, 'in', '', 0, '', 'B-1609181127', '2016-09-18 09:57:27', NULL, '2016-09-22 09:43:25', NULL),
(313, 0, 'b6', 'bb66', 0, 'out', '', 0, '', 'B-1609181127', '2016-09-18 09:57:27', NULL, '2016-09-22 09:43:25', NULL),
(314, 1, 'c1', 'cc1', 1, 'in', '', 0, '', 'c-1609181208', '2016-09-18 10:05:08', NULL, NULL, NULL),
(315, 2, 'c2', 'cc2', 0, 'in', '', 0, '', 'c-1609181208', '2016-09-18 10:05:08', NULL, NULL, NULL),
(316, 3, 'c3', 'cc3', 1, 'in', '', 0, '', 'c-1609181208', '2016-09-18 10:05:08', NULL, NULL, NULL),
(317, 1, 'c4', 'cc4', 0, 'in', '', 0, '', 'c-1609181208', '2016-09-18 10:05:08', NULL, NULL, NULL),
(318, 0, '', '', 1, 'in', '6.jpg', 7665, '/', 'A-1609071147', '2016-09-22 09:32:51', NULL, NULL, NULL),
(319, 0, '', '', 1, 'in', '7.jpg', 9105, 'd', 'A-1609071147', '2016-09-22 09:32:51', NULL, NULL, NULL),
(320, 0, '', '', 1, 'in', '8.jpg', 9945, 'i', 'A-1609071147', '2016-09-22 09:32:51', NULL, NULL, NULL),
(321, 0, '', '', 1, 'in', '9.jpg', 11946, 's', 'A-1609071147', '2016-09-22 09:32:51', NULL, NULL, NULL),
(322, 0, '', '', 1, '', '10.jpg', 11024, 't', 'A-1609071147', '2016-09-22 09:32:51', NULL, NULL, NULL),
(323, 0, '', '', 1, 'in', '6.jpg', 7665, '/', 'A-1609071147', '2016-09-22 09:33:22', NULL, NULL, NULL),
(324, 0, '', '', 1, 'in', '7.jpg', 9105, 'd', 'A-1609071147', '2016-09-22 09:33:22', NULL, NULL, NULL),
(325, 0, '', '', 1, 'in', '8.jpg', 9945, 'i', 'A-1609071147', '2016-09-22 09:33:22', NULL, NULL, NULL),
(326, 0, '', '', 1, 'in', '9.jpg', 11946, 's', 'A-1609071147', '2016-09-22 09:33:22', NULL, NULL, NULL),
(327, 0, '', '', 1, 'in', '10.jpg', 11024, 't', 'A-1609071147', '2016-09-22 09:33:22', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_cat_mst`
--

CREATE TABLE `product_cat_mst` (
  `id` int(11) NOT NULL,
  `product_cat_mst_id` varchar(50) NOT NULL,
  `category_title` varchar(100) NOT NULL,
  `category_keyword` varchar(10) NOT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_cat_mst`
--

INSERT INTO `product_cat_mst` (`id`, `product_cat_mst_id`, `category_title`, `category_keyword`, `create_date`, `create_by`, `update_date`, `update_by`) VALUES
(85, 'A-1609071147', 'a11', 'A11', '2016-09-07 09:41:47', NULL, '2016-09-22 09:42:28', NULL),
(88, 'B-1609181127', 'b', 'B', '2016-09-18 09:57:27', NULL, '2016-09-22 09:43:24', NULL),
(89, 'c-1609181208', 'c', 'C11', '2016-09-18 10:05:08', NULL, '2016-09-19 10:20:21', NULL),
(90, 'C1-1609190526', 'c1', 'C1', '2016-09-19 03:46:26', NULL, '2016-09-19 06:59:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `auth_user` int(11) NOT NULL,
  `auth_role` int(11) NOT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`auth_user`, `auth_role`, `create_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(15, 1, '2016-11-16 07:14:18', NULL, NULL, NULL),
(16, 2, '2016-11-16 07:14:37', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_requestmap`
--
ALTER TABLE `auth_requestmap`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`,`config_attribute`),
  ADD UNIQUE KEY `url_2` (`url`,`config_attribute`),
  ADD UNIQUE KEY `url_3` (`url`,`config_attribute`);

--
-- Indexes for table `auth_role`
--
ALTER TABLE `auth_role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_role` (`authority`);

--
-- Indexes for table `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `product_cat_dtl`
--
ALTER TABLE `product_cat_dtl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_cat_mst`
--
ALTER TABLE `product_cat_mst`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_title` (`category_title`),
  ADD UNIQUE KEY `p_cat_mst` (`product_cat_mst_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_requestmap`
--
ALTER TABLE `auth_requestmap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `auth_role`
--
ALTER TABLE `auth_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `product_cat_dtl`
--
ALTER TABLE `product_cat_dtl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;
--
-- AUTO_INCREMENT for table `product_cat_mst`
--
ALTER TABLE `product_cat_mst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
