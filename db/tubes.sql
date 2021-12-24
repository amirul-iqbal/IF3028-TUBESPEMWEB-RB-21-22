-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 11:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapor`
--

CREATE TABLE `lapor` (
  `id_lapor` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `aspek` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapor`
--

INSERT INTO `lapor` (`id_lapor`, `username`, `judul`, `isi`, `aspek`, `lampiran`, `waktu`) VALUES
(5, 'yafifahmi', 'Renovasi Masjid Ad-Dua', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper tempus sollicitudin. Praesent vehicula lacinia quam a faucibus. Fusce diam justo, auctor sed arcu volutpat, sodales dictum eros. Quisque lobortis lorem elit, sit amet convallis dui porta sit amet. Duis at ultricies justo. In fermentum, est eget iaculis aliquam, arcu risus interdum neque, id porta neque justo vel arcu. In posuere dui a accumsan venenatis.\r\n\r\nDuis bibendum diam et imperdiet euismod. Proin nisl elit, tempus vitae mi sed, consectetur mattis libero. Nullam ultricies, nisi nec porta convallis, massa nulla euismod est, ac fringilla enim enim quis erat. Ut eget tristique velit. Mauris eu tempus arcu. Duis vulputate condimentum nisi, ac feugiat turpis consequat sed. Nulla pretium faucibus porta. Nullam vel nisl ornare, auctor ante varius, consequat libero. Integer lobortis enim et elementum pharetra. Nunc nisi dolor, porttitor sit amet dignissim et, malesuada quis metus. Etiam pretium, tellus vitae fringilla maximus, justo justo condimentum urna, id congue mi augue a arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis varius pharetra. Mauris scelerisque tempor hendrerit. Aenean imperdiet tristique lectus id imperdiet.\r\n\r\nDuis efficitur placerat turpis. Mauris quis magna finibus, dignissim sem sed, sodales lectus. Suspendisse venenatis ut nibh in convallis. Quisque id odio velit. Duis sagittis id diam cursus condimentum. Aliquam erat volutpat. Proin ac urna congue, egestas lectus in, volutpat justo. Quisque euismod feugiat velit, ut maximus tortor hendrerit vitae. Nunc faucibus enim vel volutpat porttitor. Suspendisse potenti. Praesent at mattis lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean tempor, magna nec fermentum aliquet, massa nulla sodales orci, vel porta mauris risus in velit. Suspendisse condimentum et turpis a ornare. Aenean malesuada nunc ac mauris sagittis, ac placerat elit tempor. Proin ultricies ante vitae laoreet dictum.\r\n\r\nDonec facilisis tempus est at dictum. Sed hendrerit purus vel ligula porttitor, et semper purus viverra. Vivamus tellus dui, pretium id dapibus ac, facilisis a lacus. Suspendisse sodales sit amet massa et iaculis. Praesent pellentesque nisi at sodales rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi imperdiet vehicula diam, id vestibulum diam euismod ut. Aliquam et pellentesque arcu, tempor malesuada mauris. Praesent diam velit, luctus venenatis venenatis id, gravida eget odio. Nam scelerisque nulla quam. Ut faucibus lectus a consectetur consequat. Quisque accumsan tempor turpis eget sollicitudin. Donec commodo fermentum pretium. Nulla facilisi. Morbi lobortis faucibus mi id vehicula.', 'Infrastruktur', '1640332350.jpg', '24 December 2021 02:52:30 PM'),
(6, 'yafifahmi', 'Wow I judge by your damn', 'Duis bibendum diam et imperdiet euismod. Proin nisl elit, tempus vitae mi sed, consectetur mattis libero. Nullam ultricies, nisi nec porta convallis, massa nulla euismod est, ac fringilla enim enim quis erat. Ut eget tristique velit. Mauris eu tempus arcu. Duis vulputate condimentum nisi, ac feugiat turpis consequat sed. Nulla pretium faucibus porta. Nullam vel nisl ornare, auctor ante varius, consequat libero. Integer lobortis enim et elementum pharetra. Nunc nisi dolor, porttitor sit amet dignissim et, malesuada quis metus. Etiam pretium, tellus vitae fringilla maximus, justo justo condimentum urna, id congue mi augue a arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis varius pharetra. Mauris scelerisque tempor hendrerit. Aenean imperdiet tristique lectus id imperdiet.\r\n\r\nDuis efficitur placerat turpis. Mauris quis magna finibus, dignissim sem sed, sodales lectus. Suspendisse venenatis ut nibh in convallis. Quisque id odio velit. Duis sagittis id diam cursus condimentum. Aliquam erat volutpat. Proin ac urna congue, egestas lectus in, volutpat justo. Quisque euismod feugiat velit, ut maximus tortor hendrerit vitae. Nunc faucibus enim vel volutpat porttitor. Suspendisse potenti. Praesent at mattis lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean tempor, magna nec fermentum aliquet, massa nulla sodales orci, vel porta mauris risus in velit. Suspendisse condimentum et turpis a ornare. Aenean malesuada nunc ac mauris sagittis, ac placerat elit tempor. Proin ultricies ante vitae laoreet dictum.\r\n\r\nDonec facilisis tempus est at dictum. Sed hendrerit purus vel ligula porttitor, et semper purus viverra. Vivamus tellus dui, pretium id dapibus ac, facilisis a lacus. Suspendisse sodales sit amet massa et iaculis. Praesent pellentesque nisi at sodales rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi imperdiet vehicula diam, id vestibulum diam euismod ut. Aliquam et pellentesque arcu, tempor malesuada mauris. Praesent diam velit, luctus venenatis venenatis id, gravida eget odio. Nam scelerisque nulla quam. Ut faucibus lectus a consectetur conse', 'Infrastruktur', '1640338557.png', '24 December 2021 04:35:56 PM'),
(7, 'yafifahmi', 'Anjayaaa', 'Duis bibendum diam et imperdiet euismod. Proin nisl elit, tempus vitae mi sed, consectetur mattis libero. Nullam ultricies, nisi nec porta convallis, massa nulla euismod est, ac fringilla enim enim quis erat. Ut eget tristique velit. Mauris eu tempus arcu. Duis vulputate condimentum nisi, ac feugiat turpis consequat sed. Nulla pretium faucibus porta. Nullam vel nisl ornare, auctor ante varius, consequat libero. Integer lobortis enim et elementum pharetra. Nunc nisi dolor, porttitor sit amet dignissim et, malesuada quis metus. Etiam pretium, tellus vitae fringilla maximus, justo justo condimentum urna, id congue mi augue a arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis varius pharetra. Mauris scelerisque tempor hendrerit. Aenean imperdiet tristique lectus id imperdiet.\r\n\r\nDuis efficitur placerat turpis. Mauris quis magna finibus, dignissim sem sed, sodales lectus. Suspendisse venenatis ut nibh in convallis. Quisque id odio velit. Duis sagittis id diam cursus condimentum. Aliquam erat volutpat. Proin ac urna congue, egestas lectus in, volutpat justo. Quisque euismod feugiat velit, ut maximus tortor hendrerit vitae. Nunc faucibus enim vel volutpat porttitor. Suspendisse potenti. Praesent at mattis lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean tempor, magna nec fermentum aliquet, massa nulla sodales orci, vel porta mauris risus in velit. Suspendisse condimentum et turpis a ornare. Aenean malesuada nunc ac mauris sagittis, ac placerat elit tempor. Proin ultricies ante vitae laoreet dictum.\r\n\r\nDonec facilisis tempus est at dictum. Sed hendrerit purus vel ligula porttitor, et semper purus viverra. Vivamus tellus dui, pretium id dapibus ac, facilisis a lacus. Suspendisse sodales sit amet massa et iaculis. Praesent pellentesque nisi at sodales rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi imperdiet vehicula diam, id vestibulum diam euismod ut. Aliquam et pellentesque arcu, tempor malesuada mauris. Praesent diam velit, luctus venenatis venenatis id, gravida eget odio. Nam scelerisque nulla quam. Ut faucibus lectus a consectetur conse', 'Pengajaran', '1640337105.pptx', '24 December 2021 04:11:45 PM'),
(8, 'yafifahmi', 'abc', 'Duis bibendum diam et imperdiet euismod. Proin nisl elit, tempus vitae mi sed, consectetur mattis libero. Nullam ultricies, nisi nec porta convallis, massa nulla euismod est, ac fringilla enim enim quis erat. Ut eget tristique velit. Mauris eu tempus arcu. Duis vulputate condimentum nisi, ac feugiat turpis consequat sed. Nulla pretium faucibus porta. Nullam vel nisl ornare, auctor ante varius, consequat libero. Integer lobortis enim et elementum pharetra. Nunc nisi dolor, porttitor sit amet dignissim et, malesuada quis metus. Etiam pretium, tellus vitae fringilla maximus, justo justo condimentum urna, id congue mi augue a arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis varius pharetra. Mauris scelerisque tempor hendrerit. Aenean imperdiet tristique lectus id imperdiet.\r\n\r\nDuis efficitur placerat turpis. Mauris quis magna finibus, dignissim sem sed, sodales lectus. Suspendisse venenatis ut nibh in convallis. Quisque id odio velit. Duis sagittis id diam cursus condimentum. Aliquam erat volutpat. Proin ac urna congue, egestas lectus in, volutpat justo. Quisque euismod feugiat velit, ut maximus tortor hendrerit vitae. Nunc faucibus enim vel volutpat porttitor. Suspendisse potenti. Praesent at mattis lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean tempor, magna nec fermentum aliquet, massa nulla sodales orci, vel porta mauris risus in velit. Suspendisse condimentum et turpis a ornare. Aenean malesuada nunc ac mauris sagittis, ac placerat elit tempor. Proin ultricies ante vitae laoreet dictum.\r\n\r\nDonec facilisis tempus est at dictum. Sed hendrerit purus vel ligula porttitor, et semper purus viverra. Vivamus tellus dui, pretium id dapibus ac, facilisis a lacus. Suspendisse sodales sit amet massa et iaculis. Praesent pellentesque nisi at sodales rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi imperdiet vehicula diam, id vestibulum diam euismod ut. Aliquam et pellentesque arcu, tempor malesuada mauris. Praesent diam velit, luctus venenatis venenatis id, gravida eget odio. Nam scelerisque nulla quam. Ut faucibus lectus a consectetur conse', 'Dosen', '1640338595.jpg', '24 December 2021 04:36:35 PM'),
(9, 'rizalbud', 'ANJAAAAY', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper tempus sollicitudin. Praesent vehicula lacinia quam a faucibus. Fusce diam justo, auctor sed arcu volutpat, sodales dictum eros. Quisque lobortis lorem elit, sit amet convallis dui porta sit amet. Duis at ultricies justo. In fermentum, est eget iaculis aliquam, arcu risus interdum neque, id porta neque justo vel arcu. In posuere dui a accumsan venenatis.\r\n\r\nDuis bibendum diam et imperdiet euismod. Proin nisl elit, tempus vitae mi sed, consectetur mattis libero. Nullam ultricies, nisi nec porta convallis, massa nulla euismod est, ac fringilla enim enim quis erat. Ut eget tristique velit. Mauris eu tempus arcu. Duis vulputate condimentum nisi, ac feugiat turpis consequat sed. Nulla pretium faucibus porta. Nullam vel nisl ornare, auctor ante varius, consequat libero. Integer lobortis enim et elementum pharetra. Nunc nisi dolor, porttitor sit amet dignissim et, malesuada quis metus. Etiam pretium, tellus vitae fringilla maximus, justo justo condimentum urna, id congue mi augue a arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis varius pharetra. Mauris scelerisque tempor hendrerit. Aenean imperdiet tristique lectus id imperdiet.\r\n\r\nDuis efficitur placerat turpis. Mauris quis magna finibus, dignissim sem sed, sodales lectus. Suspendisse venenatis ut nibh in convallis. Quisque id odio velit. Duis sagittis id diam cursus condimentum. Aliquam erat volutpat. Proin ac urna congue, egestas lectus in, volutpat justo. Quisque euismod feugiat velit, ut maximus tortor hendrerit vitae. Nunc faucibus enim vel volutpat porttitor. Suspendisse potenti. Praesent at mattis lorem. Pellentesque ', 'Pengajaran', '1640339812.png', '24 December 2021 04:56:51 PM'),
(10, 'rizalbud', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper tempus sollicitudin. Praesent vehicula lacinia quam a faucibus. Fusce diam justo, auctor sed arcu volutpat, sodales dictum eros. Quisque lobortis lorem elit, sit amet convallis dui porta sit amet. Duis at ultricies justo. In fermentum, est eget iaculis aliquam, arcu risus interdum neque, id porta neque justo vel arcu. In posuere dui a accumsan venenatis.\r\n\r\nDuis bibendum diam et imperdiet euismod. Proin nisl elit, tempus vitae mi sed, consectetur mattis libero. Nullam ultricies, nisi nec porta convallis, massa nulla euismod est, ac fringilla enim enim quis erat. Ut eget tristique velit. Mauris eu tempus arcu. Duis vulputate condimentum nisi, ac feugiat turpis consequat sed. Nulla pretium faucibus porta. Nullam vel nisl ornare, auctor ante varius, consequat libero. Integer lobortis enim et elementum pharetra. Nunc nisi dolor, porttitor sit amet dignissim et, malesuada quis metus. Etiam pretium, tellus vitae fringilla maximus, justo justo condimentum urna, id congue mi augue a arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis varius pharetra. Mauris scelerisque tempor hendrerit. Aenean imperdiet tristique lectus id imperdiet.\r\n\r\nDuis efficitur placerat turpis. Mauris quis magna finibus, dignissim sem sed, sodales lectus. Suspendisse venenatis ut nibh in convallis. Quisque id odio velit. Duis sagittis id diam cursus condimentum. Aliquam erat volutpat. Proin ac urna congue, egestas lectus in, volutpat justo. Quisque euismod feugiat velit, ut maximus tortor hendrerit vitae. Nunc faucibus enim vel volutpat porttitor. Suspendisse potenti. Praesent at mattis lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean tempor, magna nec fermentum aliquet, massa nulla sodales orci, vel porta mauris risus in velit. Suspendisse condimentum et turpis a ornare. Aenean malesuada nunc ac mauris sagittis, ac placerat elit tempor. Proin ultricies ante vitae laoreet dictum.\r\n\r\nDonec facilisis tempus est at dictum. Sed hendrerit purus vel ligula porttitor, et semper purus viverra. Vivamus tellus dui, pretium id dapibus ac, facilisis a lacus. Suspe', 'Mahasiswa', '1640340276.jpg', '24 December 2021 05:04:35 PM'),
(11, 'rizalbud', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper tempus sollicitudin. Praesent vehicula lacinia quam a faucibus. Fusce diam justo, auctor sed arcu volutpat, sodales dictum eros. Quisque lobortis lorem elit, sit amet convallis dui porta sit amet. Duis at ultricies justo. In fermentum, est eget iaculis aliquam, arcu risus interdum neque, id porta neque justo vel arcu. In posuere dui a accumsan venenatis.\r\n\r\nDuis bibendum diam et imperdiet euismod. Proin nisl elit, tempus vitae mi sed, consectetur mattis libero. Nullam ultricies, nisi nec porta convallis, massa nulla euismod est, ac fringilla enim enim quis erat. Ut eget tristique velit. Mauris eu tempus arcu. Duis vulputate condimentum nisi, ac feugiat turpis consequat sed. Nulla pretium faucibus porta. Nullam vel nisl ornare, auctor ante varius, consequat libero. Integer lobortis enim et elementum pharetra. Nunc nisi dolor, porttitor sit amet dignissim et, malesuada quis metus. Etiam pretium, tellus vitae fringilla maximus, justo justo condimentum urna, id congue mi augue a arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis varius pharetra. Mauris scelerisque tempor hendrerit. Aenean imperdiet tristique lectus id imperdiet.\r\n\r\nDuis efficitur placerat turpis. Mauris quis magna finibus, dignissim sem sed, sodales lectus. Suspendisse venenatis ut nibh in convallis. Quisque id odio velit. Duis sagittis id diam cursus condimentum. Aliquam erat volutpat. Proin ac urna congue, egestas lectus in, volutpat justo. Quisque euismod feugiat velit, ut maximus tortor hendrerit vitae. Nunc faucibus enim vel volutpat porttitor. Suspendisse potenti. Praesent at mattis lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean tempor, magna nec fermentum aliquet, massa nulla sodales orci, vel porta mauris risus in velit. Suspendisse condimentum et turpis a ornare. Aenean malesuada nunc ac mauris sagittis, ac placerat elit tempor. Proin ultricies ante vitae laoreet dictum.\r\n\r\nDonec facilisis tempus est at dictum. Sed hendrerit purus vel ligula porttitor, et semper purus viverra. Vivamus tellus dui, pretium id dapibus ac, facilisis a lacus. Suspe', 'Staff', '1640340302.png', '24 December 2021 05:05:02 PM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'yafifahmi', 'yafi1234'),
(39, 'rizalbud', 'rizalbud123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`id_lapor`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id_lapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
