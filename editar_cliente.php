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

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Estabelece a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica se houve algum erro na conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    
    // Escapa caracteres especiais para prevenir SQL Injection
    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $whatsapp = mysqli_real_escape_string($conn, $_POST['whatsapp']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $cert_senha = mysqli_real_escape_string($conn, $_POST['cert_senha']);
    $uf = mysqli_real_escape_string($conn, $_POST['uf']);
    
    // Atualiza os dados na tabela
    $sql = "UPDATE cliente 
            SET login='$login'
                , senha='$senha'
                , nome='$nome'
                , whatsapp='$whatsapp'
                , email='$email'
                , cert_senha='$cert_senha'
                , uf='$uf' 
            WHERE id=$_GET[id]";
    
    if ($conn->query($sql) === TRUE) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro ao atualizar os dados: " . $conn->error;
    }
    
    // Fecha a conexão
    $conn->close();
}

// Obtém os dados do cliente para preencher o formulário
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
    <title>Editar Cliente</title>
</head>
<body>
    <h2>Editar Cliente</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $_GET['id'];?>" enctype="multipart/form-data">
        <label for="login">Login:</label><br>
        <input type="text" id="login" name="login" value="<?php echo $row['login'];?>" required><br>
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" value="<?php echo $row['senha'];?>" required><br>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value="<?php echo $row['nome'];?>" required><br>
        <label for="whatsapp">WhatsApp:</label><br>
        <input type="text" id="whatsapp" name="whatsapp" value="<?php echo $row['whatsapp'];?>" required><br>
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $row['email'];?>" required><br>
        <label for="cert_senha">Senha do Certificado:</label><br>
        <input type="password" id="cert_senha" name="cert_senha" value="<?php echo $row['cert_senha'];?>" required><br>
        <label for="uf">UF:</label><br>
        <input type="text" id="uf" name="uf" value="<?php echo $row['uf'];?>" required><br><br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
