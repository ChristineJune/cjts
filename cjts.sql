-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 09:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cjts`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(255) NOT NULL,
  `name1` varchar(255) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `password1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name1`, `email1`, `password1`) VALUES
(1, 'Admin', 'Admin1@gmail.com', 'Password1!');

-- --------------------------------------------------------

--
-- Table structure for table `appli`
--

CREATE TABLE `appli` (
  `id` int(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `yg` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appli`
--

INSERT INTO `appli` (`id`, `resume`, `job_title`, `job_id`, `name`, `yg`, `type`) VALUES
(1, 'Jhasmin.pdf', 'Looking for BS Information Technology Intern', 3, 'Jhasmin Botea', '2025', 'Part-Time'),
(2, 'Christine.pdf', 'On-site Encoder', 1, 'Christine June Mesa', '2025', 'Full-Time'),
(3, 'resume.pdf', 'Looking for BS Information Technology Intern', 3, 'Janela Cadabos', '2025', 'Part-Time'),
(4, 'resume.pdf', 'On-site Encoder', 1, 'Daisy M. Salao', '2025', 'Full-Time'),
(5, 'resume.pdf', 'IT Technician', 4, 'Jocel Espina', '2025', 'Full-Time'),
(6, 'resume.pdf', 'Technical Support - Fresh Graduate', 5, 'Friethz Kia Joy Suela', '2025', 'Full-Time'),
(7, 'resume.pdf', 'Asurion Careers', 2, 'Rene Joy Huervana', '2025', 'Full-Time'),
(8, 'resume.pdf', 'Asurion Careers', 2, 'Angel Mae A. Rizaba', '2025', 'Full-Time'),
(9, 'resume.pdf', 'IT Technician', 4, 'Robert Jr H. Santiago', '2025', 'Full-Time'),
(10, 'resume.pdf', 'Technical Support - Fresh Graduate', 5, 'Argie C. Amaquin', '2025', 'Full-Time');

-- --------------------------------------------------------

--
-- Table structure for table `jobavail`
--

CREATE TABLE `jobavail` (
  `id` int(255) NOT NULL,
  `complogo` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_loc` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `no_applicants` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobavail`
--

INSERT INTO `jobavail` (`id`, `complogo`, `job_title`, `job_loc`, `position`, `comp_name`, `no_applicants`, `type`) VALUES
(1, 'University_of_San_Agustin_Logo[1].png', 'On-site Encoder', 'Iloilo City', 'Encoder', 'University of San Agustin', '2', 'Full-Time'),
(2, 'IN_ACRP_PH-PR2201-12-1696005695865[1].png', 'Asurion Careers', 'Iloilo City, Western Visayas', 'Customer Support and Sales Representative', 'Asurion', '3', 'Full-Time'),
(3, 'Screenshot 2024-03-27 203021.png', 'Looking for BS Information Technology Intern', 'Iloilo City', 'Intern', 'Sagility', '5', 'Part-Time'),
(4, '9e35dfe509547827ed6eba920ce60a76.jpeg', 'IT Technician', 'Iloilo City, Philippines', 'IT Technician', 'ACTIONLAB IT SERVICES PHIL. CORP.', '3', 'Full-Time'),
(5, '256_Screenshot 2024-01-30 at 3.48.16 PM.jpg', 'Technical Support - Fresh Graduate', 'Iloilo City', 'Technical Support', 'Sytemantech Inc', '2', 'Full-Time');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `ps` varchar(255) NOT NULL,
  `located` varchar(255) NOT NULL,
  `compnm` varchar(255) NOT NULL,
  `yg` varchar(255) NOT NULL,
  `dh` varchar(255) NOT NULL,
  `date_str` varchar(255) NOT NULL,
  `date_stp` varchar(255) NOT NULL,
  `rfr` varchar(255) NOT NULL,
  `techskills` varchar(255) NOT NULL,
  `coreskills` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `job`, `ps`, `located`, `compnm`, `yg`, `dh`, `date_str`, `date_stp`, `rfr`, `techskills`, `coreskills`, `u_email`) VALUES
(1, 'IT Related', 'Web Developer', 'Iloilo', 'UNKNOWN', '2024-03', '2024-12', '2024-12', '', 'Toxic Environment', 'Web Development', 'Teamwork', 'jhas@gmail.com'),
(2, 'Non-IT Related Job', 'Construction Worker', 'Iloilo', 'UNKNOWN', '2024-03', '2024-12', '2024-12', '', 'N/A', 'None', 'Teamwork', 'jhas@gmail.com'),
(3, 'IT Related', 'Web Developer', 'Iloilo', 'PHINMA University of Iloilo', '2024-03', '2024-03', '2024-03', '2024-11', 'Toxic Environment', 'Web Development', 'Teamwork', 'jhas@gmail.com'),
(4, 'IT Related', 'Web Developer', 'Iloilo', 'UNKNOWN', '2024-03', '2024-03', '2024-03', '2024-12', 'Toxic Environment', 'Web Development', 'Teamwork', 'jhas@gmail.com'),
(5, 'Non-IT Related Job', 'Baking', 'Iloilo', 'Beatus', '2024-01', '2024-08', '2024-11', '', 'More Experience', 'Web Development', 'Teamwork', 'mesa@gmail.com'),
(6, 'IT Related', 'Web Developer', 'Iloilo', 'PHINMA University of Iloilo', '2025-03', '2026-06', '2026-06', '2026-11', 'Want to gain more experience', 'Web Development', 'Learning to learn', 'rene@gmail.com'),
(7, 'IT Related', 'Wed Designer', 'Iloilo', 'PHINMA University of Iloilo', '2025-04', '2025-11', '2025-12', '2026-01', 'Want to gain more experience', 'Web Development', 'Teamwork', 'janela@gmail.com'),
(8, 'IT Related', 'Web Developer', 'Iloilo', 'PHINMA University of Iloilo', '2025-04', '2025-11', '2026-01', '2026-07', 'Toxic Environment', 'Web Development', 'Problem-solving', 'jocel@gmail.com'),
(9, 'Non-IT Related Job', 'Milktea Shop', 'Province', 'Daisy Milktea', '2025-04', '2025-07', '2025-07', '2026-11', 'Want to pursue my college course', 'Web Development', 'Teamwork', 'daisy@gmail.com'),
(10, 'Non-IT Related Job', 'Donut', 'Iloilo', 'Dunkin Donut', '2025-04', '2025-11', '2025-12', '2026-08', 'Want to pursue my college degree.', 'Web Development', 'Learning to learn', 'angel@gmail.com'),
(11, 'IT Related', 'Animation', 'Iloilo', 'PHINMA University of Iloilo', '2025-04', '2025-07', '2025-10', '2027-07', 'Want to gain more experience', 'Animation', 'Communication', 'argie@gmail.com'),
(12, 'None', 'No Job', 'Iloilo', 'N/A', '2025-03', '', '', '', 'N/A', 'None', 'None', 'robert@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `pob` varchar(255) NOT NULL,
  `citi` varchar(255) NOT NULL,
  `cs` varchar(255) NOT NULL,
  `ls` varchar(255) NOT NULL,
  `yg` varchar(4) NOT NULL,
  `education` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `dor` varchar(255) NOT NULL,
  `email3` varchar(255) NOT NULL,
  `password3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `pic`, `name`, `student_id`, `age`, `gender`, `address`, `mobile`, `dob`, `pob`, `citi`, `cs`, `ls`, `yg`, `education`, `experience`, `dor`, `email3`, `password3`) VALUES
(1, 'jhassy.jpg', 'Jhasmin Botea', '04-2122-000582', '21', 'FEMALE', 'Brookside, Bolilao, Mandurriao, Iloilo City', '09949847015', '2003-01-31', 'Bailan Pontevedra Capiz', 'Filipino', 'Single', 'Hiligaynon, English', '2025', 'College Of Information and Technology', 'Web Design', '2024-03-23', 'jhas@gmail.com', 'Password123'),
(2, 'Team-1.jpg', 'Christine June Mesa', '04-1920-02164', '20', 'FEMALE', 'Mandurriao, Iloilo City', '09664696330', '2003-06-16', 'Iloilo City', 'Filipino', 'Single', 'Hiligaynon, English', '2025', 'College Of Information and Technology', 'Web Developer', '2024-03-23', 'mesa@gmail.com', 'Password123'),
(3, 'Team-3.jpg', 'Rene Joy Huervana', '0', '21', 'FEMALE', 'Baldoza, La Paz, Iloilo City', '09944625701', '2002-08-01', 'Iloilo City', 'Filipino', 'Single', 'Tagalog & English', '2025', 'College Graduate', 'None', '2024-03-23', 'rene@gmail.com', 'Password123'),
(4, '410725374_397365689377702_5477735508783587950_n.jpg', 'Jocel Espina', '04-2122-031467', '20', 'FEMALE', 'Hibao-an Norte Mandurriao, Iloilo City', '09757871694', '2003-05-10', 'Alimodian Iloilo', 'Filipino', 'Single', 'Hiligaynon & English', '2025', 'College Graduate', 'NONE', '2024-03-27', 'jocel@gmail.com', 'Jocel123'),
(5, '423062613_383782717609768_2025580978646416540_n.jpg', 'Angel Mae A. Rizaba', '04-1920-00138', '21', 'FEMALE', 'Brgy. Dalipe, Lemery, Iloilo City', '09303051644', '2002-10-28', 'Brgy. Dalipe, Lemery, Iloilo City', 'Filipino', 'Single', 'Hiligaynon & English', '2025', 'College Graduate', 'NONE', '2024-03-27', 'angel@gmail.com', 'Angel123'),
(6, '367719052_109122302285408_1180247476489991553_n.jpg', 'Robert Jr H. Santiago', '04-1920-00279', '20', 'MALE', 'Pale Benidicto St. Mandurriao , Iloilo City', '09636646148', '2003-05-25', 'Iloilo City', 'Filipino', 'Single', 'Hiligaynon & English', '2025', 'College Graduate', 'NONE', '2024-03-27', 'robert@gmail.com', 'Robert123'),
(7, '433185682_706144314930353_2276842676647297438_n.jpg', 'Argie C. Amaquin', '04-2122-032809', '21', 'MALE', 'Brgy. Tinio-an Cabatuan, Iloilo', '09388456131', '2003-02-06', 'Tinio-an Cabatuan, Iloilo', 'Filipino', 'Single', 'Hiligaynon & English', '2025', 'College Graduate', 'NONE', '2024-03-27', 'argie@gmail.com', 'Argie123'),
(8, '434223733_1072825643790608_3138716260960080801_n.jpg', 'Friethz Kia Joy Suela', '04-2122-032469', '22', 'FEMALE', 'Javellana Extension Road, Jaro', '09318346841', '2001-05-06', 'Passi City', 'Filipino', 'Single', 'Hiligaynon & English', '2025', 'College Graduate', 'NONE', '2024-03-27', 'kia@gmail.com', 'Kiajoy123'),
(9, '423766501_389694673689836_8933170350482995690_n.jpg', 'Daisy M. Salao', '04-2122-034823', '22', 'FEMALE', 'Sitio Onas, Brgy Sta Cruz, San Miguel, Iloilo', '09459686717', '2001-11-02', 'Sitio Onas. Brgy. Sta Cruz, San Miguel, Iloilo', 'Filipino', 'Single', 'Hiligaynon & English', '2025', 'College Graduate', 'NONE', '2024-03-27', 'daisy@gmail.com', 'Daisy123'),
(11, '434003990_894546322467973_7556807843813200858_n.jpg', 'Janela Cadabos', '04-2122-034261', '21', 'FEMALE', 'Brgy. Sta Cruz, San Miguel, Iloilo', '09511057044', '2003-01-08', 'Aleosan District Hospital', 'Filipino', 'Single', 'Hiligaynon & English', '2025', 'College Graduate', 'NONE', '2024-03-28', 'janela@gmail.com', 'Janela123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appli`
--
ALTER TABLE `appli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobavail`
--
ALTER TABLE `jobavail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appli`
--
ALTER TABLE `appli`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobavail`
--
ALTER TABLE `jobavail`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
