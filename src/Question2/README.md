
# Explaination 
### _Why i made the changes_

For me to come up with the new improved tables i had to utilise the
database normalisation technique to reduce data redundancy and 
eliminates undesirable characteristics like Insertion, Update and Deletion Anomalies
and ensure data is stored logically.

#### **1NF (First Normal Form) Rule**

1. Each table cell should contain a single value.
2. Each record needs to be unique.
3. Eliminate repeating groups in individual tables

Because of the 1NF rules i had to introduce id unique, auto increment primary 
key because i cannot use `name` column as primary key record
of names can be similar. 
That's following 1NF "_Each record need to be unique_"

```sql
CREATE TABLE Student(
  id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
)

```
I also break down `name` column into 2 columns 

```sql
CREATE TABLE Student(
  first_name varchar(255),
  last_name varchar(255),
)
```
By doing this I followed 1NF which states "_Each table cell should contain a single value_"
and also splitting into different columns makes for consistency which helps when user wants 
to search by last_name only. 

Because repetition of subject in Student and Teacher table i had to introduce
1NF rule which states that "_Eliminate repeating groups in individual tables_".


#### **2NF (First Normal Form) Rule**

1. Be in 1NF
2. Create separate tables for sets of values that apply to multiple records.
2. Relate these tables with a foreign key.

Brainstorming the relationship between subject, student and teacher.
I got results that student has many subjects and subject has many students
which sets up the many-to-many relationship and also a teacher has many subjects
and a subjects has many teachers which is many-to-many relationship so i created the
table below

```sql
CREATE TABLE StudentSubjectTeacher{
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    student_id int FOREIGN KEY,
    subject_id int FOREIGN KEY,
    teacher_id int FOREIGN KEY,
    }
```

#### **3NF (First Normal Form) Rule**

1. Be in 2NF
2. Eliminate fields that do not depend on the key.

I created a subject table which is a separate which has no transitive
functional dependencies into its own table
  
```sql
CREATE TABLE Subject{
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(255),
    }
```
