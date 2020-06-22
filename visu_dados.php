<?php include('header.php'); ?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: 2em;">
                        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-university"></i> Minhas Contas</h1>
                    </div>

                    <div class="row">
                        
                        <div class="col-xl col-lg">
                            
                                
                                <!-- Card Body -->
                                
                                        <?php 
                                            

                                            
                                        ?>

                                        
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="text-align: center;"><i class="fas fa-user icon"></i></th>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Conta Corrente</th>
                                                <th scope="col">Agência</th>
                                                <th scope="col">Banco</th>
                                                <th scope="col">Cidade</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col" style="text-align: center;"><i class="fas fa-user-edit icon"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                    
                                                /*class TableRows extends RecursiveIteratorIterator {
                                                function __construct($it) {
                                                    parent::__construct($it, self::LEAVES_ONLY);
                                                }

                                                function current() {
                                                    return "<td>" . parent::current(). "</td>";
                                                }

                                                function beginChildren() {
                                                    echo "<tr>";
                                                }

                                                function endChildren() {
                                                    echo "</tr>" . "\n";
                                                }
                                                }*/

                                                include "conexao.php";
                                                $conn = connectBd();

                                                try {
                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                    $stmt = $conn->prepare("SELECT * FROM dados");
                                                    $stmt->execute();

                                                
                                                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                foreach($stmt->fetchAll() as $k=>$v) {
                                                    //echo $v;
                                                    echo '<tr>';
                                                        echo '<td style="text-align: center;"><i class="fas fa-money-check-alt icon"></i></td>';
                                                        echo '<td>' .$v['id']. '</td>';
                                                        echo '<td>' .$v['usuario']. '</td>';
                                                        echo '<td>' .$v['corrente']. '</td>';
                                                        echo '<td>' .$v['agencia']. '</td>';
                                                        echo '<td>' .$v['banco']. '</td>';
                                                        echo '<td>' .$v['cidade'].'</td>';
                                                        echo '<td>' .$v['estado'].'</td>';
                                                        echo '<td style="text-align: center;"> <a href=""><i class="fas fa-edit"></i></a> <a href=""><i class="fas fa-folder"></i></a> <a  href="delete_dados.php?id='.$v['id'].'"><i class="fas fa-trash"></i></a></td>';
                                                    echo '</tr>';
                                                }
                                                } catch(PDOException $e) {
                                                    echo "Error: " . $e->getMessage();
                                                }
                                                $conn = null;
                                            
                                        ?>
                                            
                                        </tbody>
                                    </table>
                                    
                                    
                                        
                                    
                                
                            
                        </div>


                    </div>
                    <!-- div row-->                                                 
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

<?php include('footer.php'); ?>