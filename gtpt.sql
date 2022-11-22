-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2022 lúc 09:38 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gtpt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `Idanh` int(11) NOT NULL,
  `Idtin` int(11) NOT NULL,
  `Lienket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`Idanh`, `Idtin`, `Lienket`) VALUES
(10, 7, 'Z06EPtải xuống.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `motel`
--

CREATE TABLE `motel` (
  `Idtin` int(11) NOT NULL,
  `Tieude` varchar(255) NOT NULL,
  `Noidung` text DEFAULT NULL,
  `Sdt` int(11) NOT NULL,
  `Ngaydang` date NOT NULL,
  `Malt` int(11) NOT NULL,
  `Iduser` int(11) NOT NULL,
  `Idphuong` int(11) NOT NULL,
  `Gia` int(11) DEFAULT NULL,
  `Dientich` int(3) NOT NULL,
  `Diachi` varchar(255) NOT NULL,
  `Anh` varchar(255) NOT NULL,
  `Tinhot` bit(1) NOT NULL,
  `Thongtinlh` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `motel`
--

INSERT INTO `motel` (`Idtin`, `Tieude`, `Noidung`, `Sdt`, `Ngaydang`, `Malt`, `Iduser`, `Idphuong`, `Gia`, `Dientich`, `Diachi`, `Anh`, `Tinhot`, `Thongtinlh`) VALUES
(7, 'Vinh', 'Đep', 355679214, '2022-11-22', 1, 6, 10, 2000000, 30, 'Nhà 11 - Ngõ 5 - Đường Võ Thị Sáu', 'Adhgbtải xuống.jpg', b'0', '0355679214');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

CREATE TABLE `type` (
  `Malt` int(11) NOT NULL,
  `Tenlt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`Malt`, `Tenlt`) VALUES
(1, 'Phòng trọ'),
(2, 'Ở ghép'),
(3, 'Chung cư mini');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Iduser` int(11) NOT NULL,
  `Taikhoan` varchar(50) NOT NULL,
  `Matkhau` varchar(255) NOT NULL,
  `Hoten` varchar(255) NOT NULL,
  `Sdt` int(11) NOT NULL,
  `Quyen` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`Iduser`, `Taikhoan`, `Matkhau`, `Hoten`, `Sdt`, `Quyen`) VALUES
(2, 'test1', '202cb962ac59075b964b07152d234b70', 'Test1', 90099, b'0'),
(3, 'test2', '202cb962ac59075b964b07152d234b70', 'Test2', 99988, b'0'),
(4, 'Test3', '202cb962ac59075b964b07152d234b70', 'Test3', 9988, b'0'),
(5, 'admin', 'f82e62d7c3ea69cc12b5cdb8d621dab6', 'Lê Văn Hoàng', 355679214, b'1'),
(6, 'goang', '202cb962ac59075b964b07152d234b70', 'cucap', 90290, b'0'),
(7, 'admin1', '202cb962ac59075b964b07152d234b70', 'Lê Văn Hoàng', 2147483647, b'1'),
(8, 'hoang', '202cb962ac59075b964b07152d234b70', 'Lê Văn Hoàng', 9089789, b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ward`
--

CREATE TABLE `ward` (
  `Idphuong` int(11) NOT NULL,
  `Tenphuong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ward`
--

INSERT INTO `ward` (`Idphuong`, `Tenphuong`) VALUES
(10, 'Bến Thủy'),
(11, 'Cửa Nam'),
(12, 'Đội Cung'),
(13, 'Đông Vĩnh'),
(14, 'Hà Huy Tập'),
(15, 'Hồng Sơn'),
(16, 'Hưng Bình'),
(17, 'Hưng Dũng'),
(18, 'Hưng Phúc '),
(19, 'Lê Lợi'),
(20, 'Lê Mao'),
(21, 'Quán Bàu'),
(22, 'Quang Trung'),
(23, 'Trung Đô'),
(24, 'Trường Thi'),
(25, 'Vinh Tân'),
(26, 'Hưng Chính'),
(27, 'Hưng Đông'),
(28, 'Hưng Hòa'),
(29, 'Hưng Lộc'),
(30, 'Nghi Ân'),
(31, 'Nghi Đức'),
(32, 'Nghi Kim'),
(33, 'Nghi Liên'),
(34, 'Nghi Phú');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`Idanh`),
  ADD KEY `Idtin` (`Idtin`);

--
-- Chỉ mục cho bảng `motel`
--
ALTER TABLE `motel`
  ADD PRIMARY KEY (`Idtin`),
  ADD KEY `Malt` (`Malt`),
  ADD KEY `Idphuong` (`Idphuong`),
  ADD KEY `Iduser` (`Iduser`);

--
-- Chỉ mục cho bảng `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`Malt`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Iduser`);

--
-- Chỉ mục cho bảng `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`Idphuong`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `Idanh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `motel`
--
ALTER TABLE `motel`
  MODIFY `Idtin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `Iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`Idtin`) REFERENCES `motel` (`Idtin`);

--
-- Các ràng buộc cho bảng `motel`
--
ALTER TABLE `motel`
  ADD CONSTRAINT `motel_ibfk_1` FOREIGN KEY (`Malt`) REFERENCES `type` (`Malt`),
  ADD CONSTRAINT `motel_ibfk_2` FOREIGN KEY (`Idphuong`) REFERENCES `ward` (`Idphuong`),
  ADD CONSTRAINT `motel_ibfk_3` FOREIGN KEY (`Iduser`) REFERENCES `user` (`Iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
