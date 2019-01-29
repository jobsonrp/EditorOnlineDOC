<?php

if(isset($_POST['enterSave'])){
  $entrarSave = $_POST['enterSave'];
}

if (isset($entrarSave)) {
  if(isset($_POST['nomeArquivo'])){
    $nomeArquivo = $_POST['nomeArquivo'];
  }
  if(isset($_POST['input'])){
    $conteudoArquivo=$_POST['input'];
  }
  include("connect.inc");
  $sql = "UPDATE arquivos SET conteudo='$conteudoArquivo' WHERE nome='$nomeArquivo'";
  if (mysqli_query($connect, $sql)) {
    echo("<script language='JavaScript'>
          var x = document.getElementById('infobd');
          if (x.style.display === 'none') {
              x.style.display = 'block';
          }
        </script>");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connect);
  }
  mysqli_close($connect);
}

?>