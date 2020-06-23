<?php 

    include "conexao.php";
    $conn = connectBd();

    try {
        
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            // prepare sql and bind parameters
            $stmt = $conn->prepare("UPDATE dados SET usuario=:usuario, cidade=:cidade, estado=:estado WHERE id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':usuario', $nameUsuario);
            //$stmt->bindParam(':corrente', $numberCorrente);
            //$stmt->bindParam(':agencia', $numberAgencia);
            //$stmt->bindParam(':banco', $nameBanco);
            $stmt->bindParam(':cidade', $nameCidade);
            $stmt->bindParam(':estado', $nameEstado);
        
            $id                = $_GET['id'];
            $nameUsuario       = $_POST['name_usuario'];
            //$numberCorrente    = $_POST['number_corrente'];
            //$numberAgencia     = $_POST['number_agencia'];
            //$nameBanco         = $_POST['name_banco'];
            $nameCidade        = $_POST['name_cidade'];
            $nameEstado        = $_POST['name_estado'];
            $stmt->execute();
    
    
            echo "Cadastro atualizado com sucesso!";
    }   catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
    }
    
    $conn = null;

    header('Location: visu_dados.php');
?>