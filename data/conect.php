<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=satisfacao_bd','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado com Sucesso!!! <br>";
}
catch(Exception $e){
    echo "Erro de conexão <br>";
}
//função para inserir dados no banco

function Inserir($escolha){
    $pdo = $GLOBALS['pdo'];
    $data = new Datetime('now', new DateTimeZone('America/Araguaina'));
    $sql = $pdo->prepare("INSERT INTO avalicao VALUES (null,?,?)");
    $sql->execute(array($escolha, $data->format('Y-m-d H:i:s')));
}

//função para consultar dados no banco
function Consultar($opcao){
    $pdo = $GLOBALS{'pdo'};
    $sql = $pdo->execute(array($opcao));
    $retorno = $sql->fetchal()
 function Consultar($opcao)
 $retorno = $sql->tetchAll();

 foreach($retorno as $key => $value){
    echo $value['COUNT(*)'];
 }
}
?>
