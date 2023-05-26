-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 03 Oca 2023, 15:30:30
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
-- Tablo için tablo yapısı `tbl_kullanici_egitim`
--

CREATE TABLE `tbl_kullanici_egitim` (
  `k_egitim_id` int UNSIGNED NOT NULL,
  `k_id` int UNSIGNED NOT NULL,
  `k_egitim_durumu` varchar(50) COLLATE utf8mb3_turkish_ci NOT NULL,
  `k_anlik_durum` varchar(50) COLLATE utf8mb3_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `tbl_kullanici_egitim`
--

INSERT INTO `tbl_kullanici_egitim` (`k_egitim_id`, `k_id`, `k_egitim_durumu`, `k_anlik_durum`) VALUES
(1, 1, 'Lise', 'Öğrenci'),
(2, 2, 'Lise', 'Okuyor');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_kullanici_egitim`
--
ALTER TABLE `tbl_kullanici_egitim`
  ADD PRIMARY KEY (`k_egitim_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_kullanici_egitim`
--
ALTER TABLE `tbl_kullanici_egitim`
  MODIFY `k_egitim_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
