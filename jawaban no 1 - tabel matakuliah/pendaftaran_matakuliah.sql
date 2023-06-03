create database siakad;

use siakad;

CREATE TABLE `matakuliah`(
    `ID` INT AUTO_INCREMENT,
    `Nama` VARCHAR(255),
    `Kode Matakuliah` CHAR(5),
    `Deskripsi` TEXT,
    PRIMARY KEY (`ID`)
);

CREATE TABLE `dosen`(
    `ID` INT AUTO_INCREMENT,
    `Nama` VARCHAR(255),
    `NIDN` CHAR(8),
    `Jenjang Pendidikan` ENUM("S2","S3"),
    PRIMARY KEY (`ID`)
);

CREATE TABLE `mahasiswa`(
    `ID` INT AUTO_INCREMENT,
    `Nama` VARCHAR(255),
    `NIM` CHAR(10),
    `Program Studi` VARCHAR(255),
    PRIMARY KEY (`ID`)
);