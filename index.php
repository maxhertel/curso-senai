<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once('./partes/header.php')
?>
<style>
  /* Pequenas customizações mantendo "Bootstrap puro" como base */
  .card-dashboard {
    border: 0;
    border-radius: 2rem;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(14, 30, 37, 0.08);
  }

  .card-header-gradient {
    background: radial-gradient( #28034eff 50%, #2575fc 100%);
    color: white;
  }

  .metric-icon {
    width: 56px;
    height: 56px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    font-size: 1.4rem;
  }

  .metric-value {
    font-weight: 700;
    font-size: 1.35rem;
    line-height: 1;
  }

  .metric-label {
    color: #6b7280;
    /* gray-400 */
    font-size: 0.85rem;
  }

  @media (max-width: 575.98px) {
    .metric-icon {
      width: 48px;
      height: 48px;
      font-size: 1.2rem
    }

    .metric-value {
      font-size: 1.15rem
    }
  }
</style>

<body class="bg-light">
<?php
include_once("./classes/Pessoa.php")
?>

  <div class="container py-4">
    <div class="card card-dashboard">
      <div class="card-header card-header-gradient d-flex align-items-center justify-content-between px-4 py-3">
        <div>
          <h5 class="mb-0">Resumo de Médias</h5>
          <small class="opacity-75">Média de peso, altura e IMC — visão geral</small>
        </div>
        <div class="text-end">
          <button class="btn btn-sm btn-light btn-opacity-75">Ver tudo</button>
        </div>
      </div>


      <div class="card-body px-4 py-3">
        <div class="row g-3 align-items-center">


          <!-- Peso -->
          <div class="col-12 col-md-4">
            <div class="d-flex gap-3 align-items-center">
              <div class="metric-icon bg-white text-primary shadow-sm">
                <i class="bi bi-weight"></i>
              </div>
              <div>
                <div class="metric-value"> <?= Pessoa::mediaPeso()?>  <span class="text-muted" style="font-weight:500; font-size:.8rem">kg</span></div>
                <div class="metric-label">Media de peso</div>
              </div>
            </div>
          </div>


          <!-- Altura -->
          <div class="col-12 col-md-4">
            <div class="d-flex gap-3 align-items-center">
              <div class="metric-icon bg-white text-success shadow-sm">
                <i class="bi bi-rulers"></i>
              </div>
              <div>
                <div class="metric-value">1.73 <span class="text-muted" style="font-weight:500; font-size:.8rem">m</span></div>
                <div class="metric-label">Média de altura</div>
                <div class="small text-muted mt-1">valor estável</div>
              </div>
            </div>
          </div>


          <!-- IMC -->
          <div class="col-12 col-md-4">
            <div class="d-flex gap-3 align-items-center">
              <div class="metric-icon bg-white text-danger shadow-sm">
                <i class="bi bi-heart-pulse"></i>
              </div>
              <div>
                <div class="metric-value">24.2</div>
                <div class="metric-label">Média de IMC</div>
                <div class="small text-warning mt-1">Em faixa saudável</div>
              </div>
            </div>
          </div>


        </div> <!-- row -->


        <!-- rodapé com observações -->
        <div class="mt-3 pt-3 border-top">
          <small class="text-muted">Última atualização: <strong>2 de dezembro de 2025</strong></small>
        </div>
      </div>
    </div>
    
  </div>


  <!-- Bootstrap JS (apenas para componentes interativos se necessário) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php
include_once './partes/footer.php'
?>