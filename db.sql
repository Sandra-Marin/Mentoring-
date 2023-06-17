-- Table for login
CREATE TABLE `users` (
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Tables for teachers/mentor
CREATE TABLE `students` (
  `st_id` varchar(20) NOT NULL,
  `st_name` varchar(100) NOT NULL,
  `st_dept` varchar(20) NOT NULL,
  `st_batch` int(4) NOT NULL,
  `st_sem` int(11) NOT NULL,
  `st_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `teachers` (
  `tc_id` varchar(20) NOT NULL,
  `tc_name` varchar(20) NOT NULL,
  `tc_dept` varchar(20) NOT NULL,
  `tc_email` varchar(30) NOT NULL,
  `tc_course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--Table for mapping mentor and mentee

CREATE TABLE `student_mentor_map` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `st_id` varchar(20) NOT NULL,
  `tc_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `student_mentor_map_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `students` (`st_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Tables for students/mentee

CREATE TABLE marks (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  semester VARCHAR(20) NOT NULL,
  subject_name VARCHAR(50) NOT NULL,
  marks FLOAT(5,2) NOT NULL
);

 CREATE TABLE attendance (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
semester VARCHAR(20) NOT NULL,
subject_name VARCHAR(50) NOT NULL,
     percentage FLOAT(5,2) NOT NULL
     );

CREATE TABLE IF NOT EXISTS student_report (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    reg_no VARCHAR(30) NOT NULL,
    name VARCHAR(30) NOT NULL,
    remedial_class VARCHAR(30) NOT NULL,
    certificate VARCHAR(30) NOT NULL,
    publications VARCHAR(30) NOT NULL,
    sports_ncc VARCHAR(30) NOT NULL
);

 CREATE TABLE IF NOT EXISTS calender (
         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
         reg_no VARCHAR(30) NOT NULL,
         name VARCHAR(30) NOT NULL,
         Date1 VARCHAR(30) NOT NULL,
         Date2 VARCHAR(30) NOT NULL,
         Date4 VARCHAR(30) NOT NULL,
         Date5 VARCHAR(30) NOT NULL,
         Date6 VARCHAR(30) NOT NULL
     );

CREATE TABLE questionnaire (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    register_number INT NOT NULL,
    email VARCHAR(255) NOT NULL,
    class_progression INT NOT NULL,
    peer_collaboration INT NOT NULL,
    subject_1 INT NOT NULL,
    subject_2 INT NOT NULL, 
subject_3 INT NOT NULL,
subject_4 INT NOT NULL,
subject_5 INT NOT NULL,
subject_6 INT NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE ratings (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    reg_no VARCHAR(10) NOT NULL,
    class_section VARCHAR(20) NOT NULL,
    class_participation INT(1) NOT NULL,
    attendance INT(1) NOT NULL,
    results INT(1) NOT NULL,
    co_curricular INT(1) NOT NULL,
    extra_curricular INT(1) NOT NULL,
    innovation INT(1) NOT NULL,
    personality INT(1) NOT NULL,
    overall INT(1) NOT NULL,
);

CREATE TABLE report_form (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  period_of_mentoring VARCHAR(30) NOT NULL,
  mentee_name VARCHAR(30) NOT NULL,
  programme VARCHAR(30) NOT NULL,
  class VARCHAR(10) NOT NULL,
  reg_no VARCHAR(30) NOT NULL,
  sno INT(6) NOT NULL,
  sdate DATE NOT NULL,
  stime TIME NOT NULL,
  discussion TEXT,
  action_suggestion TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE project_data (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  class_participation_1 FLOAT,
  class_participation_2 FLOAT,
  class_participation_3 FLOAT,
  attendance_1 FLOAT,
  attendance_2 FLOAT,
  attendance_3 FLOAT,
  results_1 FLOAT,
  results_2 FLOAT,
  results_3 FLOAT,
  co_curricular_1 FLOAT,
  co_curricular_2 FLOAT,
  co_curricular_3 FLOAT,
  extra_curricular_1 FLOAT,
  extra_curricular_2 FLOAT,
  extra_curricular_3 FLOAT,
  innovation_1 FLOAT,
  innovation_2 FLOAT,
  innovation_3 FLOAT,
  personality_1 FLOAT,
  personality_2 FLOAT,
  personality_3 FLOAT,
  overall_1 FLOAT,
  overall_2 FLOAT,
  overall_3 FLOAT
);

