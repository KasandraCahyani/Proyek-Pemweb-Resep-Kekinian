-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 08:54 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_resep`
--

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(5) NOT NULL,
  `nama_resep` varchar(100) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `resep` text NOT NULL,
  `username_penulis` varchar(30) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `tgl_dibuat` varchar(20) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `nama_resep`, `deskripsi`, `resep`, `username_penulis`, `penulis`, `tgl_dibuat`, `foto`, `url`) VALUES
(1, 'Bluder Tape Keju', 'Resep mudah membuat Bluder Tape Keju', '<h4>Bahan-bahan</h4><h5>Bahan a :</h5><ol><li>5 butir telur</li><li>100 grm gula pasir</li><li>1 sdt sp</li></ol><h5>Bahan b :</h5><ol><li>250 grm tape singkong</li><li>2 saset skm putih</li><li>1/2 sdt garam</li></ol><h5>Bahan c :</h5><ol><li>170 grm tep terigu pro rendah</li><li>30 grm tep maizena</li><li>1 sdt vanili bubuk</li><li>1/2 sdt baking powder</li></ol><h5>Bahan d :</h5><ol><li>200 grm margarin lelehkan</li><li>100 grm keju parut bagi 2 untuk topping </li></ol><h4>Langkah</h4><ol><li>Campur bahan b hingga halus. Campur bahan c kemudian ayak.<br></li><li>Mixer\r\n dengan kecepatan tinggi bahan a hingga putih mengembang. Kemudian \r\nmasukkan bahan b gunakan speed rendah hingga tercampur rata, matikan \r\nmixer. Masukkan bahan c sedikit sedikit, aduk menggunakan spatula. </li><li>Terakir masukkan bahan d aduk rata.<br></li><li>Olesi\r\n loyang dengan margarin dan tepung terigu, tuang adonan jangan lupa d \r\nhentakan kemudian beri topping keju. oven dengan api sedang kurang lebih\r\n 45 menit. Tergantung oven masing2.<br></li></ol>', 'ksndrchyn', 'Kasandra Cahyani', '20-05-2019@06:53pm', '- bluder-tape-keju-foto-resep-utama', 'bluder-tape-keju_on_20-05-2019@06:53pm'),
(12, 'Bluder Tape Keju', 'Resep mudah membuat Bluder Tape Keju', '<h4>Bahan-bahan</h4><h5>Bahan a :</h5><ol><li>5 butir telur</li><li>100 grm gula pasir</li><li>1 sdt sp</li></ol><h5>Bahan b :</h5><ol><li>250 grm tape singkong</li><li>2 saset skm putih</li><li>1/2 sdt garam</li></ol><h5>Bahan c :</h5><ol><li>170 grm tep terigu pro rendah</li><li>30 grm tep maizena</li><li>1 sdt vanili bubuk</li><li>1/2 sdt baking powder</li></ol><h5>Bahan d :</h5><ol><li>200 grm margarin lelehkan</li><li>100 grm keju parut bagi 2 untuk topping </li></ol><h4>Langkah</h4><ol><li>Campur bahan b hingga halus. Campur bahan c kemudian ayak.<br></li><li>Mixer\r\n dengan kecepatan tinggi bahan a hingga putih mengembang. Kemudian \r\nmasukkan bahan b gunakan speed rendah hingga tercampur rata, matikan \r\nmixer. Masukkan bahan c sedikit sedikit, aduk menggunakan spatula. </li><li>Terakir masukkan bahan d aduk rata.<br></li><li>Olesi\r\n loyang dengan margarin dan tepung terigu, tuang adonan jangan lupa d \r\nhentakan kemudian beri topping keju. oven dengan api sedang kurang lebih\r\n 45 menit. Tergantung oven masing2.</li></ol>', 'ksndrchyn', 'Kasandra Cahyani', '21-05-2019@12:26am', '- bluder-tape-keju-foto-resep-utama', 'bluder-tape-keju_on_21-05-2019@12:26am'),
(13, 'BLUDER TAPE KEJU', 'Resep mudah membuat Bluder Tape Keju', 'Bahan-bahan\r\nBahan a :\r\n5 butir telur\r\n100 grm gula pasir\r\n1 sdt sp\r\nBahan b :\r\n250 grm tape singkong\r\n2 saset skm putih\r\n1/2 sdt garam\r\nBahan c :\r\n170 grm tep terigu pro rendah\r\n30 grm tep maizena\r\n1 sdt vanili bubuk\r\n1/2 sdt baking powder\r\nBahan d :\r\n200 grm margarin lelehkan\r\n100 grm keju parut bagi 2 untuk topping\r\nLangkah\r\nCampur bahan b hingga halus. Campur bahan c kemudian ayak.\r\nMixer dengan kecepatan tinggi bahan a hingga putih mengembang. Kemudian masukkan bahan b gunakan speed rendah hingga tercampur rata, matikan mixer. Masukkan bahan c sedikit sedikit, aduk menggunakan spatula.\r\nTerakir masukkan bahan d aduk rata.\r\nOlesi loyang dengan margarin dan tepung terigu, tuang adonan jangan lupa d hentakan kemudian beri topping keju. oven dengan api sedang kurang lebih 45 menit. Tergantung oven masing2.', 'caca', 'Kasandra Cahyani', '21-05-2019@03:22pm', '- bluder-tape-keju-foto-resep-utama', 'blunder-tape-keju_on_21-05-2019@03:22pm'),
(14, 'Nastar Keju', 'kue nastar lembut resep dari mama', 'Bahan I:\r\n\r\n    175 Gram tepung terigu protein rendah (misal Kunci Biru)\r\n    175 Gram mentega Wijsman\r\n    100 Gram keju cheddar parut\r\n    50 Gram keju edam parut\r\n    25 Gram tepung maizena\r\n    25 Gram gula halus\r\n    3 Kuning telur\r\n    1/4 Sendok teh garam\r\n\r\nBahan II:\r\n\r\n    250 Gram selai nanas khusus nastar (pulung bulat)\r\n    25 Gram keju cheddar parut (untuk taburan)\r\n    3 Butir kuning telur\r\n    1 Sendok teh margarin leleh\r\n\r\nCara membuat nastar keju premium:\r\n\r\n1. Kocok mentega dan gula halus dari bahan I dengan mixer, kemudian tambahkan kuning telur. Setelah tercampur rata, matikan mixer. Masukkan keju cheddar dan edam parut, garam, serta dan tepung-tepungan. Aduk rata dengan spatula.\r\n2. Ambil sedikit adonan (kurang lebih 8 gram), kemudian pipihkan dan isi dengan bulatan selai nanas. Setelah itu tutup dan bulatkan. Lakukan hingga adonan tepung habis.\r\n3. Letakkan nastar di atas loyang yang sudah diolesi margarin. Panggang dalam oven bersuhu 150 derajat Celsius selama 25 menit.\r\n4. Kocok lepas kuning telur dan 1 sendok teh margarin yang sudah dilelehkan dari bahan II untuk olesan.\r\n5. Olesi permukaan nastar dengan campuran kuning telur dan margarin tadi. Taburi sedikit keju parut. Panggang lagi hingga nastar berwarna kuning kecoklatan.\r\n', 'reda', 'Reda Meiningtiyas', '28-05-2019@06:40am', 'nastarkeju', '_on_28-05-2019@06:40am'),
(15, 'Brownies Coklat Kukus', 'Semanis Senyuman Doi', '\r\n\r\n1. Tim coklat batang dan mentega pada panci yang sama. Setelah leleh tambahkan garam. Aduk sampai rata.\r\n\r\n2. Siapkan wadah untuk mengocok telur. Kocok telur dengan pasir hingga berbusa.\r\n\r\n3. Masukkan coklat dan mentega yang telah dilelehkan perlahan-lahan bersamaan dengan susu. Aduk sampai rata.\r\n\r\n4. Kemudian tambahkan tepung terigu sedikit demi sedikit. Aduk hingga rata.\r\n\r\n5. Tuang adonan ke dalam 2 loyang. Sebelumnya olesi dulu loyang dengan mentega.\r\n\r\n6. Kukus selama 20 menit atau sampai matang.\r\n\r\n7. Olesi kue dengan coklat batang dan mentega yang dilelehkan lalu tumpuk.\r\n\r\n8. Brownies siap disajikan.\r\n', 'reda', 'Reda Meiningtiyas', '28-05-2019@01:29pm', '28-05-2019@01:29pm@brownies coklat kukus.jpg', '_on_28-05-2019@01:29pm');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `nama_lengkap`, `level`, `foto`) VALUES
('caca', 'caca@gmail.com', 'caca', 'Kasandra Cahyani', 'admin', 'cacaa - avatar.png'),
('cacaa', 'caca@gmila.com', 'caca123345', 'Cacaaa Cahyani', 'user', 'cacaa - avatar.png'),
('ksndrchyn', 'kasandracahyani@gmail.com', '12345', 'Kasandra Cahyani', 'user', 'ksndrchyn - 229499.jpg'),
('reda', 'redameiningtiyas@gmail.com', 'reda', 'Reda Meiningtiyas', 'user', 'reda - 041b1bf84a7cea82fdec745f3a56de86.jpg'),
('umar', 'umar@gmail.com', 'umar', 'Renaldi Kumar Mahendra', 'user', 'cacaa - avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
