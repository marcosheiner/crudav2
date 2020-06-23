<?php include('header.php'); ?>

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: 2em;">
                        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-university"></i> Cadastrar Conta</h1>
                    </div>

                    <div class="row">
                        
                        <div class="col-xl col-lg">
                            <div class="card mb-4">
                                
                                <!-- Card Body -->
                                <div class="card-body">
                                        
                                        <form class="user" action="dados_user.php" method="POST" id="form_conta" name="form_conta">

                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="">Nome Completo</label>
                                                    <input type="text" class="form-control form-control-user" id="name_usuario" name="name_usuario" placeholder="Nome Completo" require>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">Conta Corrente [6 - 10 Números]</label>
                                                    <input type="text" class="form-control form-control-user" id="number_corrente" name="number_corrente" placeholder="Conta Corrente" require>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="">Agência [4 Números]</label>
                                                    <input type="number" class="form-control form-control-user" id="number_agencia" name="number_agencia" placeholder="Ex: 1234" require>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">Banco</label>
                                                    <input type="text" class="form-control form-control-user" id="name_banco" name="name_banco" placeholder="Banco" require>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="">Cidade</label>
                                                    <input type="text" class="form-control form-control-user" id="name_cidade" name="name_cidade" placeholder="Cidade" require>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">Estado</label>
                                                    <input type="text" class="form-control form-control-user" id="name_estado" name="name_estado" placeholder="Estado" require>
                                                </div>
                                            </div>

                                            <button class="btn btn-primary btn-icon-split shadow" style="border-radius: 10em;" type="Submit">
                                                <span class="text">Cadastrar Conta</span>
                                            </button>
                                            <button class="btn btn-primary btn-icon-split shadow" style="border-radius: 10em;" type="Reset">
                                                <span class="text">Limpar</span>
                                            </button>

                                        </form>
                                        
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
