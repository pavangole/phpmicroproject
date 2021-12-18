create database server_management;

create  table  signup ( EmailID varchar(30), Password varchar(15) , PRIMARY KEY (EmailID));

create table  server_info (serverID varchar(13), email varchar(30),servername varchar(15), username varchar(15), password  varchar(15), PRIMARY KEY (serverID) , foreign key (email) references signup(EmailID));

