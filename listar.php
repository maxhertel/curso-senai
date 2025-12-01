<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

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



    <script src="" async defer></script>
</body>

</html>