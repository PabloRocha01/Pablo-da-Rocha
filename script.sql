mysql -u root 

#criar base
create database trabalho01;
#chamar a base
use trabalho01;

#criar tabela
create table usuario(
    idusuario int primary key auto_increment,
    nome varchar(50),
    login varchar(20) unique,
    senha varchar(50),
    
    perfil enum('adm','user')
);


#inserir dado na tabela
insert into usuario values(null,'Pablo','admin','123','adm');
insert into usuario values(null,'Carlos','admin1',md5('123'),'adm');
insert into usuario values(null,'Robert','admin2',md5('123'),'user');
insert into usuario values(null,'Francisco','admin3',md5('123'),'user');
insert into usuario values(null,'Jose','admin4',md5('123'),'adm');

create table produto(
    idproduto int auto_increment primary key,
    nomedacerveja varchar(50),
    tipodacerveja varchar(50),
    pais varchar(50),
    categoria varchar(50)
);
    desc produto;

    insert into produto values(null,'Skol',' Puro Malte','Brasil','1');



select * from usuario;
select * from produto;