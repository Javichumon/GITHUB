/* Este código es lo primero en ejecutarse*/
CREATE SCHEMA chess_game;

USE chess_game;

CREATE TABLE T_Players(
ID int primary key auto_increment,
name varchar(30) UNIQUE,
email varchar(50) UNIQUE,
password varchar(60) not null,
perfil varchar(20) not null default("Normal")
);

CREATE TABLE T_Matches(
ID int primary key auto_increment,
title varchar(50) not null,
white int not null,
black int not null,
startDate datetime not null default (now()),
endDate datetime,
winner varchar(10),
state varchar(20) not null default("En curso"),
    FOREIGN KEY (white) REFERENCES T_Players(ID),
    FOREIGN KEY (black) REFERENCES T_Players(ID)
);

CREATE TABLE T_Board_Status(
ID int auto_increment, 
IDGame int,
board varchar(200), 
primary key(ID,IDGame),
FOREIGN KEY (IDGame) REFERENCES T_Matches(ID)
);
