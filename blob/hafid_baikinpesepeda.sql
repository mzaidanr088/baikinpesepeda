<<<<<<< HEAD
drop database if exist baikinpesepeda;

create database baikinpesepeda;

use baikinpesepeda;

drop table if exist admin ;

create table admin(
    id_admin int(5) not null primary key auto_increment,
    name varchar(50) not null,
    username varchar(20) not null,
    password varchar(50) not null,
    email varchar(50) not null
);

drop table if exist user ;

create table user(
    id_user int(5) not null primary key auto_increment,
    name varchar(50) not null,
    username varchar(20) not null,
    password varchar(50) not null,
    email varchar(50) not null
);

drop table if exist leaderboard ;

create table leaderboard(
    id_user int(5) not null primary key auto_increment,
    point int(50) not null,
    foreign key ('id_user') references 'user' ('id_user')
);
=======
drop database if exist baikinpesepeda;

create database baikinpesepeda;

use baikinpesepeda;

drop table if exist admin ;

create table admin(
    id_admin int(5) not null primary key auto_increment,
    name varchar(50) not null,
    username varchar(20) not null,
    password varchar(50) not null,
    email varchar(50) not null
);

drop table if exist user ;

create table user(
    id_user int(5) not null primary key auto_increment,
    name varchar(50) not null,
    username varchar(20) not null,
    password varchar(50) not null,
    email varchar(50) not null
);

drop table if exist leaderboard ;

create table leaderboard(
    id_user int(5) not null primary key auto_increment,
    point int(50) not null,
    foreign key ('id_user') references 'user' ('id_user')
);
>>>>>>> 38c7fe91acaa47c531ac34c86b4b692f21a4cc61
