-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 08:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siubsiplay`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `nama_category` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `nama_category`) VALUES
(1, 'Anime'),
(2, 'Open World'),
(3, 'RPG'),
(4, 'Story Rich'),
(5, 'Fighting'),
(6, 'FPS');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id_game` int(4) NOT NULL,
  `nama_game` varchar(128) NOT NULL,
  `id_category` int(2) NOT NULL,
  `publisher_game` varchar(128) NOT NULL,
  `developer_game` varchar(128) NOT NULL,
  `harga_game` int(11) NOT NULL,
  `tglrilis` date NOT NULL,
  `gambar_game` varchar(128) NOT NULL,
  `url_game` varchar(128) NOT NULL,
  `gameplay_guides` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id_game`, `nama_game`, `id_category`, `publisher_game`, `developer_game`, `harga_game`, `tglrilis`, `gambar_game`, `url_game`, `gameplay_guides`) VALUES
(1, 'One Piece Odyssey', 1, 'Bandai Namco Entertainment, BANDAI NAMCO Entertainment America Inc', 'ILCA', 899000, '2023-01-10', 'op_odyssey.jpg', 'https://store.steampowered.com/app/814000/ONE_PIECE_ODYSSEY/', '<b>1. GAMBARAN UMUM DAN TAHAP PERMAINAN</b><br>\r\nGameplay ONE PIECE ODYSSEY mencakup fase yang berbeda, masing-masing memiliki tujuan tertentu dan menyiratkan kontrol yang berbeda.<br>\r\nOleh karena itu, sepanjang permainan, Anda akan melewati fase eksplorasi , pertempuran , dan sinematik , baik Anda mengikuti misi cerita utama atau memutuskan untuk mengambil sub-misi.<br><br>\r\n<b>2. EKSPLORASI</b><br>\r\nSaat memainkan ONE PIECE ODYSSEY , Anda dapat menjelajahi dan menjelajahi berbagai negeri serta berinteraksi dengan lingkungan.<br><br>\r\n<b>3. MENU</b><br>\r\nMenu ini memungkinkan Anda untuk melihat dan mengubah karakter selama Anda menjelajah, tetapi juga memungkinkan Anda memeriksa item di inventaris Anda, melihat kemajuan misi yang sedang berjalan, dan mengakses peta<br><br>\r\n<b>4. ANTARMUKA PERTEMPURAN</b><br>\r\n<span xss=removed>Memulai pertempuran</span><br>\r\nKetika musuh melihat kru, itu akan terlihat dengan ikon merah di atas kepala mereka. Namun pertarungan hanya dimulai ketika Anda menyentuh grup tersebut. Pada titik tertentu, ketika level kru Anda semakin tinggi, musuh tidak akan menyerang Anda lagi.<br>\r\nMengaktifkan pertarungan dengan mendekati musuh dari belakang akan memberimu keuntungan di awal, pada giliran pertama. Keuntungan yang sama akan diberikan kepada musuh Anda jika mereka menyerang Anda dari belakang.<br><br>\r\n<span xss=removed>Adegan dramatis</span><br>\r\nSelama pertempuran, adegan dramatis acak diaktifkan. Adegan dramatis ini seperti tantangan pertempuran yang akan meningkatkan pengalaman dan jumlah item yang diterima setelah pertempuran, jika tercapai.<br><br>\r\n<span xss=removed>Antarmuka pertempuran</span><br>\r\nAntarmuka pertempuran sedikit berbeda dari antarmuka eksplorasi, karena ada alat pengukur dan informasi baru yang perlu dipertimbangkan selama pertempuran.'),
(2, 'Elden Ring', 3, 'FromSoftware, Bandai Namco Entertainment, BANDAI NAMCO Entertainment America Inc', 'FromSoftware', 599000, '2022-02-25', 'eldenring.jpeg', 'https://store.steampowered.com/app/1245620/ELDEN_RING/', 'Panduan Elden Ring ini mengenai gameplay yang harus kamu pelajari dalam game. Membangun keragaman dalam game FromSoftware’s Souls adalah kekuatan pendorong yang mendorong replayability. <br><br>\r\nSementara Dark Souls Trilogy dan Bloodborne menampilkan susunan bangunan yang sangat banyak, itu tidak ada artinya jika dibandingkan dengan banyaknya pilihan di Elden Ring. <br><br>\r\nDari senjata dan baju besi hingga mantra dan bahkan seni senjata (Ashes of War), game ini menampilkan pilihan builf yang paling banyak.<br><br>\r\nSenjata adalah sumber kehidupan dari semua bangunan di game FromSoftware’s Souls. Dari Ultra Greatsword hingga Mantra Segel, ada banyak senjata dan jenis yang sesuai yang ditawarkan.<br>\r\nSementara kamu mungkin merasa terdorong untuk menggunakan senjata jarak dekat seperti pedang, kapak, dan tombak, gim ini juga menampilkan opsi menarik lainnya, seperti busur, segel, tongkat sihir, dan banyak lagi. Setiap senjata juga memiliki persyaratan stat-nya sendiri yang harus dipenuhi.<br><br>\r\nGame ini tidak menghalangi pemain untuk bereksperimen, namun, mereka harus memperhatikan pilihan mereka. Meskipun game ini memungkinkan seseorang untuk mengalokasikan kembali poin atribut setelah mengalahkan Renalla, ini cukup terlambat.<br><br>\r\nDengan demikian, beralih di antara terlalu banyak jenis senjata dapat mengakibatkan pemborosan sumber daya langka yang tidak perlu. Hal ini menyimpulkan semua yang harus diperhatikan pemain saat membuat bangunan di Elden Ring'),
(3, 'A Space for the Unbound', 4, 'Toge Productions, Chorus Worldwide', 'Mojiken', 99900, '2023-01-19', 'aspacefortheunbound.jpg', 'https://store.steampowered.com/app/1201270/A_Space_for_the_Unbound/', '<b>1. Bicara dengan NPC</b><br>\r\nDi A Space for the Unbound, ada beberapa NPC alias Non Playable Character, karakter yang nggak bisa dimainkan. Nah, NPC di game ini menarik karena mereka bukan hanya pajangan saja, lho. Atma bisa mengajak NPC di game berbicara. Dari NPC, kita bisa banyak dapat info tentang game tersebut.<br><br>\r\n<b>2. Kucing Sahabat Kita</b><br>\r\nDi A Space for the Unbound kita bakal melihat banyak kucing berlalu-lalang, bahkan dari loading game di awal. Ternyata, di sini kucing adalah hewan menggemaskan yang bakal jadi sahabat kita di sepanjang permainan. Begitu alur cerita jadi makin serius, para kucing akan mendapat peran yang lebih penting lagi di sini.<br><br>\r\n<b>3. Eksplorasi Adalah Kunci Utama</b><br>\r\nGenre A Space for the Unbound adalah petualangan. Jadi jelas si tokoh utama, Atma, harus bertualang. Atma harus mengoleksi berbagai item yang akan membantu mereka di momen yang diperlukan. Eksplorasi adalah kunci utama dan kita harus selalu penasaran. Jangan sampai ada titik yang nggak kita kunjungi, jangan sampai ada batu yang nggak kita balik.<br><br>\r\n<b>4. Ada Kisah di Balik Kisah</b><br>\r\nA Space for the Unbound terkesan simpel, tapi begitu kamu main kamu akan menemukan kalau jalan ceritanya dibuat sangat detail. Apalagi kalau sudah masuk ke dongeng demi dongeng yang diceritakan di dalam game. Seolah-olah ada kisah di dalam kisah yang bertumpuk. Seru!<br><br>\r\n<b>5. Buku Merah Jadi Petunjuk Kita</b><br>\r\nBuku merah dari Nirmala ternyata bukan hanya ada di dalam mimpi. Buku ini bakal berguna di sepanjang permainan. Kita bisa melihat semua eksplorasi dan jalan cerita yang sudah kita lewatkan di buku tersebut. Buku merah juga bakal sangat berguna bagi pemain baru. Sering kali mereka tidak tahu harus berbuat apa, tapi buku merah yang akan membantu mereka harus bergerak ke mana.'),
(4, 'Tekken 7', 5, 'Bandai Namco Entertainment, Bandai Namco Studios, ARIKA', 'Bandai Namco Entertainment, Bandai Namco Studios, ARIKA', 399000, '2015-02-18', 'gameimg1702346761.jpg', 'https://store.steampowered.com/app/389730/TEKKEN_7/', '1. Pahami Arti Notasi dengan Benar<br>\r\nSalah satu kendala pemain Tekken 7 pemula adalah memahami arti notasi dengan benar. Notasi dalam game ini dibagi atas berbagai kategori.<br><br>\r\n2. Formula Combo di Tekken 7<br>\r\nSetelah memahami notasi, selanjutnya kamu perlu belajar merangkai gerakan menjadi combo. Untuk melakukannya, kamu perlu memahami formula combo terlebih dahulu.<br><br>\r\n3. Tips Bermain Tekken 7 Untuk Pemula – Pahami Sistem Rage<br>\r\nRage merupakan kondisi saat karakter yang kamu mainkan dalam kondisi sekarat. Rage biasanya digunakan untuk menambah damage dasar atau mengeluarkan Rage Art dan Drive.<br><br>\r\n4. Sesuaikan Cara Bertahan Tiap Serangan<br>\r\nTekken mempunyai beberapa jenis serangan dengan cara menangkis yang berbeda. Serangan Tekken terbagi atas :<br>\r\n<b><u>High</b></u><br>\r\n<b><u>Mid </b></u><br>\r\n<b><u>Low</b></u><br>\r\n<b><u>Special Mid</b></u><br><br>\r\n5. Tips Bermain Tekken 7 Untuk Pemula – Banting Musuh<br>\r\nBanting seringkali digunakan oleh pemain Tekken pemula. Pilihan banting disediakan saat pemain tidak berhasil menyerang, dead lock atau buntu.'),
(5, 'Counter-Strike 2', 6, 'Valve Corporation', 'Valve Corporation', 0, '2023-09-27', 'gameimg1702358633.jpg', 'https://store.steampowered.com/app/730/CounterStrike_2/', '1. Pengoptimalan Asap Dalam Battle<br>\r\nPada versi ini, asap mendapatkan optimalisasi sehingga dapat beradaptasi lebih baik dengan medan pertempuran.\r\n\r\nAsap dalam game ini terlihat lebih realistis dan bisa mengalir keluar melalui pintu dan jendela yang terbuka, tangga, hingga menuju koridor.\r\n\r\nKamu dapat menggunakan peluru dan granat HE untuk menyingkirkan asap dan membuat pandanganmu lebih jelas.\r\n\r\nDari segi grafis, game ini mendapatkan peningkatan yang cukup signifikan dengan detail yang tajam dan pencahayaan yang lebih baik dari sebelumnya.<br><br>\r\n\r\n2. Penyesuaian Tick Rate<br>\r\nTick rate dalam Counter Strike 2 tidak lagi berperan penting dalam pergerakan, tembakan atau melempar objek. Penyesuaian tick-rate adalah peningkatan inti dalam game ini.\r\n\r\nPada versi sebelumnya, server hanya mengevaluasi dunia dalam interval waktu discrete (data berbentuk angka yang dihitung dengan jumlah bilangan bulat) atau disebut dengan ticks.\r\n\r\nUpdate sub-tick pada Counter Strike 2 membuat server untuk mengetahui secara persis kapan gerakan dimulai seperti kapan peluru ditembakkan atau granat dilemparkan.\r\n\r\nSebagai hasilnya, terlepas dari tick rate, pergerakan dan waktumu menembak akan sama responsifnya. Granatmu juga akan selalu mendarat dengan cara yang sama.<br><br>\r\n\r\n3. Peningkatan Maps<br>\r\nMaps dalam game ini telah ubah sepenuhnya dan dibangun ulang dengan memanfaatkan semua Source 2 Tools yang baru dan fitur rendering yang lebih baik.\r\n\r\nDengan menggunakan pencahayaan daari Source 2 yang baru, material, pencahayaan dan refleksi yang ada dalam game terlihat lebih realistis.<br><br>');

-- --------------------------------------------------------

--
-- Table structure for table `gameupdatelogs`
--

CREATE TABLE `gameupdatelogs` (
  `id_logs` int(11) NOT NULL,
  `nama_gamelogs` varchar(60) NOT NULL,
  `judul_patch` varchar(50) NOT NULL,
  `tautan_game` varchar(128) NOT NULL,
  `tanggal_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gameupdatelogs`
--

INSERT INTO `gameupdatelogs` (`id_logs`, `nama_gamelogs`, `judul_patch`, `tautan_game`, `tanggal_update`) VALUES
(1, 'A Space for the Unbound', 'Patch Notes v1.0.33.0', '', '2023-08-08'),
(2, 'Elden Ring', 'Patch Notes Version 1.09.1', '', '2023-04-18'),
(3, 'One Piece Odyssey', 'No Patch title', '', '2023-02-16'),
(4, 'Elden Ring', '1.04', '', '2022-04-19'),
(5, 'Elden Ring', 'Patch Notes Version 1.03.3', '', '2022-04-04'),
(6, 'Elden Ring', '1.03', '', '2022-03-17'),
(7, 'TEKKEN 7', 'TEKKEN 7 - Update', '', '2021-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(1) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `image_user` varchar(128) NOT NULL,
  `id_role` int(1) NOT NULL,
  `regdate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `image_user`, `id_role`, `regdate`) VALUES
(1, 'Kelompok Jawa Barat', 'admin@gmail.com', '$2y$10$oE17uTSlt9f1VWC1l.I9peCcF..H2CHOAuYJI2us.Wy2oKCaiLmZa', 'default.jpg', 1, 1702706244),
(2, 'Muhamad Khadaffy', 'user@gmail.com', '$2y$10$0Us4hNOLTZlOVrRJ4W0hhOunbFT3xjyujShz6tH5mUhjnc39iOIOe', 'default.jpg', 2, 1702711237);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`);

--
-- Indexes for table `gameupdatelogs`
--
ALTER TABLE `gameupdatelogs`
  ADD PRIMARY KEY (`id_logs`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id_game` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gameupdatelogs`
--
ALTER TABLE `gameupdatelogs`
  MODIFY `id_logs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
