-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 11:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbaudio`
--

CREATE TABLE `dbaudio` (
  `id` int(10) NOT NULL,
  `brand` varchar(35) NOT NULL,
  `tipe` enum('IEM','TWS','Headphone','Wireless Headphone') NOT NULL,
  `fungsi` enum('Daily','Meetings','Gaming','Editing') NOT NULL,
  `koneksi` enum('Kabel','Bluetooth','Hybrid') NOT NULL,
  `fitur` enum('0','1','2','3') NOT NULL,
  `mic_q` enum('0','1','2','3','4','5','6') NOT NULL,
  `harga` int(9) NOT NULL,
  `driver` varchar(15) NOT NULL,
  `Character` varchar(35) NOT NULL,
  `Review` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `dbaudio`
--

INSERT INTO `dbaudio` (`id`, `brand`, `tipe`, `fungsi`, `koneksi`, `fitur`, `mic_q`, `harga`, `driver`, `Character`, `Review`, `img`) VALUES
(1, 'Xenns Mangird Tea 2', 'IEM', 'Daily', 'Kabel', '0', '5', 4700000, '9', 'Balanced, fun Punchy.', 'One of highly regarded underrated IEM in the audiophile world. lebar megah jauh. separasi instrumen, timbre, detail treble yang lebih oke. walau aga sedikit merindukan bass impact di tea 1, tapi di tea2 sub bass lebih naik secara kuantitas. teknikalitas luar biasa holographic. semua tone, notes guitar dan keyborad ketika main bareng. bakal terdengar jelas mana yang gitar mana yang keyboard. voc cowo jadi lebih jernih. malah gw lebih suka ini dibanding u12t sometimes.', 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/3/22/3c77b24d-8a8a-4d9a-87d2-c6d268d5dd44.jpg'),
(2, 'Thieaudio Elixir', 'IEM', 'Daily', 'Kabel', '0', '4', 3100000, '7', 'Balance, fun punchy', 'FUCKING SYIT best single DD di harga segini. ever even compare to tanchjim ini anjing banget. bergetar mewah lebar... ga perlu khawatir koherensi. getaran rumble bassnya asyik banget. lebar. posisi atas bawah kanan kiri depan belakangnya jelas banget untuk single DD ini gilak.. faceplat kayunya katanya juga bikin ruang akustiknya gimana gitu. kabel bawaaan sabi banget.', 'https://cdn.shopify.com/s/files/1/0040/7201/3924/products/THIEAUDIOElixir_5.jpg?v=1651134754'),
(3, 'Tin Hifi C3', 'IEM', 'Gaming', 'Kabel', '0', '2', 690000, '7', 'Balance', 'IEM SALAH HARGA INI!. Bagus balance. akan jadi the next raja IEM di under 1 juta. fittingnya terlalu juara. cocok banget buat monitoring panggung. tuningan better than T3 Plus yg punya peak di 10k. kebalikannya C3 punya dip di 10k dan boost di 8k, bener2 jadi balance. asyik. tunignannya fun. jelas.  detail. lebih forward dari T3. soundstagenya masih bagus tapi lebaran T3 Plus sedikit', 'https://cdn.shopify.com/s/files/1/0040/7201/3924/products/C3-5.jpg?v=1669276494'),
(4, 'Kiwi Ears Cadenza', 'IEM', 'Gaming', 'Kabel', '0', '3', 550000, '7', 'V-shape', 'Trendnya emang yang bagus2 jadi murah aja sekarang. kurang lebih suara gak beda jauh sama t3 plus tapi lebih murah.  t3 plus lebih berasa sub bassnya daripada ini. sdikit lebih bright di bagian upper mids. bass nya gak se puncy tangzu. teknikalitas bagusan T3 plus lebih becek lebar. sama vokalnya juga better t3 plus. kabelnya jelek. prefer sih ambil Tin C3 saja.. punch lebih ada seidkit. dan kabel lebi bagus', 'https://cdn.shopify.com/s/files/1/0040/7201/3924/products/IMG_0510_1600x.jpg?v=1668978849'),
(5, 'CCA CRA', 'IEM', 'Meetings', 'Kabel', '0', '1', 209000, '5', 'V-shape', 'Ini bisa menyaingi KZ DQ6. yaahh masih gini2 aja masih agak V Shape. but fun. terlalu early menurut gw naek bassnya dari 300 hertz jadi vokal agak muddy. treblenya sebelas 12 samas KZ DQ6, tapi masih aman2 aja.. dan tentunya koheren karena gak triple driver kaya dq6. better than NRA juga menurt gw', 'https://ae01.alicdn.com/kf/Hc7643705a2a14440983efda659d8bbeeH/CCA-Monitor-Diafragma-Polimer-Tinggi-Earphone-In-Ear-Noise-Cancelling-HiFi-Headset-Olahraga-Gamer-Earbud-Earphone.jpg_640x640.jpg'),
(6, 'Sennheiser Momentum True Wireless 3', 'TWS', 'Daily', 'Bluetooth', '2', '5', 3200000, '10', 'Balance', 'Best sounding TWS yg pernah gw coba out of the box tanpa EQ. EQ cuma 3 band. tp cukup. karena driver in house sennheiser transducernya bagus dalemannnya bikin sendiri dan cakep banget. Truly well balanced Sennheiser Signature sound. Vokalnya kepisah dengan baik. khas sennnheiser. bass lebih ke mid bass dibanding ke sub bass. tp pas. APTX adaptive, udah oke bawa 24bit/96khz flac pun dr Shanling m3x gw. Fitting paling juara', 'https://img.tek.id/img/content/2022/04/27/50959/sennheiser-momentum-true-wireless-3-rilis-dengan-anc-dan-baterai-21-jam-h1SSIcpbwn.jpg'),
(7, '1More Comfobuds Pro', 'TWS', 'Meetings', 'Bluetooth', '2', '5', 1000000, '7', 'Balance', 'Ini ANC nya paling menarik. bisa Strong, Mild dan passthru jadi bisa denger sekeliling sembari denger lagu. Tapi fitur ANC yg strong jg asyik. bisa assign gesture juga  Tap hold mau gimana, Tap 2x mau gimana, tap 3x mau gimana sebebas kita', 'https://headfonics.com/wp-content/uploads/2021/07/1more-comfobuds-pro.jpg'),
(8, 'Soundcore X10', 'TWS', 'Gaming', 'Bluetooth', '2', '3', 848000, '7', 'V Shape/Bassy', 'Mayoritas orang akan suka dengan TWS ini. earhooknya nyaman, dipake lari gak goyah. Ada gaming mode. ada ANC. ada mode relakxasi bantu hitung pernapasan. BASS MEGAH LEBAR.', 'https://cdn.shopify.com/s/files/1/0519/2355/0368/products/6391ace427ade714b70fb966024ae804_f0bbb6f6-0e1c-48b9-b42e-da6e88251fb2_1500x.jpg?v=1655694476'),
(9, 'Soundpeats T3', 'TWS', 'Meetings', 'Bluetooth', '0', '4', 499000, '6', 'V Shape', 'ACTIVE NOISE CANCCELLING paling terjangkau. suara. yaah standar lah. aman tapi gak shouty/peaky. bass agak boomy. soundstage yaaa biasa aja. but does the job well.', 'https://i0.wp.com/www.simplytek.lk/wp-content/uploads/2021/11/SoundPEATS-T3-Sri-lanka-Simplytek-3.jpg?fit=1000%2C1000&ssl=1'),
(10, '1More Pistonbuds', 'TWS', 'Daily', 'Bluetooth', '2', '3', 278000, '5', 'Bassy Warm', 'Ini murmer tapi masi oke. cuma high agak kurang jernih aja. soundstage lebar. ini sudah terjual 300 unit lebih di akun tiktok gw', 'https://cf.shopee.co.id/file/e93781aaeedb57fcfd8d2a7065f567cf'),
(11, 'Sennheiser HD650', 'Headphone', 'Editing', 'Kabel', '0', '0', 7500000, '8', 'Neutral', 'Industry standard for mixing sih ini. natural timbre. dan lebih bener. dari pada hd600. lebih musical. lebih asyik. trebelnya lebih aman daripada hd600. dan ini lebih smoootthhh. natural banget sih memang Open back headphone sennheiser seri HD650 ini. tapi lo gak akan salah beli seri HD600, HD650, or HD58x, cuma HD660s aja yang gw gak suka. aneh.', 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/471755/14527814_800.jpg'),
(12, 'Sennheiser HD600', 'Headphone', 'Gaming', 'Kabel', '0', '0', 6349000, '8', 'Neutral, Less bass, Bright', 'Industry Standard buat mixing dan audiophile since 1994. lu bisa ngedenger kesalahan kekurangan mixing di sini. mantep bgt. kalo belom biasa dengerin neutral headphone gini. ngerasa basssnya kurang. tp lo jadi bisa DENGERIN APA YANG AUDIO ENGINEER INGIN KALIAN DENGARKAN. Listen to the music exactly the way the mixer engineer wants you to hear. vokal centric juga asyik. lebih sempit dibanding HD650 soundstagenya. PERCAYALAH bahkan banyak audiophile dan audio engineer yg stuju. Headphone HD series ini udah lebih bagus dibanding headphone lain ygbahkan harganya 2000 dollar ', 'https://cf.shopee.co.id/file/fb3878971120aad8b9804c3106b12623'),
(13, 'Phillips SHP9500', 'Headphone', 'Meetings', 'Kabel', '0', '0', 1500000, '7', 'Neutral, cenderung, bright', 'Kalo lu baru mau belajar nyobain headphone OPEN BACK. banyak yang merekomendasikan SHP9500 ini. dan sangat amat dihargai oleh audiophile juga sebagai entry level Open Back headphone. Mid Centric', 'https://images.tokopedia.net/img/cache/500-square/hDjmkQ/2022/3/22/28165034-3c9d-4009-9c32-ac0546377434.jpg'),
(14, 'ISK HD 9999', 'Headphone', 'Editing', 'Kabel', '0', '5', 749000, '6', 'Neutral', 'Salah satu headphone dengan flat neutral tuning buat mixing juga. walau ada eary bump sedikit after 200hz. tapi bisa kalian liat di sini juga audio engineernya PAMUNGKAS pakai headphone ini buat mixing cek videonya di sini https://www.youtube.com/watch?v=sedvmpQkJw dan dengerin aja. mixingan pamungkas mau live maupun rekaman studionya juga bagus2 kan mixingannnya. ', 'https://mp3store.pl/213263-large_default/isk-hd9999-sluchawki-zamkniete.jpg'),
(15, 'Tascam TH-02', 'Headphone', 'Meetings', 'Kabel', '2', '0', 550000, '6,5', 'Neutral cenderung midrange-centric.', 'Ini direkomendasikan oleh mas ki waktu gw kerja di NET. kalo lagi pergi shooting mereka males bawa headphone mahal dan buat mobilemereka bawa headphone ini. mid frequency centric. gak true flat but sangat ngebantu buat ngemixing. utamanya vokal', 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//100/MTA-9228925/tascam_tascam_th-02_-_th_02_multi-used_studio_grade_closed_back_headphone_full01_o8v6mdll.jpg'),
(16, 'Edifier Stax S3', 'Wireless Headphone', 'Daily', 'Bluetooth', '2', '5', 300000, '10', 'Neutral, Fast', 'BEST SOUNDING WIREESS HEADPHONE. yes just for the sound. I lovee this better than Sennheiser momentum 4. karena driver plana darn tuningan neutralnya cakep banget. neutral bukan berarti gak ada bass. ini bener2. dengerin musik apa adanya seperti yang diinginkan sang engineer. vokalnya smooth. forward, dan gema reverb buntut reverb, getaran snare drum berasa semua detail jernih. bass cepet. kurangnya gak ada ANC aja. but I\'m fine. gak ada EQ juga tp suaranya emang udah gw paling suka. Dapat 2 earpads mantep2 dua duanya ngebass yg kulit. gw pake yg ice tapi lebih adem dan nyaman', 'https://ae01.alicdn.com/kf/Sa86bd8fdabce4d4e9ffcff10b46af614Z/Edifier-STAX-SPIRIT-S3-Headphone-Nirkabel-Sistem-Audio-Magnetik-Planar-Portabel-Audio-Hi-res-80-Jam.png_640x640.png'),
(17, 'Bose QC45', 'Wireless Headphone', 'Gaming', 'Bluetooth', '2', '3', 5500000, '8', 'V-Shape', 'Amar Bose adalah penemu ANC buat headphone consumer di dunia. jadi tidak bisa diragukan lagi ini kualitasnya king of ANC. sialnya micnya kurang oke jadi tetep mending ambil sony, ANC bagus, Mic . driver kurang bagus suaranya. tapi bisa di EQ aman. dan nyaman dan ringan juga ', 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/12/20/96aa6b4d-c090-4247-a46a-6c3d576e8c36.jpg'),
(18, 'Sennheiser HD450BT', 'Wireless Headphone', 'Gaming', 'Bluetooth', '2', '4', 2199000, '7,5', 'Balance', 'Bagus, cukup balance. ikutin eq gw juga udah enak. kerennya sennheiser ini drivernya masih ada karakter2 warmth midrangenya itu masih berasa bagus. walau harganya lebih murah. bassnya gak se deep Momentum 4. midrangenya juga. tapi suaranya masih agak searah.', 'https://cdn.shopify.com/s/files/1/1642/2999/products/HD_450BT_Black_1000x.jpg?v=1677772449'),
(19, 'Sony Wh-CH710n', 'Wireless Headphone', 'Daily', 'Bluetooth', '2', '2', 1549000, '6,5', 'Bassy', 'Too bassy, denger suara orang ngomong agak susah, terus suara micnya juga kurang dibanding sennheiser. ANC better than hd450bt dan fitting ruang telinga lebih gede juga.', 'https://www.sony.co.id/image/67c435ccf7da70b63f8d6195ac04269c?fmt=pjpeg&bgcolor=FFFFFF&bgc=FFFFFF&wid=2515&hei=1320'),
(20, 'Edifier W800 BT PLUS', 'Wireless Headphone', 'Meetings', 'Bluetooth', '0', '4', 408000, '7', 'Balance', 'keluaran baru dari seri Non plus. better ini menurut gw dibanding w820nb, yg gak ada APTX, dan lobang jack. bassnya pas kalo ngejepitnya pas. kalo agak dilonggarin agak berkurang bassnya. call quality aman. better than punya TWS yang 300an sih or even 600-700an. micnya juga bagus banding TWS yang up to 1 jutaan. ga ada AAC, APTX dan SBC only belom coba di iPhone. di Macbook bisa', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbaudio`
--
ALTER TABLE `dbaudio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbaudio`
--
ALTER TABLE `dbaudio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
