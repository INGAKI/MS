drop database if exists scoresystem;
create database if not exists scoresystem character set utf8;

use scoresystem;

drop table if exists score_admin_users;

create table if not exists score_admin_users(
id int(8) unsigned not null auto_increment primary key,
email varchar(255) default null comment '邮箱',
name  varchar(255) not null comment '姓名',
password varchar(255) not null comment '密码')DEFAULT CHARSET=utf8;/*最高级管理员表*/

insert into score_admin_users (id,email,name,password) values ('1','','admin','admin');

drop table if exists score_teacher_users;

create table if not exists score_teacher_users(
id int(8) unsigned not null auto_increment primary key,
email varchar(255) default null comment '邮箱',
name varchar(255) not null comment '姓名',
password varchar(255) not null comment '密码',
aca varchar(255) not null comment '学院名')DEFAULT CHARSET=utf8;/*管理员表*/

drop table if exists score_student_users;

create table if not exists score_student_users(
id int(255) unsigned not null auto_increment primary key,
number bigint unsigned not null unique key comment '学号',
name varchar(255) not null comment '姓名',
password varchar(255) not null comment '密码')DEFAULT CHARSET=utf8;/*学生用户表*/

drop table if exists score_student_projects;

create table if not exists score_student_projects(
id int(255)unsigned not null auto_increment primary key,
name varchar(255) not null comment '项目名',
time varchar(255) not null comment '项目时间',
type varchar(255) not null comment '项目类型',
mark double(2,1) not null comment '项目分',
student_id int(255) not null comment '学生ID')DEFAULT CHARSET=utf8;/*项目表*/

set names gbk;

insert into score_teacher_users (id,name,password,aca) values (0,'教师','teacherpwd','信息工程学院');
insert into score_student_users (id,name,password,number) values (0,'student','15209010022','15209010022');
insert into score_teacher_users (id,name,password,aca) values (10,'teacher','teacherpwd','信息工程学院');
