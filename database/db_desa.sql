-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2023 pada 17.46
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id_absen`, `id_login`, `nama`, `tanggal`) VALUES
(4, 67, 'Muh. Najwar Ramadhan', '2023-11-18'),
(5, 68, 'wawan', '2023-11-18'),
(6, 68, 'wawan', '2023-11-18'),
(7, 68, 'wawan', '2023-11-19'),
(8, 67, 'Muh. Najwar Ramadhan', '2023-11-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_penduduk`
--

CREATE TABLE `tb_data_penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `nik` int(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jkel` varchar(50) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `rt` varchar(50) NOT NULL,
  `rw` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status_nikah` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_data_penduduk`
--

INSERT INTO `tb_data_penduduk` (`id_penduduk`, `no_kk`, `nik`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jkel`, `desa`, `rt`, `rw`, `agama`, `status_nikah`, `pekerjaan`) VALUES
(9, '66666', 43894389, 'quensyah', 'malino', '2006-06-14', 'wanita', 'bunga', '7', '7', 'islam', 'belum menikah', 'belum'),
(10, '7777', 89989898, 'colle', 'fadslk', '0008-08-08', 'pria', 'dhh', '8', '8', 'islam', 'sudah menikah', 'ghg'),
(11, '909090', 899898, 'ioioii', 'iooi', '0007-07-07', 'wanita', 'llkl', 'i', 'i', 'islam', 'sudah menikah', 'kl'),
(12, '66666', 898898989, 'ioioio', 'ioioioioi', '0007-07-07', 'pria', 'iuiu', '8', 'u', 'islam', 'sudah menikah', 'ioioio'),
(13, '', 0, '', '', '0000-00-00', '', '', '', '', '', '', ''),
(14, '66666', 66661, 'Muh.Najwar Ramadhan', 'makassar', '2002-01-20', 'pria', 'kampung buyang', '01', '01', 'islam', 'belum menikah', 'tidak bekerja'),
(15, '66666', 666661, 'najwar', 'makassar', '2002-05-06', 'pria', 'kampung buyang', '01', '01', 'islam', 'belum menikah', 'belum kerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_pindah`
--

CREATE TABLE `tb_data_pindah` (
  `id_pindah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_pindah` date NOT NULL,
  `alasan` text NOT NULL,
  `alamat_baru` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_data_pindah`
--

INSERT INTO `tb_data_pindah` (`id_pindah`, `nama`, `tgl_pindah`, `alasan`, `alamat_baru`) VALUES
(6, 'dsklksfd', '2023-12-14', 'rflaksdfads', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar` int(11) NOT NULL,
  `wisata_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_informasi` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_informasi`, `gambar`, `judul`, `deskripsi`, `penulis`, `uploaded`) VALUES
(9, 'longsor.jpg', 'Sehari Diguyur Hujan, Jalan Poros Desa Bonea Timur Longsor', '<p>Bontomanai &ndash; Curah hujan yang mengguyur Kabupaten Kepulauan Selayar sejak pagi hari menyebabkan longsor di salah satu ruas jalan yang ada.</p>\r\n\r\n<p>Kondisi longsor tersebut terjadi di jalan poros menuju Bontokalli, Dalle mambua, Kecamatan Bontomanai, Desa Bonea Timur.</p>\r\n\r\n<p>Dari informasi yang dihimpun, kondisi longsor jalan poros tersebut sangat membahayakan bagi para pengguna jalan, pasalnya longsoran itu mengambil sebagian jalan yang langsung ke bibir jurang dan kondisi longsoran jalan tersebut sangat membahayakan.</p>\r\n\r\n<p>Diimbau bagi para pengguna jalan untuk mengambil alternatif jalan lain yakni berputar melewati polebunging-lembang bosang-laloasa- lembang bau</p>\r\n\r\n<p>Hingga berita ini diterbitkan, pewarta masih mencoba melakukan koordinasi dengan BPBD Kabupaten Kepulauan Selayar.</p>\r\n', 'Aldi Taher', '2023-11-17'),
(10, 'kepala desa.jfif', 'Kepala Desa Bonea Timur : “Bonea Timur Adalah Miniaturnya Selayar”', '<p>&nbsp;Desa Bonea Timur Kecamatan Bontomanai Kabupaten Kepulauan Selayar memiliki potensi keindahan alam dan kekayaan alam yang berlimpah.</p>\r\n\r\n<p>Kondisi alam Desa Bonea Timur yang terdiri dari bukit dan pesisir pantai membuat kepala Desa Bonea Timur A.Amin beranggapan bahwa desanya adalah Miniaturnya Selayar.</p>\r\n\r\n<p>&ldquo;Desa Bonea Timur itu adalah miniaturnya selayar. Potensi untuk pengembangan Pariwisata sangatlah luar biasa, mulai wisata agro sampai wisata laut. Desa Bonea Timur memiliki puncak pusera, Kampung Bissorang, Air Terjun Balantimurung dan Pantai Ngapalohe&rdquo; Ujar A.Amin.</p>\r\n\r\n<p>&ldquo;Untuk pemberdayaan masyarakat dan pemuda Desa Bonea timur kami sudah didampingi oleh BLK dibidang pelatihan perbengkelan dan otomotif dan alhamdulillah pemuda sudah bisa diberdayakan&rdquo; ungkap A.Amin.</p>\r\n\r\n<p>Selain potensi Wisata alam desa Bonea Timur memiliki komoditas perkebunan yang melimpah antara lain Cengkeh, Vanili, Pala dan Kemiri yang merupakan komoditas unggulan Kabupaten Kepulauan Selayar.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Kami membutuhkan peran serta pemuda dan penggiat Pariwisata untuk bersama sama mengembangkan dan mempromosikan Desa Bonea Timur. Karena salah satu kendala terbesar desa adalah Sumber Daya manusia untuk pengembangan Wisata&rdquo; Tutup A.Amin.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Desa Bonea Timur ditempuh sekitar 45 Menit dari kota Benteng. Sepanjang perjalanan kita akan disuguhi hawa sejuk pegunungan dan pemandangan alam yang memanjakan mata. (DA)</p>\r\n', 'RAFFI AHMAD', '2023-11-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kematian`
--

CREATE TABLE `tb_kematian` (
  `id_mati` int(11) NOT NULL,
  `nama_penduduk` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `tgl_mati` date NOT NULL,
  `penyebab_mati` text NOT NULL,
  `tempat_mati` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kematian`
--

INSERT INTO `tb_kematian` (`id_mati`, `nama_penduduk`, `nik`, `tgl_mati`, `penyebab_mati`, `tempat_mati`) VALUES
(3, 'baharuddin', '808080', '2010-10-10', 'tabrak mobil', 'di perintis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kk`
--

CREATE TABLE `tb_kk` (
  `id_kk` int(11) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `kepala_keluarga` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `rt` varchar(50) NOT NULL,
  `rw` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kk`
--

INSERT INTO `tb_kk` (`id_kk`, `no_kk`, `kepala_keluarga`, `pekerjaan`, `desa`, `rt`, `rw`, `kecamatan`, `kabupaten`, `provinsi`) VALUES
(4, '66666', 'najwar', 'programmer', 'antara', '87', '87', 'btn', 'makassar', 'sulawesi selatan'),
(5, '7777', 'ngarang', 'wiraswasta', 'panunggu', '5', '5', 'manggora', 'pinnesa', 'sulawesi selatan'),
(6, '909090', 'alex', 'penjual nasi kuning', 'yuyuyuy', '887', '878787', 'uyyuy', 'yuyuyu', 'yuyuyuyu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lahiran`
--

CREATE TABLE `tb_lahiran` (
  `id_lahiran` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jkel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_lahiran`
--

INSERT INTO `tb_lahiran` (`id_lahiran`, `nama`, `tgl_lahir`, `jkel`) VALUES
(2, 'bahri', '2023-12-07', 'Wanita');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `nama`, `username`, `password`, `profile`, `role`) VALUES
(1, 'Najwar', 'admin', 'admin', '20220413_143641_0000.png', 'kepala_desa'),
(67, 'Muh. Najwar Ramadhan', 'najwar', 'najwar', 'icon.png', 'staff'),
(68, 'wawan', 'wawan', 'wawan', '6312051eb661e15cdf54ded7.png', 'staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `uploaded` date NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `gambar`, `judul`, `uploaded`, `deskripsi`) VALUES
(12, 'ikan.jpg', 'Ikan ', '2023-11-18', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `sejarah` text NOT NULL,
  `detail` varchar(300) DEFAULT NULL,
  `struktural` varchar(100) DEFAULT NULL,
  `visi` varchar(200) DEFAULT NULL,
  `misi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `sejarah`, `detail`, `struktural`, `visi`, `misi`) VALUES
(1, '<p>. Desa Bonea Timur adalah salah satu desa yang berada dalam wilayah Kecamatan Bontomanai, Kabupaten Kepulauan Selayar, yang masih minim data-data mengenai informasi desa.</p>\r\n\r\n<p>Desa yang berkembang melalui sektor perkebunan/pertanian ini memiliki potensi sumber daya bahari yang sangat bagus karena memiliki lautan yang luas dengan 3 Pantai yang dikenal yaitu : Pantai Ngapai,Ngapalohe dan Lajung. Masing-masing pantai tersebut telah dikemas untuk menjadi pilhan tempat wisata yang merupakan langkah awal yang di ambil oleh Pemerintah Desa dengan pembuatan jalan ke Pantai yang kini bisa di akses melalui kendaraan roda dua.</p>\r\n', '<p>Luas wilayah daratan Desa Bonea Timur secara keseluruhan mencapai &plusmn; 27 km2. Desa Bonea Timur merupakan satu dari beberapa Desa yang berada dalam wilayah Bontomanai Kabupaten Kepulauan Selayar. Jarak antara Desa Bonea Timur dengan Ibu kota Kecamatan Bontomanai &plusmn; 17 km, sedangkan jara', '<ol>\r\n	<li>KEPALA DESA</li>\r\n	<li>SEKRETASI DESA</li>\r\n	<li>BENDAHARA DESA</li>\r\n</ol>\r\n', '<p>&ldquo;TERWUJUDNYA DESA BONEA TIMUR YANG MANDIRI, SEJAHTERA DAN RELIGIUS&rdquo;.</p>\r\n', '<p>&quot;MENINGKATKAN FASILITAS AGAR MASYARAKAT MUDAH DALAM BERAKTIVITAS&quot;</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_keluar`
--

CREATE TABLE `tb_surat_keluar` (
  `id_keluar` int(11) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_kirim` date NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_surat_keluar`
--

INSERT INTO `tb_surat_keluar` (`id_keluar`, `no_surat`, `perihal`, `tujuan`, `tgl_surat`, `tgl_kirim`, `file`) VALUES
(1, '123mantap', 'pelda', 'sekolah dasar', '0009-09-09', '0009-09-09', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_masuk`
--

CREATE TABLE `tb_surat_masuk` (
  `id_masuk` int(11) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_terima` date NOT NULL,
  `asal_surat` varchar(100) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_surat_masuk`
--

INSERT INTO `tb_surat_masuk` (`id_masuk`, `no_surat`, `tgl_surat`, `tgl_terima`, `asal_surat`, `perihal`, `file`) VALUES
(8, 'lpj', '2023-11-27', '2024-01-03', 'dimensi', 'pertukaran mahasiswa', 'frame.pdf'),
(9, 'lpjfadsfads', '2023-12-13', '2024-01-03', 'fadsf', 'kk', '2023-SURAT EDARAN PERKULIAHAN BULAN PUASA.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar_utama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `judul`, `gambar_utama`, `deskripsi`) VALUES
(17, 'Pantai Ngapalohe', 'pantai ngapalohe.jpeg', '<p>Pantai Ngapalohe terlihat layaknya dua buah teluk kecil yang menyerupai huruf W, dengan batu poong atau atol yang berada di muaranya. Pantai ini menyerupai sebuah laguna, atau telaga biru yang berada di tepi pantai. Dengan keindahan yang ditawarkan oleh Pantai Ngapalohe, menjadikannya tempat wisata di Selayar yang memiliki pantai tercantik dengan sejuta impian.</p>\r\n\r\n<p>Di bagian utara dari Pantai Ngapalohe, terlihat landai dan berpasir putih, sedangkan pada bagian selatan terdiri dari batuan datar dengan ukiran kikisan air. Keindahan dari warna laut pada Pantai Ngapalohe sangatlah cantik, bergradasi biru muda ke biru pekat membuatnya sangat indah dipandang. Pantai Ngapalohe terletak di Desa Bonea Timur, Kecamatan Bontomanai.</p>\r\n\r\n<p>Pantai ini tampak cantik di foto, kan? Jangan puas hanya dengan berperahu saat berada di Pantai Ngapalohe, sebab panorama bawah lautnya juga tidak kalah memukau. Hal ini membuat Pantai Ngapalohe menjadi salah satu destinasi wisata favorit di Kepulauan Selayar. Bagi kamu yang belum bisa menyelam, cukup dengan&nbsp;<em>snorkeling&nbsp;</em>saja kamu sudah bisa menikmati keindahan biota laut. Jadi tidak perlu ragu untuk menceburkan dirimu di laut birunya.</p>\r\n'),
(18, 'Pantai Liang Kereta', 'pantai liang kereta.jpeg', '<p>Satu lagi tempat wisata di Selayar yang memiliki keindahan pasir putih, ialah Pantai Liang Kareta. Terletak di Bontoburusu, Kecamatan Bontoharu, pantai ini memiliki luas sekitar 300 m dengan air laut yang jernih berwana biru kehijauan. Tidak hanya air lautnya saja yang indah, nyatanya pemandangan baik sekitar maupun bawah laut pun sangat menyegarkan. Tempat ini sering dijadikan lokasi snorkeling dan diving, bahkan menjadi area pemancingan alternatif.</p>\r\n'),
(19, 'Puncak Pusera', 'puncak pusera.jpg', '<p>Menikmati indahnya langit malam, ditemani dengan bintang yang menyebar dengan indah tentu memberikan pengalaman yang tak terlupakan bagi anda. Puncak Pusera adalah area perbukitan dengan panorama laut yang indah di sebelah timur, tidak hanya itu saja Puncak ini juga memiliki cuaca yang sejuk dan lokasi terbaik untuk camping dan hunting foto. Puncak Pusera terdapat pada Taipadapa, Bonea Makmur, Kecamatan Bontomanai.</p>\r\n\r\n<p>Salah satu tempat wisata di Selayar ini, kamu dapat merasakan sebuah panorama keindahan malam yang tidak bisa dijelaskan dengan kata-kata. Rasakan pengalaman melihat ribuan bintang yang berada di langit, dengan hembusan angin di sekitar perbukitan. Keindahan dari panorama malam tersebut, membuat banyak wisatawan yang datang dan melakukan caping di Puncak Puserta ini.</p>\r\n\r\n<p><br />\r\nPuncak Pusera alias Bukit Pusera ini akan memanjakan matamu berkat udara yang sejuk dan pemandangan yang keren. Setelah kamu sedikit mendaki, pilih spot yang kamu sukai lalu duduk dengan posisi yang paling nyaman. Dijamin waktu akan berlalu tanpa terasa di sini! Kamu pun pasti tidak akan lupa untuk&nbsp;<em>selfie&nbsp;</em>karena siapa yang rela melewatkan kesempatan ini begitu saja? Menghadap ke pantai di sisi timur, fenomena terbitnya matahari akan semakin cantik ketika kamu saksikan di Puncak Pusera.</p>\r\n'),
(20, 'Wisata Kampung Penyu', 'wisata kampung penyu.jpg', '<p>Kampung Penyu, yang merupakan singkatan dari Perkumpulan Pemuda Pelindung Penyu. Kawasan konservasi penyu ini diinisasi oleh Sileya Scuba Drivers (SSD), sebuah organisasi penyelam di Kepulauan Selayar.&nbsp;Inisiatif pembuatan kampung penyu ini didasari oleh keprihatinan maraknya aktivitas pengambilan telur di Desa Barugaia, salah satu kawasan pantai habitat penyu di Selayar.&nbsp;&ldquo;Saat itu perdagangan telur penyu sedang marak di pasar-pasar. Kami datangi mereka dengan berpura-pura sebagai pembeli. Lalu kami tanya-tanya dimana mereka mendapatkan telur-telur penyu itu. Sebagian besar memang berasal dari Desa Barugae,&rdquo; kata Ronald Yusuf, Wakil Ketua SSD.</p>\r\n\r\n<p>Pengumpulan telur penyu ataupun perburuan penyu lazim ketika itu, karena belum adanya larangan yang tegas dari pemerintah. SSD kemudian melakukan sosialisasi ke masyarakat tentang larangan penangkapan satwa dilindungi itu.&nbsp;&ldquo;Dari situ terlihat mereka mulai takut mengumpulkan telur. Kalau pun ada, dilakukan secara sembunyi-sembunyi. Banyak dari warga yang dulunya sangat aktif kini berhenti, mungkin karena takut ataupun karena kesadaran.&rdquo;</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indeks untuk tabel `tb_data_penduduk`
--
ALTER TABLE `tb_data_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indeks untuk tabel `tb_data_pindah`
--
ALTER TABLE `tb_data_pindah`
  ADD PRIMARY KEY (`id_pindah`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `tb_kematian`
--
ALTER TABLE `tb_kematian`
  ADD PRIMARY KEY (`id_mati`);

--
-- Indeks untuk tabel `tb_kk`
--
ALTER TABLE `tb_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indeks untuk tabel `tb_lahiran`
--
ALTER TABLE `tb_lahiran`
  ADD PRIMARY KEY (`id_lahiran`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indeks untuk tabel `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indeks untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_data_penduduk`
--
ALTER TABLE `tb_data_penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_data_pindah`
--
ALTER TABLE `tb_data_pindah`
  MODIFY `id_pindah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_kematian`
--
ALTER TABLE `tb_kematian`
  MODIFY `id_mati` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_kk`
--
ALTER TABLE `tb_kk`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_lahiran`
--
ALTER TABLE `tb_lahiran`
  MODIFY `id_lahiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
