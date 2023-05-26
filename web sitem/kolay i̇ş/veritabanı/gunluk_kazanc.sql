-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 03 Oca 2023, 15:29:38
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
-- Tablo için tablo yapısı `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int UNSIGNED NOT NULL,
  `admin_kullanici_adi` varchar(100) COLLATE utf8mb3_turkish_ci NOT NULL,
  `admin_sifre` varchar(255) COLLATE utf8mb3_turkish_ci NOT NULL,
  `admin_ad_soyad` varchar(255) COLLATE utf8mb3_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

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

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_is`
--

CREATE TABLE `tbl_is` (
  `is_id` int UNSIGNED NOT NULL,
  `is_firma_id` int NOT NULL,
  `is_kategori_id` int NOT NULL,
  `is_baslik` varchar(255) COLLATE utf8mb3_turkish_ci NOT NULL,
  `is_aciklama` text COLLATE utf8mb3_turkish_ci NOT NULL,
  `is_maas` int DEFAULT NULL,
  `is_aranan_kisi` int DEFAULT NULL,
  `is_ilan_tarihi` date NOT NULL,
  `is_ilan_tarih_bitis` date NOT NULL,
  `is_zorlugu` float NOT NULL,
  `is_adresi` varchar(255) COLLATE utf8mb3_turkish_ci NOT NULL,
  `is_il` varchar(255) COLLATE utf8mb3_turkish_ci NOT NULL,
  `is_ilce` varchar(255) COLLATE utf8mb3_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int UNSIGNED NOT NULL,
  `kategori_ad` varchar(255) COLLATE utf8mb3_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

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
-- Tablo için indeksler `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `tbl_firma`
--
ALTER TABLE `tbl_firma`
  ADD PRIMARY KEY (`f_id`);

--
-- Tablo için indeksler `tbl_is`
--
ALTER TABLE `tbl_is`
  ADD PRIMARY KEY (`is_id`);

--
-- Tablo için indeksler `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `tbl_kullanici`
--
ALTER TABLE `tbl_kullanici`
  ADD PRIMARY KEY (`k_id`);

--
-- Tablo için indeksler `tbl_kullanici_egitim`
--
ALTER TABLE `tbl_kullanici_egitim`
  ADD PRIMARY KEY (`k_egitim_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_firma`
--
ALTER TABLE `tbl_firma`
  MODIFY `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_is`
--
ALTER TABLE `tbl_is`
  MODIFY `is_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_kullanici`
--
ALTER TABLE `tbl_kullanici`
  MODIFY `k_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_kullanici_egitim`
--
ALTER TABLE `tbl_kullanici_egitim`
  MODIFY `k_egitim_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
