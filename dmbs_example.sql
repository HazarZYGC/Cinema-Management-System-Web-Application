-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Oca 2021, 14:28:35
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
-- Veritabanı: `vurkac`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`) VALUES
(2, 'Ayberk Kilicaslan', 'sayberk98@hotmail.com', 'ac8ea83a26b8e1f0ff2a9a1351bc7ba6'),
(3, 'Arif Arif', 'arif@gmail.com', '83276aa46d14fa65564d3a49ade6ea49'),
(4, 'Hazar Zygc', 'hazar@gmail.com', 'e97fd3f126bac972d9ea5d8117f137a0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `duration` int(11) NOT NULL,
  `release_date` date NOT NULL,
  `rate_number` float NOT NULL,
  `rate_count` int(11) NOT NULL,
  `director` varchar(100) NOT NULL,
  `star_1` varchar(100) NOT NULL,
  `star_2` varchar(100) NOT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `movie`
--

INSERT INTO `movie` (`id`, `name`, `category`, `duration`, `release_date`, `rate_number`, `rate_count`, `director`, `star_1`, `star_2`, `image`) VALUES
(3, 'Avengers', 'Fantastic', 120, '2021-03-22', 3.66667, 3, 'Joe Russo', 'Chris Evans', 'Robert Downey Jr', 0x68747470733a2f2f6d2e6d656469612d616d617a6f6e2e636f6d2f696d616765732f4d2f4d5635424e4459784e6a51794d6a41744e5464694f5330304e4759774c57466d4e5441744e54686d596a55355a47493259544931586b4579586b467163476465515856794d544d784f446b324f5455402e5f56315f2e6a7067),
(14, 'Zodiac', 'Mystery', 139, '2021-11-11', 5, 1, 'Hazar Yow', 'Jake Gylanhaal', 'Ayberk Kilicaslan', 0x68747470733a2f2f7777772e66696c6d616e616c697a692e6e65742f77702d636f6e74656e742f75706c6f6164732f7a6f646961632d6d6f7669652d322d7363616c65642e6a7067),
(15, 'Winter Soldier', 'Action', 123, '2021-03-12', 4, 1, 'Joe Russo', 'Chris Evans', 'Scarlett Johansson', 0x68747470733a2f2f696d616765732d6e612e73736c2d696d616765732d616d617a6f6e2e636f6d2f696d616765732f492f373146584e6a304552354c2e5f41435f534c313530305f2e6a7067),
(16, 'The Karate Kid', 'Action', 128, '2021-06-22', 0, 0, 'John Avildsen', 'Ralph Maccio', 'William Zabka', 0x68747470733a2f2f726573697a696e672e666c6978737465722e636f6d2f7854304d55514a4d4766566c53484b4942693075646376704553383d2f323036783330352f76312e644473334e5459354d444537616a73784f4459344d7a73784d6a41774f7a45784e4449374d5459774d41),
(17, 'Skyfall', 'Action', 146, '2021-03-21', 0, 0, 'Sam Mendes', 'Daniel Craig', 'Javier Bardem', 0x68747470733a2f2f6d2e6d656469612d616d617a6f6e2e636f6d2f696d616765732f4d2f4d5635424d575a694e6a45324f5749744d546b774e7930305a57517a4c5749304e5467744d5745304e6a4e6959546c6a4e325131586b4579586b467163476465515856794e7a41774d6a59784d7a41402e5f56315f2e6a7067);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `rate_value` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `rate`
--

INSERT INTO `rate` (`id`, `rate_value`, `movie_id`, `customer_id`) VALUES
(3, 5, 3, 2),
(4, 3, 3, 3),
(5, 5, 14, 3),
(6, 3, 3, 4),
(7, 4, 15, 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `room`
--

INSERT INTO `room` (`id`, `room_no`, `capacity`, `theater_id`) VALUES
(1, 1, 24, 1),
(2, 2, 24, 1),
(3, 1, 24, 2),
(4, 2, 24, 2),
(5, 1, 24, 3),
(6, 2, 24, 3),
(7, 1, 24, 4),
(8, 2, 24, 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seat`
--

CREATE TABLE `seat` (
  `id` int(11) NOT NULL,
  `seat_no` varchar(5) NOT NULL,
  `isFull` tinyint(4) NOT NULL,
  `room_id` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `seat`
--

INSERT INTO `seat` (`id`, `seat_no`, `isFull`, `room_id`, `theater_id`, `session_id`) VALUES
(1, 'A1', 1, 1, 1, 27),
(2, 'A2', 0, 1, 1, 27),
(3, 'A3', 1, 1, 1, 27),
(4, 'A4', 1, 1, 1, 27),
(5, 'A5', 1, 1, 1, 27),
(6, 'B1', 1, 1, 1, 27),
(7, 'B2', 1, 1, 1, 27),
(8, 'B3', 1, 1, 1, 27),
(9, 'B4', 1, 1, 1, 27),
(10, 'B5', 1, 1, 1, 27),
(20, 'A1', 0, 7, 4, 63),
(21, 'A2', 0, 7, 4, 63),
(22, 'A3', 0, 7, 4, 63),
(23, 'A4', 0, 7, 4, 63),
(24, 'A5', 0, 7, 4, 63),
(25, 'B1', 0, 7, 4, 63),
(26, 'B2', 0, 7, 4, 63),
(27, 'B3', 0, 7, 4, 63),
(28, 'B4', 0, 7, 4, 63),
(29, 'B5', 0, 7, 4, 63);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `session_time` varchar(6) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL,
  `session_date` varchar(10) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sessions`
--

INSERT INTO `sessions` (`id`, `session_time`, `movie_id`, `theater_id`, `session_date`, `room_id`) VALUES
(27, '10.00', 3, 1, '20.02.2021', 1),
(28, '13.00', 3, 1, '20.02.2021', 1),
(29, '17.00', 14, 1, '20.02.2021', 1),
(30, '21.00', 14, 1, '20.02.2021', 1),
(31, '10.00', 15, 1, '20.02.2021', 2),
(32, '13.00', 15, 1, '20.02.2021', 2),
(33, '17.00', 16, 1, '20.02.2021', 2),
(34, '21.00', 16, 1, '20.02.2021', 2),
(35, '10.00', 17, 2, '20.02.2021', 3),
(36, '13.00', 17, 2, '20.02.2021', 3),
(37, '17.00', 17, 2, '20.02.2021', 3),
(38, '21.00', 17, 2, '20.02.2021', 3),
(39, '10.00', 3, 2, '20.02.2021', 4),
(40, '13.00', 3, 2, '20.02.2021', 4),
(41, '17.00', 3, 2, '20.02.2021', 4),
(42, '21.00', 3, 2, '20.02.2021', 4),
(43, '10.00', 15, 3, '20.02.2021', 5),
(44, '13.00', 15, 3, '20.02.2021', 5),
(45, '17.00', 16, 3, '20.02.2021', 5),
(46, '21.00', 16, 3, '20.02.2021', 5),
(47, '10.00', 14, 3, '20.02.2021', 6),
(48, '13.00', 14, 3, '20.02.2021', 6),
(49, '17.00', 14, 3, '20.02.2021', 6),
(50, '21.00', 14, 3, '20.02.2021', 6),
(51, '10.00', 17, 4, '20.02.2021', 7),
(52, '13.00', 17, 4, '20.02.2021', 7),
(53, '17.00', 17, 4, '20.02.2021', 7),
(54, '21.00', 17, 4, '20.02.2021', 7),
(55, '10.00', 16, 4, '20.02.2021', 8),
(56, '13.00', 16, 4, '20.02.2021', 8),
(57, '17.00', 3, 4, '20.02.2021', 8),
(58, '21.00', 3, 4, '20.02.2021', 8),
(63, '22.23', 16, 4, '22.05.2021', 7);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `theater`
--

CREATE TABLE `theater` (
  `id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `theater`
--

INSERT INTO `theater` (`id`, `location`) VALUES
(1, 'Agora Sinemaları'),
(2, 'Stockholm Cinemaximum'),
(3, 'Copenhagen Movies'),
(4, 'Optimum Gold Class');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `ticket`
--

INSERT INTO `ticket` (`id`, `movie_id`, `theater_id`, `customer_id`, `room_id`, `seat_id`, `session_id`) VALUES
(1, 3, 1, 2, 1, 10, 27),
(2, 3, 1, 3, 1, 2, 27),
(3, 3, 1, 3, 1, 1, 27),
(4, 3, 1, 4, 1, 6, 27),
(5, 3, 1, 4, 1, 6, 27),
(6, 3, 1, 4, 1, 1, 27);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Tablo için indeksler `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Tablo için indeksler `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Tablo için indeksler `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theater_id` (`theater_id`);

--
-- Tablo için indeksler `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `theater_id` (`theater_id`),
  ADD KEY `session_id` (`session_id`);

--
-- Tablo için indeksler `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `theater_id` (`theater_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Tablo için indeksler `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_id` (`session_id`),
  ADD KEY `seat_id` (`seat_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `theater_id` (`theater_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Tablo için AUTO_INCREMENT değeri `theater`
--
ALTER TABLE `theater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`theater_id`) REFERENCES `theater` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `seat_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seat_ibfk_2` FOREIGN KEY (`theater_id`) REFERENCES `theater` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seat_ibfk_3` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
 
--
-- Tablo kısıtlamaları `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sessions_ibfk_2` FOREIGN KEY (`theater_id`) REFERENCES `theater` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sessions_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`seat_id`) REFERENCES `seat` (`id`),
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`),
  ADD CONSTRAINT `ticket_ibfk_4` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `ticket_ibfk_5` FOREIGN KEY (`theater_id`) REFERENCES `theater` (`id`),
  ADD CONSTRAINT `ticket_ibfk_6` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
