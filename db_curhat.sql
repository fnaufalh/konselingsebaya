-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Jan 2017 pada 17.32
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_curhat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `ID` varchar(255) NOT NULL,
  `TITLE` varchar(255) DEFAULT NULL,
  `CONTENT` text,
  `CATEGORY` int(11) DEFAULT NULL,
  `AUTHOR` int(11) DEFAULT NULL,
  `POST_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `LAST_UPDATE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `IS_ACTIVE` int(11) DEFAULT '0',
  `PICTURE` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`ID`, `TITLE`, `CONTENT`, `CATEGORY`, `AUTHOR`, `POST_DATE`, `LAST_UPDATE`, `IS_ACTIVE`, `PICTURE`) VALUES
('201610171000', 'Are You Mentally Healthy?', '<p>Apakah kamu pernah merasa sedih dan menangis terus menerus tanpa mengetahui sebabnya? Mungkin saat itu kamu sedang mengalami episode depresi yang merupakan salah satu gangguan dalam kesehatan mental.</p>\r\n<p>\r\nBanyak orang yang belum memahami apa sesungguhnya kesehatan mental atau memiliki pandangan bahwa kesehatan mental adalah suatu hal yang abstrak yang berkaitan langsung dengan hal-hal yang sifatnya gaib, keyakinan, atau relijiusitas seseorang. Padahal kesehatan mental adalah bagian dari kesehatan itu sendiri dan tidak ada yang berbeda antara kesehatan fisik dan kesehatan mental. Keduanya memiliki dampak yang sama besarnya terhadap keberlangsungan hidup seseorang dan sama-sama disebabkan oleh berbagai faktor-faktor biologis, psikologis, dan sosial yang saling berkaitan satu sama lain. Sama halnya dengan masalah kesehatan fisik,  masalah kesehatan mental juga beragam, baik dari jenis gangguan maupun tingkat keparahannya. Ada yang sifatnya ringan, misalnya reaksi stres akut, atau yang sangat berat, misalnya skizofrenia.</p>\r\n<p>\r\nNamun, berbeda dengan masalah kesehatan fisik, kesehatan mental sendiri memang belum menjadi perhatian utama masyarakat Indonesia. Stigma negatif bagi penyandang masalah kesehatan mental dan gangguan mental itu sendiri membuat promosi mengenai kesehatan mental kepada masyarakat menjadi terhambat dan menyebabkan masalah kesehatan mental semakin membesar. Padahal masalah kesehatan mental dapat di atasi jika mendapatkan penanganan yang tepat dari para ahli kesehatan mental profesional dan jika masyarakat sadar apakah ia atau orang-orang di sekelilingnya sehat secara mental atau tidak.</p>\r\n<p>\r\nApakah rasa sedih, cemas, atau marah karena masalah sehari-hari (mendapatkan nilai yang jelek, bertengkar dengan keluarga atau teman, dsb.) adalah masalah kesehatan mental atau dapat menyebabkan kesehatan mental?\r\nSekarang andaikan seorang anak kecil yang terjatuh karena bermain sepeda dan menyebabkan ia mengalami luka ringan di lutut. Tidak ada seorang pun yang akan menganggap bahwa itu adalah masalah kesehatan fisik yang besar dan perlu ditangani oleh medis (kecuali jika lukanya besar atau mengeluarkan banyak darah). Sekarang bayangkan jika anak kecil tersebut jatuh berkali-kali atau jika luka tersebut dibiarkan begitu saja dan tidak dirawat dengan selayaknya. Luka tersebut akan tetap ada, semakin membesar, dan mungkin akan menyebabkan masalah kesehatan yang lain (luka menyebabkan kebusukan, dsb.). Begitu pula dengan masalah kesehatan mental. Masalah yang kita temui sehari-hari dapat menjadi faktor yang memicu atau menyebabkan kesehatan mental kita menjadi terganggu, karena pada dasarnya faktor sosial adalah salah satu penyebab dari munculnya masalah kesehatan mental.\r\n</p>\r\n<p>\r\nLalu, apa ciri-cirinya jika seseorang memiliki masalah kesehatan mental? Seperti yang sudah disebutkan sebelumnya bahwa jenis masalah dalam kesehatan mental sangat bervariasi, sehingga ciri khusus untuk tiap-tiap gangguan atau masalah akan berbeda-beda. Akan tetapi hal-hal berikut dapat dijadikan pertimbangan untuk mendeteksi apakah kita, terutama remaja, memiliki masalah kesehatan mental atau tidak.\r\n</p>\r\n<ul>\r\n<li>\r\n1.	Kehilangan nafsu makan atau tidur</li>\r\n<li>\r\n2.	Tidak dapat melakukan tugas atau kegiatan sehari-hari, misalnya pergi ke sekolah</li>\r\n<li>\r\n3.	Tidak mau menghabiskan waktu dengan teman atau keluarga</li>\r\n<li>\r\n4.	Tidak mau melakukan hal-hal yang biasanya disenangi</li>\r\n<li>\r\n5.	Sering bertengkar dengan keluarga atau teman</li>\r\n<li>\r\n6.	Merasa tidak mampu mengontrol emosi dan hal tersebut berdampak pada hubungan dengan keluarga atau teman</li>\r\n<li>\r\n7.	Merasa kekurangan energi</li>\r\n<li>8.	Merasa tidak berdaya</li>\r\n<li>\r\n9.	Merasa hampa atau tidak ada hal yang rasanya berarti</li>\r\n<li>\r\n10.	Tidak mampu berhenti memikirkan beberapa hal atau ingatan tertentu</li>\r\n<li>\r\n11.	Merasa kebingungan, sering lupa, merasa aneh, marah, kesal, khawatir, atau takut</li>\r\n<li>\r\n12.	Memiliki keinginan untuk melukai diri sendiri atau orang lain</li>\r\n<li>\r\n13.	Merasakan nyeri dan rasa sakit yang aneh</li>\r\n<li>\r\n14.	Merokok dan minum alkohol berlebihan, atau menggunakan obat-obatan yang tidak semestinya</li>\r\n<li>\r\n15.	Mendengarkan suara atau melihat sesuatu yang tidak ada sumbernya\r\n</li>\r\n<ul>\r\n<p>\r\nSaat kamu atau teman atau orang terdekatmu mengalami hal-hal tersebut di atas, maka kamu dapat melakukan hal-hal berikut.</p>\r\n<ul>\r\n<li>\r\n1.	Menceritakan hal tersebut kepada orang tua, guru, dosen, keluarga atau orang lain yang kamu rasa dapat membantu dan bersedia mendengarkan masalahmu tanpa memberikan judgment.</li>\r\n<li>\r\n2.	Layanan konseling di sekolah, universitas, atau umum</li>\r\n<li>\r\n3.	Dokter umum di Puskesmas, praktik pribadi, dan rumah sakit</li>\r\n<li>\r\n4.	Psikiater dan psikolog di praktik pribadi atau rumah sakit.\r\n</li>', 5, 15, '2016-10-17 10:05:25', '0000-00-00 00:00:00', 1, ''),
('201610171001', 'Kenapa Tubuhku Berubah ?', 'Pertanyaan itu merupakan salah satu pertanyaan yang sering diajukan dan muncul dalam benak remaja selain pertayaan kenapa sekarang aku berkumis? Kenapa temenku sudah menstruasi aku belum? Normal tidak aku? Kenapa  suaraku berubah? Kenapa badanku paling besar di kelas? Terdapat beragam reaksi dan sikap yang ditampilkan remaja ketika menghadapi perubahan fisik yang terjadi dalam dirinya. Ada yang bingung, takut, cemas, stres, penasaran, merasa senang atau puas, dan lain-lain. Lalu sebenarnya apa yang terjadi pada remaja dan apa penyebab semua perubahan tersebut? \r\nSantrock (2013) mengungkapkan remaja adalah suatu rentang periode yang menandai berakhirnya masa anak dan dimulainya peningkatan kemandirian dan tanggung jawab individu pada lingkungan sosialnya. Memasuki periode ini, kita akan mulai melihat dan mengalami banyak perubahan dalam diri remaja antara lain perubahan fisik, kognitif, sosial, dan emosial. Pertanyaan-pertanyaan di awal tadi merupakan bentuk jelas perubahan fisik remaja sebagai bagian dari dimulainya pubertas (puberty). Pubertas (puberty) yaitu suatu proses yang mengarahkan individu pada kematangan seksual dan kemampuan untuk bereproduksi (Papalia, D. E. & Feldman, R.D., 2014). \r\nPubertas merupakan produk dari hasil perubahan biologis dan produksi berbagai macam hormon. Kematangan organ bereproduksi pada remaja perempuan ditandai dengan dimulainya menstruasi (menarche) dan produksi sperma (spemarche) pada remaja laki-laki yang didapat diamati dari terjadinya mimpi basah (wet dream). Secara umum, rentang usia pubertas pada remaja perempuan terjadi di usia sekitar 10-16 tahun dan laki-laki sekitar usia 13 tahun. Namun, kombinasi genetis, fisik, emosi, dan pengaruh konstektual (Kondisi sosial ekonomi, tingkat polusi, lingkungan, gaya hidup, stres, penyakit kronis, dsb) memberikan perbedaan individual dalam waktu dan berkembangnya pubertas pada remaja (Belsky, Steinberg, dkk., 2007 dalam Papalia, D. E. & Feldman, R.D., 2014).\r\nLalu, bagaimana caranya agar remaja dapat melewati masa pubertas dengan sukses? Mengingat tidak semua remaja dapat menyikapi perubahan-perubahan tersebut dengan positif. Ada remaja yang mengalami pubertas lebih dini (awal) atau lebih lambat di bandingkan teman-temannya. Dampak dari kematangan yang lebih cepat atau lambat akan menimbulkan persepsi negatif pada remaja atau mereka tidak melihat manfaat dari perubahan tersebut. Untuk itu, bagaimana remaja, orang tua, lingkungan sekitar remaja menginterpretasikan perubahan yang menyertai selama pubertas akan memberikan peran penting dalam menciptakan kesejahteraan psikologis remaja selama pubertas terjadi.\r\n', 5, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, ''),
('201610171002', 'Permasalahan Mahasiswa Tahun Pertama', '<p>Mahasiswa adalah status yang disandang oleh mereka yang menempuh pendidikan di perguruan tinggi. Sebagai mahasiswa yang baru saja berkenalan dengan dunia kampus, ada beberapa hal yang umumnya dihadapi, dan hal ini bisa menjadi masalah apabila tidak ditangani secara tepat. Kendala-kendala ini akan menjadi lebih berat lagi ketika kalian tinggal jauh dari orangtua. Bila sudah menjadi masalah, maka bisa jadi hal-hal tersebut akan menjadi penghambat dalam perkembangan studi kalian di kampus. </p>Berikut adalah 5 masalah utama yang sering dihadapi mahasiswa tahun pertama:\r\n<ul>\r\n<li>\r\n1.	Penyesuaian sistem belajar                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 \r\nSistem belajar di perguruan tinggi jauh berbeda dengan di SMA. Di perguruan tinggi kalian akan belajar menentukan sendiri mata kuliah yang akan diambil sesuai dengan IPK (indeks prestasi) yang diperoleh. Selain itu, dosen juga bertindak lebih sebagai fasilitator di dalam kelas, sehingga keaktifan kalian dalam belajar akan sangat mempengaruhi kemampuan kalian di dalam kelas. Jam perkuliahan juga tidak monoton dari pagi hingga siang, tetapi bisa berbeda untuk tiap semester, tergantung dari jumlah mata kuliah yang kalian ambil. \r\n</li>\r\n<li>\r\n2.	Time Management\r\nSebagai mahasiswa, kalian akan berhadapan dengan berbagai tugas dan kegiatan. Tugas-tugas yang diberikan di bangku perkuliahan akan jauh lebih banyak dan lebih berat. Selain itu, kalian juga akan disibukkan dengan berbagai kegaiatan di kampus, seperti kepanitiaan, organisasi, dan berbagai kegiatan lainnya. Belum lagi bila kaliaan disibukkan dengan kegiatan diluar kampus seperti bergaul dengan teman, hang-out, pacaran, dsb. Bila tidak diatur dengan baik, kalian bisa kesulitan dalam membagi waktu. Perlu diingat bahwa di perguruan tinggi, dosen tidak akan mengingatkan bila kalian jarang masuk, belum mengumpulkan tugas, atau bahkan belum mengikuti ujian susulan. Untuk itu kalian dituntut agar mampu mengatur dan membagi waktu antara kegiatan akademis dan non akademis agar tidak saling berbenturan. \r\n</li>\r\n<li>\r\n3.	Homesick\r\nSebagian besar mahasiswa memutuskan tinggal  terpisah dari orang tua untuk menempuh pendidikan tinggi. Banyak dari mereka yang belum pernah tinggal jauh dari orangtua sebelumnya, sehingga perasaan rindu terhadap rumah seringkali muncul di tahun-tahun pertama. Hal ini dapat memunculkan perasaan sedih, bahkan bisa menimbulkan stres apabila mahasiswa yang bersangkutan belum memiliki teman. \r\n</li>\r\n<li>\r\n4.	Mengatur keuangan\r\nMahasiswa yang tidak tinggal bersama orangtuanya biasanya hanya akan menerima kiriman uang saku di awal bulan. Oleh karena itu, kalian harus belajar mengatur keuangan sehingga masih bisa bertahan sampai akhir bulan. Padahal kebutuhan seorang mahasiswa itu tidak sedikit, mulai dari pengeluaran rutin sehari-hari, pengeluaran untuk kegiaatan perkuliahan, hingga pengeluaran-pengeluaran yang sifatnya tidak terduga. \r\n</li>\r\n<li>\r\n5.	Menemukan teman baru\r\nKetika berada di kampus baru, kalian akan bertemu dengan teman-teman dari berbagai latar belakang, suku, bahkan budaya.  Kalian mungkin akan kesulitan di awal untuk menjalin hubungan pertemanan dengan orang-orang yang baru kalian temui. Bila kalian kesulitan membuka diri, bukan tidak mungkin tahun-tahun awal ini kalian lewati tanpa teman.\r\n</li>\r\n</ul>\r\n<p> \r\nUntuk itu, bila kalian menghadapi permaslaahan-permasalahan diatas, jangan ragu untuk menceritakan hal tersebut kepada orang lain yang bisa kalian percayai. Bila kalian kesulitan untuk berkomunikasi dengan orang tua, dosen atau teman-teman kalian, silahkan langsung menghubungi kami di konselingsebaya. Kami akan dengan senang hati mendengarkan cerita anda ?.\r\n</p>', 5, 17, '2016-10-17 10:23:24', '0000-00-00 00:00:00', 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`ID`, `NAME`) VALUES
(1, 'Umum'),
(5, 'Remaja'),
(6, 'Dewasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `counsell`
--

CREATE TABLE `counsell` (
  `ID` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_COUNSELLOR` int(11) DEFAULT NULL,
  `TITLE` varchar(255) DEFAULT NULL,
  `CONTENT` text,
  `IS_ACTIVE` int(11) DEFAULT NULL,
  `POST_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `LAST_UPDATE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `ID` int(11) NOT NULL,
  `QUESTION` text,
  `ANSWER` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`ID`, `QUESTION`, `ANSWER`) VALUES
(1, 'Siapa yang menjadi konselor sebaya dan bagaimana ia dapat membantu saya?', 'Konselor sebaya atau peer counselor merupakan mahasiswa PS Psikologi Universitas Brawijaya yang sudah dilatih dan memiliki kemampuan untuk memberikan konseling sebaya. Para konselor dilatih untuk membantu seseorang mengeksplorasi perasaan dan permasalahannya. Para konselor akan memberikan kesediaan mereka untuk mendengarkan, memberikan dukungan, dan membantu untuk mengatasi permasalahan tanpa memberikan stigma ataupun bersifat menghakimi.'),
(2, 'Apakah saya dapat memilih konselor?', 'Ya. Silakan memilih konselor berdasarkan pertimbangan-pertimbangan Anda.'),
(3, 'Apakah saya dapat mengganti konselor?', 'Pada dasarnya seluruh konselor memiliki kompetensi yang sama dalam melakukan konseling. Namun ada kalanya muncul perasaan kurang nyaman karena satu dan lain hal atau sebab-sebab lain, maka Anda diperkenankan untuk mengganti konselor. '),
(4, 'Apakah saya dapat melakukan konseling dengan profesional/dosen/psikolog? ', 'Pada dasarnya layanan ini dirancang sebagai layanan di mana remaja akan membantu sesamanya. Namun, seluruh proses akan diawasi sepenuhnya oleh para psikolog dan ilmuwan psikologi sebagai penyedia utama layanan ini. Ada kalanya para konselor merasa bahwa ia membutuhkan bantuan psikolog atau ilmuwan psikologi, maka ia akan mendiskusikan atau merujuk Anda kepada profesional tersebut dengan izin Anda.'),
(5, 'Saya bukan mahasiswa Universitas Brawijaya, apakah saya boleh menggunakan layanan ini?', 'Layanan ini terbuka untuk seluruh remaja berusia 12 – 21 tahun.'),
(6, 'Saya masih berstatus mahasiswa namun berusia lebih dari 21 tahun, apakah saya dapat menggunakan layanan ini?', 'Ya. Jika Anda berusia di atas 21 tahun namun masih tercatat sebagai mahasiswa, baik vokasi maupun S1, maka Anda dapat menggunakan layanan ini. Layanan ini tidak berlaku untuk mahasiswa pasca sarjana.'),
(7, 'Saya adalah orang tua dari remaja, apakah saya dapat menggunakan layanan ini?', 'Tidak. Layanan ini hanya ditujukan untuk remaja berusia 12- 21 tahun atau mahasiswa vokasi dan S1.'),
(8, 'Masalah apa saja yang dapat saya bicarakan?', 'Anda dapat mendiskusikan semua isu atau permasalahan yang mengganggu Anda, misalnya mengenai relasi, keluarga, akademis, penggunaan alkohol dan zat substansif, dsb. '),
(9, 'Kapan saya dapat menggunakan layanan ini?', 'Anda dapat menggunakan layanan ini kapan saja, akan tetapi konselor biasanya akan memberikan balasan pada saat jam dan hari kerja (Senin – Jumat, 08.00 – 16.00 WIB).'),
(10, 'Apakah identitas dan permasalahan saya dirahasiakan?', 'Ya. Seluruh identitas dan permasalahan Anda bersifat rahasia. Hanya konselor yang Anda pilih serta psikolog atau ilmuwan psikologi yang menjadi supervisor sajalah yang memiliki kewenangan untuk mengakses segala data Anda. Seluruh proses konseling berlangsung dengan asas privasi dan kerahasiaan sesuai dengan Kode Etik HIMPSI (Himpunan Psikologi Indonesia).'),
(11, 'Apakah saya harus membayar untuk menggunakan layanan ini?', 'Tidak. Layanan ini bersifat gratis bagi seluruh penggunanya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foreword`
--

CREATE TABLE `foreword` (
  `ID` int(255) NOT NULL,
  `CONTENT` text,
  `LAST_UPDATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foreword`
--

INSERT INTO `foreword` (`ID`, `CONTENT`, `LAST_UPDATE`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2016-10-07 03:52:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `ID` int(11) NOT NULL,
  `CONTENT` text,
  `LAST_UPDATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CATEGORY` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`ID`, `CONTENT`, `LAST_UPDATE`, `CATEGORY`) VALUES
(1, '<p style="box-sizing: inherit; color: rgba(0, 0, 0, 0.870588); font-family: Roboto, sans-serif; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style="box-sizing: inherit; color: rgba(0, 0, 0, 0.870588); font-family: Roboto, sans-serif; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2016-10-07 03:01:28', 'Sejarah'),
(2, '<p style="box-sizing: inherit; color: rgba(0, 0, 0, 0.870588); font-family: Roboto, sans-serif; font-size: 15px;">LLLLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n<p style="box-sizing: inherit; color: rgba(0, 0, 0, 0.870588); font-family: Roboto, sans-serif; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2016-10-07 03:01:50', 'Visi dan Misi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `ID` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `JOB` varchar(255) DEFAULT NULL,
  `MOTTO` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`ID`, `ID_USER`, `JOB`, `MOTTO`) VALUES
(1, 11, 'Mahasiswa S1 Psikologi Universitas Brawijaya', 'Hidup bukanlah beban dengan banyaknya masalah tapi perjalanan yang patut untuk dinikmati. Jadi apapun yang terjadi, nikmatilah.'),
(2, 12, 'Mahasiswa S1 Psikologi Universitas Brawijaya', 'Selalu percaya bahwa ada makna dalam mendengarkan dan kenikmatan dalam bercerita. Masih dalam proses belajar untuk membantu sesama'),
(3, 13, 'Mahasiswa S1 Psikologi Universitas Brawijaya', 'Kebahagiaan bermula dari sebuah kesederhanaan'),
(4, 14, 'Mahasiswa S1 Psikologi Universitas Brawijaya', 'Saya akan sangat senang sekali untuk mendengar kisah-kisahmu khususnya tentang kehidupan sosialmu. Can’t wait to hear your story.'),
(5, 15, 'Bidang Keahlian Psikologi Klinis', 'Tidak ada Motto'),
(6, 16, 'Bidang Keahlian Psikologi Perkembangan dan Klinis Anak', 'Tidak ada Motto'),
(7, 17, 'Bidang Keahlian Psikologi Pendidikan', 'Tidak ada Motto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `term`
--

CREATE TABLE `term` (
  `ID` int(11) NOT NULL,
  `CONTENT` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `title`
--

CREATE TABLE `title` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `title`
--

INSERT INTO `title` (`ID`, `NAME`) VALUES
(1, 'Super Admin'),
(2, 'Professional'),
(3, 'Counsellor'),
(4, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(25) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `TITLE` int(11) DEFAULT '4',
  `IS_ACTIVE` int(11) DEFAULT '1',
  `FIRSTNAME` varchar(255) DEFAULT NULL,
  `LASTNAME` varchar(255) DEFAULT NULL,
  `BIRTHDATE` date DEFAULT NULL,
  `STAT_EDU` varchar(255) DEFAULT NULL,
  `AVATAR` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`ID`, `USERNAME`, `PASSWORD`, `TITLE`, `IS_ACTIVE`, `FIRSTNAME`, `LASTNAME`, `BIRTHDATE`, `STAT_EDU`, `AVATAR`) VALUES
(1, 'fnaufalh', 'naufal1921', 0, 0, 'Fathin', '', '0000-00-00', 'Pelajar', NULL),
(11, 'marhawi', 'marhawi123', 3, 1, 'Marhawi', '', '1996-10-17', 'Pelajar', 'assets/img/users/marhawi.jpg'),
(12, 'keke', 'keke123', 3, 1, 'Riski', 'Saumi', '1996-10-17', 'Pelajar', 'assets/img/users/keke.jpg'),
(13, 'dani', 'dani123', 3, 1, 'Dwi', 'Hardani Oktawirawan', '1995-10-17', 'Pelajar', 'assets/img/users/dani.jpg'),
(14, 'agnes', 'agnes123', 3, 1, 'Agnes', 'Novelia', '1996-10-17', 'Pelajar', 'assets/img/users/agnes.jpg'),
(15, 'ratri', 'ratri123', 2, 1, 'Ratri', 'Nurwanti', '0000-00-00', 'Dosen', 'assets/img/users/ratri.jpg'),
(16, 'ika', 'ika123', 2, 1, 'Ika', 'Fitria', '0000-00-00', 'Dosen', 'assets/img/users/ika.jpg'),
(17, 'dian', 'dian123', 2, 1, 'Dian', 'Putri Permatasari', '0000-00-00', 'Dosen', 'assets/img/users/sari.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `who`
--

CREATE TABLE `who` (
  `ID` int(11) NOT NULL,
  `CONTENT` text,
  `LAST_UPDATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `who`
--

INSERT INTO `who` (`ID`, `CONTENT`, `LAST_UPDATE`) VALUES
(1, '<p class="MsoNormal" style="text-align: justify;"><span lang="IN">Konseling sebaya merupakan suatu layanan konseling bebas biaya yang ditujukan kepada remaja dengan menggunakan <em>platform</em> internet. Layanan ini secara khusus bertujuan untuk membantu remaja dalam menghadapi dan masalah sehari-hari yang terjadi dalam kehidupan pendidikan, keluarga, relasi dengan rekan sebaya, dan sebagainya. Sebagai catatan, layanan ini tidak ditujukan untuk menangani gangguan mental berat yang harus ditangani profesional secara langsung, namun Anda tetap dapat memperoleh informasi atau diberikan referensi layanan kesehatan mental yang tepat atau Anda butuhkan.</span></p>\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="IN">&nbsp;</span></p>\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="IN">Mengapa seseorang membutuhkan layanan ini? Jawaban untuk pertanyaan tersebut dapat bervariasi satu sama lain. Terkadang seseorang mengalami suatu permasalahan namun merasa tidak nyaman untuk mendiskusikan permasalahan tersebut pada teman atau keluarga. Selain itu, saat masalah-masalah tersebut sudah mengganggu kehidupan sehari-hari namun masalah-masalah tersebut bukanlah masalah yang membutuhkan bantuan psikolog, psikiater, atau tenaga kesehatan mental lainnya, maka seseorang dapat menggunakan layanan ini. Seseorang mungkin hanya membutuhkan seseorang dengan usia yang sama yang dapat mendengar dan mendiskusikan permasalahannya secara terbuka, tanpa menghakimi, dan bersifat rahasia. Layanan ini bertujuan untuk memberikan ruang yang aman bagi seseorang untuk mengeksplorasi permasalahan yang sedang dihadapi.</span></p>\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="IN">&nbsp;</span></p>\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="IN">Layanan ini merupakan bentuk pengabdian kepada masyarakat yang diberikan oleh tenaga pengajar Program Studi Psikologi Universitas Brawijaya yang memiliki kompetensi sebagai psikolog dan ilmuwan psikologi. Layanan ini diharapkan dapat menjadi media promosi kesehatan mental sekaligus bentuk pencegahan masalah kesehatan mental dan perilaku di kalangan remaja, baik siswa sekolah menengah maupun mahasiswa perguruan tinggi, serta media promosi penerapan konsep-konsep psikologi kepada masyarakat, dalam hal ini remaja.</span></p>', '2016-10-16 10:21:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `counsell`
--
ALTER TABLE `counsell`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `foreword`
--
ALTER TABLE `foreword`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `who`
--
ALTER TABLE `who`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `foreword`
--
ALTER TABLE `foreword`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `who`
--
ALTER TABLE `who`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
