create table produtos (
    id bigint unsigned AUTO_INCREMENT not null,
    nome varchar (255) not null,
    marca varchar (255) not null,
    slug varchar (25) not null,
    descricao text default null comment 'Campo de descrição',
    
    primary key (id),
    unique(slug)
);