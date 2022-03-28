create database if not exists promptsite;

use promptsite;

create table persona(
id int primary key auto_increment,
foto varchar (255) not null,
descricao varchar (255) not null,
descricao2 varchar (255) not null,
);

create table portfolios(
id int primary key auto_increment,
imagem varchar (255) not null,
titulo varchar (255) not null,
comentario text not null,
);

insert into persona (foto, descricao, descricao2) values
('avataaars.svg','avataaars.svg','Graphic Artist - Web Designer - Illustrator');

insert into portfolios (imagem, titulo, comentario) values
('cabin.png','Log Cabin','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'),

('cake.png','Log Cake','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'),

('circus.png','Log Circus','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'),

('game.png','Log Game','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'),

('safe.png','Log Safe','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'),

('submarine.png','Log Submarine','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.');