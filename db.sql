-- Membuat database
CREATE DATABASE mvc_crud;

-- Menggunakan database yang baru saja dibuat
USE mvc_crud;

-- Membuat tabel users
CREATE TABLE users
(
    id         INT AUTO_INCREMENT PRIMARY KEY,
    name       VARCHAR(100) NOT NULL,
    email      VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
