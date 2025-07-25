-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2024 at 05:33 PM
-- Server version: 5.7.21-20-beget-5.7.21-20-1-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asdd1a8y_ahly`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--
-- Creation: Aug 10, 2024 at 11:19 AM
-- Last update: Aug 11, 2024 at 02:17 PM
--

DROP TABLE IF EXISTS `about_me`;
CREATE TABLE `about_me` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `typing_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `bio` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `verification_badge` tinyint(1) NOT NULL,
  `date` varchar(50) NOT NULL,
  `ip` varchar(150) NOT NULL,
  `img_profile_path` varchar(50) NOT NULL,
  `img_cover_path` varchar(50) NOT NULL,
  `img_clients_path` varchar(50) NOT NULL,
  `url_facebook` text NOT NULL,
  `url_twitter` text NOT NULL,
  `url_instagram` text NOT NULL,
  `url_linkedin` text NOT NULL,
  `url_behance` text NOT NULL,
  `url_telegram` text NOT NULL,
  `url_whatsapp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_me`
--

INSERT INTO `about_me` (`id`, `name`, `typing_title`, `bio`, `phone_number`, `email`, `address`, `birthday`, `verification_badge`, `date`, `ip`, `img_profile_path`, `img_cover_path`, `img_clients_path`, `url_facebook`, `url_twitter`, `url_instagram`, `url_linkedin`, `url_behance`, `url_telegram`, `url_whatsapp`) VALUES
(8, 'Ahmed Khaled', 'freelancer+Accountant+Social Media Marketer+Bloger+Media Buyer+Moderator+graphic Designer+Social Media Specialist ', 'I work as a freelancer and I also work in the field of digital marketing. I have helped companies create a presence for their brand and achieve their goals. The process is designed to empower your brand and equip your business with the marketing tools needed to succeed. Talk to me today about how I can support your growth, reduce your sales volume, and put you on a strong path to success and profit and also keen to develop your business by implementing great digital marketing strategies that fit your business plans and size to make your business a market leader in a short time. I have excellent experiences in all types of digital marketing services with amazing experience. I can help you to study the market very well by providing a competitive analysis plan that gives you a detailed overview of your competitors and your business can easily and quickly compete with them in your market.', '+201146663954', 'ahmedkhalidsa3d@gmail.com', 'Edfu, Aswan, Egypt.', '2000-12-28', 1, '11-08-2024 | 05:17:41 PM', '156.221.208.76', 'pages/upload/profile/profile_666d9fc14bca8.JPG', 'pages/upload/profile/cover_666ff11ad2ebc.jpeg', 'pages/upload/profile/clients_666d955b159d3.jpg', 'https://www.facebook.com/ahmedkhalidsa3d', 'https://www.twitter.com/ahmedkhalidsa3d', 'https://www.instagram.com/ahmedkhalidsa3d', 'https://www.linkedin.com/in/ahmedkhalidsa3d', 'https://www.behance.com/ahmedkhalidsa3d', 'https://t.me/ahmedkhalidsa3d', '+20 1147545837');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--
-- Creation: Aug 10, 2024 at 11:19 AM
-- Last update: Aug 11, 2024 at 02:15 PM
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `work` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `img_profile_path` varchar(255) NOT NULL,
  `id_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `name`, `email`, `password`, `date`, `ip`, `work`, `country`, `img_profile_path`, `id_session`) VALUES
(11, 'Abukhaled', 'Ahmedkhaled', 'elba4markter@gmail.com', '1907Ahly*', '15-06-2024 | 05:10:00 PM', '196.133.29.39', '', '', 'pages/upload/profile/profile_owner_666da0bbe9a95.JPG', '6dh334649363s1a62864322');

-- --------------------------------------------------------

--
-- Table structure for table `opinion`
--
-- Creation: Aug 10, 2024 at 11:19 AM
-- Last update: Aug 10, 2024 at 07:03 PM
--

DROP TABLE IF EXISTS `opinion`;
CREATE TABLE `opinion` (
  `name` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `work` varchar(100) NOT NULL,
  `opinion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `date` varchar(50) NOT NULL,
  `img_opinion_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `opinion`
--

INSERT INTO `opinion` (`name`, `id`, `work`, `opinion`, `date`, `img_opinion_path`) VALUES
('MR : Gerges Safwat', 49, 'History Teacher', 'تشرفت بالتعامل معاك يا مستر أحمد و احلى حاجة السرعة فى العمل و المصداقية ربنا يزيدك و يوسع عليك و تعيش و تشهرنا', '15-06-2024 | 04:43:22 PM', 'pages/upload/opinion/opinion_666d9a7dc2a70.jpg'),
('Coach: Mahmoud Quenawy', 50, 'Coach Bulk Gym', 'الشهادة لله  التعامل معاك في قمه الروعه في التنسيق والتنفيذ وضبط المواعيد ودا بجانب الاحترام بتاعه والقبول ليه ربنا يوفقك ويزيدك دايما في تقدم مستمر ????', '15-06-2024 | 04:46:14 PM', 'pages/upload/opinion/opinion_666d9b29d7d5e.jpg'),
('DR : Mohamed Fathy', 51, 'DR : Dental spa', 'استاذ احمد خالد من ارقي ناس اللي تعاملت معاهم.   ف ديجيتال ماركيتج\r\n بيعرف بيستهدف.  منطقه  اللي محتاجها\r\nسرعه ف تنفيذ. طلب  من اول تعامل  لحد الان بيتابع إعلانك  من اول تأكيد طلب لحد نهايه اخر يوم في منتهي الدقه. تعاملات كتير إن شاء الله جايه', '15-06-2024 | 04:47:38 PM', 'pages/upload/opinion/opinion_666d9b7d611d4.jpg'),
('DR : Doaa Mohamed', 52, 'DR : Physiotherapist 3D Clinic', 'تعامل ممتاز وسرعة انجاز.. وأنا هحتاج تنوع في بوستاتي وهستعين بيك ان شاءلله', '15-06-2024 | 04:49:24 PM', 'pages/upload/opinion/opinion_666d9be7078e5.jpg'),
('ACC : Andrew Yousef', 54, 'Manager : Yousef Gold Store', 'موبيلى مبطلش نتوفيكيشنز من كتر الماسيجز اللى كانت بتجيلى بعد معملتلى اعلانات لصفحة الشغل بتاعتى وعدد الفولورز زاد عندى والزباين عرفتنى اكتر والتعامل معاك جميل وسلس وبترد بسرعة وبتفهم وتشرحلى كل التفاصيل الف شكر ليك ولتعبك يا أحمد', '15-06-2024 | 04:52:02 PM', 'pages/upload/opinion/opinion_666d9c85bd57d.jpg'),
('DR : Sara Hassan', 55, 'DR : Physiotherapist ', 'انت حقيقي يااحمد والله العظيم من اكتر الناس الكويسه اللي اتعاملت معاها \r\nولما حد بيسالني على حد مضمون ببعتله رقمك ع طول ????❤️\r\nوشكرا اوى انك ساعدت دكتور نورهان انها رعرف تظبط صفحتها برضو ربنا يجازيك خير \r\nوانا لما افتح عياده برضو باذن الله انت كدا كدا اللي هتمسكلي الصفحه ????❤️', '15-06-2024 | 04:54:32 PM', 'pages/upload/opinion/opinion_666d9d1b8f6f6.jpg'),
('ENG : Riham Abd ElHameed ', 56, 'OWNER : Dark Gallery  ', 'ماشاء الله الشغل كان ممتاز جداً \r\nوالاعلان زود عدد الفلورز للبيدج \r\nوزباين كتير كانت تيجي الجاليري \r\nتقولنا شوفنا الاعلان انتو فين من بدري \r\nلا بصراحة وصل لفئة كنا صعب نوصلها لوحدنا \r\nبارك الله فيك \r\nوحضرتك ذوق جدا ف تعاملك \r\nوبترد بسرعة وحريص ان الشغل يطلع باحسن صورة\r\nربنا يوسع رزقك ويباركلك يارب ????????', '15-06-2024 | 05:00:12 PM', 'pages/upload/opinion/opinion_666d9e6f907b7.jpg'),
('ACC : Abdullah Rabea ', 57, 'Powerlifting Coach', 'الشغل بصراحة ممتاز جدا واحترافي في التعامل والثقة والضمان وجودة الخدمة والمتابعة بعد انتهاء الخدمة في جميع المنصات وفي كل الخدمات وبإذن الله مستمرين في العمل وربنا يكرمكم ويوفقكم ويوسع عليكم ويزود رزقكم جميعا❤️❤️❤️✨', '15-06-2024 | 05:01:42 PM', 'pages/upload/opinion/opinion_666d9ec906223.jpg'),
('Lawer : Ayman Alaa ElDin', 58, 'Manager : Ayman Gold Store', 'بجد من الناس الي يتقال عليها بيرعي ربنا في شغله هيبقي احمد ❤️تشرف بالتعامل مع اخويا بجد شغل عالي قوي حرفيا بيفهم الزبون عايز ايه من قبل ما يتكلم بجانب سرعه في الأداء والتنفيذ في منتهي الدقه .. بيرفكت قوي وشاطر جدا ربنا يكرمك يا حبيبي ❤️❤️', '15-06-2024 | 05:03:01 PM', 'pages/upload/opinion/opinion_666d9f18304b4.jpg'),
('MR : Abdelkader Ebrhim ', 59, 'Geology Teacher', 'طيب انا هتكلم بختصار شديد عن التحربه مع احمد حرفيا بختصار شديد انتشل الصفحه بتعتي من الضياع الي النجاح و الشهر اللي هو ريحني و ريح بالي من حوار الماركتنج ده خالص و بقيت مطمن انه تمام بدون مبلغك بس كنت جربت كتير و كتير و منهم من اسوان و برا اسوان بس التعامل معاك غير افضل حد ف الجمهوريه و فاهم مجاله و دار كويس شاطر فعلا شكرا ليك بجد', '15-06-2024 | 05:04:26 PM', 'pages/upload/opinion/opinion_666d9f6d2824b.jpg'),
('Eng : Ahmed Elhadad', 60, 'Manager Dopamine ', 'والله من غير مجاملة تجربتي مع احمد خالد حاجة ولا أروع ..جدية ف الشغل واحترام وثقة ❤️', '18-06-2024 | 08:23:11 AM', 'pages/upload/opinion/opinion_667119c252fc0.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--
-- Creation: Aug 10, 2024 at 11:19 AM
-- Last update: Aug 10, 2024 at 01:41 PM
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `video_link` text NOT NULL,
  `img_portfolio_path` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `type`, `video_link`, `img_portfolio_path`, `date`) VALUES
(66, 'followers', '', 'pages/upload/portfolio/portfolio_666da493054bb.jpg', '15-06-2024 | 05:26:24 PM'),
(67, 'followers', '', 'pages/upload/portfolio/portfolio_666da497d3f8b.jpg', '15-06-2024 | 05:26:28 PM'),
(68, 'followers', '', 'pages/upload/portfolio/portfolio_666da4a2336d1.jpg', '15-06-2024 | 05:26:39 PM'),
(69, 'followers', '', 'pages/upload/portfolio/portfolio_666da50e4bdc2.jpg', '15-06-2024 | 05:28:27 PM'),
(70, 'followers', '', 'pages/upload/portfolio/portfolio_666da515a6022.jpg', '15-06-2024 | 05:28:34 PM'),
(71, 'followers', '', 'pages/upload/portfolio/portfolio_666da51a5860c.jpg', '15-06-2024 | 05:28:39 PM'),
(72, 'followers', '', 'pages/upload/portfolio/portfolio_666da51fe318f.jpg', '15-06-2024 | 05:28:44 PM'),
(73, 'followers', '', 'pages/upload/portfolio/portfolio_666da5254d62d.jpg', '15-06-2024 | 05:28:50 PM'),
(74, 'followers', '', 'pages/upload/portfolio/portfolio_666da52a32ecc.jpg', '15-06-2024 | 05:28:55 PM'),
(75, 'followers', '', 'pages/upload/portfolio/portfolio_666da52f8edbd.jpg', '15-06-2024 | 05:29:00 PM'),
(76, 'followers', '', 'pages/upload/portfolio/portfolio_666da534b75ea.jpg', '15-06-2024 | 05:29:05 PM'),
(77, 'followers', '', 'pages/upload/portfolio/portfolio_666da539687ee.jpg', '15-06-2024 | 05:29:10 PM'),
(78, 'followers', '', 'pages/upload/portfolio/portfolio_666da53dc8c4f.jpg', '15-06-2024 | 05:29:14 PM'),
(79, 'followers', '', 'pages/upload/portfolio/portfolio_666da54286831.jpg', '15-06-2024 | 05:29:19 PM'),
(80, 'followers', '', 'pages/upload/portfolio/portfolio_666da54726cd4.jpg', '15-06-2024 | 05:29:24 PM'),
(81, 'followers', '', 'pages/upload/portfolio/portfolio_666da54c524ac.jpg', '15-06-2024 | 05:29:29 PM'),
(82, 'followers', '', 'pages/upload/portfolio/portfolio_666da550c0c94.jpg', '15-06-2024 | 05:29:33 PM'),
(83, 'followers', '', 'pages/upload/portfolio/portfolio_666da55609e82.jpg', '15-06-2024 | 05:29:39 PM'),
(84, 'followers', '', 'pages/upload/portfolio/portfolio_666da569082c7.jpg', '15-06-2024 | 05:29:58 PM'),
(85, 'followers', '', 'pages/upload/portfolio/portfolio_666da56dd4249.jpg', '15-06-2024 | 05:30:02 PM'),
(86, 'followers', '', 'pages/upload/portfolio/portfolio_666da57388a11.jpg', '15-06-2024 | 05:30:08 PM'),
(87, 'followers', '', 'pages/upload/portfolio/portfolio_666da5786bed8.jpg', '15-06-2024 | 05:30:13 PM'),
(88, 'followers', '', 'pages/upload/portfolio/portfolio_666da57d05a4e.jpg', '15-06-2024 | 05:30:18 PM'),
(89, 'followers', '', 'pages/upload/portfolio/portfolio_666da584bc15a.jpg', '15-06-2024 | 05:30:25 PM'),
(90, 'followers', '', 'pages/upload/portfolio/portfolio_666da58969709.jpg', '15-06-2024 | 05:30:30 PM'),
(91, 'followers', '', 'pages/upload/portfolio/portfolio_666da59144638.jpg', '15-06-2024 | 05:30:38 PM'),
(102, 'design', '', 'pages/upload/portfolio/portfolio_666da7cbadf78.png', '15-06-2024 | 05:40:08 PM'),
(103, 'design', '', 'pages/upload/portfolio/portfolio_666da806db54d.png', '15-06-2024 | 05:41:07 PM'),
(104, 'design', '', 'pages/upload/portfolio/portfolio_666da8190abe5.png', '15-06-2024 | 05:41:26 PM'),
(105, 'design', '', 'pages/upload/portfolio/portfolio_666da833d3ab6.png', '15-06-2024 | 05:41:52 PM'),
(106, 'design', '', 'pages/upload/portfolio/portfolio_666da85684e7e.jpg', '15-06-2024 | 05:42:27 PM'),
(107, 'design', '', 'pages/upload/portfolio/portfolio_666da86035dfd.jpg', '15-06-2024 | 05:42:37 PM'),
(108, 'design', '', 'pages/upload/portfolio/portfolio_666da871ea7e2.png', '15-06-2024 | 05:42:54 PM'),
(109, 'design', '', 'pages/upload/portfolio/portfolio_666da87a9b29d.png', '15-06-2024 | 05:43:03 PM'),
(110, 'design', '', 'pages/upload/portfolio/portfolio_666da8b02a3ec.png', '15-06-2024 | 05:43:57 PM'),
(111, 'design', '', 'pages/upload/portfolio/portfolio_666da8cd1a3e8.png', '15-06-2024 | 05:44:26 PM'),
(112, 'design', '', 'pages/upload/portfolio/portfolio_666da8df3455d.png', '15-06-2024 | 05:44:44 PM'),
(113, 'design', '', 'pages/upload/portfolio/portfolio_666da92333faa.png', '15-06-2024 | 05:45:52 PM'),
(114, 'design', '', 'pages/upload/portfolio/portfolio_666da93856877.png', '15-06-2024 | 05:46:13 PM'),
(115, 'design', '', 'pages/upload/portfolio/portfolio_666da94372913.png', '15-06-2024 | 05:46:24 PM'),
(116, 'design', '', 'pages/upload/portfolio/portfolio_666da9ae16ce3.png', '15-06-2024 | 05:48:11 PM'),
(117, 'design', '', 'pages/upload/portfolio/portfolio_666da9c09050a.png', '15-06-2024 | 05:48:29 PM'),
(118, 'design', '', 'pages/upload/portfolio/portfolio_666da9cc17a73.jpg', '15-06-2024 | 05:48:41 PM'),
(119, 'design', '', 'pages/upload/portfolio/portfolio_666daa1b5bf7a.png', '15-06-2024 | 05:50:00 PM'),
(120, 'design', '', 'pages/upload/portfolio/portfolio_666daa24484e5.png', '15-06-2024 | 05:50:09 PM'),
(121, 'design', '', 'pages/upload/portfolio/portfolio_666daa40da755.png', '15-06-2024 | 05:50:37 PM'),
(122, 'design', '', 'pages/upload/portfolio/portfolio_666daa5c12322.png', '15-06-2024 | 05:51:05 PM'),
(123, 'design', '', 'pages/upload/portfolio/portfolio_666daa6e44045.png', '15-06-2024 | 05:51:23 PM'),
(124, 'design', '', 'pages/upload/portfolio/portfolio_666daa750bf60.png', '15-06-2024 | 05:51:30 PM'),
(125, 'design', '', 'pages/upload/portfolio/portfolio_666daa84c6701.png', '15-06-2024 | 05:51:45 PM'),
(126, 'design', '', 'pages/upload/portfolio/portfolio_666daa94ebb41.png', '15-06-2024 | 05:52:01 PM'),
(127, 'design', '', 'pages/upload/portfolio/portfolio_666daa9b14618.png', '15-06-2024 | 05:52:08 PM'),
(128, 'design', '', 'pages/upload/portfolio/portfolio_666daab815ad5.png', '15-06-2024 | 05:52:37 PM'),
(129, 'design', '', 'pages/upload/portfolio/portfolio_666daad23a3c1.png', '15-06-2024 | 05:53:03 PM'),
(130, 'design', '', 'pages/upload/portfolio/portfolio_666daaf9b91a8.png', '15-06-2024 | 05:53:42 PM'),
(131, 'design', '', 'pages/upload/portfolio/portfolio_666dab2a18629.png', '15-06-2024 | 05:54:31 PM'),
(132, 'design', '', 'pages/upload/portfolio/portfolio_666dab3578c19.png', '15-06-2024 | 05:54:42 PM'),
(133, 'design', '', 'pages/upload/portfolio/portfolio_666dab7008307.jpg', '15-06-2024 | 05:55:41 PM'),
(134, 'design', '', 'pages/upload/portfolio/portfolio_666dab7882447.jpg', '15-06-2024 | 05:55:49 PM'),
(135, 'design', '', 'pages/upload/portfolio/portfolio_666dab8123b05.jpg', '15-06-2024 | 05:55:58 PM'),
(136, 'design', '', 'pages/upload/portfolio/portfolio_666dab8ab1449.jpg', '15-06-2024 | 05:56:07 PM'),
(137, 'design', '', 'pages/upload/portfolio/portfolio_666dab90ca285.jpg', '15-06-2024 | 05:56:13 PM'),
(138, 'design', '', 'pages/upload/portfolio/portfolio_666dab991add0.jpg', '15-06-2024 | 05:56:22 PM'),
(139, 'design', '', 'pages/upload/portfolio/portfolio_666daba3b0f36.jpg', '15-06-2024 | 05:56:32 PM'),
(140, 'design', '', 'pages/upload/portfolio/portfolio_666dabac1d69f.jpg', '15-06-2024 | 05:56:41 PM'),
(141, 'design', '', 'pages/upload/portfolio/portfolio_666dabb3295dd.jpg', '15-06-2024 | 05:56:48 PM'),
(142, 'design', '', 'pages/upload/portfolio/portfolio_666dabc0e5a6d.jpg', '15-06-2024 | 05:57:01 PM'),
(143, 'design', '', 'pages/upload/portfolio/portfolio_666dabca74f71.jpg', '15-06-2024 | 05:57:11 PM'),
(144, 'design', '', 'pages/upload/portfolio/portfolio_666dabd29e6b5.jpg', '15-06-2024 | 05:57:19 PM'),
(147, 'design', '', 'pages/upload/portfolio/portfolio_666dad2a9b042.png', '15-06-2024 | 06:03:03 PM'),
(148, 'design', '', 'pages/upload/portfolio/portfolio_666dad3768bf7.jpg', '15-06-2024 | 06:03:16 PM'),
(149, 'design', '', 'pages/upload/portfolio/portfolio_666dad93693ca.png', '15-06-2024 | 06:04:48 PM'),
(150, 'followers', '', 'pages/upload/portfolio/portfolio_667045aab987e.jpg', '17-06-2024 | 05:18:15 PM'),
(151, 'followers', '', 'pages/upload/portfolio/portfolio_667045b039561.jpg', '17-06-2024 | 05:18:21 PM'),
(152, 'followers', '', 'pages/upload/portfolio/portfolio_667045b53d8df.jpg', '17-06-2024 | 05:18:26 PM'),
(153, 'followers', '', 'pages/upload/portfolio/portfolio_667045bad9df0.jpg', '17-06-2024 | 05:18:31 PM'),
(154, 'followers', '', 'pages/upload/portfolio/portfolio_667045c001cd8.jpg', '17-06-2024 | 05:18:37 PM'),
(155, 'followers', '', 'pages/upload/portfolio/portfolio_667045d8da786.jpg', '17-06-2024 | 05:19:01 PM'),
(158, 'advertising', '', 'pages/upload/portfolio/portfolio_667046465df6e.jpg', '17-06-2024 | 05:20:51 PM'),
(159, 'advertising', '', 'pages/upload/portfolio/portfolio_6670464b30a52.jpg', '17-06-2024 | 05:20:56 PM'),
(160, 'advertising', '', 'pages/upload/portfolio/portfolio_6670465005ed2.jpg', '17-06-2024 | 05:21:01 PM'),
(161, 'advertising', '', 'pages/upload/portfolio/portfolio_66704654859c2.jpg', '17-06-2024 | 05:21:05 PM'),
(162, 'advertising', '', 'pages/upload/portfolio/portfolio_667046592d8e6.jpg', '17-06-2024 | 05:21:10 PM'),
(163, 'advertising', '', 'pages/upload/portfolio/portfolio_6670465dafe24.jpg', '17-06-2024 | 05:21:14 PM'),
(164, 'advertising', '', 'pages/upload/portfolio/portfolio_667046622c684.jpg', '17-06-2024 | 05:21:19 PM'),
(165, 'advertising', '', 'pages/upload/portfolio/portfolio_66704666cb109.jpg', '17-06-2024 | 05:21:23 PM'),
(166, 'advertising', '', 'pages/upload/portfolio/portfolio_6670466bb27d3.jpg', '17-06-2024 | 05:21:28 PM'),
(167, 'advertising', '', 'pages/upload/portfolio/portfolio_6670467188b2c.jpg', '17-06-2024 | 05:21:34 PM'),
(168, 'advertising', '', 'pages/upload/portfolio/portfolio_66704676057aa.jpg', '17-06-2024 | 05:21:39 PM'),
(169, 'advertising', '', 'pages/upload/portfolio/portfolio_6670467a8a8d5.jpg', '17-06-2024 | 05:21:43 PM'),
(170, 'advertising', '', 'pages/upload/portfolio/portfolio_6670467f07ea4.jpg', '17-06-2024 | 05:21:48 PM'),
(171, 'advertising', '', 'pages/upload/portfolio/portfolio_66704683b09bb.jpg', '17-06-2024 | 05:21:52 PM'),
(172, 'advertising', '', 'pages/upload/portfolio/portfolio_667046882efc6.jpg', '17-06-2024 | 05:21:57 PM'),
(173, 'advertising', '', 'pages/upload/portfolio/portfolio_6670468d6d56c.jpg', '17-06-2024 | 05:22:02 PM'),
(174, 'advertising', '', 'pages/upload/portfolio/portfolio_66704691ee079.jpg', '17-06-2024 | 05:22:06 PM'),
(175, 'advertising', '', 'pages/upload/portfolio/portfolio_6670469673614.jpg', '17-06-2024 | 05:22:11 PM'),
(176, 'advertising', '', 'pages/upload/portfolio/portfolio_6670469ae5d67.jpg', '17-06-2024 | 05:22:15 PM'),
(177, 'advertising', '', 'pages/upload/portfolio/portfolio_6670469f70905.jpg', '17-06-2024 | 05:22:20 PM'),
(178, 'advertising', '', 'pages/upload/portfolio/portfolio_667046bb646e3.jpg', '17-06-2024 | 05:22:48 PM'),
(179, 'advertising', '', 'pages/upload/portfolio/portfolio_667046c187ee5.jpg', '17-06-2024 | 05:22:54 PM'),
(180, 'advertising', '', 'pages/upload/portfolio/portfolio_667046c687b0d.jpg', '17-06-2024 | 05:22:59 PM'),
(181, 'advertising', '', 'pages/upload/portfolio/portfolio_667046cb01c84.jpg', '17-06-2024 | 05:23:04 PM'),
(182, 'advertising', '', 'pages/upload/portfolio/portfolio_667046cfaf899.jpg', '17-06-2024 | 05:23:08 PM'),
(183, 'advertising', '', 'pages/upload/portfolio/portfolio_667046d43f45c.jpg', '17-06-2024 | 05:23:13 PM'),
(184, 'advertising', '', 'pages/upload/portfolio/portfolio_667046d8b7a69.jpg', '17-06-2024 | 05:23:17 PM'),
(185, 'advertising', '', 'pages/upload/portfolio/portfolio_667046dd34b2e.jpg', '17-06-2024 | 05:23:22 PM'),
(186, 'advertising', '', 'pages/upload/portfolio/portfolio_667046e1a0b32.jpg', '17-06-2024 | 05:23:26 PM'),
(187, 'advertising', '', 'pages/upload/portfolio/portfolio_667046e661c3b.jpg', '17-06-2024 | 05:23:31 PM'),
(188, 'advertising', '', 'pages/upload/portfolio/portfolio_667046eac9c6b.jpg', '17-06-2024 | 05:23:35 PM'),
(189, 'advertising', '', 'pages/upload/portfolio/portfolio_667046ef4185b.jpg', '17-06-2024 | 05:23:40 PM'),
(190, 'advertising', '', 'pages/upload/portfolio/portfolio_667046f3a37a3.jpg', '17-06-2024 | 05:23:44 PM'),
(191, 'advertising', '', 'pages/upload/portfolio/portfolio_667046f86a02e.jpg', '17-06-2024 | 05:23:49 PM'),
(192, 'advertising', '', 'pages/upload/portfolio/portfolio_667046fd16049.jpg', '17-06-2024 | 05:23:54 PM'),
(193, 'advertising', '', 'pages/upload/portfolio/portfolio_6670470220d5d.jpg', '17-06-2024 | 05:23:59 PM'),
(194, 'advertising', '', 'pages/upload/portfolio/portfolio_66704708654e1.jpg', '17-06-2024 | 05:24:05 PM'),
(195, 'advertising', '', 'pages/upload/portfolio/portfolio_6670470ce797b.jpg', '17-06-2024 | 05:24:09 PM'),
(196, 'advertising', '', 'pages/upload/portfolio/portfolio_667047197a6ce.jpg', '17-06-2024 | 05:24:22 PM'),
(197, 'advertising', '', 'pages/upload/portfolio/portfolio_66704726123bf.jpg', '17-06-2024 | 05:24:35 PM'),
(198, 'advertising', '', 'pages/upload/portfolio/portfolio_66704732242a8.jpg', '17-06-2024 | 05:24:47 PM'),
(199, 'advertising', '', 'pages/upload/portfolio/portfolio_6670473e3b2b7.jpg', '17-06-2024 | 05:24:59 PM'),
(200, 'advertising', '', 'pages/upload/portfolio/portfolio_6670474a394a5.jpg', '17-06-2024 | 05:25:11 PM'),
(201, 'advertising', '', 'pages/upload/portfolio/portfolio_6670475641f4d.jpg', '17-06-2024 | 05:25:23 PM'),
(202, 'advertising', '', 'pages/upload/portfolio/portfolio_667047621f93e.jpg', '17-06-2024 | 05:25:35 PM'),
(203, 'advertising', '', 'pages/upload/portfolio/portfolio_66704775a995b.jpg', '17-06-2024 | 05:25:54 PM'),
(204, 'advertising', '', 'pages/upload/portfolio/portfolio_6670478159c16.jpg', '17-06-2024 | 05:26:06 PM'),
(205, 'advertising', '', 'pages/upload/portfolio/portfolio_6670478d091b8.jpg', '17-06-2024 | 05:26:18 PM'),
(206, 'advertising', '', 'pages/upload/portfolio/portfolio_66704798ab08a.jpg', '17-06-2024 | 05:26:29 PM'),
(207, 'advertising', '', 'pages/upload/portfolio/portfolio_667047a4cef59.jpg', '17-06-2024 | 05:26:41 PM'),
(208, 'advertising', '', 'pages/upload/portfolio/portfolio_667047b0964e4.jpg', '17-06-2024 | 05:26:53 PM'),
(209, 'advertising', '', 'pages/upload/portfolio/portfolio_667047bd52d56.jpg', '17-06-2024 | 05:27:06 PM'),
(210, 'advertising', '', 'pages/upload/portfolio/portfolio_667047cea37ff.jpg', '17-06-2024 | 05:27:23 PM'),
(211, 'advertising', '', 'pages/upload/portfolio/portfolio_667047da9a0fe.jpg', '17-06-2024 | 05:27:35 PM'),
(212, 'advertising', '', 'pages/upload/portfolio/portfolio_667047e655cd3.jpg', '17-06-2024 | 05:27:47 PM'),
(213, 'advertising', '', 'pages/upload/portfolio/portfolio_667047f25c476.jpg', '17-06-2024 | 05:27:59 PM'),
(214, 'advertising', '', 'pages/upload/portfolio/portfolio_667047fdf30d1.jpg', '17-06-2024 | 05:28:10 PM'),
(215, 'advertising', '', 'pages/upload/portfolio/portfolio_6670480a9a3b1.jpg', '17-06-2024 | 05:28:23 PM'),
(216, 'advertising', '', 'pages/upload/portfolio/portfolio_66704816545e2.jpg', '17-06-2024 | 05:28:35 PM'),
(217, 'advertising', '', 'pages/upload/portfolio/portfolio_66704822e20a6.jpg', '17-06-2024 | 05:28:47 PM'),
(218, 'advertising', '', 'pages/upload/portfolio/portfolio_6670482aa8350.jpg', '17-06-2024 | 05:28:55 PM'),
(219, 'advertising', '', 'pages/upload/portfolio/portfolio_6670488662a9b.jpg', '17-06-2024 | 05:30:27 PM'),
(220, 'advertising', '', 'pages/upload/portfolio/portfolio_6670488d78615.jpg', '17-06-2024 | 05:30:34 PM'),
(221, 'advertising', '', 'pages/upload/portfolio/portfolio_66704892305bb.jpg', '17-06-2024 | 05:30:39 PM'),
(222, 'advertising', '', 'pages/upload/portfolio/portfolio_6670489736bdf.jpg', '17-06-2024 | 05:30:44 PM'),
(223, 'advertising', '', 'pages/upload/portfolio/portfolio_6670489d76b81.jpg', '17-06-2024 | 05:30:50 PM'),
(224, 'advertising', '', 'pages/upload/portfolio/portfolio_667048a1d1149.jpg', '17-06-2024 | 05:30:54 PM'),
(225, 'advertising', '', 'pages/upload/portfolio/portfolio_667048a633df6.jpg', '17-06-2024 | 05:30:59 PM'),
(226, 'advertising', '', 'pages/upload/portfolio/portfolio_667048aa92212.jpg', '17-06-2024 | 05:31:03 PM'),
(227, 'advertising', '', 'pages/upload/portfolio/portfolio_667048af19b55.jpg', '17-06-2024 | 05:31:08 PM'),
(228, 'advertising', '', 'pages/upload/portfolio/portfolio_667048b38e81b.jpg', '17-06-2024 | 05:31:12 PM'),
(229, 'advertising', '', 'pages/upload/portfolio/portfolio_667048b7d08d8.jpg', '17-06-2024 | 05:31:16 PM'),
(230, 'advertising', '', 'pages/upload/portfolio/portfolio_667048bc3abff.jpg', '17-06-2024 | 05:31:21 PM'),
(231, 'advertising', '', 'pages/upload/portfolio/portfolio_667048c11d8d9.jpg', '17-06-2024 | 05:31:26 PM'),
(232, 'advertising', '', 'pages/upload/portfolio/portfolio_667048c563fa1.jpg', '17-06-2024 | 05:31:30 PM'),
(233, 'advertising', '', 'pages/upload/portfolio/portfolio_667048c99ef77.jpg', '17-06-2024 | 05:31:34 PM'),
(234, 'advertising', '', 'pages/upload/portfolio/portfolio_667048d02f9fc.jpg', '17-06-2024 | 05:31:41 PM'),
(235, 'advertising', '', 'pages/upload/portfolio/portfolio_667048d473360.jpg', '17-06-2024 | 05:31:45 PM'),
(236, 'advertising', '', 'pages/upload/portfolio/portfolio_667048d8ae996.jpg', '17-06-2024 | 05:31:49 PM'),
(237, 'advertising', '', 'pages/upload/portfolio/portfolio_667048de3c715.jpg', '17-06-2024 | 05:31:55 PM'),
(238, 'advertising', '', 'pages/upload/portfolio/portfolio_667048e295954.jpg', '17-06-2024 | 05:31:59 PM'),
(239, 'advertising', '', 'pages/upload/portfolio/portfolio_667048e6d3b13.jpg', '17-06-2024 | 05:32:03 PM'),
(240, 'advertising', '', 'pages/upload/portfolio/portfolio_667048eb46e4f.jpg', '17-06-2024 | 05:32:08 PM'),
(241, 'advertising', '', 'pages/upload/portfolio/portfolio_667048ef80e8a.jpg', '17-06-2024 | 05:32:12 PM'),
(242, 'advertising', '', 'pages/upload/portfolio/portfolio_667048f3ec8c5.jpg', '17-06-2024 | 05:32:16 PM'),
(243, 'advertising', '', 'pages/upload/portfolio/portfolio_667048f84c752.jpg', '17-06-2024 | 05:32:21 PM'),
(244, 'advertising', '', 'pages/upload/portfolio/portfolio_667048fcd2cde.jpg', '17-06-2024 | 05:32:25 PM'),
(245, 'advertising', '', 'pages/upload/portfolio/portfolio_6670490142a10.jpg', '17-06-2024 | 05:32:30 PM'),
(246, 'advertising', '', 'pages/upload/portfolio/portfolio_6670490589445.jpg', '17-06-2024 | 05:32:34 PM'),
(247, 'advertising', '', 'pages/upload/portfolio/portfolio_66704909b9fcf.jpg', '17-06-2024 | 05:32:38 PM'),
(248, 'advertising', '', 'pages/upload/portfolio/portfolio_6670490de6fe7.jpg', '17-06-2024 | 05:32:42 PM'),
(249, 'advertising', '', 'pages/upload/portfolio/portfolio_6670491247174.jpg', '17-06-2024 | 05:32:47 PM'),
(250, 'advertising', '', 'pages/upload/portfolio/portfolio_66704916914af.jpg', '17-06-2024 | 05:32:51 PM'),
(251, 'advertising', '', 'pages/upload/portfolio/portfolio_6670491adef8e.jpg', '17-06-2024 | 05:32:55 PM'),
(252, 'advertising', '', 'pages/upload/portfolio/portfolio_6670491f85db2.jpg', '17-06-2024 | 05:33:00 PM'),
(253, 'advertising', '', 'pages/upload/portfolio/portfolio_667049267d248.jpg', '17-06-2024 | 05:33:07 PM'),
(255, 'advertising', '', 'pages/upload/portfolio/portfolio_667049a8659be.JPG', '17-06-2024 | 05:35:17 PM'),
(256, 'advertising', '', 'pages/upload/portfolio/portfolio_667049ad137d8.JPG', '17-06-2024 | 05:35:22 PM'),
(257, 'advertising', '', 'pages/upload/portfolio/portfolio_667049b196bbc.JPG', '17-06-2024 | 05:35:26 PM'),
(258, 'advertising', '', 'pages/upload/portfolio/portfolio_667049b5d7802.jpg', '17-06-2024 | 05:35:30 PM'),
(259, 'advertising', '', 'pages/upload/portfolio/portfolio_667049baaa144.jpg', '17-06-2024 | 05:35:35 PM'),
(260, 'advertising', '', 'pages/upload/portfolio/portfolio_667049bf01a5c.jpg', '17-06-2024 | 05:35:40 PM'),
(261, 'advertising', '', 'pages/upload/portfolio/portfolio_667049c34573d.jpg', '17-06-2024 | 05:35:44 PM'),
(262, 'advertising', '', 'pages/upload/portfolio/portfolio_667049c7b2885.jpg', '17-06-2024 | 05:35:48 PM'),
(263, 'advertising', '', 'pages/upload/portfolio/portfolio_667049cc22b4b.jpg', '17-06-2024 | 05:35:53 PM'),
(264, 'advertising', '', 'pages/upload/portfolio/portfolio_667049d19869a.jpg', '17-06-2024 | 05:35:58 PM'),
(265, 'advertising', '', 'pages/upload/portfolio/portfolio_667049d6ed427.jpg', '17-06-2024 | 05:36:03 PM'),
(266, 'advertising', '', 'pages/upload/portfolio/portfolio_667049dcd72ba.jpg', '17-06-2024 | 05:36:09 PM'),
(267, 'advertising', '', 'pages/upload/portfolio/portfolio_667049e157fc5.jpg', '17-06-2024 | 05:36:14 PM'),
(269, 'advertising', '', 'pages/upload/portfolio/portfolio_66704a0822b3e.jpeg', '17-06-2024 | 05:36:53 PM'),
(270, 'advertising', '', 'pages/upload/portfolio/portfolio_66704a0e18e44.jpeg', '17-06-2024 | 05:36:59 PM'),
(271, 'advertising', '', 'pages/upload/portfolio/portfolio_66704a140482b.jpeg', '17-06-2024 | 05:37:05 PM'),
(272, 'advertising', '', 'pages/upload/portfolio/portfolio_66704a1a79851.jpeg', '17-06-2024 | 05:37:11 PM'),
(273, 'advertising', '', 'pages/upload/portfolio/portfolio_66704a1eace0e.jpeg', '17-06-2024 | 05:37:15 PM'),
(274, 'advertising', '', 'pages/upload/portfolio/portfolio_66704a22da5db.jpeg', '17-06-2024 | 05:37:19 PM'),
(275, 'advertising', '', 'pages/upload/portfolio/portfolio_66704a2a55a9c.jpeg', '17-06-2024 | 05:37:27 PM'),
(277, 'followers', '', 'pages/upload/portfolio/portfolio_66704b09c1a34.jpeg', '17-06-2024 | 05:41:10 PM'),
(278, 'followers', '', 'pages/upload/portfolio/portfolio_66704b0fa618e.jpeg', '17-06-2024 | 05:41:16 PM'),
(279, 'followers', '', 'pages/upload/portfolio/portfolio_66704b1505470.jpeg', '17-06-2024 | 05:41:22 PM'),
(280, 'followers', '', 'pages/upload/portfolio/portfolio_66704b1a10e4c.jpeg', '17-06-2024 | 05:41:27 PM'),
(281, 'followers', '', 'pages/upload/portfolio/portfolio_66704b1f919ff.jpeg', '17-06-2024 | 05:41:32 PM'),
(282, 'followers', '', 'pages/upload/portfolio/portfolio_66704b253b68f.jpeg', '17-06-2024 | 05:41:38 PM'),
(283, 'followers', '', 'pages/upload/portfolio/portfolio_66704b2c2cf88.jpeg', '17-06-2024 | 05:41:45 PM'),
(284, 'followers', '', 'pages/upload/portfolio/portfolio_66704b31cb704.jpeg', '17-06-2024 | 05:41:50 PM'),
(285, 'followers', '', 'pages/upload/portfolio/portfolio_66704b36003c1.jpeg', '17-06-2024 | 05:41:55 PM'),
(286, 'followers', '', 'pages/upload/portfolio/portfolio_66704b3bb9b63.jpeg', '17-06-2024 | 05:42:00 PM'),
(287, 'followers', '', 'pages/upload/portfolio/portfolio_66704b4141a05.jpeg', '17-06-2024 | 05:42:06 PM'),
(289, 'followers', '', 'pages/upload/portfolio/portfolio_66b75c58b5f75.jpeg', '10-08-2024 | 03:25:57 PM'),
(290, 'followers', '', 'pages/upload/portfolio/portfolio_66b75c605ca00.jpeg', '10-08-2024 | 03:26:05 PM'),
(291, 'followers', '', 'pages/upload/portfolio/portfolio_66b75ca145edb.jpeg', '10-08-2024 | 03:27:10 PM'),
(292, 'followers', '', 'pages/upload/portfolio/portfolio_66b75cad0026a.jpg', '10-08-2024 | 03:27:21 PM'),
(293, 'advertising', '', 'pages/upload/portfolio/portfolio_66b75cc1a507f.jpeg', '10-08-2024 | 03:27:42 PM'),
(294, 'advertising', '', 'pages/upload/portfolio/portfolio_66b75cd6de4e8.jpeg', '10-08-2024 | 03:28:03 PM'),
(295, 'advertising', '', 'pages/upload/portfolio/portfolio_66b75cdf2cebb.jpeg', '10-08-2024 | 03:28:12 PM'),
(296, 'advertising', '', 'pages/upload/portfolio/portfolio_66b75cef05d08.jpeg', '10-08-2024 | 03:28:28 PM'),
(297, 'logo', '', 'pages/upload/portfolio/portfolio_66b76afabce59.png', '10-08-2024 | 04:28:23 PM'),
(298, 'logo', '', 'pages/upload/portfolio/portfolio_66b76b1d30573.jpeg', '10-08-2024 | 04:28:58 PM'),
(299, 'logo', '', 'pages/upload/portfolio/portfolio_66b76b3d7e2d8.jpeg', '10-08-2024 | 04:29:30 PM'),
(301, 'logo', '', 'pages/upload/portfolio/portfolio_66b76df9adedb.jpeg', '10-08-2024 | 04:41:10 PM');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--
-- Creation: Aug 10, 2024 at 11:19 AM
-- Last update: Aug 11, 2024 at 01:39 AM
--

DROP TABLE IF EXISTS `resume`;
CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `nameUniversity` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `holds` text NOT NULL,
  `form_to_year` varchar(20) NOT NULL,
  `date` varchar(50) NOT NULL,
  `nameTitle` varchar(255) NOT NULL,
  `city2` varchar(255) NOT NULL,
  `vision` text NOT NULL,
  `form_to_year2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `nameUniversity`, `city`, `holds`, `form_to_year`, `date`, `nameTitle`, `city2`, `vision`, `form_to_year2`) VALUES
(1, 'Faculty of commerce, English section, Aswan university', 'Accounting major', 'Bachelor\'s degree with a cumulative academic grade of \"very good.\"', '2019 - 2023', '11-08-2024 | 04:39:36 AM', 'vision & mission', 'Freelancer.', 'My vision is to become the most recognized and respected brand in all areas of marketing by increasing sales and revenue for more companies than any other agency in the world. My mission is to help customers attract and acquire more customers, turn these customers into super customers, and these super customers into esteemed fans of their business for life! I do this by putting values at the forefront of every decision I make and every campaign I run. I am serious in my pursuit of this vision, and I will stop at nothing to achieve it.', '2019 - 2023');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--
-- Creation: Aug 10, 2024 at 11:19 AM
-- Last update: Aug 10, 2024 at 11:19 AM
--

DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `cheange_color` varchar(50) NOT NULL,
  `switch` tinyint(1) NOT NULL,
  `date` varchar(50) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `title`, `description`, `keywords`, `cheange_color`, `switch`, `date`, `ip`) VALUES
(1, 'Portfolio | Ahmed Khaled', 'Welcome to Abu Khaled World ', 'Portfolio, CV, business, Developer, Premium, Social Media, Marketing, Designer, Graphic, Ads, Freelancer, Online, Influencer', '#f7ce46', 0, '15-06-2024 | 05:12:49 PM', '156.221.188.117');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--
-- Creation: Aug 10, 2024 at 11:19 AM
-- Last update: Aug 10, 2024 at 11:19 AM
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `sk_serv` varchar(100) NOT NULL,
  `Percentage1` int(3) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `sk_serv`, `Percentage1`, `type`, `date`) VALUES
(65, 'Managing social media Pages', 90, 'SERVICES', '24-05-2023 | 05:44:43 AM'),
(66, 'Facebook Marketing', 85, 'SERVICES', '24-05-2023 | 05:45:03 AM'),
(67, 'Instagram Marketing', 70, 'SERVICES', '24-05-2023 | 05:45:17 AM'),
(68, 'TikTok Marketing', 60, 'SERVICES', '24-05-2023 | 05:45:38 AM'),
(69, 'You tube Marketing', 40, 'SERVICES', '24-05-2023 | 05:45:50 AM'),
(70, 'Twitter Marketing', 20, 'SERVICES', '24-05-2023 | 05:46:05 AM'),
(71, 'Website Ads', 10, 'SERVICES', '24-05-2023 | 05:46:21 AM'),
(73, 'Social media post', 0, 'DESIGN', '24-05-2023 | 05:55:47 AM'),
(74, 'Logo & Cover', 0, 'DESIGN', '24-05-2023 | 05:56:03 AM'),
(75, 'business card design', 0, 'DESIGN', '24-05-2023 | 05:56:10 AM'),
(76, 'Intro design', 0, 'DESIGN', '24-05-2023 | 05:56:16 AM'),
(77, 'Video montage', 0, 'DESIGN', '24-05-2023 | 05:56:24 AM'),
(78, 'Blogger services', 0, 'DESIGN', '24-05-2023 | 05:56:30 AM'),
(79, 'electronic stores', 0, 'DESIGN', '24-05-2023 | 05:56:36 AM'),
(80, 'Translation of videos', 0, 'DESIGN', '24-05-2023 | 05:56:43 AM'),
(88, 'Arabic', 9, 'LANGUAGE', '24-05-2023 | 06:03:52 AM'),
(89, 'English', 6, 'LANGUAGE', '24-05-2023 | 06:04:04 AM'),
(96, 'Problem Solving', 90, 'SOFTWARE', '15-06-2024 | 05:17:26 PM'),
(97, 'Critical Thinking', 80, 'SOFTWARE', '15-06-2024 | 05:17:50 PM'),
(98, 'Flexibility', 100, 'SOFTWARE', '15-06-2024 | 05:18:04 PM'),
(99, 'Communication', 100, 'SOFTWARE', '15-06-2024 | 05:18:23 PM'),
(100, 'Teamwork', 100, 'SOFTWARE', '15-06-2024 | 05:18:31 PM'),
(101, 'Organization', 100, 'SOFTWARE', '15-06-2024 | 05:18:36 PM'),
(102, 'Creativity', 95, 'SOFTWARE', '15-06-2024 | 05:18:45 PM'),
(103, 'Emotional Intelligence', 70, 'SOFTWARE', '15-06-2024 | 05:19:04 PM'),
(104, ' Attention to Detail', 85, 'SOFTWARE', '15-06-2024 | 05:19:15 PM'),
(105, 'Responsibility', 100, 'SOFTWARE', '15-06-2024 | 05:19:24 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opinion`
--
ALTER TABLE `opinion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_me`
--
ALTER TABLE `about_me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `opinion`
--
ALTER TABLE `opinion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
