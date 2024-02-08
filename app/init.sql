CREATE DATABASE IF NOT EXISTS my_database;
USE my_database;
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);
INSERT INTO users (username, email)
SELECT * FROM (SELECT 'utilisateur1', 'utilisateur1@example.com') AS tmp
WHERE NOT EXISTS (
    SELECT username FROM users WHERE username = 'utilisateur1'
) LIMIT 1;

INSERT INTO users (username, email)
SELECT * FROM (SELECT 'utilisateur2', 'utilisateur2@example.com') AS tmp
WHERE NOT EXISTS (
    SELECT username FROM users WHERE username = 'utilisateur2'
) LIMIT 1;
