-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2017 at 01:25 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bbank`
--

CREATE TABLE IF NOT EXISTS `bbank` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `bname` text NOT NULL,
  `baddress` text NOT NULL,
  `bcontact` text NOT NULL,
  `barea` text NOT NULL,
  `bcity` text NOT NULL,
  `bstate` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

--
-- Dumping data for table `bbank`
--

INSERT INTO `bbank` (`id`, `bname`, `baddress`, `bcontact`, `barea`, `bcity`, `bstate`) VALUES
(1, 'SUPERTECH VOLUNTARY BLOOD BANK', 'Milestone, 1st Floor, Thaltej, , Ahmedabad, Gujara...', '(79) 40058958  ,  (+91) 9825023700', 'Thaltej', 'Ahmedabad', 'GUJARAT'),
(2, 'LIFECELL INTERNATIONAL PVT. LTD', 'No.603, Shitiratna Complex, Nr.Panchavi Cross Road, Off:c.G.Road., C G Road, , Ahmedabad, Gujarat - 380009, India', '?(79) 66317750', 'C.G.Road', 'Ahmedabad', 'GUJARAT'),
(3, 'SUPRATECH MICROPATH LABORATORY', 'Kedar Complex, Ellis Bridge, , Ahmedabad, Gujarat - 380006, India', '?(79) 26408181 / 26408182', 'Ellis Bridge', 'Ahmedabad', 'GUJARAT'),
(4, 'RMS HOSPITAL', 'Bhavangar Ahmedabad Highway, Dhandhuka, , Ahmedabad, Gujarat - 382460, India', '(2713) 222543 / 223543', 'Dhandhuka', 'Ahmedabad', 'GUJARAT'),
(5, 'MEDICAL EXECUTIVE COMMITTEE', 'Sterling Hospital Road, Memnagar, , Ahmedabad, Gujarat - 380052, India', '(79) 27481415 / 27418282', 'Memnagar', 'Ahmedabad', 'GUJARAT'),
(6, 'HELP VOLUNTARY BLOOD BANK', '4-7, Kotyark Complex, Maninagar, , Ahmedabad, Gujarat - 380008, India', '(79) 25451642 , (+91) 9428331847', 'Maninagar', 'Ahmedabad', 'GUJARAT'),
(7, 'MAHAGUJARAT BLOOD BANK', '3/4/21/22, Parth Empire, Rambaug Cross Road, Maninagar, , Ahmedabad, Gujarat - 380008, India', '(79) 33011774', 'Maninagar', 'Ahmedabad', 'GUJARAT'),
(8, 'AMI PATHOLOGY LABORATORY & BLOOD BANK', '2nd Floor, Baronath Complex, Highway Road, Sabarmati, , Ahmedabad, Gujarat - 380005, India', '?(79) 27501202 , (+91) 9825698298', 'Sabarmati', 'Ahmedabad', 'GUJARAT'),
(9, 'GUJARAT BLOOD BANK VOLUNTARY & DIAGNOSTIC CENTER', '101, Span Trade Centre, Paldi Cross Road, Paldi, , Ahmedabad, Gujarat - 380007, India', '(79) 26586480 , (+91) 9227778840', 'Paldi', 'Ahmedabad', 'GUJARAT'),
(10, 'PRATHAMA BLOOD CENTRE', 'C V Raman Marg, Main Road, Vasna, , Ahmedabad, Gujarat - 380007, India', '(79) 26600101 , (+91) 9879595360', 'Vasna', 'Ahmedabad', 'GUJARAT'),
(11, 'CROSS WORLD BLOOD BANK AND SANKALP DIAGNOSTICS', 'First Floor Chandraprabhu Complex, Sardar Patel Statue Cross Road, Stadium Road, , Ahmedabad, Gujarat - 380009, India', '(79) 33012331', 'Stadium Road', 'Ahmedabad', 'GUJARAT'),
(12, 'ADARSH PATHOLOGY LABORATORY & VOLUNTARY BLOOD BANK', 'Samjuba Hospital, Main Road, Bapu Nagar, , Ahmedabad, Gujarat - 380024, India', '(79) 22749146 , (+91) 9825089741', 'Bapunagar', 'Ahmedabad', 'GUJARAT'),
(13, 'KAVERI VOLUNTARY BLOOD BANK', '59/13, 2nd Block, 19th Main, , Rajajinagar, Ahmedabad Ho, , Ahmedabad, Gujarat - 380001, India', '(79) 23523987', 'Ahmedabad Ho', 'Ahmedabad', 'GUJARAT'),
(14, 'MAHA GUJRAT BLOOD BANK', '21, Parth Empire, Rambaug Maninagar, Rambaug Maninagar, , Maninagar East, , Ahmedabad, Gujarat - 380008, India', '(79) 25451549?', 'Maninagar', 'Ahmedabad', 'GUJARAT'),
(15, 'ADARSH PATHOLOGY LABORATORY & VOLUNTARY BLOOD BANK', '19, Pujan Shopping Center, Sukan Cross Road, Naroda, , Ahmedabad, Gujarat - 382330, India', '(79) 29093413', 'Naroda', 'Ahmedabad', 'GUJARAT'),
(16, 'GREEN CROSS PATHOLOGY LABORATORY', '6/7, Kotyark Complex, Main Road, Maninagar, , Ahmedabad, Gujarat - 380008, India', '(79) 25463028 / 25464444', 'Maninagar', 'Ahmedabad', 'GUJARAT'),
(17, 'INDIAN RED CROSS SOCIETY', '18, Gujarat Brahmkshatriya Society, Paldi, , Ahmedabad, Gujarat - 380007, India', '(79) 26650855 , (+91) 9099917783', 'Paldi', 'Ahmedabad', 'GUJARAT'),
(18, 'CANCER INSTITUTE BLOOD BANK', 'Main Road, Asarwa, , Ahmedabad, Gujarat - 380016, India', '(79) 22688062', 'Asarwa', 'Ahmedabad', 'GUJARAT'),
(19, 'INDIAN RED CROSS SOCIETY', 'Red Cross Complex, Ashram Road, Juna Wadaj, , Ahmedabad, Gujarat - 380013, India', '(79) 27557056 , (+91) 9428214294', 'Juna Wadaj', 'Ahmedabad', 'GUJARAT'),
(20, 'M P SHAH CANCER HOSPITAL', 'Gujarat Cancer Hospital And Research Institute, Civil Hospital Campus, Asarwa, , Ahmedabad, Gujarat - 380016, India', '?(79) 22688000 / 22681433', 'Asarwa', 'Ahmedabad', 'GUJARAT'),
(21, 'WHITE CROSS PATHOLOGY LABORATORY', 'Ground Floor, Kandhari Building, Patia Naroda Road, Naroda Road, , Ahmedabad, Gujarat - 382330, India', '(79) 22815227 , (+91) 9825453617', 'Naroda', 'Ahmedabad', 'GUJARAT'),
(22, 'GUJARAT CANCER MEDICAL COLLEGE BLOOD BANK', 'Cancer Medical College, Saraspur, , Ahmedabad, Gujarat - 380018, India', '(+91) 9824365588', 'Saraspur', 'Ahmedabad', 'GUJARAT'),
(23, 'GUJARAT BLOOD BANK VOLANTARY', '1, 2, Subhlaxmi Complex, Near Sanghvi School, , Naranpura, , Ahmedabad, Gujarat - 380013, India', '(79) 27453728 , (+91) 8000031011', 'Naranpura', 'Ahmedabad', 'GUJARAT'),
(24, 'NIRAMAY BLOOD BANK', 'Anand Nagar Cross Road, 100 Feet Ring Road, Satellite, , Ahmedabad, Gujarat - 380051, India', '(79) 26937237 , (+91) 9586100910', 'Satellite', 'Ahmedabad', 'GUJARAT'),
(25, 'SUPRATECH MICROPATH LABORATORY', 'C/O, Bharti Vallabh Hospital, Shahibaug, , Ahmedabad, Gujarat - 380004, India', '', 'Shahibaug', 'Ahmedabad', 'GUJARAT'),
(26, 'SADVICHAR PARIVAR', 'Mangal Murti Complex, Near Shiv Cinema, Ashram Road, Ahmedabad Ho, , Ahmedabad, Gujarat - 380001, India', '?(79) 26585260', 'Ashram Road', 'Ahmedabad', 'GUJARAT'),
(27, 'ESIC MODEL HOSPITAL', 'Bapu Nagar, , Ahmedabad, Gujarat - 380024, India', '(79) 22743935 / 22745770', 'Bapunagar', 'Ahmedabad', 'GUJARAT'),
(28, 'BHINRAJ PORWAL BLOOD BANK', '502, New Cloth Market, Raipur, Raipur, , Raipur, , Ahmedabad, Gujarat - 380001, India', '(79) 22160523', 'Raipur', 'Ahmedabad', 'GUJARAT'),
(29, 'KAILASH CANCER HOSPITAL, BLOOD BANK', 'Goraj Village, Vadodara HO, , Vadodara, Gujarat - 390001, India', '(+91) 9998274460', 'Vadodara HO', 'Vadodara', 'GUJARAT'),
(30, 'INDU VOLUNTARY BLOOD BANK', 'Vinraj Plaza, 3rd Floor, Main Road, Kothi, , Vadodara, Gujarat - 390001, India', '(265) 2437676 , (+91) 9825017334', 'Kothi', 'Vadodara', 'GUJARAT'),
(31, 'SURAKTAM BLOOD BANK', 'Blue Chip Complex, Main Road, Sayaji Ganj, , Vadodara, Gujarat - 390020, India', '(265) 2363660 / 2225903', 'Sayaji Ganj', 'Vadodara', 'GUJARAT'),
(32, 'DR MONALI DESAI', '35, Alkapuri, , Vadodara, Gujarat - 390007, India', '(265) 2323941', 'Vadodara ', 'Vadodara', 'GUJARAT'),
(33, 'SURAKTAM BLOOD BANK?', 'Blue Chip Building, Rajshree Theater Lane, Kalaghoda, Sayajiganj, Sayaji Ganj, , Vadodara, Gujarat - 390020, India', '(+91) 8980011076', 'Sayaji Ganj', 'Vadodara', 'GUJARAT'),
(34, 'CITIZEN BLOOD BANK', 'Ssg Hospital, Main Road, Rajmahal Road, , Vadodara, Gujarat - 390001, India', '(265) 2427640', 'Rajmahal Road', 'Vadodara', 'GUJARAT'),
(35, 'RAJKOT VOLUNTARY BLOOD BANK & RESEARCH CENTRE', '24, Vijay Plot, Malviya Road, Rajkot Ho, , Rajkot, Gujarat - 360001, India', '?(281) 2234242 / 2234243', 'Rajkot HO', 'Rajkot', 'GUJARAT'),
(36, 'OM BLOOD BANK', 'Rajkot, Gujarat - , India', '?(281) 2463090', 'Rajkot ', 'Rajkot', 'GUJARAT'),
(37, 'NATHANI VOLUNTARY BLOOD BANK', '20/22 Tejas Bldg 4th Flr, Yagnik Rd, Yagnik Road, , Rajkot, Gujarat - 360001, India', '?(281) 2480659 / 6522111', 'Yagnik Road', 'Rajkot', 'GUJARAT'),
(38, 'OM VOLUNTARY BLOOD BANK', 'Ankur Hospital 2nd Floor, Rajkot HO, , Rajkot, Gujarat - 360001, India', '(281) 2462654', 'Rajkot HO', 'Rajkot', 'GUJARAT'),
(39, 'SAURASHTRA VOLENTARY BLOOD BANK & RESEARCH CENTRE', 'Shashi Kunj, Nirmala Convent Road, Nirmala Road, , Rajkot, Gujarat - 360007, India', '(281) 2380680 , (+91) 9824296311', 'Nirmala Road', 'Rajkot', 'GUJARAT'),
(40, 'K T CHILDREN HOSPITAL', 'Civil Hospital Compound, Civil Hospital, , Rajkot, Gujarat - 360001, India', '(281) 2476402', 'Civil Hospital', 'Rajkot', 'GUJARAT'),
(41, 'SAURASHTRA MEDICAL & EDUCATIONAL CHARITABLE TRUST', 'Life Racecourse, Ring Road, Racecourse Park, , Rajkot, Gujarat - 360001, India', '(281) 2479133?', 'Racecourse Park', 'Rajkot', 'GUJARAT'),
(42, 'NAVDEEP BLOOD BANK', '3, Happy Home, Kanak Road, , Rajkot Ho, , Rajkot, Gujarat - 360001, India', '(281) 2226233', 'Rajkot HO', 'Rajkot', 'GUJARAT'),
(43, 'GONDHIA HOSPITAL', 'Kalawad Road, Rajkot Ho, , Rajkot, Gujarat - 360001, India', '(281) 2575611 / 2575614', 'Rajkot HO', 'Rajkot', 'GUJARAT'),
(44, 'G T SETH SARAKARI EYE HOSPITAL', 'C/O Pdu Medical College, Jamnagar Road, , Rajkot, Gujarat - 360006, India', '(281) 2447485', 'Jamnagar Road', 'Rajkot', 'GUJARAT'),
(45, 'CIVIL HOSPITAL', 'Jamnagar Highway, Jamnagar Road, , Rajkot, Gujarat - 360006, India', '(281) 2471118 / 2471218', 'Jamnagar Road', 'Rajkot', 'GUJARAT'),
(46, 'RED CROSS BLOOD BANK', '1st Floor, Red Cross Society, Suchak Road, Rajkot Ho, , Rajkot, Gujarat - 360001, India', '(281) 2466260 , (+91) 9426268687', 'Rajkot HO', 'Rajkot', 'GUJARAT'),
(47, 'INDIAN RED CROSS SOCIETY', 'Red Cross Building, Suchak Road, Moti Tanki Chowk, , Rajkot, Gujarat - 360001, India', '(281) 2464442 , (+91) 9879417776', 'Moti Tanki Chowk', 'Rajkot', 'GUJARAT'),
(48, 'JAGRUTI VOLUNTARY BLOODBANK', 'Three Bank, Dhoraji, , Rajkot, Gujarat - 360410, India', '(2824) 222485', 'Dhoraji', 'Rajkot', 'GUJARAT'),
(49, 'FIELD MARSHAL BLOOD BANK', '3rd Floor, Medicare, Vidhya Nagar Main Road, Manhar Plot, , Rajkot, Gujarat - 360002, India', '(281) 2480043 / 2481717', 'Manhar Plot', 'Rajkot', 'GUJARAT'),
(50, 'JETPUR MEDICAL FOUNDATION TRUST', 'Main Road, Shapar, , Rajkot, Gujarat - 360024, India', '(2827) 226123 , (+91) 9426480401', 'Shapar', 'Rajkot', 'GUJARAT'),
(51, 'SURAT RAKTADAN KENDRA & RESEARCH CENTRE', 'Udhana-Khatodara Health Center, Udhna Magdala Road, , Surat, Gujarat - 394210, India', '(261) 3937700 , (+91) 9825594299', 'Udhna Magdala Road', 'Surat', 'GUJARAT'),
(52, 'TIRTH CLINICAL LABORATORY?', '100 Mahalaxmi Square, Near L P Savani, School Honey Park Road, Opp Drashti, Adajan Road, , Surat, Gujarat - 395009, India', '(+91) 9825967307', 'Adajan Road', 'Surat', 'GUJARAT'),
(53, 'SURAT HEALTH CARE FOUNDATION BLOOD BANK', '?Surat, Gujarat - , India', '?(261) 2346130', 'Surat', 'Surat', 'GUJARAT'),
(54, 'SURBHI CLINICAL LABORATORY', '9/71, Gujarat Housing Board, Khatodara, , Surat, Gujarat - 395002, India', '(+91) 9825419464', 'Kharodara', 'Surat', 'GUJARAT'),
(55, 'LOK SAMARPAN RAKTADAN KENDRA', '15, Meera Nagar Society, Varachha Road, , Surat, Gujarat - 395006, India', '(261) 2547575 , (+91) 9825115050', 'Varachha Road', 'Surat', 'GUJARAT'),
(56, 'SAMARPAN RAKTADAN KENDRA', 'Surat Ho, , Surat, Gujarat - 395003, India', '', 'Surat HO', 'Surat', 'GUJARAT'),
(57, 'PARIKH CLINICAL LABORATORY', 'J 1/105 Sukruti, , Muktanand Nagar, Adajan Road, , Surat, Gujarat - 395009, India', '(261) 2690787', 'Adajan Road', 'Surat', 'GUJARAT'),
(58, 'SMIMER HOSPITAL, SURAT BLOOD BANK', 'Umarwada Village, Surat Ho, , Surat, Gujarat - 395003, India', '(+91) 9376323273', 'Surat HO', 'Surat', 'GUJARAT'),
(59, 'SUN SAI AMBULANCE SERVICES?', '203/B, Anjani Height, Jahangirpura, , Surat, Gujarat - 395005, India', '(+91) 9825575594 / 9879000447', 'Jahangirpura', 'Surat', 'GUJARAT'),
(60, 'BLOOD BANK NEW CIVIL HOSPITAL', 'Ring Road, Majura Gate, , Surat, Gujarat - 395002, India', '(261) 2208312 / 2208313', 'Majura Gate', 'Surat', 'GUJARAT'),
(61, 'SHUBHAM CLINICAL LABORATORY', '113 1st Floor Nidhi Complex, , Opp, Chowpati, Varachha Road, , Surat, Gujarat - 395006, India', '', 'Varachha Road', 'Surat', 'GUJARAT'),
(62, 'TRIMURTI BLOOD BANK', 'Shreenagar, Idar, Gujarat, Idar, , Sabarkantha, Gujarat - 383430, India', '(+91) 9898312397', 'Idar', 'Sabarkantha', 'GUJARAT'),
(63, 'SAMARPAN BLOOD BANK MUMBAI MAHARASHTRA', 'Sarvodaya Hospital, Office Building, 2nd Floor, L B S Marg, Ghatkopar West, , Mumbai, Maharashtra - 400086, India', '(22) 25111313 / 25100100', 'Ghatkopar West', 'Mumbai', 'Maharashtra'),
(64, 'MANAS SEROLOGICAL INSTITUTES BLOOD BANK MUMBAI MAHARASHTRA', '101 And 104/A, 1st Floor, Grace Plaza, S V Road, Jogeshwari West, , Mumbai, Maharashtra - 400102, India', '(22) 38560831', 'Jogeshwari West', 'Mumbai', 'Maharashtra'),
(65, 'HOLY FAMILY HOSPITAL BLOOD BANK MUMBAI MAHARASHTRA', 'C/O Holy Family Hospital & Medical Research Centre, St Andrews Road, Bandra West, , Mumbai, Maharashtra - 400050, India', '(22) 30610300', 'St Andrews Road', 'Mumbai', 'Maharashtra'),
(66, 'P D HINDUJA HOSPITAL & MEDICAL RESEARCH CENTRE MUMBAI MAHARASHTRA', 'Veer Savarkar Marg, Cadel Road, Mahim, , Mumbai, Maharashtra - 400016, India', '(22) 24451515 / 24449199', 'Mahim', 'Mumbai', 'Maharashtra'),
(67, 'DR SHIV KUMAR KORI (INCHARGE BLOOD BANK) MUMBAI MAHARASHTRA', '703 A Wing Arunoday Tower, Near Bus Stop, Bhandup West, , Mumbai, Maharashtra - 400078, India', '(22) 25946069 , (+91) 9322869799', 'Bhandup West', 'Mumbai', 'Maharashtra'),
(68, 'DR L H HIRANANDANI HOSPITAL MUMBAI MAHARASHTRA', 'Hillside Avenue, Powai, , Mumbai, Maharashtra - 400076, India', '(22) 25763300 , (+91) 9819261222', 'Powai', 'Mumbai', 'Maharashtra'),
(69, 'R N COOPER BLOOD BANK MUMBAI MAHARASHTRA', 'C/O R N Cooper Hospital, Juhu Lane, Vile Parle West, , Mumbai, Maharashtra - 400056, India', '?(22) 26205896', 'Vile Parle West', 'Mumbai', 'Maharashtra'),
(70, 'SOMAIYA HOSPITAL MUMBAI MAHARASHTRA', '`Ayurvihar Complex, Eastern Express Highway, Sion, , Mumbai, Maharashtra - 400022, India', '(22) 24090253 / 24097242', 'Sion', 'Mumbai', 'Maharashtra'),
(71, 'PALLAVI BLOOD BANK MUMBAI MAHARASHTRA', 'C/O Pandit Madan Mohan Malviya Shatabdi Hospital, 2nd Floor, VAMNA TUKARAM PATIL MARG, Govandi East, , Mumbai, Maharashtra - 400088, India', '(22) 25552020 , (+91) 9869920687', 'Govandi East', 'Mumbai', 'Maharashtra'),
(72, 'EMPLOYEE STATE INSURANCE SCHEME HOSPITAL MUMBAI MAHARASHTRA', 'Ganpat Jadhav Marg, Worli, , Mumbai, Maharashtra - 400018, India', '(22) 24933142 / 24932428', 'Worli', 'Mumbai', 'Maharashtra'),
(73, 'SIR J J MAHANAGAR RAKTAPEDHI MUMBAI MAHARASHTRA', 'Ground Floor, S D Petit Building, Gate No. 11, J J Road, Byculla, , Mumbai, Maharashtra - 400027, India', '(22) 23735585 / 23733531', 'Byculla', 'Mumbai', 'Maharashtra'),
(74, 'CAMA HOSPITAL BLOOD BANK MUMBAI MAHARASHTRA', 'Mahapalika Marg, Fort, , Mumbai, Maharashtra - 400001, India', '(22) 22611871 / 22611369', 'Mahapalika Marg , Fort', 'Mumbai', 'Maharashtra'),
(75, 'SUBURBAN HI TECH BLOOD BANK MUMBAI MAHARASHTRA', '206, 2nd Floor, Shagun Building, Rani Sati Marg, Malad East, , Mumbai, Maharashtra - 400097, India', '(22) 28714060 / 28714070', 'Malad East', 'Mumbai', 'Maharashtra'),
(76, 'MUMBAI PORT TRUST HOSPITAL MUMBAI MAHARASHTRA', 'Wadala East, , Mumbai, Maharashtra - 400037, India', '(22) 24129684 / 66567798', 'Wadala West', 'Mumbai', 'Maharashtra'),
(77, 'BOMBAY HOSPITAL BLOOD BANK MUMBAI MAHARASHTRA', 'C/O Bombay Hospital, New Marine Lines-Churchgate, , Mumbai, Maharashtra - 400020, India', '?(22) 22067676', 'New Marine Lines- Churchgate ', 'Mumbai', 'Maharashtra'),
(78, 'ST GEORGE HOSPITAL MUMBAI MAHARASHTRA', 'P Dmello Road, Fort, , Mumbai, Maharashtra - 400001, India', '(22) 22620242 / 22620244', 'Fort', 'Mumbai', 'Maharashtra'),
(79, 'NAVJIVAN BLOOD BANK MUMBAI MAHARASHTRA', 'Shop No 1, Abhilasha II, Punjabi Lane, Borivali West, , Mumbai, Maharashtra - 400092, India', '(22) 38549349', 'Borivali East', 'Mumbai', 'Maharashtra'),
(80, 'SION BLOOD BANK COMPONENT AND APHERESIS MUMBAI MAHARASHTRA', '92/5, 1st Floor, Geta Building, Sion, , Mumbai, Maharashtra - 400022, India', '(22) 38515581', 'Sion', 'Mumbai', 'Maharashtra'),
(81, 'BARC HOSPITAL MUMBAI MAHARASHTRA', 'Anushakti Nagar, , Mumbai, Maharashtra - 400094, India', '(22) 25563140 / 25563137', 'Anushakti Nagar', 'Mumbai', 'Maharashtra'),
(82, 'HOLY SPIRIT BLOOD BANK MUMBAI MAHARASHTRA', 'C/O Holy Spirit Hospital, Mahakali Caves Road, Andheri East, , Mumbai, Maharashtra - 400093, India', '(22) 28248500 / 28200353', 'Andheri East', 'Mumbai', 'Maharashtra'),
(83, 'SION HOSPITAL MUMBAI MAHARASHTRA', 'Dr Babasaheb Ambedkar Road, Sion, , Mumbai, Maharashtra - 400022, India', '(22) 24049023 / 24076381', 'Sion', 'Mumbai', 'Maharashtra'),
(84, 'FORTIS HOSPITAL BLOOD BANK MUMBAI MAHARASHTRA', 'C/O Fortis Hospital, Mulund Goregaon Link Road, Mulund West, , Mumbai, Maharashtra - 400080, India', '(22) 67994370', 'Mulund West', 'Mumbai', 'Maharashtra'),
(85, 'AMBAJI BLOOD BANK MUMBAI MAHARASHTRA', 'B S Devshi Marg, Chembur East, , Mumbai, Maharashtra - 400071, India', '', 'Chembur East', 'Mumbai', 'Maharashtra'),
(86, 'KUTCH YUVAK SANGH MUMBAI MAHARASHTRA', 'C/O Colo Photo Shop, Station Road, Borivali West, , Mumbai, Maharashtra - 400092, India', '(+91) 9819642323', 'Borivali West', 'Mumbai', 'Maharashtra'),
(87, 'SAIFEE HOSPITAL TRUST BLOOD BANK MUMBAI MAHARASHTRA', 'C/O Saifee Hospital, 15/17, Maharshi Karve Road, Charni Road, , Mumbai, Maharashtra - 400004, India', '(22) 67571140', 'Charni Road', 'Mumbai', 'Maharashtra'),
(88, 'POOJA MATERNITY & NURSING HOME MUMBAI MAHARASHTRA', 'Mulund West, , Mumbai, Maharashtra - 400080, India', '(22) 25647808', 'Mulund West', 'Mumbai', 'Maharashtra'),
(89, 'SION HOSPITAL BLOOD BANK MUMBAI MAHARASHTRA', ' C/O Sion Hospital , 28 1st Floor, Sion, , Mumbai, Maharashtra - 400022, India', '?(22) 24021771', 'Sion', 'Mumbai', 'Maharashtra'),
(90, 'M T AGARWAL MUNICIPAL GENERAL HOSPITAL MUMBAI MAHARASHTRA', 'Dr R P Road, Lbs Marg, Mulund West, , Mumbai, Maharashtra - 400080, India', '(22) 25605727 / 25605730', 'Mulund West', 'Mumbai', 'Maharashtra'),
(91, 'ABDUL FAZALBHOY BLOOD BANK MUMBAI MAHARASHTRA', 'C/O Cama Hospital, Mahapalika Marg, Fort, , Mumbai, Maharashtra - 400001, India', '(22) 22611648', 'Mahapalika Marg , Fort', 'Mumbai', 'Maharashtra'),
(92, 'JASLOK BLOOD BANK MUMBAI MAHARASHTRA', 'Deshmukh Garden-Mulund East, , Mumbai, Maharashtra - 400081, India', '(22) 56573434', 'Mulund East', 'Mumbai', 'Maharashtra'),
(93, 'VEENA NAGAR HEALTH CARE CENTRE MUMBAI MAHARASHTRA', '24 A/2, Lbs Marg, Mulund West, , Mumbai, Maharashtra - 400080, India', '(+91) 9820199072', 'Mulund West', 'Mumbai', 'Maharashtra'),
(94, 'DR L H HIRANANDANI BLOOD BANK MUMBAI MAHARASHTRA', 'C/O Dr L H Hiranandani Hospital, Hiranandani Business Park, Hillside Avenue, Powai, , Mumbai, Maharashtra - 400076, India', '(22) 25763355', 'Powai', 'Mumbai', 'Maharashtra'),
(95, 'PRINCE ALY KHAN BLOOD BANK MUMBAI MAHARASHTRA', 'C/O Prince Aly Khan Hospital, Nesbit Road, Mazgaon, , Mumbai, Maharashtra - 400010, India', '(22) 23777934', 'Mazgaon', 'Mumbai', 'Maharashtra'),
(96, 'BORIVALI BLOOD BANK MUMBAI MAHARASHTRA', 'Ground Floor, Vithal Apartment, Svp Road, Borivali West, , Mumbai, Maharashtra - 400103, India', '(22) 38542889', 'Borivali West', 'Mumbai', 'Maharashtra'),
(97, 'MASINA BLOOD BANK MUMBAI MAHARASHTRA', 'C/O Masina Blood Bank, Sant Savta Marg, Byculla, , Mumbai, Maharashtra - 400027, India', '(22) 23700715', 'Byculla', 'Mumbai', 'Maharashtra'),
(98, 'S L RAHEJA BLOOD BANK MUMBAI MAHARASHTRA', 'C/O S L Raheja Hospital, 1st Floor, Mahim, , Mumbai, Maharashtra - 400016, India', '(22) 66529683 / 66529888', 'Mahim', 'Mumbai', 'Maharashtra'),
(99, 'ASHIRWAD BLOOD BANK MUMBAI MAHARASHTRA', '2nd Floor, Imperial Mahal, Dr Ambedkar Road, Dadar East, , Mumbai, Maharashtra - 400014, India', '(22) 24153790 / 24153387', 'Dadar East', 'Mumbai', 'Maharashtra'),
(100, 'INDIAN RED CROSS SOCIETY MUMBAI MAHARASHTRA', '141, Maharashtra Red Cross Society, Town Hall Compound, Shahid Bhagat Singh Road, Fort, , Mumbai, Maharashtra - 400001, India', '(22) 22663560 , (+91) 9323048944', 'Fort', 'Mumbai', 'Maharashtra'),
(101, 'BSES MG HOSPITAL MUMBAI MAHARASHTRA', 'Brahma Kumaris Hospital, S V Road, Andheri West, , Mumbai, Maharashtra - 400058, India', '(22) 66487500 / 26711597', 'Andheri West', 'Mumbai', 'Maharashtra'),
(102, 'TURFIYA HOSPITAL & ICU &PATHOLOGY MUMBAI MAHARASHTRA', '2nd Floor Zahoor Palace B Wing, S V Road, Powai, , Mumbai, Maharashtra - 400076, India', '(22) 38588674', 'Powai', 'Mumbai', 'Maharashtra'),
(103, 'SHUSHRUSHA BLOOD BANK MUMBAI MAHARASHTRA', 'C/O Shushrusha Hospital, 698/B, Ranade Road, Dadar West, , Mumbai, Maharashtra - 400028, India', '(22) 24469579', 'Dadar West', 'Mumbai', 'Maharashtra'),
(104, 'FAMILY PATH LABORATORY MUMBAI MAHARASHTRA', 'Flat No 6 Momin Apartment, Jogeshwari West, , Mumbai, Maharashtra - 400102, India', '(22) 38567217', 'Jogeshwari West', 'Mumbai', 'Maharashtra'),
(105, 'ARPAN BLOOD BANK MUMBAI MAHARASHTRA', '2nd Floor, Aniraj Tower, L B S Marg, Bhandup West, , Mumbai, Maharashtra - 400078, India', '(22) 25941140 / 25941142', 'Bhandup West', 'Mumbai', 'Maharashtra'),
(106, 'RAJAWADI BLOOD BANK MUMBAI MAHARASHTRA', 'C/O Rajawadi Hospital, Rajawadi Road, Ghatkopar West, , Mumbai, Maharashtra - 400084, India', '(22) 21025149', 'Ghatkopar West', 'Mumbai', 'Maharashtra'),
(107, 'COOPER HOSPITAL MUMBAI MAHARASHTRA', 'Bhakti Vedanta Swami Marg, Juhu Lane, , Vile Parle West, , Mumbai, Maharashtra - 400056, India', '(22) 26207254 / 26205909', 'Vile Parle West', 'Mumbai', 'Maharashtra'),
(108, 'BORIVALI BLOOD BANK MUMBAI MAHARASHTRA', 'Ground Floor Vithal Apartments, Mandapeshwar Road, Borivali West, , Mumbai, Maharashtra - 400092, India', '(22) 38585726', 'Borivali West', 'Mumbai', 'Maharashtra'),
(109, 'MAHATMA GANDHI MEMORIAL HOSPITAL MUMBAI MAHARASHTRA', 'Dr S S Rao Road, Parel, , Mumbai, Maharashtra - 400012, India', '(22) 24132581 / 24132582', 'Parel', 'Mumbai', 'Maharashtra'),
(110, 'MAHATMA GANDHI SEVA MANDIR BLOOD BANK MUMBAI MAHARASHTRA', 'Bandra West, , Mumbai, Maharashtra - 400050, India', '(22) 26431897 , (+91) 9920568398', 'Bandra West', 'Mumbai', 'Maharashtra'),
(111, 'K B BHABHA BLOOD BANK MUMBAI MAHARASHTRA', 'C/O Bhabha Hospital, R K Patkar Marg, Bandra West, , Mumbai, Maharashtra - 400050, India', '(22) 26422775', 'Bandra West', 'Mumbai', 'Maharashtra'),
(112, 'V N DESAI BLOOD BANK MUMBAI MAHARASHTRA', 'C/O V N Desai Municipal Hospital, 11th Golibar Road, Santacruz East, , Mumbai, Maharashtra - 400055, India', '(22) 26183018 / 26182081', 'Santacruz East', 'Mumbai', 'Maharashtra'),
(113, 'POOJA MATERNITY & NURSING HOME MUMBAI MAHARASHTRA', 'Mulund West, , Mumbai, Maharashtra - 400080, India', '(22) 25647808', 'Mulund West', 'Mumbai', 'Maharashtra'),
(114, 'FAMILY PATH LABORATORY MUMBAI MAHARASHTRA', 'Flat No 6 Momin Apartment, Jogeshwari West, , Mumbai, Maharashtra - 400102, India', '(22) 38567217', 'Jogeshwari West', 'Mumbai', 'Maharashtra'),
(115, 'SAMARPAN BLOOD BANK MUMBAI MAHARASHTRA', 'Sarvodaya Hospital, Office Building, 2nd Floor, L B S Marg, Ghatkopar West, , Mumbai, Maharashtra - 400086, India', '?(22) 25111313 / 25100100', 'Ghatkopar West', 'Mumbai', 'Maharashtra'),
(116, 'CUMBAL HILLS HOSPITAL BLOOD BANK MUMBAI MAHARASHTRA', 'C/O Cumbala Hills Hospital & Heart Institute, 93/95 August Kranti Marg, Kemps Corner, , Mumbai, Maharashtra - 400006, India', '(22) 23803674?', '93/95 August Kranti Marg', 'Mumbai', 'Maharashtra'),
(117, 'SIR J J MAHANAGAR RAKTAPEDHI MUMBAI MAHARASHTRA', 'Ground Floor, S D Petit Building, Gate No. 11, J J Road, Byculla, , Mumbai, Maharashtra - 400027, India', '(22) 23735585 / 23733531', 'Byculla', 'Mumbai', 'Maharashtra'),
(118, 'MUMBAI PORT TRUST HOSPITAL MUMBAI MAHARASHTRA', 'Wadala East, , Mumbai, Maharashtra - 400037, India', '(22) 24129684 / 66567798', 'Wadala East', 'Mumbai', 'Maharashtra'),
(119, 'DR SHIV KUMAR KORI (INCHARGE BLOOD BANK) MUMBAI MAHARASHTRA', '703 A Wing Arunoday Tower, Near Bus Stop, Bhandup West, , Mumbai, Maharashtra - 400078, India', '(22) 2594606 , (+91) 9322869799', 'Bhandup West', 'Mumbai', 'Maharashtra'),
(120, 'EMPLOYEE STATE INSURANCE SCHEME HOSPITAL MUMBAI MAHARASHTRA', 'Ganpat Jadhav Marg, Worli, , Mumbai, Maharashtra - 400018, India', '(22) 24933142 / 24932428', 'Worli', 'Mumbai', 'Maharashtra');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` bigint(12) NOT NULL AUTO_INCREMENT,
  `contact` bigint(10) NOT NULL,
  `rbgrp` enum('a+','a-','b+','b-','o+','o-','ab+','ab-') NOT NULL,
  `rtext` longtext NOT NULL,
  `complete` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `contact`, `rbgrp`, `rtext`, `complete`) VALUES
(2, 1234567892, 'ab+', 'Hello ................................................................................................................................................................................................................................................................................................................................................', '1'),
(3, 1234567892, 'a-', 'bdvsdbvls', '1'),
(4, 1234567892, 'a+', 'vlnfvlkf', '1'),
(5, 1234567892, 'a-', 'abcd', '1'),
(6, 1234567892, 'a+', 'jgk', '1'),
(7, 1234567892, 'a+', 'j', '1'),
(8, 1234567892, 'a+', 'bjkb', '1'),
(9, 1234567892, 'a+', 'bjkb', '1'),
(10, 1234567892, 'a+', 'bjkb', '1'),
(11, 1234567892, 'a+', 'f', '1'),
(12, 1234567892, 'a+', 'l', '1'),
(13, 1234567892, 'a-', 'aaaaa', '1'),
(14, 1234567892, 'a+', 'abc', '1'),
(15, 1234567892, 'a+', 'aa', '1'),
(16, 9408756425, 'a+', 'neeeeeeeeeeeed', '1'),
(17, 9408756425, 'a-', 'hello', '1'),
(18, 9408756425, 'a+', 'hiii', '0'),
(19, 9408756425, 'a+', 'hu', '1'),
(20, 9408756425, 'a-', 'tu', '1'),
(21, 9408756425, 'a-', 'tu', '1'),
(22, 9408756425, 'a-', 'abcd', '1'),
(23, 9408756425, 'a+', 'aa', '1'),
(24, 9408756425, 'a-', '333', '1'),
(25, 9408756425, 'a-', '333', '1'),
(26, 9408756425, 'a+', 'aaaaaaa', '1'),
(27, 9408756425, 'a-', 'aa', '1'),
(28, 9408756425, 'a-', '6', '1'),
(29, 9408756425, 'a-', '6', '1'),
(30, 9408756425, 'a+', 'try1', '1'),
(31, 9408756425, 'a-', 'try2', '1'),
(32, 9408756425, 'ab+', 'try3', '1'),
(33, 9408756425, 'ab-', 'try4', '1'),
(34, 9408756425, 'b-', 'try5', '1'),
(35, 9408756425, 'b+', 'try6', '1'),
(36, 9408756425, 'o-', 'try7', '1'),
(37, 9408756425, 'o+', 'try8', '1'),
(38, 9408756425, 'a+', 'try11', '1'),
(39, 9408756425, 'a-', 'try22', '1'),
(40, 9408756425, 'ab+', 'try33', '1'),
(41, 9408756425, 'ab-', 'try44', '1'),
(42, 9408756425, 'b-', 'try55', '1'),
(43, 9408756425, 'b+', 'try66', '1'),
(44, 9408756425, 'o-', 'try77', '1'),
(45, 9408756425, 'o+', 'try88', '1');

-- --------------------------------------------------------

--
-- Table structure for table `reg_user`
--

CREATE TABLE IF NOT EXISTS `reg_user` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `age` int(3) NOT NULL,
  `address` text NOT NULL,
  `area` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `contact` bigint(12) NOT NULL,
  `password` text NOT NULL,
  `bgroup` enum('b+','b-','a+','a-','o+','o-','ab+','ab-') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contact` (`contact`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `reg_user`
--

INSERT INTO `reg_user` (`id`, `name`, `gender`, `age`, `address`, `area`, `city`, `state`, `contact`, `password`, `bgroup`) VALUES
(1, 'Umang Mehta', 'Male', 19, 'cksdbcjkdsbvkjbsdkjvbsdvbsdjb', 'jivraj park', 'Ahmedabad', 'Gujarat', 9408756425, 'e10adc3949ba59abbe56e057f20f883e', 'a+'),
(2, 'bhargav', 'Male', 21, 'sbckdsbckjsdbckjsd', 'kudhasan', 'Gandhinagar', 'Gujarat', 1111, 'a', 'b+'),
(3, 'a', 'Male', 1, '1', '1', '1', '1', 1, '5', 'a+'),
(6, 'u', 'Male', 23, 'bbmbmnb', 'aa', 'aa', 'aa', 123, 'a', 'a-'),
(7, 'uu', 'Male', 18, 'bcksdbjk', 'dharnidhar', 'ahmedabad', 'Gujarat', 99, 'aa', 'a-'),
(8, '1', 'Male', 1, '1', '1', '1', '1', 11111, '1', 'a+'),
(9, 'hm', 'Male', 33, 'dsv', 'jivaraj park', 'ahmedabad', 'Gujarat', 19, 'aa', 'a-'),
(10, 'hg', 'Female', 25, 'jbnm,', 'sola', 'Ahmedabad', 'Gujarat', 9898989898, '123456', 'a+'),
(11, 'nvfd', 'Female', 33, 'ncdkn', 'aa', 'aa', 'aa', 2, 'a', 'a+'),
(14, 'dcsdc', 'Male', 3, 'dvdfv', 'area', 'mumbai', 'maharastra', 22222, 'a', 'a+'),
(15, 'll', 'Male', 55, 'gkjbhj', 'bjbjb', 'a', 'a', 88, 'ABCd', 'a-'),
(16, 'aaaaa', 'Male', 11, 'sdvds', 's', 's', 's', 1234, 'db0b7e12f9d593a11525b7b2f1efb7e1', 'a-'),
(17, 'jcbjs', 'Female', 55, 'sncnsd', 'paldi', 'ahmedabad', 'gujarat', 4444, '0cc175b9c0f1b6a831c399e269772661', 'a-'),
(41, 'ADMIN', 'Male', 99, 'address', 'are', 'city', 'state', 9999999999, '0192023a7bbd73250516f069df18b500', 'a+'),
(42, '7', 'Female', 7, 'vknd\r\n', 'dnlkdn', 'dnvlkd', 'kndkln', 7777777777, 'f63f4fbc9f8c85d409f2f59f2b9e12d5', 'a+'),
(44, 'vnfnv', 'Female', 5, 'djvbdkj\r\n', 'nlkdcnv', 'vjdbvbd', 'bvjdbv', 8888888888, 'f379eaf3c831b04de153469d1bec345e', 'a+'),
(46, 'one', 'Male', 1, 'hvjfbn\r\nbvjb', 'dvndn', 'dvk', 'dvbdjk', 1111111111, '96e79218965eb72c92a549dd5a330112', 'a+'),
(48, 'Gssgg', 'Male', 6, 'G', 'Dd', 'Dd', 'F', 9408756333, '96e79218965eb72c92a549dd5a330112', 'a+'),
(49, 'i', 'Male', 55, 'gkgkjg', 'paldi', 'ahmedabad', 'Gujarat', 1234567892, 'e10adc3949ba59abbe56e057f20f883e', 'a+');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
