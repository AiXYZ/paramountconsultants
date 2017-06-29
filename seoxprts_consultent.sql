-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2017 at 06:05 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seoxprts_consultent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `a_id` int(255) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_id`, `username`, `password`) VALUES
(1, 'rohit', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `b_id` int(255) NOT NULL,
  `name` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`b_id`, `name`, `content`, `image`) VALUES
(4, 'Tax & Accounting Consultancy', 'We provide the great facility in Accounting World ', 'T.jpg'),
(3, 'Tally Software&Education', 'We are Certified Tally Partner', '12.jpg'),
(5, 'Job Consultancy', ' We provide the job in your profile area', 'Consultancy1.jpeg'),
(6, 'Education Consultancy', 'We provide the great facility for education in your interest', 'edu1.png');

-- --------------------------------------------------------

--
-- Table structure for table `hap_customer`
--

CREATE TABLE `hap_customer` (
  `h_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hap_customer`
--

INSERT INTO `hap_customer` (`h_id`, `title`, `image`, `content`) VALUES
(3, 'rohit', 'person1.jpg', '<p>\r\n	i am very happy to shop with you guys</p>\r\n'),
(2, 'brijesh', 'person2.jpg', '<p>\r\n	They provide the good facility</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `parent`, `content`, `image`, `slug`, `created_date`, `updated_date`) VALUES
(17, 'Tax & Accounting Consultancy', '15', '<p color:=\"\" font-size:=\"\" line-height:=\"\" open=\"\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-family: \">\r\n	&nbsp;</p>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">Our worldwide community of tax specialists enables you reap better control over tax accounting troubles and customizes tax services to meet the desires of your business.</span><span style=\"font-size: 16px;\">Difficulty-precise tax accounting consulting, together with valuation allowance tests, business mixtures, intraperiod allocations and accounting for inventory-based compensation.</span></div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">\r\n	&nbsp;</div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">\r\n	<span style=\"font-size: 16px;\">Paramount Consultants&nbsp;groups are dealing with extended stress on their tax accounting and reporting experts. economic restatements, increased regulatory scrutiny over income tax disclosures and account balances, compressed close cycles, as well as new reporting concerns and requirements have increased organizational desires for tax accounting.</span></div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">\r\n	&nbsp;</div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">Paramount&nbsp; includes accounting strategies that focus on taxes in place of the appearance of public economic statements. Tax accounting is ruled by using the inner sales Code which dictates the precise rules that agencies and individuals should follow while preparing their tax returns. Tax ideas frequently vary from normally general accounting standards.</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px;\" />\r\n	&nbsp;</div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">Stability sheet objects may be accounted &nbsp;in a different way while preparing economic statements and tax payables. as an example, corporations can prepare their economic statements imposing the first-in-first-out (FIFO) method to report their stock for financial purposes, yet they are able to enforce the ultimate-in-first-out (LIFO) method for tax functions. The latter method reduces the cutting-edge 12 months&#39;s taxes payable.</span></div>\r\n', 'tax.jpg', 'tax-accounting-consultancy', '2017-06-13 10:41:24', NULL),
(18, 'Job Consultancy', '15', '<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px;\">Paramount Consultant</strong>&nbsp;is main expert recruitment service partner to organizations international. dedicated to empower the arena of commercial enterprise, we provide professional and qualified sources for extensive range of roles and functions throughout industry verticals. hiring right people on your enterprise is one in every of most difficult undertaking, and partnering with us will assist you shop time, fee on recruitment infrastructure and above all our industry verified choice methodology comfy you from incorrect hires.</span></div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">\r\n	&nbsp;</div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\"><strong>why us</strong> : maximum fulfillment charge in filling challenging job positions</span></div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">\r\n	&nbsp;</div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">we are an expert group of rather networked recruiters and specialists, with since last years of experience and extensive understanding of major enterprise verticals. frequently groups method us when they are unable to locate proper suit to fill difficult positions for area of interest abilties and roles through current partners. our task hungry crew have helped us acquire and keep success price of 99% for area of interest stage and government positions that is highest in recruitment enterprise. our tailor-made recruiting solutions help our client companies to satisfy the staffing and manpower demands of every challenge. we paintings towards turning in the right character to your vacancy on time and with the minimal disruption on your business.</span></div>\r\n', 'Consultancy1.jpeg', 'job-consultancy', '2017-06-13 10:42:18', NULL),
(19, 'Tally Software&Education', '15', '<p color:=\"\" font-size:=\"\" line-height:=\"\" open=\"\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-family: \">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">We are the certified Tally partner. We keep in mind that for you, growing your commercial enterprise is the maximum essential factor. We&#39;ve got designed our product in a manner which without problems suits into your commercial enterprise, adapts in your way of running and takes over all the complications to do with numbers of your enterprise while you could consciousness on enterprise increase.</span></p>\r\n<p color:=\"\" font-size:=\"\" line-height:=\"\" open=\"\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-family: \">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">We use the first rate tool for Tally ERP as a way to assist you get right of entry to Tally out of your mobile phone. Tally customers rejoice now you may view your ledgers created in tally in your private gadgets. This tool exhibits the whole business picture of all of the corporations registered in Tally on one display screen to your clever telephone.</span></p>\r\n<p color:=\"\" font-size:=\"\" line-height:=\"\" open=\"\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-family: \">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">This document suggests financial &amp; inventory entries of diverse enterprise reports at once. This covers Miscellaneous charges (Asset), constant assets, Investments, income bills, Unsecured Loans, Direct prices, Loans &amp; Advances (Asset), inventory-in-hand, Deposits (Asset), Direct fees, Suspense A/c, Provisions, creditors, buy details, Unadjusted forex benefit/Loss, Loans (legal responsibility), duties &amp; taxes, bank OD A/c, financial institution Account details, contemporary belongings, Misc. Exp(extent no longer w/f), Capital Account,</span></p>\r\n', 'tallyghh.png', 'tally-software-education', '2017-06-13 10:43:35', NULL),
(14, 'About us', '0', '<p color:=\"\" font-size:=\"\" line-height:=\"\" open=\"\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-family: \">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px;\">Paramount Consultants</strong>&nbsp;are best known for Tax &amp; Accounting Consultants, Tally Software &amp; Education, Job Consultants and Education Consultants. We have over 10 years of Experience in all of these consultants. We are professional in this field and worked in abroad before 10 years. Right now we are &nbsp;moving in india for provide these service.</span></p>\r\n<p color:=\"\" font-size:=\"\" line-height:=\"\" open=\"\" style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-family: \">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">With our vision &ldquo;to be the choice of customer as Strategic partner in expertise seek and of Candidate in profession development&rdquo; we offer talent management answers that provide fine human capital to our clients and people with precious employment possibilities. We help people to explore their quality and excel of their industry. With our research facilities throughout the globe we&#39;ve the ability to supply solutions which can be both global and nearby answers.</span></p>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	<strong style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">We are group of Consultants.</span></strong></div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	&nbsp;</div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">1.Accounting /Book keeping and Tax Consultants</span></div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">.</span></div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">2. Tally Associate Partner for sale of Tally Software And Registered Tally Academy Center.</span></div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">&nbsp; &nbsp;</span></div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">3. Job Consultants for India/ Abroad ( Especially Gulf)</span></div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	&nbsp;</div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">4. Educational Consultants for India/ Abroad.</span></div>\r\n', 'consultancy.jpg', 'about-us', '2017-06-13 10:38:43', NULL),
(15, 'Services', '0', '<p>\r\n	<span style=\"font-size:16px;\">We provide the Services:-</span></p>\r\n<p>\r\n	<span style=\"font-size:16px;\">1.</span><span style=\"font-size: 16px; color: rgb(18, 18, 18); font-family: Montserrat, sans-serif;\">Tax &amp; Accounting Consultancy</span></p>\r\n<p>\r\n	<span style=\"font-size:16px;\">2.</span><span style=\"font-size: 16px; color: rgb(18, 18, 18); font-family: Montserrat, sans-serif;\">Job Consultancy</span></p>\r\n<p>\r\n	<span style=\"font-size:16px;\">3.</span><span style=\"font-size: 16px; color: rgb(18, 18, 18); font-family: Montserrat, sans-serif;\">Tally Software&amp;Education</span></p>\r\n<p>\r\n	<span style=\"font-size:16px;\">4.</span><span style=\"font-size: 16px; color: rgb(18, 18, 18); font-family: Montserrat, sans-serif;\">Education Consultancy</span></p>\r\n', 'education.jpg', 'services', '2017-06-13 10:39:22', NULL),
(16, 'Education Consultancy', '15', '<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\"><strong>Paramount &nbsp;consulting</strong> are &nbsp;based totally consultancy supplying offerings inside the schooling area. we observe a multi pronged method to carry out studies and research on precise academic issues; to plan and increase organisational systems for educational management and control.</span></div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">\r\n	&nbsp;</div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">We are focussed toward offering&nbsp; to the instructional establishments for growing partnerships and elevating their profile international. we depend on our strong community with indian training institutions, overseas education establishments and statutory bodies. we experience an amazing operating rapport with key choice makers in foremost institutions global. we carefully work with industrial homes and authorities our bodies to execute tasks efficiently in a professional manner</span></div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">\r\n	&nbsp;</div>\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">\r\n	<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px;\">Paramount consulting offers counseling and dependable steerage to students and experts who intend to pursue their training and education at universities and schools overseas. we recruit students for uk, singapore, canada, new zealand and malaysia.</span></div>\r\n', 'edu1.png', 'education-consultancy', '2017-06-13 10:40:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subsribe_user`
--

CREATE TABLE `subsribe_user` (
  `s_id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subsribe_user`
--

INSERT INTO `subsribe_user` (`s_id`, `name`, `email`) VALUES
(2, 'rohit', 'roar12371@gmail.com'),
(4, 'kumar', 'er.vijaykumar87@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `welcome`
--

CREATE TABLE `welcome` (
  `w_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `welcome`
--

INSERT INTO `welcome` (`w_id`, `title`, `image`, `content`) VALUES
(1, 'Welcome to our page', 'edu.jpg', '<p>\r\n	<span style=\"font-size:16px;\"><strong>Paramount Consultants</strong>&nbsp;are best known for Tax &amp; Accounting Consultants,Tally Software &amp; Education, Job Consultants and Education Consultants. We have over 10 years of Experience in all of these consultants. We are professional in this field and worked in abroad for last couple of years. Right now we are &nbsp;moving in india for provide these service.</span></p>\r\n<p>\r\n	<span style=\"font-size: 16px;\">With our vision &ldquo;to be the choice of customer as Strategic partner in expertise seek and of Candidate in profession development&rdquo; we offer talent management answers that provide fine human capital to our clients and people with precious employment possibilities. We help people to explore their quality and excel of their industry. With our research facilities throughout the globe we&#39;ve the ability to supply solutions which can be both global and nearby answers.</span></p>\r\n<div style=\"font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	<strong><span style=\"font-size:16px;\">We are group of Consultants.</span></strong></div>\r\n<div style=\"font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	&nbsp;</div>\r\n<div style=\"font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	<span style=\"font-size:16px;\">1.Accounting /Book keeping and Tax Consultants.</span></div>\r\n<div style=\"font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	&nbsp;</div>\r\n<div style=\"font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	<span style=\"font-size:16px;\">2. Tally Associate Partner for sale of Tally Software And Registered Tally Academy Center.</span></div>\r\n<div style=\"font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	<span style=\"font-size:16px;\">&nbsp; &nbsp;</span></div>\r\n<div style=\"font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	<span style=\"font-size:16px;\">3. Job Consultants for India/ Abroad ( Especially Gulf)</span></div>\r\n<div style=\"font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	&nbsp;</div>\r\n<div style=\"font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	<span style=\"font-size:16px;\">4. Educational Consultants for India/ Abroad.</span></div>\r\n<div style=\"font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	&nbsp;</div>\r\n<div style=\"font-family: arial, sans-serif; font-size: 12.8px;\">\r\n	&nbsp;</div>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `hap_customer`
--
ALTER TABLE `hap_customer`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsribe_user`
--
ALTER TABLE `subsribe_user`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `welcome`
--
ALTER TABLE `welcome`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `b_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hap_customer`
--
ALTER TABLE `hap_customer`
  MODIFY `h_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `subsribe_user`
--
ALTER TABLE `subsribe_user`
  MODIFY `s_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `welcome`
--
ALTER TABLE `welcome`
  MODIFY `w_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
