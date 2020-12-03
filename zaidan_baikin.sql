-- drop database
DROP DATABASE IF EXISTS baikinpesepeda;

CREATE DATABASE baikinpesepeda;

USE baikinpesepeda;


DROP TABLE IF EXISTS admin;

CREATE TABLE admin(
	id_admin int (99) NOT NULL PRIMARY KEY AUTO_INCREMENT 
	username varchar (90) NOT NULL,
	password varchar (90) NOT NULL,
	email varchar (90) NOT NULL,
	) ENGINE=InnoDB DEFAULT CHARSET =utf8mb4 COLLATE= utf8mb4_general_ci;


DROP TABLE IF EXIST user;

CREATE TABLE user(
    id_user int (99) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    username varchar (90) NOT NULL,
    password varchar (90) NOT NULL,
    email varchar (90) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET =utf8mb4 COLLATE= utf8mb4_general_ci;

DROP TABLE IF EXIST poin;

CREATE TABLE poin(
  poin tinyint(10) NOT NULL PRIMARY KEY,
  id_user int(99) NOT NULL AUTO_INCREMENT
FOREIGN KEY ('id_user') references 'user' ('id_user') ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET =utf8mb4 COLLATE= utf8mb4_general_ci;
