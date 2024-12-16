CREATE DATABASE 2396652_forum;

CREATE TABLE user (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(25) NOT NULL,
username VARCHAR(45) UNIQUE NOT NULL,
password VARCHAR(20) NOT NULL,
birthday DATE
);

CREATE TABLE forum (
id INT auto_increment PRIMARY KEY,
title VARCHAR(45) NOT NULL,
article TEXT NOT NULL,
date DATE NOT NULL,
user_id INT,
FOREIGN KEY (user_id) REFERENCES user(id)
);