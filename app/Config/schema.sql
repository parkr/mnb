USE db433094351;

CREATE TABLE album_covers (
id int(11) unsigned primary key auto_increment NOT NULL,
artist varchar(255) NOT NULL,
album varchar(255) NOT NULL,
date_released DATE DEFAULT NULL,
date_added DATE NOT NULL
) CHARACTER SET = utf8;

CREATE TABLE shows (
id int(11) unsigned primary key auto_increment NOT NULL,
name varchar(255) NOT NULL,
date DATE NOT NULL
) CHARACTER SET = utf8;

CREATE TABLE track_listings (
id int(11) unsigned primary key auto_increment NOT NULL,
show_id int(11) unsigned NOT NULL,
title varchar(255) NOT NULL,
artist varchar(255) NOT NULL,
date_added DATETIME NOT NULL
) CHARACTER SET = utf8;