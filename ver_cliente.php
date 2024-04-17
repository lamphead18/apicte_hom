<?php
// Usando apenas uma fonte de informação de conexão com o banco
$servername = "localhost"; // endereço do servidor
$username = "root"; // nome de usuário do banco de dados
$password = ""; // senha do banco de dados
$dbname = "db-notas"; // nome do banco de dados

// Verifica se foi fornecido um ID válido na URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "ID inválido.";
    exit;
}

// Obtém os dados do cliente
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve algum erro na conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM cliente WHERE id=$_GET[id]";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Cliente não encontrado.";
    exit;
}

// Fecha a conexão
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Cliente</title>
</head>
<body>
    <h2>Detalhes do Cliente</h2>
    <p><strong>ID:</strong> <?php echo $row['id'];?></p>
    <p><strong>Logo:</strong> <img src="<?php echo $row['logo'];?>" alt="Logo" style="max-width: 200px;"></p>
    <p><strong>CNPJ:</strong> <?php echo $row['cnpj'];?></p>
    <p><strong>Login:</strong> <?php echo $row['login'];?></p>
    <p><strong>Nome:</strong> <?php echo $row['nome'];?></p>
    <p><strong>WhatsApp:</strong> <?php echo $row['whatsapp'];?></p>
    <p><strong>E-mail:</strong> <?php echo $row['email'];?></p>
    <p><strong>Certificado:</strong> <?php echo $row['certificado'];?></p>
    <p><strong>UF:</strong> <?php echo $row['uf'];?></p>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>
