CREATE DATABASE pwd_akhir;
USE pwd_akhir;

CREATE TABLE roles (
    id_role INT AUTO_INCREMENT PRIMARY KEY,
    nama_role VARCHAR(50)
);

CREATE TABLE users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255),
    id_role INT
);

CREATE TABLE kategori (
    id_kategori INT AUTO_INCREMENT PRIMARY KEY,
    nama_kategori VARCHAR(100)
);

CREATE TABLE produk (
    id_produk INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100),
    harga INT,
    stok INT,
    id_kategori INT
);

INSERT INTO roles VALUES (1,'Admin'),(2,'Customer');

INSERT INTO users (nama, email, password, id_role)
VALUES (
  'Administrator',
  'admin@tokokomputer.com',
  '$2y$10$2mevkfMuj2T3Hpk07CfDLOIejrDdkEZRqn5y0mxSJlWFGuEODe2Me', < 123
  1
);

INSERT INTO kategori VALUES (1,'CPU'),(2,'GPU'),(3,'RAM'),
                            (4,'MOBO'),(5,'PSU'),(6,'STORAGE'),
                            (7,'CASE'),(8,'COOLER'),(9,'MONITOR'),(10,'PERIP');
