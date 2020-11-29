-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 08:32 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utsrrazy`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `id_user`, `title`, `content`, `deskripsi`, `created_at`, `updated_at`) VALUES
(6, 6, 'Tanggapan InYourdreaM (IYD) dan Jhocam Setelah Keluar T1', 'Tanggal 24 November 2020, organisasi esports asal Korea Selatan, T1 telah melakukan perombakan roster Dota 2 besar-besaran.\r\n\r\nMereka mengeluarkan MP (pelatih), IYD dan juga Jhocam juga keluar dari line-up T1 Dota 2. InYourdreaM telah menanggapi hal ini di podcast Dejet yang diunggah pada tanggal 24 November 2020.\r\n\r\n“Gua udah tahu sebelumnya dari awal November, jadi si March ngasih tau gua gitu kan kaya mereka mau trial si JaCkky (pemain MG.Trust), terus yang gua tahu si Kenny (Xepher) lagi trial juga di T1 tapi itu ga masalah.\r\n\r\nSebenernya intinya tuh gua ga ada cek cok sama T1, ga ada masalah apa-apa dan mereka request gua balik lagi. Gua out juga ibaratnya kaya gua udah menyelesaikan tugas gua. Sebenernya mereka masih nawarin sampai gua dapet tim tapi kontraknya tetep jalan dan kita bisa perpanjang kontraknya kapan aja.\r\n\r\nGua kaya wow gitu, tapi gua bilang sampe Desember aja, tadinya gitu,” jelas InYourdreaM kepada Dejet.\r\n\r\nKami juga menanyakan langsung kepada Jhocam tentang tanggapannya terkait pengumuman ini dan bagaimana masa depannya nanti.\r\n\r\n“Lumayan kecewa sih, cuma mau di kata apa kan. Orang T1 nya juga udah pada ganti yang baru, tinggal Xyun doang yang masih di situ.\r\n\r\nMarch-nya yang bilang langsung ke gua, ga perpanjang kontrak sama gua lagi. Gitu doang sih sisanya gua gatau juga rosternya, gua ga kepo nanya.\r\n\r\nKalau next-nya gua belum tau sih, tapi kalau ada kejelasan nanti gua kasih tau atau gua post mungkin,” jelas Jhocam.', 'T1 secara mengejutkan telah mengumumkan bahwa 2 pemain Indonesia, InYourdreaM (IYD) dan Jhocam sudah keluar dari T1, kira-kira bagaimana tanggapan kedua pemain itu?', '2020-11-29 07:18:11', '2020-11-29 07:18:11'),
(7, 6, 'Xepher dan JaCkky Resmi Bergabung dengan T1!', 'Rumor transfer yang meliputi T1 belakangan ini menjadi kenyataan. Pemain carry asal Laos, Jackky dan pemain support asal Indonesia, Xepher kini telah resmi bergabung dengan T1.\r\n\r\nKabar perekrutan dari JaCkky dan Xepher diumumkan oleh T1 melalui akun media sosial resmi mereka.\r\n\r\nWelcome to the team, JaCkky & Xepher!@DOTA2 팀에 새롭게 합류한 \"JaCkky\" & \"Xepher\" 선수들을 소개합니다. 팬 여러분들의 많은 관심과 응원 부탁드립니다.#T1WIN #T1Fighting pic.twitter.com/ddq1A9IsYb\r\n\r\n— T1 (@T1) November 27, 2020\r\n\r\nPerekrutan kedua pemain ini ke roster Dota 2 T1 bukan merupakan sebuah kejutan yang terlalu besar.\r\n\r\nPerekrutan JaCkky sudah sedikit dibocorkan oleh mantan pemain T1, yaitu inYourdreaM. Ia menceritakan kalau pelatih kepala March memberitahu dirinya kalau tim akan mencoba JaCkky sebagai carry baru dan dirinya terancam dikeluarkan dari tim.\r\n\r\nAlhasil, beberapa hari lalu, inYourdreaM dikeluarkan dari tim dan kini telah resmi digantikan oleh JaCkky.\r\n\r\nSementara itu, untuk Xepher, ia juga sebelumnya sudah mengakui kalau dirinya sedang menjalani trial dengan T1.\r\n\r\nDan kini, pria 24 tahun itu telah resmi bergabung dengan T1 menggantikan posisi dari Jhocam yang dikeluarkan dari tim bersamaan dengan inYourdreaM.\r\n\r\nDengan bergabungnya JaCkky dan Xepher, berikut ini adalah roster Dota 2 T1 saat ini.\r\n\r\nSouliya “JaCkky” Khoompetsavong (carry)\r\nKarl “Karl” Jayme (midlaner)\r\nSamson Enojosa “Sam_H” Hidalgo (offlaner)\r\nKenny “Xepher” Deo (support)\r\nWilson Koh “Poloson” Chin Wei (hard support)\r\nMeskipun kini roster Dota 2 T1 telah lengkap, bukan berarti mereka tak akan membuat beberapa perubahan dalam waktu dekat.\r\n\r\nPemain offlane dan hard support T1 saat ini, yaitu Sam_H dan Poloson santer diisukan bakal digantikan dengan pemain lain.\r\n\r\nCalon terkuat untuk menggantikan Sam_H adalah kompatriotnya, yaitu Kuku. Pemain 24 tahun ini sangat sering diisukan untuk bergabung dengan T1\r\n\r\nSementara untuk Poloson, ia juga sering diisukan bakal diganti. Pemain Indonesia, Whitemon menjadi salah satu calon yang diinginkan penggemar (terutama di Indonesia) untuk mengisi posisi hard support dari T1 menggantikan Poloson.\r\n\r\nIa juga pernah mendapat tawaran untuk trial dari T1, namun tidak diketahui apakah ia menerimanya atau tidak.', 'Setelah di kicknya InYourDream serta Jhocam dari T1', '2020-11-29 07:18:54', '2020-11-29 07:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) UNSIGNED DEFAULT NULL,
  `parent_id` int(11) UNSIGNED DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `no_handphone` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remenber_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `nama`, `password`, `remenber_token`, `created_at`, `updated_at`) VALUES
(6, 'Tekerayak', 'okta.kharis@gmail.com', 'Okta Kharis Setyadi', '$2y$10$LFvITY9DYJ4YnyxPEW.Le.yo4fPh6z/H5nkYlp4DosY40l47pXUna', NULL, '2020-11-29 01:27:02', '2020-11-29 01:27:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
