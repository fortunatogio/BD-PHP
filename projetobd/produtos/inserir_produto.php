<?php
    require_once("../cabecalho.php");
?>

    <h3>Inserir Produto</h3>
    <form>
        <div class="row">
            <div class="col">
                <label for="nome" class="label-form">Informe o nome</label>
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="label-form">Informe a Descrição</label>
                <input type="text" class="form-control" name="descricao">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="valor" class="label-form">Informe o valor</label>
                <input type="text" class="form-control" name="valor">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="categoria" class="label-form">Selecione a categoria</label>
                <select class="form-select" name="categoria">
                   <?php
                        $linhas = retornarCategorias();
                        while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                            echo "<option value='{$l['id']}'>{$l['descricao']}</option>";
                        }
                   ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success mt-3">Salvar</button>
            </div>
        </div>
    </form>

<?php
    require_once("../rodape.html");
