/--- Table Creation Scripts--/

create table db_Fall16_dmuralidharan.customer(
Customer_Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
FirstName varchar(55),
LastName varchar(55),
Address1 varchar(55),
Address2 varchar(55),
City varchar(55),
Zip varchar(55),
Phone varchar(55),
Expiry_date Date
);

create table db_Fall16_dmuralidharan.employee(
Employee_Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
First_Name varchar(55),
Last_Name varchar(55),
Address1 varchar(55),
Address2 varchar(55),
City varchar(55),
Zip varchar(55),
Phone varchar(55),
Designation varchar(55)
);

create table db_Fall16_dmuralidharan.user_details(
ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
Email varchar(55) UNIQUE,
Passcode varchar(55),
Admin boolean,
Customer_Id INT,
Employee_Id INT
);

ALTER TABLE db_Fall16_dmuralidharan.user_details
ADD FOREIGN KEY (Customer_Id)
REFERENCES db_Fall16_dmuralidharan.customer(Customer_Id);

ALTER TABLE db_Fall16_dmuralidharan.user_details
ADD FOREIGN KEY (Employee_Id)
REFERENCES db_Fall16_dmuralidharan.employee(Employee_Id);

create table db_Fall16_dmuralidharan.training_programs(
Program_Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
Fitness_Section varchar(55),
Days varchar(55),
Timing varchar(55),
Employee_Id INT,
FOREIGN KEY (Employee_Id) REFERENCES db_Fall16_dmuralidharan.employee(Employee_Id)
);

create table db_Fall16_dmuralidharan.training(
Training_Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
Program_Id INT,
Customer_Id INT,
FOREIGN KEY (Program_Id) REFERENCES db_Fall16_dmuralidharan.training_programs(Program_Id),
FOREIGN KEY (Customer_Id) REFERENCES db_Fall16_dmuralidharan.customer(Customer_Id)
);

Insert INTO training_programs(Fitness_Section,Days,Timing,Employee_Id)values(
'Zumba','Tuesday','6.00 p.m - 7.00 p.m',4);

Insert INTO training_programs(Fitness_Section,Days,Timing,Employee_Id)values(
'Yoga','Wednesday','6.00 p.m - 7.00 p.m',5);
Insert INTO training_programs(Fitness_Section,Days,Timing,Employee_Id)values(
'Cycling','Friday','5.00 p.m - 6.00 p.m',3);