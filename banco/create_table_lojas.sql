-- Cria a tabela de lojas

create table lojas (
	id int unsigned auto_increment not null,
	nome varchar(255) not null,
    cep varchar(10) not null,
    numero varchar(10) not null,
    complemento varchar(255) not null,
    descricao text default null comment 'Campo de descrição',
	slug varchar(40) not null,
	
	primary key(id),
	unique(slug)
);