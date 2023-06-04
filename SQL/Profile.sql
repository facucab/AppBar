create table perfil(
    date_birth date,
    genero varchar(1),
    icon varchar(255), 
    biografia varchar(255),
    user_id int ,
    foreign key (user_id) references usuario(id_user)
);