-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jan 2021 pada 01.43
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_restoran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'Meat Lover', 'Irisan sosis sapi, daging sapi cincang, burger sapi, sosis ayam.', 49500, 'meat-lover.jpg'),
(2, 'Super Supreme', 'Daging ayam dan sapi asap, daging sapi cincang, burger sapi, jamur, paprika merah dan paprika hijau.', 49500, 'supreme.jpg'),
(4, 'American Favourite', 'Pepperoni sapi, daging sapi cincang, jamur.', 49500, 'american-favourite.jpg'),
(5, 'Meatballs Beef Mushroom', 'Bola daging sapi dengan saus daging sapi cincang dan jamur.', 40000, 'meatballs-beef-mushroom.jpg'),
(6, 'Black Pepper Chicken', 'Ayam dengan saus lada hitam.', 40000, 'black-pepper-chicken.jpg'),
(7, 'Oriental Chicken', 'Daging ayam berpadu dengan saus oriental.', 40000, 'oriental-chicken.jpg'),
(8, 'Chocolate Milkshake', '', 24000, 'chocolate-milkshake.jpg'),
(9, 'Strawberry Milkshake', '', 24000, 'strawberry-milkshake.jpg'),
(37, 'Nasgor', 'Nasgor', 40000, 'hero.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderdetail`
--

CREATE TABLE `orderdetail` (
  `productid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orderdetail`
--

INSERT INTO `orderdetail` (`productid`, `orderid`, `price`, `quantity`) VALUES
(2, 2, 49500, 1),
(2, 2, 49500, 1),
(8, 2, 24000, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `name`, `date`, `status`, `id_user`) VALUES
(2, 'Order', '2021-01-01 00:38:15', 0, 20),
(3, 'Order', '2021-01-01 00:40:21', 0, 20),
(4, 'Order', '2021-01-01 00:40:43', 0, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `phone`, `password`, `level`) VALUES
(12, 'Administrator', 'admin@gmail.com', '', '', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(19, 'user', 'user@gmail.com', 'Pasuruan', '1252', '202cb962ac59075b964b07152d234b70', 'user'),
(20, 'unto', 'unto@gmail.com', 'unto', '089777888', '4e79e62e6021c4a75e83d1deb9ad3ce7', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
