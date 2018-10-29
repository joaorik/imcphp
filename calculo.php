<?php
//require 'class/IMC.php';
//$imc = new IMC();
//$imc->pegaDados($_POST)

require 'functions.php';

$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$idade = $_POST['idade'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$atividade = $_POST['nome'];

if ($altura && $peso) {
    $imc = round($peso / ($altura * $altura), 2);
    $calcula = imc($imc);
} else {
    $calcula = "Não foi possível calcular";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Calculora IMC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formoid-solid-green.css" type="text/css" />
</head>

<body class="blurBg-false" style="background-color:#EBEBEB">

    <form class="formoid-solid-green formulario">
        <div class="title">
            <h2>Olá, <?php echo $nome; ?></h2>
        </div>
        <div class="element-input">
            <p>Seu IMC é: <?php echo $calcula; ?></p>
        </div>
        <div class="submit"><a href="index.php">Voltar</a></div>
    </form>

</body>
</html>
