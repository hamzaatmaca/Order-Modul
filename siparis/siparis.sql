-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Nis 2021, 16:31:19
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `siparis`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gelen`
--

CREATE TABLE `gelen` (
  `gelen_id` int(10) UNSIGNED NOT NULL,
  `gelen_mesaj` text NOT NULL,
  `gelen_ad` text NOT NULL,
  `gelen_telefon` varchar(255) NOT NULL,
  `gelen_adres` text NOT NULL,
  `gelen_odeme` varchar(255) NOT NULL,
  `gelen_zaman` text NOT NULL,
  `gelen_gon` varchar(255) NOT NULL,
  `gelen_tes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icecekler`
--

CREATE TABLE `icecekler` (
  `icecek_id` int(10) UNSIGNED NOT NULL,
  `icecek_isim` text NOT NULL,
  `icecek_resim` text NOT NULL,
  `icecek_fiyat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `icecekler`
--

INSERT INTO `icecekler` (`icecek_id`, `icecek_isim`, `icecek_resim`, `icecek_fiyat`) VALUES
(36, 'Ayran', 'ayran.webp', '5'),
(37, 'Fanta', 'fanta.jfif', '6'),
(38, 'Kahve', 'kahve.jfif', '4'),
(39, 'Kola', 'kola.jfif', '8'),
(40, 'Limonata', 'limonata.jfif', '9'),
(41, 'Soda', 'soda.jfif', '6');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sifre`
--

CREATE TABLE `sifre` (
  `sifre_id` int(10) UNSIGNED NOT NULL,
  `sifre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sifre`
--

INSERT INTO `sifre` (`sifre_id`, `sifre`) VALUES
(1, 'a');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yemekler`
--

CREATE TABLE `yemekler` (
  `yemek_id` int(10) UNSIGNED NOT NULL,
  `yemek_isim` text NOT NULL,
  `yemek_resim` text NOT NULL,
  `yemek_fiyat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yemekler`
--

INSERT INTO `yemekler` (`yemek_id`, `yemek_isim`, `yemek_resim`, `yemek_fiyat`) VALUES
(45, 'Döner', 'doner.jfif', '24'),
(46, 'Gözleme', 'gozleme.jfif', '50'),
(47, 'Hamburger', 'hamburger.jpg', '60'),
(48, 'Patates Kızartması', 'patates.jfif', '45'),
(50, 'Tavuk', 'tavuk.jpg', '85'),
(52, 'Kebap', 'kebap.jpg', '34'),
(53, 'lahmacun', 'lahmacun.jfif', '35'),
(54, 'Künefe', 'kunefe.jfif', '67');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `gelen`
--
ALTER TABLE `gelen`
  ADD PRIMARY KEY (`gelen_id`);

--
-- Tablo için indeksler `icecekler`
--
ALTER TABLE `icecekler`
  ADD PRIMARY KEY (`icecek_id`);

--
-- Tablo için indeksler `sifre`
--
ALTER TABLE `sifre`
  ADD PRIMARY KEY (`sifre_id`);

--
-- Tablo için indeksler `yemekler`
--
ALTER TABLE `yemekler`
  ADD PRIMARY KEY (`yemek_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `gelen`
--
ALTER TABLE `gelen`
  MODIFY `gelen_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `icecekler`
--
ALTER TABLE `icecekler`
  MODIFY `icecek_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Tablo için AUTO_INCREMENT değeri `sifre`
--
ALTER TABLE `sifre`
  MODIFY `sifre_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `yemekler`
--
ALTER TABLE `yemekler`
  MODIFY `yemek_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
