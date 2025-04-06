DROP TABLE crowd_meter;
DROP TABLE feedback;
DROP TABLE schedule;
DROP TABLE FAQ;
DROP TABLE administration;
DROP TABLE gym_user;

CREATE TABLE gym_user (
    user_id INT PRIMARY KEY,
    fname VARCHAR(15) NOT NULL,
    lname VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL,
    address VARCHAR(400) NOT NULL,
    phone_num VARCHAR(12) NOT NULL,
    DOB DATE NOT NULL
) ENGINE=InnoDB;

CREATE TABLE crowd_meter (
    current INT PRIMARY KEY,
    user_id INT NOT NULL,
    time_entery INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES gym_user(user_id)
) ENGINE=InnoDB;

CREATE TABLE feedback (
    feedback_id INT PRIMARY KEY,
    feedback_text VARCHAR(255) NOT NULL,
    feedback_date DATE NOT NULL
) ENGINE=InnoDB;

CREATE TABLE schedule (
    schedule_id INT PRIMARY KEY,
    duration INT NOT NULL,
    announcement_text TEXT NOT NULL
) ENGINE=InnoDB;

CREATE TABLE FAQ (
    question VARCHAR(255) PRIMARY KEY,
    answer VARCHAR(255) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE administration (
    username VARCHAR(30) PRIMARY KEY,
    fname VARCHAR(15) NOT NULL,
    lname VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL
) ENGINE=InnoDB;

INSERT INTO gym_user (user_id, fname, lname, email, address, phone_num, DOB) VALUES
(87959403, 'Travis', 'James', 'tjames@gmail.com', '203 Kimberly Rd, Winchester VA', '540-533-6738', '2003-03-01');

INSERT INTO crowd_meter (current, user_id, time_entery) VALUES
(1, 87959403, 1300);

INSERT INTO administration (username, fname, lname, email, password) VALUES
('coach.spring', 'Coach', 'Spring', 'coach.spring@wau.edu', 'securepass456');

INSERT INTO FAQ (question, answer) VALUES
('Is the Gym only for student athletes?', 'No the gym is for everyone');

INSERT INTO schedule (schedule_id, duration, announcement_text) VALUES
(1, 1, '*Special Announcement: Due to the unforeseen snowstorm the gym along with the school will be closed.');

INSERT INTO feedback (feedback_id, feedback_text, feedback_date) VALUES
(1, 'Great practice today!', '2025-03-20');
