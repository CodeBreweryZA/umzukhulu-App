CREATE DATABASE umzukhulu CHARACTER SET utf8mb4;
USE umzukhulu;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(100),
  last_name VARCHAR(100),
  email VARCHAR(150) UNIQUE,
  password_hash VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE memorials (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  full_name VARCHAR(200),
  cemetery_desc VARCHAR(255),
  record_date DATE,
  tribute TEXT,
  latitude DECIMAL(10,6),
  longitude DECIMAL(10,6),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE contact_messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150),
  email VARCHAR(150),
  message TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
