<?php 
include_once('./partes/header.php')
?>
<body>
    <div class="contatiner m-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Lista de pessoas
                    </div>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nome</td>
                                <td>Altura</td>
                                <td>Peso</td>
                                <td>Idade</td>
                                <td>Genero</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once './classes/Pessoa.php';
                            Pessoa::exibirLinhasDaTabela();
                            //Isso significa que ele:
                            // Pertence à classe,
                            // Não depende de um objeto,
                            // Não usa dados de uma pessoa específica.
                            ?>
                        </tbody>

                    </table>
                    <div class="card-footer">
                        <a href="/index.php" class="btn btn-primary">cadastrar</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>



  <?php
  include_once './partes/footer.php'
  ?>