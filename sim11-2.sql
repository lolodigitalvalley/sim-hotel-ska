-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 11, 2014 at 08:28 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sim`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `id_hotel` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_jaringan` int(11) NOT NULL,
  `nama_hotel` varchar(100) NOT NULL,
  `nama_seo` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_kelurahan` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `telphon` varchar(20) NOT NULL,
  `website` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `min_harga` double NOT NULL,
  `max_harga` double NOT NULL,
  `deskripsi` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_hotel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123 ;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `username`, `id_kategori`, `id_jenis`, `id_jaringan`, `nama_hotel`, `nama_seo`, `alamat`, `id_kecamatan`, `id_kelurahan`, `foto`, `latitude`, `longitude`, `telphon`, `website`, `email`, `min_harga`, `max_harga`, `deskripsi`, `status`) VALUES
(1, 'admin', 5, 6, 2, 'Sahid Jaya', 'sahid-jaya', 'Jl. Gajah Mada No. 82, Solo 57132, Jawa Tengah-Indonesia', 2, 16, '4587sahid_jaya_solo.jpg', '-7.562439', '110.81733', '0271-644144', 'http://www.sahidjayasolo.com/', 'info@sahidjayasolo.com', 750000, 4000000, '<p style="text-align:justify">HSJS yang beralamat di Jl. Gajahmada No 82 Solo ini memiliki jumlah kamar sebanyak 136 dengan 4 tipe kamar yakni Superior, Deluxe, Executive dan Presiden Suite. Untuk melengkapi kebutuhan MICE maupun Wedding, HSJS dilengkapi dengan 6 function room yang masing-masing memiliki kapasitas yang berbeda. Bukan hanya MICE lokal namun MICE bertaraf international pun beberapa kali digelar di HSJS contohnya IAHA (International Associations of HIstorian of Asia) yang sudah terlaksana dengan aman pada juli 2012 lalu selama sepekan dan diikuti olehperwakilan dari 25 negara. Hotel yang juga merupakan pelopor di kota Solo ini, tak diragukan lagi dalam pelayanan. Terbukti selama 47 tahun HSJS tetap bisa konsisten bertahan ditengah persaingan hotel yang kian marak berkembang di Kota Solo. HSJS secara intens pula mengadakan training-training bagi intern karyawan-karyawati apabila terjadi kebakaran dan sehingga tamu pun merasa lebih terjamin keamanan dan kenyamanannya.</p>\r\n\r\n<p style="text-align:justify">HSJS memiliki posisi yang strategis di tengah kota. Tidak jauh dari pusat pemerintahan, pusat budaya, terminal bus, stasiun kota dan lain-lain. Hotel berbintang 5 ini dilengkapi dengan berbagai fasilitas seperti Swimming pool, Fitnes Center, laundry service, massage traditional dan spa, area parkir yang luas, lounge dengan live entertainment dan karaoke, dan masih banyak lagi.</p>\r\n\r\n<p><strong>Distance of point of interest: </strong></p>\r\n\r\n<ul>\r\n	<li>Batik Center : 2 km (10 minutes)</li>\r\n	<li>Klewer Market : 4 km (15 minutes)</li>\r\n	<li>Royal Kraton : 4 km (15 minutes)</li>\r\n	<li>Bus Station : 1,5 km (7 minutes)</li>\r\n	<li>Railway Station : 0,5 km (3 minutes)</li>\r\n	<li>Airport Adi Sumarmo :15,5 km (20 minutes)</li>\r\n</ul>\r\n', '1'),
(2, 'admin', 5, 6, 2, 'KUSUMA SAHID PRINCE HOTEL SOLO', 'kusuma-sahid-prince-hotel-solo', ' Jl. Sugiyopranoto No. 8, Solo 57111, Indonesia ', 3, 25, '1171griyadi_kusuma_solo.jpg', '-7.580796', '110.829899', '0271-646356 ', 'http://kusumasahid.com', '', 873353, 14495000, '<p>Bangunan Kusuma Sahid Prince Solo Hotel yang dahulu merupakan tempat kediaman bangsawan memancarkan daya pikat tradisional Jawa di lokasi tenang di luar pusat kota. Hotel ini terletak di Jl. Sugiyopranoto 20, Mangkunegaran, Solo (surakarta) lima belas menit dari airport dan menciptakan suasana bak pesta para bangsawan dengan putri - putri keraton dan musik gamelan. Meskipun para bangsawan tidak lagi meninggali kediaman ini, suasana kebangsawanan dan orkestra gamelan tetap ada, dengan musik live yang menghibur setiap malam di Grand Hall yang berasal dari abad ke-19. Terdiri dari pendopo tradisional dan beberapa sayap baru modern, seluruh area hotel ini memancarkan keagungan dan ketenangan. Kamar tamu elegan, kolam renang luas dan tersedia hidangan seafood yang sesuai bagi para bangsawan. Kusuma Sahid Prince Solo Hotel terletak di luar pusat kota, namun tersedia penjemputan bandara gratis dan tersedia taksi untuk mengantar para tamu berbelanja batik atau menuju salah satu pusat perbelanjaan di Solo. Harga kamar mulai dari Rp 650.000,00 per malam.</p>\r\n\r\n<p>Tarif Per Malam :</p>\r\n\r\n<p>Royale Suite Rp14.495.000<br />\r\nLuxury Rp3.025.000<br />\r\nBungalow Rp2.420.000<br />\r\nExecutive Suite Rp2.178.000<br />\r\nSuperior Rp1.089.000<br />\r\nCabanas Rp968.000<br />\r\nStandartDeluxe Rp873.353<br />\r\nExtraBed Rp200.000</p>\r\n', '1'),
(3, 'admin', 4, 6, 1, 'SOLO PARAGON HOTEL & RESIDENCE', 'solo-paragon-hotel--residence', 'Jalan Dr. Sutomo Kelurahan Mangkubumen, Kecamatan Banjarsari, Surakarta 57125', 2, 24, '813solo-paragon-hotel-and-residences.jpg', '-7.565364', '110.818232', '0271-7655888', 'http://soloparagonhotel.com/', '', 373000, 1453500, '<p>Solo Paragon Hotel &amp; Residences menjamin penginapan yang menyenangkan bagi para tamu di Solo (surakarta) baik untuk bisnis maupun plesir. Terletak di Jalan Dr. Sutomo hanya 15 km dari sini, hotel berbintang 4 ini dapat secara mudah diakses dari bandara. Surga untuk beristirahat dan bersantai, hotel ini akan menyediakannya kepada Anda dan terletak hanya beberapa langkah dari beberapa atraksi kota ini seperti Mangkunegaran Square, Kampung Kauman Batik, Istana Sutan. Untuk menyebutkan beberapa fasilitas hotel ini, terdapat wi-fi di tempat-tempat umum, pusat bisnis, layanan laundry/dry cleaning, lift, fasilitas rapat . Hotel ini memiliki 237 kamar tamu yang indah, masing-masing termasuk internet wireless (gratis), TV satelit/kabel, air botol gratis, ruangan bebas rokok, AC. Baik Anda adalah orang yang senang fitness atau hanya ingin bersantai setelah beraktivitas sepanjang hari, Anda akan dihibur dengan fasilitas rekreasi kelas atas seperti klub anak, kolam renang (luar ruangan), pijat, taman, gym/fasilitas kebugaran. Harga kamar mulai dari Rp 485.000,00 per malam.</p>\r\n', '1'),
(4, 'admin', 4, 6, 3, 'Novotel', 'novotel', 'Jalan Slamet Riyadi No 272 Kelurahan Timuran, Kecamatan Banjarsari, Surakarta 57131', 2, 12, '8258novotel_solo.jpeg', '-7.570267', '110.825034', '0271-724555', 'http://www.novotel.com', '', 587000, 12500000, '<p>Terletak di Jl. Slamet Riyadi no 272 Solo, telpon 0271-724555. Novotel Solo Hotel bergaya modern dan elegan terletak dekat dengan Solo Grand Mall dan Keraton Surakarta. Hotel ini terletak di pusat kota dan hanya beberapa menit berjalan kaki menuju mall, pasar kain batik serta pilihan restoran dan sarana rekreasi di Taman Sriwedari. Untuk perjalanan yang lebih jauh, para pengunjung dapat menggunakan taksi dan becak yang banyak terdapat di depan hotel. Hotel ini berada di bangunan tradisional Jawa dan sesampainya di Lobby, para tamu akan disambut dengan pintu masuk megah berdesain tradisional dan kontemporer. Kamar tamu di hotel ini memiliki pencahayaan dan sirkulasi yang baik, dengan suasana tenang yang berbeda dari pusat kota Solo yang sibuk. Business center yang terdapat di hotel akan dapat membantu pengaturan penerbangan pagi hari dan layanan antar menuju airport. Para tamu akan menikmati lokasi sentral, pilihan bersantap dan juga sarana rekreasi di Novotel Solo Hotel. Harga kamar mulai dari Rp 400.000,00 per malam.</p>\r\n', '1'),
(5, 'admin', 3, 6, 4, 'Ibis', 'ibis', 'Jl. Gajah Mada No 23 Solo', 2, 12, '2260ibis_solo.jpg', '-7.566481', '110.818103', '0271-724555', 'http://www.ibis.com', 'info@ibis-solo.com', 98500, 12500000, '<p>Terletak di Jl. Gajah Mada no 23, telpon 0271-724555. Terletak di pusat kota, dekat dengan stasiun kereta dan bandara sehingga sangat menarik menjadikan Ibis Solo Hotel sebagai tujuan liburan atau bisnis Anda di Solo. Ibis Solo Hotel menawarkan serangkaian promosi dan tarif akhir pekan ayang menarik. Hotel Ibis didukung oleh 800 jaringan hotel sedunia, salah satunya di Solo menawarkan seluruh layanan modern dengan harga hemat. Dilengkapi dengan sarana WiFi 24 jam, makan pagi ala prasmanan, parkir, bar serta restoran. Harga kamar mulai dari Rp 380.000,00 per malam.</p>\r\n', '1'),
(6, 'admin', 2, 6, 1, 'GRAND ORCHID HOTEL', 'grand-orchid-hotel', 'Jl.Gajah Mada No 29 Kel Timuran, Kec Banjarsari, Surakarta 57131', 2, 12, '8765GrandOrchid.jpg', '-7.5671', '110.81775', '0271-731888', '', '', 100000, 2500000, '<p>Bertempat di lokasi utama Solo (surakarta), Grand Orchid Hotel menempatkan segala sesuatu yang kota tawarkan hanya di luar pintu depan Anda. Hotel ini menawarkan berbagai fasilitas untuk memastikan Anda menghabiskan waktu dengan spesial. Layanan kamar, lift, wi-fi di tempat-tempat umum, ruang merokok , restoran ada untuk kenikmatan para tamu. AC, meja tulis, koran harian, TV satelit/kabel, air botol gratis dapat ditemukan di setiap kamar. Pulihkan diri dari satu hari penuh tamasya dalam kenyamanan kamar Anda atau manfaatkan fasilitas rekreasi di hotel, termasuk taman, spa. Temukan semua yang Solo (surakarta) tawarkan dengan membuat Grand Orchid Hotel sebagai pangkalan Anda.</p>\r\n\r\n<p>Harga Kamar :&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Royal Orchid Rp2.500.000</li>\r\n	<li>Executive Rp1.260.000</li>\r\n	<li>SuiteRoom Rp575.000</li>\r\n	<li>Deluxe Rp325.000</li>\r\n	<li>SuperiorR Rp295.000</li>\r\n	<li>*Extra Bed Rp100.000</li>\r\n</ul>\r\n', '1'),
(7, 'admin', 2, 6, 1, 'LAMPION HOTEL', 'lampion-hotel', 'Jl Dr. Rajiman No 299 RT 03/VIII Surakarta 57141', 4, 34, '7810lampion.jpg', '-7.572419', '110.814333', '0271-7654888', 'http://lampionhotel.com/', '', 290000, 375000, '<p>Lampion Hotel Solo, terletak di Adi Sucipto, Solo (surakarta), adalah pilihan yang populer untuk wisatawan. Hanya 20. Km dari sini, hotel bintang 3 ini dapat secara mudah diakses dari bandara. Dengan atraksi utama kota ini seperti Stadion Bhinneka, Museum Radya Pustaka, Taman Sriwedari yang terletak dekat, pengunjung akan sangat menyukai lokasi hotel ini.</p>\r\n', '1'),
(8, 'admin', 2, 6, 1, 'HOTEL KUSUMA KARTIKA SARI', 'hotel-kusuma-kartika-sari', 'Jl. Ir. Sutami No 63 Kel Pucangsawit, Kec Jebres, Surakarta', 1, 5, '5887kartikasari.jpg', '-7.562964', '110.849701', '0271-656861', 'http://hotelkusumakartikasari.com/', 'marketing@hotelkusumakartikasari.com', 175000, 550000, '<p>Terletak di bagian timur kota Solo, di jalur utama Solo - Surabaya. Lokasinya tidak jauh dengan Universitas Sebelas Maret Surakarta (UNS). Taman Budaya Surakarta (TBS) dan Sekolah Tinggi Seni Indonesia (STSI). Hanya 1 km dari sungai Bengawan Solo yang terkenal berikut Taman Satwa Taru Jurug.<br />\r\n<br />\r\n<strong>Hotel Kusuma Kartikasari</strong> adalah pilihan tepat sebagai sarana representatif untuk keperluan rapat/meeting ataupun perhelatan anda.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Harga Kamar :</p>\r\n\r\n<p>Executive Lt.1 Rp550.000<br />\r\nExecutive Lt.2 Rp385.000<br />\r\nExecutive Cott Rp250.000<br />\r\nExecutive Rp275.000<br />\r\nDeluxe Rp200.000<br />\r\nBusiness Std Rp175.000<br />\r\n*Extra Bed Rp60.000</p>\r\n', '1'),
(9, 'admin', 2, 6, 1, 'FAVE HOTEL', 'fave-hotel', 'Jl. Adi Sucipto No 60 Surakarta', 2, 23, '4694fave.jpg', '-7.552139', '110.795224', '0271-719222', 'http://www.favehotels.com', '', 350000, 650000, '<p>Menawarkan akomodasi berkualitas di melakukan aktivitas bisnis, kebudayaan, melihat-lihat distrik Solo (surakarta), favehotel Adi Sucipto Solo adalah pilihan populer bagi para wisatawan plesir dan bisnis. Dari sini, para tamu dapat menikmati akses mudah ke semua hal yang dapat ditemukan di sebuah kota yang hidup. Bagi Anda yang ingin bereksplorasi keluar, Stasiun Purosari, Solo Square, Stadkon Manahan hanyalah beberapa atraksi yang tersedia bagi para pengunjung.</p>\r\n\r\n<p>Gunakan kesempatan untuk menikmati pelayanan dan fasilitas yang tak tertandingkan di hotel Solo (surakarta) ini. Untuk menyebutkan beberapa fasilitas hotel ini, terdapat tempat parkir mobil, fasilitas rapat , lift, transfer bandara/hotel, layanan laundry/dry cleaning.</p>\r\n\r\n<p>Nikmati fasilitas kamar berkualitas tinggi, termasuk AC, TV satelit/kabel, televisi LCD/layar plasma, internet wireless (gratis), meja tulis, untuk membantu Anda mengumpulkan tenaga kembali setelah lelah beraktivitas. Lagipula, beberapa persembahan rekreasi dari hotel ini akan menjamin Anda jauh dari kebosanan selama penginapan Anda. Ketika Anda mencari penginapan yang nyaman di Solo (surakarta), jadikanlah favehotel Adi Sucipto Solo rumah Anda ketika Anda berlibur.</p>\r\n', '1'),
(10, 'admin', 2, 6, 1, 'ORANGE HOTELS & VILLAS', 'orange-hotels--villas', 'Jl. Ir. Sutami No 104 RT 02/I Kel Pucangsawit, Kec Jebres, Surakarta', 1, 5, '8947orange2.jpg', '-7.564392', '110.85491', '0271-661166', '', '', 128000, 350000, '', '1'),
(11, 'admin', 2, 6, 1, 'HOTEL SYARIAH ARINI', 'hotel-syariah-arini', 'Jl. Slamet Riyadi No 361 RT 05/V Kel Purwosari, Kec Laweyan, Surakarta', 5, 43, '', '-7.563834', '110.800213', '0271-716525', '', '', 300000, 625000, '<p>Standard Rp300.000<br />\r\nSuperior Rp385.000<br />\r\nDeluxeRoom Rp475.000<br />\r\nFamilyRoom Rp625.000<br />\r\n*Extra Bed 150.000</p>\r\n', '1'),
(12, 'admin', 6, 5, 1, 'POSE IN HOTEL', 'pose-in-hotel', 'Jl. Monginsidi No 125 Kel Kestalan, Kec Banjarsari, Surakarta', 2, 16, '5458PoseIn.jpg', '-7.55821', '110.821155', '0271-666199', '', '', 290000, 750000, '<p>Untuk wisatawan yang ingin melihat pemandangan dan isi kota Solo (surakarta), Pose In Hotel Solo adalah piliahan terbaik. Dari sini, para tamu dapat menikmati akses mudah ke semua hal yang dapat ditemukan di sebuah kota yang hidup. Untuk pilihan jalan-jalan dan atraksi lokal, Anda tidak perlu pergi jauh-jauh karena hotel ini terletak dekat dengan Stasiun Balapan, Stasiun Bus Tirtonadi, Istana Sutan.</p>\r\n\r\n<p>Gunakan kesempatan untuk menikmati pelayanan dan fasilitas yang tak tertandingkan di hotel Solo (surakarta) ini. Untuk kenyamanan para tamu, hotel ini menawarkan toko, restoran, coffee shop, transfer bandara/hotel, parkir valet.</p>\r\n\r\n<p>Hotel ini memiliki 56 kamar tamu yang indah, masing-masing termasuk shower, internet wireless (biaya dikenakan), internet (wireless), AC, internet wireless (gratis). Hotel ini menawarkan fasilitas rekreasi yang menyenangkan seperti spa untuk menjadikan penginapan Anda tak terlupakan. Temukan percampuran pelayanan profesional dan sejumlah fasilitas di Pose In Hotel Solo.</p>\r\n', '1'),
(13, 'admin', 1, 6, 1, 'GRAHA INDAH BARU', 'graha-indah-baru', 'Jl. Dr. Setiabudi No 39 Kel Gilingan, Kec Banjarsari, Surakarta', 2, 18, '1753grahaindah.jpg', '-7.553707', '110.819424', '0271-714755', '', '', 150000, 220000, '<p>Graha Indah Hotel memiliki lahan parkiran yang sangat luas. Bangunan hotel terdiri dari 3 lantai, dan biasanya penuh saat musim liburan terutama Lebaran. Pelayanan hotel cukup ramah dan fasilitasnya cukup lengkap.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Harga Kamar :<br />\r\nDeluxe Rp220.000<br />\r\nModerate Rp220.000<br />\r\nStandart Rp150.000</p>\r\n', '1'),
(14, 'admin', 1, 6, 1, 'HOTEL INDAH JAYA', 'hotel-indah-jaya', 'Jl. Hasanudin No 116-118 Kel Punggawan, Kec Banjarsari, Surakarta', 2, 15, '3463indahjaya.jpg', '-7.558354', '110.818904', '0271-717445', 'http://www.indahjayahotel.com/', 'info@indahjayahotel.com', 245000, 500000, '<p>Hotel Indah Jaya adalah sebuah hotel yang berlokasi di Jl. Hasanudin 116-118, Solo, Jawa Tengah. Hotel Indah Jaya berada ditengah pusat kota solo. Hanya memerlukan waktu 1 menit dari stasiun kereta api Balapan, dan 15 menit dari bandara Adi Soemarmo untuk mencapai Hotel Indah Jaya. Lokasinya yang berada di pusat kota, memberikan kemudahan akses bagi para tamu untuk menuju ke tempat-tempat wisata di sekitar kota solo, ataupun pusat-pusat bisnis kota solo yang sangat strategis dengan mall, ATM, tempat ibadah, dan tempat-tempat pembelian oleh-oleh khas Kota Solo.</p>\r\n\r\n<p>Hotel Indah Jaya menyediakan berbagai fasilitas yang lengkap untuk kenyamanan anda. Kami juga berkomitmen untuk memberikan layanan yang sebaik mungkin dengan tetap memberikan harga yang relatif murah untuk anda.<br />\r\n<br />\r\nNikmati kebersamaan liburan, belanja ataupun dinas anda bersama kami. Anda juga dapat menikmati wisata budaya dengan mengunjungi Kraton Kasunanan Surakarta, Pura Mangkunegaran, Tawangmangu, dan juga Candi Sukuh dengan menginap bersama Hotel Indah Jaya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Harga kamar :</p>\r\n\r\n<p>Standart Rp245.000<br />\r\nJr.Superior Rp265.000<br />\r\nSuperior Rp300.000<br />\r\nDeluxe Rp345.000<br />\r\nFamily Rp500.000<br />\r\n*ExtraBed Rp90.000</p>\r\n', '1'),
(15, 'admin', 1, 6, 1, 'SANASHTRI HOTEL', 'sanashtri-hotel', 'Jl. Sutowijoyo No 45 Kel Penumping, Kec Laweyan, Surakarta', 5, 41, '3075sanasatri.jpg', '-7.566418', '110.807054', '0271-715200', '', '', 150000, 295000, '<p>Dirancang untuk wisata plesir dan bisnis, Hotel Sanashtri terletak strategis di Slamet Riyadi; salah satu daerah lokal terkenal. Dari sini, para tamu dapat menikmati akses mudah ke semua hal yang dapat ditemukan di sebuah kota yang hidup. Hotel modern ini terletak di dekat atraksi populer kota ini seperti Solo Grand Mall, Stadion Maladi, Taman Sriwedari.</p>\r\n\r\n<p>Gunakan kesempatan untuk menikmati pelayanan dan fasilitas yang tak tertandingkan di hotel Solo (surakarta) ini. Hotel ini menyediakan akses ke sejumlah pelayanan, termasuk layanan laundry/dry cleaning, tempat parkir mobil, coffee shop, wi-fi di tempat-tempat umum, ruang keluarga.</p>\r\n\r\n<p>Akomodasi hotel telah dipilih secara cermat demi kenyamanan maksimal, dengan adanya air botol gratis, televisi, meja tulis, AC, shower di setiap kamar. Sepanjang hari Anda dapat menikmati atmosfir santai dari taman. Hotel Sanashtri adalah pilihan yang cerdas bagi para pelancong ke Solo (surakarta), dengan menawarkan penginapan yang santai setiap saat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Harga kamar :</p>\r\n\r\n<p>Family Room Rp295.000<br />\r\nStandart Room Rp245.000<br />\r\nSingle Room/Fan Rp150.000</p>\r\n', '1'),
(16, 'admin', 1, 6, 1, 'WISATA INDAH HOTEL', 'wisata-indah-hotel', 'Jl. Slamet Riyadi No 173 Kel Kemlayan, Kec Serengan, Surakarta', 4, 34, '1695wisataindah.jpg', '-7.570139', '110.820901', '0271-646770', '', '', 195000, 300000, '', '1'),
(17, 'admin', 1, 3, 1, 'DE SOLO HOTEL', 'de-solo-hotel', 'Jl. Dr. Sutomo No 8 Surakarta', 2, 12, '9997desolo.jpg', '-7.565519', '110.80989', '0271-726788', 'http://www.desolohotel.com/', 'info@desolohotel.com', 624052, 624052, '<p>Anda dapat bersantai pada hotel dengan 36 kamar yang dirancang untuk menciptakan kenyamanan. Setiap kamar dilengkapi dengan TV LCD/plasma screen, non smoking rooms, air conditioning, bathrobes, daily newspaper. Hotel menyediakan 24 jam room service, coffee shop, bar/pub, laundry service/dry cleaning, fasilitas meeting, restoran, room service, safety deposit boxes sebagai pelengkap fasilitas dan servis yang mewah. Kembalikan kebugaran tubuh anda dengan pijat, spa, garden agar anda merasa nyaman dan santai. Untuk reservasi anda di De Solo Boutique Hotel and Resto, silahkan mengisi formulir secure online booking form kami, cantumkan tanggal kedatangan anda lalu klik kirim.</p>\r\n', '1'),
(18, 'admin', 3, 6, 1, 'HOTEL INDAH PALACE SOLO', 'hotel-indah-palace-solo', 'Jl. Veteran No 284 Kel Tipes, Kec Serengan Surakarta 57154', 4, 37, '4200IndahPalace.jpg', '-7.578877', '110.808989', '0271-711011', 'http://www.hotelindahpalace.com', 'indahpalace@yahoo.com', 850000, 526700, '<p>Terletak di Adi Sucipto, Hotel Indah Palace adalah titik awal yang sempurna untuk menjelajahi Solo (surakarta). Properti ini memiliki berbagai fasilitas yang membuat Anda tinggal dan menginap dengan menyenangkan. Dapat ditemukan di hotel ini, yaitu ruang keluarga, pusat bisnis, restoran, lift, layanan kamar. Dirancang untuk kenyamanan, kamar tamu menawarkan kulkas, air botol gratis, koran harian, meja tulis, TV satelit/kabel untuk memastikan malam yang nyenyak. Nikmati fasilitas rekreasi di hotel, termasuk kolam renang (dalam ruangan), pantai privat, pijat, spa, sebelum masuk ke kamar untuk beristirahat yang nyaman. Staf yang ramah, fasilitas yang istimewa dan dekat dengan semua yang Solo (surakarta) tawarkan, merupakan tiga alasan utama Anda harus tinggal di Hotel Indah Palace.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Harga Kamar :</p>\r\n\r\n<p>Suite Rp850.000<br />\r\nBoutique Rp665.500<br />\r\nExecutive Rp602.500<br />\r\nBusiness Rp526.700</p>\r\n', '1'),
(19, 'admin', 3, 6, 1, 'AGAS INTERNASIONAL SOLO', 'agas-internasional-solo', 'Jl. Dr. Moewardi No 44 Kel Mangkubumen, Kec Banjarsari, Surakarta 57139', 2, 24, '7798Agas.jpg', '', '', '0271-714888', 'http://www.agas.co.id/', 'marketing@agas.co.id', 475000, 975000, '<p><strong><a href="http://www.hargahotel.com/hotel/destination/solo.html" style="font-family: Tahoma, Arial, sans-serif; line-height: 16px; text-decoration: none; color: rgb(175, 0, 0); outline-style: none; outline-width: initial; outline-color: initial; ">Hotel di Solo</a>&nbsp;yang berbintang tiga ini&nbsp;</strong>terletak di pusat kota di Jl.Dr Muwardi 44 Solo dekat dengan Kompleks Olahraga Manahan Solo dan 10 menit dari bandara. Hotel Agas Internasional sangat ideal untuk perjalanan bussines karena lokasi yang hanya dapat ditempuh hanya 5 menit dari pusat perbelanjaan. Tentu cocok bagi Anda yang mengutamakan efisiensi waktu.<br />\r\n<br />\r\nDi hotel ini Anda dapat menikmati fasilitas-fasilitas yang ada di hotel ini, misalnya Kotak deposit, 24 jam room service, Pub/bar, Laundry, transportasi gratis dari bandara maupun stasiun kereta api, bagi Anda yang membawa mobil, pihak hotel siap mencucinya secara gratis. Wah, cukup menarik bukan, banyak gratisnya. Di tiap 66 kamar berjenis Deluxe dan Suite yang mewah dan lega ini terdapat shower, TV, mini bioskop, dll yang siap menghibur Anda ketika berada di kamar.<br />\r\n<br />\r\nSelesai beraktivitas, Kolam renang air hangat siap menyegarkan tubuh Anda yang penat setelah itu silahkan menikmati suguhan di Restoran Sekar Arum, atau pijat dan spa di salon hotel, juga bisa bersantai sejenak di Bar Melati sambil menikmati alunan musik. Jangan lupa kunjungi&nbsp;<strong>Hotel Agas Internasiona</strong>l ketika berada di Solo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Harga Kamar :</p>\r\n\r\n<p>Moderate Rp475.000<br />\r\nSuperior Rp550.000<br />\r\nDeluxe Rp625.000<br />\r\nSuite Rp975.000<br />\r\n*Extra Bed Rp190.000</p>\r\n', '1'),
(20, 'admin', 3, 6, 1, 'RIYADI PALACE HOTEL', 'riyadi-palace-hotel', 'Jl. Brig. Jend. Slamet Riyadi No 335 Kel Purwosari, Kec Laweyan, Surakarta ', 5, 43, '2476RiyadiPalace.jpg', '-7.564725', '110.80341', '0271-717181	', 'http://riyadipalacehotel.com', 'riyadi@indo.net.id', 456000, 1100000, '<p>Terletak strategis di Adi Sucipto, Riyadi Palace Hotel adalah tempat ideal untuk memulai eksplorasi di Solo (surakarta). Pusat kota terletak hanya 1.1 Km dari sini dan bandara dapat ditempuh dalam waktu 15 menit. Yang juga terletak dekat adalah Mangkunegaran Square, Istana Sutan, Kampung Kauman Batik.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Harga Kamar :</p>\r\n\r\n<p>Exct Rp1.100.000<br />\r\nJunior Rp890.000<br />\r\nDeluxe Rp710.000<br />\r\nJuniorDlx Rp600.000<br />\r\nModerate Rp525.000<br />\r\nStandard Rp456.000<br />\r\n*Extra Bed Rp170.000</p>\r\n', '1'),
(21, 'admin', 3, 6, 1, 'SOLO INN INDONESIA', 'solo-inn-indonesia', 'Jl. Slamet Riyadi No 366 RT 4/I Kel Penumping, Kec Laweyan, Surakarta 57141', 5, 41, '9536SoloInn.jpg', '-7.565559', '110.806766', '0271-716075', '', '', 575000, 900000, '<p>Terletak di Ngadirejo, Solo Inn adalah titik awal yang sempurna untuk menjelajahi Solo (surakarta). Menampilkan daftar fasilitas yang lengkap, tamu akan menyadari bahwa mereka menginap di properti yang nyaman. Staf yang siap melayani akan menyambut dan memandu Anda di Solo Inn. Kamar tamu yang ditunjuk memiliki fitur meja tulis, televisi, pengering rambut, air botol gratis, TV satelit/kabel. Suasana damai di hotel ini meluas ke fasilitas rekreasi yang meliputi juga taman, pijat. Temukan semua yang Solo (surakarta) tawarkan dengan membuat Solo Inn sebagai pangkalan Anda.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Harga Kamar :</p>\r\n\r\n<p>Deluxe Rp575.000<br />\r\nExecutive Rp900.000<br />\r\n*Extra Bed Rp190.000</p>\r\n', '1'),
(22, 'admin', 3, 6, 1, 'AMARELO HOTEL BY THE ACASIA', 'amarelo-hotel-by-the-acasia', 'Jl. Gatot Subroto No 89-103 Singosaren, Kel Kemlayan, Kec Serengan, Surakarta 57151', 4, 34, '', '-7.572634', '110.821181', '0271-635710', '', '', 700000, 1200000, '', '1'),
(23, 'admin', 3, 6, 1, 'HOTEL DANA SOLO', 'hotel-dana-solo', 'Jl. Slamet Riyadi No 286 Kel Sriwedari, Kec Laweyan, Surakarta 57141', 5, 42, '', '-7.56806', '110.815414', '0271-711976', '', '', 415000, 1250000, '<p>Standart Rp415.000<br />\r\nSuperior Rp450.000<br />\r\nJr.Suite Rp520.000<br />\r\nDeluxeSuite Rp690.000<br />\r\nSuperiorSuite Rp795.000<br />\r\nFamily BK Rp1.250.000<br />\r\n*Extra Bed Rp150.000</p>\r\n', '1'),
(24, 'admin', 3, 6, 1, 'GRAND SETYA KAWAN', 'grand-setya-kawan', 'Jl. Ahmad Yani No 290 A Kel Manahan, Kec Banjarsari, Surakarta', 2, 23, '4751GrandSety.jpg', '-7.55009', '110.815545', '0271-718989', '', '', 345000, 615000, '<p>Superior Rp345.000<br />\r\nModerate Rp395.000<br />\r\nDeluxe Rp485.000<br />\r\nVIP Room Rp615.000<br />\r\n*Extra Bed Rp125.000</p>\r\n', '1'),
(25, 'admin', 4, 6, 1, 'THE ROYAL SURAKARTA HERITAGE', 'the-royal-surakarta-heritage', 'Jalan Slamet Riyadi No 8 RT 1/I Kelurahan Kampung Baru Kecamatan Banjarsari Surakarta', 3, 25, '6122Royal_Heritage.jpg', '-7.571923', '110.828544', '0271-666111', '', '', 510000, 1500000, '<p>Ideal untuk bersenang - senang dan relaksasi, The Royal Surakarta Heritage Hotel terletak di Slamet Riyadi area Solo (surakarta). Dari sini, para tamu dapat menikmati akses mudah ke semua hal yang dapat ditemukan di sebuah kota yang hidup. Bagi Anda yang ingin bereksplorasi keluar, Kampung Kauman Batik, Istana Sutan, Mangkunegaran Square hanyalah beberapa atraksi yang tersedia bagi para pengunjung.</p>\r\n\r\n<ul style="margin-left:0px; margin-right:0px">\r\n	<li>Jumlah kamar: 150</li>\r\n	<li>Lokasi hotel: Kota</li>\r\n	<li>Lokasi utama yang menarik: SULTAN PALACE (0.50 km)</li>\r\n	<li>Lokasi utama yang menarik: SULTAN PALACES (2.00 km)</li>\r\n</ul>\r\n', '1'),
(26, 'admin', 3, 6, 1, 'ORANGE HOTEL SOLO MONGINSIDI', 'orange-hotel-solo-monginsidi', 'Jalan Monginsidi No 1 Kelurahan Tegalrejo, Kecamatan Jebres, Surakarta ', 1, 8, '5216orange1.jpg', '-7.56053', '110.836135', '0271-661166', '', '', 310000, 1220000, '<p>Terletak strategis di Slamet Riyadi, Orange Hotel Solo Monginsidi adalah tempat ideal untuk memulai eksplorasi di Solo (surakarta). Dari sini, para tamu dapat menikmati akses mudah ke semua hal yang dapat ditemukan di sebuah kota yang hidup. Surga untuk beristirahat dan bersantai, hotel ini akan menyediakannya kepada Anda dan terletak hanya beberapa langkah dari beberapa atraksi kota ini seperti Stasiun Balapan, Stasiun Jebres, Istana Sutan.</p>\r\n\r\n<p>Gunakan kesempatan untuk menikmati pelayanan dan fasilitas yang tak tertandingkan di hotel Solo (surakarta) ini. Untuk kenyamanan para tamu, hotel ini menawarkan tempat parkir mobil, pusat bisnis, layanan kamar 24 jam, parkir valet, ruang merokok .</p>\r\n\r\n<p>Sebagai tambahan, semua kamar tamu memiliki sejumlah kenyamanan seperti pembuat kopi/teh, meja tulis, bak mandi, televisi, mini bar untuk menyenangi semakin banyak tamu. Baik Anda adalah orang yang senang fitness atau hanya ingin bersantai setelah beraktivitas sepanjang hari, Anda akan dihibur dengan fasilitas rekreasi kelas atas seperti kolam renang (luar ruangan). Ketika Anda mencari penginapan yang nyaman di Solo (surakarta), jadikanlah Orange Hotel Solo Monginsidi rumah Anda ketika Anda berlibur.</p>\r\n', '1'),
(27, 'admin', 4, 6, 1, 'THE SUNAN HOTEL SOLO', 'the-sunan-hotel-solo', 'Jalan Ahmad Yani No 40 Kelurahan Kerten, Kecamatan Laweyan, Surakarta 57143', 5, 44, '7853SunanHotel.jpg', '-7.557773', '110.793958', '0271-731312', 'http://www.thesunanhotelsolo.com/', 'jso@thesunanhotelsolo.com', 485000, 3800000, '<p>Bertempat di lokasi utama Solo (surakarta), The Sunan Hotel Solo menempatkan segala sesuatu yang kota tawarkan hanya di luar pintu depan Anda. Hotel ini menawarkan berbagai fasilitas untuk memastikan Anda menghabiskan waktu dengan spesial. Parkir valet, layanan laundry/dry cleaning, toko, ruang keluarga, coffee shop ada dalam daftar hal-hal yang para tamu dapat nikmati. Kamar tamu dilengkapi dengan segala fasilitas yang Anda butuhkan untuk tidur malam yang nyaman, termasuk AC, akses internet, koran harian, pembuat kopi/teh, kotak penyimpanan dalam-kamar. Hibur diri Anda dengan fasilitas rekreasi di hotel, termasuk pijat, sauna, gym/fasilitas kebugaran, jacuzzi, taman. Staf yang ramah, fasilitas yang istimewa dan dekat dengan semua yang Solo (surakarta) tawarkan, merupakan tiga alasan utama Anda harus tinggal di The Sunan Hotel Solo.</p>\r\n', '1'),
(28, 'admin', 6, 6, 1, 'HOTEL AGUNG', 'hotel-agung', 'Jalan Gajah Mada No 131 RT 05/I Kelurahan Punggawan, Kecamatan Banjarsari, Surakarta', 2, 15, '', '-7.559691', '110.819986', '0271-713034', '', '', 50000, 50000, '', '1'),
(29, 'admin', 6, 6, 1, 'HOTEL AIDA', 'hotel-aida', 'Jalan R.M. Said No 75 Kelurahan Ketelan, Kecamatan Banjarsari, Surakarta', 2, 14, '', '-7.56294', '110.820069', '0271-632239', '', '', 40000, 40000, '', '1'),
(30, 'admin', 6, 6, 1, 'HOTEL ARJUNA', 'hotel-arjuna', 'Margorejo Kulon II/3 Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta', 2, 16, '', '-7.557148', '110.823276', '0271-642232', '', '', 50000, 150000, '<p>Utama Rp150.000<br />\r\nMadya Rp125.000<br />\r\nStandart Rp50.000</p>\r\n', '1'),
(31, 'admin', 6, 6, 1, 'HOTEL AVITA ASRI', 'hotel-avita-asri', 'Jalan Bido II No 4 Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta', 2, 18, '', '-7.553069', '110.819059', '0271-717115', '', '', 50000, 50000, '', '1'),
(32, 'admin', 6, 6, 1, 'HOTEL BETENG JAYA', 'hotel-beteng-jaya', 'Jalan Kyai Gede No 24 Kelurahan Kedung Lumbu, Kecamatan Pasar Kliwon, Surakarta', 3, 27, '', '-7.574385', '110.831094', '0271-654151', '', '', 55000, 125000, '<p>Utama Rp125.000<br />\r\nStandart 1 Rp90.000<br />\r\nStandart 2 Rp70.000<br />\r\nEkonomi Rp55.000</p>\r\n', '1'),
(33, 'admin', 6, 6, 1, 'HOTEL FORTUNA', 'hotel-fortuna', 'Jalan Ronngowarsito No 72 Kelurahan Keprabon, Kecamatan Banjarsari, Surakarta', 2, 13, '', '-7.56881', '110.82514', '0271-648791', '', '', 45000, 200000, '', '1'),
(34, 'admin', 6, 6, 1, 'HOTEL JATI INDAH', 'hotel-jati-indah', 'Jalan Natuna II RT 03/III Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta', 2, 16, '', '-7.55911', '110.822696', '0271-634310', '', '', 35000, 50000, '', '1'),
(35, 'admin', 6, 6, 1, 'HOTEL JAYA JATI BARU', 'hotel-jaya-jati-baru', 'Jalan Abdul Rahman Saleh No 66 Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta', 2, 16, '', '-7.558555', '110.822565', '0271-643126', '', '', 40000, 40000, '', '1'),
(36, 'admin', 6, 6, 1, 'HOTEL JAYA JATI', 'hotel-jaya-jati', 'Saleh No 49 RT 01/III Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta', 2, 16, '', '-7.558848', '110.822535', '0271-635525', '', '', 30000, 30000, '', '1'),
(37, 'admin', 6, 6, 1, 'HOTEL KARYA ABADI', 'hotel-karya-abadi', 'Jalan Tirtonadi No 1/2 Surakarta', 2, 18, '', '-7.5523', '110.81888', '0271-710544', '', '', 35000, 70000, '', '1'),
(38, 'admin', 6, 6, 1, 'HOTEL KARYA INDAH', 'hotel-karya-indah', 'Jalan Mentawai RT 07/XIII Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta', 2, 18, '', '-7.554846', '110.828063', '0271-7002968', '', '', 80000, 140000, '', '1'),
(39, 'admin', 6, 6, 1, 'HOTEL KARYA JAYA', 'hotel-karya-jaya', 'Jalan Merak I RT 03/IV Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta', 2, 18, '', '-7.55333', '110.820261', '0271-717309', '', '', 40000, 50000, '', '1'),
(40, 'admin', 6, 6, 1, 'HOTEL KARYA MUKTI', 'hotel-karya-mukti', 'Jalan Merak I RT 03/IV Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta', 2, 18, '', '-7.553268', '110.81974', '0271-724089', '', '', 40000, 80000, '', '1'),
(41, 'admin', 6, 6, 1, 'HOTEL KENCANA ASRI', 'hotel-kencana-asri', 'Jalan Bido II No 2 Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta', 2, 18, '', '-7.553256', '110.818924', '0271-717356', '', '', 40000, 70000, '', '1'),
(42, 'admin', 6, 6, 1, 'HOTEL KEPRABON', 'hotel-keprabon', 'Jalan Ahmad Dahlan No 12-14 Kelurahan Keprabon, Kecamatan Banjarsari, Surakarta', 2, 13, '', '-7.570574', '110.824521', '0271-632811', '', '', 75000, 160000, '<p>Promo Rp75.000<br />\r\nDeluxe Rp130.000<br />\r\nFamily Rp150.000<br />\r\nSuite Rp160.000</p>\r\n', '1'),
(43, 'admin', 6, 6, 1, 'HOTEL MARCONI', 'hotel-marconi', 'Kestalan RT 01/III Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta', 2, 16, '', '-7.559149', '110.822386', '0271-632857', '', '', 40000, 40000, '', '1'),
(44, 'admin', 6, 6, 1, 'HOTEL MAWAR MELATI', 'hotel-mawar-melati', 'Jalan Imam Bonjol No 54 Kelurahan Kampung Baru, Kecamatan Pasar Kliwon, Surakarta', 3, 25, '', '-7.568548', '110.826535', '0271-636434', '', '', 75000, 225000, '', '1'),
(45, 'admin', 6, 6, 1, 'HOTEL MEKAR SARI', 'hotel-mekar-sari', 'Jalan Slamet Riyadi No 530 Kelurahan Kerten, Kecamatan Laweyan, Surakarta', 5, 44, '', '-7.560912', '110.791994', '0271-714894', '', '', 75000, 135000, '', '1'),
(46, 'admin', 6, 6, 1, 'HOTEL MULYA JAYA', 'hotel-mulya-jaya', 'Jalan Natuna I RT 01/III Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta', 2, 16, '', '-7.559532', '110.82219', '', '', '', 40000, 40000, '', '1'),
(47, 'admin', 6, 6, 1, 'HOTEL MUTIARA', 'hotel-mutiara', 'Jalan Tirtonadi I RT 04/X Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta', 2, 18, '', '-7.552745', '110.817644', '0271-722788', '', '', 35000, 60000, '', '1'),
(48, 'admin', 6, 6, 1, 'HOTEL NASIONAL', 'hotel-nasional', 'Jalan Arifin No 20 RT 01/V Kelurahan Ampung Baru, Kecamatan Pasar Kliwon, Surakarta', 3, 25, '', '-7.567296', '110.830081', '0271-632803', '', '', 75000, 150000, '', '1'),
(49, 'admin', 6, 6, 1, 'HOTEL NIRWANA SOLO', 'hotel-nirwana-solo', 'Jalan Ronggowarsito No 59 RT 01/III Kelurahan Keprabon, Kecamatan Banjarsari, Surakarta', 0, 0, '', '-7.569115', '110.825481', '0271-632843', '', '', 40000, 60000, '', '1'),
(50, 'admin', 6, 6, 1, 'HOTEL PAJANG INDAH', 'hotel-pajang-indah', 'Jalan Joko Tingkir No 22 RT 01/II Kelurahan Pajang, Kecamatan Laweyan, Surakarta', 5, 47, '', '-7.572439', '110.783868', '0271-711609', '', '', 75000, 150000, '', '1'),
(51, 'admin', 6, 6, 1, 'HOTEL PONDOK BARU', 'hotel-pondok-baru', 'Kestalan RT 01/III Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta', 2, 16, '', '-7.559758', '110.8222', '0271-644833', '', '', 30000, 40000, '', '0'),
(52, 'admin', 6, 6, 1, 'HOTEL PRASASTI', 'hotel-prasasti', 'No 81 RT 01/VII Kelurahan Sumber, Kecamatan Banjarsari, Surakarta', 2, 22, '', '-7.544473', '110.805909', '0271-7011220', '', '', 80000, 300000, '', '1'),
(53, 'admin', 6, 6, 1, 'HOTEL PUSPA JAYA', 'hotel-puspa-jaya', 'Jalan Puspowarno No 20 Kelurahan Penularan, Kecamatan Laweyan, Surakarta', 5, 51, '', '-7.57347', '110.812798', '0271-711105', '', '', 60000, 85000, '', '1'),
(54, 'admin', 6, 6, 1, 'HOTEL PUSPITA BARU 1', 'hotel-puspita-baru-1', 'Jalan Dr. Rajiman No 404A Kelurahan Penumping, Kecamatan Laweyan, Surakarta', 5, 41, '', '-7.571135', '110.805103', '0271-742755', '', '', 80000, 100000, '', '1'),
(55, 'admin', 6, 6, 1, 'TIARA PUSPITA HOTEL', 'tiara-puspita-hotel', 'Jalan Dr. Rajiman No 404C Kelurahan Penumping, Kecamatan Laweyan, Surakarta 57141', 5, 41, '', '-7.571266', '110.804861', '0271-729805', '', '', 112500, 225000, '', '1'),
(56, 'admin', 6, 6, 1, 'HOTEL SAPTA JAYA', 'hotel-sapta-jaya', 'Jalan Dr. Rajiman No 580 RT 02/VI Surakarta', 5, 48, '', '-7.568424', '110.79294', '0271-712262', '', '', 75000, 100000, '', '1'),
(57, 'admin', 6, 6, 1, 'HOTEL SERIBU', 'hotel-seribu', 'Jalan Abdul Rahman Saleh No 68 Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta', 2, 16, '', '-7.558499', '110.822463', '0271-646245', '', '', 50000, 100000, '', '1'),
(58, 'admin', 6, 6, 1, 'HOTEL SETYA KAWAN', 'hotel-setya-kawan', 'Kestalan No 1A/VII No 24 Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta', 2, 16, '', '-7,561022', '110.822317', '0271-656258', '', '', 30000, 150000, '', '1'),
(59, 'admin', 6, 6, 1, 'HOTEL SI CANTIK BARU', 'hotel-si-cantik-baru', 'Jalan Adi Sumarmo No 28 Kelurahan Nusukan, Kecamatan Banjarsari, Surakarta', 2, 19, '', '-7.546216', '110.819244', '0271-718841', '', '', 50000, 50000, '', '1'),
(60, 'admin', 6, 6, 1, 'HOTEL SINAR DADI', 'hotel-sinar-dadi', 'Margorejo Kulon RT 01/V Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta', 2, 16, '', '-7.557109', '110.823431', '0271-7082407', '', '', 40000, 40000, '', '1'),
(61, 'admin', 6, 6, 1, 'HOTEL SRI LARAS', 'hotel-sri-laras', 'Jalan Sutowijoyo No 39 Kelurahan Penumping, Kecamatan Laweyan, Surakarta', 5, 41, '', '-7.56715', '110.806765', '0271-717947', '', '', 120000, 200000, '', '1'),
(62, 'admin', 6, 6, 1, 'HOTEL WAHYU', 'hotel-wahyu', 'Jalan Tirtonadi No 8 Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta', 2, 18, '', '-7.552551', '110.817932', '0271-719151', '', '', 40000, 70000, '', '1'),
(63, 'admin', 6, 6, 1, 'HOTEL WIDODO', 'hotel-widodo', 'Jalan Abdul Rahman Saleh No 53 Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta', 2, 16, '', '-7.558315', '110.82165', '0271-636963', '', '', 40000, 40000, '', '1'),
(64, 'admin', 6, 6, 1, 'HOTEL WIDYA GRIYA 1', 'hotel-widya-griya-1', 'Notodiningratan No 115 RT 03/V Kelurahan Kemlayan, Kecamatan Serengan, Surakarta', 4, 34, '', '-7.570994', '110.820368', '0271-641454', '', '', 80000, 260000, '', '1'),
(65, 'admin', 6, 6, 1, 'HOTEL WISMANTARA', 'hotel-wismantara', 'Jalan R.M. Said No 91 Surakarta', 2, 14, '', '-7.561285', '110.817905', '0271-713590', '', '', 50000, 50000, '', '1'),
(66, 'admin', 6, 6, 1, 'HOTEL YOGA', 'hotel-yoga', 'Kestalan RT 01/III Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta', 2, 16, '', '-7.558951', '110.822634', '0271-635516', '', '', 30000, 35000, '', '1'),
(67, 'admin', 6, 6, 1, 'HOTEL RAHAYU', 'hotel-rahayu', 'Jalan Sidomukti Timur No 5 Kelurahan Pajang, Kecamatan Laweyan, Surakarta', 5, 47, '', '-7.569432', '110.790161', '0271-714214', '', '', 80000, 90000, '', '1'),
(68, 'admin', 6, 6, 1, 'HOTEL PUSPITA', 'hotel-puspita', 'Jalan Dr. Rajiman No 404B Kelurahan Penumping, Kecamatan Laweyan, Surakarta 57141', 5, 41, '', '-7.571304', '110.804833', '0271-716421', '', '', 90000, 140000, '', '1'),
(69, 'admin', 6, 6, 1, 'HOTEL BRANI', 'hotel-brani', 'Jalan Setyaki No 7 Kelurahan Sriwedari, Kecamatan Laweyan, Surakarta', 5, 42, '', '-7.570455', '110.813182', '0271-714177', '', '', 45000, 45000, '', '1'),
(70, 'admin', 6, 6, 1, 'HOTEL CENTRAL', 'hotel-central', 'Jalan Ahmad Dahlan No 32 Kelurahan Keprabon, Kecamatan Banjarsari, Surakarta ', 2, 13, '', '-7.570198', '110.824647', '0271-642814', '', '', 30000, 30000, '', '1'),
(71, 'admin', 6, 6, 1, 'HOTEL POJOK', 'hotel-pojok', 'Jalan Abdul Rahman Saleh No 31 Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta', 2, 16, '', '-7.558254', '110.821468', '0271-645085', '', '', 45000, 75000, '', '1'),
(72, 'admin', 6, 6, 1, 'HOTEL SAPTA', 'hotel-sapta', 'Jalan Gajah Mada No 182 Grogolan, Kelurahan Ketelan, Kecamtan Banjarsari, Surakarta', 2, 14, '', '-7.558764', '110.820635', '0271-633418', '', '', 40000, 40000, '', '1'),
(73, 'admin', 6, 6, 1, 'HOTEL WIGATI', 'hotel-wigati', 'Jalan Banda No 2 RT 05/III Kelurahan Keprabon, Kecamatan Banjarsari, Surakarta', 2, 13, '', '-7.570665', '110.825168', '0271-637341', '', '', 35000, 125000, '', '1'),
(74, 'admin', 6, 6, 1, 'HOTEL ATINA', 'hotel-atina', 'Jalan Dr. Setiabudi No 43 Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta ', 2, 18, '', '-7.553774', '110.819034', '0271-719183', '', '', 75000, 200000, '<p>Standart Rp75.000<br />\r\nModerate Rp125.000<br />\r\nSuite Rp200.000</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1'),
(75, 'admin', 6, 6, 1, 'HOTEL ANUGERAH PALACE', 'hotel-anugerah-palace', 'Jalan Brigjend. Slamet Riyadi No 331 Kelurahan Purwosari, Kecamatan Laweyan, Surakarta 57142', 5, 43, '', '-7.564914', '110.803763', '0271-731218', '', '', 250000, 350000, '<p>Superior Rp250.000<br />\r\nModerate Rp350.000<br />\r\n*ExtraBed Rp100.000</p>\r\n', '1'),
(76, 'admin', 6, 6, 1, 'HOTEL CINDHE WUNGU BARU', 'hotel-cindhe-wungu-baru', 'Jalan Jalak No 1 Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta', 2, 18, '', '-7.554918', '110.821726', '0271-714843', '', '', 30000, 90000, '', '1'),
(77, 'admin', 6, 6, 1, 'GAJAH MADA HOTEL', 'gajah-mada-hotel', 'Jalan Gajah Mada No 134 Kelurahan Ketelan, Kecamatan Banjarsari, Surakarta', 2, 14, '', '-7.560945', '110.819671', '0271-632161', '', '', 60000, 200000, '', '1'),
(78, 'admin', 6, 6, 1, 'HOTEL DJAYAKARTA ', 'hotel-djayakarta-', 'Jalan Monginsidi No 104-106 Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta', 2, 16, '', '-7.557426', '110.823012', '0271-646013', '', '', 100000, 200000, '', '1'),
(79, 'admin', 6, 6, 1, 'HOTEL KALOKA', 'hotel-kaloka', 'Jalan Gajah Mada No 77 Kelurahan Punggawan, Kecamatan Banjarsari, Surakarta', 2, 15, '', '-7.563282', '110.818964', '0271-712804', '', '', 50000, 200000, '', '1'),
(80, 'admin', 6, 6, 1, 'HOTEL KARYA SEJATI', 'hotel-karya-sejati', 'Jalan Bangau VI RT 01/XI Kelurahan Manahan, Kecamatan Banjarsari, Surakarta ', 2, 23, '', '-7.549554', '110.815035', '0271-739995', '', '', 50000, 80000, '', '1'),
(81, 'admin', 6, 6, 1, 'HOTEL KOTA', 'hotel-kota', 'Jalan Slamet Riyadi No 125 RT 01/I Kelurahan Kemlayan, Kecamatan Serengan, Surakarta ', 4, 34, '', '-7.570517', '110.823543', '0271-632841', '', '', 110000, 210000, '', '1'),
(82, 'admin', 6, 6, 1, 'HOTEL KUSUMA SARI INDAH', 'hotel-kusuma-sari-indah', 'Kestalan RT 04/III Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta', 2, 16, '', '-7.558598', '110.821396', '', '', '', 30000, 125000, '<p>Biasa Rp30.000<br />\r\nVIP Rp100.000 - Rp125.000<br />\r\nStandart AC Rp75.000</p>\r\n', '1'),
(83, 'admin', 6, 6, 1, 'HOTEL MADU ASRIE', 'hotel-madu-asrie', 'Jalan Ahmad Yani Gang Bangau VII Kelurahan Manahan, Kecamatan Banjarsari, Surakarta', 2, 23, '', '-7.549613', '110.814405', '0271-719555', '', '', 70000, 120000, '', '1'),
(84, 'admin', 6, 6, 1, 'MANGKUYUDAN HOTEL', 'mangkuyudan-hotel', 'Jalan K.H. Samanhudi No 59 RT 02/III Kelurahan Bumi, Kecamatan Laweyan, Surakarta', 5, 50, '', '-7.567227', '110.798958', '0271-726691', '', '', 95000, 185000, '', '1'),
(85, 'admin', 6, 6, 1, 'MATAHARI HOTEL', 'matahari-hotel', 'Kartopuran No 8 RT 01/I Kelurahan Jayengan, Kecamatan Serengan, Surakarta', 4, 35, '', '-7.574162', '110.818242', '0271-641270', '', '', 140000, 185000, '', '1'),
(86, 'admin', 6, 6, 1, 'HOTEL MADU ASRI 1', 'hotel-madu-asri-1', 'Jalan Kestalan III/17A Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta', 2, 16, '', '-7.558396', '110.822867', '0271-648482', '', '', 15000, 35000, '', '1'),
(87, 'admin', 6, 1, 1, 'HOTEL PERMATASARI', 'hotel-permatasari', 'Jalan Setiabudi No 40 RT 03/IV Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta', 2, 18, '', '-7.55374', '110.819495', '0271-719655', '', '', 45000, 100000, '', '1'),
(88, 'admin', 6, 6, 1, 'HOTEL PUTRI SARI', 'hotel-putri-sari', 'Jalan Slamet Riyadi No 384 Kelurahan Purwosari, Kecamatan Laweyan, Surakarta', 5, 43, '', '-7.5648', '110.804491', '0271-717958', '', '', 85000, 285000, '', '1'),
(89, 'admin', 6, 6, 1, 'HOTEL ARIES', 'hotel-aries', 'Jalan Setiabudi No 39 RT 03/IV Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta', 2, 18, '', '-7.553763', '110.819689', '0271-717518', '', '', 75000, 120000, '', '1'),
(90, 'admin', 6, 6, 1, 'HOTEL RIO', 'hotel-rio', 'Jalan Bangka No 21 Kelurahan Setabelan, Kecamatan Banjarsari, Surakarta', 2, 17, '', '-7.565013', '110.824174', '0271-632845', '', '', 35000, 100000, '', '1'),
(91, 'admin', 6, 6, 1, 'SASANA KRIDA KUSUMA', 'sasana-krida-kusuma', 'Jalan Menteri Supeno No 1 Kelurahan Manahan, Kecamatan Banjarsari, Surakarta 57139', 2, 23, '', '-7.557054', '110.808732', '0271-717508', '', '', 264600, 796450, '', '1'),
(92, 'admin', 6, 6, 1, 'HOTEL SEKAR AYU', 'hotel-sekar-ayu', 'Jalan Dr. Setiabudi No 79 Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta', 2, 18, '', '-7.553346', '110.815888', '', '', '', 60000, 140000, '', '1'),
(93, 'admin', 6, 6, 1, 'HOTEL SUKA MAREM', 'hotel-suka-marem', 'Jalan Dr. Sutomo No 11 Kelurahan Penumping, Kecamatan Laweyan, Surakarta', 5, 41, '', '-7.564819', '110.8096', '0271-713767', '', '', 40000, 125000, '', '1'),
(94, 'admin', 6, 6, 1, 'HOTEL TIRTONADI PERMAI', 'hotel-tirtonadi-permai', 'Jalan Tagore I No 6 Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta ', 2, 18, '', '-7.553644', '110.82079', '0271-723483', '', '', 0, 0, '', '1'),
(95, 'admin', 6, 1, 1, 'HOTEL TRIO SOLO', 'hotel-trio-solo', 'Jalan Tirtonadi No 20 Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta', 2, 18, '', '-7.567752', '110.832157', '0271-714996', '', '', 40000, 75000, '', '1'),
(96, 'admin', 6, 6, 1, 'HOTEL TRISARI', 'hotel-trisari', 'Jalan AM. Sangadji 4 Kelurahan Gajahan, Kecamatan Pasar Kliwon, Surakarta', 3, 29, '', '-7.55283', '110.817646', '0271-635959', '', '', 60000, 120000, '', '1'),
(97, 'admin', 6, 6, 1, 'HOTEL WIDYA GRIYA 2', 'hotel-widya-griya-2', 'Jalan Bedoyo No 86 RT 02/VI Kelurahan Kemlayan, Kecamatan Serengan, Surakarta', 4, 34, '', '-7.571453', '110.820056', '0271-644093', '', '', 80000, 260000, '', '1'),
(98, 'admin', 6, 6, 1, 'HOTEL WIJAYA', 'hotel-wijaya', 'Jalan R.M. Said No 268 Kelurahan Manahan, Kecamatan Banjarsari, Surakarta ', 2, 23, '', '-7.55454', '110.810176', '0271-713126', '', '', 75000, 150000, '', '1'),
(99, 'admin', 6, 6, 1, 'HOTEL WIJAYA KUSUMA', 'hotel-wijaya-kusuma', 'Jalan Dr. Rajiman No 677 Kelurahan Pajang, Kecamatan Laweyan, Surakarta', 5, 47, '', '-7.568058', '110.785523', '0271-717988', '', '', 50000, 275000, '', '1'),
(100, 'admin', 6, 6, 1, 'HOTEL WIRYOMARTONO', 'hotel-wiryomartono', 'Jalan KH. Agus Salim No 11 RT 01/III Kelurahan Sondakan, Kecamatan Laweyan, Surakarta', 5, 48, '', '-7.564639', '110.794636', '0271-726926', '', '', 154000, 250000, '', '1'),
(101, 'admin', 6, 6, 1, 'HOTEL WISNU', 'hotel-wisnu', 'Jalan Dr. Supomo No 73 Kelurahan Mangkubumen, Kecamatan Banjarsari, Surakarta', 2, 24, '', '-7.561503', '110.814961', '0271-715269', '', '', 85000, 130000, '', '1'),
(102, 'admin', 1, 1, 1, 'HOTEL ISTANA GRIYA', 'hotel-istana-griya', 'Jalan Ahmad Dahlan No 22 Surakarta', 5, 42, '', '-7.570336', '110.824668', '0271-632667', '', '', 100000, 175000, '', '1'),
(103, 'admin', 6, 6, 1, 'ATINA GRAHA', 'atina-graha', 'Jalan Bangka No 30 Pringgading, Kelurahan Setabelan, Kecamatan Banjarsari, Surakarta', 2, 17, '', '-7.56464', '110.823617', '0271-654549', '', '', 100000, 280000, '<p>Harga Kamar :</p>\r\n\r\n<p>Suite Rp280.000<br />\r\nDeluxe Rp225.000<br />\r\nSuperior Rp190.000<br />\r\nStandart Rp100.000</p>\r\n', '1'),
(104, 'admin', 6, 6, 1, 'HOTEL BARON INDAH', 'hotel-baron-indah', 'Jalan Dr. Rajiman No 392 Kelurahan Penumping, Kecamatan Laweyan, Surakarta', 5, 41, '', '-7.571268', '110.806317', '0271-729071', '', '', 520000, 900000, '<p>Harga Kamar :</p>\r\n\r\n<p>Superior Rp520.000<br />\r\nDeluxe Rp630.000<br />\r\nExecutive Rp900.000<br />\r\n*ExtraBed Rp120.000</p>\r\n', '1'),
(105, 'admin', 6, 6, 1, 'DIAMOND HOTEL', 'diamond-hotel', 'Jalan Slamet Riyadi No 392 Kelurahan Purwosari, Kecamatan Laweyan, Surakarta 57142', 5, 43, '', '-7.564399', '110.803345', '0271-733888', '', '', 315000, 3500000, '', '1'),
(106, 'admin', 6, 6, 1, 'HOTEL GRIYA KENCANA', 'hotel-griya-kencana', 'Jalan Latar ireng No 22 RT 03/I Kelurahan Bumi, Kecamatan Laweyan, Surakarta 57148', 5, 50, '', '-7.569001', '110.799933', '0271-737159', '', '', 200000, 250000, '<p>Standart Rp200.000<br />\r\nModerate Rp225.000<br />\r\nSuperior Rp250.000</p>\r\n', '1'),
(107, 'admin', 6, 6, 1, 'HOTEL GURITA', 'hotel-gurita', 'Jalan Dr. Setiabudi No 31 Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta', 2, 18, '', '-7.553991', '110.820071', '0271-738585', '', '', 40000, 160000, '', '1'),
(108, 'admin', 6, 6, 1, 'KARYA SARI ', 'karya-sari-', 'Jalan Ahmad Yani No 387 Kelurahan Kerten, Kecamatan Laweyan, Surakarta 57143', 5, 44, '', '-7.558633', '110.793525', '0271-714512', '', '', 70000, 160000, '<p>Harga Kamar :</p>\r\n\r\n<p>Utama Lt1 Rp160.000<br />\r\nUtama Lt2 Rp125.000<br />\r\nUtama A Rp100.000<br />\r\nUtama B Rp90.000<br />\r\nMadya Rp85.00<br />\r\nStandar Rp70.000<br />\r\n*ExtraBed Rp50.000</p>\r\n', '1'),
(109, 'admin', 6, 6, 1, 'HOTEL KUSUMA', 'hotel-kusuma', 'Jalan Dr. Rajiman No 374 RT 05/V Kelurahan Penumping, Kecamatan Laweyan, Surakarta', 5, 41, '', '-7.571243', '110.807056', '0271-712740', '', '', 120000, 500000, '<p>Harga Kamar :</p>\r\n\r\n<p>Melati Rp220.000<br />\r\nStandart Rp280.000<br />\r\nVIP Room Rp300.000<br />\r\nFamily A Rp400.000<br />\r\nFamily B Rp500.000<br />\r\nDrivRoom Rp120.000<br />\r\n*ExtraBed Rp100.000</p>\r\n', '1'),
(110, 'admin', 6, 3, 1, 'MANDALA WISATA BOUTIQUE HOTEL', 'mandala-wisata-boutique-hotel', 'Jalan Perintis Kemerdekaan No 12 RT 03/I Kelurahan Sondakan, Kecamatan Laweyan, Surakarta', 5, 48, '', '-7.564763', '110.798728', '0271-712270', '', '', 197000, 350000, '<p>Harga Kamar :</p>\r\n\r\n<p>Boutique Rp350.000<br />\r\nDeluxe Rp315.800<br />\r\nExecutive Rp278.000<br />\r\nSuperior Rp252.800<br />\r\nModerate Rp197.000<br />\r\n*ExtraBed Rp98.000</p>\r\n', '1'),
(111, 'admin', 6, 6, 1, 'HOTEL MAWAR INDAH', 'hotel-mawar-indah', 'Jalan Cinderejo Kidul No 1 Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta 57134', 2, 18, '', '-7.554174', '110.818779', '0271-719246', '', '', 110000, 135000, '', '1'),
(112, 'admin', 6, 6, 1, 'HOTEL SINAR INDAH', 'hotel-sinar-indah', 'Jalan Adi Sucipto No 77 RT 03/VII Kelurahan Jajar, Kecamatan Laweyan, Surakarta 57144', 5, 45, '', '-7.551477', '110.791568', '0271-715148', '', '', 90000, 150000, '', '1'),
(113, 'admin', 6, 6, 1, 'HOTEL SURYA', 'hotel-surya', 'Jalan Dr. Setiabudi No 17 Kelurahan Gilingan, Kecamatan Banjarsari, Surakarta', 2, 18, '', '-7.553504', '110.820684', '0271-721915', '', '', 100000, 215000, '', '1'),
(114, 'admin', 6, 6, 1, 'TRIHADHI HOTEL', 'trihadhi-hotel', 'Jalan Monginsidi No 97 Kelurahan Kestalan, Kecamatan Banjarsari, Surakarta 57133', 2, 16, '', '-7.557763', '110.823347', '0271-639064', '', '', 65000, 175000, '', '1'),
(115, 'admin', 6, 6, 1, 'LAWEYAN HOTEL', 'laweyan-hotel', 'Jalan Dr. Rajiman No 568 A RT 01/VI Kelurahan Sondakan, Kecamatan Laweyan, Surakarta', 5, 48, '', '-7.568639', '110.79359', '0271-724246', '', '', 95000, 185000, '', '1'),
(116, 'admin', 6, 6, 1, 'ROEMAHKOE HERITAGE HOTEL AND RETAURANT', 'roemahkoe-heritage-hotel-and-retaurant', 'Jalan Dr. Rajiman No 501 Kelurahan Sondakan, Kecamatan Laweyan, Surakarta 57148', 5, 48, '', '-7.570387', '110.798536', '0271-714024', '', '', 650000, 975000, '', '1'),
(117, 'admin', 6, 6, 1, 'RUMAH TURI', 'rumah-turi', 'Jalan Sri Gading II No 12 Turisari, Kelurahan Mangkubumen, Kecamatan Banjarsari, Surakarta ', 2, 24, '', '-7.561616', '110.8121', '0271-736606', '', '', 350000, 600000, '', '1');
INSERT INTO `hotel` (`id_hotel`, `username`, `id_kategori`, `id_jenis`, `id_jaringan`, `nama_hotel`, `nama_seo`, `alamat`, `id_kecamatan`, `id_kelurahan`, `foto`, `latitude`, `longitude`, `telphon`, `website`, `email`, `min_harga`, `max_harga`, `deskripsi`, `status`) VALUES
(118, 'admin', 6, 6, 1, 'HOTEL KINASIH', 'hotel-kinasih', 'Jalan Nitik No 5 A/B RT 01/I Kelurahan Laweyan, Kecamatan Laweyan, Surakarta ', 5, 49, '', '-7.569928', '110.795207', '0271-736243', '', '', 90000, 160000, '<p>Harga Kamar :</p>\r\n\r\n<p>VIP Room Rp160.000<br />\r\nAC Room Rp140.000<br />\r\nNonSpecial Rp110.000<br />\r\nNonAC Rp90.000</p>\r\n', '1'),
(119, 'admin', 6, 6, 1, 'SOLO TIARA HOTEL', 'solo-tiara-hotel', 'Jalan Kebangkitan Nasional No 12A Teposanan, Kelurahan Sriwedari, Kecamatan Laweyan, Surakarta', 5, 42, '', '-7.570538', '110.815756', '0271-719650', '', '', 280000, 380000, '<p>Harga Kamar :</p>\r\n\r\n<p>Standart Rp280.000<br />\r\nDeluxe Rp325.000<br />\r\nFamily Room Rp380.000</p>\r\n', '1'),
(120, 'admin', 6, 6, 1, 'MALIOBORO INN SOLO', 'malioboro-inn-solo', 'Jalan Dr. Rajiman No 515 Kecamatan Laweyan, Surakarta 57148', 5, 41, '', '-7.569852', '110.797303', '0271-732999', '', '', 0, 0, '', '1'),
(121, 'admin', 6, 6, 1, 'JUST INN HOTEL', 'just-inn-hotel', 'Jalan Surya No 129 RT 02/IX Kelurahan Jagalan, Kecamatan Jebres, Surakarta 57124', 1, 4, '', '-7.565732', '110.844242', '0271-647488', '', '', 200000, 200000, '', '1'),
(122, 'admin', 6, 6, 1, 'HOTEL ISTANA GRIYA 2', 'hotel-istana-griya-2', 'Jalan Imam Bonjol No 35 Surakarta', 0, 0, '', '-7.56965', '110.826038', '0271-661118', '', '', 225000, 350000, '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE IF NOT EXISTS `hubungi` (
  `id_hubungi` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `subjek` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `hubungi`
--

INSERT INTO `hubungi` (`id_hubungi`, `nama`, `email`, `subjek`, `pesan`, `tanggal`) VALUES
(1, 'Ariawan', 'ariawan@gmail.com', 'Mohon Informasi', 'Mohon informasi mengenai buku yang diterbitkan oleh Lokomedia.', '2008-02-10'),
(4, 'lukman', 'lukman@hakim', 'Request Code', 'Tolong dunk ..', '2009-02-25'),
(8, 'lukman', 'lukman@bukulokomedia.com', 'Kontak', '<p>Oke Terimakasih Gan</p>\r\n\r\n<p><br />\r\n(Di balas pada : 13 Desember 2013 )</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<p>tes modul hubungi kami</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2010-05-16'),
(9, 'Saya', 'sataniec26@gmail.com', 'Pesan Singkat', 'Tes', '2013-12-13'),
(10, 'tes', 'sataniec26@gmail.com', 'sasas', 'sasas', '2013-12-13'),
(11, 'tes', 'sataniec26@gmail.com', 'sasas', 'sasas', '2013-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `jaringan_hotel`
--

CREATE TABLE IF NOT EXISTS `jaringan_hotel` (
  `id_jaringan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jaringan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_jaringan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `jaringan_hotel`
--

INSERT INTO `jaringan_hotel` (`id_jaringan`, `nama_jaringan`, `deskripsi`, `status`) VALUES
(1, 'Tidak Memiliki Jaringan', '', '1'),
(2, 'Sahid Jaya International', '<p style="text-align:justify">Hotel Sahid Jaya Solo atau yang sering disebut HSJS adalah awal dari jaringan bisnis Hotel Sahid di seluruh Indonesia. Berdiri pada 8 juli 1965 dan menempati lahan seluas kurang lebih 3.000 m<sup>2</sup>. Pada awalnya hotel ini didirikan atas prakarsa Soekamdani Sahid Gitosardjono, seorang pengusaha percetakan dan publikasi yang sering melakukan perjalanan dinas ke berbagai daerah. Pada akhirnya Soekamdani Sahid Gitosardjono mendapatkan ide untuk mendirikan bisnis yang bergerak dibidang akomodasi. Sahid Sala Hotel adalah nama hotel ini ketika pertama kali didirikan. Nama Sahid sendiri diperoleh sebagai dedikasi kepada Sahid Gitosardjono, ayah dari Soekamdani Sahid Gitosardjono. Hingga saat ini terdapat kurang lebih 24 jaringan hotel dan apartemen Sahid Hotels di seluruh Indonesia dengan taraf berbintang.</p>\r\n\r\n<p style="text-align:justify">HSJS yang beralamat di Jl. Gajahmada No 82 Solo ini memiliki jumlah kamar sebanyak 136 dengan 4 tipe kamar yakni Superior, Deluxe, Executive dan Presiden Suite. Untuk melengkapi kebutuhan MICE maupun Wedding, HSJS dilengkapi dengan 6 function room yang masing-masing memiliki kapasitas yang berbeda. Bukan hanya MICE lokal namun MICE bertaraf international pun beberapa kali digelar di HSJS contohnya IAHA (International Associations of HIstorian of Asia) yang sudah terlaksana dengan aman pada juli 2012 lalu selama sepekan dan diikuti olehperwakilan dari 25 negara. Hotel yang juga merupakan pelopor di kota Solo ini, tak diragukan lagi dalam pelayanan. Terbukti selama 47 tahun HSJS tetap bisa konsisten bertahan ditengah persaingan hotel yang kian marak berkembang di Kota Solo. HSJS secara intens pula mengadakan training-training bagi intern karyawan-karyawati apabila terjadi kebakaran dan sehingga tamu pun merasa lebih terjamin keamanan dan kenyamanannya.</p>\r\n\r\n<p style="text-align:justify">HSJS memiliki posisi yang strategis di tengah kota. Tidak jauh dari pusat pemerintahan, pusat budaya, terminal bus, stasiun kota dan lain-lain. Hotel berbintang 5 ini dilengkapi dengan berbagai fasilitas seperti Swimming pool, Fitnes Center, laundry service, massage traditional dan spa, area parkir yang luas, lounge dengan live entertainment dan karaoke, dan masih banyak lagi.</p>\r\n\r\n<p style="text-align:justify">Sesuai tag line Hotel Sahid Group &quot;Where Traditional, Culture and Service Merge&quot; maka HSJS melayani tamu sepenuh hati dengan menggabungkan antara budaya dan ciri khas Kota Solo yang kental tanpa meninggalkan modernisasi.</p>\r\n\r\n<p style="margin-left: 40px;"><strong>Distance of point of interest: </strong></p>\r\n\r\n<ul>\r\n	<li>Batik Center : 2 km (10 minutes)</li>\r\n	<li>Klewer Market : 4 km (15 minutes)</li>\r\n	<li>Royal Kraton : 4 km (15 minutes)</li>\r\n	<li>Bus Station : 1,5 km (7 minutes)</li>\r\n	<li>Railway Station : 0,5 km (3 minutes)</li>\r\n	<li>Airport Adi Sumarmo :15,5 km (20 minutes)</li>\r\n</ul>\r\n', '1'),
(3, 'Novotel', '<p><strong>Novotel</strong> adalah sebuah merek hotel berskala menengah milik grup <a href="http://id.wikipedia.org/wiki/Accor" title="Accor">Accor</a>. Novotel memiliki sekitar 400 hotel dan resor di 60 negara yang terletak di distrik-distrik keuangan dan destinasi pariwisata di sejumlah kota ternama dunia.</p>\r\n\r\n<p>Di Indonesia, novotel terdapat di beberapa kota, diantaranya:</p>\r\n\r\n<div style="column-count:2; column-gap:10px; -moz-column-count:2; -moz-column-gap:10px; -webkit-column-count:2; -webkit-column-gap:10px;">\r\n<ul>\r\n	<li>Hotel Novotel Balikpapan</li>\r\n	<li>Hotel Novotel Bogor Golf Resort and Convention Center</li>\r\n	<li>Hotel Novotel Bali Benoa</li>\r\n	<li>Novotel Bali Nusa Dua Hotel &amp; Residences</li>\r\n	<li>Hotel Novotel Bangka Golf Resort and Convention Center</li>\r\n	<li>Hotel Novotel Bandung</li>\r\n	<li>Hotel Novotel Batam</li>\r\n	<li>Hotel Novotel Lombok</li>\r\n	<li>Novotel Surabaya Hotel &amp; Suites</li>\r\n	<li>Novotel Palembang Hotel &amp; Residence</li>\r\n	<li>Hotel Novotel Jakarta Mangga Dua Square</li>\r\n	<li>Hotel Novotel Solo</li>\r\n	<li>Hotel Novotel Lampung</li>\r\n	<li>Hotel Novotel Manado Golf Resort &amp; Convention Center</li>\r\n	<li>Hotel Novotel Grand Tarakan Mall</li>\r\n	<li>Hotel Novotel Yogyakarta</li>\r\n	<li>Hotel Novotel Semarang</li>\r\n</ul>\r\n</div>\r\n', '1'),
(4, 'Ibis', '<p><strong>Ibis</strong> adalah merupakan merek jaringan hotel yang dimiliki oleh grup perhotelan <a href="http://id.wikipedia.org/wiki/Perancis" title="Perancis">Perancis</a>, <a href="http://id.wikipedia.org/wiki/Accor" title="Accor">Accor</a>. Jaringan dari hotel ini paling banyak terdapat di <a href="http://id.wikipedia.org/wiki/Perancis" title="Perancis">Perancis</a>, namun banyak juga ditemukan tersebar di seluruh dunia. Pangsa pasar jaringan hotel ibis adalah ditujukan bagi para pengusaha/pebisnis, dan pada umumnya merupakan hotel yang bertaraf internasional dengan bintang dua atau tiga.</p>\r\n', '1');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_hotel`
--

CREATE TABLE IF NOT EXISTS `jenis_hotel` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_hotel` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_jenis`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jenis_hotel`
--

INSERT INTO `jenis_hotel` (`id_jenis`, `jenis_hotel`, `deskripsi`, `status`) VALUES
(1, 'Bed and Breakfast', '<p>Jenis hotel ini biasanya berupa rumah dengan 10 hingga 15 kamar di lokasi yang umum dengan fasilitas sarapan yang sudah masuk dalam tarif kamar.</p>\r\n', '1'),
(2, 'Inn', '<p>Definisi Inn (misalnya Summer Inn), memang masih cenderung ditemukan di negara-negara Barat seperti Inggris atau Amerika. Biasanya berupa properti yang dimiliki secara independen dengan lebih dari 10 kamar namun kurang dari 50 kamar. Pemiliknya biasanya tinggal terpisah dari bangunan utama. Beberapa Inn memasukkan makan malam dan sarapan dalam tarif harga kamar.</p>\r\n', '1'),
(3, 'Hotel Boutique', '<p>Hotel ini biasanya memiliki ciri unik, <em>stylish</em>, atau memiliki desain interior dan dekorasi yang aneh. Tamu biasanya akan disuguhi suasana dan pengalaman yang berbeda dari hotel pada umumnya. Hotel boutique biasanya dimiliki secara independen, namun saat ini sudah banyak jaringan hotel boutique seperti Hotel Kimpton dan Marriot telah meluncurkan label hotel boutique bernama Edition.</p>\r\n', '1'),
(4, ' Resor', '<p>Jenis resor biasanya menawarkan tempat tetirah dan rekreasi. Misalnya Resor Ski, Resor Golf, Resor Pantai, Resor Danau, dan Resor Spa. Tarif per tamu biasanya termasuk makanan. Sebagian besar resor juga memasukkan aktivitas untuk tamunya seperti tenis, outbound, atau menawarkan penyewaan fasilitas seperti sepeda atau kursus bermain ski.</p>\r\n', '1'),
(5, 'Motel', '<p>Didesain untuk turis yang membutuhkan waktu beristirahat yang dekat dengan jalan antar kota dengan tempat parkir yang bebas, namun dengan layanan dan peralatan kamar yang terbatas. Ruangan sering kali biasanya memiliki pintu yang langsung berhadapan dengan halaman.</p>\r\n', '1'),
(6, 'Hotel', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_hotel`
--

CREATE TABLE IF NOT EXISTS `kategori_hotel` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kategori_hotel`
--

INSERT INTO `kategori_hotel` (`id_kategori`, `nama_kategori`, `deskripsi`, `status`) VALUES
(1, 'Bintang 1', '<p>Bintang 1</p>\r\n', '1'),
(2, 'Bintang 2', '', '1'),
(3, 'Bintang 3', '', '1'),
(4, 'Bintang 4', '', '1'),
(5, 'Bintang 5', '', '1'),
(6, 'Melati', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id_kecamatan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`, `status`) VALUES
(1, 'Jebres', '1'),
(2, 'Banjarsari', '1'),
(3, 'Pasar Kliwon', '1'),
(4, 'Serengan', '1'),
(5, 'Laweyan', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE IF NOT EXISTS `kelurahan` (
  `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT,
  `id_kecamatan` int(11) NOT NULL,
  `nama_kelurahan` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id_kelurahan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `id_kecamatan`, `nama_kelurahan`, `status`) VALUES
(1, 1, 'Sudiroprajan', '1'),
(2, 1, 'Gandekan', '1'),
(3, 1, 'Sewu', '1'),
(4, 1, 'Jagalan', '1'),
(5, 1, 'Pucang Sawit', '1'),
(6, 1, 'Jebres', '1'),
(7, 1, 'Mojosongo', '1'),
(8, 1, 'Tegalharjo', '1'),
(9, 1, 'Purwadiningratan', '1'),
(10, 1, 'Kepatihan Wetan', '1'),
(11, 1, 'Kepatihan Kulon', '1'),
(12, 2, 'Timuran', '1'),
(13, 2, 'Keprabon', '1'),
(14, 2, 'Ketelan', '1'),
(15, 2, 'Punggawan', '1'),
(16, 2, 'Kestalan', '1'),
(17, 2, 'Stabelan', '1'),
(18, 2, 'Gilingan', '1'),
(19, 2, 'Nusukan', '1'),
(20, 2, 'Kadipiro', '1'),
(21, 2, 'Banyuanyar', '1'),
(22, 2, 'Sumber', '1'),
(23, 2, 'Manahan', '1'),
(24, 2, 'Mangkubumen', '1'),
(25, 3, 'Kampung Baru', '1'),
(26, 3, 'Kauman', '1'),
(27, 3, 'Kedung Lumbu', '1'),
(28, 3, 'Baluwarti', '1'),
(29, 3, 'Gajahan', '1'),
(30, 3, 'Joyosuran', '1'),
(31, 3, 'Semanggi', '1'),
(32, 3, 'Pasar Kliwon', '1'),
(33, 3, 'Sangkrah', '1'),
(34, 4, 'Kemlayan', '1'),
(35, 4, 'Jayengan', '1'),
(36, 4, 'Kratonan', '1'),
(37, 4, 'Tipes', '1'),
(38, 4, 'Serengan', '1'),
(39, 4, 'Danukusuman', '1'),
(40, 4, 'Joyotakan', '1'),
(41, 5, 'Penumping', '1'),
(42, 5, 'Sriwedari', '1'),
(43, 5, 'Purwosari', '1'),
(44, 5, 'Kerten', '1'),
(45, 5, 'Jajar', '1'),
(46, 5, 'Karangasem', '1'),
(47, 5, 'Pajang', '1'),
(48, 5, 'Sondakan', '1'),
(49, 5, 'Laweyan', '1'),
(50, 5, 'Bumi', '1'),
(51, 5, 'Penularan', '1');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_page`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id_page`, `judul`, `isi`, `status`) VALUES
(1, 'Informasi Website', '<p><strong>Hotel</strong> berasal dari kata <strong>hostel</strong>, konon diambil dari <a href="http://id.wikipedia.org/wiki/Bahasa_Perancis" title="Bahasa Perancis">bahasa Perancis</a> kuno. Bangunan publik ini sudah disebut-sebut sejak akhir abad ke-17. Maknanya kira-kira, &quot;tempat penampungan buat pendatang&quot; atau bisa juga &quot;bangunan penyedia pondokan dan makanan untuk umum&quot;. Jadi, pada mulanya hotel memang diciptakan untuk meladeni masyarakat.</p>\r\n\r\n<p>Awalnya, hotel hanya sebuah tempat penginapan dengan fasilitas dan layanan ala kadarnya, yang penting ada kamar, tempat tidur, dan kamar mandi. Namun karena perkembangan jaman, lambat laun <a href="http://asiahotelsreview1.com/tips/extended-stay-hotels">hotel</a> mulai menyediakan berbagai fasilitas untuk memanjakan tamu agar betah berlama-lama menginap, seperti restoran, sarana olahraga, kolam renang, telepon, brankas tempat menyimpan barang berharga, <em>coffee/tea maker</em>, dan lain-lain. Bahkan kini ada fasilitas ruang pertemuan dan layanan pijat/sauna, antar-jemput bandara, dan <em>city tour</em>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Syarat - syarat yang dimiliki hotel berbintang dapat diklasifikasikan sebagai berikut :</p>\r\n\r\n<p><strong>1. Hotel Berbintang 1 ( * )</strong>&nbsp;</p>\r\n\r\n<p>Sebuah Hotel akan dikatakan berbintang satu jika minimal memiliki kurang lebih memiliki 15 kamar hotel, 1 kamar suite room, dan restaurant.</p>\r\n\r\n<p><strong>2. Hotel Berbintang 2 ( * * )</strong></p>\r\n\r\n<p>Sebuah Hotel akan dikatakan berbintang dua jika minimal memiliki kurang Lebih memiliki 20 kamar hotel, 2 kamar suite room, restaurant dan memiliki fasilitas tambahan.</p>\r\n\r\n<p><strong>3. Hotel Berbintang 3 ( * * * ) </strong></p>\r\n\r\n<p>Sebuah Hotel akan dikatakan berbintang tiga jika minimal memiliki kurang Lebih memiliki 30 kamar hotel, 3 kamar suite room, restaurant, dan memliki fasilitas tambahan.</p>\r\n\r\n<p><strong>4. Hotel Berbintang 4 ( * * * * )&nbsp; </strong></p>\r\n\r\n<p>Sebuah hotel akan dikatakan berbintang empat jika minimal memiliki kurang lebih memiliki 50 Kamar hotel, 4 kamar suite room, restaurant, taman , kolam renang serta fasilitas tambahan lainnya.</p>\r\n\r\n<p><strong>5.. Hotel Berbintang 5 ( * * * * * )</strong></p>\r\n\r\n<p>Sebuah Hotel akan dikatakan berbintang lima jika minimal memiliki kurang lebih memiliki 100 kamar hotel, 5 kamar suite room, restaurant, taman, kolam renang serta fasilitas tambahan lainnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Berikut Jenis Hotel Sebagai Acuan Sistem Informasi Hotel:</p>\r\n\r\n<p><strong>1. Bed and Breakfast</strong><br />\r\nJenis hotel ini biasanya berupa rumah dengan 10 hingga 15 kamar di lokasi yang umum dengan fasilitas sarapan yang sudah masuk dalam tarif kamar.<br />\r\n<br />\r\n<strong>2. Inn</strong><br />\r\nDefinisi Inn (misalnya Summer Inn), memang masih cenderung ditemukan di negara-negara Barat seperti Inggris atau Amerika. Biasanya berupa properti yang dimiliki secara independen dengan lebih dari 10 kamar namun kurang dari 50 kamar. Pemiliknya biasanya tinggal terpisah dari bangunan utama. Beberapa Inn memasukkan makan malam dan sarapan dalam tarif harga kamar.<br />\r\n<br />\r\n<strong>3. Hotel Boutique</strong><br />\r\nHotel ini biasanya memiliki ciri unik, <em>stylish</em>, atau memiliki desain interior dan dekorasi yang aneh. Tamu biasanya akan disuguhi suasana dan pengalaman yang berbeda dari hotel pada umumnya. Hotel boutique biasanya dimiliki secara independen, namun saat ini sudah banyak jaringan hotel boutique seperti Hotel Kimpton dan Marriot telah meluncurkan label hotel boutique bernama Edition.<br />\r\n<br />\r\n<strong>4. Resor</strong><br />\r\nJenis resor biasanya menawarkan tempat tetirah dan rekreasi. Misalnya Resor Ski, Resor Golf, Resor Pantai, Resor Danau, dan Resor Spa. Tarif per tamu biasanya termasuk makanan. Sebagian besar resor juga memasukkan aktivitas untuk tamunya seperti tenis, outbound, atau menawarkan penyewaan fasilitas seperti sepeda atau kursus bermain ski.<br />\r\n<br />\r\n<strong>5. Motel</strong><br />\r\nDidesain untuk turis yang membutuhkan waktu beristirahat yang dekat dengan jalan antar kota dengan tempat parkir yang bebas, namun dengan layanan dan peralatan kamar yang terbatas. Ruangan sering kali biasanya memiliki pintu yang langsung berhadapan dengan halaman.<br />\r\n&nbsp;</p>\r\n', '1'),
(2, 'Bantuan', '<p>Untuk menggunakan aplikasi ini sangat mudah.</p>\r\n\r\n<p style="margin-left: 40px;">1. Pada sidebar masukan atau pilih kata kunci yang sesuai dengan yang anda inginkan.</p>\r\n\r\n<p style="margin-left: 40px;"><img alt="" src="/sim/vendors/media/images/2013-12-15_094356.png" style="height:300px; width:168px" /></p>\r\n\r\n<p style="margin-left: 40px;">2. Setelah mengisikan kata kunci tekan submit <img alt="" src="/sim/vendors/media/images/2013-12-15_094712.png" style="height:37px; width:80px" /></p>\r\n\r\n<p style="margin-left: 40px;">3. Maka Hasil Pencarian akan di tampilkan</p>\r\n\r\n<p style="margin-left: 40px;">.<img alt="" src="/sim/vendors/media/images/2013-12-15_094820.png" style="height:299px; width:400px" /></p>\r\n\r\n<p style="margin-left: 40px;">4. Untuk melihat detil hotel, silahkan klik link selengkapnya&nbsp; <img alt="" src="/sim/vendors/media/images/2013-12-15_095241.png" style="height:18px; width:96px" /></p>\r\n', '1'),
(3, 'Tentang Aplikasi', '<p>Kota Solo yang saat ini mulai berkembang, baik dari sektor ekonomi maupun sektor pariwisata mulai dilirik pengunjung dari berbagai penjuru, baik pendatang domestik, maupun pendatang mancanegara. Kedatangan para pendatang baik yang berkepentingan untuk melakukan bisnis maupun yang berkepentingan untuk melakukan perjalanan wisata tentunya juga membutuhkan tempat tingal sementara untuk bersinggah. Melihat saat ini sudah banyak hotel yang berdiri di kota Solo yang menyediakan berbagai fasilitas dan layanan yang berbeda pula sehingga tarif yang ditawarkan juga berbeda-beda. Tentunya dalam memilih hotel harus disesuaikan dengan kebutuhan dan kondisi keuangan.</p>\r\n\r\n<p>Sistem informasi ini dibuat untuk membantu mempermudah pencarian hotel disesuaikan dengan kebutuhan dan kondisi keuangan, sehingga dalam pengambilan keputusan untuk menginap di salah hotel di kota Solo kelak lebih efektif dan efisien.</p>\r\n\r\n<p>Jika Ada Kritik Dan Saran Silahkan Mengirimkan Lewat Form Di Bawah Ini.</p>\r\n\r\n<p>Terimakasih.</p>\r\n', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` enum('0','1') NOT NULL DEFAULT '0',
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `email`, `level`, `join_date`, `status`) VALUES
('admin', '5c8bf4fc5a247ed873f415543a9e7786', 'Admin', 'admin@gmail.com', '1', '2004-05-30 15:19:14', '1'),
('user', 'd07683e57dffff18e06e970c259afbfe', 'user', 'user@yahoo.com', '0', '2004-05-31 14:08:54', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
