create database if not exists forum;

use forum;

create table topico(
id int primary key auto_increment,
title char(70) not null,
topic_content varchar(500) not null,
topic_autor char(30),
creation_time datetime
);

create table threads(
id int primary key auto_increment,
id_topic int,
foreign key(id_topic) references topico(id),
threads_content varchar(500) not null,
threads_creation_time datetime
);


create table comentario(
id int primary key auto_increment,
id_topic int,
foreign key(id_topic) references topico(id),
comment_content varchar(700) not null,
comment_autor char(30),
comment_time datetime
);

create table resposta(
id_answer int primary key auto_increment,
id_topic int,
foreign key(id_topic) references topico(id),
id_comment int,
foreign key(id_comment) references comentario(id),
answer_content varchar(700) not null,
answer_autor char(30),
answer_time datetime
);


-- drop database forum;