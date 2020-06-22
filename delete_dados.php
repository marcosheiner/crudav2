<?php

include "conexao.php";
$conn = connectBd();

try {
        
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("DELETE FROM dados WHERE id=:id");
    $stmt->bindParam(':id', $id);
    

    $id       = $_GET['id'];
    $stmt->execute();


    echo "Excluido com sucesso";
}   catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
header('Location: visu_dados.php');

?>