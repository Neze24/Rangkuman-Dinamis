-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2025 at 08:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `Id_Materi` int(11) NOT NULL,
  `Nama_Materi` varchar(255) NOT NULL,
  `Rangkuman` varchar(10000) NOT NULL,
  `Point_Rangkuman` varchar(5870) NOT NULL,
  `Pranala_Youtube` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`Id_Materi`, `Nama_Materi`, `Rangkuman`, `Point_Rangkuman`, `Pranala_Youtube`) VALUES
(1, 'Pengenalan HTML', 'HTML (HyperText Markup Language) adalah bahasa markup standar untuk membuat halaman web. HTML digunakan untuk menyusun struktur konten di web, seperti teks, gambar, dan multimedia.', '<li>HTML (HyperText Markup Language) adalah bahasa markup standar untuk membuat halaman web.</li><li>HTML digunakan untuk menyusun struktur konten di web, seperti teks, gambar, dan multimedia.</li><li>HTML terdiri dari elemen-elemen yang ditandai dengan tag, seperti &lt;html&gt;, &lt;head&gt;, &lt;body&gt;, dll.</li><li>HTML5 adalah versi terbaru yang mendukung multimedia dan elemen semantik.</li>', 'https://www.youtube.com/embed/NBZ9Ro6UKV8'),
(2, 'Struktur Dokumen HTML', 'Setiap dokumen HTML memiliki struktur dasar yang terdiri dari deklarasi\r\n                            <code>&lt;!DOCTYPE html&gt;</code>, elemen akar <code>&lt;html&gt;</code>, bagian kepala\r\n                            <code>&lt;head&gt;</code> yang menyimpan metadata, dan <code>&lt;body&gt;</code> yang memuat\r\n                            seluruh konten yang ditampilkan di browser. Struktur ini penting untuk memastikan halaman\r\n                            web dapat ditampilkan dengan benar oleh browser.', '<li><strong><code>&lt;!DOCTYPE html&gt;</code></strong>: Deklarasi versi HTML5.</li>\r\n                            <li><strong><code>&lt;html&gt;</code></strong>: Elemen akar semua tag.</li>\r\n                            <li><strong><code>&lt;head&gt;</code></strong>: Konten utama yang terlihat di browser.</li>', 'https://www.youtube.com/embed/1NicaVOCXHA?si=YRoWGIkCYYFkXNKy'),
(3, 'Teks & Formating', 'HTML menyediakan berbagai tag untuk memformat teks dan elemen dasar seperti judul, paragraf,\r\n                            garis, serta gaya penulisan seperti tebal, miring, garis bawah, dan highlight. Selain itu,\r\n                            tag seperti <code>&lt;sup&gt;</code> dan <code>&lt;sub&gt;</code> digunakan untuk penulisan\r\n                            khusus seperti superscript dan subscript.', '<li><code>&lt;h1&gt;</code>–<code>&lt;h6&gt;</code>: Judul dengan ukuran berbeda\r\n                                (<code>&lt;h1&gt;</code> terbesar).</li>\r\n                            <li><code>&lt;p&gt;</code>: Membuat paragraf.</li>\r\n                            <li><code>&lt;br&gt;</code>: Pindah baris.</li>\r\n                            <li><code>&lt;hr&gt;</code>: Garis horizontal.</li>\r\n                            <li>Format teks: <code>&lt;b&gt;</code>/<code>&lt;strong&gt;</code> (tebal),\r\n                                <code>&lt;i&gt;</code>/<code>&lt;em&gt;</code> (miring), <code>&lt;u&gt;</code> (garis\r\n                                bawah), <code>&lt;mark&gt;</code> (highlight).\r\n                            </li>\r\n                            <li><code>&lt;sup&gt;</code> dan <code>&lt;sub&gt;</code> untuk superscript dan subscript.\r\n                            </li>\r\n                   ', 'https://www.youtube.com/embed/3sLSi9L5nWE?si=pcoy87s5-WxeBoli'),
(4, 'List', 'HTML menyediakan tiga jenis daftar: <strong>Unordered List</strong> untuk daftar berpoin,\r\n                            <strong>Ordered List</strong> untuk daftar berurutan dengan angka atau huruf, dan\r\n                            <strong>Definition List</strong> untuk menampilkan istilah beserta definisinya.\r\n                            Masing-masing memiliki tag HTML khusus untuk menyusun daftar sesuai kebutuhan.', '<li><strong>Unordered List</strong> (bullet):\r\n                                <pre><code>\r\n&lt;ul&gt;\r\n&lt;li&gt;Item 1&lt;/li&gt;\r\n&lt;li&gt;Item 2&lt;/li&gt;\r\n&lt;/ul&gt;\r\n                                    </code></pre>\r\n                            </li>\r\n                            <li><strong>Ordered List</strong> (angka/huruf):\r\n                                <pre><code>\r\n&lt;ol type=\"A\"&gt;\r\n&lt;li&gt;Item 1&lt;/li&gt;\r\n&lt;/ol&gt;\r\n                                    </code></pre>\r\n                            </li>\r\n                            <li><strong>Definition List</strong>:\r\n                                <pre><code>\r\n&lt;dl&gt;\r\n&lt;dt&gt;HTML&lt;/dt&gt;\r\n&lt;dd&gt;HyperText Markup Language&lt;/dd&gt;\r\n&lt;/dl&gt;\r\n                                    </code></pre>\r\n                            </li>', 'https://www.youtube.com/embed/cUWBYzA6M-8?si=KxUidGQW45jva2qD'),
(5, 'Link (Hyperlink)', 'Tag <code>&lt;a&gt;</code> digunakan untuk membuat hyperlink. Selain atribut dasar\r\n                            <code>href</code>, tag ini juga dapat menggunakan atribut seperti\r\n                            <code>target=\"_blank\"</code> untuk membuka link di tab baru, <code>title</code> untuk\r\n                            menampilkan tooltip, serta <code>href=\"#id\"</code> untuk melompat ke bagian tertentu dalam\r\n                            halaman.', '<li><strong>Dasar:</strong>\r\n                                <pre><code>&lt;a href=\"https://example.com\"&gt;Kunjungi&lt;/a&gt;</code></pre>\r\n                            </li>\r\n                            <li><strong>Atribut penting:</strong>\r\n                                <ul>\r\n                                    <li><code>target=\"_blank\"</code>: Buka di tab baru.</li>\r\n                                    <li><code>title</code>: Tooltip ketika kursor diarahkan.</li>\r\n                                    <li>Link ke bagian halaman:\r\n                                        <pre><code>&lt;a href=\"#bagian\"&gt;Lompat ke Bagian&lt;/a&gt;</code></pre>\r\n                                    </li>\r\n            ', 'https://www.youtube.com/embed/Dl_bIYBc9gM?si=c-Q4B_uMHoPQaV95'),
(6, 'Gambar', 'Tag <code>&lt;img&gt;</code> digunakan untuk menampilkan gambar di halaman web. Atribut\r\n                            <code>src</code> menentukan lokasi gambar, sedangkan <code>alt</code> wajib ditambahkan\r\n                            sebagai deskripsi alternatif yang berguna untuk SEO dan aksesibilitas. Gambar dapat diambil\r\n                            dari path relatif maupun URL penuh.', '<li>\r\n                                Contoh penggunaan:\r\n                                <pre><code>&lt;img src=\"gambar.jpg\" alt=\"Deskripsi\" <br>width=\"300\" height=\"200\"&gt;</code></pre>\r\n                            </li>\r\n                            <li><strong><code>alt</code></strong> wajib untuk deskripsi gambar (penting untuk SEO dan\r\n                                aksesibilitas).</li>\r\n                            <li>Gambar dapat menggunakan <em>path relatif</em> seperti <code>images/foto.png</code> atau\r\n                                <em>URL penuh</em>.\r\n                            </li>', 'https://www.youtube.com/embed/SMetRBdIh-8?si=V2PFsXggyytMKNc4'),
(7, 'Tabel', 'Tag <code>&lt;table&gt;</code> digunakan untuk menampilkan data dalam bentuk tabel. Elemen\r\n                            <code>&lt;th&gt;</code> digunakan sebagai header yang tampil tebal dan rata tengah secara\r\n                            otomatis. Untuk menggabungkan beberapa kolom atau baris, digunakan atribut\r\n                            <code>colspan</code> dan <code>rowspan</code>.', '<li>\r\n                                <strong>Struktur dasar:</strong>\r\n                                <pre><code>\r\n&lt;table border=\"1\"&gt;\r\n  &lt;tr&gt;\r\n    &lt;th&gt;Nama&lt;/th&gt;\r\n    &lt;th&gt;Usia&lt;/th&gt;\r\n  &lt;/tr&gt;\r\n  &lt;tr&gt;\r\n    &lt;td&gt;Rina&lt;/td&gt;\r\n    &lt;td&gt;20&lt;/td&gt;\r\n  &lt;/tr&gt;\r\n&lt;/table&gt;\r\n    </code></pre>\r\n                            </li>\r\n                            <li><code>&lt;th&gt;</code> digunakan untuk header tabel (secara default tampil tebal dan di\r\n                                tengah).</li>\r\n                            <li>Gunakan <code>rowspan</code> atau <code>colspan</code> untuk menggabungkan sel baris\r\n                                atau kolom.</li>', 'https://www.youtube.com/embed/gLHEoeupIZs?si=S1vIWOj2XP3W_FzU'),
(8, 'Formulir', 'Tag <code>&lt;form&gt;</code> digunakan untuk mengumpulkan input dari pengguna. Form berisi\r\n                            berbagai jenis elemen input seperti <code>text</code>, <code>password</code>,\r\n                            <code>email</code>, <code>checkbox</code>, dan <code>radio</code>. Elemen tambahan seperti\r\n                            <code>&lt;textarea&gt;</code>, <code>&lt;select&gt;</code>, dan <code>&lt;button&gt;</code>\r\n                            memperkaya jenis input yang dapat digunakan. Data yang diisi dalam form biasanya dikirim ke\r\n                            server melalui atribut <code>action</code> dan <code>method</code>.', '<li>\r\n                                <strong>Form memungkinkan input dari user.</strong><br>\r\n                                Contoh:\r\n                                <pre><code>\r\n&lt;form action=\"proses.php\" method=\"post\"&gt;\r\n  &lt;label&gt;Nama:&lt;/label&gt;\r\n  &lt;input type=\"text\" name=\"nama\"&gt;&lt;br&gt;\r\n  &lt;input type=\"submit\" value=\"Kirim\"&gt;\r\n&lt;/form&gt;\r\n    </code></pre>\r\n                            </li>\r\n                            <li>Jenis input: <code>text</code>, <code>password</code>, <code>email</code>,\r\n                                <code>checkbox</code>, <code>radio</code>, <code>date</code>, dll.\r\n                            </li>\r\n                            <li>Elemen tambahan: <code>&lt;textarea&gt;</code>, <code>&lt;select&gt;</code>,\r\n                                <code>&lt;option&gt;</code>, <code>&lt;button&gt;</code>.\r\n                            </li>', 'https://www.youtube.com/embed/QIlBOI-hTuA?si=PinN99vJfzpzkBDC'),
(9, 'Elemen Semantik HTML5', 'Elemen-elemen semantik seperti <code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>,\r\n                            <code>&lt;main&gt;</code>, <code>&lt;section&gt;</code>, <code>&lt;article&gt;</code>,\r\n                            <code>&lt;aside&gt;</code>, dan <code>&lt;footer&gt;</code> memberikan makna yang jelas\r\n                            terhadap struktur halaman web. Penggunaan elemen ini tidak hanya meningkatkan keterbacaan\r\n                            kode, tetapi juga membantu SEO dan aksesibilitas dengan memberikan konteks pada konten bagi\r\n                            mesin pencari dan pembaca layar.', '<li><strong>Elemen semantik membantu SEO & struktur halaman.</strong></li>\r\n                            <li><code>&lt;header&gt;</code>: Bagian kepala (logo, navigasi).</li>\r\n                            <li><code>&lt;nav&gt;</code>: Menu navigasi.</li>\r\n                            <li><code>&lt;main&gt;</code>: Konten utama.</li>\r\n                            <li><code>&lt;section&gt;</code>: Bagian dari halaman (bab).</li>\r\n                            <li><code>&lt;article&gt;</code>: Artikel/konten independen.</li>\r\n                            <li><code>&lt;aside&gt;</code>: Sidebar atau catatan tambahan.</li>\r\n                            <li><code>&lt;footer&gt;</code>: Bagian bawah halaman.</li>\r\n ', 'https://www.youtube.com/embed/yb_emYhY3Pc?si=1p6iNlpBmBepduyk'),
(10, 'Multimedia', 'HTML menyediakan tag <code>&lt;video&gt;</code> dan <code>&lt;audio&gt;</code> untuk\r\n                            menampilkan media di halaman web. Dengan menambahkan elemen <code>&lt;source&gt;</code> di\r\n                            dalamnya, kita dapat menyisipkan file video atau audio dengan format tertentu. Atribut\r\n                            <code>controls</code> digunakan agar pengguna dapat memutar, menjeda, atau menyesuaikan\r\n                            volume media secara langsung. ', '<li>\r\n                                <strong>Menambahkan video:</strong>\r\n                                <pre><code>\r\n&lt;video controls width=\"320\"&gt;\r\n  &lt;source src=\"video.mp4\" <br>type=\"video/mp4\"&gt;\r\n&lt;/video&gt;\r\n    </code></pre>\r\n                            </li>\r\n                            <li>\r\n                                <strong>Menambahkan audio:</strong>\r\n                                <pre><code>\r\n&lt;audio controls&gt;\r\n  &lt;source src=\"audio.mp3\"<br> type=\"audio/mpeg\"&gt;\r\n&lt;/audio&gt;\r\n    </code></pre>\r\n                            </li>\r\n         ', 'https://www.youtube.com/embed/7-QNafrXigs?si=XIDOKVVdxFx2Bnav'),
(11, 'Komentar', 'Komentar dalam HTML ditulis menggunakan <code>&lt;!-- ... --&gt;</code> dan tidak akan\r\n                            ditampilkan di browser. Komentar berguna untuk memberi catatan atau penjelasan di dalam\r\n                            kode, baik untuk diri sendiri maupun orang lain yang membaca struktur HTML. ', '<li>\r\n                                <strong>Komentar tidak ditampilkan di browser:</strong>\r\n                                <pre><code>&lt;!-- Ini komentar --&gt;</code></pre>\r\n                            </li>', 'https://www.youtube.com/embed/qs8G2XWf7Yk?si=JAvWgooIzxIhKhlf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`Id_Materi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `Id_Materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
