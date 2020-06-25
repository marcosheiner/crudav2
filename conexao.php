<?php
    function connectBd(){
        $servername     = "sql309.epizy.com";
        $username       = "epiz_26089411";
        $password       = "irhmQRGL1V";
        $dbname         = "epiz_26089411_banco_projeto";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexão Realizada com Sucesso!";
            return $conn;

        } catch(PDOException $e) {
            echo "Error! Conexão Falhou." . $e->getMessage();
        }
    }
?>