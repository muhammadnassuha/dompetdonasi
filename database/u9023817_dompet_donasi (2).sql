-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2021 at 11:46 AM
-- Server version: 10.3.28-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u9023817_dompet_donasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `profil` text NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verifikasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `profil`, `nama_lengkap`, `telepon`, `email`, `password`, `verifikasi`) VALUES
(2, 'profile_default.png', 'Cholid', '0856987412154', 'cholid@gmail.com', '$2y$10$Jo69dMX6Bo6Pzv1UgHcj5ORDz.gjTv7lTLDnbEp3TF4N4d11gD0au', 'Terverifikasi'),
(10, '', 'Cholid Fatulloh', '083891441429', 'lidolid203@gmail.com', '$2y$10$5P7K6jqVR3oEpFbMzsqkYeZmDR..lCBPWBgMlmTr7pONZDI8m.T.q', 'Terverifikasi'),
(11, 'profile_default.png', 'Muhammad Rizky Amin', '0856321547896', 'qnayd31@gmail.com', '$2y$10$hhKhbWbTYTDkrxbQHcGRve1aKaWxQwG/ixRrS3DdXMso7G0SZv/ku', 'Terverifikasi'),
(12, 'profile_default.png', 'Zidan', '1234567898', 'w@gmail.com', '$2y$10$0zzW6t.LnzBPVTIa1RvemeRto/Noa2x9jlAHY1eWyxAFDxE0FTvwG', 'Terverifikasi'),
(14, '', 'test4', '085692641769', 'test4@gmail.com', '$2y$10$maE0N/xw4Ev.12KkUvS6u.jJoyytAG1mIvIarcsA7q1WOJwCJBNf2', 'Terverifikasi'),
(15, 'profile_default.png', 'Yukberdonasi', '087885735126', 'diasseptianiap1@gmail.com', '$2y$10$/qUbBChioXeYwQqsxl2XH.lLYsFJ7kz0QJnMfJLKt2lhc97s36uh6', 'Terverifikasi'),
(16, '', 'Test5', '085692641769', 'test5@gmail.com', '$2y$10$Vkad8Zc0fQvn1nmLuaxYZu6XCR5IALIVKZzV4m.SJxIhB/ZbuELQ6', 'Terverifikasi'),
(17, '', 'Fahmi Abdullah', '085692641769', 'fahmiiabd@gmail.com', '$2y$10$3HdHTc51xutPQlLGItLn0uZ1sT5R2CDPOU7tnH2L1S6dPDykib0AC', 'Terverifikasi'),
(18, 'profile_default.png', 'Alhafidz Ramadhan', '087868934759', 'Alhafidz@gmail.com', '$2y$10$XtKU6VPulcgyZHeed1rJ2useIfOxf1jl7ceK9nfYxE5xnthMY5W2O', 'Terverifikasi'),
(19, '', 'Test', '08888141414', 'test@test.test', '$2y$10$TjoKup5RaWjFFOknt0JPFOC88eDaS5XdYvb3AsuNdF3lTOVrS4ii6', 'Terverifikasi'),
(20, '', 'Fichryrahmatullah', '089663084723', 'fichryr@gmail.com', '$2y$10$STCWhc7MOi60kJhe2XipvuxzznkOCVTNmKcNVETJz5N.xpDJmuECu', 'Terverifikasi'),
(21, 'profile_default.png', 'Riki', '085282027853', 'riki.data1011@gmail.com', '$2y$10$VsMhdUQ/krcmkKNQdjaoIe8.rfqgAHzYYcDrZLtIjsuRtLMTCAZFu', 'Terverifikasi'),
(22, '', 'Napiah hanapi ', '089503027697', 'nafiahhanafi45@gmail.com', '$2y$10$djmLjoBOXCR3NWkym57hv.RYwoiCIRFMEdAlRSX0DefXp5HyOWmWO', ''),
(24, 'profile_default.png', 'Zidan Ramadhan', '0852122145132', 'qnay3105@gmail.com', '$2y$10$eL5.DGKkNGBy9wllqttr/eZwFYMMhZYWE1S4E4gnJ8m3saZKOHj/e', 'Terverifikasi'),
(25, 'profile_default.png', 'amin', '088997478834', 'rizkyamien@gmail.com', '$2y$10$uvUGzWSKGZPEsDnmP7Ltsu400ZiVsz.LLCtVW24EfFhYpfZkd0zli', 'Terverifikasi'),
(26, 'profile_default.png', 'fagfagfdag', '598693894', 'dypa27@gmail.com', '$2y$10$NrQDzp.oYE.yIuCMf37nhOacy1vMP0fhEPnKyZ3SnpEe5YQ0OLlNq', 'Belum terverifikasi'),
(27, '', 'Andini Wahyu Nur Izzati', '085732006554', 'andiniwahyu.izzati@gmail.com', '$2y$10$3Y9rhp/w1wG7ls9y68hoj.7eqcl5.C5/P1pggFcJ//2et2KLxRQm.', 'Terverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `nama`, `password`, `foto`, `status`) VALUES
(1, 'dypa27', 'Dompet Yatim', '123', 'logo.png', 'offline'),
(2, 'fahmi', 'Fahmi Abdullah', '123', 'user-1.jpg', ''),
(3, 'nasuha', 'muhammad nasuha', '123', 'logo.png', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_transfer`
--

CREATE TABLE `bukti_transfer` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `donasi` varchar(20) NOT NULL,
  `bukti_transfer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukti_transfer`
--

INSERT INTO `bukti_transfer` (`id`, `nama`, `donasi`, `bukti_transfer`) VALUES
(2, 'Adit', '30.000', '605a0c2237c9a.jpeg'),
(4, 'WIDYA RATNA SARI', '100.000', '605c43387bbb0.jpg'),
(6, 'Andrian', '5.000', '605c74df8d108.jpg'),
(7, 'Zubair', '150.000', '605c8441bb47f.jpg'),
(15, 'bantu', '100.000', '605eac0acdf67.jpeg'),
(16, 'Zayid', '50.000', '60605633a06ea.jpg'),
(17, 'Zayid', '1.000.000', '6060583ef09ee.jpg'),
(18, 'bantu', '120.000', '6061a6a47809f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul` text NOT NULL,
  `link` varchar(50) NOT NULL,
  `target` varchar(20) NOT NULL,
  `donasi` varchar(30) NOT NULL,
  `periode` date NOT NULL,
  `dibuat` date NOT NULL,
  `deskripsi` longtext NOT NULL,
  `gambar` text NOT NULL,
  `konfirmasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `kategori`, `nama`, `judul`, `link`, `target`, `donasi`, `periode`, `dibuat`, `deskripsi`, `gambar`, `konfirmasi`) VALUES
(1, 'campaign', 'Fahmi Abdullah', 'Yatim Penderita Penyakit Thalasemia, Bantu Sembuhkan', 'yatimthalasemia', '50.000.000', '270000', '2021-06-16', '2021-03-16', '&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;&quot;&gt;&lt;strong&gt;RIZAL, YATIM PIATU PENDERITA THALASEMIA DARI 3 MINGGU SEKALI TRANSFUSI HINGGA TERLANTAR DIRUMAH SAKIT.&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;&quot;&gt;&lt;strong&gt;&lt;img src=&quot;../img/cerita_campaign/60511e1373e7c.jpg&quot; alt=&quot;&quot; width=&quot;1920&quot; height=&quot;1080&quot; /&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;&quot;&gt; Muhammad Rizal, lahir pada tanggal 26 Januari 2005 . Semenjak kecil ia sudah ditinggal ayah dan ibunya, ia dirawat oleh kakek serta neneknya , 3 Minggu sekali Rizal harus Transfusi darah di Rumah Sakit PMI Bogor sejak duduk dibangku kelas 1 Sekolah Dasar sekarang usia Rizal 15 Tahun, Jika Rizal telat mendapatkan transfusi Darah kondisi rizal drop, bermandikan keringat, dan tidak bisa apa apa. Saat pertama kali penyakit Rizal terdeteksi ia sedang berada di sekolah dan tidak bisa berbuat apa apa, atas saran guru rizal untuk periksa darah akhirnya baru terdeteksi jika saat itu rizal sudah menderita Thalasemia. Untuk diketahui Thalasemia adalah ketidakmampuan memproduksi sel darah merah dan hemoglobin. sel-sel darah merah juga memiliki peran penting mempertahankan kehidupan termasuk dalam pengangkutan oksigen. Oksigen juga bertanggung jawab dalam berbagai fungsi, utamanya sintesis sel. Oksigen juga berperan penting dalam sistem metabolisme tubuh. Untuk mengangkut oksigen ke seluruh bagian tubuh, oksigen mengikatkan diri ke hemoglobin yang menghasilkan warna merah pada sel. Hal ini memungkinkan sel untuk mengangkut oksigen dari paru-paru menuju ke jaringan tubuh lainnya. Ketika seseorang memiliki thalasemia, itu artinya salah satu dari komponen terpenting dalam struktur hemoglobin telah hilang atau rusak (diubah). gangguan ini dapat menciptakan kondisi yang nihil sampai pada gejala yang mengancam keberlangsungan hidup penderita. Di saat pandemic ini Nenek Rizal bersyukur tidak mengganggu jadwal transfuse Rizal . Rizal terkadang mengalami kesulitan stok darah karena tidak tersedianya kantong darah di Rumah Sakit, di kondisi seperti itu sang nenek berusaha semampunya untuk mempertahankan rizal sembari mencari pendonor yang cocok . untuk saat ini rizal belum mempunyai pendonor tetap. Untuk sekali kunjungan kerumah sakit minimal nenek rizal harus merogoh koceknya sebanyak 300.000 . Nenek ( Nama nenek rizal ) bersyukur karena telah dibantu oleh Yayasan Alkirom Amanah sehingga perawatan Rizal terus berjalan lancar. Satu kali transfuse Rizal menghabiskan 1-2 kantong darah . saat awal ditinggal ayah sempat shock dan suka melamun tidak lama ayahnya meninggal ibunya juga dipanggil Allah SWT. Nenek Boni sangat bersyukur telah dibantu oleh Yayasan alkirom amanah . Pada saat malam sebelum pilkada kota Depok Rizal mengalami patah tulang kanan karena bercanda dengan teman temannya dan sempat dirawat di rumah sakit Hermina, Pada saat di Rumah sakit inilah Rizal mengalami kisah yang cukup mengharukan . dikarenakan ia memiliki penyakit thalesemia Dokter yang menanganinya tidak berani mengambil tindakan yang dinilai cukup beresiko. Akhirnya atas keputusan dokter dan keluarga Rizal , diputuskan untuk mengobati lewat ahli patah tulang dengan kondisi tulang tangan yang patah itu rizal harus menggunakan Penyangga Lengan yang dimana harus membayar sebesar 80.000 sedangkan disaat itu nenek bony hanya mengantongi uang 30.000 untuk ongkos pulang, suster rumah sakit berinisiatif untuk menahan KIS milik Rizal untuk dijadikan jaminan dan uang 30.000 itu, masalah tidak usai sampai disitu kini rizal dan neneknya pun bingung ingin pulang bagaimana, tantenya yang sedang bertugas di TPS tidak bisa dihubungi dari jam 09.00 pagi hingga 17.00 Rizal &amp;amp; neneknya memikirkan bagaimana caranya agar mereka bisa pulang, tentunya dengan kondisi tangan seperti itu dan rasa lapar yang mendera Rizal yang masih kecil meringkih kesakitan. Melihat seorang nenek yang sedang kebingungan akhirnya ada orang baik yang menghampiri, ia menanyakan kondisinya bagaimana . Setelah dijelaskan orang baik itu menuju resepsionis dan menebus utang rizal &amp;amp; neneknya serta membantunya pulang dengan memesan grabcar. Nenek rizal sangat berterima kasih kepada yang telah membantunya semoga semua kebaikannya diganti oleh Allah SWT dengan sebaik baiknya pengganti.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;&quot;&gt;&lt;img src=&quot;../img/cerita_campaign/60511de22ed41.jpg&quot; alt=&quot;&quot; width=&quot;5184&quot; height=&quot;3456&quot; /&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;&quot;&gt;Salurkan donasi Anda dengan cara: &lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;&quot;&gt;1. Klik &quot;DONASI SEKARANG&quot; &lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;&quot;&gt;2. Pilih Bank Transfer BRI dan BNI &lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;&quot;&gt;Bantu share juga halaman ini agar lebih banyak doa dan bantuan yang terkumpul.&lt;/span&gt;&lt;/p&gt;', '1616662375.png', 'OK'),
(2, 'campaign', 'Cholid', 'Sembuhkan Yatim Penderita Syndrom Rubella', 'bisasembuh', '100.000.000', '', '2021-06-15', '2021-03-17', '&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;&quot;&gt;Sejak 31 Januari 2021 ( &lt;strong&gt;Farzhan althafariz Setiawan&lt;/strong&gt; ) ditinggal ayahnya karena penyakit Syndrom Rubella yang di derita pada usia 49 Tahun, dan meninggalkan dua orang anak farzha &amp;amp; kakanya yang berusia 9 tahun, sehari hari sang ibu ( Novi 31, Tahun ) hanya bisa focus menjaga ( farzhan ) karena penyakit ( nama penyakit ) , akibat yang dideritanya fadlan seringkali muntah secara tiba tiba . Untuk memenuhi kehidupan sehari hari fadlan &amp;amp; keluarganya bersyukur banyak saudara &amp;amp; tetangga yang mendukung. &lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;&quot;&gt;&lt;img src=&quot;../img/cerita_campaign/6051646eca639.jpg&quot; alt=&quot;&quot; width=&quot;5184&quot; height=&quot;2912&quot; /&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;&quot;&gt;Penyakit yang diderita Farzhan membuat ia hanya bisa mengkonsumsi susu untuk memenuhi kebutuhan proteinnya, kondisi seperti ini dialamai farzhan semenjak lahir menurut diagnose dokter yang memeriksanya ia mengidap sindrom rubella yang menyerang mata dan mengakibatkan pembengkakan ginjal oleh karena itu farzhan harus control rutin ke dokter tetapi untuk matanya sudah tidak bisa diambil tindakan apa apa , farzhan hanya bisa melihat sedikit cahaya dan berbicara tidak jelas . saat ini farzhan sedang menjalani terapi namun dampak dari Covid-19 membuat farzhan terpaksa memberhentikan sementara terapinya dan menjalani terapi dirumah dibnatu oleh sang ibu, farzhan harus terus meminum obat herbal &amp;amp; antibiotic . Keluarga farzhan mengenal Yayasan Alkirom Amanah dari tetangganya dan merasa terbantu karena kebutuhan sehari hari farzhan cukup banyak seperti Susu, Tisu Basah, Tisu Kering, dan Pampers, dalam 3 hari farzhan membutuhkan satu kaleng susu serta menghabiskan 4 bal pampers dalam sebulan karena mengingat kondisi fisiknya farzhan tidak seperti anak lainnya. Ibu novi berharap semoga kedepannya kanza kaka farzhan dapat menempuh Pendidikan yang tinggi dan terus menjaga adiknya&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;&quot;&gt;&lt;img src=&quot;../img/cerita_campaign/60516481acb01.jpg&quot; alt=&quot;&quot; width=&quot;5184&quot; height=&quot;2912&quot; /&gt;&lt;/span&gt;&lt;span style=&quot;color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px; font-weight: bolder; background-color: #ffffff;&quot;&gt;Salurkan donasi Anda dengan cara:&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Roboto, sans-serif; color: #575157; font-size: 14px; background-color: #ffffff; text-align: justify;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px;&quot;&gt;1. Klik &quot;DONASI SEKARANG&quot;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Roboto, sans-serif; color: #575157; font-size: 14px; background-color: #ffffff; text-align: justify;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px;&quot;&gt;2. Pilih Bank Transfer BRI dan BNI&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Roboto, sans-serif; color: #575157; font-size: 14px; background-color: #ffffff; text-align: justify;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px;&quot;&gt;Bantu share juga halaman ini agar lebih banyak doa dan bantuan yang terkumpul.&lt;/span&gt;&lt;/p&gt;', '1615946943.png', 'OK'),
(3, 'campaign', 'Muhammad Rizky Amin', 'Lukiskan senyum indah diwajah arya', 'aryabutuhbantuan', '10.000.000', '210061', '2021-06-21', '2021-03-23', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;EN-ID&quot; style=&quot;font-size: 12.0pt; mso-bidi-font-size: 11.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;&quot;&gt;Arya : Depok 17 Juli 2009&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;EN-ID&quot; style=&quot;font-size: 12.0pt; mso-bidi-font-size: 11.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;&quot;&gt;Sehari hari arya hanya berada di dalam rumah&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;EN-ID&quot; style=&quot;font-size: 12.0pt; mso-bidi-font-size: 11.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;&quot;&gt;&lt;strong&gt;Arya menderita Skelorosis Ganda&lt;/strong&gt; &lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;EN-ID&quot; style=&quot;font-size: 12.0pt; mso-bidi-font-size: 11.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;&quot;&gt;Nama ibu Darningsih&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;EN-ID&quot; style=&quot;font-size: 12.0pt; mso-bidi-font-size: 11.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;&quot;&gt;&amp;nbsp;&lt;img src=&quot;../img/cerita_campaign/60596e9c1bb2a.jpg&quot; alt=&quot;&quot; width=&quot;5184&quot; height=&quot;3456&quot; /&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;EN-ID&quot; style=&quot;font-size: 12.0pt; mso-bidi-font-size: 11.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;&quot;&gt;Arya lahir premature dengan berat 1.2 Kg tanggal 17 Juli&lt;span style=&quot;mso-spacerun: yes;&quot;&gt;&amp;nbsp; &lt;/span&gt;2009, &lt;span style=&quot;mso-spacerun: yes;&quot;&gt;&amp;nbsp;&lt;/span&gt;pada saat umur 3 Bulan keluar cairan putih dari mata Arya . untuk asupan Arya tidak ada perbedaan dengan anak anak lainnya kalo untuk vitamin apa adanya saja dikarenakan bapak Arya yang bekerja sebagai kuli bangunan hanya cukup untuk menghidupi kebutuhan utamanya saja . Pada saat awal awal di vonis Arya sempat pindah pindah rumah sakit mulai dari Bhakti Yudha, lalu dipindahkan ke rumah sakit fatmawati dikarenakan harus terapi di poli tumbuh kembang anak namun pada akhirnya Arya dipindahkan kembali ke RSUD Depok lalu dari RSUD Depok Arya kembali dipindahkan ke Rumah Sakit Cipto Mangunkusumo (RSCM) , disaat di RSCM inilah mata Arya divonis stadium 4 jadi sudah tidak bisa diambil tindakan karena sudah mengenai saraf di dalam , Ibu arya ( nama ibunya ) sedih, tak percaya, dan sedikit kecewa semua campur aduk jadi satu, bahkan sang ibu ingin mendonorkan matanya untuk Arya namun sayang dokter tidak berani mengambil resiko yang sangat besar. Biaya perawatan Arya menggunakan Kartu Indonesia Sehat tetapi untuk terapi mereka mengandalkan bantuan dari sebuah Yayasan yang mengadakan program terapi gratis ditempat arya tinggal. Semenjak pandemic covid 19 orang tua Arya semakin khawatir karena dengan kondisi tubuh yang seperti ini arya lebih rentan terserang virus, Nama ibu arya berharap semoga kedepannya Arya bisa berbicara dan berjalan kalo untuk melihat hanya berharap semoga Allah memberikan kuasanya terhadap Arya.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;EN-ID&quot; style=&quot;font-size: 12.0pt; mso-bidi-font-size: 11.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;&quot;&gt;&amp;nbsp;&lt;img src=&quot;../img/cerita_campaign/60596eb7b61da.jpg&quot; alt=&quot;&quot; width=&quot;2976&quot; height=&quot;1984&quot; /&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;EN-ID&quot; style=&quot;font-size: 12.0pt; mso-bidi-font-size: 11.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;&quot;&gt;Pada tanggal 17 Juli 2021 nanti Arya genap berusia 12 Tahun, Ayo kita persembahkan kado terbaik untuk Arya agar dia tetap semangat dan tersenyum yang lebar&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Roboto, sans-serif; color: #575157; font-size: 14px; background-color: #ffffff; text-align: justify;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px; font-weight: bolder;&quot;&gt;Salurkan donasi Anda dengan cara:&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Roboto, sans-serif; color: #575157; font-size: 14px; background-color: #ffffff; text-align: justify;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px;&quot;&gt;1. Klik &quot;DONASI SEKARANG&quot;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Roboto, sans-serif; color: #575157; font-size: 14px; background-color: #ffffff; text-align: justify;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px;&quot;&gt;2. Pilih Bank Transfer BRI dan BNI&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Roboto, sans-serif; color: #575157; font-size: 14px; background-color: #ffffff; text-align: justify;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px;&quot;&gt;Bantu share juga halaman ini agar lebih banyak doa dan bantuan yang terkumpul.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '1616473848.png', 'OK');
INSERT INTO `campaign` (`id`, `kategori`, `nama`, `judul`, `link`, `target`, `donasi`, `periode`, `dibuat`, `deskripsi`, `gambar`, `konfirmasi`) VALUES
(4, 'campaign', 'Muhammad Nasuha', 'Bantu adik adik kami meraih cita citanya', 'pelajarmengajar', '100.000.000', '', '2021-06-18', '2021-03-20', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: .0001pt; text-align: justify;&quot;&gt;&lt;span lang=&quot;EN-GB&quot; style=&quot;font-size: 12pt; line-height: 107%; font-family: arial, helvetica, sans-serif;&quot;&gt;Pelajar Mengajar adalah sebuah organisasi yang bergerak di bidang pendidikan anak-anak khususnya di daerah krukut. Organisasi ini berdiri sejak tahun 2019, memulai dengan memberikan pelajaran pada anak-anak di daerah Gunung Balong Lebak Bulus, kini organisasi ini berpindah ke Jalan Midan, Krukut-Depok. &lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: .0001pt; text-align: justify;&quot;&gt;&lt;span lang=&quot;EN-GB&quot; style=&quot;font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; mso-ansi-language: EN-GB;&quot;&gt;&lt;img src=&quot;../img/cerita_campaign/6055a2ae3bc37.png&quot; alt=&quot;&quot; width=&quot;640&quot; height=&quot;640&quot; /&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: .0001pt; text-align: justify;&quot;&gt;&lt;span lang=&quot;EN-GB&quot; style=&quot;font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; mso-ansi-language: EN-GB;&quot;&gt;&lt;img src=&quot;../img/cerita_campaign/6055a2bc71f3c.jpeg&quot; alt=&quot;&quot; width=&quot;1280&quot; height=&quot;960&quot; /&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: .0001pt; text-align: justify;&quot;&gt;&lt;span lang=&quot;EN-GB&quot; style=&quot;font-size: 12pt; line-height: 107%; font-family: arial, helvetica, sans-serif;&quot;&gt;Donasi ini akan kami salurkan kepada anak didik di PELAJAR MENGAJAR, tujuan nya supaya mempermudah dalam hal belajar mulai dari bentuk materi ataupun konsumsi anak anak.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: .0001pt; text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Roboto, sans-serif; color: #575157; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px; font-weight: bolder; background-color: #ffffff;&quot;&gt;Salurkan donasi Anda dengan cara:&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Roboto, sans-serif; color: #575157; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: #ffffff; text-align: justify;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px;&quot;&gt;1. Klik &quot;DONASI SEKARANG&quot;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Roboto, sans-serif; color: #575157; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: #ffffff; text-align: justify;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px;&quot;&gt;2. Pilih Bank Transfer BRI dan BNI&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Roboto, sans-serif; color: #575157; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: #ffffff; text-align: justify;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px;&quot;&gt;Bantu share juga halaman ini agar lebih banyak doa dan bantuan yang terkumpul.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: .0001pt; text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: .0001pt; text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;!-- [if gte mso 9]&gt;&lt;xml&gt;\r\n &lt;o:OfficeDocumentSettings&gt;\r\n  &lt;o:AllowPNG/&gt;\r\n &lt;/o:OfficeDocumentSettings&gt;\r\n&lt;/xml&gt;&lt;![endif]--&gt;&lt;!-- [if gte mso 9]&gt;&lt;xml&gt;\r\n &lt;w:WordDocument&gt;\r\n  &lt;w:View&gt;Normal&lt;/w:View&gt;\r\n  &lt;w:Zoom&gt;0&lt;/w:Zoom&gt;\r\n  &lt;w:TrackMoves/&gt;\r\n  &lt;w:TrackFormatting/&gt;\r\n  &lt;w:PunctuationKerning/&gt;\r\n  &lt;w:ValidateAgainstSchemas/&gt;\r\n  &lt;w:SaveIfXMLInvalid&gt;false&lt;/w:SaveIfXMLInvalid&gt;\r\n  &lt;w:IgnoreMixedContent&gt;false&lt;/w:IgnoreMixedContent&gt;\r\n  &lt;w:AlwaysShowPlaceholderText&gt;false&lt;/w:AlwaysShowPlaceholderText&gt;\r\n  &lt;w:DoNotPromoteQF/&gt;\r\n  &lt;w:LidThemeOther&gt;EN-US&lt;/w:LidThemeOther&gt;\r\n  &lt;w:LidThemeAsian&gt;X-NONE&lt;/w:LidThemeAsian&gt;\r\n  &lt;w:LidThemeComplexScript&gt;X-NONE&lt;/w:LidThemeComplexScript&gt;\r\n  &lt;w:Compatibility&gt;\r\n   &lt;w:BreakWrappedTables/&gt;\r\n   &lt;w:SnapToGridInCell/&gt;\r\n   &lt;w:WrapTextWithPunct/&gt;\r\n   &lt;w:UseAsianBreakRules/&gt;\r\n   &lt;w:DontGrowAutofit/&gt;\r\n   &lt;w:SplitPgBreakAndParaMark/&gt;\r\n   &lt;w:EnableOpenTypeKerning/&gt;\r\n   &lt;w:DontFlipMirrorIndents/&gt;\r\n   &lt;w:OverrideTableStyleHps/&gt;\r\n  &lt;/w:Compatibility&gt;\r\n  &lt;m:mathPr&gt;\r\n   &lt;m:mathFont m:val=&quot;Cambria Math&quot;/&gt;\r\n   &lt;m:brkBin m:val=&quot;before&quot;/&gt;\r\n   &lt;m:brkBinSub m:val=&quot;&amp;#45;-&quot;/&gt;\r\n   &lt;m:smallFrac m:val=&quot;off&quot;/&gt;\r\n   &lt;m:dispDef/&gt;\r\n   &lt;m:lMargin m:val=&quot;0&quot;/&gt;\r\n   &lt;m:rMargin m:val=&quot;0&quot;/&gt;\r\n   &lt;m:defJc m:val=&quot;centerGroup&quot;/&gt;\r\n   &lt;m:wrapIndent m:val=&quot;1440&quot;/&gt;\r\n   &lt;m:intLim m:val=&quot;subSup&quot;/&gt;\r\n   &lt;m:naryLim m:val=&quot;undOvr&quot;/&gt;\r\n  &lt;/m:mathPr&gt;&lt;/w:WordDocument&gt;\r\n&lt;/xml&gt;&lt;![endif]--&gt;&lt;!-- [if gte mso 9]&gt;&lt;xml&gt;\r\n &lt;w:LatentStyles DefLockedState=&quot;false&quot; DefUnhideWhenUsed=&quot;false&quot;\r\n  DefSemiHidden=&quot;false&quot; DefQFormat=&quot;false&quot; DefPriority=&quot;99&quot;\r\n  LatentStyleCount=&quot;371&quot;&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;0&quot; QFormat=&quot;true&quot; Name=&quot;Normal&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; QFormat=&quot;true&quot; Name=&quot;heading 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; QFormat=&quot;true&quot; Name=&quot;heading 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; QFormat=&quot;true&quot; Name=&quot;heading 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; QFormat=&quot;true&quot; Name=&quot;heading 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; QFormat=&quot;true&quot; Name=&quot;heading 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; QFormat=&quot;true&quot; Name=&quot;heading 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; QFormat=&quot;true&quot; Name=&quot;heading 7&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; QFormat=&quot;true&quot; Name=&quot;heading 8&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; QFormat=&quot;true&quot; Name=&quot;heading 9&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;index 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;index 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;index 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;index 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;index 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;index 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;index 7&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;index 8&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;index 9&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; Name=&quot;toc 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; Name=&quot;toc 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; Name=&quot;toc 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; Name=&quot;toc 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; Name=&quot;toc 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; Name=&quot;toc 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; Name=&quot;toc 7&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; Name=&quot;toc 8&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; Name=&quot;toc 9&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Normal Indent&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;footnote text&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;annotation text&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;header&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;footer&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;index heading&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;35&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; QFormat=&quot;true&quot; Name=&quot;caption&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;table of figures&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;envelope address&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;envelope return&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;footnote reference&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;annotation reference&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;line number&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;page number&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;endnote reference&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;endnote text&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;table of authorities&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;macro&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;toa heading&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List Bullet&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List Number&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List Bullet 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List Bullet 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List Bullet 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List Bullet 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List Number 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List Number 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List Number 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List Number 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;10&quot; QFormat=&quot;true&quot; Name=&quot;Title&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Closing&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Signature&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;1&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; Name=&quot;Default Paragraph Font&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Body Text&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Body Text Indent&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List Continue&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List Continue 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List Continue 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List Continue 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;List Continue 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Message Header&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;11&quot; QFormat=&quot;true&quot; Name=&quot;Subtitle&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Salutation&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Date&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Body Text First Indent&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Body Text First Indent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Note Heading&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Body Text 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Body Text 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Body Text Indent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Body Text Indent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Block Text&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Hyperlink&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;FollowedHyperlink&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;22&quot; QFormat=&quot;true&quot; Name=&quot;Strong&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;20&quot; QFormat=&quot;true&quot; Name=&quot;Emphasis&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Document Map&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Plain Text&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;E-mail Signature&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;HTML Top of Form&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;HTML Bottom of Form&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Normal (Web)&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;HTML Acronym&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;HTML Address&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;HTML Cite&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;HTML Code&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;HTML Definition&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;HTML Keyboard&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;HTML Preformatted&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;HTML Sample&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;HTML Typewriter&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;HTML Variable&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Normal Table&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;annotation subject&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;No List&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Outline List 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Outline List 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Outline List 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Simple 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Simple 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Simple 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Classic 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Classic 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Classic 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Classic 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Colorful 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Colorful 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Colorful 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Columns 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Columns 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Columns 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Columns 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Columns 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Grid 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Grid 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Grid 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Grid 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Grid 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Grid 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Grid 7&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Grid 8&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table List 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table List 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table List 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table List 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table List 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table List 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table List 7&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table List 8&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table 3D effects 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table 3D effects 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table 3D effects 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Contemporary&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Elegant&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Professional&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Subtle 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Subtle 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Web 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Web 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Web 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Balloon Text&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; Name=&quot;Table Grid&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; UnhideWhenUsed=&quot;true&quot;\r\n   Name=&quot;Table Theme&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; Name=&quot;Placeholder Text&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;1&quot; QFormat=&quot;true&quot; Name=&quot;No Spacing&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;60&quot; Name=&quot;Light Shading&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;61&quot; Name=&quot;Light List&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;62&quot; Name=&quot;Light Grid&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;63&quot; Name=&quot;Medium Shading 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;64&quot; Name=&quot;Medium Shading 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;65&quot; Name=&quot;Medium List 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;66&quot; Name=&quot;Medium List 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;67&quot; Name=&quot;Medium Grid 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;68&quot; Name=&quot;Medium Grid 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;69&quot; Name=&quot;Medium Grid 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;70&quot; Name=&quot;Dark List&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;71&quot; Name=&quot;Colorful Shading&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;72&quot; Name=&quot;Colorful List&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;73&quot; Name=&quot;Colorful Grid&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;60&quot; Name=&quot;Light Shading Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;61&quot; Name=&quot;Light List Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;62&quot; Name=&quot;Light Grid Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;63&quot; Name=&quot;Medium Shading 1 Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;64&quot; Name=&quot;Medium Shading 2 Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;65&quot; Name=&quot;Medium List 1 Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; SemiHidden=&quot;true&quot; Name=&quot;Revision&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;34&quot; QFormat=&quot;true&quot;\r\n   Name=&quot;List Paragraph&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;29&quot; QFormat=&quot;true&quot; Name=&quot;Quote&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;30&quot; QFormat=&quot;true&quot;\r\n   Name=&quot;Intense Quote&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;66&quot; Name=&quot;Medium List 2 Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;67&quot; Name=&quot;Medium Grid 1 Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;68&quot; Name=&quot;Medium Grid 2 Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;69&quot; Name=&quot;Medium Grid 3 Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;70&quot; Name=&quot;Dark List Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;71&quot; Name=&quot;Colorful Shading Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;72&quot; Name=&quot;Colorful List Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;73&quot; Name=&quot;Colorful Grid Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;60&quot; Name=&quot;Light Shading Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;61&quot; Name=&quot;Light List Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;62&quot; Name=&quot;Light Grid Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;63&quot; Name=&quot;Medium Shading 1 Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;64&quot; Name=&quot;Medium Shading 2 Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;65&quot; Name=&quot;Medium List 1 Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;66&quot; Name=&quot;Medium List 2 Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;67&quot; Name=&quot;Medium Grid 1 Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;68&quot; Name=&quot;Medium Grid 2 Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;69&quot; Name=&quot;Medium Grid 3 Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;70&quot; Name=&quot;Dark List Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;71&quot; Name=&quot;Colorful Shading Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;72&quot; Name=&quot;Colorful List Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;73&quot; Name=&quot;Colorful Grid Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;60&quot; Name=&quot;Light Shading Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;61&quot; Name=&quot;Light List Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;62&quot; Name=&quot;Light Grid Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;63&quot; Name=&quot;Medium Shading 1 Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;64&quot; Name=&quot;Medium Shading 2 Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;65&quot; Name=&quot;Medium List 1 Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;66&quot; Name=&quot;Medium List 2 Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;67&quot; Name=&quot;Medium Grid 1 Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;68&quot; Name=&quot;Medium Grid 2 Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;69&quot; Name=&quot;Medium Grid 3 Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;70&quot; Name=&quot;Dark List Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;71&quot; Name=&quot;Colorful Shading Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;72&quot; Name=&quot;Colorful List Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;73&quot; Name=&quot;Colorful Grid Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;60&quot; Name=&quot;Light Shading Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;61&quot; Name=&quot;Light List Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;62&quot; Name=&quot;Light Grid Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;63&quot; Name=&quot;Medium Shading 1 Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;64&quot; Name=&quot;Medium Shading 2 Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;65&quot; Name=&quot;Medium List 1 Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;66&quot; Name=&quot;Medium List 2 Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;67&quot; Name=&quot;Medium Grid 1 Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;68&quot; Name=&quot;Medium Grid 2 Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;69&quot; Name=&quot;Medium Grid 3 Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;70&quot; Name=&quot;Dark List Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;71&quot; Name=&quot;Colorful Shading Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;72&quot; Name=&quot;Colorful List Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;73&quot; Name=&quot;Colorful Grid Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;60&quot; Name=&quot;Light Shading Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;61&quot; Name=&quot;Light List Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;62&quot; Name=&quot;Light Grid Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;63&quot; Name=&quot;Medium Shading 1 Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;64&quot; Name=&quot;Medium Shading 2 Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;65&quot; Name=&quot;Medium List 1 Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;66&quot; Name=&quot;Medium List 2 Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;67&quot; Name=&quot;Medium Grid 1 Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;68&quot; Name=&quot;Medium Grid 2 Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;69&quot; Name=&quot;Medium Grid 3 Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;70&quot; Name=&quot;Dark List Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;71&quot; Name=&quot;Colorful Shading Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;72&quot; Name=&quot;Colorful List Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;73&quot; Name=&quot;Colorful Grid Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;60&quot; Name=&quot;Light Shading Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;61&quot; Name=&quot;Light List Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;62&quot; Name=&quot;Light Grid Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;63&quot; Name=&quot;Medium Shading 1 Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;64&quot; Name=&quot;Medium Shading 2 Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;65&quot; Name=&quot;Medium List 1 Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;66&quot; Name=&quot;Medium List 2 Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;67&quot; Name=&quot;Medium Grid 1 Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;68&quot; Name=&quot;Medium Grid 2 Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;69&quot; Name=&quot;Medium Grid 3 Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;70&quot; Name=&quot;Dark List Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;71&quot; Name=&quot;Colorful Shading Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;72&quot; Name=&quot;Colorful List Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;73&quot; Name=&quot;Colorful Grid Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;19&quot; QFormat=&quot;true&quot;\r\n   Name=&quot;Subtle Emphasis&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;21&quot; QFormat=&quot;true&quot;\r\n   Name=&quot;Intense Emphasis&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;31&quot; QFormat=&quot;true&quot;\r\n   Name=&quot;Subtle Reference&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;32&quot; QFormat=&quot;true&quot;\r\n   Name=&quot;Intense Reference&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;33&quot; QFormat=&quot;true&quot; Name=&quot;Book Title&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;37&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; Name=&quot;Bibliography&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; SemiHidden=&quot;true&quot;\r\n   UnhideWhenUsed=&quot;true&quot; QFormat=&quot;true&quot; Name=&quot;TOC Heading&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;41&quot; Name=&quot;Plain Table 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;42&quot; Name=&quot;Plain Table 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;43&quot; Name=&quot;Plain Table 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;44&quot; Name=&quot;Plain Table 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;45&quot; Name=&quot;Plain Table 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;40&quot; Name=&quot;Grid Table Light&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;46&quot; Name=&quot;Grid Table 1 Light&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;47&quot; Name=&quot;Grid Table 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;48&quot; Name=&quot;Grid Table 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;49&quot; Name=&quot;Grid Table 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;50&quot; Name=&quot;Grid Table 5 Dark&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;51&quot; Name=&quot;Grid Table 6 Colorful&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;52&quot; Name=&quot;Grid Table 7 Colorful&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;46&quot;\r\n   Name=&quot;Grid Table 1 Light Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;47&quot; Name=&quot;Grid Table 2 Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;48&quot; Name=&quot;Grid Table 3 Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;49&quot; Name=&quot;Grid Table 4 Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;50&quot; Name=&quot;Grid Table 5 Dark Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;51&quot;\r\n   Name=&quot;Grid Table 6 Colorful Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;52&quot;\r\n   Name=&quot;Grid Table 7 Colorful Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;46&quot;\r\n   Name=&quot;Grid Table 1 Light Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;47&quot; Name=&quot;Grid Table 2 Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;48&quot; Name=&quot;Grid Table 3 Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;49&quot; Name=&quot;Grid Table 4 Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;50&quot; Name=&quot;Grid Table 5 Dark Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;51&quot;\r\n   Name=&quot;Grid Table 6 Colorful Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;52&quot;\r\n   Name=&quot;Grid Table 7 Colorful Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;46&quot;\r\n   Name=&quot;Grid Table 1 Light Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;47&quot; Name=&quot;Grid Table 2 Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;48&quot; Name=&quot;Grid Table 3 Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;49&quot; Name=&quot;Grid Table 4 Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;50&quot; Name=&quot;Grid Table 5 Dark Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;51&quot;\r\n   Name=&quot;Grid Table 6 Colorful Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;52&quot;\r\n   Name=&quot;Grid Table 7 Colorful Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;46&quot;\r\n   Name=&quot;Grid Table 1 Light Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;47&quot; Name=&quot;Grid Table 2 Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;48&quot; Name=&quot;Grid Table 3 Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;49&quot; Name=&quot;Grid Table 4 Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;50&quot; Name=&quot;Grid Table 5 Dark Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;51&quot;\r\n   Name=&quot;Grid Table 6 Colorful Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;52&quot;\r\n   Name=&quot;Grid Table 7 Colorful Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;46&quot;\r\n   Name=&quot;Grid Table 1 Light Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;47&quot; Name=&quot;Grid Table 2 Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;48&quot; Name=&quot;Grid Table 3 Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;49&quot; Name=&quot;Grid Table 4 Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;50&quot; Name=&quot;Grid Table 5 Dark Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;51&quot;\r\n   Name=&quot;Grid Table 6 Colorful Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;52&quot;\r\n   Name=&quot;Grid Table 7 Colorful Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;46&quot;\r\n   Name=&quot;Grid Table 1 Light Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;47&quot; Name=&quot;Grid Table 2 Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;48&quot; Name=&quot;Grid Table 3 Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;49&quot; Name=&quot;Grid Table 4 Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;50&quot; Name=&quot;Grid Table 5 Dark Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;51&quot;\r\n   Name=&quot;Grid Table 6 Colorful Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;52&quot;\r\n   Name=&quot;Grid Table 7 Colorful Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;46&quot; Name=&quot;List Table 1 Light&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;47&quot; Name=&quot;List Table 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;48&quot; Name=&quot;List Table 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;49&quot; Name=&quot;List Table 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;50&quot; Name=&quot;List Table 5 Dark&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;51&quot; Name=&quot;List Table 6 Colorful&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;52&quot; Name=&quot;List Table 7 Colorful&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;46&quot;\r\n   Name=&quot;List Table 1 Light Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;47&quot; Name=&quot;List Table 2 Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;48&quot; Name=&quot;List Table 3 Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;49&quot; Name=&quot;List Table 4 Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;50&quot; Name=&quot;List Table 5 Dark Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;51&quot;\r\n   Name=&quot;List Table 6 Colorful Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;52&quot;\r\n   Name=&quot;List Table 7 Colorful Accent 1&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;46&quot;\r\n   Name=&quot;List Table 1 Light Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;47&quot; Name=&quot;List Table 2 Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;48&quot; Name=&quot;List Table 3 Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;49&quot; Name=&quot;List Table 4 Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;50&quot; Name=&quot;List Table 5 Dark Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;51&quot;\r\n   Name=&quot;List Table 6 Colorful Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;52&quot;\r\n   Name=&quot;List Table 7 Colorful Accent 2&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;46&quot;\r\n   Name=&quot;List Table 1 Light Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;47&quot; Name=&quot;List Table 2 Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;48&quot; Name=&quot;List Table 3 Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;49&quot; Name=&quot;List Table 4 Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;50&quot; Name=&quot;List Table 5 Dark Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;51&quot;\r\n   Name=&quot;List Table 6 Colorful Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;52&quot;\r\n   Name=&quot;List Table 7 Colorful Accent 3&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;46&quot;\r\n   Name=&quot;List Table 1 Light Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;47&quot; Name=&quot;List Table 2 Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;48&quot; Name=&quot;List Table 3 Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;49&quot; Name=&quot;List Table 4 Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;50&quot; Name=&quot;List Table 5 Dark Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;51&quot;\r\n   Name=&quot;List Table 6 Colorful Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;52&quot;\r\n   Name=&quot;List Table 7 Colorful Accent 4&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;46&quot;\r\n   Name=&quot;List Table 1 Light Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;47&quot; Name=&quot;List Table 2 Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;48&quot; Name=&quot;List Table 3 Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;49&quot; Name=&quot;List Table 4 Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;50&quot; Name=&quot;List Table 5 Dark Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;51&quot;\r\n   Name=&quot;List Table 6 Colorful Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;52&quot;\r\n   Name=&quot;List Table 7 Colorful Accent 5&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;46&quot;\r\n   Name=&quot;List Table 1 Light Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;47&quot; Name=&quot;List Table 2 Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;48&quot; Name=&quot;List Table 3 Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;49&quot; Name=&quot;List Table 4 Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;50&quot; Name=&quot;List Table 5 Dark Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;51&quot;\r\n   Name=&quot;List Table 6 Colorful Accent 6&quot;/&gt;\r\n  &lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;52&quot;\r\n   Name=&quot;List Table 7 Colorful Accent 6&quot;/&gt;\r\n &lt;/w:LatentStyles&gt;\r\n&lt;/xml&gt;&lt;![endif]--&gt;&lt;!-- [if gte mso 10]&gt;\r\n&lt;style&gt;\r\n /* Style Definitions */\r\n table.MsoNormalTable\r\n	{mso-style-name:&quot;Table Normal&quot;;\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-noshow:yes;\r\n	mso-style-priority:99;\r\n	mso-style-parent:&quot;&quot;;\r\n	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;\r\n	mso-para-margin-top:0cm;\r\n	mso-para-margin-right:0cm;\r\n	mso-para-margin-bottom:8.0pt;\r\n	mso-para-margin-left:0cm;\r\n	line-height:107%;\r\n	mso-pagination:widow-orphan;\r\n	font-size:11.0pt;\r\n	font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\n	mso-ascii-font-family:Calibri;\r\n	mso-ascii-theme-font:minor-latin;\r\n	mso-hansi-font-family:Calibri;\r\n	mso-hansi-theme-font:minor-latin;\r\n	mso-bidi-font-family:&quot;Times New Roman&quot;;\r\n	mso-bidi-theme-font:minor-bidi;}\r\n&lt;/style&gt;\r\n&lt;![endif]--&gt;&lt;/p&gt;', '1616225066.png', 'OK');
INSERT INTO `campaign` (`id`, `kategori`, `nama`, `judul`, `link`, `target`, `donasi`, `periode`, `dibuat`, `deskripsi`, `gambar`, `konfirmasi`) VALUES
(35, 'campaign', 'Alhafidz Ramadhan', 'Bakti Sosial 3000 Yatim Pelosok', 'baktisosial', '500.000.000', '1000040', '2021-06-24', '2021-03-26', '&lt;p style=&quot;line-height: 24.75pt; background: white; vertical-align: baseline; margin: 0cm 0cm 15.0pt 0cm;&quot;&gt;&lt;span lang=&quot;EN-ID&quot;&gt;Assalamualaikum Warrahmatullah Wabarakatuh&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;line-height: 24.75pt; background: white; vertical-align: baseline; margin: 0cm 0cm 15.0pt 0cm;&quot;&gt;&lt;span lang=&quot;EN-ID&quot;&gt;&lt;img src=&quot;../img/cerita_campaign/605d549250682.jpg&quot; alt=&quot;&quot; width=&quot;2976&quot; height=&quot;1984&quot; /&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;line-height: 24.75pt; background: white; vertical-align: baseline; margin: 0cm 0cm 15.0pt 0cm;&quot;&gt;&lt;span lang=&quot;EN-ID&quot;&gt;Ramadhan Tiba ! &lt;span style=&quot;background: white;&quot;&gt;Bulan suci Ramadhan merupakan kesempatan bagi setiap hamba Allah untuk lebih meningkatkan ketakwaan &amp;amp; kebaikan&lt;span style=&quot;mso-spacerun: yes;&quot;&gt;&amp;nbsp; &lt;/span&gt;. &lt;/span&gt;Ramadhan datang dengan membawa semangat keimanan. Kendati pandemi belum berhenti, semangat menjalankan ibadah Ramadhan yang dilandasi keimanan harus tetap terpatri dalam sanubari. Sembari patuh dan disiplin terhadap prokes yang ada, rangkaian ibadah Ramadhan tak boleh satu pun terlewatkan.&amp;nbsp;Kita dianjurkan untuk menghadapi Ramadhan dengan hati yang lapang agar tidak cepat puas dengan berhenti atau mencukupkan amalan di bulan dilipatgandakannya pahala Allah SWT , Salah satu cara untuk melapangkan dan melunakkan hati yang keras adalah dengan cara menyantuni dan mengasihi anak yatim,&lt;span style=&quot;mso-spacerun: yes;&quot;&gt;&amp;nbsp; &lt;/span&gt;Kasih sayang yang dicurahkan pada anak yatim akan melembutkan hati sebab kekerasan hati manusia hanya berasal dari akhlak yang buruk seperti kikir, dusta, dengki dan sebagainya.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: .0001pt; line-height: 24.75pt; background: white; vertical-align: baseline;&quot;&gt;&lt;em&gt;&lt;span lang=&quot;EN-ID&quot; style=&quot;font-size: 12.0pt; border: none windowtext 1.0pt; mso-border-alt: none windowtext 0cm; padding: 0cm; mso-fareast-language: EN-ID;&quot;&gt;&amp;ldquo;Sukakah kamu, jika hatimu menjadi lunak dan kebutuhanmu terpenuhi ? Kasihilah anak yatim, usaplah mukanya, dan berilah makan dari makananmu, niscaya hatimu menjadi lunak dan kebutuhanmu akan terpenuhi.&amp;rdquo;&lt;/span&gt;&lt;/em&gt;&lt;span lang=&quot;EN-ID&quot; style=&quot;font-size: 12.0pt; mso-fareast-language: EN-ID;&quot;&gt;&amp;nbsp;(HR. Al-Baniy, Shahi Al-Jami&amp;rsquo;, Abu Darda: 80)&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: .0001pt; line-height: 24.75pt; background: white; vertical-align: baseline;&quot;&gt;&lt;span lang=&quot;EN-ID&quot; style=&quot;font-size: 13.0pt; mso-fareast-language: EN-ID;&quot;&gt;&amp;nbsp;&lt;img src=&quot;../img/cerita_campaign/605d5489147a7.jpg&quot; alt=&quot;&quot; /&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: .0001pt; line-height: 24.75pt; background: white; vertical-align: baseline;&quot;&gt;&lt;span lang=&quot;EN-ID&quot; style=&quot;font-size: 12.0pt; mso-bidi-font-size: 13.0pt; mso-fareast-language: EN-ID;&quot;&gt;Maka dari itu Yayasan Alkirom Amanah ingin mengajak semua orang baik untuk ikut andil dalam program di bulan Suci Ramadhan kami yaitu &amp;ldquo;Menebar senyum kepada 3000 Anak Yatim&amp;rdquo; . Siapkan amal terbaik kalian &amp;amp; raih keberkahan di bulan yang sangat suci, bulan Ramadhan. Semoga kita tidak mensiasiakan kesempatan yang diberikan oleh Allah SWT ini.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: .0001pt; line-height: 24.75pt; background: white; vertical-align: baseline;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Roboto, sans-serif; color: #575157; font-size: 14px; background-color: #ffffff; text-align: justify;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px; font-weight: bolder;&quot;&gt;Salurkan donasi Anda dengan cara:&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Roboto, sans-serif; color: #575157; font-size: 14px; background-color: #ffffff; text-align: justify;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px;&quot;&gt;1. Klik &quot;DONASI SEKARANG&quot;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Roboto, sans-serif; color: #575157; font-size: 14px; background-color: #ffffff; text-align: justify;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px;&quot;&gt;2. Pilih Bank Transfer BRI dan BNI&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: .0001pt; line-height: 24.75pt; background: white; vertical-align: baseline;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Roboto, sans-serif; color: #575157; font-size: 14px; background-color: #ffffff; text-align: justify;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; color: #4a4a49; font-family: Poppins, sans-serif; font-size: 16px;&quot;&gt;Bantu share juga halaman ini agar lebih banyak doa dan bantuan yang terkumpul.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: .0001pt; line-height: 24.75pt; background: white; vertical-align: baseline;&quot;&gt;&amp;nbsp;&lt;/p&gt;', '1616729290.png', 'OK'),
(40, 'campaign', 'Riki', 'Hadiah Lebaran Untuk Yatim', 'hadiahlebaranuntuyatim', '50.000.000', '50039', '2021-06-25', '2021-03-27', '&lt;p&gt;&lt;img src=&quot;../img/cerita_campaign/605ebfb8addfd.png&quot; alt=&quot;&quot; width=&quot;559&quot; height=&quot;559&quot; /&gt;&lt;/p&gt;\r\n&lt;p&gt;Berawal dari kepedulian kepada anak yatim untuk menjadi lembaga sosial yang menyalurkan bantuan para donatur kepada penerima manfaat, Yayasan Alkirom Amanah berkomitmen menjadi lembaga terpercaya dan membantu kepada saudara-saudari yang membutuhkan uluran tangan dan membina anak yatim menjadi produktif. Pada tanggal 4 September ditandai &lt;strong&gt;SK MENKUMHAM RI NO : AHU-0114890.AH.01.04. Tahun 2017.&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Mari Sahabat berikan hadiah terbaikmu untuk anak-anak yatim dibulan suci ramadhan.&lt;/p&gt;\r\n&lt;p&gt;&lt;img src=&quot;../img/cerita_campaign/605ebf95a136e.jpg&quot; alt=&quot;&quot; width=&quot;540&quot; height=&quot;540&quot; /&gt;&lt;img src=&quot;../img/cerita_campaign/605ebfa1ef5d2.jpg&quot; alt=&quot;&quot; width=&quot;720&quot; height=&quot;720&quot; /&gt;&lt;/p&gt;\r\n&lt;p&gt;Semoga Setiap niat dan langkah kita menjadi ladang pahala yang terus menggalir hingga akhirat nanti.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Informasi lebih lanjut :&lt;/p&gt;\r\n&lt;p&gt;WA : 085692641769&lt;/p&gt;\r\n&lt;p&gt;Facebook : Yayasan Alkirom&lt;/p&gt;\r\n&lt;p&gt;Youtube : Yayasan Alkirom Amanah&lt;/p&gt;\r\n&lt;p&gt;Instagram :@official_alkiromamanah&lt;/p&gt;\r\n&lt;p&gt;Website : www.alkiromamanah.com&lt;/p&gt;', '1616822385.png', 'OK'),
(41, 'campaign', 'Zidan Ramadhan', 'Sedekah Alquran Untuk Yatim', 'sedekahalquran', '100.000.000', '0', '2021-06-27', '2021-03-29', '&lt;p&gt;Assalamu alaikum Wr Wb.Salam santun serta salam silaturahmi, 1000 Alquran untuk para yatim, dengan memberikan sedekah berupa alquran semoga anak anak yatim ini bisa menjadi seorang penghafal alquran dan tahfidz quran yang bisa membuat bangga keluarganya.&lt;/p&gt;\r\n&lt;p&gt;&lt;img src=&quot;../img/cerita_campaign/606185abc5ffb.jpg&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;\r\nSalurkan donasi Anda dengan cara:\r\n\r\n1. Klik \"DONASI SEKARANG\"\r\n\r\n2. Pilih Bank Transfer BRI dan BNI\r\n\r\nBantu share juga halaman ini agar lebih banyak doa dan bantuan yang terkumpul.\r\n', '1617003974.png', 'OK'),
(43, 'campaign', 'Fahmi Abdullah', 'bantu yatim sembuh', 'yatimsemuh2', '100.000.000', '0', '2021-06-28', '2021-03-30', 'Assalamualaikum Warahmatullahi Wabarakatuh', '1617092359.png', 'Pending'),
(46, 'campaign', 'amin', 'Santunan Bulanan Yatim', 'santunanyatim', '80.000.000', '0', '2021-04-30', '2021-03-31', '&lt;p&gt;Assalamualaikum wr wb&lt;/p&gt;\r\n&lt;p&gt;Salam santun, Alhamdulillah yayasan alkirom amanah mempunyai program santunan anak yatim yang rutin setiap bulan nya dilakukan. Insya Allah pada tanggal 8 Mei 2021 akan mengadakan kembali santunan ini. Kami mohon doa serta dukungannya kepada sahabat dermawan semoga kegiatan ini dapat berjalan dengan lancar dan semoga kebaikan dan rezekinya dibalas Allah SWT dengan berlipat ganda. Aamiin Yaa Rabbal Alamin&lt;/p&gt;&lt;figure&gt;&lt;img src=&quot;../img/cerita_campaign/8336f61e943680c4fb5bac874e6d4988.jpg&quot; data-image=&quot;fcv6u0jl1u3x&quot;&gt;&lt;/figure&gt;', '1617159817.png', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id` int(11) NOT NULL,
  `link` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hp` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `donasi` varchar(20) NOT NULL,
  `doa` varchar(260) NOT NULL,
  `no_rek` varchar(100) NOT NULL,
  `nama_rek` varchar(100) NOT NULL,
  `dibuat` datetime NOT NULL,
  `berakhir` datetime NOT NULL,
  `kode_unik` varchar(5) NOT NULL,
  `jumlah_donasi` varchar(100) NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id`, `link`, `nama`, `hp`, `email`, `donasi`, `doa`, `no_rek`, `nama_rek`, `dibuat`, `berakhir`, `kode_unik`, `jumlah_donasi`, `keterangan`) VALUES
(8, 'aryabutuhbantuan', 'Adit', '085776470194', '', '30.000', '', '946 713 835', 'Dompet Yatim Piatu Amanah', '2021-03-23 22:37:37', '2021-03-24 10:37:37', '8', '30008', 'OK'),
(14, 'aryabutuhbantuan', 'Widya Ratna', '08977534703', '', '100.000', 'Lapangkan rezeki agar bisa selalu membantu banyak orang', '946 713 835', 'Dompet Yatim Piatu Amanah', '2021-03-25 12:59:30', '2021-03-26 00:59:30', '14', '100014', 'OK'),
(19, 'aryabutuhbantuan', 'Siti Anisa Purwanti', '087878114142', '', '50.000', '', '946 713 835', 'Dompet Yatim Piatu Amanah', '2021-03-25 17:16:43', '2021-03-26 05:16:43', '19', '50019', 'OK'),
(20, 'aryabutuhbantuan', 'Andrian', '0871661561718', '', '30.000', 'semoga sehat selalu anak di sana ', '0523 0100 0259 302', 'Yayasan Dompet Yatim Piatu Amanah', '2021-03-25 18:31:22', '2021-03-26 06:31:22', '20', '30020', 'OK'),
(21, 'yatimthalasemia', 'Zubair', '08528202753', '', '150.000', 'Mudah mudahan di berikan kesahatan semangat...', '0523 0100 0259 302', 'Yayasan Dompet Yatim Piatu Amanah', '2021-03-25 19:37:55', '2021-03-26 07:37:55', '21', '150021', 'OK'),
(22, 'yatimthalasemia', 'Abdul', '085692641769', '', '100.000', 'Semoga berkah untuk rizal', '0523 0100 0259 302', 'Yayasan Dompet Yatim Piatu Amanah', '2021-03-25 19:37:56', '2021-03-26 07:37:56', '22', '100022', 'OK'),
(23, 'yatimthalasemia', 'Lesti', '08569264769', '', '20.000', '', '946 713 835', 'Dompet Yatim Piatu Amanah', '2021-03-25 19:44:36', '2021-03-26 07:44:36', '23', '20023', 'OK'),
(39, 'hadiahlebaranuntuyatim', 'Zayid', '081310373733', '', '50.000', 'Semoga manfaat', '0523 0100 0259 302', 'Yayasan Dompet Yatim Piatu Amanah', '2021-03-28 17:08:14', '2021-03-29 05:08:14', '39', '50039', 'OK'),
(40, 'baktisosial', 'Zayid', '081310373733', '', '1.000.000', 'Semoga ada rezekinya', '0523 0100 0259 302', 'Yayasan Dompet Yatim Piatu Amanah', '2021-03-28 17:17:20', '2021-03-29 05:17:20', '40', '1000040', 'OK'),
(47, 'sedekahalquran', 'Andini Wahyu Nur Izzati', '085732006554', 'andiniwahyu.izzati@gmail.com', '10.001', '', '0523 0100 0259 302', 'Yayasan Dompet Yatim Piatu Amanah', '2021-03-30 15:06:53', '2021-03-31 03:06:53', '47', '10,047', 'cek'),
(52, 'sedekahalquran', 'Andini Wahyu Nur Izzati', '085732006554', 'andiniwahyu.izzati@gmail.com', '20.000', '', '0523 0100 0259 302', 'Yayasan Dompet Yatim Piatu Amanah', '2021-04-02 11:01:10', '2021-04-02 23:01:10', '52', '20,052', 'cek');

-- --------------------------------------------------------

--
-- Table structure for table `log_activity`
--

CREATE TABLE `log_activity` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `id_campaign` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_activity`
--

INSERT INTO `log_activity` (`id`, `user_id`, `ip`, `description`, `date`, `id_campaign`) VALUES
(1, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 18:25:35.000000', 0),
(4, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 11:29:06.000000', 0),
(3, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 18:28:37.000000', 0),
(5, 2, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 18:33:44.000000', 0),
(6, 2, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:12:53.000000', 0),
(7, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:13:10.000000', 0),
(8, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:13:37.000000', 0),
(9, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:13:51.000000', 0),
(10, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:14:47.000000', 0),
(11, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:14:56.000000', 0),
(12, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:15:47.000000', 0),
(13, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:16:00.000000', 0),
(14, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:20:01.000000', 0),
(15, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:20:13.000000', 0),
(16, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:22:41.000000', 0),
(17, 0, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:24:04.000000', 0),
(18, 0, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:26:07.000000', 0),
(19, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:26:16.000000', 0),
(20, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:27:07.000000', 0),
(21, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:27:18.000000', 0),
(22, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:29:38.000000', 0),
(23, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:29:50.000000', 0),
(24, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:30:43.000000', 0),
(25, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:30:52.000000', 0),
(26, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:34:36.000000', 0),
(27, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:34:45.000000', 0),
(28, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:35:26.000000', 0),
(29, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:35:38.000000', 0),
(30, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:36:05.000000', 0),
(31, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:36:17.000000', 0),
(32, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:37:13.000000', 0),
(33, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:39:00.000000', 0),
(34, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:39:29.000000', 0),
(35, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:42:40.000000', 0),
(36, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:43:15.000000', 0),
(37, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:43:25.000000', 0),
(38, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:44:41.000000', 0),
(39, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:44:52.000000', 0),
(40, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:46:14.000000', 0),
(41, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:46:24.000000', 0),
(42, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:48:59.000000', 0),
(43, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:49:15.000000', 0),
(44, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:51:44.000000', 0),
(45, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:51:54.000000', 0),
(46, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:55:04.000000', 0),
(47, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:55:20.000000', 0),
(48, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:56:09.000000', 0),
(49, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:56:19.000000', 0),
(50, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:57:21.000000', 0),
(51, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:57:30.000000', 0),
(52, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:58:19.000000', 0),
(53, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 19:58:28.000000', 0),
(54, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 12:59:44.000000', 0),
(55, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:02:27.000000', 0),
(56, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:02:30.000000', 0),
(57, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:02:39.000000', 0),
(58, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:04:24.000000', 0),
(59, 0, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:04:33.000000', 0),
(60, 0, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:06:19.000000', 0),
(61, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:06:28.000000', 0),
(62, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:07:37.000000', 0),
(63, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:08:29.000000', 0),
(64, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:08:33.000000', 0),
(65, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:08:41.000000', 0),
(66, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:09:49.000000', 0),
(67, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:09:58.000000', 0),
(68, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:11:07.000000', 0),
(69, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:11:16.000000', 0),
(70, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:13:24.000000', 0),
(71, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:13:33.000000', 0),
(72, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:14:51.000000', 0),
(73, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:15:01.000000', 0),
(74, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:17:56.000000', 0),
(75, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:18:04.000000', 0),
(76, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:18:47.000000', 0),
(77, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:19:01.000000', 0),
(78, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:19:32.000000', 0),
(79, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:20:43.000000', 0),
(80, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:21:50.000000', 0),
(81, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:22:00.000000', 0),
(82, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:23:11.000000', 0),
(83, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:23:19.000000', 0),
(84, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:24:57.000000', 0),
(85, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:25:06.000000', 0),
(86, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:25:52.000000', 0),
(87, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:26:02.000000', 0),
(88, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:26:36.000000', 0),
(89, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:28:08.000000', 0),
(90, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:28:58.000000', 0),
(91, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:29:11.000000', 0),
(92, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:30:05.000000', 0),
(93, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:30:19.000000', 0),
(94, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:33:32.000000', 0),
(95, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:34:03.000000', 0),
(96, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:34:19.000000', 0),
(97, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:34:30.000000', 0),
(98, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:35:06.000000', 0),
(99, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:35:15.000000', 0),
(100, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:36:04.000000', 0),
(101, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:36:14.000000', 0),
(102, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:38:07.000000', 0),
(103, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:38:15.000000', 0),
(104, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:38:43.000000', 0),
(105, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:38:53.000000', 0),
(106, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:39:49.000000', 0),
(107, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:39:57.000000', 0),
(108, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:41:09.000000', 0),
(109, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:41:18.000000', 0),
(110, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:42:16.000000', 0),
(111, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:42:46.000000', 0),
(112, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:43:29.000000', 0),
(113, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:43:37.000000', 0),
(114, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:45:32.000000', 0),
(115, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:45:42.000000', 0),
(116, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:50:57.000000', 0),
(117, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:51:58.000000', 0),
(118, 1, '110.137.198.19', 'Login Dashboard Admin', '2021-03-25 20:53:43.000000', 0),
(119, 1, '110.137.198.19', 'Logout Dashboard Admin', '2021-03-25 13:55:51.000000', 0),
(120, 1, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 02:09:06.000000', 0),
(121, 1, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 02:16:12.000000', 0),
(122, 1, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-25 19:22:34.000000', 0),
(123, 1, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-25 19:27:48.000000', 0),
(124, 1, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 02:28:03.000000', 0),
(125, 1, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-25 19:44:16.000000', 0),
(126, 3, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 02:44:26.000000', 0),
(127, 1, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 02:48:00.000000', 0),
(128, 3, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 03:11:30.000000', 0),
(129, 3, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 03:11:38.000000', 0),
(130, 3, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 03:11:56.000000', 0),
(131, 3, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-25 20:17:29.000000', 0),
(132, 3, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-25 20:17:41.000000', 0),
(133, 3, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 03:18:00.000000', 0),
(134, 3, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-25 20:21:19.000000', 0),
(135, 1, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 03:21:27.000000', 0),
(136, 1, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-25 20:21:57.000000', 0),
(137, 1, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 03:22:07.000000', 0),
(138, 1, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-25 20:26:51.000000', 0),
(139, 1, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 03:31:44.000000', 0),
(140, 1, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 03:37:05.000000', 0),
(141, 1, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-25 20:42:02.000000', 0),
(142, 3, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 07:01:08.000000', 0),
(143, 0, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 00:01:37.000000', 0),
(144, 0, '36.69.169.8', 'Konfirmasi Donasi', '2021-03-26 07:06:57.000000', 0),
(145, 0, '36.69.169.8', 'Konfirmasi Donasi', '2021-03-26 07:13:42.000000', 0),
(146, 0, '36.69.169.8', 'Konfirmasi Donasi', '2021-03-26 07:15:15.000000', 0),
(147, 0, '36.69.169.8', 'Konfirmasi Donasi', '2021-03-26 07:19:54.000000', 0),
(148, 0, '36.69.169.8', 'Konfirmasi Donasi', '2021-03-26 07:20:53.000000', 0),
(149, 0, '36.69.169.8', 'Konfirmasi Donasi', '2021-03-26 07:21:08.000000', 0),
(150, 0, '36.69.169.8', 'Konfirmasi Donasi', '2021-03-26 07:21:30.000000', 0),
(151, 0, '36.69.169.8', 'Konfirmasi Donasi', '2021-03-26 07:21:33.000000', 0),
(152, 0, '36.69.169.8', 'Konfirmasi Donasi', '2021-03-26 07:21:52.000000', 0),
(153, 0, '36.69.169.8', 'Konfirmasi Donasi', '2021-03-26 07:22:33.000000', 0),
(154, 0, '36.69.169.8', 'Konfirmasi Donasi', '2021-03-26 07:22:50.000000', 0),
(155, 0, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-26 00:23:09.000000', 0),
(156, 3, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 07:23:19.000000', 0),
(157, 3, '36.69.169.8', 'Konfirmasi Donasi', '2021-03-26 07:24:54.000000', 0),
(158, 3, '36.69.169.8', 'Konfirmasi Donasi', '2021-03-26 07:29:55.000000', 0),
(159, 3, '36.69.169.8', 'Konfirmasi Donasi', '2021-03-26 08:33:11.000000', 30),
(160, 3, '36.69.169.8', 'Konfirmasi Donasi', '2021-03-26 08:41:06.000000', 31),
(161, 12, '36.69.169.8', 'Konfirmasi Campaign', '2021-03-26 09:15:51.000000', 0),
(162, 12, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-26 02:19:41.000000', 0),
(163, 1, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 09:19:52.000000', 0),
(164, 12, '36.69.169.8', 'Konfirmasi Campaign', '2021-03-26 09:21:06.000000', 0),
(165, 12, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-26 02:22:17.000000', 0),
(166, 3, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 09:22:32.000000', 0),
(167, 3, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-26 02:24:17.000000', 0),
(168, 1, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 09:24:35.000000', 0),
(169, 1, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-26 02:24:39.000000', 0),
(170, 3, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 09:25:46.000000', 0),
(171, 3, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-26 02:25:49.000000', 0),
(172, 3, '36.69.169.8', 'Login Dashboard Admin', '2021-03-26 09:29:00.000000', 0),
(173, 3, '114.4.213.215', 'Login Dashboard Admin', '2021-03-26 12:41:03.000000', 0),
(174, 1, '110.137.198.246', 'Login Dashboard Admin', '2021-03-26 16:57:42.000000', 0),
(175, 1, '110.137.198.246', 'Login Dashboard Admin', '2021-03-26 19:00:11.000000', 0),
(176, 1, '110.137.198.246', 'Konfirmasi Donasi', '2021-03-26 19:02:29.000000', 0),
(177, 3, '36.69.169.8', 'Login Dashboard Admin', '2021-03-27 02:37:25.000000', 0),
(178, 12, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-26 19:47:27.000000', 0),
(179, 12, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-26 19:48:46.000000', 0),
(180, 12, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-26 19:56:54.000000', 0),
(181, 18, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-26 19:58:02.000000', 0),
(182, 18, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-26 20:39:56.000000', 0),
(183, 18, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-26 20:59:40.000000', 0),
(184, 3, '36.69.169.8', 'Login Dashboard Admin', '2021-03-27 04:04:42.000000', 0),
(185, 1, '36.69.169.8', 'Login Dashboard Admin', '2021-03-27 05:10:28.000000', 0),
(186, 1, '114.4.213.215', 'Login Dashboard Admin', '2021-03-27 16:29:16.000000', 0),
(187, 1, '180.244.233.64', 'Login Dashboard Admin', '2021-03-28 10:09:16.000000', 0),
(188, 1, '180.244.233.64', 'Login Dashboard Admin', '2021-03-28 10:12:04.000000', 0),
(189, 1, '180.244.233.64', 'Konfirmasi Donasi', '2021-03-28 10:12:48.000000', 0),
(190, 1, '180.244.233.64', 'Login Dashboard Admin', '2021-03-28 10:19:46.000000', 0),
(191, 1, '180.244.233.64', 'Konfirmasi Donasi', '2021-03-28 10:20:56.000000', 0),
(192, 1, '36.69.169.8', 'Login Dashboard Admin', '2021-03-29 02:45:56.000000', 0),
(193, 1, '36.69.169.8', 'Login Dashboard Admin', '2021-03-29 02:58:51.000000', 0),
(194, 1, '36.69.169.8', 'Logout Dashboard Admin', '2021-03-28 20:02:51.000000', 0),
(195, 1, '110.137.196.229', 'Login Dashboard Admin', '2021-03-29 04:09:12.000000', 0),
(196, 1, '110.137.196.229', 'Login Dashboard Admin', '2021-03-29 04:36:52.000000', 0),
(197, 0, '110.137.196.229', 'Logout Dashboard Admin', '2021-03-28 23:11:26.000000', 0),
(198, 24, '110.137.196.229', 'Logout Dashboard Admin', '2021-03-28 23:36:43.000000', 0),
(199, 1, '110.137.196.229', 'Login Dashboard Admin', '2021-03-29 07:47:58.000000', 0),
(200, 1, '110.137.196.229', 'Logout Dashboard Admin', '2021-03-29 01:09:40.000000', 0),
(201, 18, '110.137.196.229', 'Logout Dashboard Admin', '2021-03-29 01:18:34.000000', 0),
(202, 24, '110.137.196.229', 'Logout Dashboard Admin', '2021-03-29 01:25:34.000000', 0),
(203, 1, '110.137.196.229', 'Login Dashboard Admin', '2021-03-29 08:38:51.000000', 0),
(204, 1, '110.137.196.229', 'Login Dashboard Admin', '2021-03-29 08:49:55.000000', 0),
(205, 1, '110.137.196.229', 'Logout Dashboard Admin', '2021-03-29 01:51:07.000000', 0),
(206, 1, '110.137.196.229', 'Logout Dashboard Admin', '2021-03-29 02:00:03.000000', 0),
(207, 24, '110.137.196.229', 'Logout Dashboard Admin', '2021-03-29 02:00:51.000000', 0),
(208, 1, '110.137.200.71', 'Login Dashboard Admin', '2021-03-29 09:42:37.000000', 0),
(209, 1, '110.137.200.71', 'Logout Dashboard Admin', '2021-03-29 03:12:35.000000', 0),
(210, 1, '110.137.200.71', 'Login Dashboard Admin', '2021-03-29 10:12:42.000000', 0),
(211, 1, '110.137.200.153', 'Login Dashboard Admin', '2021-03-30 02:36:15.000000', 0),
(212, 12, '110.137.200.153', 'Logout Dashboard Admin', '2021-03-29 21:33:54.000000', 0),
(213, 12, '110.137.200.153', 'Logout Dashboard Admin', '2021-03-30 01:51:28.000000', 0),
(214, 18, '180.252.148.8', 'Logout Dashboard Admin', '2021-03-30 19:33:08.000000', 0),
(215, 25, '180.252.148.8', 'Logout Dashboard Admin', '2021-03-30 20:48:12.000000', 0),
(216, 26, '180.252.148.8', 'Logout Dashboard Admin', '2021-03-30 20:50:51.000000', 0),
(217, 26, '180.252.148.8', 'Logout Dashboard Admin', '2021-03-30 20:55:27.000000', 0),
(218, 1, '180.252.148.8', 'Login Dashboard Admin', '2021-03-31 04:09:01.000000', 0),
(219, 1, '180.252.148.8', 'Logout Dashboard Admin', '2021-03-30 21:53:01.000000', 0),
(220, 1, '180.252.148.8', 'Login Dashboard Admin', '2021-03-31 04:53:12.000000', 0),
(221, 1, '180.252.148.8', 'Login Dashboard Admin', '2021-03-31 07:24:16.000000', 0),
(222, 1, '180.252.148.8', 'Login Dashboard Admin', '2021-03-31 07:24:52.000000', 0),
(223, 1, '180.252.148.8', 'Logout Dashboard Admin', '2021-03-31 00:32:02.000000', 0),
(224, 1, '180.252.148.8', 'Login Dashboard Admin', '2021-03-31 07:39:08.000000', 0),
(225, 1, '180.252.148.8', 'Logout Dashboard Admin', '2021-03-31 01:08:23.000000', 0),
(226, 1, '180.252.148.8', 'Login Dashboard Admin', '2021-03-31 08:15:22.000000', 0),
(227, 12, '114.4.213.215', 'Logout Dashboard Admin', '2021-03-31 04:30:07.000000', 0),
(228, 18, '125.165.190.28', 'Logout Dashboard Admin', '2021-03-31 06:04:13.000000', 0),
(229, 1, '114.4.213.215', 'Login Dashboard Admin', '2021-03-31 15:51:27.000000', 0),
(230, 1, '110.137.195.230', 'Login Dashboard Admin', '2021-04-01 03:20:05.000000', 0),
(231, 0, '110.137.195.230', 'Logout Dashboard Admin', '2021-03-31 21:58:55.000000', 0),
(232, 12, '110.137.205.79', 'Logout Dashboard Admin', '2021-04-01 19:46:34.000000', 0),
(233, 12, '110.137.205.79', 'Logout Dashboard Admin', '2021-04-01 19:47:55.000000', 0),
(234, 1, '110.137.205.79', 'Login Dashboard Admin', '2021-04-02 02:53:14.000000', 0),
(235, 1, '110.137.205.79', 'Logout Dashboard Admin', '2021-04-01 21:00:36.000000', 0),
(236, 12, '110.137.205.79', 'Logout Dashboard Admin', '2021-04-01 21:05:30.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transfer_zakat`
--

CREATE TABLE `transfer_zakat` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `donasi` varchar(30) NOT NULL,
  `bukti_transfer` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `update_campaign`
--

CREATE TABLE `update_campaign` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `update_terbaru` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `zakat`
--

CREATE TABLE `zakat` (
  `id` int(11) NOT NULL,
  `pendapatan_perbulan` varchar(100) NOT NULL,
  `bonus` varchar(100) NOT NULL,
  `hutang` varchar(100) NOT NULL,
  `id_account` int(11) NOT NULL,
  `total` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `nama_rek` varchar(30) NOT NULL,
  `norek` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_transfer`
--
ALTER TABLE `bukti_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer_zakat`
--
ALTER TABLE `transfer_zakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_campaign`
--
ALTER TABLE `update_campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zakat`
--
ALTER TABLE `zakat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bukti_transfer`
--
ALTER TABLE `bukti_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `transfer_zakat`
--
ALTER TABLE `transfer_zakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `update_campaign`
--
ALTER TABLE `update_campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zakat`
--
ALTER TABLE `zakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
