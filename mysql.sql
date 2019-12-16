CREATE DATABASE 'registersite';
CREATE TABLE IF NOT EXISTS 'catalog' (
 'name' varchar(20) NOT NULL,
 'photo' longblob NOT NULL);
 
CREATE TABLE IF NOT EXISTS 'comments' (
 'id' int(11) NOT NULL AUTO_INCREMENT,
 'email' varchar(30) NOT NULL
 'comment' varchar(300) NOT NULL,
 'login' varchar(20) NOT NULL,
 'date' date NOT NULL);
 
CREATE TABLE IF NOT EXISTS 'news' (
 'id' int(11) NOT NULL AUTO_INCREMENT,
 'newsheader' varchar(100) NOT NULL,
 'newstext' varchar(500) NOT NULL,
 'photo' longblob NOT NULL,
 'date' date NOT NULL);
 
CREATE TABLE IF NOT EXISTS 'orders' (
 'id' int(11) NOT NULL AUTO_INCREMENT,
 'model' varchar(20) NOT NULL,
 'size' varchar(3) NOT NULL,
 'email' varchar(30) NOT NULL,
 'login' varchar(20) NOT NULL);

CREATE TABLE IF NOT EXISTS 'users' (
 'id' int(11) NOT NULL AUTO_INCREMENT,
 'email' varchar(30) NOT NULL,
 'login' varchar(20) NOT NULL,
 'password' varchar(20) NOT NULL,
 'admin' int(1) NOT NULL);