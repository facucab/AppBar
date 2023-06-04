create table favoritos(
    id_favorito int not null auto_increment primary key,
    id_bar int,
    id_usuario int,
    fecha datetime,
    foreign key (id_usuario) references usuario (id_user)

);