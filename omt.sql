-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 13, 2023 lúc 12:22 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `omt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Mobile'),
(2, 'ICT'),
(3, 'Phim'),
(4, '11111');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `author`, `title`, `content`, `image`) VALUES
(1, 3, 'Vinh', 'Cục Điện ảnh yêu cầu Netflix, FPT Play gỡ phim có đường lưỡi bò trong vòng 24 giờ', 'Sau khi tiến hành rà soát kỹ càng về nội dung bộ phim Hướng gió mà đi (Flight to you) - bộ phim chứa hình ảnh “đường lưỡi bò” phi pháp, Phó Cục trưởng Cục Điện ảnh Đỗ Quốc Việt ký ban hành công văn số 870/ĐA-VP gửi công ty Netflix, công văn số 871/ĐA-VP g', 'https://genk.mediacdn.vn/zoom/260_162/139269124445442048/2023/7/10/avatar1688952680522-1688952681221931904389.jpg'),
(2, 1, 'Vinh', 'Dùng điều hòa 45 năm không hỏng, hành động sau đó của chủ nhân khiến tất cả phải ngỡ ngàng', 'Vào năm 1979, Hong Yeon-moo và Moon Hee-seon, một cặp vợ chồng sống tại Gyeongju (Hàn Quốc) đã quyết định mua mẫu điều hòa treo tường \"GA-100SP\" từ thương hiệu Goldstar.\n\nỞ thời điểm đó, Lucky và Goldstar là hai công ty tách biệt, và phải đến năm 1983 mới', 'https://genk.mediacdn.vn/139269124445442048/2023/7/11/1689047938-1lg-1-16890419521381567787388-1689049298606-1689049299436182607209.jpg'),
(3, 1, 'Vinh', 'Hyundai Ioniq 5 chính thức ra mắt người dùng Việt Nam: Đối thủ mới đáng gờm của VinFast VF7, VF8', 'Hôm nay (26/4), Tập đoàn TC Motor đã chính thức giới thiệu mẫu xe điện Hyundai Ioniq 5 tới người tiêu dùng trong nước. Đây là mẫu xe điện đầu tiên của thương hiệu Hàn Quốc này tham chiến tại thị trường Việt Nam. Theo thông tin được hãng công bố, xe chưa m', 'https://genk.mediacdn.vn/139269124445442048/2022/4/26/hyundai-ioniq-5-2-16509405417871278725008-1650941732512-1650941733118964523691.jpg'),
(4, 3, 'Vinh', 'Lộ diện top 10 phim ngắn vào chung kết cuộc thi \"Nghề Mang Hạnh Phúc\"', 'Cuộc thi \"Nghề Mang Hạnh Phúc\" nhằm tôn vinh các nghề nghiệp trong xã hội và lan tỏa thông điệp tích cực về hạnh phúc nghề nghiệp tới cộng đồng. Với thời lượng tối đa 5 phút cho mỗi bài dự thi, các thí sinh đã đối mặt với thử thách thú vị để truyền tải gó', 'https://genk.mediacdn.vn/zoom/250_155/139269124445442048/2023/7/7/avatar1688722542813-1688722543532600309058.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `update_at`, `deleted_at`) VALUES
(1, 'Vinh', 'a@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, '2023-07-12 02:08:39', '2023-07-10 10:57:19', NULL),
(2, 'e', 'e@gmail.com', '25d55ad283aa400af464c76d713c07ad', 0, '2023-07-12 08:38:04', '2023-07-11 13:46:01', NULL),
(3, 'a', 'vinhhttt@gmail.com', '25d55ad283aa400af464c76d713c07ad', 0, '2023-07-13 10:14:11', '2023-07-13 10:14:11', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
