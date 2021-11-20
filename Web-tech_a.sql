drop database if exists Flight_Booking_System_66952023;
create database Flight_Booking_System_66952023;
use  Flight_Booking_System_66952023;

/*Creating tables*/
Create table Student (
student_id int not null ,
username Varchar(25),
email_Address varchar(25),
Spassword int not null ,
primary key (student_id)
);

Create table Uploader (
uploader_id int not null ,
student_id int not null ,
Full_name  Varchar(25),
major enum ('CS','MIS','BA','CE','ME','EE'),
Syear int not null ,
primary key (uploader_id),
foreign key (sudent_id) references Student (student_id)
);

Create table Downloader (
downloader_id int not null ,
student_id int not null ,
First_name  Varchar(25),
Last_name  Varchar(25),
Demail_Address varchar(25),
Dmajor enum ('CS','MIS','BA','CE','ME','EE'),
Syear int,
primary key (downloader_id),
foreign key (sudent_id) references Student (student_id)
);

Create table Product (
product_id int not null ,
product_name  Varchar(25),
product_type enum ('Textbook','Lecture Slides','Past Questions'),
date_added date,
product_course Varchar(25),
primary key (product_id)
);

Create table Purchase (
purchase_id int not null ,
student_id int not null ,
product_id int not null ,
payment_method enum ('Cash','Paypal','Momo'),
primary key (purchase_id),
foreign key (sudent_id) references Student (student_id),
foreign key (product_id) references Product (product_id)
);


Create table Category (
category_id int not null ,
product_name int not null ,
primary key (category_id),
foreign key (product_name) references Product (product_name)
);

