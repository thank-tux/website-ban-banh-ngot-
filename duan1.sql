-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2023 lúc 11:55 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(4) NOT NULL,
  `madh` varchar(50) NOT NULL,
  `iduser` int(4) NOT NULL,
  `nguoidat_ten` varchar(50) NOT NULL,
  `nguoidat_email` varchar(50) NOT NULL,
  `nguoidat_tel` varchar(20) NOT NULL,
  `nguoidat_diachi` varchar(100) NOT NULL,
  `nguoinhan_ten` varchar(50) DEFAULT NULL,
  `nguoinhan_diachi` varchar(100) DEFAULT NULL,
  `nguoinhan_tel` varchar(20) DEFAULT NULL,
  `total` int(9) NOT NULL,
  `ship` int(6) NOT NULL DEFAULT 0,
  `voucher` int(6) NOT NULL DEFAULT 0,
  `tongthanhtoan` int(9) NOT NULL,
  `idmgg` int(4) DEFAULT NULL,
  `trang_thai` bit(1) DEFAULT NULL,
  `ngay_xuat` date DEFAULT NULL,
  `pttt` bit(1) NOT NULL COMMENT '0:VOD; 1:ck; 2: ví điện tử'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `madh`, `iduser`, `nguoidat_ten`, `nguoidat_email`, `nguoidat_tel`, `nguoidat_diachi`, `nguoinhan_ten`, `nguoinhan_diachi`, `nguoinhan_tel`, `total`, `ship`, `voucher`, `tongthanhtoan`, `idmgg`, `trang_thai`, `ngay_xuat`, `pttt`) VALUES
(21, 'zhope36-072228-11122023', 36, 'nao', 'voquanganhpm2003@gmail.com', '0987654321', 'my tai', '', '', '', 60000, 0, 0, 60000, NULL, NULL, NULL, b'1'),
(51, 'zhope67-104953-11122023', 67, 'sđsf', 'dsfds', 'dsfsd', 'dfsd', '', '', '', 20000, 0, 0, 20000, NULL, NULL, NULL, b'1'),
(52, 'zhope68-111732-11122023', 68, 'adsdsd', 'sdsa', 'sadsa', 'sdsa', '', '', '', 100000, 0, 0, 100000, NULL, NULL, NULL, b'1'),
(53, 'zhope69-114919-11122023', 69, 'adsdsd', 'sdsa', 'sadsa', 'sdsa', '', '', '', 0, 0, 0, 0, NULL, NULL, NULL, b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(4) NOT NULL,
  `iduser` int(4) NOT NULL,
  `id_sp` int(4) NOT NULL,
  `nd` varchar(200) NOT NULL,
  `trang_thai` bit(1) NOT NULL,
  `ngay_bl` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `iduser`, `id_sp`, `nd`, `trang_thai`, `ngay_bl`) VALUES
(34, 8, 0, 'bánh này khá là mền và ngon ♥\r\n', b'0', '08:39:18 - 10/12/2023'),
(36, 8, 0, 'dsadsads', b'0', '06:52:14 - 11/12/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(4) NOT NULL,
  `madh` varchar(50) NOT NULL,
  `id_bill` int(4) NOT NULL,
  `id_sp` int(4) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL,
  `thanhtien` int(6) NOT NULL,
  `soluong` int(25) NOT NULL,
  `trang_thai` bit(1) DEFAULT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `madh`, `id_bill`, `id_sp`, `name`, `img`, `thanhtien`, `soluong`, `trang_thai`, `price`) VALUES
(39, 'zhope68-111732-11122023', 52, 26, 'wow', '8.jpeg', 80000, 3, NULL, 20000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(20, 'bánh ngọt'),
(26, 'bánh'),
(27, 'bánh kem'),
(28, 'sanwitch');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ma_gg`
--

CREATE TABLE `ma_gg` (
  `id` int(4) NOT NULL,
  `voucher` int(6) NOT NULL,
  `the_loai` varchar(50) NOT NULL,
  `gia_tri` int(6) NOT NULL,
  `soluong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL,
  `price` int(9) NOT NULL DEFAULT 0,
  `price2` int(9) NOT NULL DEFAULT 0,
  `mo_ta` varchar(2000) NOT NULL,
  `cap_nhat` date NOT NULL,
  `soluong` int(50) NOT NULL,
  `iddm` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `img`, `price`, `price2`, `mo_ta`, `cap_nhat`, `soluong`, `iddm`) VALUES
(21, 'bánh kem', '4.jpeg', 699, 499, 'sản phẩm được làm từ bột mì thông qua các quá trình chọn lọc rất cao . mùi vị của bánh rất thơm ngon mang lại một cảm giác rất nhớ nhà đén với mọi người khi ăn!', '0000-00-00', 0, 27),
(22, 'bánh', '3.jpeg', 699, 499, 'sản phẩm được làm từ bột mì thông qua các quá trình chọn lọc rất cao . mùi vị của bánh rất thơm ngon mang lại một cảm giác rất nhớ nhà đén với mọi người khi ăn!\r\n', '0000-00-00', 0, 27),
(23, 'bánh mì', '5.jpeg', 699, 499, 'sản phẩm được làm từ bột mì thông qua các quá trình chọn lọc rất cao . mùi vị của bánh rất thơm ngon mang lại một cảm giác rất nhớ nhà đén với mọi người khi ăn!', '0000-00-00', 0, 28),
(24, 'bánh mì', '1.jpeg', 3000, 499, 'sản phẩm được làm từ bột mì thông qua các quá trình chọn lọc rất cao . mùi vị của bánh rất thơm ngon mang lại một cảm giác rất nhớ nhà đén với mọi người khi ăn!', '0000-00-00', 0, 26),
(25, 'bánh ít ngọt', '6.jpeg', 977, 499, 'sản phẩm được làm từ bột mì thông qua các quá trình chọn lọc rất cao . mùi vị của bánh rất thơm ngon mang lại một cảm giác rất nhớ nhà đén với mọi người khi ăn!', '0000-00-00', 0, 20),
(26, 'bánh kem dâu', '8.jpeg', 20000, 499, 'sản phẩm được làm từ bột mì thông qua các quá trình chọn lọc rất cao . mùi vị của bánh rất thơm ngon mang lại một cảm giác rất nhớ nhà đén với mọi người khi ăn!', '0000-00-00', 0, 27);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) DEFAULT NULL,
  `tell` int(10) DEFAULT NULL,
  `trang_thai` bit(1) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `cap_nhat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `ten`, `email`, `diachi`, `tell`, `trang_thai`, `role`, `cap_nhat`) VALUES
(8, 'alo', '123', '', 'alo@oik', NULL, NULL, b'0', 0, '0000-00-00'),
(36, 'gues269', '123456', 'nao', 'voquanganhpm2003@gmail.com', 'my tai', 987654321, b'0', 0, '0000-00-00'),
(66, 'admin', '123', '', 'admin@123', NULL, NULL, b'0', 1, '0000-00-00'),
(67, 'gues689', '123456', 'sđsf', 'dsfds', 'dfsd', 0, b'0', 0, '0000-00-00'),
(68, 'gues682', '123456', 'adsdsd', 'sdsa', 'sdsa', 0, b'0', 0, '0000-00-00'),
(69, 'gues248', '123456', 'adsdsd', 'sdsa', 'sdsa', 0, b'0', 0, '0000-00-00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bill_user` (`iduser`),
  ADD KEY `fk_bill_ma_gg` (`idmgg`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_binh_luan_user` (`iduser`),
  ADD KEY `fk_binh_luan_sanpham` (`id_sp`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_sanpham` (`id_sp`),
  ADD KEY `fk_cart_bill` (`id_bill`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ma_gg`
--
ALTER TABLE `ma_gg`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `ma_gg`
--
ALTER TABLE `ma_gg`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_bill_ma_gg` FOREIGN KEY (`idmgg`) REFERENCES `ma_gg` (`id`),
  ADD CONSTRAINT `fk_bill_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_binhluan_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_bill` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `fk_cart_sanpham` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
