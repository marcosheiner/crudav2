<?php

    include "conexao.php";
    $conn = connectBd();

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM dados WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $id       = $_GET['id'];
        $stmt->execute();

    
    
    foreach($stmt->fetchAll() as $k=>$v) {

        $id         = $v['id'];
        $usuario    = $v['usuario'];
        $corrente   = $v['corrente'];
        $agencia    = $v['agencia'];
        $banco      = $v['banco'];
        $cidade     = $v['cidade'];
        $estado     = $v['estado'];
    }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>

<?php include('header.php'); ?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: 2em;">
                        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-university"></i> Dados de <?php echo $usuario; ?></h1>
                    </div>

                    <div class="row">
                        
                        <div class="col-xl col-lg"> 
                                    
                            <div class="card mb-4 py-3 border-left-primary shadow">
                                <div class="card-body">
                                    <h5><i class="fas fa-key icon"></i></h5>
                                    <p><strong>N° de Indentificação: </strong><?php echo $id; ?></p>
                                    <p><i class="fas fa-user icon"></i></p>
                                    <p><strong>Nome: </strong><?php echo $usuario; ?></p>
                                    <p><strong>Conta Corrente: </strong><?php echo $corrente; ?></p>
                                    <p><strong>Agência: </strong><?php echo $agencia; ?></p>
                                    <p><strong>Banco: </strong><?php echo $banco; ?></p>
                                    <p><strong>Cidade: </strong><?php echo $cidade; ?></p>
                                    <p><strong>Estado: </strong><?php echo $estado; ?></p>
                                </div>
                            </div> 
                                    
                            
                        </div>


                    </div>
                    <!-- div row-->                                                 
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

<?php include('footer.php'); ?>