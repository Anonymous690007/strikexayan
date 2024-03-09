CREATE DATABASE user_details;

USE your_database_name;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

GRANT ALL PRIVILEGES ON user_details.* TO 'your_username'@'localhost' IDENTIFIED BY 'your_password';

