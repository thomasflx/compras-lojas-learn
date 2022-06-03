-- Seleciona os dados de todas as tabelas

SELECT produtos.nome as produto, lojas.nome as loja, setores.nome as setor, produtos_loja.preco
FROM `produtos_loja`
inner join produtos on produtos_loja.produto_id = produtos.id
inner join lojas on produtos_loja.loja_id = lojas.id
inner join setores on produtos_loja.setor_id = setores.id;