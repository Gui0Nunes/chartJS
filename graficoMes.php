<?php
include_once("./GraficoMesConfig.php");
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
<a href="./"><button class="gerarGrafico">Voltar</button></a>

    <div class="total">
     <div class="calendario">
      <input type="month" value="<?php echo $dataGet3; ?>" id="calendario" onChange="calendarioMudou()">
     </div> 
    <div class="grafico">
  <canvas id="myChart"></canvas>
</div>
</div>
<?php
//data:  '['.$listaDemandasTotal.']'
/* [<?php echo $listaCorMes; ?>], */
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById("myChart");

  const data = {
  labels: [ <?php echo $listaDiasMes; ?> ],
  datasets: [
  {
    type: "line",
    label: "Limite",
    data: [ <?php echo $listaGraphLine1str; ?> ],
    fill: false,
    borderColor:  [ <?php echo $listaCor3str; ?> ],
    backgroundColor:  [ <?php echo $listaCor3str; ?> ],
  }, 
  {
    type: "bar",
    label: "Info1",
    
    data: [ <?php echo $listaGraphBar1str; ?> ],
    borderColor: [ <?php echo $listaCor1str; ?> ],
    backgroundColor: [ <?php echo $listaCor1str; ?> ],
  },
  
  {
    type: "bar",
    label: "Info2",
    
    data: [ <?php echo $listaGraphBar2str; ?> ],
    borderColor: [ <?php echo $listaCor2str; ?> ],
    backgroundColor: [ <?php echo $listaCor2str; ?> ],
  },

  ]
};

  new Chart(ctx, 
  {
    type: "bar",
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
 


    
</body>
</html>