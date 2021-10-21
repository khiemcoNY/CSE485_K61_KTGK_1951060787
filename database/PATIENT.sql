-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 21, 2021 lúc 08:26 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ThiGK`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `PATIENT`
--

CREATE TABLE `PATIENT` (
  `patientid` int(11) NOT NULL,
  `firstname` varchar(99) DEFAULT NULL,
  `lastname` varchar(99) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `gender` varchar(99) DEFAULT NULL,
  `mobile` varchar(99) DEFAULT NULL,
  `email` varchar(99) DEFAULT NULL,
  `height` varchar(99) DEFAULT NULL,
  `weight` varchar(99) DEFAULT NULL,
  `blood_type` varchar(99) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `modified_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `PATIENT`
--

INSERT INTO `PATIENT` (`patientid`, `firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`, `created_on`, `modified_on`) VALUES
(1, 'khiem', 'nguyen', '2001-01-01', 'nam', '07343647', 'khiem@gmail.com', '1m8', '60', 'O', '2001-02-02', '2001-02-02');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `PATIENT`
--
ALTER TABLE `PATIENT`
  ADD PRIMARY KEY (`patientid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `PATIENT`
--
ALTER TABLE `PATIENT`
  MODIFY `patientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
