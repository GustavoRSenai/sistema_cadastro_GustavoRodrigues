<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost:3309";
    $username = "root";
    $password = "";
    $dbname = "sistema";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo '<img src="https://i.pinimg.com/originals/4c/b9/b5/4cb9b5812328d2fe27c752f2938ff810.gif"><p>Conexão bem-sucedida</p>';
    }
    // Adiciona a coluna 'imagem' à tabela 'produtos' se ela não existir 
    $sql = "SHOW COLUMNS FROM produtos LIKE 'imagem'";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        $sql = "ALTER TABLE produtos ADD COLUMN imagem VARCHAR(255)";
        $conn->query($sql);
    }
    // Adiciona a coluna 'imagem' à tabela 'fornecedores' se ela não existir
    $sql = " SHOW COLUMNS FROM fornecedores LIKE 'imagem'";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        $sql = "ALTER TABLE fornecedores ADD COLUMN imagem VARCHAR(255)";
        $conn->query($sql);
    }
    ?>
</body>
</html>