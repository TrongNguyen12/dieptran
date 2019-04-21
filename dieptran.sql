-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 21, 2019 lúc 07:46 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dieptran`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `nameeg` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `titleeg` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `contenteg` text COLLATE utf8mb4_unicode_ci,
  `titlecontent1` text COLLATE utf8mb4_unicode_ci,
  `titlecontent1eg` text COLLATE utf8mb4_unicode_ci,
  `content1` text COLLATE utf8mb4_unicode_ci,
  `content1eg` text COLLATE utf8mb4_unicode_ci,
  `titlecontent2` text COLLATE utf8mb4_unicode_ci,
  `titlecontent2eg` text COLLATE utf8mb4_unicode_ci,
  `content2` text COLLATE utf8mb4_unicode_ci,
  `content2eg` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `titleseo` text COLLATE utf8mb4_unicode_ci,
  `titleseoeg` text COLLATE utf8mb4_unicode_ci,
  `keywordseo` text COLLATE utf8mb4_unicode_ci,
  `keywordseoeg` text COLLATE utf8mb4_unicode_ci,
  `descriptionseo` text COLLATE utf8mb4_unicode_ci,
  `descriptionseoeg` text COLLATE utf8mb4_unicode_ci,
  `namhd` text COLLATE utf8mb4_unicode_ci,
  `duanHT` text COLLATE utf8mb4_unicode_ci,
  `khthanthiet` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `about`
--

INSERT INTO `about` (`id`, `name`, `nameeg`, `title`, `titleeg`, `content`, `contenteg`, `titlecontent1`, `titlecontent1eg`, `content1`, `content1eg`, `titlecontent2`, `titlecontent2eg`, `content2`, `content2eg`, `photo`, `titleseo`, `titleseoeg`, `keywordseo`, `keywordseoeg`, `descriptionseo`, `descriptionseoeg`, `namhd`, `duanHT`, `khthanthiet`, `created_at`, `updated_at`) VALUES
(1, 'CÔNG TY TNHH MTV THIẾT KẾ IN ẤN VÀ QUẢNG CÁO DIỆP TRẦN', 'DIEP TRAN PRINTING DESIGN AND ADVERTISING COMPANY LIMITED', 'Chào mừng đến với đội ngũ Thiết kế, Gia công, Sản xuất năng động, sáng tạo, hiệu quả và chuyên nghiệp', 'Welcome to the Dynamic, Creative, Efficient and Professional design, machining, and production team', '<h2 class=\"bold s25 py-4 apage-stit\"><span style=\"font-size:16px;\"><strong>S&Aacute;NG TẠO - CHẤT LƯỢNG L&Agrave; THƯỚC ĐO CỦA SỰ TH&Agrave;NH C&Ocirc;NG</strong></span></h2>\r\n\r\n<p><sup><span style=\"font-size:22px;\"><strong>Đ</strong></span><span style=\"font-size:16px;\">ược th&agrave;nh lập từ năm 2010, trải qua 9 năm x&acirc;y dựng v&agrave; ph&aacute;t triển, Diệp Trần đ&atilde; dần dần c&oacute; chỗ đứng nhất định trong ng&agrave;nh In ấn v&agrave; Quảng c&aacute;o tại TP.HCM. Sản phẩm của Diệp Trần được y&ecirc;u th&iacute;ch v&agrave; đ&aacute;nh gi&aacute; cao trước hết l&agrave; nhờ thiết kế độc đ&aacute;o, s&aacute;ng tạo v&agrave; tiện dụng, thứ hai l&agrave; gi&aacute; th&agrave;nh hợp l&yacute; đi k&egrave;m với sự phục vụ chuy&ecirc;n nghiệp của đội ngũ nh&acirc;n vi&ecirc;n tận t&acirc;m. Chất lượng ch&iacute;nh l&agrave; mục ti&ecirc;u ti&ecirc;n quyết v&agrave; l&agrave; cam kết vững chắc nhất m&agrave; ch&uacute;ng t&ocirc;i theo đuổi nhằm đem đến cho kh&aacute;ch h&agrave;ng những sản phẩm v&agrave; dịch vụ ho&agrave;n hảo nhất, l&agrave;m tiền đề cho sự ph&aacute;t triển của một thương hiệu Diệp Trần lấy uy t&iacute;n l&agrave;m trọng t&acirc;m.</span></sup></p>', '<h2 class=\"bold s25 py-4 apage-stit\">WE EXIST TO ACTIVATE PASSIONATE BRANDS ENGLISH EG</h2>\r\n\r\n<p>Diep Tran is a digital and creative agency. We create, design and build memorable, high-end digital brand solutions and experiences that are strategy driven, artfully designed and elegantly engineered.</p>\r\n\r\n<p>What makes us different? We merge art, design, information and technology into an exciting new communication concept.</p>\r\n\r\n<p>Becoming your partner in revolutionizing your brand identity, our team of artists: strategists, designers and project managers will deploy their talents to meet.</p>', 'TẦM NHÌN', 'VISION', '<p>TRONG 10 NĂM TIẾP THEO,&nbsp;</p>', '<p style=\"margin-left: 40px;\"><span style=\"font-size:20px;\">&nbsp; &nbsp;</span><strong>BECOME A LEADING COMPANY IN VIETNAM</strong></p>', 'SỨ MỆNH', 'SỨ MỆNH', '<p style=\"text-align: justify;\"><span style=\"font-size:20px;\"><strong>T</strong></span>ừ những c&aacute; nh&acirc;n xuất sắc, ch&uacute;ng t&ocirc;i x&acirc;y dựng v&agrave; sở hữu một đội ngũ nh&acirc;n sự c&oacute; năng lực, chuy&ecirc;n nghiệp, năng động s&aacute;ng tạo c&ugrave;ng với những &yacute; tưởng mang t&iacute;nh đột ph&aacute; nhằm tạo ra những sản phẩm kh&aacute;c biệt, hỗ trợ sự ph&aacute;t triển bền vững cho c&aacute;c doanh nghiệp. L&agrave; cầu nối đưa h&igrave;nh ảnh thương hiệu của c&aacute;c doanh nghiệp tới t&acirc;m tr&iacute; người ti&ecirc;u d&ugrave;ng. Thỏa m&atilde;n kh&aacute;t vọng đổi mới v&agrave; s&aacute;ng tạo kh&ocirc;ng ngừng của nh&acirc;n loại.</p>', '<p style=\"text-align: justify;\"><span style=\"font-size:20px;\"><strong>F</strong></span>rom outstanding individuals, we build and own a team of capable, professional, dynamic and creative staff with breakthrough ideas to create different, supportive products. sustainable development for businesses. Is a bridge to bring the brand image of businesses to consumers&#39; minds. Satisfying human desire for innovation and ceaseless creativity.</p>', '1', 'Title', 'Title(English)', 'Keyword', 'Keyword(English)', 'Description', 'Description(English)', '9', '2000', '280', '2019-04-09 17:00:00', '2019-04-18 21:19:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `abouthome`
--

CREATE TABLE `abouthome` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `decs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `abouthome`
--

INSERT INTO `abouthome` (`id`, `decs`, `video`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align: justify;\"><strong>DIỆP TRẦN&nbsp;</strong>đ&atilde; v&agrave; đang bắt đầu những bước tiến lớn tr&ecirc;n con đường x&acirc;y dựng h&igrave;nh ảnh một c&ocirc;ng ty trẻ năng động, kh&ocirc;ng ngừng vươn l&ecirc;n. Với đội ngũ nh&acirc;n vi&ecirc;n kinh nghiệm - chuy&ecirc;n nghiệp, ch&uacute;ng t&ocirc;i nhận thấy được sự ph&aacute;t triển mạnh mẽ cũng như tầm quan trọng của <strong>IN ẤN - QUẢNG C&Aacute;O</strong> trong m&ocirc;i trường C&ocirc;ng nghiệp h&oacute;a - Hiện đại h&oacute;a ng&agrave;y nay.&nbsp;</p>', '1', 1, NULL, '2019-04-18 18:40:48'),
(2, '<p><strong>DIEP TRAN </strong>has begun to make great strides on the way to build a dynamic young company image. With a staff of experienced - professional, we recognize the strong development as well as the importance of <strong>PRINTING - ADVERTISING</strong> in the industrialization - Modernization environment today. From the practical need Diep Tran was born in order to bring customers a new and new level through the products that we created.</p>', '', 0, NULL, '2019-04-18 18:51:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catepost`
--

CREATE TABLE `catepost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `keyword` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `nameeg` text COLLATE utf8mb4_unicode_ci,
  `titleeg` text COLLATE utf8mb4_unicode_ci,
  `keywordeg` text COLLATE utf8mb4_unicode_ci,
  `descriptioneg` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catepost`
--

INSERT INTO `catepost` (`id`, `name`, `slug`, `title`, `keyword`, `description`, `nameeg`, `titleeg`, `keywordeg`, `descriptioneg`, `status`, `lang`, `created_at`, `updated_at`) VALUES
(2, 'Mùa Trung Thu', 'mua-trung-thu', 'Trung Thu', 'trung thu\r\nhop qua\r\nqua tang\r\nhop banh\r\nbanh trung thu', 'Mua trung thu 2019', 'Quà tặng EG', 'Quà tặng EG', 'Title(English)', 'Title(English)', 1, 'vi', '2019-04-11 06:34:50', '2019-04-18 20:07:14'),
(6, 'Tuyển dụng', 'tuyen-dung', 'tuyen-dung', 'Tuyển dụng', 'Nội dung phần tuyển dụng', 'tuyen-dung', 'tuyen-dung', 'tuyen-dung', 'tuyen-dung', 1, 'vi', '2019-04-12 01:46:13', '2019-04-18 19:46:03'),
(7, 'tên danh mục bài viết', 'ten-danh-muc-bai-viet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'vi', '2019-04-18 00:12:40', '2019-04-18 00:12:40'),
(8, 'Lịch tết 2020', 'lich-tet-2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'vi', '2019-04-18 22:01:38', '2019-04-18 22:01:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contactinfo`
--

CREATE TABLE `contactinfo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contactinfo`
--

INSERT INTO `contactinfo` (`id`, `name`, `phone`, `email`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Diep', '0123', 'dieptranco.design2@gmail.com', 'test', 'test website', 1, '2019-04-19 01:10:40', '2019-04-19 01:15:57'),
(10, 'VÕ THỊ KIỀU TIÊN', '979413196', 'kieutienvo96@gmail.com', 'muốn tv', 'tv làm logo', 1, '2019-04-19 01:14:11', '2019-04-19 01:14:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detalsevice`
--

CREATE TABLE `detalsevice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `shortdescription` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `titleseo` text COLLATE utf8mb4_unicode_ci,
  `keywordseo` text COLLATE utf8mb4_unicode_ci,
  `descriptionseo` text COLLATE utf8mb4_unicode_ci,
  `dateUpdate` date DEFAULT NULL,
  `contenteg` text COLLATE utf8mb4_unicode_ci,
  `shortdescriptioneg` text COLLATE utf8mb4_unicode_ci,
  `titleeg` text COLLATE utf8mb4_unicode_ci,
  `titleseoeg` text COLLATE utf8mb4_unicode_ci,
  `keywordseoeg` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT NULL,
  `descriptionseoeg` text COLLATE utf8mb4_unicode_ci,
  `id_cateSevice` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detalsevice`
--

INSERT INTO `detalsevice` (`id`, `title`, `shortdescription`, `slug`, `content`, `photo`, `titleseo`, `keywordseo`, `descriptionseo`, `dateUpdate`, `contenteg`, `shortdescriptioneg`, `titleeg`, `titleseoeg`, `keywordseoeg`, `status`, `descriptionseoeg`, `id_cateSevice`, `created_at`, `updated_at`) VALUES
(26, 'BROCHURE', 'Để phát triển thành “bậc thầy” trong kiểu dáng truyền bá, bạn phải đi từ các bậc phải chăng nhất, trong khoảng những hiểu biết cơ bản về truyền bá, về kiểu dáng. Điều trước tiên Anh chị phải biết rõ bề ngoài đồ họa là gì?', 'brochure', '<p>Để ph&aacute;t triển th&agrave;nh &ldquo;bậc thầy&rdquo; trong kiểu d&aacute;ng truyền b&aacute;, bạn phải đi từ c&aacute;c bậc phải chăng nhất, trong khoảng những hiểu biết cơ bản về truyền b&aacute;, về kiểu d&aacute;ng. Điều trước ti&ecirc;n Anh chị phải biết r&otilde; bề ngo&agrave;i đồ họa l&agrave; g&igrave;? mẫu m&atilde; đồ họa nhắc một c&aacute;ch ngắn gọn l&agrave; việc ngoại h&igrave;nh những sản phẩm d&ugrave;ng trong in ấn, bề ngo&agrave;i những h&igrave;nh trạng tr&ecirc;n 1 mặt phẳng (thường gọi l&agrave; 2D). c&aacute;c sản phẩm của ngoại h&igrave;nh đồ họa sở hữu thể thấy như poster, những cuốn s&aacute;ch giới thiệu, b&igrave;a b&aacute;o ch&iacute;, &hellip; V&agrave; để khiến được những sản phẩm như vậy đ&ograve;i hỏi người ngo&agrave;i mặt ngo&agrave;i c&aacute;c kiến thức mỹ thuật căn bản c&ograve;n phải nắm vững c&aacute;c kiến thức kh&aacute;c như về tiếp thị, về truyền th&ocirc;ng, v&agrave; phải c&oacute; khả năng sử dụng phần mềm &aacute;p dụng ti&ecirc;u d&ugrave;ng trong lĩnh vực n&agrave;y.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.tamnhindep.com/upload/images/thiet%20ke%20in%20an%20quang%20cao%202.jpg\" /></p>\r\n\r\n<p>kh&ocirc;ng những thế, quảng b&aacute; một sản phẩm, C&aacute;c bạn &ndash; những đơn vị&nbsp;<a href=\"http://www.tamnhindep.com/thiet-ke-in-an.html\"><strong>thiết kế in ấn</strong></a>&nbsp;tương lai phải hiểu được vấn đề m&agrave; c&aacute;c bạn bắt buộc. trong khoảng những th&ocirc;ng b&aacute;o chậm tiến độ, bạn phải Nhận định về nh&atilde;n h&agrave;ng, trị gi&aacute; của nh&atilde;n h&agrave;ng v&agrave; vị tr&iacute; của n&oacute; tr&ecirc;n thị phần, dựa v&agrave;o Đ&oacute; để đưa ra những &yacute; tưởng ph&ugrave; hợp. đơn vị&nbsp;<a href=\"http://www.tamnhindep.com/\"><strong>thiết kế quảng c&aacute;o</strong></a>&nbsp;kh&ocirc;ng đơn giản tạo ra những sản phẩm mới m&agrave; c&ograve;n l&agrave; c&ocirc;ng t&aacute;c cải tiến những sản phẩm cũ để ph&ugrave; hợp hơn, l&ocirc;i cuốn hơn. bởi thế, nếu như quyết định theo ng&agrave;nh th&igrave; bạn cũng cần phải c&oacute; nhiều tố chất như: s&aacute;ng tạo, khả năng tự học, kỹ năng ti&ecirc;u d&ugrave;ng phần mềm, kỹ năng truyền th&ocirc;ng, v&agrave; t&iacute;nh kỹ luật, ch&iacute;nh x&aacute;c cao.</p>', '1555657755_in-an-brochure-1.jpg', NULL, NULL, NULL, '2019-04-19', '<p>In order to develop into a &quot;master&quot; in a propaganda style, you must go from the most affordable, in the basic understanding of dissemination and style. First thing you have to know what is the graphic appearance? Graphic models briefly mention the appearance of the products used in printing, the appearance of the appearance on a plane (often called 2D). The products of graphic looks can be seen as posters, brochures, press covers, etc. And to make such products require outsiders the basic art knowledge must be master other knowledge such as marketing, communication, and must be able to use software that applies consumption in this area.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.tamnhindep.com/upload/images/thiet%20ke%20in%20an%20quang%20cao%202.jpg\" /></p>\r\n\r\n<p data-fulltext=\"\" data-placeholder=\"Bản dịch\" dir=\"ltr\" id=\"tw-target-text\">Not only that, promoting a product, You - future print designers must understand the problem you are required. In the range of delayed announcements, you must Appreciate the brand, the value of the brand and its position in the market share, based on that to give the right ideas. Advertising design units are not simply creating new products but also improving old products to be more suitable and attractive. Therefore, if you decide by industry, you also need to have many qualities such as creativity, self-study ability, software consumption skills, communication skills, and discipline, high accuracy.</p>', 'In order to develop into a \"master\" in a propaganda style, you must go from the most affordable, in the basic understanding of dissemination and style. First thing you have to know what is the graphic appearance?', 'Exclusive logo design', NULL, NULL, 1, NULL, 14, '2019-04-12 08:20:44', '2019-04-19 00:09:15'),
(27, 'LEAFLET', 'Để phát triển thành “bậc thầy” trong kiểu dáng truyền bá, bạn phải đi từ các bậc phải chăng nhất, trong khoảng những hiểu biết cơ bản về truyền bá, về kiểu dáng. Điều trước tiên Anh chị phải biết rõ bề ngoài đồ họa là gì?', 'leaflet', '<p>Để ph&aacute;t triển th&agrave;nh &ldquo;bậc thầy&rdquo; trong kiểu d&aacute;ng truyền b&aacute;, bạn phải đi từ c&aacute;c bậc phải chăng nhất, trong khoảng những hiểu biết cơ bản về truyền b&aacute;, về kiểu d&aacute;ng. Điều trước ti&ecirc;n Anh chị phải biết r&otilde; bề ngo&agrave;i đồ họa l&agrave; g&igrave;? mẫu m&atilde; đồ họa nhắc một c&aacute;ch ngắn gọn l&agrave; việc ngoại h&igrave;nh những sản phẩm d&ugrave;ng trong in ấn, bề ngo&agrave;i những h&igrave;nh trạng tr&ecirc;n 1 mặt phẳng (thường gọi l&agrave; 2D). c&aacute;c sản phẩm của ngoại h&igrave;nh đồ họa sở hữu thể thấy như poster, những cuốn s&aacute;ch giới thiệu, b&igrave;a b&aacute;o ch&iacute;, &hellip; V&agrave; để khiến được những sản phẩm như vậy đ&ograve;i hỏi người ngo&agrave;i mặt ngo&agrave;i c&aacute;c kiến thức mỹ thuật căn bản c&ograve;n phải nắm vững c&aacute;c kiến thức kh&aacute;c như về tiếp thị, về truyền th&ocirc;ng, v&agrave; phải c&oacute; khả năng sử dụng phần mềm &aacute;p dụng ti&ecirc;u d&ugrave;ng trong lĩnh vực n&agrave;y.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.tamnhindep.com/upload/images/thiet%20ke%20in%20an%20quang%20cao%202.jpg\" /></p>\r\n\r\n<p>kh&ocirc;ng những thế, quảng b&aacute; một sản phẩm, C&aacute;c bạn &ndash; những đơn vị&nbsp;<a href=\"http://www.tamnhindep.com/thiet-ke-in-an.html\"><strong>thiết kế in ấn</strong></a>&nbsp;tương lai phải hiểu được vấn đề m&agrave; c&aacute;c bạn bắt buộc. trong khoảng những th&ocirc;ng b&aacute;o chậm tiến độ, bạn phải Nhận định về nh&atilde;n h&agrave;ng, trị gi&aacute; của nh&atilde;n h&agrave;ng v&agrave; vị tr&iacute; của n&oacute; tr&ecirc;n thị phần, dựa v&agrave;o Đ&oacute; để đưa ra những &yacute; tưởng ph&ugrave; hợp. đơn vị&nbsp;<a href=\"http://www.tamnhindep.com/\"><strong>thiết kế quảng c&aacute;o</strong></a>&nbsp;kh&ocirc;ng đơn giản tạo ra những sản phẩm mới m&agrave; c&ograve;n l&agrave; c&ocirc;ng t&aacute;c cải tiến những sản phẩm cũ để ph&ugrave; hợp hơn, l&ocirc;i cuốn hơn. bởi thế, nếu như quyết định theo ng&agrave;nh th&igrave; bạn cũng cần phải c&oacute; nhiều tố chất như: s&aacute;ng tạo, khả năng tự học, kỹ năng ti&ecirc;u d&ugrave;ng phần mềm, kỹ năng truyền th&ocirc;ng, v&agrave; t&iacute;nh kỹ luật, ch&iacute;nh x&aacute;c cao.</p>', '1555657821_in-an-to-roi-1.jpg', NULL, NULL, NULL, '2019-04-19', '<p>In order to develop into a &quot;master&quot; in a propaganda style, you must go from the most affordable, in the basic understanding of dissemination and style. First thing you have to know what is the graphic appearance? Graphic models briefly mention the appearance of the products used in printing, the appearance of the appearance on a plane (often called 2D). The products of graphic looks can be seen as posters, brochures, press covers, etc. And to make such products require outsiders the basic art knowledge must be master other knowledge such as marketing, communication, and must be able to use software that applies consumption in this area.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.tamnhindep.com/upload/images/thiet%20ke%20in%20an%20quang%20cao%202.jpg\" /></p>\r\n\r\n<p data-fulltext=\"\" data-placeholder=\"Bản dịch\" dir=\"ltr\" id=\"tw-target-text\">Not only that, promoting a product, You - future print designers must understand the problem you are required. In the range of delayed announcements, you must Appreciate the brand, the value of the brand and its position in the market share, based on that to give the right ideas. Advertising design units are not simply creating new products but also improving old products to be more suitable and attractive. Therefore, if you decide by industry, you also need to have many qualities such as creativity, self-study ability, software consumption skills, communication skills, and discipline, high accuracy.</p>', 'In order to develop into a \"master\" in a propaganda style, you must go from the most affordable, in the basic understanding of dissemination and style. First thing you have to know what is the graphic appearance?', 'NAMECARD', NULL, NULL, 1, NULL, 14, '2019-04-12 01:20:44', '2019-04-19 00:10:21'),
(28, 'LOGO', 'Để phát triển thành “bậc thầy” trong kiểu dáng truyền bá, bạn phải đi từ các bậc phải chăng nhất, trong khoảng những hiểu biết cơ bản về truyền bá, về kiểu dáng. Điều trước tiên Anh chị phải biết rõ bề ngoài đồ họa là gì?', 'logo', '<p>Để ph&aacute;t triển th&agrave;nh &ldquo;bậc thầy&rdquo; trong kiểu d&aacute;ng truyền b&aacute;, bạn phải đi từ c&aacute;c bậc phải chăng nhất, trong khoảng những hiểu biết cơ bản về truyền b&aacute;, về kiểu d&aacute;ng. Điều trước ti&ecirc;n Anh chị phải biết r&otilde; bề ngo&agrave;i đồ họa l&agrave; g&igrave;? mẫu m&atilde; đồ họa nhắc một c&aacute;ch ngắn gọn l&agrave; việc ngoại h&igrave;nh những sản phẩm d&ugrave;ng trong in ấn, bề ngo&agrave;i những h&igrave;nh trạng tr&ecirc;n 1 mặt phẳng (thường gọi l&agrave; 2D). c&aacute;c sản phẩm của ngoại h&igrave;nh đồ họa sở hữu thể thấy như poster, những cuốn s&aacute;ch giới thiệu, b&igrave;a b&aacute;o ch&iacute;, &hellip; V&agrave; để khiến được những sản phẩm như vậy đ&ograve;i hỏi người ngo&agrave;i mặt ngo&agrave;i c&aacute;c kiến thức mỹ thuật căn bản c&ograve;n phải nắm vững c&aacute;c kiến thức kh&aacute;c như về tiếp thị, về truyền th&ocirc;ng, v&agrave; phải c&oacute; khả năng sử dụng phần mềm &aacute;p dụng ti&ecirc;u d&ugrave;ng trong lĩnh vực n&agrave;y.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.tamnhindep.com/upload/images/thiet%20ke%20in%20an%20quang%20cao%202.jpg\" /></p>\r\n\r\n<p>kh&ocirc;ng những thế, quảng b&aacute; một sản phẩm, C&aacute;c bạn &ndash; những đơn vị&nbsp;<a href=\"http://www.tamnhindep.com/thiet-ke-in-an.html\"><strong>thiết kế in ấn</strong></a>&nbsp;tương lai phải hiểu được vấn đề m&agrave; c&aacute;c bạn bắt buộc. trong khoảng những th&ocirc;ng b&aacute;o chậm tiến độ, bạn phải Nhận định về nh&atilde;n h&agrave;ng, trị gi&aacute; của nh&atilde;n h&agrave;ng v&agrave; vị tr&iacute; của n&oacute; tr&ecirc;n thị phần, dựa v&agrave;o Đ&oacute; để đưa ra những &yacute; tưởng ph&ugrave; hợp. đơn vị&nbsp;<a href=\"http://www.tamnhindep.com/\"><strong>thiết kế quảng c&aacute;o</strong></a>&nbsp;kh&ocirc;ng đơn giản tạo ra những sản phẩm mới m&agrave; c&ograve;n l&agrave; c&ocirc;ng t&aacute;c cải tiến những sản phẩm cũ để ph&ugrave; hợp hơn, l&ocirc;i cuốn hơn. bởi thế, nếu như quyết định theo ng&agrave;nh th&igrave; bạn cũng cần phải c&oacute; nhiều tố chất như: s&aacute;ng tạo, khả năng tự học, kỹ năng ti&ecirc;u d&ugrave;ng phần mềm, kỹ năng truyền th&ocirc;ng, v&agrave; t&iacute;nh kỹ luật, ch&iacute;nh x&aacute;c cao.</p>', '1555657002_thiet-ke-logo-nhan-dang-thuong-hieu-4.jpg', NULL, NULL, NULL, '2019-04-19', '<p>In order to develop into a &quot;master&quot; in a propaganda style, you must go from the most affordable, in the basic understanding of dissemination and style. First thing you have to know what is the graphic appearance? Graphic models briefly mention the appearance of the products used in printing, the appearance of the appearance on a plane (often called 2D). The products of graphic looks can be seen as posters, brochures, press covers, etc. And to make such products require outsiders the basic art knowledge must be master other knowledge such as marketing, communication, and must be able to use software that applies consumption in this area.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.tamnhindep.com/upload/images/thiet%20ke%20in%20an%20quang%20cao%202.jpg\" /></p>\r\n\r\n<p data-fulltext=\"\" data-placeholder=\"Bản dịch\" dir=\"ltr\" id=\"tw-target-text\">Not only that, promoting a product, You - future print designers must understand the problem you are required. In the range of delayed announcements, you must Appreciate the brand, the value of the brand and its position in the market share, based on that to give the right ideas. Advertising design units are not simply creating new products but also improving old products to be more suitable and attractive. Therefore, if you decide by industry, you also need to have many qualities such as creativity, self-study ability, software consumption skills, communication skills, and discipline, high accuracy.</p>', 'In order to develop into a \"master\" in a propaganda style, you must go from the most affordable, in the basic understanding of dissemination and style. First thing you have to know what is the graphic appearance?', 'FOLDER', NULL, NULL, 1, NULL, 13, '2019-04-12 01:20:44', '2019-04-18 23:57:29'),
(29, 'LỊCH BÀN', 'Để phát triển thành “bậc thầy” trong kiểu dáng truyền bá, bạn phải đi từ các bậc phải chăng nhất, trong khoảng những hiểu biết cơ bản về truyền bá, về kiểu dáng. Điều trước tiên Anh chị phải biết rõ bề ngoài đồ họa là gì?', 'lich-ban', '<p>Để ph&aacute;t triển th&agrave;nh &ldquo;bậc thầy&rdquo; trong kiểu d&aacute;ng truyền b&aacute;, bạn phải đi từ c&aacute;c bậc phải chăng nhất, trong khoảng những hiểu biết cơ bản về truyền b&aacute;, về kiểu d&aacute;ng. Điều trước ti&ecirc;n Anh chị phải biết r&otilde; bề ngo&agrave;i đồ họa l&agrave; g&igrave;? mẫu m&atilde; đồ họa nhắc một c&aacute;ch ngắn gọn l&agrave; việc ngoại h&igrave;nh những sản phẩm d&ugrave;ng trong in ấn, bề ngo&agrave;i những h&igrave;nh trạng tr&ecirc;n 1 mặt phẳng (thường gọi l&agrave; 2D). c&aacute;c sản phẩm của ngoại h&igrave;nh đồ họa sở hữu thể thấy như poster, những cuốn s&aacute;ch giới thiệu, b&igrave;a b&aacute;o ch&iacute;, &hellip; V&agrave; để khiến được những sản phẩm như vậy đ&ograve;i hỏi người ngo&agrave;i mặt ngo&agrave;i c&aacute;c kiến thức mỹ thuật căn bản c&ograve;n phải nắm vững c&aacute;c kiến thức kh&aacute;c như về tiếp thị, về truyền th&ocirc;ng, v&agrave; phải c&oacute; khả năng sử dụng phần mềm &aacute;p dụng ti&ecirc;u d&ugrave;ng trong lĩnh vực n&agrave;y.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.tamnhindep.com/upload/images/thiet%20ke%20in%20an%20quang%20cao%202.jpg\" /></p>\r\n\r\n<p>kh&ocirc;ng những thế, quảng b&aacute; một sản phẩm, C&aacute;c bạn &ndash; những đơn vị&nbsp;<a href=\"http://www.tamnhindep.com/thiet-ke-in-an.html\"><strong>thiết kế in ấn</strong></a>&nbsp;tương lai phải hiểu được vấn đề m&agrave; c&aacute;c bạn bắt buộc. trong khoảng những th&ocirc;ng b&aacute;o chậm tiến độ, bạn phải Nhận định về nh&atilde;n h&agrave;ng, trị gi&aacute; của nh&atilde;n h&agrave;ng v&agrave; vị tr&iacute; của n&oacute; tr&ecirc;n thị phần, dựa v&agrave;o Đ&oacute; để đưa ra những &yacute; tưởng ph&ugrave; hợp. đơn vị&nbsp;<a href=\"http://www.tamnhindep.com/\"><strong>thiết kế quảng c&aacute;o</strong></a>&nbsp;kh&ocirc;ng đơn giản tạo ra những sản phẩm mới m&agrave; c&ograve;n l&agrave; c&ocirc;ng t&aacute;c cải tiến những sản phẩm cũ để ph&ugrave; hợp hơn, l&ocirc;i cuốn hơn. bởi thế, nếu như quyết định theo ng&agrave;nh th&igrave; bạn cũng cần phải c&oacute; nhiều tố chất như: s&aacute;ng tạo, khả năng tự học, kỹ năng ti&ecirc;u d&ugrave;ng phần mềm, kỹ năng truyền th&ocirc;ng, v&agrave; t&iacute;nh kỹ luật, ch&iacute;nh x&aacute;c cao.</p>', '1555658240_in-an-lich-ban-2.png', NULL, NULL, NULL, '2019-04-19', '<p>In order to develop into a &quot;master&quot; in a propaganda style, you must go from the most affordable, in the basic understanding of dissemination and style. First thing you have to know what is the graphic appearance? Graphic models briefly mention the appearance of the products used in printing, the appearance of the appearance on a plane (often called 2D). The products of graphic looks can be seen as posters, brochures, press covers, etc. And to make such products require outsiders the basic art knowledge must be master other knowledge such as marketing, communication, and must be able to use software that applies consumption in this area.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.tamnhindep.com/upload/images/thiet%20ke%20in%20an%20quang%20cao%202.jpg\" /></p>\r\n\r\n<p data-fulltext=\"\" data-placeholder=\"Bản dịch\" dir=\"ltr\" id=\"tw-target-text\">Not only that, promoting a product, You - future print designers must understand the problem you are required. In the range of delayed announcements, you must Appreciate the brand, the value of the brand and its position in the market share, based on that to give the right ideas. Advertising design units are not simply creating new products but also improving old products to be more suitable and attractive. Therefore, if you decide by industry, you also need to have many qualities such as creativity, self-study ability, software consumption skills, communication skills, and discipline, high accuracy.</p>', 'In order to develop into a \"master\" in a propaganda style, you must go from the most affordable, in the basic understanding of dissemination and style. First thing you have to know what is the graphic appearance?', 'ENVELOPE', NULL, NULL, 1, NULL, 16, '2019-04-12 01:20:44', '2019-04-19 00:17:20'),
(30, 'CATALOGUE', 'Để phát triển thành “bậc thầy” trong kiểu dáng truyền bá, bạn phải đi từ các bậc phải chăng nhất, trong khoảng những hiểu biết cơ bản về truyền bá, về kiểu dáng. Điều trước tiên Anh chị phải biết rõ bề ngoài đồ họa là gì?', 'catalogue', '<p>Để ph&aacute;t triển th&agrave;nh &ldquo;bậc thầy&rdquo; trong kiểu d&aacute;ng truyền b&aacute;, bạn phải đi từ c&aacute;c bậc phải chăng nhất, trong khoảng những hiểu biết cơ bản về truyền b&aacute;, về kiểu d&aacute;ng. Điều trước ti&ecirc;n Anh chị phải biết r&otilde; bề ngo&agrave;i đồ họa l&agrave; g&igrave;? mẫu m&atilde; đồ họa nhắc một c&aacute;ch ngắn gọn l&agrave; việc ngoại h&igrave;nh những sản phẩm d&ugrave;ng trong in ấn, bề ngo&agrave;i những h&igrave;nh trạng tr&ecirc;n 1 mặt phẳng (thường gọi l&agrave; 2D). c&aacute;c sản phẩm của ngoại h&igrave;nh đồ họa sở hữu thể thấy như poster, những cuốn s&aacute;ch giới thiệu, b&igrave;a b&aacute;o ch&iacute;, &hellip; V&agrave; để khiến được những sản phẩm như vậy đ&ograve;i hỏi người ngo&agrave;i mặt ngo&agrave;i c&aacute;c kiến thức mỹ thuật căn bản c&ograve;n phải nắm vững c&aacute;c kiến thức kh&aacute;c như về tiếp thị, về truyền th&ocirc;ng, v&agrave; phải c&oacute; khả năng sử dụng phần mềm &aacute;p dụng ti&ecirc;u d&ugrave;ng trong lĩnh vực n&agrave;y.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.tamnhindep.com/upload/images/thiet%20ke%20in%20an%20quang%20cao%202.jpg\" /></p>\r\n\r\n<p>kh&ocirc;ng những thế, quảng b&aacute; một sản phẩm, C&aacute;c bạn &ndash; những đơn vị&nbsp;<a href=\"http://www.tamnhindep.com/thiet-ke-in-an.html\"><strong>thiết kế in ấn</strong></a>&nbsp;tương lai phải hiểu được vấn đề m&agrave; c&aacute;c bạn bắt buộc. trong khoảng những th&ocirc;ng b&aacute;o chậm tiến độ, bạn phải Nhận định về nh&atilde;n h&agrave;ng, trị gi&aacute; của nh&atilde;n h&agrave;ng v&agrave; vị tr&iacute; của n&oacute; tr&ecirc;n thị phần, dựa v&agrave;o Đ&oacute; để đưa ra những &yacute; tưởng ph&ugrave; hợp. đơn vị&nbsp;<a href=\"http://www.tamnhindep.com/\"><strong>thiết kế quảng c&aacute;o</strong></a>&nbsp;kh&ocirc;ng đơn giản tạo ra những sản phẩm mới m&agrave; c&ograve;n l&agrave; c&ocirc;ng t&aacute;c cải tiến những sản phẩm cũ để ph&ugrave; hợp hơn, l&ocirc;i cuốn hơn. bởi thế, nếu như quyết định theo ng&agrave;nh th&igrave; bạn cũng cần phải c&oacute; nhiều tố chất như: s&aacute;ng tạo, khả năng tự học, kỹ năng ti&ecirc;u d&ugrave;ng phần mềm, kỹ năng truyền th&ocirc;ng, v&agrave; t&iacute;nh kỹ luật, ch&iacute;nh x&aacute;c cao.</p>', '1555657869_in-an-catalogue-9.png', NULL, NULL, NULL, '2019-04-19', '<p>In order to develop into a &quot;master&quot; in a propaganda style, you must go from the most affordable, in the basic understanding of dissemination and style. First thing you have to know what is the graphic appearance? Graphic models briefly mention the appearance of the products used in printing, the appearance of the appearance on a plane (often called 2D). The products of graphic looks can be seen as posters, brochures, press covers, etc. And to make such products require outsiders the basic art knowledge must be master other knowledge such as marketing, communication, and must be able to use software that applies consumption in this area.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.tamnhindep.com/upload/images/thiet%20ke%20in%20an%20quang%20cao%202.jpg\" /></p>\r\n\r\n<p data-fulltext=\"\" data-placeholder=\"Bản dịch\" dir=\"ltr\" id=\"tw-target-text\">Not only that, promoting a product, You - future print designers must understand the problem you are required. In the range of delayed announcements, you must Appreciate the brand, the value of the brand and its position in the market share, based on that to give the right ideas. Advertising design units are not simply creating new products but also improving old products to be more suitable and attractive. Therefore, if you decide by industry, you also need to have many qualities such as creativity, self-study ability, software consumption skills, communication skills, and discipline, high accuracy.</p>', 'In order to develop into a \"master\" in a propaganda style, you must go from the most affordable, in the basic understanding of dissemination and style. First thing you have to know what is the graphic appearance?', 'Design copyright logo', NULL, NULL, 1, NULL, 14, '2019-04-12 08:59:51', '2019-04-19 00:11:09'),
(32, 'LỊCH TƯỜNG', 'Để phát triển thành “bậc thầy” trong kiểu dáng truyền bá, bạn phải đi từ các bậc phải chăng nhất, trong khoảng những hiểu biết cơ bản về truyền bá, về kiểu dáng. Điều trước tiên Anh chị phải biết rõ bề ngoài đồ họa là gì?', 'lich-tuong', '<p>Để ph&aacute;t triển th&agrave;nh &ldquo;bậc thầy&rdquo; trong kiểu d&aacute;ng truyền b&aacute;, bạn phải đi từ c&aacute;c bậc phải chăng nhất, trong khoảng những hiểu biết cơ bản về truyền b&aacute;, về kiểu d&aacute;ng. Điều trước ti&ecirc;n Anh chị phải biết r&otilde; bề ngo&agrave;i đồ họa l&agrave; g&igrave;? mẫu m&atilde; đồ họa nhắc một c&aacute;ch ngắn gọn l&agrave; việc ngoại h&igrave;nh những sản phẩm d&ugrave;ng trong in ấn, bề ngo&agrave;i những h&igrave;nh trạng tr&ecirc;n 1 mặt phẳng (thường gọi l&agrave; 2D). c&aacute;c sản phẩm của ngoại h&igrave;nh đồ họa sở hữu thể thấy như poster, những cuốn s&aacute;ch giới thiệu, b&igrave;a b&aacute;o ch&iacute;, &hellip; V&agrave; để khiến được những sản phẩm như vậy đ&ograve;i hỏi người ngo&agrave;i mặt ngo&agrave;i c&aacute;c kiến thức mỹ thuật căn bản c&ograve;n phải nắm vững c&aacute;c kiến thức kh&aacute;c như về tiếp thị, về truyền th&ocirc;ng, v&agrave; phải c&oacute; khả năng sử dụng phần mềm &aacute;p dụng ti&ecirc;u d&ugrave;ng trong lĩnh vực n&agrave;y.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.tamnhindep.com/upload/images/thiet%20ke%20in%20an%20quang%20cao%202.jpg\" /></p>\r\n\r\n<p>kh&ocirc;ng những thế, quảng b&aacute; một sản phẩm, C&aacute;c bạn &ndash; những đơn vị&nbsp;<a href=\"http://www.tamnhindep.com/thiet-ke-in-an.html\"><strong>thiết kế in ấn</strong></a>&nbsp;tương lai phải hiểu được vấn đề m&agrave; c&aacute;c bạn bắt buộc. trong khoảng những th&ocirc;ng b&aacute;o chậm tiến độ, bạn phải Nhận định về nh&atilde;n h&agrave;ng, trị gi&aacute; của nh&atilde;n h&agrave;ng v&agrave; vị tr&iacute; của n&oacute; tr&ecirc;n thị phần, dựa v&agrave;o Đ&oacute; để đưa ra những &yacute; tưởng ph&ugrave; hợp. đơn vị&nbsp;<a href=\"http://www.tamnhindep.com/\"><strong>thiết kế quảng c&aacute;o</strong></a>&nbsp;kh&ocirc;ng đơn giản tạo ra những sản phẩm mới m&agrave; c&ograve;n l&agrave; c&ocirc;ng t&aacute;c cải tiến những sản phẩm cũ để ph&ugrave; hợp hơn, l&ocirc;i cuốn hơn. bởi thế, nếu như quyết định theo ng&agrave;nh th&igrave; bạn cũng cần phải c&oacute; nhiều tố chất như: s&aacute;ng tạo, khả năng tự học, kỹ năng ti&ecirc;u d&ugrave;ng phần mềm, kỹ năng truyền th&ocirc;ng, v&agrave; t&iacute;nh kỹ luật, ch&iacute;nh x&aacute;c cao.</p>', '1555658276_in-an-lich-tuong-11.png', NULL, NULL, NULL, '2019-04-19', '<p>In order to develop into a &quot;master&quot; in a propaganda style, you must go from the most affordable, in the basic understanding of dissemination and style. First thing you have to know what is the graphic appearance? Graphic models briefly mention the appearance of the products used in printing, the appearance of the appearance on a plane (often called 2D). The products of graphic looks can be seen as posters, brochures, press covers, etc. And to make such products require outsiders the basic art knowledge must be master other knowledge such as marketing, communication, and must be able to use software that applies consumption in this area.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.tamnhindep.com/upload/images/thiet%20ke%20in%20an%20quang%20cao%202.jpg\" /></p>\r\n\r\n<p data-fulltext=\"\" data-placeholder=\"Bản dịch\" dir=\"ltr\" id=\"tw-target-text\">Not only that, promoting a product, You - future print designers must understand the problem you are required. In the range of delayed announcements, you must Appreciate the brand, the value of the brand and its position in the market share, based on that to give the right ideas. Advertising design units are not simply creating new products but also improving old products to be more suitable and attractive. Therefore, if you decide by industry, you also need to have many qualities such as creativity, self-study ability, software consumption skills, communication skills, and discipline, high accuracy.</p>', 'In order to develop into a \"master\" in a propaganda style, you must go from the most affordable, in the basic understanding of dissemination and style. First thing you have to know what is the graphic appearance?', 'Hard box', NULL, NULL, 1, NULL, 16, '2019-04-12 09:01:38', '2019-04-19 00:17:56'),
(33, 'HỘP CỨNG', 'Để phát triển thành “bậc thầy” trong kiểu dáng truyền bá, bạn phải đi từ các bậc phải chăng nhất, trong khoảng những hiểu biết cơ bản về truyền bá, về kiểu dáng. Điều trước tiên Anh chị phải biết rõ bề ngoài đồ họa là gì?', 'hop-cung', '<p>Để ph&aacute;t triển th&agrave;nh &ldquo;bậc thầy&rdquo; trong kiểu d&aacute;ng truyền b&aacute;, bạn phải đi từ c&aacute;c bậc phải chăng nhất, trong khoảng những hiểu biết cơ bản về truyền b&aacute;, về kiểu d&aacute;ng. Điều trước ti&ecirc;n Anh chị phải biết r&otilde; bề ngo&agrave;i đồ họa l&agrave; g&igrave;? mẫu m&atilde; đồ họa nhắc một c&aacute;ch ngắn gọn l&agrave; việc ngoại h&igrave;nh những sản phẩm d&ugrave;ng trong in ấn, bề ngo&agrave;i những h&igrave;nh trạng tr&ecirc;n 1 mặt phẳng (thường gọi l&agrave; 2D). c&aacute;c sản phẩm của ngoại h&igrave;nh đồ họa sở hữu thể thấy như poster, những cuốn s&aacute;ch giới thiệu, b&igrave;a b&aacute;o ch&iacute;, &hellip; V&agrave; để khiến được những sản phẩm như vậy đ&ograve;i hỏi người ngo&agrave;i mặt ngo&agrave;i c&aacute;c kiến thức mỹ thuật căn bản c&ograve;n phải nắm vững c&aacute;c kiến thức kh&aacute;c như về tiếp thị, về truyền th&ocirc;ng, v&agrave; phải c&oacute; khả năng sử dụng phần mềm &aacute;p dụng ti&ecirc;u d&ugrave;ng trong lĩnh vực n&agrave;y.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.tamnhindep.com/upload/images/thiet%20ke%20in%20an%20quang%20cao%202.jpg\" /></p>\r\n\r\n<p>kh&ocirc;ng những thế, quảng b&aacute; một sản phẩm, C&aacute;c bạn &ndash; những đơn vị&nbsp;<a href=\"http://www.tamnhindep.com/thiet-ke-in-an.html\"><strong>thiết kế in ấn</strong></a>&nbsp;tương lai phải hiểu được vấn đề m&agrave; c&aacute;c bạn bắt buộc. trong khoảng những th&ocirc;ng b&aacute;o chậm tiến độ, bạn phải Nhận định về nh&atilde;n h&agrave;ng, trị gi&aacute; của nh&atilde;n h&agrave;ng v&agrave; vị tr&iacute; của n&oacute; tr&ecirc;n thị phần, dựa v&agrave;o Đ&oacute; để đưa ra những &yacute; tưởng ph&ugrave; hợp. đơn vị&nbsp;<a href=\"http://www.tamnhindep.com/\"><strong>thiết kế quảng c&aacute;o</strong></a>&nbsp;kh&ocirc;ng đơn giản tạo ra những sản phẩm mới m&agrave; c&ograve;n l&agrave; c&ocirc;ng t&aacute;c cải tiến những sản phẩm cũ để ph&ugrave; hợp hơn, l&ocirc;i cuốn hơn. bởi thế, nếu như quyết định theo ng&agrave;nh th&igrave; bạn cũng cần phải c&oacute; nhiều tố chất như: s&aacute;ng tạo, khả năng tự học, kỹ năng ti&ecirc;u d&ugrave;ng phần mềm, kỹ năng truyền th&ocirc;ng, v&agrave; t&iacute;nh kỹ luật, ch&iacute;nh x&aacute;c cao.</p>', '1555059698_ser3.png', NULL, NULL, NULL, '2019-04-19', '<p>In order to develop into a &quot;master&quot; in a propaganda style, you must go from the most affordable, in the basic understanding of dissemination and style. First thing you have to know what is the graphic appearance? Graphic models briefly mention the appearance of the products used in printing, the appearance of the appearance on a plane (often called 2D). The products of graphic looks can be seen as posters, brochures, press covers, etc. And to make such products require outsiders the basic art knowledge must be master other knowledge such as marketing, communication, and must be able to use software that applies consumption in this area.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.tamnhindep.com/upload/images/thiet%20ke%20in%20an%20quang%20cao%202.jpg\" /></p>\r\n\r\n<p data-fulltext=\"\" data-placeholder=\"Bản dịch\" dir=\"ltr\" id=\"tw-target-text\">Not only that, promoting a product, You - future print designers must understand the problem you are required. In the range of delayed announcements, you must Appreciate the brand, the value of the brand and its position in the market share, based on that to give the right ideas. Advertising design units are not simply creating new products but also improving old products to be more suitable and attractive. Therefore, if you decide by industry, you also need to have many qualities such as creativity, self-study ability, software consumption skills, communication skills, and discipline, high accuracy.</p>', 'In order to develop into a \"master\" in a propaganda style, you must go from the most affordable, in the basic understanding of dissemination and style. First thing you have to know what is the graphic appearance?', 'Hard box', NULL, NULL, 1, NULL, 15, '2019-04-12 02:01:38', '2019-04-19 00:15:53'),
(34, 'STANDEE', 'agdfg dsdhgfh', 'standee', '<p>ehfe&nbsp;</p>', '1555657929_in-an-standee-2.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 14, '2019-04-17 00:14:20', '2019-04-19 00:12:09'),
(35, 'NAMECARD', NULL, 'namecard', '<p>thiet ke namecard</p>', '1555657112_in-an-namecard-1.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 13, '2019-04-18 23:58:32', '2019-04-18 23:58:32'),
(36, 'FOLDER', NULL, 'folder', '<p>thiet ke foder</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/files/in-an-folder-1.jpg\" style=\"width: 960px; height: 1200px;\" /></p>', '1555657192_in-an-folder-3-fb.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 13, '2019-04-18 23:59:52', '2019-04-18 23:59:52'),
(37, 'BAO THƯ', NULL, 'bao-thu', '<p>thiet&nbsp;</p>\r\n\r\n<p>ke</p>\r\n\r\n<p>bao</p>\r\n\r\n<p>thu</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/files/in-an-bao-thu-1.jpg\" style=\"width: 1600px; height: 1000px;\" /></p>', '1555657247_in-an-bao-thu-1.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 13, '2019-04-19 00:00:47', '2019-04-19 00:00:47'),
(38, 'LETTERHEAD', NULL, 'letterhead', '<p>thiết</p>\r\n\r\n<p>kế</p>\r\n\r\n<p>giấy</p>\r\n\r\n<p>ti&ecirc;u</p>\r\n\r\n<p>đề</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/files/in-an-giay-tieu-de-2.jpg\" style=\"width: 1600px; height: 1000px;\" /></p>', '1555657336_in-an-giay-tieu-de-4.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 13, '2019-04-19 00:02:16', '2019-04-19 00:02:16'),
(39, 'SO TAY', NULL, 'so-tay', NULL, '1555657392_2.png', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 13, '2019-04-19 00:03:12', '2019-04-19 00:03:12'),
(40, 'HỘP GIẤY', NULL, 'hop-giay', NULL, '1555657971_in-an-hop-mem-1.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 15, '2019-04-19 00:12:51', '2019-04-19 00:13:01'),
(41, 'TÚI GIẤY', NULL, 'tui-giay', NULL, '1555658034_in-an-tui-giay-6.png', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 15, '2019-04-19 00:13:54', '2019-04-19 00:15:34'),
(42, 'TÚI VẢI', NULL, 'tui-vai', NULL, '1555658053_in-an-tui-vai-2.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 15, '2019-04-19 00:14:13', '2019-04-19 00:14:29'),
(43, 'LỊCH KHÁNH', NULL, 'lich-khanh', NULL, '1555658298_in-an-khanh-lich-4.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 16, '2019-04-19 00:18:18', '2019-04-19 00:19:05'),
(44, 'LỊCH SỔ TAY', NULL, 'lich-so-tay', NULL, '1555658318_in-an-so-lich-1.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 16, '2019-04-19 00:18:38', '2019-04-19 00:18:51'),
(45, 'BỘ 100 SẢN PHẨM QUÀ TẶNG', NULL, 'bo-100-san-pham-qua-tang', '<p><sup>Dịch vụ&nbsp;in ấn phẩm qu&agrave; tặng cũng được đ&ocirc;ng đảo c&aacute;c doanh nghiệp, c&aacute;c tổ chức, c&aacute;c c&aacute; nh&acirc;n đều y&ecirc;u th&iacute;ch v&agrave; sử dụng. In ấn phẩm qua tặng kh&ocirc;ng chỉ l&agrave; một c&ocirc;ng cụ l&agrave;m maketing hiệu quả tiết kiệm chi ph&iacute; ch&uacute;ng c&ograve;n gi&uacute;p c&aacute;c bạn c&oacute; thể nhận biết c&aacute;c đồ vật, đồ d&ugrave;ng của ri&ecirc;ng m&igrave;nh một c&aacute;ch nhanh ch&oacute;ng v&agrave; tiện lợi. Khi in l&ecirc;n c&aacute;c ấn phẩm văn ph&ograve;ng biểu tuợng, logo của c&ocirc;ng ty m&igrave;nh bạn sẽ thấy c&aacute;c đồ vật của bạn nổi bật v&agrave; kh&aacute;c hẳn với c&aacute;c đồ vật của doanh nghiệp, tổ chức, c&aacute; nh&acirc;n kh&aacute;c, gi&uacute;p những kh&aacute;ch h&agrave;ng những người sử dụng hoặc tiếp x&uacute;c với c&aacute;c ấn phẩm qu&agrave; tặng sẽ c&oacute; ấn tượng tốt cũng như nhắc nhớ họ về doanh nhiệp, tổ chức, c&aacute; nh&acirc;n của bạn.</sup></p>\r\n\r\n<p><sup>Tại c&ocirc;ng ty bạn c&oacute; thể t&igrave;m thấy mọi ấn phẩm qu&agrave; tặng c&ugrave;ng nhiều chủng loại, mẫu m&atilde;, k&iacute;ch thước cũng như chất liệu đa dạng phong ph&uacute; nhất.</sup></p>\r\n\r\n<p><sup>In ấn phẩm qu&agrave; tặng lu&ocirc;n được c&ocirc;ng ty ch&uacute; trọng quan t&acirc;m, cũng ch&iacute;nh v&igrave; vậy việc đầu tư v&agrave;o c&aacute;c trang thiết bị m&aacute;y m&oacute;c in ấn phẩm qu&agrave; tặng lu&ocirc;n được quan t&acirc;m v&agrave; ch&uacute; &yacute; đến. Ch&uacute;ng t&ocirc;i nhập khẩu trực tiếp c&aacute;c loại m&aacute;y m&oacute;c in ấn từ Mỹ, Nhật, Đức l&agrave; những quốc gia lớn c&oacute; c&ocirc;ng nghệ in ấn v&ocirc; c&ugrave;ng ph&aacute;t triển, c&ugrave;ng những kỹ thuật in ấn mới mang lại hiệu quả cao chất luợng tốt v&agrave; được đảm bảo tuyệt đối cho bạn.</sup></p>\r\n\r\n<p><sup>Mời Qu&yacute; Kh&aacute;ch h&agrave;ng tham khảo bộ 100 sản phẩm Qu&agrave; tặng của c&ocirc;ng ty ch&uacute;ng t&ocirc;i</sup></p>\r\n\r\n<p><strong><a href=\"https://online.flippingbook.com/view/282901/?fbclid=IwAR3Snx91Z_xH7PtJP9GxQHdg-7lbeWynoZyw3eBHpnV79hr0-ms1ntGwPXw\">https://online.flippingbook.com/view/282901/?fbclid=IwAR3Snx91Z_xH7PtJP9GxQHdg-7lbeWynoZyw3eBHpnV79hr0-ms1ntGwPXw</a></strong></p>', '1555658929_anhbia-1222x465px.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 18, '2019-04-19 00:28:49', '2019-04-19 00:35:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `titlehome` text COLLATE utf8mb4_unicode_ci,
  `titlehomeeg` text COLLATE utf8mb4_unicode_ci,
  `shortdes` text COLLATE utf8mb4_unicode_ci,
  `shortdeseg` text COLLATE utf8mb4_unicode_ci,
  `nameeg` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `slugeg` text COLLATE utf8mb4_unicode_ci,
  `displayhome` text COLLATE utf8mb4_unicode_ci,
  `displayhomeeg` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `contenteg` text COLLATE utf8mb4_unicode_ci,
  `titleseo` text COLLATE utf8mb4_unicode_ci,
  `titleseoeg` text COLLATE utf8mb4_unicode_ci,
  `metakeyword` text COLLATE utf8mb4_unicode_ci,
  `metakeywordeg` text COLLATE utf8mb4_unicode_ci,
  `metadescription` text COLLATE utf8mb4_unicode_ci,
  `metadescriptioneg` text COLLATE utf8mb4_unicode_ci,
  `img` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`id`, `name`, `titlehome`, `titlehomeeg`, `shortdes`, `shortdeseg`, `nameeg`, `slug`, `slugeg`, `displayhome`, `displayhomeeg`, `content`, `contenteg`, `titleseo`, `titleseoeg`, `metakeyword`, `metakeywordeg`, `metadescription`, `metadescriptioneg`, `img`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Hệ thống nhận diện thương hiệu', 'HỆ THỐNG || NHẬN DIỆN THƯƠNG HIỆU', 'BRAND IDENTITY', '<p><strong>Bộ nhận dạng thương hiệu</strong> bao gồm: logo, namecard, folder, bao thư lớn/ trung/ nhỏ, giấy ti&ecirc;u đề... v&agrave; một số ấn phẩm văn ph&ograve;ng c&oacute; dấu hiệu nhận diện thương hiệu</p>', '<p>&nbsp;</p>\r\n\r\n<p><strong>Brand identity</strong> kit includes: logo, namecard, folder, large / medium / small envelope, letterhead ...</p>', 'BRAND IDENTITY', 'he-thong-nhan-dien-thuong-hieu', 'BRAND IDENTITY', '1', '1', NULL, '<p>&nbsp;</p>\r\n\r\n<p><strong>Brand identity</strong> kit includes: logo, namecard, folder, large / medium / small envelope, letterhead ...</p>', NULL, NULL, NULL, NULL, NULL, NULL, '1555656810_BANNER - SP - DV - 1.jpg', 1, '2019-04-12 07:56:12', '2019-04-19 19:24:40'),
(14, 'Ấn phẩm quảng cáo', 'ẤN PHẨM || QUẢNG CÁO', 'LITERATURE', '<p><strong>Ấn phẩm quảng c&aacute;o&nbsp;</strong>bao gồm: catalogue, brochure, profile; tờ rơi - tờ gấp; poster, banner, standee, wobbler... hỗ trợ&nbsp;một số c&ocirc;ng đoạn thi c&ocirc;ng cho c&aacute;c ấn phẩm&nbsp;ngo&agrave;i trời</p>', '<p>&nbsp;</p>\r\n\r\n<p><strong>Promotional publications</strong> include: catalog, brochure, profile; leaflets - leaflets; posters, banners, standee, wobbler ... support some construction stages for outdoor publications</p>', 'LITERATURE', 'an-pham-quang-cao', 'LITERATURE', '1', '1', NULL, '<p>&nbsp;</p>\r\n\r\n<p><strong>Promotional publications</strong> include: catalog, brochure, profile; leaflets - leaflets; posters, banners, standee, wobbler ... support some construction stages for outdoor publications</p>', NULL, NULL, NULL, NULL, NULL, NULL, '1555584522_BANNER - SP - DV.jpg', 1, '2019-04-12 07:58:29', '2019-04-19 02:01:03'),
(15, 'Thiết kế in ấn bao bì sản phẩm', 'BAO BÌ || SẢN PHẨM', 'LỊCH || ĐỘC QUYỀN', '<p><strong>Bao b&igrave; sản phẩm</strong> bao gồm: hộp carton, hộp giấy, t&uacute;i giấy, t&uacute;i vải, t&uacute;i nylong...; in ấn l&ecirc;n chai, cốc, tem, nh&atilde;n d&aacute;n tr&ecirc;n bao b&igrave;, cấn bế c&aacute;c kiểu d&aacute;ng bao b&igrave; phức tạp</p>', NULL, 'LỊCH || ĐỘC QUYỀN', 'thiet-ke-in-an-bao-bi-san-pham', 'LỊCH || ĐỘC QUYỀN', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1555585022_BANNER - SP - DV - 3.jpg', 1, '2019-04-12 07:58:56', '2019-04-18 04:02:52'),
(16, 'Lịch độc quyền', 'LỊCH || ĐỘC QUYỀN', 'ẤN PHẨM || QUẢNG CÁO', '<p><strong>Lịch độc quyền</strong> l&agrave; ấn phẩm thể hiện r&otilde; nhất phong c&aacute;ch doanh nghiệp, bao gồm: lịch b&agrave;n, lịch tường, lịch kh&aacute;nh...</p>', NULL, 'ẤN PHẨM || QUẢNG CÁO', 'lich-doc-quyen', 'ẤN PHẨM || QUẢNG CÁO', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1555585188_BANNER - SP - DV - 4.jpg', 1, '2019-04-12 07:59:23', '2019-04-18 03:59:48'),
(18, 'Quà tặng', 'QUÀ TẶNG || ĐỘC QUYỀN', NULL, '<p>In ấn phẩm qua tặng kh&ocirc;ng chỉ l&agrave; một c&ocirc;ng cụ l&agrave;m maketing hiệu quả tiết kiệm chi ph&iacute; ch&uacute;ng c&ograve;n gi&uacute;p c&aacute;c bạn c&oacute; thể nhận biết c&aacute;c đồ vật, đồ d&ugrave;ng của ri&ecirc;ng m&igrave;nh một c&aacute;ch nhanh ch&oacute;ng v&agrave; tiện lợi. Khi in l&ecirc;n c&aacute;c ấn phẩm văn ph&ograve;ng biểu tuợng, logo của c&ocirc;ng ty m&igrave;nh bạn sẽ thấy c&aacute;c đồ vật của bạn nổi bật v&agrave; kh&aacute;c hẳn với c&aacute;c đồ vật của doanh nghiệp, tổ chức, c&aacute; nh&acirc;n kh&aacute;c, gi&uacute;p những kh&aacute;ch h&agrave;ng những người sử dụng hoặc tiếp x&uacute;c với c&aacute;c ấn phẩm qu&agrave; tặng sẽ c&oacute; ấn tượng tốt cũng như nhắc nhớ họ về doanh nhiệp, tổ chức, c&aacute; nh&acirc;n của bạn.</p>', NULL, NULL, 'qua-tang', 'qua-tang', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1555726687_1555057105_ser1 (2).png', 1, '2019-04-19 00:20:43', '2019-04-19 20:16:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_04_08_072801_user', 1),
(4, '2019_04_09_034017_abouthome', 3),
(5, '2019_04_09_042724_video', 4),
(12, '2019_04_09_012756_slider', 6),
(18, '2019_04_10_042111_setting', 8),
(22, '2019_04_11_025434_contact_info', 10),
(23, '2019_04_11_042442_catepost', 11),
(25, '2019_04_11_142306_postnew', 12),
(27, '2019_04_09_085040_dichvu', 13),
(28, '2019_04_12_101600_detai_sevice', 14),
(30, '2019_04_12_142848_more_images', 15),
(31, '2019_04_11_012838_about', 16),
(32, '2019_04_21_171209_editPostNew', 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `moreimages`
--

CREATE TABLE `moreimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `moreimages`
--

INSERT INTO `moreimages` (`id`, `id_cat`, `type`, `name`, `status`, `created_at`, `updated_at`) VALUES
(14, '15', '1', '1555057105_ser1 (1).png', 1, '2019-04-12 08:18:25', '2019-04-12 08:18:25'),
(15, '15', '1', '1555057105_ser1 (2).png', 1, '2019-04-12 08:18:25', '2019-04-12 08:18:25'),
(16, '15', '1', '1555057105_ser1.png', 1, '2019-04-12 08:18:25', '2019-04-12 08:18:25'),
(20, '14', '1', '1555727535_1555057105_ser1 (2).png', 1, '2019-04-19 19:32:15', '2019-04-19 19:32:15'),
(21, '18', '1', '1555727569_1555057105_ser1 (2).png', 1, '2019-04-19 19:32:49', '2019-04-19 19:32:49'),
(22, '19', '1', '1555727609_1555057105_ser1 (2).png', 1, '2019-04-19 19:33:29', '2019-04-19 19:33:29'),
(23, '16', '1', '1555727668_1555057105_ser1 (2).png', 1, '2019-04-19 19:34:28', '2019-04-19 19:34:28'),
(24, '13', '1', '1555727704_1555057105_ser1 (2).png', 1, '2019-04-19 19:35:04', '2019-04-19 19:35:04'),
(25, '#', 'bndv', '1555732713_1555057105_ser1 (2).png', 1, NULL, '2019-04-19 20:58:33'),
(26, '#', 'bnnew', '1555732713_1555057105_ser1 (2).png', NULL, NULL, '2019-04-19 20:58:33'),
(27, '#', 'bnTT', '1555732713_1555057105_ser1 (2).png', NULL, NULL, '2019-04-19 20:58:33'),
(28, '#', 'bnLH', '1555733154_1555057105_ser1 (2).png', NULL, NULL, '2019-04-19 21:05:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `postnew`
--

CREATE TABLE `postnew` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `shortdescription` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `titleseo` text COLLATE utf8mb4_unicode_ci,
  `keywordseo` text COLLATE utf8mb4_unicode_ci,
  `descriptionseo` text COLLATE utf8mb4_unicode_ci,
  `dateUpdate` date DEFAULT NULL,
  `contenteg` text COLLATE utf8mb4_unicode_ci,
  `shortdescriptioneg` text COLLATE utf8mb4_unicode_ci,
  `titleeg` text COLLATE utf8mb4_unicode_ci,
  `titleseoeg` text COLLATE utf8mb4_unicode_ci,
  `keywordseoeg` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT NULL,
  `descriptionseoeg` text COLLATE utf8mb4_unicode_ci,
  `id_catepost` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bannertop` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `postnew`
--

INSERT INTO `postnew` (`id`, `title`, `shortdescription`, `slug`, `content`, `photo`, `titleseo`, `keywordseo`, `descriptionseo`, `dateUpdate`, `contenteg`, `shortdescriptioneg`, `titleeg`, `titleseoeg`, `keywordseoeg`, `status`, `descriptionseoeg`, `id_catepost`, `created_at`, `updated_at`, `bannertop`) VALUES
(4, 'Top 10 kiểu hộp quà tặng độc đáo dành tặng các doanh nghiệp', 'Trung Thu là Tết đoàn viên, là khoảng thời gian thích hợp để đại gia đình ngồi quây quần bên nhau cùng phá cỗ trông trăng, thưởng thức miếng bánh nướng thơm mặn, miếng bánh dẻo ngọt ngon, nhâm nhi tách trà xanh thơm dịu... Trung thu cũng là dịp để mọi người bày tỏ tình cảm thương yêu, sự trân quý với các mối quan hệ gia đình, bạn bè, đồng nghiệp,.. qua những món quà tràn đầy ý nghĩa.', 'top-10-kieu-hop-qua-tang-doc-dao-danh-tang-cac-doanh-nghiep', '<h3><img alt=\"\" src=\" trung thu\" style=\"margin-right: 10px; float: left; width: 100px; height: 100px;\" /></h3>\r\n\r\n<h3><strong>Top 10 kiểu hộp qu&agrave; tặng M&ugrave;a Trung Thu 2019 độc đ&aacute;o d&agrave;nh tặng c&aacute;c doanh nghiệp</strong></h3>\r\n\r\n<p>Bạn đ&atilde; ch&aacute;n với những hộp b&aacute;nh trung thu đơn điệu, v&agrave; cần t&igrave;m một m&oacute;n qu&agrave; trung thu mới đa dạng hơn? Hiểu được điều ấy, Tr&agrave; Việt với 13 năm kinh nghiệm trong ng&agrave;nh tr&agrave; &ndash; qu&agrave; tặng đ&atilde; cho ra đời d&ograve;ng sản phẩm qu&agrave; tặng tr&agrave; kết hợp giữa b&aacute;nh trung thu tươi, ấm đẹp v&agrave; tr&agrave; ngon. Một m&oacute;n qu&agrave; của sự chu đ&aacute;o v&agrave; chuy&ecirc;n nghiệp.</p>\r\n\r\n<p>Bộ qu&agrave; trung thu 2018 c&oacute; k&iacute;ch thước 34.7 x 29.7 x 9cm. B&ecirc;n ngo&agrave;i l&agrave; hộp qu&agrave; cứng, sang trọng bằng chất liệu giấy mỹ thuật đen &ndash; đỏ. Hoa văn tranh Đ&ocirc;ng Hồ &ldquo;c&aacute; ch&eacute;p tr&ocirc;ng trăng&rdquo; . B&ecirc;n trong gồm 4 b&aacute;nh Trung Thu tươi, 2 hộp tr&agrave; 75g chất liệu thiếc. Một ấm pha tr&agrave; v&agrave; bốn ch&eacute;n uống tr&agrave; bằng thuỷ tinh cao cấp, trong suốt, được l&agrave;m thủ c&ocirc;ng ho&agrave;n to&agrave;n.</p>', '1555649331_BANNER - SP - DV - 3.jpg', NULL, NULL, NULL, '2019-04-19', '<p style=\"text-align: justify;\">In order to develop into a &quot;master&quot; in a propaganda style, you must go from the most affordable, in the basic understanding of dissemination and style. First thing you have to know what is the graphic appearance? Graphic models briefly mention the appearance of the products used in printing, the appearance of the appearance on a plane (often called 2D). The products of graphic looks can be seen as posters, brochures, press covers, etc. And to make such products require outsiders the basic art knowledge must be master other knowledge such as marketing, communication, and must be able to use software that applies consumption in this area.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"http://www.tamnhindep.com/upload/images/thiet%20ke%20in%20an%20quang%20cao%202.jpg\" /></p>\r\n\r\n<p data-fulltext=\"\" data-placeholder=\"Bản dịch\" dir=\"ltr\" id=\"tw-target-text\" style=\"text-align: justify;\">Not only that, promoting a product, You - future print designers must understand the problem you are required. In the range of delayed announcements, you must Appreciate the brand, the value of the brand and its position in the market share, based on that to give the right ideas. Advertising design units are not simply creating new products but also improving old products to be more suitable and attractive. Therefore, if you decide by industry, you also need to have many qualities such as creativity, self-study ability, software consumption skills, communication skills, and discipline, high accuracy.</p>', 'In order to develop into a \"master\" in a propaganda style, you must go from the most affordable, in the basic understanding of dissemination and style. First thing you have to know what is the graphic appearance?', 'Become a master of print design', NULL, NULL, 1, NULL, 2, '2019-04-11 02:26:43', '2019-04-18 21:48:51', NULL),
(48, 'Quà tặng mùa trung thu', 'Bánh trung thu tượng trưng cho cuộc sống tròn đầy, viên mãn, như tâm niệm mỗi người khi dành tặng bánh trung thu cho người thân, bạn bè.  Cùng Annam Gourmet Market tìm hiểu bộ sưu tập bánh trung thu cho năm 2017 này nhé!\r\n\r\nĐối với chúng tôi, thiết kế luôn đi kèm theo một câu chuyện phía sau để gắn kết với khách hàng bằng một sợi dây vô hình. Hình ảnh của dải thiên hà rộng lớn, bao la và hình ảnh chú thỏ ngọc của Hằng Nga sẽ vẽ nên một câu chuyện đặc biệt cho rằm tháng tám năm nay. Tông xanh dương đậm pha tím thu hút  mọi ánh nhìn với lời chúc đặc biệt phía sau. Màu xanh dương tượng trưng cho sự thanh bình và niềm hy vọng, như lời chúc đặc biệt phía sau. Màu tím biểu trưng của dải thiên hà bí ẩn, như một hành trình mới đang chờ đợi thực khách khám phá. Điểm xuyết trên nền xanh tím là hoa văn màu sắc nhẹ nhàng vẽ nên một bức tranh Thu ấn tượng. Giữa hoa cúc, lá vàng tháng tám là hình chú thỏ ngọc trắng hướng lên mặt trăng gợi nhớ cho mỗi người nhớ về quê hương khi ngày lễ đặc biệt tới.\r\n\r\nDòng bánh đơn có 6 hương vị độc đáo, là sự hòa quyện của truyền thống và hiện đại trong mỗi công thức bánh, từ đậu đỏ, sen trắng, chà bông, trứng muối quen thuộc cho tới mè đen, trà xanh quả mơ và hạt thập cẩm độc đáo. Nếu bạn  đang tìm kiếm những set quà tặng ý nghĩa,  các bộ bánh kèm trà, mứt và rượu như bộ Trăng Tròn (Full Moon), Đoàn Viên (Reunion) hay Bảo Vật (Treasure), hứa hẹn sẽ là những món quà trung thu trang trọng không thể bỏ lỡ.', 'qua-tang-mua-trung-thu', '<p>D&ograve;ng b&aacute;nh đơn c&oacute; 6 hương vị độc đ&aacute;o, l&agrave; sự h&ograve;a quyện của truyền thống v&agrave; hiện đại trong mỗi c&ocirc;ng thức b&aacute;nh, từ đậu đỏ, sen trắng, ch&agrave; b&ocirc;ng, trứng muối quen thuộc cho tới m&egrave; đen, tr&agrave; xanh quả mơ v&agrave; hạt thập cẩm độc đ&aacute;o. Nếu bạn &nbsp;đang t&igrave;m kiếm những set qu&agrave; tặng &yacute; nghĩa, &nbsp;c&aacute;c bộ b&aacute;nh k&egrave;m tr&agrave;, mứt v&agrave; rượu như bộ Trăng Tr&ograve;n (Full Moon), Đo&agrave;n Vi&ecirc;n (Reunion) hay Bảo Vật (Treasure), hứa hẹn sẽ l&agrave; những m&oacute;n qu&agrave; trung thu trang trọng kh&ocirc;ng thể bỏ lỡ.</p>', '1555649886_in-an-coc-ly-tach-1.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, '2019-04-18 21:58:06', '2019-04-18 21:58:06', NULL),
(49, 'Thiết kế Lịch tết 2020', 'Người Việt Nam luôn quan niệm ngày Tết là ngày mọi thứ đều phải mới, phải đổi khác và luôn mong muốn mọi điều tốt đẹp hạnh phúc, may mắn nhất sẽ đến với mình. Doanh nghiệp biếu tặng lịch Tết cho khách hàng, đối tác khi xuân về là với mong muốn truyền tải những thông điệp, những lời chúc tốt đẹp và trân trọng nhất đến cho người nhận.', 'thiet-ke-lich-tet-2020', '<p>In lịch tết l&agrave; một n&eacute;t đẹp truyền thống của văn h&oacute;a Việt Nam c&oacute; từ rất l&acirc;u, mỗi khi nh&igrave;n thấy mọi người b&agrave;y b&aacute;n lịch tết với m&agrave;u sắc vảng đỏ rực l&agrave; ch&uacute;ng ta đ&atilde; cảm nhận được kh&ocirc;ng kh&iacute; tết đang gần kề. Lịch tết c&ograve;n l&agrave; m&oacute;n qu&agrave; tri &acirc;n tặng kh&aacute;ch h&agrave;ng, đối t&aacute;c, bạn b&egrave;, người th&acirc;n nh&acirc;n dịp tết đến, xu&acirc;n về. Nếu doanh nghiệp của bạn l&agrave;m tốt được điều n&agrave;y th&igrave; sẽ để lại được ấn tượng rất tốt rất nhiều trong t&acirc;m tr&iacute; kh&aacute;ch h&agrave;ng v&agrave; đối t&aacute;c. H&atilde;y để Vietbrands gi&uacute;p bạn l&ecirc;n kế hoạch thiết kế lịch tết 2020 được ho&agrave;n hảo nhất.</p>', '1555650175_in-an-khanh-lich-4.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 8, '2019-04-18 22:02:39', '2019-04-18 22:02:55', NULL),
(50, 'Lịch Tết Canh Tý 2020', 'Đặt thiết kế và in lịch tết quý khách sẽ tiết kiệm tối đa chi phí, khi sử dụng dịch vụ in lịch tết của chúng sẽ mang lại nhiều lợi ích cho quý khách và doanh nghiệp. Là địa chỉ in lịch tết giá rẻ và đẹp, uy tín nhiều năm nay, chúng tôi hiểu yêu cầu khách hàng và luôn cam kết chất lượng dịch vụ, thời gian giao hàng nhanh và giá in lịch rẻ nhất.', 'lich-tet-canh-ty-2020', '<p>Với quy tr&igrave;nh chuy&ecirc;n nghiệp, nhanh ch&oacute;ng, ch&uacute;ng t&ocirc;i nhận tư vấn, thiết kế in ấn lịch tết 2020, cho kh&aacute;ch h&agrave;ng l&agrave; doanh nghiệp nhỏ, tập đo&agrave;n lớn, c&aacute;c hệ thống cửa hiệu c&oacute; nhận diện thương hiệu, c&aacute;c cửa h&agrave;ng nhỏ lẻ. Li&ecirc;n hệ ngay với khi bạn c&oacute; nhu cầu. Khi hợp t&aacute;c&nbsp;th&igrave; ch&uacute;ng t&ocirc;i sẽ đem lại những hiệu quả tương xứng cho khoản chi ph&iacute; marketing n&agrave;y.</p>', '1555650282_in-an-lich-tuong-4.png', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 8, '2019-04-18 22:04:42', '2019-04-18 22:05:03', NULL),
(51, 'NHÂN VIÊN MARKETING - tuyển dụng tháng 4', 'NHÂN VIÊN MARKETING LÀM VIỆC TẠI TÂN PHÚ - TP.HCM', 'nhan-vien-marketing-tuyen-dung-thang-4', '<p><strong>C&ocirc;ng Ty TNHH MTV Thiết Kế In Ấn V&agrave; Quảng C&aacute;o DIỆP TRẦN&nbsp;</strong>tuyển dụng:&nbsp;<strong>1 Nh&acirc;n vi&ecirc;n Marketing</strong>&nbsp;(c&oacute; Kinh nghiệm) l&agrave;m việc tại văn ph&ograve;ng&nbsp;ch&iacute;nh của c&ocirc;ng ty</p>\r\n\r\n<ul>\r\n	<li>Y&ecirc;u cầu c&oacute; kinh nghiệm</li>\r\n	<li>L&agrave;m việc tại văn ph&ograve;ng ch&iacute;nh của c&ocirc;ng ty</li>\r\n	<li>Tiếp nhận v&agrave; xử l&yacute; y&ecirc;u cầu Marketing của kh&aacute;ch h&agrave;ng doanh nghiệp.</li>\r\n	<li>T&igrave;m kiếm kh&aacute;ch h&agrave;ng, tư vấn chiến lược, lập kế hoạch Digital Marketing cho kh&aacute;ch h&agrave;ng.</li>\r\n	<li>B&aacute;o c&aacute;o c&ocirc;ng việc định kỳ theo tuần/th&aacute;ng.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>QUYỀN LỢI ĐƯỢC HƯỞNG:</strong></p>\r\n\r\n<ul>\r\n	<li>Lương cơ bản + thỏa thuận</li>\r\n	<li>Cơ chế thưởng r&otilde; r&agrave;ng, chế độ BHXH đầy đủ cho nh&acirc;n vi&ecirc;n ch&iacute;nh thức.</li>\r\n	<li>Cơ hội thăng tiến rộng mở: x&eacute;t duyệt l&ecirc;n trưởng nh&oacute;m mỗi 06 th&aacute;ng, trưởng ph&ograve;ng mỗi 12 th&aacute;ng.</li>\r\n	<li>L&agrave;m việc trong m&ocirc;i trường 9x năng động, th&acirc;n thiện, cởi mở.</li>\r\n	<li>Tham gia summer trip, spring trip, teambuilding h&agrave;ng qu&yacute; do Tập đo&agrave;n tổ chức.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>* Tất cả sẽ trao đổi trong khi phỏng vấn.<br />\r\n* Nhận hồ sơ online, gửi CV qua email: <strong>giaynguyenphat@gmail.com</strong> hoặc li&ecirc;n hệ sdt <strong>0389114745</strong> ( Gặp&nbsp;Nguy&ecirc;n&nbsp;)</p>', '1555655464_1.png', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 6, '2019-04-18 23:28:33', '2019-04-18 23:45:23', NULL),
(52, 'NHÂN VIÊN KẾ TOÁN - tuyển dụng tháng 4', 'NHÂN VIÊN KẾ TOÁN LÀM VIỆC TẠI TÂN PHÚ - TP.HCM', 'nhan-vien-ke-toan-tuyen-dung-thang-4', '<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng Ty TNHH MTV Thiết Kế In Ấn V&agrave; Quảng C&aacute;o DIỆP TRẦN&nbsp;</strong>tuyển dụng:&nbsp;<strong>1 Nh&acirc;n vi&ecirc;n Kế to&aacute;n</strong>&nbsp;(kh&ocirc;ng cần&nbsp;Kinh nghiệm) l&agrave;m việc tại văn ph&ograve;ng&nbsp;ch&iacute;nh của c&ocirc;ng ty</p>\r\n\r\n<ul style=\"margin-left: 40px;\">\r\n	<li>Kh&ocirc;ng y&ecirc;u cầu kinh nghiệm</li>\r\n	<li>L&agrave;m việc tại văn ph&ograve;ng ch&iacute;nh của c&ocirc;ng ty</li>\r\n	<li>B&aacute;o c&aacute;o c&ocirc;ng việc định kỳ theo tuần/th&aacute;ng.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>QUYỀN LỢI ĐƯỢC HƯỞNG:</strong></p>\r\n\r\n<ul style=\"margin-left: 40px;\">\r\n	<li>Lương cơ bản + thỏa thuận</li>\r\n	<li>Cơ chế thưởng r&otilde; r&agrave;ng, chế độ BHXH đầy đủ cho nh&acirc;n vi&ecirc;n ch&iacute;nh thức.</li>\r\n	<li>Cơ hội thăng tiến rộng mở: x&eacute;t duyệt l&ecirc;n trưởng nh&oacute;m mỗi 06 th&aacute;ng, trưởng ph&ograve;ng mỗi 12 th&aacute;ng.</li>\r\n	<li>L&agrave;m việc trong m&ocirc;i trường 9x năng động, th&acirc;n thiện, cởi mở.</li>\r\n	<li>Tham gia summer trip, spring trip, teambuilding h&agrave;ng qu&yacute; do Tập đo&agrave;n tổ chức.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>* Tất cả sẽ trao đổi trong khi phỏng vấn.<br />\r\n* Nhận hồ sơ online, gửi CV qua email: <strong>giaynguyenphat@gmail.com</strong> hoặc li&ecirc;n hệ sdt <strong>0389114745</strong> ( Gặp&nbsp;Nguy&ecirc;n&nbsp;)</p>', '1555655686_2.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 6, '2019-04-18 23:34:46', '2019-04-18 23:45:43', NULL),
(53, 'NHÂN VIÊN KINH DOANH - tuyển dụng tháng 4', 'NHÂN VIÊN KINH DOANH LÀM VIỆC TẠI TÂN PHÚ - TP.HCM', 'nhan-vien-kinh-doanh-tuyen-dung-thang-4', '<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng Ty TNHH MTV Thiết Kế In Ấn V&agrave; Quảng C&aacute;o DIỆP TRẦN&nbsp;</strong>tuyển dụng:&nbsp;<strong>3 Nh&acirc;n vi&ecirc;n Kinh Doanh</strong>&nbsp;l&agrave;m việc tại văn ph&ograve;ng&nbsp;ch&iacute;nh của c&ocirc;ng ty</p>\r\n\r\n<ul>\r\n	<li>L&agrave;m việc tại văn ph&ograve;ng ch&iacute;nh của c&ocirc;ng ty</li>\r\n	<li>B&aacute;o c&aacute;o c&ocirc;ng việc định kỳ theo tuần/th&aacute;ng.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>QUYỀN LỢI ĐƯỢC HƯỞNG:</strong></p>\r\n\r\n<ul>\r\n	<li>Lương cơ bản + thỏa thuận</li>\r\n	<li>Cơ chế thưởng r&otilde; r&agrave;ng, chế độ BHXH đầy đủ cho nh&acirc;n vi&ecirc;n ch&iacute;nh thức.</li>\r\n	<li>Cơ hội thăng tiến rộng mở: x&eacute;t duyệt l&ecirc;n trưởng nh&oacute;m mỗi 06 th&aacute;ng, trưởng ph&ograve;ng mỗi 12 th&aacute;ng.</li>\r\n	<li>L&agrave;m việc trong m&ocirc;i trường 9x năng động, th&acirc;n thiện, cởi mở.</li>\r\n	<li>Tham gia summer trip, spring trip, teambuilding h&agrave;ng qu&yacute; do Tập đo&agrave;n tổ chức.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>* Tất cả sẽ trao đổi trong khi phỏng vấn.<br />\r\n* Nhận hồ sơ online, gửi CV qua email:&nbsp;<strong>giaynguyenphat@gmail.com</strong>&nbsp;hoặc li&ecirc;n hệ sdt&nbsp;<strong>0389114745</strong>&nbsp;( Gặp&nbsp;Nguy&ecirc;n&nbsp;)</p>', '1555655809_1(1)-1508381929.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 6, '2019-04-18 23:36:49', '2019-04-18 23:45:52', NULL),
(54, 'Thiệp Giáng Sinh 2019', NULL, 'thiep-giang-sinh-2019', NULL, '1555659534_in-an-coc-ly-tach-1.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, '2019-04-19 00:38:54', '2019-04-19 00:38:54', NULL),
(55, 'Tặng gì ngày lễ Nhà Giáo Việt Nam', NULL, 'tang-gi-ngay-le-nha-giao-viet-nam', NULL, '1555659928_0242_2.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, '2019-04-19 00:45:28', '2019-04-19 00:45:28', NULL),
(56, 'Gợi ý quà tặng nhân dịp 30/4', NULL, 'goi-y-qua-tang-nhan-dip-304', NULL, '1555659999_nha-giao-viet-nam1.jpg', NULL, NULL, NULL, '2019-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, '2019-04-19 00:46:39', '2019-04-19 00:46:39', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `nameeg` text COLLATE utf8mb4_unicode_ci,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `favico` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `titleeg` text COLLATE utf8mb4_unicode_ci,
  `company` text COLLATE utf8mb4_unicode_ci,
  `companyeg` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `addresseg` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `phoneeg` text COLLATE utf8mb4_unicode_ci,
  `didong` text COLLATE utf8mb4_unicode_ci,
  `didongeg` text COLLATE utf8mb4_unicode_ci,
  `fax` text COLLATE utf8mb4_unicode_ci,
  `faxeg` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `emaileg` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `photoeg` text COLLATE utf8mb4_unicode_ci,
  `desc` longtext COLLATE utf8mb4_unicode_ci,
  `desceg` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `contenteg` longtext COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL,
  `codechat` longtext COLLATE utf8mb4_unicode_ci,
  `copyright` longtext COLLATE utf8mb4_unicode_ci,
  `analytics` longtext COLLATE utf8mb4_unicode_ci,
  `keyword` longtext COLLATE utf8mb4_unicode_ci,
  `keywordeg` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `descriptioneg` longtext COLLATE utf8mb4_unicode_ci,
  `links1` longtext COLLATE utf8mb4_unicode_ci,
  `links2` longtext COLLATE utf8mb4_unicode_ci,
  `links3` longtext COLLATE utf8mb4_unicode_ci,
  `links4` longtext COLLATE utf8mb4_unicode_ci,
  `links5` longtext COLLATE utf8mb4_unicode_ci,
  `linksyt1` longtext COLLATE utf8mb4_unicode_ci,
  `linksyt2` longtext COLLATE utf8mb4_unicode_ci,
  `contentcode` longtext COLLATE utf8mb4_unicode_ci,
  `contentcodeeg` longtext COLLATE utf8mb4_unicode_ci,
  `codemap` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `name`, `nameeg`, `logo`, `favico`, `title`, `titleeg`, `company`, `companyeg`, `address`, `addresseg`, `phone`, `phoneeg`, `didong`, `didongeg`, `fax`, `faxeg`, `email`, `emaileg`, `photo`, `photoeg`, `desc`, `desceg`, `content`, `contenteg`, `status`, `codechat`, `copyright`, `analytics`, `keyword`, `keywordeg`, `description`, `descriptioneg`, `links1`, `links2`, `links3`, `links4`, `links5`, `linksyt1`, `linksyt2`, `contentcode`, `contentcodeeg`, `codemap`, `created_at`, `updated_at`) VALUES
(1, 'CÔNG TY TNHH MTV THIẾT KẾ IN ẤN VÀ QUẢNG CÁO DIỆP TRẦN', 'DIEP TRAN PRINTING DESIGN AND ADVERTISING COMPANY LIMITED', '1554881465_logo4.png', '1554881005_logovs.png', 'CÔNG TY TNHH MTV THIẾT KẾ IN ẤN VÀ QUẢNG CÁO DIỆP TRẦN', 'CÔNG TY TNHH MTV THIẾT KẾ IN ẤN VÀ QUẢNG CÁO DIỆP TRẦN', 'CÔNG TY TNHH MTV THIẾT KẾ IN ẤN VÀ QUẢNG CÁO || DIỆP TRẦN', 'PRINTING DESIGN AND ADVERTISING COMPANY LIMITED || DIEP TRAN', '80 Bình Long, Phường Phú Thạnh, Quận Tân Phú, TP.HCM', '80 Binh Long, Phu Thanh Ward, Tan Phu District, Ho Chi Minh City', '+84 946 606 967', '1', NULL, '1', '1', '1', 'info@dieptran.vn', '1', '1', '1', '1', '1', '<p>80 B&igrave;nh Long, Phường Ph&uacute; Thạnh, Quận T&acirc;n Ph&uacute;, TP.HCM</p>\r\n\r\n<p>+84 946.606.967 - +84.938.009.779</p>\r\n\r\n<p>info@dieptran.vn</p>', '<p>80 Binh Long, Phu Thanh Ward, Tan Phu District, Ho Chi Minh City</p>\r\n\r\n<p>+84 946.606.967 - +84.938.009.779</p>\r\n\r\n<p>&nbsp;</p>', 1, '1', NULL, '<script>console.log(\"Chạy\");</script>', 'Title', 'Keyword EG', 'Title', 'Description EG', 'https://www.facebook.com/indieptran/', 'http://zaloapp.com/qr/p/t1ozb3i1b5gv', 'https://www.skype.com/en/', 'https://www.youtube.com/channel/UCpv8C6P7FLF_pg5dktQwSYA?view_as=subscriber', 'https://plus.google.com/?hl=vi', '1', '1', '<p>Li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn, phục vụ v&agrave; đ&aacute;p ứng mọi nhu cầu về Thiết kế, In ấn v&agrave; Quảng c&aacute;o</p>', '<p>Contact us immediately for advice, service and meet all the needs of Design, Printing and Advertising</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.455487034402!2d106.61929931511756!3d10.776383962140486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752c196799698d%3A0x979c52efe1310992!2zODAgQsOsbmggTG9uZywgUGjDuiBUaOG6oW5oLCBUw6JuIFBow7osIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1555648767416!5m2!1svi!2s\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2019-04-09 17:00:00', '2019-04-19 01:02:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `name`, `link`, `photo`, `mota`, `status`, `type`, `stt`, `created_at`, `updated_at`) VALUES
(6, '#', '#', '1554863890_slider3.jpg', '#', '1', 1, 5, '2019-04-09 19:38:10', '2019-04-19 20:05:22'),
(7, '#', '#', '1554863910_slider1.jpg', '#', '1', 1, 2, '2019-04-09 19:38:30', '2019-04-09 19:38:30'),
(17, '#', '#', '1555581556_banner3.jpg', NULL, '1', 1, 1, '2019-04-18 02:59:16', '2019-04-19 20:05:31'),
(31, '#', '#', '1555668000_banner6.jpg', NULL, '1', 1, 4, '2019-04-19 03:00:00', '2019-04-19 20:04:57'),
(32, '#', NULL, '1555729672_1.png', NULL, '1', 2, 1, '2019-04-19 20:07:52', '2019-04-19 20:07:52'),
(33, '#', '#', '1555729690_2.png', NULL, '1', 2, 1, '2019-04-19 20:08:10', '2019-04-19 20:08:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `sex`, `birthday`, `phone`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Trọng Nguyễn Văn', 'email@gmail.com', NULL, NULL, '0987654321', '1', '$2y$10$QBURosIlZHmg81sQozDTKeLGAJqEx/grSH2DKsa0S09RzLqIEkLcy', 'nXEEZRpRK2IJnbUcnvLk2a4BF0dhcgrxHZxwSCXtLZnvFLz1NnYi9hrkGrsp', '2019-04-08 01:39:15', '2019-04-08 18:48:30'),
(2, 'admin_gco', 'admin', 'admim@gmail.com', NULL, NULL, '09873647', '1', '$2y$10$3YOLTTEuUkZQLY3CpTpLb.If1Gz0qEp5fa6/gHMctazABadFt3PIu', NULL, '2019-04-12 16:27:55', '2019-04-12 16:28:16'),
(3, 'gco_admin', 'admin', 'admin_gco@gmail.com', NULL, NULL, '09847565', '1', '$2y$10$HVqRM.K11uC0uXjcaZojluCqvVl5gpgiSF1CsEMLYA5xVmWZdkKKi', 'HiJtsiVZ4zuwLLj4NJ8tk6ua6ie44EBA8XtCQaDMkFtdSzSPnZDSp2E25eME', '2019-04-12 21:18:35', '2019-04-12 21:18:35'),
(4, 'tho_', 'tho', 'dieptranco.design@gmail.com', NULL, NULL, '0779971053', '1', '$2y$10$yb5U4hLSvPm4KbsOidyShOvZDnxybNDM.lFGGf4Po3LKuECRi4pbi', NULL, '2019-04-19 01:19:20', '2019-04-19 01:19:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `video`
--

CREATE TABLE `video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_lg` int(11) NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `video`
--

INSERT INTO `video` (`id`, `id_lg`, `photo`, `name`, `link`, `created_at`, `updated_at`) VALUES
(14, 1, '1555644692_istockphoto-512001930-2048x2048.jpg', '3D Printing Trends for 2019', 'https://www.youtube.com/watch?v=jcRqmj8OL4A', '2019-04-17 00:25:30', '2019-04-18 20:31:32'),
(17, 1, '1555644348_istockphoto-512001930-2048x2048.jpg', 'The Future of Printing Technology', 'https://www.youtube.com/watch?v=jcRqmj8OL4A', '2019-04-18 20:25:48', '2019-04-18 20:31:20'),
(18, 1, '1555644721_istockphoto-512001930-2048x2048.jpg', 'Công nghệ in 3D', 'https://www.youtube.com/watch?v=EFXU1gCOr9c', '2019-04-18 20:27:20', '2019-04-18 20:32:01'),
(19, 1, '1555644732_istockphoto-512001930-2048x2048.jpg', 'Đánh giá máy in 3D Anycubic I3', 'https://www.youtube.com/watch?v=cyJXMuoAFB8', '2019-04-18 20:27:35', '2019-04-18 20:32:12'),
(20, 1, '1555644740_istockphoto-512001930-2048x2048.jpg', 'Making a lay flat photo book', 'https://www.youtube.com/watch?v=b6qT5i-h3Cg', '2019-04-18 20:28:26', '2019-04-18 20:32:20');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `abouthome`
--
ALTER TABLE `abouthome`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `catepost`
--
ALTER TABLE `catepost`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detalsevice`
--
ALTER TABLE `detalsevice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalsevice_id_catesevice_foreign` (`id_cateSevice`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `moreimages`
--
ALTER TABLE `moreimages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `postnew`
--
ALTER TABLE `postnew`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postnew_id_catepost_foreign` (`id_catepost`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `abouthome`
--
ALTER TABLE `abouthome`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `catepost`
--
ALTER TABLE `catepost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `detalsevice`
--
ALTER TABLE `detalsevice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `moreimages`
--
ALTER TABLE `moreimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `postnew`
--
ALTER TABLE `postnew`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `video`
--
ALTER TABLE `video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `detalsevice`
--
ALTER TABLE `detalsevice`
  ADD CONSTRAINT `detalsevice_id_catesevice_foreign` FOREIGN KEY (`id_cateSevice`) REFERENCES `dichvu` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `postnew`
--
ALTER TABLE `postnew`
  ADD CONSTRAINT `postnew_id_catepost_foreign` FOREIGN KEY (`id_catepost`) REFERENCES `catepost` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
