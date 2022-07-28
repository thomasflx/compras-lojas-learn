-- Seleciona os dados de todas as tabelas

SELECT produtos.nome as produto, lojas.nome as loja, setores.nome as setor, produtos_loja.preco
FROM `produtos_loja`
inner join produtos on produtos_loja.produto_id = produtos.id
inner join lojas on produtos_loja.loja_id = lojas.id
inner join setores on produtos_loja.setor_id = setores.id;


SELECT produto_id as produtos, loja_id as loja, produtos_lojas.preco as preco, produtos_lojas.quantidade as quantidade, produtos_lojas.validade as validade
FROM 'produtos_lojas'
inner join produtos on produtos_lojas.produto_id= produtos.id
inner join lojas on produtos_lojas.loja_id= lojas.id
produtos_lojas.preco= preco.id;
produtos_lojas.quantidade= quantidade.id
produtos_lojas.validade= validade.id;

--ISTO É UM TESTE
--select produto_id
--from produtos_lojas
--inner join produto on produtos_lojas.produto_id= produtos_lojas.produtos

