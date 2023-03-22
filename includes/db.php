<?php

/** COMEÇA CONEXÃO COM O BANCO */
$servername = "localhost";
$dbname = "compras_lojas_learn";
$username = "root";
$password = "";

// Cria uma conexão
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

// Arruma o retorno de erros do banco
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>