<?php
    require_once("../cabecalho.php");
?>

    <h3>Alterar Produto</h3>
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
                    <option value="">Selecione...</option>
                    <option value="1">Livro</option>
                    <option value="2">Perecível</option>
                    <option value="3">Material Esportivo</option>
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
