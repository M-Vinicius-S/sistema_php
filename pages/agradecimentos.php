<?php
include("cabecalho.php");
include("../data/conect.php");

$escolha = $_GET["acao"];

//echo "Ação: ".$escolha;

Inserir($escolha);

header("refresh: 5; url=../index.php");

?>
<link rel="stylesheet" href="../css/style.css">
<main>
    <section class="row">

        <div class="col-sm-12 text-center">
            <img src="../img/joinha.png" alt="" width="15%">
            <h6>OBRIGADO POR AVALIAR!!<br> SUA OPNIÃO É MUITO IMPORTANTE</h6>
            <div class="spinner-border"></div>

        </div>
    </section>

</main>
<?php
include("rodape.php");
?>