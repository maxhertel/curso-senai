<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once('./partes/header.php')
?>
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
                $_GET['nomeCompleto'] ?? "",
                $_GET['altura'] ?? "",
                $_GET['peso'] ?? "",
                $_GET['idade'] ?? "",
                $_GET['genero'] ?? ""
              );
              $pessoa->exibir();
              if (!empty($_GET['nomeCompleto'])) {
                $pessoa->salvarCSV();
              }



              ?>
            </div>
            <a href="/listar.php" class="card-link">Ver todos</a>

          </div>
        </div>
      </div>

    </div>
  </div>

  <?php
  include_once './partes/footer.php'
  ?>