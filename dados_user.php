<?php 

    include "conexao.php";
    $conn = connectBd();

    try {
        
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO dados (usuario, corrente, agencia, banco, cidade, estado)
            VALUES (:usuario, :corrente, :agencia, :banco, :cidade, :estado)");
            $stmt->bindParam(':usuario', $nameUsuario);
            $stmt->bindParam(':corrente', $numberCorrente);
            $stmt->bindParam(':agencia', $numberAgencia);
            $stmt->bindParam(':banco', $nameBanco);
            $stmt->bindParam(':cidade', $nameCidade);
            $stmt->bindParam(':estado', $nameEstado);
        
            $nameUsuario       = $_POST['name_usuario'];
            $numberCorrente    = $_POST['number_corrente'];
            $numberAgencia     = $_POST['number_agencia'];
            $nameBanco         = $_POST['name_banco'];
            $nameCidade        = $_POST['name_cidade'];
            $nameEstado        = $_POST['name_estado'];
            $stmt->execute();
    
    
            echo "New records created successfully";
    }   catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
    }
    
    $conn = null;

    header('Location: visualizar_dados.php');
?>