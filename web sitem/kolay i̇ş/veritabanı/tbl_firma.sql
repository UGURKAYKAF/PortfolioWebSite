-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 03 Oca 2023, 15:30:16
-- Sunucu sürümü: 8.0.30
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `gunluk_kazanc`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_firma`
--

CREATE TABLE `tbl_firma` (
  `f_id` int UNSIGNED NOT NULL,
  `f_eposta` varchar(255) COLLATE utf8mb3_turkish_ci NOT NULL,
  `f_sifre` varchar(255) COLLATE utf8mb3_turkish_ci NOT NULL,
  `f_ad` varchar(255) COLLATE utf8mb3_turkish_ci NOT NULL,
  `f_il` varchar(100) COLLATE utf8mb3_turkish_ci NOT NULL,
  `f_ilce` varchar(100) COLLATE utf8mb3_turkish_ci NOT NULL,
  `f_adres` varchar(255) COLLATE utf8mb3_turkish_ci NOT NULL,
  `f_yetkili_tel` varchar(11) COLLATE utf8mb3_turkish_ci NOT NULL,
  `f_ins_tel` varchar(11) COLLATE utf8mb3_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_firma`
--
ALTER TABLE `tbl_firma`
  ADD PRIMARY KEY (`f_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_firma`
--
ALTER TABLE `tbl_firma`
  MODIFY `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
