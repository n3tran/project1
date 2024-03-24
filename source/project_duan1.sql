-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 06, 2023 lúc 02:07 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project_duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bien_the`
--

CREATE TABLE `bien_the` (
  `ma_bt` int(10) NOT NULL,
  `ma_sp` int(10) NOT NULL,
  `size` int(2) NOT NULL,
  `soluong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bien_the`
--

INSERT INTO `bien_the` (`ma_bt`, `ma_sp`, `size`, `soluong`) VALUES
(1, 2, 38, 12),
(2, 2, 39, 10),
(3, 2, 40, 10),
(4, 2, 41, 20),
(5, 2, 42, 10),
(11, 46, 38, 10),
(12, 46, 39, 20),
(13, 46, 40, 30),
(14, 4, 38, 20),
(15, 4, 39, 20),
(16, 4, 40, 10),
(17, 4, 41, 10),
(18, 4, 42, 20),
(19, 45, 38, 12),
(20, 45, 39, 11),
(21, 45, 40, 12),
(22, 45, 41, 12),
(23, 44, 38, 11),
(24, 44, 39, 11),
(25, 44, 40, 12),
(26, 44, 41, 12),
(27, 44, 42, 12),
(28, 43, 38, 12),
(29, 43, 38, 12),
(30, 43, 39, 11),
(31, 43, 40, 12),
(32, 43, 41, 12),
(33, 43, 42, 12),
(34, 42, 38, 11),
(35, 42, 39, 12),
(36, 42, 40, 12),
(37, 41, 38, 12),
(38, 41, 38, 12),
(39, 41, 39, 12),
(40, 41, 40, 12),
(41, 41, 41, 12),
(42, 41, 42, 12),
(43, 40, 38, 11),
(44, 40, 39, 12),
(45, 40, 40, 13),
(46, 40, 41, 11),
(47, 39, 38, 12),
(48, 39, 39, 12),
(49, 39, 40, 12),
(50, 38, 38, 11),
(51, 38, 39, 12),
(52, 38, 40, 12),
(53, 38, 41, 12),
(54, 37, 38, 11),
(55, 37, 39, 12),
(56, 37, 40, 12),
(57, 36, 38, 11),
(58, 36, 39, 12),
(59, 36, 40, 12),
(60, 36, 38, 11),
(61, 36, 39, 12),
(62, 36, 40, 12),
(63, 36, 41, 11),
(64, 36, 42, 12),
(65, 35, 38, 11),
(66, 35, 39, 12),
(67, 35, 40, 12),
(68, 35, 41, 12),
(69, 35, 42, 12),
(70, 34, 38, 12),
(71, 34, 39, 12),
(72, 34, 40, 12),
(73, 34, 41, 12),
(74, 33, 38, 12),
(75, 33, 39, 12),
(76, 33, 40, 12),
(77, 32, 38, 12),
(78, 32, 39, 12),
(79, 32, 40, 12),
(80, 31, 38, 11),
(81, 31, 39, 12),
(82, 31, 40, 12),
(83, 31, 41, 12),
(84, 30, 38, 10),
(85, 30, 39, 15),
(86, 30, 40, 20),
(87, 30, 41, 10),
(88, 29, 38, 12),
(89, 29, 39, 12),
(90, 29, 40, 12),
(91, 29, 41, 12),
(92, 29, 42, 15),
(93, 28, 38, 12),
(94, 28, 39, 12),
(95, 28, 40, 12),
(96, 6, 38, 15),
(97, 6, 39, 15),
(98, 6, 40, 15),
(99, 6, 41, 15),
(100, 7, 38, 15),
(101, 7, 39, 15),
(102, 7, 40, 15),
(103, 27, 38, 12),
(104, 27, 39, 12),
(105, 27, 40, 12),
(106, 27, 41, 12),
(107, 26, 38, 20),
(108, 26, 39, 15),
(109, 26, 40, 15),
(110, 25, 38, 15),
(111, 25, 39, 15),
(112, 25, 40, 15),
(113, 25, 41, 15),
(114, 24, 38, 15),
(115, 24, 39, 15),
(116, 24, 40, 15),
(117, 8, 38, 23),
(118, 8, 39, 23),
(119, 8, 40, 23),
(120, 23, 38, 30),
(121, 23, 39, 20),
(122, 23, 40, 20),
(123, 23, 41, 20),
(124, 22, 38, 7),
(125, 22, 39, 12),
(126, 22, 40, 12),
(127, 22, 41, 12),
(128, 21, 38, 12),
(129, 21, 39, 12),
(130, 21, 40, 12),
(131, 21, 41, 12),
(132, 20, 38, 12),
(133, 20, 39, 12),
(134, 20, 40, 12),
(135, 20, 41, 12),
(136, 19, 38, 12),
(137, 19, 39, 12),
(138, 19, 40, 12),
(139, 19, 41, 12),
(140, 18, 38, 123),
(141, 18, 39, 12),
(142, 18, 40, 12),
(143, 17, 38, 12),
(144, 17, 39, 12),
(145, 17, 40, 12),
(146, 16, 38, 12),
(147, 16, 39, 12),
(148, 16, 40, 32),
(149, 15, 38, 23),
(150, 15, 39, 21),
(151, 15, 40, 21),
(152, 15, 41, 21),
(153, 14, 38, 23),
(154, 14, 39, 23),
(155, 14, 40, 23),
(156, 13, 38, 23),
(157, 13, 39, 23),
(158, 13, 40, 23),
(159, 13, 41, 23),
(160, 12, 38, 23),
(161, 12, 39, 23),
(162, 12, 40, 23),
(163, 12, 41, 23),
(164, 11, 38, 21),
(165, 11, 39, 212),
(166, 11, 40, 21),
(167, 11, 41, 21),
(168, 10, 38, 23),
(169, 10, 39, 23),
(170, 10, 40, 23),
(171, 10, 41, 23),
(172, 9, 38, 21),
(173, 9, 39, 21),
(174, 9, 40, 21),
(175, 9, 41, 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(10) NOT NULL,
  `noi_dung` varchar(300) NOT NULL,
  `ma_sp` int(10) NOT NULL,
  `ma_tk` int(10) NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_sp`, `ma_tk`, `ngay_bl`) VALUES
(1, 'hay', 22, 85, '2023-08-06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `ma_order` int(10) NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `dia_chi` varchar(200) NOT NULL,
  `ghi_chu` varchar(100) NOT NULL,
  `don_gia` int(15) NOT NULL,
  `ngay_dat` date NOT NULL,
  `trang_thai` varchar(20) NOT NULL,
  `ngay_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`ma_order`, `ho_ten`, `email`, `sdt`, `dia_chi`, `ghi_chu`, `don_gia`, `ngay_dat`, `trang_thai`, `ngay_update`) VALUES
(2, 'TruongAn', 'annttph29957@fpt.edu.vn', '0365113793', 'Thai Binh', '', 9530000, '2023-08-04', '3', '2023-08-06'),
(10, 'Trường An', 'annttph29957@fpt.edu.vn', '0365113793', 'Noi rat xa', 'ko', 8600000, '2023-08-06', '4', '2023-08-06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang_chitiet`
--

CREATE TABLE `don_hang_chitiet` (
  `ma_order_ct` int(10) NOT NULL,
  `ma_order` int(10) NOT NULL,
  `ma_sp` int(10) NOT NULL,
  `gia_sp` int(10) NOT NULL,
  `size` int(2) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang_chitiet`
--

INSERT INTO `don_hang_chitiet` (`ma_order_ct`, `ma_order`, `ma_sp`, `gia_sp`, `size`, `soluong`, `thanhtien`) VALUES
(4, 2, 22, 950000, 40, 10, 9500000),
(5, 10, 15, 3290000, 41, 2, 6580000),
(6, 10, 30, 1990000, 42, 1, 1990000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(10) NOT NULL,
  `ten_loai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(40, 'Giày Jordan'),
(41, 'Giày MLB'),
(42, 'Giày Nike'),
(43, 'Giày Adidas'),
(50, 'Giày');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_sp` int(10) NOT NULL,
  `ten_sp` varchar(100) NOT NULL,
  `gia_sp` int(10) NOT NULL,
  `giam_gia` double(3,2) NOT NULL,
  `hinh_sp` varchar(500) NOT NULL,
  `ma_loai` int(10) NOT NULL,
  `so_luong` int(5) NOT NULL,
  `size` int(2) NOT NULL,
  `mo_ta` text NOT NULL,
  `ngay_nhap` date NOT NULL,
  `so_luot_xem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`ma_sp`, `ten_sp`, `gia_sp`, `giam_gia`, `hinh_sp`, `ma_loai`, `so_luong`, `size`, `mo_ta`, `ngay_nhap`, `so_luot_xem`) VALUES
(2, ' BASAS SIMPLE LIFE NE - LOW TOP - BLACK', 490000, 0.00, 'Pro_AV00000_1.jpg', 43, 0, 0, 'Giữ vững nét tối giản đặc trưng thuộc dòng Basas, Basas Simple Life - NE (New Episode) sở hữu những đặc điểm nâng cấp ở chất liệu cùng họa tiết foxing mới, sự kết hợp tinh giản không hề đơn điệu, bình thường nhưng không tầm thường cho những ai thực sự yêu thích sự thoải mái đơn giản cho ngày dài hoạt động.\r\n', '0000-00-00', 2),
(4, 'BASAS SIMPLE LIFE NE - LOW TOP - WHITE', 490000, 0.00, 'Pro_AV00002_1-2.jpg', 43, 0, 0, 'Giữ vững nét tối giản đặc trưng thuộc dòng Basas, Basas Simple Life - NE (New Episode) sở hữu những đặc điểm nâng cấp ở chất liệu cùng họa tiết foxing mới, sự kết hợp tinh giản không hề đơn điệu, bình thường nhưng không tầm thường cho những ai thực sự yêu thích sự thoải mái đơn giản cho ngày dài hoạt động.\r\n', '0000-00-00', 1),
(6, 'GIÀY NIKE AIR FORCE 1 LOW SHADOW ', 2990000, 0.00, '20220316_qlIwfzBN6NC3Gp6l5OgsBrA9.jpeg', 42, 0, 0, 'Giày Nike Air Force 1 Low Shadow Sunset Pulse (W)\r\n\r\nNike Air Force 1 Low Shadow Sunset Pulse – Mẫu giày thể thao giúp bạn khẳng định cá tính, sự trẻ trung và năng lượng tích cực. Được thiết kế bởi Bruce Kilgore, Sunset Pulse là một bữa tiệc màu sắc với tông trắng-xanh xám chủ đạo, nổi bật trên đó là logo Nike hồng-đen và miếng lót giày cùng name tag xanh nõn chuối. Phần upper là sự kết hợp từ các chất liệu da, da lộn, vải cùng đế giày sản xuất theo công nghệ Air cho bạn sự thoải mái mỗi khi vận động. Đây thực sự là mẫu giày không thể bỏ qua với những tín đồ yêu thích dòng giày lifestyle gọn nhẹ, bền bỉ nhưng vẫn vô cùng đẹp mắt.\r\n\r\n*Thông tin sản phẩm:\r\n\r\nThương hiệu: Nike', '0000-00-00', 0),
(7, 'NIKE AIR FORCE 1 ’07 ‘WHITE UNIVERSITY RED’', 2990000, 0.00, '20220315_26tJeMN5mOn7B7v7nLWTBlL3.jpeg', 42, 0, 0, 'Giày Nike Air Force 1 ’07 ‘White University Red’\r\n\r\nNike Air Force 1 ’07 được ra đời nhằm kỷ niệm 50 năm thành lập của hãng. Với phiên bản dành cho nữ, Air Force 1 ’07 sử dụng hai gam màu trắng-hồng tạo sự tương phản, nữ tính. Nổi bật trên đó là những chi tiết bằng da, biểu tượng Swoosh và chữ “Nike” được thêu ở phần gót. Đặc biệt, phần lưỡi gà được dệt theo nguyên bản từ năm 1972 càng làm tăng sự tinh tế và hoài niệm cho đôi giày. Sẵn sàng khởi đầu một ngày mới tràn đầy năng lượng với Air Force 1 ’07 ‘White University Red’ ngay nào!\r\n\r\n*Thông tin sản phẩm:', '0000-00-00', 0),
(8, 'AIR JORDAN 1 LOW GS ‘COURT PURPLE’', 4900000, 0.00, '20220316_0h2oGvNm1RokX8AkdidgQUwF.jpg', 42, 0, 0, 'Giày Air Jordan 1 Low GS ‘Court Purple’\r\n\r\nKhông chỉ có phối màu bắt mắt, Air Jordan 1 Black Chile Red White còn có thiết kế được chăm chút vô cùng tỉ mỉ. Phần upper của  được làm từ da cao cấp với những đường cắt xẻ mạnh mẽ, tạo độ ôm vừa vặn. Những lỗ thoáng khí trên bề mặt toe box giúp bàn chân được “thở”, mang lại cảm giác thoáng mát cho cả ngày dài hoạt động.\r\n\r\n*Thông tin sản phẩm:', '0000-00-00', 0),
(9, 'NIKE AIR JORDAN 1 MID SE ‘VARSITY PURPLE’', 4290000, 0.00, '20220315_w7EFPGZ049S1i6yguUbps91Y.jpg', 42, 0, 0, '', '0000-00-00', 0),
(10, 'NIKE AIR JORDAN 1 MID BLACK CHILE RED WHITE', 4450000, 0.00, '20220315_zmQdg8IoJ2CIQhAtowsfbnzU.jpg', 42, 0, 0, 'Giày Nike Air Jordan 1 Mid Black Chile Red White\r\n\r\nKhông chỉ có phối màu bắt mắt, Air Jordan 1 Black Chile Red White còn có thiết kế được chăm chút vô cùng tỉ mỉ. Phần upper của  được làm từ da cao cấp với những đường cắt xẻ mạnh mẽ, tạo độ ôm vừa vặn. Những lỗ thoáng khí trên bề mặt toe box giúp bàn chân được “thở”, mang lại cảm giác thoáng mát cho cả ngày dài hoạt động.\r\n\r\n*Thông tin sản phẩm:\r\n\r\nThương hiệu: Nike', '0000-00-00', 0),
(11, 'NIKE AIR FORCE 1 LOW ', 2890000, 0.00, 'Giay-Nike-Air-Jordan-1-Low-GS-Ice-Blue-554723-401-7.jpg.webp', 42, 0, 0, 'Giày Nike Air Force 1 Low LV8 Indigo\r\n\r\nTừ một mầm non trở thành cây đại thụ, Low LV8 Indigo đã tái hiện thập niên 80 huy hoàng của Nike. Đôi giày sử dụng ~20% vật liệu tái chế, bao gồm vải canva và gỗ sồi cho trọng lượng nhẹ và độ bền cao. Phần đế Air-Sole được sản xuất giống với phiên bản năm 82 mang đến cái chất rất OG. Và cuối cùng là họa tiết cây chàm thêu tay trên nền trắng tạo nên một tổng thể hài hòa và vô cùng tinh tế. Vậy bạn đã sẵn sàng để bắt đầu một kỷ nguyên hoàng kim với Low LV8 Indigo chưa?\r\n*Thông tin sản phẩm:', '0000-00-00', 0),
(12, 'GIÀY NIKE AIR FORCE 1 LOW – GUCCI', 2890000, 0.00, '20220315_IWdk6r8rVPurRjEOJfQnjYRU.jpg', 43, 0, 0, 'Giày Nike Air Force 1 Low By You Custom – Gucci CT7875-994\r\n\r\nNike Air Force 1 Low By You Custom – Gucci CT7875-994 – thời trang trong từng chuyển động. Không chỉ thừa hưởng cảm giác trên chân êm ái, nhẹ nhàng của dòng giày Air Force 1, Nike còn rất chiều lòng những tín đồ thời trang với phiên bản phối màu của hãng thời trang danh tiếng Gucci. Hãy sẵn sàng chiếm trọn spotlight ở bất kỳ đâu bạn đến với đôi giày này nhé!\r\n\r\n*Thông tin sản phẩm:', '0000-00-00', 0),
(13, 'GIÀY NIKE AIR FORCE 1 LOW ’07 LV8 EMB ‘RAIDERS’', 3590000, 0.00, '20220315_2W8XoxSddIJuXJWSIpDb1sVb.jpeg', 42, 0, 0, '', '0000-00-00', 2),
(14, 'Giày Nike Air Force 1 ’07 Essential ‘White Black’ ', 3150000, 0.00, '20220315_n4uEnEgphq3MSV90ZYsrdZ5v.jpeg', 42, 0, 0, 'Giày Nike Air Force 1 ’07 Essential ‘White Black’ CZ0270-102\r\n\r\nRa mắt vào năm 1982, đôi giày Air Force 1 đã cách mạng hóa bóng rổ nói riêng và cả nền thể thao trên toàn thế giới. Ngày nay, bạn vẫn có thể tìm thấy những tinh hoa đó trên dòng giày Nike Air Force 1 ’07 Essential. Với phiên bản ‘White Black’ dành cho nữ, giày được phủ lớp sơn trắng-đen tối giản, kết hợp cùng những chi tiết màu vàng đồng tạo điểm nhấn. Lớp đệm Nike Air cho độ nảy tốt, cổ giày ôm vừa vặn cùng đế ngoài bằng cao su giúp bạn dễ dàng vận động hoặc mang hàng ngày.\r\n*Thông tin sản phẩm:', '0000-00-00', 20),
(15, 'GIÀY NIKE AIR FORCE 1 ’07 ESSENTIAL ‘RUST PINK’', 3290000, 0.00, '20220315_26tJeMN5mOn7B7v7nLWTBlL3.jpeg', 42, 0, 0, 'Giày Nike Air Force 1 ’07 Essential ‘Rust Pink’ CZ0270-103\r\n\r\nVẫn là thiết kế cổ thấp, đế Air cùng kiểu dáng quen thuộc của dòng Nike Air Force 1, tuy nhiên phiên bản “Rust Pink” đã khoác lên mình tấm áo mới vô cùng thời trang và năng động. Hai gam màu hồng gỉ và vàng đồng nổi bật trên nền trắng, vừa đủ để kích thích thị giác nhưng vẫn đảm bảo sự trẻ trung, cá tính cho người dùng. Nếu bạn là một người yêu thích phong cách casual thì đây chắc chắn là mẫu giày không thể bỏ qua!\r\n\r\n*Thông tin sản phẩm:\r\n\r\nThương hiệu: Nike', '0000-00-00', 39),
(16, 'ADIDAS ULTRA BOOST 19 TRACE KHAKI', 2490000, 0.00, '20220316_vFvmyHHN4wiziuPHMUwxfKFk.jpg', 43, 0, 0, 'Ultraboost 5.0 xám xanh – Chính hãng\r\nDòng giày chạy cải tiến thêm 20% boost ra mắt năm 2019\r\nNhững đôi giày chạy này khởi động lại các công nghệ hiệu suất chính để cung cấp cho bạn một bước chạy tự tin và tràn đầy năng lượng. Phần đan phía trên có độ vừa vặn cho làn chân và được chế tạo với công nghệ dệt chuyển động để kéo dài và hỗ trợ thích ứng. Mật độ đệm kép cung cấp hỗ trợ trung gian và một chuyến đi tràn đầy năng lượng.\r\nChất liệu: Lót đế cao su continental chống mòn, công nghệ đế boost\r\nMàu sắc: Xám xanh\r\nThích hợp: đi chơi, đi học, chạy bộ…', '0000-00-00', 0),
(17, 'ADIDAS SUPERNOVA ‘TOKYO’', 1650000, 0.00, '20220316_NwokMSjRVJdUQvk6TEJvwg4Q.jpg', 43, 0, 0, 'Giày Adidas Supernova ‘Tokyo’ là dòng giày chạy bộ nhẹ nhàng. Đôi giày mang đến sự thoải mái cho từng bước chạy với trọng lượng nhẹ, midsole EVA mềm mại, êm ái cùng phần khung giữa bàn chân được thiết kế để hỗ trợ tối đa cho chuyển động. Phần upper kết hợp chất liệu da tổng hợp và vải lưới để đem lại cảm giác thoáng mát nhưng vẫn nhẹ nhàng. Tông màu đen trắng đơn giản nhưng năng động của đôi giày cũng giúp bạn dễ dàng phối đồ theo phong cách riêng của mình.\r\n\r\n*Thông tin sản phẩm:', '0000-00-00', 0),
(18, 'ADIDAS RUNFALCON F36199', 1350000, 0.00, '20220316_GO07XtCtYy56JSNRhYFSxrDz.jpg', 43, 0, 0, 'Giày Adidas Runfalcon\r\n\r\nAdidas Runfalcon là dòng giày chạy bộ nhẹ nhàng. Đôi giày mang đến sự thoải mái cho từng bước chạy với trọng lượng nhẹ, midsole EVA mềm mại, êm ái cùng phần khung giữa bàn chân được thiết kế để hỗ trợ tối đa cho chuyển động. Phần upper kết hợp chất liệu da tổng hợp và vải lưới để đem lại cảm giác thoáng mát nhưng vẫn nhẹ nhàng. Tông màu đen trắng đơn giản nhưng năng động của đôi giày cũng giúp bạn dễ dàng phối đồ theo phong cách riêng của mình.\r\n\r\n*Thông tin sản phẩm:\r\n\r\nThương hiệu: Adidas\r\n\r\nMã sản phẩm: F36199', '0000-00-00', 0),
(19, 'ADIDAS RUN FALCON TRIPLE BLACK', 1150000, 0.00, '20220316_JHNrZrqT1TNmwPha8pIDUjjt.jpg', 43, 0, 0, 'Giày Adidas Run Falcon Triple Black\r\n\r\nGiày Adidas Run Falcon Triple Black là dòng giày thể thao được nhiều nam giới yêu thích. Đây là sản phẩm thích hợp cho các bạn hay phải vận động, tập luyện thể thao, chạy bộ…\r\n\r\n*Thông tin sản phẩm:\r\n\r\nMàu sắc: xanh đen\r\n\r\nXuất xứ sản phẩm: Hàn Quốc', '0000-00-00', 0),
(20, 'ADIDAS NMD R1 J TRIPLE WHITE FW0432', 1750000, 0.00, '20220315_JDJ978xt53DHtUNFQEAgo9Xk.jpg', 43, 0, 0, 'Giày Adidas NMD R1 J Triple White FW0432 là dòng giày thể thao được nhiều nam giới yêu thích. Đây là sản phẩm thích hợp cho các bạn hay phải vận động, tập luyện thể thao, chạy bộ…\r\n\r\n*Thông tin sản phẩm:\r\n\r\nMàu sắc: xanh đen\r\n\r\nXuất xứ sản phẩm: Hàn Quốc', '0000-00-00', 1),
(21, 'ADIDAS NMD R1 BLACK METAL GREY LUSH BLUE', 1950000, 0.00, '20220315_yUvYrgVXVTzNmmZhb7Wx3Peu.jpg', 43, 0, 0, '', '0000-00-00', 16),
(22, 'ADIDAS GRAND COURT ‘CLOUD WHITE’', 950000, 0.00, '20220315_kDLdmNemwP7zcZgXl1xugF5x.jpg', 43, 0, 0, '', '0000-00-00', 148),
(23, 'MLB BIG BALL CHUNKY GLOVES BOSTON RED SOX', 2200000, 0.00, '20220316_aENQp4ppjAhMvrTkzhOfhUYG.png', 41, 0, 0, 'Giày MLB Big Ball Chunky Gloves Boston Red Sox\r\n\r\nGiày MLB Big Ball Chunky Gloves Boston Red Sox – Sản phẩm được làm từ chất liệu cao cấp với phần đế mềm mại, êm chân, không chỉ giúp đem lại cảm giác thoải mái trên từng bước đi mà còn giúp các bạn “Ăn gian” chiều cao đáng kể. Với thiết kế màu đen phổ biến nhưng không kém phần cá tính với họa tiết Boston Red Sox độc đáo đem lại phong cách năng động, khỏe khoắn cho các bạn trẻ.\r\n\r\nThông tin sản phẩm:\r\n\r\nMàu sắc: Đen\r\n\r\nXuất xứ sản phẩm: Hàn Quốc', '0000-00-00', 0),
(24, 'MLB BIG BALL CHUNKY GLOVE NY WHITE GUM 2021', 2200000, 0.00, '20220316_F1RETtM05h3zf1IvACZ9vpny.jpg', 41, 0, 0, 'Giày MLB Big Ball Chunky Glove NY White Gum\r\nGiày MLB Big Ball Chunky Glove NY White Gum được sản xuất từ chất liệu da cao cấp, mềm mại, thoáng khí, đem lại cảm giác dễ chịu cho đôi chân. Màu trắng chủ đạo giúp bạn dễ mix đồ, tạo sự năng động, trẻ trung, khỏe khoắn. Đây là mẫu giày không thể thiếu trong tủ giày của nhiều bạn trẻ yêu thích sự năng động, mới mẻ.\r\n\r\n*Thông tin sản phẩm:\r\n\r\nMàu sắc: Trắng\r\n\r\nXuất xứ sản phẩm: Hàn Quốc\r\n\r\nMã sản phẩm: 32SHCP111-50I', '0000-00-00', 0),
(25, ' MLB BIG BALL CHUNKY EMBOSS BOSTON RED SOX', 1935000, 0.00, '20220316_dICWPmLXjbPYO3pRpU1Wb9gz.png', 41, 0, 0, 'Giày MLB Big Ball Chunky Emboss Boston Red Sox\r\n\r\nMLB Big Ball Chunky Emboss Boston Red Sox – Sản phẩm giày thể thao được nhiều bạn trẻ yêu thích, với màu trắng cao cấp và họa tiết chữ B màu đỏ nổi bật trên thân giày. Với thiết kế từ chất liệu cao cấp, độ bền và độ êm cao, đây chắc chắn là mẫu giày không thể thiếu trong tủ đồ của bạn.\r\n\r\n*Thông tin sản phẩm:\r\n\r\nMÀU SẮC: Trắng\r\n\r\nXuất xứ sản phẩm: Hàn Quốc', '0000-00-00', 0),
(26, 'MLB BIG BALL CHUNKY COOKIE NEW YORK YANKEES', 3000000, 0.00, '20220316_fxYIZAEqxsbznEnL7cCAft6y.png', 41, 0, 0, 'Giày MLB Big Ball Chunky Cookie New York Yankees\r\n\r\nMLB Big Ball Chunky Cookie New York Yankees – sản phẩm giày đến từ thương hiệu MLB đang làm mưa làm gió trên thị trường giày thể thao hiện nay. Dòng sản phẩm mang hơi thở trẻ trung, hiện đại và năng động, trở thành lựa chọn hàng đầu của nhiều bạn trẻ muốn thể hiện phong cách của riêng mình.\r\n\r\n*Thông tin sản phẩm:\r\n\r\nMÀU SẮC: Đen\r\n\r\nXuất xứ sản phẩm: Hàn Quốc', '0000-00-00', 0),
(27, 'MLB BIG BALL CHUNKY BOSTON RED SOX', 2500000, 0.00, '20220316_3ucY7f9PSljoD7EaEy6bqRvo.jpg', 41, 0, 0, 'Giày MLB Big Ball Chunky Boston Red Sox\r\n\r\nBig Ball Chunky Boston Red Sox – Mẫu giày MLB đang được rất nhiều chị em yêu thích. Với họa tiết chữ B màu đỏ nổi bật và đầy cá tính, mẫu giày đến từ thương hiệu MLB này đem lại một phong cách vừa trẻ trung, năng động, độc đáo. Bên cạnh đó, sản phẩm này cũng không kém phần tinh tế và nhẹ nhàng nhờ vào tone màu trắng kem.\r\n\r\n*Thông tin sản phẩm:\r\n\r\nThương hiệu: MLB\r\n\r\nMã sản phẩm: 32SHCL111-43P', '0000-00-00', 0),
(28, 'MLB BIG BALL CHUNKY A NY YANKEES', 2000000, 0.00, '20220316_6CDrkoQI7P0XwDBenBYqHV1d.jpg', 41, 0, 0, 'Xuất xứ sản phẩm: Hàn Quốc\r\n\r\nMã sản phẩm: 32SHC1011-50B\r\n\r\n*Cam kết sản phẩm:\r\n\r\nNhanh chỉ bán hàng 100% Chính hãng. Bao check trọn đời sản phẩm.\r\n\r\nĐược nhập qua đường hàng không từ các nước Anh, Mỹ, Nhật, Hàn,… Hàng Fullbox và phụ kiện kèm theo.\r\nnhanh luôn chịu trách nhiệm với những sản phẩm bán ra. Nếu khách hàng phát hiện hàng giả, hàng nhái, Dee sẽ đền tiền gấp 3 lần giá trị sản phẩm.\r\nGiao hàng COD toàn quốc. Nhận hàng, kiểm hàng rồi thanh toán.', '0000-00-00', 4),
(29, 'MLB BIG BALL CHUNKY A NEW YORK YANKEES', 2099000, 0.00, '20220316_dICWPmLXjbPYO3pRpU1Wb9gz.png', 41, 0, 0, 'Xuất xứ sản phẩm: Hàn Quốc\r\n\r\nMã sản phẩm: 32SHC1011-50B\r\n\r\n*Cam kết sản phẩm:\r\n\r\nNhanh.vn chỉ bán hàng 100% Chính hãng. Bao check trọn đời sản phẩm.\r\n\r\nĐược nhập qua đường hàng không từ các nước Anh, Mỹ, Nhật, Hàn,… Hàng Fullbox và phụ kiện kèm theo.\r\nNhanh luôn chịu trách nhiệm với những sản phẩm bán ra. Nếu khách hàng phát hiện hàng giả, hàng nhái, Dee sẽ đền tiền gấp 3 lần giá trị sản phẩm.\r\nGiao hàng COD toàn quốc. Nhận hàng, kiểm hàng rồi thanh toán.', '0000-00-00', 29),
(30, 'MLB BIG BALL CHUNKY A NEW YORK', 1990000, 0.00, '20220316_pGIJ8ZL4iHSENNFaxzqnYZHB.webp', 41, 0, 0, 'Giày MLB Big Ball Chunky A New York Yankees 2020\r\n\r\nXuất xứ sản phẩm: Hàn Quốc\r\n\r\nMã sản phẩm: 32SHC1011-50B\r\n\r\n*Cam kết sản phẩm:\r\n\r\nNhanh.vn chỉ bán hàng 100% Chính hãng. Bao check trọn đời sản phẩm.\r\n\r\nĐược nhập qua đường hàng không từ các nước Anh, Mỹ, Nhật, Hàn,… Hàng Fullbox và phụ kiện kèm theo.\r\nNhanh luôn chịu trách nhiệm với những sản phẩm bán ra. Nếu khách hàng phát hiện hàng giả, hàng nhái, Dee sẽ đền tiền gấp 3 lần giá trị sản phẩm.\r\nGiao hàng COD toàn quốc. Nhận hàng, kiểm hàng rồi thanh toán.', '0000-00-00', 31),
(31, 'Air Jordan 1 Mid ‘Gym Red Black Toe’', 4800000, 0.00, 'gia-air-jordan-1-retro-low-og-black-toe-2023-cz0858-106.png', 40, 0, 0, 'Chất liệu: Giày được làm từ chất liệu da cao cấp và các vật liệu đặc biệt khác, mang đến tính thoải mái và độ bền khi mặc và vận động.\r\nThiết kế: Thiết kế của giày Air Jordan 1 Mid thường có sự kết hợp giữa cổ điển và hiện đại, với đường nét sắc sảo và đặc trưng của dòng Air Jordan. Thiết kế cắt trung với cổ giày thấp mang đến sự thoải mái trong việc mặc và di chuyển.', '0000-00-00', 0),
(32, 'Air Jordan 1 Mid University ‘Blue’ ', 4890000, 0.00, 'Giay-Air-Jordan-1-Mid-University-Blue-DQ8426-401-5.jpg.webp', 40, 0, 0, 'Chất liệu: Giày được làm từ chất liệu da cao cấp và các vật liệu đặc biệt khác, mang đến tính thoải mái và độ bền khi mặc và vận động.\r\nThiết kế: Thiết kế của giày Air Jordan 1 Mid thường có sự kết hợp giữa cổ điển và hiện đại, với đường nét sắc sảo và đặc trưng của dòng Air Jordan. Thiết kế cắt trung với cổ giày thấp mang đến sự thoải mái trong việc mặc và di chuyển.', '0000-00-00', 0),
(33, 'Air Jordan 1 x Off-White Retro High', 1890000, 0.00, 'Giay-Nike-Air-Jordan-1-Retro-High-OG-Lost-Found-DZ5485-612.jpg.webp', 40, 0, 0, 'Thiết kế sáng tạo: Giày được thiết kế với phong cách Off-White đặc trưng của Virgil Abloh, với các chi tiết xướng tên, dây giày trang trí và logo bản quyền nổi bật, tạo nên vẻ ngoài độc đáo và hiện đại.\r\nMàu sắc ‘Chicago’ cổ điển: Giày lấy cảm hứng từ màu sắc truyền thống của Chicago Bulls – một trong những đội bóng rổ mà Michael Jordan đã chơi và nổi tiếng nhất trong sự nghiệp của ông.\r\nCông nghệ Air Sole: Giày Air Jordan 1 x Off-White Retro High OG được trang bị công nghệ Air Sole trong đế giày, giúp cung cấp sự thoải mái và hỗ trợ tốt cho đôi chân.', '0000-00-00', 0),
(34, 'AIR JORDAN 7 RETRO ‘RAY ALLEN’ ', 11000000, 0.00, 'giay-air-jordan-7-retro-ray-allen-pe-304775-053.png.webp', 40, 0, 0, 'Thiết kế và chất liệu: Giày AIR JORDAN 7 RETRO ‘RAY ALLEN’ PE 304775-053 được thiết kế với cấu trúc phần cổ cao, tôn vinh vẻ đẹp và sức mạnh của phong cách Air Jordan 7. Phần trên của giày được chế tạo từ chất liệu da cao cấp kết hợp với lưới thoáng khí, đảm bảo sự thoải mái và độ bền cao trong suốt quá trình sử dụng. Màu sắc chủ đạo là đen đậm, tạo nên sự sang trọng và lịch lãm.\r\n\r\nChi tiết và họa tiết: Giày ‘RAY ALLEN’ PE 304775-053 nổi bật với các chi tiết họa tiết và logo đặc trưng trên thân giày. Từ logo Jumpman quen thuộc ở ngón chân đến số 34 kỷ niệm của Ray Allen ở phần gót giày, mỗi chi tiết đều thể hiện sự tôn vinh và kỷ niệm về huyền thoại bóng rổ này.', '0000-00-00', 0),
(35, 'Nike Air Jordan 1 High Zoom Air CMFT 2', 5900000, 0.00, 'Giay-Nike-Air-Jordan-1-High-Zoom-Air-CMFT-2-Black-Fire-Red-Cement-DV1307-060.jpg.webp', 40, 0, 0, 'Nike Air Jordan 1 với lịch sử hơn 30 năm luôn được nhìn nhận như một trong những dòng sản phẩm thành công nhất của Nike. Nike Jordan 1 luôn bán hết một cách nhanh chóng ngay từ khi ra mắt đến nay, luôn là sản phẩm được các tín đồ thời trang chú ý hàng đầu. Air Jordan được đặt dựa theo ngôi sao bóng rổ lừng danh Michael Jordan – huyền thoại của NBA.\r\n\r\nCó bao giờ bạn tự hỏi rằng tại sao Jordan 1 lại có sức hút như vậy? Tại sao Jordan 1 luôn sold out rất nhanh và có giá resell cao ngất ngưởng?', '0000-00-00', 0),
(36, 'Nike Air Jordan 1 Retro High 85 ', 10990000, 0.00, 'Giay-Nike-Air-Jordan-1-Retro-High-85-Black-White-BQ4422-001.jpg.webp', 40, 0, 0, 'Nike Air Jordan 1 với lịch sử hơn 30 năm luôn được nhìn nhận như một trong những dòng sản phẩm thành công nhất của Nike. Nike Jordan 1 luôn bán hết một cách nhanh chóng ngay từ khi ra mắt đến nay, luôn là sản phẩm được các tín đồ thời trang chú ý hàng đầu. Air Jordan được đặt dựa theo ngôi sao bóng rổ lừng danh Michael Jordan – huyền thoại của NBA.\r\n\r\nCó bao giờ bạn tự hỏi rằng tại sao Jordan 1 lại có sức hút như vậy? Tại sao Jordan 1 luôn sold out rất nhanh và có giá resell cao ngất ngưởng?', '0000-00-00', 0),
(37, 'Nike Air Jordan 1 High ‘AJKO Storm Blue’', 8690000, 0.00, 'Giay-Nike-Air-Jordan-1-High-AJKO-Storm-Blue-DO5047-401.jpg.webp', 40, 0, 0, 'Nike Air Jordan 1 với lịch sử hơn 30 năm luôn được nhìn nhận như một trong những dòng sản phẩm thành công nhất của Nike. Nike Jordan 1 luôn bán hết một cách nhanh chóng ngay từ khi ra mắt đến nay, luôn là sản phẩm được các tín đồ thời trang chú ý hàng đầu. Air Jordan được đặt dựa theo ngôi sao bóng rổ lừng danh Michael Jordan – huyền thoại của NBA.\r\n\r\nCó bao giờ bạn tự hỏi rằng tại sao Jordan 1 lại có sức hút như vậy? Tại sao Jordan 1 luôn sold out rất nhanh và có giá resell cao ngất ngưởng?', '0000-00-00', 0),
(38, 'Nike Air Jordan 1 Retro High OG ', 4890000, 0.00, 'Giay-Nike-Air-Jordan-1-Retro-High-OG-Dark-Marina-Blue-555088-404.jpg.webp', 40, 0, 0, 'Nike Air Jordan 1 với lịch sử hơn 30 năm luôn được nhìn nhận như một trong những dòng sản phẩm thành công nhất của Nike. Nike Jordan 1 luôn bán hết một cách nhanh chóng ngay từ khi ra mắt đến nay, luôn là sản phẩm được các tín đồ thời trang chú ý hàng đầu. Air Jordan được đặt dựa theo ngôi sao bóng rổ lừng danh Michael Jordan – huyền thoại của NBA.\r\n\r\nCó bao giờ bạn tự hỏi rằng tại sao Jordan 1 lại có sức hút như vậy? Tại sao Jordan 1 luôn sold out rất nhanh và có giá resell cao ngất ngưởng?', '0000-00-00', 0),
(39, 'Nike Air Jordan 1 Retro High OG ', 12490000, 0.00, 'Giay-Nike-Air-Jordan-1-Retro-High-OG-Lost-Found-DZ5485-612.jpg.webp', 40, 0, 0, 'Nike Air Jordan 1 với lịch sử hơn 30 năm luôn được nhìn nhận như một trong những dòng sản phẩm thành công nhất của Nike. Nike Jordan 1 luôn bán hết một cách nhanh chóng ngay từ khi ra mắt đến nay, luôn là sản phẩm được các tín đồ thời trang chú ý hàng đầu. Air Jordan được đặt dựa theo ngôi sao bóng rổ lừng danh Michael Jordan – huyền thoại của NBA.\r\n\r\nCó bao giờ bạn tự hỏi rằng tại sao Jordan 1 lại có sức hút như vậy? Tại sao Jordan 1 luôn sold out rất nhanh và có giá resell cao ngất ngưởng?', '0000-00-00', 0),
(40, 'Jordan 1 Retro High OG SP Utility Stash', 12498000, 0.00, 'Giay-Jordan-1-Retro-High-OG-SP-Utility-Stash-DN4336-001.jpg.webp', 40, 0, 0, 'Giày Jordan 1 Retro High OG SP Utility Stash DN4336-001 hiện đã có sẵn tại Sneaker Daily Shop với mức giá hấp dẫn, đừng bỏ lỡ cơ hội của mình nhé!\r\n\r\nCập nhật nhanh nhất lịch ra mắt của các mẫu giày mới nhất và tin tức thời trang trong nước và trên thế giới bằng cách theo dõi Sneaker Daily trên Facebook hoặc Instagram.', '0000-00-00', 0),
(41, ' Nike Air Jordan 1 Retro High OG Top 3', 23490000, 0.00, 'giay-nike-air-jordan-1-retro-high-og-top-3-white-blue-red-555088-026-2.jpg.webp', 40, 0, 0, 'Nike Air Jordan 1 với lịch sử hơn 30 năm luôn được nhìn nhận như một trong những dòng sản phẩm thành công nhất của Nike. Nike Jordan 1 luôn bán hết một cách nhanh chóng ngay từ khi ra mắt đến nay, luôn là sản phẩm được các tín đồ thời trang chú ý hàng đầu. Air Jordan được đặt dựa theo ngôi sao bóng rổ lừng danh Michael Jordan – huyền thoại của NBA.\r\n\r\nCó bao giờ bạn tự hỏi rằng tại sao Jordan 1 lại có sức hút như vậy? Tại sao Jordan 1 luôn sold out rất nhanh và có giá resell cao ngất ngưởng?', '0000-00-00', 0),
(42, 'AIR JORDAN 1 RETRO LOW OG', 4290000, 0.00, 'Giay-Nike-Jordan-1-Low-Reverse-Black-Toe-W-DC0774-160.jpg.webp', 40, 0, 0, 'Không chỉ đẹp mắt mà AIR JORDAN 1 RETRO LOW OG ‘BLACK TOE 2023’ CZ0858-106 còn mang đến sự thoải mái và hỗ trợ tối đa khi sử dụng hàng ngày hoặc tham gia các hoạt động thể thao. Được chế tác với chất liệu cao cấp và hệ thống đệm Air giữa đế giày, đôi giày này giúp giảm thiểu cảm giác mệt mỏi và mang lại sự thoải mái cho đôi chân của bạn mỗi khi bước chân ra đường.\r\n\r\nAIR JORDAN 1 RETRO LOW OG ‘BLACK TOE 2023’ CZ0858-106 không chỉ là một chiếc giày, mà còn là biểu tượng về sự đam mê và niềm tự hào trong văn hóa sneaker. Đối với những người yêu thích Air Jordan và Jordan Brand, đôi giày này thực sự là một món đồ giá trị trong bộ sưu tập sneaker của họ', '0000-00-00', 0),
(43, 'Air Jordan 1 Retro Low ‘Obsidian Ember Glow’', 4490000, 0.00, 'main-square_a23b9da8-23d5-4683-a.jpg.webp', 40, 0, 0, 'Giày Air Jordan 1 Retro Low ‘Obsidian Ember Glow’ hiện đã có sẵn tại Sneaker Daily Shop với mức giá hấp dẫn, đừng bỏ lỡ cơ hội của mình nhé!\r\n\r\nCập nhật nhanh nhất lịch ra mắt của các mẫu giày mới nhất và tin tức thời trang trong nước và trên thế giới bằng cách theo dõi Sneaker Daily trên Facebook hoặc Instagram.', '0000-00-00', 0),
(44, 'Nike Jordan 1 Low Reverse Black Toe ', 4090000, 0.00, 'gia-air-jordan-1-retro-low-og-black-toe-2023-cz0858-106-1.png.webp', 40, 0, 0, '', '0000-00-00', 0),
(45, 'Nike Air Jordan 1 Low SE GS', 5890000, 0.00, 'products_1(2).jpeg', 40, 0, 0, 'Nike Air Jordan 1 với lịch sử hơn 30 năm luôn được nhìn nhận như một trong những dòng sản phẩm thành công nhất của Nike. Nike Jordan 1 luôn bán hết một cách nhanh chóng ngay từ khi ra mắt đến nay, luôn là sản phẩm được các tín đồ thời trang chú ý hàng đầu. Air Jordan được đặt dựa theo ngôi sao bóng rổ lừng danh Michael Jordan – huyền thoại của NBA.', '0000-00-00', 13),
(46, 'Nike Air Jordan 1 Low GS “Pinksicle”', 2590000, 0.00, '20220316_Ff3YEod3loCMeQmpAh7NFuEq.jpeg', 40, 0, 0, 'Giày Nike Air Jordan 1 Low GS “Pinksicle” DR9498-168 hiện đã có sẵn tại Sneaker Daily Shop với mức giá hấp dẫn, đừng bỏ lỡ cơ hội của mình nhé!\r\n\r\nCập nhật nhanh nhất lịch ra mắt của các mẫu giày mới nhất và tin tức thời trang trong nước và trên thế giới bằng cách theo dõi Sneaker Daily trên Facebook hoặc Instagram.', '0000-00-00', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `ma_tk` int(10) NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mat_khau` varchar(32) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `dia_chi` varchar(200) NOT NULL,
  `vai_tro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`ma_tk`, `ho_ten`, `email`, `mat_khau`, `sdt`, `ngay_sinh`, `dia_chi`, `vai_tro`) VALUES
(83, 'Phạm Ngọc Sơn', 'sonp30176@gmail.com', '1234567890', '0326481136', '0000-00-00', 'Ngõ 2 Phố Nguyên Xá, Nguyên Xá, Minh Khai, Từ Liêm, Hà Nội', 1),
(84, 'Trần Trung Hiếu', 'sonp89999@gmail.com', '1234567890', '0989950358', '0000-00-00', 'Ngõ 2 Phố Nguyên Xá, Nguyên Xá, Minh Khai, Từ Liêm, Hà Nội', 0),
(85, 'Truong An', 'annttph29957@fpt.edu.vn', '123456', '0365113793', '0000-00-00', 'ád', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thu_vien_anh`
--

CREATE TABLE `thu_vien_anh` (
  `ma_tv` int(10) NOT NULL,
  `ma_sp` int(10) NOT NULL,
  `anh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thu_vien_anh`
--

INSERT INTO `thu_vien_anh` (`ma_tv`, `ma_sp`, `anh`) VALUES
(1, 2, 'adidas_product_6.jpg'),
(2, 2, 'adidas_product_7.jpg'),
(15, 46, '20220316_Ff3YEod3loCMeQmpAh7NFuEq.jpeg'),
(16, 46, '20220316_LIUstYYzN7jFrPi0dvtHPvtb.jpg'),
(17, 46, '20220316_uADNWYmWUdWy385zq1I0mWkH.jpeg'),
(18, 46, 'Giay-Nike-Air-Jordan-1-Low-GS-Pinksicle-DR9498-168-10.jpg.webp'),
(19, 4, 'Pro_AV00002_1-2.jpg'),
(20, 4, 'Pro_AV00002_2.jpg'),
(21, 4, 'Pro_AV00002_3.jpg'),
(22, 6, '20220316_qlIwfzBN6NC3Gp6l5OgsBrA9.jpeg'),
(23, 6, '20220316_qt3J95uzueNp9xczQZySP7H6.jpeg'),
(24, 45, 'products_1(2).jpeg'),
(25, 45, 'products_1(3).jpeg'),
(26, 45, 'products_1(4).jpeg'),
(27, 44, 'gia-air-jordan-1-retro-low-og-black-toe-2023-cz0858-106-1.png.webp'),
(28, 44, 'gia-air-jordan-1-retro-low-og-black-toe-2023-cz0858-106-2.png.webp'),
(29, 44, 'gia-air-jordan-1-retro-low-og-black-toe-2023-cz0858-106-3.png.webp'),
(30, 44, 'gia-air-jordan-1-retro-low-og-black-toe-2023-cz0858-106-1.png.webp'),
(31, 44, 'gia-air-jordan-1-retro-low-og-black-toe-2023-cz0858-106-2.png.webp'),
(32, 44, 'gia-air-jordan-1-retro-low-og-black-toe-2023-cz0858-106-3.png.webp'),
(33, 43, '1_0fe22d82-ab81-4034-889d-698983.jpg.webp'),
(34, 43, '2_1514516c-8537-457c-bbd5-df3822.jpg.webp'),
(35, 43, '1_0fe22d82-ab81-4034-889d-698983.jpg.webp'),
(36, 43, '2_1514516c-8537-457c-bbd5-df3822.jpg.webp'),
(37, 43, '1_0fe22d82-ab81-4034-889d-698983.jpg.webp'),
(38, 43, '2_1514516c-8537-457c-bbd5-df3822.jpg.webp'),
(39, 43, '1_0fe22d82-ab81-4034-889d-698983.jpg.webp'),
(40, 43, '2_1514516c-8537-457c-bbd5-df3822.jpg.webp'),
(41, 42, 'giay-nike-jordan-1-low-reverse-black-toe-w-dc0774-160-1.png.webp'),
(42, 42, 'giay-nike-jordan-1-low-reverse-black-toe-w-dc0774-160-5.png.webp'),
(43, 42, 'giay-nike-jordan-1-low-reverse-black-toe-w-dc0774-160-10.png.webp'),
(44, 41, 'giay-nike-air-jordan-1-retro-high-og-top-3-white-blue-red-555088-026-2.jpg.webp'),
(45, 41, 'giay-nike-air-jordan-1-retro-high-og-top-3-white-blue-red-555088-026-3.jpg.webp'),
(46, 40, '6-8.jpg.webp'),
(47, 40, '7-7.jpg.webp'),
(48, 39, 'Giay-Nike-Air-Jordan-1-Retro-High-OG-Lost-Found-DZ5485-612.jpg.webp'),
(49, 39, 'IMG_9997-scaled.jpg.webp'),
(50, 39, 'IMG_9998-scaled.jpg.webp'),
(51, 38, 'Giay-Nike-Air-Jordan-1-Retro-High-OG-Dark-Marina-Blue-555088-404.jpg.webp'),
(52, 38, 'giay-nike-air-jordan-1-retro-high-og-dark-marina-blue-555088-404-4.png.webp'),
(53, 38, 'giay-nike-air-jordan-1-retro-high-og-dark-marina-blue-555088-404-6.png.webp'),
(54, 37, 'Giay-Nike-Air-Jordan-1-High-AJKO-Storm-Blue-DO5047-401.jpg.webp'),
(55, 37, 'giay-nike-air-jordan-1-high-ajko-storm-blue-do5047-401-2.jpg.webp'),
(56, 36, 'Giay-Nike-Air-Jordan-1-Retro-High-85-Black-White-BQ4422-001.jpg.webp'),
(57, 36, 'giay-nike-air-jordan-1-retro-high-85-black-white-bq4422-001-7.jpg.webp'),
(58, 36, 'Giay-Nike-Air-Jordan-1-Retro-High-85-Black-White-BQ4422-001.jpg.webp'),
(59, 36, 'giay-nike-air-jordan-1-retro-high-85-black-white-bq4422-001-7.jpg.webp'),
(60, 35, 'Giay-Nike-Air-Jordan-1-High-Zoom-Air-CMFT-2-Black-Fire-Red-Cement-DV1307-060.jpg.webp'),
(61, 35, 'giay-nike-air-jordan-1-high-zoom-air-cmft-2-black-fire-red-cement-dv1307-060-7.png.webp'),
(62, 35, 'giay-nike-air-jordan-1-high-zoom-air-cmft-2-black-fire-red-cement-dv1307-060-8.png.webp'),
(63, 35, 'giay-nike-air-jordan-1-high-zoom-air-cmft-2-black-fire-red-cement-dv1307-060-9.png.webp'),
(64, 34, 'giay-air-jordan-7-retro-ray-allen-pe-304775-053-2.png.webp'),
(65, 34, 'giay-air-jordan-7-retro-ray-allen-pe-304775-053-3.png.webp'),
(66, 33, 'Giay-Air-Jordan-1-x-Off-White-Retro-High-OG-Chicago-AA3834-101.jpg.webp'),
(67, 33, 'Giay-Air-Jordan-1-x-Off-White-Retro-High-OG-Chicago-AA3834-101-4.jpg.webp'),
(68, 33, 'Giay-Air-Jordan-1-x-Off-White-Retro-High-OG-Chicago-AA3834-101-7.jpg.webp'),
(69, 32, 'Giay-Air-Jordan-1-Mid-University-Blue-DQ8426-401-2.jpg.webp'),
(70, 32, 'Giay-Air-Jordan-1-Mid-University-Blue-DQ8426-401-3.jpg.webp'),
(71, 32, 'Giay-Air-Jordan-1-Mid-University-Blue-DQ8426-401-5.jpg.webp'),
(72, 31, 'gia-air-jordan-1-retro-low-og-black-toe-2023-cz0858-106-3.png.webp'),
(73, 31, 'giay-air-jordan-1-mid-gym-red-black-toe-dq8426-106.jpg.webp'),
(74, 31, 'Giay-Air-Jordan-1-Mid-Gym-Red-Black-Toe-DQ8426-106-1.jpg.webp'),
(75, 31, 'Giay-Air-Jordan-1-Mid-Gym-Red-Black-Toe-DQ8426-106-2.jpg.webp'),
(76, 31, 'gia-air-jordan-1-retro-low-og-black-toe-2023-cz0858-106-3.png.webp'),
(77, 31, 'giay-air-jordan-1-mid-gym-red-black-toe-dq8426-106.jpg.webp'),
(78, 31, 'Giay-Air-Jordan-1-Mid-Gym-Red-Black-Toe-DQ8426-106-1.jpg.webp'),
(79, 31, 'Giay-Air-Jordan-1-Mid-Gym-Red-Black-Toe-DQ8426-106-2.jpg.webp'),
(80, 30, '20220316_C1s1hkJt9DbA6lrIwJKCKLLT (1).webp'),
(81, 30, '20220316_JleTkwE5UcxHnLSTYO4KAuER.webp'),
(82, 30, '20220316_pGIJ8ZL4iHSENNFaxzqnYZHB (1).webp'),
(83, 29, '20220316_Hicc9ALSrb5SMVHnooCAjlCL.jpg'),
(84, 29, '20220316_vjmsI8edI7zuY4PgqqKgGKiM.png'),
(85, 29, '20220316_VWh38RDTjVqesYgqjx6j3VER.png'),
(86, 28, '20220316_6CDrkoQI7P0XwDBenBYqHV1d.jpg'),
(87, 28, '20220316_iReJsSRpYIMQOIsI5LSMWbjh.jpg'),
(88, 28, '20220316_QapfyLM2eEdJy4E0Pm8lzgIj.jpg'),
(89, 6, '20220315_O5DQ6ESLM1kdXYGGsbD7D4Lv.jpeg'),
(90, 6, '20220315_xAGckuK1jQsNQv4w3LaOA98H.jpeg'),
(91, 6, '20220315_XFtAtvTltquSvBWCEdC51dGF.jpeg'),
(92, 7, '20220315_26tJeMN5mOn7B7v7nLWTBlL3.jpeg'),
(93, 7, '20220315_EsI47vWk62ygdt7Z86pPJKon.jpeg'),
(94, 7, '20220315_ublTbMkFlVbXIPLoktTtJ1MX.jpeg'),
(95, 27, '20220316_3ucY7f9PSljoD7EaEy6bqRvo.jpg'),
(96, 27, '20220316_BRilRSKHXjY4uSsmD8bemu7U.jpg'),
(97, 27, '20220316_GZROMrKBkEUzu2p1OomYFUC1.jpg'),
(98, 27, '20220316_oW4eZlfipORXgXg50GEVTU84.jpg'),
(99, 26, '20220316_fxYIZAEqxsbznEnL7cCAft6y.png'),
(100, 26, '20220316_WT7FIiGqRuacbHLMt6LQ9EwU.png'),
(101, 25, '20220316_cUAGqj2tTNVaKOqJS01DO7XL.jpeg'),
(102, 25, '20220316_dICWPmLXjbPYO3pRpU1Wb9gz.png'),
(103, 25, '20220316_F1RETtM05h3zf1IvACZ9vpny.jpg'),
(104, 24, '20220316_Hicc9ALSrb5SMVHnooCAjlCL.jpg'),
(105, 24, '20220316_jppKNzQIWlCcl9NLvkmJYpMw.webp'),
(106, 24, '20220316_tS5Js3QHGyJn0Z87ee6YK89A.png'),
(107, 24, '20220316_Zs1cGzPnu7Ng3eBIUIXK71HD.webp'),
(108, 8, '20220316_0h2oGvNm1RokX8AkdidgQUwF.jpg'),
(109, 8, '20220316_sIIAzJMREarfDPevcMpJbXGV.jpg'),
(110, 23, '20220316_aENQp4ppjAhMvrTkzhOfhUYG.png'),
(111, 23, '20220316_bblPWLUbUnhVf3KBEBehyzek.png'),
(112, 22, '20220315_8zXcEIFLlL2Ff0FJAwxeosbz.jpg'),
(113, 22, '20220315_kDLdmNemwP7zcZgXl1xugF5x.jpg'),
(114, 22, '20220315_QVcKkrH9qN4EIXbj8Egk6eyP.jpg'),
(115, 22, '20220315_xWW2foxYn3vU3RZeCrsk7qiG.jpg'),
(116, 21, '20220315_Pn8zW05HeDTadzx0xYHkyD1b.jpg'),
(117, 21, '20220315_R2hMtQUi85zaNBY4wOknGgel.jpg'),
(118, 21, '20220315_yUvYrgVXVTzNmmZhb7Wx3Peu.jpg'),
(119, 20, '20220315_8hxH6scGk1SYjS4MukVXPmbC.jpg'),
(120, 20, '20220315_JDJ978xt53DHtUNFQEAgo9Xk (1).jpg'),
(121, 19, '20220316_JHNrZrqT1TNmwPha8pIDUjjt.jpg'),
(122, 19, '20220316_y9XdCU9ZvLlkxXaRJv0GtPWP.jpg'),
(123, 18, '20220316_GO07XtCtYy56JSNRhYFSxrDz.jpg'),
(124, 18, '20220316_JHNrZrqT1TNmwPha8pIDUjjt.jpg'),
(125, 18, '20220316_OTAvND54J2noMzpYxf4Ov6aR.jpg'),
(126, 18, '20220316_RoHa9KVOcsm7vY62eGnDYiN9.jpg'),
(127, 17, '20220316_Awy4002uvEelNh9hFrVKIf2y.jpg'),
(128, 17, '20220316_j3FDxuyVicArr3YEybrF9wKD.jpg'),
(129, 17, '20220316_NwokMSjRVJdUQvk6TEJvwg4Q.jpg'),
(130, 17, '20220316_tFPZ25bt0gTNBnmd3Qr5JNDe.jpg'),
(131, 16, '20220316_iEpdV7bWV0VC830fm4KlnIza.jpg'),
(132, 16, '20220316_UamLKWPB2fUVNyHHxbCP7Anb.jpg'),
(133, 16, '20220316_vFvmyHHN4wiziuPHMUwxfKFk.jpg'),
(134, 15, '20220315_26tJeMN5mOn7B7v7nLWTBlL3.jpeg'),
(135, 15, '20220315_ublTbMkFlVbXIPLoktTtJ1MX.jpeg'),
(136, 15, '20220316_Ff3YEod3loCMeQmpAh7NFuEq.jpeg'),
(137, 14, '20220315_n4uEnEgphq3MSV90ZYsrdZ5v.jpeg'),
(138, 14, '20220315_n9fu4HGaNUyPFEk6BUp8VpHV.jpeg'),
(139, 14, '20220315_oyzUwcPEnXgtH1BQk6OHdXJq.jpeg'),
(140, 14, '20220315_VnABUUazfFzby1AScpOS7wfu.jpeg'),
(141, 13, '20220315_2W8XoxSddIJuXJWSIpDb1sVb.jpeg'),
(142, 13, '20220315_60DcbBT0xGVRraML3sXGtzgS.jpeg'),
(143, 13, '20220315_lnpdjhK9w0DQunGBZRnt6qkz.jpeg'),
(144, 13, '20220315_p2B2R0C2BDYlGDoWrtw2VJkA.jpeg'),
(145, 12, '20220315_5oFnVT9rnnEWDnpsNKG2FEEz.jpeg'),
(146, 12, '20220315_IWdk6r8rVPurRjEOJfQnjYRU.jpg'),
(147, 12, '20220315_mEHtOW4ekLsuXIHP6F0FnY9v.jpeg'),
(148, 12, '20220315_vCOLDcGwlmSM7vcY2umuXDtG.jpg'),
(149, 11, '20220315_O5DQ6ESLM1kdXYGGsbD7D4Lv.jpeg'),
(150, 11, '20220315_OoS9Ip7yfS25snvTQPrOItE5.jpeg'),
(151, 11, '20220315_xAGckuK1jQsNQv4w3LaOA98H.jpeg'),
(152, 11, '20220315_XFtAtvTltquSvBWCEdC51dGF.jpeg'),
(153, 10, '20220315_zmQdg8IoJ2CIQhAtowsfbnzU.jpg'),
(154, 9, '20220315_IETS1Pi4TvD5Wf7Phdk0ajv3.jpg'),
(155, 9, '20220315_llJwIqVrHPtJMUgqpMJBmRUA.jpg'),
(156, 9, '20220315_w7EFPGZ049S1i6yguUbps91Y.jpg'),
(157, 43, 'giay-air-jordan-1-retro-low-obsidian-ember-glow-553558-481.jpg.webp'),
(158, 43, 'main-square_a23b9da8-23d5-4683-a.jpg.webp'),
(159, 40, '6-8.jpg.webp'),
(160, 40, '7-7.jpg.webp'),
(161, 40, '8-7.jpg.webp'),
(162, 40, 'Giay-Jordan-1-Retro-High-OG-SP-Utility-Stash-DN4336-001.jpg.webp'),
(163, 40, '6-8.jpg.webp'),
(164, 40, '7-7.jpg.webp'),
(165, 40, 'Giay-Jordan-1-Retro-High-OG-SP-Utility-Stash-DN4336-001.jpg.webp'),
(166, 40, 'Giay-Jordan-1-Retro-High-OG-SP-Utility-Stash-DN4336-001.jpg.webp'),
(167, 34, 'giay-air-jordan-7-retro-ray-allen-pe-304775-053.png.webp'),
(169, 32, 'Giay-Air-Jordan-1-Mid-University-Blue-DQ8426-401-5.jpg.webp'),
(170, 43, 'main-square_a23b9da8-23d5-4683-a.jpg.webp'),
(171, 31, 'gia-air-jordan-1-retro-low-og-black-toe-2023-cz0858-106.png'),
(172, 42, 'Giay-Nike-Jordan-1-Low-Reverse-Black-Toe-W-DC0774-160.jpg.webp'),
(173, 25, '20220316_dICWPmLXjbPYO3pRpU1Wb9gz.png'),
(174, 30, '20220316_pGIJ8ZL4iHSENNFaxzqnYZHB.webp'),
(175, 29, '20220316_dICWPmLXjbPYO3pRpU1Wb9gz.png'),
(176, 24, '20220316_F1RETtM05h3zf1IvACZ9vpny.jpg'),
(177, 22, '20220315_kDLdmNemwP7zcZgXl1xugF5x.jpg'),
(178, 21, '20220315_yUvYrgVXVTzNmmZhb7Wx3Peu.jpg'),
(179, 20, '20220315_JDJ978xt53DHtUNFQEAgo9Xk.jpg'),
(180, 17, '20220316_NwokMSjRVJdUQvk6TEJvwg4Q.jpg'),
(181, 16, '20220316_vFvmyHHN4wiziuPHMUwxfKFk.jpg'),
(182, 12, '20220315_IWdk6r8rVPurRjEOJfQnjYRU.jpg'),
(183, 11, 'Giay-Nike-Air-Jordan-1-Low-GS-Ice-Blue-554723-401-7.jpg.webp'),
(184, 2, 'Pro_AV00000_1.jpg'),
(185, 6, '20220316_qlIwfzBN6NC3Gp6l5OgsBrA9.jpeg'),
(186, 6, '20220316_qt3J95uzueNp9xczQZySP7H6.jpeg'),
(187, 6, '20220316_WZGWerjH8wASCeOuxuZPvKZg.jpeg'),
(188, 9, '20220315_w7EFPGZ049S1i6yguUbps91Y.jpg'),
(189, 33, 'Giay-Nike-Air-Jordan-1-Retro-High-OG-Lost-Found-DZ5485-612.jpg.webp');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bien_the`
--
ALTER TABLE `bien_the`
  ADD PRIMARY KEY (`ma_bt`),
  ADD KEY `lk_size` (`ma_sp`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `lk_blsp` (`ma_sp`),
  ADD KEY `lk_bltk` (`ma_tk`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`ma_order`);

--
-- Chỉ mục cho bảng `don_hang_chitiet`
--
ALTER TABLE `don_hang_chitiet`
  ADD PRIMARY KEY (`ma_order_ct`),
  ADD KEY `lk_donhang` (`ma_order`),
  ADD KEY `lk_sanpham` (`ma_sp`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_sp`),
  ADD KEY `lk_danhmuc` (`ma_loai`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`ma_tk`),
  ADD KEY `lk_vaitro` (`vai_tro`);

--
-- Chỉ mục cho bảng `thu_vien_anh`
--
ALTER TABLE `thu_vien_anh`
  ADD PRIMARY KEY (`ma_tv`),
  ADD KEY `lk_anhsp` (`ma_sp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bien_the`
--
ALTER TABLE `bien_the`
  MODIFY `ma_bt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `ma_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `don_hang_chitiet`
--
ALTER TABLE `don_hang_chitiet`
  MODIFY `ma_order_ct` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `ma_tk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `thu_vien_anh`
--
ALTER TABLE `thu_vien_anh`
  MODIFY `ma_tv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bien_the`
--
ALTER TABLE `bien_the`
  ADD CONSTRAINT `lk_size` FOREIGN KEY (`ma_sp`) REFERENCES `san_pham` (`ma_sp`);

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `lk_blsp` FOREIGN KEY (`ma_sp`) REFERENCES `san_pham` (`ma_sp`),
  ADD CONSTRAINT `lk_bltk` FOREIGN KEY (`ma_tk`) REFERENCES `tai_khoan` (`ma_tk`);

--
-- Các ràng buộc cho bảng `don_hang_chitiet`
--
ALTER TABLE `don_hang_chitiet`
  ADD CONSTRAINT `lk_donhang` FOREIGN KEY (`ma_order`) REFERENCES `don_hang` (`ma_order`),
  ADD CONSTRAINT `lk_sanpham` FOREIGN KEY (`ma_sp`) REFERENCES `san_pham` (`ma_sp`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `lk_danhmuc` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);

--
-- Các ràng buộc cho bảng `thu_vien_anh`
--
ALTER TABLE `thu_vien_anh`
  ADD CONSTRAINT `lk_anhsp` FOREIGN KEY (`ma_sp`) REFERENCES `san_pham` (`ma_sp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
