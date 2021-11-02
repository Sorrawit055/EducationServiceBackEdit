-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 10:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel_slider`
--

CREATE TABLE `carousel_slider` (
  `id_carousel` int(11) NOT NULL,
  `image_carousel` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel_slider`
--

INSERT INTO `carousel_slider` (`id_carousel`, `image_carousel`) VALUES
(1, 'https://firebasestorage.googleapis.com/v0/b/james2-67f02.appspot.com/o/images%2Funiversitylogo_1631179634?alt=media&token=9e275726-69c8-4ab4-bd40-8d2d32f76d8b'),
(2, 'https://firebasestorage.googleapis.com/v0/b/james2-67f02.appspot.com/o/images%2Fu001_1631177357?alt=media&token=271abd7a-0235-4f58-9ea8-870ba4d387cb'),
(10, 'https://firebasestorage.googleapis.com/v0/b/james2-67f02.appspot.com/o/images%2Fu001_1631845416?alt=media&token=6e2929a9-5be1-4add-a72d-ff640bd289cc');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id_course` int(11) NOT NULL,
  `name_course` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_major` int(11) NOT NULL,
  `id_degree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `name_course`, `id_major`, `id_degree`) VALUES
(1, 'สาขาวิชาชีววิทยา', 2, 1),
(2, 'สาขาวิชาคณิตศาสตร์', 7, 1),
(3, 'สาขาวิชาการจัดการอาหาร', 3, 6),
(4, 'สาขาวิชาสาธารณสุขศาสตร์', 4, 1),
(5, 'สาขาวิชาเทคโนโลยีการผลิตพืช', 4, 1),
(6, 'สาขาวิชาวิทยาศาสตร์และเทคโนโลยีการอาหาร', 4, 1),
(7, 'สาขาวิชาเคมี', 2, 1),
(8, 'สาขาวิชาอาชีวอนามัยและความปลอดภัย', 4, 1),
(9, 'สาขาวิชาวิศวกรรมซอฟต์แวร์', 1, 1),
(10, 'สาขาวิชาเทคโนโลยีสารสนเทศ', 1, 2),
(11, 'สาขาวิชาคอมพิวเตอร์ศึกษา', 2, 1),
(12, 'สาขาวิชาเทคโนโลยีมัลติมีเดีย', 6, 1),
(13, 'สาขาวิชาเทคโนโลยีคอมพิวเตอร์', 1, 1),
(14, 'สาขาวิชาวิทยาการคอมพิวเตอร์', 1, 1),
(15, 'สาขาวิชาวิศวกรรมไฟฟ้า', 4, 7),
(16, 'สาขาวิชาจุลชีววิทยา', 4, 1),
(17, 'สาขาวิชาวิทยาศาสตร์และฟิสิกส์', 2, 1),
(18, 'สาขาวิชาอุตสาหกรรมศิลป์', 2, 1),
(19, 'สาขาวิชาเทคโนโลยีคอมพิวเตอร์อุตสาหกรรม', 1, 1),
(20, 'สาขาวิชาวิทยาการข้อมูล', 1, 1),
(21, 'สาขาวิชาวิศวกรรมโยธา', 4, 7),
(22, 'สาขาวิชานวัตกรรมการเกษตรและการจัดการ', 4, 1),
(23, 'สาขาวิชาการศึกษาปฐมวัย', 2, 2),
(24, 'สาขาวิชาเทคโนโลยีและนวัตกรรมการศึกษา', 2, 6),
(25, 'สาขาวิชาพลศึกษา', 2, 2),
(26, 'สาขาการประถมศึกษา', 2, 2),
(27, 'สาขาวิชานาฏศิลป์และศิลปะการแสดง', 2, 8),
(28, 'สาขาวิชาการจัดการอุตสาหกรรมบริการ การท่องเที่ยวและการบริการเชิงสุขภาพ \r\n(หลักสูตรภาษาอังกฤษ)', 4, 6),
(29, 'สาขาวิชาภาษาอังกฤษธุรกิจ', 3, 6),
(30, 'สาขาวิชารัฐประศาสนศาสตร์', 7, 9),
(31, 'สาขาวิชา ภาษาอังกฤษ 4 ปี ', 2, 6),
(32, 'สาขาวิชาบรรณารักษศาสตร์ฯ', 7, 6),
(33, 'สาขาวิชาภาษาไทยเพื่ออาชีพ 4 ปี', 2, 6),
(34, 'นิติศาสตร์\r\n', 7, 10),
(35, 'สาขาวิชาภาษาอังกฤษ 5 ปี', 2, 2),
(36, 'สาขาวิชาดนตรีศึกษา 5 ปี', 2, 2),
(37, 'สาขาวิชาออกแบบนิเทศศิลป์', 2, 8),
(39, 'สาขาวิชาภาษาจีน 5 ปี', 2, 2),
(40, 'สาขาวิชาศิลปศึกษา 5 ปี', 2, 2),
(41, 'สาขาวิชาภาษาไทยเพื่อการสื่อสาร', 3, 6),
(42, 'สาขาวิชาภาษาจีน', 3, 6),
(43, 'สาขาวิชาภาษาอังกฤษ', 3, 6),
(44, 'สาขาวิชาภาษาอังกฤษธุรกิจ', 3, 6),
(45, 'สาขาวิชาบรรณารักษศาสตร์และสารสนเทศศาสตร์', 2, 6),
(46, 'สาขาวิชาการพัฒนาชุมชน', 7, 6),
(47, 'สาขาวิชาภาษาไทย', 2, 2),
(48, 'สาขาวิชาการท่องเที่ยวและการโรงแรม', 3, 6),
(49, 'สาขาวิชาออกแบบนิเทศศิลป์', 3, 8),
(50, 'สาขาวิชาออกแบบดิจิทัลอาร์ต', 3, 8),
(51, 'สาขาวิชาสังคมศึกษา', 2, 2),
(52, 'สาขาวิชาการจัดการทั่วไป', 3, 11),
(53, 'บัญชีบัณฑิต', 3, 12),
(54, 'สาขาวิชาการเงินและการธนาคาร', 3, 11),
(55, 'สาขาวิชาการตลาด', 3, 11),
(56, 'สาขาวิชาการจัดการทรัพยากรมนุษย์', 3, 11),
(57, 'สาขาวิชาคอมพิวเตอร์ธุรกิจ', 1, 11),
(58, 'หลักสูตรนิเทศศาสตรบัณฑิต', 6, 3),
(59, 'สาขาวิชาการจัดการโลจิสติกส์และโซ่อุปทาน', 3, 11),
(60, 'สาขาวิชาธุรกิจระหว่างประเทศ', 3, 11),
(61, 'สาขาวิชาธุรกิจศึกษา', 2, 2),
(62, 'หลักสูตรพยาบาลศาสตรบัณฑิต', 4, 13),
(65, 'NULL', 6, 3),
(70, 'ทดสอบ', 2, 2),
(71, 'ทดสอบ2', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE `curriculum` (
  `id_curriculum` int(11) NOT NULL,
  `name_curriculum` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `curriculum`
--

INSERT INTO `curriculum` (`id_curriculum`, `name_curriculum`) VALUES
(1, 'ศิลป์ภาษา'),
(2, 'คณิต-วิทย์'),
(3, 'ศิลป์คำนวณ'),
(4, 'ไม่กำหนด');

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `id_degree` int(11) NOT NULL,
  `name_degree` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `initials_degree` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`id_degree`, `name_degree`, `initials_degree`) VALUES
(1, 'วิทยาศาสตรบัณฑิต', 'วท.บ'),
(2, 'ครุศาสตรบัณฑิต', 'ค.บ'),
(3, 'นิเทศศาสตรบัณทิต', 'นศ.บ'),
(4, 'เศรษฐศาสตรบัณฑิต', 'ศ.บ.'),
(5, 'สาธารณสุขศาสตรบัณฑิต', 'ส.บ.'),
(6, 'ศิลปศาสตรบัณฑิต', 'ศศ.บ.'),
(7, 'วิศวกรรมศาสตรบัณฑิต ', 'วศ.บ.'),
(8, 'ศิลปกรรมศาสตรบัณฑิต', 'ศป.บ.'),
(9, 'รัฐประศาสนศาสตรบัณฑิต (รัฐประศาสนศาสตร์)', 'รป.บ.'),
(10, 'นิติศาสตรบัณฑิต', 'น.บ'),
(11, 'บริหารธุรกิจบัณฑิต', 'บธ.บ.'),
(12, 'บัญชีบัณฑิต', 'บช.บ.'),
(13, 'พยาบาลศาสตรบัณฑิต', 'พย.บ.');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id_education` int(11) NOT NULL,
  `year_edu` year(4) NOT NULL,
  `id_round` int(11) NOT NULL,
  `id_university` int(11) NOT NULL,
  `tcas` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `open_date` date NOT NULL,
  `close_date` date NOT NULL,
  `list_day` date NOT NULL,
  `general` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `doculment_edu` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `note_edu` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `file_doculment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_doculment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id_education`, `year_edu`, `id_round`, `id_university`, `tcas`, `open_date`, `close_date`, `list_day`, `general`, `doculment_edu`, `note_edu`, `file_doculment`, `url_doculment`, `image`) VALUES
(1, 2021, 1, 12, 'เข้าร่วม', '2021-12-15', '2021-01-15', '2021-05-15', '1. ผู้สมัครจะต้องเป็นผู้สําเร็จการศึกษาในระดับมัธยมศึกษาตอนปลายหรือเทียบเท่าและมีคุณสมบัติเฉพาะสาขาวิชาตามที่มหาวิทยาลัยฯ กําหนด\r\n2. ผู้สมัครจะต้องเป็นผู้ที่กําลังศึกษาอยู่ในระดับชั้นมัธยมศึกษาตอนปลาย ต้องมีผลการเรียนเฉลี่ยสะสมนับตั้งแต่ภาคเรียนแรก ถึงภาคเรียนที่ 4 หรือ 5 ของระดับมัธยมศึกษาตอนปลาย หรือเทียบเท่า หรือผู้ที่สําเร็จการศึกษาแล้ว และมีคุณสมบัติเฉพาะสาขาวิชาตามที่มหาวิทยาลัยฯ กําหนด\r\n3. มีสุขภาพสมบูรณ์แข็งแรง และไม่เป็นโรคติดต่อร้ายแรง หรือไม่เป็นโรคที่เป็นอุปสรรคต่อการศึกษา\r\n4. เป็นผู้ที่มีความประพฤติดี\r\n5. เงื่อนไขการรับสมัคร (ตามเอกสารแนบท้ายประกาศ)', '1. ใบแสดงผลการเรียน\r\n2. ใบรับรอง\r\n3. สำเนาบัตรประจำตัวประชาชน\r\n4. สำเนาทะเบียนบ้านตัวเอง + ผู้ปกครอง\r\n5. ใบสมัคร\r\n6. ผลคะแนนต่าง ๆ\r\n7. เอกสารแสดงความสามารถพิเศษ\r\n8. Portfolio\r\n9. หลักฐานการชำระเงิน', '55', 'C:\\Users\\Advice\\Downloads\\ประกาศรับรับสมัคร ภาคปกติ v1', '-', 'https://firebasestorage.googleapis.com/v0/b/james2-67f02.appspot.com/o/images%2Funiversitylogo_1631439179?alt=media&token=7f3956cf-9b76-4cb5-a343-9c8e0ac76d17'),
(2, 2021, 2, 2, 'ไม่เข้าร่วม', '2021-02-15', '2021-04-15', '2021-06-15', '1. ผู้สมัครจะต้องเป็นผู้สําเร็จการศึกษาในระดับมัธยมศึกษาตอนปลายหรือเทียบเท่าและมีคุณสมบัติเฉพาะสาขาวิชาตามที่มหาวิทยาลัยฯ กําหนด\r\n2. ผู้สมัครจะต้องเป็นผู้ที่กําลังศึกษาอยู่ในระดับชั้นมัธยมศึกษาตอนปลาย ต้องมีผลการเรียนเฉลี่ยสะสมนับตั้งแต่ภาคเรียนแรก ถึงภาคเรียนที่ 4 หรือ 5 ของระดับมัธยมศึกษาตอนปลาย หรือเทียบเท่า หรือผู้ที่สําเร็จการศึกษาแล้ว และมีคุณสมบัติเฉพาะสาขาวิชาตามที่มหาวิทยาลัยฯ กําหนด\r\n3. มีสุขภาพสมบูรณ์แข็งแรง และไม่เป็นโรคติดต่อร้ายแรง หรือไม่เป็นโรคที่เป็นอุปสรรคต่อการศึกษา\r\n4. เป็นผู้ที่มีความประพฤติดี\r\n5. เงื่อนไขการรับสมัคร (ตามเอกสารแนบท้ายประกาศ)', '1. ใบแสดงผลการเรียน\r\n2. ใบรับรอง\r\n3. สำเนาบัตรประจำตัวประชาชน\r\n4. สำเนาทะเบียนบ้านตัวเอง + ผู้ปกครอง\r\n5. ใบสมัคร\r\n6. ผลคะแนนต่าง ๆ\r\n7. เอกสารแสดงความสามารถพิเศษ\r\n8. Portfolio\r\n9. หลักฐานการชำระเงิน', '', '-', '', ''),
(7, 2021, 3, 2, 'ไม่เข้าร่วม', '2021-03-15', '2021-04-15', '2021-06-25', '1. ผู้สมัครจะต้องเป็นผู้สําเร็จการศึกษาในระดับมัธยมศึกษาตอนปลายหรือเทียบเท่าและมีคุณสมบัติเฉพาะสาขาวิชาตามที่มหาวิทยาลัยฯ กําหนด\r\n2. ผู้สมัครจะต้องเป็นผู้ที่กําลังศึกษาอยู่ในระดับชั้นมัธยมศึกษาตอนปลาย ต้องมีผลการเรียนเฉลี่ยสะสมนับตั้งแต่ภาคเรียนแรก ถึงภาคเรียนที่ 4 หรือ 5 ของระดับมัธยมศึกษาตอนปลาย หรือเทียบเท่า หรือผู้ที่สําเร็จการศึกษาแล้ว และมีคุณสมบัติเฉพาะสาขาวิชาตามที่มหาวิทยาลัยฯ กําหนด\r\n3. มีสุขภาพสมบูรณ์แข็งแรง และไม่เป็นโรคติดต่อร้ายแรง หรือไม่เป็นโรคที่เป็นอุปสรรคต่อการศึกษา\r\n4. เป็นผู้ที่มีความประพฤติดี\r\n5. เงื่อนไขการรับสมัคร (ตามเอกสารแนบท้ายประกาศ)', '1. ใบแสดงผลการเรียน\r\n2. ใบรับรอง\r\n3. สำเนาบัตรประจำตัวประชาชน\r\n4. สำเนาทะเบียนบ้านตัวเอง + ผู้ปกครอง\r\n5. ใบสมัคร\r\n6. ผลคะแนนต่าง ๆ\r\n7. เอกสารแสดงความสามารถพิเศษ\r\n8. Portfolio\r\n9. หลักฐานการชำระเงิน', '', '', '', ''),
(8, 2022, 1, 12, 'ไม่เข้าร่วม', '2021-12-25', '2022-02-25', '2022-04-25', '1. ผู้สมัครจะต้องเป็นผู้สําเร็จการศึกษาในระดับมัธยมศึกษาตอนปลายหรือเทียบเท่าและมีคุณสมบัติเฉพาะสาขาวิชาตามที่มหาวิทยาลัยฯ กําหนด\r\n2. ผู้สมัครจะต้องเป็นผู้ที่กําลังศึกษาอยู่ในระดับชั้นมัธยมศึกษาตอนปลาย ต้องมีผลการเรียนเฉลี่ยสะสมนับตั้งแต่ภาคเรียนแรก ถึงภาคเรียนที่ 4 หรือ 5 ของระดับมัธยมศึกษาตอนปลาย หรือเทียบเท่า หรือผู้ที่สําเร็จการศึกษาแล้ว และมีคุณสมบัติเฉพาะสาขาวิชาตามที่มหาวิทยาลัยฯ กําหนด\r\n3. มีสุขภาพสมบูรณ์แข็งแรง และไม่เป็นโรคติดต่อร้ายแรง หรือไม่เป็นโรคที่เป็นอุปสรรคต่อการศึกษา\r\n4. เป็นผู้ที่มีความประพฤติดี\r\n5. เงื่อนไขการรับสมัคร (ตามเอกสารแนบท้ายประกาศ)', '1. ใบแสดงผลการเรียน\r\n2. ใบรับรอง\r\n3. สำเนาบัตรประจำตัวประชาชน\r\n4. สำเนาทะเบียนบ้านตัวเอง + ผู้ปกครอง\r\n5. ใบสมัคร\r\n6. ผลคะแนนต่าง ๆ\r\n7. เอกสารแสดงความสามารถพิเศษ\r\n8. Portfolio\r\n9. หลักฐานการชำระเงิน', '', '', '', ''),
(10, 2021, 1, 11, 'เข้าร่วม', '2021-09-09', '2021-09-10', '2021-09-10', 'ไม่มี', 'ไม่มี', 'ไม่มี', '', 'ไม่มี', ''),
(11, 2021, 5, 5, 'เข้าร่วม', '2021-10-08', '2021-09-24', '2021-09-23', 'hg', 'hfgh', 'fhfgh', '', 'ytu', 'https://firebasestorage.googleapis.com/v0/b/james2-67f02.appspot.com/o/images%2Fu001_1631272076?alt=media&token=99912f56-4f34-4d4f-9438-20d2a2f6d76b'),
(12, 2021, 4, 12, 'เข้าร่วม', '2021-10-07', '2021-10-01', '2021-10-06', 'test', 'test', 'test', '', 'test', 'https://firebasestorage.googleapis.com/v0/b/james2-67f02.appspot.com/o/images%2Fu001_1631272664?alt=media&token=ce141771-04be-4b45-9323-f4f618d9d58b');

-- --------------------------------------------------------

--
-- Table structure for table `education_detail`
--

CREATE TABLE `education_detail` (
  `id_edu_detail` int(11) NOT NULL,
  `number_of_edu` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `id_course` int(11) NOT NULL,
  `id_faculty` int(11) NOT NULL,
  `id_education` int(11) NOT NULL,
  `GPA` float NOT NULL,
  `note_condi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_curriculum` int(11) NOT NULL,
  `id_major` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `education_detail`
--

INSERT INTO `education_detail` (`id_edu_detail`, `number_of_edu`, `id_course`, `id_faculty`, `id_education`, `GPA`, `note_condi`, `id_curriculum`, `id_major`) VALUES
(1, '20', 2, 6, 2, 1.89, '-', 1, 1),
(4, '25', 1, 1, 1, 1.8, '-', 1, 2),
(5, '30', 2, 6, 2, 1.8, '-', 2, 2),
(6, '30', 2, 6, 2, 1.8, '-', 2, 1),
(7, '1', 1, 5, 2, 1, '1', 1, 1),
(9, '2', 3, 4, 2, 2, '-', 1, 1),
(10, '18', 1, 1, 7, 1.8, '-', 2, 2),
(11, '100', 1, 2, 2, 4, '-', 1, 1),
(14, '30', 2, 6, 2, 1.8, '-', 2, 1),
(17, '30', 2, 6, 2, 1.8, '-', 2, 1),
(20, '10', 2, 6, 7, 2.5, '-', 2, 1),
(21, '12', 1, 1, 8, 2.5, '-', 1, 1),
(22, '18', 61, 5, 7, 1.8, '-', 2, 3),
(29, '18', 12, 1, 7, 1.8, '-', 2, 2),
(32, '25', 62, 8, 10, 1.8, '-', 1, 2),
(33, '25', 9, 6, 10, 4, '-', 2, 1),
(34, '25', 60, 5, 10, 1.8, '-', 1, 3),
(35, '25', 56, 7, 10, 4, '-', 1, 4),
(36, '25', 55, 5, 10, 1.8, '-', 1, 3),
(37, '25', 50, 1, 1, 2.5, '-', 1, 1),
(38, '25', 20, 1, 1, 2.5, '-', 1, 1),
(39, '25', 10, 1, 1, 2.5, '-', 4, 1),
(40, '20', 9, 1, 1, 4, '--', 4, 1),
(41, '25', 60, 7, 11, 2.5, '111', 4, 3),
(42, '25', 9, 1, 12, 1.8, '11111', 4, 1),
(43, '25', 65, 8, 1, 1, '1234', 3, 6),
(44, '25', 65, 6, 11, 1, '25', 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `education_new`
--

CREATE TABLE `education_new` (
  `id_new` int(11) NOT NULL,
  `new_name` varchar(250) NOT NULL,
  `new_date_open` date NOT NULL,
  `new_detail` varchar(10000) NOT NULL,
  `new_url` varchar(252) NOT NULL,
  `new_image` varchar(252) NOT NULL,
  `new_date_close` date NOT NULL,
  `new_sub_detail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education_new`
--

INSERT INTO `education_new` (`id_new`, `new_name`, `new_date_open`, `new_detail`, `new_url`, `new_image`, `new_date_close`, `new_sub_detail`) VALUES
(1, 'ตู่', '2021-09-01', 'ตู่', 'ตู่', 'https://www.naewna.com/uploads/news/source/560698.jpg', '0000-00-00', ''),
(2, 'tew', '2021-09-09', 'tert', 'rtretret', 'https://www.naewna.com/uploads/news/source/560698.jpg', '0000-00-00', ''),
(3, '#DEK64กำลังจะถูกทิ้ง เมื่อเด็กถูกลอยแพในการสอบชี้ชะตาชีวิต', '2021-03-19', 'ประเด็นปัญหาเกี่ยวกับการสอบเข้ามหาวิทยาลัยของไทยถือเป็นปัญหาที่เกิดขึ้นทุกปี แม้ว่าจะเปลี่ยนระบบการสอบหลายรูปแบบแล้วก็ตาม ซึ่งการสอบ TCAS ซึ่งเป็นระบบการสอบล่าสุด ก็ตกเป็นประเด็นร้อนอีกครั้ง จากการที่นักเรียนชั้นมัธยมศึกษาปีที่ 6 ออกมาเรียกร้องให้มีการ', 'https://www.sanook.com/news/8357502/', 'https://firebasestorage.googleapis.com/v0/b/james2-67f02.appspot.com/o/images%2Funiversitylogo_1631792314?alt=media&token=b0b8a0f5-a951-4857-96bd-0176c463b51c', '2021-09-30', 'มาช้อปปิ้งความหวัง ชาร์จพลังใจด้วยกิจกรรมมากมาย???? และร่วมส่งกำลังใจให้บุคลากรด่านหน้า บนZOOMออนไลน์ พร้อมรับเกียรติบัตรฟรี!!!'),
(7, 'Youth Expo ตลาดนัดแห่งความหวัง???? ฟรี!!! เปิดลงทะเบียนแล้ววันนี้ ฟรี!!', '2021-09-19', '????ประชาสัมพันธ์ กิจกรรมดีๆ....????\n????Youth Expo ตลาดนัดแห่งความหวัง????\nฟรี!!! เปิดลงทะเบียนแล้ววันนี้ ฟรี!!\n ????รับเยาวรุ่น 5,000 คนเท่านั้น\nมาช้อปปิ้งความหวัง ชาร์จพลังใจด้วยกิจกรรมมากมาย????\nและร่วมส่งกำลังใจให้บุคลากรด่านหน้า บนZOOMออนไลน์ พร้อมรับเกียรติบัตรฟรี!!!\n(1) “Hope Stage” กิจกรรมเสวนาสร้างแรงบันดาลใจ จากแขกรับเชิญสุดพิเศษ พร้อมเรื่องราวและบทสนทนาที่จะทำให้ทุกคนมีความหวัง เติมพลังใจในการทำสิ่งดี ๆ \n✌️“Sharing Stage” บูธกิจกรรม ที่จัดพร้อม ๆ กับเวทีกลาง มาในรูปแบบการพูดคุยแชร์ประสบการณ์ และ workshops ในหลากหลายหัวข้อ ที่ทุกคนสามารถมา Pick Up Idea ไม่ว่าจะเป็น การพัฒนาตนเอง การดูแลกายและใจในช่วงสถานการณ์โควิด และหัวข้ออื่น ๆ ที่รอให้ทุกคนติดตาม \n????“Mini Concert My hope for you” มินิคอนเสิร์ตออนไลน์ เสียงดนตรีที่จะเติมกำลังใจและความหวังในช่วงสถานการณ์โควิด-19 ให้กับทุกคน มาร่วมฟังบทเพลงไพเราะ และพูดคุยกับศิลปินรับเชิญ \n????และกิจกรรมHighlightสุดพิเศษ “รวมพลังเยาวชน 5,000คน” ส่งต่อกำลังใจให้บุคลากรทางการแพทย์ที่อุทิศตนช่วยเหลือสังคม\n❤️ร่วมเป็นกำลังหลักของงานได้แล้ววันนี้ ❤️ลงทะเบียนพร้อมจอยโอเพ่นแชทเลย!\nหากนร.สนใจ กดที่ลิงค์ได้เลย ????????????????????????\nshorturl.at/wMT12\nพร้อมแล้ว ชวนเพื่อนๆ มาลงทะเบียนด้วยกันน้า', 'https://www.facebook.com/PPschool.RB/', 'https://firebasestorage.googleapis.com/v0/b/james2-67f02.appspot.com/o/images%2Fu001_1632044162?alt=media&token=421249ec-70cb-48d3-8564-f95ba0531121', '2021-09-20', 'มาช้อปปิ้งความหวัง ชาร์จพลังใจด้วยกิจกรรมมากมาย???? และร่วมส่งกำลังใจให้บุคลากรด่านหน้า บนZOOMออนไลน์ พร้อมรับเกียรติบัตรฟรี!!!');

-- --------------------------------------------------------

--
-- Table structure for table `edu_stu`
--

CREATE TABLE `edu_stu` (
  `id_edu_stu` int(11) NOT NULL,
  `id_stu` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `id_university` int(11) NOT NULL,
  `id_faculty` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `id_major` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `edu_stu`
--

INSERT INTO `edu_stu` (`id_edu_stu`, `id_stu`, `id_university`, `id_faculty`, `id_course`, `id_major`) VALUES
(1, '630001', 1, 2, 62, 2),
(2, '630002', 1, 1, 1, 1),
(11, '630003', 2, 2, 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id_faculty` int(11) NOT NULL,
  `name_faculty` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id_faculty`, `name_faculty`) VALUES
(1, 'วิทยาศาสตร์และเทคโนโลยี'),
(2, 'ครุศาสตร์'),
(3, 'มนุษยศาสตร์และสังคมศาสตร์'),
(4, 'เศรษฐศาสตร์'),
(5, 'บริหารธุรกิจ'),
(6, 'วิศวกรรมศาสตร์'),
(7, 'วิทยาการจัดการ'),
(8, 'พยาบาลศาสตร์');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `footer_contact` varchar(200) NOT NULL,
  `footer_contact_detail` varchar(200) NOT NULL,
  `footer_devloper` varchar(200) NOT NULL,
  `footer_devloper_detail` varchar(200) NOT NULL,
  `footer_license` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `footer_contact`, `footer_contact_detail`, `footer_devloper`, `footer_devloper_detail`, `footer_license`) VALUES
(1, 'Contact', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia necessitatibus eum, ratione nobis molestiae doloremque adipisci similique eaque quisquam cum repudiandae nisi numquam provident omnis ', 'Developer', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia necessitatibus eum, ratione nobis molestiae doloremque adipisci similique eaque quisquam cum repudiandae nisi numquam provident omnis ', 'Copyright © Software Engineering NPRU 2021 - All Rights Reserves');

-- --------------------------------------------------------

--
-- Table structure for table `group_major`
--

CREATE TABLE `group_major` (
  `id_major` int(11) NOT NULL,
  `name_major` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `group_major`
--

INSERT INTO `group_major` (`id_major`, `name_major`) VALUES
(1, 'คอมพิวเตอร์'),
(2, 'ครู'),
(3, 'การตลาด'),
(4, 'นักวิจัย'),
(6, 'ทำภาพยนตร์'),
(7, 'กฏหมาย');

-- --------------------------------------------------------

--
-- Table structure for table `namelogo`
--

CREATE TABLE `namelogo` (
  `id` int(11) NOT NULL,
  `NameHeaderWeb` varchar(252) NOT NULL,
  `LogoWeb` varchar(252) NOT NULL,
  `EngNameWeb` varchar(252) NOT NULL,
  `DetailWeb` varchar(252) NOT NULL,
  `NameWeb` varchar(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `namelogo`
--

INSERT INTO `namelogo` (`id`, `NameHeaderWeb`, `LogoWeb`, `EngNameWeb`, `DetailWeb`, `NameWeb`) VALUES
(1, 'ระบบสารสนเทศการเข้าศึกษาต่อชั้นอุดมศึกษา', 'https://firebasestorage.googleapis.com/v0/b/james2-67f02.appspot.com/o/images%2Funiversitylogo_1631845642?alt=media&token=8b67e506-53cf-40f7-94c2-fd2b6e10a6fe', 'Prasartratprachakit School', 'ระบบสารสนเทศการเข้าศึกษาต่อชั้นอุดมศึกษา กรณีศึกษา โรงเรียนประสาทรัฐประชากิจ', 'โรงเรียนประสาทรัฐประชากิจ');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id_position` int(11) NOT NULL,
  `name_position` varchar(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id_position`, `name_position`) VALUES
(1, 'ครู'),
(2, 'แอดมิน');

-- --------------------------------------------------------

--
-- Table structure for table `round`
--

CREATE TABLE `round` (
  `id_round` int(11) NOT NULL,
  `name_round` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `round`
--

INSERT INTO `round` (`id_round`, `name_round`) VALUES
(1, 'Portfolio'),
(2, 'โคต้า'),
(3, 'Admission'),
(4, 'รับตรง'),
(5, 'รับตรงอิสระ');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `id_title` int(11) NOT NULL,
  `fname_staff` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname_staff` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone_staff` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `password_staff` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `id_title`, `fname_staff`, `lname_staff`, `phone_staff`, `password_staff`, `id_position`) VALUES
('Admin1', 3, 'สรวิชญ์', 'เอกณรงค์พันธ์', '0613167091', '12345678', 2),
('tea001', 1, 'สรวิชญ์', 'เอกณรงค์พันธ์', '0946589710', '12345678', 1),
('tea002', 2, 'สุลิษา', 'เสืองามเอี่ยม', '0800253481', '12345678', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_stu` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `fname_stu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname_stu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_curriculum` int(11) NOT NULL,
  `GPA_stu` double NOT NULL,
  `year_class` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `year_stu` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `password_stu` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_stu`, `title`, `fname_stu`, `lname_stu`, `id_curriculum`, `GPA_stu`, `year_class`, `class`, `year_stu`, `password_stu`) VALUES
('630001', 'นางสาว', 'พงศธร', 'จันทร์หา', 1, 3.5, '6', '1', '2560', '12345678'),
('630002', 'นาย', 'สรวิชญ์', 'เอกณรงค์พันธ์', 1, 3.5, '6', '3', '2562', '12345678'),
('630003', 'นาย', 'เอื้อคุณ', 'จันทร์หา', 1, 3.5, '6', '3', '2563', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id_title` int(11) NOT NULL,
  `name_title` varchar(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id_title`, `name_title`) VALUES
(1, 'นาย'),
(2, 'นาง'),
(3, 'นางสาว');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id_university` int(11) NOT NULL,
  `name_uni` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_uni` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo_uni` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_uni` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id_university`, `name_uni`, `url_uni`, `logo_uni`, `detail_uni`) VALUES
(1, 'มหาวิทยาลัยราชภัฏนครปฐม', 'https://www.npru.ac.th/index.php', 'https://firebasestorage.googleapis.com/v0/b/james2-67f02.appspot.com/o/images%2Funiversitylogo_1631438771?alt=media&token=65fcd7e1-58d5-4b32-b01c-8c066ef92900', 'ที่อยู่ : 85 ถนนมาลัยแมน อ.เมือง จ.นครปฐม 73000\r\nโทรสาร : 0 3426 1048\r\nโรงศัพท์ : 0 3410 9300\r\nอีเมล์ : rajabhat@npru.ac.th'),
(2, 'มหาวิทยาลัยเกษตรศาสตร์', 'https://www.ku.ac.th/th', '', 'เลขที่ 50 ถนนงามวงศ์วาน แขวงลาดยาว เขตจตุจักร กรุงเทพฯ 10900 โทรศัพท์ +66 (0) 2942 8200-45'),
(3, 'มหาวิทยาลัยรามคําแหง', 'https://www.ru.ac.th/th/', '', 'มหาวิทยาลัยรามคำแหง : Ramkhamhaeng University\n2086 ถนนรามคำแหง แขวงหัวหมาก เขตบางกะปิ กรุงเทพมหานคร 10240.\nหมายเลขโทรศัพท์ : 02-3108000, หมายเลขโทรสาร 02-3108022 Website : www.ru.ac.th\nE-mail : webmaster@ru.ac.th'),
(4, 'มหาวิทยาลัยมหิดล', 'https://mahidol.ac.th/th/', '', '999 ถ.พุทธมณฑลสาย 4 ต.ศาลายา\nอ.พุทธมณฑล จ.นครปฐม 73170\n +66 (0) 2849-6000'),
(5, 'มหาวิทยาลัยคริสเตียน', 'https://www.christian.ac.th/', '', 'มหาวิทยาลัยคริสเตียน 144 หมู่.7 ต.ดอนยายหอม อ.เมือง จ.นครปฐม 73000 Tel: 034-388-555 FAX: +66-3427-4500'),
(6, 'มหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์', 'https://www.rmutr.ac.th/', '', '96 หมู่ 3 ถนน พุทธมณฑล สาย 5 ต.ศาลายา อ.พุทธมณฑล จ.นครปฐม 73170            โทรศัพท์ 02-4416000 ต่อ 2001, โทรสาร 02-8894588\nอีเมล  pr@rmutr.ac.th'),
(7, 'มหาวิทยาลัยศิลปากร', 'https://www.ru.ac.th/th/', '', 'ชื่อย่อ	มศก. / SU\nคติพจน์	Ars longa vita brevis\nศิลปะยืนยาว ชีวิตสั้น\nสถาปนา	12 ตุลาคม พ.ศ. 2486 (77 ปี)\nประเภท	สถาบันอุดมศึกษาในกำกับของรัฐ\nอธิการบดี	ผู้ช่วยศาสตราจารย์ ชัยชาญ ถาวรเวช \nนายกสภาฯ	นาย ภราเดช พยัฆวิเชียร\nจำนวนผู้ศึกษา	25,210 คน[5] (ปีการศึกษา 2559)\nที่ตั้ง	สำนักงานอธิการบดี ตลิ่งชัน เลขที่ 22 ถนนบรมราชชนนี แขวงตลิ่งชัน เขตตลิ่งชัน กรุงเทพมหานคร 10170\nมหาวิทยาลัยศิลปากร วังท่าพระ เลขที่ 31 ถนนหน้าพระลาน แขวงพระบรมมหาราชวัง เขตพระนคร กรุงเทพมหานคร 10200\nมหาวิทยาลัยศิลปากร วิทยาเขตพระ'),
(8, 'มหาวิทยาลัยกรุงเทพ', 'www.bu.ac.th', '', 'ชื่อย่อ	มกท. / BU.\nคติพจน์	ความรู้คู่ความดี\nสถาปนา	25 ธันวาคม พ.ศ. 2505 (58 ปี)\nประเภท	สถาบันอุดมศึกษาเอกชน\nอธิการบดี	เพชร โอสถานุเคราะห์\nนายกสภาฯ	ศ.(พิเศษ)ดร.กิตติพงษ์ กิตยารักษ์\nจำนวนผู้ศึกษา	29,547 คน [1] (ปีการศึกษา 2563)\nที่ตั้ง	วิทยาเขตกล้วยน้ำไท\nซอยมหาวิทยาลัยกรุงเทพ ถนนพระรามที่ 4 แขวงพระโขนง เขตคลองเตย กรุงเทพมหานคร\nวิทยาเขตรังสิต\nถนนพหลโยธิน ตำบลคลองหนึ่ง อำเภอคลองหลวง จังหวัดปทุมธานี'),
(9, 'มหาวิทยาลัยพะเยา', 'https://www.ku.ac.th/th', '', 'เลขที่ 50 ถนนงามวงศ์วาน แขวงลาดยาว เขตจตุจักร กรุงเทพฯ 10900 โทรศัพท์ +66 (0) 2942 8200-45'),
(10, 'มหาวิทยาลัยเชียงใหม่', 'www.cmu.ac.th', '', 'ชื่อย่อ	มช. / CMU\nคติพจน์	อตฺตานํ ทมยนฺติ ปณฺฑิตา\n(บัณฑิตทั้งหลายย่อมฝึกตน)\nสถาปนา	พ.ศ. 2503 (61 ปี)\n(เฉพาะคณะแพทยศาสตร์)\n18 มิถุนายน พ.ศ. 2507 (56 ปี)\n(วันเปิดสอนคณะอื่น)\nประเภท	สถาบันอุดมศึกษาในกำกับของรัฐ\nอธิการบดี	ศ.คลินิค นพ.นิเวศน์ นันทจิต\nนายกสภาฯ	ศ.เกียรติคุณ นพ.เกษม วัฒนชัย\nจำนวนผู้ศึกษา	35,509 คน[1] มกราคม พ.ศ. 2560\nที่ตั้ง	มหาวิทยาลัยเชียงใหม่\n239 ถนนห้วยแก้ว ตำบลสุเทพ อำเภอเมืองเชียงใหม่ จังหวัดเชียงใหม่ 50200\nสีประจำสถาบัน	     สีม่วงดอกรัก'),
(11, 'มหาวิทยาลัยราชภัฏสวนสุนันทา', 'http://www.ssru.ac.th', '', 'ชื่อย่อ      มรภ.สส. / SSRU\nคติพจน์   ทรงปัญญา ศรัทธาธรรม นำสังคม\nสถาปนา   โรงเรียนสวนสุนันทาวิทยาลัย   17 พฤษภาคม พ.ศ. 2480 - 13 กุมภาพันธ์ พ.ศ. 2518 (37 ปี)\n              วิทยาลัยครูสวนสุนันทา   14 กุมภาพันธ์ พ.ศ. 2518 - 13 กุมภาพันธ์ พ.ศ. 2535 (16 ปี)\n              สถาบันราชภัฏสวนสุนันทา   14 กุมภาพันธ์ พ.ศ. 2535 - 14 มิถุนายน พ.ศ. 2547 (12 ปี)\n              มหาวิทยาลัยราชภัฏสวนสุนันทา   15 มิถุนายน พ.ศ. 2547 (16 ปี)\nประเภท	สถาบันอุดมศึกษาของรัฐ\nอธิการบดี	รองศาสตราจารย์ ดร.ชุติกาญจน์ ศรีวิบูล'),
(12, 'มหาลัยราชภัฎนครปฐม', 'www.swu.ac.th', '', 'Test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel_slider`
--
ALTER TABLE `carousel_slider`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`),
  ADD KEY `id_major` (`id_major`),
  ADD KEY `id_degree` (`id_degree`);

--
-- Indexes for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`id_curriculum`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`id_degree`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_education`),
  ADD KEY `id_round` (`id_round`),
  ADD KEY `id_university` (`id_university`);

--
-- Indexes for table `education_detail`
--
ALTER TABLE `education_detail`
  ADD PRIMARY KEY (`id_edu_detail`),
  ADD KEY `id_course` (`id_course`),
  ADD KEY `id_faculty` (`id_faculty`),
  ADD KEY `id_education` (`id_education`) USING BTREE,
  ADD KEY `id_curriculum` (`id_curriculum`),
  ADD KEY `id_major` (`id_major`);

--
-- Indexes for table `education_new`
--
ALTER TABLE `education_new`
  ADD PRIMARY KEY (`id_new`);

--
-- Indexes for table `edu_stu`
--
ALTER TABLE `edu_stu`
  ADD PRIMARY KEY (`id_edu_stu`),
  ADD KEY `id_course` (`id_course`),
  ADD KEY `id_faculty` (`id_faculty`),
  ADD KEY `id_major` (`id_major`),
  ADD KEY `id_stu` (`id_stu`),
  ADD KEY `id_university` (`id_university`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id_faculty`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_major`
--
ALTER TABLE `group_major`
  ADD PRIMARY KEY (`id_major`);

--
-- Indexes for table `namelogo`
--
ALTER TABLE `namelogo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id_position`);

--
-- Indexes for table `round`
--
ALTER TABLE `round`
  ADD PRIMARY KEY (`id_round`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`),
  ADD KEY `id_position` (`id_position`),
  ADD KEY `id_title` (`id_title`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_stu`),
  ADD KEY `id_curriculum` (`id_curriculum`),
  ADD KEY `id_title` (`title`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id_title`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id_university`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel_slider`
--
ALTER TABLE `carousel_slider`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `curriculum`
--
ALTER TABLE `curriculum`
  MODIFY `id_curriculum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `id_degree` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id_education` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `education_detail`
--
ALTER TABLE `education_detail`
  MODIFY `id_edu_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `education_new`
--
ALTER TABLE `education_new`
  MODIFY `id_new` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `edu_stu`
--
ALTER TABLE `edu_stu`
  MODIFY `id_edu_stu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id_faculty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `group_major`
--
ALTER TABLE `group_major`
  MODIFY `id_major` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `namelogo`
--
ALTER TABLE `namelogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `round`
--
ALTER TABLE `round`
  MODIFY `id_round` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id_title` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id_university` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`id_major`) REFERENCES `group_major` (`id_major`),
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`id_degree`) REFERENCES `degree` (`id_degree`);

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_2` FOREIGN KEY (`id_round`) REFERENCES `round` (`id_round`),
  ADD CONSTRAINT `education_ibfk_4` FOREIGN KEY (`id_university`) REFERENCES `university` (`id_university`);

--
-- Constraints for table `education_detail`
--
ALTER TABLE `education_detail`
  ADD CONSTRAINT `education_detail_ibfk_1` FOREIGN KEY (`id_education`) REFERENCES `education` (`id_education`),
  ADD CONSTRAINT `education_detail_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`),
  ADD CONSTRAINT `education_detail_ibfk_3` FOREIGN KEY (`id_faculty`) REFERENCES `faculty` (`id_faculty`),
  ADD CONSTRAINT `education_detail_ibfk_4` FOREIGN KEY (`id_curriculum`) REFERENCES `curriculum` (`id_curriculum`),
  ADD CONSTRAINT `education_detail_ibfk_5` FOREIGN KEY (`id_major`) REFERENCES `group_major` (`id_major`);

--
-- Constraints for table `edu_stu`
--
ALTER TABLE `edu_stu`
  ADD CONSTRAINT `edu_stu_ibfk_1` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`),
  ADD CONSTRAINT `edu_stu_ibfk_2` FOREIGN KEY (`id_faculty`) REFERENCES `faculty` (`id_faculty`),
  ADD CONSTRAINT `edu_stu_ibfk_3` FOREIGN KEY (`id_major`) REFERENCES `group_major` (`id_major`),
  ADD CONSTRAINT `edu_stu_ibfk_4` FOREIGN KEY (`id_stu`) REFERENCES `student` (`id_stu`),
  ADD CONSTRAINT `edu_stu_ibfk_5` FOREIGN KEY (`id_university`) REFERENCES `university` (`id_university`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`id_position`) REFERENCES `position` (`id_position`),
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`id_title`) REFERENCES `title` (`id_title`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`id_curriculum`) REFERENCES `curriculum` (`id_curriculum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
