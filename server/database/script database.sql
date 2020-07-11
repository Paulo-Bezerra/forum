create database if not exists forum;

use forum;

create table topico(
id int primary key auto_increment,
titulo char(70) not null,
conteudo longtext not null,
t_autor char(30)
);

create table comentario(
id_comen int primary key auto_increment,
id_topico int,
foreign key(id_topico) references topico(id),
conteudo longtext not null,
c_autor char(30)
);

create table resposta(
id_respo int primary key auto_increment,
id_topico int,
foreign key(id_topico) references topico(id),
id_comentario int,
foreign key(id_comentario) references comentario(id_comen),
conteudo longtext not null,
r_autor char(30)
);