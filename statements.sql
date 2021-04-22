CREATE DATABASE moneyz;
USE moneyz;
CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL,
    PRIMARY KEY(id)
);
CREATE TABLE moneyz(
    id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    moneyz INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);
