<?php
if (isset($_GET['data'])) {
    $data = $_GET['data']; //regata data da query na URL
}else{
    //caso não exista a query solicitada, verificamos a data atual
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m'); //data com ano-mes
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charts JS</title>
    <link rel="stylesheet" href="estiloGrafico.css">
    <script type="text/javascript" src="js.js"></script>
</head>

<body>

    <div class="total">
        <div class="calendario">
            <label class="periodo" for="calendario">Defina o perído</label>
            <input type="month" value="<?php echo $data; ?>" id="calendario" onChange="calendarioMudou()">
        </div>
        <div class="link">
            <a href="graficoMes.php?data=<?php echo $data; ?>"><button class="gerarGrafico" id="gerarGrafico">Gerar
                    gráfico</button></a>
        </div>
    </div>



</body>

</html>