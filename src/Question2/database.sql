/*
     Question Number 2

     Fix any problems you can find with the following tables.
     Show the SQL queries needed to create your improved/new
     tables and explain why you have made the changes:
 */

CREATE TABLE Student
(
    name  varchar(255) PRIMARY KEY,
    age  int,
    grade int,
    classTeacher   varchar(255),
    subjects      varchar(255)
);

CREATE TABLE Teacher
(
    name  varchar(255) NOT NULL PRIMARY KEY,
    subjects  varchar(255),
    headOfGrade varchar(255),
    salary   int(255),
);

/*
   IMPROVED CODE
 */

CREATE TABLE Student{
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name varchar(255),
    last_name varchar(255),
    age int,
    teacher_id int FOREIGN KEY,
}

CREATE TABLE StudentSubjectTeacher{
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    student_id int FOREIGN KEY,
    subject_id int FOREIGN KEY,
    teacher_id int FOREIGN KEY,
}

CREATE TABLE Subject{
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(255),
 }

CREATE TABLE Teacher
(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name varchar(255),
    last_name varchar(255),
    headOfGrade ENUM ('Yes','No'),
    salary   decimal(8,2),
);