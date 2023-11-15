-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2023 lúc 12:57 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `h&v`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coso`
--

CREATE TABLE `coso` (
  `MaCoSo` int(11) NOT NULL,
  `TenCoSo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `DiaChi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MaNhanVien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `coso`
--

INSERT INTO `coso` (`MaCoSo`, `TenCoSo`, `DiaChi`, `MaNhanVien`) VALUES
(1, 'Sơn Tây', 'Sơn Tây', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datlich`
--

CREATE TABLE `datlich` (
  `MaDatLich` int(11) NOT NULL,
  `MaThuCung` int(11) DEFAULT NULL,
  `MaLichHen` int(11) DEFAULT NULL,
  `MaCoSo` int(11) DEFAULT NULL,
  `MaDichVu` int(11) DEFAULT NULL,
  `TrangThai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `MaDichVu` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MoTa` varchar(255) NOT NULL,
  `Gia` decimal(10,2) DEFAULT NULL,
  `MaCoSo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`MaDichVu`, `name`, `MoTa`, `Gia`, `MaCoSo`) VALUES
(1, 'Chăm sóc thú cưng', 'Dịch vụ chăm sóc thú cưng của chúng tôi cung cấp một môi trường an toàn, yêu thương và chuyên nghiệp cho các bạn bốn chân', 100000.00, 1),
(2, 'Khám bệnh', '', NULL, NULL),
(3, 'Trông coi', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKhachHang` int(11) NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `DienThoai` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichhen`
--

CREATE TABLE `lichhen` (
  `MaLichHen` int(11) NOT NULL,
  `MaThuCung` int(11) DEFAULT NULL,
  `ThoiGianDat` datetime DEFAULT NULL,
  `DichVu` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `TrangThai` int(1) DEFAULT NULL,
  `MaKhachHang` int(11) DEFAULT NULL,
  `MaNhanVien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaNguoiDung` int(11) NOT NULL,
  `TenDangNhap` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MatKhau` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MaVaiTro` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNhanVien` int(11) NOT NULL,
  `TenNhanVien` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ChuyenMon` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MaCoSo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thucung`
--

CREATE TABLE `thucung` (
  `MaThuCung` int(11) NOT NULL,
  `TenThuCung` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `LoaiThuCung` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MaKhachHang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thucung`
--

INSERT INTO `thucung` (`MaThuCung`, `TenThuCung`, `LoaiThuCung`, `MaKhachHang`) VALUES
(1, 'Chó Vũ rách', 'Chó', NULL),
(2, NULL, 'Mèo', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `coso`
--
ALTER TABLE `coso`
  ADD PRIMARY KEY (`MaCoSo`),
  ADD KEY `FK_CoSo_NhanVien` (`MaNhanVien`);

--
-- Chỉ mục cho bảng `datlich`
--
ALTER TABLE `datlich`
  ADD PRIMARY KEY (`MaDatLich`),
  ADD KEY `MaThuCung` (`MaThuCung`),
  ADD KEY `MaLichHen` (`MaLichHen`),
  ADD KEY `datlich_ibfk_3` (`MaCoSo`),
  ADD KEY `datlich_ibfk_4` (`MaDichVu`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`MaDichVu`),
  ADD KEY `FK_DichVu_CoSo` (`MaCoSo`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKhachHang`);

--
-- Chỉ mục cho bảng `lichhen`
--
ALTER TABLE `lichhen`
  ADD PRIMARY KEY (`MaLichHen`),
  ADD KEY `MaThuCung` (`MaThuCung`),
  ADD KEY `MaKhachHang` (`MaKhachHang`),
  ADD KEY `FK_LichHen_NhanVien` (`MaNhanVien`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaNguoiDung`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNhanVien`),
  ADD KEY `FK_NhanVien_CoSo` (`MaCoSo`);

--
-- Chỉ mục cho bảng `thucung`
--
ALTER TABLE `thucung`
  ADD PRIMARY KEY (`MaThuCung`),
  ADD KEY `MaKhachHang` (`MaKhachHang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `coso`
--
ALTER TABLE `coso`
  MODIFY `MaCoSo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `datlich`
--
ALTER TABLE `datlich`
  MODIFY `MaDatLich` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `MaDichVu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKhachHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lichhen`
--
ALTER TABLE `lichhen`
  MODIFY `MaLichHen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaNguoiDung` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNhanVien` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thucung`
--
ALTER TABLE `thucung`
  MODIFY `MaThuCung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `coso`
--
ALTER TABLE `coso`
  ADD CONSTRAINT `FK_CoSo_NhanVien` FOREIGN KEY (`MaNhanVien`) REFERENCES `nhanvien` (`MaNhanVien`);

--
-- Các ràng buộc cho bảng `datlich`
--
ALTER TABLE `datlich`
  ADD CONSTRAINT `datlich_ibfk_1` FOREIGN KEY (`MaThuCung`) REFERENCES `thucung` (`MaThuCung`),
  ADD CONSTRAINT `datlich_ibfk_2` FOREIGN KEY (`MaLichHen`) REFERENCES `lichhen` (`MaLichHen`),
  ADD CONSTRAINT `datlich_ibfk_3` FOREIGN KEY (`MaCoSo`) REFERENCES `coso` (`MaCoSo`),
  ADD CONSTRAINT `datlich_ibfk_4` FOREIGN KEY (`MaDichVu`) REFERENCES `dichvu` (`MaDichVu`);

--
-- Các ràng buộc cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD CONSTRAINT `FK_DichVu_CoSo` FOREIGN KEY (`MaCoSo`) REFERENCES `coso` (`MaCoSo`);

--
-- Các ràng buộc cho bảng `lichhen`
--
ALTER TABLE `lichhen`
  ADD CONSTRAINT `FK_LichHen_NhanVien` FOREIGN KEY (`MaNhanVien`) REFERENCES `nhanvien` (`MaNhanVien`),
  ADD CONSTRAINT `lichhen_ibfk_1` FOREIGN KEY (`MaThuCung`) REFERENCES `thucung` (`MaThuCung`),
  ADD CONSTRAINT `lichhen_ibfk_2` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `FK_NhanVien_CoSo` FOREIGN KEY (`MaCoSo`) REFERENCES `coso` (`MaCoSo`);

--
-- Các ràng buộc cho bảng `thucung`
--
ALTER TABLE `thucung`
  ADD CONSTRAINT `thucung_ibfk_1` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
