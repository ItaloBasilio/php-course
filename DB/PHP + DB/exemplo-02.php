<?php

// Tenta conectar ao banco de dados
$conn = new mysqli("localhost", "root", "");  // Connect to server

// Verifica se houve algum erro na conexão
if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
    exit;
}

// Seleciona o banco de dados que você deseja usar
if (!$conn->select_db("dbphp7")) {
    echo "Erro ao selecionar o banco de dados: " . $conn->error;
    exit;
}

$result =  $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_assoc()) {

    array_push($data, $row);

}

echo json_encode($data);
