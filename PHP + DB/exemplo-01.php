<?php

// Tenta conectar ao banco de dados
$conn = new mysqli("localhost", "root", "");  // Connect to server

// Verifica se houve algum erro na conexão
if($conn->connect_error){
    echo "Error: ".$conn->connect_error;
    exit;
}

// Seleciona o banco de dados que você deseja usar
if (!$conn->select_db("dbphp7")) {
    echo "Erro ao selecionar o banco de dados: ".$conn->error;
    exit;
}

// Prepara a consulta SQL
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

// Verifica se a preparação da consulta foi bem-sucedida
if (!$stmt) {
    echo "Erro na preparação da consulta: ".$conn->error;
    exit;
}

// Define os valores dos parâmetros
$login = "Italo";
$pass = "123456";

// Vincula os parâmetros
$stmt->bind_param("ss", $login, $pass);

// Executa a consulta
$stmt->execute();

echo "Dados inseridos com sucesso.";

?>
