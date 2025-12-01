<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-6">
        <?php
        //puxando o form PERGUNTA 4:
        //O PHP abre o arquivo form.php e cola o conteúdo dele ali, como se você tivesse escrito o código ali manualmente.
        include './forms/form.php';
        ?>
      </div>

      <div class="col-6">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Ficha cadastral</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"></h6>
            <div class="card-text">
            <?php
            //puxando do arquivo que está na pasta classe e é o arquivo pessoa 
            //esse aquivo repesenta a classe
            //na pratica todo o conteudo do arquivo Pessoa.php é jogando na index.php
            include_once './classes/Pessoa.php';

            // =================== MAIN ======================

            $pessoa = new Pessoa(
              $_GET['nomeCompleto'],
              $_GET['altura'],
              $_GET['peso'],
              $_GET['idade'],
              $_GET['genero']
            );
            $pessoa->exibir();
            $pessoa->salvarCSV();


            ?>
            </div>
            
            
          </div>
        </div>
      </div>
      <a href="/listar.php" class="card-link">Ver todos</a>
  </div>
  </div>
</body>

</html>