<?php
   $pdo = new PDO("sqlite:estoque.db");

    $queryCriaTabelaCategorias = "CREATE TABLE IF NOT EXISTS categorias (
	id	INTEGER NOT NULL,
	nome	TEXT NOT NULL,
	PRIMARY KEY(id AUTOINCREMENT)
    )";
        $pdo ->query($queryCriaTabelaCategorias);

    $queryCriaTabelaProdutos = "CREATE TABLE IF NOT EXISTS produtos (
	id	INTEGER NOT NULL,
	nome	TEXT NOT NULL,
	descricao	TEXT,
	peco	REAL NOT NULL,
	categoria_id	INTEGER,
	PRIMARY KEY(id AUTOINCREMENT)
    FOREIGN KEY (categoria_id) REFERENCES categorias(id)
)";
        $pdo ->query($queryCriaTabelaProdutos);

    $queryCriaTabelaEstoque = "CREATE TABLE estoque (
            id	INTEGER NOT NULL,
            quantidade	INTEGER NOT NULL,
            produto_id	INTEGER,
            FOREIGN KEY(produto_id) REFERENCES produtos(id),
            PRIMARY KEY(id AUTOINCREMENT)
        )";
        $pdo ->query($queryCriaTabelaEstoque);

?>