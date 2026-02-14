CREATE DATABASE librarydb;
USE librarydb;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100),
  password VARCHAR(100)
);

CREATE TABLE books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(150),
  author VARCHAR(150),
  status VARCHAR(20) DEFAULT 'Available'
);
