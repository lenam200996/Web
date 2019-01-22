-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2019 at 03:32 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtmdt`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(20) NOT NULL,
  `CategoryName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `CategoryName`, `Description`) VALUES
(1, 'Giày Adidas cao cấp', 'Vải êm chân'),
(2, 'Giày Nike cao cấp', 'form nhỏ gọn'),
(3, 'Giày Balenciage', 'độn đế'),
(4, 'Giày New Balance', 'đế bè'),
(5, 'Giày Converse', 'Cổ thấp'),
(6, 'Giày Puma', 'Chất da'),
(7, 'Giày Vans', 'Vải thô');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(255) NOT NULL,
  `FirstName` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `FirstName`, `LastName`, `UserName`, `Password`, `Address`, `Phone`, `Email`) VALUES
(1, 'Nguyễn', 'Loan', 'Nguyenloan', '1234', 'Hà Tĩnh', '0981240562', 'loan123@gmail.com'),
(2, 'Phan', 'Lan', 'Lanphan', '2345', 'Hà Tĩnh', '0912345678', 'lan234@gmail.com'),
(3, 'Dinh', 'Thuy', 'Thuydinh', '3456', 'abc', '0923456789', 'thuy345@gmail.com'),
(8, 'q', 'q', 'ad', '1', 'Hà Tĩnh', 'q', 'q'),
(9, 'ab', 'bb', 'admin', '1', 'Hà Tĩnh', 'das', 'das');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `OrderID` int(255) NOT NULL,
  `DetailID` int(255) NOT NULL,
  `ProductID` int(255) NOT NULL,
  `Quantiny` int(255) NOT NULL,
  `Note` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `paid` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`OrderID`, `DetailID`, `ProductID`, `Quantiny`, `Note`, `paid`) VALUES
(39, 40, 5, 1, NULL, 1),
(40, 41, 1, 1, NULL, 1),
(43, 44, 4, 2, NULL, 0),
(45, 46, 5, 1, NULL, 0),
(48, 49, 7, 3, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `CustemerID` int(255) NOT NULL,
  `OrderID` int(255) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `TotalAmount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`CustemerID`, `OrderID`, `OrderDate`, `TotalAmount`) VALUES
(3, 39, '2019-01-05 14:52:31', 750000),
(3, 40, '2019-01-20 14:09:29', 700000),
(3, 43, '2019-01-20 16:58:47', 1300000),
(3, 45, '2019-01-22 20:56:46', 750000),
(3, 48, '2019-01-22 21:12:59', 1950000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `CategoryID` int(255) NOT NULL,
  `SupplierID` int(255) NOT NULL,
  `ProductID` int(255) NOT NULL,
  `ProductName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Unit` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL,
  `Size` int(10) NOT NULL,
  `Color` varchar(60) NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(5) NOT NULL,
  `sale` int(2) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `price_sale` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`CategoryID`, `SupplierID`, `ProductID`, `ProductName`, `Unit`, `Price`, `Size`, `Color`, `Description`, `gender`, `sale`, `date`, `image`, `price_sale`) VALUES
(1, 4, 1, 'Prophere', 'VND', 700000, 36, 'pink', 'Chất vải,ôm chân,đế cao su', 'F', 0, '2018-08-20', 'a1.jpg', 0),
(1, 4, 2, 'Prophere', 'VND', 700000, 37, 'pink', 'Chất vải,ôm chân,đế cao su', 'F', 0, '2018-09-29', 'a2.jpg', 0),
(3, 4, 3, 'Prophere', 'VND', 700000, 38, 'pink', 'Chất vải,ôm chân,đế cao su', 'F', 0, '2018-10-11', 'a3.jpg', 0),
(4, 5, 4, 'Prophere', 'VND', 700000, 39, 'pink', 'Chất vải,ôm chân,đế cao su', 'F', 1, '2018-11-20', 'a10.jpg', 650000),
(5, 5, 5, 'utralboost', 'VND', 800000, 40, 'green', 'Chất da,đế cao su', 'M', 1, '2018-08-20', 'a15.jpg', 750000),
(6, 6, 6, 'utralboost', 'VND', 800000, 37, 'green', 'Chất vải,đế cao su', 'F', 1, '2018-08-15', 'a12.jpg', 700000),
(9, 6, 7, 'utralboost', 'VND', 800000, 36, 'green', 'Chất vải,đế cao su', 'F', 1, '2018-08-19', 'a11.jpg', 650000),
(8, 7, 8, 'utralboost', 'VND', 800000, 38, 'green', 'Chất vải,đế cao su', 'F', 0, '2018-08-21', 'a4.jpg', 0),
(3, 7, 9, 'Puma', 'VND', 750000, 36, 'white', 'Ôm chân,đế cao su', 'F', 0, '2018-08-20', 'a5.jpg', 0),
(4, 8, 10, 'Puma', 'VND', 750000, 37, 'white', 'Ôm chân,đế cao su', 'F', 0, '2018-09-20', 'a6.jpg', 0),
(5, 8, 11, 'Puma', 'VND', 750000, 38, 'white', 'Ôm chân,đế cao su', 'FM', 1, '2018-07-20', 'a14.jpg', 730000),
(6, 8, 12, 'Puma', 'VND', 750000, 39, 'white', 'Ôm chân,đế cao su', 'FS', 1, '2018-08-02', 'a13.jpg', 700000),
(7, 9, 13, 'HumanRace', 'VND', 850000, 40, 'black', 'Chất vải,ôm chân', 'F', 1, '2018-10-21', 'a16.jpg', 790000),
(8, 9, 14, 'HumanRace', 'VND', 850000, 37, 'black', 'Chất vải,ôm chân', 'F', 1, '2018-11-20', 'a8.jpg', 600000),
(9, 9, 15, 'HumanRace', 'VND', 850000, 38, 'black', 'Chất vải,ôm chân', 'FM', 0, '2017-08-20', 'a7.jpg', 0),
(4, 11, 17, 'Nike97', 'VND', 850000, 36, 'Orange', 'Chất vải,ôm chân,đế nhựa', 'F', 0, '2018-04-20', 'a1.jpg', 0),
(5, 12, 18, 'Nike97', 'VND', 850000, 37, 'Orange', 'Chất vải,ôm chân,đế nhựa', 'F', 1, '2017-05-20', 'a19.jpg', 840000),
(6, 13, 19, 'Nike97', 'VND', 850000, 38, 'Orange', 'Chất vải,ôm chân,đế nhựa', 'FM', 1, '2017-08-20', 'a18.jpg', 830000),
(7, 6, 20, 'Nike97', 'VND', 850000, 39, 'Orange', 'Chất vải,ôm chân,đế nhựa', 'FM', 1, '2017-09-22', 'a17.jpg', 820000),
(1, 1, 21, 'ds', 'VND', 23, 30, 'green', '23', 'F', 0, '0001-01-01', 'a9.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `SupplierID` int(255) NOT NULL,
  `CompanyName` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ContactName` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`SupplierID`, `CompanyName`, `ContactName`, `Address`, `Phone`, `Email`) VALUES
(1, 'Khang Thịnh', 'Hoàng Trọng Minh', 'Đống Đa - Hà Nội', '0123456789', 'minh123@gmail.com'),
(2, 'Hồng Phát', 'Hồ Trọng Hoàn', 'Hà Giang', '0234567891', '234@gmail.com'),
(3, 'Sam Sung', 'Lê Thành Đạt', 'Cổ Nhuế - Hà Nội', '0987654321', 'dat123@gmail.com'),
(4, 'Phượng Hoàng', 'Vũ Lê Linh', 'Tuyên Quang', '0981234567', 'linh123@gmail.com'),
(5, 'Phượng Hồng', 'Vũ Lê Long', 'Thanh Hóa', '0981234566', 'long123@gmail.com'),
(6, 'Hoàng Gia', 'Lê Linh Trang', 'Hà Giang', '0981234565', 'trang123@gmail.com'),
(7, 'Hồng Phước', 'Hoàng Minh Đại', 'Hà Tây', '0981234564', 'dai123@gmail.com'),
(8, 'Minh Trang', 'Trương Hoàng Vũ', 'Quảng Bình', '0981234563', 'vu123@gmail.com'),
(9, 'Vũ Lê', 'Hồ Mạnh Hoàng', 'Quảng Ninh', '0981234562', 'hoang123@gmail.com'),
(10, 'Minh Minh', 'Nguyễn Hồng Minh', 'Hồ Chí Minh', '0981234561', 'minh123@gmail.com'),
(11, 'Hoàng Long', 'Phan Hải Lý', 'Móng Cái', '0981234557', 'ly123@gmail.com'),
(12, 'Đại Phát', 'Phan Oanh', 'Quảng Trị', '0981234543', 'oanh123@gmail.com'),
(13, 'Minh Trang', 'Trần Nhã Kỳ', 'SaPa', '0981234521', 'ky123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Fullname`, `Username`, `Password`) VALUES
(1, 'Lê Thị Huyền', 'Huyenle', '123'),
(2, 'Đậu Thị Nam', 'Namdau', '234'),
(3, 'administration', 'admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`DetailID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`SupplierID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `DetailID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `SupplierID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
