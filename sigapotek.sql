-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 07:51 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigapotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `apotek`
--

CREATE TABLE `apotek` (
  `id` int(11) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `foto` varchar(500) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apotek`
--

INSERT INTO `apotek` (`id`, `nama`, `alamat`, `deskripsi`, `foto`, `latitude`, `longitude`) VALUES
(1, 'Apotek Adis Farma', 'Jl. Adisucipto, No. 1A, Bangka Belitung Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat, 78242, Indonesia', NULL, 'apotekadisfarma.jpeg', '-0.058864', '109.36539'),
(2, 'Apotek Berkah', 'Jl. Husein Hamzah No.1, Pal Lima, Pontianak Barat, Kota Pontianak, Kalimantan Barat, 78113, Indonesia', NULL, 'apotekberkah.jpeg', '-0.025399', '109.30176'),
(3, 'Apotek Riang', 'Jl. Sepakat II No.2, Bansir laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat, 78112, Indonesia', NULL, 'apotekriang.jpeg', '-0.06204', '109.34919'),
(4, 'Apotek Serviam', 'Jl. Moh. Sohor No.88,Akcaya, Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78113, Indonesia', NULL, 'apotekserviam.jpeg', '-0.053705', '109.3287'),
(5, 'Apotek Central', 'Jl. Prof.M.Yamin No.11, Kota Baru, Pontianak Kota, Kota Pontianak, Kalimantan Barat, 78116, Indonesia', NULL, 'apotekcentral.jpeg', '-0.051494', '109.315704'),
(6, 'Apotek Al-qowiy', 'Gg. Ekadaya No.26, Sungai Bangkong, Pontianak Kota, Kota Pontianak, Kalimantan Barat, 78113, Indonesia', NULL, 'Apotekal-qowiy.jpeg', '-0.051435', '109.31572'),
(7, 'Apotek Pelangi Kota Baru', 'Jl. Prof.M.Yamin No.6,Kota Baru, Pontianak Sel, Kota Pontianak, Kalimantan Barat, 78113, Indonesia', NULL, 'apotekpelangikotabaru.jpeg', '-0.057444', '109.30973'),
(8, 'Apotek Kimia Farma ', 'Jl. Prof.M.Yamin No.8,Kota Baru, Pontianak Sel, Kota Pontianak, Kalimantan Barat, 78113, Indonesia', NULL, 'apotekkimiafarmamyamin.jpeg', '-0.053236', '109.31399'),
(9, 'Apotek Mitra Agung', 'Jl. Dr. Sutomo No.50a, Sungai Bangkong, Pontianak Kota,  Kota Pontianak, Kalimantan Barat, 78113, Indonesia', NULL, 'apotekmitraagung.jpeg', '-0.042516', '109.313446'),
(10, 'Apotek Zam-Zam Farma', 'Jl. Dr. Sutomo No.14, Sungai Bangkong, Pontianak Kota,  Kota Pontianak, Kalimantan Barat, 78113, Indonesia', NULL, 'apotekzamzamfarma.jpeg', '-0.041541', '109.314285'),
(11, 'Apotek dan Klinik Pelangi Kasih', 'Jl.P.Natakusuma No.5-60, Sungai Bangkong, Pontianak Kota, Kota Pontianak, Kalimantan Barat, 78113, Indonesia', NULL, 'apotekpelangikasih.jpeg', '-0.041559', '109.314285'),
(13, 'Apotek Pancasila', 'Gg.Hidayah,Sungai Jawi, Pontianak Kota, Kota Pontianak, Kalimantan Barat, 78244, Indonesia', NULL, 'apotekpancasila.jpeg', '-0.028066', '109.31571'),
(17, 'Apotek Kimia Farma', 'Jl. Kh. Wahid Hasyim No.143-154, Tengah, Pontianak Kota, Kota Pontianak, Kalimantan Barat, 78244, Indonesia', NULL, 'apotekkimiafarmakhwhasyim.jpeg', '-0.024968', '109.32614'),
(18, 'Apotek Graha', 'Jl. Kh. Wahid Hasyim No.117a, Tengah, Pontianak Kota, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekgraha.jpeg', '-0.02713', '109.32768'),
(19, 'Apotek Mawar', 'Jl. Hos Cokroaminoto No.232, Darat Sekip, Pontianak Kota, Kota Pontianak, Kalimantan Barat, 78117, Indonesia', NULL, 'apotekmawar.jpeg', '-0.03019', '109.3372'),
(20, 'Apotek Bintang', 'Jl. Gajah Mada No.92, Benua Melayu Darat, Pontianak Selatan., Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekbintang.jpeg', '-0.033615', '109.34112'),
(21, 'Apotek Kencana', 'Jl. Gajah Mada No.90, Benua Melayu Darat, Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekkencana.jpeg', '-0.034942', '109.34182'),
(22, 'Apotek Glory', 'Jl. Gajah Mada No.81, Benua Melayu Darat, Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekglory.jpeg', '-0.036974', '109.34262'),
(23, 'Apotek Gajahmada', 'Gg. Gajahmada 21 No.22, Benua Melayu Darat, Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekgajahmada.jpeg', '-0.03713', '109.34253'),
(24, 'Apotek Makmur II', 'Gg. Gajahmada 21 No.22, Benua Melayu Darat, Pontianak Sel., Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekmakmur2.jpeg', '-0.036962', '109.34248'),
(25, 'Apotek Kimia Farma', 'Jl. Gajah Mada No.61, Benua Melayu Darat, Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekkimiafarmagajahmada.jpeg', '-0.036524', '109.34234'),
(26, 'Apotek Jaya', 'Jl. Gajah Mada No.189, Benua Melayu Darat, Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78122, Indonesia', NULL, 'apotekjaya.jpeg', '-0.035171', '109.34176'),
(27, 'Apotek Cahaya', 'Jl. Gajah Mada No.63b, Benua Melayu Darat, Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekcahaya.jpeg', '-0.033418', '109.34099'),
(28, 'Apotek Kharitas', 'Jl. Siam No.259, Benua Melayu Darat, Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekkharitas.jpeg', '-0.030797', '109.340294'),
(29, 'Apotek Abadi', 'Jl. Diponegoro No.27, Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekabadi.jpeg', '-0.027601', '109.34191'),
(30, 'Apotek Sehat', 'Jl. Tanjung Pura No.90, Benua Melayu, Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78111, Indonesia', NULL, 'apoteksehat.jpeg', '-0.029002', '109.34398'),
(31, 'Apotek Damai', 'Gg. Satu, Benua Melayu, Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekdamai.jpeg', '-0.034163', '109.3463'),
(32, 'Apotek Kimia Farma', 'Jl. Tanjung Pura No.318, Benua Melayu, Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekkimiafarmatanjungpura.jpeg', '-0.036652', '109.34696'),
(33, 'Apotek Tanjung Pura', 'Jl. Tanjung Pura No.351, Benua Melayu, Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78122, Indonesia', NULL, 'apotektanjungpura.jpeg', '-0.034926', '109.34645'),
(34, 'Apotek Utama', 'Jl. Tanjung Pura No.259, Benua Melayu, Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekutama.jpeg', '-0.033034', '109.34587'),
(35, 'Apotek Cipta', 'Jl. Setia Budi 1 No.237, Benua Melayu, Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekcipta.jpeg', '-0.032195', '109.345505'),
(36, 'Apotik Imam Bonjol', 'jl. Imam Bonjol No.2, Benua Melayu, Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekimambonjol.jpeg', '-0.041143', '109.3493'),
(37, 'Apotek Vita', 'Gg. Amaliah No.4, Sungai Jawi Dalam, Pontianak Barat, Kota Pontianak, Kalimantan Barat, 78244, Indonesia', NULL, 'apotekvita.jpeg', '-0.023253', '109.309105'),
(38, 'Apotek Barokah', 'Jl. Tanjung Raya No.8, Saigon, Pontianak Timur, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekbarokah.jpeg', '-0.036704', '109.35806'),
(39, 'Apotek Medika Farma', 'Jl. Tanjung Raya, Saigon, Pontianak Timur, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekmedikafarma.jpeg', '-0.048294', '109.36888'),
(40, 'Apotek Kimia Farma', 'Jl. Tanjung Raya 2 No.3b, Banjar Serasan, Pontianak Timur, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekkimiafarmatanjungraya2.jpeg', '-0.050177', '109.37015'),
(41, 'Apotek dan Klinik Panglima Aim', 'Jl. Panglima Aim No.28, Saigon, Pontianak Timur, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekdanklinikpanglimaaim.jpeg', '-0.034812', '109.36006'),
(42, 'Apotek Sejahtera', 'Jl. Panglima Aim No.12, Saigon, Pontianak Timur, Kota Pontianak, Kalimantan Barat, 78242, Indonesia', NULL, 'apoteksejahtera.jpeg', '-0.03129', '109.365685'),
(43, 'Apotek MK Farma', 'Jl. Panglima Aim No.109, Tanjung Hulu, Pontianak Timur, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekmkfarma.jpeg', '-0.030069', '109.36664'),
(44, 'Apotek Kimia Farma', 'Jl. Panglima Aim No.65, Tanjung Hulu, Pontianak Timur, Kota Pontianak, Kalimantan Barat, 78242, Indonesia', NULL, 'apotekkimiafarmapanglimaaim.jpeg', '-0.027228', '109.36874'),
(45, 'Apotek Utama Farma', 'Jl. Yam Sabran No.95, Tanjung Hulu, Pontianak Timur, Kota Pontianak, Kalimantan Barat, 78242, Indonesia', NULL, 'apotekutamafarma.jpeg', '-0.025456', '109.36993'),
(46, 'Apotek Patent 2', 'Gg. Mawar, Tanjung Hulu, Pontianak Timur, Kota Pontianak, Kalimantan Barat, 78242, Indonesia', NULL, 'apotekpatent2.jpeg', '-0.026011', '109.37707'),
(47, 'Apotek Permata', 'Jl.YA.M Sabran No.58c, Kota Pontianak, Kalimantan Barat, Indonesia', NULL, 'apotekpermata.jpeg', '-0.025704', '109.3733'),
(48, 'Apotek Sahabat', 'Jl. Dr. Soedarso, No.1 , Bangka Belitung Laut, Pontianak Tenggara, Kota Pontianak, 78111, Indonesia', 'Buka 24 jam', 'apoteksahabat.jpeg', '-0.061971', '109.364815'),
(50, 'Apotek Active', 'Jl.Gusti Hamzah, No.8A,Sungai Bangkong, Pontianak Kota, Kota Pontianak, Kalimantan Barat 78116,Indonesia', NULL, 'apotekactive.jpeg', '-0.022738', '109.31825'),
(51, 'Apotek Sentarum Medika', 'Jl. Danau Sentarum No.2, Pontianak Kota, Kota Pontianak, Kalimantan Barat 78113, Indonesia.', NULL, 'apoteksentarummedika.jpeg', '-0.041373', '109.313576'),
(52, 'Apotek Kencana 2', 'Jl. Dr. Wahidin, No.29, Sungai Jawi, Pontianak Kota, Kota Pontianak, Kalimantan Barat, 78113, Indonesia', NULL, 'apotekkencana2.jpeg', '-0.037975', '109.310135'),
(53, 'Apotek Kimia Farma', 'Gg. Waris No.6, Sungai Bangkong, Pontianak Kota, Kota Pontianak, Kalimantan Barat, 78113, Indonesia', NULL, 'apotekkimiafarmawaris.jpeg', '-0.044995', '109.31057'),
(54, 'Apotek Dara Hitam', 'Jl. Bukit Barisan No.10, Sungai Jawi, Pontianak Kota, Kota Pontianak, Kalimantan Barat, 78244, Indonesia', NULL, 'apotekdarahitam.jpeg', '-0.020638', '109.32128'),
(55, 'Apotek Agung', 'Jl. KH. Wahid Hasyim No.210, Mariana, Pontianak Kota, Kota Pontianak, Kalimantan Barat, 78244, Indonesia', NULL, 'apotekagung.jpeg', '-0.020873', '109.326324'),
(56, 'Apotek Kimia Farma', 'Jl. H. Rais A. Rahman, No.23, Sungai Jawi Dalam, Pontianak Barat, Kota Pontianak, Kalimantan Barat, 78244, Indonesia', NULL, 'apotekkimiafarmasungaijawi.jpeg', '-0.020972', '109.31668'),
(57, 'Apotek Mandiri 2', 'Jl. KH Wahid Hasyim, No.230, Sungai Jawi, Pontianak Kota, Kota Pontianak, Kalimantan Barat, 78117, Indonesia', NULL, 'apotekmandiri2.jpeg', '-0.020386', '109.32625'),
(59, 'Apotek Vita', 'Jl. H. Rais A. Rahman, No.1, Sungai Jawi Dalam, Pontianak Barat, Kota Pontianak, Kalimantan Barat, 78244, Indonesia', NULL, 'apotekvita.jpeg', '-0.023385', '109.309044'),
(60, 'Apotek Devi', 'Jl. Husein Hamzah, No.22, Pal Lima, Pontianak Barat, Kota Pontianak, Kalimantan Barat, 78113, Indonesia', NULL, 'apotekdevi.jpeg', '-0.026199', '109.30027'),
(62, 'Apotek Agung Siantan', 'Jl. Gusti.Situt Mahmud No.33, Siantan Tengah, Pontianak Utara, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekagungsiantan.jpeg', '-0.018476', '109.34656'),
(63, 'Apotek Borneo Farma', 'Jl. Gusti.Situt Mahmud No.9, Siantan Tengah, Pontianak Utara, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekborneofarma.jpeg', '-0.018203', '109.34704'),
(64, 'Apotek Pangeran', 'Jl. Gusti.Situt Mahmud No.5, Siantan Hulu, Pontianak Utara, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekpangeran.jpeg', '-0.016592', '109.35475'),
(65, 'Apotek Tria Utama', 'Jl. Gusti.Situt Mahmud No.10a, Siantan Hulu, Pontianak Utara, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotektriautama.jpeg', '-0.015671', '109.35991'),
(66, 'Apotek Merdeka Timur', 'Jl. Hos Cokroaminoto No.28, Darat Sekip, Pontianak Kota, Kota Pontianak, Kalimantan Barat, 78243, Indonesia', NULL, 'apotekmerdekatimur.jpeg', '-0.029903', '109.33596'),
(67, 'Apotek Siantan Jaya', 'Jl. Khatulistiwa No.2, Siantan Hilir, Pontianak Utara, Kota Pontianak, Kalimantan Barat, 78243, Indonesia\r\n', NULL, 'apoteksiantanjaya.jpeg', '-0.015012', '109.33917');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apotek`
--
ALTER TABLE `apotek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apotek`
--
ALTER TABLE `apotek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
