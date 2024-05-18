<?php
    require_once("../cabecalho.php");
?>

    <h3>Excluir Produto</h3>
    <form>
        <div class="row">
            <div class="col">
                <p>Deseja realmente excluir?</p>
                <label for="nome" class="label-form">Informe o nome</label>
                <input type="text" class="form-control" name="nome" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="label-form">Informe a Descrição</label>
                <input type="text" class="form-control" name="descricao" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="valor" class="label-form">Informe o valor</label>
                <input type="text" class="form-control" name="valor" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="categoria" class="label-form">Selecione a categoria</label>
                <select class="form-select" name="categoria" disabled>
                    <option value="">Selecione...</option>
                    <option value="1">Livro</option>
                    <option value="2">Perecível</option>
                    <option value="3">Material Esportivo</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-danger mt-3">Excluir</button>
            </div>
        </div>
    </form>

<?php
    require_once("../rodape.html");
