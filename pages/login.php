<?php
include("../pages/cabecalho.php");
?>
<link rel="stylesheet" href="../css/style.css">
<main>
    <section class="row">
        <div class="col-sm-6">
            <img src="../img/senha.png" alt="" width="100%">
        </div>


        <div class="col-sm-6">
            <h4>Autenticação</h4>
            <form action="/action_page.php">
                <div class="mb-3 mt-3">
                    <label for="usario" class="form-label">Usuário:</label>
                    <input for="passaowrd" class="form-control" id="usuario" placeholder="login...">
                </div>
                <div class="mb-3">
                    <label for="usario" class="form-label">Senha:</label>
                    <input for="passaowrd" class="form-control" id="usuario" placeholder="senha...">
                </div>
                <button type="submit" class="btn btn-primary">Logar</button>
            </form>
        </div>
    </section>

</main>

<?php
include("../pages/rodape.php");
?>