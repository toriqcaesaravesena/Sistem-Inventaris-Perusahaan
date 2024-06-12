-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 06:17 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `category_id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `cat_description` varchar(255) DEFAULT NULL,
  `cat_encodedby` varchar(255) DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`category_id`, `cat_name`, `cat_description`, `cat_encodedby`, `date_created`) VALUES
(1, 'category 1', 'cat desc 1', 'junil toledo', '2022-10-26'),
(2, 'category 2', 'cat 2', 'junil toledo', '2022-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`company_id`, `company_name`, `date_created`) VALUES
(1, 'Maria Corp.', '2022-10-26'),
(2, 'Rayven Company', '2022-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `invoice_id` int(11) NOT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `encoded_By` varchar(255) DEFAULT NULL,
  `total_amount` varchar(255) DEFAULT NULL,
  `discount_price` varchar(255) DEFAULT NULL,
  `tendered` varchar(255) DEFAULT NULL,
  `change` varchar(255) DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`invoice_id`, `order_id`, `encoded_By`, `total_amount`, `discount_price`, `tendered`, `change`, `date_created`) VALUES
(1, '0004545', 'junil toledo', '4000', '2%', '0', '500', '2022-10-27'),
(2, '008776', 'nario luis', '1500', '5%', '0', '699', '2022-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itemrawmaterial`
--

CREATE TABLE `tbl_itemrawmaterial` (
  `itermrawmaterial_id` int(11) NOT NULL,
  `productset_id` int(11) DEFAULT NULL,
  `material_name` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `encoded_by` varchar(255) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_itemrawmaterial`
--

INSERT INTO `tbl_itemrawmaterial` (`itermrawmaterial_id`, `productset_id`, `material_name`, `amount`, `encoded_by`, `date_created`) VALUES
(1, 1, '4000', '3000', 'junil toledo', '2022-10-27'),
(2, 2, 'gold mantika', '500', 'junil toledo', '2022-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `item_code` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `varient` varchar(255) DEFAULT NULL,
  `unit_value` varchar(255) DEFAULT NULL,
  `units_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `net_price` varchar(255) DEFAULT NULL,
  `production_cost` varchar(255) DEFAULT NULL,
  `markup_percent` varchar(255) DEFAULT NULL,
  `markup_price` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `discount_price` varchar(255) DEFAULT NULL,
  `sales_price` varchar(255) DEFAULT NULL,
  `reorder_level` varchar(255) DEFAULT NULL,
  `stock_quantity` varchar(255) DEFAULT NULL,
  `expired_date` varchar(255) DEFAULT NULL,
  `encoded_by` varchar(255) DEFAULT NULL,
  `date_created` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `item_code`, `full_name`, `varient`, `unit_value`, `units_id`, `category_id`, `net_price`, `production_cost`, `markup_percent`, `markup_price`, `discount`, `discount_price`, `sales_price`, `reorder_level`, `stock_quantity`, `expired_date`, `encoded_by`, `date_created`) VALUES
(2, '000421', 'john doe', 'var', 'unit', 2, 1, '399', '27', '2%', '600', '15', '30', '700', '4', '70', '2022-10-27', 'nel toledo', '2022-10-27'),
(3, '000645', 'nario luis', 'var 2', 'uv 2', 2, 2, '8000', '290', '1%', '700', '3', '35', '50', '45', '6', '2022-10-31', 'nel toledo', '2022-10-28'),
(4, '000456', 'john doe', 'vr 3', 'uv 3', 1, 1, '499', '80', '5%', '80', '4', '47', '100', '45', '8', '2022-10-26', 'nel toledo', '2022-10-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productset`
--

CREATE TABLE `tbl_productset` (
  `productset_id` int(11) NOT NULL,
  `set_code` varchar(255) DEFAULT NULL,
  `set_name` varchar(255) DEFAULT NULL,
  `total_amount` varchar(255) DEFAULT NULL,
  `set_onhand` varchar(255) DEFAULT NULL,
  `encoded_by` varchar(255) DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_productset`
--

INSERT INTO `tbl_productset` (`productset_id`, `set_code`, `set_name`, `total_amount`, `set_onhand`, `encoded_by`, `date_created`) VALUES
(1, '000541', 'mang tomas', '400', 'set on hand', 'junil toledo', '2022-10-27'),
(2, '000322', 'mantika', '600', '1 big bottle', 'junil toledo', '2022-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales`
--

CREATE TABLE `tbl_sales` (
  `sales_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sale_quantity` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `recorded_by` varchar(255) DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sales`
--

INSERT INTO `tbl_sales` (`sales_id`, `category_id`, `sale_quantity`, `total`, `recorded_by`, `date_created`) VALUES
(1, 1, '70', '8000', 'junil toledo', '2022-01-28'),
(2, 2, '70', '10000', 'junil toledo', '2022-09-27'),
(3, 1, '3', '6000', 'nel toledo', '2022-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_units`
--

CREATE TABLE `tbl_units` (
  `units_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `encoded_by` varchar(255) DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_units`
--

INSERT INTO `tbl_units` (`units_id`, `name`, `description`, `encoded_by`, `date_created`) VALUES
(1, 'unit 1', 'desc', 'nel toledo', '2022-10-26'),
(2, 'unit 2', 'desc2', 'nel toledo', '2022-10-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `tbl_itemrawmaterial`
--
ALTER TABLE `tbl_itemrawmaterial`
  ADD PRIMARY KEY (`itermrawmaterial_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_productset`
--
ALTER TABLE `tbl_productset`
  ADD PRIMARY KEY (`productset_id`);

--
-- Indexes for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `tbl_units`
--
ALTER TABLE `tbl_units`
  ADD PRIMARY KEY (`units_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_itemrawmaterial`
--
ALTER TABLE `tbl_itemrawmaterial`
  MODIFY `itermrawmaterial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_productset`
--
ALTER TABLE `tbl_productset`
  MODIFY `productset_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_units`
--
ALTER TABLE `tbl_units`
  MODIFY `units_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
