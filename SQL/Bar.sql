create table bar(
    id_bar int not null auto_increment primary key,
    nombre varchar(120),
    descripcion text(400),
    direccion varchar(150),
    slug varchar(120),
    imagen varchar(255),
    maps varchar(255),
    start int 
);