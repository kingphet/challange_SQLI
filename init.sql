CREATE DATABASE IF NOT EXISTS ctf_db;
USE ctf_db;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    flag VARCHAR(100)
);

INSERT INTO users (username, password, flag) VALUES 
('admin', 'SuperSecretPass12356789&12#$%^&#@', 'flag{SQL_1nj3ct10n_1s_E4sy}'),
('test', 'test', 'not_the_flag');