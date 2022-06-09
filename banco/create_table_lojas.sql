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
insert into lojas (nome, cep, numero, complemento, descricao, slug) values ('Lojas Mel', 08587801, 1, 'Em fernte a Feirinha do Zé', 'Vende De Papai Cruel tocando trompete, a tudo entre de R$1,00 a R$99,00.', 'lojas-mel');
insert into lojas (nome, cep, numero, complemento, descricao, slug) values ('Feirinha do Zé', 08587802, 2, 'Em frente a Padaria do Thomas e seus Amigos', 'Vende De frutas e verduras, a brinquedos de má qualidade sem garantia alguma.', 'feirinha-do-ze');
insert into lojas (nome, cep, numero, complemento, descricao, slug) values ('Padaria Thomas e Seus Amigos', 08587803, 3, 'Do lado da Lojas Mel e em frente a Feitinha do Zé', 'Vende De pão, a bilhete do bingo de domingo.', 'padaria-thomas-amigos');

/*slug é o nome pra colocar na url, ouseja ele curto sem caractere especial e sem espaços, pode-usar-tracos.*/