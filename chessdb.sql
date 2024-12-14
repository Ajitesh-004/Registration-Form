
USE chessdb;

CREATE TABLE registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(15),
    experience VARCHAR(20),
    rating INT,
    collegeId VARCHAR(50),
    year VARCHAR(20),
    reason TEXT
);
