-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2019 at 06:48 AM
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
-- Database: `database_ziaga`
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
(4, 'Kenali Tanda Tanda Akan Munculnya Tsunami', 'tsunami.jpg', '3', 'tsunami', '<p>Indonesia termasuk kedalam zona rawan bencan. Berbagai macam bencana alam mengintai wilayah Indonesia. Salah satu bencana yang perlu menjadi perhatian adalah Tsunami. Sebab Indonesia memiliki hamparan laut yang luas, sehingga bencana ini bisa datang tiba tiba terutama setelah terjadinya gempa bumi</p>\r\n\r\n<p>Pasca kejadian Gempa bumi dan Tsunami yang terjadi di Aceh pada 2004 silam, pemerintah saat ini semakin mengembangkan sistem peringatan dini terkait tsunami. Hal tersebut agar masyarakat sudah bisa melakukan antisipasi ketika akan terjadinya tsunami.</p>\r\n\r\n<p>Tsunami sendiri merupakan serangkaian gelombang yang diakibatkan oleh tanah longsor atau gempa bumi besar baik yang terjadi dilaut ataupun di darat. Gelombang tsunami dapat terjadi 5 menit hingga 1 jam setelah longsor atau gempa bumi. Masyarakat yang berada di area pantai harus bisa mengenali tanda tanda akan munculnya tsnumai, sebab bencana ini biasanya banyak menelan korban jiwa.</p>\r\n\r\n<h2><strong>Tanda Tanda Munculnya Tsunami</strong></h2>\r\n\r\n<p><strong>Diawali gempa bumi</strong></p>\r\n\r\n<p>Bagi masyarakat yang tinggal didekat pantai, ada baiknya tetap waspada ketika terjadi gempa bumi. Tsunami biasanya terjadi karena adanya gempa bumi yang terjadi dibawah atau didekat laut. Bukan hanya gempa di daerah tersebut., namun gempa di berbagai negara lainnya juga bisa memicu terjadinya tsunami di daerah anda.</p>\r\n\r\n<p><strong>Perhatikan Suara Gemuruh</strong></p>\r\n\r\n<p>Menurut keterangan para korban tsunami. Sebelumnya munculnya gelombang tinggi, biasanya akan diawali dengan suara gemuruh yang sangat keras yang mirip dengan suara kereta barang.</p>\r\n\r\n<p><strong>Perhatikan penurunan air laut</strong></p>\r\n\r\n<p>Setelah terjadinya gempa, lalu melihat adanya penurunan air laut yang cepat dab bukan merupakan waktu air laut surut. Maka segeralah cari tempat yang lebih tinggi untuk berlindung. Sebelum terjadinya tsunami, air laut akan terlebih dahulu surut lalu akan kembali naik dengan kekuatan yang sangat besar.</p>\r\n\r\n<p><strong>Waspadai gelombang tsunami</strong></p>\r\n\r\n<p>Gelombang tsunami pertama tidak selalu yang paling berbahaya. Sehingga perlu tetap berada di tempat aman hingga situasi benar benar aman. Jangan berasumsi bahwa karena tsunami kecil di satu tempat maka akan kecil juga pada daerah yang lain. Sebab gelombang tsunami akan bervariasi.</p>', 1, 1, '2018-12-18 08:14:01', '2019-05-17 18:24:22'),
(5, 'Persiapan Menghadapi Letusan Gunung Api', 'gunung.jpg', '1', 'gunung berapi', '<p>Indonesia masih memiliki Gunung Api yang Aktif, beberapa di antaranya sudah sempat meletus, sebut saja Gunung Merapi Yogyakarta dan Gunung Sinabung. Gunung api masih menjadi ancaman bagi masyarakat karena sewaktu waktu bisa saja Erupsi. Tentu hal ini perlu di waspadai. Letusan gunung api memberikan dampak positif bagi manusia dan juga bagi lingkungan. Salah satunya adalah letusan abu gunung berapi yang mengandung bermacam-macam gas mulai dari Sulfur Dioksida atau SO2, gas Hidrogen sulfide atau H2S, No2 atau Nitrogen Dioksida serta beberapa partike debu yang berpotensial meracuni makhluk hidup di sekitarnya.</p>\r\n\r\n<p>Letusan Gunung Api bisa membuat kelumpuhan ekonomi karena aktifitas masyarakat di wilayah gunung api akan terganggu. Oleh sebab itu banyak yang perlu di perhatikan untuk menghadapi letusan gunung api. Bagi masyarakat yang tinggal di sekitaran gunung api aktif perlu tetap waspada dan perlu mempersiapkan dari sekarang karena erupsi bisa terjadi secara tiba tiba.</p>\r\n\r\n<h3>Persiapan Dalam Menghadapi Letusan Gunung Berapi</h3>\r\n\r\n<ul>\r\n	<li>Kenali daerah setempat dalam menentukan tempat aman untuk mengungsi. Hal ini dilakukan sebagai antisipasi awal saat gunung api baru Erupsi dan sambil menunggu bantuan dari Dinas Terkait</li>\r\n	<li>Membuat perencanaan penanganan bencana erupsi gunung api.</li>\r\n	<li>Mempersiapkan pengungsian saat diperlukan</li>\r\n	<li>Mempersiapkan kebutuhan dasar seperti, makanan, minuman, serta obat obatan</li>\r\n</ul>\r\n\r\n<h3>Jika Terjadi Letusan Gunung Api</h3>\r\n\r\n<ul>\r\n	<li>Pergi menjauh dari area gunung terutama area berbahaya seperti lereng gunung, lembah dan daerah aliran lahar.</li>\r\n	<li>Jika berada di tempat terbuka, tetap lindungi diri dari abu letusan dan awan panas. Waspadai karena sewaktu waktu bisa terjadi letusan susulan.</li>\r\n	<li>Kenakan pakaian yang bisa melindungi tubuh seperti: baju lengan panjang, celana panjang, topi dan lainnya.</li>\r\n	<li>Pakai masker atau kain untuk menutupi mulut dan hidung</li>\r\n	<li>Saat turunnya awan panas usahakan untuk menutup wajah dengan kedua belah tangan.</li>\r\n</ul>\r\n\r\n<h3>Setelah Terjadi Letusan Gunung Berapi</h3>\r\n\r\n<ul>\r\n	<li>Jauhi wilayah yang terkena hujan abu</li>\r\n	<li>Bersihkan atap dari timbunan abu. Karena beratnya, bisa merusak atau meruntuhkan atap bangunan.</li>\r\n	<li>Hindari mengendarai mobil di daerah yang terkena hujan abu sebab bisa merusak mesin</li>\r\n</ul>', 1, 1, '2018-12-18 08:19:29', '2018-12-18 08:19:29'),
(6, 'Tips Siaga Bencana Gunung Meletus', 'gunungberapi.jpg', '1', 'gunung berapi', '<p>Gunung api meletus disebabkan maga di dalam perut bumi yang di dorong keluar oleh gas yang bertekanan tinggi atau karena pergerakan lempengan bumi,tumpukan tekanan dan panas cairan magma. Letusannya membawa abu dan batu yang menyenbur dengan keras, sedangkan lavanya bisa membanjiri daerah sekitarnya bahkan hingga radius ribuan kilometer.</p>\r\n\r\n<p><strong>Pusat Vulkanologi dan Mitigasi Bencana Geologi membagi status gunung api aktif menjadi:</strong></p>\r\n\r\n<p>AWAS : Letusan dapat menjadi dalam waktu 24 jam.<br />\r\nSIAGA : Letusan dapat menjadi dalam waktu 2 minggu<br />\r\nWASPADA : Aktifitas vulkanik san seismik/kegempaan gunung sudah meningkat<br />\r\nNORMAL : Tidak ada gejala tekanan magma.</p>\r\n\r\n<p><strong>Apa saja akibat yang di timbulkan oleh letusan gunung api ?</strong></p>\r\n\r\n<p><strong>Bahaya letusan gunung berapi adalah adanya erupsi, yang dapat berupa :</strong></p>\r\n\r\n<p>&bull; Awan panas , Bersuhu 300 sampai 700 derajat celcius, berkecepatan lebih dari 70 km/jam.<br />\r\n&bull; Material vulkanik, berupa batuan panas bersuhu lebih dari hujan abu yang mengandung asam dan berbahaya bagi pernafasan ,penglihatan,merusak air tanah dan tanaman<br />\r\n&bull; Lava atau lahar ,yang berwujud cairan kental bersuhu antara 700 sampai 1200 derajat celcius.<br />\r\n&bull; Gas beracun yang dapat keluar melalu rongga atau kawah bersama letusan , yang dapat mematikan makhluk hidup.<br />\r\n&bull; Tsunami, bilamana gunung api yang berada di bawah permukaan laut meletus.<br />\r\nApa yang harus dilakukan ?</p>\r\n\r\n<p><strong>Sebelum terjadi letusan:</strong></p>\r\n\r\n<p>&bull; Kenali kawasan rawan bencana letusan gunung api<br />\r\n&bull; Sepakati tempat berkumpul bersama warga sekitar.<br />\r\n&bull; Menentukan jalur penyelamatan /evakuasi yang terdekat dari rumah untuk menuju tempat berkumpul<br />\r\n&bull; Siapkan tas khusus yang berisi kebutuhan hidup selama tiga hari seperti,makanan,pakaian dan obat-obatan.<br />\r\n&bull; Mengikutin latihan penyelamatan /evakuasi secara berkala untuk menyelamatkan diri menuju lokasi yang aman pada saat terjadi gempa.</p>\r\n\r\n<p><strong>Saat terjadi letusan :</strong></p>\r\n\r\n<p>&bull; Segeta mengungsi apabila sudah ada perintah mengungsi dari instansi/badan yang berwenang.<br />\r\n&bull; Hindari melewati jalur yang searah dengan arah angin dan sungai yang berhulu di puncak gunung yang sedang meletus.<br />\r\n&bull; Hindari daerah bahaya yang telah di tetapkan dengan melihat peta ancaman bahaya letusan gunung api.<br />\r\n&bull; Apabila melihat permukaan aliran air sungai naik,cepat-cepat cari daerah yang lebih tinggi.<br />\r\n&bull; Apabila terjebak dalam ruangan ,tutup semua pintu dan jendela.<br />\r\n&bull; Apabila berada di ruang terbuka cari ruang perlindungan darurat.<br />\r\n&bull; Apabila terjadi hujan batu,lindungi kepala dengan posisi menunduk dengan tubuh condong kedepan untuk melindungi dada serta silangkan tangan di antara kepalan dan tengkuk untuk melindungi kepala .<br />\r\n&bull; Saat turun hujan abu,jangan memakai lensa kontak(bagi yang menggunkanannya),usahakan menutup wajah dengan kedua telapak tangan atau sapu tangan serta gunakan kain / masker untuk melindungi pernafasan</p>\r\n\r\n<p><strong>Setelah terjadi letusan :</strong></p>\r\n\r\n<p>&bull; Kembali kerumah setelah situasi di nyatakan aman oleh pihak berwenang<br />\r\n&bull; Bersihkan atap rumah dari debu/abu gunung hujan debu yang menutupi atap rumah apabila tebal akan sangat beratdan dapat mengakibatkan runtuhnya atap rumah.</p>\r\n\r\n<p><strong>Pasca letusan :</strong></p>\r\n\r\n<p>&bull; Apabila memungkiknan hindari daerah-daerah zona hujan abu<br />\r\n&bull; Apabila berada di luar ruangan<br />\r\n-tutup mulut dan hidung anda.debu gunung api dapat mengiritasi sistem pernafasan anda.<br />\r\n-gunakan kacamata untuk melindungi mata anda&nbsp;<br />\r\n-lindungi kulit anda dari iritasi akibat debu gunung api<br />\r\n-bersihkan atap akibat dari hujan debu gunung berapi<br />\r\n-hujan debu yang menutupi atap sangat berat dan dapat mengakibatkan runtuhnya atap bangunan. Hati-hati ketika bekerja di atap bangunan rumah<br />\r\n&bull; Hindari mengendarai kendaraan di daerah hujan yang lebat<br />\r\n&bull; Mengendarai kendaraan mengakibatkan debu tersedot dan dapat merusak mesin kendaraan tersebut<br />\r\n&bull; Apabila anda mempunyai penyakit pernafasan ,hindari sedapat mungkin kontak dengan debu gunung api<br />\r\n&bull; Tinggallah di dalam ruangan,samapai keadaan dinyatakan aman di luar rumah<br />\r\n&bull; Ingat untuk membantu tatngga yang mungkin membutuhkan pertolongan seperti orang tua,orang yang cacat fisik,dsb.</p>\r\n\r\n<p><strong>Bilamana harus mengungsi ,perlu mewaspadai:</strong></p>\r\n\r\n<p>&bull; Penyakit menular di tempat pengungsian,seperti ISPA,Diare,campak.<br />\r\n&bull; Keracunan makanan<br />\r\n&bull; Gizi kurang gangguan stress pasca trauma</p>\r\n\r\n<p><strong>Melakukan perilaku hidup bersih dan sehat:</strong></p>\r\n\r\n<p>&bull; Selalu buang air besar di jamban,mencuci tangan<br />\r\nSetelah buang air maupun sebelum makan dan<br />\r\nSelalu minum air yang telah di masak.<br />\r\nMasalah kesehatan yang dapat timbul akibat gung meletus:<br />\r\n&bull; Korban luka bakar terkena awan panas atau lahar panas dan meninggal<br />\r\n&bull; Penyakit saluran pernafasan dan sakit mata akibat iritasi debu gunung api<br />\r\n&bull; Keracunan gas&nbsp;<br />\r\n&bull; Pengungsian<br />\r\n&bull; Rusaknya fasilitas pelayanan kesehatan</p>', 1, 1, '2018-12-18 08:25:12', '2018-12-18 08:26:16'),
(7, 'Tutorial Survival dari Tsunami', 'tsunami.png', '3', 'Tsunami  terdiri  dari  rangkaian  gelombang  laut  yang  mampu  menjalar  dengan  kecepatan  mencapai  lebih  dari  900  km/jam  atau lebih di tengah laut. Jenis bencana ini disebabkan oleh beberapa faktor, antara lain gempa bumi  yang  terjadi  di  dasar  laut,  runtuhan  di  dasar  laut,  atau  karena  letusan gunungapi di laut', '<h1><strong>Prabencana</strong></h1>\r\n\r\n<ul>\r\n	<li>Ketahui tanda-tanda sebelum tsunami terjadi, terutama setelah gempa bumi (intensitas gempa bumi lama dan terasa kuat, air laut surut, bunyi gemuruh dari tengah lautan, banyak ikan menggelepar di pantai yang airnya surut, dan tanda-tanda alam lain).</li>\r\n	<li>Memantau informasi dari berbagai media resmi mengenai potensi tsunami setelah gempa bumi terjadi.Cepat berlari ke tempat yang tinggi dan berdiam diri di sana untuk sementara waktu setelah satu gempa bumi besar mengguncang.</li>\r\n	<li>Segera menjauhi pantai dan tidak perlu melihat datangnya tsunami atau menangkap ikan yang terdampar di pantai karena air surut.</li>\r\n	<li>Mengetahui tingkat kerawanan tempat tinggal akan bahaya tsunami dan jalur evakuasi tercepat ke dataran yang lebih tinggi.</li>\r\n</ul>\r\n\r\n<h1><strong>Saat bencana</strong></h1>\r\n\r\n<ul>\r\n	<li>Setelah gempa bumi berdampak pada rumah Anda, jangan berupaya untuk merapikan kondisi rumah.Waspada gempa bumi susulan!</li>\r\n	<li>Jika Anda berada di rumah, usahakan untuk tetap tenang dan segera membimbing keluarga untuk menyelamatkan diri ke tempat yang lebih tinggi dan aman.</li>\r\n	<li>Tidak semua gempa bumi memicu tsunami.Jika mendengar sirine tanda bahaya atau pengumuman dari pihak berwenang mengenai bahaya tsunami, Anda perlu segera menyingkir dari daerah pantai.Perhatikan peringatan dan arahan dari pihak berwenang dalam proses evakuasi.</li>\r\n	<li>Jika telah sampai di daerah tinggi, bertahanlah disana karena gelombang tsunami yang kedua dan ketiga biasanya lebih besar dari gelombang pertama serta dengarkan informasi dari pihak yang berwenang melalui radio atau alat komunikasi lainnya.</li>\r\n	<li>Jangan kembali sebelum keadaan dinyatakan aman oleh pihak berwenang.</li>\r\n	<li>Tsunami tidak datang sekali, tetapi bisa sampai lima kali. Oleh karena itu, sebelum ada pengumuman dari pihak berwenang bahwa kondisi telah aman, janganlah meninggalkan tempat evakuasi karena seringkali gelombang yang datang kemudian justru lebih tinggi dan berbahaya.</li>\r\n	<li>Hindari jalan melewati jembatan. Anda dianjurkan untuk melakukan evakuasi dengan berjalan kaki.</li>\r\n	<li>Bagi Anda yang melakukan evakuasi menggunakan kendaraan dan terjadi kemacetan, segera kunci dan tinggalkan kendaraan serta melanjutkan evakuasi dengan berjalan kaki.</li>\r\n	<li>Apabila Anda berada di kapal atau perahu yang tengah berlayar, upayakan untuk tetap berlayar dan menghindari wilayah pelabuhan.</li>\r\n</ul>\r\n\r\n<h1><strong>Pascabencana</strong></h1>\r\n\r\n<ul>\r\n	<li>Tetap utamakan keselamatan dan bukan barang-barang Anda.</li>\r\n	<li>Waspada dengan instalasi listrik dan pipa gas.</li>\r\n	<li>Anda dapat kembali ke rumah setelah keadaan dinyatakan aman dari pihak berwenang.</li>\r\n	<li>Jauhi area yang tergenang dan rusak sampai ada informasi aman dari pihak berwenang.</li>\r\n	<li>Hindari air yang menggenang karena kemungkinan kontaminasi zat-zat berbahaya dan ancaman tersengat aliran listrik.</li>\r\n	<li>Hindari air yang bergerak karena arusnya dapat membahayakan Anda.</li>\r\n	<li>Hindari area bekas genangan untuk menghindari terperosok atau terjebak dalam kubang.</li>\r\n	<li>Jauhi reruntuhan di dalam genangan air karena sangat berpengaruh terhadap keamanan perahu penyelamat dan orang-orang di sekitar.</li>\r\n	<li>Bersihkan sarang nyamuk dan serangga lainya.</li>\r\n	<li>Berpartisipasi dalam kaporisasi sumber-sumber air bersih, perbaikan jamban dan saluran pembuangan air limbah.</li>\r\n	<li>Hati-hati saat memasuki gedung karena ancaman kerusakan yang tidak terlihat seperti pada fondasi.</li>\r\n	<li>Perhatikan kesehatan dan keselamatan keluarga dengan mencuci tangan menggunakan sabun dan air bersih jika Anda terkena air genangan tsunami.</li>\r\n	<li>Apabila Anda terluka, dapatkan perawatan kesehatan di pos kesehatan terdekat.</li>\r\n	<li>Dengarkan berita atau informasi mengenai kondisi air, serta di mana mendapatkan bantuan tenda darurat, pakaian, dan makanan.</li>\r\n	<li>Buanglah makanan yang terkontaminasi air genangan.</li>\r\n	<li>Hindari lokasi yang masih terkena bencana, kecuali jika pihak berwenang membutuhkan relawan.</li>\r\n	<li>Tetap di luar gedung yang masih dikelilingi genangan air.</li>\r\n</ul>', 6, 1, '2019-05-19 23:43:13', '2019-05-20 01:26:42'),
(8, 'Cara Menghadapi Gempa Bumi Saat Berada Di Dalam Ruangan', 'gempa.png', '2', 'Jika saat terjadi gempa bumi Anda sedang berada di dalam ruangan, apakah Anda tahu apa yang harus dilakukan? Banyak bangunan modern dirancang untuk tahan terhadap gempa berkekuatan sedang dan relatif aman. Namun, Anda tetap berada dalam bahaya akibat benda yang jatuh dan puing-puing lain. Untuk menyelamatkan diri, Anda harus mempersiapkan diri terlebih dahulu dan juga mengetahui apa yang harus dilakukan jika gempa bumi melanda daerah Anda.', '<p><strong>Tetap di dalam ruangan.</strong> Saat terjadi gempa bumi, mungkin Anda akan tergoda untuk berlari keluar. Bagaimanapun, tidak ada yang akan jatuh menimpa Anda di luar sana. Namun, mungkin Anda tidak akan berhasil keluar sebelum segalanya mulai berjatuhan. Jadi, sebaiknya carilah tempat aman di dalam ruangan daripada berusaha keluar.</p>\r\n\r\n<p><strong>Lakukan tindakan pencegahan.</strong> Jika memungkinkan, lakukan tindakan pencegahan sebelum gempa bumi semakin besar. Langkah ini paling penting dilakukan di dapur, apa yang Anda lakukan di sana dapat menimbulkan masalah saat gempa bumi terjadi.</p>\r\n\r\n<p><strong>Merunduklah di lantai.</strong> Tempat teraman untuk Anda saat terjadi gempa bumi adalah lantai. Namun, jangan tiarap. Sebagai gantinya, merangkaklah.</p>\r\n\r\n<p><strong>Carilah tempat aman.</strong> Tempat terbaik untuk Anda saat terjadi gempa bumi adalah di bawah meja. Meja memberikan perlindungan dari benda-benda yang berjatuhan. Meja juga merupakan pilihan yang tepat.</p>\r\n\r\n<p><strong>Pertahankan posisi Anda.</strong> Setelah menemukan posisi yang aman, tetaplah berada di sana. Jangan bergerak dari posisi tersebut sampai gempa bumi berakhir. Ingat, banyak gempa bumi diikuti dengan gempa susulan.</p>\r\n\r\n<p><strong>Tetaplah di tempat tidur.</strong> Jika Anda berada di atas tempat tidur, jangan mencoba bangun. Anda lebih aman di sana daripada jika mencoba berpindah ke tempat lain, terutama jika Anda sempoyongan. Anda sangat berisiko terluka karena pecahan kaca jika mencoba berguling dari tempat tidur.</p>\r\n\r\n<p><strong>Lindungi kepala dan wajah Anda.</strong> Baik Anda berada di bawah perabotan atau tidak, cobalah gunakan sesuatu untuk melindungi kepala dan wajah Anda. Misalnya, bantal atau bantal sofa dapat memberikan perlindungan. Namun, jangan sia-siakan waktu untuk mencari sesuatu jika gempa semakin besar. Selain itu, jangan tinggalkan tempat perlindungan Anda untuk mencari pelindung wajah.</p>\r\n\r\n<p><strong>Cobalah tetap tenang.</strong> Ingatlah bahwa semakin Anda tenang, semakin masuk akal keputusan yang akan Anda buat. Saat kebingungan atau panik, Anda tidak akan bisa membuat keputusan terbaik untuk keselamatan diri Anda sendiri dan orang lain. Kadang-kadang, mengingat bahwa ketenangan Anda sangat penting adalah kunci untuk tetap tenang.</p>', 5, 0, '2019-05-22 00:48:47', '2019-05-22 00:48:47'),
(9, 'Menghadapi Situasi Pascagempa', 'gempa.png', '2', 'Gempa Bumi', '<p><strong>Jangan menyulut api.</strong> Meskipun Anda tergoda untuk menyalakan api atau lilin saat listrik padam, jangan lakukan karena hal itu bisa berbahaya setelah terjadi gempa bumi. Jika saluran gas Anda bocor, Anda bisa membuat seisi rumah terbakar dengan percikan api. Sebagai gantinya, carilah senter.</p>\r\n\r\n<p><strong>Periksa apakah ada luka.</strong> Amati diri sendiri dan orang-orang di sekitar Anda, periksa apakah ada luka berat. Luka berat termasuk luka di kepala, patah tulang, atau luka parah.</p>\r\n\r\n<p><strong>Periksa kerusakan bangunan.</strong> Jika ada bagian rumah yang terlihat rusak, jangan ragu-ragu. Misalnya, mungkin Anda melihat dinding atau lantai ambruk atau retak-retak. Jika Anda tidak yakin apakah suatu daerah aman, keluarlah dari rumah. Jangan tinggal di dalam bangunan yang tidak aman dan mungkin jatuh menimpa Anda.</p>\r\n\r\n<p><strong>Periksa prasarana rumah.</strong> Berjalanlah keliling rumah untuk mencari kerusakan. Hal utama yang perlu Anda cari saat ini adalah kebocoran gas, kebocoran air, dan kerusakan listrik.</p>\r\n\r\n<p><strong>Perhatikan informasi dari pihak berwenang perihal kerusakan saluran air dan saluran pembuangan.</strong> Informasi ini kemungkinan akan disiarkan di radio atau televisi. Anda perlu memeriksa apakah pasokan air masih aman untuk diminum. Selain itu, Anda perlu memastikan apakah saluran pembuangan masih utuh sebelum menyiram toilet.</p>\r\n\r\n<p><strong>Bersihkan zat berbahaya.</strong> Jika ada zat berbahaya yang tumpah, Anda harus membersihkannya secepat mungkin. Misalnya, cairan pembersih bisa saja berbahaya, terutama jika bercampur dengan zat lain. Bersihkan juga obat-obatan yang tercecer.</p>\r\n\r\n<p><strong>Menjauhlah dari jalan.</strong> Jalan-jalan harus lancar agar kendaraan darurat mudah melintas. Untuk itu, menjauhlah dari jalan semaksimal mungkin karena hal ini akan memudahkan akses untuk kendaraan darurat.</p>', 5, 3, '2019-05-22 00:51:49', '2019-05-22 00:52:03'),
(10, 'Mempersiapkan Rumah Menghadapi Gempa Bumi', 'gempa.png', '2', 'Gempa Bumi', '<p><strong>Simpanlah perbekalan.</strong> Jika Anda tinggal di daerah rawan gempa, seperti Yogyakarta dan pesisir selatan Jawa, pastikan Anda sudah bersiap-siap jika terjadi gempa bumi. Menyimpan perbekalan adalah salah satu cara untuk mempersiapkan diri agar Anda memiliki apa yang dibutuhkan jika bencana terjadi.</p>\r\n\r\n<p><strong>Belilah atau buatlah kotak P3K.</strong> Dalam gempa bumi, cedera bisa saja terjadi. Menyiapkan kotak P3K dapat membantu Anda menangani cedera ringan, terutama karena ruang gawat darurat kemungkinan akan kelebihan pasien. Anda dapat membeli perlengkapan siap pakai atau mengumpulkan persediaan untuk membuatnya sendiri.</p>\r\n\r\n<p><strong>Pelajari langkah pertolongan pertama dan pernapasan buatan.</strong> Jika Anda, anggota keluarga, atau teman Anda terluka saat gempa bumi dan tidak dapat memperoleh pertolongan, Anda akan bersyukur karena tahu cara menangani cedera dasar. Pelatihan pertolongan pertama dan pernapasan buatan akan mengajarkan apa yang harus dilakukan dalam keadaan darurat jika ada yang terluka.</p>\r\n\r\n<p><strong>Pelajari cara mematikan gas, air, dan listrik.</strong> Meskipun hal ini merupakan fasilitas umum dalam kehidupan sehari-hari, saat terjadi bencana alam semua ini dapat mengancam nyawa. Gas bisa bocor; listrik bisa menimbulkan percikan api; dan air bisa terkontaminasi. Setelah gempa bumi, mungkin Anda perlu mematikan salah satu atau semua fasilitas ini.</p>\r\n\r\n<p><strong>Amankan pemanas air.</strong> Dalam gempa bumi, pemanas air Anda bisa jatuh atau rusak sehingga menciptakan genangan air yang sangat besar. Jika Anda dapat melindungi air tersebut dan menjaganya agar tidak bocor dari pemanas air, Anda dapat menggunakannya sebagai sumber air minum bersih meskipun air di kota tidak aman. Oleh karena itu, sebelum terjadi gempa bumi, amankan pemanas air Anda.</p>\r\n\r\n<p><strong>Tentukan lokasi pertemuan setelah gempa bumi reda.</strong> Saat terjadi gempa bumi, jaringan telepon bisa terputus. Mungkin Anda tidak dapat menjangkau orang-orang yang Anda cintai. Oleh karena itu, putuskan terlebih dahulu di mana kalian akan bertemu jika terjadi bencana.</p>\r\n\r\n<p><strong>Jadikan rumah Anda tahan gempa.</strong> Jika Anda tinggal di daerah rawan gempa, pertimbangkan untuk memindahkan benda-benda berat dari rak tinggi dan tambatkan perabotan berat pada lantai. Selama gempa, benda-benda ini bisa jatuh atau bergerak, melukai Anda atau orang lain di rumah Anda.</p>', 5, 1, '2019-05-22 00:53:38', '2019-05-22 23:43:03'),
(11, 'Cara Menghadapi Jika Terjadi Gunung Meletus', 'gunungberapi.png', '1', 'Saat sekarang ini kita tidak bisa lagi mengelak dari bencana alam. Berbagai bencana yang terjadi seperti meletusnya gunung merapi tidak dapat diprediksi kapan gunung itu akan meletus.', '<p>Letusan gunung api adalah merupakan bagian dari aktivitas vulkanik yang dikenal dengan istilah &quot;erupsi&quot;. Hampir semua kegiatan gunung api berkaitan dengan zona kegempaan aktif, sebab berhubungan dengan batas lempeng. Pada batas lempeng inilah terjadi perubahan tekanan dan suhu yang sangat tinggi sehingga mampu melelehkan material sekitarnya yang merupakan cairan pijar (magma). Magma akan mengintrusi batuan atau tanah di sekitarnya melalui rekahan- rekahan mendekati permukaan bumi. Dan berikut ini cara menghadapi jika terjadi gunung meletus :<br />\r\n<br />\r\nJika Terjadi Letusan Gunung Berapi<br />\r\n1.Hindari daerah rawan bencana seperti lereng gunung, lembah dan daerah aliran lahar.<br />\r\n2.Ditempat terbuka, lindungi diri dari abu letusan dan awan panas. Persiapkan diri untuk kemungkinan bencana susulan.<br />\r\n3.Kenakan pakaian yang bisa melindungi tubuh seperti: baju lengan panjang, celana panjang, topi dan lainnya.<br />\r\n4.Jangan memakai lensa kontak.<br />\r\n5.Pakai masker atau kain untuk menutupi mulut dan hidung.<br />\r\n6.Saat turunnya awan panas usahakan untuk menutup wajah dengan kedua belah tangan.<br />\r\n<br />\r\nSetelah Terjadi Letusan Gunung Berapi<br />\r\n1.Jauhi wilayah yang terkena hujan abu.<br />\r\n2.Bersihkan atap dari timbunan abu. Karena beratnya, bisa merusak atau meruntuhkan atap bangunan.<br />\r\n3.Hindari mengendarai mobil di daerah yang terkena hujan abu sebab bisa merusak mesin.</p>', 6, 3, '2019-05-22 00:55:32', '2019-05-22 00:55:32'),
(12, 'Panduan Keselamatan Ketika Terjadi Letusan Gunung Berapi', 'gunungberapi.png', '1', 'Bencana alam seperti letusan gunung api memang tidak mungkin bisa dilawan dan ditundukkan. Meski begitu, bukan berarti bencana satu ini tidak bisa Anda antisipasi. Itu sebabnya, Anda harus pandai-pandai menyusaikan diri dengan selalu waspada dan siap siaga saat bencana alam tersebut terjadi. Lantas, apa yang seharusnya bisa dilakukan sebelum, selama, dan sesudah bencana letusan gunung berapi terjadi? Simak tips-tipsnya dalam artikel ini.', '<h2>Mengenal bahaya yang timbul akibat letusan gunung berapi</h2>\r\n\r\n<p>Sebelum mengetahui segala persiapan yang harus dilakukan sebelum, selama, dan sesudah bencana letusan gunung berapi terjadi, Anda harus pahami dulu bahaya yang nantinya akan timbul akibat letusan gunung api. Berikut ini bahaya-bahaya yang akan timbul akibat letusan gunung berapi:</p>\r\n\r\n<ul>\r\n	<li><strong>Aliran lava</strong>. Lava adalah magma yang meleleh ke permukaan bumu melalui rekahan, suhunya bisa mencapai lebih dari seribu derajat celsius dan dapat merusak segala bentuk insfrastruktur di sekitarnya.</li>\r\n	<li><strong>Awan panas.</strong> Awan panas adalah aliran material vulkanik panas yang terdiri atas batuan berat, ringatn (berongga), larva massif dan butiran klastik yang pergerakkan dipengaruhi oleh gravitasi dan cenderung mengalir melalui lembah.</li>\r\n	<li><strong>Gas beracun</strong>. Gas beracun adalah gas vulkanik yang dapat mematikan seketika apabila terhirup dalam tubuh. Gas beracun ini adalah <a href=\"https://hellosehat.com/kesehatan/kandungan-karbon-dioksida/\" target=\"_blank\">karbon dioksida</a> (CO2), sulfur dioksida (SO2), asam hidroklorida (HCL), asam flourida (HF), dan asam sulfat (H2SO4).</li>\r\n	<li><strong>Lahar letusan.</strong> Lahar letusan terjadi pada gunung berapi yang mempunyai danau kawah dan terjadi bersamaan ketika letusan.</li>\r\n	<li><strong>Abu vulkanik.</strong> Abu vulkanik atau disebut juga sebagai jatuhan piroklastik adalah bahan material vulkanik yang disemburkan ke udara saat terjadi letusan gunung api.</li>\r\n</ul>\r\n\r\n<h2>Persiapan sebelum terjadi letusan gunung berapi</h2>\r\n\r\n<p>Bersiaplah untuk berlindung dan mengungsi ke tempat yang biasanya sudah disiapkan oleh petugas berwenang sebelumnya. Perhatikan baik-baik rencana evakuasi dan perlindungan untuk untuk diri Anda sendiri dan keluarga setelah gunung berapi dikatakan <strong>bersatus siaga</strong>. Tinjau ulang rencana tersebut dan pastikan setiap orang memahaminya.&nbsp;</p>\r\n\r\n<p>Jangan lupa, susunlah perlengkapan darurat dalam satu tas sehingga saat terjadinya letusan Anda dan keluarga bisa langsung bersiap untuk proses evakuasi tanpa harus memikirkan barang apa saja apa yang harus dibawa. Namun ingat, karena perlengkapan darurat, Anda disarankan membawa hal-hal yang paling penting saja, misalnya:</p>\r\n\r\n<ul>\r\n	<li>Senter dan baterai ekstra</li>\r\n	<li>Kotak P3K</li>\r\n	<li>Makanan darurat dan air</li>\r\n	<li>Masker (usahakan pilihlah masker jenis N 95 karena mampu menghalangi 95 persen partikel yang masuk ke saluran pernapasan)</li>\r\n	<li>Kacamata</li>\r\n	<li>Kantung tidur</li>\r\n	<li>Pakaian hangat</li>\r\n	<li>Radio yang menggunakan baterai. Radio dengan baterai lebih disarankan karena saat listrik padam, Anda masih bisa mengandalkan radio. Memantau informasi lewat media berguna untuk menentukan langkah selanjutnya.</li>\r\n</ul>\r\n\r\n<p>Selain perlengkapan, Anda juga harus memikirkan beberapa jalur alternatif atau jalur evakuasi untuk menuju zona aman karena letusan gunung berapi biasanya datang secara tiba-tiba.</p>', 6, 1, '2019-05-22 01:11:12', '2019-05-22 01:12:39'),
(13, 'Panduan Keselamatan Ketika Terjadi Letusan Gunung Berapi', 'gunungberapi.png', '1', 'Bencana alam seperti letusan gunung api memang tidak mungkin bisa dilawan dan ditundukkan. Meski begitu, bukan berarti bencana satu ini tidak bisa Anda antisipasi. Itu sebabnya, Anda harus pandai-pandai menyusaikan diri dengan selalu waspada dan siap siaga saat bencana alam tersebut terjadi. Lantas, apa yang seharusnya bisa dilakukan sebelum, selama, dan sesudah bencana letusan gunung berapi terjadi? Simak tips-tipsnya dalam artikel ini.', '<h2>Saat terjadi letusan gunung api</h2>\r\n\r\n<p>Biasanya saat terjadi letusan terdapat bunyi sirine sebagai tanda peringatan. Jika Anda tinggal di area yang masuk daerah rawan, bergegaslah menuju titik kumpul sambil membawa perlengkapan darurat yang sudah disiapkan sebelumnya dan lakukan proses evakuasi sesuai dengan instruksi yang diarahkan petugas.</p>\r\n\r\n<p>Perhatikan instruksi darurat saat terjadi letusan dengan baik dan seksama. Instruksi ini akan mengarahkan Anda harus dievakuasi ke tempat lain atau dapat tetap berada di tempat karena efeknya diketahui tak begitu besar. Korban letusan biasanya banyak berjatuhan akibat tidak mengindahkan instruksi darurat ini.</p>\r\n\r\n<p>Meski kelihatannya aman tinggal di rumah dan menunggu letusan, hal itu bisa sangat berbahaya. Pasalnya, gunung berapi memuntahkan gas panas, abu, lahar, dan batu yang sangat merusak. Jadi, jangan pernah abaikan instruksi darurat yang diberikan petugas berwenang.</p>\r\n\r\n<p>Berikut ini beberapa hal yang harus perhatikan ketika sedang terjadi letusan gunung berapi.</p>\r\n\r\n<ul>\r\n	<li>Hindari daerah rawan bencana seperti lereng gunung, lembah, dan aliran lahar.</li>\r\n	<li>Jauhi daerah yang mengarah angin dari gunung berapi untuk menghindari hujan abu.</li>\r\n	<li>Kenakan pakaian yang bisa melindungi tubuh seperti baju lengan panjang, celana panjang, topi, dan lainnya.</li>\r\n	<li>Gunakan kacamata dan jangan memakai lensa kontak.</li>\r\n	<li>Pakai masker atau kain untuk menutup mulut dan hidung.</li>\r\n</ul>\r\n\r\n<h2>Setelah terjadi letusan gunung berapi</h2>\r\n\r\n<ul>\r\n	<li>Pastikan Anda tetap menyalakan radio untuk mengetahui situasi terkini. Jika Anda salah satu penduduk yang tidak dinstruksikan mengungsi, pastikan Anda tetap berada di dalam rumah hingga Anda mendengar kabar bahwa telah aman bagi Anda dan keluarga untuk keluar rumah.</li>\r\n	<li>Jauhi wilayah yang terkena hujan abu karena abu vulkanik mengandung partikel-partikel kecil yang bisa merusak paru-paru<a href=\"https://hellosehat.com/hidup-sehat/fakta-unik/3-bahaya-asap-knalpot-bagi-kesehatan/\" target=\"_blank\">.</a></li>\r\n	<li>Jika situasi dirasa sudah aman, bersihkan atap rumah dari timbunan abu karena timbunan abu yang menumpuk pada atap bisa merusak atau meruntuhkan atap bangunan.</li>\r\n	<li>Jangan menyalakan AC atau membuka ventilasi rumah sebelum abu vulkanik benar-benar dibersihkan.</li>\r\n	<li>Hindari mengendarai mobil di daerah yang terkena hujan abu sebab bisa merusak mesin kendaraan seperti rem, persneling, hingga knalpot.</li>\r\n</ul>', 6, 0, '2019-05-22 01:12:20', '2019-06-22 01:12:20'),
(14, 'gunung berapi', 'gunungberapi.png', '1', 'gunung berapi', '<p>gunung berapi</p>', 4, 1, '2019-07-04 18:55:46', '2019-07-04 18:55:46');

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
(2, '2018_12_13_035927_create_categories_table', 2),
(3, '2019_06_27_132123_create_views_table', 3);

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
(1, 1, 'BNPB', 'Official', 'admin@admin.com', '', '$2y$10$xcyEMvoVTjgHTw7nhKvgHuQmgWb.mgIisXzFwx.3XZ5E8A5FycWlG', NULL, NULL, NULL, NULL, NULL, 'JKmLcPzusn9ovXNSE6PEBAF5X7lSVxc9yEijFLWHcYCI9gfLW4perh9kFn4D', '2018-12-18 10:30:16', '2018-12-18 10:30:16'),
(4, 1, 'Achmad', 'Noer', 'admin@adm.com', NULL, '$2y$10$oBK.ChVHxchFksxACKHjT.UkIOX8A7/T7um41BLamQ.OXIzZiGcBO', NULL, NULL, NULL, NULL, NULL, 'ednNImGxGhLDDPGPxTClWwwVlLH4Yd0cswDxMyczelGgDjnqyf49Nrr6HK4W', '2019-05-09 19:55:39', '2019-05-09 19:55:39'),
(5, 0, 'Noer', 'Aziz', 'achmad@noer.com', NULL, '$2y$10$oBK.ChVHxchFksxACKHjT.UkIOX8A7/T7um41BLamQ.OXIzZiGcBO', NULL, NULL, NULL, NULL, NULL, 'sEZj39co6O5Zzg9GAPHgOJjK9ySrCEInd5c8ZgJ5gtd02tVdNGgMLAinmUqc', '2019-05-09 20:07:46', '2019-05-09 20:07:46'),
(6, 0, 'Adivia', 'GP', 'qwerty@asd.com', NULL, '$2y$10$hP8xbb34O.7TbdIyxA6xfuiJVWBWfWSCLv3iG2EXQ.AhAv/T9XeGO', NULL, NULL, NULL, NULL, NULL, 'ChFOAwWoenpFkvZCHxneHRBeDcZBM9BOpMw0idC3mOrMRPF3Yw6A3unPyUZn', '2019-05-17 17:17:13', '2019-05-17 17:17:13'),
(7, 0, 'Uka', 'Uka', 'uka@uka.com', NULL, '$2y$10$ZDZXEdGaUow6GFFOLYYo.uG6YpZ.rhgAlDkdMUsmoXNkz89a77kNO', NULL, NULL, NULL, NULL, NULL, 'aSPjtZm66pQkMiszhx2j5T21euB8rohCMXrpaHQUxePU0GMf5Mv70x3OPKQG', '2019-07-03 17:31:43', '2019-07-03 17:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(10) UNSIGNED NOT NULL,
  `viewable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewable_id` bigint(20) UNSIGNED NOT NULL,
  `visitor` text COLLATE utf8mb4_unicode_ci,
  `collection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `viewable_type`, `viewable_id`, `visitor`, `collection`, `viewed_at`) VALUES
(1, 'App\\content', 2, 'AsTta630YQx1JgJ2TIEnIA49V1goQo9tQoPAl4t5yJF8yftF74qpuBMPdIy4EDgxF4fiK2nCfxWbnaIi', NULL, '2019-06-27 06:36:54'),
(2, 'App\\content', 2, 'AsTta630YQx1JgJ2TIEnIA49V1goQo9tQoPAl4t5yJF8yftF74qpuBMPdIy4EDgxF4fiK2nCfxWbnaIi', NULL, '2019-06-27 06:37:16'),
(3, 'App\\content', 4, 'AsTta630YQx1JgJ2TIEnIA49V1goQo9tQoPAl4t5yJF8yftF74qpuBMPdIy4EDgxF4fiK2nCfxWbnaIi', NULL, '2019-06-27 06:37:27'),
(4, 'App\\content', 5, 'AsTta630YQx1JgJ2TIEnIA49V1goQo9tQoPAl4t5yJF8yftF74qpuBMPdIy4EDgxF4fiK2nCfxWbnaIi', NULL, '2019-06-27 06:49:56'),
(5, 'App\\content', 5, 'AsTta630YQx1JgJ2TIEnIA49V1goQo9tQoPAl4t5yJF8yftF74qpuBMPdIy4EDgxF4fiK2nCfxWbnaIi', NULL, '2019-06-27 06:50:04'),
(6, 'App\\content', 5, 'AsTta630YQx1JgJ2TIEnIA49V1goQo9tQoPAl4t5yJF8yftF74qpuBMPdIy4EDgxF4fiK2nCfxWbnaIi', NULL, '2019-06-27 06:50:38'),
(7, 'App\\content', 5, 'AsTta630YQx1JgJ2TIEnIA49V1goQo9tQoPAl4t5yJF8yftF74qpuBMPdIy4EDgxF4fiK2nCfxWbnaIi', NULL, '2019-06-27 06:51:10'),
(8, 'App\\content', 3, 'AsTta630YQx1JgJ2TIEnIA49V1goQo9tQoPAl4t5yJF8yftF74qpuBMPdIy4EDgxF4fiK2nCfxWbnaIi', NULL, '2019-06-27 06:51:31'),
(9, 'App\\content', 2, 'RhLDDyXwRuEhDTdvRnnZNF8ZgJWfbMpRDTmPCv7e9KKhuVeCzjbJHgWaSwsDLvnEC0UsmbG0ZEwoytfj', NULL, '2019-07-03 00:41:51'),
(10, 'App\\content', 2, 'RhLDDyXwRuEhDTdvRnnZNF8ZgJWfbMpRDTmPCv7e9KKhuVeCzjbJHgWaSwsDLvnEC0UsmbG0ZEwoytfj', NULL, '2019-07-03 05:04:33'),
(11, 'App\\content', 2, 'RhLDDyXwRuEhDTdvRnnZNF8ZgJWfbMpRDTmPCv7e9KKhuVeCzjbJHgWaSwsDLvnEC0UsmbG0ZEwoytfj', NULL, '2019-07-03 05:07:37'),
(12, 'App\\content', 2, 'RhLDDyXwRuEhDTdvRnnZNF8ZgJWfbMpRDTmPCv7e9KKhuVeCzjbJHgWaSwsDLvnEC0UsmbG0ZEwoytfj', NULL, '2019-07-03 05:38:25'),
(13, 'App\\content', 2, 'RhLDDyXwRuEhDTdvRnnZNF8ZgJWfbMpRDTmPCv7e9KKhuVeCzjbJHgWaSwsDLvnEC0UsmbG0ZEwoytfj', NULL, '2019-07-03 05:40:10'),
(14, 'App\\content', 2, 'RhLDDyXwRuEhDTdvRnnZNF8ZgJWfbMpRDTmPCv7e9KKhuVeCzjbJHgWaSwsDLvnEC0UsmbG0ZEwoytfj', NULL, '2019-07-03 05:40:44'),
(15, 'App\\content', 2, 'RhLDDyXwRuEhDTdvRnnZNF8ZgJWfbMpRDTmPCv7e9KKhuVeCzjbJHgWaSwsDLvnEC0UsmbG0ZEwoytfj', NULL, '2019-07-03 05:40:52'),
(16, 'App\\content', 2, 'RhLDDyXwRuEhDTdvRnnZNF8ZgJWfbMpRDTmPCv7e9KKhuVeCzjbJHgWaSwsDLvnEC0UsmbG0ZEwoytfj', NULL, '2019-07-03 05:47:09'),
(17, 'App\\content', 2, 'RhLDDyXwRuEhDTdvRnnZNF8ZgJWfbMpRDTmPCv7e9KKhuVeCzjbJHgWaSwsDLvnEC0UsmbG0ZEwoytfj', NULL, '2019-07-03 05:48:54'),
(18, 'App\\content', 2, 'RhLDDyXwRuEhDTdvRnnZNF8ZgJWfbMpRDTmPCv7e9KKhuVeCzjbJHgWaSwsDLvnEC0UsmbG0ZEwoytfj', NULL, '2019-07-03 05:52:54'),
(19, 'App\\content', 2, 'RhLDDyXwRuEhDTdvRnnZNF8ZgJWfbMpRDTmPCv7e9KKhuVeCzjbJHgWaSwsDLvnEC0UsmbG0ZEwoytfj', NULL, '2019-07-03 06:04:59'),
(20, 'App\\content', 2, 'RhLDDyXwRuEhDTdvRnnZNF8ZgJWfbMpRDTmPCv7e9KKhuVeCzjbJHgWaSwsDLvnEC0UsmbG0ZEwoytfj', NULL, '2019-07-03 06:05:39'),
(21, 'App\\content', 2, 'RhLDDyXwRuEhDTdvRnnZNF8ZgJWfbMpRDTmPCv7e9KKhuVeCzjbJHgWaSwsDLvnEC0UsmbG0ZEwoytfj', NULL, '2019-07-03 06:14:35'),
(22, 'App\\content', 2, 'RhLDDyXwRuEhDTdvRnnZNF8ZgJWfbMpRDTmPCv7e9KKhuVeCzjbJHgWaSwsDLvnEC0UsmbG0ZEwoytfj', NULL, '2019-07-03 06:14:58'),
(23, 'App\\content', 2, 'qu7hknmg3PP5KJhEgiNf6bIMHtlMipJLtE3FWEOqqDUQjb9hvH0aOgQFZ0Qw0T9kbtxYEGI8Vt3l12rE', NULL, '2019-07-04 06:02:21'),
(24, 'App\\content', 5, 'qu7hknmg3PP5KJhEgiNf6bIMHtlMipJLtE3FWEOqqDUQjb9hvH0aOgQFZ0Qw0T9kbtxYEGI8Vt3l12rE', NULL, '2019-07-04 06:02:31'),
(26, 'App\\content', 13, '7', NULL, '2019-07-04 11:59:14'),
(27, 'App\\content', 11, '0', NULL, '2019-07-04 17:23:55'),
(28, 'App\\content', 1, '0', NULL, '2019-07-04 17:25:43'),
(29, 'App\\content', 13, '7', NULL, '2019-07-04 18:54:20'),
(30, 'App\\content', 14, '4', NULL, '2019-07-04 18:58:20');

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
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_viewable_type_viewable_id_index` (`viewable_type`(191),`viewable_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
