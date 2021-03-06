<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Calculora IMC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formoid-solid-green.css" type="text/css" />
</head>

<body class="blurBg-false" style="background-color:#EBEBEB">

    <form class="formoid-solid-green formulario" action="calculo.php" method="post">
        <div class="title">
            <h2>Calculo IMC</h2>
        </div>
        <div class="element-input"><label class="title">Nome <span class="required">*</span></label>
            <div class="item-cont"><input class="large" type="text" name="nome" required="required" placeholder="Nome" /><span class="icon-place"></span></div>
        </div>
        <div class="element-radio"><label class="title">Sexo<span class="required">*</span></label>
            <div class="column column2"><label><input type="radio" name="sexo" value="mulher" required="required" /><span>Mulher</span></label></div><span class="clearfix"></span>
            <div class="column column2"><label><input type="radio" name="sexo" value="homem" required="required" /><span>Homem</span></label></div><span class="clearfix"></span>
        </div>
        <div class="element-input"><label class="title">Idade <span class="required">*</span></label>
            <div class="item-cont"><input class="large" type="text" name="idade" required="required" placeholder="Idade" /><span class="icon-place"></span></div>
        </div>
        <div class="element-input"><label class="title">Altura <span class="required">*</span></label>
            <div class="item-cont"><input class="large" type="text" name="altura" required="required" placeholder="Alura" /><span class="icon-place"></span></div>
        </div>
        <div class="element-input"><label class="title">Peso <span class="required">*</span></label>
            <div class="item-cont"><input class="large" type="text" name="peso" required="required" placeholder="Peso" /><span class="icon-place"></span></div>
        </div>
        <div class="element-radio"><label class="title">Atividade Física <span class="required">*</span></label>
            <div class="column column3"><label><input type="radio" name="atividade" value="sedentaria" required="required" /><span>Sedentária</span></label></div><span class="clearfix"></span>
            <div class="column column3"><label><input type="radio" name="atividade" value="moderada" required="required" /><span>Moderada</span></label></div><span class="clearfix"></span>
            <div class="column column3"><label><input type="radio" name="atividade" value="intensa" required="required" /><span>Intensa</span></label></div><span class="clearfix"></span>
        </div>
        <div class="submit"><input type="submit" name="submit" value="Calcular" /></div>
    </form>

</body>
</html>
