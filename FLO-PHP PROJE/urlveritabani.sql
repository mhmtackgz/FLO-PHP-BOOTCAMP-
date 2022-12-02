-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 02 Ara 2022, 18:28:35
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `urlveritabani`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanıcılar`
--

CREATE TABLE `kullanıcılar` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adi` text COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanıcılar`
--

INSERT INTO `kullanıcılar` (`kullanici_id`, `kullanici_adi`, `kullanici_sifre`) VALUES
(1, 'mehmet', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `url`
--

CREATE TABLE `url` (
  `id` int(11) NOT NULL,
  `url` text COLLATE utf8_turkish_ci NOT NULL,
  `shorturl` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `url`
--

INSERT INTO `url` (`id`, `url`, `shorturl`) VALUES
(88, 'https://kodlamaklazim.com/blog/php-try-catch-kullanimi', '594ed1'),
(93, 'https://caganbahri.com/yazi/php-jquery-ajax-ile-veritabanina-kayit-islemi/', 'fa686f'),
(94, 'https://caganbahri.com/yazi/php-jquery-ajax-ile-veritabanina-kayit-islemi/', 'f5ed13'),
(95, 'https://caganbahri.com/yazi/php-jquery-ajax-ile-veritabanina-kayit-islemi/', '5f1512'),
(96, 'https://lms.tekinder.org.tr/courses/196/196/35/php-back-end-web-developer.html?route=play&token=718416ce9f83e18fdc5cbae938446e1305eb1489', '08a00e'),
(97, 'https://kodlamaklazim.com/blog/php-try-catch-kullanimi', '91e6d6'),
(100, 'https://lms.tekinder.org.tr/courses/196/196/35/php-back-end-web-developer.html?route=play&token=718416ce9f83e18fdc5cbae938446e1305eb1489', '911304');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanıcılar`
--
ALTER TABLE `kullanıcılar`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanıcılar`
--
ALTER TABLE `kullanıcılar`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `url`
--
ALTER TABLE `url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
