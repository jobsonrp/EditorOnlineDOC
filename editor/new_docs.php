<?php

if(isset($_POST['nomeArquivoNew'])){
  $nomeArquivo = $_POST['nomeArquivoNew'];
}

if(isset($_POST['enterNew'])){
  $entrarNew = $_POST['enterNew'];
}

if (isset($entrarNew)) {
  $conteudoArquivo = '';
  include("connect.inc");
  $sql="INSERT INTO arquivos (nome, conteudo) VALUES ('$nomeArquivo','$conteudoArquivo')";
  if (mysqli_query($connect, $sql)) {
    echo("<script language='JavaScript'>
    var x = document.getElementById('infobd');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    }
    </script>");
    $_SESSION["nome"] = $nomeArquivo;
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connect);
  }
  mysqli_close($connect);
}

?>