-- Drop database
DROP DATABASE IF EXISTS `baikinpesepeda`;

-- Create `baikinpesepeda` database
CREATE DATABASE `baikinpesepeda`;

-- Use `baikinpesepeda` database.
USE  `baikinpesepeda`;

-- Table structure for table `admin`
-- Drop `admin` table if exists
DROP TABLE IF EXISTS `admin`;
-- Create `admin` table. 
CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL PRIMARY KEY AUTO_INCREMENT COLLATE utf8mb4_general_ci,
  `username` varchar(225) NOT NULL COLLATE utf8mb4_general_ci,
  `password` varchar(225) NOT NULL COLLATE utf8mb4_general_ci,
  `email`    varchar(100) NOT NULL COLLATE utf8mb4_general_ci
  INDEX (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;


-- Table structure for table `user`
-- Drop `user` table if exists
DROP TABLE IF EXISTS `user`;
-- Create `user` table. 
CREATE TABLE `user` (
  `id_user`  int(20) NOT NULL PRIMARY KEY AUTO_INCREMENT COLLATE utf8mb4_general_ci,
  `username` varchar(225) NOT NULL COLLATE utf8mb4_general_ci,
  `password` varchar(225) NOT NULL COLLATE utf8mb4_general_ci,
  `email`    varchar(100) NOT NULL COLLATE utf8mb4_general_ci
  INDEX (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;


-- Table structure for table `poin`
-- Drop `poin` table if exists
DROP TABLE IF EXISTS `poin`;
-- Create `poin` table. 
CREATE TABLE `poin` (
  `poin`    tinyint(5) NOT NULL PRIMARY KEY COLLATE utf8mb4_general_ci,
  `id_user` int(20) NOT NULL AUTO_INCREMENT COLLATE utf8mb4_general_ci
  INDEX (`poin`)
  FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;
