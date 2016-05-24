-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2016 at 06:16 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) unsigned NOT NULL,
  `orig_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(5) unsigned NOT NULL,
  `image_width` int(3) unsigned NOT NULL,
  `image_height` int(3) unsigned NOT NULL,
  `image_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `weblink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clicks` int(11) unsigned NOT NULL DEFAULT '0',
  `posted_date` int(11) unsigned NOT NULL,
  `expiration_date` int(11) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `orig_name`, `file_name`, `file_size`, `image_width`, `image_height`, `image_type`, `weblink`, `company`, `clicks`, `posted_date`, `expiration_date`) VALUES
(6, 'SinhVienIT_Net---cong-nghe-quai-nhan-cong-nghe-1_(1).jpg', '5dc3f68dedc6695b505c9b3740396518.jpg', 668, 1920, 1080, 'jpeg', 'ssssssssssssss', 'dddđ', 0, 1451948400, 0),
(11, 'back_ground_fw.png', '4c614780d24654c36fd370b701417aa5.png', 75, 450, 60, 'png', 'sa', 'sd', 0, 1462053600, 1464040800),
(13, 'SinhVienIT_Net---cong-nghe-quai-nhan-cong-nghe-1_(1).jpg', '431b506c6dfdd10d29a5967714d248b8.jpg', 668, 1920, 1080, 'jpeg', 'google.com', 'webshop', 0, 1462053600, 1464645600),
(14, 'hinh-nen-cho-slide-powerpoint-moi-nhat-2016-anh-6.jpg', '638fbdfc3b1bb01e418a8004d3fdfc34.jpg', 359, 1024, 768, 'jpeg', 'google.com141', 'webshop14', 0, 0, 0),
(15, 'bố_ba.gif', '43344233ddb8ae829595a68eba1ea7b6.gif', 5, 338, 51, 'gif', 'google.com123', 'webshop', 0, 1462053600, 1464645600),
(18, 'wonderful-full-hd-desktop.jpg', 'cb497054be9fe81dcbd95997bde2ea0c.jpg', 1225, 1920, 1080, 'jpeg', 'a', 's', 0, 1451948400, 0),
(19, 'images.jpg', 'c9886b9726427d8dc274838ce4d3579d.jpg', 11, 284, 177, 'jpeg', 'ad', 'ad', 0, 1451948400, 1457132400);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) unsigned NOT NULL,
  `orig_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  `image_width` int(5) NOT NULL DEFAULT '0',
  `image_height` int(5) NOT NULL DEFAULT '0',
  `image_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `raw_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `file_ext` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `path_folder` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `table_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `table_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `orig_name`, `file_name`, `file_size`, `image_width`, `image_height`, `image_type`, `raw_name`, `file_ext`, `path_folder`, `user_id`, `table_name`, `table_id`) VALUES
(12, 'back_ground_fw.png', '2016/05/f56507c2cecc6c276e5ad551bcd8bb6d.png', 75, 450, 60, 'png', 'f56507c2cecc6c276e5ad551bcd8bb6d', '.png', '2016/05', 2, 'product', 17),
(27, 'back_ground_fw.png', '2016/05/23197645fe20a6ae08c3e32169a747a1.png', 75, 450, 60, 'png', '23197645fe20a6ae08c3e32169a747a1', '.png', '2016/05', 2, 'product', 20),
(29, 'back_ground_fw.png', '2016/05/22c031a92c8493d38bd61769d411c2ac.png', 75, 450, 60, 'png', '22c031a92c8493d38bd61769d411c2ac', '.png', '2016/05', 2, 'news', 3),
(30, 'bố_ba.gif', '2016/05/870ef31e49a6247be772842751f8d7c5.gif', 5, 338, 51, 'gif', '870ef31e49a6247be772842751f8d7c5', '.gif', '2016/05', 2, 'news', 3),
(41, 'hinh-nen-cho-slide-powerpoint-moi-nhat-2016-anh-6.jpg', '2016/05/09596627e78f584ca50dd73bc7a942b5.jpg', 359, 1024, 768, 'jpeg', '09596627e78f584ca50dd73bc7a942b5', '.jpg', '2016/05', 2, 'product', 17),
(43, 'SinhVienIT_Net---cong-nghe-quai-nhan-cong-nghe-1_(1).jpg', '2016/05/fed403108a91691c37f49f2dc653834e.jpg', 668, 1920, 1080, 'jpeg', 'fed403108a91691c37f49f2dc653834e', '.jpg', '2016/05', 2, 'product', 17),
(45, 'back_ground_fw.png', '2016/05/080f8817cd5a3806ff1f3796c8b64abd.png', 75, 450, 60, 'png', '080f8817cd5a3806ff1f3796c8b64abd', '.png', '2016/05', 2, 'product', 12),
(46, 'bố_ba.gif', '2016/05/844753b856c4034b677370abf7372454.gif', 5, 338, 51, 'gif', '844753b856c4034b677370abf7372454', '.gif', '2016/05', 2, 'product', 12),
(47, 'hinh-nen-cho-slide-powerpoint-moi-nhat-2016-anh-6.jpg', '2016/05/c6cc92a04985b142957bf09edd4b49b4.jpg', 359, 1024, 768, 'jpeg', 'c6cc92a04985b142957bf09edd4b49b4', '.jpg', '2016/05', 2, 'news', 7),
(51, 'hinh-nen-may-tinh-cuc-dep-15.jpg', '2016/05/d9c4a5c40f240d2ec89cba0cb5756357.jpg', 96, 1139, 190, 'jpeg', 'd9c4a5c40f240d2ec89cba0cb5756357', '.jpg', '2016/05', 2, 'product', 20),
(52, 'images.jpg', '2016/05/28c6ad64b7f8674eaf38978c0a351cc9.jpg', 11, 284, 177, 'jpeg', '28c6ad64b7f8674eaf38978c0a351cc9', '.jpg', '2016/05', 2, 'product', 20),
(53, 'back_ground_fw.png', '2016/05/b8f6b2fe8461d589a9f9b3e4a303a5b9.png', 75, 450, 60, 'png', 'b8f6b2fe8461d589a9f9b3e4a303a5b9', '.png', '2016/05', 2, 'product', 22),
(54, 'back_ground_fw.png', '2016/05/820c9105c03c3199c47888c12210f27b.png', 75, 450, 60, 'png', '820c9105c03c3199c47888c12210f27b', '.png', '2016/05', 2, 'product', 2),
(55, 'images.jpg', '2016/05/6318c4ee47e7e28c910e592b936030c5.jpg', 11, 284, 177, 'jpeg', '6318c4ee47e7e28c910e592b936030c5', '.jpg', '2016/05', 2, 'product', 2),
(56, 'dam-denim-phoi-tui-cao-cap-1m4G3-f3bb57_simg_d0daf0_800x1200_max.jpg', '2016/05/d5484df23f26702fa5e307c76029d3bd.jpg', 105, 720, 864, 'jpeg', 'd5484df23f26702fa5e307c76029d3bd', '.jpg', '2016/05', 2, 'product', 1),
(57, 'vay-jean-soc-lien-2-tui-nam-nut-sang-noi-battre-trungnang-dong-v019-1m4G3-e186e0_simg_d0daf0_800x1200_max.jpg', '2016/05/66a4badcd0692eac11a049e1292cce91.jpg', 97, 800, 800, 'jpeg', '66a4badcd0692eac11a049e1292cce91', '.jpg', '2016/05', 2, 'product', 5),
(58, 'ao-so-mi-nam-co-tru-cach-dieu-hq092-1m4G3-dc6455_simg_d0daf0_800x1200_max.png', '2016/05/e54025aee7f5ca98d5d378f27cc5a1e0.png', 926, 720, 942, 'png', 'e54025aee7f5ca98d5d378f27cc5a1e0', '.png', '2016/05', 2, 'product', 15),
(59, 'ao-3-lo-size-trung-vai-cuc-dep-thoang-mat-1m4G3-4aac98_simg_d0daf0_800x1200_max.jpg', '2016/05/d5e801a46f7b72020c08f05483f93431.jpg', 39, 720, 861, 'jpeg', 'd5e801a46f7b72020c08f05483f93431', '.jpg', '2016/05', 2, 'product', 18),
(60, 'ao-thun-carter-1m4G3-8d00b1_simg_d0daf0_800x1200_max.jpg', '2016/05/1eac279d54e75784c28f170f9901c713.jpg', 149, 720, 880, 'jpeg', '1eac279d54e75784c28f170f9901c713', '.jpg', '2016/05', 2, 'product', 19);

-- --------------------------------------------------------

--
-- Table structure for table `logger`
--

CREATE TABLE IF NOT EXISTS `logger` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_agent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logger`
--

INSERT INTO `logger` (`id`, `user_id`, `username`, `content`, `ip`, `user_agent`, `created_at`) VALUES
(1, 2, 'hungdozi', 'Đã đăng nhập vào hệ thống', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463380449),
(2, 2, 'hungdozi', 'Đã thêm mới User : hieu', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463382722),
(3, 2, 'hungdozi', 'Đã xóa User : hieu', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463382751),
(4, 2, 'hungdozi', 'Đã chỉnh sửa User : hunghung', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463382796),
(5, 2, 'hungdozi', 'Đã xóa sản phẩm : acv', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463383671),
(6, 2, 'hungdozi', 'Đã thêm mới sản phẩm : ao', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463384023),
(7, 2, 'hungdozi', 'Đã chỉnh sửa sản phẩm : ao', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463385610),
(8, 2, 'hungdozi', 'Đã chỉnh sửa tin tức báo mới', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463385831),
(9, 2, 'hungdozi', 'Đã chỉnh sửa Banner : hinh-nen-cho-slide-powerpoint-moi-nhat-2016-anh-6.jpg', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463387472),
(10, 2, 'hungdozi', 'Đã thêm mới danh mục sản phẩm : Đồ phụ nữ', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463392537),
(11, 2, 'hungdozi', 'Đã thêm mới sản phẩm : aos', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463392917),
(12, 2, 'hungdozi', 'Đã chỉnh sửa sản phẩm : quan', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463393919),
(13, 2, 'hungdozi', 'Đã chỉnh sửa sản phẩm : quan', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463393925),
(14, 2, 'hungdozi', 'Đã chỉnh sửa danh mục sản phẩm : Đồ trẻ em', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463394573),
(15, 2, 'hungdozi', 'Đã thêm mới danh mục sản phẩm : Đồ nam', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463394608),
(16, 2, 'hungdozi', 'Đã chỉnh sửa sản phẩm : xe máy', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463397614),
(17, 2, 'hungdozi', 'Đã chỉnh sửa sản phẩm : xe máy', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463397832),
(18, 2, 'hungdozi', 'Đã đăng nhập vào hệ thống', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463474435),
(19, 2, 'hungdozi', 'Đã thêm mới danh mục sản phẩm : Baby', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463474620),
(20, 2, 'hungdozi', 'Đã thêm mới sản phẩm : ĐẦM DENIM PHỐI TÚI CAO CẤP - MSP-4037', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463475381),
(21, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Đầm Jean Body Cổ Chữ V Cá Tính - TP924GS170 - TP924GS170', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463475594),
(22, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Đầm D6037VN-M2SGS250 - D6037VN-M2SGS250', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463475763),
(23, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Đầm denim jean EDC xuất chuẩn cài nút cổ sơ mi - D74', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463475899),
(24, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Váy jean sọc liền 2 túi nạm nút sáng nổi bật,trẻ trung,năng động-V019 - V019', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463476068),
(25, 2, 'hungdozi', 'Đã chỉnh sửa danh mục sản phẩm : Đầm Váy', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463476121),
(26, 2, 'hungdozi', 'Đã chỉnh sửa sản phẩm : ĐẦM DENIM PHỐI TÚI CAO CẤP - MSP-4037', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463476134),
(27, 2, 'hungdozi', 'Đã thêm mới danh mục sản phẩm : Áo Nữ', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463476442),
(28, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Áo sơ mi cổ đức- Phong cách hàn quốc - A009', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463476513),
(29, 2, 'hungdozi', 'Đã chỉnh sửa sản phẩm : Áo sơ mi cổ đức- Phong cách hàn quốc - A009', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463476564),
(30, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Mã MM80287 - Áo kiểu sành điệu - MM80287c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463476678),
(31, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Áo sơ mi cổ trụ Zart - Nhãn hiệu độc quyền - ASM01_X', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463477504),
(32, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Áo sơ mi tay lỡ AH012 - Phong cách Hàn Quốc - AH012', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463477846),
(33, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Hàng loại 1- Áo sơ mi tay dài', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463478035),
(34, 2, 'hungdozi', 'Đã thêm mới danh mục sản phẩm : Áo Sơ Mi Nam', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463478338),
(35, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Áo Sơ Mi Tay Ngắn TN_48 - TN_48', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463478435),
(36, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Áo Sơ Mi Tay Ngắn TN_37 - TN_37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463478529),
(37, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Áo Sơ Mi Tay Ngắn TN_45 - TN_45', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463478587),
(38, 2, 'hungdozi', 'Đã chỉnh sửa sản phẩm : Áo Sơ Mi Tay Ngắn TN_45 - TN_45', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463478619),
(39, 2, 'hungdozi', 'Đã chỉnh sửa sản phẩm : Áo Sơ Mi Tay Ngắn TN_45 - TN_45', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463478634),
(40, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Áo sơ mi nam Hàn Quốc HQ094 - HQ094', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463478762),
(41, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Áo sơ mi nam cổ trụ cách điệu HQ092 - HQ092', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463479025),
(42, 2, 'hungdozi', 'Đã đăng nhập vào hệ thống', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463493077),
(43, 2, 'hungdozi', 'Đã thêm mới danh mục sản phẩm : Baby', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463493371),
(44, 2, 'hungdozi', 'Đã xóa danh mục sản phẩm : Baby', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463493384),
(45, 2, 'hungdozi', 'Đã thêm mới danh mục sản phẩm : Baby', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463493394),
(46, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Áo thun cho bé - BB 07 - BB 07', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463493454),
(47, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Áo 3 lỗ size trung vải cực đẹp thoáng mát - AT1114B', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463493630),
(48, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Áo thun in sao littlemon - A24', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463493845),
(49, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Áo Thun carter - A18', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463494009),
(50, 2, 'hungdozi', 'Đã thêm mới sản phẩm : Áo thun nhập khẩu Seven kiểu dập chữ nổi, hồng - 200104', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463494494),
(51, 2, 'hungdozi', 'Đã thêm mới danh mục sản phẩm : Đòng Hồ - Phụ Kiện', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463495502),
(52, 2, 'hungdozi', 'Đã thêm mới danh mục sản phẩm : Công Nghệ', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463495539),
(53, 2, 'hungdozi', 'Đã thêm mới danh mục sản phẩm : Đồ Dùng Trong Nhà', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463495570),
(54, 2, 'hungdozi', 'Đã thêm mới danh mục sản phẩm : Phụ Kiện Công Nghệ', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463495624),
(55, 2, 'hungdozi', 'Đã thêm mới danh mục sản phẩm : Đò Điện Gia Dụng', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463495646),
(56, 2, 'hungdozi', 'Đã thêm mới danh mục sản phẩm : Dày Dép Túi Xác', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463495670),
(57, 2, 'hungdozi', 'Đã thêm mới danh mục sản phẩm : Không Gian Sống', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463495698),
(58, 2, 'hungdozi', 'Đã thêm mới danh mục sản phẩm : Thời Trang Nam', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463496686),
(59, 2, 'hungdozi', 'Đã chỉnh sửa danh mục sản phẩm : Thời Trang Nam', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463496697),
(60, 2, 'hungdozi', 'Đã đăng nhập vào hệ thống', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463579606),
(61, 2, 'hungdozi', 'Đã thêm mới sản phẩm : FATANI SHOP MỚI VỀ ÁO THUN NỮ ,MẪU ĐẸP', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463583206),
(62, 2, 'hungdozi', 'Đã chỉnh sửa sản phẩm : ĐẦM DENIM PHỐI TÚI CAO CẤP - MSP-4037', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463584208),
(63, 2, 'hungdozi', 'Đã chỉnh sửa sản phẩm : ĐẦM DENIM PHỐI TÚI CAO CẤP - MSP-4037', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463584219),
(64, 2, 'hungdozi', 'Đã đăng nhập vào hệ thống', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463737824);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `id` int(10) unsigned NOT NULL,
  `orig_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(5) unsigned NOT NULL,
  `image_width` int(3) unsigned NOT NULL,
  `image_height` int(3) unsigned NOT NULL,
  `image_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `weblink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0:hien ;1:an'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `orig_name`, `file_name`, `file_size`, `image_width`, `image_height`, `image_type`, `weblink`, `display`) VALUES
(1, 'back_ground_fw.png', 'a8e9423d13f9a0a3dc6d4c520442e293.png', 75, 450, 60, 'png', 'aa', 0),
(3, 'images.jpg', '334ed9e8d2493acc6857264191fd055f.jpg', 11, 284, 177, 'jpeg', 'aaaaaaaaaa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `raw_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_ext` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `url`, `image`, `raw_name`, `file_ext`, `description`, `detail`, `user_id`) VALUES
(1, 'báo mới', 'bao-moi', '00aa2b03bcbba33c7437579bf0f891e0.png', '00aa2b03bcbba33c7437579bf0f891e0', '.png', 'abc', '<p>d</p>\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) unsigned NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `create_at` int(11) NOT NULL DEFAULT '0',
  `delivery_at` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:dang dơi,1 :dang xu li,2:thanh cong,3:huy bo',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `fullname`, `phone`, `address`, `email`, `note`, `create_at`, `delivery_at`, `status`, `user_id`) VALUES
(1, 'teo em', '01684857672', 'ho chi minh', 'lamhungspiderman@gmail.com', 'ádasd', 1462600553, '02/05/2016', 0, 2),
(2, 'teo em', '01684857672', 'ho chi minh', 'lamhungspiderman@gmail.com', 'ádasd', 1462600580, '09/05/2016', 0, 2),
(3, 'teo anh', '01684857672', 'ho chi minh', 'lamhungspiderman@gmail.com', '1', 1463136581, '15/05/2016', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) unsigned NOT NULL,
  `order_id` int(11) unsigned NOT NULL DEFAULT '0',
  `product_id` int(11) unsigned NOT NULL DEFAULT '0',
  `quantity` int(5) unsigned NOT NULL DEFAULT '0',
  `sale` int(2) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `sale`) VALUES
(1, 2, 3, 1, 0),
(2, 2, 5, 1, 0),
(3, 3, 6, 1, 0),
(4, 3, 4, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `raw_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_ext` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) unsigned NOT NULL DEFAULT '0',
  `highlight` tinyint(1) NOT NULL DEFAULT '0',
  `product_category_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `url`, `image`, `raw_name`, `file_ext`, `description`, `detail`, `price`, `highlight`, `product_category_id`, `user_id`) VALUES
(1, 'ĐẦM DENIM PHỐI TÚI CAO CẤP - MSP-4037', 'dam-denim-phoi-tui-cao-cap-msp4037', 'b08938efcb9da57b22d0cc6f50b62cd7.jpg', 'b08938efcb9da57b22d0cc6f50b62cd7', '.jpg', 'Mô Tả', '<p>SẢN PHẨM MADE IN VIỆT NAM</p>\r\n\r\n<p>(Thương hiệu Vinabrands)</p>\r\n\r\n<p>H&agrave;ng Shop&nbsp;<a href="https://www.sendo.vn/cao-cap.htm">Cao Cấp</a></p>\r\n\r\n<p>Size :S,M,L,XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CHẤT LIỆU : Denim</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>M&agrave;u sắc</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Size</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Chất liệu</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>V&ograve;ng ngực (cm)</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>V&ograve;ng eo (cm)</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>V&ograve;ng m&ocirc;ng (cm)</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>D&agrave;i tay (cm)</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>D&agrave;i &aacute;o (cm)</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Ngang vai (cm)</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Trọng lượng (g)</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p>S</p>\r\n\r\n			<p>M</p>\r\n\r\n			<p>L</p>\r\n\r\n			<p>XL</p>\r\n			</td>\r\n			<td>\r\n			<p>Denim</p>\r\n			</td>\r\n			<td>\r\n			<p>85</p>\r\n\r\n			<p>89</p>\r\n\r\n			<p>93</p>\r\n\r\n			<p>97</p>\r\n			</td>\r\n			<td>\r\n			<p>70</p>\r\n\r\n			<p>74</p>\r\n\r\n			<p>78</p>\r\n\r\n			<p>82</p>\r\n			</td>\r\n			<td>\r\n			<p>88</p>\r\n\r\n			<p>92</p>\r\n\r\n			<p>96</p>\r\n\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>19</p>\r\n\r\n			<p>20</p>\r\n\r\n			<p>21</p>\r\n\r\n			<p>22</p>\r\n			</td>\r\n			<td>\r\n			<p>95</p>\r\n\r\n			<p>95</p>\r\n\r\n			<p>96</p>\r\n\r\n			<p>96</p>\r\n			</td>\r\n			<td>\r\n			<p>33</p>\r\n\r\n			<p>34</p>\r\n\r\n			<p>35</p>\r\n\r\n			<p>36</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://webshop.local:8080/upload/2016/05/d5484df23f26702fa5e307c76029d3bd_thumb.jpg" /></p>\r\n', 299000, 0, 1, 2),
(2, 'Đầm Jean Body Cổ Chữ V Cá Tính - TP924GS170 - TP924GS170', 'dam-jean-body-co-chu-v-ca-tinh-tp924gs170-tp924gs170', 'e78bdbbc2eb8de40217f8821775223d9.jpg', 'e78bdbbc2eb8de40217f8821775223d9', '.jpg', 'Đầm Jean Body Cổ Chữ V Cá Tính - TP924GS170 - TP924GS170', '<p>Kiểu d&aacute;ng:&nbsp;<a href="https://www.sendo.vn/co-chu-v.htm">cổ chữ V</a>, s&aacute;t n&aacute;ch.</p>\r\n\r\n<p>M&agrave;u sắc:&nbsp;xanh đen&nbsp;</p>\r\n\r\n<p>Chất liệu:&nbsp;jean wash đẹp mềm mịn</p>\r\n\r\n<p>K&iacute;ch thước:&nbsp;M, L</p>\r\n\r\n<p>Size M: Ngực 82-86cm, Eo 64-68cm, M&ocirc;ng 86-90cm,Chiều d&agrave;i 86cm</p>\r\n\r\n<p>Size L: Ngực 86-90cm, Eo 68-72cm, M&ocirc;ng 90-94cm,Chiều d&agrave;i 87cm.</p>\r\n\r\n<p>Sản phẩm kh&ocirc;ng k&egrave;m &aacute;o l&oacute;t trong</p>\r\n', 250000, 1, 1, 2),
(3, 'Đầm D6037VN-M2SGS250 - D6037VN-M2SGS250', 'dam-d6037vnm2sgs250-d6037vnm2sgs250', '1efb7b0caed4b6f4818221b34dbab477.jpg', '1efb7b0caed4b6f4818221b34dbab477', '.jpg', 'Đầm D6037VN-M2SGS250 - D6037VN-M2SGS250\r\n', '<p>H&agrave;ng Shop Cao Cấp</p>\r\n\r\n<p>Size :S,M,L,XL</p>\r\n\r\n<p>CHẤT LIỆU : Denim</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>M&agrave;u sắc</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Size</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Chất liệu</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>V&ograve;ng ngực (cm)</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>V&ograve;ng eo (cm)</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>V&ograve;ng m&ocirc;ng (cm)</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>D&agrave;i tay (cm)</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>D&agrave;i &aacute;o (cm)</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Ngang vai (cm)</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Trọng lượng (g)</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1</p>\r\n\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>S</p>\r\n\r\n			<p>M</p>\r\n\r\n			<p>L</p>\r\n\r\n			<p>XL</p>\r\n			</td>\r\n			<td>\r\n			<p>Denim</p>\r\n			</td>\r\n			<td>\r\n			<p>94</p>\r\n\r\n			<p>98</p>\r\n\r\n			<p>102</p>\r\n\r\n			<p>106</p>\r\n			</td>\r\n			<td>\r\n			<p>92</p>\r\n\r\n			<p>96</p>\r\n\r\n			<p>100</p>\r\n\r\n			<p>106</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n\r\n			<p>104</p>\r\n\r\n			<p>108</p>\r\n\r\n			<p>112</p>\r\n			</td>\r\n			<td>\r\n			<p>18</p>\r\n\r\n			<p>19</p>\r\n\r\n			<p>20</p>\r\n\r\n			<p>21</p>\r\n			</td>\r\n			<td>\r\n			<p>87</p>\r\n\r\n			<p>88</p>\r\n\r\n			<p>89</p>\r\n\r\n			<p>90</p>\r\n			</td>\r\n			<td>\r\n			<p>38</p>\r\n\r\n			<p>39</p>\r\n\r\n			<p>40</p>\r\n\r\n			<p>41</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 320000, 0, 1, 2),
(4, 'Đầm denim jean EDC xuất chuẩn cài nút cổ sơ mi - D74', 'dam-denim-jean-edc-xuat-chuan-cai-nut-co-so-mi-d74', 'b715f40d06d4fa4916b89141f88556a6.jpg', 'b715f40d06d4fa4916b89141f88556a6', '.jpg', 'Đầm denim jean EDC xuất chuẩn cài nút cổ sơ mi - D74', '<p><strong>CHI TIẾT SẢN PHẨM</strong></p>\r\n\r\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T&ecirc;n sản phẩm:&nbsp;<a href="https://www.sendo.vn/dam-denim.htm">Đầm denim</a>&nbsp;jean EDC xuất chuẩn&nbsp;<a href="https://www.sendo.vn/cai-nut.htm">c&agrave;i n&uacute;t</a></p>\r\n\r\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kiểu d&aacute;ng: cở sơ mi, c&agrave;i n&uacute;t</p>\r\n\r\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chất liệu: denim</p>\r\n\r\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trọng lượng: 200 gr</p>\r\n\r\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Size: S, M</p>\r\n\r\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qu&yacute; c&ocirc; c&oacute; thể diện xuống phố, đi l&agrave;m, đi chơi, dự tiệc, họp mặt bạn b&egrave; rất xinh đẹp v&agrave; thanh lịch.</p>\r\n', 250000, 1, 1, 2),
(5, 'Váy jean sọc liền 2 túi nạm nút sáng nổi bật,trẻ trung,năng động-V019 - V019', 'vay-jean-soc-lien-2-tui-nam-nut-sang-noi-battre-trungnang-dongv019-v019', 'a18a0f52cee9c28e750cfa16caa6f287.jpg', 'a18a0f52cee9c28e750cfa16caa6f287', '.jpg', 'Váy jean sọc liền 2 túi nạm nút sáng nổi bật,trẻ trung,năng động-V019 - V019\r\n', '<p><strong><a href="https://www.sendo.vn/vay-jean.htm">V&aacute;y jean</a>&nbsp;sọc liền 2 t&uacute;i nạm n&uacute;t s&aacute;ng nổi bật,trẻ trung,năng động-V019</strong></p>\r\n\r\n<p><strong>Chất liệu:jean d&agrave;y vừa</strong></p>\r\n\r\n<p><strong>M&agrave;u sắc:sọc xanh như h&igrave;nh</strong></p>\r\n\r\n<p><strong>K&iacute;ch thước:Freesize từ 55kg trở lại(tuỳ thuộc chiều cao)</strong></p>\r\n\r\n<p><strong>Ch&uacute; &yacute;:</strong></p>\r\n\r\n<p><strong>Sản phẩm kh&ocirc;ng k&egrave;m &aacute;o thun l&oacute;t b&ecirc;n trong,bạn c&oacute; thể tự phối v&aacute;y với &aacute;o thun ngắn tay,&aacute;o ba lỗ đều đẹp nh&eacute;.</strong></p>\r\n\r\n<p><strong>V&aacute;y th&iacute;ch hợp bận đi chơi,du lịch đều ph&ugrave; hợp nha.</strong></p>\r\n\r\n<p><img src="http://webshop.local:8080/upload/2016/05/66a4badcd0692eac11a049e1292cce91.jpg" /></p>\r\n', 369000, 1, 1, 2),
(6, 'Áo sơ mi cổ đức- Phong cách hàn quốc - A009', 'ao-so-mi-co-duc-phong-cach-han-quoc-a009', '1d938e5d538f2bf2b58367a54bede6a7.jpg', '1d938e5d538f2bf2b58367a54bede6a7', '.jpg', 'Áo sơ mi cổ đức- Phong cách hàn quốc - A009', '<p><strong>TH&Ocirc;NG TIN SẢN PHẨM:</strong></p>\r\n\r\n<p>- T&ecirc;n sản phẩm: &Aacute;o sơ mi cổ đức- phong c&aacute;ch h&agrave;n quốc</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- Kiểu d&aacute;ng: Sơ mi cổ bẻ, &nbsp;d&agrave;i tay</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- Chất liệu: Vải c&aacute;t mịn - (kh&ocirc;ng &nbsp;phải vải lon, vải kate nh&eacute;)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- Trọng lượng: 150 gr</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- Đơn vị t&iacute;nh: cm</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- Size: S, M, L</p>\r\n', 170000, 1, 2, 2),
(7, 'Mã MM80287 - Áo kiểu sành điệu - MM80287c', 'ma-mm80287-ao-kieu-sanh-dieu-mm80287c', 'cb8f2f57f6e6149a95df1d327700f1d7.jpg', 'cb8f2f57f6e6149a95df1d327700f1d7', '.jpg', 'Mã MM80287 - Áo kiểu sành điệu - MM80287c\r\n', '<p>H&agrave;ng nhập cao cấp. Shop cam kết kh&ocirc;ng b&aacute;n h&agrave;ng nh&aacute;i, h&agrave;ng gia c&ocirc;ng k&eacute;m chất lượng. H&agrave;ng như h&igrave;nh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cần th&ocirc;ng tin tư vấn th&ecirc;m về sp hoặc gặp bất cứ vấn đề g&igrave; trong qu&aacute; tr&igrave;nh đặt h&agrave;ng, qu&yacute; kh&aacute;ch vui l&ograve;ng gọi số:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>0926.546.236</strong>&nbsp;hoặc&nbsp;<strong>0966.896.599</strong>&nbsp;(8-20h) để được hỗ trợ.</p>\r\n', 190000, 1, 2, 2),
(8, 'Áo sơ mi cổ trụ Zart - Nhãn hiệu độc quyền - ASM01_X', 'ao-so-mi-co-tru-zart-nhan-hieu-doc-quyen-asm01x', '13220aa40be9dc15231615e5b439f0ae.png', '13220aa40be9dc15231615e5b439f0ae', '.png', 'Áo sơ mi cổ trụ Zart - Nhãn hiệu độc quyền - ASM01_X', '<p>THỜI<strong>&nbsp;TRANG ZART &ndash; NH&Atilde;N HIỆU ĐỘC QUYỀN</strong></p>\r\n\r\n<p><strong>Cam kết</strong>&nbsp;tất cả c&aacute;c sản phẩm của ZART&nbsp;<strong>giống h&igrave;nh&nbsp;</strong>từ chất liệu, kiểu d&aacute;ng cho đến m&agrave;u sắc (chụp từ h&igrave;nh ảnh sản phẩm c&oacute; trong kho h&agrave;ng &ndash; Khi c&aacute;c bạn zoom h&igrave;nh sẽ thấy r&otilde; chất liệu vải).Ch&uacute;ng t&ocirc;i cam kết về chất lượng sản phẩm.&nbsp;<strong><em>Đặc biệt sản phẩm của ch&uacute;ng t&ocirc;i được rất nhiều gi&aacute;o vi&ecirc;n, giảng vi&ecirc;n v&agrave; nh&acirc;n vi&ecirc;n văn ph&ograve;ng tin d&ugrave;ng trong cả nước.</em></strong></p>\r\n\r\n<p><strong>&Aacute;O SƠ MI C&Ocirc;NG SỞ&nbsp;</strong></p>\r\n\r\n<p>Với thiết kế sang trọng duy&ecirc;n d&aacute;ng c&ugrave;ng chất liệu cotton mềm m&aacute;t cho bạn nữ form&nbsp;<strong>&aacute;o sơ mi</strong>&nbsp;duy&ecirc;n d&aacute;ng, trẻ trung v&agrave; thanh lịch. L&agrave; một lựa chọn tuyệt vời để bạn kết hợp được với ch&acirc;n v&aacute;y, quần t&acirc;y, quần jean hoặc quần short.</p>\r\n\r\n<p><strong>Chất liệu vải</strong>:&nbsp;cotton mềm m&aacute;t</p>\r\n\r\n<p><strong>M&agrave;u sắc sản phẩm</strong>: Trắng, Kem mỡ g&agrave;, xanh ngọc, hồng nhạt</p>\r\n\r\n<p><strong>Cơ cấu sản phẩm</strong>: Cổ trụ n&uacute;t, tay d&agrave;i c&agrave;i n&uacute;t (xoắn l&ecirc;n dễ d&agrave;ng cho th&ecirc;m phần trẻ trung), lai &aacute;o d&agrave;i vừa phải, t&uacute;i nhỏ phối b&ecirc;n ngực trẻ trung, kiểu &aacute;o kh&ocirc;ng &ocirc;m s&aacute;t (mặc thoải m&aacute;i).</p>\r\n', 198000, 1, 2, 2),
(9, 'Áo sơ mi tay lỡ AH012 - Phong cách Hàn Quốc - AH012', 'ao-so-mi-tay-lo-ah012-phong-cach-han-quoc-ah012', 'ee0428c77cbbb9f263bfb968e803f4c8.jpg', 'ee0428c77cbbb9f263bfb968e803f4c8', '.jpg', 'Áo sơ mi tay lỡ AH012 - Phong cách Hàn Quốc - AH012', '<p>TH&Ocirc;NG TIN SẢN PHẨM:</p>\r\n\r\n<p>- T&ecirc;n sản phẩm:&nbsp;<a href="https://www.sendo.vn/ao-so-mi.htm">&Aacute;o sơ mi</a>&nbsp;tay lỡ AH012- Phong c&aacute;ch h&agrave;n quốc</p>\r\n\r\n<p>- Kiểu d&aacute;ng: Sơ mi cổ tr&ograve;n, tay lỡ</p>\r\n\r\n<p>- Chất liệu: habutai</p>\r\n\r\n<p>- Trọng lượng: 150 gr</p>\r\n\r\n<p>- Đơn vị t&iacute;nh: cm</p>\r\n\r\n<p>- Size: S, M, L</p>\r\n\r\n<p>Size&nbsp;&nbsp;&nbsp;&nbsp; Chiều d&agrave;i &aacute;o&nbsp;&nbsp;&nbsp; Rộng vai</p>\r\n\r\n<p>S &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 58&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 34</p>\r\n\r\n<p>M &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;60&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 36</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>L &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 62&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 38</p>\r\n', 200000, 1, 2, 2),
(10, 'Hàng loại 1- Áo sơ mi tay dài', 'hang-loai-1-ao-so-mi-tay-dai', 'a5452aa61ac224cf90c409b41e286fd6.jpg', 'a5452aa61ac224cf90c409b41e286fd6', '.jpg', 'Hàng loại 1- Áo sơ mi tay dài', '<p><strong><em>Xuất Xứ:&nbsp;</em><em><em>Việt nam</em></em></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li><strong><em>- Kiểu d&aacute;ng:&nbsp;</em><em><em>Như h&igrave;nh</em></em></strong></li>\r\n</ul>\r\n\r\n<p><strong><em>- Chất liệu:</em></strong></p>\r\n\r\n<p><strong><em>&nbsp; &nbsp; &nbsp;+ C&aacute;t xốp loại 1</em></strong></p>\r\n\r\n<p><strong><em>&nbsp; &nbsp; &nbsp;+ Vải mềm mịn, tho&aacute;ng m&aacute;t, thấm h&uacute;t mồ h&ocirc;i tốt</em></strong></p>\r\n\r\n<p><strong><em><em>-&nbsp;</em></em><em>M&agrave;u sắc</em><em>:</em><em><em>&nbsp;nền trắng, nền đen(như h&igrave;nh)</em></em></strong></p>\r\n\r\n<p><strong><em><em>-&nbsp;</em></em><em>Cam kết&nbsp;</em><em>:&nbsp;</em><em><em>đường may đẹp, chắc chắn. H&agrave;ng cao cấp chuy&ecirc;n bỏ sỉ cho shop,&nbsp;KH&Ocirc;NG&nbsp;phải h&agrave;ng chợ</em></em></strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<ul>\r\n		<li>&nbsp;</li>\r\n		<li><strong><em>Thanh to&aacute;n tiền mặt khi nhận h&agrave;ng, được kiểm tra h&agrave;ng trước khi nhận, nếu kh&ocirc;ng vừa &yacute; th&igrave; c&oacute; quyền từ chối kh&ocirc;ng nhận h&agrave;ng v&agrave; kh&ocirc;ng phải trả bất kỳ chi ph&iacute; n&agrave;o</em></strong></li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em><em>-&nbsp;</em></em><em>K&iacute;ch thước</em><em>:</em><em><em>&nbsp;S M L XL XXL</em></em><em><em>&nbsp; &nbsp;</em></em></strong></p>\r\n', 199000, 1, 2, 2),
(11, 'Áo Sơ Mi Tay Ngắn TN_48 - TN_48', 'ao-so-mi-tay-ngan-tn48-tn48', 'c4bb3da1338e3eab3476d34cbc89180a.jpg', 'c4bb3da1338e3eab3476d34cbc89180a', '.jpg', 'Áo Sơ Mi Tay Ngắn TN_48 - TN_48\r\n', '<p>ĐẶT H&Agrave;NG:&nbsp;NT HOẶC ĐT =&gt;&gt; 0926 478 543<br />\r\n<br />\r\nNhắn tin theo mẫu:&nbsp;M&atilde; Số, M&agrave;u/Size, Số lượng,&nbsp;T&ecirc;n, Địa chỉ<br />\r\n<br />\r\n---------------------------------------</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SIZE M:&nbsp;Chiều cao 1m68 - 1m74 / C&acirc;n nặng: 54 - 60kg<br />\r\n&nbsp;</p>\r\n\r\n<p>SIZE L:&nbsp;Chiều cao tr&ecirc;n 1m75 / C&acirc;n nặng: 61 - 66kg<br />\r\n&nbsp;</p>\r\n\r\n<p>SIZE XL:&nbsp;Chiều cao tr&ecirc;n 1m75 / C&acirc;n nặng: 67 - 72kg</p>\r\n', 150000, 1, 3, 2),
(12, 'Áo Sơ Mi Tay Ngắn TN_37 - TN_37', 'ao-so-mi-tay-ngan-tn37-tn37', 'df61cfc16c72752f4ac5478d926f4005.jpg', 'df61cfc16c72752f4ac5478d926f4005', '.jpg', 'Áo Sơ Mi Tay Ngắn TN_37 - TN_37\r\n', '<p>ĐẶT H&Agrave;NG:&nbsp;NT HOẶC ĐT =&gt;&gt; 0926 478 543<br />\r\n<br />\r\nNhắn tin theo mẫu:&nbsp;M&atilde; Số, M&agrave;u/Size, Số lượng,&nbsp;T&ecirc;n, Địa chỉ<br />\r\n<br />\r\n---------------------------------------</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SIZE M:&nbsp;Chiều cao 1m68 - 1m74 / C&acirc;n nặng: 54 - 60kg<br />\r\n&nbsp;</p>\r\n\r\n<p>SIZE L:&nbsp;Chiều cao tr&ecirc;n 1m75 / C&acirc;n nặng: 61 - 66kg<br />\r\n&nbsp;</p>\r\n\r\n<p>SIZE XL:&nbsp;Chiều cao tr&ecirc;n 1m75 / C&acirc;n nặng: 67 - 72kg</p>\r\n', 150000, 1, 3, 2),
(13, 'Áo Sơ Mi Tay Ngắn TN_45 - TN_45', 'ao-so-mi-tay-ngan-tn45-tn45', '4d51b4a23c65abc865d472b4e2ccb539.jpg', '4d51b4a23c65abc865d472b4e2ccb539', '.jpg', 'Áo Sơ Mi Tay Ngắn TN_45 - TN_45', '<p>ĐẶT H&Agrave;NG:&nbsp;NT HOẶC ĐT =&gt;&gt; 0926 478 543<br />\r\n<br />\r\nNhắn tin theo mẫu:&nbsp;M&atilde; Số, M&agrave;u/Size, Số lượng,&nbsp;T&ecirc;n, Địa chỉ<br />\r\n<br />\r\n---------------------------------------</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SIZE M:&nbsp;Chiều cao 1m68 - 1m74 / C&acirc;n nặng: 54 - 60kg<br />\r\n&nbsp;</p>\r\n\r\n<p>SIZE L:&nbsp;Chiều cao tr&ecirc;n 1m75 / C&acirc;n nặng: 61 - 66kg<br />\r\n&nbsp;</p>\r\n\r\n<p>SIZE XL:&nbsp;Chiều cao tr&ecirc;n 1m75 / C&acirc;n nặng: 67 - 72kg</p>\r\n', 150000, 1, 3, 2),
(14, 'Áo sơ mi nam Hàn Quốc HQ094 - HQ094', 'ao-so-mi-nam-han-quoc-hq094-hq094', '321eb75a293037906d478e639b2156da.png', '321eb75a293037906d478e639b2156da', '.png', 'Áo sơ mi nam Hàn Quốc HQ094 - HQ094\r\n', '<p><a href="https://www.sendo.vn/ao-so-mi-nam.htm">&Aacute;o sơ mi nam</a>&nbsp;thiết kế trẻ trung, hiện đại mang lại cho ch&agrave;ng phong c&aacute;ch năng động kh&ocirc;ng k&eacute;m phần nam t&iacute;nh.</p>\r\n\r\n<p>- Chất liệu vải&nbsp;<strong>Kate CO GI&Atilde;N NHẸ&nbsp;&nbsp;</strong>mềm mịn,&nbsp;th&ocirc;ng tho&aacute;ng, thấm h&uacute;t mồ h&ocirc;i tốt, tạo cảm gi&aacute;c thoải m&aacute;i cho người mặc.</p>\r\n\r\n<p>- Với chiếc &aacute;o n&agrave;y, bạn c&oacute; thể mặc bất cứ khi n&agrave;o: tới c&ocirc;ng sở, dạo phố, d&atilde; ngoại&hellip;</p>\r\n\r\n<p>- Dễ phối đồ c&ugrave;ng c&aacute;c trang phục kh&aacute;c vest quần sort ................</p>\r\n\r\n<p><strong>Th&ocirc;ng tin sản phẩm:</strong></p>\r\n\r\n<p>- Sản phẩm&nbsp; :&nbsp;<strong>Sơ mi nam cao cấp</strong>&nbsp;</p>\r\n', 179000, 1, 3, 2),
(15, 'Áo sơ mi nam cổ trụ cách điệu HQ092 - HQ092', 'ao-so-mi-nam-co-tru-cach-dieu-hq092-hq092', '1bba616e32f90334ab04ad1df6b96e21.png', '1bba616e32f90334ab04ad1df6b96e21', '.png', 'Áo sơ mi nam cổ trụ cách điệu HQ092 - HQ092', '<p><a href="https://www.sendo.vn/ao-so-mi-nam.htm">&Aacute;o sơ mi nam</a>&nbsp;c&aacute;ch điệu, thiết kế trẻ trung, hiện đại mang lại cho ch&agrave;ng phong c&aacute;ch năng động kh&ocirc;ng k&eacute;m phần nam t&iacute;nh.</p>\r\n\r\n<p>- Chất liệu vải&nbsp;<strong>Kate THUN CO GI&Atilde;N NHẸ &nbsp;</strong>&nbsp;th&ocirc;ng tho&aacute;ng, thấm h&uacute;t mồ h&ocirc;i tốt, tạo cảm gi&aacute;c thoải m&aacute;i cho người mặc.</p>\r\n\r\n<p>- Với chiếc &aacute;o n&agrave;y, bạn c&oacute; thể mặc bất cứ khi n&agrave;o: tới c&ocirc;ng sở, dạo phố, d&atilde; ngoại&hellip;</p>\r\n\r\n<p>- Dễ phối đồ c&ugrave;ng c&aacute;c trang phục kh&aacute;c vest quần sort ................</p>\r\n\r\n<p><strong>Th&ocirc;ng tin sản phẩm:</strong></p>\r\n\r\n<p>- Sản phẩm&nbsp; :&nbsp;<strong>Sơ mi nam cao cấp</strong>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- Kiểu d&aacute;ng&nbsp;<strong>Lựa chọn size cho bạn ph&ugrave; hợp :</strong>&nbsp;<strong>Size&nbsp; :M , L</strong></p>\r\n\r\n<p><img src="http://webshop.local:8080/upload/2016/05/e54025aee7f5ca98d5d378f27cc5a1e0.png" /></p>\r\n', 179000, 1, 0, 2),
(16, 'Áo thun cho bé - BB 07 - BB 07', 'ao-thun-cho-be-bb-07-bb-07', '00d546940b9f2a8a588be10c4eddf9dc.jpg', '00d546940b9f2a8a588be10c4eddf9dc', '.jpg', 'Áo thun cho bé - BB 07 - BB 07\r\n', '<p><a href="https://www.sendo.vn/cho-be.htm">Cho b&eacute;</a>&nbsp;từ 12 - 25kg</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>(b&eacute; trong h&igrave;nh 16 - 17kg)</p>\r\n', 75000, 1, 5, 2),
(17, 'Áo 3 lỗ size trung vải cực đẹp thoáng mát - AT1114B', 'ao-3-lo-size-trung-vai-cuc-dep-thoang-mat-at1114b', 'd566d3d10cc4ef6efd562b0dcd107570.jpg', 'd566d3d10cc4ef6efd562b0dcd107570', '.jpg', 'Áo 3 lỗ size trung vải cực đẹp thoáng mát - AT1114B', '<p>Số đo cho kh&aacute;ch tham khảo:</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:91px">\r\n			<p><strong>K&iacute;ch thước</strong></p>\r\n			</td>\r\n			<td style="width:144px">\r\n			<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;Tuổi</strong></p>\r\n			</td>\r\n			<td style="width:150px">\r\n			<p><strong>C&acirc;n nặng(kg)</strong></p>\r\n			</td>\r\n			<td style="width:186px">\r\n			<p><strong>Chiều cao (cm)</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:91px">\r\n			<p>1</p>\r\n			</td>\r\n			<td style="width:144px">\r\n			<p>10-18 th&aacute;ng</p>\r\n			</td>\r\n			<td style="width:150px">\r\n			<p>7,8-10 kg</p>\r\n			</td>\r\n			<td style="width:186px">\r\n			<p>72cm-79cm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:91px">\r\n			<p>2</p>\r\n			</td>\r\n			<td style="width:144px">\r\n			<p>12-2 tuổi</p>\r\n			</td>\r\n			<td style="width:150px">\r\n			<p>10-12 kg</p>\r\n			</td>\r\n			<td style="width:186px">\r\n			<p>79-83cm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:91px">\r\n			<p>3</p>\r\n			</td>\r\n			<td style="width:144px">\r\n			<p>2-3 tuổi</p>\r\n			</td>\r\n			<td style="width:150px">\r\n			<p>12-14 kg</p>\r\n			</td>\r\n			<td style="width:186px">\r\n			<p>83-88 cm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:91px">\r\n			<p>4</p>\r\n			</td>\r\n			<td style="width:144px">\r\n			<p>3-4 tuổi</p>\r\n			</td>\r\n			<td style="width:150px">\r\n			<p>14-15 kg</p>\r\n			</td>\r\n			<td style="width:186px">\r\n			<p>88-95 cm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:91px">\r\n			<p>5</p>\r\n			</td>\r\n			<td style="width:144px">\r\n			<p>4-5 tuổi</p>\r\n			</td>\r\n			<td style="width:150px">\r\n			<p>15-17 kg</p>\r\n			</td>\r\n			<td style="width:186px">\r\n			<p>95-105 cm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:91px">\r\n			<p>6</p>\r\n			</td>\r\n			<td style="width:144px">\r\n			<p>5-6 tuổi</p>\r\n			</td>\r\n			<td style="width:150px">\r\n			<p>17-19 kg</p>\r\n			</td>\r\n			<td style="width:186px">\r\n			<p>100-110 cm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:91px">\r\n			<p>7</p>\r\n			</td>\r\n			<td style="width:144px">\r\n			<p>6-7 tuổi</p>\r\n			</td>\r\n			<td style="width:150px">\r\n			<p>19-22 kg</p>\r\n			</td>\r\n			<td style="width:186px">\r\n			<p>110-116 cm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:91px">\r\n			<p>8</p>\r\n			</td>\r\n			<td style="width:144px">\r\n			<p>7-8 tuổi</p>\r\n			</td>\r\n			<td style="width:150px">\r\n			<p>22-26 kg</p>\r\n			</td>\r\n			<td style="width:186px">\r\n			<p>116-125 cm</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 82000, 1, 0, 2),
(18, 'Áo thun in sao littlemon - A24', 'ao-thun-in-sao-littlemon-a24', 'a08edc95abf37d5deff8e333478a6d6d.jpg', 'a08edc95abf37d5deff8e333478a6d6d', '.jpg', 'Áo thun in sao littlemon - A24', '<p>Áo thun in sao littlemon&nbsp;<br />\r\nMã s&ocirc;́ : A24 - 75k</p>\r\n\r\n<p>+ Thun cotton 4 chiều mềm mịn,</p>\r\n\r\n<p>H&agrave;ng Việt Nam xuất khẩu chất lượng.<br />\r\n&gt;&gt;&gt; B&ecirc;n ngo&agrave;i đẹp hơn trong ảnh.</p>\r\n\r\n<p>* TH&Ocirc;NG TIN LI&Ecirc;N HỆ:<br />\r\nMọi th&ocirc;ng tin về sản phẩm c&oacute; thể li&ecirc;n hệ th&ocirc;ng qua:<br />\r\n+ + Hotline: 0902227255 - 0907299367 viber &amp; zalo<img src="http://webshop.local:8080/upload/2016/05/d5e801a46f7b72020c08f05483f93431.jpg" /></p>\r\n', 75000, 1, 5, 2),
(19, 'Áo Thun carter - A18', 'ao-thun-carter-a18', 'ad5ce592ac930baa42d7c7421fb3b973.jpg', 'ad5ce592ac930baa42d7c7421fb3b973', '.jpg', 'Áo Thun carter - A18\r\n', '<p><img src="http://webshop.local:8080/upload/2016/05/1eac279d54e75784c28f170f9901c713.jpg" /></p>\r\n', 70000, 1, 5, 2),
(20, 'Áo thun nhập khẩu Seven kiểu dập chữ nổi, hồng - 200104', 'ao-thun-nhap-khau-seven-kieu-dap-chu-noi-hong-200104', 'fbd05baabe822811e0db62873bc85e71.jpg', 'fbd05baabe822811e0db62873bc85e71', '.jpg', 'Áo thun nhập khẩu Seven kiểu dập chữ nổi, hồng - 200104', '<table style="width:604px">\r\n	<tbody>\r\n		<tr>\r\n			<td>K&iacute;ch thước</td>\r\n			<td>Tuổi</td>\r\n			<td>C&acirc;n nặng</td>\r\n			<td>Chiều cao</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>10 - 18 th&aacute;ng</td>\r\n			<td>7 kg - 10 kg</td>\r\n			<td>72 cm - 78 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>12 th&aacute;ng - 2 tuổi</td>\r\n			<td>10 kg - 12 kg</td>\r\n			<td>78 cm - 83 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3</td>\r\n			<td>2 tuổi - 3 tuổi</td>\r\n			<td>12 kg - 14 kg</td>\r\n			<td>83 cm - 88 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4</td>\r\n			<td>3 tuổi - 4 tuổi</td>\r\n			<td>14 kg - 15 kg</td>\r\n			<td>88 cm - 95 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5</td>\r\n			<td>4 tuổi - 5 tuổi</td>\r\n			<td>15 kg - 17 kg</td>\r\n			<td>95 cm - 105 cm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 169000, 1, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordinal` int(11) unsigned NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `url`, `ordinal`, `image`) VALUES
(1, 'Đầm Váy', 'dam-vay', 1, ''),
(2, 'Áo Nữ', 'ao-nu', 2, ''),
(3, 'Áo Sơ Mi Nam', 'ao-so-mi-nam', 3, '443dc9c7e108dbcb015928bde9df1675.jpg'),
(5, 'Baby', 'baby', 4, ''),
(6, 'Đòng Hồ - Phụ Kiện', 'dong-ho-phu-kien', 5, ''),
(7, 'Công Nghệ', 'cong-nghe', 6, ''),
(8, 'Đồ Dùng Trong Nhà', 'do-dung-trong-nha', 7, ''),
(9, 'Phụ Kiện Công Nghệ', 'phu-kien-cong-nghe', 8, ''),
(10, 'Đò Điện Gia Dụng', 'do-dien-gia-dung', 9, ''),
(11, 'Dày Dép Túi Xác', 'day-dep-tui-xac', 10, ''),
(12, 'Không Gian Sống', 'khong-gian-song', 11, ''),
(13, 'Thời Trang Nam', 'thoi-trang-nam', 12, '');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE IF NOT EXISTS `product_image` (
  `id` int(11) unsigned NOT NULL,
  `orig_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(11) unsigned NOT NULL,
  `image_width` int(5) unsigned NOT NULL,
  `image_height` int(5) unsigned NOT NULL,
  `image_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `raw_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `file_ext` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `product_id` int(11) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `orig_name`, `file_name`, `file_size`, `image_width`, `image_height`, `image_type`, `raw_name`, `file_ext`, `user_id`, `product_id`) VALUES
(19, 'back_ground_fw.png', '67e48bc814acb9c5f560c09dcf03079f.png', 75, 450, 60, 'png', '67e48bc814acb9c5f560c09dcf03079f', '.png', 2, 5),
(31, 'back_ground_fw.png', '8427ab3aca482d1deccecec5d69433fb.png', 75, 450, 60, 'png', '8427ab3aca482d1deccecec5d69433fb', '.png', 2, 4),
(35, 'hinh-nen-cho-slide-powerpoint-moi-nhat-2016-anh-6.jpg', '4624071e8c3d469236594b6a54fa5098.jpg', 359, 1024, 768, 'jpeg', '4624071e8c3d469236594b6a54fa5098', '.jpg', 2, 4),
(36, 'images.jpg', '0abe6e2071b465d8002a8b4e77401606.jpg', 11, 284, 177, 'jpeg', '0abe6e2071b465d8002a8b4e77401606', '.jpg', 2, 4),
(42, 'ae2cdf_simg_27f6c3_60x60_maxb.jpg', '016344cfb9aaacb74f1136091ca83448.jpg', 80, 720, 864, 'jpeg', '016344cfb9aaacb74f1136091ca83448', '.jpg', 2, 1),
(43, 'dam-denim-phoi-tui-cao-cap-1m4G3-57be42_simg_d0daf0_800x1200_max.jpg', '3129e910025d7871f7bd06ed84582cc6.jpg', 114, 720, 864, 'jpeg', '3129e910025d7871f7bd06ed84582cc6', '.jpg', 2, 1),
(44, 'dam-denim-phoi-tui-cao-cap-1m4G3-f3bb57_simg_d0daf0_800x1200_max.jpg', 'c97cce8fa2e39d03ba227c3a3fbe75fd.jpg', 105, 720, 864, 'jpeg', 'c97cce8fa2e39d03ba227c3a3fbe75fd', '.jpg', 2, 1),
(45, 'dam-jean-body-co-chu-v-ca-tinh-tp924gs170-1m4G3-569f0d_simg_d0daf0_800x1200_max.jpg', '9aa89c703b129627ca15451f88786be0.jpg', 86, 795, 720, 'jpeg', '9aa89c703b129627ca15451f88786be0', '.jpg', 2, 2),
(46, 'dam-jean-body-co-chu-v-ca-tinh-tp924gs170-1m4G3-c8df3d_simg_d0daf0_800x1200_max.jpg', 'b41fc472a9b72219a6a0630533f4404b.jpg', 100, 720, 1145, 'jpeg', 'b41fc472a9b72219a6a0630533f4404b', '.jpg', 2, 2),
(47, 'dam-jean-body-co-chu-v-ca-tinh-tp924gs170-1m4G3-e1e9fb_simg_d0daf0_800x1200_max.jpg', '17e459d7220fa4390ce52cc0e296e326.jpg', 108, 787, 940, 'jpeg', '17e459d7220fa4390ce52cc0e296e326', '.jpg', 2, 2),
(48, 'dam-d6037vn-m2sgs250-1m4G3-0354d2_simg_d0daf0_800x1200_max.jpg', 'f19f36788ab60e470d5061ee63928ef6.jpg', 124, 800, 960, 'jpeg', 'f19f36788ab60e470d5061ee63928ef6', '.jpg', 2, 3),
(49, 'dam-d6037vn-m2sgs250-1m4G3-a22e2a_simg_d0daf0_800x1200_max.jpg', '0ab5f0d83fe1fd743a93beb0883156e6.jpg', 113, 800, 960, 'jpeg', '0ab5f0d83fe1fd743a93beb0883156e6', '.jpg', 2, 3),
(50, 'dam-d6037vn-m2sgs250-1m4G3-d1cd0b_simg_d0daf0_800x1200_max.jpg', '51d0749247398ed63cc148f47732b4bd.jpg', 113, 800, 960, 'jpeg', '51d0749247398ed63cc148f47732b4bd', '.jpg', 2, 3),
(51, 'dam-denim-jean-edc-xuat-chuan-cai-nut-co-so-mi-1m4G3-0e9f8d_simg_d0daf0_800x1200_max.jpg', 'e5627e7e057d99610832ab668d0b72b7.jpg', 74, 800, 1066, 'jpeg', 'e5627e7e057d99610832ab668d0b72b7', '.jpg', 2, 4),
(52, 'dam-denim-jean-edc-xuat-chuan-cai-nut-co-so-mi-1m4G3-1c9ddb_simg_d0daf0_800x1200_max.jpg', 'b028bf38aec80a23fdbc43e294a683f5.jpg', 138, 800, 1066, 'jpeg', 'b028bf38aec80a23fdbc43e294a683f5', '.jpg', 2, 4),
(53, 'dam-denim-jean-edc-xuat-chuan-cai-nut-co-so-mi-1m4G3-a43f19_simg_d0daf0_800x1200_max.jpg', 'f4191611fe968bbac3dac827f8a13228.jpg', 81, 800, 1066, 'jpeg', 'f4191611fe968bbac3dac827f8a13228', '.jpg', 2, 4),
(54, 'vay-jean-soc-lien-2-tui-nam-nut-sang-noi-battre-trungnang-dong-v019-1m4G3-e186e0_simg_d0daf0_800x1200_max.jpg', 'd64abe30e7d62c1d4133918a51718889.jpg', 97, 800, 800, 'jpeg', 'd64abe30e7d62c1d4133918a51718889', '.jpg', 2, 5),
(55, 'vay-jean-soc-lien-2-tui-nam-nut-sang-noi-battre-trungnang-dong-v019-1m4G3-34da3a_simg_d0daf0_800x1200_max.jpg', '65d43885f8f056d43bf3242806afcfb9.jpg', 137, 800, 800, 'jpeg', '65d43885f8f056d43bf3242806afcfb9', '.jpg', 2, 5),
(56, 'ae2cdf_simg_27f6c3_60x60_maxb.jpg', '51637ab104d8f2cf5cc91c087243ebec.jpg', 80, 720, 864, 'jpeg', '51637ab104d8f2cf5cc91c087243ebec', '.jpg', 2, 5),
(57, 'ao-so-mi-co-duc-phong-cach-han-quoc-1m4G3-9e9cca_simg_d0daf0_800x1200_max.jpg', 'bbfc37317af69aae39b89f716ee770c4.jpg', 88, 800, 988, 'jpeg', 'bbfc37317af69aae39b89f716ee770c4', '.jpg', 2, 6),
(58, 'ao-so-mi-co-duc-phong-cach-han-quoc-1m4G3-c2edf6_simg_d0daf0_800x1200_max.jpg', '8160401077d60269b787cba4d9412c89.jpg', 59, 800, 577, 'jpeg', '8160401077d60269b787cba4d9412c89', '.jpg', 2, 6),
(59, 'ao-so-mi-co-duc-phong-cach-han-quoc-1m4G3-8c4cb9_simg_d0daf0_800x1200_max.jpg', '58e6cb86528565532ee26d84a09cd3af.jpg', 60, 800, 941, 'jpeg', '58e6cb86528565532ee26d84a09cd3af', '.jpg', 2, 6),
(60, 'ma-mm80287-ao-kieu-sanh-dieu-1m4G3-0cd6cd.jpg', 'fdf616a40b86100ea4a6eb3d3e587574.jpg', 118, 633, 553, 'jpeg', 'fdf616a40b86100ea4a6eb3d3e587574', '.jpg', 2, 7),
(61, 'ma-mm80287-ao-kieu-sanh-dieu-1m4G3-95948c.jpg', '2212796ed7744872d448e5bb5a7be3fc.jpg', 102, 593, 500, 'jpeg', '2212796ed7744872d448e5bb5a7be3fc', '.jpg', 2, 7),
(62, 'ma-mm80287-ao-kieu-sanh-dieu-1m4G3-b2f396.jpg', 'e69aac3c65b14fb2984b0715b8c4230b.jpg', 122, 594, 513, 'jpeg', 'e69aac3c65b14fb2984b0715b8c4230b', '.jpg', 2, 7),
(63, 'ao-so-mi-co-tru-zart-nhan-hieu-doc-quyen-1m4G3-04f67d_simg_d0daf0_800x1200_max.png', 'd35b93d90f21064c71cf2c89bc2ef0ac.png', 270, 720, 720, 'png', 'd35b93d90f21064c71cf2c89bc2ef0ac', '.png', 2, 8),
(64, 'ao-so-mi-co-tru-zart-nhan-hieu-doc-quyen-1m4G3-5e8b77_simg_d0daf0_800x1200_max.png', 'f99d38648efccf35614720170fa45166.png', 212, 720, 867, 'png', 'f99d38648efccf35614720170fa45166', '.png', 2, 8),
(65, 'ao-so-mi-co-tru-zart-nhan-hieu-doc-quyen-1m4G3-029c77_simg_d0daf0_800x1200_max.png', '592417e715df813b3887fc544d99fb1d.png', 216, 720, 867, 'png', '592417e715df813b3887fc544d99fb1d', '.png', 2, 8),
(66, 'ao-so-mi-tay-lo-ah012-phong-cach-han-quoc-1m4G3-5a2477_simg_5528dd_576x576_max.jpg', 'ae16f1c92a85857a8336639c5dbfde97.jpg', 57, 576, 576, 'jpeg', 'ae16f1c92a85857a8336639c5dbfde97', '.jpg', 2, 9),
(67, 'ao-so-mi-co-duc-phong-cach-han-quoc-1m4G3-8c4cb9_simg_d0daf0_800x1200_max.jpg', 'b9acd276b0dd3d873a3d1eb662e39d64.jpg', 60, 800, 941, 'jpeg', 'b9acd276b0dd3d873a3d1eb662e39d64', '.jpg', 2, 9),
(68, 'ao-so-mi-tay-lo-ah012-phong-cach-han-quoc-1m4G3-14fe83_simg_d0daf0_800x1200_max.jpg', '03d841b709a69fbb992994511255669f.jpg', 81, 800, 603, 'jpeg', '03d841b709a69fbb992994511255669f', '.jpg', 2, 9),
(69, 'hang-loai-1-ao-so-mi-tay-dai-ms682-1m4G3-a72f20_simg_a2dfa1_720-720-0-0_cropf_simg_d0daf0_800x1200_max.jpg', 'd9cd4f397849f272ef212d6a13abd839.jpg', 113, 720, 720, 'jpeg', 'd9cd4f397849f272ef212d6a13abd839', '.jpg', 2, 10),
(70, 'hang-loai-1-ao-so-mi-tay-dai-ms682-1m4G3-2f3671_simg_d0daf0_800x1200_max.jpg', 'f06d9a2ba259231789344598f102932f.jpg', 144, 618, 1200, 'jpeg', 'f06d9a2ba259231789344598f102932f', '.jpg', 2, 10),
(71, 'hang-loai-1-ao-so-mi-tay-dai-ms682-1m4G3-2f3671_simg_d0daf0_800x1200_max_(1).jpg', '2cac03739404d21ad42cbe6a36d08a75.jpg', 144, 618, 1200, 'jpeg', '2cac03739404d21ad42cbe6a36d08a75', '.jpg', 2, 10),
(72, 'ao-so-mi-tay-ngan-tn48-1m4G3-ao-so-mi-tay-ngan-tn47-1m4G3-99f3de_simg_d0daf0_800x1200_max.jpg', 'fa4f12eacf692ee6769970f5713da022.jpg', 86, 720, 720, 'jpeg', 'fa4f12eacf692ee6769970f5713da022', '.jpg', 2, 11),
(73, 'ao-so-mi-tay-ngan-tn48-1m4G3-ao-so-mi-tay-ngan-tn47-1m4G3-005532_simg_d0daf0_800x1200_max.jpg', '80fb76c7193228504ce7142da967b666.jpg', 81, 720, 720, 'jpeg', '80fb76c7193228504ce7142da967b666', '.jpg', 2, 11),
(74, 'ao-so-mi-tay-ngan-tn48-1m4G3-ao-so-mi-tay-ngan-tn47-1m4G3-562637_simg_d0daf0_800x1200_max.jpg', '1cee194da2850e2647967b43fd2008d5.jpg', 93, 720, 720, 'jpeg', '1cee194da2850e2647967b43fd2008d5', '.jpg', 2, 11),
(75, 'ao-so-mi-tay-ngan-tn48-1m4G3-ao-so-mi-tay-ngan-tn47-1m4G3-e04f62_simg_d0daf0_800x1200_max.jpg', 'e85fbe9b1c7c02a4ea3c1f6afd1b8f85.jpg', 102, 720, 720, 'jpeg', 'e85fbe9b1c7c02a4ea3c1f6afd1b8f85', '.jpg', 2, 12),
(76, 'ao-so-mi-tay-ngan-tn48-1m4G3-ao-so-mi-tay-ngan-tn47-1m4G3-be0ca3_simg_d0daf0_800x1200_max.jpg', '0510b0b828b2284ebe71479915fd16e5.jpg', 94, 720, 720, 'jpeg', '0510b0b828b2284ebe71479915fd16e5', '.jpg', 2, 12),
(77, 'ao-so-mi-tay-ngan-tn48-1m4G3-ao-so-mi-tay-ngan-tn47-1m4G3-562637_simg_d0daf0_800x1200_max.jpg', 'c1466facbebc343c8821ae3427ab7ae2.jpg', 93, 720, 720, 'jpeg', 'c1466facbebc343c8821ae3427ab7ae2', '.jpg', 2, 12),
(78, 'ao-so-mi-tay-ngan-tn48-1m4G3-ao-so-mi-tay-ngan-tn47-1m4G3-99f3de_simg_d0daf0_800x1200_max.jpg', '1916d0ae59c5ed829f5f8821e721b7f8.jpg', 86, 720, 720, 'jpeg', '1916d0ae59c5ed829f5f8821e721b7f8', '.jpg', 2, 13),
(79, 'ao-so-mi-tay-ngan-tn48-1m4G3-ao-so-mi-tay-ngan-tn47-1m4G3-005532_simg_d0daf0_800x1200_max.jpg', '9aa0a74ee014219479acaddb2f52ed92.jpg', 81, 720, 720, 'jpeg', '9aa0a74ee014219479acaddb2f52ed92', '.jpg', 2, 13),
(80, 'ao-so-mi-tay-ngan-tn48-1m4G3-ao-so-mi-tay-ngan-tn47-1m4G3-e04f62_simg_d0daf0_800x1200_max.jpg', '80b3bb14dd594b61228e7aa09c8e7105.jpg', 102, 720, 720, 'jpeg', '80b3bb14dd594b61228e7aa09c8e7105', '.jpg', 2, 13),
(81, 'ao-so-mi-nam-han-quoc-hq094-1m4G3-40512b_simg_d0daf0_800x1200_max.png', 'a8e1b8e34a8f6e49d6ceb7d34873ff20.png', 615, 720, 722, 'png', 'a8e1b8e34a8f6e49d6ceb7d34873ff20', '.png', 2, 14),
(82, 'ao-so-mi-nam-han-quoc-hq094-1m4G3-a88d13_simg_d0daf0_800x1200_max.png', '80ab90a15507b4cbd56176c5cd4a8c1b.png', 552, 742, 753, 'png', '80ab90a15507b4cbd56176c5cd4a8c1b', '.png', 2, 14),
(83, 'ao-so-mi-nam-han-quoc-hq094-1m4G3-7d8979_simg_d0daf0_800x1200_max.png', '0b7bfc7e8caeb0a079b4d4aca30e5a38.png', 655, 800, 719, 'png', '0b7bfc7e8caeb0a079b4d4aca30e5a38', '.png', 2, 14),
(84, 'ao-so-mi-nam-han-quoc-hq094-1m4G3-7d8979_simg_d0daf0_800x1200_max.png', '6b2ca93b90991f435b111bc3969e4735.png', 655, 800, 719, 'png', '6b2ca93b90991f435b111bc3969e4735', '.png', 2, 15),
(85, 'ao-so-mi-nam-co-tru-cach-dieu-hq092-1m4G3-dc6455_simg_d0daf0_800x1200_max.png', 'eaadc8822c6af7d93457cd582fc6af68.png', 926, 720, 942, 'png', 'eaadc8822c6af7d93457cd582fc6af68', '.png', 2, 15),
(86, 'ao-so-mi-nam-co-tru-cach-dieu-hq092-1m4G3-ba8898_simg_d0daf0_800x1200_max.png', '758160773f976af74fc3dbfb849510d2.png', 451, 543, 800, 'png', '758160773f976af74fc3dbfb849510d2', '.png', 2, 15),
(87, 'ao-thun-cho-be-bb-07-1m4G3-175b0b_simg_d0daf0_800x1200_max.jpg', 'b51789e55988d2f0312ece0b77c41799.jpg', 107, 720, 960, 'jpeg', 'b51789e55988d2f0312ece0b77c41799', '.jpg', 2, 16),
(88, 'dam-d6037vn-m2sgs250-1m4G3-a22e2a_simg_d0daf0_800x1200_max.jpg', 'b39fec162e7dd43d472abbe5bf5ed873.jpg', 113, 800, 960, 'jpeg', 'b39fec162e7dd43d472abbe5bf5ed873', '.jpg', 2, 16),
(89, 'ao-so-mi-co-duc-phong-cach-han-quoc-1m4G3-c2edf6_simg_d0daf0_800x1200_max.jpg', 'afb7f3ee2c6d201eaf83748f88a7c086.jpg', 59, 800, 577, 'jpeg', 'afb7f3ee2c6d201eaf83748f88a7c086', '.jpg', 2, 16),
(90, 'ao-3-lo-size-trung-vai-cuc-dep-thoang-mat-1m4G3-4aac98_simg_d0daf0_800x1200_max.jpg', '8b3dee473acddbbabe5845d3255936e8.jpg', 39, 720, 861, 'jpeg', '8b3dee473acddbbabe5845d3255936e8', '.jpg', 2, 17),
(91, 'ao-3-lo-size-trung-vai-cuc-dep-thoang-mat-1m4G3-71006d_simg_d0daf0_800x1200_max.jpg', '4289b4c4f16a37bca188c7fb87e219fa.jpg', 37, 720, 816, 'jpeg', '4289b4c4f16a37bca188c7fb87e219fa', '.jpg', 2, 17),
(92, 'ao-3-lo-size-trung-vai-cuc-dep-thoang-mat-1m4G3-4aac98_simg_d0daf0_800x1200_max.jpg', 'ff51ecfb27da51f4d5557321d9560a6c.jpg', 39, 720, 861, 'jpeg', 'ff51ecfb27da51f4d5557321d9560a6c', '.jpg', 2, 17),
(93, 'ao-3-lo-size-trung-vai-cuc-dep-thoang-mat-1m4G3-4aac98_simg_d0daf0_800x1200_max.jpg', '4afea00d9b1d12797592315633bda522.jpg', 39, 720, 861, 'jpeg', '4afea00d9b1d12797592315633bda522', '.jpg', 2, 18),
(94, 'ao-thun-in-sao-littlemon-1m4G3-78635b_simg_d0daf0_800x1200_max.jpg', '3873cf9b838f43cac28350933759b11a.jpg', 115, 800, 1066, 'jpeg', '3873cf9b838f43cac28350933759b11a', '.jpg', 2, 18),
(95, 'ao-thun-in-sao-littlemon-1m4G3-68e973_simg_d0daf0_800x1200_max.jpg', '700daab5126d608e34ae0d138de75b29.jpg', 106, 720, 725, 'jpeg', '700daab5126d608e34ae0d138de75b29', '.jpg', 2, 18),
(96, 'ao-thun-in-sao-littlemon-1m4G3-78635b_simg_d0daf0_800x1200_max.jpg', '8318e42ef00fe88eb6a16fd38ec919fa.jpg', 115, 800, 1066, 'jpeg', '8318e42ef00fe88eb6a16fd38ec919fa', '.jpg', 2, 19),
(97, 'ao-thun-carter-1m4G3-1111d8_simg_d0daf0_800x1200_max.jpg', 'b660b4b59f35d7fef3211c7fc93278cf.jpg', 54, 720, 812, 'jpeg', 'b660b4b59f35d7fef3211c7fc93278cf', '.jpg', 2, 19),
(98, 'ao-thun-nhap-khau-seven-kieu-dap-chu-noi-hong-1m4G3-4e67eb_simg_d0daf0_800x1200_max.jpg', 'ae30496d470dcdcba69fef989b9aacbb.jpg', 198, 800, 1067, 'jpeg', 'ae30496d470dcdcba69fef989b9aacbb', '.jpg', 2, 20),
(99, 'ao-thun-nhap-khau-seven-kieu-dap-chu-noi-hong-1m4G3-cd6869_simg_d0daf0_800x1200_max.jpg', '65f1ce5d255cdc4189257629fca5b107.jpg', 89, 800, 600, 'jpeg', '65f1ce5d255cdc4189257629fca5b107', '.jpg', 2, 20),
(100, 'ao-thun-nhap-khau-seven-kieu-dap-chu-noi-hong-1m4G3-8ebc71_simg_d0daf0_800x1200_max.jpg', 'a50d4abd1834465aab11233a54e57cc2.jpg', 191, 800, 1067, 'jpeg', 'a50d4abd1834465aab11233a54e57cc2', '.jpg', 2, 20),
(104, '17ed81b442331120e96ddf81555a991b.jpg', '3d13eeb154bd5e39f36674600fe1027d.jpg', 324, 960, 960, 'jpeg', '3d13eeb154bd5e39f36674600fe1027d', '.jpg', 2, 21),
(105, '420b63b0e68d4547575cb6f73de9e69a.jpg', 'e01281bacd836101d2d58b50bb1c7d59.jpg', 387, 750, 600, 'jpeg', 'e01281bacd836101d2d58b50bb1c7d59', '.jpg', 2, 21),
(106, '513dc0b45727b8654ceeeb0b1aefb358.jpg', '3270deedc382693ec9e174fb60570f54.jpg', 317, 750, 600, 'jpeg', '3270deedc382693ec9e174fb60570f54', '.jpg', 2, 21);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT '0',
  `birthday` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `email`, `phone`, `gender`, `birthday`) VALUES
(2, 'hungdozi', 'e10adc3949ba59abbe56e057f20f883e', 'teo em', 'lamhung30593@gmail.com', '01684857672', 0, '300593'),
(4, 'hunghung', 'e10adc3949ba59abbe56e057f20f883e', 'hung1', 'hieu@gmail.com', '01684857672', 1, '30051993'),
(5, 'tisun', 'e10adc3949ba59abbe56e057f20f883e', 'Ti Sun', 'lamhung3593@gmail.com', '1234567', 1, '300593'),
(6, 'tingu', 'e10adc3949ba59abbe56e057f20f883e', 'Tí Ngu', 'lamhungspiderman123@gmail.com', '016848576721', 1, '04/28/2016'),
(7, 'lamhungTi', 'e10adc3949ba59abbe56e057f20f883e', 'Ti Sun', 'hieu123@gmail.com', '1234567', 1, '29/05/2016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logger`
--
ALTER TABLE `logger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `logger`
--
ALTER TABLE `logger`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
