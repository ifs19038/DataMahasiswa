CREATE DATABASE db_akademik;

USE db_akademik;

CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50),
    alamat VARCHAR(100),
    umur INT
);