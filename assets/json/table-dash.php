<?php

$servername = "localhost"; 
$username = "gpsoftco_user"; 
$password = "Odlareg2930";
$dbname = "gpsoftco_notas"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexao com o banco de dados: " . $conn->connect_error);
}

$sql = "SELECT id, cnpj, nome, whatsapp, email, uf, status FROM cadastro where status = 'Ativo' and tipo_cliente = 'Gratuito' ";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode(array("data" => $data));

$conn->close();
?>
