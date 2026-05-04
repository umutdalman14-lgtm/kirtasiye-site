-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 26 Şub 2024, 10:29:25
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kirtasiye`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urunler_id` int(11) NOT NULL,
  `urunler_foto` varchar(50) NOT NULL,
  `urunler_ad` varchar(50) NOT NULL,
  `urunler_fiyat` int(6) NOT NULL,
  `urunler_adet` int(4) NOT NULL,
  `urunler_aciklama` text NOT NULL,
  `urunler_satilikmi` varchar(50) NOT NULL,
  `urunler_tarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urunler_id`, `urunler_foto`, `urunler_ad`, `urunler_fiyat`, `urunler_adet`, `urunler_aciklama`, `urunler_satilikmi`, `urunler_tarih`) VALUES
(111, 'kalem.png', 'Kalem', 120, 100, 'Kalem, yazı yazmakta ve (bazı türleri) resim yapmakta kullanılan, genellikle ince bir çubuk şeklindeki araçtır. ', '1', '2024-02-25 16:05:06'),
(112, 'defter.png', 'Defter', 75, 40, 'Defter, üzerinde yazı veya çizim yapılması amacıyla boş kâğıtların birleştirilmesiyle meydana getirilen bir nesnedir. Defter, 1920 yılında kâğıtları birleştirip, kartondan kapak ekleyen J.A. Birchall tarafından icat edilmiştir. Defter, genellikle hafif bir kapak içerisinde, yazı yazmak için bir araya tutturulmuş kâğıt yapraklarından oluşur.', '1', '2024-02-25 16:17:34'),
(113, 'makas.png', 'Makas', 45, 200, 'Makas; kumaş, kağıt, bez, saç gibi maddeleri kesmek için kullanılan, perçinli bir eksen ile ortadan birbirine eklenen, kestirmek için biri diğerine yaklaştırılan, iki çelik bıçak parçası.', '1', '2024-02-25 16:42:35'),
(114, 'silgi.png', 'Silgi', 25, 150, 'Silgi; kalem, tebeşir veya daktiloyla yazılıp çizilmiş işaretlerin silinmesinde kullanılan kauçuk, vinil, plastik veya bezden yapılmış gereç. Silginin eş anlamlıları bozan ve öçürge sözcükleridir. Günümüzde silgiler genellikle bitkisel yağ, ince süngertaşı ve sülfürle bağlı kauçuğun bileşimidir.', '1', '2024-02-25 16:50:27'),
(115, 'kalemtras.png', 'Kalemtraş', 30, 70, 'Kalemtraş veya kalemaçacak, kalemlerin uçlarını tıraş etmede kullanılan kırtasiye malzemesidir. Elektrikli ve elle çalışan kalemtıraşlar vardır. Genelde çelik bir kesici bölüm ve onu tutan plastik bir dış yüzeyden oluşur.', '1', '2024-02-25 16:51:17'),
(116, 'cetvel.png', 'Cetvel', 17, 60, 'Cetvel, Türk Dil Kurumu\'nun tanımına göre; doğru çizgileri çizmeye yarayan, dereceli veya derecesiz, tahtadan, plastikten, madenden yapılmış araç, çizgilik ve liste, çizelge anlamlarına gelmektedir. ', '1', '2024-02-25 16:51:50'),
(117, 'kalemkutusu.png', 'Kalem Kutusu', 150, 50, 'Kalem kutusu, kalemler, silgiler, açacaklar gibi kırtasiye malzemelerini saklamak için tasarlanmış taşınabilir kapalı kutucuklardır. Genellikle sert plastik, metal veya kumaş malzemelerden üretilirler.', '1', '2024-02-25 16:52:29'),
(118, 'ofispanosu.png', 'Ofis Panosu', 400, 20, 'Pano, kısa süreli veri depolama, kesme, kopyalama ve yapıştırma işlemleri tarafından kullanılan, işletim sistemi tarafından sağlanan belgeler veya uygulamalar arasında veri aktarımı için kullanılan bir veri arabelleğidir. İngilizce pano ve not panosu aynı anlamı (clipboard) verir. ', '1', '2024-02-25 16:53:59'),
(119, 'zimba.png', 'Zımba', 60, 40, 'Zımba, kâğıtları bir arada tutmak amacı ile metalden bir tel ile tutturan araç. Birden fazla kâğıt zımbanın arasına yerleştirildikten sonra mekanik basınç uygulandığında mekanizmada bulunan metalik telin iki sivri ucu kâğıtları delerek geçmekte ve alt bölümde eğilerek kapanmaktadır.', '1', '2024-02-25 16:53:31'),
(120, 'bloknot.png', 'Bloknot', 35, 40, 'Bloknot defter, not alma ihtiyacına karşı tasarlanmış olan pratik bir not alma defteridir. Günlük hayatta evde ya da ofiste her zaman not almanız gerekebilir. Bu yüzden her zaman önemli bilgileri not edebileceğiniz ve aynı zamanda yanınızda taşıyabileceğiniz bloknot defterleri tercih edebilirsiniz.', '1', '2024-02-25 19:06:09'),
(121, 'yapistirici.png', 'Yapıştırıcı', 70, 120, 'Tutkal ağaç, mobilya, tekstil, kâğıt ambalaj, plastik, kırtasiye ve dekorasyon işlerinde kullanılan yapıştırıcı maddedir. Çeşitli gereçlerin birbirine yapıştırılmasında kullanılan maddeye tutkal, yapıştırma işlemine tutkallama denir.', '1', '2024-02-26 09:18:36'),
(122, 'atac.png', 'Ataç', 20, 500, 'Ataş ya da tutturgaç, 1900 yılında Norveçli Johann Vaaler tarafından icat edilmiştir. Kağıtları sıkıca tutabilmek için, iç içe geçmiş iki halka oluşturan metal bir telden ibaret olan tasarım bugüne kadar hemen hemen hiç değişmemiştir. ', '1', '2024-02-26 09:22:00');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urunler_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urunler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
