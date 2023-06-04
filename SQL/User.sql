create table usuario (
    id_user int not null auto_increment primary key,
    nombre varchar(50),
    username varchar(50),
    email varchar(255),
    password varchar(255),
    imagen varchar(255),
    is_active boolean default 0,
    is_admin boolean default 0
);