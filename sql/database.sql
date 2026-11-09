DELIMITER //

DROP TABLE IF EXISTS users_peliculas cascade;//
DROP TABLE IF EXISTS users_videojuegos cascade; //
DROP TABLE IF EXISTS pelicula_genere cascade;//
DROP TABLE IF EXISTS videojuegos cascade;//
DROP TABLE IF EXISTS peliculas cascade; //
DROP TABLE IF EXISTS genere cascade;//
DROP TABLE IF EXISTS users cascade; //


CREATE TABLE users(
    id INT AUTO_INCREMENT primary key,
    name varchar(255),
    address varchar(255),
    phone varchar(16),
    birthdate date,
    password varchar(255),
    email varchar(255) UNIQUE
);
//

CREATE TABLE peliculas(
  uuid varchar(36) primary key,
  name varchar(255),
  length int,
  synopsis longtext,
  classification varchar(10)
);
//

CREATE TABLE genere(
    id int auto_increment primary key,
    name varchar(100)
);
//
CREATE TABLE pelicula_genere(
    uuid_pelicula varchar(36),
    id_genere int,
    constraint pk_pelicula_genere primary key (uuid_pelicula,id_genere)
);

//

CREATE TABLE videojuegos(
    uuid varchar(36) primary key,
    name varchar(255),
    platform varchar(50),
    players int
);//

create table users_peliculas(
    id_user int references users(id),
    uuid_pelicula varchar(36) references peliculas(uuid),
    constraint pk_users_peliculas primary key (id_user,uuid_pelicula)
);

create table users_videojuegos(
    id_user int references users(id) on delete cascade ,
    uuid_videojuegos varchar(36) references videojuegos(uuid) on delete cascade ,
    constraint pk_users_peliculas primary key (id_user,uuid_videojuegos)
);

//

insert into users (name, address, phone, birthdate, password, email)
values ('Carlos Martinez','Av. Reina Sofia','965551515',
        STR_TO_DATE('26/05/2022','%d/%c/%Y'),'12345678'
           ,'carlos@email.com');
//

insert into peliculas (uuid, name, length, synopsis, classification)
values ('f8f7104e-08dc-4ab9-abd9-92c05db1ee01','Terminator 2',
        98,'Los robots toman el mando','PG-13');

insert into peliculas (uuid, name, length, synopsis, classification)
values ('f3a27474-ae61-4798-a8dc-fd02b0fc8598','Los Vengadores',
        145,'Matan a Thanos','PG-13');

insert into genere (name) value ('Comedia');
insert into genere (name) value ('Drama');
insert into genere (name) value ('Acción');
insert into genere (name) value ('Terror');


insert into pelicula_genere (uuid_pelicula, id_genere)
values('f8f7104e-08dc-4ab9-abd9-92c05db1ee01','1');
insert into pelicula_genere (uuid_pelicula, id_genere)
values('f8f7104e-08dc-4ab9-abd9-92c05db1ee01','3');
insert into pelicula_genere (uuid_pelicula, id_genere)
values('f3a27474-ae61-4798-a8dc-fd02b0fc8598','3');
insert into pelicula_genere (uuid_pelicula, id_genere)
values('f3a27474-ae61-4798-a8dc-fd02b0fc8598','4');

insert into users_peliculas (id_user, uuid_pelicula)
values (1,'f8f7104e-08dc-4ab9-abd9-92c05db1ee01');
insert into users_peliculas (id_user, uuid_pelicula)
values (1,'f3a27474-ae61-4798-a8dc-fd02b0fc8598');


