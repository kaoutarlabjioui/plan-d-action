CREATE DATABASE user_management;

create table users(
    id  int primary key auto_increment ,
    firstname varchar(50),
    lastname varchar(50),
    email varchar(100) unique ,
    password varchar(255)
);


