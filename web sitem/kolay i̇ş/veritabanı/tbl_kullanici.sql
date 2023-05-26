-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 03 Oca 2023, 15:30:27
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
-- Tablo için tablo yapısı `tbl_kullanici`
--

CREATE TABLE `tbl_kullanici` (
  `k_id` int UNSIGNED NOT NULL,
  `k_egitim_id` int UNSIGNED NOT NULL,
  `k_eposta` varchar(100) COLLATE utf8mb3_turkish_ci NOT NULL,
  `k_sifre` varchar(255) COLLATE utf8mb3_turkish_ci NOT NULL,
  `k_ad` varchar(100) COLLATE utf8mb3_turkish_ci NOT NULL,
  `k_soyad` varchar(100) COLLATE utf8mb3_turkish_ci NOT NULL,
  `k_telefon` varchar(11) COLLATE utf8mb3_turkish_ci NOT NULL,
  `k_il` varchar(50) COLLATE utf8mb3_turkish_ci NOT NULL,
  `k_ilce` varchar(50) COLLATE utf8mb3_turkish_ci NOT NULL,
  `k_adres` varchar(255) COLLATE utf8mb3_turkish_ci NOT NULL,
  `k_cinsiyet` int NOT NULL,
  `k_dogum_tarihi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_kullanici`
--
ALTER TABLE `tbl_kullanici`
  ADD PRIMARY KEY (`k_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_kullanici`
--
ALTER TABLE `tbl_kullanici`
  MODIFY `k_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
