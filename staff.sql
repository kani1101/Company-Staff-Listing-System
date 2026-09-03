CREATE DATABASE staff_listing;
USE staff_listing;
CREATE TABLE staff (     
id INT AUTO_INCREMENT PRIMARY KEY,     
name VARCHAR(100),     
position VARCHAR(100),     
department VARCHAR(100),     
email VARCHAR(100),     
phone VARCHAR(20),     
salary VARCHAR(20),     
address TEXT,     
joining_date DATE,     
skills VARCHAR(255),     
photo VARCHAR(255) 
); 
