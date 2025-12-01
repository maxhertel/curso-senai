    <form action="" method="get">
        <h3>Vamos criar uma pessoa:</h3>

        <div class="mb-3">
            <label  class="form-label">Nome:</label>
            <input type="text" name="nomeCompleto" class="form-control" value="<?php echo ($_GET['nomeCompleto'] ?? '') ?>" />
        </div>

        <div class="mb-3">
            <label  class="form-label">Altura:</label>
            <input type="number"  class="form-control"  step="0.001" name="altura" value="<?php echo ($_GET['altura'] ?? '') ?>" /> em metros
            <br />
        </div>
        <div class="mb-3">
            <label  class="form-label">Peso:</label>
            <input type="number"  class="form-control"  name="peso" value="<?php echo ($_GET['peso'] ?? '') ?>" /> em kg
            <br />
        </div>
        <div class="mb-3">
            <label  class="form-label">Idade:</label>
            <input type="number" class="form-control"  name="idade" value="<?php echo ($_GET['idade'] ?? '') ?>" /> anos
            <br />
        </div>
        <div class="mb-3">
            <label  class="form-label" >Genero:</label>
            <select name="genero"  class="form-control" >
                <option value="I" <?php if (($_GET['genero'] ?? '') == "I") echo "selected"; ?>>Indefinido</option>
                <option value="M" <?php if (($_GET['genero'] ?? '') == "M") echo "selected"; ?>>Masculino</option>
                <option value="F" <?php if (($_GET['genero'] ?? '') == "F") echo "selected"; ?>>Feminino</option>
            </select>
        </div>
        <br /><br />

        Cor de fundo da ficha:
        <input type="color" name="corfundo" value="<?php echo ($_GET['corfundo'] ?? '#ffffff') ?>" />

        Cor do texto:
        <input type="color" name="cortexto" value="<?php echo ($_GET['cortexto'] ?? '#000000') ?>" />

        Cor da borda:
        <input type="color" name="corborda" value="<?php echo ($_GET['corborda'] ?? '#000000') ?>" />

        <br /><br />
        <button type="submit" class="btn btn-dark"data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">Cadastar</button>
    </form>