//Travis code
DROP TABLE administration;
DROP TABLE FAQ;

CREATE TABLE administration (
    username VARCHAR (30) PRIMARY KEY,
    fname VARCHAR(15) NOT NULL,
    lname VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    PRIMARY KEY (username))
    ENGINE = InnoDB;

CREATE TABLE FAQ (
    question VARCHAR PRIMARY KEY,
    answer VARCHAR NOT NULL
)
ENGINE = InnoDB;


INSERT INTO administration ( username,fname, lname, email, password) VALUES
('coach.torrico','Coach', 'Torrico', 'coach.torrico@wau.edu', 'adminpass123'),
( 'coach.spring','Coach', 'Spring', 'coach.spring@wau.edu', 'securepass456');

INSERT INTO FAQ (question, answer) VALUES ('Is the Gym only for student athletes?', 'No the gym is for everyone')








// Hurrich Code

DROP TABLE feedback;
DROP TABLE schedule;



CREATE TABLE feedback (
    feedback_id INT PRIMARY KEY,
    feedback_text VARCHAR NOT NULL,
    feedback_date date NOT NULL
);


CREATE TABLE schedule (
    schedule_id INT PRIMARY KEY,
    duration INT(50) NOT NULL,
    announcement_text TEXT  NOT NULL,
);




INSERT INTO schedule (schedule_id, duration, announcement) VALUES
( 1, 1,'*Special Announcement: Due to the unforeseen snowstorm the gym along with the school will be closed.');
  
  

INSERT INTO feedback (feedback_id, feedback_text, feedback_date) VALUES
(1, 'Great practice today!', '2025-03-20');





/// Raquel's code
DROP TABLE crowd_meter;
DROP TABLE gym_user;


CREATE TABLE gym_user(
user_id INT(8) NOT NULL ,
fname VARCHAR(15) NOT NULL ,
lname VARCHAR(15) NOT NULL ,
email VARCHAR(50) NOT NULL ,
address VARCHAR(400) NOT NULL ,
phone_num VARCHAR(12) NOT NULL ,
DOB  date NOT NULL,
PRIMARY KEY (user_id)) ENGINE = InnoDB;

CREATE TABLE crowd_meter(

current INT(3),
user_id INT(8) NOT NULL ,
FOREIGN KEY (user_id) REFERENCES gym_user(user_id) ,
time_entery VARCHAR(4),
PRIMARY KEY (current)) ENGINE = InnoDB;

Insert into gym_user( user_id, fname, lname, email, address, phone_num, DOB ) values( '87959403', 'Travis', 'James','tjames@gmail.com', '203 kimberly rd winchester Va','540-533-6738', '2003-03-01');
Insert into gym_user( user_id, fname, lname, email, address, phone_num, DOB ) values( '9403229', 'Hurrich', 'en','hurrich@gmail.com', '732 kimberly rd winchester Va','540-533-6738', '2003-04-03');

Insert into crowd_meter( current,user_id, time_entery) values (0,'87959403','1500' );
Insert into crowd_meter( current,user_id, time_entery) values (1,'9403229','1300' );

