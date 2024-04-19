<?php
// Usando apenas uma fonte de informação de conexão com o banco
$servername = "localhost"; // endereço do servidor
$username = "root"; // nome de usuário do banco de dados
$password = ""; // senha do banco de dados
$dbname = "cadastro"; // nome do banco de dados

// Verifica se foi fornecido um ID válido na URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "ID inválido.";
    exit;
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Estabelece a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica se houve algum erro na conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    
    // Exclui o cliente do banco de dados
    $sql = "DELETE FROM cliente WHERE id=$_GET[id]";
    
    if ($conn->query($sql) === TRUE) {
        echo "Cliente excluído com sucesso!";
    } else {
        echo "Erro ao excluir o cliente: " . $conn->error;
    }
    
    // Fecha a conexão
    $conn->close();
}

// Obtém os dados do cliente para confirmar a exclusão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve algum erro na conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtém os dados do cliente
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
    <title>Excluir Cliente</title>
</head>
<body>
    <h2>Excluir Cliente</h2>
    <p>Tem certeza de que deseja excluir o cliente "<?php echo $row['nome'];?>"?</p>
    <form method="post">
        <input type="submit" value="Excluir">
        <a href="javascript:history.go(-1)">Cancelar</a>
    </form>
</body>
</html>
