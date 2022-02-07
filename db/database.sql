-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 08, 2022 lúc 04:37 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `carweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `userName` varchar(100) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `displayName` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `active_code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`userName`, `password`, `displayName`, `address`, `email`, `phone`, `role_id`, `status`, `create_date`, `active_code`) VALUES
('admin', 'admin', 'Admin', 'Hà Nội', 'admin@fpt.edu.vn', '0866823499', 1, 1, '2019-10-20', NULL),
('checksignup', '123', 'LE MINH NGOC', 'kHONG BIET O DAU', 'lloris15102001@gmail.com', '0123456789', 4, NULL, '2021-11-08', NULL),
('edx', '123', 'Vu Hoang Linh', 'Pha Lai, Chi Linh, Hai Duong', 'linhvhhe150945@fpt.edu.vn', '1234455667', 4, 1, '2021-11-02', NULL),
('minh', '123456', 'Lê Nhật Minh', 'Vĩnh Hùng-Vĩnh Lộc-Thanh Hóa', 'minhln@gmail.com', '0123456789', 4, 1, '2019-10-30', NULL),
('sda', '123', NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-05', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `category_name`, `status`) VALUES
(1, 'MUA XE', 1),
(2, 'THUÊ XE', 1),
(3, 'VẬN CHUYỂN', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image_url` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`id`, `product_id`, `image_url`, `status`) VALUES
(1, 1, 'img/XeBan/c1.2.jpg', 1),
(2, 1, 'img/XeBan/c1.3.jpg', 1),
(3, 2, 'img/XeBan/c2.2.jpg', 1),
(4, 2, 'img/XeBan/c2.3.jpg', 1),
(5, 3, 'img/XeBan/c3.2.jpg', 1),
(6, 3, 'img/XeBan/c3.3.jpg', 1),
(7, 4, 'img/XeBan/c4.2.jpg', 1),
(8, 4, 'img/XeBan/c4.3.jpg', 1),
(9, 5, 'img/XeBan/c5.2.jpg', 1),
(10, 5, 'img/XeBan/c5.3.jpg', 1),
(11, 6, 'img/XeBan/c6.2.jpg', 1),
(12, 6, 'img/XeBan/c6.3.jpg', 1),
(13, 7, 'img/XeBan/c7.2.jpg', 1),
(14, 7, 'img/XeBan/c7.3.jpg', 1),
(15, 8, 'img/XeBan/c8.2.jpg', 1),
(16, 8, 'img/XeBan/c8.3.jpg', 1),
(17, 9, 'img/XeBan/c9.2.jpg', 1),
(18, 9, 'img/XeBan/c9.3.jpg', 1),
(19, 10, 'img/XeBan/c10.2.jpg', 1),
(20, 10, 'img/XeBan/c10.3.jpg', 1),
(21, 11, 'img/XeBan/c11.2.jpg', 1),
(22, 11, 'img/XeBan/c11.3.jpg', 1),
(23, 12, 'img/XeBan/c12.2.jpg', 1),
(24, 12, 'img/XeBan/c12.3.jpg', 1),
(25, 13, 'img/XeBan/c13.2.jpg', 1),
(26, 13, 'img/XeBan/c13.3.jpg', 1),
(27, 14, 'img/XeBan/c14.2.jpg', 1),
(28, 14, 'img/XeBan/c14.3.jpg', 1),
(29, 15, 'img/XeBan/c15.2.jpg', 1),
(30, 15, 'img/XeBan/c15.3.jpg', 1),
(31, 16, 'img/XeBan/c16.2.jpg', 1),
(32, 16, 'img/XeBan/c16.3.jpg', 1),
(33, 17, 'img/XeBan/c17.2.jpg', 1),
(34, 17, 'img/XeBan/c17.3.jpg', 1),
(35, 18, 'img/XeBan/c18.2.jpg', 1),
(36, 18, 'img/XeBan/c18.3.jpg', 1),
(37, 19, 'img/XeBan/c19.2.jpg', 1),
(38, 19, 'img/XeBan/c19.3.jpg', 1),
(39, 20, 'img/XeBan/c20.2.jpg', 1),
(40, 20, 'img/XeBan/c20.3.jpg', 1),
(41, 21, 'img/XeBan/c21.2.jpg', 1),
(42, 21, 'img/XeBan/c21.3.jpg', 1),
(43, 22, 'img/XeBan/c22.2.jpg', 1),
(44, 22, 'img/XeBan/c22.3.jpg', 1),
(45, 23, 'img/XeBan/c23.2.jpg', 1),
(46, 23, 'img/XeBan/c23.3.jpg', 1),
(47, 24, 'img/XeBan/c24.2.jpg', 1),
(48, 24, 'img/XeBan/c24.3.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `Customer` varchar(100) DEFAULT NULL,
  `shipping_id` int(11) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `total_price` double DEFAULT NULL,
  `note` varchar(2000) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `Customer`, `shipping_id`, `create_date`, `total_price`, `note`, `status`) VALUES
(1, 'minh', 1, '2021-04-04', 55000, 'Hàng dễ vỡ, ship cẩn thận nhé !!!!!!', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `product_price` bigint(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `product_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `quantity`, `product_image`) VALUES
(1, 1, 1, 'Repair Tool', 17, 1, 'tools/1_0.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `image_url` varchar(100) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `sale` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `code`, `name`, `quantity`, `price`, `description`, `image_url`, `create_date`, `status`, `sub_category_id`, `sale`) VALUES
(1, 'HW-02', 'Honda Accord 2019', 1, 1500000000, 'Trải qua hơn 40 năm phát triển, Honda Accord vẫn duy trì được sức hấp dẫn khi luôn là mẫu xe sở hữu doanh số bán ấn tượng với hơn 22,5 triệu chiếc đã được bán tới tay khách hàng trên toàn cầu. Kế thừa và phát triển những tinh hoa của các thế hệ trước, phiên bản thế hệ thứ 10 hoàn toàn mới của Honda Accord là minh chứng rõ nhất cho một mẫu sedan với đẳng cấp vượt trội và sở hữu cá tính riêng biệt. \n', 'img/XeBan/c1.1.jpg\n', NULL, 1, 2, 0),
(2, 'HW-02', 'Toyota Wigo', 1, 1500000000, 'Toyota Wigo (hay một số thị trường gọi là Toyota Agya) là một chiếc city car kiểu dáng hatchback, tức xe nhỏ dành cho đô thị, anh em với Daihatsu Ayla. Daihatsu Ayla/Toyota Agya được khai sinh từ năm 2012 tại triển lãm Indonesia International Motor Show 2012.\n', 'img/XeBan/c2.1.jpg\n', NULL, 1, 2, 0.2),
(3, 'HW-02', 'Toyota Vios 2021\n', 1, 1500000000, 'Tất cả các phiên bản Vios 2021 đều được bổ sung một số tính năng an toàn tiện nghi như hệ thống đèn báo phanh khẩn cấp – EBS trên Vios GR-S, G & E CVT; tính năng tự động khóa cửa theo tốc độ trên Vios G; đèn chờ dẫn đường, đèn chiếu sáng tự động bật tắt và hệ thống mã hóa khóa động cơ trên Vios E CVT giúp cả gia đình an tâm trên các chuyến đi.\n', 'img/XeBan/c3.1.jpg\n', NULL, 1, 2, 0.7),
(4, 'HW-02', 'Hyundai Tucson 2020', 1, 1500000000, 'Trong phân khúc crossover cỡ trung hiện nay, Tucson là một sự lựa chọn hấp dẫn với danh sách tiện nghi, an toàn khá đầy đủ, thiết kế năng động, trẻ trung, và đặc biệt đây là mẫu xe có giá bán dễ tiếp cận hơn hẳn so với các đối thủ còn lại.\n', 'img/XeBan/c4.1.jpg\n', NULL, 1, 2, 0.7),
(5, 'HW-02', 'Ford Raptor 2021\n', 1, 1500000000, 'Ford Ranger Raptor luôn là niềm mơ ước của những khách hàng có phong cách sống phóng khoáng, thích du lịch, khám phá. Ranger Raptor không chỉ thỏa mãn niềm đam mê off-road của cánh mày râu mà còn có mức tiện nghi cao đáp ứng tốt nhu cầu gia đình.\n', 'img/XeBan/c5.1.jpg\n', NULL, 1, 1, 0.7),
(6, 'HW-02', 'KIA Seltos ', 1, 1500000000, 'Kia Seltos là mẫu xe SUV/Crossover cỡ nhỏ, 5 chỗ ngồi (subcompact crossover SUV) của nhà sản xuất Kia Motors, Hàn Quốc. Đây là mẫu xe mà Kia kỳ vọng sẽ nhắm đến những khách hàng trẻ trung, đam mê công nghệ và thích nổi bật giữa đám đông.', 'img/XeBan/c6.1.jpg\n', NULL, 1, 2, 0.7),
(7, 'HW-02', 'Toyota Fortuner', 1, 1500000000, 'Toyota Fortuner 2017 tạo ra cái nhìn mới dành cho mẫu xe 7 chỗ đơn thuần từ trước đến nay bằng sự mạo hiểm trên những cung đường khó khăn và trắc trở với điều mà gần như chưa bao giờ là thế mạnh của mẫu xe này: chạy off-road.', 'img/XeBan/c7.1.jpg\n', NULL, 1, 2, 0.7),
(8, 'HW-02', 'Mitsubishi Xpander Cross', 1, 1500000000, 'Nổi bật với phong cách SUV cùng ngoại hình trẻ trung, khoang nội thất tiện nghi và khả năng vận hành linh hoạt, Mitsubishi Xpander Cross mới sẽ đáp ứng trọn vẹn những trải nghiệm phong phú, đặc biệt là cá nhân yêu thích phiêu lưu, khám phá.', 'img/XeBan/c8.1.jpg\n', NULL, 1, 2, 0.7),
(9, 'HW-02', 'Hyundai Grand i10', 1, 1500000000, 'Grand i10 là mẫu xe được đánh giá cao của Hyundai trên thị trường thế giới với rất nhiều các giải thưởng danh giá như Giải thưởng thiết kế Red Dot, Giải thưởng Xe của năm tại Ấn Độ, Giải thưởng Chất lượng của Tạp chí AutoBild (Đức),...Tại Việt Nam, Grand i10 cũng là chiếc xe cỡ nhỏ thành công bậc nhất của Hyundai cũng như toàn thị trường Việt Nam.', 'img/XeBan/c9.1.jpg\n', NULL, 1, 2, 0.7),
(10, 'HW-02', 'Chevrolet Colorado', 1, 1500000000, 'Mẫu xe này được “thừa hưởng” gần như trọn vẹn nét đẹp đặc trưng của dòng xe bán tải Mỹ - phong cách lịch lãm và bề thế. Ở thế phiên bản mới, hãng cũng không ngừng nâng cấp cũng như trang bị nhiều tính năng xịn sò cho mẫu xe này.', 'img/XeBan/c10.1.jpg\n', NULL, 1, 1, 0.7),
(11, 'HW-02', 'Honda City', 1, 1500000000, 'Mẫu xe này khá thích hợp để sử dụng trong gia đình, các thành viên có thể tổ chức những buổi dã ngoại, du lịch khi xe sở hữu một khoang hành lý vô cùng rộng rãi và thoải mái để được nhiều đồ dùng rất tiện lợi. ', 'img/XeBan/c11.1.jpg\n', NULL, 1, 2, 0.7),
(12, 'HW-02', 'Honda CRV', 1, 1500000000, 'CR-V là mẫu xe thuộc hãng xe Nhật Bản Honda. Kể từ khi ra mắt toàn thế giới vào năm 1995, Honda CRV nhanh chóng vươn lên là một trong những mẫu SUV thành công nhất của hãng xe Honda cũng như là mẫu xe bán chạy nhất trong phân khúc.', 'img/XeBan/c12.1.jpg\n', NULL, 1, 2, 0.7),
(13, 'HW-02', 'Ford Everest', 1, 1500000000, 'Trong phân khúc SUV 7 chỗ tại Việt Nam được xây dựng từ xe bán tải, Ford Everest là chiếc xe một trong những lựa chọn hàng đầu của người tiêu dùng bên cạnh Toyota Fortuner. Mẫu SUV này sở hữu thiết kế cơ bắp đậm chất Mỹ, nhưng vẫn không kém phần hiện đại nhờ những nâng cấp liên tục được cập nhật trong thời gian gần đây.', 'img/XeBan/c13.1.jpg\n', NULL, 1, 2, 0.7),
(14, 'HW-02', 'Kia Morning', 1, 1500000000, ' Kia Morning 2017 được nhiều khách hàng mua xe lần đầu lựa chọn. Đồng thời mẫu xe này cũng được khá nhiều đối tượng khách hàng sử dụng, từ mua xe để kinh doanh, vận tải hành khách cho đến phục vụ nhu cầu của cá nhân và gia đình.\n', 'img/XeBan/c14.1.jpg\n', NULL, 1, 2, 0.7),
(15, 'HW-02', 'Peugeot 2008 GT-Line 2021\n', 1, 1500000000, 'Peugeot 2008 2021 được đánh giá là có ngoại hình mạnh mẽ, khả năng vận hành không hề thua kém bất kỳ đối thủ nào. Đặc biệt, mẫu xe này đã được tinh chỉnh hệ động cơ giúp nâng cao khả năng tiết kiệm nhiên liệu, ưu điểm nổi bật hơn hẳn so với các đối thủ khác.\n', 'img/XeBan/c15.1.jpg\n', NULL, 1, 2, 0),
(16, 'HW-02', 'Toyota Innova\n', 1, 1500000000, 'Toyota Innova sở hữu diện mạo được đánh giá có nhiều điểm nhấn hiện đại và bắt mắt hơn. Là một mẫu xe MPV 7 chỗ đô thị, Toyota Innova mang dáng dấp đặc trưng của dòng xe đa dụng này nhưng không quá thô cứng mà được trao chuốt bằng những đường nét thiết kế nhẹ nhàng và thanh lịch.\n', 'img/XeBan/c16.1.jpg\n', NULL, 1, 2, 0),
(17, 'HW-02', 'Toyota Camry  2.5Q 2020\n', 1, 1500000000, 'Một mẫu xe được nhận định là chiếc xe “chuẩn mực” ở mức giá bán, độ tin cậy, tiêu hao nhiên liệu, độ tiện nghi và tính năng an toàn cho người sử dụng.\n', 'img/XeBan/c17.1.jpg\n', NULL, 1, 2, 0),
(18, 'HW-02', 'Corolla Altis\n', 1, 1500000000, 'Toyota Corolla Altis 2018 là mẫu xe tốt trong phân khúc hạng C với ngoại hình ấn tượng và trang bị tiện nghi và hệ thống an toàn đầy đủ và tiết kiệm nhiên liệu. \n', 'img/XeBan/c18.1.jpg\n', NULL, 1, 2, 0),
(19, 'HW-02', 'Mazda BT-50\n', 1, 1500000000, ' BT-50 đang dần thay đổi, thay vì là một chiếc bán tải, những tiện nghi và trang bị gần giống một chiếc SUV. Các trang bị này tuy không quá nổi trội so với các đối thủ nhưng cũng giúp BT-50 gia tăng sức cạnh tranh với đổi thủ.\n', 'img/XeBan/c19.1.jpg\n', NULL, 1, 1, 0),
(20, 'HW-02', 'New Porter 150 Xanh\n', 1, 1500000000, 'Xe Hyundai H150 là dòng xe tải được nâng tải từ xe H100 Thành Công tải trọng 1 tấn trước đây, để phù hợp với nhu cầu khách hàng di chuyển trong phố xe được thiết kế nhỏ gọn, bởi vậy Porter 150 hoàn toàn đảm bảo đúng quy định khi di chuyển trong thành phố.\r\n', 'img/XeBan/c20.1.jpg\n\n', NULL, 1, 3, 0),
(21, 'HW-02', 'New Porter 150 Trắng\n', 1, 1500000000, 'Xe Hyundai H150 là dòng xe tải được nâng tải từ xe H100 Thành Công tải trọng 1 tấn trước đây, để phù hợp với nhu cầu khách hàng di chuyển trong phố xe được thiết kế nhỏ gọn, bởi vậy Porter 150 hoàn toàn đảm bảo đúng quy định khi di chuyển trong thành phố.\r\n', 'img/XeBan/c21.1.jpg\n\n', NULL, 1, 3, 0),
(22, 'HW-02', 'KIA K200\r\n', 1, 0, 'Dòng xe tải Kia vốn đã được người tiêu dùng tin tưởng đầu tư nhờ sự ổn định, bền bỉ cùng chi phí bảo dưỡng thấp, phụ tùng dồi dào. Trải qua các đời xe từ Kia K2700, Kia K3000, Kia K165, KIA K190, đến nay là dòng xe Kia K200  vẫn giữ nguyên được ưu điểm vốn có, cộng thêm thiết kế cabin mới trẻ trung, năng động, trang bị thêm nhiều tính năng an toàn như lốp không ruột, cân bằng điện tử ESC, chống bó cứng phanh ABS.\r\n', 'img/XeBan/c22.1.jpg\n\n', NULL, 1, 3, 0),
(23, 'HW-02', 'Ollin 500\r\n', 1, 0, 'Xe tải Ollin 500 Euro4 kế thừa những tính năng ưu việt từ dòng xe Ollin 500B Euro2, vốn đã mang nhiều ưu thế của dòng xe Ollin hơn hẳn so với các sản phẩm cùng phân khúc xe tải 5 tấn, đó là chất lượng ổn định, tuổi thọ và khả năng khai thác cao, phù hợp với điều kiện sử dụng tại Việt Nam.\r\n', 'img/XeBan/c23.1.jpg\n\n', NULL, 1, 3, 0),
(24, 'HW-02', 'DFSK K01\r\n', 1, 0, 'Xe tải thương mại mang hiệu DFSK là dòng xe tải Thái Lan khá phổ biến ở Đông Nam Á, đặc biệt là tại Thái Lan và Việt Nam. Đây là dòng xe tải nhẹ dưới 1 tấn có thiết kế hiện đại, đẳng cấp cùng với đồng cơ mạnh mẽ.\r\n', 'img/XeBan/c24.1.jpg\n\n', NULL, 1, 3, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_account`
--

CREATE TABLE `role_account` (
  `id` int(11) NOT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `role_account`
--

INSERT INTO `role_account` (`id`, `role`) VALUES
(1, 'Quản trị viên'),
(2, 'Nhân viên'),
(3, 'Vip'),
(4, 'Khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipping`
--

CREATE TABLE `shipping` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `shipping`
--

INSERT INTO `shipping` (`id`, `name`, `phone`, `address`) VALUES
(1, 'Nguyễn Thị Ánh', '0123456789', 'Thái Bình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status_account`
--

CREATE TABLE `status_account` (
  `id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `status_account`
--

INSERT INTO `status_account` (`id`, `status`) VALUES
(1, 'Kích hoạt'),
(2, 'Chờ'),
(3, 'Bị chặn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status_category`
--

CREATE TABLE `status_category` (
  `id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `status_category`
--

INSERT INTO `status_category` (`id`, `status`) VALUES
(1, 'Đang bán'),
(2, 'Đang khuyến mãi'),
(3, 'Miễn phí vận chuyển'),
(4, 'Hết hàng'),
(5, 'Ngừng kinh doanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status_order`
--

CREATE TABLE `status_order` (
  `id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `status_order`
--

INSERT INTO `status_order` (`id`, `status`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Được chấp nhận'),
(3, 'Đang vận chuyển'),
(4, 'Thanh toán online'),
(5, 'Thành công');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status_product`
--

CREATE TABLE `status_product` (
  `id` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `status_product`
--

INSERT INTO `status_product` (`id`, `status`) VALUES
(1, 'Đang bán'),
(2, 'Đang khuyến mãi'),
(3, 'Miễn phí vận chuyển'),
(4, 'Hết hàng'),
(5, 'Ngừng kinh doanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status_sub_category`
--

CREATE TABLE `status_sub_category` (
  `id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `status_sub_category`
--

INSERT INTO `status_sub_category` (`id`, `status`) VALUES
(1, 'Đang bán'),
(2, 'Đang khuyến mãi'),
(3, 'Miễn phí vận chuyển'),
(4, 'Hết hàng'),
(5, 'Ngừng kinh doanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_name` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `sub_category_name`, `status`) VALUES
(1, 1, 'XE BÁN TẢI', 1),
(2, 1, 'XE 5-7 CHỖ', 1),
(3, 1, 'XE TẢI CHỞ HÀNG', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sysdiagrams`
--

CREATE TABLE `sysdiagrams` (
  `name` varchar(160) NOT NULL,
  `principal_id` int(11) NOT NULL,
  `diagram_id` int(11) NOT NULL,
  `version` int(11) DEFAULT NULL,
  `definition` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `view`
--

CREATE TABLE `view` (
  `view` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `view`
--

INSERT INTO `view` (`view`) VALUES
(1167);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`userName`),
  ADD KEY `FK__account__role_id__412EB0B6` (`role_id`),
  ADD KEY `FK__account__status__4222D4EF` (`status`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK__category__status__4316F928` (`status`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK__image__product_i__6383C8BA` (`product_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK__order__shipping___6477ECF3` (`shipping_id`),
  ADD KEY `FK__order__Customer__6754599E` (`Customer`),
  ADD KEY `FK__order__status__693CA210` (`status`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK__order_det__order__47DBAE45` (`order_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK__product__status__6477ECF3` (`status`),
  ADD KEY `FK__product__sub_cat__49C3F6B7` (`sub_category_id`);

--
-- Chỉ mục cho bảng `role_account`
--
ALTER TABLE `role_account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status_account`
--
ALTER TABLE `status_account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status_category`
--
ALTER TABLE `status_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status_order`
--
ALTER TABLE `status_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status_product`
--
ALTER TABLE `status_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status_sub_category`
--
ALTER TABLE `status_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK__sub_categ__categ__4AB81AF0` (`category_id`),
  ADD KEY `FK__sub_categ__statu__4BAC3F29` (`status`);

--
-- Chỉ mục cho bảng `sysdiagrams`
--
ALTER TABLE `sysdiagrams`
  ADD PRIMARY KEY (`diagram_id`),
  ADD UNIQUE KEY `UK_principal_name` (`principal_id`,`name`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `FK__account__role_id__412EB0B6` FOREIGN KEY (`role_id`) REFERENCES `role_account` (`id`),
  ADD CONSTRAINT `FK__account__status__4222D4EF` FOREIGN KEY (`status`) REFERENCES `status_account` (`id`);

--
-- Các ràng buộc cho bảng `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `FK__category__status__4316F928` FOREIGN KEY (`status`) REFERENCES `status_category` (`id`);

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `FK__image__product_i__6383C8BA` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK__order__Customer__44FF419A` FOREIGN KEY (`Customer`) REFERENCES `account` (`userName`),
  ADD CONSTRAINT `FK__order__Customer__6383C8BA` FOREIGN KEY (`Customer`) REFERENCES `account` (`userName`),
  ADD CONSTRAINT `FK__order__Customer__6754599E` FOREIGN KEY (`Customer`) REFERENCES `account` (`userName`),
  ADD CONSTRAINT `FK__order__shipping___45F365D3` FOREIGN KEY (`shipping_id`) REFERENCES `shipping` (`id`),
  ADD CONSTRAINT `FK__order__shipping___6477ECF3` FOREIGN KEY (`shipping_id`) REFERENCES `shipping` (`id`),
  ADD CONSTRAINT `FK__order__status__46E78A0C` FOREIGN KEY (`status`) REFERENCES `status_order` (`id`),
  ADD CONSTRAINT `FK__order__status__656C112C` FOREIGN KEY (`status`) REFERENCES `status_order` (`id`),
  ADD CONSTRAINT `FK__order__status__693CA210` FOREIGN KEY (`status`) REFERENCES `status_order` (`id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK__order_det__order__47DBAE45` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK__product__status__6477ECF3` FOREIGN KEY (`status`) REFERENCES `status_product` (`id`),
  ADD CONSTRAINT `FK__product__sub_cat__49C3F6B7` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`id`);

--
-- Các ràng buộc cho bảng `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `FK__sub_categ__categ__4AB81AF0` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK__sub_categ__statu__4BAC3F29` FOREIGN KEY (`status`) REFERENCES `status_sub_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
