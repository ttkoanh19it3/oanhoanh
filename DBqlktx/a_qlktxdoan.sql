-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2021 lúc 09:43 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `a_qlktxdoan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `imgurl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `imgurl`) VALUES
(7, '105588246_169952601231379_2081956209976896732_o.jpg'),
(8, '107838123_1190004058001970_231206781669535749_o.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `canboquanly`
--

CREATE TABLE `canboquanly` (
  `mscb` int(11) NOT NULL,
  `nscb` date DEFAULT NULL,
  `gtcb` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qqcb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_khu` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `canboquanly`
--

INSERT INTO `canboquanly` (`mscb`, `nscb`, `gtcb`, `qqcb`, `sdt`, `email`, `id_khu`, `updated_at`) VALUES
(1001, '1970-06-01', 'nu', 'Hà Nội', '0983774999', 'cb1@gmail.com', 1, NULL),
(1002, '1965-08-12', 'nam', 'Ha Noi', '0989666877', 'cb2@gmail.com', 2, NULL),
(1003, '1972-02-26', 'nam', 'Ha Noi', '0989123456', 'cb3@gmail.com', 3, NULL),
(1004, '1972-03-21', 'nu', 'Ha Noi', '0989123448', 'cb4@gmail.com', 1, NULL),
(1005, '1965-07-08', 'nam', 'Nam Định', '0988009999', 'hung123@gmail.com', 2, NULL),
(1006, '2001-03-09', 'nu', 'Quảng Bình', '0813234188', 'ttko.19it3@vku.udn.vn', 1, '2021-01-08'),
(1007, '2000-04-23', 'nu', 'Quảng Bình', '0813234188', 'btttrang.19it3@vku.udn.vn', 5, '2021-01-08'),
(1008, NULL, NULL, NULL, NULL, 'ha@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chart`
--

CREATE TABLE `chart` (
  `user_id` int(11) NOT NULL,
  `Tên` varchar(20) NOT NULL,
  `khoa` varchar(40) NOT NULL,
  `lớp` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `graph`
--

CREATE TABLE `graph` (
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `major` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuktx`
--

CREATE TABLE `khuktx` (
  `id` int(11) NOT NULL,
  `tenkhu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaphong` int(11) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `tang` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuktx`
--

INSERT INTO `khuktx` (`id`, `tenkhu`, `giaphong`, `updated_at`, `tang`) VALUES
(1, 'KTXK-N1', 600000, NULL, 1),
(2, 'KTXK-N1', 700000, NULL, 2),
(3, 'KTXK-N1', 500000, NULL, 3),
(4, 'KTXK-N1', 500000, NULL, 4),
(5, 'KTXK-N2', 700000, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieudangky`
--

CREATE TABLE `phieudangky` (
  `id_phong` int(11) NOT NULL,
  `mssv` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nam` int(11) NOT NULL,
  `trangthaidk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydk` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `lephi` int(11) NOT NULL,
  `mscb` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieudangky`
--

INSERT INTO `phieudangky` (`id_phong`, `mssv`, `name`, `nam`, `trangthaidk`, `ngaydk`, `updated_at`, `lephi`, `mscb`) VALUES
(1, 20160001, 'Sinh vien 1', 2019, 'success', '2019-07-08', '2019-07-08', 2400000, 1001),
(1, 20160003, 'Sinh vien 3', 2019, 'registered', '2019-07-09', NULL, 2400000, NULL),
(1, 20166256, 'hung', 2019, 'success', '2019-07-08', '2019-07-08', 2400000, 1001),
(6, 12345677, 'Kim Oanh', 2020, 'success', '2020-12-24', '2020-12-24', 400000, 1001),
(6, 20171111, 'Trần Thu Huyền', 2019, 'success', '2019-07-08', '2019-07-08', 2400000, 1001),
(6, 20171111, 'Trần Thu Huyền', 2020, 'success', '2020-12-24', '2020-12-24', 400000, 1001),
(7, 12345677, 'Kim Oanh', 2021, 'success', '2021-01-06', '2021-01-08', 4800000, 1001);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `id` int(11) NOT NULL,
  `sophong` int(11) NOT NULL,
  `id_khu` int(11) NOT NULL,
  `sncur` int(11) NOT NULL,
  `snmax` int(11) NOT NULL,
  `gioitinh` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`id`, `sophong`, `id_khu`, `sncur`, `snmax`, `gioitinh`, `updated_at`) VALUES
(1, 101, 1, 3, 3, 'nu', NULL),
(2, 102, 1, 0, 3, 'nu', NULL),
(3, 103, 1, 0, 3, 'nu', NULL),
(4, 104, 1, 0, 3, 'nu', NULL),
(5, 105, 1, 0, 3, 'nu', NULL),
(6, 201, 1, 3, 3, 'nu', NULL),
(7, 202, 1, 1, 3, 'nu', NULL),
(8, 203, 1, 0, 3, 'nu', NULL),
(9, 204, 1, 0, 3, 'nu', NULL),
(10, 205, 1, 0, 3, 'nu', NULL),
(11, 301, 1, 0, 3, 'nu', NULL),
(12, 302, 1, 0, 3, 'nu', NULL),
(13, 303, 1, 0, 3, 'nu', NULL),
(14, 304, 1, 0, 3, 'nu', NULL),
(15, 305, 1, 0, 3, 'nu', NULL),
(16, 401, 1, 0, 3, 'nam', NULL),
(17, 402, 1, 0, 3, 'nam', NULL),
(18, 403, 1, 0, 3, 'nam', NULL),
(19, 404, 1, 0, 3, 'nam', NULL),
(20, 405, 1, 0, 3, 'nam', NULL),
(21, 101, 2, 0, 4, 'nu', NULL),
(22, 102, 2, 0, 4, 'nu', NULL),
(23, 103, 2, 0, 4, 'nu', NULL),
(24, 104, 2, 0, 4, 'nu', NULL),
(25, 105, 2, 0, 4, 'nu', NULL),
(26, 201, 2, 0, 4, 'nu', NULL),
(27, 202, 2, 0, 4, 'nu', NULL),
(28, 203, 2, 0, 4, 'nu', NULL),
(29, 204, 2, 0, 4, 'nu', NULL),
(30, 205, 2, 0, 4, 'nu', NULL),
(31, 301, 2, 0, 4, 'nu', NULL),
(32, 302, 2, 0, 4, 'nu', NULL),
(33, 303, 2, 0, 4, 'nu', NULL),
(34, 304, 2, 0, 4, 'nu', NULL),
(35, 305, 2, 0, 4, 'nu', NULL),
(36, 401, 2, 0, 4, 'nu', NULL),
(37, 402, 2, 0, 4, 'nu', NULL),
(38, 403, 2, 0, 4, 'nu', NULL),
(39, 404, 2, 0, 4, 'nu', NULL),
(40, 405, 2, 0, 4, 'nu', NULL),
(41, 101, 3, 0, 6, 'nam', NULL),
(42, 102, 3, 0, 6, 'nam', NULL),
(43, 103, 3, 0, 6, 'nam', NULL),
(44, 104, 3, 0, 6, 'nam', NULL),
(45, 105, 3, 0, 6, 'nam', NULL),
(46, 201, 3, 0, 6, 'nam', NULL),
(47, 202, 3, 0, 6, 'nam', NULL),
(48, 203, 3, 0, 6, 'nam', NULL),
(49, 204, 3, 0, 6, 'nam', NULL),
(50, 205, 3, 0, 6, 'nam', NULL),
(51, 301, 3, 0, 6, 'nam', NULL),
(52, 302, 3, 0, 6, 'nam', NULL),
(53, 303, 3, 0, 6, 'nam', NULL),
(54, 304, 3, 0, 6, 'nam', NULL),
(55, 305, 3, 0, 6, 'nam', NULL),
(56, 401, 3, 0, 6, 'nam', NULL),
(57, 402, 3, 0, 6, 'nam', NULL),
(58, 403, 3, 0, 6, 'nam', NULL),
(59, 404, 3, 0, 6, 'nam', NULL),
(60, 405, 3, 0, 6, 'nam', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `mssv` int(11) NOT NULL,
  `nssv` date DEFAULT NULL,
  `gtsv` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khoa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qqsv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`mssv`, `nssv`, `gtsv`, `lop`, `khoa`, `qqsv`, `email`, `sdt`, `updated_at`) VALUES
(12345677, '2001-03-09', 'nu', '19it3', 'k19', 'quảng bình', 'kimoanh129.ot@gmail.com', '0813234188', '2020-12-24'),
(20160001, '1998-01-01', 'nam', '19it3', 'k19', 'Quảng Nam', 'sv1@gmail.com', '0300000001', NULL),
(20160002, '1998-01-01', 'nam', '19it3', 'k19', 'Quảng Bình', 'sv2@gmail.com', '0300000002', NULL),
(20160003, '1998-01-01', 'nam', '19it3', 'k19', 'Hà Nội', 'sv3@gmail.com', '0300000003', NULL),
(20166256, '1998-08-28', 'nam', '19it3', 'k19', 'Quảng Nam', 'h@gmail.com', '0333987789', NULL),
(20171111, '1999-08-09', 'nu', '19it3', 'k19', 'Quảng Ngãi', 'huyen@gmail.com', '11111111111', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ltk` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `ltk`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kim Oanh 1', 'cb1@gmail.com', 'user.jpg', 'quanly', NULL, '$2y$10$8Pxb7kZemFjFdIOTxUjaBOXc8ap0oE4Rlaj5A7U6CQXR5GLXysF8a', NULL, NULL, NULL),
(2, 'Kim Oanh 2', 'cb2@gmail.com', 'user.jpg', 'quanly', NULL, '$2y$10$8Pxb7kZemFjFdIOTxUjaBOXc8ap0oE4Rlaj5A7U6CQXR5GLXysF8a', NULL, NULL, NULL),
(3, 'Kim Oanh 3', 'cb3@gmail.com', 'user.jpg', 'quanly', NULL, '$2y$10$8Pxb7kZemFjFdIOTxUjaBOXc8ap0oE4Rlaj5A7U6CQXR5GLXysF8a', NULL, NULL, NULL),
(4, 'Bùi Thị Thu Trang 1', 'cb4@gmail.com', 'user.jpg', 'quanly', NULL, '$2y$10$8Pxb7kZemFjFdIOTxUjaBOXc8ap0oE4Rlaj5A7U6CQXR5GLXysF8a', NULL, NULL, NULL),
(5, 'admin', 'admin@gmail.com', 'user.jpg', 'admin', NULL, '$2y$10$8Pxb7kZemFjFdIOTxUjaBOXc8ap0oE4Rlaj5A7U6CQXR5GLXysF8a', NULL, NULL, NULL),
(7, 'Sinh vien 1', 'sv1@gmail.com', 'user.jpg', 'sinhvien', NULL, '$2y$10$8Pxb7kZemFjFdIOTxUjaBOXc8ap0oE4Rlaj5A7U6CQXR5GLXysF8a', NULL, NULL, NULL),
(8, 'Sinh vien 2', 'sv2@gmail.com', 'user.jpg', 'sinhvien', NULL, '$2y$10$8Pxb7kZemFjFdIOTxUjaBOXc8ap0oE4Rlaj5A7U6CQXR5GLXysF8a', NULL, NULL, NULL),
(9, 'Sinh vien 3', 'sv3@gmail.com', 'user.jpg', 'sinhvien', NULL, '$2y$10$8Pxb7kZemFjFdIOTxUjaBOXc8ap0oE4Rlaj5A7U6CQXR5GLXysF8a', NULL, NULL, NULL),
(10, 'Sinh vien 4', 'sv4@gmail.com', 'user.jpg', 'sinhvien', NULL, '$2y$10$8Pxb7kZemFjFdIOTxUjaBOXc8ap0oE4Rlaj5A7U6CQXR5GLXysF8a', NULL, NULL, NULL),
(11, 'Sinh vien 5', 'sv5@gmail.com', 'user.jpg', 'sinhvien', NULL, '$2y$10$8Pxb7kZemFjFdIOTxUjaBOXc8ap0oE4Rlaj5A7U6CQXR5GLXysF8a', NULL, NULL, NULL),
(13, 'Kim Oanh', 'kimoanh73.ot@gmail.com', 'user.jpg', 'sinhvien', NULL, '$2y$10$lRYZ7IPtQBVGPYZxzWPol.YMO3BX8klKvB.jbEKmtCpVbF9ZuyMyW', NULL, '2020-12-17 10:22:39', '2020-12-17 10:22:39'),
(14, 'Kim Oanh', 'kimoanh129.ot@gmail.com', 'user.jpg', 'sinhvien', NULL, '$2y$10$dmj.xE5Ai4Ul4xGpjJMAD.Xymt7UlldxLY0IIXB8M/Uf1/2P4nBAi', NULL, '2020-12-24 00:41:48', '2020-12-24 00:41:48'),
(17, 'Thu Trang', 'cb8@gmail.com', 'user.jpg', 'quanly', NULL, '12345678', NULL, NULL, NULL),
(18, 'Trần Thị Kim Oanh', 'ttko.19it3@vku.udn.vn', 'user.jpg', 'quanly', NULL, '$2y$10$0E1EBL/I4CIXmwPtRMJf6OeBZVw4WFecGGyfE0x5RN7XTV66qKSn2', NULL, '2021-01-08 10:19:50', '2021-01-08 10:19:50'),
(19, 'Bùi Thị Thu Trang', 'btttrang.19it3@vku.udn.vn', 'user.jpg', 'quanly', NULL, '$2y$10$Z.8nFB7SJBLJAr/wZe28rO2M7nlC0FxbWkJnuTxL/Y8Z7iRXoV1KC', NULL, '2021-01-08 10:21:29', '2021-01-08 10:21:29'),
(20, 'Trần Võ Hoàng An', 'ha@gmail.com', 'user.jpg', 'quanly', NULL, '$2y$10$1rorJjX1BrO4eCs/AmaqOe2vI2ssra6IBYS81bG1YC1zJWsW4NqRy', NULL, '2021-01-08 11:18:38', '2021-01-08 11:18:38');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `canboquanly`
--
ALTER TABLE `canboquanly`
  ADD PRIMARY KEY (`mscb`),
  ADD KEY `fk_c_k` (`id_khu`);

--
-- Chỉ mục cho bảng `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `graph`
--
ALTER TABLE `graph`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `khuktx`
--
ALTER TABLE `khuktx`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `phieudangky`
--
ALTER TABLE `phieudangky`
  ADD PRIMARY KEY (`id_phong`,`mssv`,`nam`),
  ADD KEY `fk_pdk_s` (`mssv`),
  ADD KEY `fk_pdk_c` (`mscb`),
  ADD KEY `fk_pdk_p` (`id_phong`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_p_k` (`id_khu`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`mssv`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `chart`
--
ALTER TABLE `chart`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `graph`
--
ALTER TABLE `graph`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `canboquanly`
--
ALTER TABLE `canboquanly`
  ADD CONSTRAINT `fk_c_k` FOREIGN KEY (`id_khu`) REFERENCES `khuktx` (`id`);

--
-- Các ràng buộc cho bảng `phieudangky`
--
ALTER TABLE `phieudangky`
  ADD CONSTRAINT `fk_pdk_c` FOREIGN KEY (`mscb`) REFERENCES `canboquanly` (`mscb`),
  ADD CONSTRAINT `fk_pdk_p` FOREIGN KEY (`id_phong`) REFERENCES `phong` (`id`),
  ADD CONSTRAINT `fk_pdk_s` FOREIGN KEY (`mssv`) REFERENCES `sinhvien` (`mssv`);

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `fk_p_k` FOREIGN KEY (`id_khu`) REFERENCES `khuktx` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
