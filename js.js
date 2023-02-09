//liberar o bloco de código abaixo, após carregamento da página
window.onload = function () {
  //Pegar query na URL
  const check = new URLSearchParams(window.location.search);
  const checkURL = check.get('data');//consultar query "data" e insere em checkURL

  //verifica se checkURL está vazia (caso sim é porque a query data não existe ou está vazio)
  if (checkURL == null) {
    //bloco de código para pegar ano-mes
    const hoje = new Date();
    var mes = String(hoje.getMonth() + 1).padStart(2, '0');
    var ano = hoje.getFullYear();
    //cria variavel com valor da query para preencher na URL
    var hoje1 = '?data=' + ano + '-' + mes;
    //acessa url com a query fabricada acima dentro da var hoje1
    window.location.replace(hoje1);
  }
}

  function calendarioMudou() {

    const dataUrl1 = new URLSearchParams(window.location.search);
    const dataUrl2 = dataUrl1.get('data');
    //console.log(dataUrl2)

    var data_url_atual = '?data=' + dataUrl2;
    console.log(data_url_atual)

    var dataCalentario = document.getElementById('calendario').value;
    // console.log(dataCalentario)

    var dataurl_antiga = 'data=' + dataUrl2
    var dataurl_nova = 'data=' + dataCalentario
    var url_replace = data_url_atual.replace(dataurl_antiga, dataurl_nova);
    console.log(url_replace)
    window.location.replace(url_replace);
  }

 