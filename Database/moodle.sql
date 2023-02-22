-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Nov-2019 às 21:27
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `moodle`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `privilegios` varchar(10) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `departament` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `logotipo` varchar(255) NOT NULL,
  `data_criacao` date NOT NULL,
  `hora_criacao` time NOT NULL,
  `data_login` date NOT NULL,
  `hora_login` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`id`, `nome`, `pass`, `privilegios`, `tipo`, `email`, `country`, `departament`, `skills`, `logotipo`, `data_criacao`, `hora_criacao`, `data_login`, `hora_login`) VALUES
(4, 'Maria Simões', '21232f297a57a5a743894a0e4a801fc3', '1', 'Administrator', 'maria.simoes@shijigroup.com', 'Portugal', 'Logistica', 'JS', 'info_news.jpg   ', '2019-06-04', '09:41:00', '2019-07-03', '11:08:00'),
(7, 'Ricardo Peleira', '72bd39f7e04d111d9cd9a8f808612ddf', '1', 'Administrator', 'r.peleira@hotmail.com', 'Portugal', 'Logística', 'Áreadj', 'tila-tequila.jpg   ', '2019-06-04', '10:24:00', '2019-11-25', '12:12:00'),
(10, 'Luis Simão', 'ae0eea6eb6d63f98da42de867c47a0f8', '2', 'User', 'ricardopeleira16@gmail.com', 'Portugal', 'Programador', 'Android Studio', 'pokemon___lapras_wallpaper_by_kniye-d3nn3j4.jpg   ', '2019-06-04', '10:24:00', '2019-11-25', '13:15:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `conteudo` longtext NOT NULL,
  `files` varchar(20000) NOT NULL,
  `hora_pub` time NOT NULL,
  `data_pub` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `blog`
--

INSERT INTO `blog` (`id`, `title`, `user_id`, `conteudo`, `files`, `hora_pub`, `data_pub`) VALUES
(1, 'Lapras gre lol', 4, '<h2 style=\"text-align: center;\">Boas Pessoal</h2>\n<p>Tribute Negro</p>\n<p>jjj</p>', 'Profile.pdf', '16:04:00', '2019-07-05'),
(2, 'Titlo de Maria Simoes', 4, '<p>Travel my mind</p>\n<p><img src=\"images/uploads/info_news.jpg\" alt=\"\" width=\"1200\" height=\"675\" /></p>\n<p>Ola a todos</p>\n<p>Nao gosto desta situa&ccedil;&atilde;o</p>\n<p>&nbsp;</p>', 'Profile.pdf', '09:03:00', '2019-07-09'),
(3, 'Spa Agenda ', 10, '<p>Spa is beuatiful <strong>9999 &aacute; &amp;&amp;&amp;&amp;</strong></p>', '1ad80ae8b1cd9d183dadffa3e0fa1ec5.png', '12:42:00', '2019-07-10'),
(4, 'Riversade Stadium', 7, '<h1 style=\"text-align: center;\">O Dia do Peixe</h1>\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"images/uploads/gold.jpeg\" width=\"220\" height=\"165\" /></p>\n<p><span style=\"color: #222222; font-family: sans-serif; font-size: 14px;\">The&nbsp;</span><strong style=\"color: #222222; font-family: sans-serif; font-size: 14px;\">common goldfish</strong><span style=\"color: #222222; font-family: sans-serif; font-size: 14px;\">&nbsp;is a breed of&nbsp;</span><a style=\"text-decoration-line: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-size: 14px;\" title=\"Goldfish\" href=\"https://en.wikipedia.org/wiki/Goldfish\">goldfish</a><span style=\"color: #222222; font-family: sans-serif; font-size: 14px;\">&nbsp;with no other differences from its living ancestor, the&nbsp;</span><a style=\"text-decoration-line: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-size: 14px;\" title=\"Prussian carp\" href=\"https://en.wikipedia.org/wiki/Prussian_carp\">Prussian carp</a><span style=\"color: #222222; font-family: sans-serif; font-size: 14px;\">, other than its color and shape. Goldfish are a form of domesticated wild carp and are a close relative of&nbsp;</span><a style=\"text-decoration-line: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-size: 14px;\" title=\"Koi\" href=\"https://en.wikipedia.org/wiki/Koi\">koi</a><span style=\"color: #222222; font-family: sans-serif; font-size: 14px;\">.</span><sup id=\"cite_ref-FishChannel_1-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px; color: #222222; font-family: sans-serif;\"><a style=\"text-decoration-line: none; color: #0b0080; background: none;\" href=\"https://en.wikipedia.org/wiki/Common_goldfish#cite_note-FishChannel-1\">[1]</a></sup><span style=\"color: #222222; font-family: sans-serif; font-size: 14px;\">&nbsp;Most varieties of&nbsp;</span><a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-size: 14px;\" title=\"Fancy goldfish\" href=\"https://en.wikipedia.org/wiki/Fancy_goldfish\">fancy goldfish</a><span style=\"color: #222222; font-family: sans-serif; font-size: 14px;\">&nbsp;were derived from this simple breed.</span><sup id=\"cite_ref-2\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px; color: #222222; font-family: sans-serif;\"><a style=\"text-decoration-line: none; color: #0b0080; background: none;\" href=\"https://en.wikipedia.org/wiki/Common_goldfish#cite_note-2\">[2]</a></sup><span style=\"color: #222222; font-family: sans-serif; font-size: 14px;\">&nbsp;Common goldfish come in a variety of colors including red, orange, red/white, white/black, yellow/white, blue, grey/brown/, olive green, yellow, white, and black, with the most common variation being orange ,(combined with its simplicity, hence the name). Sometimes, the brightness, duration, and the vividness of the color may be an indication of the fish&rsquo;s health status.</span></p>', '75 - A Thread Should Have a Unique Slug Part 1.mp4', '13:40:00', '2019-11-25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(64, 4, 7, '😆😆😆😆😆', '2019-11-25 12:50:58', 1),
(65, 4, 7, '🙀🙀🙀🙀', '2019-11-25 12:51:03', 1),
(66, 10, 7, '😄😄😄😄', '2019-11-25 12:51:28', 0),
(67, 7, 10, '😕😕😕😕', '2019-11-25 12:53:49', 0),
(68, 0, 7, 'aaa', '2019-11-25 12:54:00', 1),
(69, 4, 7, '👞👞👞', '2019-11-25 14:46:51', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `com` varchar(20000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `hora_pub` time NOT NULL,
  `data_pub` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comment`
--

INSERT INTO `comment` (`id`, `com`, `user_id`, `blog_id`, `hora_pub`, `data_pub`) VALUES
(1, 'What', 7, 1, '12:27:00', '2019-11-25'),
(2, 'Velocidade e Saude\nlol\npreço', 7, 1, '12:27:00', '2019-11-25'),
(7, 'Tributo Negro', 4, 2, '12:51:00', '2019-07-03'),
(8, 'Nao gosto', 4, 1, '16:05:00', '2019-07-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `cursos` varchar(255) NOT NULL,
  `sub_cursos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `cursos`, `sub_cursos`) VALUES
(1, 'SPA & LEISURE', 'SPA & LEISURE - Level 1'),
(2, 'SPA & LEISURE', 'SPA & LEISURE - Level 2'),
(3, 'SPA & LEISURE', 'SPA & LEISURE - Level 3'),
(4, 'Point of Sale Solutions', 'Point of Sale Solutions - Level 1'),
(5, 'Point of Sale Solutions', 'Point of Sale Solutions - Level 2'),
(6, 'Point of Sale Solutions', 'Point of Sale Solutions - Level 3'),
(7, 'Inventory', 'Inventory'),
(8, 'Membership Marketing', 'Membership Marketing'),
(9, 'Golf Management', 'GOLF Reservations Level 1'),
(10, 'Golf Management', 'GOLF Reservations Level 2'),
(22, 'SPA & LEISURE', 'IPAD_Videos'),
(23, 'User Security', 'User Security'),
(25, 'Golf Management V2', 'GOLF');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos_videos`
--

CREATE TABLE `cursos_videos` (
  `id` int(11) NOT NULL,
  `cursos_id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `funcoes` varchar(255) NOT NULL,
  `contexto` longtext NOT NULL,
  `ficheiro` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos_videos`
--

INSERT INTO `cursos_videos` (`id`, `cursos_id`, `categoria`, `funcoes`, `contexto`, `ficheiro`) VALUES
(11, 1, 'Overview', 'Overview', 'This Module is divided into five key sections, covering the Settings category of the SPA &amp; LEISURE application. Each of these sections have videos that explain the software functionality available.', ''),
(18, 23, 'Structure', 'Overview', 'On completion of this module you will be able to:<br /><br /><i class=\"fas fa-caret-right\"></i> Create new Users & Roles.<br /><br /><i class=\"fas fa-caret-right\"></i> How to create a Password by user.<br /><br /><i class=\"fas fa-caret-right\"></i> Define a security policy for passwords.<br /><br /><i class=\"fas fa-caret-right\"></i> Create filters per user or roles.<br /><br /><i class=\"fas fa-caret-right\"></i> Use Audit.<br /><br /><i class=\"fas fa-caret-right\"></i> Use Print Report.<br /><br /><i class=\"fas fa-caret-right\"></i> Use Components and Global Filters.<br /><br /><i class=\"fas fa-caret-right\"></i> Next & Previous', ''),
(19, 1, 'Structure', 'Complex', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> An overview of the Settings functionality in the SPA &amp; Leisure Application<br /><i class=\"fas fa-caret-right\"></i> How to create a new Complex.', 'Overview_complex.mp4'),
(20, 1, 'Structure', 'Location', '<i class=\'fas fa-caret-right\'></i> This video describes how to create, modify and remove Locations. ', 'Location.mp4'),
(21, 1, 'Support', 'Staff Grade Sorting functionality', '<i class=\'fas fa-caret-right\'></i> New Parameter added on Spa Application Parameters, \'Agenda Staff Grade based on\', it order the staff grade on the Agenda based on All Activities (Average) or Group/Sub Group.', 'SPA7.png'),
(22, 1, 'Support', 'Increase the size of the dropdown boxes on the application to appear more items', '<i class=\"fas fa-caret-right\"></i> New Parameter added on Spa Application Parameters, \"Drop Down Rows Count\", it will show the number of results on the drop downs boxes based on this parameter.', 'SPA6.png'),
(23, 1, 'Structure', 'Staff', '<i class=\"fas fa-caret-right\"></i> This video describes how to create new Staff, modify and delete the existing ones.', 'Create Staff.mp4'),
(24, 1, 'Structure', 'Staff Assignment', '<i class=\"fas fa-caret-right\"></i> This video describes how to assign working time and activities to a specific staff.', 'Spa Staff Assignment-1.mp4'),
(25, 1, 'Structure', 'Activity Groups and Sub Groups', '<i class=\"fas fa-caret-right\"></i> This video describes how to create Activity Groups and Sub Groups.', 'SPA_Groups_SubGroups.mp4'),
(26, 1, 'Structure', 'Seasons & Complex Time', 'This video covers the following topics:<br /><br /><i class=\"fas fa-caret-right\"></i> How to create new Seasons<br /><i class=\"fas fa-caret-right\"></i> How to define a Complex Opening Time.', 'SPA_Season_ComplexTime.mp4'),
(27, 1, 'Others & Block Types', 'Others & Block Types', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> How to create, modify and delete Cancellation References<br /><i class=\"fas fa-caret-right\"></i> How to create Turnaway Reasons<br /><i class=\"fas fa-caret-right\"></i> How to create and modify Block Types for activities<br /><i class=\"fas fa-caret-right\"></i> An overview of the Question References and the Request Override References<br />', 'Spa Othersettings-1.mp4'),
(28, 1, 'Additional', 'Equipment', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> How to add Equipment<br /><i class=\"fas fa-caret-right\"></i> How to link the Equipment with specific activities.', 'SPA_Equipment.mp4'),
(29, 1, 'Package', 'Package', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> How to create a Package for activities<br /><i class=\"fas fa-caret-right\"></i> How to add services to a Package and define Alternatives.', 'SPA_PackageEdit.mp4'),
(31, 2, 'Overview', 'Overview', 'This Module is divided into two key sections, covering the Profile and the Agenda categories of the application. <br />Each of these sections have videos that explain the software functionality available.', ''),
(32, 1, 'Activities', 'Overview', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> An overview of how to create an Activity<br /><i class=\"fas fa-caret-right\"></i> The difference between the three different Activity Types: Standard, <br /><i class=\"fas fa-caret-right\"></i> Multi Level and Scheduled.', 'SPA_Activity_Overview.mp4'),
(33, 1, 'Activities', 'Standard', 'This video describes how to create a Standard Activity.', 'SPA_Activity_Standard.mp4'),
(34, 1, 'Activities', 'Multi-Level', 'This video describes how to create a Multi Level Activity<br />', 'Spa Activity Multilevel-1.mp4'),
(35, 1, 'Activities', 'Scheduled', 'This video describes how to create a Scheduled Activity.<br />', 'Spa Activity Scheduled-1.mp4'),
(36, 2, 'Profile', 'Search', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> An overview of the Profile functionality<br /><i class=\"fas fa-caret-right\"></i> How to (advanced) search for the existing Profiles<br />', 'Spa Profiles-1.mp4'),
(37, 2, 'Profile', 'Create & Modify', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> How to create a new Profile<br /><i class=\"fas fa-caret-right\"></i> How to modify the existing Profiles<br />', 'SPA_Profiles_CreateModify.mp4'),
(38, 2, 'Profile', 'Activity & Sales History', 'This video describes how to view the Activity and the Sales History of a Profile.', 'SPA_Profiles_Profilehistory.mp4'),
(39, 2, 'Agenda', 'Overview of Agenda', 'This video describes the Agenda functionality<br />', 'Spa Agenda Overview-1.mp4'),
(40, 2, 'Agenda', 'Standard Reservations for a new Profile', 'This video describes how to create Standard Reservations for a new Profile.<br />', 'Spa Agenda Standardreservations-1.mp4'),
(41, 2, 'Agenda', 'Standard Reservations for an existing Profile', 'This video describes how to create Standard Reservations for an existing Profile<br />', 'SPA_Agenda_StandardReservations_ExistingClient.mp4'),
(42, 2, 'Agenda', 'Cancel a Reservation', 'This video describes how to cancel a Reservation.<br /><br />', 'SPA_Agenda_CancelBooking.mp4'),
(43, 2, 'Agenda', 'Drag & Drop, Cut & Paste', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> How to use the \"Drag & Drop\" and \"Cut & Paste\" functionalities for Blocks<br /><i class=\"fas fa-caret-right\"></i> How to create, modify and delete Blocks<br /><i class=\"fas fa-caret-right\"></i> How to paste multiple Blocks.', 'Spa Agenda Dragdrop Cutpast Blocks-1.mp4'),
(44, 2, 'Agenda', 'Confirm Check-In', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> How to confirm a Reservation<br /><i class=\"fas fa-caret-right\"></i> How to confirm a Check In Booking.', 'SPA_Agenda_ConfirmCheckIn.mp4'),
(45, 2, 'Agenda', 'Send a Confirmation Email', 'This video describes how to send the booking itinerary confirmations by email<br /><br />', 'SPA_Agenda_SendConfEmail.mp4'),
(46, 2, 'Agenda', 'Features', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> How to modify a Booking<br /><i class=\"fas fa-caret-right\"></i> How to modify Staff in a Booking<br /><i class=\"fas fa-caret-right\"></i> How to modify Time and Date in a Booking<br /><i class=\"fas fa-caret-right\"></i> How to swap two Bookings (Swap with...). ', 'SPA_Agenda_Features.mp4'),
(47, 2, 'Agenda', 'Concurrent Reservation', 'This video describes how to create a reservation with the Concurrent functionality.<br />(This procedure happens when two therapists are with one client at the same time and room.<br /><br />', 'Spa Agenda Concurrentbooking-1.mp4'),
(48, 2, 'Agenda', 'Turnaway', 'This video describes how to use the Turnaway functionality.<br /><br />', 'SPA_Agenda_Turnaway.mp4'),
(49, 2, 'Agenda', 'Time Line only for today', 'On Spa Agenda, the time line in yellow is available for the current day only.', 'spa_level_2_img_1.png'),
(50, 2, 'Agenda', 'Directly Check Out', 'New functionality available, now it%u2019s possible to Check Out without Check In first<br />', 'img_level_2_2.png'),
(51, 2, 'Agenda', 'Booking Notes improvements', 'New functionality is now available for Booking Notes, it allows the users to edit or add notes without modify a booking.', 'spa_level_2_img_3.png;spa_level_2_img_4.png'),
(52, 2, 'Agenda', 'Agenda List Enhancements', 'New functionalities are available on Agenda List (List View), such as<br /><i class=\"fas fa-caret-right\"></i> Users are now able to filter by profile gender, to Check or Uncheck all bookings<br /><i class=\"fas fa-caret-right\"></i> First and Last Name fields are now working as filters, if a name is typed will filter all the results based on the name.', 'spa_level_2_img_5.png'),
(53, 2, 'Agenda', 'Cut & Paste / Drag & Drop Enhancements', 'New functionality is now available, when a booking is Drag & Dropped / Cut & Paste and the staff or room isn´t available a message will display to search for alternatives.<br /><i class=\"fas fa-caret-right\"></i> A new window with all the alternatives will be displayed.<br />', 'spa_level_2_img_6.png;spa_level_2_img_7.png'),
(58, 3, 'Overview', 'Overview', 'This Module covers some more functions about the functionality of Agenda such as the Agenda List, the Multibookings and the Package Bookings.', ''),
(59, 3, 'Agenda List', 'Agenda List (F5)', 'This video describes the Agenda List (or alternatively F5). ', 'Spa Agenda List-1.mp4'),
(60, 3, 'Multibook', 'Multibook', 'This video describes how to create multiple reservations (or alternatively F7) for a Profile<br /><br />', 'Spa Agenda Multibooking-1.mp4'),
(61, 3, 'Package Bookings', 'Package Reservation', 'This video describes how to book a Package<br /><br />', 'SPA_Agenda_PackageBookingsEdit.mp4'),
(62, 4, 'Overview', 'Overview', 'This Module is divided into four key sections, covering categories of the application. Each of these sections have videos that explain the software functionality available.', ''),
(63, 4, 'Overview', 'Overview of POS', 'This video describes the Point of Sale functionality<br /><br />', 'POS_OverviewEdit.mp4'),
(64, 4, 'Express Sale', 'Express Sale', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> How to perform an Express Sale<br /><i class=\"fas fa-caret-right\"></i> How to add items to a check<br /><i class=\"fas fa-caret-right\"></i> How to apply a discount to individual items<br /><i class=\"fas fa-caret-right\"></i> How to select and split Payment Methods.', 'Pos Expresssalesedit-1.m4v'),
(65, 4, 'Express Sale', 'Tips & Commissions', 'This video describes how to use the Tips and the Commissions in the Express Sale process<br /><br />', 'POS_ExpressSale_CommTipsEdit.mp4'),
(66, 4, 'Express Sale', 'Discounts Enhancements', 'This new functionality allows the users to apply a discount on the entire bill (discount can be set by percentage, value or set a new price for the item). Add one item on the bill and then click on Discount.', 'POS_IMG_1_1.png;POS_IMG_1_2.png'),
(67, 4, 'Express Sale', 'Givex Interface', 'Search the Givex Item and double click to add it<br /><i class=\"fas fa-caret-right\"></i> Image 2: Set the price for your Givex Card.', 'POS_IMG_2_1.png;POS_IMG_2_2.png'),
(68, 4, 'Profile Sales', 'Profile Sales', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> An overview of the Profile Sales<br /><i class=\"fas fa-caret-right\"></i> How to perform a Profile Sale<br /><i class=\"fas fa-caret-right\"></i> How to check Profile Last Sales.', 'POS_ProfileSalesEdit.mp4'),
(69, 4, 'Journal', 'Journal', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> How to \"View or Void\" the sales<br /><i class=\"fas fa-caret-right\"></i> How to void an entire check with Void reasons<br /><i class=\"fas fa-caret-right\"></i> How to reprint documents using the \"Re Ticket\".', 'POS_JournalEdit.mp4'),
(70, 4, 'SPA Check-Out', 'SPA Check-Out', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> How to process a SPA Check<i class=\"fas fa-caret-right\"></i>Out reservation<br /><i class=\"fas fa-caret-right\"></i> How to add items to the Point of Sale.', 'POS_SPA_CheckoutEdit.mp4'),
(71, 5, 'Gift Cards', 'Gift Cards', 'This video describes how to sell and redeem a Gift Card.<br /><br />', 'POS_GiftCardsEdit.mp4'),
(72, 5, 'Profile Accounts', 'Profile Accounts', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> An overview of the Accounts of a Profile<br /><i class=\"fas fa-caret-right\"></i> How to process an Advanced Payment<br />', 'Pos Profileaccountedit-1.mp4'),
(73, 5, 'Overview', 'Overview', 'This Module is divided into three key sections, covering categories of the application. In each section there is a video that explain the software functionality available.', ''),
(74, 5, 'Reports', 'POS Reports', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> An overview of the POS Reports<br /><i class=\"fas fa-caret-right\"></i> How to print Bank Reports.<br />', 'POS_ReportsEdit.mp4'),
(75, 6, 'Overview', 'Overview', 'This Module is divided into three key sections, covering the Configurations Area of how to set up specific functionalities of the application. Each of these sections have videos that explain the software functionality available.', ''),
(76, 6, 'Commission Setup', 'Commission Setup ', 'This video covers the following topics<br /><i class=\"fas fa-caret-right\"></i> An overview of how to set up the Commissions<br /><i class=\"fas fa-caret-right\"></i> How to define SPA Staff and Application Users eligible for commission and/or tip<br /><i class=\"fas fa-caret-right\"></i> How to assign a commission to a specific Staff<br /><i class=\"fas fa-caret-right\"></i> How to set up Commission Rules<br /><i class=\"fas fa-caret-right\"></i> How to duplicate setup Staff Commissions<br />', 'POS_Setup_CommissionsEdit.mp4'),
(77, 6, 'Gift Card Setup', 'Overview of Gift Card', 'This video describes the GIft Card functionality. ', 'POS_Config_GiftCards_OverviewEdit.mp4'),
(79, 6, 'Gift Card Setup', 'Value Based On Gift Card Setup', 'This video describes how to set up \"Value Only\" Gift Cards<br /><br />', 'POS_Config_GiftCards_ValueBasedEdit.mp4'),
(80, 6, 'Gift Card Setup', 'Activity & Retail', 'This video describes how to set up an \"Activity & Retail\" Gift Card.', 'POS_Config_GiftCards_ActivityRetailEdit.mp4'),
(81, 1, 'Ola', 'aaa', 'aaa', 'folder.gif');

-- --------------------------------------------------------

--
-- Estrutura da tabela `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` date NOT NULL,
  `end_event` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`, `user_id`) VALUES
(26, 'fil', '2019-05-08', '2019-05-09', 7),
(27, 'tenis', '2019-06-06', '0000-00-00', 7),
(29, 'Boller', '2019-06-14', '0000-00-00', 4),
(30, 'Tarefa Completa IRS', '2019-05-22', '0000-00-00', 4),
(31, 'Gf', '2019-06-12', '2019-06-13', 4),
(32, 'Tarefa Completa', '2019-06-10', '0000-00-00', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grades_cursos`
--

CREATE TABLE `grades_cursos` (
  `id` int(11) NOT NULL,
  `cursos_id` int(11) NOT NULL,
  `calcular_media` decimal(5,2) NOT NULL,
  `graus` varchar(255) NOT NULL,
  `percentagem` int(11) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grades_cursos`
--

INSERT INTO `grades_cursos` (`id`, `cursos_id`, `calcular_media`, `graus`, `percentagem`, `feedback`) VALUES
(1, 1, '91.00', '90-100', 91, 'Linda Media'),
(4, 5, '80.00', '80-89', 80, 'aaa'),
(5, 23, '66.00', '50-69', 66, 'Muito Mal'),
(6, 23, '55.00', '50-69', 55, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `private_files_users`
--

CREATE TABLE `private_files_users` (
  `id` int(11) NOT NULL,
  `files_private` mediumtext NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `private_files_users`
--

INSERT INTO `private_files_users` (`id`, `files_private`, `user_id`) VALUES
(7, '', 4),
(8, '', 7),
(9, '', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `privilegios`
--

CREATE TABLE `privilegios` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `home_dashboard` varchar(10) NOT NULL DEFAULT 'false',
  `home_site_pages` varchar(10) NOT NULL DEFAULT 'false',
  `home_site_pages_site_blogs` varchar(10) NOT NULL DEFAULT 'false',
  `home_site_pages_site_badges` varchar(10) NOT NULL DEFAULT 'false',
  `home_site_pages_calendar` varchar(10) NOT NULL DEFAULT 'false',
  `home_site_pages_site_news` varchar(10) NOT NULL DEFAULT 'false',
  `home_site_pages_main_activities` varchar(10) NOT NULL DEFAULT 'false',
  `home_site_pages_main_activities_spa` varchar(10) NOT NULL DEFAULT 'false',
  `home_site_pages_main_activities_pos` varchar(10) NOT NULL DEFAULT 'false',
  `home_site_pages_main_activities_marketing` varchar(10) NOT NULL DEFAULT 'false',
  `home_site_pages_main_activities_inventory` varchar(10) NOT NULL DEFAULT 'false',
  `home_site_pages_main_activities_golf` varchar(10) NOT NULL DEFAULT 'false',
  `home_site_pages_main_activities_user_security` varchar(10) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `privilegios`
--

INSERT INTO `privilegios` (`id`, `tipo`, `home_dashboard`, `home_site_pages`, `home_site_pages_site_blogs`, `home_site_pages_site_badges`, `home_site_pages_calendar`, `home_site_pages_site_news`, `home_site_pages_main_activities`, `home_site_pages_main_activities_spa`, `home_site_pages_main_activities_pos`, `home_site_pages_main_activities_marketing`, `home_site_pages_main_activities_inventory`, `home_site_pages_main_activities_golf`, `home_site_pages_main_activities_user_security`) VALUES
(1, 'Administrator', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'false'),
(2, 'User', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'false', 'false', 'false', 'false', 'false', 'false');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessao_logged`
--

CREATE TABLE `sessao_logged` (
  `login_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sessao_logged`
--

INSERT INTO `sessao_logged` (`login_id`, `user_id`, `last_activity`) VALUES
(11, 7, '2019-06-05 11:16:43'),
(12, 4, '2019-06-06 12:29:23'),
(13, 7, '2019-06-05 11:19:14'),
(14, 4, '2019-06-05 18:00:33'),
(15, 7, '2019-06-06 00:20:00'),
(16, 7, '2019-06-06 10:22:48'),
(17, 4, '2019-06-06 10:45:01'),
(18, 4, '2019-06-06 15:33:58'),
(19, 4, '2019-06-06 15:35:39'),
(20, 4, '2019-06-07 19:55:25'),
(21, 7, '2019-06-07 18:55:25'),
(22, 4, '2019-06-10 18:25:16'),
(23, 4, '2019-06-10 14:20:19'),
(24, 4, '2019-06-10 20:12:30'),
(25, 4, '2019-06-10 20:13:18'),
(26, 4, '2019-06-11 12:53:43'),
(27, 7, '2019-06-12 17:00:19'),
(28, 4, '2019-06-11 10:10:36'),
(29, 4, '2019-06-11 12:55:42'),
(30, 4, '2019-06-11 13:00:09'),
(31, 4, '2019-06-12 16:30:20'),
(32, 4, '2019-06-12 16:36:58'),
(33, 4, '2019-06-12 16:39:27'),
(34, 4, '2019-06-12 17:02:26'),
(35, 4, '2019-06-13 11:01:57'),
(36, 4, '2019-06-18 11:15:08'),
(37, 7, '2019-06-13 17:38:31'),
(38, 7, '2019-06-13 17:51:54'),
(39, 7, '2019-06-13 17:56:08'),
(40, 4, '2019-06-14 09:16:53'),
(41, 4, '2019-06-18 11:25:33'),
(42, 7, '2019-06-14 16:04:50'),
(43, 7, '2019-06-14 17:51:59'),
(44, 4, '2019-06-26 22:05:42'),
(45, 4, '2019-06-18 17:04:33'),
(46, 4, '2019-06-26 10:27:24'),
(47, 4, '2019-07-09 16:59:15'),
(48, 4, '2019-06-26 10:31:51'),
(49, 4, '2019-07-10 14:42:04'),
(50, 7, '2019-07-03 15:10:46'),
(51, 9, '2019-07-03 11:09:22'),
(52, 9, '2019-07-03 13:35:05'),
(53, 9, '2019-07-03 14:31:46'),
(54, 10, '2019-07-09 16:08:48'),
(55, 7, '2019-07-10 13:08:26'),
(56, 7, '2019-07-10 13:27:52'),
(57, 7, '2019-07-10 13:29:32'),
(58, 7, '2019-11-25 20:02:09'),
(59, 10, '2019-11-25 12:53:39'),
(60, 10, '2019-11-25 13:15:06');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Índices para tabela `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cursos_videos`
--
ALTER TABLE `cursos_videos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `grades_cursos`
--
ALTER TABLE `grades_cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `private_files_users`
--
ALTER TABLE `private_files_users`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `privilegios`
--
ALTER TABLE `privilegios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sessao_logged`
--
ALTER TABLE `sessao_logged`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de tabela `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `cursos_videos`
--
ALTER TABLE `cursos_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `grades_cursos`
--
ALTER TABLE `grades_cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `private_files_users`
--
ALTER TABLE `private_files_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `privilegios`
--
ALTER TABLE `privilegios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `sessao_logged`
--
ALTER TABLE `sessao_logged`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
