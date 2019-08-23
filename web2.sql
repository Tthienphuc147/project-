-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 11:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `anh`
--

CREATE TABLE `anh` (
  `anh_id` bigint(20) UNSIGNED NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaianh_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `baiviet_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhgioithieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noibat` int(11) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `danhmuc_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`baiviet_id`, `user_id`, `tieude`, `anhgioithieu`, `noibat`, `soluotxem`, `danhmuc_id`, `noidung`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Bún chả cá', 'bunchaca.png', 1, 876, 'danhmuc_anuong', '', '2019-04-05 12:39:18', '2019-04-05 12:39:05'),
(2, 'admin', 'Bún mắm nêm', 'bunmamnem.png', 1, 476, 'danhmuc_anuong', '', '2019-04-05 12:39:18', '2019-04-05 12:39:05'),
(3, 'admin', 'Gỏi bò khô, mít trộn', 'goibokho.png', 1, 123, 'danhmuc_anuong', '', '2019-04-05 12:39:18', '2019-04-05 12:39:05'),
(4, 'admin', 'Ram cuốn cải', 'ramcuoncai.png', 1, 356, 'danhmuc_anuong', '', '2019-04-05 12:39:18', '2019-04-05 12:39:05'),
(5, 'admin', 'ĐỒI MỘNG MƠ', 'doimongmo.jpg', 1, 12, 'danhmuc_dulich', '', '2019-04-05 12:39:18', '2019-04-05 12:39:05'),
(6, 'admin', 'CHỢ ĐÀ LẠT', 'chodalat.jpg', 1, 365, 'danhmuc_dulich', '', '2019-04-05 12:39:18', '2019-04-05 12:39:05'),
(7, 'admin', 'THIỀN VIỆN TRÚC LÂM', 'thienvientruclam.jpg', 1, 124, 'danhmuc_dulich', '', '2019-04-05 12:39:18', '2019-04-05 12:39:05'),
(8, 'admin', 'CHÙA LINH PHƯỚC', 'chualinhphuoc.jpg', 1, 456, 'danhmuc_dulich', '', '2019-04-05 12:39:18', '2019-04-05 12:39:05'),
(9, 'admin', ' Asian Park – công viên giải trí ở Đà Nẵng', 'asianpark.jpg', 1, 234, 'danhmuc_giaitri', '', '2019-04-05 12:39:18', '2019-04-05 12:39:05'),
(10, 'admin', 'Bà Nà Hill', 'bana.jpg', 1, 435, 'danhmuc_giaitri', '', '2019-04-05 12:39:18', '2019-04-05 12:39:05'),
(11, 'admin', 'Khu vui chơi giải trí Thỏ Trắng', 'thotrang.png', 1, 121, 'danhmuc_giaitri', '', '2019-04-05 12:39:18', '2019-04-05 12:39:05'),
(12, 'admin', 'Khu phố tây Bùi Viện', 'buivien.jpg', 1, 232, 'danhmuc_giaitri', '', '2019-04-05 12:39:18', '2019-04-05 12:39:05'),
(13, 'admin', 'Đệ Nhất BBQ - Buffet', 'BBQ.jpg', 1, 89, 'danhmuc_anuong', '', '2019-04-06 08:53:22', '2019-04-06 08:53:22'),
(14, 'admin', 'Hải Sản', 'haisan.jpg', 1, 87, 'danhmuc_anuong', '', '2019-04-06 08:53:22', '2019-04-06 08:53:22'),
(15, 'admin', 'Bánh Tráng Cuốn Thịt Heo', 'banhtrang.jpg', 1, 67, 'danhmuc_anuong', '', '2019-04-06 08:53:22', '2019-04-06 08:53:22'),
(16, 'admin', 'Xoa xoa hạt lựu Cô Châm', 'xoaxoa.jpg', 1, 457, 'danhmuc_anuong', '', '2019-04-06 08:53:22', '2019-04-06 08:53:22'),
(17, 'admin', 'Bánh xèo, nem lụi Bà Dưỡng', 'nemlui.jpg', 1, 34, 'danhmuc_anuong', '', '2019-04-06 08:53:22', '2019-04-06 08:53:22'),
(18, 'admin', 'Phố ốc Vĩnh Khánh', 'oc.png\r\n', 1, 134, 'danhmuc_anuong', '', '2019-04-06 08:53:22', '2019-04-06 08:53:22'),
(19, 'admin', 'NHÀ THỜ ĐỨC BÀ SÀI GÒN', 'nhatho.jpg', 1, 54, 'danhmuc_dulich', '', '2019-04-06 09:04:27', '2019-04-06 09:04:27'),
(20, 'admin', 'CHỢ BẾN THÀNH', 'chobt.jpg', 1, 26, 'danhmuc_dulich', '', '2019-04-06 09:04:27', '2019-04-06 09:04:27'),
(21, 'admin', 'HỘI TRƯỜNG THỐNG NHẤT (DINH ĐỘC LẬP)', 'dinh.jpg', 1, 45, 'danhmuc_dulich', '', '2019-04-06 09:04:27', '2019-04-06 09:04:27'),
(22, 'admin', 'Bãi biển Mỹ Khê', 'bien.jpg', 1, 69, 'danhmuc_dulich', '', '2019-04-06 09:04:27', '2019-04-06 09:04:27'),
(23, 'admin', 'Đèo Hải Vân', 'deohv.jpg', 1, 346, 'danhmuc_dulich', '', '2019-04-06 09:04:27', '2019-04-06 09:04:27'),
(24, 'admin', 'Cù Lao Chàm', 'culao.jpg', 1, 345, 'danhmuc_dulich', '', '2019-04-06 09:04:27', '2019-04-06 09:04:27'),
(25, 'admin', 'KHU DU LỊCH SUỐI TIÊN', 'suoitien.jpg', 1, 475, 'danhmuc_giaitri', '', '2019-04-06 09:19:04', '2019-04-06 09:19:04'),
(26, 'admin', 'Suối khoáng nóng Núi Thần Tài', 'suoikhoang.jpg', 1, 43, 'danhmuc_giaitri', '', '2019-04-06 09:19:04', '2019-04-06 09:19:04'),
(27, 'admin', 'cung văn hóa thiếu nhi Đà Nẵng', 'cungtt.jpg', 1, 67, 'danhmuc_giaitri', '', '2019-04-06 09:19:04', '2019-04-06 09:19:04'),
(28, 'admin', 'Sun Wheel', 'sun.png', 1, 462, 'danhmuc_giaitri', '', '2019-04-06 09:19:04', '2019-04-06 09:20:49'),
(29, 'admin', 'Khu làng Pháp trên Bà Nà Hills', 'langphap.jpg', 1, 43, 'danhmuc_giaitri', '', '2019-04-06 09:19:04', '2019-04-06 09:19:04'),
(30, 'admin', 'Hồ Hòa Trung', 'ho.jpg', 1, 25, 'danhmuc_giaitri', '', '2019-04-06 09:19:04', '2019-04-06 09:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieudeblog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhmota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhomblog_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `user_id`, `tieudeblog`, `mota`, `anhmota`, `nhomblog_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Bí Kíp Du Lịch', 'Các thành phố lớn trên thế giới có chi phí khá đắt đỏ, đặc biệt là thực phẩm. Nếu không tiêu tiền một cách thông minh, ngân quỹ của bạn sẽ nhanh chóng sụt giảm.', 'bikipdl.jpg', 'blog_dulich', NULL, NULL),
(2, 'admin', 'Bí Kíp Du Lịch', 'Chọn ghế gần cửa sổ máy bay, mang theo mặt nạ che mắt, không uống cà phê và thông báo cho phi hành đoàn biết sẽ giúp bạn có một giấc ngủ ngon, sâu giấc trên chặng bay dài của…', 'bikipdl1.jpg', 'blog_dulich', NULL, NULL),
(3, 'admin', 'Bí Kíp Thời Trang', ' Là con gái thì không thể thiếu những chiếc váy, đầm cực xinh cho thời trang du lịch biển. Điểm danh đầu tiên trong bộ sưu tập váy là chiếc đầm maxi cực thích hợp cho mùa hè', 'bikiptt.jpg', 'blog_thoitrang', NULL, NULL),
(4, 'admin', 'Mẹo Vặt hữu ích', 'Bạn không nên đi nghỉ cùng người thích kiểm soát mọi thứ theo ý mình hay những cô nàng đỏng đảnh luôn khiến cả nhóm mất thời gian.', 'meovat.jpg', 'blog_meovat', NULL, NULL),
(5, 'admin', 'Bí kíp du lịch', 'Với cách đóng gói hành trang hợp lý, bạn có thể mang ‘cả thế giới’ theo bên mình mà không mất quá nhiều sức khi phải leo trèo.', 'bikipdl2.jpg', 'blog_dulich', NULL, NULL),
(6, 'admin', 'Bí kíp du lịch', 'Trong khi đa số khách du lịch vật lộn để có một tấm hình đẹp, nhiếp ảnh gia người Úc Robert King khuấy đảo mạng xã hội với loạt ảnh chụp các danh thắng nổi tiếng từ Bắc Kinh đến…', 'bikipdl3.jpg', 'blog_dulich', NULL, NULL),
(7, 'admin', 'Bí kíp thời trang', ' Tận hưởng kì nghỉ hè trên biển cùng người thân hay bạn bè hoặc người yêu bạn nên chuẩn bị cho mình những chiếc áo nhóm, áo đôi, áo gia đình mang đầy ý nghĩa và tình cảm. ', 'bikiptt1.jpg', 'blog_thoitrang', NULL, NULL),
(8, 'admin', 'bí kíp thời trang', 'Một chiếc áo phông năng động kết hợp cùng quần jeans cá tính sẽ là thời trang du lịch picnic tuyệt vời cho bạn. Vừa cá tính lại gọn gàng dễ vận động và di chuyển. ', 'bikiptt2.jpg', 'blog_thoitrang', NULL, NULL),
(9, 'admin', 'bí kíp thời trang', 'Hiểu được thời tiết của địa danh thắng cảnh để chọn khoảng thời gian lí tưởng nhất tránh những điều kiện thời tiết xấu ảnh hưởng đến cả hành trình của bạn.', 'bikiptt3.jpg', 'blog_thoitrang', NULL, NULL),
(10, 'admin', 'Mẹo vặt hữu ích', 'Thường thì chúng ta hay đi tàu đêm để ngủ chờ sáng đến nơi. Hãy chọn trang phục nhẹ nhàng, thoải mái có thể nằm ngủ mà không bị nhàu hoặc gây khó chịu.', 'meovat1.jpg', 'blog_meovat', NULL, NULL),
(11, 'admin', 'Mẹo vặt hữu ích', 'Dầu bạc hà rất hữu ích, hãy uống mỗi lần khoảng 20 giọt pha nước ấm, Nếu không có dầu bạc hà thì có thể uống trà bạc hà hay các thực phẩm có bạc hà.', 'meovat2.jpg', 'blog_meovat', NULL, NULL),
(12, 'admin', 'Mẹo vặt hữu ích', 'Dùng túi hút ẩm cho vào bên trong giày và để qua đêm, giày sẽ khô nhanh hơn.', 'meovat3.jpg', 'blog_meovat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `danhmuc_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`danhmuc_id`, `tenloai`, `created_at`, `updated_at`) VALUES
('danhmuc_anuong', 'Ăn uống', NULL, NULL),
('danhmuc_dulich', 'Du lịch', NULL, NULL),
('danhmuc_giaitri', 'Giải trí', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loaianh`
--

CREATE TABLE `loaianh` (
  `loaianh_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaianh`
--

INSERT INTO `loaianh` (`loaianh_id`, `tenloai`, `created_at`, `updated_at`) VALUES
('anh_anuong', 'Ăn Uống', NULL, NULL),
('anh_dulich', 'Du Lịch', NULL, NULL),
('anh_giaitri', 'Giải Thích', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loaiblog`
--

CREATE TABLE `loaiblog` (
  `nhomblog_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenloaiblog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaiblog`
--

INSERT INTO `loaiblog` (`nhomblog_id`, `tenloaiblog`, `created_at`, `updated_at`) VALUES
('blog_dulich', 'Du Lịch', NULL, NULL),
('blog_meovat', 'Mẹo Vặt', NULL, NULL),
('blog_thoitrang', 'Thời Trang', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_04_05_085544_create_slide_table', 1),
(2, '2019_04_05_090413_create_loaianh_table', 1),
(3, '2019_04_05_090716_create_anh_table', 1),
(4, '2019_04_05_091104_create_blog_table', 1),
(5, '2019_04_05_091253_create_loaiblog_table', 1),
(6, '2019_04_05_091444_create_baiviet_table', 1),
(7, '2019_04_05_091711_create_danhmuc_table', 1),
(8, '2019_04_05_092705_create_nguoidung_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `User_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotenUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loginNameUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `slide_id` bigint(20) UNSIGNED NOT NULL,
  `tenslide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`slide_id`, `tenslide`, `mota`, `anh`, `created_at`, `updated_at`) VALUES
(1, 'Bánh xèo, nem lụi', 'Bánh xèo và nem lụi đậm chất miền trung, luôn đứng hàng top trong danh mục ẩm thực Đà Nẵng. ', '1.png', NULL, NULL),
(2, 'Mì Quảng', 'Mì Quảng là món ăn đặc trưng của Đà Nẵng. Nước dùng mì Quảng rất đặc biệt, không đầy tràn như các món bún phở khác.', '2.png', NULL, NULL),
(3, 'Bánh tráng cuốn thịt heo', 'Đến Đà Nẵng, đừng quên thưởng thức bánh tráng cuốn thịt heo tuyệt ngon. Đĩa thịt heo xen kẽ lớp nạc lớp mỡ được luộc chín tới, ăn kèm rau ghém ', '3.png', NULL, NULL),
(4, 'Bánh bèo, nậm, lọc, ít trần', 'Tuy có cùng tên gọi với các loại bánh Huế nhưng các loại bánh bèo, nậm, lọc, ít trần ở Đà Nẵng ', '4.png', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anh`
--
ALTER TABLE `anh`
  ADD PRIMARY KEY (`anh_id`);

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`baiviet_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`danhmuc_id`);

--
-- Indexes for table `loaianh`
--
ALTER TABLE `loaianh`
  ADD PRIMARY KEY (`loaianh_id`);

--
-- Indexes for table `loaiblog`
--
ALTER TABLE `loaiblog`
  ADD PRIMARY KEY (`nhomblog_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anh`
--
ALTER TABLE `anh`
  MODIFY `anh_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `baiviet_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
