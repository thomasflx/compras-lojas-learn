-- Adiciona a coluna imagem na tabela lojas
ALTER TABLE lojas ADD COLUMN imagem text default null comment "Link relativo da imagem";