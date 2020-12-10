DROP DATABASE IF EXISTS baikinpesepeda;

CREATE DATABASE baikinpesepeda;

USE baikinpesepeda;

DROP TABLE IF EXISTS admin;

CREATE TABLE admin(
	id_admin int(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	email char(100) NOT NULL,
	username char(100) NOT NULL,
	pasword char(10) NOT NULL,
	)ENGINE=InnoDB DEFAULT CHARSET =utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS user;

CREATE TABLE user(
	id_user int(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	email char(100) NOT NULL,
	username char(100) NOT NULL,
	password char(10) NOT NULL,
	)ENGINE=InnoDB DEFAULT CHARSET =utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS poin;

CREATE TABLE poin(
	Poin tinyint(5)NOT NULL PRIMARY KEY,
	id_user int(8)NOT NULL AUTO_INCREMENT
	FOREIGN KEY ('id_user') REFERENCES 'user' ('id_user') ON DELETE CASCADE
	)ENGINE=InnoDB DEFAULT CHARSET =utf8mb4 COLLATE=utf8mb4_general_ci;
