<?php

$dataGet = trim($_GET['data']);//resgata data via get
$dataGet2 = date('Y-m-d', strtotime($dataGet)); //data com ano-mes-dia
$dataGet3 = date('Y-m', strtotime($dataGet)); //data com ano-mes
$dia = 1; //inicia com dia primeiro sempre
$ano = date('Y',strtotime($dataGet2)); //ano
$mes = date('m',strtotime($dataGet2)); //mês

//Função para saber quantos dias tem o mês em questão
$numDias = cal_days_in_month(CAL_GREGORIAN, $mes, $ano); // 31, 30 ou 28

//Construções dos Arrays
$v = 1; //Define a variavel e insere valor inicial para array dos dias
$i = 0; //Define a var e insere valor inicial para o laço de repetição
$bar1 = 35; //define var do grafico bar 1 e insere valor inicial
$bar2 = 25; //define var do grafico bar 2 e insere valor inicial
$line1 = 60; //Valores gráfico linha -> limite
$cor1 = "'#2521e6'"; //cor em hexadecimal
$cor2 = "'#FF6347'";
$cor3 = "'#B22222'";
$qtd = $numDias; //define a var qtd a alimenta com quantidade de dias do mês em questão
$listaDias = []; //define a var e alimenta com array vazio
$listaCor1 = [];
$listaCor2 = [];
$listaCor3 = [];
$listaGraphBar1 = [];
$listaGraphBar2 = [];
$listaGraphLine1 = [];

//Monta as informações dos dias, embaixo do gráfico
while($i < $qtd){
  array_push($listaDias,$v);
  $v++;  $i++;
}
$listaDiasMes = implode(",", $listaDias);

//Laço de repetição para montar informações principais meio gráfico
while ($dia < $numDias) {


  //alimenta de forma aleatória os gráficos de barra
  if($dia  % 2 == 0){
    //par
    $bar1  = $bar1 + 12;
    $bar2  = $bar2 + 9;
  }else{
    //impar
    $bar1  = $bar1 - 5;
    $bar2  = $bar2 - 5;
  }
    //No dia 7 e 13 diminuir 30% do valor
    if(($dia == 7) || ($dia == 13)){
      $bar1  = $bar1 * 0.7;
      $bar2  = $bar2 * 0.7;
    }
    
  //a partir do dia 16 começa a diminuir
  if($dia > 16){
    $bar1  = $bar1 - 3;
    $bar2  = $bar2 - 2;
  }
 
  
  

  //alimenta o array com as demandas do gráfico
  array_push($listaGraphBar1,$bar1);
  array_push($listaGraphBar2,$bar2);
  array_push($listaGraphLine1,$line1);
  array_push($listaCor1,$cor1);
  array_push($listaCor2,$cor2);
  array_push($listaCor3,$cor3);


  $dia++;
}

$listaGraphBar1str = implode(",", $listaGraphBar1);
$listaGraphBar2str = implode(",", $listaGraphBar2);
$listaGraphLine1str = implode(",", $listaGraphLine1);
$listaCor1str = implode(",", $listaCor1);
$listaCor2str = implode(",", $listaCor2);
$listaCor3str = implode(",", $listaCor3);
