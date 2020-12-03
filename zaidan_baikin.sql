-- drop database
DROP DATABASE IF EXISTS'baikinpesepeda';

CREATE DATABASE `baikinpesepeda`;

Use 'baikinpesepeda';


DROP TABLE if exists 'admin';

CREATE TABLE 'admin'(
	id_admin int (99) NOT NULL PRIMARY KEY AUTO_INCREMENT 
	username varchar (90) NOT NULL,
	password varchar (90) NOT NULL,
	email varchar (90) NOT NULL,
	) ENGINE=InnoDB DEFAULT CHARSET=utf 8mb4_general_ci;


DROP TABLE if exists 'user';

CREATE TABLE 'user'(
    id_user int (99) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
	username varchar (90) NOT NULL,
	password varchar (90) NOT NULL,
	email varchar (90) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf 8mb4_general_ci;

DROP TABLE if exists 'poin';

CREATE TABLE 'poin'(
  id_user  int (99) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  poin tinyint (10) NOT NULL,
FOREIGN KEY (id_user) references user (id_user) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf 8mb4_general_ci;
