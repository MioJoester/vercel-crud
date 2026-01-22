CREATE DATABASE IF NOT EXISTS vercel_app;
USE vercel_app;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(50),
  role VARCHAR(10)
);

CREATE TABLE entries (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  name VARCHAR(100),
  phone VARCHAR(20),
  email VARCHAR(100),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- USERS
INSERT INTO users (username, password, role) VALUES
('user', 'user123', 'user'),
('admin', 'admin123', 'admin');
