-- Cria a tabela de setores

create table setores (
	id int unsigned auto_increment not null,
	nome varchar(255) not null,
	descricao text default null,
	slug varchar(40) not null,
	
	primary key(id),
	unique(slug)
);

