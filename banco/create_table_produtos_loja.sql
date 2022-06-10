-- Cria a tabela de produtos_loja

create table produtos_loja (
	id bigint unsigned auto_increment not null,
	preco float(10,2),
	quantidade int,
	validade date,
	descricao text default null comment 'Campo de descrição',
	
	loja_id int unsigned not null,
	produto_id bigint unsigned not null,
	setor_id int unsigned not null,
	
	primary key(id),
	
	foreign key(loja_id) references lojas(id) on delete cascade on update cascade,
	foreign key(produto_id) references produtos(id) on delete cascade on update cascade,
	foreign key(setor_id) references setores(id) on delete cascade on update cascade
);
