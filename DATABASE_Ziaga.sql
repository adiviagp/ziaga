-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2019 at 03:25 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ziaga`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `kategori`, `description`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Gunung Berapi', 'Gunung Berapi adalah Gunung yang terbentuk akibat material hasil erupsi menumpuk di sekitar pusat erupsi atau gunung yang terbentuk dari erupsi magma.', 'gunungberapi.png', '2018-12-16 05:01:59', '2018-12-16 05:01:59'),
(2, 'Gempa', 'Gempa bumi adalah guncangan atau getaran di permukaan bumi akibat pergeseran lapisan batuan di dasar permukaan bumi.', 'gempa.png', '2018-12-16 05:03:03', '2018-12-16 05:03:03'),
(3, 'Tsunami', 'Tsunami adalah gelombang air yang sangat besar yang dibangkitkan oleh macam-macam gangguan di dasar samudra.', 'tsunami.png', '2018-12-16 05:03:46', '2018-12-16 05:03:46'),
(4, 'Longsor', 'Longsor adalah suatu peristiwa geologi yang terjadi karena pergerakan masa batuan atau tanah dengan berbagai tipe dan jenis seperti jatuhnya bebatuan atau gumpalan besar tanah.', 'longsor.png', '2018-12-16 05:21:07', '2018-12-16 05:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_artikel` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `thumbnail`, `category_id`, `description`, `isi_artikel`, `user_id`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'Sigap Saat Terjadi Bencana Gempa Bumi', 'gempa.jpg', '2', 'gempa', '<p>Gempa bumi merupakan bencana yang terjadi akibat adanya pergeseran pada bagian dalam bumi secara tiba tiba dan merupakan peristiwa pelepasan Energi.</p>\r\n\r\n<p><strong><em>Apa yang menyebabkan terjadinya gempa bumi?</em></strong></p>\r\n\r\n<ul>\r\n	<li>Adanya pergeseran lempeng bumi yang di akibatkan adanya proses tektonik</li>\r\n	<li>Adanya aktifitas sesar di bagian permukaan bumi</li>\r\n	<li>Di picu oleh gerakan Geomorfologi lokal seperti terjadi runtuhan tanah.</li>\r\n	<li>Aktiftas gunung berapi, Dan</li>\r\n	<li>Di picu oleh ledakan Nuklir</li>\r\n</ul>\r\n\r\n<p>Kerusakan yang terjdi akibat gempa bumi karena, adanya getaran yang di rambatkan seluruh bagian bumi, dari getaran tersebut akan mengakibatkan kerusakan dan runtuhnya bangunan sehingga dapat menimbulkan korban jiwa. Gempa juga sangat memciu terjadinya bencana lain sepertim Tanah Longsr , runtuhan bebatuan hingga bencana tsunami</p>\r\n\r\n<p><strong>Gejala dan Peringatan Dini</strong></p>\r\n\r\n<ul>\r\n	<li>Kejadian mendadak/secara tiba-tiba</li>\r\n	<li>Belum ada metode pendugaan secara akurat</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Tips Saat Terjadinya Gempa Bumi</h2>\r\n\r\n<p>Berikut akan kami berikan tips tips saat terjadi gempa bumi, sehingga anda bisa melakukan penyelamatan dini saat terjadi gempa bumi dimanapun anda berada. :</p>\r\n\r\n<p><strong>Didalam Rumah</strong></p>\r\n\r\n<p>Jika terjadi gempa bumi dan posisi anda sedang berada di rumah., anda bisa bersembunyi di bawah meja yang kokoh agar tida terkena jatuhan benda benda, lebih baik untuk keluar luar rumah dan cari tempat aman hingga kondisi sudah mulai stabil</p>\r\n\r\n<p><strong>Di sekolah</strong></p>\r\n\r\n<p>Berlindunglah di bawah kolong meja, lindungi kepala dengan tas atau buku, jangan panik, jika gempa mereda keluarlah berurutan mulai dari jarak yang terjauh ke pintu,</p>\r\n\r\n<p><strong>Di Luar Rumah</strong></p>\r\n\r\n<p>Cari tempat aman, tetap lindungi kepala anda jangan berada di bawah gedung untuk menghindari dari reruntuhan dan juga pecahan kaca.</p>\r\n\r\n<p><strong>Didalam Kendaraan</strong></p>\r\n\r\n<p>Jika anda sedang berada di dalam mobil dan terjadi gempa, mobil akan terasa bergoyang, ada baiknya hentikan kendaraan dan cari tempat aman.</p>\r\n\r\n<p><strong>Cari Informasi</strong></p>\r\n\r\n<p>Setelah terjadi gempa, tetap cari informasi melalui radio sekaligus tetap berada di tempat aman hal tersebut agar tetap mewaspadai saat terjadi gempa susulan. Anda dapat memperoleh informasi yag benar dari pihak yang berwenang atau polisi.</p>', 1, 1, '2018-12-18 07:33:25', '2018-12-18 07:33:25'),
(2, 'Hal yang Perlu di Lakukan Ketika Terjadi Gempa Bumi', 'gempa2.jpg', '2', 'gempa', '<p>Indonesia merupakan salah satu negara dengan kerentanan bencana gempa bumi cukup tinggi. Hal tersebut dikarenakan wilayah Indonesia berada pada tiga lempeng dunia. Hal tersebut membuat Indonesia lebih rawan dan sering terjadi gempa bumi dibandingkan dengan negara lainnya. Oleh sebab itu masyarakat harus waspada terhadap gempa bumi. Tercatat Indonesia sudah beberapa kali dilanda gempa besar yang menimbulkan kerusakan bahkan menimbulkna korban jiwa.</p>\r\n\r\n<p>Bencana gempa bumi tidak bisa diprediksi oleh masyarakat. Gempa bisa terjadi kapan saja, ketika kita sedang tidur atau bahkan sedang beraktifitas gempa bisa saja terjadi. Ada baiknya kita sudah membekali diri ketika terjadi gempa hal tersebut dilakukan untuk meminimalisir risiko dari bencana gempa bumi.</p>\r\n\r\n<h2><strong>Beberapa hal yang perlu dilakukan sebagai persiapan ketika terjadi gempa :</strong></h2>\r\n\r\n<ol>\r\n	<li>Tetap tenangkan diri dan jangan panik ketika terjadi gempa bumi. Jika anda berada didalam rumah, anda bisa keluar untuk menyelamatkan diri lalu cari tempat aman yang jauh dari bangunan dan pohon. Atau anda juga bisa berlindung di bawah meja dan lindungi kepala dengan tas atau tangan. Usahakan untuk tidak berada dekat dengan lemari atau barang pecah belah. Lalu keluar jika getaran gempa sudah tidak terasa.</li>\r\n	<li>Ketika anda berada didalam gedung, secepatnya keluar dari dalam gedung. gunakan tangga darurat sebagai jalur penyelamatan diri dan jangan menggunakan lift. Anda harus sudah mengetahui tangga dadurat dan jalur evakuasi, sehingga bisa langsung tahu tempat untuk menyelamatkan diri ketika terjadi gempa.</li>\r\n	<li>Jika anda berada diluar ruangan saat gempa. Anda harus mewaspadai bangunan, pohon tinggi. Hindari berada di dekat tiang-tiang tinggi karena sangat berbahaya jika rubuh dan menimpa orang yang ada di bawahnya</li>\r\n	<li>Ketika getaran gempa sudah tidak terasa. Ada baiknya anda mewaspadai gempa susulan. Getaran yang terjadi pada gempa susulan terkadang lebih besar dari gempa pertama. Cari tahu informasi gempa yang terjadi melalui siaran radio lokal sehingga anda bisa mengetahui kondisi yang sedang terjadi</li>\r\n</ol>', 1, 1, '2018-12-18 07:36:46', '2018-12-18 07:36:46'),
(3, 'Sigap Menghadapi  Bencana Tanah Longsor', 'longsor.JPG', '4', 'longsor', '<p>Bencana banjir dan tanah longsor merupakan salah satu bencana yang sering terjadi di Indonesia terutama saat masuk musim hujan. Beberapa daerah di Indonesia memiliki kerentanan terhadap bencana ini bahkan beberapa diantaranya masuk dalam zona merah rawan longsor. Oleh sebab itu masyarakat harus sigap dalam menghadapi bencana longsor, sebab bencana ini bukan hanya menimbulkan kerusakan namun juga bisa menimbulkan korban jiwa.</p>\r\n\r\n<p>Tanah longsor merupakan kejadian pergerakan tanah, batuan atau material lainnya dalam jumlah besar yang terjadi secara tiba-tiba, biasanya terjadi pada daerah terjal dan tidak stabil. Penyebab utama tanah longsor adalah gravitasi, tetapi besarnya volume dipengaruhi oleh berbagai faktor alam dan manusia. Hujan deras juga bisa menjadi pemicu terjadinya tanah longsor.</p>\r\n\r\n<h2>Ciri-ciri daerah rawan longsor</h2>\r\n\r\n<ol>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Daerah bukit, lereng dan pegunungan dengan kelerengan lebih dari 20 derajat.</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kondisi lapisan tanah tebal diatas lereng.</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sistem tata air dan tata guna lahan yang buruk.</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lereng terbuka atau gundul akibat penebangan pohon secara brutal.</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Adanya retakan pada bagian atas tebing.</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Terdapat mata air atau rembesan air pada tebing yang disertai dengan longsoran kecil.</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pembebanan yang berlebihan pada lereng seperti adanya bangunan rumah atau saranan lainnya.</li>\r\n</ol>\r\n\r\n<h2>Sigap Menghadapi Tanah Longsor</h2>\r\n\r\n<p>Tanah longsor terjadi mendadak, bisa terjadi siang hari bahkan terjadi pada tengah malam. Bencana tanah longsor biasanya juga terjadi setelah hujan deras. Karena bencana ini terjadi secara mendadak, evakuasi penduduk segera setelah diketahui tanda-tanda tebing akan longsor.</p>\r\n\r\n<p>Sementara itu Masyarakat yang berada di daerah rawan longsor harus melakukan patroli secara bergantian. Longsor yang terjadi di malam hari lebih banyak menelan korban jiwa, karena orang-orang tidak sempat untuk menyelamatkan diri saat mereka tertidur.</p>\r\n\r\n<p>Ada baiknya jika sudah ada tanda-tanda tebing akan longsor, kita harus mengevakuasi atau mencari tempat aman sambil menghubungi pihak terkait untuk membantu melakukan evakuasi</p>', 1, 1, '2018-12-18 07:40:11', '2018-12-18 07:40:11'),
(4, 'Kenali Tanda Tanda Akan Munculnya Tsunami', 'tsunami.jpg', '3', 'tsunami', '<p>Indonesia termasuk kedalam zona rawan bencan. Berbagai macam bencana alam mengintai wilayah Indonesia. Salah satu bencana yang perlu menjadi perhatian adalah Tsunami. Sebab Indonesia memiliki hamparan laut yang luas, sehingga bencana ini bisa datang tiba tiba terutama setelah terjadinya gempa bumi</p>\r\n\r\n<p>Pasca kejadian Gempa bumi dan Tsunami yang terjadi di Aceh pada 2004 silam, pemerintah saat ini semakin mengembangkan sistem peringatan dini terkait tsunami. Hal tersebut agar masyarakat sudah bisa melakukan antisipasi ketika akan terjadinya tsunami.</p>\r\n\r\n<p>Tsunami sendiri merupakan serangkaian gelombang yang diakibatkan oleh tanah longsor atau gempa bumi besar baik yang terjadi dilaut ataupun di darat. Gelombang tsunami dapat terjadi 5 menit hingga 1 jam setelah longsor atau gempa bumi. Masyarakat yang berada di area pantai harus bisa mengenali tanda tanda akan munculnya tsnumai, sebab bencana ini biasanya banyak menelan korban jiwa.</p>\r\n\r\n<h2><strong>Tanda Tanda Munculnya Tsunami</strong></h2>\r\n\r\n<p><strong>Diawali gempa bumi</strong></p>\r\n\r\n<p>Bagi masyarakat yang tinggal didekat pantai, ada baiknya tetap waspada ketika terjadi gempa bumi. Tsunami biasanya terjadi karena adanya gempa bumi yang terjadi dibawah atau didekat laut. Bukan hanya gempa di daerah tersebut., namun gempa di berbagai negara lainnya juga bisa memicu terjadinya tsunami di daerah anda.</p>\r\n\r\n<p><strong>Perhatikan Suara Gemuruh</strong></p>\r\n\r\n<p>Menurut keterangan para korban tsunami. Sebelumnya munculnya gelombang tinggi, biasanya akan diawali dengan suara gemuruh yang sangat keras yang mirip dengan suara kereta barang.</p>\r\n\r\n<p><strong>Perhatikan penurunan air laut</strong></p>\r\n\r\n<p>Setelah terjadinya gempa, lalu melihat adanya penurunan air laut yang cepat dab bukan merupakan waktu air laut surut. Maka segeralah cari tempat yang lebih tinggi untuk berlindung. Sebelum terjadinya tsunami, air laut akan terlebih dahulu surut lalu akan kembali naik dengan kekuatan yang sangat besar.</p>\r\n\r\n<p><strong>Waspadai gelombang tsunami</strong></p>\r\n\r\n<p>Gelombang tsunami pertama tidak selalu yang paling berbahaya. Sehingga perlu tetap berada di tempat aman hingga situasi benar benar aman. Jangan berasumsi bahwa karena tsunami kecil di satu tempat maka akan kecil juga pada daerah yang lain. Sebab gelombang tsunami akan bervariasi.</p>', 1, 1, '2018-12-18 08:14:01', '2018-12-18 08:14:01'),
(5, 'Persiapan Menghadapi Letusan Gunung Api', 'gunung.jpg', '1', 'gunung berapi', '<p>Indonesia masih memiliki Gunung Api yang Aktif, beberapa di antaranya sudah sempat meletus, sebut saja Gunung Merapi Yogyakarta dan Gunung Sinabung. Gunung api masih menjadi ancaman bagi masyarakat karena sewaktu waktu bisa saja Erupsi. Tentu hal ini perlu di waspadai. Letusan gunung api memberikan dampak positif bagi manusia dan juga bagi lingkungan. Salah satunya adalah letusan abu gunung berapi yang mengandung bermacam-macam gas mulai dari Sulfur Dioksida atau SO2, gas Hidrogen sulfide atau H2S, No2 atau Nitrogen Dioksida serta beberapa partike debu yang berpotensial meracuni makhluk hidup di sekitarnya.</p>\r\n\r\n<p>Letusan Gunung Api bisa membuat kelumpuhan ekonomi karena aktifitas masyarakat di wilayah gunung api akan terganggu. Oleh sebab itu banyak yang perlu di perhatikan untuk menghadapi letusan gunung api. Bagi masyarakat yang tinggal di sekitaran gunung api aktif perlu tetap waspada dan perlu mempersiapkan dari sekarang karena erupsi bisa terjadi secara tiba tiba.</p>\r\n\r\n<h3>Persiapan Dalam Menghadapi Letusan Gunung Berapi</h3>\r\n\r\n<ul>\r\n	<li>Kenali daerah setempat dalam menentukan tempat aman untuk mengungsi. Hal ini dilakukan sebagai antisipasi awal saat gunung api baru Erupsi dan sambil menunggu bantuan dari Dinas Terkait</li>\r\n	<li>Membuat perencanaan penanganan bencana erupsi gunung api.</li>\r\n	<li>Mempersiapkan pengungsian saat diperlukan</li>\r\n	<li>Mempersiapkan kebutuhan dasar seperti, makanan, minuman, serta obat obatan</li>\r\n</ul>\r\n\r\n<h3>Jika Terjadi Letusan Gunung Api</h3>\r\n\r\n<ul>\r\n	<li>Pergi menjauh dari area gunung terutama area berbahaya seperti lereng gunung, lembah dan daerah aliran lahar.</li>\r\n	<li>Jika berada di tempat terbuka, tetap lindungi diri dari abu letusan dan awan panas. Waspadai karena sewaktu waktu bisa terjadi letusan susulan.</li>\r\n	<li>Kenakan pakaian yang bisa melindungi tubuh seperti: baju lengan panjang, celana panjang, topi dan lainnya.</li>\r\n	<li>Pakai masker atau kain untuk menutupi mulut dan hidung</li>\r\n	<li>Saat turunnya awan panas usahakan untuk menutup wajah dengan kedua belah tangan.</li>\r\n</ul>\r\n\r\n<h3>Setelah Terjadi Letusan Gunung Berapi</h3>\r\n\r\n<ul>\r\n	<li>Jauhi wilayah yang terkena hujan abu</li>\r\n	<li>Bersihkan atap dari timbunan abu. Karena beratnya, bisa merusak atau meruntuhkan atap bangunan.</li>\r\n	<li>Hindari mengendarai mobil di daerah yang terkena hujan abu sebab bisa merusak mesin</li>\r\n</ul>', 1, 1, '2018-12-18 08:19:29', '2018-12-18 08:19:29'),
(6, 'Tips Siaga Bencana Gunung Meletus', 'gunungberapi.jpg', '1', 'gunung berapi', '<p>Gunung api meletus disebabkan maga di dalam perut bumi yang di dorong keluar oleh gas yang bertekanan tinggi atau karena pergerakan lempengan bumi,tumpukan tekanan dan panas cairan magma. Letusannya membawa abu dan batu yang menyenbur dengan keras, sedangkan lavanya bisa membanjiri daerah sekitarnya bahkan hingga radius ribuan kilometer.</p>\r\n\r\n<p><strong>Pusat Vulkanologi dan Mitigasi Bencana Geologi membagi status gunung api aktif menjadi:</strong></p>\r\n\r\n<p>AWAS : Letusan dapat menjadi dalam waktu 24 jam.<br />\r\nSIAGA : Letusan dapat menjadi dalam waktu 2 minggu<br />\r\nWASPADA : Aktifitas vulkanik san seismik/kegempaan gunung sudah meningkat<br />\r\nNORMAL : Tidak ada gejala tekanan magma.</p>\r\n\r\n<p><strong>Apa saja akibat yang di timbulkan oleh letusan gunung api ?</strong></p>\r\n\r\n<p><strong>Bahaya letusan gunung berapi adalah adanya erupsi, yang dapat berupa :</strong></p>\r\n\r\n<p>&bull; Awan panas , Bersuhu 300 sampai 700 derajat celcius, berkecepatan lebih dari 70 km/jam.<br />\r\n&bull; Material vulkanik, berupa batuan panas bersuhu lebih dari hujan abu yang mengandung asam dan berbahaya bagi pernafasan ,penglihatan,merusak air tanah dan tanaman<br />\r\n&bull; Lava atau lahar ,yang berwujud cairan kental bersuhu antara 700 sampai 1200 derajat celcius.<br />\r\n&bull; Gas beracun yang dapat keluar melalu rongga atau kawah bersama letusan , yang dapat mematikan makhluk hidup.<br />\r\n&bull; Tsunami, bilamana gunung api yang berada di bawah permukaan laut meletus.<br />\r\nApa yang harus dilakukan ?</p>\r\n\r\n<p><strong>Sebelum terjadi letusan:</strong></p>\r\n\r\n<p>&bull; Kenali kawasan rawan bencana letusan gunung api<br />\r\n&bull; Sepakati tempat berkumpul bersama warga sekitar.<br />\r\n&bull; Menentukan jalur penyelamatan /evakuasi yang terdekat dari rumah untuk menuju tempat berkumpul<br />\r\n&bull; Siapkan tas khusus yang berisi kebutuhan hidup selama tiga hari seperti,makanan,pakaian dan obat-obatan.<br />\r\n&bull; Mengikutin latihan penyelamatan /evakuasi secara berkala untuk menyelamatkan diri menuju lokasi yang aman pada saat terjadi gempa.</p>\r\n\r\n<p><strong>Saat terjadi letusan :</strong></p>\r\n\r\n<p>&bull; Segeta mengungsi apabila sudah ada perintah mengungsi dari instansi/badan yang berwenang.<br />\r\n&bull; Hindari melewati jalur yang searah dengan arah angin dan sungai yang berhulu di puncak gunung yang sedang meletus.<br />\r\n&bull; Hindari daerah bahaya yang telah di tetapkan dengan melihat peta ancaman bahaya letusan gunung api.<br />\r\n&bull; Apabila melihat permukaan aliran air sungai naik,cepat-cepat cari daerah yang lebih tinggi.<br />\r\n&bull; Apabila terjebak dalam ruangan ,tutup semua pintu dan jendela.<br />\r\n&bull; Apabila berada di ruang terbuka cari ruang perlindungan darurat.<br />\r\n&bull; Apabila terjadi hujan batu,lindungi kepala dengan posisi menunduk dengan tubuh condong kedepan untuk melindungi dada serta silangkan tangan di antara kepalan dan tengkuk untuk melindungi kepala .<br />\r\n&bull; Saat turun hujan abu,jangan memakai lensa kontak(bagi yang menggunkanannya),usahakan menutup wajah dengan kedua telapak tangan atau sapu tangan serta gunakan kain / masker untuk melindungi pernafasan</p>\r\n\r\n<p><strong>Setelah terjadi letusan :</strong></p>\r\n\r\n<p>&bull; Kembali kerumah setelah situasi di nyatakan aman oleh pihak berwenang<br />\r\n&bull; Bersihkan atap rumah dari debu/abu gunung hujan debu yang menutupi atap rumah apabila tebal akan sangat beratdan dapat mengakibatkan runtuhnya atap rumah.</p>\r\n\r\n<p><strong>Pasca letusan :</strong></p>\r\n\r\n<p>&bull; Apabila memungkiknan hindari daerah-daerah zona hujan abu<br />\r\n&bull; Apabila berada di luar ruangan<br />\r\n-tutup mulut dan hidung anda.debu gunung api dapat mengiritasi sistem pernafasan anda.<br />\r\n-gunakan kacamata untuk melindungi mata anda&nbsp;<br />\r\n-lindungi kulit anda dari iritasi akibat debu gunung api<br />\r\n-bersihkan atap akibat dari hujan debu gunung berapi<br />\r\n-hujan debu yang menutupi atap sangat berat dan dapat mengakibatkan runtuhnya atap bangunan. Hati-hati ketika bekerja di atap bangunan rumah<br />\r\n&bull; Hindari mengendarai kendaraan di daerah hujan yang lebat<br />\r\n&bull; Mengendarai kendaraan mengakibatkan debu tersedot dan dapat merusak mesin kendaraan tersebut<br />\r\n&bull; Apabila anda mempunyai penyakit pernafasan ,hindari sedapat mungkin kontak dengan debu gunung api<br />\r\n&bull; Tinggallah di dalam ruangan,samapai keadaan dinyatakan aman di luar rumah<br />\r\n&bull; Ingat untuk membantu tatngga yang mungkin membutuhkan pertolongan seperti orang tua,orang yang cacat fisik,dsb.</p>\r\n\r\n<p><strong>Bilamana harus mengungsi ,perlu mewaspadai:</strong></p>\r\n\r\n<p>&bull; Penyakit menular di tempat pengungsian,seperti ISPA,Diare,campak.<br />\r\n&bull; Keracunan makanan<br />\r\n&bull; Gizi kurang gangguan stress pasca trauma</p>\r\n\r\n<p><strong>Melakukan perilaku hidup bersih dan sehat:</strong></p>\r\n\r\n<p>&bull; Selalu buang air besar di jamban,mencuci tangan<br />\r\nSetelah buang air maupun sebelum makan dan<br />\r\nSelalu minum air yang telah di masak.<br />\r\nMasalah kesehatan yang dapat timbul akibat gung meletus:<br />\r\n&bull; Korban luka bakar terkena awan panas atau lahar panas dan meninggal<br />\r\n&bull; Penyakit saluran pernafasan dan sakit mata akibat iritasi debu gunung api<br />\r\n&bull; Keracunan gas&nbsp;<br />\r\n&bull; Pengungsian<br />\r\n&bull; Rusaknya fasilitas pelayanan kesehatan</p>', 1, 1, '2018-12-18 08:25:12', '2018-12-18 08:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_12_12_132347_create_content_table', 1),
(2, '2018_12_13_035927_create_categories_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `namaDepan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaBelakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kodePos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tentangSaya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `namaDepan`, `namaBelakang`, `email`, `foto`, `password`, `alamat`, `kota`, `provinsi`, `kodePos`, `tentangSaya`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin', 'admin@admin.com', '', '$2y$10$xcyEMvoVTjgHTw7nhKvgHuQmgWb.mgIisXzFwx.3XZ5E8A5FycWlG', NULL, NULL, NULL, NULL, NULL, 'JKmLcPzusn9ovXNSE6PEBAF5X7lSVxc9yEijFLWHcYCI9gfLW4perh9kFn4D', '2018-12-18 10:30:16', '2018-12-18 10:30:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
