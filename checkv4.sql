-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 12, 2023 lúc 01:10 PM
-- Phiên bản máy phục vụ: 10.3.39-MariaDB-cll-lve
-- Phiên bản PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fwebnhalamonline_admmin100`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangchung`
--

CREATE TABLE `bangchung` (
  `id` int(11) NOT NULL,
  `code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bangchung`
--

INSERT INTO `bangchung` (`id`, `code`, `image`) VALUES
(37, 'dang-minh-kiet', '/storage/bangchung/BC_70534.png'),
(141, 'hmm', '/storage/bangchung/BC_82917.png'),
(142, 'duykhanhdepzaivcl', '/storage/bangchung/BC_28567.png'),
(143, 'duykhanhdepzaivcl', '/storage/bangchung/BC_58329.png'),
(144, 'duykhanhdepzaivcl', '/storage/bangchung/BC_94501.png'),
(145, 'd', '/storage/bangchung/BC_74513.png'),
(146, 'd', '/storage/bangchung/BC_06423.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baotri`
--

CREATE TABLE `baotri` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `baotri`
--

INSERT INTO `baotri` (`id`, `name`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `username` text NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `linkfb` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `number` text DEFAULT NULL,
  `sdt` text DEFAULT NULL,
  `telegram` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `id_fb` text DEFAULT NULL,
  `id_inta` text DEFAULT NULL,
  `website` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `dich_vu` text DEFAULT NULL,
  `money` text DEFAULT NULL,
  `gmail` text DEFAULT NULL,
  `ngan_hang` text DEFAULT NULL,
  `momo` text DEFAULT NULL,
  `status_momo` text DEFAULT NULL,
  `mb` text DEFAULT NULL,
  `status_mb` text DEFAULT NULL,
  `zalop` text DEFAULT NULL,
  `status_zalop` text DEFAULT NULL,
  `bidv` text DEFAULT NULL,
  `status_bidv` text DEFAULT NULL,
  `scb` text DEFAULT NULL,
  `status_scb` text DEFAULT NULL,
  `vcb` text DEFAULT NULL,
  `status_vcb` text DEFAULT NULL,
  `agri` text DEFAULT NULL,
  `status_agri` text DEFAULT NULL,
  `tsr` text DEFAULT NULL,
  `status_tsr` text DEFAULT NULL,
  `gt1s` text DEFAULT NULL,
  `status_gt1s` text DEFAULT NULL,
  `tpbank` text DEFAULT NULL,
  `status_tpbank` text DEFAULT NULL,
  `vtbank` text DEFAULT NULL,
  `status_vtbank` text DEFAULT NULL,
  `acb` text DEFAULT NULL,
  `status_acb` text DEFAULT NULL,
  `tcb` text DEFAULT NULL,
  `status_tcb` text DEFAULT NULL,
  `dichvucungcap` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `trunggian` text DEFAULT NULL,
  `tg1` text DEFAULT NULL,
  `tg2` text DEFAULT NULL,
  `tg3` text DEFAULT NULL,
  `tg4` text DEFAULT NULL,
  `tg5` text DEFAULT NULL,
  `ngay` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `cards`
--

INSERT INTO `cards` (`id`, `code`, `username`, `image`, `linkfb`, `number`, `sdt`, `telegram`, `id_fb`, `id_inta`, `website`, `dich_vu`, `money`, `gmail`, `ngan_hang`, `momo`, `status_momo`, `mb`, `status_mb`, `zalop`, `status_zalop`, `bidv`, `status_bidv`, `scb`, `status_scb`, `vcb`, `status_vcb`, `agri`, `status_agri`, `tsr`, `status_tsr`, `gt1s`, `status_gt1s`, `tpbank`, `status_tpbank`, `vtbank`, `status_vtbank`, `acb`, `status_acb`, `tcb`, `status_tcb`, `dichvucungcap`, `mota`, `trunggian`, `tg1`, `tg2`, `tg3`, `tg4`, `tg5`, `ngay`) VALUES
(373, 'nguyen-duy-khanh', 'Nguyễn Duy Khánh', 'https://i.imgur.com/bNndnkX.jpg', 'https://www.facebook.com/DuyKhanhRealL0', '1', '0978009289', 'dichvuright', '544110374', 'boladuykhanh', 'dichvuright.com', 'QUẢN LÝ & ĐIỀU HÀNH', '123456789', NULL, NULL, '0978009289', '1', 'VIPDEV207', '1', '0978009289', '1', 'null', '1', 'null', '1', 'null', '1', 'null', '1', 'null', '1', 'null', '1', 'null', '1', 'null', '1', 'null', '1', 'null', '1', '<p>trùm</p>', NULL, NULL, '1k', '2k', '3k', '4k', '5k', '10/10/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `code` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `code`) VALUES
(52, 'QUẢN LÝ & ĐIỀU HÀNH'),
(55, 'QTV ĐƯỢC PHÉP NHẬN GDV'),
(56, 'GDV MMO UY TÍN'),
(57, 'Thiết Kế Website');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `id` int(11) NOT NULL,
  `tieude` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `noidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `click` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'success'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dttc`
--

CREATE TABLE `dttc` (
  `id` int(11) NOT NULL,
  `link` text DEFAULT NULL,
  `url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `dttc`
--

INSERT INTO `dttc` (`id`, `link`, `url`) VALUES
(14, 'TOLUADAO.COM', 'https://toluadao.com'),
(17, 'GACHTHEGDV.FUN', 'https://gachthegdv.fun/');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `mess` text DEFAULT NULL,
  `sdt` text DEFAULT NULL,
  `color_phitg_atm` text DEFAULT NULL,
  `color_dvtg` text DEFAULT NULL,
  `tele` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `mess`, `sdt`, `color_phitg_atm`, `color_dvtg`, `tele`) VALUES
(1, 'https://fb.com', 'https://zalo.me/', 'red', 'black', '  <a href=\"https://t.me/kiemtrakdv\" id=\"linktelegram\" target=\"_blank\" rel=\"noopener noreferrer\">     <div id=\"fcta-telegram-tracking\" class=\"fcta-telegram-mess\">      <span id=\"fcta-telegram-tracking\">Group Telegram</span>     </div>     <div class=\"fcta-telegram-vi-tri-nut\">      <div id=\"fcta-telegram-tracking\" class=\"fcta-telegram-nen-nut\">       <div id=\"fcta-telegram-tracking\" class=\"fcta-telegram-ben-trong-nut\">        <i class=\"fab fa-telegram fa-2x\"></i>       </div>       <div id=\"fcta-telegram-tracking\" class=\"fcta-telegram-text\">        Chat Ngay       </div>      </div>     </div> </a>    <style> 		@keyframes zoom{ 			0%{ 				transform:scale(.5); 				opacity:0 		} 			50%{ 				opacity:1 		} 			to{ 				opacity:0; 				transform:scale(1) 		} 		} 		@keyframes lucidgentelegram{ 			0% to{ 				transform:rotate(-25deg) 		} 			50%{ 				transform:rotate(25deg) 		} 		} 		.jscroll-to-top{ 			bottom:100px 		} 		.fcta-telegram-ben-trong-nut svg path{ 			fill:#fff 		} 		.fcta-telegram-vi-tri-nut{ 			position:fixed; 			bottom:24px; 			right:20px; 			z-index:999 		} 		.fcta-telegram-nen-nut,div.fcta-telegram-mess{ 			box-shadow:0 1px 6px rgba(0,0,0,.06),0 2px 32px rgba(0,0,0,.16) 		} 		.fcta-telegram-nen-nut{ 			width:50px; 			height:50px; 			text-align:center; 			color:#fff; 			background:#0068ff; 			border-radius:50%; 			position:relative 		} 		.fcta-telegram-nen-nut::after,.fcta-telegram-nen-nut::before{ 			content:\"\"; 			position:absolute; 			border:1px solid #0068ff; 			background:#0068ff80; 			z-index:-1; 			left:-20px; 			right:-20px; 			top:-20px; 			bottom:-20px; 			border-radius:50%; 			animation:zoom 1.9s linear infinite 		} 		.fcta-telegram-nen-nut::after{ 			animation-delay:.4s 		} 		.fcta-telegram-ben-trong-nut,.fcta-telegram-ben-trong-nut i{ 			transition:all 1s 		} 		.fcta-telegram-ben-trong-nut{ 			position:absolute; 			text-align:center; 			width:30%; 			height:46%; 			left:10px; 			bottom:25px; 			line-height:50px; 			font-size:20px; 			opacity:1 		} 		.fcta-telegram-ben-trong-nut i{ 			animation:lucidgentelegram 1s linear infinite 		} 		.fcta-telegram-nen-nut:hover .fcta-telegram-ben-trong-nut,.fcta-telegram-text{ 			opacity:0 		} 		.fcta-telegram-nen-nut:hover i{ 			transform:scale(.5); 			transition:all .5s ease-in 		} 		.fcta-telegram-text a{ 			text-decoration:none; 			color:#fff 		} 		.fcta-telegram-text{ 			position:absolute; 			top:6px; 			text-transform:uppercase; 			font-size:12px; 			font-weight:700; 			transform:scaleX(-1); 			transition:all .5s; 			line-height:1.5 		} 		.fcta-telegram-nen-nut:hover .fcta-telegram-text{ 			transform:scaleX(1); 			opacity:1 		} 		div.fcta-telegram-mess{ 			position:fixed; 			bottom:29px; 			right:58px; 			z-index:99; 			background:#fff; 			padding:7px 25px 7px 15px; 			color:#0068ff; 			border-radius:50px 0 0 50px; 			font-weight:700; 			font-size:15px 		} 		.fcta-telegram-mess span{ 			color:#0068ff!important 		} 		span#fcta-telegram-tracking{ 			font-family:Roboto; 			line-height:1.5 		} 		.fcta-telegram-text{ 			font-family:Roboto 		} 		</style>  <div class=\"f1-effect\"> 	 	<div class=\"f1-effect-flower\"> 	</div> 	 	<div class=\"f1-effect-flower\"> 	</div> 	 	<div class=\"f1-effect-flower\"> 	</div> 	 	<div class=\"f1-effect-flower\"> 	</div> 	 	<div class=\"f1-effect-flower\"> 	</div> 	 	<div class=\"f1-effect-flower\"> 	</div> 	 	<div class=\"f1-effect-flower\"> 	</div> 	 	<div class=\"f1-effect-flower\"> 	</div> 	 	<div class=\"f1-effect-flower\"> 	</div> 	 	<div class=\"f1-effect-flower\"> 	</div> 	 </div>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `image-news` varchar(255) NOT NULL,
  `link` varchar(32) DEFAULT NULL,
  `luotxem` varchar(225) DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT 'hoantat',
  `ngaydang` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `site_domain` text DEFAULT NULL,
  `site_logo` text DEFAULT NULL,
  `site_tenweb` text DEFAULT NULL,
  `site_mota` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `facebook` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `sdt_admin` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `dttc` text DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `sdcolor` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `modal` text DEFAULT NULL,
  `news` text DEFAULT NULL,
  `token_tele` text DEFAULT NULL,
  `chatid_tele` text DEFAULT NULL,
  `banner` text DEFAULT NULL,
  `music` text DEFAULT NULL,
  `musicadmin` text DEFAULT NULL,
  `thumb_model` text DEFAULT NULL,
  `gmail_ad` text DEFAULT NULL,
  `baotri` varchar(64) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `site_domain`, `site_logo`, `site_tenweb`, `site_mota`, `name`, `facebook`, `sdt_admin`, `dttc`, `color`, `sdcolor`, `modal`, `news`, `token_tele`, `chatid_tele`, `banner`, `music`, `musicadmin`, `thumb_model`, `gmail_ad`, `baotri`) VALUES
(1, '/', 'https://i.imgur.com/29QasGD.png', 'KiemTraKdv.Com', '[kiemtrakdv] - HỆ THÔNG KIẾM TRA CÁC SCAMMER - CHECK UY TÍN', 'DichVuRight', 'https://kiemtrakdv.com', '0559818207', 'DichVuRight.Com', '#eb1c1c', '#eb1c1c', '<div><font color=\"#232323\"><br></font></div><p style=\"text-align: center; caret-color: rgb(35, 35, 35);\"><font color=\"#311873\"><span style=\"font-size: 22px;\"><b>CHECK TRƯỚC KHI GIAO DỊCH</b></span></font></p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; color: rgb(35, 35, 35); padding: 0px; font-family: rb, sans-serif; text-align: center;\"><p style=\"margin-right: 0px; margin-bottom: 7px; margin-left: 0px; color: rgb(60, 64, 67); padding: 0px;\"><span style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Lưu ý: V<span style=\"padding: 0px; margin: 0px;\">ui Lòng Check Kĩ</span></span></p><p style=\"margin-right: 0px; margin-bottom: 7px; margin-left: 0px; padding: 0px;\"><span style=\"padding: 0px; margin: 0px;\"><font color=\"#157DEC\">★ ★ ★ ★ ★</font></span></p></h1><p style=\"text-align: center; caret-color: rgb(35, 35, 35); color: rgb(35, 35, 35);\" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" -webkit-text-size-adjust:=\"\" 100%;=\"\" text-align:=\"\" center;\"=\"\"><span style=\"font-size: 16px;\"><br></span></p>', '<p>Helo</p>', '<br /><b>Notice</b>:  Undefined variable: token_tele in <b>/home/admincss/public_html/adminvietnam/cai-dat.php</b> on line <b>95</b><br />', '1', 'https://i.imgur.com/29QasGD.png', '', '', 'https://i.imgur.com/h50k2Eu.jpg', 'kiemtrakdv@dichvuright.com', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `ly_do` text DEFAULT NULL,
  `status` varchar(32) NOT NULL,
  `sdt` text DEFAULT NULL,
  `ngan_hang` text DEFAULT NULL,
  `stk` text DEFAULT NULL,
  `hoten_np` text DEFAULT NULL,
  `sdt_np` text DEFAULT NULL,
  `link_report` text DEFAULT NULL,
  `linkfb` text DEFAULT NULL,
  `code` text DEFAULT NULL,
  `view` varchar(225) DEFAULT NULL,
  `ngay` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `ticket`
--

INSERT INTO `ticket` (`id`, `username`, `ly_do`, `status`, `sdt`, `ngan_hang`, `stk`, `hoten_np`, `sdt_np`, `link_report`, `linkfb`, `code`, `view`, `ngay`) VALUES
(18, 'Đặng Minh Kiệt ', 'SCAM WEB SHOP , NHẬN TIỀN BLOCK AE NÉ ', 'scam', '0707527845', 'Momo', '0707527845', 'Admin', '093838373', NULL, 'https://facebook.com/duykhanhdepzai', 'dang-minh-kiet', '445', '15-10-2023'),
(41, ' cc', 'duykahnhdepzaivcl', 'scam', '2939239', 'ccc', 'ccc', 'cc', 'cc', 'ccc', NULL, 'hmm', '20', '12-12-2023'),
(42, 'duykhanhdepzaivcl', 'đẹp zai quá nên scam', 'scam', '0978009289', 'duykhanhdepzaivcl', '11818112007', 'bố là duy khánh', '242', 'cc', NULL, 'duykhanhdepzaivcl', '14', '12-12-2023'),
(43, 'đ', 'cc', 'scam', '0559818207', '1313022007', '0984487037', 'coed', '33', '33', NULL, 'd', '3', '12-12-2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `code` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `code`, `password`) VALUES
(1, 'ADMIN', 'ADMIN', 'ADMIN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `usersctv`
--

CREATE TABLE `usersctv` (
  `id` int(11) NOT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bangchung`
--
ALTER TABLE `bangchung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `baotri`
--
ALTER TABLE `baotri`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dttc`
--
ALTER TABLE `dttc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `usersctv`
--
ALTER TABLE `usersctv`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bangchung`
--
ALTER TABLE `bangchung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT cho bảng `baotri`
--
ALTER TABLE `baotri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=432;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dttc`
--
ALTER TABLE `dttc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `usersctv`
--
ALTER TABLE `usersctv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
