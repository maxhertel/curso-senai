   
   
   <div class="container mt-5">
    <div class="row">

        <!-- COLUNA 1 -->
        <div class="col">
            <h3>Sobre o Projeto</h3>
            <p>Projeto desenvolvido para estudos de PHP, MVC, listas e manipulação de arquivos.</p>

            <div class="row">
               <div class="col-3"><a href="https://cdnlogo.com/logo/facebook_32305.html"><img class="img-thumbnail"  src="https://static.cdnlogo.com/logos/f/9/facebook.svg"></a></div>
               <div class="col-3">
                    <a href="https://cdnlogo.com/logo/x_135566.html"><img class="img-thumbnail"  src="https://static.cdnlogo.com/logos/x/61/x_800.png"></a>
</div>
               <div class="col-3">
                 <a href="https://cdnlogo.com/logo/pisky_145509.html"><img class="img-thumbnail"  src="https://static.cdnlogo.com/logos/p/85/pisky.svg"></a>
               </div>
                
                
                
            </div>
        </div>

        <!-- COLUNA 2 -->
        <div class="col">
            <h3>Navegação</h3>
            <ul>
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="listar.php">Listar Pessoas</a></li>
                <li><a href="form.php">Criar Nova Pessoa</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>

        <!-- COLUNA 3 -->
        <div class="col">
            <h3>Informações</h3>
            <ul>
                <li>Professor: Seu Professor</li>
                <li>Curso: Desenvolvimento Web</li>
                <li>Ano: <?php echo date("Y"); ?></li>
            </ul>
        </div>

    </div>

    <div class="row">
        © <?php echo date("Y"); ?> — Projeto de Estudos — Todos os direitos reservados.
    </div>
</body>

</html>